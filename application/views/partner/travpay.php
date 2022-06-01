<!DOCTYPE html>

<html lang="en">
    <!-- begin::Head -->
    <head>
        <?php include('head.php');?>
    </head>
    <!-- end::Head -->
    <!-- begin::Body -->
    <body class="kt-quick-panel--right kt-demo-panel--right kt-offcanvas-panel--right kt-header--fixed kt-header-mobile--fixed kt-subheader--enabled kt-subheader--fixed kt-subheader--solid kt-aside--enabled kt-aside--fixed kt-scrolltop--on">
        <!-- begin:: Page -->
        <!-- begin:: Header Mobile -->
        <div id="kt_header_mobile" class="kt-header-mobile  kt-header-mobile--fixed ">
            <div class="kt-header-mobile__logo">
                <a href="http://partner.thetravelsquare.in/">
                <img alt="Logo" src="http://partner.thetravelsquare.in/uploads/b2b/the-travel-square-logo.png" width="30" height="30">
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
                <?php include('aside.php');?>
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
                                        TravPAY | Your Easy Pay Travel Wallet                            
                                    </h3>
                                    <span class="kt-subheader__separator kt-hidden"></span>
                                </div>
                                <div class="kt-subheader__toolbar">
                                    <div class="kt-subheader__wrapper">
                                        <a href="<?= base_url('accounts');?>" class="btn kt-subheader__btn-dark">
                                            Accounts
                                        </a>
                                        <a href="<?= base_url('transactions');?>" class="btn kt-subheader__btn-dark">
                                            Transactions
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end:: Subheader -->
                        <!-- begin:: Content -->
                        <div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="kt-portlet kt-callout">
                                        <div class="kt-portlet__body">
                                            <div class="kt-callout__body">
                                                <div class="kt-callout__content">
                                                    <h3 class="kt-callout__title"><?= $symbol?> <?= $walletBalance;?></h3>
                                                    <p class="kt-callout__desc">
                                                        Pay Via TravPAY Wallet To Get Instant Discounts. Recharge Wallet Now
                                                    </p>
                                                </div>
                                                <div class="kt-callout__action">
                                                    <a href="<?= base_url('seller-travpay-add-money');?>" class="btn btn-custom btn-bold btn-upper btn-font-sm btn-dark">Add Money</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="kt-portlet kt-callout">
                                        <div class="kt-portlet__body">
                                            <div class="kt-callout__body">
                                                <div class="kt-callout__content">
                                                    <h3 class="kt-callout__title">Send Money to Bank</h3>
                                                    <p class="kt-callout__desc">
                                                        Send Money to Your Bank Instantly From Your TravPAY Wallet
                                                    </p>
                                                </div>
                                                <div class="kt-callout__action">
                                                    <a href="<?= base_url('seller-send-money-to-bank/own');?>" class="btn btn-custom btn-bold btn-upper btn-font-sm  btn-dark">Send Money</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="kt-portlet kt-callout kt-callout--info kt-callout--diagonal-bg">
                                        <div class="kt-portlet__body">
                                            <div class="kt-callout__body">
                                                <div class="kt-callout__content">
                                                    <h3 class="kt-callout__title">Request Payment</h3>
                                                    <p class="kt-callout__desc">
                                                        Request For Payments From Your Client Using TravPAY Payment Link, Auto Reminders
                                                    </p>
                                                </div>
                                                <div class="kt-callout__action">
                                                    <a href="<?= base_url('seller-send-money-to-bank/request');?>" class="btn btn-custom btn-bold btn-upper btn-font-sm  btn-info">Request</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="kt-portlet kt-callout kt-callout--warning kt-callout--diagonal-bg">
                                        <div class="kt-portlet__body">
                                            <div class="kt-callout__body">
                                                <div class="kt-callout__content">
                                                    <h3 class="kt-callout__title">Remit Payment</h3>
                                                    <p class="kt-callout__desc">
                                                        Make a Safe Payment to Another Agent / DMC Via TravPAY Easily
                                                    </p>
                                                </div>
                                                <div class="kt-callout__action">
                                                    <a href="<?= base_url('seller-send-money-to-bank/remit');?>" class="btn btn-custom btn-bold btn-upper btn-font-sm  btn-warning">Remit</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="kt-portlet kt-callout kt-callout--success kt-callout--diagonal-bg">
                                        <div class="kt-portlet__body">
                                            <div class="kt-callout__body">
                                                <div class="kt-callout__content">
                                                    <h3 class="kt-callout__title">Wallet Statement</h3>
                                                    <p class="kt-callout__desc">
                                                        Manage Your TravPAY Wallet Transactions & Statements Here
                                                    </p>
                                                </div>
                                                <div class="kt-callout__action">
                                                    <a href="<?= base_url('wallet-transactions/travpay');?>" class="btn btn-custom btn-bold btn-upper btn-font-sm  btn-success">View</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="kt-portlet kt-callout kt-callout--diagonal-bg">
                                        <div class="kt-portlet__body">
                                            <div class="kt-callout__body">
                                                <div class="kt-callout__content">
                                                    <h3 class="kt-callout__title">Make International Payment</h3>
                                                    <p class="kt-callout__desc">
                                                        Use TravPAY For Instant International Payments
                                                    </p>
                                                </div>
                                                <div class="kt-callout__action">
                                                    <a href="http://travpay.thetravelsquare.in/remit-payment" class="btn btn-custom btn-bold btn-upper btn-font-sm  btn-dark">Request</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="kt-portlet kt-callout kt-callout--diagonal-bg">
                                        <div class="kt-portlet__body">
                                            <div class="kt-callout__body">
                                                <div class="kt-callout__content">
                                                    <h3 class="kt-callout__title">Request For Booking Credit</h3>
                                                    <p class="kt-callout__desc">
                                                        Get Instant Credit For Your Bookings 
                                                    </p>
                                                </div>
                                                <div class="kt-callout__action">
                                                    <a href="http://travpay.thetravelsquare.in/booking-credit-request" class="btn btn-custom btn-bold btn-upper btn-font-sm  btn-dark">Request</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="kt-portlet kt-callout kt-callout--diagonal-bg">
                                        <div class="kt-portlet__body">
                                            <div class="kt-callout__body">
                                                <div class="kt-callout__content">
                                                    <h3 class="kt-callout__title">Increase Credit Limit</h3>
                                                    <p class="kt-callout__desc">
                                                        Increase Credit Limit Againt Business Volume
                                                    </p>
                                                </div>
                                                <div class="kt-callout__action">
                                                    <a href="http://travpay.thetravelsquare.in/increase-credit-limit-request" class="btn btn-custom btn-bold btn-upper btn-font-sm  btn-dark">Request</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="kt-portlet kt-callout kt-callout--brand">
                                        <div class="kt-portlet__body">
                                            <div class="kt-callout__body">
                                                <div class="kt-callout__content">
                                                    <h3 class="kt-callout__title">Payment Via Customer From Credit Card</h3>
                                                </div>
                                                <div class="kt-callout__action">
                                                    <a href="http://travpay.thetravelsquare.in/request-payment" class="btn btn-custom btn-bold btn-upper btn-font-sm  btn-brand">Request</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="kt-portlet kt-callout kt-callout--danger">
                                        <div class="kt-portlet__body">
                                            <div class="kt-callout__body">
                                                <div class="kt-callout__content">
                                                    <h3 class="kt-callout__title">Payment's Via Customer In EMI's Instalments</h3>
                                                </div>
                                                <div class="kt-callout__action">
                                                    <a href="http://travpay.thetravelsquare.in/request-payment" class="btn btn-custom btn-bold btn-upper btn-font-sm  btn-danger">Request</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="kt-portlet kt-callout kt-callout--success">
                                        <div class="kt-portlet__body">
                                            <div class="kt-callout__body">
                                                <div class="kt-callout__content">
                                                    <h3 class="kt-callout__title">Payment From Customer Via Cheque/Cash</h3>
                                                </div>
                                                <div class="kt-callout__action">
                                                    <a href="http://travpay.thetravelsquare.in/request-payment" class="btn btn-custom btn-bold btn-upper btn-font-sm  btn-success">Request</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
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
    </body>
</html>