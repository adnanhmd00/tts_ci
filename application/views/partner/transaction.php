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
										Transactions Summary                            
									</h3>
									
								</div>
							</div>
						</div>
						<!-- end:: Subheader -->
						<!-- begin:: Content -->
						<div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">
							<div class="alert alert-light alert-elevate" role="alert">
								
								<div class="alert-text">
									<?php if($type=='transactions' || $type=='accounts'){?>	
										Here are All Your Transactions, Payments Send to or from Your Account By The Travel Square, You or Any Agent / Travel Company
										Via TravPAY / Bank Modes or Using Payment Gateway.
									<?php }?>
									<?php if($type=='travpay'){?>	
										Here are All Your Travpay Transactions Made By You or Any Agent / Travel Company
										Via TravPAY / Bank Modes or Using Payment Gateway Towards or By You.
									<?php }?>
									<?php if($type=='invoice'){?>	
										Here are All Auto Generated Invoice of Successfull Transactions Made By You or Any Agent / Travel Company
										Via TravPAY / Bank Modes or Using Payment Gateway Towards You.
									<?php }?>
								</div>
							</div>
							<!-- remote datatable modal -->
							
							<!-- local datatable modal -->
							
							<div class="kt-portlet kt-portlet--mobile">
								<div class="kt-portlet__head kt-portlet__head--lg">
									<div class="kt-portlet__head-label">
											
										<h3 class="kt-portlet__head-title">
										<?php 
											$CI =& get_instance(); $CI->load->model('MainModel','admin'); 
																		
											$symbols=$CI->admin->getRawRow("Select * from tbl_currency where id='$userinfo->currency'")->symbol;
											// $credit_=0;
											// $debit_=0;										
											// foreach($data as $row){
											// 	if($row->currency_id!=$userinfo->currency){
											// 		$point=$CI->admin->getRawRow("Select * from currency_tracker where currency_to='$row->currency_id' and currency_from= '$userinfo->currency'")->points;
													
											// 		if($row->type=='CREDIT' && $row->status=='SUCCESS'){
											// 			$credit_=$credit_+($row->amount*$point);
											// 		}else if($row->type=='DEBIT' && $row->status=='SUCCESS'){
											// 			$debit_=$debit_+($row->amount*$point);
											// 		}
												
											// 	}else{
											// 		if($row->type=='CREDIT' && $row->status=='SUCCESS'){
											// 			$credit_=$credit_+($row->amount);
											// 		}else if($row->type=='DEBIT' && $row->status=='SUCCESS'){
											// 			$debit_=$debit_+($row->amount);
											// 		}

											// 	}
											// }
											// $wallet_balance_=$credit_-$debit_;

										?>
											Instawire TravPAY Wallet Balance: <?= $symbols.' '.$wallet_balance_;?>
										</h3>
									</div>
									
								</div> 
								
								<div class="kt-portlet__body kt-portlet__body">
									<!--begin: Datatable -->
									<div id="sub_datatable_ajax_source" class="kt-datatable kt-datatable--default kt-datatable--brand kt-datatable--loaded" style="">
										
										<?php if($type=="travpay"){?>
                                            <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 10; width: 90%; background-color:white;">
                                                <thead>
                                                    <tr>
														<th>T ID</th>
														<th>BENIFICIARY NAME</th>
														<th>TYPE</th>
                                                        <th>MODE</th>
                                                        <th>STATUS</th>
                                                        <th>AMOUNT</th>
                                                        <th>DATE</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                <?php if(!empty($data)){ foreach($data as $row){ 
													if($row->mode=="TRAVPAY"){?>
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
														<td><?= $row->id;?></td>
														<td><?= $row->benificiary_name;?><br><?= $row->benificiary_holder_name;?></td>
														<td><?= $row->type;?></td>
                                                        <td><?= $row->mode;?></td>
                                                        
                                                        <?php if($row->status=="PENDING"){?>
                                                            <td data-field="Status" class="kt-datatable__cell"><span style="width: 146px;"><span class="kt-badge kt-badge--info kt-badge--inline kt-badge--pill " style="background-color:black"><?= $row->status;?></span></span></td>
                                                        <?php }?>
                                                        <?php if($row->status=="SUCCESS"){?>
                                                            <td data-field="Status" class="kt-datatable__cell"><span style="width: 146px;"><span class="kt-badge kt-badge--brand kt-badge--inline kt-badge--pill"><?= $row->status;?></span></span></td>
                                                        <?php }?>
                                                        <?php if($row->status=="FAILURE"){?>
                                                            <td data-field="Status" class="kt-datatable__cell"><span style="width: 146px;"><span class="kt-badge kt-badge--danger kt-badge--inline kt-badge--pill"><?= $row->status;?></span></span></td>
                                                        <?php }?>
                                                        
                                                        <td><?= $symbol.' '.$price;?></td>
                                                        <td><?= $row->created_at;?></td>
                                                        

                                                    </tr>
													<?php } } }?>
                                                </tbody>
                                            </table>
                                        <?php }?>
										<?php if($type=="transactions"){?>
                                            <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 10; width: 90%; background-color:white;">
                                                <thead>
                                                    <tr>
														<th>ID</th>
														<th>BENIFICIARY</th>
														<th>TYPE</th>
                                                        <th>MODE</th>
                                                        <th>STATUS</th>
                                                        <th>AMOUNT</th>
                                                        <th>DATE</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                <?php if(!empty($data)){ foreach($data as $row){ ?>
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
														<td><?= $row->id;?></td>
														<td><?= $row->benificiary_name;?><br><?= $row->benificiary_holder_name;?></td>
														<td><?= $row->type;?></td>
                                                        <td><?= $row->mode;?></td>
                                                        
                                                        <?php if($row->status=="PENDING"){?>
                                                            <td data-field="Status" class="kt-datatable__cell"><span style="width: 146px;"><span class="kt-badge kt-badge--info kt-badge--inline kt-badge--pill " style="background-color:black"><?= $row->status;?></span></span></td>
                                                        <?php }?>
                                                        <?php if($row->status=="SUCCESS"){?>
                                                            <td data-field="Status" class="kt-datatable__cell"><span style="width: 146px;"><span class="kt-badge kt-badge--brand kt-badge--inline kt-badge--pill"><?= $row->status;?></span></span></td>
                                                        <?php }?>
                                                        <?php if($row->status=="FAILURE"){?>
                                                            <td data-field="Status" class="kt-datatable__cell"><span style="width: 146px;"><span class="kt-badge kt-badge--danger kt-badge--inline kt-badge--pill"><?= $row->status;?></span></span></td>
                                                        <?php }?>
                                                        
                                                        <td><?= $symbol.' '.$price;?></td>
                                                        <td><?= $row->created_at;?></td>
                                                        

                                                    </tr>
													<?php }}
												?>
                                                </tbody>
                                            </table>
                                        <?php }?>
										<?php if($type=="accounts"){?>
                                            <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 10; width: 90%; background-color:white;">
                                                <thead>
                                                    <tr>
														<th>T_ID</th>
														<th>CUSTOMER NAME</th>
														<th>TYPE</th>
                                                        <th>MODE</th>
                                                        <th>STATUS</th>
                                                        <th>AMOUNT</th>
														<th>DATE</th>
                                                        <th>DETAILS</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                <?php if(!empty($data)){ foreach($data as $row){ ?>
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
														<td><?= $row->id;?></td>
														<td><?= $row->benificiary_name;?><br><?= $row->benificiary_holder_name;?></td>

														<td><?= $row->type;?></td>
                                                        <td><?= $row->mode;?></td>
                                                        
                                                        <?php if($row->status=="PENDING"){?>
                                                            <td data-field="Status" class="kt-datatable__cell"><span style="width: 146px;"><span class="kt-badge kt-badge--info kt-badge--inline kt-badge--pill " style="background-color:black"><?= $row->status;?></span></span></td>
                                                        <?php }?>
                                                        <?php if($row->status=="SUCCESS"){?>
                                                            <td data-field="Status" class="kt-datatable__cell"><span style="width: 146px;"><span class="kt-badge kt-badge--brand kt-badge--inline kt-badge--pill"><?= $row->status;?></span></span></td>
                                                        <?php }?>
                                                        <?php if($row->status=="FAILURE"){?>
                                                            <td data-field="Status" class="kt-datatable__cell"><span style="width: 146px;"><span class="kt-badge kt-badge--danger kt-badge--inline kt-badge--pill"><?= $row->status;?></span></span></td>
                                                        <?php }?>
                                                        
                                                        <td><?= $symbol.' '.$price;?></td>
                                                        <td><?= $row->created_at;?></td>
														<td>
															<?php
																$ciphering = "AES-128-CTR"; 
																$iv_length = openssl_cipher_iv_length($ciphering); 
																$options = 0; 
																$encryption_iv = '1234567891011121'; 
																$encryption_key = "thetravel@square@123"; 
																$encryption = openssl_encrypt($row->id, $ciphering,$encryption_key, $options, $encryption_iv); 
															?>
															<a href="<?= base_url('transaction-details/'.$encryption);?>">Details</a>
															<!-- <?php $hidden=['id'=>$row->id];?>
															<?php echo form_open_multipart('transaction-details', 'class="kt-form"',$hidden);?>
																<button type="submit" class="btn btn-primary btn-xs">Details</button>
															</form> -->
														</td>
                                                        

                                                    </tr>
													<?php }}
												?>
                                                </tbody>
                                            </table>
                                        <?php }?>
										<?php if($type=="invoice"){?>
                                            <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 10; width: 90%; background-color:white;">
                                                <thead>
                                                    <tr>
														<th>B_ID</th>
														<th>CUSTOMER NAME</th>
														<th>TYPE</th>
                                                        <th>AMOUNT</th>
														<th>DATE</th>
                                                        <th>INVOICE</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                <?php if(!empty($data)){ foreach($data as $row){ if($row->status=="SUCCESS"){ ?>
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
														<td><?= $row->id;?></td>
														<td><?= $row->benificiary_name;?><br><?= $row->benificiary_holder_name;?></td>

														<td><?= $row->type;?></td>
                                                        
                                                        <?php if($row->status=="PENDING"){?>
                                                            <td data-field="Status" class="kt-datatable__cell"><span style="width: 146px;"><span class="kt-badge kt-badge--info kt-badge--inline kt-badge--pill " style="background-color:black"><?= $row->status;?></span></span></td>
                                                        <?php }?>
                                                        <?php if($row->status=="SUCCESS"){?>
                                                            <td data-field="Status" class="kt-datatable__cell"><span style="width: 146px;"><span class="kt-badge kt-badge--brand kt-badge--inline kt-badge--pill"><?= $row->status;?></span></span></td>
                                                        <?php }?>
                                                        <?php if($row->status=="FAILURE"){?>
                                                            <td data-field="Status" class="kt-datatable__cell"><span style="width: 146px;"><span class="kt-badge kt-badge--danger kt-badge--inline kt-badge--pill"><?= $row->status;?></span></span></td>
                                                        <?php }?>
                                                        
                                                        <td><?= $symbol.' '.$price;?></td>
                                                        <td><?= $row->created_at;?></td>
														<td>
															<?php
																$ciphering = "AES-128-CTR"; 
																$iv_length = openssl_cipher_iv_length($ciphering); 
																$options = 0; 
																$encryption_iv = '1234567891011121'; 
																$encryption_key = "thetravel@square@123"; 
																$encryption = openssl_encrypt($row->id, $ciphering,$encryption_key, $options, $encryption_iv); 
															?>
															<a href="<?= base_url('transaction-details/'.$encryption);?>">INVOICE</a>
															<!-- <?php $hidden=['id'=>$row->id];?>
															<?php echo form_open_multipart('transaction-details', 'class="kt-form"',$hidden);?>
																<button type="submit" class="btn btn-primary btn-xs">Details</button>
															</form> -->
														</td>
                                                        

                                                    </tr>
													<?php }}}
												?>
                                                </tbody>
                                            </table>
                                        <?php }?>
										
									</div>
									<!--end: Datatable -->
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
		
		<!-- begin::Global Config(global config for global JS sciprts) -->
        <?php include('jquery.php');?>
        <script src="<?= base_url('resource/agroxa/plugins/datatables/dataTables.responsive.min.js');?>"></script>
        <script src="<?= base_url('resource/agroxa/plugins/datatables/responsive.bootstrap4.min.js');?>"></script>

        <!-- Datatable init js -->
        <script src="<?= base_url('resource/agroxa/assets/pages/datatables.init.js');?>"></script>
	</body>
</html>