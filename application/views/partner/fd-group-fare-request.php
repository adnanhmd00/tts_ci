<!DOCTYPE html>
    <html lang="en">
    <!-- begin::Head -->
    <head>
    	<?php include('head.php');?>
        <link href="<?= base_url('resource/agroxa/plugins/datatables/dataTables.bootstrap4.min.css');?>" rel="stylesheet" type="text/css" />
        <link href="<?= base_url('resource/agroxa/plugins/datatables/buttons.bootstrap4.min.css');?>" rel="stylesheet" type="text/css" />
        <!-- Responsive datatable examples -->
        <link href="<?= base_url('resource/agroxa/plugins/datatables/responsive.bootstrap4.min.css');?>" rel="stylesheet" type="text/css" />
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
                						<a href="http://partner.thetravelsquare.in/" class="btn kt-subheader__btn-daterange" id="kt_dashboard_daterangepicker" data-toggle="kt-tooltip" title="" data-placement="left" data-original-title="Bookings Calender">
                							<span class="kt-subheader__btn-daterange-title" id="kt_dashboard_daterangepicker_title">Date : </span>&nbsp;
                							<span class="kt-subheader__btn-daterange-date" id="kt_dashboard_daterangepicker_date">Mar 17</span>
                							<i class="flaticon2-calendar-1"></i>
                						</a>
                						<div class="dropdown dropdown-inline" data-toggle-="kt-tooltip" title="Publish Deal" data-placement="left">
                							<a href="http://partner.thetravelsquare.in/" class="btn btn-icon" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
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
                        <div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">
                                <!--Begin::Dashboard 1-->
                                <!--Begin::Row-->
                                <div class="row">
                                    <div class="col-lg-12 col-xl-12 ">
                                        <div class="kt-portlet">
                                            <div class="kt-portlet__head">
                                                <div class="kt-portlet__head-label">
                                                    <h3 class="kt-portlet__head-title">
                                                        Group Fare Request Form
                                                    </h3>
                                                </div>
                                            </div>
                                            <!-- @if (Session::get('success'))
                                                <script>
                                                    setTimeout(function() {
                                                        $('.alert').fadeOut(1000);
                                                        // $('.feedback').hide(1000); // you can also try this
                                                    }, 10000);
                                                </script>
                                                <div class="alert alert-success">
                                                    {{ session::get('success') }}
                                                </div>
                                            @endif -->
                                            <!--begin::Form-->
                                            <?php echo form_open_multipart('add-group-fare-request', 'class="kt-form"');?>
                                                <div class="kt-portlet__body">
                                                <script>
                                                    setTimeout(function() {
                                                        $('.alert').fadeOut(1000);
                                                        $('.alert').hide(1000); // you can also try this
                                                    }, 10000);
                                                </script>
                                            <p class="alert"><?php echo $this->session->flashdata('item'); ?></p>
                                                    <div class="kt-section kt-section--first">
                                                        <div class="form-group">
                                                            <label>Flight Type</label>
                                                            <div></div>
                                                            <select name="flight_type" class="custom-select form-control">
                                                                <option value="">Select</option>
                                                                <option value="One Way">One Way</option>
                                                                <option value="Return Type">Return Type</option>
                                                            </select>
                                                        </div>


                                                        <div class="form-group row">
                                                            <label for="example-number-input" class="col-2 col-form-label">Departure Airport</label>
                                                            <div class="col-6">
                                                                <input class="form-control" name="departure" type="text" value="" id="example-number-input" />
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label for="example-number-input" class="col-2 col-form-label">Arrival Airport</label>
                                                            <div class="col-6">
                                                                <input class="form-control" name="arrival" type="text" value="" id="example-number-input" />
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label for="example-datetime-local-input" class="col-2 col-form-label">Departure Date</label>
                                                            <div class="col-6">
                                                                <input class="form-control" name="departure_date" type="date" value="" id="example-datetime-local-input" />
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label for="example-datetime-local-input" class="col-2 col-form-label">Arrival Date</label>
                                                            <div class="col-6">
                                                                <input class="form-control" name="arrival_date" type="date" value="" id="example-datetime-local-input" />
                                                            </div>
                                                        </div><div class="form-group row">
                                                            <label for="example-datetime-local-input" class="col-2 col-form-label">Departure Time</label>
                                                            <div class="col-6">
                                                                <input class="form-control" name="dep_time" type="time" value="" id="example-datetime-local-input" />
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label for="example-datetime-local-input" class="col-2 col-form-label">Arrival Time</label>
                                                            <div class="col-6">
                                                                <input class="form-control" name="arr_time" type="time" value="" id="example-datetime-local-input" />
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label for="example-number-input" class="col-2 col-form-label">Number of Adults</label>
                                                            <div class="col-6">
                                                                <input class="form-control" name="adults" type="number" value="" id="example-number-input" />
                                                            </div>
                                                        </div>

                                                        <div class="form-group row">
                                                            <label for="example-number-input" class="col-2 col-form-label">Number of Child</label>
                                                            <div class="col-6">
                                                                <input class="form-control" name="child" type="number" value="" id="example-number-input" />
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="kt-portlet__foot">
                                                    <div class="kt-form__actions">
                                                        <button type="submit" class="btn btn-dark">Submit</button>
                                                    </div>
                                                </div>
                                            </form>
                                            <!--end::Form-->
                                        </div>
                                        <!--end::Portlet-->
                                    </div>
                                </div>
                                <!--End::Row-->
                                <!--Begin::Row-->

                                <!--End::Row-->
                                <!--End::Dashboard 1-->
                            </div>

							<div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">
							<!--begin: Datatable -->
							<div id="sub_datatable_ajax_source"
								class="table-responsive">

							<table class="table table-bordered" style="border-collapse: collapse; border-spacing: 10; width: 100%; background-color:white;">

								<thead>
									<tr>
										<th>RQ FARE ID</th>
										<th>FROM</th>
										<th>TO</th>
										<th>FLIGHT TYPE</th>
										<th>DEP DATE</th>
										<th>ARR DATE</th>
										<th>DEP TIME</th>
										<th>ARR TIME</th>
										<th>ADULTS</th>
										<th>CHILD</th>
										<th>ADULT FARE</th>
										<th>CHILD FARE</th>
										<th>TOTAL FARE</th>
										<th>BOOK NOW</th>
									</tr>
								</thead>
								<tbody>
								<?php foreach ($data as $group_fare){ ?>
									<tr>
										<td><?php echo $group_fare->gf_id ?></td>
										<td><?php echo $group_fare->departure ?></td>
										<td><?php echo $group_fare->arrival ?></td>
										<td><?php echo $group_fare->flight_type ?></td>
										<td><?php echo $group_fare->departure_date ?></td>
										<td><?php echo $group_fare->arrival_date ?></td>
										<td><?php echo $group_fare->dep_time ?></td>
										<td><?php echo $group_fare->arr_time ?></td>
										<td><?php echo $group_fare->adults ?></td>
										<td><?php echo $group_fare->child ?></td>

										<?php if($group_fare->fare == ''){ ?>
											<td><div class="text-dark text-center">Please Wait For Our Response</div></td>
										<?php }else{ ?>
											<td><?php echo $group_fare->fare ?></td>
										<?php } ?>

										<?php if($group_fare->fare == ''){ ?>
											<td><div class="text-dark text-center">Please Wait For Our Response</div></td>
										<?php }else{ ?>
											<td><?php echo $group_fare->fare ?></td>
										<?php } ?>

										<?php if($group_fare->fare == ''){ ?>
											<td><div class="text-dark text-center">Please Wait For Our Response</div></td>
										<?php }else{ ?>
											<td><?php echo $group_fare->fare * ($group_fare->adults + $group_fare->child) ?></td>
										<?php } ?>
											<td><button class="btn btn-primary">Book Now</button></td>
									</tr>
									<?php } ?>
								</tbody>
							</table>

							</div>
        <!--end: Datatable -->
    </div>
						<?php include('jquery.php');?>
        <script src="<?= base_url('resource/agroxa/plugins/datatables/dataTables.responsive.min.js');?>"></script>
        <script src="<?= base_url('resource/agroxa/plugins/datatables/responsive.bootstrap4.min.js');?>"></script>

        <!-- Datatable init js -->
        <script src="<?= base_url('resource/agroxa/assets/pages/datatables.init.js');?>"></script>