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
    </head>
    <!-- end::Head -->
    <!-- begin::Body -->
    <body class="kt-quick-panel--right kt-demo-panel--right kt-offcanvas-panel--right kt-header--fixed kt-header-mobile--fixed kt-subheader--enabled kt-subheader--fixed kt-subheader--solid kt-aside--enabled kt-aside--fixed" style="">
        <!-- begin:: Page -->
        <!-- begin:: Header Mobile -->
        <div id="kt_header_mobile" class="kt-header-mobile  kt-header-mobile--fixed ">
            <div class="kt-header-mobile__logo">
                <a href="http://partner.thetravelsquare.in/">
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
						<!-- begin:: Subheader -->
						<div class="kt-subheader   kt-grid__item" id="kt_subheader">
							<div class="kt-container  kt-container--fluid ">
								<div class="kt-subheader__main">
									<h3 class="kt-subheader__title">
										Airline Support Center | The Travel Square                            
									</h3>
									
								</div>
							</div>
						</div>
						<!-- end:: Subheader -->
						<!-- begin:: Content -->
						
						<div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">
							
						<div class="alert alert-light alert-elevate" role="alert">
								<div class="alert-text">
                                    We are <b>Partnered With More than 95+ Global Airlines</b> Which Give You Access to Customer Care Services, and 24/7 Call Center Support
									from these Airlines. Connect With Airlines Directly for Best Resolutions. For More and Urgent Support Connect The Travel Square 
									<b>Partner Help Center</b>.
                                </div>
							</div>
							
							<div class="kt-portlet kt-portlet--mobile">
								<div class="kt-portlet__head kt-portlet__head--lg">
									<div class="kt-portlet__head-label">
										
										<h3 class="kt-portlet__head-title">
											
											Our Partner Airlines	(International & Domestic) 
																					
										</h3>
									</div>
									
								</div> 
								
								<div class="kt-portlet__body kt-portlet__body">
									<!--begin: Datatable -->
									<div id="sub_datatable_ajax_source" class="kt-datatable kt-datatable--default kt-datatable--brand kt-datatable--loaded" style="">
										
																														                                            <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 10; width: 90%; background-color:white;">
                                                <thead>
                                                    <tr>
														<th><center>AIRLINE LOGO</center></th>
														<th><center>AIRLINE NAME</center></th>
														<th><center>ORIGIN COUNTRY</center></th>
														<th><center>AIRLINE CUSTOMER CARE</center></th>
														<th><center>MAIL AIRLINE</center></th>
                                                        <th><center>WEBSITE</center></th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                	
													<tr>
														<td><center><img src="http://support.thetravelsquare.in/img/airlines/aer-lingus-logo-the-travel-square.svg" height="50" width="100"></center></td>
														<td><center>Aer Lingus</center></td>
                                                        <td><center>Ireland</center></td>
                                                        <td><center><a href="tel:0035317617835" rel="nofollow "target="_blank"><font color="black">00 353 1 761 7835</font></a></center></td>
                                                        <td><center><a href="mailto:askus@aerlingus.com" rel="nofollow"><font color="black">askus@aerlingus.com</font></a></center></td>
                                                        <td><center><a href="https://www.aerlingus.com/" rel="nofollow"><font color="black">www.aerlingus.com</font></a></center></td>
                                                    </tr>
													
													<tr>
														<td><center><img src="http://support.thetravelsquare.in/img/airlines/air-arabia-logo-the-travel-square.svg" height="50" width="100"></center></td>
														<td><center>Air Arabia</center></td>
                                                        <td><center>United Arab Emirates (UAE)</center></td>
														<td><center><a href="tel:02271004777" rel="nofollow "target="_blank"><font color="black">022 7100 4777</font></a></center></td>
                                                        <td><center><a href="mailto:contactus@airarabia.com" rel="nofollow"><font color="black">contactus@airarabia.com</font></a></center></td>
                                                        <td><center><a href="https://www.airarabia.com/" rel="nofollow"><font color="black">www.airarabia.com</font></a></center></td>
                                                    </tr>
													
													<tr>
														<td><center><img src="http://support.thetravelsquare.in/img/airlines/air-astana-logo-the-travel-square.svg" height="50" width="100"></center></td>
														<td><center>Air Astana</center></td>
                                                        <td><center>Kazakhstan</center></td>
														<td><center><a href="tel:9910197832" rel="nofollow "target="_blank"><font color="black">9910197832</font></a></center></td>
                                                        <td><center><a href="mailto:del.reservations@airastana.com" rel="nofollow"><font color="black">del.reservations@airastana.com</font></a></center></td>
                                                        <td><center><a href="www.airastana.com" rel="nofollow"><font color="black">www.airastana.com</font></a></center></td>
                                                    </tr>
													
													<tr>
														<td><center><img src="http://support.thetravelsquare.in/img/airlines/air-canada-logo-the-travel-square.svg" height="50" width="100"></center></td>
														<td><center>Air Canada</center></td>
                                                        <td><center>Canada</center></td>
														<td><center><a href="tel:0008000401885" rel="nofollow "target="_blank"><font color="black">000 8000401 885</font></a></center></td>
                                                        <td><center><a href="mailto:askus@aerlingus.com" rel="nofollow"><font color="black">M</font></a></center></td>
                                                        <td><center><a href="www.aircanada.com" rel="nofollow"><font color="black">www.aircanada.com</font></a></center></td>
                                                    </tr>
													
													<tr>
														<td><center><img src="http://support.thetravelsquare.in/img/airlines/air-india-express-logo-the-travel-square.svg" height="50" width="100"></center></td>
														<td><center>Air India Express</center></td>
                                                        <td><center>India</center></td>
														<td><center><a href="tel:01242641407" rel="nofollow "target="_blank"><font color="black">01242641407</font></a></center></td>
                                                        <td><center><a href="mailto:customersupport@airindiaexpress.in" rel="nofollow"><font color="black">customersupport@airindiaexpress.in</font></a></center></td>
                                                        <td><center><a href="www.airindiaexpress.in" rel="nofollow"><font color="black">www.airindiaexpress.in</font></a></center></td>
                                                    </tr>
													
													<tr>
														<td><center><img src="http://support.thetravelsquare.in/img/airlines/air-india-logo-the-travel-square.svg" height="50" width="100"></center></td>
														<td><center>Air India</center></td>
                                                        <td><center>India</center></td>
														<td><center><a href="tel:0035317617835" rel="nofollow "target="_blank"><font color="black">P</font></a></center></td>
                                                        <td><center><a href="mailto:askus@aerlingus.com" rel="nofollow"><font color="black">M</font></a></center></td>
                                                        <td><center><a href="mailto:askus@aerlingus.com" rel="nofollow"><font color="black">W</font></a></center></td>
                                                    </tr>
													
													<tr>
														<td><center><img src="http://support.thetravelsquare.in/img/airlines/alitalia-airlines-logo-the-travel-square.svg" height="50" width="100"></center></td>
														<td><center>Al Italia</center></td>
                                                        <td><center>Italy</center></td>
														<td><center><a href="tel:0035317617835" rel="nofollow "target="_blank"><font color="black">P</font></a></center></td>
                                                        <td><center><a href="mailto:askus@aerlingus.com" rel="nofollow"><font color="black">M</font></a></center></td>
                                                        <td><center><a href="mailto:askus@aerlingus.com" rel="nofollow"><font color="black">W</font></a></center></td>
                                                    </tr>
													
													<tr>
														<td><center><img src="http://support.thetravelsquare.in/img/airlines/alaska-airlines-logo-the-travel-square.svg" height="50" width="100"></center></td>
														<td><center>Alaska Airlines</center></td>
                                                        <td><center>United States of America (USA)</center></td>
														<td><center><a href="tel:0035317617835" rel="nofollow "target="_blank"><font color="black">P</font></a></center></td>
                                                        <td><center><a href="mailto:askus@aerlingus.com" rel="nofollow"><font color="black">M</font></a></center></td>
                                                        <td><center><a href="mailto:askus@aerlingus.com" rel="nofollow"><font color="black">W</font></a></center></td>
                                                    </tr>
													
													<tr>
														<td><center><img src="http://support.thetravelsquare.in/img/airlines/avianca-el-salvador-logo-the-travel-square.svg" height="50" width="100"></center></td>
														<td><center>Avianca</center></td>
                                                        <td><center>Colombia</center></td>
														<td><center><a href="tel:0035317617835" rel="nofollow "target="_blank"><font color="black">P</font></a></center></td>
                                                        <td><center><a href="mailto:askus@aerlingus.com" rel="nofollow"><font color="black">M</font></a></center></td>
                                                        <td><center><a href="mailto:askus@aerlingus.com" rel="nofollow"><font color="black">W</font></a></center></td>
                                                    </tr>
													
													<tr>
														<td><center><img src="http://support.thetravelsquare.in/img/airlines/airlink-logo-the-travel-square.svg" height="50" width="100"></center></td>
														<td><center>Airlink</center></td>
                                                        <td><center>South Africa</center></td>
														<td><center><a href="tel:0035317617835" rel="nofollow "target="_blank"><font color="black">P</font></a></center></td>
                                                        <td><center><a href="mailto:askus@aerlingus.com" rel="nofollow"><font color="black">M</font></a></center></td>
                                                        <td><center><a href="mailto:askus@aerlingus.com" rel="nofollow"><font color="black">W</font></a></center></td>
                                                    </tr>
													
													<tr>
														<td><center><img src="http://support.thetravelsquare.in/img/airlines/air-mauritius-logo-the-travel-square.svg" height="50" width="100"></center></td>
														<td><center>Air Mauritius</center></td>
                                                        <td><center>Mauritius</center></td>
														<td><center><a href="tel:0035317617835" rel="nofollow "target="_blank"><font color="black">P</font></a></center></td>
                                                        <td><center><a href="mailto:askus@aerlingus.com" rel="nofollow"><font color="black">M</font></a></center></td>
                                                        <td><center><a href="mailto:askus@aerlingus.com" rel="nofollow"><font color="black">W</font></a></center></td>
                                                    </tr>
													
													<tr>
														<td><center><img src="http://support.thetravelsquare.in/img/airlines/american-airlines-logo-the-travel-square.svg" height="50" width="100"></center></td>
														<td><center>American Airlines</center></td>
                                                        <td><center>United States of America (USA)</center></td>
														<td><center><a href="tel:0035317617835" rel="nofollow "target="_blank"><font color="black">P</font></a></center></td>
                                                        <td><center><a href="mailto:askus@aerlingus.com" rel="nofollow"><font color="black">M</font></a></center></td>
                                                        <td><center><a href="mailto:askus@aerlingus.com" rel="nofollow"><font color="black">W</font></a></center></td>
                                                    </tr>
													
													<tr>
														<td><center><img src="http://support.thetravelsquare.in/img/airlines/atlas-air-logo-the-travel-square.svg" height="50" width="100"></center></td>
														<td><center>Atlas Air</center></td>
                                                        <td><center>United States of America (USA)</center></td>
														<td><center><a href="tel:0035317617835" rel="nofollow "target="_blank"><font color="black">P</font></a></center></td>
                                                        <td><center><a href="mailto:askus@aerlingus.com" rel="nofollow"><font color="black">M</font></a></center></td>
                                                        <td><center><a href="mailto:askus@aerlingus.com" rel="nofollow"><font color="black">W</font></a></center></td>
                                                    </tr>
													
													<tr>
														<td><center><img src="http://support.thetravelsquare.in/img/airlines/ana-logo-the-travel-square.svg" height="50" width="100"></center></td>
														<td><center>All Nippon Airways (ANA)</center></td>
                                                        <td><center>Japan</center></td>
														<td><center><a href="tel:0035317617835" rel="nofollow "target="_blank"><font color="black">P</font></a></center></td>
                                                        <td><center><a href="mailto:askus@aerlingus.com" rel="nofollow"><font color="black">M</font></a></center></td>
                                                        <td><center><a href="mailto:askus@aerlingus.com" rel="nofollow"><font color="black">W</font></a></center></td>
                                                    </tr>
													
													<tr>
														<td><center><img src="http://support.thetravelsquare.in/img/airlines/asiana-airlines-logo-the-travel-square.svg" height="50" width="100"></center></td>
														<td><center>Asiana Airlines</center></td>
                                                        <td><center>South Korea</center></td>
														<td><center><a href="tel:0035317617835" rel="nofollow "target="_blank"><font color="black">P</font></a></center></td>
                                                        <td><center><a href="mailto:askus@aerlingus.com" rel="nofollow"><font color="black">M</font></a></center></td>
                                                        <td><center><a href="mailto:askus@aerlingus.com" rel="nofollow"><font color="black">W</font></a></center></td>
                                                    </tr>
													
													<tr>
														<td><center><img src="http://support.thetravelsquare.in/img/airlines/azerbaijan-airlines-logo-the-travel-square.svg" height="50" width="100"></center></td>
														<td><center>Azerbaijan Airlines</center></td>
                                                        <td><center>Azerbaijan</center></td>
														<td><center><a href="tel:0035317617835" rel="nofollow "target="_blank"><font color="black">P</font></a></center></td>
                                                        <td><center><a href="mailto:askus@aerlingus.com" rel="nofollow"><font color="black">M</font></a></center></td>
                                                        <td><center><a href="mailto:askus@aerlingus.com" rel="nofollow"><font color="black">W</font></a></center></td>
                                                    </tr>
													
													<tr>
														<td><center><img src="http://support.thetravelsquare.in/img/airlines/air-asia-logo-the-travel-square.svg" height="50" width="100"></center></td>
														<td><center>Air Asia India</center></td>
                                                        <td><center>India</center></td>
														<td><center><a href="tel:0035317617835" rel="nofollow "target="_blank"><font color="black">P</font></a></center></td>
                                                        <td><center><a href="mailto:askus@aerlingus.com" rel="nofollow"><font color="black">M</font></a></center></td>
                                                        <td><center><a href="mailto:askus@aerlingus.com" rel="nofollow"><font color="black">W</font></a></center></td>
                                                    </tr>
													
													<tr>
														<td><center><img src="http://support.thetravelsquare.in/img/airlines/air-asia-x-logo-the-travel-square.svg" height="50" width="100"></center></td>
														<td><center>Air Asia X</center></td>
                                                        <td><center>Malaysia</center></td>
														<td><center><a href="tel:0035317617835" rel="nofollow "target="_blank"><font color="black">P</font></a></center></td>
                                                        <td><center><a href="mailto:askus@aerlingus.com" rel="nofollow"><font color="black">M</font></a></center></td>
                                                        <td><center><a href="mailto:askus@aerlingus.com" rel="nofollow"><font color="black">W</font></a></center></td>
                                                    </tr>
													
													<tr>
														<td><center><img src="http://support.thetravelsquare.in/img/airlines/austrian-airlines-logo-the-travel-square.svg" height="50" width="100"></center></td>
														<td><center>Austrian Airline</center></td>
                                                        <td><center>Austria</center></td>
														<td><center><a href="tel:0035317617835" rel="nofollow "target="_blank"><font color="black">P</font></a></center></td>
                                                        <td><center><a href="mailto:askus@aerlingus.com" rel="nofollow"><font color="black">M</font></a></center></td>
                                                        <td><center><a href="mailto:askus@aerlingus.com" rel="nofollow"><font color="black">W</font></a></center></td>
                                                    </tr>
													
													<tr>
														<td><center><img src="http://support.thetravelsquare.in/img/airlines/aeroflot-airlines-logo-the-travel-square.svg" height="50" width="100"></center></td>
														<td><center>Aeroflot</center></td>
                                                        <td><center>Russia</center></td>
														<td><center><a href="tel:0035317617835" rel="nofollow "target="_blank"><font color="black">P</font></a></center></td>
                                                        <td><center><a href="mailto:askus@aerlingus.com" rel="nofollow"><font color="black">M</font></a></center></td>
                                                        <td><center><a href="mailto:askus@aerlingus.com" rel="nofollow"><font color="black">W</font></a></center></td>
                                                    </tr>
													
													<tr>
														<td><center><img src="http://support.thetravelsquare.in/img/airlines/air-new-zealand-logo-the-travel-square.svg" height="50" width="100"></center></td>
														<td><center>Air New Zealand</center></td>
                                                        <td><center>New Zealand</center></td>
														<td><center><a href="tel:0035317617835" rel="nofollow "target="_blank"><font color="black">P</font></a></center></td>
                                                        <td><center><a href="mailto:askus@aerlingus.com" rel="nofollow"><font color="black">M</font></a></center></td>
                                                        <td><center><a href="mailto:askus@aerlingus.com" rel="nofollow"><font color="black">W</font></a></center></td>
                                                    </tr>
													
													<tr>
														<td><center><img src="http://support.thetravelsquare.in/img/airlines/air-serbia-logo-the-travel-square.svg" height="50" width="100"></center></td>
														<td><center>Air Serbia</center></td>
                                                        <td><center>Serbia</center></td>
														<td><center><a href="tel:0035317617835" rel="nofollow "target="_blank"><font color="black">P</font></a></center></td>
                                                        <td><center><a href="mailto:askus@aerlingus.com" rel="nofollow"><font color="black">M</font></a></center></td>
                                                        <td><center><a href="mailto:askus@aerlingus.com" rel="nofollow"><font color="black">W</font></a></center></td>
                                                    </tr>
													
													<tr>
														<td><center><img src="http://support.thetravelsquare.in/img/airlines/air-seychelles-logo-the-travel-square.svg" height="50" width="100"></center></td>
														<td><center>Air Seychelles</center></td>
                                                        <td><center>Seychelles</center></td>
														<td><center><a href="tel:0035317617835" rel="nofollow "target="_blank"><font color="black">P</font></a></center></td>
                                                        <td><center><a href="mailto:askus@aerlingus.com" rel="nofollow"><font color="black">M</font></a></center></td>
                                                        <td><center><a href="mailto:askus@aerlingus.com" rel="nofollow"><font color="black">W</font></a></center></td>
                                                    </tr>
													
													<tr>
														<td><center><img src="http://support.thetravelsquare.in/img/airlines/air-france-logo-the-travel-square.svg" height="50" width="100"></center></td>
														<td><center>Air France</center></td>
                                                        <td><center>France</center></td>
														<td><center><a href="tel:0035317617835" rel="nofollow "target="_blank"><font color="black">P</font></a></center></td>
                                                        <td><center><a href="mailto:askus@aerlingus.com" rel="nofollow"><font color="black">M</font></a></center></td>
                                                        <td><center><a href="mailto:askus@aerlingus.com" rel="nofollow"><font color="black">W</font></a></center></td>
                                                    </tr>
													
													<tr>
														<td><center><img src="http://support.thetravelsquare.in/img/airlines/biman-airlines-logo-the-travel-square.svg" height="50" width="100"></center></td>
														<td><center>Biman Airlines</center></td>
                                                        <td><center>Bangladesh</center></td>
														<td><center><a href="tel:0035317617835" rel="nofollow "target="_blank"><font color="black">P</font></a></center></td>
                                                        <td><center><a href="mailto:askus@aerlingus.com" rel="nofollow"><font color="black">M</font></a></center></td>
                                                        <td><center><a href="mailto:askus@aerlingus.com" rel="nofollow"><font color="black">W</font></a></center></td>
                                                    </tr>
													
													<tr>
														<td><center><img src="http://support.thetravelsquare.in/img/airlines/brussels-airlines-logo-the-travel-square.svg" height="50" width="100"></center></td>
														<td><center>Brussels Air</center></td>
                                                        <td><center>Belgium</center></td>
														<td><center><a href="tel:0035317617835" rel="nofollow "target="_blank"><font color="black">P</font></a></center></td>
                                                        <td><center><a href="mailto:askus@aerlingus.com" rel="nofollow"><font color="black">M</font></a></center></td>
                                                        <td><center><a href="mailto:askus@aerlingus.com" rel="nofollow"><font color="black">W</font></a></center></td>
                                                    </tr>
													
													<tr>
														<td><center><img src="http://support.thetravelsquare.in/img/airlines/british-airways-logo-the-travel-square.svg" height="50" width="100"></center></td>
														<td><center>British Airways</center></td>
                                                        <td><center>England, United Kingdom (UK)</center></td>
														<td><center><a href="tel:0035317617835" rel="nofollow "target="_blank"><font color="black">P</font></a></center></td>
                                                        <td><center><a href="mailto:askus@aerlingus.com" rel="nofollow"><font color="black">M</font></a></center></td>
                                                        <td><center><a href="mailto:askus@aerlingus.com" rel="nofollow"><font color="black">W</font></a></center></td>
                                                    </tr>
													
													<tr>
														<td><center><img src="http://support.thetravelsquare.in/img/airlines/bangkok-airways-logo-the-travel-square.svg" height="50" width="100"></center></td>
														<td><center>Bangkok Airways</center></td>
                                                        <td><center>Thailand</center></td>
														<td><center><a href="tel:0035317617835" rel="nofollow "target="_blank"><font color="black">P</font></a></center></td>
                                                        <td><center><a href="mailto:askus@aerlingus.com" rel="nofollow"><font color="black">M</font></a></center></td>
                                                        <td><center><a href="mailto:askus@aerlingus.com" rel="nofollow"><font color="black">W</font></a></center></td>
                                                    </tr>
													
													<tr>
														<td><center><img src="http://support.thetravelsquare.in/img/airlines/cayman-airways-logo-the-travel-square.svg" height="50" width="100"></center></td>
														<td><center>Cayman Airways</center></td>
                                                        <td><center>Cayman Islands</center></td>
														<td><center><a href="tel:0035317617835" rel="nofollow "target="_blank"><font color="black">P</font></a></center></td>
                                                        <td><center><a href="mailto:askus@aerlingus.com" rel="nofollow"><font color="black">M</font></a></center></td>
                                                        <td><center><a href="mailto:askus@aerlingus.com" rel="nofollow"><font color="black">W</font></a></center></td>
                                                    </tr>
													
													<tr>
														<td><center><img src="http://support.thetravelsquare.in/img/airlines/china-eastern-airlines-logo-the-travel-square.svg" height="50" width="100"></center></td>
														<td><center>China Eastern</center></td>
                                                        <td><center>China</center></td>
														<td><center><a href="tel:0035317617835" rel="nofollow "target="_blank"><font color="black">P</font></a></center></td>
                                                        <td><center><a href="mailto:askus@aerlingus.com" rel="nofollow"><font color="black">M</font></a></center></td>
                                                        <td><center><a href="mailto:askus@aerlingus.com" rel="nofollow"><font color="black">W</font></a></center></td>
                                                    </tr>
													
													<tr>
														<td><center><img src="http://support.thetravelsquare.in/img/airlines/china-southern-airlines-logo-the-travel-square.svg" height="50" width="100"></center></td>
														<td><center>China Southern</center></td>
                                                        <td><center>China</center></td>
														<td><center><a href="tel:0035317617835" rel="nofollow "target="_blank"><font color="black">P</font></a></center></td>
                                                        <td><center><a href="mailto:askus@aerlingus.com" rel="nofollow"><font color="black">M</font></a></center></td>
                                                        <td><center><a href="mailto:askus@aerlingus.com" rel="nofollow"><font color="black">W</font></a></center></td>
                                                    </tr>
													
													<tr>
														<td><center><img src="http://support.thetravelsquare.in/img/airlines/copa-airlines-logo-the-travel-square.svg" height="50" width="100"></center></td>
														<td><center>Copa Air</center></td>
                                                        <td><center>Panama</center></td>
														<td><center><a href="tel:0035317617835" rel="nofollow "target="_blank"><font color="black">P</font></a></center></td>
                                                        <td><center><a href="mailto:askus@aerlingus.com" rel="nofollow"><font color="black">M</font></a></center></td>
                                                        <td><center><a href="mailto:askus@aerlingus.com" rel="nofollow"><font color="black">W</font></a></center></td>
                                                    </tr>
													
													<tr>
														<td><center><img src="http://support.thetravelsquare.in/img/airlines/cathay-pacific-logo-the-travel-square.svg" height="50" width="100"></center></td>
														<td><center>Cathay Pacific</center></td>
                                                        <td><center>Hong Kong</center></td>
														<td><center><a href="tel:0035317617835" rel="nofollow "target="_blank"><font color="black">P</font></a></center></td>
                                                        <td><center><a href="mailto:askus@aerlingus.com" rel="nofollow"><font color="black">M</font></a></center></td>
                                                        <td><center><a href="mailto:askus@aerlingus.com" rel="nofollow"><font color="black">W</font></a></center></td>
                                                    </tr>
													
													<tr>
														<td><center><img src="http://support.thetravelsquare.in/img/airlines/croatia-airlines-logo-the-travel-square.svg" height="50" width="100"></center></td>
														<td><center>Crotia Airlines</center></td>
                                                        <td><center>Crotia</center></td>
														<td><center><a href="tel:0035317617835" rel="nofollow "target="_blank"><font color="black">P</font></a></center></td>
                                                        <td><center><a href="mailto:askus@aerlingus.com" rel="nofollow"><font color="black">M</font></a></center></td>
                                                        <td><center><a href="mailto:askus@aerlingus.com" rel="nofollow"><font color="black">W</font></a></center></td>
                                                    </tr>
													
													<tr>
														<td><center><img src="http://support.thetravelsquare.in/img/airlines/delta-airlines-logo-the-travel-square.svg" height="50" width="100"></center></td>
														<td><center>Delta Airlines</center></td>
                                                        <td><center>United States of America (USA)</center></td>
														<td><center><a href="tel:0035317617835" rel="nofollow "target="_blank"><font color="black">P</font></a></center></td>
                                                        <td><center><a href="mailto:askus@aerlingus.com" rel="nofollow"><font color="black">M</font></a></center></td>
                                                        <td><center><a href="mailto:askus@aerlingus.com" rel="nofollow"><font color="black">W</font></a></center></td>
                                                    </tr>
													
													<tr>
														<td><center><img src="http://support.thetravelsquare.in/img/airlines/etihad-airways-logo-the-travel-square.svg" height="50" width="100"></center></td>
														<td><center>Etihad Airlines</center></td>
                                                        <td><center>United Arab Emirates (UAE)</center></td>
														<td><center><a href="tel:0035317617835" rel="nofollow "target="_blank"><font color="black">P</font></a></center></td>
                                                        <td><center><a href="mailto:askus@aerlingus.com" rel="nofollow"><font color="black">M</font></a></center></td>
                                                        <td><center><a href="mailto:askus@aerlingus.com" rel="nofollow"><font color="black">W</font></a></center></td>
                                                    </tr>
													
													<tr>
														<td><center><img src="http://support.thetravelsquare.in/img/airlines/envoy-air-logo-the-travel-square.svg" height="50" width="100"></center></td>
														<td><center>Envoy Air</center></td>
														<td><center>MQ</center></td>
                                                        <td><center>United States of America (USA)</center></td>
														<td><center><a href="tel:0035317617835" rel="nofollow "target="_blank"><font color="black">P</font></a></center></td>
                                                        <td><center><a href="mailto:askus@aerlingus.com" rel="nofollow"><font color="black">M</font></a></center></td>
                                                        <td><center><a href="mailto:askus@aerlingus.com" rel="nofollow"><font color="black">W</font></a></center></td>
                                                    </tr>
													
													<tr>
														<td><center><img src="http://support.thetravelsquare.in/img/airlines/emirates-airlines-logo-the-travel-square.svg" height="50" width="100"></center></td>
														<td><center>Emirates</center></td>
														<td><center>EK</center></td>
                                                        <td><center>A</center></td>
														<td><center><a href="tel:0035317617835" rel="nofollow "target="_blank"><font color="black">P</font></a></center></td>
                                                        <td><center><a href="mailto:askus@aerlingus.com" rel="nofollow"><font color="black">M</font></a></center></td>
                                                        <td><center><a href="mailto:askus@aerlingus.com" rel="nofollow"><font color="black">W</font></a></center></td>
                                                    </tr>
													
													<tr>
														<td><center><img src="http://support.thetravelsquare.in/img/airlines/ethiopian-air-logo-the-travel-square.svg" height="50" width="100"></center></td>
														<td><center>Ethopian Airlines</center></td>
														<td><center>ET</center></td>
                                                        <td><center>Ethiopia</center></td>
														<td><center><a href="tel:0035317617835" rel="nofollow "target="_blank"><font color="black">P</font></a></center></td>
                                                        <td><center><a href="mailto:askus@aerlingus.com" rel="nofollow"><font color="black">M</font></a></center></td>
                                                        <td><center><a href="mailto:askus@aerlingus.com" rel="nofollow"><font color="black">W</font></a></center></td>
                                                    </tr>
													
													<tr>
														<td><center><img src="http://support.thetravelsquare.in/img/airlines/egypt-air-logo-the-travel-square.svg" height="50" width="100"></center></td>
														<td><center>Egypt Air</center></td>
														<td><center>MS</center></td>
                                                        <td><center>Egypt</center></td>
														<td><center><a href="tel:0035317617835" rel="nofollow "target="_blank"><font color="black">P</font></a></center></td>
                                                        <td><center><a href="mailto:askus@aerlingus.com" rel="nofollow"><font color="black">M</font></a></center></td>
                                                        <td><center><a href="mailto:askus@aerlingus.com" rel="nofollow"><font color="black">W</font></a></center></td>
                                                    </tr>
													
													<tr>
														<td><center><img src="http://support.thetravelsquare.in/img/airlines/eva-air-logo-the-travel-square.svg" height="50" width="100"></center></td>
														<td><center>Eva Air</center></td>
														<td><center>BR</center></td>
                                                        <td><center>Taiwanese</center></td>
														<td><center><a href="tel:0035317617835" rel="nofollow "target="_blank"><font color="black">P</font></a></center></td>
                                                        <td><center><a href="mailto:askus@aerlingus.com" rel="nofollow"><font color="black">M</font></a></center></td>
                                                        <td><center><a href="mailto:askus@aerlingus.com" rel="nofollow"><font color="black">W</font></a></center></td>
                                                    </tr>
													
													<tr>
														<td><center><img src="http://support.thetravelsquare.in/img/airlines/fly-dubai-logo-the-travel-square.svg" height="50" width="100"></center></td>
														<td><center>Fly Dubai</center></td>
														<td><center>FZ</center></td>
                                                        <td><center>United Arab Emirates (UAE)</center></td>
														<td><center><a href="tel:0035317617835" rel="nofollow "target="_blank"><font color="black">P</font></a></center></td>
                                                        <td><center><a href="mailto:askus@aerlingus.com" rel="nofollow"><font color="black">M</font></a></center></td>
                                                        <td><center><a href="mailto:askus@aerlingus.com" rel="nofollow"><font color="black">W</font></a></center></td>
                                                    </tr>
													
													<tr>
														<td><center><img src="http://support.thetravelsquare.in/img/airlines/finnair-logo-the-travel-square.svg" height="50" width="100"></center></td>
														<td><center>Finn Air</center></td>
														<td><center>AY</center></td>
                                                        <td><center>Finland</center></td>
														<td><center><a href="tel:0035317617835" rel="nofollow "target="_blank"><font color="black">P</font></a></center></td>
                                                        <td><center><a href="mailto:askus@aerlingus.com" rel="nofollow"><font color="black">M</font></a></center></td>
                                                        <td><center><a href="mailto:askus@aerlingus.com" rel="nofollow"><font color="black">W</font></a></center></td>
                                                    </tr>
													
													<tr>
														<td><center><img src="http://support.thetravelsquare.in/img/airlines/garuda-indonesia-logo-the-travel-square.svg" height="50" width="100"></center></td>
														<td><center>Gaurda Indonesia</center></td>
														<td><center>GA</center></td>
                                                        <td><center>Indonesia</center></td>
														<td><center><a href="tel:0035317617835" rel="nofollow "target="_blank"><font color="black">P</font></a></center></td>
                                                        <td><center><a href="mailto:askus@aerlingus.com" rel="nofollow"><font color="black">M</font></a></center></td>
                                                        <td><center><a href="mailto:askus@aerlingus.com" rel="nofollow"><font color="black">W</font></a></center></td>
                                                    </tr>
													
													<tr>
														<td><center><img src="http://support.thetravelsquare.in/img/airlines/gulf-air-logo-the-travel-square.svg" height="50" width="100"></center></td>
														<td><center>Gulf Air</center></td>
														<td><center>GF</center></td>
                                                        <td><center>Bahrain</center></td>
														<td><center><a href="tel:0035317617835" rel="nofollow "target="_blank"><font color="black">P</font></a></center></td>
                                                        <td><center><a href="mailto:askus@aerlingus.com" rel="nofollow"><font color="black">M</font></a></center></td>
                                                        <td><center><a href="mailto:askus@aerlingus.com" rel="nofollow"><font color="black">W</font></a></center></td>
                                                    </tr>
													
													<tr>
														<td><center><img src="http://support.thetravelsquare.in/img/airlines/go-first-logo-the-travel-square.jpg" height="50" width="100"></center></td>
														<td><center>Go First / Go Air</center></td>
														<td><center>G8</center></td>
                                                        <td><center>India</center></td>
														<td><center><a href="tel:0035317617835" rel="nofollow "target="_blank"><font color="black">P</font></a></center></td>
                                                        <td><center><a href="mailto:askus@aerlingus.com" rel="nofollow"><font color="black">M</font></a></center></td>
                                                        <td><center><a href="mailto:askus@aerlingus.com" rel="nofollow"><font color="black">W</font></a></center></td>
                                                    </tr>
													
													<tr>
														<td><center><img src="http://support.thetravelsquare.in/img/airlines/hahn-air-logo-the-travel-square.svg" height="50" width="100"></center></td>
														<td><center>Hahn Air</center></td>
														<td><center>H1</center></td>
                                                        <td><center>Germany</center></td>
														<td><center><a href="tel:0035317617835" rel="nofollow "target="_blank"><font color="black">P</font></a></center></td>
                                                        <td><center><a href="mailto:askus@aerlingus.com" rel="nofollow"><font color="black">M</font></a></center></td>
                                                        <td><center><a href="mailto:askus@aerlingus.com" rel="nofollow"><font color="black">W</font></a></center></td>
                                                    </tr>
													
													<tr>
														<td><center><img src="http://support.thetravelsquare.in/img/airlines/indigo-airlines-logo-the-travel-square.svg" height="50" width="100"></center></td>
														<td><center>Indigo Airlines</center></td>
														<td><center>6E</center></td>
                                                        <td><center>India</center></td>
														<td><center><a href="tel:0035317617835" rel="nofollow "target="_blank"><font color="black">P</font></a></center></td>
                                                        <td><center><a href="mailto:askus@aerlingus.com" rel="nofollow"><font color="black">M</font></a></center></td>
                                                        <td><center><a href="mailto:askus@aerlingus.com" rel="nofollow"><font color="black">W</font></a></center></td>
                                                    </tr>
													
													<tr>
														<td><center><img src="http://support.thetravelsquare.in/img/airlines/japan-airlines-logo-the-travel-square.svg" height="50" width="100"></center></td>
														<td><center>Japan Airlines</center></td>
														<td><center>JL</center></td>
                                                        <td><center>Japan</center></td>
														<td><center><a href="tel:0035317617835" rel="nofollow "target="_blank"><font color="black">P</font></a></center></td>
                                                        <td><center><a href="mailto:askus@aerlingus.com" rel="nofollow"><font color="black">M</font></a></center></td>
                                                        <td><center><a href="mailto:askus@aerlingus.com" rel="nofollow"><font color="black">W</font></a></center></td>
                                                    </tr>
													
													<tr>
														<td><center><img src="http://support.thetravelsquare.in/img/airlines/Jazeera-airways-logo-the-travel-square.svg" height="50" width="100"></center></td>
														<td><center>Jazeera Airways</center></td>
														<td><center>J9</center></td>
                                                        <td><center>Kuwait</center></td>
														<td><center><a href="tel:0035317617835" rel="nofollow "target="_blank"><font color="black">P</font></a></center></td>
                                                        <td><center><a href="mailto:askus@aerlingus.com" rel="nofollow"><font color="black">M</font></a></center></td>
                                                        <td><center><a href="mailto:askus@aerlingus.com" rel="nofollow"><font color="black">W</font></a></center></td>
                                                    </tr>
													
													<tr>
														<td><center><img src="http://support.thetravelsquare.in/img/airlines/jet-airways-logo-the-travel-square.svg" height="50" width="100"></center></td>
														<td><center>Jet Airways</center></td>
														<td><center>9W</center></td>
                                                        <td><center>India</center></td>
														<td><center><a href="tel:0035317617835" rel="nofollow "target="_blank"><font color="black">P</font></a></center></td>
                                                        <td><center><a href="mailto:askus@aerlingus.com" rel="nofollow"><font color="black">M</font></a></center></td>
                                                        <td><center><a href="mailto:askus@aerlingus.com" rel="nofollow"><font color="black">W</font></a></center></td>
                                                    </tr>
													
													<tr>
														<td><center><img src="http://support.thetravelsquare.in/img/airlines/jetblue-logo-the-travel-square.svg" height="50" width="100"></center></td>
														<td><center>JetBlue</center></td>
														<td><center>B6</center></td>
                                                        <td><center>United States of America (USA)</center></td>
														<td><center><a href="tel:0035317617835" rel="nofollow "target="_blank"><font color="black">P</font></a></center></td>
                                                        <td><center><a href="mailto:askus@aerlingus.com" rel="nofollow"><font color="black">M</font></a></center></td>
                                                        <td><center><a href="mailto:askus@aerlingus.com" rel="nofollow"><font color="black">W</font></a></center></td>
                                                    </tr>
													
													<tr>
														<td><center><img src="http://support.thetravelsquare.in/img/airlines/jetstar-airways-logo-the-travel-square.svg" height="50" width="100"></center></td>
														<td><center>Jetstar Airways</center></td>
														<td><center>JQ</center></td>
                                                        <td><center>Australia</center></td>
														<td><center><a href="tel:0035317617835" rel="nofollow "target="_blank"><font color="black">P</font></a></center></td>
                                                        <td><center><a href="mailto:askus@aerlingus.com" rel="nofollow"><font color="black">M</font></a></center></td>
                                                        <td><center><a href="mailto:askus@aerlingus.com" rel="nofollow"><font color="black">W</font></a></center></td>
                                                    </tr>
													
													<tr>
														<td><center><img src="http://support.thetravelsquare.in/img/airlines/kenya-airways-logo-the-travel-square.svg" height="50" width="100"></center></td>
														<td><center>Kenya Airways</center></td>
														<td><center>KQ</center></td>
                                                        <td><center>Kenya</center></td>
														<td><center><a href="tel:0035317617835" rel="nofollow "target="_blank"><font color="black">P</font></a></center></td>
                                                        <td><center><a href="mailto:askus@aerlingus.com" rel="nofollow"><font color="black">M</font></a></center></td>
                                                        <td><center><a href="mailto:askus@aerlingus.com" rel="nofollow"><font color="black">W</font></a></center></td>
                                                    </tr>
													
													<tr>
														<td><center><img src="http://support.thetravelsquare.in/img/airlines/klm-logo-the-travel-square.svg" height="50" width="100"></center></td>
														<td><center>KLM Airlines</center></td>
														<td><center>KL</center></td>
                                                        <td><center>France</center></td>
														<td><center><a href="tel:0035317617835" rel="nofollow "target="_blank"><font color="black">P</font></a></center></td>
                                                        <td><center><a href="mailto:askus@aerlingus.com" rel="nofollow"><font color="black">M</font></a></center></td>
                                                        <td><center><a href="mailto:askus@aerlingus.com" rel="nofollow"><font color="black">W</font></a></center></td>
                                                    </tr>
													
													<tr>
														<td><center><img src="http://support.thetravelsquare.in/img/airlines/kuwait-airways-logo-the-travel-square.svg" height="50" width="100"></center></td>
														<td><center>Kuwait Airways</center></td>
														<td><center>KU</center></td>
                                                        <td><center>Kuwait</center></td>
														<td><center><a href="tel:0035317617835" rel="nofollow "target="_blank"><font color="black">P</font></a></center></td>
                                                        <td><center><a href="mailto:askus@aerlingus.com" rel="nofollow"><font color="black">M</font></a></center></td>
                                                        <td><center><a href="mailto:askus@aerlingus.com" rel="nofollow"><font color="black">W</font></a></center></td>
                                                    </tr>
													
													<tr>
														<td><center><img src="http://support.thetravelsquare.in/img/airlines/latam-airline-logo-the-travel-square.svg" height="50" width="100"></center></td>
														<td><center>Latam Airlines</center></td>
														<td><center>LA</center></td>
                                                        <td><center>Chile</center></td>
														<td><center><a href="tel:0035317617835" rel="nofollow "target="_blank"><font color="black">P</font></a></center></td>
                                                        <td><center><a href="mailto:askus@aerlingus.com" rel="nofollow"><font color="black">M</font></a></center></td>
                                                        <td><center><a href="mailto:askus@aerlingus.com" rel="nofollow"><font color="black">W</font></a></center></td>
                                                    </tr>
													
													<tr>
														<td><center><img src="http://support.thetravelsquare.in/img/airlines/lion-air-logo-the-travel-square.svg" height="50" width="100"></center></td>
														<td><center>Lion Air</center></td>
														<td><center>SL</center></td>
                                                        <td><center>Indonesia</center></td>
														<td><center><a href="tel:0035317617835" rel="nofollow "target="_blank"><font color="black">P</font></a></center></td>
                                                        <td><center><a href="mailto:askus@aerlingus.com" rel="nofollow"><font color="black">M</font></a></center></td>
                                                        <td><center><a href="mailto:askus@aerlingus.com" rel="nofollow"><font color="black">W</font></a></center></td>
                                                    </tr>
													
													<tr>
														<td><center><img src="http://support.thetravelsquare.in/img/airlines/lot-polish-airlines-logo-the-travel-square.svg" height="50" width="100"></center></td>
														<td><center>LOT Polish Airlines</center></td>
														<td><center>LO</center></td>
                                                        <td><center>Poland</center></td>
														<td><center><a href="tel:0035317617835" rel="nofollow "target="_blank"><font color="black">P</font></a></center></td>
                                                        <td><center><a href="mailto:askus@aerlingus.com" rel="nofollow"><font color="black">M</font></a></center></td>
                                                        <td><center><a href="mailto:askus@aerlingus.com" rel="nofollow"><font color="black">W</font></a></center></td>
                                                    </tr>
													
													<tr>
														<td><center><img src="http://support.thetravelsquare.in/img/airlines/lufthansa-logo-the-travel-square.svg" height="50" width="100"></center></td>
														<td><center>Lufthansa</center></td>
														<td><center>LH</center></td>
                                                        <td><center>Germany</center></td>
														<td><center><a href="tel:0035317617835" rel="nofollow "target="_blank"><font color="black">P</font></a></center></td>
                                                        <td><center><a href="mailto:askus@aerlingus.com" rel="nofollow"><font color="black">M</font></a></center></td>
                                                        <td><center><a href="mailto:askus@aerlingus.com" rel="nofollow"><font color="black">W</font></a></center></td>
                                                    </tr>
													
													<tr>
														<td><center><img src="http://support.thetravelsquare.in/img/airlines/malaysia-airlines-logo-the-travel-square.svg" height="50" width="100"></center></td>
														<td><center>Malaysian Airlines</center></td>
														<td><center>MH</center></td>
                                                        <td><center>Malaysia</center></td>
														<td><center><a href="tel:0035317617835" rel="nofollow "target="_blank"><font color="black">P</font></a></center></td>
                                                        <td><center><a href="mailto:askus@aerlingus.com" rel="nofollow"><font color="black">M</font></a></center></td>
                                                        <td><center><a href="mailto:askus@aerlingus.com" rel="nofollow"><font color="black">W</font></a></center></td>
                                                    </tr>
													
													<tr>
														<td><center><img src="http://support.thetravelsquare.in/img/airlines/malindo-air-logo-the-travel-square.svg" height="50" width="100"></center></td>
														<td><center>Malindo Air / Batik Air</center></td>
														<td><center>OD</center></td>
                                                        <td><center>Malaysia</center></td>
														<td><center><a href="tel:0035317617835" rel="nofollow "target="_blank"><font color="black">P</font></a></center></td>
                                                        <td><center><a href="mailto:askus@aerlingus.com" rel="nofollow"><font color="black">M</font></a></center></td>
                                                        <td><center><a href="mailto:askus@aerlingus.com" rel="nofollow"><font color="black">W</font></a></center></td>
                                                    </tr>
													
													<tr>
														<td><center><img src="http://support.thetravelsquare.in/img/airlines/middle-east-airlines-logo-the-travel-square.svg" height="50" width="100"></center></td>
														<td><center>Middle East Airlines</center></td>
														<td><center>ME</center></td>
                                                        <td><center>Lebanon</center></td>
														<td><center><a href="tel:0035317617835" rel="nofollow "target="_blank"><font color="black">P</font></a></center></td>
                                                        <td><center><a href="mailto:askus@aerlingus.com" rel="nofollow"><font color="black">M</font></a></center></td>
                                                        <td><center><a href="mailto:askus@aerlingus.com" rel="nofollow"><font color="black">W</font></a></center></td>
                                                    </tr>
													
													<tr>
														<td><center><img src="http://support.thetravelsquare.in/img/airlines/nok-air-logo-the-travel-square.svg" height="50" width="100"></center></td>
														<td><center>Nok Air</center></td>
														<td><center>DD</center></td>
                                                        <td><center>Thailand</center></td>
														<td><center><a href="tel:0035317617835" rel="nofollow "target="_blank"><font color="black">P</font></a></center></td>
                                                        <td><center><a href="mailto:askus@aerlingus.com" rel="nofollow"><font color="black">M</font></a></center></td>
                                                        <td><center><a href="mailto:askus@aerlingus.com" rel="nofollow"><font color="black">W</font></a></center></td>
                                                    </tr>
													
													<tr>
														<td><center><img src="http://support.thetravelsquare.in/img/airlines/oman-air-logo-the-travel-square.svg" height="50" width="100"></center></td>
														<td><center>Oman Air</center></td>
														<td><center>WY</center></td>
                                                        <td><center>Oman</center></td>
														<td><center><a href="tel:0035317617835" rel="nofollow "target="_blank"><font color="black">P</font></a></center></td>
                                                        <td><center><a href="mailto:askus@aerlingus.com" rel="nofollow"><font color="black">M</font></a></center></td>
                                                        <td><center><a href="mailto:askus@aerlingus.com" rel="nofollow"><font color="black">W</font></a></center></td>
                                                    </tr>
													
													<tr>
														<td><center><img src="http://support.thetravelsquare.in/img/airlines/pegasus-airlines-logo-the-travel-square.svg" height="50" width="100"></center></td>
														<td><center>Pegasus Airline</center></td>
														<td><center>PC</center></td>
                                                        <td><center>Turkey</center></td>
														<td><center><a href="tel:0035317617835" rel="nofollow "target="_blank"><font color="black">P</font></a></center></td>
                                                        <td><center><a href="mailto:askus@aerlingus.com" rel="nofollow"><font color="black">M</font></a></center></td>
                                                        <td><center><a href="mailto:askus@aerlingus.com" rel="nofollow"><font color="black">W</font></a></center></td>
                                                    </tr>
													
													<tr>
														<td><center><img src="http://support.thetravelsquare.in/img/airlines/philippine-airlines-logo-the-travel-square.svg" height="50" width="100"></center></td>
														<td><center>Philippine Airlines</center></td>
														<td><center>PR</center></td>
                                                        <td><center>Philippine </center></td>
														<td><center><a href="tel:0035317617835" rel="nofollow "target="_blank"><font color="black">P</font></a></center></td>
                                                        <td><center><a href="mailto:askus@aerlingus.com" rel="nofollow"><font color="black">M</font></a></center></td>
                                                        <td><center><a href="mailto:askus@aerlingus.com" rel="nofollow"><font color="black">W</font></a></center></td>
                                                    </tr>
													
													<tr>
														<td><center><img src="http://support.thetravelsquare.in/img/airlines/qantas-logo-the-travel-square.svg" height="50" width="100"></center></td>
														<td><center>Qantas Airline</center></td>
														<td><center>QF</center></td>
                                                        <td><center>Australia</center></td>
														<td><center><a href="tel:0035317617835" rel="nofollow "target="_blank"><font color="black">P</font></a></center></td>
                                                        <td><center><a href="mailto:askus@aerlingus.com" rel="nofollow"><font color="black">M</font></a></center></td>
                                                        <td><center><a href="mailto:askus@aerlingus.com" rel="nofollow"><font color="black">W</font></a></center></td>
                                                    </tr>
													
													<tr>
														<td><center><img src="http://support.thetravelsquare.in/img/airlines/qatar-airways-logo-the-travel-square.svg" height="50" width="100"></center></td>
														<td><center>Qatar Airways</center></td>
														<td><center>QR</center></td>
                                                        <td><center>Qatar</center></td>
														<td><center><a href="tel:0035317617835" rel="nofollow "target="_blank"><font color="black">P</font></a></center></td>
                                                        <td><center><a href="mailto:askus@aerlingus.com" rel="nofollow"><font color="black">M</font></a></center></td>
                                                        <td><center><a href="mailto:askus@aerlingus.com" rel="nofollow"><font color="black">W</font></a></center></td>
                                                    </tr>
													
													<tr>
														<td><center><img src="http://support.thetravelsquare.in/img/airlines/royal-jordanian-logo-the-travel-square.svg" height="50" width="100"></center></td>
														<td><center>Royal Jordanian</center></td>
														<td><center>RJ</center></td>
                                                        <td><center>Jordan</center></td>
														<td><center><a href="tel:0035317617835" rel="nofollow "target="_blank"><font color="black">P</font></a></center></td>
                                                        <td><center><a href="mailto:askus@aerlingus.com" rel="nofollow"><font color="black">M</font></a></center></td>
                                                        <td><center><a href="mailto:askus@aerlingus.com" rel="nofollow"><font color="black">W</font></a></center></td>
                                                    </tr>
													
													<tr>
														<td><center><img src="http://support.thetravelsquare.in/img/airlines/.svg" height="50" width="100"></center></td>
														<td><center>Royal Nepal Airlines</center></td>
														<td><center>RA</center></td>
                                                        <td><center>Nepal</center></td>
														<td><center><a href="tel:0035317617835" rel="nofollow "target="_blank"><font color="black">P</font></a></center></td>
                                                        <td><center><a href="mailto:askus@aerlingus.com" rel="nofollow"><font color="black">M</font></a></center></td>
                                                        <td><center><a href="mailto:askus@aerlingus.com" rel="nofollow"><font color="black">W</font></a></center></td>
                                                    </tr>
													
													<tr>
														<td><center><img src="http://support.thetravelsquare.in/img/airlines/ryan-air-logo-the-travel-square.svg" height="50" width="100"></center></td>
														<td><center>Ryan Air</center></td>
														<td><center>FR</center></td>
                                                        <td><center>Ireland</center></td>
														<td><center><a href="tel:0035317617835" rel="nofollow "target="_blank"><font color="black">P</font></a></center></td>
                                                        <td><center><a href="mailto:askus@aerlingus.com" rel="nofollow"><font color="black">M</font></a></center></td>
                                                        <td><center><a href="mailto:askus@aerlingus.com" rel="nofollow"><font color="black">W</font></a></center></td>
                                                    </tr>
													
													<tr>
														<td><center><img src="http://support.thetravelsquare.in/img/airlines/sas-logo-the-travel-square.svg" height="50" width="100"></center></td>
														<td><center>Scandinavian Airlines (SAS)</center></td>
														<td><center>SK</center></td>
                                                        <td><center>Denmark, Sweden, Norway</center></td>
														<td><center><a href="tel:0035317617835" rel="nofollow "target="_blank"><font color="black">P</font></a></center></td>
                                                        <td><center><a href="mailto:askus@aerlingus.com" rel="nofollow"><font color="black">M</font></a></center></td>
                                                        <td><center><a href="mailto:askus@aerlingus.com" rel="nofollow"><font color="black">W</font></a></center></td>
                                                    </tr>
													
													<tr>
														<td><center><img src="http://support.thetravelsquare.in/img/airlines/sata-air-logo-the-travel-square.svg" height="50" width="100"></center></td>
														<td><center>SATA Air</center></td>
														<td><center>S4</center></td>
                                                        <td><center>Portugal</center></td>
														<td><center><a href="tel:0035317617835" rel="nofollow "target="_blank"><font color="black">P</font></a></center></td>
                                                        <td><center><a href="mailto:askus@aerlingus.com" rel="nofollow"><font color="black">M</font></a></center></td>
                                                        <td><center><a href="mailto:askus@aerlingus.com" rel="nofollow"><font color="black">W</font></a></center></td>
                                                    </tr>
													
													<tr>
														<td><center><img src="http://support.thetravelsquare.in/img/airlines/saudia-airlines-logo-the-travel-square.svg" height="50" width="100"></center></td>
														<td><center>Saudi Airlines</center></td>
														<td><center>SV</center></td>
                                                        <td><center>Saudi Arabia</center></td>
														<td><center><a href="tel:0035317617835" rel="nofollow "target="_blank"><font color="black">P</font></a></center></td>
                                                        <td><center><a href="mailto:askus@aerlingus.com" rel="nofollow"><font color="black">M</font></a></center></td>
                                                        <td><center><a href="mailto:askus@aerlingus.com" rel="nofollow"><font color="black">W</font></a></center></td>
                                                    </tr>
													
													<tr>
														<td><center><img src="http://support.thetravelsquare.in/img/airlines/scoot-logo-the-travel-square.svg" height="50" width="100"></center></td>
														<td><center>Scoot Air</center></td>
														<td><center>TR</center></td>
                                                        <td><center>Singapore</center></td>
														<td><center><a href="tel:0035317617835" rel="nofollow "target="_blank"><font color="black">P</font></a></center></td>
                                                        <td><center><a href="mailto:askus@aerlingus.com" rel="nofollow"><font color="black">M</font></a></center></td>
                                                        <td><center><a href="mailto:askus@aerlingus.com" rel="nofollow"><font color="black">W</font></a></center></td>
                                                    </tr>
													
													<tr>
														<td><center><img src="http://support.thetravelsquare.in/img/airlines/singapore-airlines-logo-the-travel-square.svg" height="50" width="100"></center></td>
														<td><center>Singapore Airlines</center></td>
														<td><center>SQ</center></td>
                                                        <td><center>Singapore</center></td>
														<td><center><a href="tel:0035317617835" rel="nofollow "target="_blank"><font color="black">P</font></a></center></td>
                                                        <td><center><a href="mailto:askus@aerlingus.com" rel="nofollow"><font color="black">M</font></a></center></td>
                                                        <td><center><a href="mailto:askus@aerlingus.com" rel="nofollow"><font color="black">W</font></a></center></td>
                                                    </tr>
													
													<tr>
														<td><center><img src="http://support.thetravelsquare.in/img/airlines/south-african-airways-logo-the-travel-square.svg" height="50" width="100"></center></td>
														<td><center>South Afrian Airways</center></td>
														<td><center>SA</center></td>
                                                        <td><center>South Africa</center></td>
														<td><center><a href="tel:0035317617835" rel="nofollow "target="_blank"><font color="black">P</font></a></center></td>
                                                        <td><center><a href="mailto:askus@aerlingus.com" rel="nofollow"><font color="black">M</font></a></center></td>
                                                        <td><center><a href="mailto:askus@aerlingus.com" rel="nofollow"><font color="black">W</font></a></center></td>
                                                    </tr>
													
													<tr>
														<td><center><img src="http://support.thetravelsquare.in/img/airlines/southwest-airlines-logo-the-travel-square.svg" height="50" width="100"></center></td>
														<td><center>Southwest Airlines</center></td>
														<td><center>WN</center></td>
                                                        <td><center>United States of America (USA)</center></td>
														<td><center><a href="tel:0035317617835" rel="nofollow "target="_blank"><font color="black">P</font></a></center></td>
                                                        <td><center><a href="mailto:askus@aerlingus.com" rel="nofollow"><font color="black">M</font></a></center></td>
                                                        <td><center><a href="mailto:askus@aerlingus.com" rel="nofollow"><font color="black">W</font></a></center></td>
                                                    </tr>
													
													<tr>
														<td><center><img src="http://support.thetravelsquare.in/img/airlines/spirit-airlines-logo-the-travel-square.svg" height="50" width="100"></center></td>
														<td><center>Spirit Airlines</center></td>
														<td><center>NK</center></td>
                                                        <td><center>United States of America (USA)</center></td>
														<td><center><a href="tel:0035317617835" rel="nofollow "target="_blank"><font color="black">P</font></a></center></td>
                                                        <td><center><a href="mailto:askus@aerlingus.com" rel="nofollow"><font color="black">M</font></a></center></td>
                                                        <td><center><a href="mailto:askus@aerlingus.com" rel="nofollow"><font color="black">W</font></a></center></td>
                                                    </tr>
													
													<tr>
														<td><center><img src="http://support.thetravelsquare.in/img/airlines/sri-lankan-airlines-logo-the-travel-square.svg" height="50" width="100"></center></td>
														<td><center>Sri Lankan Airlines</center></td>
														<td><center>UL</center></td>
                                                        <td><center>Sri Lanka</center></td>
														<td><center><a href="tel:0035317617835" rel="nofollow "target="_blank"><font color="black">P</font></a></center></td>
                                                        <td><center><a href="mailto:askus@aerlingus.com" rel="nofollow"><font color="black">M</font></a></center></td>
                                                        <td><center><a href="mailto:askus@aerlingus.com" rel="nofollow"><font color="black">W</font></a></center></td>
                                                    </tr>
													
													<tr>
														<td><center><img src="http://support.thetravelsquare.in/img/airlines/swiss-international-airlines-logo-the-travel-square.svg" height="50" width="100"></center></td>
														<td><center>Swiss International Airlines</center></td>
														<td><center>LX</center></td>
                                                        <td><center>Switzerland</center></td>
														<td><center><a href="tel:0035317617835" rel="nofollow "target="_blank"><font color="black">P</font></a></center></td>
                                                        <td><center><a href="mailto:askus@aerlingus.com" rel="nofollow"><font color="black">M</font></a></center></td>
                                                        <td><center><a href="mailto:askus@aerlingus.com" rel="nofollow"><font color="black">W</font></a></center></td>
                                                    </tr>
													
													<tr>
														<td><center><img src="http://support.thetravelsquare.in/img/airlines/spicejet-logo-the-travel-square.svg" height="50" width="100"></center></td>
														<td><center>Spice Jet</center></td>
														<td><center>SG</center></td>
                                                        <td><center>India</center></td>
														<td><center><a href="tel:0035317617835" rel="nofollow "target="_blank"><font color="black">P</font></a></center></td>
                                                        <td><center><a href="mailto:askus@aerlingus.com" rel="nofollow"><font color="black">M</font></a></center></td>
                                                        <td><center><a href="mailto:askus@aerlingus.com" rel="nofollow"><font color="black">W</font></a></center></td>
                                                    </tr>
													
													<tr>
														<td><center><img src="http://support.thetravelsquare.in/img/airlines/tap-air-portugal-logo-the-travel-square.svg" height="50" width="100"></center></td>
														<td><center>TAP Air Portugal</center></td>
														<td><center>TP</center></td>
                                                        <td><center>Portugal</center></td>
														<td><center><a href="tel:0035317617835" rel="nofollow "target="_blank"><font color="black">P</font></a></center></td>
                                                        <td><center><a href="mailto:askus@aerlingus.com" rel="nofollow"><font color="black">M</font></a></center></td>
                                                        <td><center><a href="mailto:askus@aerlingus.com" rel="nofollow"><font color="black">W</font></a></center></td>
                                                    </tr>
													
													<tr>
														<td><center><img src="http://support.thetravelsquare.in/img/airlines/turkish-airlines-logo-the-travel-square.svg" height="50" width="100"></center></td>
														<td><center>Turkish Airlines</center></td>
														<td><center>TK</center></td>
                                                        <td><center>Turkey</center></td>
														<td><center><a href="tel:0035317617835" rel="nofollow "target="_blank"><font color="black">P</font></a></center></td>
                                                        <td><center><a href="mailto:askus@aerlingus.com" rel="nofollow"><font color="black">M</font></a></center></td>
                                                        <td><center><a href="mailto:askus@aerlingus.com" rel="nofollow"><font color="black">W</font></a></center></td>
                                                    </tr>
													
													<tr>
														<td><center><img src="http://support.thetravelsquare.in/img/airlines/thai-airways-logo-the-travel-square.svg" height="50" width="100"></center></td>
														<td><center>Thai Air</center></td>
														<td><center>EI</center></td>
                                                        <td><center>Thailand</center></td>
														<td><center><a href="tel:0035317617835" rel="nofollow "target="_blank"><font color="black">P</font></a></center></td>
                                                        <td><center><a href="mailto:askus@aerlingus.com" rel="nofollow"><font color="black">M</font></a></center></td>
                                                        <td><center><a href="mailto:askus@aerlingus.com" rel="nofollow"><font color="black">W</font></a></center></td>
                                                    </tr>
													
													<tr>
														<td><center><img src="http://support.thetravelsquare.in/img/airlines/thai-smile-logo-the-travel-square.svg" height="50" width="100"></center></td>
														<td><center>Thai Smile</center></td>
														<td><center>TG</center></td>
                                                        <td><center>Thailand</center></td>
														<td><center><a href="tel:0035317617835" rel="nofollow "target="_blank"><font color="black">P</font></a></center></td>
                                                        <td><center><a href="mailto:askus@aerlingus.com" rel="nofollow"><font color="black">M</font></a></center></td>
                                                        <td><center><a href="mailto:askus@aerlingus.com" rel="nofollow"><font color="black">W</font></a></center></td>
                                                    </tr>
													
													<tr>
														<td><center><img src="http://support.thetravelsquare.in/img/airlines/tigerair-logo-the-travel-square.svg" height="50" width="100"></center></td>
														<td><center>Tiger Air</center></td>
														<td><center>TR</center></td>
                                                        <td><center>Singapore</center></td>
														<td><center><a href="tel:0035317617835" rel="nofollow "target="_blank"><font color="black">P</font></a></center></td>
                                                        <td><center><a href="mailto:askus@aerlingus.com" rel="nofollow"><font color="black">M</font></a></center></td>
                                                        <td><center><a href="mailto:askus@aerlingus.com" rel="nofollow"><font color="black">W</font></a></center></td>
                                                    </tr>
													
													<tr>
														<td><center><img src="http://support.thetravelsquare.in/img/airlines/tunisair-logo-the-travel-square.svg" height="50" width="100"></center></td>
														<td><center>Tunis Air</center></td>
														<td><center>TU</center></td>
                                                        <td><center>Tunisia</center></td>
														<td><center><a href="tel:0035317617835" rel="nofollow "target="_blank"><font color="black">P</font></a></center></td>
                                                        <td><center><a href="mailto:askus@aerlingus.com" rel="nofollow"><font color="black">M</font></a></center></td>
                                                        <td><center><a href="mailto:askus@aerlingus.com" rel="nofollow"><font color="black">W</font></a></center></td>
                                                    </tr>
													
													<tr>
														<td><center><img src="http://support.thetravelsquare.in/img/airlines/ukraine-airlines-logo-the-travel-square.svg" height="50" width="100"></center></td>
														<td><center>Ukraine Airlines (UAI)</center></td>
														<td><center>PS</center></td>
                                                        <td><center>Ukraine</center></td>
														<td><center><a href="tel:0035317617835" rel="nofollow "target="_blank"><font color="black">P</font></a></center></td>
                                                        <td><center><a href="mailto:askus@aerlingus.com" rel="nofollow"><font color="black">M</font></a></center></td>
                                                        <td><center><a href="mailto:askus@aerlingus.com" rel="nofollow"><font color="black">W</font></a></center></td>
                                                    </tr>
													
													<tr>
														<td><center><img src="http://support.thetravelsquare.in/img/airlines/united-airlines-logo-the-travel-square.svg" height="50" width="100"></center></td>
														<td><center>United Airlines</center></td>
														<td><center>UA</center></td>
                                                        <td><center>United States of America (USA)</center></td>
														<td><center><a href="tel:0035317617835" rel="nofollow "target="_blank"><font color="black">P</font></a></center></td>
                                                        <td><center><a href="mailto:askus@aerlingus.com" rel="nofollow"><font color="black">M</font></a></center></td>
                                                        <td><center><a href="mailto:askus@aerlingus.com" rel="nofollow"><font color="black">W</font></a></center></td>
                                                    </tr>
													
													<tr>
														<td><center><img src="http://support.thetravelsquare.in/img/airlines/uzbekistan-airways-logo-the-travel-square.svg" height="50" width="100"></center></td>
														<td><center>Uzbekistan Airways</center></td>
														<td><center>HY</center></td>
                                                        <td><center>Uzbekistan</center></td>
														<td><center><a href="tel:0035317617835" rel="nofollow "target="_blank"><font color="black">P</font></a></center></td>
                                                        <td><center><a href="mailto:askus@aerlingus.com" rel="nofollow"><font color="black">M</font></a></center></td>
                                                        <td><center><a href="mailto:askus@aerlingus.com" rel="nofollow"><font color="black">W</font></a></center></td>
                                                    </tr>
													
													<tr>
														<td><center><img src="http://support.thetravelsquare.in/img/airlines/vietnam-airlines-logo-the-travel-square.svg" height="50" width="100"></center></td>
														<td><center>Vietnam Airlines</center></td>
														<td><center>VN</center></td>
                                                        <td><center>Vietnam</center></td>
														<td><center><a href="tel:0035317617835" rel="nofollow "target="_blank"><font color="black">P</font></a></center></td>
                                                        <td><center><a href="mailto:askus@aerlingus.com" rel="nofollow"><font color="black">M</font></a></center></td>
                                                        <td><center><a href="mailto:askus@aerlingus.com" rel="nofollow"><font color="black">W</font></a></center></td>
                                                    </tr>
													
													<tr>
														<td><center><img src="http://support.thetravelsquare.in/img/airlines/virgin-logo-the-travel-square.svg" height="50" width="100"></center></td>
														<td><center>Virgin Atlantic Airlines</center></td>
														<td><center>VS</center></td>
                                                        <td><center>England, United Kingdom (UK)</center></td>
														<td><center><a href="tel:0035317617835" rel="nofollow "target="_blank"><font color="black">P</font></a></center></td>
                                                        <td><center><a href="mailto:askus@aerlingus.com" rel="nofollow"><font color="black">M</font></a></center></td>
                                                        <td><center><a href="mailto:askus@aerlingus.com" rel="nofollow"><font color="black">W</font></a></center></td>
                                                    </tr>
													
													<tr>
														<td><center><img src="http://support.thetravelsquare.in/img/airlines/vistara-logo-the-travel-square.svg" height="50" width="100"></center></td>
														<td><center>Vistara Airlines</center></td>
														<td><center>UK</center></td>
                                                        <td><center>India</center></td>
														<td><center><a href="tel:0035317617835" rel="nofollow "target="_blank"><font color="black">P</font></a></center></td>
                                                        <td><center><a href="mailto:askus@aerlingus.com" rel="nofollow"><font color="black">M</font></a></center></td>
                                                        <td><center><a href="mailto:askus@aerlingus.com" rel="nofollow"><font color="black">W</font></a></center></td>
                                                    </tr>
													
													<tr>
														<td><center><img src="http://support.thetravelsquare.in/img/airlines/westjet-logo-the-travel-square.svg" height="50" width="100"></center></td>
														<td><center>Westjet Airlines</center></td>
														<td><center>WS</center></td>
                                                        <td><center>Canada</center></td>
														<td><center><a href="tel:0035317617835" rel="nofollow "target="_blank"><font color="black">P</font></a></center></td>
                                                        <td><center><a href="mailto:askus@aerlingus.com" rel="nofollow"><font color="black">M</font></a></center></td>
                                                        <td><center><a href="mailto:askus@aerlingus.com" rel="nofollow"><font color="black">W</font></a></center></td>
                                                    </tr>
													
																						
													
													
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
						<div class="kt-footer  kt-grid__item kt-grid kt-grid--desktop kt-grid--ver-desktop" id="kt_footer">
                        <div class="kt-container  kt-container--fluid ">
                            <div class="kt-footer__copyright">
                                2021&nbsp;©&nbsp;<a href="http://b2bfixeddepartures.com/" target="_blank" class="kt-link"><font color="black"><b> B2B Fixed Departures</b></font></a>
                            </div>
                            <div class="kt-footer__menu">
                                <a href="http://b2bfixeddepartures.com/about" target="_blank" class="kt-footer__menu-link kt-link">About</a>
                                <a href="http://b2bfixeddepartures.com/terms-and-conditions/" target="_blank" class="kt-footer__menu-link kt-link">T&C</a>
                                <a href="http://b2bfixeddepartures.com/privacy-policy" target="_blank" class="kt-footer__menu-link kt-link">Privacy Policy</a>
                                <a href="http://b2bfixeddepartures.com/partner-care" target="_blank" class="kt-footer__menu-link kt-link">Partner Care</a>
                            </div>
                        </div>
                    </div> 					<!-- end:: Footer -->			
				</div>
			</div>
		</div>
		<!-- end:: Page -->
		<!-- begin::Quick Panel -->
		<div id="kt_quick_panel" class="kt-quick-panel">
            <a href="http://b2bfixeddepartures.com/" class="kt-quick-panel__close" id="kt_quick_panel_close_btn"><i class="flaticon2-delete"></i></a>
            <div class="kt-quick-panel__nav" kt-hidden-height="66" style="">
                <ul class="nav nav-tabs nav-tabs-line nav-tabs-bold nav-tabs-line-3x nav-tabs-line-brand  kt-notification-item-padding-x" role="tablist">
                    <li class="nav-item active">
                        <a class="nav-link active" data-toggle="tab" href="http://b2bfixeddepartures.com/kt_quick_panel_tab_notifications" role="tab">PARTNER DEDICATED SUPPORT</a>
                    </li>
                </ul>
            </div>
            <div class="kt-quick-panel__content">
        <div class="tab-content">
            <div class="tab-pane fade show kt-scroll active ps ps--active-y" id="kt_quick_panel_tab_notifications" role="tabpanel" style="height: 592px; overflow: hidden;">
                <div class="kt-notification">
                    <a href="#" class="kt-notification__item">
                        <div class="kt-notification__item-icon">
                            <i class="flaticon2-line-chart kt-font-success"></i>
                        </div>
                        <div class="kt-notification__item-details">
                            <div class="kt-notification__item-title">
                                Manager Name
                            </div>
                            <div class="kt-notification__item-time">
                                Mr. Kunal Aggarwal
                            </div>
                        </div>
                    </a>
                    
                    <a href="#" class="kt-notification__item">
                        <div class="kt-notification__item-icon">
                            <i class="flaticon2-favourite kt-font-danger"></i>
                        </div>
                        <div class="kt-notification__item-details">
                            <div class="kt-notification__item-title">
                               Designation
                            </div>
                            <div class="kt-notification__item-time">
                                Reservation Head (Aviations) 
                            </div>
                        </div>
                    </a>
                    <a href="tel:01143680216" class="kt-notification__item">
                        <div class="kt-notification__item-icon">
                            <i class="flaticon2-safe kt-font-primary"></i>
                        </div>
                        <div class="kt-notification__item-details">
                            <div class="kt-notification__item-title">
                                Desk Contact
                            </div>
                            <div class="kt-notification__item-time">
                                 +91-011-436-802-16
                            </div>
                        </div>
                    </a>
                    <a href="tel:9999007037" class="kt-notification__item">
                        <div class="kt-notification__item-icon">
                            <i class="flaticon2-psd kt-font-success"></i>
                        </div>
                        <div class="kt-notification__item-details">
                            <div class="kt-notification__item-title">
                                Office Contact
                            </div>
                            <div class="kt-notification__item-time">
                                +91-9999-355-993
                            </div>
                        </div>
                    </a>
                    <a href="mailto:kunal@instawiremoney.com" class="kt-notification__item">
                        <div class="kt-notification__item-icon">
                            <i class="flaticon-download-1 kt-font-danger"></i>
                        </div>
                        <div class="kt-notification__item-details">
                            <div class="kt-notification__item-title">
                                Mail Id
                            </div>
                            <div class="kt-notification__item-time">
                                kunal@b2bfixeddepartures.com
                            </div>
                        </div>
                    </a>
                    
                </div>
            </div>
        </div>
    </div>
        </div>
		<!-- end::Quick Panel -->
		<!-- begin::Scrolltop -->
		<div id="kt_scrolltop" class="kt-scrolltop">
			<i class="fa fa-arrow-up"></i>
		</div>
		<!-- end::Scrolltop -->
		<!-- begin::Sticky Toolbar -->
		
		<!-- end::Sticky Toolbar -->
		<!-- begin::Demo Panel -->
		
		<!--ENd:: Chat-->
		<!-- begin::Global Config(global config for global JS sciprts) -->
        <script>
		var KTAppOptions = { "colors": { "state": { "brand": "#716aca", "light": "#ffffff", "dark": "#282a3c", "primary": "#5867dd", "success": "#34bfa3", "info": "#36a3f7", "warning": "#ffb822", "danger": "#fd3995" }, "base": { "label": ["#c5cbe3", "#a1a8c3", "#3d4465", "#3e4466"], "shape": ["#f0f3ff", "#d9dffa", "#afb4d4", "#646c9a"] } } };
	</script>
	<!-- end::Global Config -->

	<!--begin::Global Theme Bundle(used by all pages) -->
	<script src="http://partner.thetravelsquare.in/resource/admin/files/plugins.bundle.js.download" type="text/javascript"></script>
	<script src="http://partner.thetravelsquare.in/resource/admin/files/scripts.bundle.js.download" type="text/javascript"></script>
	<!--end::Global Theme Bundle -->


	<!--begin::Page Scripts(used by this page) -->
	<script src="http://partner.thetravelsquare.in/resource/admin/files/login-1.js.download" type="text/javascript"></script>
	<!--end::Page Scripts -->

                        <!--begin::Page Vendors(used by this page) -->
                        <script src="http://partner.thetravelsquare.in/resource/admin/files/fullcalendar.bundle.js.download" type="text/javascript"></script>
                            <script src="http://partner.thetravelsquare.in/resource/admin/files/js(1)" type="text/javascript"></script>
                            <script src="http://partner.thetravelsquare.in/resource/admin/files/gmaps.js.download" type="text/javascript"></script>
                        <!--end::Page Vendors -->

                    <!--begin::Page Scripts(used by this page) -->
                            <script src="http://partner.thetravelsquare.in/resource/admin/files/dashboard.js.download" type="text/javascript"></script>
                        <!--end::Page Scripts -->

	<!-- end::Body -->
    <script src="http://partner.thetravelsquare.in/resource/admin/js/pages/crud/forms/widgets/bootstrap-datepicker.js" type="text/javascript"></script>
    
    <script src="http://partner.thetravelsquare.in/resource/admin//plugins/custom/datatables/datatables.bundle.js" type="text/javascript"></script>
        <!--end::Page Vendors -->
        <!--begin::Page Scripts(used by this page) -->
        <script src="http://partner.thetravelsquare.in/resource/admin/js/pages/crud/datatables/advanced/multiple-controls.js" type="text/javascript"></script>
    <iframe name="_hjRemoteVarsFrame" title="_hjRemoteVarsFrame" id="_hjRemoteVarsFrame"
		src="http://partner.thetravelsquare.in/resource/admin/files/box-469cf41adb11dc78be68c1ae7f9457a4.html"
        style="display: none !important; width: 1px !important; height: 1px !important; opacity: 0 !important; pointer-events: none !important;"></iframe>



         <!-- begin::Global Config(global config for global JS sciprts) -->
         <script>
            var KTAppOptions = {
    "colors": {
        "state": {
            "brand": "#5d78ff",
            "dark": "#282a3c",
            "light": "#ffffff",
            "primary": "#5867dd",
            "success": "#34bfa3",
            "info": "#36a3f7",
            "warning": "#ffb822",
            "danger": "#fd3995"
        },
        "base": {
            "label": [
                "#c5cbe3",
                "#a1a8c3",
                "#3d4465",
                "#3e4466"
            ],
            "shape": [
                "#f0f3ff",
                "#d9dffa",
                "#afb4d4",
                "#646c9a"
            ]
        }
    }
};
        </script>

        <script>
                    $( document ).ready(function() {
                        $("#flight_type").hide();
                        $("#package_type").hide();
                        $("#inclusions").hide();
                        $("#hotel_detail").hide();
                    });
                    $('#deal_type_id').change(function() {
                        var gid = $(this).val(); 
                            if (gid == '1') { 
                                $("#flight_type").hide();
                                $("#package_type").show();
                                $("#inclusions").show();
                                $("#hotel_detail").hide();
                            }else if(gid == '2'){
                                $("#flight_type").show();
                                $("#package_type").hide();
                                $("#inclusions").hide();
                                $("#hotel_detail").hide();
                            }else if(gid == '3'){
                                $("#flight_type").hide();
                                $("#package_type").hide();
                                $("#inclusions").hide();
                                $("#hotel_detail").show();
                            }else{
                                $("#flight_type").hide();
                                $("#package_type").hide();
                                $("#inclusions").hide();
                                $("#hotel_detail").hide();
                            }
                            return false;
                    });
        </script>
    <!-- end::Body -->

