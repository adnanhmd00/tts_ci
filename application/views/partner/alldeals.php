<!DOCTYPE html>

<html lang="en" >
    <!-- Added by HTTrack -->
    <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
    <!-- /Added by HTTrack -->
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
                                        B2B Travel Deals                           
                                    </h3>
                                </div>
                            </div>
                        </div>
                        <!-- end:: Subheader -->
                        <!-- begin:: Content -->
                        <div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">
                            <div class="card-body">
                                    <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 10; width: 100%; background-color:white;">
                                        <thead>
                                            <tr>
												<th>Image</th>
                                                <th>Deal Details</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php foreach($mdata as $row){ ?>
                                            <tr>
                                                <td><img src="<?= $row['image'];?>" width="100" height="100"/></td>
                                                <td width="100%">
                                                    <a target="_blank" href="<?= base_url('partner/deal/'.$row['id']);?>" style="color:black;">
                                                        <h6 style="background-color:white;padding:15px;"><?= $row['title'];?></h6>
                                                        <hr>
                                                        <p align="right"> Price : Rs. <?= $row['b2bprice'];?> </p>
                                                    </a>
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
            <li class="kt-sticky-toolbar__item kt-sticky-toolbar__item--success" id="kt_demo_panel_toggle" data-toggle="kt-tooltip"  title="Check out more demos" data-placement="right">
                <a href="#" class=""><i class="flaticon2-drop"></i></a>
            </li>
            <li class="kt-sticky-toolbar__item kt-sticky-toolbar__item--brand" data-toggle="kt-tooltip" title="Layout Builder" data-placement="left">
                <a href="../../../builder.html" ><i class="flaticon2-gear"></i></a>
            </li>
            <li class="kt-sticky-toolbar__item kt-sticky-toolbar__item--warning" data-toggle="kt-tooltip" title="Documentation" data-placement="left">
                <a href="#" target="_blank"><i class="flaticon2-telegram-logo"></i></a>
            </li>
            <li class="kt-sticky-toolbar__item kt-sticky-toolbar__item--danger" id="kt_sticky_toolbar_chat_toggler" data-toggle="kt-tooltip" title="Chat Example" data-placement="left">
                <a href="#" data-toggle="modal" data-target="#kt_chat_modal"><i class="flaticon2-chat-1"></i></a>
            </li>
        </ul>
        <!-- end::Sticky Toolbar -->
        <!-- begin::Demo Panel -->
     
        <?php include('jquery.php');?>
        <script src="<?= base_url('resource/agroxa/plugins/datatables/dataTables.responsive.min.js');?>"></script>
        <script src="<?= base_url('resource/agroxa/plugins/datatables/responsive.bootstrap4.min.js');?>"></script>

        <!-- Datatable init js -->
        <script src="<?= base_url('resource/agroxa/assets/pages/datatables.init.js');?>"></script>

    </body>
    <!-- end::Body -->
    <!-- Mirrored from keenthemes.com/metronic/preview/demo1/crud/datatables/advanced/multiple-controls.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 11 Apr 2020 05:21:55 GMT -->
</html>