<?php
defined('BASEPATH') or exit('No direct script access allowed');

class AppAppLogin extends CI_Controller
{
    public $created_at;
    public $apikey;
    public function __construct()
    {
        parent::__construct();
        $this->load->helper(array('form', 'url'));
        $this->load->library('form_validation');
        $this->load->model('MainModel', 'admin');
        date_default_timezone_set("Asia/Kolkata");
        $this->created_at = Date('Y-m-d H:i:s', time());
        
    }
    public function allBookings($id){
        $this->db->where("user_id", $id);
        $data = $this->db->get("bookings");
        echo json_encode($data->result());
    }
    public function login()
    {
        if (!$this->session->userdata('partner')) {
            $this->load->view('partner/app/login');
        } else {
            redirect('app');
        }
    }

    public function loginForm()
    {

        $url = base_url() . 'RestApi/login';
        $phone=$this->input->post('phone');
        $postdata = http_build_query(
            array(
                'apikey' => 'vibhu@123',
                'requestType' => '1',
                'phone' => $this->input->post('phone'),
                'password' => $this->input->post('password'),
                'type'=>'partner'
            )
        );
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $postdata);
        $result = curl_exec($ch);
        $data = json_decode($result);
        curl_close($ch);
        if ($data->error_code == 0) {
            $manager = $this->admin->getRawRow("Select * from partner where mobile='$phone' and type='partner'");
            $this->session->set_userdata('partner', $manager);
            redirect('app');
            // if($manager->type=='partner'){redirect('partner');}
            // else if($manager->type=='seller'){redirect('seller');}
        } else {
            $this->failed($data->response_string);
            redirect('app/login');
        }

    }
}
