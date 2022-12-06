<!DOCTYPE html>
    <html lang="en">
    <!-- begin::Head -->
    <head>
    	<?php include('head.php');?>
    	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    	<style>
			.modal{
				overflow-y: hidden !important;
			}
    		input[type="radio"] {
    			-ms-transform: scale(1.5); /* IE 9 */
    			-webkit-transform: scale(1.5); /* Chrome, Safari, Opera */
    			transform: scale(1.5);
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
			background-image: url("<?php echo base_url(); ?>uploads/banners/plane_800x600.gif");
			/* position: absolute; */
			left: 60%;
			/* top: 60%; */
			z-index: 1;
			width: 50%;
			margin: 0 auto !important;
			/* height: 120px; */
			/* margin: -76px 0 0 -76px; */
			/* border: 16px solid #f3f3f3; */
			/* border-radius: 50%; */
			/* border-top: 16px solid #3498db; */
			background-repeat: no-repeat !important;
			/* -webkit-animation: spin 2s linear infinite; */
			/* animation: spin 2s linear infinite; */
			}

			/* @-webkit-keyframes spin {
			0% { -webkit-transform: rotate(0deg); }
			100% { -webkit-transform: rotate(360deg); }
			}

			@keyframes spin {
			0% { transform: rotate(0deg); }
			100% { transform: rotate(360deg); }
			} */

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
    			<!-- begin:: Aside -->
                <!-- Uncomment this to display the close button of the panel
                    <button class="kt-aside-close " id="kt_aside_close_btn"><i class="la la-close"></i></button>
                -->
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
                							<div class="dropdown-menu dropdown-menu-fit dropdown-menu-md dropdown-menu-right">
                								<!--begin::Nav-->
                								<ul class="kt-nav">
                									<li class="kt-nav__head">
                										Publish Your Deals                                   
                										<i class="flaticon2-information" data-toggle="kt-tooltip" data-placement="right" title="" data-original-title="Click to learn more..."></i>
                									</li>
                									<li class="kt-nav__separator"></li>
                									<li class="kt-nav__item">
                										<a href="http://supplier.thetravelsquare.in/" class="kt-nav__link">
                											<i class="kt-nav__link-icon flaticon2-drop"></i>
                											<span class="kt-nav__link-text">Package Deal</span>
                										</a>
                									</li>
                									<li class="kt-nav__item">
                										<a href="http://supplier.thetravelsquare.in/" class="kt-nav__link">
                											<i class="kt-nav__link-icon flaticon2-calendar-8"></i>
                											<span class="kt-nav__link-text">Hotel Deal</span>
                										</a>
                									</li>
                									<li class="kt-nav__item">
                										<a href="http://supplier.thetravelsquare.in/" class="kt-nav__link">
                											<i class="kt-nav__link-icon flaticon2-telegram-logo"></i>
                											<span class="kt-nav__link-text">Transfers Deal</span>
                										</a>
                									</li>
                									<li class="kt-nav__item">
                										<a href="http://supplier.thetravelsquare.in/" class="kt-nav__link">
                											<i class="kt-nav__link-icon flaticon2-telegram-logo"></i>
                											<span class="kt-nav__link-text">Experience Deal</span>
                										</a>
                									</li>
                									<li class="kt-nav__item">
                										<a href="http://supplier.thetravelsquare.in/" class="kt-nav__link">
                											<i class="kt-nav__link-icon flaticon2-telegram-logo"></i>
                											<span class="kt-nav__link-text">Flight Deal</span>
                										</a>
                									</li>
                									<li class="kt-nav__item">
                										<a href="http://supplier.thetravelsquare.in/" class="kt-nav__link">
                											<i class="kt-nav__link-icon flaticon2-telegram-logo"></i>
                											<span class="kt-nav__link-text">Visa Deal</span>
                										</a>
                									</li>
                									<li class="kt-nav__separator"></li>
                									<li class="kt-nav__foot">
                										<a class="btn btn-label-brand btn-bold btn-sm" href="http://supplier.thetravelsquare.in/">VERIFY AS SELLER</a>                                    
                										<a class="btn btn-clean btn-bold btn-sm kt-hidden" href="http://supplier.thetravelsquare.in/" data-toggle="kt-tooltip" data-placement="right" title="" data-original-title="Click to learn more...">Learn more</a>
                									</li>
                								</ul>
                								<!--end::Nav-->
                							</div>
                						</div>
                					</div>
                				</div>
                			</div>
                		</div>
                		<div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid" id="kt-search-section">
                				<div class="row">
                					<div style="background-color: #fff" class="col-lg-12 col-xl-12 order-lg-1 order-xl-1 p-4">
                                        <div class="row mt-0">
											<div class="col	mt-3">
												<div class="form-check mb-2">
													<label class="form-check-label">
														<input type="radio" class="form-check-input" value="1" name="JourneyType" checked="checked"><span class="h5">&nbsp;One Way</span>
													</label>
												</div>
												<div class="form-check">
													<label class="form-check-label">
														<input type="radio" class="form-check-input" value="2" name="JourneyType"><span class="h5">&nbsp;Round Trip</span>
													</label>
												</div>
											</div>
                                        	<div class="col">
                                        		<div class="form-group">
                                        			<label for="From">From</label>
                                        			<div class="row-fluid">
                                        				<select class="selectpicker  form-control" name="Origin" style="height: 100px !important;" data-show-subtext="true" data-live-search="true">
														<option value="">Select</option>
                                        					<?php
                                        					foreach($datas as $data){
                                        						?>

                                        						<option value="<?php echo $data->cityCode ?>" data-subtext="<?php echo $data->cityName ?>"><?php echo $data->cityCode ?></option>
                                        						<?php
                                        					}
                                        					?>
                                        				</select>
                                        			</div>
                                        		</div>
                                        	</div>
                                        	<!-- <div class="d-none d-lg-block mt-3 p-4">
                                        		<i class="fa fa-exchange fa-2x"></i>
                                        	</div> -->

                                        	<div class="d-md-none d-sm-block">
                                        		<div class="text-center"><i class="fa fa-exchange fa-rotate-90 fa-2x"></i></div>
                                        	</div>

                                        	<div class="col">
                                        		<div class="form-group">
                                        			<label for="to">To</label>
                                        			<div class="row-fluid">
                                        				<select class="selectpicker form-control" name="Destination" data-show-subtext="true" data-live-search="true">
															<option value="">Select</option>
                                        					<?php
                                        					foreach($datas as $data){
                                        						?>
                                        						<option value="<?php echo $data->cityCode ?>"  data-subtext="<?php echo $data->cityName ?>"><?php echo $data->cityCode ?></option>
                                        						<?php
                                        					}
                                        					?>
                                        				</select>
                                        			</div>
                                        		</div>
                                        	</div>

											<div class="col-md-1">
                                        		<div class="form-group">
                                        			<label for="inputDate">Depart</label>
                                        			<input id="datepicker-from" name="PreferredDepartureTime"  value="<?php echo date("m/d/Y", strtotime('tomorrow'));?>" class="form-control" placeholder="Select date" autocomplete="off"> 
                                        		</div>
                                        	</div>
                                        	<div class="col-md-1">
                                        		<div class="form-group">
                                        			<label for="inputDate">Return</label>
                                        			<input id="datepicker-to" class="form-control" placeholder="Select date"  autocomplete="off">  
                                        		</div>
                                        	</div>
											<div class="col-md-1">
                                        		<div class="form-group">
                                        			<label for="From">Travellers</label>
                                        			<select name="AdultCount" id="" class="form-control">
                                        				<option value="1">1 Passenger</option>
                                        				<option value="2">2 Passenger</option>
                                        				<option value="3">3 Passenger</option>
                                        				<option value="4">More than 3 Passenger</option>
                                        			</select>
                                        		</div>
                                        	</div>	
											<div class="col-md-1" style="margin-top:6px;">
                                        		<div class="form-group">
                                        			<label for="From"></label>
                                        			<select name="ChildCount" id="" class="form-control">
														<option value="0">Select</option>
                                        				<option value="1">1 Child</option>
                                        				<option value="2">2 Child</option>
                                        				<option value="3">3 Child</option>
                                        				<option value="4">More than 3 Child</option>
                                        			</select>
                                        		</div>
                                        	</div>	
											<div class="col-md-1">
                                        		<div class="form-group">
                                        			<label for="From">Class</label>
                                        			<select name="FlightCabinClass" id="" class="form-control">
                                        				<option value="Economy">All</option>
                                        				<option value="Economy">Economy</option>
                                        				<option value="Premium Economy">Premium Economy</option>
                                        				<option value="Business">Business</option>
                                        				<option value="First Class">First Class</option>
                                        			</select>
                                        		</div>
                                        	</div>
											<div class="col-md-2" style="margin-top:26px;">
											<div class="form-group text-center">
												<button id="submit-button" class="btn btn-dark">Search Flights</button>
											</div>
											</div>			
                                        </div>
                                        
                                    </div>
                                </div>
                                <div id="search_results" ></div>
								<div id="banner" class="row mt-3">
                                <div class="col-md-4 mb-1">
                                    <div class="card rounded">
                                        <img src="<?php echo base_url(); ?>uploads/banners/the-travel-square-b2b-partner-platform-book-flights-at-best-discounted-fare.jpg" alt="" class="img-responsive ">
                                    </div>
                                </div>
                                <div class="col-md-4 mb-1">
                                    <div class="card rounded">
                                        <img src="<?php echo base_url(); ?>uploads/banners/the-travel-square-b2b-partner-platform-book-flights-from-anywhere-anytime.jpg" alt="" class="img-responsive ">
                                    </div>
                                </div>
                                <div class="col-md-4 mb-1">
                                    <div class="card rounded">
                                        <img src="<?php echo base_url(); ?>uploads/banners/the-travel-square-b2b-partner-platform-book-flights-and-add-on-ancillary-services-at-best-b2b-rates.jpg" alt="" class="img-responsive ">
                                    </div>
                                </div>
                            </div>
                            </div>
                            <!-- end:: Content -->				
                        </div>
						<div class="d-none d-lg-block footer kt-footer text-dark kt-grid__item kt-grid kt-grid--desktop kt-grid--ver-desktop footer_div_class" id="footer" style="background-color: #e8e3e3; padding: 5px; margin: 0px;
