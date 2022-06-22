<!DOCTYPE html>

<html lang="en">
	<!-- begin::Head -->
	<head>
        <?php include('head.php');?>
        <link href="<?= base_url('resource/agroxa/plugins/datatables/dataTables.bootstrap4.min.css');?>" rel="stylesheet" type="text/css" />
        <link href="<?= base_url('resource/agroxa/plugins/datatables/buttons.bootstrap4.min.css');?>" rel="stylesheet" type="text/css" />
        <!-- Responsive datatable examples -->
        <link href="<?= base_url('resource/agroxa/plugins/datatables/responsive.bootstrap4.min.css');?>" rel="stylesheet" type="text/css" />

	</head>
	<!-- end::Head -->
	<!-- begin::Body -->
	<body class="kt-quick-panel--right kt-demo-panel--right kt-offcanvas-panel--right kt-header--fixed kt-header-mobile--fixed kt-subheader--enabled kt-subheader--fixed kt-subheader--solid kt-aside--enabled kt-aside--fixed kt-scrolltop--on" style="">
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
										Transaction Summary                            
									</h3>
									
								</div>
								<div class="kt-subheader__toolbar">
									<div class="kt-subheader__wrapper">
										
                                        <?php if($data['transaction']->status=="SUCCESS"){?>
                                            <a href="<?= base_url('generate-invoice/'.$data['transaction']->id);?>" class="btn kt-subheader__btn-primary">
                                                Generate Invoice 
                                            </a>
										<?php }?>
                                        
									</div>
								</div>
							</div>
						</div>
						<!-- end:: Subheader -->
						<!-- begin:: Content -->
						<div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">
							<div class="alert alert-light alert-elevate" role="alert">
								<div class="alert-text">
                                    Here You Can See the Transaction Summary, Along with Transaction ID From Bank, Order ID from Payment Gateway and Other Details. Along 
									With This You Can Generate/Download Invoice for the Same.
                                </div>
							</div>
							<!-- local datatable modal -->
							
							<div class="kt-portlet kt-portlet--mobile">
								
								<div class="kt-portlet__body kt-portlet__body">
                                    <div class="row" >
										
                                        <div class="col-md-12">
                                            <h3><font color="black">Transaction Details</font></h3>
                                        </div><br>
                                        <?php 
											$CI =& get_instance(); $CI->load->model('MainModel','admin'); 
											$currency=$data['transaction']->currency_id;
                                            $symbols=$CI->admin->getRawRow("Select * from tbl_currency where id='$currency'")->symbol;
                                        ?>
                                        <div class="col-md-12">
                                            <table class="table table-bordered ">
                                                <tr>
                                                    <th>Transaction Type</th><td><?= $data['transaction']->type;?></td>
                                                </tr>
                                                <tr><th>Transaction Mode</th><td><?= $data['transaction']->mode;?></td></tr>
                                                
                                                <tr><th>Transaction Currency</th><td><?= $symbols;?></td></tr>
                                                
                                                <tr><th>Transaction Amount</th><td><?= $data['transaction']->amount;?></td></tr>
                                                <tr><th>Transaction Status</th><td><?= $data['transaction']->status;?></td></tr>
                                                <tr><th>Transaction For (Description)</th><td><?= $data['transaction_detail']->transaction_for;?></td></tr>
                                                <tr><th>Transaction Payment Status</th><td><?= $data['transaction_detail']->transaction_type;?></td></tr>

                                            </table>
                                        </div>
                                    </div>    


									
								</div>

							</div>
                            
							<div class="kt-portlet kt-portlet--mobile">
								
								<div class="kt-portlet__body kt-portlet__body">
                                    <div class="row" >
                                        <div class="col-md-12">
                                            <h3><font color="black">Payee Details</font></h3>
                                        </div><br>
                                        
                                        <div class="col-md-12">
                                            <table class="table table-bordered ">
                                                
                                                <?php if(!empty($data['transaction_detail']->payee_name)){ ?>                                                
                                                    <tr><th>Payee Name</th><td><?= $data['transaction_detail']->payee_name;?></td></tr>
                                                <?php }?>
                                                <?php if(!empty($data['transaction_detail']->payee_email)){ ?>
                                                    <tr><th>Payee Email</th><td><?= $data['transaction_detail']->payee_email;?></td></tr>
                                                <?php }?>
                                                <?php if(!empty($data['transaction_detail']->payee_phone)){ ?>                                                
                                                    <tr><th>Payee Phone</th><td><?= $data['transaction_detail']->payee_phone;?></td></tr>
                                                <?php }?>
                                                <?php if(!empty($data['transaction_detail']->payee_account_number)){ ?>                                                
                                                    <tr><th>Payee Account Number</th><td><?= $data['transaction_detail']->payee_account_number;?></td></tr>
                                                <?php }?>
                                                <?php if(!empty($data['transaction_detail']->payee_holder_name)){ ?>
                                                    <tr><th>Payee Holder Name</th><td><?= $data['transaction_detail']->payee_holder_name;?></td></tr>
                                                <?php }?>
                                                <?php if(!empty($data['transaction_detail']->payee_ifsc)){ ?>                                                
                                                    <tr><th>Payee IFSC</th><td><?= $data['transaction_detail']->payee_ifsc;?></td></tr>
                                                <?php }?>
                                                <?php if(!empty($data['transaction_detail']->payee_bank_name)){ ?>                                                
                                                    <tr><th>Payee Bank Name</th><td><?= $data['transaction_detail']->payee_bank_name;?></td></tr>
                                                <?php }?>

                                            </table>
                                        </div>
                                    </div>    


									
								</div>

							</div>

							<div class="kt-portlet kt-portlet--mobile">
								
								<div class="kt-portlet__body kt-portlet__body">
                                    <div class="row" >
                                        <div class="col-md-12">
                                            <h3><font color="black">Benificiary Details</font></h3>
                                        </div><br>
                                        
                                        <div class="col-md-12">
                                            <table class="table table-bordered ">
                                                
                                                <?php if(!empty($data['transaction_detail']->benificiary_name)){ ?>                                                
                                                    <tr><th>Benificiary Name</th><td><?= $data['transaction_detail']->benificiary_name;?></td></tr>
                                                <?php }?>
                                                <?php if(!empty($data['transaction_detail']->benificiary_email)){ ?>
                                                    <tr><th>Benificiary Email</th><td><?= $data['transaction_detail']->benificiary_email;?></td></tr>
                                                <?php }?>
                                                <?php if(!empty($data['transaction_detail']->benificiary_phone)){ ?>                                                
                                                    <tr><th>Benificiary Phone</th><td><?= $data['transaction_detail']->benificiary_phone;?></td></tr>
                                                <?php }?>
                                                <?php if(!empty($data['transaction_detail']->benificiary_account_number)){ ?>                                                
                                                    <tr><th>Benificiary Account Number</th><td><?= $data['transaction_detail']->benificiary_account_number;?></td></tr>
                                                <?php }?>
                                                <?php if(!empty($data['transaction_detail']->benificiary_holder_name)){ ?>
                                                    <tr><th>Benificiary Holder Name</th><td><?= $data['transaction_detail']->benificiary_holder_name;?></td></tr>
                                                <?php }?>
                                                <?php if(!empty($data['transaction_detail']->benificiary_ifsc)){ ?>                                                
                                                    <tr><th>Benificiary IFSC</th><td><?= $data['transaction_detail']->benificiary_ifsc;?></td></tr>
                                                <?php }?>
                                                <?php if(!empty($data['transaction_detail']->benificiary_bank_name)){ ?>                                                
                                                    <tr><th>Benificiary Bank Name</th><td><?= $data['transaction_detail']->benificiary_bank_name;?></td></tr>
                                                <?php }?>

                                            </table>
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
		<!-- begin::Global Config(global config for global JS sciprts) -->
        <?php include('jquery.php');?>
        <script src="<?= base_url('resource/agroxa/plugins/datatables/dataTables.responsive.min.js');?>"></script>
        <script src="<?= base_url('resource/agroxa/plugins/datatables/responsive.bootstrap4.min.js');?>"></script>

        <!-- Datatable init js -->
        <script src="<?= base_url('resource/agroxa/assets/pages/datatables.init.js');?>"></script>
	</body>
</html>