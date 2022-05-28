	<!DOCTYPE html>
    <html lang="en">
    <!-- begin::Head -->
    <head>
    	<?php include('head.php');?>
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
    				<img alt="The Travel Square" src="./img/the-travel-square-logo-small.png">
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
    			
                <?php include('aside.php');?>
                <!-- end:: Aside -->
                <div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor kt-wrapper" id="kt_wrapper">
                	<!-- begin:: Header -->
                	<?php include('nav.php');?>
                	<!-- end:: Header -->
                	<div class="kt-content  kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor" id="kt_content">
                		<!-- begin:: Content Head -->
                		<div class="kt-subheader  kt-grid__item" id="kt_subheader">
                			<div class="kt-container  kt-container--fluid ">
                				<div class="kt-subheader__main">
                					<h3 class="kt-subheader__title">Partner ID</h3>
                					<span class="kt-subheader__separator kt-subheader__separator--v"></span>
                					<span class="kt-subheader__desc">TSA167D</span>
                					
                					<div class="kt-input-icon kt-input-icon--right kt-subheader__search kt-hidden">
                						<input type="text" class="form-control" placeholder="Search order..." id="generalSearch">
                						<span class="kt-input-icon__icon kt-input-icon__icon--right">
                							<span><i class="flaticon2-search-1"></i></span>
                						</span>
                					</div>
                				</div>
                				<div class="kt-subheader__toolbar">
                					<div class="kt-subheader__wrapper">
                						<a href="http://supplier.thetravelsquare.in/" class="btn kt-subheader__btn-daterange" id="kt_dashboard_daterangepicker" data-toggle="kt-tooltip" title="" data-placement="left" data-original-title="Bookings Calender">
                							<span class="kt-subheader__btn-daterange-title" id="kt_dashboard_daterangepicker_title">Date : </span>&nbsp;
                							<span class="kt-subheader__btn-daterange-date" id="kt_dashboard_daterangepicker_date">Mar 17</span>
                							<i class="flaticon2-calendar-1"></i>
                						</a>
                						<div class="dropdown dropdown-inline" data-toggle-="kt-tooltip" title="Publish Deal" data-placement="left">
                							<a href="http://supplier.thetravelsquare.in/" class="btn btn-icon" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                								<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon kt-svg-icon--success kt-svg-icon--md">
                									<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                										<polygon points="0 0 24 0 24 24 0 24"></polygon>
                										<path d="M5.85714286,2 L13.7364114,2 C14.0910962,2 14.4343066,2.12568431 14.7051108,2.35473959 L19.4686994,6.3839416 C19.8056532,6.66894833 20,7.08787823 20,7.52920201 L20,20.0833333 C20,21.8738751 19.9795521,22 18.1428571,22 L5.85714286,22 C4.02044787,22 4,21.8738751 4,20.0833333 L4,3.91666667 C4,2.12612489 4.02044787,2 5.85714286,2 Z" fill="#000000" fill-rule="nonzero" opacity="0.3"></path>
                										<path d="M11,14 L9,14 C8.44771525,14 8,13.5522847 8,13 C8,12.4477153 8.44771525,12 9,12 L11,12 L11,10 C11,9.44771525 11.4477153,9 12,9 C12.5522847,9 13,9.44771525 13,10 L13,12 L15,12 C15.5522847,12 16,12.4477153 16,13 C16,13.5522847 15.5522847,14 15,14 L13,14 L13,16 C13,16.5522847 12.5522847,17 12,17 C11.4477153,17 11,16.5522847 11,16 L11,14 Z" fill="#000000"></path>
                									</g>
                								</svg>
                								<!--<i class="flaticon2-plus"></i>-->
                							</a>
                						</div>
                					</div>
                				</div>
                			</div>
                		</div>
                		<!-- end:: Content Head -->					
                		<!-- begin:: Content -->
                		<div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid" id="kt-search-section">
                			<!--Begin::Dashboard 1-->
                			<!--Begin::Row-->
                			<!-- <form action="/api/FlightSearch" method="post"> -->
                				<div class="row">
                					<div style="background-color: #fff" class="col-lg-12 col-xl-12 order-lg-1 order-xl-1 p-4">
                						<div class="container h5 text-center">
                                        We Offer Packages & Land Services for More Than 583+ Cities. Partnered with 32+ Established DMC Accross the Globe
                                            <div class="row mt-3">
                                                <div class="col-md-5">
                                                    <input type="text" id="filter" placeholder="Where Travel To...?" class="form-control">
                                                </div>
                                                <div class="col-md-5">
                                                    <input type="text" placeholder="From?" class="form-control">
                                                </div>
                                                <div class="col-md-2">
                                                    <button class="btn btn-dark btn-block">Search</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
								<div id="banner" class="row mt-3">
                                <div class="col-md-4 mb-1">
                                    <div class="card rounded">
                                        <img src="<?php echo base_url(); ?>uploads/b2b/the-travel-square-b2b-packages-booking-curated-customized-and-personalised-travel-itineraries.jpg" alt="the-travel-square-b2b-packages-booking-curated-customized-and-personalised-travel-itineraries" class="text-center">
                                    </div>
                                </div>
                                <div class="col-md-4 mb-1">
                                    <div class="card rounded">
                                        <img src="<?php echo base_url(); ?>uploads/b2b/the-travel-square-b2b-packages-booking-twenty-four-seven-support-service-on-tour.jpg" alt="the-travel-square-b2b-packages-booking-twenty-four-seven-support-service-on-tour" class="img-responsive ">
                                    </div>
                                </div>
                                <div class="col-md-4 mb-1">
                                    <div class="card rounded">
                                        <img src="<?php echo base_url(); ?>uploads/b2b/the-travel-square-b2b-packages-booking-best-b2b-rates-for-experiences-in-the-packages.jpg" alt="the-travel-square-b2b-packages-booking-best-b2b-rates-for-experiences-in-the-packages" class="img-responsive ">
                                    </div>
                                </div>
                            </div>
                            </div>
                            <!-- end:: Content -->				
                        </div>
						<div class="d-none d-lg-block footer kt-footer text-dark kt-grid__item kt-grid kt-grid--desktop kt-grid--ver-desktop footer_div_class" id="footer" style="background-color: #e8e3e3; padding: 15px; margin: 0px;
; display:none!important; position:fixed;width:100%; bottom: 0px;">
                        <div id="details" class="kt-container  kt-container--fluid ">
						<div class="col-md-7"></div>
                            <div class="col-md-3">                                
								<div>
                                    <!-- <div class="row mt-2">
                                        <p class="h5 mr-3">Total Net Price</p>
                                        <p class="h3">₹ 2,895</p>
                                        <p></p>
                                    </div> -->
                                    <div class="row" id="footer_div_id">
                                        <button class="btn btn-primary btn-block" id="button_div" >CONTINUE > </button>
                                    </div>
                                </div>
                            </div>
							<div class="col-md-2"></div>
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
            <?php include('jquery.php');?>
        <script>
            $(document).ready(function(){
                $('#search-list').hide();
                    $("#filter").keyup(function(){
                    $('#search-list').show();
                    var filter = $(this).val();
                    if(filter == ''){
                        $('#search-list').hide();
                    }
                    // Loop through the comment list
                    $("nav ul li").each(function(){
                        // If the list item does not contain the text phrase fade it out
                        if ($(this).text().search(new RegExp(filter, "i")) < 0) {
                            $(this).fadeOut();
                        // Show the list item if the phrase matches and increase the count by 1
                        } else {
                            $(this).show();
                        }
                    });
                });
            });
        </script>
</body>
</html>
