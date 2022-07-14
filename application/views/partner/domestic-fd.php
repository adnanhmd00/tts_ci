<!DOCTYPE html>
    <html lang="en">
    <!-- begin::Head -->
    <head>
    	<?php include('head.php');?>
		<style>
			.dataTables_filter, .dataTables_paginate, .paging_simple_numbers {
				float: right !important;
			}
		</style>
    	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    	<style>
    		input[type="radio"] {
    			-ms-transform: scale(1.5); /* IE 9 */
    			-webkit-transform: scale(1.5); /* Chrome, Safari, Opera */
    			transform: scale(1.5);
    		}


            #search-list{
				position: absolute;
				z-index: 99999;
                background: #ececec;
                color: #000;
				width: 97%;
                /* width: 70%; */
                font-size: 18px;
            }

            #search-list a{
                font-size: 18px;
                background: #ececec;
                color: #000;
            }

            #search-list li{
                font-size: 18px;
                background: #ececec;
                color: #000;
                list-style-type: none;
                padding: 5px;
            }   

    		/* Datepicker */

    		.ui-datepicker .weekend .ui-state-default {
    			background: blue;
    		}
    		.ui-datepicker-calendar td a[data-custom] {
    			position: relative;
    			padding-bottom: 10px;
    		}
    		.ui-datepicker-calendar td a[data-custom]::after {
    			/*STYLE THE CUSTOME DATA HERE*/
    			content: '$' attr(data-custom);
    			display: block;
    			font-size: small;
    		}
    		.datepicker {
    			z-index:1001 !important;
    		}   
    	</style>
		<style>
			/* Center the loader */	
			#loader {
			position: absolute;
			left: 60%;
			top: 60%;
			z-index: 1;
			width: 120px;
			height: 120px;
			margin: -76px 0 0 -76px;
			border: 16px solid #f3f3f3;
			border-radius: 50%;
			border-top: 16px solid #3498db;
			-webkit-animation: spin 2s linear infinite;
			animation: spin 2s linear infinite;
			}

			@-webkit-keyframes spin {
			0% { -webkit-transform: rotate(0deg); }
			100% { -webkit-transform: rotate(360deg); }
			}

			@keyframes spin {
			0% { transform: rotate(0deg); }
			100% { transform: rotate(360deg); }
			}

			/* Add animation to "page content" */
			.animate-bottom {
			position: relative;
			-webkit-animation-name: animatebottom;
			-webkit-animation-duration: 1s;
			animation-name: animatebottom;
			animation-duration: 1s
			}

			@-webkit-keyframes animatebottom {
			from { bottom:-100px; opacity:0 } 
			to { bottom:0px; opacity:1 }
			}

			@keyframes animatebottom { 
			from{ bottom:-100px; opacity:0 } 
			to{ bottom:0; opacity:1 }
			}

			#myDiv {
			display: none;
			text-align: center;
			}

			.accord-panel-heading .accordion-toggle:after {
			    /* symbol for "opening" panels */
			    font-family: 'Glyphicons Halflings';  /* essential for enabling glyphicon */
			    content: "\e114";    /* adjust as needed, taken from bootstrap.css */
			    float: right;        /* adjust as needed */
			    color: grey;         /* adjust as needed */
			}
			.accord-panel-heading .accordion-toggle.collapsed:after {
			    /* symbol for "collapsed" panels */
			    content: "\e080";    /* adjust as needed, taken from bootstrap.css */
			}

			</style>
    </head>
    <!-- end::Head -->
    <!-- begin::Body -->
    <body class="kt-quick-panel--right kt-demo-panel--right kt-offcanvas-panel--right kt-header--fixed kt-header-mobile--fixed kt-subheader--enabled kt-subheader--fixed kt-subheader--solid kt-aside--enabled kt-aside--fixed" style="">
    	<!-- begin:: Page -->
    	<!-- begin:: Header Mobile -->
    	<div id="kt_header_mobile" class="kt-header-mobile  kt-header-mobile--fixed ">
    		<div class="kt-header-mobile__logo">
    			<a href="">
    				<img alt="The Travel Square" src="http://partner.thetravelsquare.in/uploads/b2b/the-travel-square-logo.png" width="30" height="30">
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
    			
				<div class="kt-aside  kt-aside--fixed  kt-grid__item kt-grid kt-grid--desktop kt-grid--hor-desktop" id="kt_aside">
                    <!-- begin:: Aside -->
                    <?php include('aside.php');?>
                    <!-- end:: Aside -->	<!-- begin:: Aside Menu -->
                    
                    <!-- end:: Aside Menu -->				
                </div>
                <!-- end:: Aside -->
                <div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor kt-wrapper" id="kt_wrapper">
                	<!-- begin:: Header -->
					<div id="kt_header" class="kt-header kt-grid__item  kt-header--fixed ">
                        <!-- begin:: Header Menu -->
                        <!-- Uncomment this to display the close button of the panel
                            <button class="kt-header-menu-wrapper-close" id="kt_header_menu_mobile_close_btn"><i class="la la-close"></i></button>
                            -->
                        <?php include('nav.php');?>
                        <!-- end:: Header Menu -->
                        <!-- begin:: Header Topbar -->
                        
                        <!-- end:: Header Topbar -->
                    </div>
					
                	<!-- end:: Header -->
                	<div class="kt-content  kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor" id="kt_content">
                		<!-- begin:: Content Head -->
                		<div class="kt-subheader  kt-grid__item" id="kt_subheader">
                			<div class="kt-container  kt-container--fluid ">
                				<div class="kt-subheader   kt-grid__item" id="kt_subheader">
									<div class="kt-container  kt-container--fluid ">
										<div class="kt-subheader__main">
											<h3 class="kt-subheader__title">
                                        International Fixed Departures                           
												</h3>

										</div>
									</div>
								</div>
                			</div>
                		</div>
                		<!-- end:: Content Head -->		
						<div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">
    
    <div class="alert alert-light alert-elevate" role="alert">
								<div class="alert-text">
                                    The Travel Square Holds Pre-Purchased Flight Inventory of Major International Sectors for Which Live Booking
									is Available with Live Inventory of More than 236+ Fixed Departures for Over 24+ Aviation Sector. The Inventory is Maintained by
									<a href="http://b2bfixeddepartures.com/">B2B Fixed Departures (b2bfixeddepartures.com)</a> in Real Time.
                                </div>
	</div>

    <div class="kt-portlet kt-portlet--mobile">
        <div class="kt-portlet__head kt-portlet__head--lg">
            <div class="kt-portlet__head-label">
                <h3 class="kt-portlet__head-title">
                    Pre-Purchased Fixed Departures | International Sectors 
				</h3>
            </div>

        </div>

        <div class="kt-portlet__body kt-portlet__body">
            <!--begin: Datatable -->
            <div id="sub_datatable_ajax_source" class="kt-datatable kt-datatable--default kt-datatable--brand kt-datatable--loaded">

                <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 10; width: 90%; background-color:white;">
                    <thead>
                        <tr>
                            <th>FD_ID</th>
                            <th>SECTOR</th>
                            <th>DEP DATE</th>
                            <th>ARR DATE</th>
                            <th>TYPE</th>
                            <th>DEP TIME</th>
                            <th>ARR TIME</th>
                            <th>FARE</th>
                            <th>BOOKING</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach($data as $dfd){
							?>
                        <tr>
							<td><?php echo $dfd->fd_id; ?></td>
                            <td><?php echo $dfd->sector; ?></td>
                            <td><?php echo $dfd->departure_date; ?></td>
                            <td><?php echo $dfd->arrival_date; ?></td>
                            <td><?php echo $dfd->fare_type; ?></td>
                            <td><?php echo $dfd->departure_time; ?></td>
                            <td><?php echo $dfd->arrival_time; ?></td>
                            <td><?php echo $dfd->adult_fare; ?></td>
                            <td data-field="Status" class="kt-datatable__cell"><span style="width: 146px;"><a href="{{ route('booking-review', ['id' => $dfd->id, 'airline' => $dfd->airline, 'flight_no' => $dfd->flight_no]) }}" class="kt-badge kt-badge--brand kt-badge--inline kt-badge--pill" style="background-color:black">BOOK NOW</a></span></td>
                        </tr>
					<?php 	} ?>
                     
                    </tbody>
                </table>

            </div>
            <!--end: Datatable -->
        </div>
    </div>
    
</div>

                    <!-- begin:: Footer -->
                        <?php include('footer.php');?>
                    <!-- end:: Footer -->			
                </div>
            </div>
        </div>
		
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

        <?php include('jquery.php');?>
        <script src="<?= base_url('resource/agroxa/plugins/datatables/dataTables.responsive.min.js');?>"></script>
        <script src="<?= base_url('resource/agroxa/plugins/datatables/responsive.bootstrap4.min.js');?>"></script>

        <!-- Datatable init js -->
        <script src="<?= base_url('resource/agroxa/assets/pages/datatables.init.js');?>"></script>


    </body>
</html>