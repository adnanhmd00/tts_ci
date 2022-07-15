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
                <img alt="The Travel Square Logo" src="http://partner.thetravelsquare.in/uploads/b2b/the-travel-square-logo.png" width="30" height="30">
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
                                        
                                        </a>
                                        <div class="dropdown dropdown-inline" data-toggle-="kt-tooltip" title="Publish Deal" data-placement="left">
                                            <a href="http://partner.thetravelsquare.in/" class="btn btn-icon" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon kt-svg-icon--dark kt-svg-icon--md">
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
                                                        <a href="http://partner.thetravelsquare.in/adddeal" class="kt-nav__link">
                                                        <i class="kt-nav__link-icon flaticon2-drop"></i>
                                                        <span class="kt-nav__link-text">Package Deal</span>
                                                        </a>
                                                    </li>
                                                    <li class="kt-nav__item">
                                                        <a href="http://partner.thetravelsquare.in/adddeal" class="kt-nav__link">
                                                        <i class="kt-nav__link-icon flaticon2-calendar-8"></i>
                                                        <span class="kt-nav__link-text">Hotel Deal</span>
                                                        </a>
                                                    </li>
                                                    <li class="kt-nav__item">
                                                        <a href="http://partner.thetravelsquare.in/adddeal" class="kt-nav__link">
                                                        <i class="kt-nav__link-icon flaticon2-telegram-logo"></i>
                                                        <span class="kt-nav__link-text">Transfers Deal</span>
                                                        </a>
                                                    </li>
                                                    <li class="kt-nav__item">
                                                        <a href="http://partner.thetravelsquare.in/adddeal" class="kt-nav__link">
                                                        <i class="kt-nav__link-icon flaticon2-telegram-logo"></i>
                                                        <span class="kt-nav__link-text">Experience Deal</span>
                                                        </a>
                                                    </li>
                                                    <li class="kt-nav__item">
                                                        <a href="http://partner.thetravelsquare.in/adddeal" class="kt-nav__link">
                                                        <i class="kt-nav__link-icon flaticon2-telegram-logo"></i>
                                                        <span class="kt-nav__link-text">Flight Deal</span>
                                                        </a>
                                                    </li>
                                                    <li class="kt-nav__item">
                                                        <a href="http://partner.thetravelsquare.in/adddeal" class="kt-nav__link">
                                                        <i class="kt-nav__link-icon flaticon2-telegram-logo"></i>
                                                        <span class="kt-nav__link-text">Visa Deal</span>
                                                        </a>
                                                    </li>
                                                    <li class="kt-nav__separator"></li>
                                                    <li class="kt-nav__foot">
                                                        <a class="btn btn-label-dark btn-bold btn-sm" href="http://partner.thetravelsquare.in/">VERIFY AS SELLER</a>                                    
                                                        <a class="btn btn-dark btn-bold btn-sm kt-hidden" href="http://partner.thetravelsquare.in/" data-toggle="kt-tooltip" data-placement="right" title="" data-original-title="Click to learn more...">Learn more</a>
                                                    </li>
                                                </ul>
                                                <!--end::Nav-->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end:: Content Head -->					
                        <!-- begin:: Content -->
                        <div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">
						
						<div class="kt-portlet">
	<div class="kt-portlet__body  kt-portlet__body--fit">
		<div class="row row-no-padding row-col-separator-lg">

			<div class="col-md-12 col-lg-6 col-xl-3">
				<!--begin::Total Profit-->
				<div class="kt-widget24">
					<div class="kt-widget24__details">
						<div class="kt-widget24__info">
							<h4 class="kt-widget24__title">
					            Total Sales (Jul)
					        </h4>
					        <span class="kt-widget24__desc">
					            Total Booking Amount
					        </span>
						</div>

						<span class="kt-widget24__stats kt-font-dark">
					        ₹0
					    </span>
					</div>

				    <div class="progress progress--sm">
						<div class="progress-bar kt-bg-dark" role="progressbar" style="width: 0%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
					</div>

					<div class="kt-widget24__action">
						<span class="kt-widget24__change">
							Target
						</span>
						<span class="kt-widget24__number">
							₹1,000,000
					    </span>
					</div>
				</div>
				<!--end::Total Profit-->
			</div>

			<div class="col-md-12 col-lg-6 col-xl-3">
				<!--begin::New Feedbacks-->
				<div class="kt-widget24">
					<div class="kt-widget24__details">
						<div class="kt-widget24__info">
							<h4 class="kt-widget24__title">
					            My Deal Enquiries
					        </h4>
					        <span class="kt-widget24__desc">
					            Your Leads
					        </span>
						</div>

						<span class="kt-widget24__stats kt-font-dark">
					       0
					    </span>
					</div>

				    <div class="progress progress--sm">
						<div class="progress-bar kt-bg-dark" role="progressbar" style="width: 0%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
					</div>

					<div class="kt-widget24__action">
						<span class="kt-widget24__change">
							Target
						</span>
						<span class="kt-widget24__number">
							100
					    </span>
					</div>
				</div>
				<!--end::New Feedbacks-->
			</div>

			<div class="col-md-12 col-lg-6 col-xl-3">
				<!--begin::New Orders-->
				<div class="kt-widget24">
					<div class="kt-widget24__details">
						<div class="kt-widget24__info">
							<h4 class="kt-widget24__title">
					            Total Bookings
					        </h4>
					        <span class="kt-widget24__desc">
					            No. of Bookings (Jul)
					        </span>
						</div>

						<span class="kt-widget24__stats kt-font-dark">
					        0
					    </span>
					</div>

				    <div class="progress progress--sm">
						<div class="progress-bar kt-bg-dark" role="progressbar" style="width: 0%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
					</div>

					<div class="kt-widget24__action">
						<span class="kt-widget24__change">
							Target
						</span>
						<span class="kt-widget24__number">
							100
					    </span>
					</div>
				</div>
				<!--end::New Orders-->
			</div>

			<div class="col-md-12 col-lg-6 col-xl-3">
				<!--begin::New Users-->
				<div class="kt-widget24">
					<div class="kt-widget24__details">
						<div class="kt-widget24__info">
							<h4 class="kt-widget24__title">
					            TravPAY Balance
					        </h4>
					        <span class="kt-widget24__desc">
					            Funds in Wallet
					        </span>
						</div>

						<span class="kt-widget24__stats kt-font-dark">
					        0
					    </span>
					</div>

				    <div class="progress progress--sm">
						<div class="progress-bar kt-bg-dark" role="progressbar" style="width: 10%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
					</div>

					<div class="kt-widget24__action">
						<span class="kt-widget24__change">
							Target
						</span>
						<span class="kt-widget24__number">
							₹500,000
					    </span>
					</div>
				</div>
				<!--end::New Users-->
			</div>

		</div>
	</div>
