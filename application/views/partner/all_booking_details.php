<!DOCTYPE html>

<html lang="en">
	<!-- begin::Head -->
	<head>
        <?php include('head.php');?>
        <link href="<?= base_url('resource/agroxa/plugins/datatables/dataTables.bootstrap4.min.css');?>" rel="stylesheet" type="text/css" />
        <link href="<?= base_url('resource/agroxa/plugins/datatables/buttons.bootstrap4.min.css');?>" rel="stylesheet" type="text/css" />
        <!-- Responsive datatable examples -->
        <link href="<?= base_url('resource/agroxa/plugins/datatables/responsive.bootstrap4.min.css');?>" rel="stylesheet" type="text/css" />
	<script>
		function viewBookingDetails(booking_id){
			var params = {
				booking_id:booking_id
			};
			
			$.ajax({
					url: "<?php echo base_url('customer-booking-details');?>",
					type: 'POST',
					contentType: "application/json",
					data: JSON.stringify(params),
					success: function(res) {
						$('#myModal').html(res);
                        $('#myModal').show();
					}
				});
				
		};

		function closeModal(){
			$('#myModal').modal('toggle');
		}
		
	</script>
	
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
										My Bookings                            
									</h3>
									
								</div>
							</div>
						</div>
						<!-- end:: Subheader -->
						<!-- begin:: Content -->
						<div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">
							<!-- <div class="alert alert-light alert-elevate" role="alert">
								
								<div class="alert-text">
                                    <b>Manage All Your Customer Bookings Here</b> ! Manage Booking Details, Invoices and Transaction Details all at One Place.
                                </div>
							</div> -->

							<div class="kt-portlet kt-portlet--mobile">
								<div class="kt-portlet__head">
                                            <div class="kt-portlet__head-label">
                                                <h3 class="kt-portlet__head-title">
                                                    All Bookings
                                                </h3>
                                            </div>
                                        </div>
								
								
								<div class="kt-portlet__body kt-portlet__body">
									<!--begin: Datatable -->
									<div id="sub_datatable_ajax_source" class="kt-datatable kt-datatable--default kt-datatable--brand kt-datatable--loaded" style="">
										
                                            <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 10; width: 90%; background-color:white;">
                                                <thead>
                                                    <tr>
														<th>BOOKING ID</th>
														<th>NAME</th>
														<th>E-MAIL</th>
                                                        <th>PHONE</th>
                                                        <th>TRAVEL DATE</th>
                                                        <th>RETURN DATE</th>
                                                        <th>TOTAL AMT.</th>
                                                        <th>BOOKING DETAILS</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                <?php if(!empty($booking_array)){ foreach($booking_array as $row){ 
													?>
                                                    <tr>
														<td><?= $row['booking_id'];?></td>
														<td><?= $row['name'];?></td>
														<td><?= $row['email'];?></td>
														<td><?= $row['contact_no'];?></td>
														<td><?= $row['travel_date'];?></td>
														<td><?= $row['return_date'];?></td>
														<td><?= $row['amount'];?></td>
                                                        <td>
                                                            <!-- <a href=""  class="btn btn-primary">View Deal Details</a> -->
                                                            <a href="javascript:void(0)" onclick="viewBookingDetails('<?= $row['booking_id'];?>')" class="btn-sm btn-dark">View Details</a>
                                                        </td>
                                                        

                                                    </tr>
													<?php  } }?>
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
						<?php include('footer.php');?>
					<!-- end:: Footer -->			
				</div>
			</div>
		</div>

		<div class="modal" id="myModal" role="dialog">
				
		</div>

		<!-- end:: Page -->
		<!-- begin::Quick Panel -->
		
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