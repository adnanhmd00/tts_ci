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
      /* API URL */
       $url = 'https://flight.srdvtest.com/v5/rest/Search';
       /* Init cURL resource */
       $ch = curl_init($url);;
       /* pass encoded JSON string to the POST fields */
       curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($inputs));
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