</div>
                            <!--Begin::Dashboard 1-->
                            <!--Begin::Row-->
                            <div class="row">
                                <div class="col-lg-4 col-xl-4 order-lg-1 order-xl-1">
                                    <!--begin:: Widgets/Activity-->
                                    <div class="kt-portlet kt-portlet--fit kt-portlet--head-lg kt-portlet--head-overlay kt-portlet--skin-solid kt-portlet">
                                        <div class="kt-portlet__body kt-portlet__body--fit">
                                            <div class="kt-widget17">
                                                <br><br><br><br><br><br><br><br>
                                                <div class="kt-widget17__visual kt-widget17__visual--chart kt-portlet-fit--top kt-portlet-fit--sides" style="background-color: #fff">
                                                    <div class="kt-widget17__stats">
                                                        <div class="kt-widget17__items">
                                                            <div class="kt-widget17__item">
                                                                <span class="kt-widget17__icon">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon kt-svg-icon--dark">
                                                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																			<rect x="0" y="0" width="24" height="24"/>
																			<path d="M14,13.381038 L14,3.47213595 L7.99460483,15.4829263 L14,13.381038 Z M4.88230018,17.2353996 L13.2844582,0.431083506 C13.4820496,0.0359007077 13.9625881,-0.12427877 14.3577709,0.0733126292 C14.5125928,0.15072359 14.6381308,0.276261584 14.7155418,0.431083506 L23.1176998,17.2353996 C23.3152912,17.6305824 23.1551117,18.1111209 22.7599289,18.3087123 C22.5664522,18.4054506 22.3420471,18.4197165 22.1378777,18.3482572 L14,15.5 L5.86212227,18.3482572 C5.44509941,18.4942152 4.98871325,18.2744737 4.84275525,17.8574509 C4.77129597,17.6532815 4.78556182,17.4288764 4.88230018,17.2353996 Z" fill="#000000" fill-rule="nonzero" transform="translate(14.000087, 9.191034) rotate(-315.000000) translate(-14.000087, -9.191034) "/>
																		</g>
                                                                    </svg>
                                                                </span>
                                                                <span class="kt-widget17__subtitle">
                                                                Flights & FD's
                                                                </span> 
                                                                <span class="kt-widget17__desc">
                                                                2.5 %
                                                                </span>  
                                                            </div>
                                                            <div class="kt-widget17__item">
                                                                <span class="kt-widget17__icon">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon kt-svg-icon--dark">
                                                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																			<rect x="0" y="0" width="24" height="24"/>
																			<path d="M4,22 L2,22 C2,19.2385763 4.23857625,18 7,18 L17,18 C19.7614237,18 22,19.2385763 22,22 L20,22 C20,20.3431458 18.6568542,20 17,20 L7,20 C5.34314575,20 4,20.3431458 4,22 Z" fill="#000000" fill-rule="nonzero" opacity="0.3"/>
																			<rect fill="#000000" x="1" y="14" width="22" height="6" rx="1"/>
																			<path d="M13,13 L11,13 L11,12 C11,11.4477153 10.5522847,11 10,11 L6,11 C5.44771525,11 5,11.4477153 5,12 L5,13 L4,13 C3.44771525,13 3,12.5522847 3,12 L3,8 C3,6.8954305 3.8954305,6 5,6 L19,6 C20.1045695,6 21,6.8954305 21,8 L21,12 C21,12.5522847 20.5522847,13 20,13 L19,13 L19,12 C19,11.4477153 18.5522847,11 18,11 L14,11 C13.4477153,11 13,11.4477153 13,12 L13,13 Z" fill="#000000" opacity="0.3"/>
																		</g>
                                                                    </svg>
                                                                </span>
                                                                <span class="kt-widget17__subtitle">
                                                                Hotels & Resorts
                                                                </span> 
                                                                <span class="kt-widget17__desc">
                                                                3 %
                                                                </span>  
                                                            </div>
                                                        </div>
                                                        <div class="kt-widget17__items">
                                                            <div class="kt-widget17__item">
                                                                <span class="kt-widget17__icon">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon kt-svg-icon--dark">
                                                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																			<rect x="0" y="0" width="24" height="24"/>
																			<path d="M9.82829464,16.6565893 C7.02541569,15.7427556 5,13.1079084 5,10 C5,6.13400675 8.13400675,3 12,3 C15.8659932,3 19,6.13400675 19,10 C19,13.1079084 16.9745843,15.7427556 14.1717054,16.6565893 L12,21 L9.82829464,16.6565893 Z M12,12 C13.1045695,12 14,11.1045695 14,10 C14,8.8954305 13.1045695,8 12,8 C10.8954305,8 10,8.8954305 10,10 C10,11.1045695 10.8954305,12 12,12 Z" fill="#000000"/>
																		</g>
                                                                    </svg>
                                                                </span>
                                                                <span class="kt-widget17__subtitle">
                                                                Packages (Non Customisable)
                                                                </span> 
                                                                <span class="kt-widget17__desc">
                                                                5 %
                                                                </span>  
                                                            </div>
                                                            <div class="kt-widget17__item">
                                                                <span class="kt-widget17__icon">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon kt-svg-icon--dark">
                                                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																			<rect x="0" y="0" width="24" height="24"/>
																			<path d="M12.8434797,16 L11.1565203,16 L10.9852159,16.6393167 C10.3352654,19.064965 7.84199997,20.5044524 5.41635172,19.8545019 C2.99070348,19.2045514 1.55121603,16.711286 2.20116652,14.2856378 L3.92086709,7.86762789 C4.57081758,5.44197964 7.06408298,4.00249219 9.48973122,4.65244268 C10.5421727,4.93444352 11.4089671,5.56345262 12,6.38338695 C12.5910329,5.56345262 13.4578273,4.93444352 14.5102688,4.65244268 C16.935917,4.00249219 19.4291824,5.44197964 20.0791329,7.86762789 L21.7988335,14.2856378 C22.448784,16.711286 21.0092965,19.2045514 18.5836483,19.8545019 C16.158,20.5044524 13.6647346,19.064965 13.0147841,16.6393167 L12.8434797,16 Z M17.4563502,18.1051865 C18.9630797,18.1051865 20.1845253,16.8377967 20.1845253,15.2743923 C20.1845253,13.7109878 18.9630797,12.4435981 17.4563502,12.4435981 C15.9496207,12.4435981 14.7281751,13.7109878 14.7281751,15.2743923 C14.7281751,16.8377967 15.9496207,18.1051865 17.4563502,18.1051865 Z M6.54364977,18.1051865 C8.05037928,18.1051865 9.27182488,16.8377967 9.27182488,15.2743923 C9.27182488,13.7109878 8.05037928,12.4435981 6.54364977,12.4435981 C5.03692026,12.4435981 3.81547465,13.7109878 3.81547465,15.2743923 C3.81547465,16.8377967 5.03692026,18.1051865 6.54364977,18.1051865 Z" fill="#000000"/>
																		</g>
                                                                    </svg>
                                                                </span>
                                                                <span class="kt-widget17__subtitle">
                                                                Experiences
                                                                </span> 
                                                                <span class="kt-widget17__desc">
                                                                10 %
                                                                </span>  
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <br>
                                    </div>
                                    <!--end:: Widgets/Activity-->	
                                </div>
                                <div class="col-lg-4 col-xl-4 order-lg-1 order-xl-1">
                                    <!--begin:: Widgets/Inbound Bandwidth-->
                                    <div class="kt-portlet kt-portlet--fit kt-portlet--head-noborder kt-portlet">
                                        <div class="kt-portlet__head kt-portlet__space-x">
                                            <div class="kt-portlet__head-label">
                                                <h3 class="kt-portlet__head-title">
                                                    236+ Fixed Departure Flights
                                                </h3>
                                            </div>
                                            <div class="kt-portlet__head-toolbar">
                                                <a href="http://partner.thetravelsquare.in/domestic-fd" target="blank" class="btn btn-label-dark btn-sm  btn-bold">
                                                VIEW
                                                </a>
                                            </div>
                                        </div>
                                        
                                    </div>
                                    <!--end:: Widgets/Inbound Bandwidth-->		
                                    <div class="kt-space-20"></div>
                                    <!--begin:: Widgets/Outbound Bandwidth-->
                                    <div class="kt-portlet kt-portlet--fit kt-portlet--head-noborder kt-portlet">
                                        <div class="kt-portlet__head kt-portlet__space-x">
                                            <div class="kt-portlet__head-label">
                                                <h3 class="kt-portlet__head-title">
                                                   Maldives Live Resort Offers
                                                </h3>
                                            </div>
                                            <div class="kt-portlet__head-toolbar">
                                                <a href="http://partner.thetravelsquare.in/maldives" target="blank" class="btn btn-label-dark btn-sm btn-bold">
                                                VIEW
                                                </a>
                                            </div>
                                        </div>
                                        
                                    </div>
                                    <div class="kt-portlet kt-portlet--fit kt-portlet--head-noborder kt-portlet">
                                        <div class="kt-portlet__head kt-portlet__space-x">
                                            <div class="kt-portlet__head-label">
                                                <h3 class="kt-portlet__head-title">
                                                   Hotel Cabs at Best B2B Tariffs
                                                </h3>
                                            </div>
                                            <div class="kt-portlet__head-toolbar">
                                                <a href="http://partner.thetravelsquare.in/cabs" target="blank" class="btn btn-label-dark btn-sm btn-bold">
                                                VIEW
                                                </a>
                                            </div>
                                        </div>
                                        
                                    </div>
									<div class="kt-portlet kt-portlet--fit kt-portlet--head-noborder kt-portlet">
                                        <div class="kt-portlet__head kt-portlet__space-x">
                                            <div class="kt-portlet__head-label">
                                                <h3 class="kt-portlet__head-title">
                                                   Best Discounts on The Leela Chain
                                                </h3>
                                            </div>
                                            <div class="kt-portlet__head-toolbar">
                                                <a href="http://partner.thetravelsquare.in/hotels" target="blank" class="btn btn-label-dark btn-sm btn-bold">
                                                VIEW
                                                </a>
                                            </div>
                                        </div>
                                        
                                    </div>
									<div class="kt-portlet kt-portlet--fit kt-portlet--head-noborder kt-portlet">
                                        <div class="kt-portlet__head kt-portlet__space-x">
                                            <div class="kt-portlet__head-label">
                                                <h3 class="kt-portlet__head-title">
                                                   Now Apply Dubai Visa Here
                                                </h3>
                                            </div>
                                            <div class="kt-portlet__head-toolbar">
                                                <a href="http://partner.thetravelsquare.in/visa" target="blank" class="btn btn-label-dark btn-sm btn-bold">
                                                VIEW
                                                </a>
                                            </div>
                                        </div>
                                        
                                    </div>
                                    <!--end:: Widgets/Outbound Bandwidth-->	
                                </div>
								<div class="col-lg-4 col-xl-4 order-lg-1 order-xl-1">
                                    <!--begin:: Widgets/Inbound Bandwidth-->
                                    <div class="kt-portlet kt-portlet--fit kt-portlet--head-noborder kt-portlet">
                                        <div class="kt-portlet__head kt-portlet__space-x">
                                            <div class="kt-portlet__head-label">
                                                <h3 class="kt-portlet__head-title">
                                                    Hot Selling Sector
                                                </h3>
                                            </div>
                                            <div class="kt-portlet__head-toolbar">
                                                <a href="http://partner.thetravelsquare.in/international-fd" class="btn btn-label-dark btn-sm btn-bold">
                                                VIEW DEPARTURES
                                                </a>
                                            </div>
                                        </div>
                                        <div class="kt-widget20">
                                            <div class="kt-widget20__content kt-portlet__space-x">
                                                <span class="kt-widget20__number kt-font-dark">DEL-DXB-DEL (Delhi-Dubai)</span>
                                            </div>
                                        </div>
                                    </div>
                                    <!--end:: Widgets/Inbound Bandwidth-->		
                                    <div class="kt-space-20"></div>
                                    <!--begin:: Widgets/Outbound Bandwidth-->
                                    <div class="kt-portlet kt-portlet--fit kt-portlet--head-noborder kt-portlet">
                                        <div class="kt-portlet__head kt-portlet__space-x">
                                            <div class="kt-portlet__head-label">
                                                <h3 class="kt-portlet__head-title">
                                                    Latest Added Sector
                                                </h3>
                                            </div>
                                            <div class="kt-portlet__head-toolbar">
                                                <a href="http://partner.thetravelsquare.in/international-fd" class="btn btn-label-dark btn-sm btn-bold">
                                                VIEW DEPARTURES
                                                </a>
                                            </div>
                                        </div>
                                        <div class="kt-widget20">
                                            <div class="kt-widget20__content kt-portlet__space-x">
                                                <span class="kt-widget20__number kt-font-dark">MALE (Ex - DEL,BOM,AMD)</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="kt-portlet kt-portlet--fit kt-portlet--head-noborder kt-portlet">
                                        <div class="kt-portlet__head kt-portlet__space-x">
                                            <div class="kt-portlet__head-label">
                                                <h3 class="kt-portlet__head-title">
                                                    Sectors On Sale
                                                </h3>
                                            </div>
                                            <div class="kt-portlet__head-toolbar">
                                                <a href="http://partner.thetravelsquare.in/domestic-fd" class="btn btn-label-dark btn-sm btn-bold">
                                                VIEW DEPARTURES
                                                </a>
                                            </div>
                                        </div>
                                        <div class="kt-widget20">
                                            <div class="kt-widget20__content kt-portlet__space-x">
                                                <span class="kt-widget20__number kt-font-dark">BLR-PAT, IXC-GOA</span>
                                            </div>
                                        </div>
                                    </div>
                                    <!--end:: Widgets/Outbound Bandwidth-->	
                                </div>
                                
                            </div>
                            <!--End::Row-->
                            <!--Begin::Row-->
                            <div class="row">
                                <div class="col-lg-6 col-xl-4 order-lg-1 order-xl-1">
                                    <!--begin:: Widgets/Blog-->
                                    <div class="kt-portlet kt-portlet--height-fluid kt-widget19">
                                        <a href="http://partner.thetravelsquare.in/free-room-nights-for-agents-sale">
                                            <div class="kt-portlet__body kt-portlet__body--fit kt-portlet__body--unfill">
                                                <div class="kt-widget19__pic kt-portlet-fit--top kt-portlet-fit--sides" style="min-height: 300px; background-image: url(<?= base_url('resource/admin/img/free-hotel-room-sales.jpg');?>)">
                                                    <h3 class="kt-widget19__title kt-font-light">
                                                        Get Free Room Nights to Sell
                                                    </h3>
                                                    <div class="kt-widget19__shadow"></div>
                                                </div>
                                            </div>
                                        </a>
                                        <div class="kt-portlet__body">
                                            <div class="kt-widget19__wrapper">
                                                <div class="kt-widget19__text">
                                                    Generate a Business Volume of 2,500,000 , & The Travel Square Offers You To Sell Free 5 Star Luxury Hotel Room Nights at Your Price
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--end:: Widgets/Blog-->	
                                </div>
                                <div class="col-lg-6 col-xl-4 order-lg-1 order-xl-1">
                                    <!--begin:: Widgets/Blog-->
                                    <div class="kt-portlet kt-portlet--height-fluid kt-widget19">
                                        <a href="http://partner.thetravelsquare.in/FAM-business-trips">
                                            <div class="kt-portlet__body kt-portlet__body--fit kt-portlet__body--unfill">
                                                <div class="kt-widget19__pic kt-portlet-fit--top kt-portlet-fit--sides" style="min-height: 300px; background-image: url(<?= base_url('resource/admin/img/FAM-Trip.jpg');?>)">
                                                    <h3 class="kt-widget19__title kt-font-light">
                                                        Join Us on Our FAM Trip
                                                    </h3>
                                                    <div class="kt-widget19__shadow"></div>
                                                </div>
                                            </div>
                                        </a>
                                        <div class="kt-portlet__body">
                                            <div class="kt-widget19__wrapper">
                                                <div class="kt-widget19__text">
                                                    Generate a Business Volume of 10,00,000 and Get a Chance To Explore Phuket With Us on Our FAM Business Trip .  
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--end:: Widgets/Blog-->	
                                </div>
                                <div class="col-lg-6 col-xl-4 order-lg-1 order-xl-1">
                                    <!--begin:: Widgets/Blog-->
                                    <div class="kt-portlet kt-portlet--height-fluid kt-widget19">
                                        <a href="http://partner.thetravelsquare.in/partner-ppc">
                                            <div class="kt-portlet__body kt-portlet__body--fit kt-portlet__body--unfill">
                                                <div class="kt-widget19__pic kt-portlet-fit--top kt-portlet-fit--sides" style="min-height: 300px; background-image: url(<?= base_url('resource/admin/img/advertise-with-us.jpg');?>)">
                                                    <h3 class="kt-widget19__title kt-font-light">
                                                        Advertise For More Leads
                                                    </h3>
                                                    <div class="kt-widget19__shadow"></div>
                                                </div>
                                            </div>
                                        </a>
                                        <div class="kt-portlet__body">
                                            <div class="kt-widget19__wrapper">
                                                <div class="kt-widget19__text">
                                                    Advertise Your Packages & Deals With Us To Generate More Leads , Select Your Advertisnment Package Today  
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--end:: Widgets/Blog-->	
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6 col-xl-4 order-lg-1 order-xl-1">
                                    <!--begin:: Widgets/Blog-->
                                    <div class="kt-portlet kt-portlet--height-fluid kt-widget19">
                                        <a href="http://partner.thetravelsquare.in/partner-travpay">
                                            <div class="kt-portlet__body kt-portlet__body--fit kt-portlet__body--unfill">
                                                <div class="kt-widget19__pic kt-portlet-fit--top kt-portlet-fit--sides" style="min-height: 300px; background-image: url(<?= base_url('resource/admin/img/remitance-the-travel-square.png');?>)">
                                                    <h3 class="kt-widget19__title kt-font-light">
                                                        Remit Payments , Safe Bookings
                                                    </h3>
                                                    <div class="kt-widget19__shadow"></div>
                                                </div>
                                            </div>
                                        </a>
                                        <div class="kt-portlet__body">
                                            <div class="kt-widget19__wrapper">
                                                <div class="kt-widget19__text">
                                                    Route Your Payments Throught Us & We'll Take Care of Your Booking For Free, Payment Remains Safe Against Your Booking Terms With Third Party Agent 
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--end:: Widgets/Blog-->	
                                </div>
                                <div class="col-lg-6 col-xl-4 order-lg-1 order-xl-1">
                                    <!--begin:: Widgets/Blog-->
                                    <div class="kt-portlet kt-portlet--height-fluid kt-widget19">
                                        <a href="http://partner.thetravelsquare.in/learn-how-to-sell">
                                            <div class="kt-portlet__body kt-portlet__body--fit kt-portlet__body--unfill">
                                                <div class="kt-widget19__pic kt-portlet-fit--top kt-portlet-fit--sides" style="min-height: 300px; background-image: url(<?= base_url('resource/admin/img/learn-how-to-sell.jpg');?>)">
                                                    <h3 class="kt-widget19__title kt-font-light">
                                                        Learn How to Sell
                                                    </h3>
                                                    <div class="kt-widget19__shadow"></div>
                                                </div>
                                            </div>
                                        </a>
                                        <div class="kt-portlet__body">
                                            <div class="kt-widget19__wrapper">
                                                <div class="kt-widget19__text">
                                                    Learn How To Sell Your Locations in India , Generate Traffic , Write Blogs Around Your Published Deals .  
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--end:: Widgets/Blog-->	
                                </div>
                                <div class="col-lg-6 col-xl-4 order-lg-1 order-xl-1">
                                    <!--begin:: Widgets/Blog-->
                                    <div class="kt-portlet kt-portlet--height-fluid kt-widget19">
                                        <a href="http://partner.thetravelsquare.in/partner-platform-live-demo">
                                            <div class="kt-portlet__body kt-portlet__body--fit kt-portlet__body--unfill">
                                                <div class="kt-widget19__pic kt-portlet-fit--top kt-portlet-fit--sides" style="min-height: 300px; background-image: url(<?= base_url('resource/admin/img/Live-demo-of-seller-square-platform.png');?>)">
                                                    <h3 class="kt-widget19__title kt-font-light">
                                                        Watch a Live Demo of Platform
                                                    </h3>
                                                    <div class="kt-widget19__shadow"></div>
                                                </div>
                                            </div>
                                        </a>
                                        <div class="kt-portlet__body">
                                            <div class="kt-widget19__wrapper">
                                                <div class="kt-widget19__text">
                                                    Watch & Learn How to Your The Travel Square Business Partner Platform , Make the Most out of It .   
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--end:: Widgets/Blog-->	
                                </div>
                            </div>
							<div class="row">
                                <div class="col-lg-4 col-xl-4 order-lg-1 order-xl-1">
                                    <!--begin:: Widgets/Blog-->
                                    <div class="kt-portlet kt-portlet--height-fluid kt-widget19">
                                        <a href="http://business.thetravelsquare.in/partner-platform-live-demo">
                                            <div class="kt-portlet__body kt-portlet__body--fit kt-portlet__body--unfill">
                                                <div class="kt-widget19__pic kt-portlet-fit--top kt-portlet-fit--sides" style="min-height: 300px; background-image: url(http://instawiremoney.com/img/instawire-logo-black-big.png)">
                                                    <h3 class="kt-widget19__title kt-font-light">
                                                        Send & Receive Money Overseas
                                                    </h3>
                                                    <div class="kt-widget19__shadow"></div>
                                                    <div class="kt-widget19__labels">
                                        <a href="http://partner.thetravelsquare.in/partner-travpay" class="btn btn-label-dark btn-bold ">LEARN MORE</a>
                                        </div>
                                        </div>
                                        </div>
                                        </a>
                                        <div class="kt-portlet__body">
                                            <div class="kt-widget19__wrapper">
                                                <div class="kt-widget19__text">
													TravPAY is Your Safe Travel Payments Wallet To, Receive & Send Customer Payments Securely
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--end:: Widgets/Blog-->	
                                </div>
                                <div class="col-lg-6 col-xl-4 order-lg-1 order-xl-1">
                                    <!--begin:: Widgets/Blog-->
                                    <div class="kt-portlet kt-portlet--height-fluid kt-widget19">
                                        <a href="http://partner.thetravelsquare.in/international-fd">
                                            <div class="kt-portlet__body kt-portlet__body--fit kt-portlet__body--unfill">
                                                <div class="kt-widget19__pic kt-portlet-fit--top kt-portlet-fit--sides" style="min-height: 300px; background-image: url(https://img.etimg.com/thumb/msid-82330294,width-650,imgsize-1111158,,resizemode-4,quality-100/maldvies.jpg)">
                                                    <h3 class="kt-widget19__title kt-font-light">
                                                        Fly to Maldives With Go Air FD's
                                                    </h3>
                                                    <div class="kt-widget19__shadow"></div>
                                                </div>
                                            </div>
                                        </a>
                                        <div class="kt-portlet__body">
                                            <div class="kt-widget19__wrapper">
                                                <div class="kt-widget19__text">
                                                    Maldives Go Air & Indigo, Fixed Departures Now Live on B2B Fixed Departures, Book Your Seats Now .  
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--end:: Widgets/Blog-->	
                                </div>
                                <div class="col-lg-6 col-xl-4 order-lg-1 order-xl-1">
                                    <!--begin:: Widgets/Blog-->
                                    <div class="kt-portlet kt-portlet--height-fluid kt-widget19">
                                        <a href="http://partner.thetravelsquare.in/international-fd">
                                            <div class="kt-portlet__body kt-portlet__body--fit kt-portlet__body--unfill">
                                                <div class="kt-widget19__pic kt-portlet-fit--top kt-portlet-fit--sides" style="min-height: 300px; background-image: url(http://b2bfixeddepartures.com/img/dubai-fixed-departures-by-b2b-fixed-departures.jpg)">
                                                    <h3 class="kt-widget19__title kt-font-light">
                                                        Best B2B Fares for Dubai FD's
                                                    </h3>
                                                    <div class="kt-widget19__shadow"></div>
                                                </div>
                                            </div>
                                        </a>
                                        <div class="kt-portlet__body">
                                            <div class="kt-widget19__wrapper">
                                                <div class="kt-widget19__text">
                                                    Fly Dubai & Indigo Group Pre-Purchased Flights Now Live of B2B Fixed Departures at Best B2B Tariff's. Book Your Seats Now  
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--end:: Widgets/Blog-->	
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6 col-xl-4 order-lg-1 order-xl-1">
                                    <!--begin:: Widgets/Blog-->
                                    <div class="kt-portlet kt-portlet--height-fluid kt-widget19">
                                        <a href="http://partner.thetravelsquare.in/domestic-fd">
                                            <div class="kt-portlet__body kt-portlet__body--fit kt-portlet__body--unfill">
                                                <div class="kt-widget19__pic kt-portlet-fit--top kt-portlet-fit--sides" style="min-height: 300px; background-image: url(https://imgk.timesnownews.com/story/Goa_beach_istock_1200.jpg?tr=w-1200,h-900)">
                                                    <h3 class="kt-widget19__title kt-font-light">
                                                        Goa Fixed Depatures From (Ex-DEL,BOM,AMD,IXC)
                                                    </h3>
                                                    <div class="kt-widget19__shadow"></div>
                                                </div>
                                            </div>
                                        </a>
                                        <div class="kt-portlet__body">
                                            <div class="kt-widget19__wrapper">
                                                <div class="kt-widget19__text">
                                                    Cheapest Departures to India's Most Favourite Travel Destination is Here, Book GOA Flight From All Cities at Best B2B Tariff
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--end:: Widgets/Blog-->	
                                </div>
                                <div class="col-lg-6 col-xl-4 order-lg-1 order-xl-1">
                                    <!--begin:: Widgets/Blog-->
                                    <div class="kt-portlet kt-portlet--height-fluid kt-widget19">
                                        <a href="http://partner.thetravelsquare.in/international-fd">
                                            <div class="kt-portlet__body kt-portlet__body--fit kt-portlet__body--unfill">
                                                <div class="kt-widget19__pic kt-portlet-fit--top kt-portlet-fit--sides" style="min-height: 300px; background-image: url(https://assets.traveltriangle.com/blog/wp-content/uploads/2019/08/og-for-beaches-in-phuket.jpg)">
                                                    <h3 class="kt-widget19__title kt-font-light">
                                                        Direct Flight to Phuket
                                                    </h3>
                                                    <div class="kt-widget19__shadow"></div>
                                                </div>
                                            </div>
                                        </a>
                                        <div class="kt-portlet__body">
                                            <div class="kt-widget19__wrapper">
                                                <div class="kt-widget19__text">
                                                    Thailand Reopens With Best of Direct Flight Offers from B2B Fixed Departures, Multiple Flights Available at Best B2B Rates
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--end:: Widgets/Blog-->	
                                </div>
                                <div class="col-lg-6 col-xl-4 order-lg-1 order-xl-1">
                                    <!--begin:: Widgets/Blog-->
                                    <div class="kt-portlet kt-portlet--height-fluid kt-widget19">
                                        <a href="http://partner.thetravelsquare.in/domestic-fd">
                                            <div class="kt-portlet__body kt-portlet__body--fit kt-portlet__body--unfill">
                                                <div class="kt-widget19__pic kt-portlet-fit--top kt-portlet-fit--sides" style="min-height: 300px; background-image: url(http://b2bfixeddepartures.com/img/leh-ladakh-fixed-departure-by-b2b-fixed-departures.jpg)">
                                                    <h3 class="kt-widget19__title kt-font-light">
                                                        Leh-Ladakh Direct Flights
                                                    </h3>
                                                    <div class="kt-widget19__shadow"></div>
                                                </div>
                                            </div>
                                        </a>	
                                        <div class="kt-portlet__body">
                                            <div class="kt-widget19__wrapper">
                                                <div class="kt-widget19__text">
                                                    Leh-Ladakh To & Fro Departues at Best Pre-Purchased Rates Available for the Winter Season.   
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--end:: Widgets/Blog-->	
                                </div>
                            </div>
                            <!--End::Row-->
                            <!--End::Dashboard 1-->	
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
            <span class="svg-icon svg-icon-dark svg-icon-2x">
				<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
					<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
					<polygon points="0 0 24 0 24 24 0 24"/>
					<path d="M8.2928955,10.2071068 C7.90237121,9.81658249 7.90237121,9.18341751 8.2928955,8.79289322 C8.6834198,8.40236893 9.31658478,8.40236893 9.70710907,8.79289322 L15.7071091,14.7928932 C16.085688,15.1714722 16.0989336,15.7810586 15.7371564,16.1757246 L10.2371564,22.1757246 C9.86396402,22.5828436 9.23139665,22.6103465 8.82427766,22.2371541 C8.41715867,21.8639617 8.38965574,21.2313944 8.76284815,20.8242754 L13.6158645,15.5300757 L8.2928955,10.2071068 Z" fill="#000000" fill-rule="nonzero" transform="translate(12.000003, 15.500003) scale(-1, 1) rotate(-90.000000) translate(-12.000003, -15.500003) "/>
					<path d="M6.70710678,12.2071104 C6.31658249,12.5976347 5.68341751,12.5976347 5.29289322,12.2071104 C4.90236893,11.8165861 4.90236893,11.1834211 5.29289322,10.7928968 L11.2928932,4.79289682 C11.6714722,4.41431789 12.2810586,4.40107226 12.6757246,4.76284946 L18.6757246,10.2628495 C19.0828436,10.6360419 19.1103465,11.2686092 18.7371541,11.6757282 C18.3639617,12.0828472 17.7313944,12.1103502 17.3242754,11.7371577 L12.0300757,6.88414142 L6.70710678,12.2071104 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" transform="translate(12.000003, 8.500003) scale(-1, 1) rotate(-360.000000) translate(-12.000003, -8.500003) "/>
					</g>
				</svg>
			</span>
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
    </body>
</html>