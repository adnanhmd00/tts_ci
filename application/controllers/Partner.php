<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Partner extends CI_Controller
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

    public function profile(){
        $userinfo = $this->userinfo;
        $user_info = $this->admin->getRawResult("select * from partner where id= $userinfo->id");
        $this->load->view('partner/profile', compact('userinfo', 'user_info'));
    }

    public function updateProfile(){
        $userinfo = $this->userinfo;
        $user_info = $this->admin->getRawResult("select * from partner where id= $userinfo->id");
        $inputs = $this->input->post();
        $this->db->where('id',$userinfo->id)
        ->update('partner',
           array(
                 "an" => $inputs['an'],
                 "omid" => $inputs['omid'],
                 "ocn" => $inputs['ocn'],
                 "dob" => $inputs['dob'],
                 "address" => $inputs['address'],
                 "gender" => $inputs['gender'],
                 "noe" => $inputs['noe'],
                 "gst" => $inputs['gst'],
                 "email" => $inputs['email'],
                 "name" => $inputs['name'],
                 "oa" => $inputs['oa'],
                 "tof" => $inputs['tof'],
                 "st" => $inputs['st'],
                 "ct" => $inputs['ct'],
                 "web" => $inputs['web'],
                 "uata" => $inputs['uata'],
                 "bn" => $inputs['bn'],
                 "branch" => $inputs['branch'],
                 "ifsc" => $inputs['ifsc'],
                 "acno" => $inputs['acno'],
                 "ahn" => $inputs['ahn'],
                 "at" => $inputs['at'],
                 "pass" => $inputs['pass'] != '' ? md5($inputs['pass']) : $user_info[0]->pass,
           ));
        // print_r($inputs);die;
        $this->success("Profile Updated Successfully");
        redirect('partner-profile', compact('userinfo'));
        // $this->load->view('partner/profile', compact('userinfo'));
    }
    
    public function index()
    {
        $userinfo = $this->userinfo;
        $this->load->view('partner/index', compact('userinfo'));
    }

    public function comingSoon(){
        $userinfo = $this->userinfo;
        $this->load->view('partner/comming_soon', compact('userinfo'));
    }


    public function CRM(){
        $userinfo = $this->userinfo;
        $this->load->view('partner/crm', compact('userinfo'));
    }
    
    public function logout()
    {
        $this->session->unset_userdata('partner');
        redirect('partner/login');
    }

    public function postDeal()
    {
        $userinfo = $this->userinfo;
        $category_data = $this->admin->getRawResult("Select * from tbl_deal_type where deleted_at IS NULL");
        $currency_data = $this->admin->getRawResult("Select * from tbl_currency where deleted_at IS NULL");

        $this_month = mktime(0, 0, 0, date('m'), 1, date('Y'));
        for ($i = 0; $i < 12; ++$i) {
            $date[$i]['date'] = date('M Y', strtotime($i . ' month', $this_month));
        }


        if($userinfo->type=='partner'){
            $this->load->view('partner/add_deal', compact('userinfo', 'category_data', 'currency_data', 'date'));
        }
        else if($userinfo->type=='seller'){
            if($userinfo->seller_type=='HT'){

                $package_type=$this->admin->getRawResult("Select * from tbl_ht_package_type where deleted_at IS NULL");
                $trek_type=$this->admin->getRawResult("Select * from tbl_ht_trek_type where deleted_at IS NULL");

                $this->load->view('partner/add_hastrek_deal', compact('userinfo', 'package_type','trek_type', 'currency_data', 'date'));
            }
        }

    }

    public function editDeal($id)
    {
        $userinfo = $this->userinfo;
        $category_data = $this->admin->getRawResult("Select * from tbl_deal_type where deleted_at IS NULL");
        $currency_data = $this->admin->getRawResult("Select * from tbl_currency where deleted_at IS NULL");
        $this_month = mktime(0, 0, 0, date('m'), 1, date('Y'));
        for ($i = 0; $i < 12; ++$i) {
            $date[$i]['date'] = date('M Y', strtotime($i . ' month', $this_month));
        }
        $data['deal_data'] = $this->admin->getDealIdAll($id);
        $data['deal_image'] = $this->admin->getRawResult("Select * from tbl_deal_image where deal_id='$id'");
        $data['deal_dates'] = $this->admin->getRawResult("Select * from tbl_deal_dates where deal_id='$id'");
        $data['deal_inclusion'] = $this->admin->getRawResult("Select * from tbl_deal_inclusion where deal_id='$id'");
        $data['quote_if_exist'] = $this->admin->getRawRow("Select * from tbl_quote_request where deal_id='$id' and request_from='$userinfo->id'");
        $this->load->view('partner/editdeal', compact('userinfo', 'category_data', 'currency_data', 'date', 'data'));
    }

    public function allDeals()
    {
        $userinfo = $this->userinfo;
        $data = $this->admin->getAllDeals();
        $i = 0;
        if (!empty($data)) {
            foreach ($data as $row) {
                if ($this->admin->getRawResult("Select * from tbl_deal_dates where deal_id='$row->id' AND deleted_at IS NULL") == false) {
                    $dot = array();
                } else {
                    $dot = $this->admin->getRawResult("Select * from tbl_deal_dates where deal_id='$row->id' AND deleted_at IS NULL");
                }
                if ($this->admin->getRawResult("Select * from tbl_deal_inclusion where deal_id='$row->id' AND deleted_at IS NULL") == false) {
                    $inclusion = array();
                } else {
                    $inclusion = $this->admin->getRawResult("Select * from tbl_deal_inclusion where deal_id='$row->id' AND deleted_at IS NULL");
                }
                if ($this->admin->getRawRow("Select image from tbl_deal_image where position='0' and deal_id='$row->id' AND deleted_at IS NULL") == false) {
                    $image = base_url() . 'resource/admin/img/dummy.jpg';
                } else {
                    $image = $this->admin->getRawRow("Select image from tbl_deal_image where position='0' and deal_id='$row->id' AND deleted_at IS NULL")->image;
                }
                $mdata[$i]['id'] = $row->id;
                $mdata[$i]['partner_name'] = $row->partner_name;
                $mdata[$i]['deal_type'] = $row->deal_type;
                $mdata[$i]['deal_id'] = $row->deal_id;
                $mdata[$i]['title'] = $row->title;
                $mdata[$i]['currency'] = $row->currency;
                $mdata[$i]['b2bprice'] = $row->new_price;
                $mdata[$i]['b2cprice'] = $row->old_price;
                $mdata[$i]['tac'] = $row->tac;
                $mdata[$i]['unit_type'] = $row->unit_type;
                $mdata[$i]['details'] = $row->details;
                $mdata[$i]['cancelation_policy'] = $row->cancelation_policy;
                $mdata[$i]['destination'] = $row->destination;
                $mdata[$i]['valid_untill'] = $row->valid_untill;
                $mdata[$i]['hotel_name_room_meal'] = $row->hotel_name_room_meal;
                $mdata[$i]['flight_trip_type'] = $row->flight_trip_type;
                $mdata[$i]['package_type'] = $row->package_type;
                $mdata[$i]['created_at'] = $row->created_at;
                $mdata[$i]['dates_of_travel'] = $dot;
                $mdata[$i]['inclusion'] = $inclusion;
                $mdata[$i]['image'] = $image;
                $i++;
            }
        } else {
            $mdata = array();
        }
        $this->load->view('partner/alldeals', compact('userinfo', 'mdata'));
    }

    public function myDeals()
    {
        $userinfo = $this->userinfo;
        $data = $this->admin->getAllDealsByPartner($userinfo->id);
        $i = 0;
        if (!empty($data)) {
            foreach ($data as $row) {
                // if ($this->admin->getRawResult("Select * from tbl_deal_dates where deal_id='$row->id' AND deleted_at IS NULL") == false) {
                //     $dot = array();
                // } else {
                //     $dot = $this->admin->getRawResult("Select * from tbl_deal_dates where deal_id='$row->id' AND deleted_at IS NULL");
                // }
                // if ($this->admin->getRawResult("Select * from tbl_deal_inclusion where deal_id='$row->id' AND deleted_at IS NULL") == false) {
                //     $inclusion = array();
                // } else {
                //     $inclusion = $this->admin->getRawResult("Select * from tbl_deal_inclusion where deal_id='$row->id' AND deleted_at IS NULL");
                // }
                if ($this->admin->getRawRow("Select image from tbl_deal_image where position='0' and deal_id='$row->id' AND deleted_at IS NULL") == false) {
                    $image = base_url() . 'resource/admin/img/dummy.jpg';
                } else {
                    $image = $this->admin->getRawRow("Select image from tbl_deal_image where position='0' and deal_id='$row->id' AND deleted_at IS NULL")->image;
                }
                $mdata[$i]['id'] = $row->id;
                $mdata[$i]['partner_name'] = $row->partner_name;
                $mdata[$i]['deal_type'] = $row->deal_type;
                $mdata[$i]['deal_id'] = $row->deal_id;
                $mdata[$i]['deal_type_id'] = $row->deal_type_id;
                $mdata[$i]['title'] = $row->title;
                $mdata[$i]['currency'] = $row->currency;
                $mdata[$i]['currency_id'] = $row->currency_id;
                $mdata[$i]['b2bprice'] = $row->new_price;
                $mdata[$i]['b2cprice'] = $row->old_price;
                $mdata[$i]['tac'] = $row->tac;
                $mdata[$i]['unit_type'] = $row->unit_type;
                $mdata[$i]['details'] = $row->details;
                $mdata[$i]['cancelation_policy'] = $row->cancelation_policy;
                $mdata[$i]['destination'] = $row->destination;
                $mdata[$i]['valid_untill'] = $row->valid_untill;
                $mdata[$i]['hotel_name_room_meal'] = $row->hotel_name_room_meal;
                $mdata[$i]['flight_trip_type'] = $row->flight_trip_type;
                $mdata[$i]['package_type'] = $row->package_type;
                $mdata[$i]['created_at'] = $row->created_at;
                $mdata[$i]['status'] = $row->status;
                // $mdata[$i]['dates_of_travel'] = $dot;
                // $mdata[$i]['inclusion'] = $inclusion;
                $mdata[$i]['image'] = $image;
                $i++;
            }
        } else {
            $mdata = array();
        }
        // print_r($mdata);die;
        $this->load->view('partner/mydeals', compact('userinfo', 'mdata'));
    }

    public function dealDetail($id)
    {
        $userinfo = $this->userinfo;
        $data['deal_data'] = $this->admin->getDealId($id);
        $data['deal_image'] = $this->admin->getRawResult("Select * from tbl_deal_image where deal_id='$id' and deleted_at IS NULL");
        $data['deal_dates'] = $this->admin->getRawResult("Select * from tbl_deal_dates where deal_id='$id' and deleted_at IS NULL");
        $data['deal_inclusion'] = $this->admin->getRawResult("Select * from tbl_deal_inclusion where deal_id='$id' and deleted_at IS NULL");
        $data['quote_if_exist'] = $this->admin->getRawRow("Select * from tbl_quote_request where deal_id='$id' and request_from='$userinfo->id' and deleted_at IS NULL");

        // if(!empty($deal)){
        // }
        $this->load->view('partner/details', compact('userinfo', 'data'));

    }


    function editDealForm($id){

        $this->form_validation->set_rules('title', 'Title', 'required');
        $this->form_validation->set_rules('currency_id', 'Currency', 'required');
        $this->form_validation->set_rules('new_price', 'B2B Price', 'required');
        $this->form_validation->set_rules('old_price', 'B2C Price', 'required');
        $this->form_validation->set_rules('noofdays', 'No of days', 'required');
        $this->form_validation->set_rules('noofnights', 'No Of Nights', 'required');
        // $this->form_validation->set_rules('tac', 'Travel Agent Comission', 'required');
        $this->form_validation->set_rules('unit_type', 'Unit Type', 'required');
        $this->form_validation->set_rules('details', 'Details', 'required');
        // $this->form_validation->set_rules('status', 'Status', 'required');
        $this->form_validation->set_rules('cancelation_policy', 'Cancelation Policy', 'required');
        $this->form_validation->set_rules('destination', 'Destination', 'required');
        $this->form_validation->set_rules('valid_untill', 'Valid Until', 'required');
        if ($this->form_validation->run() == false) {
            $this->failed(validation_errors());
        }else{
            $data['title'] = $this->input->post('title');
            $data['currency_id'] = $this->input->post('currency_id');
            $data['new_price'] = $this->input->post('new_price');
            $data['old_price'] = $this->input->post('old_price');
            $data['noofdays'] = $this->input->post('noofdays');
            $data['noofnights'] = $this->input->post('noofnights');
            // $data['status'] = $this->input->post('status');
            $data['unit_type'] = $this->input->post('unit_type');
            $data['details'] = $this->input->post('details');
            $data['cancelation_policy'] = $this->input->post('cancelation_policy');
            $data['destination'] = $this->input->post('destination');
            $valid_until = date_create($this->input->post('valid_untill'));
            $data['valid_untill'] = date_format($valid_until, "Y-m-d");
            $data['updated_at'] = $this->created_at;
            if(!empty($this->input->post('hotel_name_room_meal'))){
                $data['hotel_name_room_meal'] = $this->input->post('hotel_name_room_meal');
            }
            if(!empty($this->input->post('flight_trip_type'))){
                $data['flight_trip_type'] = $this->input->post('flight_trip_type');
            }
            if(!empty($this->input->post('package_type'))){
                $data['package_type'] = $this->input->post('package_type');
            }
            $this->admin->edit_data('id',$id,$data,'tbl_deal_partner');
            $this->success("Updated");

        }
        redirect('partner/edit/'.$id);
    }

    function deletedeal($id){
        $data['deleted_at']=$this->created_at;
        $this->admin->edit_data('id',$id,$data,'tbl_deal_partner');
        redirect('partner/mydeals');
    }
    public function postDealForm()
    {
        $userinfo = $this->userinfo;

        $this->form_validation->set_rules('deal_type_id', 'Deal Type', 'required');
        $this->form_validation->set_rules('title', 'Title', 'required');
        $this->form_validation->set_rules('currency_id', 'Currency', 'required');
        $this->form_validation->set_rules('new_price', 'B2B Price', 'required');
        $this->form_validation->set_rules('old_price', 'B2C Price', 'required');

        $this->form_validation->set_rules('noofdays', 'No of days', 'required');
        $this->form_validation->set_rules('noofnights', 'No Of Nights', 'required');
        // $this->form_validation->set_rules('tac', 'Travel Agent Comission', 'required');
        $this->form_validation->set_rules('unit_type', 'Unit Type', 'required');
        $this->form_validation->set_rules('details', 'Details', 'required');
        $this->form_validation->set_rules('cancelation_policy', 'Cancelation Policy', 'required');
        $this->form_validation->set_rules('date_of_travel[]', 'Dates Of Travel', 'required');
        $this->form_validation->set_rules('destination', 'Destination', 'required');
        $this->form_validation->set_rules('valid_untill', 'Valid Until', 'required');
        if (empty($_FILES['image']['name'])) {
            $this->failed("Atleast choose one image");
        } else if ($this->form_validation->run() == false) {
            $this->failed(validation_errors());
        } else {
            $deal_type_id = $this->input->post('deal_type_id');
            $data['deal_type_id'] = $this->input->post('deal_type_id');

            if($deal_type_id=='1'){
                $data['id_tag']='TSP';
                $data['deal_id'] = 'TTS'.rand(000000, 999999).'P';
            }else if($deal_type_id=='2'){
                $data['id_tag']='TSF';
                $data['deal_id'] = 'TTS'.rand(000000, 999999).'F';
            }else if($deal_type_id=='3'){
                $data['id_tag']='TSH';
                $data['deal_id'] = 'TTS'.rand(000000, 999999).'H';
            }else if($deal_type_id=='4'){
                $data['id_tag']='TSV';
                $data['deal_id'] = 'TTS'.rand(000000, 999999).'V';
            }else if($deal_type_id=='5'){
                $data['id_tag']='TST';
                $data['deal_id'] = 'TTS'.rand(000000, 999999).'T';
            }else if($deal_type_id=='6'){
                $data['id_tag']='TSA';
                $data['deal_id'] = 'TTS'.rand(00000, 99999).'A';
            }else if($deal_type_id=='7'){
                $data['id_tag']='THT';
                $data['deal_id'] = 'TTS'.rand(5).'HT';
            }

            $data['partner_id'] = $userinfo->id;
            $data['title'] = $this->input->post('title');
            $data['currency_id'] = $this->input->post('currency_id');
            $data['new_price'] = $this->input->post('new_price');
            $data['old_price'] = $this->input->post('old_price');

            $data['noofdays'] = $this->input->post('noofdays');
            $data['noofnights'] = $this->input->post('noofnights');
            // $data['tac'] = $this->input->post('tac');
            $data['unit_type'] = $this->input->post('unit_type');
            $data['details'] = $this->input->post('details');
            $data['cancelation_policy'] = $this->input->post('cancelation_policy');
            $dates_of_travel = $this->input->post('date_of_travel');
            $data['destination'] = $this->input->post('destination');

            $valid_until = date_create($this->input->post('valid_untill'));

            $data['valid_untill'] = date_format($valid_until, "Y-m-d");
            $data['created_at'] = $this->created_at;
            $data['updated_at'] = $this->created_at;
            if ($deal_type_id == 1) {
                $this->form_validation->set_rules('package_type', 'Package Type', 'required');
                $this->form_validation->set_rules('inclusion[]', 'Inclusion', 'required');
                if ($this->form_validation->run() == false) {
                    $this->failed(validation_errors());
                } else {
                    $data['package_type'] = $this->input->post('package_type');
                    // $data['inclusion'] = $this->input->post('inclusion');
                    $inclusion = $this->input->post('inclusion');
                }
            } else if ($deal_type_id == 2) {
                $this->form_validation->set_rules('flight_trip_type', 'Flight Trip Type', 'required');
                if ($this->form_validation->run() == false) {
                    $this->failed(validation_errors());
                } else {
                    $data['flight_trip_type'] = $this->input->post('flight_trip_type');
                }
            } else if ($deal_type_id == 3) {
                $this->form_validation->set_rules('hotel_name_room_meal', 'Hotel Name / Room Category / Meal', 'required');
                if ($this->form_validation->run() == false) {
                    $this->failed(validation_errors());
                } else {
                    $data['hotel_name_room_meal'] = $this->input->post('hotel_name_room_meal');
                }
            }
            $latestID = $this->admin->insert_data_get_latest_id('tbl_deal_partner', $data);
            if (!empty($latestID) && $latestID == true) {

                if (!empty($inclusion)) {
                    $i = 0;
                    foreach ($inclusion as $row) {
                        $idata[$i]['inclusion'] = $inclusion[$i];
                        $idata[$i]['deal_id'] = $latestID;
                        $i++;
                    }
                    $this->admin->insert_batch('tbl_deal_inclusion', $idata);
                }
                if (!empty($dates_of_travel)) {
                    $dot = 0;
                    foreach ($dates_of_travel as $row) {
                        $dotdata[$dot]['dates'] = $dates_of_travel[$dot];
                        $dotdata[$dot]['deal_id'] = $latestID;
                        $dot++;
                    }
                    $this->admin->insert_batch('tbl_deal_dates', $dotdata);
                }

                $image_count = count($_FILES['image']['name']);
                for ($ic = 0; $ic < $image_count; $ic++) {
                    $this->load->helper("file");
                    $this->load->library('upload');

                    $_FILES['file']['name'] = $_FILES['image']['name'][$ic];
                    $_FILES['file']['type'] = $_FILES['image']['type'][$ic];
                    $_FILES['file']['tmp_name'] = $_FILES['image']['tmp_name'][$ic];
                    $_FILES['file']['error'] = $_FILES['image']['error'][$ic];
                    $_FILES['file']['size'] = $_FILES['image']['size'][$ic];

                    $config['upload_path'] = './uploads/';
                    $config['allowed_types'] = 'jpg|png|pdf';
                    $config['max_size'] = 0;
                    $config['max_width'] = 0;
                    $config['max_height'] = 0;
                    $config['file_name'] = md5($_FILES['image']['name'][$ic]);

                    $this->upload->initialize($config);

                    if ($this->upload->do_upload('file')) {
                        $uploadData = $this->upload->data();
                        $filename = $uploadData['file_name'];
                        $event_image[$ic]['image'] = base_url() . 'uploads/' . $filename;
                        $event_image[$ic]['deal_id'] = $latestID;
                        $event_image[$ic]['position'] = $ic;
                    } else {
                        $this->failed("Error While Uploading Image");
                    }
                }
                if ($this->admin->insert_batch('tbl_deal_image', $event_image)) {
                    $this->success("Deal Uploaded Successfully");
                } else {
                    $this->failed("Error While Uploading Image");
                }

            } else {
                $this->failed("Error");
            }

        }
        redirect('partner/adddeal');
    }

    public function success($message)
    {


        $data='
                        <div class="alert alert-success fade show" role="alert">
                            <div class="alert-text">'.$message.'</div>
                            <div class="alert-close">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true"><i class="la la-close"></i></span>
                                </button>
                            </div>
                        </div>
        ';

        $this->session->set_flashdata('item', $data);

    }

    public function requestQuote($id)
    {
        $userinfo = $this->userinfo;
        $data['request_from'] = $userinfo->id;
        $data['deal_id'] = $id;
        $data['created_at'] = $this->created_at;
        $data['updated_at'] = $this->created_at;
        if ($this->admin->insert_data('tbl_quote_request', $data)) {
            $this->session->set_flashdata('item', 'Success');

        } else {
            $this->session->set_flashdata('item', 'Error');

        }
        redirect('partner/deal/' . $id);
    }
    public function editDealImage($id)
    {
        $userinfo = $this->userinfo;
        $data = $this->admin->getRawResult("Select * from tbl_deal_image where deal_id='$id' and deleted_at IS NULL");
        $this->load->view('partner/edit_images', compact('userinfo', 'id', 'data'));
    }
    public function editDealInclusion($id)
    {
        $userinfo = $this->userinfo;
        $data = $this->admin->getRawResult("Select * from tbl_deal_inclusion where deal_id='$id' and deleted_at IS NULL");
        $this->load->view('partner/edit_inclusion', compact('userinfo', 'id', 'data'));
    }
    function editDealDate($id){
        $userinfo = $this->userinfo;
        $data = $this->admin->getRawResult("Select * from tbl_deal_dates where deal_id='$id' and deleted_at IS NULL");
        $this_month = mktime(0, 0, 0, date('m'), 1, date('Y'));
        for ($i = 0; $i < 12; ++$i) {
            $date[$i]['date'] = date('M Y', strtotime($i . ' month', $this_month));
        }
        $this->load->view('partner/edit_dates', compact('userinfo', 'id', 'data','date'));
    }

    public function deleteDealImage($rowid, $id)
    {
        $data['deleted_at'] = $this->created_at;
        $this->admin->edit_data('id', $rowid, $data,'tbl_deal_image');
        redirect('partner/edit/deal/image/' . $id);
    }
    function deleteDealDate($rowid, $id){
        $data['deleted_at'] = $this->created_at;
        $this->admin->edit_data('id', $rowid, $data,'tbl_deal_dates');
        redirect('partner/edit/deal/date/' . $id);
    }
    function addDateToInclusion($id){
        $this->admin->delete_data('deal_id',$id,'tbl_deal_inclusion');
        $inclusion=$this->input->post('inclusion');
        if (!empty($inclusion)) {
            $i = 0;
            foreach ($inclusion as $row) {
                $idata[$i]['inclusion'] = $inclusion[$i];
                $idata[$i]['deal_id'] = $id;
                $i++;
            }
            $this->admin->insert_batch('tbl_deal_inclusion', $idata);
        }
        redirect('partner/edit/deal/inclusion/' . $id);

    }
    function addDateToDeals($id){
        if (!empty($this->input->post('date_of_travel'))) {
            $dot = 0;
            foreach ($this->input->post('date_of_travel') as $row) {
                $dates_of_travel=$this->input->post('date_of_travel')[$dot];
                if($this->admin->getRawRow("Select * from tbl_deal_dates where dates='$dates_of_travel' and deal_id='$id' and deleted_at IS NULL")==false){
                    $dotdata[$dot]['dates'] = $this->input->post('date_of_travel')[$dot];
                    $dotdata[$dot]['deal_id'] = $id;
                }
                $dot++;
            }
            $this->admin->insert_batch('tbl_deal_dates', $dotdata);
        }
        redirect('partner/edit/deal/date/' . $id);

    }
    public function addImagesToDeal($id)
    {
        $image_count = count($_FILES['image']['name']);
        for ($ic = 0; $ic < $image_count; $ic++) {
            $this->load->helper("file");
            $this->load->library('upload');

            $_FILES['file']['name'] = $_FILES['image']['name'][$ic];
            $_FILES['file']['type'] = $_FILES['image']['type'][$ic];
            $_FILES['file']['tmp_name'] = $_FILES['image']['tmp_name'][$ic];
            $_FILES['file']['error'] = $_FILES['image']['error'][$ic];
            $_FILES['file']['size'] = $_FILES['image']['size'][$ic];

            $config['upload_path'] = './uploads/';
            $config['allowed_types'] = 'jpg|png|pdf';
            $config['max_size'] = 0;
            $config['max_width'] = 0;
            $config['max_height'] = 0;
            $config['file_name'] = md5($_FILES['image']['name'][$ic]);

            $this->upload->initialize($config);

            if ($this->upload->do_upload('file')) {
                $uploadData = $this->upload->data();
                $filename = $uploadData['file_name'];
                $event_image[$ic]['image'] = base_url() . 'uploads/' . $filename;
                $event_image[$ic]['deal_id'] = $id;
                $event_image[$ic]['position'] = $this->admin->getRawRow("Select MAX(position) as position from tbl_deal_image where deal_id='$id'")->position + 1;
            } else {
                $this->failed("Error While Uploading Image");
            }
        }
        if ($this->admin->insert_batch('tbl_deal_image', $event_image)) {
            $this->success("Deal Uploaded Successfully");
        } else {
            $this->failed("Error While Uploading Image");
        }
        redirect('partner/edit/deal/image/' . $id);
    }

    public function failed($message)
    {


        $data='
                        <div class="alert alert-danger fade show" role="alert">
                            <div class="alert-text">'.$message.'</div>
                            <div class="alert-close">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true"><i class="la la-close"></i></span>
                                </button>
                            </div>
                        </div>
        ';

        $this->session->set_flashdata('item', $data);

    }

    function learnHowToSell(){
        $userinfo = $this->userinfo;
        $this->load->view('partner/learn_how_to_sell', compact('userinfo'));
    }

    function privacyPolicy(){
        $this->load->view('partner/m-privacy-and-cookie-policy');
    }

    function termsAndConditions(){
        $this->load->view('partner/m-terms-and-conditions');
    }
    
    function addBlogs(){
        $userinfo = $this->userinfo;
        $this->load->view('partner/add_blogs', compact('userinfo'));
    }
    function advertisementPlan(){
        $userinfo = $this->userinfo;
        $check=$this->admin->getRawRow("Select * from tbl_adv_with_us where user_id='$userinfo->id' and user_type='$userinfo->type' and deleted_at IS NULL");
        if($check==false){
            $this->load->view('partner/advertisement_plan', compact('userinfo'));
        }else{
            if($check->adv_pack_id=='1'){
                $type=1;
                $this->load->view('partner/active_add_plan',compact('userinfo','type'));
            }else if($check->adv_pack_id=='2'){
                $type=1;
                $this->load->view('partner/active_add_plan',compact('userinfo','type'));
            }else if($check->adv_pack_id=='3'){
                $type=1;
                $this->load->view('partner/active_add_plan',compact('userinfo','type'));
            }
        }
    }
    function buyAdvPlan($type){
        $userinfo = $this->userinfo;
        $data['user_id']=$userinfo->id;
        $data['user_type']=$userinfo->type;

        if($type=='premium'){
            $data['adv_pack_id']=1;
        }else if($type=='platinum'){
            $data['adv_pack_id']=2;
        }else if($type=='wizard'){
            $data['adv_pack_id']=3;
        }

        if($this->admin->insert_data('tbl_adv_with_us',$data)){
            $this->success('Added');
        }else{
            $this->success('Failed');
        }

        redirect('partner/advertisement-plan');
    }
    function submitBlog(){
        $userinfo = $this->userinfo;
        $data['blog']=$this->input->post('blog');
        $data['tagline']=$this->input->post('tagline');
        $data['headline']=$this->input->post('headline');
        $data['user_id']=$userinfo->id;
        $data['user_type']=$userinfo->type;

        $latestID=$this->admin->insert_data_get_latest_id('tbl_blog',$data);


        if($latestID){
            $image_count = count($_FILES['image']['name']);
            for ($ic = 0; $ic < $image_count; $ic++) {
                $this->load->helper("file");
                $this->load->library('upload');

                $_FILES['file']['name'] = $_FILES['image']['name'][$ic];
                $_FILES['file']['type'] = $_FILES['image']['type'][$ic];
                $_FILES['file']['tmp_name'] = $_FILES['image']['tmp_name'][$ic];
                $_FILES['file']['error'] = $_FILES['image']['error'][$ic];
                $_FILES['file']['size'] = $_FILES['image']['size'][$ic];

                $config['upload_path'] = './uploads/';
                $config['allowed_types'] = 'jpg|png|pdf';
                $config['max_size'] = 0;
                $config['max_width'] = 0;
                $config['max_height'] = 0;
                $config['file_name'] = md5($_FILES['image']['name'][$ic]);

                $this->upload->initialize($config);

                if ($this->upload->do_upload('file')) {
                    $uploadData = $this->upload->data();
                    $filename = $uploadData['file_name'];
                    $event_image[$ic]['image'] = base_url() . 'uploads/' . $filename;
                    $event_image[$ic]['blog_id'] = $latestID;
                    $event_image[$ic]['position'] = $ic;
                } else {
                    $this->failed("Error While Uploading Image");
                }
            }
            if ($this->admin->insert_batch('tbl_blog_image', $event_image)) {
                $this->success("Uploaded Successfully");
            } else {
                $this->failed("Error While Uploading Image");
            }
        }
        redirect('partner/addBlogs');
    }

    function blogs(){
        $userinfo = $this->userinfo;
        $data=$this->admin->getRawResult("Select tbl_blog.*,tbl_blog_image.image from tbl_blog,tbl_blog_image where tbl_blog.id=tbl_blog_image.blog_id and tbl_blog.deleted_at IS NULL and tbl_blog_image.position=0");
        $this->load->view('partner/blogs',compact('userinfo','data'));
    }
    function blog($id){
        $userinfo = $this->userinfo;
        $mdata=$this->admin->getRawResult("Select * from tbl_blog where id='$id'");
        foreach($mdata as $row){
            $data[]=array(
                'id'=>$row->id,
                'headline'=>$row->headline,
                'tagline'=>$row->tagline,
                'blog'=>$row->blog,
                'image'=>$this->admin->getRawResult("Select * from tbl_blog_image where blog_id='$row->id'")
            );
        }
        $this->load->view('partner/single_blog_detail',compact('userinfo','data'));
    }

    function partnerHelp(){
        $userinfo = $this->userinfo;
        $this->load->view('partner/partner_help',compact('userinfo'));
    }

    function travelNews(){
        $userinfo = $this->userinfo;
        $this->load->view('partner/travel_news',compact('userinfo'));
    }

    function webCheckin(){
        $userinfo = $this->userinfo;
        $this->load->view('partner/web_check_in',compact('userinfo'));
    }

    function travPay(){
        $userinfo = $this->userinfo;
        $walletBalance=$this->walletBalance();
        $symbol=$this->currencySymbol();
        $this->load->view('partner/travpay',compact('userinfo','walletBalance','symbol'));
    }
    function addMoneyToWallet(){
        $userinfo = $this->userinfo;

        $currency=$this->admin->getRawRow("Select * from tbl_currency where id='$userinfo->currency'")->symbol;
        $allCurrency=$this->admin->getRawResult("Select * from tbl_currency");

        $wallet_balance=$this->walletBalance();
        $this->load->view('partner/add_money',compact('userinfo','wallet_balance','currency','allCurrency'));
    }
    function ppc(){
        $userinfo = $this->userinfo;
        $this->load->view('partner/ppc_campaign',compact('userinfo'));
    }
    function prchasedLeads(){
        $userinfo = $this->userinfo;
        $mdata=$this->admin->getRawResult("Select leads.*,tbl_currency.symbol from leads,tbl_currency
        where leads.currency=tbl_currency.id and  leads.id NOT IN (SELECT lead FROM `leads_given` where partner_id='$userinfo->id')");
        $id="0";
        $this->load->view('partner/manage_leads',compact('userinfo','mdata','id'));
    }
    function manageLeads(){
        $userinfo = $this->userinfo;
        $mdata=$this->admin->getRawResult("Select leads.*,tbl_currency.symbol from leads,tbl_currency
        where leads.currency=tbl_currency.id and  leads.id IN (SELECT lead FROM `leads_given` where partner_id='$userinfo->id')");
        $id="1";
        $this->load->view('partner/manage_leads',compact('userinfo','mdata','id'));
    }
    function purchaseleads(){
        $userinfo = $this->userinfo;

        $wdata['user_id']=$userinfo->id;
        $wdata['user_type']=$userinfo->type;
        $wdata['type']='DEBIT';
        $wdata['mode']='TRAVPAY';
        $wdata['status']='SUCCESS';
        $wdata['amount']=$this->input->post('price');
        $wdata['currency_id']=$userinfo->currency;
        $lead_id=$this->input->post('id');

        $wallet_id=$this->admin->insert_data_get_latest_id('tbl_wallet',$wdata);

        if($wallet_id){

            $ndata['wallet_id']=$wallet_id;
            $ndata['transaction_for']='TSL-'.$this->input->post('id');
            $ndata['payee_id']=$userinfo->id;
            $ndata['payee_type']=$userinfo->type;
            $ndata['payee_name']=$userinfo->name;
            $ndata['payee_email']=$userinfo->email;
            $ndata['payee_phone']=$userinfo->mobile;

            $lead_partner_data=$this->admin->getRawRow("Select * from partner where id IN(Select partner_id from leads where id='$lead_id')");
            if($lead_partner_data==false){
                $ndata['benificiary_id']=$userinfo->id;
                $ndata['benificiary_type']=$userinfo->type;
                $ndata['benificiary_name']=$userinfo->name;
                $ndata['benificiary_email']=$userinfo->email;
                $ndata['benificiary_phone']=$userinfo->mobile;
            }else{
                $ndata['benificiary_id']="ADMIN";
                $ndata['benificiary_type']="ADMIN";
                $ndata['benificiary_name']="ADMIN";
                $ndata['benificiary_email']="ADMIN";
                $ndata['benificiary_phone']="ADMIN";
            }



            $this->admin->insert_data('tbl_wallet_transaction_details',$ndata);

            $data['partner_id']=$userinfo->id;
            $data['lead']=$this->input->post('id');
            if($this->admin->insert_data('leads_given',$data)){
                $this->success("OK");
            }else{
                $this->failure("Fail");
            }
        }else{
                $this->failure("Fail");
        }


        redirect('partner-manage-leads');
    }
    function contact($for){
        $userinfo = $this->userinfo;
        $this->load->view('partner/contact_form',compact('userinfo','for'));
    }

    function buyPage(){

        $this->form_validation->set_rules('id', 'ID', 'required');
        $this->form_validation->set_rules('type', 'Type', 'required');
        $this->form_validation->set_rules('price', 'Price', 'required');
        // $this->form_validation->set_rules('currency', 'Currency', 'required');
        $type=$this->input->post('type');
        if ($this->form_validation->run() == false) {
            $this->failed(validation_errors());
            if($type=="LEAD"){
                redirect('partner-manage-leads');
            }
        } else {
            if($type=="LEAD"){
                $id=$this->input->post('id');

                $price=$this->input->post('price');

                $userinfo = $this->userinfo;


                $currency=$this->admin->getRawRow("Select * from tbl_currency where id=(Select currency_id from tbl_wallet where user_id='$userinfo->id' and user_type='$userinfo->type' LIMIT 1)")->symbol;
                $allCurrency=$this->admin->getRawResult("Select * from tbl_currency");

                $wallet_balance=$this->walletBalance();

                $this->load->view('partner/buy_page',compact('userinfo','wallet_balance','currency','allCurrency','id','price','type'));
            }
        }
    }

    function contactForm(){
        $this->form_validation->set_rules('name', 'Name', 'required');
        $this->form_validation->set_rules('phone', 'Phone', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required');
        $this->form_validation->set_rules('message', 'Message', 'required');
        $this->form_validation->set_rules('for', 'For', 'required');
        if ($this->form_validation->run() == false) {
            $this->failed(validation_errors());
        } else {
            $name=$data['name']=$this->input->post('name');
            $phone=$data['phone']=$this->input->post('phone');
            $email=$data['email']=$this->input->post('email');
            $messsage=$data['message']=$this->input->post('message');
            $for=$data['for_']=$this->input->post('for');

            if($this->admin->insert_data('contact_form',$data)){
                if($for=='business-request'){
                    $this->sendEmail('thetravelsquareb2b@gmail.com',$message,$for,$name,$phone,$email);
                }else if($for=='general-request'){
                    $this->sendEmail('contact.thetravelsquare@gmail.com',$message,$for,$name,$phone,$email);
                }else if($for=='ppc-request'){
                    $this->sendEmail('ppc.thetravelsquare@gmail.com',$message,$for,$name,$phone,$email);
                }
                $this->success("Your Request Has Been Submited ! Our Team will Connect with You Soon");
            }else{
                $this->failed("Failure");
            }
        }
        redirect('partner-contact/'.$for);
    }

    function sendEmail($to,$emessage,$for,$name,$phone,$email){

        $subject = "TRAVEL SQUARE";

        $message = "
        <html>
        <head>
        <title>".$for."</title>
        </head>
        <body>
        <p>Enquiry Submission</p>
        <table>
        <tr>
        <th>Name</th>
        <td>".$name."</td>
        </tr>
        <tr>
        <th>Phone</th>
        <td>".$phone."</td>
        </tr>
        <tr>
        <th>Email</th>
        <td>".$email."</td>
        </tr>
        <tr>
        <th>Message</th>
        <td>".$emessage."</td>
        </tr>
        </table>
        </body>
        </html>
        ";

        // Always set content-type when sending HTML email
        $headers = "MIME-Version: 1.0" . "\r\n";
        $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

        // More headers
        $headers .= 'From: <ts@frantic.in>' . "\r\n";
        $headers .= 'Cc: ts@frantic.in' . "\r\n";

        mail($to,$subject,$message,$headers);
    }
    function creatingOrderId(){
        $url = "https://api.razorpay.com/v1/orders";
        $ch = curl_init($url);

        $data = array(
            "amount"=> 50000,
            "currency"=> "INR",
            "receipt"=> "rcptid_11",
            "payment_capture"=> 1,
        );
        $payload = json_encode($data);

        curl_setopt($ch, CURLOPT_POSTFIELDS, $payload);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $result = curl_exec($ch);
        curl_close($ch);
        $response = json_decode($result);
        print_r($response);
    }
    function pay($id){
        echo '
        <script src="https://checkout.razorpay.com/v1/checkout.js"></script>
        <script>
        var options = {
            "key": "rzp_test_qkUZtNKLxsjhZ8", // Enter the Key ID generated from the Dashboard
            "amount": "50000", // Amount is in currency subunits. Default currency is INR. Hence, 50000 refers to 50000 paise
            "currency": "INR",
            "name": "Acme Corp",
            "description": "Test Transaction",
            "image": "https://example.com/your_logo",
            "order_id": "50",
            "handler": function (response){
                alert(response.razorpay_payment_id);
                alert(response.razorpay_order_id);
                alert(response.razorpay_signature)
            },
            "prefill": {
                "name": "Gaurav Kumar",
                "email": "gaurav.kumar@example.com",
                "contact": "9999999999"
            },
            "notes": {
                "address": "Razorpay Corporate Office"
            },
            "theme": {
                "color": "#F37254"
            }
        };
        var rzp1 = new Razorpay(options);
        rzp1.open();
        e.preventDefault();

        </script>
        ';
    }
    function downloadLeadSample(){
        $pth    =   file_get_contents(base_url().'uploads/leads.xlsx');
        $nme    =   "sample.xlsx";
        force_download($nme, $pth);
    }
    function downloadClaimImage($id){
        $name=$this->admin->getRawRow("Select * from client_settlement where id='$id'")->image;

        $path=base_url().'uploads/'.$name;
        force_download($name, $path);
    }
    function downloadCancelImage($id){
        $name=$this->admin->getRawRow("Select * from cancellation_refund where id='$id'")->doc;

        $path=base_url().'uploads/'.$name;
        force_download($name, $path);
    }
    function walletTransactions($type){
        $userinfo = $this->userinfo;
        // $credit=$this->admin->getRawRow("Select sum(amount) as amount from tbl_wallet where user_id='$userinfo->id' and user_type='$userinfo->type' and type='CREDIT' and status='SUCCESS'");
        // $debit=$this->admin->getRawRow("Select sum(amount) as amount from tbl_wallet where user_id='$userinfo->id' and user_type='$userinfo->type' and type='DEBIT' and status='SUCCESS'");
        // $wallet_balance=$credit->amount-$debit->amount;

        $data=$this->admin->getRawResult("Select tbl_wallet.* , tbl_wallet_transaction_details.benificiary_name,
        tbl_wallet_transaction_details.benificiary_holder_name from tbl_wallet,tbl_wallet_transaction_details
        where tbl_wallet.user_id='$userinfo->id' and tbl_wallet.user_type='$userinfo->type' and
        tbl_wallet.id=tbl_wallet_transaction_details.wallet_id");

        // $credit_=0;
        // $debit_=0;
        // foreach($data as $row){
        //     if($row->currency_id!=$userinfo->currency){
        //         $point=$this->admin->getRawRow("Select * from currency_tracker where currency_to='$row->currency_id' and currency_from= '$userinfo->currency'")->points;

        //         if($row->type=='CREDIT' && $row->status=='SUCCESS'){
        //             $credit_=$credit_+($row->amount*$point);
        //         }else if($row->type=='DEBIT' && $row->status=='SUCCESS'){
        //             $debit_=$debit_+($row->amount*$point);
        //         }

        //     }else{
        //         if($row->type=='CREDIT' && $row->status=='SUCCESS'){
        //             $credit_=$credit_+($row->amount);
        //         }else if($row->type=='DEBIT' && $row->status=='SUCCESS'){
        //             $debit_=$debit_+($row->amount);
        //         }

        //     }
        // }
        $wallet_balance_= $wallet_balance=$this->walletBalance();


        $this->load->view('partner/transaction',compact('userinfo','data','wallet_balance_','type'));
    }
    function sendMoneyToBank($type){
        $userinfo = $this->userinfo;



        $currency=$this->admin->getRawRow("Select * from tbl_currency where id=(Select currency from partner where id='$userinfo->id')")->symbol;
        $allCurrency=$this->admin->getRawResult("Select * from tbl_currency");

        $wallet_balance=$this->walletBalance();

        if($type=="remit"){
            $this->load->view('partner/send_money_to_other_remit',compact('userinfo','wallet_balance','currency','allCurrency','type'));
        }else{
            $this->load->view('partner/send_money_to_bank_remit',compact('userinfo','wallet_balance','currency','allCurrency','type'));
        }

    }
    function remit_type($type){
        $userinfo = $this->userinfo;
        $currency=$this->admin->getRawRow("Select * from tbl_currency where id=(Select currency from partner where id='$userinfo->id')")->symbol;
        $allCurrency=$this->admin->getRawResult("Select * from tbl_currency");

        $wallet_balance=$this->walletBalance();
        $this->load->view('partner/send_money_to_other_remit',compact('userinfo','wallet_balance','currency','allCurrency','type'));

    }
    function sendMoneyToBankFormRemit(){
        $this->form_validation->set_rules('amount', 'Amount', 'required');
        $this->form_validation->set_rules('achn', 'Holder Name', 'required');
        $this->form_validation->set_rules('acno', 'Account Number', 'required');
        $this->form_validation->set_rules('ifsc', 'IFSC Code', 'required');
        $this->form_validation->set_rules('bankname', 'Bank Name', 'required');
        if ($this->form_validation->run() == false) {
            $this->failed(validation_errors());
        } else {
            $userinfo = $this->userinfo;

            $data['user_id']=$userinfo->id;
            $data['user_type']=$userinfo->type;
            $data['type']='DEBIT';
            $data['mode']='TRAVPAY';
            $data['status']='PENDING';
            $data['amount']=$this->input->post('amount');
            $data['currency_id']=$userinfo->currency;
            $walletID=$this->admin->insert_data_get_latest_id('tbl_wallet',$data);

            if($walletID){

                $wdata['wallet_id']=$walletID;
                $wdata['transaction_for']="REMIT";
                $wdata['payee_id']=$userinfo->id;
                $wdata['payee_type']=$userinfo->type;
                $wdata['payee_name']=$userinfo->name;
                $wdata['payee_email']=$userinfo->email;
                $wdata['payee_phone']=$userinfo->mobile;
                $wdata['benificiary_holder_name']=$this->input->post('achn');
                $wdata['benificiary_account_number']=$this->input->post('acno');
                $wdata['benificiary_ifsc']=$this->input->post('ifsc');
                $wdata['benificiary_bank_name']=$this->input->post('bankname');

                if($this->admin->insert_data('tbl_wallet_transaction_details',$wdata)){
                    redirect('wallet-transactions/accounts');
                }else{
                    redirect('send-money-to-bank/remit');
                }

            }else{
                redirect('send-money-to-bank/remit');
            }
        }

    }
    function sendMoneyToBankFormOwn(){
        $this->form_validation->set_rules('amount', 'Amount', 'required');
        $this->form_validation->set_rules('achn', 'Holder Name', 'required');
        $this->form_validation->set_rules('acno', 'Account Number', 'required');
        $this->form_validation->set_rules('ifsc', 'IFSC Code', 'required');
        $this->form_validation->set_rules('bankname', 'Bank Name', 'required');
        if ($this->form_validation->run() == false) {
            $this->failed(validation_errors());
        } else {
            $userinfo = $this->userinfo;

            $data['user_id']=$userinfo->id;
            $data['user_type']=$userinfo->type;
            $data['type']='DEBIT';
            $data['mode']='TRAVPAY';
            $data['status']='PENDING';
            $data['amount']=$this->input->post('amount');
            $data['currency_id']=$userinfo->currency;
            $walletID=$this->admin->insert_data_get_latest_id('tbl_wallet',$data);

            if($walletID){

                $wdata['wallet_id']=$walletID;
                $wdata['transaction_for']="OWN";
                $wdata['payee_id']=$wdata['benificiary_id']=$userinfo->id;
                $wdata['payee_type']=$wdata['benificiary_type']=$userinfo->type;

                $wdata['payee_name']=$wdata['benificiary_name']=$userinfo->name;
                $wdata['payee_phone']=$wdata['benificiary_phone']=$userinfo->mobile;
                $wdata['payee_email']=$wdata['benificiary_email']=$userinfo->email;

                $wdata['benificiary_holder_name']=$this->input->post('achn');
                $wdata['benificiary_account_number']=$this->input->post('acno');
                $wdata['benificiary_ifsc']=$this->input->post('ifsc');
                $wdata['benificiary_bank_name']=$this->input->post('bankname');

                if($this->admin->insert_data('tbl_wallet_transaction_details',$wdata)){
                    redirect('wallet-transactions/accounts');
                }else{
                    redirect('send-money-to-bank/own');

                }

            }else{
                redirect('send-money-to-bank/own');
            }
        }

    }
    function sendMoneyToBankFormRequest(){
        $this->form_validation->set_rules('amount', 'Amount', 'required');
        $this->form_validation->set_rules('name', 'Name', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required');
        $this->form_validation->set_rules('phone', 'Phone', 'required');
        if ($this->form_validation->run() == false) {
            $this->failed(validation_errors());
        } else {
            $userinfo = $this->userinfo;

            $data['request_from_id']=$userinfo->id;
            $data['request_from_type']=$userinfo->type;

            $data['amount']=$this->input->post('amount');
            $data['currency']=$userinfo->currency;
            $data['name']=$this->input->post('name');
            $data['email']=$this->input->post('email');
            $data['phone']=$this->input->post('phone');
            $latestID=$this->admin->insert_data_get_latest_id('tbl_payment_request',$data);


            if($latestID){

                $ndata['payment_link']=$this->encrypt($latestID);
                $this->admin->edit_data('id',$latestID,$ndata,'tbl_payment_request');

                redirect('send-money-to-bank/request');
            }else{
                redirect('send-money-to-bank/request');
            }


        }

    }

    function walletBalance(){
        $userinfo = $this->userinfo;
        // $credit=$this->admin->getRawRow("Select sum(amount) as amount from tbl_wallet where user_id='$userinfo->id' and user_type='$userinfo->type' and type='CREDIT' and status='SUCCESS'");
        // $debit=$this->admin->getRawRow("Select sum(amount) as amount from tbl_wallet where user_id='$userinfo->id' and user_type='$userinfo->type' and type='DEBIT' and status='SUCCESS'");
        // $wallet_balance=$credit->amount-$debit->amount;

        $data=$this->admin->getRawResult("Select * from tbl_wallet where user_id='$userinfo->id' and user_type='$userinfo->type' ");

        $credit_=0;
        $debit_=0;

        if($data==false){
            return 0;
        }else{
            foreach($data as $row){
                if($row->currency_id!=$userinfo->currency){
                    $point=$this->admin->getRawRow("Select * from currency_tracker where currency_to='$row->currency_id' and currency_from= '$userinfo->currency'")->points;

                    if($row->type=='CREDIT' && $row->status=='SUCCESS'){
                        $credit_=$credit_+($row->amount*$point);
                    }else if($row->type=='DEBIT' && $row->status=='SUCCESS'){
                        $debit_=$debit_+($row->amount*$point);
                    }

                }else{
                    if($row->type=='CREDIT' && $row->status=='SUCCESS'){
                        $credit_=$credit_+($row->amount);
                    }else if($row->type=='DEBIT' && $row->status=='SUCCESS'){
                        $debit_=$debit_+($row->amount);
                    }

                }
            }

            return ($wallet_balance_=$credit_-$debit_);
        }
    }
    function currencySymbol(){
        $userinfo = $this->userinfo;

        $symbols=$this->admin->getRawRow("Select * from tbl_currency where id='$userinfo->currency'")->symbol;

        return($symbols);
    }
    // function transactionDetails(){
    //     $userinfo = $this->userinfo;

    //     $this->form_validation->set_rules('id', 'ID', 'required');
    //     if ($this->form_validation->run() == false) {
    //         $this->failed(validation_errors());
    //         redirect('wallet-transactions/amount');
    //     } else {
    //         $id=$this->input->post('id');

    //         $data['transaction']=$this->admin->getRawRow("Select * from tbl_wallet where id='$id'");
    //         $data['transaction_detail']=$this->admin->getRawRow("Select * from tbl_wallet_transaction_details where wallet_id='$id'");

    //         $this->load->view('partner/transaction_details',compact('userinfo','data'));

    //     }

    // }
    function transactionDetails($id){
        $userinfo = $this->userinfo;


            $id=$this->decrypt($id);

            $data['transaction']=$this->admin->getRawRow("Select * from tbl_wallet where id='$id'");
            $data['transaction_detail']=$this->admin->getRawRow("Select * from tbl_wallet_transaction_details where wallet_id='$id'");
            // print_r($data);
            $this->load->view('partner/transaction_details',compact('userinfo','data'));


    }

    function paymentRequests(){
        $userinfo = $this->userinfo;

        $data=$this->admin->getRawResult("Select * from tbl_payment_request where request_from_id='$userinfo->id' and request_from_type='$userinfo->type'");
        $this->load->view('partner/payment_request',compact('userinfo','data'));

    }
    function encrypt($simple_string){
        $ciphering = "AES-128-CTR";
        $iv_length = openssl_cipher_iv_length($ciphering);
        $options = 0;
        $encryption_iv = '1234567891011121';
        $encryption_key = "thetravel@square@123";
        $encryption = openssl_encrypt($simple_string, $ciphering,$encryption_key, $options, $encryption_iv);
        return $encryption;
    }
    function decrypt($encryption){
        $ciphering = "AES-128-CTR";
        $iv_length = openssl_cipher_iv_length($ciphering);
        $options = 0;
        $decryption_iv = '1234567891011121';
        $decryption_key = "thetravel@square@123";
        $decryption=openssl_decrypt ($encryption, $ciphering,$decryption_key, $options, $decryption_iv);
        return $decryption;
    }
    function client_settlement(){
        $userinfo = $this->userinfo;
        $currency=$this->admin->getRawResult("Select * from tbl_currency");
        $data=$this->admin->getRawResult("Select * from client_settlement where claim_by_id='$userinfo->id' and claim_by_type='$userinfo->type'");
        $this->load->view('partner/client_settlement',compact('userinfo','data','currency'));
    }
    function cancellation_form(){
        $userinfo = $this->userinfo;
        $data=$this->admin->getRawResult("Select * from cancellation_refund where cancel_by_id='$userinfo->id' and cancel_by_type='$userinfo->type'");
        $this->load->view('partner/cancellation_form',compact('userinfo','data'));
    }
    function client_settlement_form(){
        $userinfo = $this->userinfo;

        $data['amount']=$this->input->post('amount');
        $data['currency']=$this->input->post('currency');

            $this->load->helper("file");
            $this->load->library('upload');

            $_FILES['file']['name'] = $_FILES['image']['name'];
            $_FILES['file']['type'] = $_FILES['image']['type'];
            $_FILES['file']['tmp_name'] = $_FILES['image']['tmp_name'];
            $_FILES['file']['error'] = $_FILES['image']['error'];
            $_FILES['file']['size'] = $_FILES['image']['size'];

            $config['upload_path'] = './uploads/';
            $config['allowed_types'] = 'jpg|png|pdf';
            $config['max_size'] = 0;
            $config['max_width'] = 0;
            $config['max_height'] = 0;
            $config['file_name'] = md5($_FILES['image']['name']);

            $this->upload->initialize($config);

            if ($this->upload->do_upload('file')) {
                $uploadData = $this->upload->data();
                $filename = $uploadData['file_name'];
                $data['image'] =  $filename;
                $data['claim_by_id'] = $userinfo->id;
                $data['claim_by_type'] = $userinfo->type;
                if($this->admin->insert_data('client_settlement',$data)){
                    $this->success("Your Settlement Claim Request Has Been Raise ! We Reach You Out Soon");
                }else{
                    $this->failed("Error While Uploading Image");
                }
            } else {
                $this->failed("Error While Uploading Image");
            }

        redirect('client-settlement');
    }
    function cancellation_form_submit(){
        $userinfo = $this->userinfo;


            $this->load->helper("file");
            $this->load->library('upload');

            $_FILES['file']['name'] = $_FILES['image']['name'];
            $_FILES['file']['type'] = $_FILES['image']['type'];
            $_FILES['file']['tmp_name'] = $_FILES['image']['tmp_name'];
            $_FILES['file']['error'] = $_FILES['image']['error'];
            $_FILES['file']['size'] = $_FILES['image']['size'];

            $config['upload_path'] = './uploads/';
            $config['allowed_types'] = 'jpg|png|pdf';
            // $config['max_size'] = 0;
            // $config['max_width'] = 0;
            // $config['max_height'] = 0;
            $config['file_name'] = md5($_FILES['image']['name']);

            $this->upload->initialize($config);

            if ($this->upload->do_upload('file')) {
                $uploadData = $this->upload->data();
                $filename = $uploadData['file_name'];
                $data['doc'] =  $filename;
                $data['cancel_by_id'] = $userinfo->id;
                $data['cancel_by_type'] = $userinfo->type;

                if(!empty($this->input->post('service_id'))){
                    $data['service_id'] = $this->input->post('service_id');

                }
                if(!empty($this->input->post('reason'))){
                    $data['reason'] = $this->input->post('reason');

                }

                $data['booking_id'] = $this->input->post('booking_id');


                $data['status'] = 'pending';


                if($this->admin->insert_data('cancellation_refund',$data)){
                    $this->success("Your Refund / Cancellation Request has Been Submitted . TTS Team Will Connect for the Same Soon .");
                }else{
                    $this->failed("Error While Uploading Image");
                }
            } else {
                $this->failed("Error While Uploading Image");
            }

        redirect('partner-booking-cancellation');
    }
    function generatePdf($id){
        $this->load->library('Pdf');
        $data['transaction']=$this->admin->getRawRow("Select * from tbl_wallet where id='$id'");
        $data['transaction_detail']=$this->admin->getRawRow("Select * from tbl_wallet_transaction_details where wallet_id='$id'");
        $userinfo = $this->userinfo;

        $this->load->view('partner/pdfview',compact('userinfo','data'));
    }
    function requestAgentVerification(){
        $userinfo = $this->userinfo;
        $this->load->view('partner/agent_request_verification',compact('userinfo'));
    }

    function requestAgentVerificationForm(){
        $userinfo = $this->userinfo;

        $data['name']=$this->input->post('name');
        $phone=$data['phone']=$this->input->post('phone');
        $data['email']=$this->input->post('email');
        $data['reason']=$this->input->post('reason');

        if($this->admin->getRawRow("Select * from partner where mobile='$phone' and status='approved'")==false){
            $data['status']="NAN";
            $this->success("Not verified");
        }else{
            $data['status']="VERIFIED";
            $this->success("Verified");

        }

        $data['dealer_id']=$userinfo->id;
        $data['dealer_type']=$userinfo->type;
        $this->admin->insert_data('tbl_request_agent_verification',$data);
        redirect('partner-agent-request-verification');
    }

    function currency_tracker(){
        $userinfo = $this->userinfo;
        $currency=$this->admin->getRawResult("Select * from tbl_currency");
        $this->load->view('partner/currency_tracker',compact('userinfo','currency'));
    }
    function get_currency_tracking($gid,$amount){

        $userinfo = $this->userinfo;

        $usercurrency=$this->admin->getRawRow("Select * from tbl_currency where id='$gid'");
        $checkcurrency=$this->admin->getRawRow("Select * from tbl_currency where id='$userinfo->currency'");

        $points=$this->admin->getRawRow("Select * from currency_tracker where currency_to='$checkcurrency->id' and currency_from='$usercurrency->id'");
        $amount=$amount*$points->points;
        echo '<div class="alert-text">
        <b id="latest_points">ROE : '.$usercurrency->name.' 1 = '.$checkcurrency->name.' '.$points->points.'</b>
        <br>
        <big><b id="constructed_amount">TOTAL AMOUNT : '.$amount.'</b></big>
        </div>';
    }
    function terminal_agent(){
        $userinfo = $this->userinfo;
        $data = $this->admin->getAllDealsByPartner($userinfo->id);
        $i = 0;
        if (!empty($data)) {
            foreach ($data as $row) {
                // if ($this->admin->getRawResult("Select * from tbl_deal_dates where deal_id='$row->id' AND deleted_at IS NULL") == false) {
                //     $dot = array();
                // } else {
                //     $dot = $this->admin->getRawResult("Select * from tbl_deal_dates where deal_id='$row->id' AND deleted_at IS NULL");
                // }
                // if ($this->admin->getRawResult("Select * from tbl_deal_inclusion where deal_id='$row->id' AND deleted_at IS NULL") == false) {
                //     $inclusion = array();
                // } else {
                //     $inclusion = $this->admin->getRawResult("Select * from tbl_deal_inclusion where deal_id='$row->id' AND deleted_at IS NULL");
                // }
                if ($this->admin->getRawRow("Select image from tbl_deal_image where position='0' and deal_id='$row->id' AND deleted_at IS NULL") == false) {
                    $image = base_url() . 'resource/admin/img/dummy.jpg';
                } else {
                    $image = $this->admin->getRawRow("Select image from tbl_deal_image where position='0' and deal_id='$row->id' AND deleted_at IS NULL")->image;
                }
                $mdata[$i]['id'] = $row->id;
                $mdata[$i]['partner_name'] = $row->partner_name;
                $mdata[$i]['deal_type'] = $row->deal_type;
                $mdata[$i]['deal_type_id'] = $row->deal_type_id;
                $mdata[$i]['title'] = $row->title;
                $mdata[$i]['currency'] = $row->currency;
                $mdata[$i]['currency_id'] = $row->currency_id;
                $mdata[$i]['b2bprice'] = $row->new_price;
                $mdata[$i]['b2cprice'] = $row->old_price;
                $mdata[$i]['tac'] = $row->tac;
                $mdata[$i]['unit_type'] = $row->unit_type;
                $mdata[$i]['details'] = $row->details;
                $mdata[$i]['cancelation_policy'] = $row->cancelation_policy;
                $mdata[$i]['destination'] = $row->destination;
                $mdata[$i]['valid_untill'] = $row->valid_untill;
                $mdata[$i]['hotel_name_room_meal'] = $row->hotel_name_room_meal;
                $mdata[$i]['flight_trip_type'] = $row->flight_trip_type;
                $mdata[$i]['package_type'] = $row->package_type;
                $mdata[$i]['created_at'] = $row->created_at;
                $mdata[$i]['status'] = $row->status;
                // $mdata[$i]['dates_of_travel'] = $dot;
                // $mdata[$i]['inclusion'] = $inclusion;
                $mdata[$i]['image'] = $image;
                $i++;
            }
        } else {
            $mdata = array();
        }
        // print_r($mdata);
        $this->load->view('partner/terminal_pricing_update', compact('userinfo', 'mdata'));
    }

    function web_checkin(){
        $userinfo = $this->userinfo;
        $this->load->view('partner/web_check_in', compact('userinfo'));
    }

    function support_center(){
        $userinfo = $this->userinfo;
        $this->load->view('partner/support_center', compact('userinfo'));
    }


    function fd_group_fare(){
        $userinfo = $this->userinfo;
        // print_r($userinfo);die;  
        $data=$this->admin->getRawResult("Select * from group_fares where user_id = '$userinfo->id'");
            
        $this->load->view('partner/fd-group-fare-request', compact('userinfo', 'data'));
    }

    function add_fd_group_fare(){
        $userinfo = $this->userinfo;

        $this->form_validation->set_rules('flight_type', 'Flight Type', 'required');
        $this->form_validation->set_rules('departure', 'Departure', 'required');
        $this->form_validation->set_rules('departure_date', 'Departure Date', 'required');
        $this->form_validation->set_rules('arrival_date', 'Arrival Date', 'required');
        $this->form_validation->set_rules('dep_time', 'Departure Time', 'required');
        $this->form_validation->set_rules('arr_time', 'Arrival Time', 'required');
        $this->form_validation->set_rules('adults', 'Adults', 'required');


        $data['gf_id'] = $userinfo->id.'TTS'.rand(0000,9999);
        $data['user_id'] = $userinfo->id;
        $data['flight_type'] = $this->input->post('flight_type');
        $data['departure'] = $this->input->post('departure');
        $data['departure_date'] = $this->input->post('departure_date');
        $data['arrival_date'] = $this->input->post('arrival_date');
        $data['dep_time'] = $this->input->post('dep_time');
        $data['arr_time'] = $this->input->post('arr_time');
        $data['adults'] = $this->input->post('adults');
        $data['child'] = $this->input->post('child');
        $data['created_at'] = date('Y-m-d H:i:s');
        
        if ($this->form_validation->run() == false) {
            $this->failed(validation_errors());
        }else{
            $this->db->insert('group_fares',$data);
            $this->success("Group Fare Uploaded Successfully");
            redirect('group-fare-request');    
        }
        redirect('group-fare-request');     
    }

    function internationalFD(){
        $userinfo = $this->userinfo;
        // print_r($userinfo);die;  
        $data=$this->admin->getRawResult("Select * from fixed_departures where international_or_domestic = 'International'");
        $this->load->view('partner/international-fd', compact('userinfo', 'data'));
    }

    function domesticFD(){
        $userinfo = $this->userinfo;
        // print_r($userinfo);die;  
        $data=$this->admin->getRawResult("Select * from fixed_departures where international_or_domestic = 'Domestic'");
        $this->load->view('partner/domestic-fd', compact('userinfo', 'data'));
    }

    function edit_partner_deal_price(){

        $id=$this->input->post('id');
        $data['new_price']=$this->input->post('new_price');
        $data['old_price']=$this->input->post('old_price');
        $this->admin->edit_data('id',$id,$data,'tbl_deal_partner');
        redirect('partner-terminal');
    }

    function delete_adv_plan(){
        $userinfo = $this->userinfo;
        $userid=$userinfo->id;
        $this->admin->getRawUpdate("Update tbl_adv_with_us set deleted_at='$this->created_at' where user_id='$userid'");
        redirect('partner/advertisement-plan');
    }

    function view_hastrek(){
        $userinfo = $this->userinfo;
        $data=$this->admin->getRawResult("Select * from tbl_hastrek_deal where deleted_at IS NULL");
        $this->load->view("partner/view_hastrek",compact('userinfo','data'));
    }

    function booking($deal_id){
        $userinfo = $this->userinfo;

        $deal=explode("-",$deal_id);
        $deal_type=$deal[0];
        $deal_type_id=$deal[1];

        if($deal_type=="HST"){
            $data['deal_data']=$this->admin->getRawRow("Select * from tbl_hastrek_deal where id='$deal_type_id'");
            $data['deal_dates']=$this->admin->getRawResult("Select * from tbl_ht_dates where ht_id='$deal_type_id'");
        }else{

        }

        $this->load->view("partner/booking_page",compact('userinfo','data','deal_id'));


    }

    function get_next_date($date,$days){
        $date_ = new DateTime($date);
        $interval = new DateInterval('P'.$days.'D');
        $date_->add($interval);


        echo $date_->format("Y-m-d");
    }

    function view_bookings(){
        $userinfo = $this->userinfo;
        $data=$this->admin->getRawResult("Select * from tbl_booking where user_type='$userinfo->type' and user_type_id='$userinfo->id'");
        $this->load->view("partner/all_booking",compact('userinfo','data'));
    }

    function view_booking_transactions($id){
        $userinfo = $this->userinfo;
        $booking_data=explode("-",$id);
        $booking_id=$booking_data[1];
        $deal_type=$booking_data[2];
        $deal_type_id=$booking_data[3];
        $data['booking_data']=$this->admin->getRawRow("Select * from tbl_booking where id='$booking_id'");
        $data['all_transaction_data']=$this->admin->getRawResult("Select tbl_wallet.id as wallet_id,
        tbl_wallet.amount, tbl_wallet.currency_id , tbl_wallet_transaction_details.id as transaction_id ,
        tbl_wallet_transaction_details.transaction_for,tbl_wallet_transaction_details.transaction_type,
        tbl_wallet.status,tbl_wallet.created_at
        from tbl_wallet_transaction_details, tbl_wallet
        where tbl_wallet_transaction_details.transaction_for='$id' and
        tbl_wallet_transaction_details.wallet_id=tbl_wallet.id");

        $amount_paid_yet=$this->admin->getRawRow("Select SUM(amount) as amount from tbl_wallet_transaction_details, tbl_wallet where tbl_wallet_transaction_details.transaction_for='$id' and tbl_wallet_transaction_details.wallet_id=tbl_wallet.id");

        $data['total_amount']=$data['booking_data']->price;
        $data['amount_paid_yet']=$amount_paid_yet->amount;

        if($amount_paid_yet->amount < $data['booking_data']->price){
            $pay_status="PARTIAL";
        }else{
            $pay_status="FULL";
        }
        $this->load->view("partner/booking_details",compact('userinfo','data','pay_status'));
    }

    function booking_next_installment($id){
        $userinfo=$this->userinfo;
        $this->load->view("partner/next_installment",compact('userinfo','id'));
    }

    function searchFlight(){
    
        $userinfo=$this->userinfo;
        $datas = $this->admin->getRawResult("Select distinct cityCode, cityName from airport_codes");
        $this->load->view("partner/search-flights", compact('datas', 'userinfo'));
    }

    public function searchFlightResults()
    {
    	
    	$data = json_decode(file_get_contents('php://input'), true);
	    #$apiKey = '112028f0143732-af9a-454a-82a0-7d5cbbaeb766';
        $apiKey = '710592025cf94af1-d737-4915-bc57-198534d97698';
	    #$url = 'https://apitest.tripjack.com/fms/v1/air-search-all';
        $url = 'https://tripjack.com/fms/v1/air-search-all';
	    $ch = curl_init($url);
	    curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));
	    curl_setopt($ch, CURLOPT_POST, 1);
	    $headers = array(
	        'Content-Type: application/json',
	        'apikey:' .$apiKey
	    );
	    curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
	    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	    $result = curl_exec($ch);
        if (curl_errno($ch)) {
        	$response = array();
        	$response['error'] = curl_error($ch);
       		$this->response($response, 400);
        } else {
            http_response_code(200);
        }
	    curl_close($ch);
	    $response = json_decode($result, true);
	    // echo "<pre>";
	    // print_r($data['JourneyType']);
        // print_r($data['PreferredArrivalTime']);
	    // exit;

        if($data['JourneyType'] == '1'){
            $travel_date    =  $data['PreferredDepartureTime']; 
            $return_date    =  ''; 
        }else{
            $travel_date    =  $data['PreferredDepartureTime']; 
            $return_date    =  $data['PreferredArrivalTime'];
        }
            
            

        $JourneyType = $data['JourneyType'];
        $Origin = $data['Origin'];
        $Destination = $data['Destination'];

        $AdultCount  = $data['AdultCount'];
        $ChildCount  = $data['ChildCount'];
        $InfantCount  = $data['InfantCount'];
        $is_blank = '0';
        $file_name = 'search-flight-results';
        if(isset($response['searchResult'])){
            if(isset($response['searchResult']['tripInfos']['COMBO'])){
                $response_onward = $response['searchResult']['tripInfos']['COMBO'];
                $response_return = '';
                $file_name = 'search-comobo-flight-results';
            }else if(isset($response['searchResult']['tripInfos']['ONWARD'])){
                $response_onward = $response['searchResult']['tripInfos']['ONWARD'];
                if($JourneyType == 2){
                    $response_return = $response['searchResult']['tripInfos']['RETURN'];
                }else{
                    $response_return = '';
                }
            }else{
                $response_onward = '';
                $response_return = '';
                $is_blank = '1';
            }
        }else{
            $response_onward = '';
            $response_return = '';
            $is_blank = '1';
        }
        
        
	    $cities = $this->admin->getRawResult("Select distinct cityCode, cityName from airport_codes");
        $this->load->view("partner/".$file_name, compact('response_onward', 'response_return', 'is_blank', 'data', 'cities', 'JourneyType', 'Origin', 'Destination', 'AdultCount',  'ChildCount', 'InfantCount', 'travel_date', 'return_date'));
    }

    public function reviewFlightDetails()
    {
    	
    	$data = json_decode(file_get_contents('php://input'), true);

	    #$apiKey = '112028f0143732-af9a-454a-82a0-7d5cbbaeb766';
        $apiKey = '710592025cf94af1-d737-4915-bc57-198534d97698';
	    #$url = 'https://apitest.tripjack.com/fms/v1/review';
        $url = 'https://tripjack.com/fms/v1/review';
	    $ch = curl_init($url);
	    curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data['priceIds']));
	    curl_setopt($ch, CURLOPT_POST, 1);
	    $headers = array(
	        'Content-Type: application/json',
	        'apikey:' .$apiKey
	    );
	    curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
	    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	    $result = curl_exec($ch);
        if (curl_errno($ch)) {
        	$response = array();
        	$response['error'] = curl_error($ch);
       		$this->response($response, 400);
        } else {
            http_response_code(200);
        }
	    curl_close($ch);
	    $response = json_decode($result, true);
	    
        if($response['status']['success'] == TRUE){
            $data['booking_id'] = $response['bookingId'];
            $base_price         = floatval($response['totalPriceInfo']['totalFareDetail']['fC']['BF']);
            $base_prices        = $base_price*8/100;
            $base_price         = round(($base_price-$base_prices),0);
            $tax_price          = floatval($response['totalPriceInfo']['totalFareDetail']['fC']['TAF']);
            $amount             = round(($base_price+$tax_price),0);
            $data['amount']     = $amount;
            $data['contacts']   = $data['contact_no'];
            $data['emails']     = $data['email'];

            $customer_payment                   = array();
            $customer_payment['user_id']        = $this->userinfo->id;
            $customer_payment['booking_id']     = $response['bookingId'];
            $customer_payment['origin']         = $data['origin'];
            $customer_payment['designation']    = $data['destination'];
            if($data['journey_type'] == '1'){
                $customer_payment['flight_name_1']  = $data['flight_name_1'];
                $customer_payment['flight_name_2']  = '';
                $customer_payment['flight_img_1']   = $data['flight_img_1'];
                $customer_payment['flight_img_2']   = '';
                $customer_payment['flight_from_1']   = $data['flight_from_1'];
                $customer_payment['flight_from_2']   = '';
                $customer_payment['flight_type_1']   = $data['flight_type_1'];
                $customer_payment['flight_type_2']   = '';
            }else{
                $customer_payment['flight_name_1']  = $data['flight_name_1'];
                $customer_payment['flight_name_2']  = $data['flight_name_2'];
                $customer_payment['flight_img_1']   = $data['flight_img_1'];
                $customer_payment['flight_img_2']   = $data['flight_img_2'];
                $customer_payment['flight_from_1']   = $data['flight_from_1'];
                $customer_payment['flight_from_2']   = $data['flight_from_2'];
                $customer_payment['flight_type_1']   = $data['flight_type_1'];
                $customer_payment['flight_type_2']   = $data['flight_type_2'];
            }
            
            $customer_payment['base_amount']    = $base_price;
            $customer_payment['tax_amount']     = $tax_price;
            $customer_payment['amount']         = $amount;
            $customer_payment['flight_amount']  = $response['totalPriceInfo']['totalFareDetail']['fC']['TF'];
            $customer_payment['travel_date']    = $data['travel_date'];
            $customer_payment['return_date']    = $data['return_date'];
            $customer_payment['status']         = 0;
            
            $this->admin->insert_data('tbl_customer_payments',$customer_payment);

            foreach ($data['titles'] as $key => $value) {
                $customer_booking                   = array();
                $customer_booking['user_id']        = $this->userinfo->id;
                $customer_booking['booking_id']     = $response['bookingId'];
                $customer_booking['title']          = $value;
                $customer_booking['first_name']     = $data['first_names'][$key];
                $customer_booking['last_name']      = $data['last_names'][$key];
                $customer_booking['dob']            = date("Y-m-d", strtotime($data['dobs'][$key]));
                $customer_booking['adult_type']     = $data['passenger_type'][$key];
                $customer_booking['adult_types']    = $data['passenger_types'][$key];
                $customer_booking['status']         = 0;
                $this->admin->insert_data('tbl_customer_booking_details',$customer_booking);
            }
            $customer_contact_details                   = array();
            $customer_contact_details['user_id']        = $this->userinfo->id;
            $customer_contact_details['booking_id']     = $response['bookingId'];
            $customer_contact_details['email']          = $data['email'];
            $customer_contact_details['nationality']    = $data['nationality'];
            $customer_contact_details['contact_no']     = $data['contact_no'];
            
            $this->admin->insert_data('tbl_customer_contact_details',$customer_contact_details);
            
            $stopages_count = (int)$data['stopages_count_1'];
            $stopages_count = $stopages_count+1;
            for ($x = 1;  $x <= $stopages_count; $x++) {
                $board_time         = 'board_time_'.$x;
                $board_city         = 'board_city_'.$x;
                $board_city_name    = 'board_city_name_'.$x;
                $board_airport      = 'board_airport_'.$x;
                $board_datetime     = 'board_datetime_'.$x;
                $duration           = 'duration_'.$x;
                $depart_time        = 'depart_time_'.$x;
                $depart_city	    = 'depart_city_'.$x;
                $depart_airport     = 'depart_airport_'.$x;
                $depart_datetime    = 'depart_datetime_'.$x;
                $depart_city_name   = 'depart_city_name_'.$x;
                
                
                $customer_flights                   = array();
                $customer_flights['user_id']        = $this->userinfo->id;
                $customer_flights['booking_id']     = $response['bookingId'];
                $customer_flights['board_time']         = $data['flight_params'][$board_time]; 
                $customer_flights['board_city']         = $data['flight_params'][$board_city]; 
                $customer_flights['board_city_name']    = $data['flight_params'][$board_city_name]; 
                $customer_flights['board_airport']      = $data['flight_params'][$board_airport]; 
                $customer_flights['board_datetime']     = $data['flight_params'][$board_datetime]; 
                $customer_flights['duration']           = $data['flight_params'][$duration]; 
                $customer_flights['depart_time']        = $data['flight_params'][$depart_time]; 
                $customer_flights['depart_city']        = $data['flight_params'][$depart_city];
                $customer_flights['depart_airport']     = $data['flight_params'][$depart_airport]; 
                $customer_flights['depart_datetime']    = $data['flight_params'][$depart_datetime]; 
                $customer_flights['depart_city_name']   = $data['flight_params'][$depart_city_name];
                $customer_flights['flight_type']        = 0;

                $this->admin->insert_data('tbl_customer_flight_details',$customer_flights);
            }

            if($data['journey_type'] == '2')
            {
                $stopages_count = (int)$data['stopages_count_2'];
                $stopages_count = $stopages_count+1;
                for ($x = 1;  $x <= $stopages_count; $x++) {
                    $board_time         = 'board_time_'.$x.'_2';
                    $board_city         = 'board_city_'.$x.'_2';
                    $board_city_name    = 'board_city_name_'.$x.'_2';
                    $board_airport      = 'board_airport_'.$x.'_2';
                    $board_datetime     = 'board_datetime_'.$x.'_2';
                    $duration           = 'duration_'.$x.'_2';
                    $depart_time        = 'depart_time_'.$x.'_2';
                    $depart_city	    = 'depart_city_'.$x.'_2';
                    $depart_airport     = 'depart_airport_'.$x.'_2';
                    $depart_datetime    = 'depart_datetime_'.$x.'_2';
                    $depart_city_name   = 'depart_city_name_'.$x.'_2';
                    
                    
                    $customer_flights                   = array();
                    $customer_flights['user_id']        = $this->userinfo->id;
                    $customer_flights['booking_id']     = $response['bookingId'];
                    $customer_flights['board_time']         = $data['flight_params_2'][$board_time]; 
                    $customer_flights['board_city']         = $data['flight_params_2'][$board_city]; 
                    $customer_flights['board_city_name']    = $data['flight_params_2'][$board_city_name]; 
                    $customer_flights['board_airport']      = $data['flight_params_2'][$board_airport]; 
                    $customer_flights['board_datetime']     = $data['flight_params_2'][$board_datetime]; 
                    $customer_flights['duration']           = $data['flight_params_2'][$duration]; 
                    $customer_flights['depart_time']        = $data['flight_params_2'][$depart_time]; 
                    $customer_flights['depart_city']        = $data['flight_params_2'][$depart_city];
                    $customer_flights['depart_airport']     = $data['flight_params_2'][$depart_airport]; 
                    $customer_flights['depart_datetime']    = $data['flight_params_2'][$depart_datetime]; 
                    $customer_flights['depart_city_name']   = $data['flight_params_2'][$depart_city_name];
                    $customer_flights['flight_type']        = 1;

                    $this->admin->insert_data('tbl_customer_flight_details',$customer_flights);
                }
            }
            
        } else {
            $data['booking_id'] = '0';
            $data['amount']     = '';
            $data['contacts']   = '';
            $data['emails']     = '';
            $data['message']    = $response['errors'][0]['message'];
        }
        

        $data['title']              = 'Checkout payment | The Travel Square';  
        $data['callback_url']       = base_url().'callback';
        $data['surl']               = base_url().'success-transaction';
        $data['furl']               = base_url().'failed-transaction';
        $data['currency_code']      = 'INR';

        $file_name = 'review-booking-details';
        $this->load->view("partner/".$file_name, compact('data'));
    }

    public function customerBookingDetails(){
        $userinfo = $this->userinfo;
        
        $data = json_decode(file_get_contents('php://input'), true);
        $this->db->select('*');
        $this->db->from('tbl_customer_payments');
        $this->db->where('booking_id', $data['booking_id']);
        $booking_details = $this->db->get()->row();
        
        $this->db->select('*');
        $this->db->from('tbl_customer_booking_details');
        $this->db->where('booking_id', $data['booking_id']);
        $customer_details = $this->db->get()->result();

        $this->db->select('*');
        $this->db->from('tbl_customer_flight_details');
        $this->db->where('booking_id', $data['booking_id']);
        $this->db->where('flight_type', '0');
        $customer_flight_details_one = $this->db->get()->result();

        $this->db->select('*');
        $this->db->from('tbl_customer_flight_details');
        $this->db->where('booking_id', $data['booking_id']);
        $this->db->where('flight_type', '1');
        $customer_flight_details_two = $this->db->get()->result();

        $this->load->view("partner/customer_booking_details",compact('userinfo', 'booking_details', 'customer_details', 'customer_flight_details_one', 'customer_flight_details_two'));
    }

    function view_booking_details(){
        $userinfo = $this->userinfo;

        $this->db->select('tbl_customer_payments.*, tbl_customer_contact_details.email, tbl_customer_contact_details.nationality, tbl_customer_contact_details.contact_no');
        $this->db->from('tbl_customer_payments');
        $this->db->join('tbl_customer_contact_details','tbl_customer_contact_details.booking_id=tbl_customer_payments.booking_id','Left');
        $this->db->where('tbl_customer_payments.user_id', $userinfo->id);
        $this->db->where('tbl_customer_payments.status', '1');
        $this->db->order_by('tbl_customer_payments.id', 'desc');
        $query = $this->db->get();

        $booking_result_data = $query->result();

        $booking_array = [];
        foreach($booking_result_data as $value) {
            $this->db->select('*');
            $this->db->from('tbl_customer_booking_details');
            $this->db->where('tbl_customer_booking_details.booking_id', $value->booking_id);
            $data = $this->db->get();

            $travel_date = date("d/m/Y", strtotime($value->travel_date));
            if($value->return_date == '0000-00-00'){
                $return_date = '';
            }else{
                $return_date = date("d/m/Y", strtotime($value->return_date));
            }

            $travel_data['booking_id']   = $value->booking_id;
            $travel_data['email']        = $value->email;
            $travel_data['contact_no']   = $value->contact_no;
            $travel_data['amount']       = $value->amount;
            $travel_data['name']         = $data->row()->title.' '.$data->row()->first_name.' '.$data->row()->last_name;
            $travel_data['travel_date']  = $travel_date;
            $travel_data['return_date']  = $return_date;
            array_push($booking_array, $travel_data);
        }
        //  echo '<pre>';
        // print_r($booking_array);
        // exit;
        $this->load->view("partner/all_booking_details",compact('userinfo','booking_array'));
    }



    // initialized cURL Request
    private function curl_handler($payment_id, $amount)  {
        $url            = 'https://api.razorpay.com/v1/payments/'.$payment_id.'/capture';
        // $key_id         = "rzp_test_uGwyejFAwbnPY4";
        // $key_secret     = "zpXzZ0jtZSHxjq3DKl5IenHB";
        $key_id         = "rzp_live_VMplwHkFeViE2n";
        $key_secret     = "WQk1yLcwbH3fyIq8onlZMWWF";
        $fields_string  = "amount=$amount";
        //cURL Request
        $ch = curl_init();
        //set the url, number of POST vars, POST data
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_USERPWD, $key_id.':'.$key_secret);
        curl_setopt($ch, CURLOPT_TIMEOUT, 60);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $fields_string);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, true);
        return $ch;
    }   
        
    // callback method
    public function callback() {   
        print_r($this->input->post());     
        if (!empty($this->input->post('razorpay_payment_id')) && !empty($this->input->post('merchant_order_id'))) {
            $razorpay_payment_id = $this->input->post('razorpay_payment_id');
            $merchant_order_id = $this->input->post('merchant_order_id');
            
            $this->session->set_flashdata('razorpay_payment_id', $this->input->post('razorpay_payment_id'));
            $this->session->set_flashdata('merchant_order_id', $this->input->post('merchant_order_id'));
            $currency_code = 'INR';
            $amount = $this->input->post('merchant_total');
            $success = false;
            $error = '';
            try {                
                $ch = $this->curl_handler($razorpay_payment_id, $amount);
                //execute post
                $result = curl_exec($ch);
                // echo "<pre>";
                // print_r($result);
                // exit;
                $http_status = curl_getinfo($ch, CURLINFO_HTTP_CODE);
                if ($result === false) {
                    $success = false;
                    $error = 'Curl error: '.curl_error($ch);
                } else {
                    $response_array = json_decode($result, true);
                        //Check success response
                        if ($http_status === 200 and isset($response_array['error']) === false) {
                            $success = true;
                        } else {
                            $success = false;
                            if (!empty($response_array['error']['code'])) {
                                $error = $response_array['error']['code'].':'.$response_array['error']['description'];
                            } else {
                                $error = 'RAZORPAY_ERROR:Invalid Response <br/>'.$result;
                            }
                        }
                }
                //close curl connection
                curl_close($ch);
            } catch (Exception $e) {
                $success = false;
                $error = 'Request to Razorpay Failed';
            }
            
            if ($success === true) {
                if(!empty($this->session->userdata('ci_subscription_keys'))) {
                    $this->session->unset_userdata('ci_subscription_keys');
                }
                if (!$order_info['order_status_id']) {
                    redirect($this->input->post('merchant_surl_id'));
                } else {
                    redirect($this->input->post('merchant_surl_id'));
                }

            } else {
                redirect($this->input->post('merchant_furl_id'));
            }
        } else {
            echo 'An error occured. Contact site administrator, please!';
        }
    } 
    public function successTransaction() {

        $customer_payment['status'] = 1;
        $this->admin->edit_data('booking_id',$this->session->flashdata('merchant_order_id'),$customer_payment,'tbl_customer_payments');
        $this->admin->edit_data('booking_id',$this->session->flashdata('merchant_order_id'),$customer_payment,'tbl_customer_booking_details');

        $this->db->select('*');
        $this->db->from('tbl_customer_booking_details');
        $this->db->where('booking_id', $this->session->flashdata('merchant_order_id'));
        $query = $this->db->get();
        $booking_result_data = $query->result();
        $booking_array = [];
        foreach($booking_result_data as $value) {
               $travel_data =  array();
               $travel_data['dob']  = $value->dob;
               $travel_data['fN']   = $value->first_name;
               $travel_data['lN']   = $value->adult_type;
               $travel_data['pt']   = $value->adult_types;
               $travel_data['ti']   = $value->title;
              array_push($booking_array, $travel_data);
        }

        $this->db->select('*');
        $this->db->from('tbl_customer_contact_details');
        $this->db->where('booking_id', $this->session->flashdata('merchant_order_id'));
        $query = $this->db->get();
        $contact_details = $query->row();
        $no = array($contact_details->contact_no);
        $email = array($contact_details->email);
        $deliveryInfo_array = array('contacts'=>$no, 'emails'=>$email);


        $this->db->select('*');
        $this->db->from('tbl_customer_payments');
        $this->db->where('booking_id', $this->session->flashdata('merchant_order_id'));
        $query = $this->db->get();
        $payment_details = $query->row();

        $paymentInfos_array = array('amount'=>$payment_details->flight_amount);

        $json_data_array = [];
        $json_data_array['bookingId'] = $this->session->flashdata('merchant_order_id');
        $json_data_array['deliveryInfo'] = $deliveryInfo_array;
        $json_data_array['paymentInfos'] = array($paymentInfos_array);
        $json_data_array['travellerInfo'] = $booking_array;


        // $json_data = $json_data_array;
        // echo '<pre>';
        // print_r(json_encode($json_data_array));
        // exit;
        #$apiKey = '112028f0143732-af9a-454a-82a0-7d5cbbaeb766';
        $apiKey = '710592025cf94af1-d737-4915-bc57-198534d97698';
	    #$url = 'https://apitest.tripjack.com/oms/v1/air/book';
        $url = 'https://tripjack.com/oms/v1/air/book';
        
	    $ch = curl_init($url);
	    curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($json_data_array));
	    curl_setopt($ch, CURLOPT_POST, 1);
	    $headers = array(
	        'Content-Type: application/json',
	        'apikey:' .$apiKey
	    );
	    curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
	    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	    $result = curl_exec($ch);
        if (curl_errno($ch)) {
        	$response = array();
        	$response['error'] = curl_error($ch);
       		$this->response($response, 400);
        } else {
            http_response_code(200);
        }
	    curl_close($ch);
	    $response = json_decode($result, true);
	    

        if($response['status']['success'] == True){
            #$apiKey = '112028f0143732-af9a-454a-82a0-7d5cbbaeb766';
            $apiKey = '710592025cf94af1-d737-4915-bc57-198534d97698';
            #$url = 'https://apitest.tripjack.com/oms/v1/booking-details';
            $url = 'https://tripjack.com/oms/v1/booking-details';
            $json_data_array = array('bookingId'=>$this->session->flashdata('merchant_order_id'));
            $ch = curl_init($url);
            curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($json_data_array));
            curl_setopt($ch, CURLOPT_POST, 1);
            $headers = array(
                'Content-Type: application/json',
                'apikey:' .$apiKey
            );
            curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            $result = curl_exec($ch);
            if (curl_errno($ch)) {
                $response = array();
                $response['error'] = curl_error($ch);
                $this->response($response, 400);
            } else {
                http_response_code(200);
            }
            curl_close($ch);
            $response = json_decode($result, true);
            $customer_payments['booking_details'] = $result;    
            $this->admin->edit_data('booking_id',$this->session->flashdata('merchant_order_id'),$customer_payments,'tbl_customer_payments');
        
        }else{
            echo "<pre>";
            print_r($result);
            exit;
        }
        

        $data['title'] = 'Razorpay Success | The Travel Square';
        $data['razorpay_payment_id']    = $this->session->flashdata('razorpay_payment_id');
        $data['merchant_order_id']     = $this->session->flashdata('merchant_order_id');
        $data['base_url']               = base_url().'/Partner/view_booking_details';
        $file_name = 'success-transaction';
        $this->load->view("partner/".$file_name, compact('data'));
    }  
    public function failedTransaction() {
        $customer_payment['status'] = 2;
        $this->admin->edit_data('booking_id',$this->session->flashdata('merchant_order_id'),$customer_payment,'tbl_customer_payments');

        $data['title'] = 'Razorpay Failed | The Travel Square';  
        $data['razorpay_payment_id']    = $this->session->flashdata('razorpay_payment_id');
        $data['merchant_order_id']     = $this->session->flashdata('merchant_order_id');
        $data['base_url']               = base_url().'search-flight';
        $file_name = 'failed-transaction';
        $this->load->view("partner/".$file_name, compact('data'));

    }

    public function flightFareResults()
    {
    	
    	$data = json_decode(file_get_contents('php://input'), true);
	    $apiKey = $data['API-Token'];
	    $url = 'http://partner.thetravelsquare.in/api/FlightFareQuotes';
	    $ch = curl_init($url);
	    curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));
	    curl_setopt($ch, CURLOPT_POST, 1);
	    $headers = array(
	        'Content-Type: application/json',
	        'Accept: application/json',
	        'API-Token:' .$apiKey
	    );
	    curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
	    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	    $result = curl_exec($ch);
        if (curl_errno($ch)) {
        	$response = array();
        	$response['error'] = curl_error($ch);
       		$this->response($response, 400);
        } else {
            http_response_code(200);
        }
	    curl_close($ch);
	    $response = json_decode($result, true);
	    echo "<pre>";
	    print_r($response);
	    exit;
        $JourneyType = $data['JourneyType'];
        $Origin = $data['Origin'];
        $Destination = $data['Destination'];

        $AdultCount  = $data['AdultCount'];
        $ChildCount  = $data['ChildCount'];
        $InfantCount  = $data['InfantCount'];

	    $cities = $this->admin->getRawResult("Select distinct cityCode, cityName from airport_codes");
        $this->load->view("partner/search-flight-results", compact('response', 'data', 'cities', 'JourneyType', 'Origin', 'Destination', 'AdultCount',  'ChildCount', 'InfantCount'));
    }

    public function flightSearchPost()
    {
        echo 'hi';die;
      $inputs = $this->input->post();
      print_r($inputs);die;
      $data = json_decode(file_get_contents('php://input'), true);
      $apiKey = $data['API-Token'];
      /*$data_curl = [
        'AdultCount'            => $data['AdultCount'],
        'ChildCount'            => $data['ChildCount'],
        'ClientId'           => $data['ClientId'],
        'EndUserIp'           => $data['EndUserIp'],
        'InfantCount'           => $data['InfantCount'],
        'JourneyType'           => $data['JourneyType'],
        'Password'           => $data['Password'],
        'Segments'           => [
          [
            'Destination' => $data['Destination_1'],
            'FlightCabinClass' => $data['FlightCabinClass_1'],
            'Origin' => $data['Origin_1'],
            'PreferredArrivalTime' => $data['PreferredArrivalTime_1'],
            'PreferredDepartureTime' => $data['PreferredDepartureTime_1'],
          ],
          [
            'Destination' => $data['Destination_2'],
            'FlightCabinClass' => $data['FlightCabinClass_2'],
            'Origin' => $data['Origin_2'],
            'PreferredArrivalTime' => $data['PreferredArrivalTime_2'],
            'PreferredDepartureTime' => $data['PreferredDepartureTime_2'],
          ]
        ],
        'UserName' => $data['UserName']
      ];*/

      /* API URL */
       $url = 'https://flight.srdvtest.com/v5/rest/Search';
      //  $url = 'https://flight.srdvapi.com/v5/rest/Search';
       /* Init cURL resource */
       $ch = curl_init($url);
       /* pass encoded JSON string to the POST fields */
       curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));
       curl_setopt($ch, CURLOPT_POST, 1);
       // curl_setopt($ch, CURLOPT_USERPWD, "api-key: rzp_test_1U3fdUZx6lMZ13-iCS5tAavgvQ7B9mlv5EZFPio");
       // curl_setopt($ch, CURLOPT_USERPWD, 'rzp_test_1U3fdUZx6lMZ13' . ':' . 'iCS5tAavgvQ7B9mlv5EZFPio');
      $headers = array(
        'Content-Type: application/json',
        'Accept: application/json',
        'API-Token:' .$apiKey
      );
      // $headers[] = 'Accept: application/json';
      // $headers[] = 'Content-Type: application/json';
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
        $response = json_decode($result, true);
       /* close cURL resource */
       curl_close($ch);

       $this->response($response, REST_Controller::HTTP_OK);
      }


    function flightSearchResult(){
        $this->load->view("partner/flight-search-results");
    }

    function flightTravellersDetails(){
        $this->load->view("partner/flight-traveller-details");
    }

    function travellersDetails(){

        $adult_start_date = date("Y-m-d");
        $adult_start_date = date('Y-m-d', strtotime($adult_start_date. ' - 120 years'));

        $adult_end_date = date("Y-m-d");
        $adult_end_date = date('Y-m-d', strtotime($adult_end_date. ' - 12 years'));

        $child_start_date = date("Y-m-d");
        $child_start_date = date('Y-m-d', strtotime($child_start_date. ' - 12 years'));

        $child_end_date = date("Y-m-d");
        $child_end_date = date('Y-m-d', strtotime($child_end_date. ' - 2 years'));

        $infant_start_date = date("Y-m-d");
        $infant_start_date = date('Y-m-d', strtotime($infant_start_date. ' - 2 years'));

        $infant_end_date = date("Y-m-d");
        $infant_end_date = date('Y-m-d', strtotime($infant_end_date. ' - 0 years'));


        $data = json_decode(file_get_contents('php://input'), true);
        // echo '<pre>';
        // print_r($data);
        // exit;
        $this->load->view("partner/traveller-details", compact('data', 'adult_start_date', 'adult_end_date', 'child_start_date', 'child_end_date', 'infant_start_date', 'infant_end_date'));
    }

    function appImageOptions(){
        $userinfo = $this->userinfo;
        $this->load->view("partner/app-image-options", compact('userinfo'));
    }

    function flightAppImage(){

      $userinfo = $this->userinfo;
      $button_array = [
        'home_screen_background',
        'vacations_by_theme',
        'trending_destinations',
        'unexplored_destinations',
        'message_box_upper_inspiration',
        'message_box_lower_inspiration',
        'trending_experience',
        'best_offer_and_deals',
        'video_box'
      ];
      $button_name = $this->input->post();
      $button_name = array_values($button_name);
      if(in_array($button_name[0], $button_array)){
        $button_clicked = $button_name[0];
      }else{
        $button_clicked = '';
      }
      $this->load->view("partner/flight-app-image", compact('button_clicked', 'userinfo'));
    }
    function postAppImage(){
      $inputs = $this->input->post();
      $data = [
        'type_name' => $inputs['type'],
        'image_url' => $inputs['image_url'],
        'title' => $inputs['title'],
        'sub_title' => $inputs['subtitle'],
        'destination_link' => $inputs['destination_link'],
        'button_name' => $inputs['button_name'],
        'button_link' => $inputs['button_link'],
      ];
      $this->db->insert('app_images',$data);
      redirect('app-image-table');
    }
    function appImageTable(){
      $query = $this->db->get('app_images');
      $query = $query->result();
      $this->load->view("partner/app_image_table", compact('query'));
    }
    function editAppImageTable(){
      $inputs = $this->input->get();
      $id = $inputs['act_id'];
      $query = $this->db->where('id', $id);
      $query = $this->db->get('app_images')->row();
      $button_clicked = $query->type_name;
      $this->load->view("partner/app_image_edit", compact('query', 'button_clicked'));
    }
    function updateAppImageTable(){
      $inputs = $this->input->post();
      $this->db->where('id',$inputs['act_id'])
               ->update('app_images',
                  array(
                        "image_url" => $inputs['image_url'],
                        "title" => $inputs['title'],
                        "sub_title" => $inputs['subtitle'],
                        "destination_link" => $inputs['destination_link'],
                        "button_name" => $inputs['button_name'],
                        "button_link" => $inputs['button_link'],
                        )
                );
      redirect('app-image-table');
    }


}
