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
                    <!-- end:: Aside -->	<!-- begin:: Aside Menu -->
                    
                    <!-- end:: Aside Menu -->				
                </div>
                <!-- end:: Aside -->
                <div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor kt-wrapper" id="kt_wrapper">
                    <!-- begin:: Header -->
                    <div id="kt_header" class="kt-header kt-grid__item  kt-header--fixed ">
                        <!-- begin:: Header Menu -->
                        <!-- Uncomment this to display the close button of the panel
                            <button class="kt-header-menu-wrapper-close" id="kt_header_menu_mobile_close_btn"><i class="la la-close"></i></button>
                            -->
                        <?php include('nav.php');?>
                        <!-- end:: Header Menu -->
                        <!-- begin:: Header Topbar -->
                       
                        <!-- end:: Header Topbar -->
                    </div>
                    <!-- end:: Header -->
                    <div class="kt-content  kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor" id="kt_content">
                        <!-- begin:: Content Head -->
                        <div class="kt-subheader  kt-grid__item" id="kt_subheader">
                            <div class="kt-container  kt-container--fluid ">
                                <div class="kt-subheader__main">
                                    <h3 class="kt-subheader__title">Make a Payment | Booking ID</h3>
                                    
                                </div>
                            </div>
                        </div>
                        <!-- end:: Content Head -->
                        <!-- begin:: Content -->
                        <div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">
						
						<div class="alert alert-light alert-elevate" role="alert">
								<div class="alert-text">
                                   <b>Make a Your Balance Payment</b> for this Booking Online.
                                </div>
							</div>
                            <!--Begin::Dashboard 1-->
                            <!--Begin::Row-->
                            <div class="row">
                                <div class="col-lg-12 col-xl-12 ">
                                    <div class="kt-portlet">
                                        <div class="kt-portlet__head">
                                            <div class="kt-portlet__head-label">
                                                <h3 class="kt-portlet__head-title">
                                                    Pay Instalment
                                                </h3>
                                            </div>
                                        </div>


                                        <!--begin::Form-->
                                        <?php echo form_open_multipart('PartnerBooking/next_installment/'.$id, 'class="kt-form"');?>
                                        
                                            <div class="kt-portlet__body">
                                            <p><?php echo $this->session->flashdata('item'); ?></p>
                                                

                                                <div class="kt-section kt-section--first">
                                                    

                                                    <div class="form-group">
                                                        <input type="number" class="form-control" placeholder="Amount" required name="amount">
                                                    </div>
                                                    
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
                <a href="http://partner.thetravelsquare.in/partner-travpay" class=""><i class="flaticon2-drop"></i></a>
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