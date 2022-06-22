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
										Booking Summary 
									</h3>
									
								</div>
								<div class="kt-subheader__toolbar">
									<div class="kt-subheader__wrapper">
										
                                        <?php if($pay_status=="PARTIAL"){?>
                                            <a href="<?= base_url('Partner/booking_next_installment/'.$data['booking_data']->id);?>" class="btn kt-subheader__btn-dark">
                                                Pay Next Installment 
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

                                <?php 
									$CI =& get_instance(); $CI->load->model('MainModel','admin'); 
										$booking_currency=$data['booking_data']->currency;								
									if($booking_currency!=$userinfo->currency){
										$point=$CI->admin->getRawRow("Select * from currency_tracker where currency_to='$booking_currency' and currency_from= '$userinfo->currency'")->points;
										$total_amount=$data['total_amount']*$point;
										$symbol=$CI->admin->getRawRow("Select * from tbl_currency where id='$userinfo->currency'")->symbol;
									}else{
										$total_amount=$data['total_amount'];
                                        $symbol=$CI->admin->getRawRow("Select * from tbl_currency where id='$userinfo->currency'")->symbol;
                                    }
                                    $booking_currency_paid=$data['all_transaction_data'][0]->currency_id;								
									if($booking_currency_paid!=$userinfo->currency){
										$point=$CI->admin->getRawRow("Select * from currency_tracker where currency_to='$booking_currency_paid' and currency_from= '$userinfo->currency'")->points;
										$total_amount_paid=$data['amount_paid_yet']*$point;
										$symbol=$CI->admin->getRawRow("Select * from tbl_currency where id='$userinfo->currency'")->symbol;
									}else{
										$total_amount_paid=$data['amount_paid_yet'];
                                        $symbol=$CI->admin->getRawRow("Select * from tbl_currency where id='$userinfo->currency'")->symbol;
                                    }
							    ?>	

									<b>Total Amount :</b> <?= $symbol .". ".$total_amount;?> | <b>Amount Paid :</b> <?= $symbol .". ".$total_amount_paid;?>

								</div>
							</div>
							<!-- local datatable modal -->
							
							<div class="kt-portlet kt-portlet--mobile">
								
								<div class="kt-portlet__body kt-portlet__body">
                                    <div class="row" >
                                        <div class="col-md-12">
                                            <h4><font color="black">Payment Details</font></h4><br>
                                        </div>
                                        
                                        <div class="col-md-12">
                                            <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 10; width: 90%; background-color:white;">
                                                <thead>
                                                    <tr>
														<th>Amount Paid</th>
														<th>Type</th>
                                                        <th>Status</th>
                                                        <th>Date & Time</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                <?php if(!empty($data['all_transaction_data'])){ foreach($data['all_transaction_data'] as $row){ 
													?>
                                                    <tr>
                                                        <?php 
														    $CI =& get_instance(); $CI->load->model('MainModel','admin'); 
																		
															 if($row->currency_id!=$userinfo->currency){
																$point=$CI->admin->getRawRow("Select * from currency_tracker where currency_to='$row->currency_id' and currency_from= '$userinfo->currency'")->points;
																$price=$row->amount*$point;
																$symbol=$CI->admin->getRawRow("Select * from tbl_currency where id='$userinfo->currency'")->symbol;
															}else{
																$price=$row->amount;
                                                                $symbol=$CI->admin->getRawRow("Select * from tbl_currency where id='$userinfo->currency'")->symbol;
                                                            }
														?>	
														<td><?= $symbol.". ".$price;?></td>
														<td><?= $row->transaction_type;?></td>
														<td><?= $row->status;?></td>
														<td><?= $row->created_at;?></td>
														
                                                        

                                                    </tr>
													<?php  } }?>
                                                </tbody>
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
		
		<!-- end::Demo Panel -->
		<!--Begin:: Chat-->
		
		<!--ENd:: Chat-->
		<!-- begin::Global Config(global config for global JS sciprts) -->
        <?php include('jquery.php');?>
        <script src="<?= base_url('resource/agroxa/plugins/datatables/dataTables.responsive.min.js');?>"></script>
        <script src="<?= base_url('resource/agroxa/plugins/datatables/responsive.bootstrap4.min.js');?>"></script>

        <!-- Datatable init js -->
        <script src="<?= base_url('resource/agroxa/assets/pages/datatables.init.js');?>"></script>
	</body>
</html>