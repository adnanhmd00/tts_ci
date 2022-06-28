<!DOCTYPE html>

<html lang="en" >
   
    <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
	
    <head>
        <?php include('head.php');?>
        <link href="<?= base_url('resource/agroxa/plugins/datatables/dataTables.bootstrap4.min.css');?>" rel="stylesheet" type="text/css" />
        <link href="<?= base_url('resource/agroxa/plugins/datatables/buttons.bootstrap4.min.css');?>" rel="stylesheet" type="text/css" />
        <!-- Responsive datatable examples -->
        <link href="<?= base_url('resource/agroxa/plugins/datatables/responsive.bootstrap4.min.css');?>" rel="stylesheet" type="text/css" />

    </head>
    <!-- end::Head -->
    <!-- begin::Body -->
    <body  class="kt-quick-panel--right kt-demo-panel--right kt-offcanvas-panel--right kt-header--fixed kt-header-mobile--fixed kt-subheader--enabled kt-subheader--fixed kt-subheader--solid kt-aside--enabled kt-aside--fixed kt-page--loading"  >
        <!-- begin:: Page -->
        <!-- begin:: Header Mobile -->
        <div id="kt_header_mobile" class="kt-header-mobile  kt-header-mobile--fixed " >
            <div class="kt-header-mobile__logo">
                <a href="http://partner.thetravelsquare.in/">
                <img alt="Logo" src="http://partner.thetravelsquare.in/uploads/b2b/the-travel-square-logo.png" width="30" height="30"/>
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
                        <!-- begin:: Subheader -->
                        <div class="kt-subheader   kt-grid__item" id="kt_subheader">
                            <div class="kt-container  kt-container--fluid ">
                                <div class="kt-subheader__main">
                                    <h3 class="kt-subheader__title">
                                        My Deals 	                           
                                    </h3>

                                </div>
                            </div>
                        </div>
                        <!-- end:: Subheader -->
                        <!-- begin:: Content -->
                        <div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">
						
						<div class="alert alert-light alert-elevate" role="alert">
								<div class="alert-text">
                                    Here are all the <b>Deals Posted by You on The Travel Square B2B Business Platform for Free Advertisnment</b>. Make Changes, for Your Current Deal From 
									Here. Manage Image Banners, Text Content, Dates and Record of Your Best Travel Deals.
                                </div>
							</div>
							
                            <div class="card-body">
                                    <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 10; width: 100%; background-color:white;">
                                        <thead>
                                            <tr>
												<th>Image</th>
                                                <th>Deal Details</th>
                                                <th>Status</th>
                                                <th>Type</th>
                                                <th>Edit</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php foreach($mdata as $row){ ?>
                                            <tr>
                                                <td><img src="<?= $row['image'];?>" width="100" height="100"/></td>
                                                <td width="100%">
                                                    <!-- <a href="<?= base_url('partner/deal/'.$row['id']);?>" style="color:black;"> -->
                                                        <?php if($row['status']=='approved'){ ?>
                                                        <a href="<?= base_url('partner/deal/'.$row['id']);?>" >
                                                            <h6 style="background-color:white;padding:15px;"><?= $row['title'];?></h6>
                                                        </a>
                                                        <?php }?>
                                                        <?php if($row['status']!='approved'){ ?>
                                                        <h6 style="background-color:white;padding:15px;"><?= $row['title'];?></h6>
                                                        <?php }?>
                                                        <hr>
                                                        <p align="right"> Price : Rs. <?= $row['b2bprice'];?> </p>
                                                    <!-- </a> -->
                                                </td>
                                                <td><?= ucwords($row['status']);?></td>
                                                <td><?= ucwords($row['deal_type']);?></td>
                                                <td>


                                                    <div class="kt-demo-icon__overlay">
                                                        <a href="<?= base_url('partner/deletedeal/'.$row['id']);?>" class="btn btn-sm btn-dark">
                                                            Delete
                                                        </a>
                                                        <a href="<?= base_url('partner/edit/'.$row['id']);?>" class="btn btn-sm btn-dark">
                                                            Deal
                                                        </a>
                                                        <a href="<?= base_url('partner/edit/deal/image/'.$row['id']);?>" class="btn btn-sm btn-dark">
                                                            Images
                                                        </a>
                                                        <a href="<?= base_url('partner/edit/deal/date/'.$row['id']);?>" class="btn btn-sm btn-dark">
                                                            Dates
                                                        </a>
                                                        <?php if($row['deal_type_id']==1){ ?>
                                                            <a href="<?= base_url('partner/edit/deal/inclusion/'.$row['id']);?>" class="btn btn-sm btn-dark">
                                                                Inclusion
                                                            </a>
                                                        <?php }?>
                                                    </div>


                                                </td>
                                            </tr>
                                            <?php }?>
                                        </tbody>
                                    </table>

                            </div>
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
        <script src="<?= base_url('resource/agroxa/plugins/datatables/dataTables.responsive.min.js');?>"></script>
        <script src="<?= base_url('resource/agroxa/plugins/datatables/responsive.bootstrap4.min.js');?>"></script>

        <!-- Datatable init js -->
        <script src="<?= base_url('resource/agroxa/assets/pages/datatables.init.js');?>"></script>

    </body>
    <!-- end::Body -->
    <!-- Mirrored from keenthemes.com/metronic/preview/demo1/crud/datatables/advanced/multiple-controls.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 11 Apr 2020 05:21:55 GMT -->
</html>