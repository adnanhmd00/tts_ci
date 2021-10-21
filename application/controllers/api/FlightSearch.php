<?php

   require APPPATH . '/libraries/REST_Controller.php';
   use Restserver\Libraries\REST_Controller;

class FlightSearch extends REST_Controller {

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
	public function index_get()
	{
	}

    /**
     * Get All Data from this method.
     *
     * @return Response
    */
    public function index_post()
    {
      $inputs = $this->input->post();
      $data = [
        'AdultCount'            => $this->input->post('AdultCount'),
        'ChildCount'            => $this->input->post('ChildCount'),
        'ClientId'           => $this->input->post('ClientId'),
        'EndUserIp'           => $this->input->post('EndUserIp'),
        'InfantCount'           => $this->input->post('InfantCount'),
        'JourneyType'           => $this->input->post('JourneyType'),
        'Password'           => $this->input->post('Password'),
        'Segments'           => [
          [
            'Destination' => $this->input->post('Destination_1'),
            'FlightCabinClass' => $this->input->post('FlightCabinClass_1'),
            'Origin' => $this->input->post('Origin_1'),
            'PreferredArrivalTime' => $this->input->post('PreferredArrivalTime_1'),
            'PreferredDepartureTime' => $this->input->post('PreferredDepartureTime_1'),
          ],
          [
            'Destination' => $this->input->post('Destination_2'),
            'FlightCabinClass' => $this->input->post('FlightCabinClass_2'),
            'Origin' => $this->input->post('Origin_2'),
            'PreferredArrivalTime' => $this->input->post('PreferredArrivalTime_2'),
            'PreferredDepartureTime' => $this->input->post('PreferredDepartureTime_2'),
          ]
        ],
        'UserName' => $this->input->post('UserName')
      ];

      /* API URL */
       $url = 'https://flight.srdvtest.com/v5/rest/Search';
       /* Init cURL resource */
       $ch = curl_init($url);;
       /* pass encoded JSON string to the POST fields */
       curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));
       curl_setopt($ch, CURLOPT_POST, 1);
       // curl_setopt($ch, CURLOPT_USERPWD, "api-key: rzp_test_1U3fdUZx6lMZ13-iCS5tAavgvQ7B9mlv5EZFPio");
       // curl_setopt($ch, CURLOPT_USERPWD, 'rzp_test_1U3fdUZx6lMZ13' . ':' . 'iCS5tAavgvQ7B9mlv5EZFPio');
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
        if (curl_errno($ch)) {
            echo 'Error:' . curl_error($ch);
        }

       /* close cURL resource */
       curl_close($ch);

       $this->response(['status' => 'success','data' => $result], REST_Controller::HTTP_OK);
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
