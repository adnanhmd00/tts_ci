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
                                    <a href="http://partner.thetravelsquare.in/partner-profile/" class="btn btn-label-warning btn-bold btn-sm btn-icon-h kt-margin-l-10">
                                    View Profile
                                    </a>
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
                        <!-- end:: Content Head -->					
                        <!-- begin:: Content -->
                        <div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">
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
                                                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon kt-svg-icon--brand">
                                                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                            <rect x="0" y="0" width="24" height="24"></rect>
                                                                            <path d="M5,3 L6,3 C6.55228475,3 7,3.44771525 7,4 L7,20 C7,20.5522847 6.55228475,21 6,21 L5,21 C4.44771525,21 4,20.5522847 4,20 L4,4 C4,3.44771525 4.44771525,3 5,3 Z M10,3 L11,3 C11.5522847,3 12,3.44771525 12,4 L12,20 C12,20.5522847 11.5522847,21 11,21 L10,21 C9.44771525,21 9,20.5522847 9,20 L9,4 C9,3.44771525 9.44771525,3 10,3 Z" fill="#000000"></path>
                                                                            <rect fill="#000000" opacity="0.3" transform="translate(17.825568, 11.945519) rotate(-19.000000) translate(-17.825568, -11.945519) " x="16.3255682" y="2.94551858" width="3" height="18" rx="1"></rect>
                                                                        </g>
                                                                    </svg>
                                                                </span>
                                                                <span class="kt-widget17__subtitle">
                                                                Leads
                                                                </span> 
                                                                <span class="kt-widget17__desc">
                                                                0
                                                                </span>  
                                                            </div>
                                                            <div class="kt-widget17__item">
                                                                <span class="kt-widget17__icon">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon kt-svg-icon--success">
                                                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                            <polygon points="0 0 24 0 24 24 0 24"></polygon>
                                                                            <path d="M12.9336061,16.072447 L19.36,10.9564761 L19.5181585,10.8312381 C20.1676248,10.3169571 20.2772143,9.3735535 19.7629333,8.72408713 C19.6917232,8.63415859 19.6104327,8.55269514 19.5206557,8.48129411 L12.9336854,3.24257445 C12.3871201,2.80788259 11.6128799,2.80788259 11.0663146,3.24257445 L4.47482784,8.48488609 C3.82645598,9.00054628 3.71887192,9.94418071 4.23453211,10.5925526 C4.30500305,10.6811601 4.38527899,10.7615046 4.47382636,10.8320511 L4.63,10.9564761 L11.0659024,16.0730648 C11.6126744,16.5077525 12.3871218,16.5074963 12.9336061,16.072447 Z" fill="#000000" fill-rule="nonzero"></path>
                                                                            <path d="M11.0563554,18.6706981 L5.33593024,14.122919 C4.94553994,13.8125559 4.37746707,13.8774308 4.06710397,14.2678211 C4.06471678,14.2708238 4.06234874,14.2738418 4.06,14.2768747 L4.06,14.2768747 C3.75257288,14.6738539 3.82516916,15.244888 4.22214834,15.5523151 C4.22358765,15.5534297 4.2250303,15.55454 4.22647627,15.555646 L11.0872776,20.8031356 C11.6250734,21.2144692 12.371757,21.2145375 12.909628,20.8033023 L19.7677785,15.559828 C20.1693192,15.2528257 20.2459576,14.6784381 19.9389553,14.2768974 C19.9376429,14.2751809 19.9363245,14.2734691 19.935,14.2717619 L19.935,14.2717619 C19.6266937,13.8743807 19.0546209,13.8021712 18.6572397,14.1104775 C18.654352,14.112718 18.6514778,14.1149757 18.6486172,14.1172508 L12.9235044,18.6705218 C12.377022,19.1051477 11.6029199,19.1052208 11.0563554,18.6706981 Z" fill="#000000" opacity="0.3"></path>
                                                                        </g>
                                                                    </svg>
                                                                </span>
                                                                <span class="kt-widget17__subtitle">
                                                                Bookings
                                                                </span> 
                                                                <span class="kt-widget17__desc">
                                                                0
                                                                </span>  
                                                            </div>
                                                        </div>
                                                        <div class="kt-widget17__items">
                                                            <div class="kt-widget17__item">
                                                                <span class="kt-widget17__icon">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon kt-svg-icon--warning">
                                                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                            <rect x="0" y="0" width="24" height="24"></rect>
                                                                            <path d="M12.7037037,14 L15.6666667,10 L13.4444444,10 L13.4444444,6 L9,12 L11.2222222,12 L11.2222222,14 L6,14 C5.44771525,14 5,13.5522847 5,13 L5,3 C5,2.44771525 5.44771525,2 6,2 L18,2 C18.5522847,2 19,2.44771525 19,3 L19,13 C19,13.5522847 18.5522847,14 18,14 L12.7037037,14 Z" fill="#000000" opacity="0.3"></path>
                                                                            <path d="M9.80428954,10.9142091 L9,12 L11.2222222,12 L11.2222222,16 L15.6666667,10 L15.4615385,10 L20.2072547,6.57253826 C20.4311176,6.4108595 20.7436609,6.46126971 20.9053396,6.68513259 C20.9668779,6.77033951 21,6.87277228 21,6.97787787 L21,17 C21,18.1045695 20.1045695,19 19,19 L5,19 C3.8954305,19 3,18.1045695 3,17 L3,6.97787787 C3,6.70173549 3.22385763,6.47787787 3.5,6.47787787 C3.60510559,6.47787787 3.70753836,6.51099993 3.79274528,6.57253826 L9.80428954,10.9142091 Z" fill="#000000"></path>
                                                                        </g>
                                                                    </svg>
                                                                </span>
                                                                <span class="kt-widget17__subtitle">
                                                                Upcomming Tours (Week)
                                                                </span> 
                                                                <span class="kt-widget17__desc">
                                                                0
                                                                </span>  
                                                            </div>
                                                            <div class="kt-widget17__item">
                                                                <span class="kt-widget17__icon">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon kt-svg-icon--danger">
                                                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                            <rect x="0" y="0" width="24" height="24"></rect>
                                                                            <path d="M3,16 L5,16 C5.55228475,16 6,15.5522847 6,15 C6,14.4477153 5.55228475,14 5,14 L3,14 L3,12 L5,12 C5.55228475,12 6,11.5522847 6,11 C6,10.4477153 5.55228475,10 5,10 L3,10 L3,8 L5,8 C5.55228475,8 6,7.55228475 6,7 C6,6.44771525 5.55228475,6 5,6 L3,6 L3,4 C3,3.44771525 3.44771525,3 4,3 L10,3 C10.5522847,3 11,3.44771525 11,4 L11,19 C11,19.5522847 10.5522847,20 10,20 L4,20 C3.44771525,20 3,19.5522847 3,19 L3,16 Z" fill="#000000" opacity="0.3"></path>
                                                                            <path d="M16,3 L19,3 C20.1045695,3 21,3.8954305 21,5 L21,15.2485298 C21,15.7329761 20.8241635,16.200956 20.5051534,16.565539 L17.8762883,19.5699562 C17.6944473,19.7777745 17.378566,19.7988332 17.1707477,19.6169922 C17.1540423,19.602375 17.1383289,19.5866616 17.1237117,19.5699562 L14.4948466,16.565539 C14.1758365,16.200956 14,15.7329761 14,15.2485298 L14,5 C14,3.8954305 14.8954305,3 16,3 Z" fill="#000000"></path>
                                                                        </g>
                                                                    </svg>
                                                                </span>
                                                                <span class="kt-widget17__subtitle">
                                                                Total Customers
                                                                </span> 
                                                                <span class="kt-widget17__desc">
                                                                0
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
                                                <a href="http://partner.thetravelsquare.in/fixeddepartures" target="blank" class="btn btn-label-dark btn-sm  btn-bold">
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
                                                <a href="" target="blank" class="btn btn-label-dark btn-sm btn-bold">
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
                                                   Meet us at SATTE 2022
                                                </h3>
                                            </div>
                                            <div class="kt-portlet__head-toolbar">
                                                <a href="" target="blank" class="btn btn-label-dark btn-sm btn-bold">
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
                                    <!--begin:: Widgets/Blog-->
                                    <div class="kt-portlet kt-portlet--height-fluid kt-widget19">
                                        <a href="http://business.thetravelsquare.in/partner-platform-live-demo">
                                            <div class="kt-portlet__body kt-portlet__body--fit kt-portlet__body--unfill">
                                                <div class="kt-widget19__pic kt-portlet-fit--top kt-portlet-fit--sides" style="min-height: 300px; background-image: url(<?= base_url('http://instawiremoney.com/img/instawire-logo-black-big.png');?>)">
                                                    <h3 class="kt-widget19__title kt-font-light">
                                                        Introducing Instawire TravPay
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
                                                    <b><big>Send & Receive Money Overseas </big></b><br>Instawire TravPAY is Your Safe Travel Payments Wallets To , Receive & Send Customer Payments Safely 
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--end:: Widgets/Blog-->	
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
                                        <a href="http://partner.thetravelsquare.in/partner-purchase-leads">
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