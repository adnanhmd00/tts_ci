<!DOCTYPE html>

<html lang="en" >
    <!-- begin::Head -->
    <!-- Mirrored from keenthemes.com/metronic/preview/demo1/crud/datatables/advanced/multiple-controls.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 11 Apr 2020 05:21:52 GMT -->
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
                            <div class="card-body">
                                <h4 class="mt-0 header-title">Deals</h4>
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
                                                        <a href="<?= base_url('partner/deletedeal/'.$row['id']);?>" class="btn btn-sm btn-brand">
                                                            Delete
                                                        </a>
                                                        <a href="<?= base_url('partner/edit/'.$row['id']);?>" class="btn btn-sm btn-brand">
                                                            Deal
                                                        </a>
                                                        <a href="<?= base_url('partner/edit/deal/image/'.$row['id']);?>" class="btn btn-sm btn-brand">
                                                            Images
                                                        </a>
                                                        <a href="<?= base_url('partner/edit/deal/date/'.$row['id']);?>" class="btn btn-sm btn-brand">
                                                            Dates
                                                        </a>
                                                        <?php if($row['deal_type_id']==1){ ?>
                                                            <a href="<?= base_url('partner/edit/deal/inclusion/'.$row['id']);?>" class="btn btn-sm btn-brand">
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
        <div id="kt_quick_panel" class="kt-quick-panel">
            <a href="#" class="kt-quick-panel__close" id="kt_quick_panel_close_btn"><i class="flaticon2-delete"></i></a>
            <div class="kt-quick-panel__nav">
                <ul class="nav nav-tabs nav-tabs-line nav-tabs-bold nav-tabs-line-3x nav-tabs-line-brand  kt-notification-item-padding-x" role="tablist">
                    <li class="nav-item active">
                        <a class="nav-link active" data-toggle="tab" href="#kt_quick_panel_tab_notifications" role="tab">Notifications</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#kt_quick_panel_tab_logs" role="tab">Audit Logs</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#kt_quick_panel_tab_settings" role="tab">Settings</a>
                    </li>
                </ul>
            </div>
            <div class="kt-quick-panel__content">
                <div class="tab-content">
                    <div class="tab-pane fade show kt-scroll active" id="kt_quick_panel_tab_notifications" role="tabpanel">
                        <div class="kt-notification">
                            <a href="#" class="kt-notification__item">
                                <div class="kt-notification__item-icon">
                                    <i class="flaticon2-line-chart kt-font-success"></i>
                                </div>
                                <div class="kt-notification__item-details">
                                    <div class="kt-notification__item-title">
                                        New order has been received
                                    </div>
                                    <div class="kt-notification__item-time">
                                        2 hrs ago
                                    </div>
                                </div>
                            </a>
                            <a href="#" class="kt-notification__item">
                                <div class="kt-notification__item-icon">
                                    <i class="flaticon2-box-1 kt-font-brand"></i>
                                </div>
                                <div class="kt-notification__item-details">
                                    <div class="kt-notification__item-title">
                                        New customer is registered
                                    </div>
                                    <div class="kt-notification__item-time">
                                        3 hrs ago
                                    </div>
                                </div>
                            </a>
                            <a href="#" class="kt-notification__item">
                                <div class="kt-notification__item-icon">
                                    <i class="flaticon2-chart2 kt-font-danger"></i>
                                </div>
                                <div class="kt-notification__item-details">
                                    <div class="kt-notification__item-title">
                                        Application has been approved
                                    </div>
                                    <div class="kt-notification__item-time">
                                        3 hrs ago
                                    </div>
                                </div>
                            </a>
                            <a href="#" class="kt-notification__item">
                                <div class="kt-notification__item-icon">
                                    <i class="flaticon2-image-file kt-font-warning"></i>
                                </div>
                                <div class="kt-notification__item-details">
                                    <div class="kt-notification__item-title">
                                        New file has been uploaded
                                    </div>
                                    <div class="kt-notification__item-time">
                                        5 hrs ago
                                    </div>
                                </div>
                            </a>
                            <a href="#" class="kt-notification__item">
                                <div class="kt-notification__item-icon">
                                    <i class="flaticon2-drop kt-font-info"></i>
                                </div>
                                <div class="kt-notification__item-details">
                                    <div class="kt-notification__item-title">
                                        New user feedback received
                                    </div>
                                    <div class="kt-notification__item-time">
                                        8 hrs ago
                                    </div>
                                </div>
                            </a>
                            <a href="#" class="kt-notification__item">
                                <div class="kt-notification__item-icon">
                                    <i class="flaticon2-pie-chart-2 kt-font-success"></i>
                                </div>
                                <div class="kt-notification__item-details">
                                    <div class="kt-notification__item-title">
                                        System reboot has been successfully completed
                                    </div>
                                    <div class="kt-notification__item-time">
                                        12 hrs ago
                                    </div>
                                </div>
                            </a>
                            <a href="#" class="kt-notification__item">
                                <div class="kt-notification__item-icon">
                                    <i class="flaticon2-favourite kt-font-danger"></i>
                                </div>
                                <div class="kt-notification__item-details">
                                    <div class="kt-notification__item-title">
                                        New order has been placed
                                    </div>
                                    <div class="kt-notification__item-time">
                                        15 hrs ago
                                    </div>
                                </div>
                            </a>
                            <a href="#" class="kt-notification__item kt-notification__item--read">
                                <div class="kt-notification__item-icon">
                                    <i class="flaticon2-safe kt-font-primary"></i>
                                </div>
                                <div class="kt-notification__item-details">
                                    <div class="kt-notification__item-title">
                                        Company meeting canceled
                                    </div>
                                    <div class="kt-notification__item-time">
                                        19 hrs ago
                                    </div>
                                </div>
                            </a>
                            <a href="#" class="kt-notification__item">
                                <div class="kt-notification__item-icon">
                                    <i class="flaticon2-psd kt-font-success"></i>
                                </div>
                                <div class="kt-notification__item-details">
                                    <div class="kt-notification__item-title">
                                        New report has been received
                                    </div>
                                    <div class="kt-notification__item-time">
                                        23 hrs ago
                                    </div>
                                </div>
                            </a>
                            <a href="#" class="kt-notification__item">
                                <div class="kt-notification__item-icon">
                                    <i class="flaticon-download-1 kt-font-danger"></i>
                                </div>
                                <div class="kt-notification__item-details">
                                    <div class="kt-notification__item-title">
                                        Finance report has been generated
                                    </div>
                                    <div class="kt-notification__item-time">
                                        25 hrs ago
                                    </div>
                                </div>
                            </a>
                            <a href="#" class="kt-notification__item">
                                <div class="kt-notification__item-icon">
                                    <i class="flaticon-security kt-font-warning"></i>
                                </div>
                                <div class="kt-notification__item-details">
                                    <div class="kt-notification__item-title">
                                        New customer comment recieved
                                    </div>
                                    <div class="kt-notification__item-time">
                                        2 days ago
                                    </div>
                                </div>
                            </a>
                            <a href="#" class="kt-notification__item">
                                <div class="kt-notification__item-icon">
                                    <i class="flaticon2-pie-chart kt-font-warning"></i>
                                </div>
                                <div class="kt-notification__item-details">
                                    <div class="kt-notification__item-title">
                                        New customer is registered
                                    </div>
                                    <div class="kt-notification__item-time">
                                        3 days ago
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="tab-pane fade kt-scroll" id="kt_quick_panel_tab_logs" role="tabpanel">
                        <div class="kt-notification-v2">
                            <a href="#" class="kt-notification-v2__item">
                                <div class="kt-notification-v2__item-icon">
                                    <i class="flaticon-bell kt-font-brand"></i>
                                </div>
                                <div class="kt-notification-v2__itek-wrapper">
                                    <div class="kt-notification-v2__item-title">
                                        5 new user generated report
                                    </div>
                                    <div class="kt-notification-v2__item-desc">
                                        Reports based on sales
                                    </div>
                                </div>
                            </a>
                            <a href="#" class="kt-notification-v2__item">
                                <div class="kt-notification-v2__item-icon">
                                    <i class="flaticon2-box kt-font-danger"></i>
                                </div>
                                <div class="kt-notification-v2__itek-wrapper">
                                    <div class="kt-notification-v2__item-title">
                                        2 new items submited
                                    </div>
                                    <div class="kt-notification-v2__item-desc">
                                        by Grog John
                                    </div>
                                </div>
                            </a>
                            <a href="#" class="kt-notification-v2__item">
                                <div class="kt-notification-v2__item-icon">
                                    <i class="flaticon-psd kt-font-brand"></i>
                                </div>
                                <div class="kt-notification-v2__itek-wrapper">
                                    <div class="kt-notification-v2__item-title">
                                        79 PSD files generated
                                    </div>
                                    <div class="kt-notification-v2__item-desc">
                                        Reports based on sales
                                    </div>
                                </div>
                            </a>
                            <a href="#" class="kt-notification-v2__item">
                                <div class="kt-notification-v2__item-icon">
                                    <i class="flaticon2-supermarket kt-font-warning"></i>
                                </div>
                                <div class="kt-notification-v2__itek-wrapper">
                                    <div class="kt-notification-v2__item-title">
                                        $2900 worth producucts sold
                                    </div>
                                    <div class="kt-notification-v2__item-desc">
                                        Total 234 items
                                    </div>
                                </div>
                            </a>
                            <a href="#" class="kt-notification-v2__item">
                                <div class="kt-notification-v2__item-icon">
                                    <i class="flaticon-paper-plane-1 kt-font-success"></i>
                                </div>
                                <div class="kt-notification-v2__itek-wrapper">
                                    <div class="kt-notification-v2__item-title">
                                        4.5h-avarage response time
                                    </div>
                                    <div class="kt-notification-v2__item-desc">
                                        Fostest is Barry
                                    </div>
                                </div>
                            </a>
                            <a href="#" class="kt-notification-v2__item">
                                <div class="kt-notification-v2__item-icon">
                                    <i class="flaticon2-information kt-font-danger"></i>
                                </div>
                                <div class="kt-notification-v2__itek-wrapper">
                                    <div class="kt-notification-v2__item-title">
                                        Database server is down
                                    </div>
                                    <div class="kt-notification-v2__item-desc">
                                        10 mins ago
                                    </div>
                                </div>
                            </a>
                            <a href="#" class="kt-notification-v2__item">
                                <div class="kt-notification-v2__item-icon">
                                    <i class="flaticon2-mail-1 kt-font-brand"></i>
                                </div>
                                <div class="kt-notification-v2__itek-wrapper">
                                    <div class="kt-notification-v2__item-title">
                                        System report has been generated
                                    </div>
                                    <div class="kt-notification-v2__item-desc">
                                        Fostest is Barry
                                    </div>
                                </div>
                            </a>
                            <a href="#" class="kt-notification-v2__item">
                                <div class="kt-notification-v2__item-icon">
                                    <i class="flaticon2-hangouts-logo kt-font-warning"></i>
                                </div>
                                <div class="kt-notification-v2__itek-wrapper">
                                    <div class="kt-notification-v2__item-title">
                                        4.5h-avarage response time
                                    </div>
                                    <div class="kt-notification-v2__item-desc">
                                        Fostest is Barry
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="tab-pane kt-quick-panel__content-padding-x fade kt-scroll" id="kt_quick_panel_tab_settings" role="tabpanel">
                        <form class="kt-form">
                            <div class="kt-heading kt-heading--sm kt-heading--space-sm">Customer Care</div>
                            <div class="form-group form-group-xs row">
                                <label class="col-8 col-form-label">Enable Notifications:</label>
                                <div class="col-4 kt-align-right">
                                    <span class="kt-switch kt-switch--success kt-switch--sm">
                                    <label>
                                    <input type="checkbox" checked="checked" name="quick_panel_notifications_1">
                                    <span></span>
                                    </label>
                                    </span>
                                </div>
                            </div>
                            <div class="form-group form-group-xs row">
                                <label class="col-8 col-form-label">Enable Case Tracking:</label>
                                <div class="col-4 kt-align-right">
                                    <span class="kt-switch kt-switch--success kt-switch--sm">
                                    <label>
                                    <input type="checkbox"  name="quick_panel_notifications_2">
                                    <span></span>
                                    </label>
                                    </span>
                                </div>
                            </div>
                            <div class="form-group form-group-last form-group-xs row">
                                <label class="col-8 col-form-label">Support Portal:</label>
                                <div class="col-4 kt-align-right">
                                    <span class="kt-switch kt-switch--success kt-switch--sm">
                                    <label>
                                    <input type="checkbox" checked="checked" name="quick_panel_notifications_2">
                                    <span></span>
                                    </label>
                                    </span>
                                </div>
                            </div>
                            <div class="kt-separator kt-separator--space-md kt-separator--border-dashed"></div>
                            <div class="kt-heading kt-heading--sm kt-heading--space-sm">Reports</div>
                            <div class="form-group form-group-xs row">
                                <label class="col-8 col-form-label">Generate Reports:</label>
                                <div class="col-4 kt-align-right">
                                    <span class="kt-switch kt-switch--sm kt-switch--danger">
                                    <label>
                                    <input type="checkbox" checked="checked" name="quick_panel_notifications_3">
                                    <span></span>
                                    </label>
                                    </span>
                                </div>
                            </div>
                            <div class="form-group form-group-xs row">
                                <label class="col-8 col-form-label">Enable Report Export:</label>
                                <div class="col-4 kt-align-right">
                                    <span class="kt-switch kt-switch--sm kt-switch--danger">
                                    <label>
                                    <input type="checkbox"  name="quick_panel_notifications_3">
                                    <span></span>
                                    </label>
                                    </span>
                                </div>
                            </div>
                            <div class="form-group form-group-last form-group-xs row">
                                <label class="col-8 col-form-label">Allow Data Collection:</label>
                                <div class="col-4 kt-align-right">
                                    <span class="kt-switch kt-switch--sm kt-switch--danger">
                                    <label>
                                    <input type="checkbox" checked="checked" name="quick_panel_notifications_4">
                                    <span></span>
                                    </label>
                                    </span>
                                </div>
                            </div>
                            <div class="kt-separator kt-separator--space-md kt-separator--border-dashed"></div>
                            <div class="kt-heading kt-heading--sm kt-heading--space-sm">Memebers</div>
                            <div class="form-group form-group-xs row">
                                <label class="col-8 col-form-label">Enable Member singup:</label>
                                <div class="col-4 kt-align-right">
                                    <span class="kt-switch kt-switch--sm kt-switch--brand">
                                    <label>
                                    <input type="checkbox" checked="checked" name="quick_panel_notifications_5">
                                    <span></span>
                                    </label>
                                    </span>
                                </div>
                            </div>
                            <div class="form-group form-group-xs row">
                                <label class="col-8 col-form-label">Allow User Feedbacks:</label>
                                <div class="col-4 kt-align-right">
                                    <span class="kt-switch kt-switch--sm kt-switch--brand">
                                    <label>
                                    <input type="checkbox"  name="quick_panel_notifications_5">
                                    <span></span>
                                    </label>
                                    </span>
                                </div>
                            </div>
                            <div class="form-group form-group-last form-group-xs row">
                                <label class="col-8 col-form-label">Enable Customer Portal:</label>
                                <div class="col-4 kt-align-right">
                                    <span class="kt-switch kt-switch--sm kt-switch--brand">
                                    <label>
                                    <input type="checkbox" checked="checked" name="quick_panel_notifications_6">
                                    <span></span>
                                    </label>
                                    </span>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
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