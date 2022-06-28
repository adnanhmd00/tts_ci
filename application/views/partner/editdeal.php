<!DOCTYPE html>
<html lang="en">
    <!-- begin::Head -->
    <head>
        <?php include('head.php');?>
    </head>
    <!-- end::Head -->
    <!-- begin::Body -->
    <body class="kt-quick-panel--right kt-demo-panel--right kt-offcanvas-panel--right kt-header--fixed kt-header-mobile--fixed kt-subheader--enabled kt-subheader--fixed kt-subheader--solid kt-aside--enabled kt-aside--fixed" style="">
        <!-- begin:: Page -->
        <!-- begin:: Header Mobile -->
        <div id="kt_header_mobile" class="kt-header-mobile  kt-header-mobile--fixed ">
            <div class="kt-header-mobile__logo">
                <a href="http://partner.thetravelsquare.in/">
                <img alt="The Travel Square" src="http://partner.thetravelsquare.in/uploads/b2b/the-travel-square-logo.png" width="30" height="30">
                </a>
            </div>
            <div class="kt-header-mobile__toolbar">
                <button class="kt-header-mobile__toggler kt-header-mobile__toggler--left" id="kt_aside_mobile_toggler"><span></span></button>
                <button class="kt-header-mobile__toggler" id="kt_header_mobile_toggler"><span></span></button>
                <button class="kt-header-mobile__topbar-toggler" id="kt_header_mobile_topbar_toggler"><i class="flaticon-more"></i></button>
            </div>
        </div>
        <!-- end:: Header Mobile -->
        <div class="kt-grid kt-grid--hor kt-grid--root">
            <div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--ver kt-page">
                <!-- begin:: Aside -->
                <!-- Uncomment this to display the close button of the panel
                    <button class="kt-aside-close " id="kt_aside_close_btn"><i class="la la-close"></i></button>
                    -->
                <div class="kt-aside  kt-aside--fixed  kt-grid__item kt-grid kt-grid--desktop kt-grid--hor-desktop" id="kt_aside">
                    <!-- begin:: Aside -->
                    <?php include('aside.php');?>
                    <!-- end:: Aside Menu -->				
                </div>
                <!-- end:: Aside -->
                <div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor kt-wrapper" id="kt_wrapper">
                    <!-- begin:: Header -->
                    <?php include('nav.php');?>
                    <!-- end:: Header -->
                    <div class="kt-content  kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor" id="kt_content">
                        <!-- begin:: Content Head -->
                        <div class="kt-subheader  kt-grid__item" id="kt_subheader">
                            <div class="kt-container  kt-container--fluid ">
                                <div class="kt-subheader__main">
                                    <h3 class="kt-subheader__title">Edit Deal | Partner Deal | Deal ID</h3>
                                    
                                </div>

                            </div>
                        </div>
                        <!-- end:: Content Head -->
                        <!-- begin:: Content -->
                        <div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">
						
						<div class="alert alert-light alert-elevate" role="alert">
								
								<div class="alert-text">
                                   Update / Change or <b>Modify Your Posted Deal Itinerary</b> and Details From Here Instanly on The Travel Square Platform.
                                </div>
							</div>
                            <!--Begin::Dashboard 1-->
                            <!--Begin::Row-->
                            <div class="row">
                                <div class="col-lg-12 col-xl-12">
                                    <div class="kt-portlet">
                                        <div class="kt-portlet__head">
                                            <div class="kt-portlet__head-label">
                                                <h3 class="kt-portlet__head-title">
                                                    Updated Deal Details | <?= $data['deal_data']->title;?> 
                                                </h3>
                                            </div>
                                        </div>
                                        <!--begin::Form-->
                                        <?php echo form_open_multipart('editdealform/'.$data['deal_data']->id, 'class="kt-form"');?>
                                            <div class="kt-portlet__body">
                                            <p><?php echo $this->session->flashdata('item'); ?></p>
                                                

                                                <div class="kt-section kt-section--first">
                                                    <!-- <div class="form-group">
                                                    <label>Status</label>
                                                        <select class="form-control" name="status" required>
                                                        <option value="approved" <?php if('approved'==$data['deal_data']->status) { echo set_select('select', 'Approved' , TRUE); } ?> >Approved</option>
                                                        <option value="declined" <?php if('declined'==$data['deal_data']->status) { echo set_select('select', 'Decliner' , TRUE); } ?> >Declined</option>
                                                        <option value="pending" <?php if('pending'==$data['deal_data']->status) { echo set_select('select', 'Pending' , TRUE); } ?> >Pending</option>
                                                            
                                                        </select>
                                                    </div> -->
                                                    <?php if(!empty($data['deal_data']->flight_trip_type)){ ?>
                                                    <div class="form-group">
                                                        <div class="kt-radio-inline">
                                                            <label class="kt-radio">
                                                                <input required type="radio" value="One Way" name="flight_trip_type"
                                                                <?php if($data['deal_data']->flight_trip_type=='One Way'){echo 'checked';}?>
                                                                > One Way
                                                                <span></span>
                                                            </label>
                                                            <label class="kt-radio">
                                                                <input required type="radio" value="Round Trip" name="flight_trip_type" 
                                                                <?php if($data['deal_data']->flight_trip_type=='Round Trip'){echo 'checked';}?>
                                                                > Round Trip
                                                                <span></span>
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <?php }?>
                                                    <?php if(!empty($data['deal_data']->package_type)){ ?>

                                                    <div class="form-group">
                                                        <div class="kt-radio-inline">
                                                            <label class="kt-radio">
                                                                <input required type="radio" value="Fixed Departure" name="package_type"
                                                                <?php if($data['deal_data']->package_type=='Fixed Departure'){echo 'checked';}?>
                                                                > Fixed Departure
                                                                <span></span>
                                                            </label>
                                                            <label class="kt-radio">
                                                                <input required type="radio" value="Customised" name="package_type"
                                                                <?php if($data['deal_data']->package_type=='Customised'){echo 'checked';}?>
                                                                > Customised
                                                                <span></span>
                                                            </label>
                                                            <label class="kt-radio">
                                                                <input required type="radio" value="Regular" name="package_type" 
                                                                <?php if($data['deal_data']->package_type=='Regular'){echo 'checked';}?>
                                                                > Regular
                                                                <span></span>
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <?php }?>

                                                    <div class="form-group">
                                                        <label>Title</label>
                                                        <input type="text" class="form-control" placeholder="Title" name="title" value="<?= $data['deal_data']->title;?>" required>
                                                    </div>

                                                    <div class="form-group">
                                                    <label>Currency</label>
                                                        <select class="form-control" name="currency_id" required>
                                                            
                                                                <?php foreach($currency_data as $row){ ?>
                                                                    <option value="<?= $row->id;?>" <?php if($row->id==$data['deal_data']->currency_id) { echo set_select('select', $row->name , TRUE); } ?> ><?= $row->name;?></option>
                                                                <?php } ?>
                                                            
                                                        </select>
                                                    </div>

                                                    <div class="form-group">
                                                    <label>B2b Price</label>
                                                        <input type="number" class="form-control" placeholder="B2B Price" value="<?= $data['deal_data']->new_price;?>" required name="new_price">
                                                    </div>
                                                    <div class="form-group">
                                                    <label>B2C Price</label>
                                                        <input type="number" class="form-control" placeholder="B2C Price" value="<?= $data['deal_data']->old_price;?>" required name="old_price">
                                                    </div>
                                                    <div class="form-group">
                                                    <label>No Of Days</label>
                                                        <input type="number" class="form-control" placeholder="No Of Days" value="<?= $data['deal_data']->noofdays;?>" required name="noofdays">
                                                    </div>
                                                    <div class="form-group">
                                                    <label>No of Night</label>
                                                        <input type="number" class="form-control" placeholder="No Of Nights" value="<?= $data['deal_data']->noofnights;?>" required name="noofnights">
                                                    </div>
                                                    <!-- <div class="form-group">
                                                        <input type="number" class="form-control" placeholder="TAC (Travel Agent Comission)" value="<?= $data['deal_data']->tac;?>" required name="tac">
                                                    </div> -->
                                                    <div class="form-group">
                                                    <label>Unit Type</label>
                                                        <select class="form-control" name="unit_type" required>
                                                            <option value="Per Person" <?php if('Per Person'==$data['deal_data']->unit_type) { echo set_select('select', 'Per Person' , TRUE); } ?> >Per Person</option>
                                                            <option value="Per Night" <?php if('Per Night'==$data['deal_data']->unit_type) { echo set_select('select', 'Per Night' , TRUE); } ?> >Per Night</option>
                                                            
                                                        </select>
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Details</label>
                                                        <!-- <textarea class="form-control" name="details" placeholder="Details"></textarea> -->
                                                        <div class="tinymce-wrap">
                                                            <textarea class="tinymce" name="details" placeholder="Details"><?= $data['deal_data']->details;?></textarea>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Cancellation Policy</label>
                                                        <div class="tinymce-wrap">
                                                            <textarea class="tinymce" name="cancelation_policy" placeholder="Cancelation Policy"><?= $data['deal_data']->cancelation_policy;?></textarea>
                                                        </div>
                                                        <!-- <textarea class="form-control" name="cancelation_policy" placeholder="Cancelation Policy"></textarea> -->
                                                    </div>
                                                    <div class="form-group">
                                                    <label>Destination</label>
                                                        <input type="text" class="form-control" placeholder="Destination" required value="<?= $data['deal_data']->destination;?>" name="destination">
                                                    </div>
                                                    <div class="form-group">
                                                    <label>Valid Untill</label>
                                                        <input type="text" class="form-control" id="kt_datepicker_3" placeholder="Valid Untill" value="<?= $data['deal_data']->valid_untill;?>" required name="valid_untill">
                                                    </div>
                                                    <?php if(!empty($data['deal_data']->hotel_name_room_meal)){?>
                                                    <div class="form-group">
                                                    <label>Hotel,room,meal</label>
                                                        <input type="text" class="form-control" value="<?= $data['deal_data']->hotel_name_room_meal;?>" placeholder="Hotel Name, Room Category, Meal Plan" value="<?= $data['deal_data']->hotel_name_room_meal;?>" name="hotel_name_room_meal">
                                                    </div>
                                                    <?php }?>
                                                </div>
                                            </div>
                                            <div class="kt-portlet__foot">
                                                <div class="kt-form__actions">
                                                    <button type="submit" class="btn btn-dark">Submit</button>
                                                    <button type="reset" class="btn btn-secondary">Cancel</button>
                                                </div>
                                            </div>
                                        </form>
                                        <!--end::Form-->
                                    </div>
                                    <!--end::Portlet-->

                                </div>
                            </div>
                            <!--End::Row-->
                            <!--Begin::Row-->
                            
                            <!--End::Row-->
                            <!--End::Dashboard 1-->	
                        </div>
                        <!-- end:: Content -->				
                    </div>
                    <!-- begin:: Footer -->
                        <?php include('footer.php');?>
                    <!-- end:: Footer -->			
                </div>
            </div>
        </div>
        <!-- end:: Page -->
        <!-- begin::Quick Panel -->
        
        <!-- end::Quick Panel -->
        <!-- begin::Scrolltop -->
        <div id="kt_scrolltop" class="kt-scrolltop">
            <i class="fa fa-arrow-up"></i>
        </div>
        <!-- end::Scrolltop -->
        <!-- begin::Sticky Toolbar -->
        <ul class="kt-sticky-toolbar" style="margin-top: 30px;">
            <li class="kt-sticky-toolbar__item kt-sticky-toolbar__item--success" id="kt_demo_panel_toggle" data-toggle="kt-tooltip" title="" data-placement="right" data-original-title="TravPay Wallet">
                <a href="http://partner.thetravelsquare.in/travpay" class=""><i class="flaticon2-drop"></i></a>
            </li>
            <li class="kt-sticky-toolbar__item kt-sticky-toolbar__item--brand" data-toggle="kt-tooltip" title="" data-placement="left" data-original-title="My Account Manager">
                <a href="tel:9999007037"><i class="flaticon2-gear"></i></a>
            </li>
            <li class="kt-sticky-toolbar__item kt-sticky-toolbar__item--warning" data-toggle="kt-tooltip" title="" data-placement="left" data-original-title="Help">
                <a href="mailto:partnercare@thetravelsquare.in" target="_blank"><i class="flaticon2-telegram-logo"></i></a>
            </li>
            <li class="kt-sticky-toolbar__item kt-sticky-toolbar__item--danger" id="kt_sticky_toolbar_chat_toggler" data-toggle="kt-tooltip" title="" data-placement="left" data-original-title="Chat Us">
                <a href="https://wa.me/919999007037" target="_blank" data-toggle="modal" data-target="#kt_chat_modal"><i class="flaticon2-chat-1"></i></a>
            </li>
        </ul>
        <!-- end::Sticky Toolbar -->
        <!-- begin::Demo Panel -->
        
        <!--ENd:: Chat-->
        <?php include('jquery.php');?>

        <!-- Tinymce JavaScript -->
        <script src="<?= base_url('resource/auth/vendors/tinymce/tinymce.min.js');?>"></script>

        <!-- Tinymce Wysuhtml5 Init JavaScript -->
        <script src="<?= base_url('resource/auth/dist/js/tinymce-data.js');?>"></script>

    </body>
</html>