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
        $inputs = $this->input->post();
        $data = [
          'user_id'            => $this->input->post('user_id'),
          'flight_pnr'           => $this->input->post('flight_pnr'),
          'flight_booking_id'           => $this->input->post('flight_booking_id'),
          'flight_name'           => $this->input->post('flight_name'),
          'payment_type'           => $this->input->post('payment_type'),
          'payment_status'           => $this->input->post('payment_status'),
          'payment_details'           => $this->input->post('payment_details'),
        ];
        $this->db->insert('bookings',$data);
        $id = $this->db->insert_id();
        $this->response(['status' => 'success','boooking_id' => $id, 'message' => 'A new Booking Created Successfully.'], REST_Controller::HTTP_OK);
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
