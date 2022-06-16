<?php
defined('BASEPATH') or exit('No direct script access allowed');

class RestApi extends CI_Controller
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
        $this->apikey="be905020dbc0b98405e688b05fcebcc5";

        // if (empty($this->input->post('apikey')) || empty($this->input->post('requestType'))) {
            // $response['error_code'] = '1';
            // $response['response_string'] = 'Requirement Failed';
            // header('Content-Type: application/json');
            // echo json_encode($response);
            // exit;
        // }
        // if (md5($this->input->post('apikey')) != $this->apikey) {
        //     $response['error_code'] = '1';
        //     $response['response_string'] = 'Key Mismatch';
        //     header('Content-Type: application/json');
        //     echo json_encode($response);
        //     exit;
        // }

    }

    public function login()
    {
        $this->form_validation->set_rules('phone', 'Phone', 'required|max_length[10]');
        $this->form_validation->set_rules('password', 'Password', 'required|max_length[10]');

        if ($this->form_validation->run() == false) {
            $response['error_code'] = 1;
            $response['response_string'] = validation_errors();
        } else {
            $phone = $this->input->post('phone');
            // $type = $this->input->post('type');
            $pass = md5($this->input->post('password'));
            // $data = $this->admin->getRawRow("Select * from partner where mobile='$phone' AND pass='$pass' and type='$type' and status='approved' AND deleted_at IS NULL");
            $data = $this->admin->getRawRow("Select * from partner where mobile='$phone' AND pass='$pass' AND deleted_at IS NULL");
            if ($data == false) {
                $response['error_code'] = 1;
                $response['response_string'] = 'Credentials Mismatched';
            } else {
                $response['error_code'] = 0;
                $response['response_string'] = 'OK';
                $response['data'] = $data;
            }
        }
        // if ($this->input->post('requestType') == 1) {
            header('Content-Type: application/json');
            echo json_encode($response);
        // } else if ($this->input->post('requestType') == 2) {

        // }
    }

    public function register()
    {
        $this->form_validation->set_rules('name', 'Name', 'required');
        $this->form_validation->set_rules('pass', 'Password', 'required');
        $this->form_validation->set_rules('mobile', 'Mobile', 'required|max_length[10]');
        $this->form_validation->set_rules('noe', 'Company', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required');

        if ($this->form_validation->run() == false) {
            $response['error_code'] = 1;
            $response['response_string'] = validation_errors();
        } else {
            $data['name'] = $this->input->post('name');
            $data['email'] = $this->input->post('email');
            $data['noe'] = $this->input->post('noe');
            $data['pass'] = md5($this->input->post('pass'));
            $data['mobile'] = $this->input->post('mobile');
            $record_exists = $this->admin->record_exists( array('mobile'=>$data['mobile']));
            if($record_exists){
                $response['response_string'] = 'User Already Exists';
            }else{
                $insert = $this->db->insert('partner', $data);
                if($insert){
                    $response['error_code'] = 0;
                    $response['response_string'] = 'OK';
                    $response['data'] = $data;
                }
            }
        }
        header('Content-Type: application/json');
        echo json_encode($response);
    }

}
