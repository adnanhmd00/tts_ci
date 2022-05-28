<!DOCTYPE html>


<title>Payment Request Link | TTS APP</title>	

<html lang="en">


		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- begin::Head -->
	<head>
        <?php include('head.php');?>
        <link href="<?= base_url('resource/agroxa/plugins/datatables/dataTables.bootstrap4.min.css');?>" rel="stylesheet" type="text/css" />
        <link href="<?= base_url('resource/agroxa/plugins/datatables/buttons.bootstrap4.min.css');?>" rel="stylesheet" type="text/css" />
        <!-- Responsive datatable examples -->
        <link href="<?= base_url('resource/agroxa/plugins/datatables/responsive.bootstrap4.min.css');?>" rel="stylesheet" type="text/css" />
		
     
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
	<body class="kt-quick-panel--right kt-demo-panel--right kt-offcanvas-panel--right kt-header--fixed kt-header-mobile--fixed kt-subheader--enabled kt-subheader--fixed kt-subheader--solid kt-aside--enabled kt-aside--fixed kt-scrolltop--on" style="">
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
							
							
							<div class="alert alert-light alert-elevate" role="alert">
								<div class="alert-text">
                                    These are the Payment Request Link Generated by you to Receive Payments from your Customers or Other B2B Agents
                                </div>
							</div>

							<!-- remote datatable modal -->
							
							<!-- local datatable modal -->
							
							<div class="kt-portlet kt-portlet--mobile">
								<div class="kt-portlet__head">
                                            <div class="kt-portlet__head-label">
                                                <h3 class="kt-portlet__head-title">
                                                    All Payment Links
                                                </h3>
                                            </div>
                                        </div>
								
								<div class="kt-portlet__body kt-portlet__body">
									<!--begin: Datatable -->
									<div id="sub_datatable_ajax_source" class="kt-datatable kt-datatable--default kt-datatable--brand kt-datatable--loaded" style="">
										
                                            <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 10; width: 90%; background-color:white;">
                                                <thead>
                                                    <tr>
														<th>AMOUNT</th>
														<th>NAME</th>
                                                        <th>EMAIL</th>
                                                        <th>PHONE</th>
                                                        <th>LINK</th>
                                                        <th>REQUEST GENERATED ON</th>
                                                        <th>LAST UPDATED</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                <?php if(!empty($data)){ foreach($data as $row){ ?>
                                                    <tr>
                                                        <?php 
														    $CI =& get_instance(); $CI->load->model('MainModel','admin'); 
																		
															 if($row->currency!=$userinfo->currency){
																$point=$CI->admin->getRawRow("Select * from currency_tracker where currency_to='$row->currency' and currency_from= '$userinfo->currency'")->points;
																$price=$row->amount*$point;
																$symbol=$CI->admin->getRawRow("Select * from tbl_currency where id='$userinfo->currency'")->symbol;
															}else{
																$price=$row->amount;
                                                                $symbol=$CI->admin->getRawRow("Select * from tbl_currency where id='$userinfo->currency'")->symbol;
                                                            }
														?>	
														<td><?= $symbol.' '.$price;?></td>
														<td><?= $row->name;?></td>
                                                        <td><?= $row->email;?></td>
                                                        <td><?= $row->phone;?></td>
                                                        <?php if($row->deleted_at==NULL){?>
                                                            <td><a href="<?= base_url('PR/create-order/'.$row->payment_link);?>"><?= base_url('');?><?= $row->payment_link;?></a></td>
                                                        <?php }?>
                                                        <?php if($row->deleted_at!=NULL){?>
                                                            <td>ADDED TO TRAVPAY</td>
                                                        <?php }?>
                                                        <td><?= $row->created_at;?></td>
                                                        <td><?= $row->updated_at;?></td>
                                                        

                                                    </tr>
													<?php }}?>
                                                </tbody>
                                            </table>

										
									</div>
									<!--end: Datatable -->
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
		<!-- begin::Global Config(global config for global JS sciprts) -->
        <?php include('jquery.php');?>
        <script src="<?= base_url('resource/agroxa/plugins/datatables/dataTables.responsive.min.js');?>"></script>
        <script src="<?= base_url('resource/agroxa/plugins/datatables/responsive.bootstrap4.min.js');?>"></script>

        <!-- Datatable init js -->
        <script src="<?= base_url('resource/agroxa/assets/pages/datatables.init.js');?>"></script>
	</body>
</html>