<?php

   require APPPATH . '/libraries/REST_Controller.php';
   use Restserver\Libraries\REST_Controller;

class UserProfile extends REST_Controller {

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
            $data = $this->db->get_where("users_profile", ['id' => $id])->row_array();
        }else{
            $data = $this->db->get("users_profile")->result();
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
        if(isset($inputs['name']) && isset($inputs['email']) && isset($inputs['contact'])){
          // check if e-mail address is well-formed
          if (!filter_var($inputs['email'], FILTER_VALIDATE_EMAIL)) {
            $this->response(['Wrong Email !!'], REST_Controller::HTTP_OK);
          }
          $data = [
            'name'            => !empty($inputs['name'])  ? $inputs['name'] : '',
            'email'           => !empty($inputs['email']) ? $inputs['email'] : '',
            'contact'         => !empty($inputs['contact']) ? $inputs['contact'] : '',
            'dob'             => !empty($inputs['dob']) ? $inputs['dob'] : '',
            'gender'          => !empty($inputs['gender']) ? $inputs['gender'] : '',
            'marital_status'  => !empty($inputs['marital_status']) ? $inputs['marital_status'] : '',
            'aniversary_date' => !empty($inputs['aniversary_date']) ? $inputs['aniversary_date'] : '',
            'passport_number' => !empty($inputs['passport_number']) ? $inputs['passport_number'] : '',
            'nationality'     => !empty($inputs['nationality']) ? $inputs['nationality'] : '',
            'issuing_country' => !empty($inputs['issuing_country']) ? $inputs['issuing_country'] : '',
            'expiry'          => !empty($inputs['expiry']) ? $inputs['expiry'] : '',
          ];
        $this->db->insert('users_profile',$data);

        $this->response(['Profile Created Successfully.'], REST_Controller::HTTP_OK);
    }

    /**
     * Get All Data from this method.
     *
     * @return Response
    */
    public function index_put($id)
    {
        $inputs = $this->put();
        if(isset($inputs['name']) && isset($inputs['email']) && isset($inputs['contact'])){
          // check if e-mail address is well-formed
          if (!filter_var($inputs['email'], FILTER_VALIDATE_EMAIL)) {
            $this->response(['Wrong Email !!'], REST_Controller::HTTP_OK);
          }
          $data = [
            'name'            => !empty($inputs['name'])  ? $inputs['name'] : '',
            'email'           => !empty($inputs['email']) ? $inputs['email'] : '',
            'contact'         => !empty($inputs['contact']) ? $inputs['contact'] : '',
            'dob'             => !empty($inputs['dob']) ? $inputs['dob'] : '',
            'gender'          => !empty($inputs['gender']) ? $inputs['gender'] : '',
            'marital_status'  => !empty($inputs['marital_status']) ? $inputs['marital_status'] : '',
            'aniversary_date' => !empty($inputs['aniversary_date']) ? $inputs['aniversary_date'] : '',
            'passport_number' => !empty($inputs['passport_number']) ? $inputs['passport_number'] : '',
            'nationality'     => !empty($inputs['nationality']) ? $inputs['nationality'] : '',
            'issuing_country' => !empty($inputs['issuing_country']) ? $inputs['issuing_country'] : '',
            'expiry'          => !empty($inputs['expiry']) ? $inputs['expiry'] : '',
          ];
        $this->db->update('users_profile', $data, array('id'=>$id));

        $this->response(['Profile updated successfully.'], REST_Controller::HTTP_OK);
    }

    /**
     * Get All Data from this method.
     *
     * @return Response
    */
    public function index_delete($id)
    {
        $this->db->delete('users_profile', array('id'=>$id));

        $this->response(['Profile deleted successfully.'], REST_Controller::HTTP_OK);
    }

}
