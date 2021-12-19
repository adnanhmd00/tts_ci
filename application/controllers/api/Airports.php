<?php
   
   require APPPATH . '/libraries/REST_Controller.php';
   use Restserver\Libraries\REST_Controller;
     
class Airports extends REST_Controller {
    
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
	public function airport_name_get($name)
	{
        if(!empty($name)){
            $data = $this->db->get_where("airports", ['cityName' => $name])->row_array();
            if($data == ''){
                $data = $this->db->get_where("airports", ['code' => $name])->row_array();
                if($data == ''){
                    $data = $this->db->get_where("airports", ['cityCode' => $name])->row_array();
                    if($data == ''){
                        $data = $this->db->get_where("airports", ['cityName' => $name])->row_array();
                        if($data == ''){
                            $data = $this->db->get_where("airports", ['countryName' => $name])->row_array();
                            if($data == ''){
                                $data = $this->db->get_where("airports", ['countryCode' => $name])->row_array();
                            }if($data == ''){
                                $data = "Not Found";
                            }
                        }
                    }
                }
                
            }
        }
     
        $this->response($data, REST_Controller::HTTP_OK);
	}
}