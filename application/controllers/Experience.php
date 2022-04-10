<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Experience extends CI_Controller
{
    public $created_at;
    public $apikey;
    public $userinfo;
    public function __construct()
    {
        parent::__construct();
        $this->load->helper(array('form', 'url'));
        $this->load->library('form_validation');
        $this->load->helper('download');

        $this->load->model('MainModel', 'admin');
        date_default_timezone_set("Asia/Kolkata");
        $this->created_at = Date('Y-m-d H:i:s', time());
        if (!$this->session->userdata('partner')) {
            redirect('partner/login');
        }else{
            $this->userinfo=$this->session->userdata('partner');
        }
    }

    public function index()
    {
        $userinfo = $this->userinfo;
        $this->load->view('partner/experience', compact('userinfo'));
    }

    public function comingSoon(){
        $this->load->view('coming-soon');
    }

    public function experienceGallery(){
        $this->load->view('partner/experience-gallery');
    }

    public function experienceList(){
        $this->load->view('partner/experience-list');
    }
}
