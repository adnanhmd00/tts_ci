<!DOCTYPE html>
<html lang="en">
    <!-- begin::Head -->
    <head>
        <?php include('head.php');?>
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
                        <!-- begin:: Content Head -->
                        <div class="kt-subheader   kt-grid__item" id="kt_subheader">
							<div class="kt-container  kt-container--fluid ">
								<div class="kt-subheader__main">
									<h3 class="kt-subheader__title">
										Web Check-In & Manage Flight Trip                            
									</h3>
									
								</div>
							</div>
						</div>
                        <!-- end:: Content Head -->
                        <!-- begin:: Content -->
                        <div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">
							
						<div class="alert alert-light alert-elevate" role="alert">
								<div class="alert-text">
                                    We are <b>Partnered With More than 95+ Global Airlines</b> Which Give You Access to Manage Your Customer's Journey and Flight Trip From Them.
									Complete Their Web Check-In's, Download Airline Boarding Pass, Add Ancillaries/Meals, Select Seats, Wheelchair and More from Here. <br><br>
									<b>Search for Respected Airline, Airline Code, Origin Country of Airline for Web Check-In's and More.</b>
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
                                                        <th><center>IATA CODE</center></th>
														<th><center>ORIGIN COUNTRY</center></th>
                                                        <th><center>WEB CHECK-IN</center></th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                	
													<tr>
														<td><center><img src="http://support.thetravelsquare.in/img/airlines/aer-lingus-logo-the-travel-square.svg" height="50" width="100"></center></td>
														<td><center>Aer Lingus</center></td>
														<td><center>EI</center></td>
                                                        <td><center>Ireland</center></td>
														<td data-field="Status" class="kt-datatable__cell"><span style="width: 146px;"><center>
														<a href="https://www.aerlingus.com/html/trip-mgmt.html" rel="nofollow "target="_blank">
														<span class="kt-badge kt-badge--brand kt-badge--inline kt-badge--pill" style="background-color:black">WEB CHECK-IN</span></span></center></td></a>
                                                    </tr>
													
													<tr>
														<td><center><img src="http://support.thetravelsquare.in/img/airlines/air-arabia-logo-the-travel-square.svg" height="50" width="100"></center></td>
														<td><center>Air Arabia</center></td>
														<td><center>G9</center></td>
                                                        <td><center>United Arab Emirates (UAE)</center></td>
														<td data-field="Status" class="kt-datatable__cell"><span style="width: 146px;"><center>
														<a href="https://www.airarabia.com/en/check-in-online-sita" rel="nofollow "target="_blank">
														<span class="kt-badge kt-badge--brand kt-badge--inline kt-badge--pill" style="background-color:black">WEB CHECK-IN</span></span></center></td></a>
                                                    </tr>
													
													<tr>
														<td><center><img src="http://support.thetravelsquare.in/img/airlines/air-astana-logo-the-travel-square.svg" height="50" width="100"></center></td>
														<td><center>Air Astana</center></td>
														<td><center>KC</center></td>
                                                        <td><center>Kazakhstan</center></td>
														<td data-field="Status" class="kt-datatable__cell"><span style="width: 146px;"><center>
														<a href="https://airastana.com/global/en-us/Book-Manage/Manage/Manage-My-Booking" rel="nofollow "target="_blank">
														<span class="kt-badge kt-badge--brand kt-badge--inline kt-badge--pill" style="background-color:black">WEB CHECK-IN</span></span></center></td></a>
                                                    </tr>
													
													<tr>
														<td><center><img src="http://support.thetravelsquare.in/img/airlines/air-canada-logo-the-travel-square.svg" height="50" width="100"></center></td>
														<td><center>Air Canada</center></td>
														<td><center>AC</center></td>
                                                        <td><center>Canada</center></td>
														<td data-field="Status" class="kt-datatable__cell"><span style="width: 146px;"><center>
														<a href="https://www.aircanada.com/ca/en/aco/home/book/manage-bookings.html#/" rel="nofollow "target="_blank">
														<span class="kt-badge kt-badge--brand kt-badge--inline kt-badge--pill" style="background-color:black">WEB CHECK-IN</span></span></center></td></a>
                                                    </tr>
													
													<tr>
														<td><center><img src="http://support.thetravelsquare.in/img/airlines/air-india-express-logo-the-travel-square.svg" height="50" width="100"></center></td>
														<td><center>Air India Express</center></td>
														<td><center>IX</center></td>
                                                        <td><center>India</center></td>
														<td data-field="Status" class="kt-datatable__cell"><span style="width: 146px;"><center>
														<a href="https://www.airindiaexpress.in/en/manage/manage-booking" rel="nofollow "target="_blank">
														<span class="kt-badge kt-badge--brand kt-badge--inline kt-badge--pill" style="background-color:black">WEB CHECK-IN</span></span></center></td></a>
                                                    </tr>
													
													<tr>
														<td><center><img src="http://support.thetravelsquare.in/img/airlines/air-india-logo-the-travel-square.svg" height="50" width="100"></center></td>
														<td><center>Air India</center></td>
														<td><center>AI</center></td>
                                                        <td><center>India</center></td>
														<td data-field="Status" class="kt-datatable__cell"><span style="width: 146px;"><center>
														<a href="https://bookme.airindia.in/AirIndiaB2C/Manage/Retrieve" rel="nofollow "target="_blank">
														<span class="kt-badge kt-badge--brand kt-badge--inline kt-badge--pill" style="background-color:black">WEB CHECK-IN</span></span></center></td></a>
                                                    </tr>
													
													<tr>
														<td><center><img src="http://support.thetravelsquare.in/img/airlines/alitalia-airlines-logo-the-travel-square.svg" height="50" width="100"></center></td>
														<td><center>Al Italia</center></td>
														<td><center>AZ</center></td>
                                                        <td><center>Italy</center></td>
														<td data-field="Status" class="kt-datatable__cell"><span style="width: 146px;"><center>
														<a href="https://preprod65.alitalia.com/en_lb/manage-my-booking.html" rel="nofollow "target="_blank">
														<span class="kt-badge kt-badge--brand kt-badge--inline kt-badge--pill" style="background-color:black">WEB CHECK-IN</span></span></center></td></a>
                                                    </tr>
													
													<tr>
														<td><center><img src="http://support.thetravelsquare.in/img/airlines/alaska-airlines-logo-the-travel-square.svg" height="50" width="100"></center></td>
														<td><center>Alaska Airlines</center></td>
														<td><center>AS</center></td>
                                                        <td><center>United States of America (USA)</center></td>
														<td data-field="Status" class="kt-datatable__cell"><span style="width: 146px;"><center>
														<a href="https://www.alaskaair.com/booking/reservation-lookup" rel="nofollow "target="_blank">
														<span class="kt-badge kt-badge--brand kt-badge--inline kt-badge--pill" style="background-color:black">WEB CHECK-IN</span></span></center></td></a>
                                                    </tr>
													
													<tr>
														<td><center><img src="http://support.thetravelsquare.in/img/airlines/avianca-el-salvador-logo-the-travel-square.svg" height="50" width="100"></center></td>
														<td><center>Avianca</center></td>
														<td><center>AV</center></td>
                                                        <td><center>Colombia</center></td>
														<td data-field="Status" class="kt-datatable__cell"><span style="width: 146px;"><center>
														<a href="https://www.avianca.com/otr/en/" rel="nofollow "target="_blank">
														<span class="kt-badge kt-badge--brand kt-badge--inline kt-badge--pill" style="background-color:black">WEB CHECK-IN</span></span></center></td></a>
                                                    </tr>
													
													<tr>
														<td><center><img src="http://support.thetravelsquare.in/img/airlines/airlink-logo-the-travel-square.svg" height="50" width="100"></center></td>
														<td><center>Airlink</center></td>
														<td><center>4Z</center></td>
                                                        <td><center>South Africa</center></td>
														<td data-field="Status" class="kt-datatable__cell"><span style="width: 146px;"><center>
														<a href="https://www.flyairlink.com/managemybooking" rel="nofollow "target="_blank">
														<span class="kt-badge kt-badge--brand kt-badge--inline kt-badge--pill" style="background-color:black">WEB CHECK-IN</span></span></center></td></a>
                                                    </tr>
													
													<tr>
														<td><center><img src="http://support.thetravelsquare.in/img/airlines/air-mauritius-logo-the-travel-square.svg" height="50" width="100"></center></td>
														<td><center>Air Mauritius</center></td>
														<td><center>MK</center></td>
                                                        <td><center>Mauritius</center></td>
														<td data-field="Status" class="kt-datatable__cell"><span style="width: 146px;"><center>
														<a href="https://www.airmauritius.com/manage/booking" rel="nofollow "target="_blank">
														<span class="kt-badge kt-badge--brand kt-badge--inline kt-badge--pill" style="background-color:black">WEB CHECK-IN</span></span></center></td></a>
                                                    </tr>
													
													<tr>
														<td><center><img src="http://support.thetravelsquare.in/img/airlines/american-airlines-logo-the-travel-square.svg" height="50" width="100"></center></td>
														<td><center>American Airlines</center></td>
														<td><center>AA</center></td>
                                                        <td><center>United States of America (USA)</center></td>
														<td data-field="Status" class="kt-datatable__cell"><span style="width: 146px;"><center>
														<a href="https://www.aa.com/reservation/view/find-your-reservation" rel="nofollow "target="_blank">
														<span class="kt-badge kt-badge--brand kt-badge--inline kt-badge--pill" style="background-color:black">WEB CHECK-IN</span></span></center></td></a>
                                                    </tr>
													
													<tr>
														<td><center><img src="http://support.thetravelsquare.in/img/airlines/atlas-air-logo-the-travel-square.svg" height="50" width="100"></center></td>
														<td><center>Atlas Air</center></td>
														<td><center>5Y</center></td>
                                                        <td><center>United States of America (USA)</center></td>
														<td data-field="Status" class="kt-datatable__cell"><span style="width: 146px;"><center>
														<a href="https://www.atlasair.com/" rel="nofollow "target="_blank">
														<span class="kt-badge kt-badge--brand kt-badge--inline kt-badge--pill" style="background-color:black">WEB CHECK-IN</span></span></center></td></a>
                                                    </tr>
													
													<tr>
														<td><center><img src="http://support.thetravelsquare.in/img/airlines/ana-logo-the-travel-square.svg" height="50" width="100"></center></td>
														<td><center>All Nippon Airways (ANA)</center></td>
														<td><center>NH</center></td>
                                                        <td><center>Japan</center></td>
														<td data-field="Status" class="kt-datatable__cell"><span style="width: 146px;"><center>
														<a href="https://www.ana.co.jp/en/jp/search/int/mybooking.html" rel="nofollow "target="_blank">
														<span class="kt-badge kt-badge--brand kt-badge--inline kt-badge--pill" style="background-color:black">WEB CHECK-IN</span></span></center></td></a>
                                                    </tr>
													
													<tr>
														<td><center><img src="http://support.thetravelsquare.in/img/airlines/asiana-airlines-logo-the-travel-square.svg" height="50" width="100"></center></td>
														<td><center>Asiana Airlines</center></td>
														<td><center>OZ</center></td>
                                                        <td><center>South Korea</center></td>
														<td data-field="Status" class="kt-datatable__cell"><span style="width: 146px;"><center>
														<a href="https://flyasiana.com/I/GB/EN/CheckIn.do" rel="nofollow "target="_blank">
														<span class="kt-badge kt-badge--brand kt-badge--inline kt-badge--pill" style="background-color:black">WEB CHECK-IN</span></span></center></td></a>
                                                    </tr>
													
													<tr>
														<td><center><img src="http://support.thetravelsquare.in/img/airlines/azerbaijan-airlines-logo-the-travel-square.svg" height="50" width="100"></center></td>
														<td><center>Azerbaijan Airlines</center></td>
														<td><center>J2</center></td>
                                                        <td><center>Azerbaijan</center></td>
														<td data-field="Status" class="kt-datatable__cell"><span style="width: 146px;"><center>
														<a href="https://fly.azal.az/manage/#!/?lang=en" rel="nofollow "target="_blank">
														<span class="kt-badge kt-badge--brand kt-badge--inline kt-badge--pill" style="background-color:black">WEB CHECK-IN</span></span></center></td></a>
                                                    </tr>
													
													<tr>
														<td><center><img src="http://support.thetravelsquare.in/img/airlines/air-asia-logo-the-travel-square.svg" height="50" width="100"></center></td>
														<td><center>Air Asia India</center></td>
														<td><center>I5</center></td>
                                                        <td><center>India</center></td>
														<td data-field="Status" class="kt-datatable__cell"><span style="width: 146px;"><center>
														<a href="https://www.airasia.co.in/manage-booking" rel="nofollow "target="_blank">
														<span class="kt-badge kt-badge--brand kt-badge--inline kt-badge--pill" style="background-color:black">WEB CHECK-IN</span></span></center></td></a>
                                                    </tr>
													
													<tr>
														<td><center><img src="http://support.thetravelsquare.in/img/airlines/air-asia-x-logo-the-travel-square.svg" height="50" width="100"></center></td>
														<td><center>Air Asia X</center></td>
														<td><center>D7</center></td>
                                                        <td><center>Malaysia</center></td>
														<td data-field="Status" class="kt-datatable__cell"><span style="width: 146px;"><center>
														<a href="https://www.airasia.co.in/manage-booking" rel="nofollow "target="_blank">
														<span class="kt-badge kt-badge--brand kt-badge--inline kt-badge--pill" style="background-color:black">WEB CHECK-IN</span></span></center></td></a>
                                                    </tr>
													
													<tr>
														<td><center><img src="http://support.thetravelsquare.in/img/airlines/austrian-airlines-logo-the-travel-square.svg" height="50" width="100"></center></td>
														<td><center>Austrian Airline</center></td>
														<td><center>OS</center></td>
                                                        <td><center>Austria</center></td>
														<td data-field="Status" class="kt-datatable__cell"><span style="width: 146px;"><center>
														<a href="https://www.austrian.com/de/en/login?deeplinkRedirect=true" rel="nofollow "target="_blank">
														<span class="kt-badge kt-badge--brand kt-badge--inline kt-badge--pill" style="background-color:black">WEB CHECK-IN</span></span></center></td></a>
                                                    </tr>
													
													<tr>
														<td><center><img src="http://support.thetravelsquare.in/img/airlines/aeroflot-airlines-logo-the-travel-square.svg" height="50" width="100"></center></td>
														<td><center>Aeroflot</center></td>
														<td><center>SU</center></td>
                                                        <td><center>Russia</center></td>
														<td data-field="Status" class="kt-datatable__cell"><span style="width: 146px;"><center>
														<a href="https://www.aeroflot.ru/sb/pnr/app/ru-en#/search?_k=73z2b7" rel="nofollow "target="_blank">
														<span class="kt-badge kt-badge--brand kt-badge--inline kt-badge--pill" style="background-color:black">WEB CHECK-IN</span></span></center></td></a>
                                                    </tr>
													
													<tr>
														<td><center><img src="http://support.thetravelsquare.in/img/airlines/air-new-zealand-logo-the-travel-square.svg" height="50" width="100"></center></td>
														<td><center>Air New Zealand</center></td>
														<td><center>NZ</center></td>
                                                        <td><center>New Zealand</center></td>
														<td data-field="Status" class="kt-datatable__cell"><span style="width: 146px;"><center>
														<a href="https://www.airnewzealand.co.nz/manage-bookings" rel="nofollow "target="_blank">
														<span class="kt-badge kt-badge--brand kt-badge--inline kt-badge--pill" style="background-color:black">WEB CHECK-IN</span></span></center></td></a>
                                                    </tr>
													
													<tr>
														<td><center><img src="http://support.thetravelsquare.in/img/airlines/air-serbia-logo-the-travel-square.svg" height="50" width="100"></center></td>
														<td><center>Air Serbia</center></td>
														<td><center>JU</center></td>
                                                        <td><center>Serbia</center></td>
														<td data-field="Status" class="kt-datatable__cell"><span style="width: 146px;"><center>
														<a href="https://www.airserbia.com/en#link-to-check-in" rel="nofollow "target="_blank">
														<span class="kt-badge kt-badge--brand kt-badge--inline kt-badge--pill" style="background-color:black">WEB CHECK-IN</span></span></center></td></a>
                                                    </tr>
													
													<tr>
														<td><center><img src="http://support.thetravelsquare.in/img/airlines/air-seychelles-logo-the-travel-square.svg" height="50" width="100"></center></td>
														<td><center>Air Seychelles</center></td>
														<td><center>HM</center></td>
                                                        <td><center>Seychelles</center></td>
														<td data-field="Status" class="kt-datatable__cell"><span style="width: 146px;"><center>
														<a href="https://www.airseychelles.com/" rel="nofollow "target="_blank">
														<span class="kt-badge kt-badge--brand kt-badge--inline kt-badge--pill" style="background-color:black">WEB CHECK-IN</span></span></center></td></a>
                                                    </tr>
													
													<tr>
														<td><center><img src="http://support.thetravelsquare.in/img/airlines/air-france-logo-the-travel-square.svg" height="50" width="100"></center></td>
														<td><center>Air France</center></td>
														<td><center>AF</center></td>
                                                        <td><center>France</center></td>
														<td data-field="Status" class="kt-datatable__cell"><span style="width: 146px;"><center>
														<a href="https://iran.airfrance.com/check-in" rel="nofollow "target="_blank">
														<span class="kt-badge kt-badge--brand kt-badge--inline kt-badge--pill" style="background-color:black">WEB CHECK-IN</span></span></center></td></a>
                                                    </tr>
													
													<tr>
														<td><center><img src="http://support.thetravelsquare.in/img/airlines/biman-airlines-logo-the-travel-square.svg" height="50" width="100"></center></td>
														<td><center>Biman Airlines</center></td>
														<td><center>BG</center></td>
                                                        <td><center>Bangladesh</center></td>
														<td data-field="Status" class="kt-datatable__cell"><span style="width: 146px;"><center>
														<a href="https://www.bimanholidays.com/booking/manage" rel="nofollow "target="_blank">
														<span class="kt-badge kt-badge--brand kt-badge--inline kt-badge--pill" style="background-color:black">WEB CHECK-IN</span></span></center></td></a>
                                                    </tr>
													
													<tr>
														<td><center><img src="http://support.thetravelsquare.in/img/airlines/brussels-airlines-logo-the-travel-square.svg" height="50" width="100"></center></td>
														<td><center>Brussels Air</center></td>
														<td><center>SN</center></td>
                                                        <td><center>Belgium</center></td>
														<td data-field="Status" class="kt-datatable__cell"><span style="width: 146px;"><center>
														<a href="https://www.brusselsairlines.com/be/en/my-bookings/retrieve-booking" rel="nofollow "target="_blank">
														<span class="kt-badge kt-badge--brand kt-badge--inline kt-badge--pill" style="background-color:black">WEB CHECK-IN</span></span></center></td></a>
                                                    </tr>
													
													<tr>
														<td><center><img src="http://support.thetravelsquare.in/img/airlines/british-airways-logo-the-travel-square.svg" height="50" width="100"></center></td>
														<td><center>British Airways</center></td>
														<td><center>BA</center></td>
                                                        <td><center>England, United Kingdom (UK)</center></td>
														<td data-field="Status" class="kt-datatable__cell"><span style="width: 146px;"><center>
														<a href="https://www.britishairways.com/travel/managebooking/public/en_us" rel="nofollow "target="_blank">
														<span class="kt-badge kt-badge--brand kt-badge--inline kt-badge--pill" style="background-color:black">WEB CHECK-IN</span></span></center></td></a>
                                                    </tr>
													
													<tr>
														<td><center><img src="http://support.thetravelsquare.in/img/airlines/bangkok-airways-logo-the-travel-square.svg" height="50" width="100"></center></td>
														<td><center>Bangkok Airways</center></td>
														<td><center>PG</center></td>
                                                        <td><center>Thailand</center></td>
														<td data-field="Status" class="kt-datatable__cell"><span style="width: 146px;"><center>
														<a href="https://www.bangkokair.com/managing-my-booking" rel="nofollow "target="_blank">
														<span class="kt-badge kt-badge--brand kt-badge--inline kt-badge--pill" style="background-color:black">WEB CHECK-IN</span></span></center></td></a>
                                                    </tr>
													
													<tr>
														<td><center><img src="http://support.thetravelsquare.in/img/airlines/cayman-airways-logo-the-travel-square.svg" height="50" width="100"></center></td>
														<td><center>Cayman Airways</center></td>
														<td><center>KX</center></td>
                                                        <td><center>Cayman Islands</center></td>
														<td data-field="Status" class="kt-datatable__cell"><span style="width: 146px;"><center>
														<a href="https://www.caymanairways.com/manage-my-bookings" rel="nofollow "target="_blank">
														<span class="kt-badge kt-badge--brand kt-badge--inline kt-badge--pill" style="background-color:black">WEB CHECK-IN</span></span></center></td></a>
                                                    </tr>
													
													<tr>
														<td><center><img src="http://support.thetravelsquare.in/img/airlines/china-eastern-airlines-logo-the-travel-square.svg" height="50" width="100"></center></td>
														<td><center>China Eastern</center></td>
														<td><center>MU</center></td>
                                                        <td><center>China</center></td>
														<td data-field="Status" class="kt-datatable__cell"><span style="width: 146px;"><center>
														<a href="https://de.ceair.com/en/manage-booking.html" rel="nofollow "target="_blank">
														<span class="kt-badge kt-badge--brand kt-badge--inline kt-badge--pill" style="background-color:black">WEB CHECK-IN</span></span></center></td></a>
                                                    </tr>
													
													<tr>
														<td><center><img src="http://support.thetravelsquare.in/img/airlines/china-southern-airlines-logo-the-travel-square.svg" height="50" width="100"></center></td>
														<td><center>China Southern</center></td>
														<td><center>CZ</center></td>
                                                        <td><center>China</center></td>
														<td data-field="Status" class="kt-datatable__cell"><span style="width: 146px;"><center>
														<a href="https://global.csair.com/TZ/GB/manage-trip" rel="nofollow "target="_blank">
														<span class="kt-badge kt-badge--brand kt-badge--inline kt-badge--pill" style="background-color:black">WEB CHECK-IN</span></span></center></td></a>
                                                    </tr>
													
													<tr>
														<td><center><img src="http://support.thetravelsquare.in/img/airlines/copa-airlines-logo-the-travel-square.svg" height="50" width="100"></center></td>
														<td><center>Copa Air</center></td>
														<td><center>CM</center></td>
                                                        <td><center>Panama</center></td>
														<td data-field="Status" class="kt-datatable__cell"><span style="width: 146px;"><center>
														<a href="https://mytrips.copaair.com/" rel="nofollow "target="_blank">
														<span class="kt-badge kt-badge--brand kt-badge--inline kt-badge--pill" style="background-color:black">WEB CHECK-IN</span></span></center></td></a>
                                                    </tr>
													
													<tr>
														<td><center><img src="http://support.thetravelsquare.in/img/airlines/cathay-pacific-logo-the-travel-square.svg" height="50" width="100"></center></td>
														<td><center>Cathay Pacific</center></td>
														<td><center>CX</center></td>
                                                        <td><center>Hong Kong</center></td>
														<td data-field="Status" class="kt-datatable__cell"><span style="width: 146px;"><center>
														<a href="https://www.cathaypacific.com/mb/#/en_HK/login" rel="nofollow "target="_blank">
														<span class="kt-badge kt-badge--brand kt-badge--inline kt-badge--pill" style="background-color:black">WEB CHECK-IN</span></span></center></td></a>
                                                    </tr>
													
													<tr>
														<td><center><img src="http://support.thetravelsquare.in/img/airlines/croatia-airlines-logo-the-travel-square.svg" height="50" width="100"></center></td>
														<td><center>Crotia Airlines</center></td>
														<td><center>OU</center></td>
                                                        <td><center>Crotia</center></td>
														<td data-field="Status" class="kt-datatable__cell"><span style="width: 146px;"><center>
														<a href="https://wci.croatiaairlines.hr/web?languageChange=true&l=en&_t=1613130122#ck_retrieve" rel="nofollow "target="_blank">
														<span class="kt-badge kt-badge--brand kt-badge--inline kt-badge--pill" style="background-color:black">WEB CHECK-IN</span></span></center></td></a>
                                                    </tr>
													
													<tr>
														<td><center><img src="http://support.thetravelsquare.in/img/airlines/delta-airlines-logo-the-travel-square.svg" height="50" width="100"></center></td>
														<td><center>Delta Airlines</center></td>
														<td><center>DL</center></td>
                                                        <td><center>United States of America (USA)</center></td>
														<td data-field="Status" class="kt-datatable__cell"><span style="width: 146px;"><center>
														<a href="https://manageairlinesbooking.com/manage-booking/delta-airlines/" rel="nofollow "target="_blank">
														<span class="kt-badge kt-badge--brand kt-badge--inline kt-badge--pill" style="background-color:black">WEB CHECK-IN</span></span></center></td></a>
                                                    </tr>
													
													<tr>
														<td><center><img src="http://support.thetravelsquare.in/img/airlines/etihad-airways-logo-the-travel-square.svg" height="50" width="100"></center></td>
														<td><center>Etihad Airlines</center></td>
														<td><center>EY</center></td>
                                                        <td><center>United Arab Emirates (UAE)</center></td>
														<td data-field="Status" class="kt-datatable__cell"><span style="width: 146px;"><center>
														<a href="https://www.etihad.com/en-in/manage" rel="nofollow "target="_blank">
														<span class="kt-badge kt-badge--brand kt-badge--inline kt-badge--pill" style="background-color:black">WEB CHECK-IN</span></span></center></td></a>
                                                    </tr>
													
													<tr>
														<td><center><img src="http://support.thetravelsquare.in/img/airlines/envoy-air-logo-the-travel-square.svg" height="50" width="100"></center></td>
														<td><center>Envoy Air</center></td>
														<td><center>MQ</center></td>
                                                        <td><center>United States of America (USA)</center></td>
														<td data-field="Status" class="kt-datatable__cell"><span style="width: 146px;"><center>
														<a href="https://treknova.com/travel-advice/manage-booking/envoy-air/" rel="nofollow "target="_blank">
														<span class="kt-badge kt-badge--brand kt-badge--inline kt-badge--pill" style="background-color:black">WEB CHECK-IN</span></span></center></td></a>
                                                    </tr>
													
													<tr>
														<td><center><img src="http://support.thetravelsquare.in/img/airlines/emirates-airlines-logo-the-travel-square.svg" height="50" width="100"></center></td>
														<td><center>Emirates</center></td>
														<td><center>EK</center></td>
                                                        <td><center>A</center></td>
														<td data-field="Status" class="kt-datatable__cell"><span style="width: 146px;"><center>
														<a href="https://www.emirates.com/in/english/manage-booking/" rel="nofollow "target="_blank">
														<span class="kt-badge kt-badge--brand kt-badge--inline kt-badge--pill" style="background-color:black">WEB CHECK-IN</span></span></center></td></a>
                                                    </tr>
													
													<tr>
														<td><center><img src="http://support.thetravelsquare.in/img/airlines/ethiopian-air-logo-the-travel-square.svg" height="50" width="100"></center></td>
														<td><center>Ethopian Airlines</center></td>
														<td><center>ET</center></td>
                                                        <td><center>Ethiopia</center></td>
														<td data-field="Status" class="kt-datatable__cell"><span style="width: 146px;"><center>
														<a href="https://www.ethiopianairlines.com/aa" rel="nofollow "target="_blank">
														<span class="kt-badge kt-badge--brand kt-badge--inline kt-badge--pill" style="background-color:black">WEB CHECK-IN</span></span></center></td></a>
                                                    </tr>
													
													<tr>
														<td><center><img src="http://support.thetravelsquare.in/img/airlines/egypt-air-logo-the-travel-square.svg" height="50" width="100"></center></td>
														<td><center>Egypt Air</center></td>
														<td><center>MS</center></td>
                                                        <td><center>Egypt</center></td>
														<td data-field="Status" class="kt-datatable__cell"><span style="width: 146px;"><center>
														<a href="https://www.egyptair.com/en/Pages/HomePage.aspx" rel="nofollow "target="_blank">
														<span class="kt-badge kt-badge--brand kt-badge--inline kt-badge--pill" style="background-color:black">WEB CHECK-IN</span></span></center></td></a>
                                                    </tr>
													
													<tr>
														<td><center><img src="http://support.thetravelsquare.in/img/airlines/eva-air-logo-the-travel-square.svg" height="50" width="100"></center></td>
														<td><center>Eva Air</center></td>
														<td><center>BR</center></td>
                                                        <td><center>Taiwanese</center></td>
														<td data-field="Status" class="kt-datatable__cell"><span style="width: 146px;"><center>
														<a href="https://booking.evaair.com/flyeva/eva/b2c/manage-your-trip/log_in.aspx?lang=en-US" rel="nofollow "target="_blank">
														<span class="kt-badge kt-badge--brand kt-badge--inline kt-badge--pill" style="background-color:black">WEB CHECK-IN</span></span></center></td></a>
                                                    </tr>
													
													<tr>
														<td><center><img src="http://support.thetravelsquare.in/img/airlines/fly-dubai-logo-the-travel-square.svg" height="50" width="100"></center></td>
														<td><center>Fly Dubai</center></td>
														<td><center>FZ</center></td>
                                                        <td><center>United Arab Emirates (UAE)</center></td>
														<td data-field="Status" class="kt-datatable__cell"><span style="width: 146px;"><center>
														<a href="https://www.flydubai.com/en/plan/manage-booking" rel="nofollow "target="_blank">
														<span class="kt-badge kt-badge--brand kt-badge--inline kt-badge--pill" style="background-color:black">WEB CHECK-IN</span></span></center></td></a>
                                                    </tr>
													
													<tr>
														<td><center><img src="http://support.thetravelsquare.in/img/airlines/finnair-logo-the-travel-square.svg" height="50" width="100"></center></td>
														<td><center>Finn Air</center></td>
														<td><center>AY</center></td>
                                                        <td><center>Finland</center></td>
														<td data-field="Status" class="kt-datatable__cell"><span style="width: 146px;"><center>
														<a href="https://www.finnair.com/en/manage" rel="nofollow "target="_blank">
														<span class="kt-badge kt-badge--brand kt-badge--inline kt-badge--pill" style="background-color:black">WEB CHECK-IN</span></span></center></td></a>
                                                    </tr>
													
													<tr>
														<td><center><img src="http://support.thetravelsquare.in/img/airlines/garuda-indonesia-logo-the-travel-square.svg" height="50" width="100"></center></td>
														<td><center>Gaurda Indonesia</center></td>
														<td><center>GA</center></td>
                                                        <td><center>Indonesia</center></td>
														<td data-field="Status" class="kt-datatable__cell"><span style="width: 146px;"><center>
														<a href="https://www.garuda-indonesia.com/sg/en/index" rel="nofollow "target="_blank">
														<span class="kt-badge kt-badge--brand kt-badge--inline kt-badge--pill" style="background-color:black">WEB CHECK-IN</span></span></center></td></a>
                                                    </tr>
													
													<tr>
														<td><center><img src="http://support.thetravelsquare.in/img/airlines/gulf-air-logo-the-travel-square.svg" height="50" width="100"></center></td>
														<td><center>Gulf Air</center></td>
														<td><center>GF</center></td>
                                                        <td><center>Bahrain</center></td>
														<td data-field="Status" class="kt-datatable__cell"><span style="width: 146px;"><center>
														<a href="https://www.gulfair.com/manage-my-booking" rel="nofollow "target="_blank">
														<span class="kt-badge kt-badge--brand kt-badge--inline kt-badge--pill" style="background-color:black">WEB CHECK-IN</span></span></center></td></a>
                                                    </tr>
													
													<tr>
														<td><center><img src="http://support.thetravelsquare.in/img/airlines/go-first-logo-the-travel-square.jpg" height="50" width="100"></center></td>
														<td><center>Go First / Go Air</center></td>
														<td><center>G8</center></td>
                                                        <td><center>India</center></td>
														<td data-field="Status" class="kt-datatable__cell"><span style="width: 146px;"><center>
														<a href="https://www.flygofirst.com/plan-my-trip/manage-booking/" rel="nofollow "target="_blank">
														<span class="kt-badge kt-badge--brand kt-badge--inline kt-badge--pill" style="background-color:black">WEB CHECK-IN</span></span></center></td></a>
                                                    </tr>
													
													<tr>
														<td><center><img src="http://support.thetravelsquare.in/img/airlines/hahn-air-logo-the-travel-square.svg" height="50" width="100"></center></td>
														<td><center>Hahn Air</center></td>
														<td><center>H1</center></td>
                                                        <td><center>Germany</center></td>
														<td data-field="Status" class="kt-datatable__cell"><span style="width: 146px;"><center>
														<a href="https://www.hahnair.com/en/travel-details" rel="nofollow "target="_blank">
														<span class="kt-badge kt-badge--brand kt-badge--inline kt-badge--pill" style="background-color:black">WEB CHECK-IN</span></span></center></td></a>
                                                    </tr>
													
													<tr>
														<td><center><img src="http://support.thetravelsquare.in/img/airlines/indigo-airlines-logo-the-travel-square.svg" height="50" width="100"></center></td>
														<td><center>Indigo Airlines</center></td>
														<td><center>6E</center></td>
                                                        <td><center>India</center></td>
														<td data-field="Status" class="kt-datatable__cell"><span style="width: 146px;"><center>
														<a href="https://www.goindigo.in/edit-booking.html?linkNav=edit-booking_header" rel="nofollow "target="_blank">
														<span class="kt-badge kt-badge--brand kt-badge--inline kt-badge--pill" style="background-color:black">WEB CHECK-IN</span></span></center></td></a>
                                                    </tr>
													
													<tr>
														<td><center><img src="http://support.thetravelsquare.in/img/airlines/japan-airlines-logo-the-travel-square.svg" height="50" width="100"></center></td>
														<td><center>Japan Airlines</center></td>
														<td><center>JL</center></td>
                                                        <td><center>Japan</center></td>
														<td data-field="Status" class="kt-datatable__cell"><span style="width: 146px;"><center>
														<a href="https://www.jal.co.jp/jp/en/inter/change/" rel="nofollow "target="_blank">
														<span class="kt-badge kt-badge--brand kt-badge--inline kt-badge--pill" style="background-color:black">WEB CHECK-IN</span></span></center></td></a>
                                                    </tr>
													
													<tr>
														<td><center><img src="http://support.thetravelsquare.in/img/airlines/Jazeera-airways-logo-the-travel-square.svg" height="50" width="100"></center></td>
														<td><center>Jazeera Airways</center></td>
														<td><center>J9</center></td>
                                                        <td><center>Kuwait</center></td>
														<td data-field="Status" class="kt-datatable__cell"><span style="width: 146px;"><center>
														<a href="https://www.jazeeraairways.com/en-in#manage-booking" rel="nofollow "target="_blank">
														<span class="kt-badge kt-badge--brand kt-badge--inline kt-badge--pill" style="background-color:black">WEB CHECK-IN</span></span></center></td></a>
                                                    </tr>
													
													<tr>
														<td><center><img src="http://support.thetravelsquare.in/img/airlines/jet-airways-logo-the-travel-square.svg" height="50" width="100"></center></td>
														<td><center>Jet Airways</center></td>
														<td><center>9W</center></td>
                                                        <td><center>India</center></td>
														<td data-field="Status" class="kt-datatable__cell"><span style="width: 146px;"><center>
														<a href="https://www.jetairways.com/" rel="nofollow "target="_blank">
														<span class="kt-badge kt-badge--brand kt-badge--inline kt-badge--pill" style="background-color:black">WEB CHECK-IN</span></span></center></td></a>
                                                    </tr>
													
													<tr>
														<td><center><img src="http://support.thetravelsquare.in/img/airlines/jetblue-logo-the-travel-square.svg" height="50" width="100"></center></td>
														<td><center>JetBlue</center></td>
														<td><center>B6</center></td>
                                                        <td><center>United States of America (USA)</center></td>
														<td data-field="Status" class="kt-datatable__cell"><span style="width: 146px;"><center>
														<a href="https://www.jetblue.com/manage-trips" rel="nofollow "target="_blank">
														<span class="kt-badge kt-badge--brand kt-badge--inline kt-badge--pill" style="background-color:black">WEB CHECK-IN</span></span></center></td></a>
                                                    </tr>
													
													<tr>
														<td><center><img src="http://support.thetravelsquare.in/img/airlines/jetstar-airways-logo-the-travel-square.svg" height="50" width="100"></center></td>
														<td><center>Jetstar Airways</center></td>
														<td><center>JQ</center></td>
                                                        <td><center>Australia</center></td>
														<td data-field="Status" class="kt-datatable__cell"><span style="width: 146px;"><center>
														<a href="https://booking.jetstar.com/mmb/#/login" rel="nofollow "target="_blank">
														<span class="kt-badge kt-badge--brand kt-badge--inline kt-badge--pill" style="background-color:black">WEB CHECK-IN</span></span></center></td></a>
                                                    </tr>
													
													<tr>
														<td><center><img src="http://support.thetravelsquare.in/img/airlines/kenya-airways-logo-the-travel-square.svg" height="50" width="100"></center></td>
														<td><center>Kenya Airways</center></td>
														<td><center>KQ</center></td>
                                                        <td><center>Kenya</center></td>
														<td data-field="Status" class="kt-datatable__cell"><span style="width: 146px;"><center>
														<a href="https://www.kenya-airways.com/prepare-for-travel/manage-booking/en/" rel="nofollow "target="_blank">
														<span class="kt-badge kt-badge--brand kt-badge--inline kt-badge--pill" style="background-color:black">WEB CHECK-IN</span></span></center></td></a>
                                                    </tr>
													
													<tr>
														<td><center><img src="http://support.thetravelsquare.in/img/airlines/klm-logo-the-travel-square.svg" height="50" width="100"></center></td>
														<td><center>KLM Airlines</center></td>
														<td><center>KL</center></td>
                                                        <td><center>France</center></td>
														<td data-field="Status" class="kt-datatable__cell"><span style="width: 146px;"><center>
														<a href="https://www.klm.co.in/check-in" rel="nofollow "target="_blank">
														<span class="kt-badge kt-badge--brand kt-badge--inline kt-badge--pill" style="background-color:black">WEB CHECK-IN</span></span></center></td></a>
                                                    </tr>
													
													<tr>
														<td><center><img src="http://support.thetravelsquare.in/img/airlines/kuwait-airways-logo-the-travel-square.svg" height="50" width="100"></center></td>
														<td><center>Kuwait Airways</center></td>
														<td><center>KU</center></td>
                                                        <td><center>Kuwait</center></td>
														<td data-field="Status" class="kt-datatable__cell"><span style="width: 146px;"><center>
														<a href="https://www.kuwaitairways.com/en/manage-booking" rel="nofollow "target="_blank">
														<span class="kt-badge kt-badge--brand kt-badge--inline kt-badge--pill" style="background-color:black">WEB CHECK-IN</span></span></center></td></a>
                                                    </tr>
													
													<tr>
														<td><center><img src="http://support.thetravelsquare.in/img/airlines/latam-airline-logo-the-travel-square.svg" height="50" width="100"></center></td>
														<td><center>Latam Airlines</center></td>
														<td><center>LA</center></td>
                                                        <td><center>Chile</center></td>
														<td data-field="Status" class="kt-datatable__cell"><span style="width: 146px;"><center>
														<a href="https://www.latamairlines.com/nz/en/flight-status" rel="nofollow "target="_blank">
														<span class="kt-badge kt-badge--brand kt-badge--inline kt-badge--pill" style="background-color:black">WEB CHECK-IN</span></span></center></td></a>
                                                    </tr>
													
													<tr>
														<td><center><img src="http://support.thetravelsquare.in/img/airlines/lion-air-logo-the-travel-square.svg" height="50" width="100"></center></td>
														<td><center>Lion Air</center></td>
														<td><center>SL</center></td>
                                                        <td><center>Indonesia</center></td>
														<td data-field="Status" class="kt-datatable__cell"><span style="width: 146px;"><center>
														<a href="https://secure2.lionair.co.id/LionAirMMB2/" rel="nofollow "target="_blank">
														<span class="kt-badge kt-badge--brand kt-badge--inline kt-badge--pill" style="background-color:black">WEB CHECK-IN</span></span></center></td></a>
                                                    </tr>
													
													<tr>
														<td><center><img src="http://support.thetravelsquare.in/img/airlines/lot-polish-airlines-logo-the-travel-square.svg" height="50" width="100"></center></td>
														<td><center>LOT Polish Airlines</center></td>
														<td><center>LO</center></td>
                                                        <td><center>Poland</center></td>
														<td data-field="Status" class="kt-datatable__cell"><span style="width: 146px;"><center>
														<a href="https://www.lot.com/pl/en/my-reservation" rel="nofollow "target="_blank">
														<span class="kt-badge kt-badge--brand kt-badge--inline kt-badge--pill" style="background-color:black">WEB CHECK-IN</span></span></center></td></a>
                                                    </tr>
													
													<tr>
														<td><center><img src="http://support.thetravelsquare.in/img/airlines/lufthansa-logo-the-travel-square.svg" height="50" width="100"></center></td>
														<td><center>Lufthansa</center></td>
														<td><center>LH</center></td>
                                                        <td><center>Germany</center></td>
														<td data-field="Status" class="kt-datatable__cell"><span style="width: 146px;"><center>
														<a href="https://www.lufthansa.com/us/en/online-check-in" rel="nofollow "target="_blank">
														<span class="kt-badge kt-badge--brand kt-badge--inline kt-badge--pill" style="background-color:black">WEB CHECK-IN</span></span></center></td></a>
                                                    </tr>
													
													<tr>
														<td><center><img src="http://support.thetravelsquare.in/img/airlines/malaysia-airlines-logo-the-travel-square.svg" height="50" width="100"></center></td>
														<td><center>Malaysian Airlines</center></td>
														<td><center>MH</center></td>
                                                        <td><center>Malaysia</center></td>
														<td data-field="Status" class="kt-datatable__cell"><span style="width: 146px;"><center>
														<a href="https://www.malaysiaairlines.com/hq/en/plan-your-trip/manage-my-booking.html" rel="nofollow "target="_blank">
														<span class="kt-badge kt-badge--brand kt-badge--inline kt-badge--pill" style="background-color:black">WEB CHECK-IN</span></span></center></td></a>
                                                    </tr>
													
													<tr>
														<td><center><img src="http://support.thetravelsquare.in/img/airlines/malindo-air-logo-the-travel-square.svg" height="50" width="100"></center></td>
														<td><center>Malindo Air / Batik Air</center></td>
														<td><center>OD</center></td>
                                                        <td><center>Malaysia</center></td>
														<td data-field="Status" class="kt-datatable__cell"><span style="width: 146px;"><center>
														<a href="https://www.malindoair.com/malindoair-home/manage-my-booking" rel="nofollow "target="_blank">
														<span class="kt-badge kt-badge--brand kt-badge--inline kt-badge--pill" style="background-color:black">WEB CHECK-IN</span></span></center></td></a>
                                                    </tr>
													
													<tr>
														<td><center><img src="http://support.thetravelsquare.in/img/airlines/middle-east-airlines-logo-the-travel-square.svg" height="50" width="100"></center></td>
														<td><center>Middle East Airlines</center></td>
														<td><center>ME</center></td>
                                                        <td><center>Lebanon</center></td>
														<td data-field="Status" class="kt-datatable__cell"><span style="width: 146px;"><center>
														<a href="https://www.mea.com.lb/english/plan-and-book/manage-booking" rel="nofollow "target="_blank">
														<span class="kt-badge kt-badge--brand kt-badge--inline kt-badge--pill" style="background-color:black">WEB CHECK-IN</span></span></center></td></a>
                                                    </tr>
													
													<tr>
														<td><center><img src="http://support.thetravelsquare.in/img/airlines/nok-air-logo-the-travel-square.svg" height="50" width="100"></center></td>
														<td><center>Nok Air</center></td>
														<td><center>DD</center></td>
                                                        <td><center>Thailand</center></td>
														<td data-field="Status" class="kt-datatable__cell"><span style="width: 146px;"><center>
														<a href="https://booking.nokair.com/en/manage" rel="nofollow "target="_blank">
														<span class="kt-badge kt-badge--brand kt-badge--inline kt-badge--pill" style="background-color:black">WEB CHECK-IN</span></span></center></td></a>
                                                    </tr>
													
													<tr>
														<td><center><img src="http://support.thetravelsquare.in/img/airlines/oman-air-logo-the-travel-square.svg" height="50" width="100"></center></td>
														<td><center>Oman Air</center></td>
														<td><center>WY</center></td>
                                                        <td><center>Oman</center></td>
														<td data-field="Status" class="kt-datatable__cell"><span style="width: 146px;"><center>
														<a href="https://www.omanair.com/in/en" rel="nofollow "target="_blank">
														<span class="kt-badge kt-badge--brand kt-badge--inline kt-badge--pill" style="background-color:black">WEB CHECK-IN</span></span></center></td></a>
                                                    </tr>
													
													<tr>
														<td><center><img src="http://support.thetravelsquare.in/img/airlines/pegasus-airlines-logo-the-travel-square.svg" height="50" width="100"></center></td>
														<td><center>Pegasus Airline</center></td>
														<td><center>PC</center></td>
                                                        <td><center>Turkey</center></td>
														<td data-field="Status" class="kt-datatable__cell"><span style="width: 146px;"><center>
														<a href="https://www.flypgs.com/en/manage-my-booking" rel="nofollow "target="_blank">
														<span class="kt-badge kt-badge--brand kt-badge--inline kt-badge--pill" style="background-color:black">WEB CHECK-IN</span></span></center></td></a>
                                                    </tr>
													
													<tr>
														<td><center><img src="http://support.thetravelsquare.in/img/airlines/philippine-airlines-logo-the-travel-square.svg" height="50" width="100"></center></td>
														<td><center>Philippine Airlines</center></td>
														<td><center>PR</center></td>
                                                        <td><center>Philippine </center></td>
														<td data-field="Status" class="kt-datatable__cell"><span style="width: 146px;"><center>
														<a href="https://www.philippineairlines.com/en" rel="nofollow "target="_blank">
														<span class="kt-badge kt-badge--brand kt-badge--inline kt-badge--pill" style="background-color:black">WEB CHECK-IN</span></span></center></td></a>
                                                    </tr>
													
													<tr>
														<td><center><img src="http://support.thetravelsquare.in/img/airlines/qantas-logo-the-travel-square.svg" height="50" width="100"></center></td>
														<td><center>Qantas Airline</center></td>
														<td><center>QF</center></td>
                                                        <td><center>Australia</center></td>
														<td data-field="Status" class="kt-datatable__cell"><span style="width: 146px;"><center>
														<a href="https://www.qantas.com/in/en/manage-booking.html" rel="nofollow "target="_blank">
														<span class="kt-badge kt-badge--brand kt-badge--inline kt-badge--pill" style="background-color:black">WEB CHECK-IN</span></span></center></td></a>
                                                    </tr>
													
													<tr>
														<td><center><img src="http://support.thetravelsquare.in/img/airlines/qatar-airways-logo-the-travel-square.svg" height="50" width="100"></center></td>
														<td><center>Qatar Airways</center></td>
														<td><center>QR</center></td>
                                                        <td><center>Qatar</center></td>
														<td data-field="Status" class="kt-datatable__cell"><span style="width: 146px;"><center>
														<a href="https://booking.qatarairways.com/nsp/views/retrievePnr.xhtml" rel="nofollow "target="_blank">
														<span class="kt-badge kt-badge--brand kt-badge--inline kt-badge--pill" style="background-color:black">WEB CHECK-IN</span></span></center></td></a>
                                                    </tr>
													
													<tr>
														<td><center><img src="http://support.thetravelsquare.in/img/airlines/royal-jordanian-logo-the-travel-square.svg" height="50" width="100"></center></td>
														<td><center>Royal Jordanian</center></td>
														<td><center>RJ</center></td>
                                                        <td><center>Jordan</center></td>
														<td data-field="Status" class="kt-datatable__cell"><span style="width: 146px;"><center>
														<a href="https://rj.com/en/info-and-tips/check-in-options/online-check-in" rel="nofollow "target="_blank">
														<span class="kt-badge kt-badge--brand kt-badge--inline kt-badge--pill" style="background-color:black">WEB CHECK-IN</span></span></center></td></a>
                                                    </tr>
													
													<tr>
														<td><center><img src="http://support.thetravelsquare.in/img/airlines/royal-nepal-airlines-logo-the-travel-square.svg" height="50" width="100"></center></td>
														<td><center>Royal Nepal Airlines</center></td>
														<td><center>RA</center></td>
                                                        <td><center>Nepal</center></td>
														<td data-field="Status" class="kt-datatable__cell"><span style="width: 146px;"><center>
														<a href="https://rj.com/en/info-and-tips/check-in-options/online-check-in" rel="nofollow "target="_blank">
														<span class="kt-badge kt-badge--brand kt-badge--inline kt-badge--pill" style="background-color:black">WEB CHECK-IN</span></span></center></td></a>
                                                    </tr>
													
													<tr>
														<td><center><img src="http://support.thetravelsquare.in/img/airlines/ryan-air-logo-the-travel-square.svg" height="50" width="100"></center></td>
														<td><center>Ryan Air</center></td>
														<td><center>FR</center></td>
                                                        <td><center>Ireland</center></td>
														<td data-field="Status" class="kt-datatable__cell"><span style="width: 146px;"><center>
														<a href="https://www.ryanair.com/sr/en/manage-my-booking" rel="nofollow "target="_blank">
														<span class="kt-badge kt-badge--brand kt-badge--inline kt-badge--pill" style="background-color:black">WEB CHECK-IN</span></span></center></td></a>
                                                    </tr>
													
													<tr>
														<td><center><img src="http://support.thetravelsquare.in/img/airlines/sas-logo-the-travel-square.svg" height="50" width="100"></center></td>
														<td><center>Scandinavian Airlines (SAS)</center></td>
														<td><center>SK</center></td>
                                                        <td><center>Denmark, Sweden, Norway</center></td>
														<td data-field="Status" class="kt-datatable__cell"><span style="width: 146px;"><center>
														<a href="https://www.flysas.com/en/corporatemanagebooking" rel="nofollow "target="_blank">
														<span class="kt-badge kt-badge--brand kt-badge--inline kt-badge--pill" style="background-color:black">WEB CHECK-IN</span></span></center></td></a>
                                                    </tr>
													
													<tr>
														<td><center><img src="http://support.thetravelsquare.in/img/airlines/sata-air-logo-the-travel-square.svg" height="50" width="100"></center></td>
														<td><center>SATA Air</center></td>
														<td><center>S4</center></td>
                                                        <td><center>Portugal</center></td>
														<td data-field="Status" class="kt-datatable__cell"><span style="width: 146px;"><center>
														<a href="https://www.azoresairlines.pt/en/before-boarding/check-in" rel="nofollow "target="_blank">
														<span class="kt-badge kt-badge--brand kt-badge--inline kt-badge--pill" style="background-color:black">WEB CHECK-IN</span></span></center></td></a>
                                                    </tr>
													
													<tr>
														<td><center><img src="http://support.thetravelsquare.in/img/airlines/saudia-airlines-logo-the-travel-square.svg" height="50" width="100"></center></td>
														<td><center>Saudi Airlines</center></td>
														<td><center>SV</center></td>
                                                        <td><center>Saudi Arabia</center></td>
														<td data-field="Status" class="kt-datatable__cell"><span style="width: 146px;"><center>
														<a href="https://www.saudia.com/travel-with-saudia/manage/manage-my-booking?sv_lang=en&sv_cn=IN" rel="nofollow "target="_blank">
														<span class="kt-badge kt-badge--brand kt-badge--inline kt-badge--pill" style="background-color:black">WEB CHECK-IN</span></span></center></td></a>
                                                    </tr>
													
													<tr>
														<td><center><img src="http://support.thetravelsquare.in/img/airlines/scoot-logo-the-travel-square.svg" height="50" width="100"></center></td>
														<td><center>Scoot Air</center></td>
														<td><center>TR</center></td>
                                                        <td><center>Singapore</center></td>
														<td data-field="Status" class="kt-datatable__cell"><span style="width: 146px;"><center>
														<a href="https://makeabooking.flyscoot.com/manage" rel="nofollow "target="_blank">
														<span class="kt-badge kt-badge--brand kt-badge--inline kt-badge--pill" style="background-color:black">WEB CHECK-IN</span></span></center></td></a>
                                                    </tr>
													
													<tr>
														<td><center><img src="http://support.thetravelsquare.in/img/airlines/singapore-airlines-logo-the-travel-square.svg" height="50" width="100"></center></td>
														<td><center>Singapore Airlines</center></td>
														<td><center>SQ</center></td>
                                                        <td><center>Singapore</center></td>
														<td data-field="Status" class="kt-datatable__cell"><span style="width: 146px;"><center>
														<a href="https://www.singaporeair.com/en_UK/in/plan-travel/your-booking/managebooking/" rel="nofollow "target="_blank">
														<span class="kt-badge kt-badge--brand kt-badge--inline kt-badge--pill" style="background-color:black">WEB CHECK-IN</span></span></center></td></a>
                                                    </tr>
													
													<tr>
														<td><center><img src="http://support.thetravelsquare.in/img/airlines/south-african-airways-logo-the-travel-square.svg" height="50" width="100"></center></td>
														<td><center>South Afrian Airways</center></td>
														<td><center>SA</center></td>
                                                        <td><center>South Africa</center></td>
														<td data-field="Status" class="kt-datatable__cell"><span style="width: 146px;"><center>
														<a href="https://www.flysaa.com/manage-fly/manage" rel="nofollow "target="_blank">
														<span class="kt-badge kt-badge--brand kt-badge--inline kt-badge--pill" style="background-color:black">WEB CHECK-IN</span></span></center></td></a>
                                                    </tr>
													
													<tr>
														<td><center><img src="http://support.thetravelsquare.in/img/airlines/southwest-airlines-logo-the-travel-square.svg" height="50" width="100"></center></td>
														<td><center>Southwest Airlines</center></td>
														<td><center>WN</center></td>
                                                        <td><center>United States of America (USA)</center></td>
														<td data-field="Status" class="kt-datatable__cell"><span style="width: 146px;"><center>
														<a href="https://www.southwest.com/air/manage-reservation/index.html?redirect&validate=true" rel="nofollow "target="_blank">
														<span class="kt-badge kt-badge--brand kt-badge--inline kt-badge--pill" style="background-color:black">WEB CHECK-IN</span></span></center></td></a>
                                                    </tr>
													
													<tr>
														<td><center><img src="http://support.thetravelsquare.in/img/airlines/spirit-airlines-logo-the-travel-square.svg" height="50" width="100"></center></td>
														<td><center>Spirit Airlines</center></td>
														<td><center>NK</center></td>
                                                        <td><center>United States of America (USA)</center></td>
														<td data-field="Status" class="kt-datatable__cell"><span style="width: 146px;"><center>
														<a href="https://www.spirit.com/" rel="nofollow "target="_blank">
														<span class="kt-badge kt-badge--brand kt-badge--inline kt-badge--pill" style="background-color:black">WEB CHECK-IN</span></span></center></td></a>
                                                    </tr>
													
													<tr>
														<td><center><img src="http://support.thetravelsquare.in/img/airlines/sri-lankan-airlines-logo-the-travel-square.svg" height="50" width="100"></center></td>
														<td><center>Sri Lankan Airlines</center></td>
														<td><center>UL</center></td>
                                                        <td><center>Sri Lanka</center></td>
														<td data-field="Status" class="kt-datatable__cell"><span style="width: 146px;"><center>
														<a href="https://www.srilankan.com/en_uk/plan-and-book/manage-your-booking" rel="nofollow "target="_blank">
														<span class="kt-badge kt-badge--brand kt-badge--inline kt-badge--pill" style="background-color:black">WEB CHECK-IN</span></span></center></td></a>
                                                    </tr>
													
													<tr>
														<td><center><img src="http://support.thetravelsquare.in/img/airlines/swiss-international-airlines-logo-the-travel-square.svg" height="50" width="100"></center></td>
														<td><center>Swiss International Airlines</center></td>
														<td><center>LX</center></td>
                                                        <td><center>Switzerland</center></td>
														<td data-field="Status" class="kt-datatable__cell"><span style="width: 146px;"><center>
														<a href="https://www.swiss.com/content/lx/markets/ch/en/profile/login?deeplinkRedirect=true#" rel="nofollow "target="_blank">
														<span class="kt-badge kt-badge--brand kt-badge--inline kt-badge--pill" style="background-color:black">WEB CHECK-IN</span></span></center></td></a>
                                                    </tr>
													
													<tr>
														<td><center><img src="http://support.thetravelsquare.in/img/airlines/spicejet-logo-the-travel-square.svg" height="50" width="100"></center></td>
														<td><center>Spice Jet</center></td>
														<td><center>SG</center></td>
                                                        <td><center>India</center></td>
														<td data-field="Status" class="kt-datatable__cell"><span style="width: 146px;"><center>
														<a href="https://book.spicejet.com/retrievebooking.aspx" rel="nofollow "target="_blank">
														<span class="kt-badge kt-badge--brand kt-badge--inline kt-badge--pill" style="background-color:black">WEB CHECK-IN</span></span></center></td></a>
                                                    </tr>
													
													<tr>
														<td><center><img src="http://support.thetravelsquare.in/img/airlines/tap-air-portugal-logo-the-travel-square.svg" height="50" width="100"></center></td>
														<td><center>TAP Air Portugal</center></td>
														<td><center>TP</center></td>
                                                        <td><center>Portugal</center></td>
														<td data-field="Status" class="kt-datatable__cell"><span style="width: 146px;"><center>
														<a href="https://www.flytap.com/en-gh/manage-booking-flight" rel="nofollow "target="_blank">
														<span class="kt-badge kt-badge--brand kt-badge--inline kt-badge--pill" style="background-color:black">WEB CHECK-IN</span></span></center></td></a>
                                                    </tr>
													
													<tr>
														<td><center><img src="http://support.thetravelsquare.in/img/airlines/turkish-airlines-logo-the-travel-square.svg" height="50" width="100"></center></td>
														<td><center>Turkish Airlines</center></td>
														<td><center>TK</center></td>
                                                        <td><center>Turkey</center></td>
														<td data-field="Status" class="kt-datatable__cell"><span style="width: 146px;"><center>
														<a href="https://www.turkishairlines.com/en-int/flights/manage-booking/" rel="nofollow "target="_blank">
														<span class="kt-badge kt-badge--brand kt-badge--inline kt-badge--pill" style="background-color:black">WEB CHECK-IN</span></span></center></td></a>
                                                    </tr>
													
													<tr>
														<td><center><img src="http://support.thetravelsquare.in/img/airlines/thai-airways-logo-the-travel-square.svg" height="50" width="100"></center></td>
														<td><center>Thai Air</center></td>
														<td><center>EI</center></td>
                                                        <td><center>Thailand</center></td>
														<td data-field="Status" class="kt-datatable__cell"><span style="width: 146px;"><center>
														<a href="https://www.thaiairways.com/en/before_you_fly/manage/my_booking.page" rel="nofollow "target="_blank">
														<span class="kt-badge kt-badge--brand kt-badge--inline kt-badge--pill" style="background-color:black">WEB CHECK-IN</span></span></center></td></a>
                                                    </tr>
													
													<tr>
														<td><center><img src="http://support.thetravelsquare.in/img/airlines/thai-smile-logo-the-travel-square.svg" height="50" width="100"></center></td>
														<td><center>Thai Smile</center></td>
														<td><center>TG</center></td>
                                                        <td><center>Thailand</center></td>
														<td data-field="Status" class="kt-datatable__cell"><span style="width: 146px;"><center>
														<a href="https://www.thaismileair.com/en/Reservation-and-Ticketing" rel="nofollow "target="_blank">
														<span class="kt-badge kt-badge--brand kt-badge--inline kt-badge--pill" style="background-color:black">WEB CHECK-IN</span></span></center></td></a>
                                                    </tr>
													
													<tr>
														<td><center><img src="http://support.thetravelsquare.in/img/airlines/tigerair-logo-the-travel-square.svg" height="50" width="100"></center></td>
														<td><center>Tiger Air</center></td>
														<td><center>TR</center></td>
                                                        <td><center>Singapore</center></td>
														<td data-field="Status" class="kt-datatable__cell"><span style="width: 146px;"><center>
														<a href="https://manages.tigerairtw.com/en/login" rel="nofollow "target="_blank">
														<span class="kt-badge kt-badge--brand kt-badge--inline kt-badge--pill" style="background-color:black">WEB CHECK-IN</span></span></center></td></a>
                                                    </tr>
													
													<tr>
														<td><center><img src="http://support.thetravelsquare.in/img/airlines/tunisair-logo-the-travel-square.svg" height="50" width="100"></center></td>
														<td><center>Tunis Air</center></td>
														<td><center>TU</center></td>
                                                        <td><center>Tunisia</center></td>
														<td data-field="Status" class="kt-datatable__cell"><span style="width: 146px;"><center>
														<a href="https://www.tunisair.com/site/publish/content/default.asp?lang=en" rel="nofollow "target="_blank">
														<span class="kt-badge kt-badge--brand kt-badge--inline kt-badge--pill" style="background-color:black">WEB CHECK-IN</span></span></center></td></a>
                                                    </tr>
													
													<tr>
														<td><center><img src="http://support.thetravelsquare.in/img/airlines/ukraine-airlines-logo-the-travel-square.svg" height="50" width="100"></center></td>
														<td><center>Ukraine Airlines (UAI)</center></td>
														<td><center>PS</center></td>
                                                        <td><center>Ukraine</center></td>
														<td data-field="Status" class="kt-datatable__cell"><span style="width: 146px;"><center>
														<a href="https://book.flyuia.com/EN/default/mmb?_ga=2.211581202.649990770.1639554260-1468878174.1639554260" rel="nofollow "target="_blank">
														<span class="kt-badge kt-badge--brand kt-badge--inline kt-badge--pill" style="background-color:black">WEB CHECK-IN</span></span></center></td></a>
                                                    </tr>
													
													<tr>
														<td><center><img src="http://support.thetravelsquare.in/img/airlines/united-airlines-logo-the-travel-square.svg" height="50" width="100"></center></td>
														<td><center>United Airlines</center></td>
														<td><center>UA</center></td>
                                                        <td><center>United States of America (USA)</center></td>
														<td data-field="Status" class="kt-datatable__cell"><span style="width: 146px;"><center>
														<a href="https://www.united.com/en/us/manageres/mytrips" rel="nofollow "target="_blank">
														<span class="kt-badge kt-badge--brand kt-badge--inline kt-badge--pill" style="background-color:black">WEB CHECK-IN</span></span></center></td></a>
                                                    </tr>
													
													<tr>
														<td><center><img src="http://support.thetravelsquare.in/img/airlines/uzbekistan-airways-logo-the-travel-square.svg" height="50" width="100"></center></td>
														<td><center>Uzbekistan Airways</center></td>
														<td><center>HY</center></td>
                                                        <td><center>Uzbekistan</center></td>
														<td data-field="Status" class="kt-datatable__cell"><span style="width: 146px;"><center>
														<a href="https://www.uzairways.com/en/check-tiket" rel="nofollow "target="_blank">
														<span class="kt-badge kt-badge--brand kt-badge--inline kt-badge--pill" style="background-color:black">WEB CHECK-IN</span></span></center></td></a>
                                                    </tr>
													
													<tr>
														<td><center><img src="http://support.thetravelsquare.in/img/airlines/vietnam-airlines-logo-the-travel-square.svg" height="50" width="100"></center></td>
														<td><center>Vietnam Airlines</center></td>
														<td><center>VN</center></td>
                                                        <td><center>Vietnam</center></td>
														<td data-field="Status" class="kt-datatable__cell"><span style="width: 146px;"><center>
														<a href="http://vietnamairline.travel/manage-booking" rel="nofollow "target="_blank">
														<span class="kt-badge kt-badge--brand kt-badge--inline kt-badge--pill" style="background-color:black">WEB CHECK-IN</span></span></center></td></a>
                                                    </tr>
													
													<tr>
														<td><center><img src="http://support.thetravelsquare.in/img/airlines/virgin-logo-the-travel-square.svg" height="50" width="100"></center></td>
														<td><center>Virgin Atlantic Airlines</center></td>
														<td><center>VS</center></td>
                                                        <td><center>England, United Kingdom (UK)</center></td>
														<td data-field="Status" class="kt-datatable__cell"><span style="width: 146px;"><center>
														<a href="https://www.virginatlantic.com/mytrips/findPnr.action" rel="nofollow "target="_blank">
														<span class="kt-badge kt-badge--brand kt-badge--inline kt-badge--pill" style="background-color:black">WEB CHECK-IN</span></span></center></td></a>
                                                    </tr>
													
													<tr>
														<td><center><img src="http://support.thetravelsquare.in/img/airlines/vistara-logo-the-travel-square.svg" height="50" width="100"></center></td>
														<td><center>Vistara Airlines</center></td>
														<td><center>UK</center></td>
                                                        <td><center>India</center></td>
														<td data-field="Status" class="kt-datatable__cell"><span style="width: 146px;"><center>
														<a href="https://www.airvistara.com/in/en" rel="nofollow "target="_blank">
														<span class="kt-badge kt-badge--brand kt-badge--inline kt-badge--pill" style="background-color:black">WEB CHECK-IN</span></span></center></td></a>
                                                    </tr>
													
													<tr>
														<td><center><img src="http://support.thetravelsquare.in/img/airlines/westjet-logo-the-travel-square.svg" height="50" width="100"></center></td>
														<td><center>Westjet Airlines</center></td>
														<td><center>WS</center></td>
                                                        <td><center>Canada</center></td>
														<td data-field="Status" class="kt-datatable__cell"><span style="width: 146px;"><center>
														<a href="https://www.westjet.com/en-ca/manage/dashboard/lookup?sessionId=15-6-2022-11-57-12-6443" rel="nofollow "target="_blank">
														<span class="kt-badge kt-badge--brand kt-badge--inline kt-badge--pill" style="background-color:black">WEB CHECK-IN</span></span></center></td></a>
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
        <?php include('jquery.php');?>

        <!-- Tinymce JavaScript -->
        <script src="<?= base_url('resource/auth/vendors/tinymce/tinymce.min.js');?>"></script>

        <!-- Tinymce Wysuhtml5 Init JavaScript -->
        <script src="<?= base_url('resource/auth/dist/js/tinymce-data.js');?>"></script>

        <script>
            
            var amount=$('#amount').val();
            var gid="";
            $('#currency_id').change(function() {
                gid = $(this).val(); 
            });
            
            $("#click_btn").click(function(){
                var amount=$('#amount').val();
                $.ajax({
					method: "POST",
					url: "<?= base_url();?>Partner/get_currency_tracking/"+gid+"/"+amount,
					})
					.done(function( myJSON ) {
								
						$("#constructed_amount").html(myJSON);
				});
            });
        </script>

    </body>
</html>