<div class="daterangepicker ltr show-ranges opensleft"><div class="ranges"><ul><li data-range-key="Today">Today</li><li data-range-key="Yesterday">Yesterday</li><li data-range-key="Last 7 Days">Last 7 Days</li><li data-range-key="Last 30 Days">Last 30 Days</li><li data-range-key="This Month">This Month</li><li data-range-key="Last Month">Last Month</li><li data-range-key="Custom Range">Custom Range</li></ul></div><div class="drp-calendar left"><div class="calendar-table"></div><div class="calendar-time" style="display: none;"></div></div><div class="drp-calendar right"><div class="calendar-table"></div><div class="calendar-time" style="display: none;"></div></div><div class="drp-buttons"><span class="drp-selected"></span><button class="cancelBtn btn btn-sm btn-default" type="button">Cancel</button><button class="applyBtn btn btn-sm btn-primary" disabled="disabled" type="button">Apply</button> </div></div><iframe name="_hjRemoteVarsFrame" title="_hjRemoteVarsFrame" id="_hjRemoteVarsFrame" src="./files/box-469cf41adb11dc78be68c1ae7f9457a4.html" style="display: none !important; width: 1px !important; height: 1px !important; opacity: 0 !important; pointer-events: none !important;"></iframe>        <script src="http://partner.thetravelsquare.in/resource/agroxa/plugins/datatables/dataTables.responsive.min.js"></script>
        <script src="http://partner.thetravelsquare.in/resource/agroxa/plugins/datatables/responsive.bootstrap4.min.js"></script>

        <!-- Datatable init js -->
        <script src="http://partner.thetravelsquare.in/resource/agroxa/assets/pages/datatables.init.js"></script>
	</body>
</html>