; display:none!important; position:fixed;width:100%; bottom:0px;">
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
                                        <button class="btn btn-dark btn-block" id="button_div" >Continue</button>
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
            <!-- end:: Page -->
            <!-- begin::Quick Panel -->
            
            <!-- end::Quick Panel -->
            <!-- begin::Scrolltop -->
            <div id="kt_scrolltop" class="kt-scrolltop">
            	<i class="fa fa-arrow-up"></i>
            </div>
            <!-- end::Scrolltop -->
            <!-- begin::Sticky Toolbar -->
           
            <!-- end::Sticky Toolbar -->
            <!-- begin::Demo Panel -->
            <!-- end::Demo Panel -->
            <!--Begin:: Chat-->
            <div class="modal fade- modal-sticky-bottom-right" id="kt_chat_modal" role="dialog" data-backdrop="false">
            	<div class="modal-dialog" role="document">
            		<div class="modal-content">
            			<div class="kt-chat">
            				<div class="kt-portlet kt-portlet--last">
            					<div class="kt-portlet__head">
            						<div class="kt-chat__head ">
            							<div class="kt-chat__left">
            								<div class="kt-chat__label">
            									<a href="http://supplier.thetravelsquare.in/" class="kt-chat__title">Jason Muller</a>
            									<span class="kt-chat__status">
            										<span class="kt-badge kt-badge--dot kt-badge--success"></span> Active
            									</span>
            								</div>
            							</div>
            							<div class="kt-chat__right">
            								<div class="dropdown dropdown-inline">
            									<button type="button" class="btn btn-clean btn-sm btn-icon" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            										<i class="flaticon-more-1"></i>
            									</button>
            									<div class="dropdown-menu dropdown-menu-fit dropdown-menu-right dropdown-menu-md">
            										<!--begin::Nav-->
            										<ul class="kt-nav">
            											<li class="kt-nav__head">
            												Messaging
            												<i class="flaticon2-information" data-toggle="kt-tooltip" data-placement="right" title="" data-original-title="Click to learn more..."></i>
            											</li>
            											<li class="kt-nav__separator"></li>
            											<li class="kt-nav__item">
            												<a href="http://supplier.thetravelsquare.in/" class="kt-nav__link">
            													<i class="kt-nav__link-icon flaticon2-group"></i>
            													<span class="kt-nav__link-text">New Group</span>
            												</a>
            											</li>
            											<li class="kt-nav__item">
            												<a href="http://supplier.thetravelsquare.in/" class="kt-nav__link">
            													<i class="kt-nav__link-icon flaticon2-open-text-book"></i>
            													<span class="kt-nav__link-text">Contacts</span>
            													<span class="kt-nav__link-badge">
            														<span class="kt-badge kt-badge--brand  kt-badge--rounded-">5</span>
            													</span>
            												</a>
            											</li>
            											<li class="kt-nav__item">
            												<a href="http://supplier.thetravelsquare.in/" class="kt-nav__link">
            													<i class="kt-nav__link-icon flaticon2-bell-2"></i>
            													<span class="kt-nav__link-text">Calls</span>
            												</a>
            											</li>
            											<li class="kt-nav__item">
            												<a href="http://supplier.thetravelsquare.in/" class="kt-nav__link">
            													<i class="kt-nav__link-icon flaticon2-dashboard"></i>
            													<span class="kt-nav__link-text">Settings</span>
            												</a>
            											</li>
            											<li class="kt-nav__item">
            												<a href="http://supplier.thetravelsquare.in/" class="kt-nav__link">
            													<i class="kt-nav__link-icon flaticon2-protected"></i>
            													<span class="kt-nav__link-text">Help</span>
            												</a>
            											</li>
            											<li class="kt-nav__separator"></li>
            											<li class="kt-nav__foot">
            												<a class="btn btn-label-brand btn-bold btn-sm" href="http://supplier.thetravelsquare.in/">Upgrade plan</a>
            												<a class="btn btn-clean btn-bold btn-sm" href="http://supplier.thetravelsquare.in/" data-toggle="kt-tooltip" data-placement="right" title="" data-original-title="Click to learn more...">Learn more</a>
            											</li>
            										</ul>
            										<!--end::Nav-->
            									</div>
            								</div>
            								<button type="button" class="btn btn-clean btn-sm btn-icon" data-dismiss="modal">
            									<i class="flaticon2-cross"></i>
            								</button>
            							</div>
            						</div>
            					</div>
            					<div class="kt-portlet__body">
            						<div class="kt-scroll kt-scroll--pull ps" data-height="410" data-mobile-height="225" style="height: 410px; overflow: hidden;">
            							<div class="kt-chat__messages kt-chat__messages--solid">
            								<div class="kt-chat__message kt-chat__message--success">
            									<div class="kt-chat__user">
            										<span class="kt-media kt-media--circle kt-media--sm">
            											<img src="./files/100_12(1).jpg" alt="image">
            										</span>
            										<a href="http://supplier.thetravelsquare.in/" class="kt-chat__username">Jason Muller</a>
            										<span class="kt-chat__datetime">2 Hours</span>
            									</div>
            									<div class="kt-chat__text">
            										How likely are you to recommend our company<br> to your friends and family?
            									</div>
            								</div>
            								<div class="kt-chat__message kt-chat__message--right kt-chat__message--brand">
            									<div class="kt-chat__user">
            										<span class="kt-chat__datetime">30 Seconds</span>
            										<a href="http://supplier.thetravelsquare.in/" class="kt-chat__username">You</a>
            										<span class="kt-media kt-media--circle kt-media--sm">
            											<img src="./files/300_21.jpg" alt="image">
            										</span>
            									</div>
            									<div class="kt-chat__text">
            										Hey there, we’re just writing to let you know that you’ve<br> been subscribed to a repository on GitHub.
            									</div>
            								</div>
            								<div class="kt-chat__message kt-chat__message--success">
            									<div class="kt-chat__user">
            										<span class="kt-media kt-media--circle kt-media--sm">
            											<img src="./files/100_12(1).jpg" alt="image">
            										</span>
            										<a href="http://supplier.thetravelsquare.in/" class="kt-chat__username">Jason Muller</a>
            										<span class="kt-chat__datetime">30 Seconds</span>
            									</div>
            									<div class="kt-chat__text">
            										Ok, Understood!
            									</div>
            								</div>
            								<div class="kt-chat__message kt-chat__message--right kt-chat__message--brand">
            									<div class="kt-chat__user">
            										<span class="kt-chat__datetime">Just Now</span>
            										<a href="http://supplier.thetravelsquare.in/" class="kt-chat__username">You</a>
            										<span class="kt-media kt-media--circle kt-media--sm">
            											<img src="./files/300_21.jpg" alt="image">
            										</span>
            									</div>
            									<div class="kt-chat__text">
            										You’ll receive notifications for all issues, pull requests!
            									</div>
            								</div>
            								<div class="kt-chat__message kt-chat__message--success">
            									<div class="kt-chat__user">
            										<span class="kt-media kt-media--circle kt-media--sm">
            											<img src="./files/100_12(1).jpg" alt="image">
            										</span>
            										<a href="http://supplier.thetravelsquare.in/" class="kt-chat__username">Jason Muller</a>
            										<span class="kt-chat__datetime">2 Hours</span>
            									</div>
            									<div class="kt-chat__text">
            										You were automatically <b class="kt-font-brand">subscribed</b> <br>because you’ve been given access to the repository
            									</div>
            								</div>
            								<div class="kt-chat__message kt-chat__message--right kt-chat__message--brand">
            									<div class="kt-chat__user">
            										<span class="kt-chat__datetime">30 Seconds</span>
            										<a href="http://supplier.thetravelsquare.in/" class="kt-chat__username">You</a>
            										<span class="kt-media kt-media--circle kt-media--sm">
            											<img src="./files/300_21.jpg" alt="image">
            										</span>
            									</div>
            									<div class="kt-chat__text">
            										You can unwatch this repository immediately <br>by clicking here: <a href="http://supplier.thetravelsquare.in/" class="kt-font-bold kt-link"></a>
            									</div>
            								</div>
            								<div class="kt-chat__message kt-chat__message--success">
            									<div class="kt-chat__user">
            										<span class="kt-media kt-media--circle kt-media--sm">
            											<img src="./files/100_12(1).jpg" alt="image">
            										</span>
            										<a href="http://supplier.thetravelsquare.in/" class="kt-chat__username">Jason Muller</a>
            										<span class="kt-chat__datetime">30 Seconds</span>
            									</div>
            									<div class="kt-chat__text">
            										Ok!
            									</div>
            								</div>
            								<div class="kt-chat__message kt-chat__message--right kt-chat__message--brand">
            									<div class="kt-chat__user">
            										<span class="kt-chat__datetime">Just Now</span>
            										<a href="http://supplier.thetravelsquare.in/" class="kt-chat__username">You</a>
            										<span class="kt-media kt-media--circle kt-media--sm">
            											<img src="./files/300_21.jpg" alt="image">
            										</span>
            									</div>
            									<div class="kt-chat__text">
            										Ok!
            									</div>
            								</div>
            							</div>
            							<div class="ps__rail-x" style="left: 0px; bottom: 0px;">
            								<div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div>
            							</div>
            							<div class="ps__rail-y" style="top: 0px; right: -2px;">
            								<div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 0px;"></div>
            							</div>
            						</div>
            					</div>
            					<div class="kt-portlet__foot">
            						<div class="kt-chat__input">
            							<div class="kt-chat__editor">
            								<textarea placeholder="Type here..." style="height: 50px"></textarea>
            							</div>
            							<div class="kt-chat__toolbar">
            								<div class="kt_chat__tools">
            									<a href="http://supplier.thetravelsquare.in/"><i class="flaticon2-link"></i></a>
            									<a href="http://supplier.thetravelsquare.in/"><i class="flaticon2-photograph"></i></a>
            									<a href="http://supplier.thetravelsquare.in/"><i class="flaticon2-photo-camera"></i></a>
            								</div>
            								<div class="kt_chat__actions">
            									<button type="button" class="btn btn-brand btn-md  btn-font-sm btn-upper btn-bold kt-chat__reply">reply</button>
            								</div>
            							</div>
            						</div>
            					</div>
            				</div>
            			</div>
            		</div>
            	</div>
            </div>
			<!-- Modal -->
			<div class="modal fade" id="myModal" role="dialog">
				<div class="modal-dialog modal-lg" style="max-width: 1000px!important;">
				<div class="modal-content">
					<div class="modal-header">
					<h4 class="modal-title">Review Itenary</h4>
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					</div>
					<div class="modal-body text-dark" id="modal-html" style=" height: 400px; overflow: auto; ">
					
					</div>
					<div class="modal-footer" id="continue_button_id">
					<button type="button" class="btn btn-dark" data-dismiss="modal" >Continue Booking</button>
					</div>
				</div>
				</div>
			</div>
			</div>
            <!--ENd:: Chat-->
            <?php include('jquery.php');?>
            <div class="daterangepicker ltr show-ranges opensleft">
            	<div class="ranges">
            		<ul>
            			<li data-range-key="Today">Today</li>
            			<li data-range-key="Yesterday">Yesterday</li>
            			<li data-range-key="Last 7 Days">Last 7 Days</li>
            			<li data-range-key="Last 30 Days">Last 30 Days</li>
            			<li data-range-key="This Month">This Month</li>
            			<li data-range-key="Last Month">Last Month</li>
            			<li data-range-key="Custom Range">Custom Range</li>
            		</ul>
            	</div>
            	<div class="drp-calendar left">
            		<div class="calendar-table"></div>
            		<div class="calendar-time" style="display: none;"></div>
            	</div>
            	<div class="drp-calendar right">
            		<div class="calendar-table"></div>
            		<div class="calendar-time" style="display: none;"></div>
            	</div>
            	<div class="drp-buttons"><span class="drp-selected"></span><button class="cancelBtn btn btn-sm btn-default" type="button">Cancel</button><button class="applyBtn btn btn-sm btn-primary" disabled="disabled" type="button">Apply</button> </div>
            </div>
            <iframe name="_hjRemoteVarsFrame" title="_hjRemoteVarsFrame" id="_hjRemoteVarsFrame" src="./files/box-469cf41adb11dc78be68c1ae7f9457a4.html" style="display: none !important; width: 1px !important; height: 1px !important; opacity: 0 !important; pointer-events: none !important;"></iframe>

            <script>
            	$(function() {
            		$("#datepicker-from").datepicker({
            			beforeShow: addCustomInformation,
			            beforeShowDay: function(date) {
			            	return [true, date.getDay() === 5 || date.getDay() === 6 ? "weekend" : "weekday"];
			            },
			            onChangeMonthYear: addCustomInformation,
			            onSelect: addCustomInformation
			        });
			        addCustomInformation();
			    });

            	$(function() {
            		$("#datepicker-to").datepicker({
            			beforeShow: addCustomInformation,
			            beforeShowDay: function(date) {
			            	return [true, date.getDay() === 5 || date.getDay() === 6 ? "weekend" : "weekday"];
			            },
			            onChangeMonthYear: addCustomInformation,
			            onSelect: addCustomInformation
			        });
			        addCustomInformation(); // if open by default (when you're using <div>)
			    });

            	function addCustomInformation() {
            		setTimeout(function() {
            			$(".ui-datepicker-calendar td").filter(function() {
            				var date = $(this).text();
            				return /\d/.test(date);
            			}).find("a").attr('data-custom', 110); // Add custom data here
            		}, 0)
            	}
            </script>
            <script>
            	$('.selectpicker').selectpicker({
            		size: '10'
            	});
            </script>

            <script type="text/javascript">
            	$("#submit-button").click(function(){
            		getFlights();
		        });
		        // $(document).on('click', '#submit-button', function(){
		        //    getFlights();
		        // });

            	function getFlights() {
					$('#search_results').html('<div id="loader" class="text-center"><img style="background-repeat: no-repeat !important;" src="<?php echo base_url(); ?>uploads/banners/plane_800x600.gif" alt="" class="img-responsive "> </div>');
					$('#button_div').hide();
            		error = 0;
					error1 = 0;
		            var JourneyType = $("[name='JourneyType']:checked").val();
		            if (typeof JourneyType == "undefind") {
		            	var JourneyType = $("[name='JourneyType']").val();
		            }
		            var Origin = $('[name="Origin"]').val();
		            var Destination = $('[name="Destination"]').val();
		            var FlightCabinClass = $('[name="FlightCabinClass"]').val();
		            var PreferredDepartureTime = $('#datepicker-from').val();
		            if (PreferredDepartureTime != "") {
		            	var PreferredDepartureTimeArr = $('#datepicker-from').val().split('/');
						var PreferredDepartureTime = PreferredDepartureTimeArr[2]+'-'+PreferredDepartureTimeArr[0]+'-'+PreferredDepartureTimeArr[1]+'';
		            }
		            if (PreferredDepartureTime == '') {
		            	error = error +1;
		            }

		            var PreferredArrivalTime = $('#datepicker-to').val();
		            if (PreferredArrivalTime != "") {
		            	var PreferredArrivalTimeArr = $('#datepicker-to').val().split('/');
						var PreferredArrivalTime = PreferredArrivalTimeArr[2]+'-'+PreferredArrivalTimeArr[0]+'-'+PreferredArrivalTimeArr[1]+'';
		            }
					if (JourneyType == '2' && PreferredArrivalTime == '') {
		            	error1 = error1 +1;
		            }
		            if (PreferredArrivalTime == '') {
		            	PreferredArrivalTime = PreferredDepartureTime;
		            }
					
		            var AdultCount = $('[name="AdultCount"]').val();
		            var ChildCount = $('[name="ChildCount"]').val();
		            var InfantCount = 0;
		        	var segment = [{
		        		Origin: Origin,
		            	Destination: Destination,
		            	FlightCabinClass: FlightCabinClass,
		            	PreferredArrivalTime: PreferredArrivalTime,
		            	PreferredDepartureTime: PreferredDepartureTime,
				      }];
					
					
					
						if($("[name='JourneyType']:checked").val() == '2')
						{
							var segments = {
									"cabinClass": FlightCabinClass,
									"journeyType": "2",
									"paxInfo": {
									"ADULT": AdultCount,
									"CHILD": ChildCount,
									"INFANT": InfantCount
									},
									"routeInfos": [
									{
										"fromCityOrAirport": {
										"code": Origin
										},
										"toCityOrAirport": {
										"code": Destination
										},
										"travelDate": PreferredDepartureTime
									},
									{
										"fromCityOrAirport": {
										"code": Destination
										},
										"toCityOrAirport": {
										"code": Origin
										},
										"travelDate": PreferredArrivalTime
									}
									],
									"searchModifiers": {
									"isConnectingFlight": false,
									"isDirectFlight": false
									}
								};
						}else{
							var segments = {
							"cabinClass": FlightCabinClass,
							"journeyType": "1",
							"paxInfo": {
							"ADULT": AdultCount,
							"CHILD": ChildCount,
							"INFANT": InfantCount
							},
							"routeInfos": [
							{
								"fromCityOrAirport": {
								"code": Origin
								},
								"toCityOrAirport": {
								"code": Destination
								},
								"travelDate": PreferredArrivalTime
							}
							],
							"searchModifiers": {
							"isConnectingFlight": false,
							"isDirectFlight": false
							}
						};
						};
		            var params = {
		            	// 'UserName':'Hash7212',
		        		// 'Password':'tZ2W!zZr2q',
		            	// 'ClientId':'180134',
		            	// 'apikey':'112028f0143732-af9a-454a-82a0-7d5cbbaeb766',
		            	// 'EndUserIp':'124.123.78.11',
		            	JourneyType: JourneyType,
		            	AdultCount:AdultCount,
		            	ChildCount:ChildCount,
		            	InfantCount:InfantCount,
		            	searchQuery:segments,
						Origin: Origin,
		            	Destination: Destination,
		            };
		            if (error) {
		            	alert('Please select required field');
						$('#search_results').html('');
		            	return false;
		            }
					if (error1) {
		            	alert('Please select return date field value');
						$('#search_results').html('');
		            	return false;
		            }
		            console.log(JSON.stringify(params));
		            $.ajax({
		            	url: "<?php echo base_url('search-flight-results');?>",
		            	type: 'POST',
		            	contentType: "application/json",
		            	data: JSON.stringify(params),
		            	success: function(res) {
		            		$('#search_results').html(res); 
							$('#banner').hide();
		            		$('.selectpicker').selectpicker('refresh');
		            		$("#datepicker-from").datepicker({
					            beforeShow: addCustomInformation,
					            //---^----------- if closed by default (when you're using <input>)
					            beforeShowDay: function(date) {
					            return [true, date.getDay() === 5 || date.getDay() === 6 ? "weekend" : "weekday"];
					            },
					            onChangeMonthYear: addCustomInformation,
					            onSelect: addCustomInformation
					        });
					        addCustomInformation();
							$("#datepicker-to").datepicker({
					            beforeShow: addCustomInformation,
					            //---^----------- if closed by default (when you're using <input>)
					            beforeShowDay: function(date) {
					            return [true, date.getDay() === 5 || date.getDay() === 6 ? "weekend" : "weekday"];
					            },
					            onChangeMonthYear: addCustomInformation,
					            onSelect: addCustomInformation
					        });
		            	}
		            });
            	};

				
				var getHighlightRow = function() {
					return $('table > tbody > tr.highlight');
				}

				var getHighlightRow2 = function() {
					return $('table > tbody > tr.selected');
				}
				adult_count = 0;
				child_count = 0;
				$('#button_div').click(function(e) {
					var template = '';
					var BaseFare = 0;	
					var tax = 0;
					var rows = getHighlightRow();
					if (rows != undefined) {
					rowid = rows.attr('id')	
					adult_count = $('#'+rowid+'_adult_count').val();
					child_count = $('#'+rowid+'_child_count').val();
					stopages_count = $('#'+rowid+'_stopages_count').val();
					stopages_counts = $('#'+rowid+'_stopages_counts').val();
					flight_1 = origin_1 = $('#'+rowid+'_origin').val();
					flight_1 += ' > ';
					flight_1 += destination_1 = $('#'+rowid+'_destination').val();
					flight_type_1 = $('#'+rowid+'_flight_type').val();	
					flight_name_1 = $('#'+rowid+'_flight_name').text();
					board_time_1 = $('#'+rowid+'_board_time').text();
					board_city_1 = $('#'+rowid+'_board_city').text();
					board_city_name_1 = $('#'+rowid+'_board_city_name').val();
					board_airport_1 = $('#'+rowid+'_board_airport').val();
					board_datetime_1 = $('#'+rowid+'_board_datetime').val();
					duration_1 = $('#'+rowid+'_durations').val();
					depart_time_1 = $('#'+rowid+'_depart_time').text();
					depart_city_1 = $('#'+rowid+'_depart_city').text();
					depart_airport_1 = $('#'+rowid+'_depart_airport').val();
					depart_datetime_1 = $('#'+rowid+'_depart_datetime').val();
					depart_city_name_1 = $('#'+rowid+'_depart_city_name').val();
					baggage_1 = $('#'+rowid+'_baggage').val();
					cabin_baggage_1 = $('#'+rowid+'_cabin_baggage').val();
					BaseFare += parseFloat($('#'+rowid+'_basefare').val());
					tax += parseFloat($('#'+rowid+'_tax').val());
					flight_img_1 = $('#'+rowid+'_flight').val();	
					is_refundable_1 = $('#'+rowid+'_is_refundable').val();

					card_one = `<div class="card">
								<div class="card-header">
									<h5 class="card-title">`+flight_1+` | `+flight_type_1+` </h5>
								</div>
								<div class="card-body text-dark">`;
								if (parseInt(stopages_counts) == 1)
								{
									card_one += `<div class="row">
									    <div class="col-md-12"><img style="height: 50px;" src="`+flight_img_1+`" /> </div>
										<div class="col-md-4" style=" font-size: 16px; font-weight: bold; margin-top: 5px;">`+board_time_1+`</div>
										<div class="col-md-4" style=" font-size: 16px; font-weight: bold; margin-top: 5px;">`+duration_1+`</div>
										<div class="col-md-4" style=" font-size: 16px; font-weight: bold; margin-top: 5px;">`+depart_time_1+`</div>
									</div>
									<div class="row">
										<div class="col-md-4">
											
											<h4>`+board_city_name_1+`</h4>
											`+board_airport_1+`
										</div>
										<div class="col-md-4">&nbsp;</div>
										<div class="col-md-4">
											
											<h4>`+depart_city_name_1+`</h4>
											`+depart_airport_1+`
										</div>
									</div>`;
								}else{
									for (let i = 0; i <= parseInt(stopages_count); i++) {
										if(i == 0){
											duration_1 = $('#'+rowid+'_durations_'+i+'').val();
											depart_time_1 = $('#'+rowid+'_depart_time_'+i+'').val();
											depart_city_1 = $('#'+rowid+'_depart_city_'+i+'').val();
											depart_airport_1 = $('#'+rowid+'_depart_airport_'+i+'').val();
											depart_datetime_1 = $('#'+rowid+'_depart_datetime_'+i+'').val();
											depart_city_name_1 = $('#'+rowid+'_depart_city_name_'+i+'').val();
										}else if(i == 1){
											board_time_1 = $('#'+rowid+'_start_time_1').val();
											board_city_1 = $('#'+rowid+'_depart_city_0').val();
											board_city_name_1 = $('#'+rowid+'_depart_city_name_0').val();		
											board_airport_1 = $('#'+rowid+'_depart_airport_0').val();
											board_datetime_1 = $('#'+rowid+'_depart_datetime_0').val();
											duration_1 = $('#'+rowid+'_durations_'+i+'').val();
											depart_time_1 = $('#'+rowid+'_depart_time_'+i+'').val();
											depart_city_1 = $('#'+rowid+'_depart_city_'+i+'').val();
											depart_airport_1 = $('#'+rowid+'_depart_airport_'+i+'').val();
											depart_datetime_1 = $('#'+rowid+'_depart_datetime_'+i+'').val();
											depart_city_name_1 = $('#'+rowid+'_depart_city_name_'+i+'').val();		
										} else if(i == 2){
											board_time_1 = $('#'+rowid+'_start_time_2').val();
											board_city_1 = $('#'+rowid+'_depart_city_1').val();
											board_city_name_1 = $('#'+rowid+'_depart_city_name_1').val();		
											board_airport_1 = $('#'+rowid+'_depart_airport_1').val();
											board_datetime_1 = $('#'+rowid+'_depart_datetime_1').val();
											duration_1 = $('#'+rowid+'_durations_'+i+'').val();
											depart_time_1 = $('#'+rowid+'_depart_time_'+i+'').val();
											depart_city_1 = $('#'+rowid+'_depart_city_'+i+'').val();
											depart_airport_1 = $('#'+rowid+'_depart_airport_'+i+'').val();
											depart_datetime_1 = $('#'+rowid+'_depart_datetime_'+i+'').val();
											depart_city_name_1 = $('#'+rowid+'_depart_city_name_'+i+'').val();	
										}else if(i == 3){
											board_time_1 = $('#'+rowid+'_start_time_3').val();
											board_city_1 = $('#'+rowid+'_depart_city_2').val();
											board_city_name_1 = $('#'+rowid+'_depart_city_name_2').val();		
											board_airport_1 = $('#'+rowid+'_depart_airport_2').val();
											board_datetime_1 = $('#'+rowid+'_depart_datetime_2').val();
											duration_1 = $('#'+rowid+'_durations_'+i+'').val();
											depart_time_1 = $('#'+rowid+'_depart_time_'+i+'').val();
											depart_city_1 = $('#'+rowid+'_depart_city_'+i+'').val();
											depart_airport_1 = $('#'+rowid+'_depart_airport_'+i+'').val();
											depart_datetime_1 = $('#'+rowid+'_depart_datetime_'+i+'').val();
											depart_city_name_1 = $('#'+rowid+'_depart_city_name_'+i+'').val();
										}
										card_one += `<div class="row">
									    <div class="col-md-12"><img style="height: 50px;" src="`+flight_img_1+`" /> </div>
										<div class="col-md-4" style=" font-size: 16px; font-weight: bold; margin-top: 5px;">`+board_time_1+`</div>
										<div class="col-md-4" style=" font-size: 16px; font-weight: bold; margin-top: 5px;">`+duration_1+`</div>
										<div class="col-md-4" style=" font-size: 16px; font-weight: bold; margin-top: 5px;">`+depart_time_1+`</div>
									</div>
									<div class="row">
										<div class="col-md-4">
											
											<h4>`+board_city_name_1+`</h4>
											`+board_airport_1+`
										</div>
										<div class="col-md-4">&nbsp;</div>
										<div class="col-md-4">
											
											<h4>`+depart_city_name_1+`</h4>
											`+depart_airport_1+`
										</div>
									</div>`;
									}
									
								}
									

									card_one += `</div>
								</div>`;
					template += card_one	
					}
					is_round = 0;
					var rows2 = getHighlightRow2();
					if (rows2 != undefined) {
						rowid2 = rows2.attr('id')	
						
						if(rowid2){
							is_round = 1;
							adult_count = $('#'+rowid2+'_adult_count').val();
							child_count = $('#'+rowid2+'_child_count').val();
							stopages_count_2 = $('#'+rowid2+'_stopages_count').val();
							stopages_counts_2 = $('#'+rowid2+'_stopages_counts').val();
							flight_2 = origin_2 = $('#'+rowid2+'_origin').val();
							flight_2 += ' > ';
							flight_2 += destination_2 = $('#'+rowid2+'_destination').val();
							flight_type_2 = $('#'+rowid2+'_flight_type').val();	
							flight_name_2 = $('#'+rowid2+'_flight_name').text();
							board_time_2 = board_time_6  = $('#'+rowid2+'_board_time').text();
							board_city_2 = board_city_6  = $('#'+rowid2+'_board_city').text();
							board_city_name_2 = board_city_name_6  = $('#'+rowid2+'_board_city_name').val();
							board_airport_2 = board_airport_6  = $('#'+rowid2+'_board_airport').val();
							board_datetime_2 = board_datetime_6  = $('#'+rowid2+'_board_datetime').val();
							duration_2 = duration_6  = $('#'+rowid2+'_durations').val();
							depart_time_2 = depart_time_6  = $('#'+rowid2+'_depart_time').text();
							depart_city_2 = depart_city_6  = $('#'+rowid2+'_depart_city').text();
							depart_airport_2 = depart_airport_6  = $('#'+rowid2+'_depart_airport').val();
							depart_datetime_2 = depart_datetime_6  = $('#'+rowid2+'_depart_datetime').val();
							depart_city_name_2 = $('#'+rowid2+'_depart_city_name').val();
							baggage_2 = $('#'+rowid2+'_baggage').val();
							cabin_baggage_2 = $('#'+rowid2+'_cabin_baggage').val();
							BaseFare += parseFloat($('#'+rowid2+'_basefare').val());
							tax += parseFloat($('#'+rowid2+'_tax').val());
							flight_img_2 = $('#'+rowid2+'_flight').val();	
							is_refundable_2 = $('#'+rowid2+'_is_refundable').val();

							card_two = `<div class="card">
										<div class="card-header">
											<h5 class="card-title">`+flight_2+` | `+flight_type_2+` </h5>
										</div>
										<div class="card-body text-dark">`;
										if (parseInt(stopages_counts_2) == 1)
										{
											card_two += `<div class="row">
												<div class="col-md-12"><img style="height: 50px;" src="`+flight_img_2+`" /> </div>
												<div class="col-md-4" style=" font-size: 16px; font-weight: bold; margin-top: 5px;">`+board_time_2+`</div>
												<div class="col-md-4" style=" font-size: 16px; font-weight: bold; margin-top: 5px;">`+duration_2+`</div>
												<div class="col-md-4" style=" font-size: 16px; font-weight: bold; margin-top: 5px;">`+depart_time_2+`</div>
											</div>
											<div class="row">
												<div class="col-md-4">
													
													<h4>`+board_city_name_2+`</h4>
													`+board_airport_2+`
												</div>
												<div class="col-md-4">&nbsp;</div>
												<div class="col-md-4">
													
													<h4>`+depart_city_name_2+`</h4>
													`+depart_airport_2+`
												</div>
											</div>`;
										}else{
											for (let i = 0; i <= stopages_count_2.length; i++) {
												if(i == 0){
													duration_2 = $('#'+rowid2+'_durations_'+i+'').val();
													depart_time_2 = $('#'+rowid2+'_depart_time_'+i+'').val();
													depart_city_2 = $('#'+rowid2+'_depart_city_'+i+'').val();
													depart_airport_2 = $('#'+rowid2+'_depart_airport_'+i+'').val();
													depart_datetime_2 = $('#'+rowid2+'_depart_datetime_'+i+'').val();
													depart_city_name_2 = $('#'+rowid2+'_depart_city_name_'+i+'').val();
												}else if(i == 1){
													board_time_2 = $('#'+rowid2+'_start_time_1').val();
													board_city_2 = $('#'+rowid2+'_depart_city_0').val();
													board_city_name_2 = $('#'+rowid2+'_depart_city_name_0').val();		
													board_airport_2 = $('#'+rowid2+'_depart_airport_0').val();
													board_datetime_2 = $('#'+rowid2+'_depart_datetime_0').val();
													duration_2 = $('#'+rowid2+'_durations_'+i+'').val();
													depart_time_2 = $('#'+rowid2+'_depart_time_'+i+'').val();
													depart_city_2 = $('#'+rowid2+'_depart_city_'+i+'').val();
													depart_airport_2 = $('#'+rowid2+'_depart_airport_'+i+'').val();
													depart_datetime_2 = $('#'+rowid2+'_depart_datetime_'+i+'').val();
													depart_city_name_2 = $('#'+rowid2+'_depart_city_name_'+i+'').val();		
												} else if(i == 2){
													board_time_2 = $('#'+rowid2+'_start_time_2').val();
													board_city_2 = $('#'+rowid2+'_depart_city_1').val();
													board_city_name_2 = $('#'+rowid2+'_depart_city_name_1').val();		
													board_airport_2 = $('#'+rowid2+'_depart_airport_1').val();
													board_datetime_2 = $('#'+rowid2+'_depart_datetime_1').val();
													duration_2 = $('#'+rowid2+'_durations_'+i+'').val();
													depart_time_2 = $('#'+rowid2+'_depart_time_'+i+'').val();
													depart_city_2 = $('#'+rowid2+'_depart_city_'+i+'').val();
													depart_airport_2 = $('#'+rowid2+'_depart_airport_'+i+'').val();
													depart_datetime_2 = $('#'+rowid2+'_depart_datetime_'+i+'').val();
													depart_city_name_2 = $('#'+rowid2+'_depart_city_name_'+i+'').val();	
												}else if(i == 3){
													board_time_2 = $('#'+rowid2+'_start_time_3').val();
													board_city_2 = $('#'+rowid2+'_depart_city_2').val();
													board_city_name_2 = $('#'+rowid2+'_depart_city_name_2').val();		
													board_airport_2 = $('#'+rowid2+'_depart_airport_2').val();
													board_datetime_2 = $('#'+rowid2+'_depart_datetime_2').val();
													duration_2 = $('#'+rowid2+'_durations_'+i+'').val();
													depart_time_2 = $('#'+rowid2+'_depart_time_'+i+'').val();
													depart_city_2 = $('#'+rowid2+'_depart_city_'+i+'').val();
													depart_airport_2 = $('#'+rowid2+'_depart_airport_'+i+'').val();
													depart_datetime_2 = $('#'+rowid2+'_depart_datetime_'+i+'').val();
													depart_city_name_2 = $('#'+rowid2+'_depart_city_name_'+i+'').val();
												}
												card_two += `<div class="row">
												<div class="col-md-12"><img style="height: 50px;" src="`+flight_img_2+`" /> </div>
												<div class="col-md-4" style=" font-size: 16px; font-weight: bold; margin-top: 5px;">`+board_time_2+`</div>
												<div class="col-md-4" style=" font-size: 16px; font-weight: bold; margin-top: 5px;">`+duration_2+`</div>
												<div class="col-md-4" style=" font-size: 16px; font-weight: bold; margin-top: 5px;">`+depart_time_2+`</div>
											</div>
											<div class="row">
												<div class="col-md-4">
													
													<h4>`+board_city_name_2+`</h4>
													`+board_airport_2+`
												</div>
												<div class="col-md-4">&nbsp;</div>
												<div class="col-md-4">
													
													<h4>`+depart_city_name_2+`</h4>
													`+depart_airport_2+`
												</div>
											</div>`;
											}
											
										}
											

											card_two += `</div>
										</div>`;
								template += card_two
						}
												
					}
					var sum_of_fare = parseFloat(BaseFare)+parseFloat(tax);
					template += `<div class="row text-dark">
							<div class="col-md-12">
							<div class="panel-group" id="accordion">
								<div class="card">
								<div class="card-header accord-panel-heading">
									<h4 class="card-title">
									<a class="accordion-toggle text-dark" data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
										Baggage Policy
									</a>
									</h4>
								</div>
								<div id="collapseOne" class="panel-collapse collapse in">
									<div class="card-body">
									<div class="row">
										<div class="col-md-6">
										</div>
										<div class="col-md-6">
										</div>
									</div>

									<div class="row">
										<div class="col-md-6">
											Cabin Bag <br>
											<b>`+cabin_baggage_1+`</b>
										</div>
										<div class="col-md-6">
											Check In <br>
											<b>`+baggage_1+`</b>
										</div>
									</div>

									<div class="row">
										<div class="col-md-12">
										<hr>
											<p> <b>Disclaimer:</b> Items identified with offensive nature will not be permitted.</p>
										</div>
										
									</div>
								</div>
								</div>
								<div class="card">
								<div class="card-header accord-panel-heading">
									<h4 class="card-title">
									<a class="accordion-toggle text-dark" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
										Cancellation & Refund
									</a>
									</h4>
								</div>
								<div id="collapseTwo" class="panel-collapse collapse">
									<div class="card-body">
									Is refundable?
									<b>`+is_refundable_1+`</b>
									</div>
								</div>
								</div>
								<div class="card">
								<div class="card-header accord-panel-heading">
									<h4 class="card-title">
									<a class="accordion-toggle text-dark" data-toggle="collapse" data-parent="#accordion" href="#collapseThree">
										Fare Details
									</a>
									</h4>
								</div>
								<div id="collapseThree" class="panel-collapse collapse">
									<div class="card-body">
									<h5>Fare</h5>
									<div class="row">
										
										<div class="col-md-6">
											Base Fare <hr>
											Taxes & Surcharges<hr>
										</div>
										<div class="col-md-6">
											`+BaseFare+`<hr>
											`+tax+`<hr>
										</div>
										<hr>
										<div class="col-md-6">
											<b>To Pay</b>
										</div>
										<div class="col-md-6">
											<b>`+sum_of_fare+`</b>
										</div>
									</div>
									</div>
								</div>
								</div>
							</div>
							</div>
						</div>`;
					$('#myModal').modal('show');
					$('#modal-html').html(template);
					html = `Continue Booking of Rs. <b>`+parseInt(sum_of_fare)+`/-</b>`;
					if(is_round == 1){

						rowid = rows.attr('id');
							board_time_1 = $('#'+rowid+'_board_time').text();
							board_city_1 = $('#'+rowid+'_board_city').text();
							board_city_name_1 = $('#'+rowid+'_board_city_name').val();
							board_airport_1 = $('#'+rowid+'_board_airport').val();
							board_datetime_1 = $('#'+rowid+'_board_datetime').val();
							duration_1 = $('#'+rowid+'_durations_0').val();
							depart_time_1 = $('#'+rowid+'_depart_time_0').val();
							depart_city_1 = $('#'+rowid+'_depart_city_0').val();
							depart_airport_1 = $('#'+rowid+'_depart_airport_0').val();
							depart_datetime_1 = $('#'+rowid+'_depart_datetime_0').val();
							depart_city_name_1 = $('#'+rowid+'_depart_city_name_0').val();
						
							board_time_2 = $('#'+rowid+'_start_time_1').val();
							board_city_2 = $('#'+rowid+'_depart_city_0').val();
							board_city_name_2 = $('#'+rowid+'_depart_city_name_0').val();		
							board_airport_2 = $('#'+rowid+'_depart_airport_0').val();
							board_datetime_2 = $('#'+rowid+'_depart_datetime_0').val();
							duration_2 = $('#'+rowid+'_durations_1').val();
							depart_time_2 = $('#'+rowid+'_depart_time_1').val();
							depart_city_2 = $('#'+rowid+'_depart_city_1').val();
							depart_airport_2 = $('#'+rowid+'_depart_airport_1').val();
							depart_datetime_2 = $('#'+rowid+'_depart_datetime_1').val();
							depart_city_name_2 = $('#'+rowid+'_depart_city_name_1').val();		
						
							board_time_3 = $('#'+rowid+'_start_time_2').val();
							board_city_3 = $('#'+rowid+'_depart_city_1').val();
							board_city_name_3 = $('#'+rowid+'_depart_city_name_1').val();		
							board_airport_3 = $('#'+rowid+'_depart_airport_1').val();
							board_datetime_3 = $('#'+rowid+'_depart_datetime_1').val();
							duration_3 = $('#'+rowid+'_durations_2').val();
							depart_time_3 = $('#'+rowid+'_depart_time_2').val();
							depart_city_3 = $('#'+rowid+'_depart_city_2').val();
							depart_airport_3 = $('#'+rowid+'_depart_airport_2').val();
							depart_datetime_3 = $('#'+rowid+'_depart_datetime_2').val();
							depart_city_name_3 = $('#'+rowid+'_depart_city_name_2').val();	
						
							board_time_4 = $('#'+rowid+'_start_time_3').val();
							board_city_4 = $('#'+rowid+'_depart_city_2').val();
							board_city_name_4 = $('#'+rowid+'_depart_city_name_2').val();		
							board_airport_4 = $('#'+rowid+'_depart_airport_2').val();
							board_datetime_4 = $('#'+rowid+'_depart_datetime_2').val();
							duration_4 = $('#'+rowid+'_durations_3').val();
							depart_time_4 = $('#'+rowid+'_depart_time_3').val();
							depart_city_4 = $('#'+rowid+'_depart_city_3').val();
							depart_airport_4 = $('#'+rowid+'_depart_airport_3').val();
							depart_datetime_4 = $('#'+rowid+'_depart_datetime_3').val();
							depart_city_name_4 = $('#'+rowid+'_depart_city_name_3').val();

							rowid2 = rows2.attr('id')	
							board_time_1_2 = $('#'+rowid2+'_board_time').text();
							board_city_1_2 = $('#'+rowid2+'_board_city').text();
							board_city_name_1_2 = $('#'+rowid2+'_board_city_name').val();
							board_airport_1_2 = $('#'+rowid2+'_board_airport').val();
							board_datetime_1_2 = $('#'+rowid2+'_board_datetime').val();
							duration_1_2 = $('#'+rowid2+'_durations_0').val();
							depart_time_1_2 = $('#'+rowid2+'_depart_time_0').val();
							depart_city_1_2 = $('#'+rowid2+'_depart_city_0').val();
							depart_airport_1_2 = $('#'+rowid2+'_depart_airport_0').val();
							depart_datetime_1_2 = $('#'+rowid2+'_depart_datetime_0').val();
							depart_city_name_1_2 = $('#'+rowid2+'_depart_city_name_0').val();
						
							board_time_2_2 = $('#'+rowid2+'_start_time_1').val();
							board_city_2_2 = $('#'+rowid2+'_depart_city_0').val();
							board_city_name_2_2 = $('#'+rowid2+'_depart_city_name_0').val();		
							board_airport_2_2 = $('#'+rowid2+'_depart_airport_0').val();
							board_datetime_2_2 = $('#'+rowid2+'_depart_datetime_0').val();
							duration_2_2 = $('#'+rowid2+'_durations_1').val();
							depart_time_2_2 = $('#'+rowid2+'_depart_time_1').val();
							depart_city_2_2 = $('#'+rowid2+'_depart_city_1').val();
							depart_airport_2_2 = $('#'+rowid2+'_depart_airport_1').val();
							depart_datetime_2_2 = $('#'+rowid2+'_depart_datetime_1').val();
							depart_city_name_2_2 = $('#'+rowid2+'_depart_city_name_1').val();		
						
							board_time_3_2 = $('#'+rowid2+'_start_time_2').val();
							board_city_3_2 = $('#'+rowid2+'_depart_city_1').val();
							board_city_name_3_2 = $('#'+rowid2+'_depart_city_name_1').val();		
							board_airport_3_2 = $('#'+rowid2+'_depart_airport_1').val();
							board_datetime_3_2 = $('#'+rowid2+'_depart_datetime_1').val();
							duration_3_2 = $('#'+rowid2+'_durations_2').val();
							depart_time_3_2 = $('#'+rowid2+'_depart_time_2').val();
							depart_city_3_2 = $('#'+rowid2+'_depart_city_2').val();
							depart_airport_3_2 = $('#'+rowid2+'_depart_airport_2').val();
							depart_datetime_3_2 = $('#'+rowid2+'_depart_datetime_2').val();
							depart_city_name_3_2 = $('#'+rowid2+'_depart_city_name_2').val();	
						
							board_time_4_2 = $('#'+rowid2+'_start_time_3').val();
							board_city_4_2 = $('#'+rowid2+'_depart_city_2').val();
							board_city_name_4_2 = $('#'+rowid2+'_depart_city_name_2').val();		
							board_airport_4_2 = $('#'+rowid2+'_depart_airport_2').val();
							board_datetime_4_2 = $('#'+rowid2+'_depart_datetime_2').val();
							duration_4_2 = $('#'+rowid2+'_durations_3').val();
							depart_time_4_2 = $('#'+rowid2+'_depart_time_3').val();
							depart_city_4_2 = $('#'+rowid2+'_depart_city_3').val();
							depart_airport_4_2 = $('#'+rowid2+'_depart_airport_3').val();
							depart_datetime_4_2 = $('#'+rowid2+'_depart_datetime_3').val();
							depart_city_name_4_2 = $('#'+rowid2+'_depart_city_name_3').val();
						
						button_html = `<button type="button" class="btn btn-dark" data-dismiss="modal" onclick="viewFlightDetailsPage('`+adult_count+`','`+child_count+`','`+stopages_count+`','`+stopages_counts+`','`+origin_1+`','`+destination_1+`','`+flight_name_1+`','`+flight_1+`','`+flight_type_1+`','`+board_time_1+`','`+board_city_1+`','`+board_city_name_1+`','`+board_airport_1+`','`+board_datetime_1+`','`+duration_1+`','`+depart_time_1+`','`+depart_city_1+`','`+depart_airport_1+`','`+depart_datetime_1+`','`+depart_city_name_1+`', '`+board_time_2+`','`+board_city_2+`','`+board_city_name_2+`','`+board_airport_2+`','`+board_datetime_2+`','`+duration_2+`','`+depart_time_2+`','`+depart_city_2+`','`+depart_airport_2+`','`+depart_datetime_2+`','`+depart_city_name_2+`','`+board_time_3+`','`+board_city_3+`','`+board_city_name_3+`', '`+board_airport_3+`','`+board_datetime_3+`','`+duration_3+`', '`+depart_time_3+`','`+depart_city_3+`','`+depart_airport_3+`','`+depart_datetime_3+`','`+depart_city_name_3+`', '`+board_time_4+`','`+board_city_4+`', '`+board_city_name_4+`', '`+board_airport_4+`','`+board_datetime_4+`','`+duration_4+`','`+depart_time_4+`','`+depart_city_4+`','`+depart_airport_4+`','`+depart_datetime_4+`','`+depart_city_name_4+`','`+baggage_1+`','`+cabin_baggage_1+`','`+flight_img_1+`',
'`+is_refundable_1+`','`+is_round+`','`+stopages_count_2+`','`+stopages_counts_2+`','`+origin_2+`','`+destination_2+`','`+flight_name_2+`','`+flight_2+`','`+flight_type_2+`','`+flight_img_2+`','`+BaseFare+`','`+tax+`','`+sum_of_fare+`', '`+board_time_6+`','`+board_city_6+`','`+board_city_name_6+`','`+board_airport_6+`','`+board_datetime_6+`','`+duration_6+`','`+depart_time_6+`','`+depart_city_6+`','`+depart_airport_6+`','`+depart_datetime_6+`','`+board_time_1_2+`','`+board_city_1_2+`','`+board_city_name_1_2+`','`+board_airport_1_2+`','`+board_datetime_1_2+`','`+duration_1_2+`','`+depart_time_1_2+`','`+depart_city_1_2+`','`+depart_airport_1_2+`','`+depart_datetime_1_2+`','`+depart_city_name_1_2+`', '`+board_time_2_2+`','`+board_city_2_2+`','`+board_city_name_2_2+`','`+board_airport_2_2+`','`+board_datetime_2_2+`','`+duration_2_2+`','`+depart_time_2_2+`','`+depart_city_2_2+`','`+depart_airport_2_2+`','`+depart_datetime_2_2+`','`+depart_city_name_2_2+`','`+board_time_3_2+`','`+board_city_3_2+`','`+board_city_name_3_2+`', '`+board_airport_3_2+`','`+board_datetime_3_2+`','`+duration_3_2+`', '`+depart_time_3_2+`','`+depart_city_3_2+`','`+depart_airport_3_2+`','`+depart_datetime_3_2+`','`+depart_city_name_3_2+`', '`+board_time_4_2+`','`+board_city_4_2+`', '`+board_city_name_4_2+`', '`+board_airport_4_2+`','`+board_datetime_4_2+`','`+duration_4_2+`','`+depart_time_4_2+`','`+depart_city_4_2+`','`+depart_airport_4_2+`','`+depart_datetime_4_2+`','`+depart_city_name_4_2+`')" >`+html+`</button>`;
					$('#continue_button_id').html(button_html);
					}else{

							rowid = rows.attr('id');
							board_time_1 = $('#'+rowid+'_board_time').text();
							board_city_1 = $('#'+rowid+'_board_city').text();
							board_city_name_1 = $('#'+rowid+'_board_city_name').val();
							board_airport_1 = $('#'+rowid+'_board_airport').val();
							board_datetime_1 = $('#'+rowid+'_board_datetime').val();
							duration_1 = $('#'+rowid+'_durations_0').val();
							depart_time_1 = $('#'+rowid+'_depart_time_0').val();
							depart_city_1 = $('#'+rowid+'_depart_city_0').val();
							depart_airport_1 = $('#'+rowid+'_depart_airport_0').val();
							depart_datetime_1 = $('#'+rowid+'_depart_datetime_0').val();
							depart_city_name_1 = $('#'+rowid+'_depart_city_name_0').val();
						
							board_time_2 = $('#'+rowid+'_start_time_1').val();
							board_city_2 = $('#'+rowid+'_depart_city_0').val();
							board_city_name_2 = $('#'+rowid+'_depart_city_name_0').val();		
							board_airport_2 = $('#'+rowid+'_depart_airport_0').val();
							board_datetime_2 = $('#'+rowid+'_depart_datetime_0').val();
							duration_2 = $('#'+rowid+'_durations_1').val();
							depart_time_2 = $('#'+rowid+'_depart_time_1').val();
							depart_city_2 = $('#'+rowid+'_depart_city_1').val();
							depart_airport_2 = $('#'+rowid+'_depart_airport_1').val();
							depart_datetime_2 = $('#'+rowid+'_depart_datetime_1').val();
							depart_city_name_2 = $('#'+rowid+'_depart_city_name_1').val();		
						
							board_time_3 = $('#'+rowid+'_start_time_2').val();
							board_city_3 = $('#'+rowid+'_depart_city_1').val();
							board_city_name_3 = $('#'+rowid+'_depart_city_name_1').val();		
							board_airport_3 = $('#'+rowid+'_depart_airport_1').val();
							board_datetime_3 = $('#'+rowid+'_depart_datetime_1').val();
							duration_3 = $('#'+rowid+'_durations_2').val();
							depart_time_3 = $('#'+rowid+'_depart_time_2').val();
							depart_city_3 = $('#'+rowid+'_depart_city_2').val();
							depart_airport_3 = $('#'+rowid+'_depart_airport_2').val();
							depart_datetime_3 = $('#'+rowid+'_depart_datetime_2').val();
							depart_city_name_3 = $('#'+rowid+'_depart_city_name_2').val();	
						
							board_time_4 = $('#'+rowid+'_start_time_3').val();
							board_city_4 = $('#'+rowid+'_depart_city_2').val();
							board_city_name_4 = $('#'+rowid+'_depart_city_name_2').val();		
							board_airport_4 = $('#'+rowid+'_depart_airport_2').val();
							board_datetime_4 = $('#'+rowid+'_depart_datetime_2').val();
							duration_4 = $('#'+rowid+'_durations_3').val();
							depart_time_4 = $('#'+rowid+'_depart_time_3').val();
							depart_city_4 = $('#'+rowid+'_depart_city_3').val();
							depart_airport_4 = $('#'+rowid+'_depart_airport_3').val();
							depart_datetime_4 = $('#'+rowid+'_depart_datetime_3').val();
							depart_city_name_4 = $('#'+rowid+'_depart_city_name_3').val();
						

						button_html = `<button type="button" class="btn btn-dark" data-dismiss="modal" onclick="viewFlightDetailsPage('`+adult_count+`','`+child_count+`','`+stopages_count+`','`+stopages_counts+`','`+origin_1+`','`+destination_1+`','`+flight_name_1+`','`+flight_1+`','`+flight_type_1+`','`+board_time_1+`','`+board_city_1+`','`+board_city_name_1+`','`+board_airport_1+`','`+board_datetime_1+`','`+duration_1+`','`+depart_time_1+`','`+depart_city_1+`','`+depart_airport_1+`','`+depart_datetime_1+`','`+depart_city_name_1+`', '`+board_time_2+`','`+board_city_2+`','`+board_city_name_2+`','`+board_airport_2+`','`+board_datetime_2+`','`+duration_2+`','`+depart_time_2+`','`+depart_city_2+`','`+depart_airport_2+`','`+depart_datetime_2+`','`+depart_city_name_2+`','`+board_time_3+`','`+board_city_3+`','`+board_city_name_3+`', '`+board_airport_3+`','`+board_datetime_3+`','`+duration_3+`', '`+depart_time_3+`','`+depart_city_3+`','`+depart_airport_3+`','`+depart_datetime_3+`','`+depart_city_name_3+`', '`+board_time_4+`','`+board_city_4+`', '`+board_city_name_4+`', '`+board_airport_4+`','`+board_datetime_4+`','`+duration_4+`','`+depart_time_4+`','`+depart_city_4+`','`+depart_airport_4+`','`+depart_datetime_4+`','`+depart_city_name_4+`','`+baggage_1+`','`+cabin_baggage_1+`','`+flight_img_1+`',
'`+is_refundable_1+`','`+is_round+`','','','','','','','','','`+BaseFare+`','`+tax+`','`+sum_of_fare+`','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','')" >`+html+`</button>`;
					$('#continue_button_id').html(button_html);
					}
					
					
				});

				function viewFlightDetailsPage(adult_count,child_count,stopages_count,stopages_counts,origin_1,destination_1,flight_name_1,flight_1,flight_type_1,board_time_1,board_city_1,board_city_name_1,board_airport_1,board_datetime_1,duration_1,depart_time_1,depart_city_1,depart_airport_1,depart_datetime_1,depart_city_name_1,board_time_2,board_city_2,board_city_name_2,board_airport_2,board_datetime_2,duration_2,depart_time_2,depart_city_2,depart_airport_2,depart_datetime_2,depart_city_name_2,board_time_3,board_city_3,board_city_name_3,board_airport_3,board_datetime_3,duration_3,depart_time_3,depart_city_3,depart_airport_3,depart_datetime_3,depart_city_name_3,board_time_4,board_city_4,board_city_name_4,board_airport_4,board_datetime_4,duration_4,depart_time_4,depart_city_4,depart_airport_4,depart_datetime_4,depart_city_name_4,baggage_1,cabin_baggage_1,flight_img_1,is_refundable_1,is_round,stopages_count_2,stopages_counts_2,origin_2,destination_2,flight_name_2,flight_2,flight_type_2,flight_img_2,BaseFare,tax,sum_of_fare, board_time_6,board_city_6,board_city_name_6,board_airport_6,board_datetime_6,duration_6,depart_time_6,depart_city_6,depart_airport_6,depart_datetime_6,board_time_1_2,board_city_1_2,board_city_name_1_2,board_airport_1_2,board_datetime_1_2,duration_1_2,depart_time_1_2,depart_city_1_2,depart_airport_1_2,depart_datetime_1_2,depart_city_name_1_2, board_time_2_2,board_city_2_2,board_city_name_2_2,board_airport_2_2,board_datetime_2_2,duration_2_2,depart_time_2_2,depart_city_2_2,depart_airport_2_2,depart_datetime_2_2,depart_city_name_2_2,board_time_3_2,board_city_3_2,board_city_name_3_2, board_airport_3_2,board_datetime_3_2,duration_3_2, depart_time_3_2,depart_city_3_2,depart_airport_3_2,depart_datetime_3_2,depart_city_name_3_2, board_time_4_2,board_city_4_2, board_city_name_4_2, board_airport_4_2,board_datetime_4_2,duration_4_2,depart_time_4_2,depart_city_4_2,depart_airport_4_2,depart_datetime_4_2,depart_city_name_4_2)
				{
					// alert(origin_1);
					var params = { 
						adult_count:adult_count, child_count:child_count, stopages_count:stopages_count, stopages_counts:stopages_counts, origin_1:origin_1, destination_1:destination_1, flight_name_1:flight_name_1, flight_1:flight_1, flight_type_1:flight_type_1, board_time_1:board_time_1, board_city_1:board_city_1, board_city_name_1:board_city_name_1, board_airport_1:board_airport_1, board_datetime_1:board_datetime_1, duration_1:duration_1, depart_time_1:depart_time_1, depart_city_1:depart_city_1, depart_airport_1:depart_airport_1, depart_datetime_1:depart_datetime_1, depart_city_name_1:depart_city_name_1, board_time_2:board_time_2, board_city_2:board_city_2, board_city_name_2:board_city_name_2, board_airport_2:board_airport_2, board_datetime_2:board_datetime_2, duration_2:duration_2, depart_time_2:depart_time_2, depart_city_2:depart_city_2, depart_airport_2:depart_airport_2, depart_datetime_2:depart_datetime_2, depart_city_name_2:depart_city_name_2, board_time_3:board_time_3, board_city_3:board_city_3, board_city_name_3:board_city_name_3, board_airport_3:board_airport_3, board_datetime_3:board_datetime_3, duration_3:duration_3, depart_time_3:depart_time_3, depart_city_3:depart_city_3, depart_airport_3:depart_airport_3, depart_datetime_3:depart_datetime_3, depart_city_name_3:depart_city_name_3, board_time_4:board_time_4, board_city_4:board_city_4, board_city_name_4:board_city_name_4, board_airport_4:board_airport_4, board_datetime_4:board_datetime_4, duration_4:duration_4, depart_time_4:depart_time_4, depart_city_4:depart_city_4, depart_airport_4:depart_airport_4, depart_datetime_4:depart_datetime_4, depart_city_name_4:depart_city_name_4, baggage_1:baggage_1, cabin_baggage_1:cabin_baggage_1, flight_img_1:flight_img_1, is_refundable_1:is_refundable_1, is_round:is_round, stopages_count_2:stopages_count_2, stopages_counts_2:stopages_counts_2, origin_2:origin_2, destination_2:destination_2, flight_name_2:flight_name_2, flight_2:flight_2, flight_type_2:flight_type_2, flight_img_2:flight_img_2, BaseFare:BaseFare, tax:tax, 
						sum_of_fare:sum_of_fare, board_time_6: board_time_6,board_city_6: board_city_6,board_city_name_6: board_city_name_6,board_airport_6: board_airport_6,board_datetime_6: board_datetime_6,duration_6: duration_6,depart_time_6: depart_time_6,depart_city_6: depart_city_6,depart_airport_6: depart_airport_6,depart_datetime_6, board_time_1_2:board_time_1_2, board_city_1_2:board_city_1_2, board_city_name_1_2:board_city_name_1_2, board_airport_1_2:board_airport_1_2, board_datetime_1_2:board_datetime_1_2, duration_1_2:duration_1_2, depart_time_1_2:depart_time_1_2, depart_city_1_2:depart_city_1_2, depart_airport_1_2:depart_airport_1_2, depart_datetime_1_2:depart_datetime_1_2, depart_city_name_1_2:depart_city_name_1_2,  board_time_2_2:board_time_2_2, board_city_2_2:board_city_2_2, board_city_name_2_2:board_city_name_2_2, board_airport_2_2:board_airport_2_2, board_datetime_2_2:board_datetime_2_2, duration_2_2:duration_2_2, depart_time_2_2:depart_time_2_2, depart_city_2_2:depart_city_2_2, depart_airport_2_2:depart_airport_2_2, depart_datetime_2_2:depart_datetime_2_2, depart_city_name_2_2:depart_city_name_2_2, board_time_3_2:board_time_3_2, board_city_3_2:board_city_3_2, board_city_name_3_2:board_city_name_3_2,  board_airport_3_2:board_airport_3_2, board_datetime_3_2:board_datetime_3_2, duration_3_2:duration_3_2,  depart_time_3_2:depart_time_3_2, depart_city_3_2:depart_city_3_2, depart_airport_3_2:depart_airport_3_2, depart_datetime_3_2:depart_datetime_3_2, depart_city_name_3_2:depart_city_name_3_2,  board_time_4_2:board_time_4_2, board_city_4_2:board_city_4_2,  board_city_name_4_2:board_city_name_4_2,  board_airport_4_2:board_airport_4_2, board_datetime_4_2:board_datetime_4_2, duration_4_2:duration_4_2, depart_time_4_2:depart_time_4_2, depart_city_4_2:depart_city_4_2, depart_airport_4_2:depart_airport_4_2, depart_datetime_4_2:depart_datetime_4_2, depart_city_name_4_2:depart_city_name_4_2
					}
					$('#button_div').hide();
					$.ajax({
						url: "<?php echo base_url('flight-travellers-details');?>",
						type: 'POST',
						contentType: "application/json",
						data: JSON.stringify(params),
						success: function(res) {
							$('#kt-search-section').html(res); 
							
						}
					});
				}
					
    </script>
</body>
</html>