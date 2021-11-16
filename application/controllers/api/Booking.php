<?php

   require APPPATH . '/libraries/REST_Controller.php';
   use Restserver\Libraries\REST_Controller;

class Booking extends REST_Controller {

	  /**
     * Get All Data from this method.
     *
     * @return Response
    */
    public function __construct() {
       parent::__construct();
       $this->load->database();
    }

    /**
     * Get All Data from this method.
     *
     * @return Response
    */
	public function index_get($id = 0)
	{
        if(!empty($id)){
            $data = $this->db->get_where("bookings", ['user_id' => $id])->row_array();
        }else{
            $data = $this->db->get("bookings")->result();
        }
        $this->response($data, REST_Controller::HTTP_OK);
	}

    /**
     * Get All Data from this method.
     *
     * @return Response
    */
    public function index_post()
    {
        $this->load->helper('string');
        $apiKey = $this->input->post('API-Token');
        $data = [
          'ClientId'                => $this->input->post('ClientId'),
          'EndUserIp'           => $this->input->post('EndUserIp'),
          'UserName'          => $this->input->post('UserName'),
          'Password'           => $this->input->post('Password'),
          'SrdvType'            => $this->input->post('SrdvType'),
          'SrdvIndex'           => $this->input->post('SrdvIndex'),
          'TraceId'               => $this->input->post('TraceId'),
          'ResultIndex'        => $this->input->post('ResultIndex'),
          'Passengers'        => [
            [
              'Title'                 => $this->input->post('Title'),
              'FirstName'      => $this->input->post('FirstName'),
              'LastName'      => $this->input->post('LastName'),
              'PaxType'         => $this->input->post('PaxType'),
              'DateOfBirth'   => $this->input->post('DateOfBirth'),
              'Gender'           => $this->input->post('Gender'),
              'PassportNo'   => $this->input->post('PassportNo'),
              'PassportExpiry' => $this->input->post('PassportExpiry'),
              'AddressLine1' => $this->input->post('AddressLine1'),
              'City'                   => $this->input->post('City'),
              'CountryCode'  => $this->input->post('CountryCode'),
              'CountryName' => $this->input->post('CountryName'),
              'ContactNo'      => $this->input->post('ContactNo'),
              'Email'               => $this->input->post('Email'),
              'IsLeadPax'      => $this->input->post('IsLeadPax'),
              'Fare' => [
                'BaseFare'      => $this->input->post('BaseFare'),
                'Tax'                => $this->input->post('Tax'),
                'TransactionFee' => $this->input->post('TransactionFee'),
                'YQTax'                 => $this->input->post('YQTax'),
                'AdditionalTxnFeeOfrd' => $this->input->post('AdditionalTxnFeeOfrd'),
                'AdditionalTxnFeePub' => $this->input->post('AdditionalTxnFeePub'),
                'AirTransFee' => $this->input->post('AirTransFee')
              ],
            ],
          ],
        ];
        /* API URL */
         $url = 'https://flight.srdvtest.com/v5/rest/TicketLCC';
         /* Init cURL resource */
         $ch = curl_init($url);;
         /* pass encoded JSON string to the POST fields */
         curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));
         curl_setopt($ch, CURLOPT_POST, 1);
         // curl_setopt($ch, CURLOPT_USERPWD, "api-key: rzp_test_1U3fdUZx6lMZ13-iCS5tAavgvQ7B9mlv5EZFPio");
         // curl_setopt($ch, CURLOPT_USERPWD, 'rzp_test_1U3fdUZx6lMZ13' . ':' . 'iCS5tAavgvQ7B9mlv5EZFPio');
        $headers = array(
          'Content-Type: application/json',
          'Accept: application/json',
          'API-Token:' .$apiKey
        );
        // $headers[] = 'Accept: application/json';
        // $headers[] = 'Content-Type: application/json';
         /* set the content type json */
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

         /* set return type json */
         curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

         /* execute request */
         $result = curl_exec($ch);
         // $result = explode(',', $result);
         // $result = strip_slashes($result);
          if (curl_errno($ch)) {
              echo 'Error:' . curl_error($ch);
          }
         /* close cURL resource */
          curl_close($ch);
          $response = json_decode($result, true);
          $res = $response['Response'];
          $flights = $res['FlightItinerary'];
          $segment = $flights['Segments']['0'];
          $airline = $segment['Airline'];
          print_r($res['PNR']);
          print_r($res['BookingId']);
          print_r($airline['AirlineName']);
          $data = [
            'user_id'            => $this->input->post('user_id'),
            'amount'            => $this->input->post('amount'),
            'flight_pnr'           => $res['PNR'],
            'flight_booking_id'           => $res['BookingId'],
            'flight_name'           => $airline['AirlineName'],
            'payment_type'           => $this->input->post('payment_type'),
            'payment_status'           => $this->input->post('payment_status'),
            'payment_details'           => $this->input->post('payment_details'),
          ];
          $this->db->insert('bookings',$data);
          $id = $this->db->insert_id();

        $this->response(['status' => 'success','booking_id' => $id, 'data' =>$result , 'message' => 'A new Booking Created Successfully.'], REST_Controller::HTTP_OK);
      }

    /**
     * Get All Data from this method.
     *
     * @return Response
    */
    public function index_put($id)
    {
      }

    /**
     * Get All Data from this method.
     *
     * @return Response
    */
    public function index_delete($id)
    {
    }

}
