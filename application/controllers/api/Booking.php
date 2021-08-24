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
            $data = $this->db->get_where("bookings", ['id' => $id])->row_array();
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
        $inputs = $this->input->post();
        $data = [
          'user_id'            => $this->input->post('user_id'),
          'amount'            => $this->input->post('amount'),
          'flight_pnr'           => $this->input->post('flight_pnr'),
          'flight_booking_id'           => $this->input->post('flight_booking_id'),
          'flight_name'           => $this->input->post('flight_name'),
          'payment_type'           => $this->input->post('payment_type'),
          'payment_status'           => $this->input->post('payment_status'),
          'payment_details'           => $this->input->post('payment_details'),
        ];
        $this->db->insert('bookings',$data);
        $id = $this->db->insert_id();
        $amount = $this->input->post('amount');
          /* API URL */
         $url = 'https://api.razorpay.com/v1/orders';
         /* Init cURL resource */
         $ch = curl_init($url);
         /* Array Parameter Data */
         $data = ['amount'=> $amount, 'currency'=>'INR'];
         /* pass encoded JSON string to the POST fields */
         curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));
         curl_setopt($ch, CURLOPT_POST, 1);
         // curl_setopt($ch, CURLOPT_USERPWD, "api-key: rzp_test_1U3fdUZx6lMZ13-iCS5tAavgvQ7B9mlv5EZFPio");
         curl_setopt($ch, CURLOPT_USERPWD, 'rzp_test_1U3fdUZx6lMZ13' . ':' . 'iCS5tAavgvQ7B9mlv5EZFPio');
        $headers = array();
        $headers[] = 'Accept: application/json';
        $headers[] = 'Content-Type: application/json';
         /* set the content type json */
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

         /* set return type json */
         curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

         /* execute request */
         $result = curl_exec($ch);
         // $result = explode(',', $result);
         // $result = strip_slashes($result);
         $result = strip_quotes($result);
         $result = str_replace(array('{','}'), '', $result);
         $result = explode(',', $result);
         $result = str_replace('id:', '', $result);
          if (curl_errno($ch)) {
              echo 'Error:' . curl_error($ch);
          }

         /* close cURL resource */
         curl_close($ch);

          $this->response(['status' => 'success','boooking_id' => $id, 'order_id' => $result[0], 'message' => 'A new Booking Created Successfully.'], REST_Controller::HTTP_OK);
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
