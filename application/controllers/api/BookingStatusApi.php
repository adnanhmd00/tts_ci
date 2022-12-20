<?php
   
   require APPPATH . '/libraries/REST_Controller.php';
   use Restserver\Libraries\REST_Controller;
     
class BookingStatusApi extends REST_Controller {
    
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
        $data = $this->db->get("booking_status")->row_array();
        $this->response($data, REST_Controller::HTTP_OK);
	}
      
    /**
     * Get All Data from this method.
     *
     * @return Response
    */
    public function index_post()
    {
        $input = $this->input->post();
        $this->db->insert('cab_enquiry',$input);
     
        $this->response(['Cab Enquiry created successfully.'], REST_Controller::HTTP_OK);
    } 
     
    /**
     * Get All Data from this method.
     *
     * @return Response
    */
    public function index_put()
    {
        $id = 1;
        $input = $this->put();
        $data = $this->db->get("booking_status")->row_array();
        if($data['status'] == 1){
            $this->db->update('booking_status', array('status'=>0), array('id'=>$id));
        }else{
            $this->db->update('booking_status', array('status'=>1), array('id'=>$id));
        }
     
        $this->response(['Booking Status updated successfully.'], REST_Controller::HTTP_OK);
    }
     
    /**
     * Get All Data from this method.
     *
     * @return Response
    */
    public function index_delete($id)
    {
        $this->db->delete('cab_enquiry', array('id'=>$id));
       
        $this->response(['Cab Enquiry deleted successfully.'], REST_Controller::HTTP_OK);
    }
    	
}