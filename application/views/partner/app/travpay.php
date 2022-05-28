<!DOCTYPE html>

<html lang="en">
    <!-- begin::Head -->
    
<title>TravPAY Home | TTS APP</title>	

<head>

<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
     
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="http://partner.thetravelsquare.in/resource/admin/files/css">
<link href="http://partner.thetravelsquare.in/resource/admin/files/login-1.css" rel="stylesheet" type="text/css">
<link href="" rel="stylesheet" type="text/css">
<link href="http://partner.thetravelsquare.in/resource/admin/files/plugins.bundle.css" rel="stylesheet" type="text/css">
<link href="http://partner.thetravelsquare.in/resource/admin/files/style.bundle.css" rel="stylesheet" type="text/css">
<link href="http://partner.thetravelsquare.in/resource/admin/files/fullcalendar.bundle.css" rel="stylesheet" type="text/css">
<link href="http://partner.thetravelsquare.in/resource/admin/files/dark.css" rel="stylesheet" type="text/css">
<link href="http://partner.thetravelsquare.in/resource/admin/files/dark(1).css" rel="stylesheet" type="text/css">
<link href="http://partner.thetravelsquare.in/resource/admin/files/dark(2).css" rel="stylesheet" type="text/css">
<link href="http://partner.thetravelsquare.in/resource/admin/files/dark(3).css" rel="stylesheet" type="text/css">     
<link rel="shortcut icon" href="#">

<script async="" src="http://partner.thetravelsquare.in/resource/admin/files/modules.3a2c212c6000288ee2ae.js.download" charset="utf-8"></script>
<script type="text/javascript" charset="UTF-8" src="./files/common.js.download"></script>
<script type="text/javascript" charset="UTF-8" src="http://partner.thetravelsquare.in/resource/admin/files/util.js.download"></script>   
<script async src="https://www.googletagmanager.com/gtag/js?id=G-EE16CRYW41"></script>

<script>
    window.dataLayer = window.dataLayer || [];
    function gtag() { dataLayer.push(arguments); }
    gtag('js', new Date());

    gtag('config', 'G-EE16CRYW41');
</script> 

<style type="text/css">
    iframe#_hjRemoteVarsFrame {
        display: none !important;
        width: 1px !important;
        height: 1px !important;
        opacity: 0 !important;
        pointer-events: none !important;
    }
</style>

<style type="text/css">/* Chart.js */
/*
* DOM element rendering detection
* https://davidwalsh.name/detect-node-insertion
*/
@keyframes chartjs-render-animation {
from { opacity: 0.99; }
to { opacity: 1; }
}

.chartjs-render-monitor {
animation: chartjs-render-animation 0.001s;
}

/*
* DOM element resizing detection
* https://github.com/marcj/css-element-queries
*/
.chartjs-size-monitor,
.chartjs-size-monitor-expand,
.chartjs-size-monitor-shrink {
position: absolute;
direction: ltr;
left: 0;
top: 0;
right: 0;
bottom: 0;
overflow: hidden;
pointer-events: none;
visibility: hidden;
z-index: -1;
}

.chartjs-size-monitor-expand > div {
position: absolute;
width: 1000000px;
height: 1000000px;
left: 0;
top: 0;
}

.chartjs-size-monitor-shrink > div {
position: absolute;
width: 200%;
height: 200%;
left: 0;
top: 0;
}
</style>

</head>
    <!-- end::Head -->
    <!-- begin::Body -->
    <body class="kt-quick-panel--right kt-demo-panel--right kt-offcanvas-panel--right kt-header--fixed kt-header-mobile--fixed kt-subheader--enabled kt-subheader--fixed kt-subheader--solid kt-aside--enabled kt-aside--fixed kt-scrolltop--on">
        <!-- begin:: Page -->
        <!-- begin:: Header Mobile -->
        
        <!-- end:: Header Mobile -->	
        <div class="kt-grid kt-grid--hor kt-grid--root">
            <div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--ver kt-page">
                <!-- begin:: Aside -->
                
                <!-- end:: Aside -->
                <div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor kt-wrapper" id="kt_wrapper">
                    <!-- begin:: Header -->
                    
                    <!-- end:: Header -->
                    <div class="kt-content  kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor" id="kt_content">
                        <!-- begin:: Subheader -->
                        <br><br>
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
                                                    <a href="<?= base_url('partner-travpay-add-money');?>" class="btn btn-custom btn-bold btn-upper btn-font-sm btn-dark">Add Money</a>
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
                                    <div class="kt-portlet kt-callout kt-callout kt-callout--diagonal-bg">
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
                                    <div class="kt-portlet kt-callout kt-callout kt-callout--diagonal-bg">
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
                                    <div class="kt-portlet kt-callout kt-callout kt-callout--diagonal-bg">
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
                                    <div class="kt-portlet kt-callout kt-callout">
                                        <div class="kt-portlet__body">
                                            <div class="kt-callout__body">
                                                <div class="kt-callout__content">
                                                    <h3 class="kt-callout__title">Payment Via Customer From Credit Card</h3>
                                                </div>
                                                <div class="kt-callout__action">
                                                    <a href="http://travpay.thetravelsquare.in/request-payment" class="btn btn-custom btn-bold btn-upper btn-font-sm  btn-dark">Request</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="kt-portlet kt-callout kt-callout">
                                        <div class="kt-portlet__body">
                                            <div class="kt-callout__body">
                                                <div class="kt-callout__content">
                                                    <h3 class="kt-callout__title">Payment's Via Customer In EMI's Instalments</h3>
                                                </div>
                                                <div class="kt-callout__action">
                                                    <a href="http://travpay.thetravelsquare.in/request-payment" class="btn btn-custom btn-bold btn-upper btn-font-sm  btn-dark">Request</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="kt-portlet kt-callout kt-callout">
                                        <div class="kt-portlet__body">
                                            <div class="kt-callout__body">
                                                <div class="kt-callout__content">
                                                    <h3 class="kt-callout__title">Payment From Customer Via Cheque/Cash</h3>
                                                </div>
                                                <div class="kt-callout__action">
                                                    <a href="http://travpay.thetravelsquare.in/request-payment" class="btn btn-custom btn-bold btn-upper btn-font-sm  btn-dark">Request</a>
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
                   <br><br>
                    <!-- end:: Footer -->			
                </div>
            </div>
        </div>
       
        <!-- end::Sticky Toolbar -->
        <!-- begin::Demo Panel -->
        
        <!--ENd:: Chat-->
        <?php include('jquery.php');?>
    </body>
</html>