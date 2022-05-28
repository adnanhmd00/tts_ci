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
            input[type="checkbox"] {
                -ms-transform: scale(1.3); /* IE 9 */
                -webkit-transform: scale(1.3); /* Chrome, Safari, Opera */
                transform: scale(1.3);
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
                    
            .footer{
                position: fixed;
                left: 15%;
                bottom: 0;
                width: 85%;
                background-color: #d5d5d5;
                color: white;
                text-align: center;
                padding: 20px;
            }

            /* Progress Bar Flight Details */

            /* .progressbar {
                counter-reset: step;
            } */
            .progressbar li {
                list-style: none;
                display: inline-block;
                width: 30.33%;
                position: relative;
                text-align: center;
                cursor: pointer;
            }
            .progressbar li:before {
                /* content: counter(step);
                counter-increment: step; */
                width: 30px;
                height: 30px;
                line-height : 30px;
                border: 1px solid #ddd;
                border-radius: 100%;
                display: block;
                text-align: center;
                margin: 0 auto 10px auto;
                background-color: #fff;
            }
            .progressbar li:after {
                content: "";
                position: absolute;
                width: 100%;
                height: 1px;
                background-color: #ddd;
                top: 15px;
                left: -50%;
                z-index : -1;
            }
            .progressbar li:first-child:after {
                content: none;
            }
            .progressbar li.active {
                color: green;
            }
            .progressbar li.active:before {
                border-color: green;
            } 
            .progressbar li.active + li:after {
                background-color: green;
            }


            /* Dropdown coutner start */
            span {cursor:pointer; }
            .number{
                /* margin:100px; */
            }
		.minus, .plus{
			width:20px;
			height:20px;
			/* background:#f2f2f2; */
			border-radius:4px;
			/* padding:8px 5px 8px 5px; */
			border:1px solid #ddd;
            display: inline-block;
            /* vertical-align: middle; */
            text-align: center;
		}
		.number input{
			/* height:34px; */
            width: 80%;
            text-align: center;
            /* font-size: 26px; */
            border:1px solid #ddd;
            border-radius:4px;
            display: inline-block;
            vertical-align: middle;
        }
            /* Dropdown coutner end */
        </style>

        <!-- Date Picker -->
        <script src="//code.jquery.com/jquery-1.9.1.min.js"></script>
        <link href="//code.jquery.com/ui/1.9.2/themes/smoothness/jquery-ui.css" rel="stylesheet" />
        <script src="//code.jquery.com/ui/1.9.2/jquery-ui.min.js"></script>
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
                        <!-- end:: Content Head -->					
                        <!-- begin:: Content -->
                        <div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">
                            <div style="background-color: #fff" class="col-lg-12 col-xl-12 order-lg-1 order-xl-1 p-4">
                                <div class="d-lg-none row bg-white p-3">
                                    <div class="col-md-2">
                                        <div class="form-group">
                                            <label for="trip">Trip</label>
                                            <select name="" id="" class="form-control">
                                                <option value="">One Way</option>
                                                <option value="">Round Trip</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="form-group">
                                            <label for="from">From</label>
                                            <div class="row-fluid">
                                                <select class="selectpicker form-control" data-show-subtext="true" data-live-search="true">
                                                    <option data-subtext="Rep California">Tom Foolery</option>
                                                    <option data-subtext="Sen California">Bill Gordon</option>
                                                    <option data-subtext="Sen Massacusetts">Elizabeth Warren</option>
                                                    <option data-subtext="Rep Alabama">Mario Flores</option>
                                                    <option data-subtext="Rep Alaska">Don Young</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="form-group">
                                            <label for="to">To</label>
                                            <div class="row-fluid">
                                                <select class="selectpicker form-control" data-show-subtext="true" data-live-search="true">
                                                    <option data-subtext="Rep California">Tom Foolery</option>
                                                    <option data-subtext="Sen California">Bill Gordon</option>
                                                    <option data-subtext="Sen Massacusetts">Elizabeth Warren</option>
                                                    <option data-subtext="Rep Alabama">Mario Flores</option>
                                                    <option data-subtext="Rep Alaska">Don Young</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="form-group">
                                            <label for="trip">Depart</label>
                                            <input id="datepicker-from" class="form-control" placeholder="Select date" id="inputDate">                                        </div>
                                        </div>
                                    <div class="col-md-2">
                                        <div class="form-group">
                                            <label for="trip">Return</label>
                                            <input id="datepicker-to" class="form-control" placeholder="Select date" id="inputDate">                                        </div>
                                        </div>
                                    <div class="col-md-2">
                                        
                                    
                                    <div class="form-group">
                                                <label for="travellers">Travellers</label>
                                                    <div class="dropdown">
                                                    <button class="btn btn-secondary btn-block dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        Select
                                                    </button>
                                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                        <div class="ml-4">Adults</div>
                                                            <div class="dropdown-item" href="#"><div class="number">
                                                                <span class="minus">-</span>
                                                                <input type="text" value="1"/>
                                                                <span class="plus">+</span>
                                                            </div>
                                                        </div>
                                                        <div class="ml-4">Child</div>
                                                            <div class="dropdown-item" href="#"><div class="number">
                                                                <span class="minus">-</span>
                                                                <input type="text" value="0"/>
                                                                <span class="plus">+</span>
                                                            </div>
                                                        </div>
                                                        <div class="ml-4">Infants</div>
                                                            <div class="dropdown-item" href="#"><div class="number">
                                                                <span class="minus">-</span>
                                                                <input type="text" value="0"/>
                                                                <span class="plus">+</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    </div>
                                                </div>
                                    </div>
                                </div>
                                <table class="table d-none d-lg-block">
                                    <tbody>
                                        <tr>
                                            <td>
                                                <div class="form-group">
                                                    <label for="trip">Trip</label>
                                                    <select name="" id="" class="form-control">
                                                        <option value="">One Way</option>
                                                        <option value="">Round Trip</option>
                                                    </select>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="form-group">
                                                    <label for="trip">From</label>
                                                    <div class="row-fluid">
                                                        <select class="selectpicker form-control" data-show-subtext="true" data-live-search="true">
                                                            <option data-subtext="Rep California">Tom Foolery</option>
                                                            <option data-subtext="Sen California">Bill Gordon</option>
                                                            <option data-subtext="Sen Massacusetts">Elizabeth Warren</option>
                                                            <option data-subtext="Rep Alabama">Mario Flores</option>
                                                            <option data-subtext="Rep Alaska">Don Young</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="form-group">
                                                    <label for="trip">To</label>
                                                    <div class="row-fluid">
                                                        <select class="selectpicker form-control" data-show-subtext="true" data-live-search="true">
                                                            <option data-subtext="Rep California">Tom Foolery</option>
                                                            <option data-subtext="Sen California">Bill Gordon</option>
                                                            <option data-subtext="Sen Massacusetts">Elizabeth Warren</option>
                                                            <option data-subtext="Rep Alabama">Mario Flores</option>
                                                            <option data-subtext="Rep Alaska">Don Young</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="form-group">
                                                    <label for="trip">Depart</label>
                                                    <input style="width: 150px;" id="datepicker-from-lg" class="form-control" placeholder="Select date" id="inputDate">                                        </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="form-group">
                                                    <label for="trip">Return</label>
                                                    <input style="width: 150px;" id="datepicker-to-lg" class="form-control" placeholder="Select date" id="inputDate">                                        </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="form-group">
                                                <label for="travellers">Travellers</label>
                                                    <div class="dropdown">
                                                    <button class="btn btn-secondary btn-block dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        Select
                                                    </button>
                                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                        <div class="ml-4">Adults</div>
                                                            <div class="dropdown-item" href="#"><div class="number">
                                                                <span class="minus">-</span>
                                                                <input type="text" value="1"/>
                                                                <span class="plus">+</span>
                                                            </div>
                                                        </div>
                                                        <div class="ml-4">Child</div>
                                                            <div class="dropdown-item" href="#"><div class="number">
                                                                <span class="minus">-</span>
                                                                <input type="text" value="1"/>
                                                                <span class="plus">+</span>
                                                            </div>
                                                        </div>
                                                        <div class="ml-4">Infants</div>
                                                            <div class="dropdown-item" href="#"><div class="number">
                                                                <span class="minus">-</span>
                                                                <input type="text" value="1"/>
                                                                <span class="plus">+</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="form-group text-center mt-1">
                                                    <label for=""></label>
                                                    <button class="btn btn-primary"><i class="fa fa-search"></i></button>
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                                <!-- <div class="form-group text-center">
                                    <button class="btn btn-primary">Search Flights</button>
                                </div> -->
                            </div>   
                            
                            
                            <div class="row mt-3 mb-4">
                                <div class="col-md-8">
                                    <h5>Showing Results for:</h5>
                                    <div class="row mb-2">
                                        <div class="col-xs-6 col-sm-6 col-md-6">
                                            <div class="card p-3">
                                                <div class="ml-5">
                                                    <input type="radio" class="mt-2" name="optradio">
                                                    <span style="font-size: 20px;">&nbsp;&nbsp;DEL > IXC (07 Mar)</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-6 col-md-6">
                                            <div class="card p-3">
                                                <div class="ml-5">
                                                    <input type="radio" class="mt-2" name="optradio">
                                                    <span style="font-size: 20px;">&nbsp;&nbsp;DEL > IXC (07 Mar)</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card" id="demo">
                                        <table class="table">
                                            <thead class="text-center">
                                                <tr>
                                                    <th>Airline</th>
                                                    <th>Departure</th>
                                                    <th>Duration</th>
                                                    <th>Arrival</th>
                                                    <th>Price</th>
                                                </tr>
                                            </thead>
                                            <tbody id="get-info">
                                                <tr>
                                                    <td>
                                                        <div class="text-center">
                                                            <img style="width:50px; height: 50px;" src="https://s3.ap-south-1.amazonaws.com/com.travclan.cms.production/appcms/2.png" alt="" class="img-responsive rounded">
                                                            <div id="flight-name" class="lead">AI - 9831T</div> 
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="text-center">
                                                            <div id="board-time" style="font-size: 24px;">19:45</div>
                                                            <div id="board-city" class="lead">DEL</div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="text-center">
                                                            <div class="h5 mt-4">1h 0m</div>
                                                            <strong id="flight-type" style="font-size: 12px;">Non Stop</strong>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="text-center">
                                                            <div id="depart-time" style="font-size: 24px;">20:45</div>
                                                            <div id="depart-city" class="lead">IXC</div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="text-center mt-4">
                                                            <div id="flight-price" class="h3">₹ 2,895</div>
                                                        </div>
                                                    </td>
                                                </tr>
                                            </tbody>

                                        <tbody id="demo-1">
                                                <tr>
                                                    <td>
                                                        <div class="text-center">
                                                            <img style="width:50px; height: 50px;" src="https://s3.ap-south-1.amazonaws.com/com.travclan.cms.production/appcms/2.png" alt="" class="img-responsive rounded">
                                                            <div id="flight-name" class="lead">AI - 9831T</div> 
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="text-center">
                                                            <div id="board-time" style="font-size: 24px;">19:45</div>
                                                            <div id="board-city" class="lead">DEL</div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="text-center">
                                                            <div class="h5 mt-4">1h 0m</div>
                                                            <strong id="flight-type" style="font-size: 12px;">Non Stop</strong>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="text-center">
                                                            <div id="depart-time" style="font-size: 24px;">20:45</div>
                                                            <div id="depart-city" class="lead">IXC</div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="text-center mt-4">
                                                            <div id="flight-price" class="h3">₹ 2,895</div>
                                                        </div>
                                                    </td>
                                                </tr>
                                            </tbody>

                                        <tbody>
                                                <tr>
                                                    <td>
                                                        <div class="text-center">
                                                            <img style="width:50px; height: 50px;" src="https://s3.ap-south-1.amazonaws.com/com.travclan.cms.production/appcms/2.png" alt="" class="img-responsive rounded">
                                                            <div id="flight-name" class="lead">AI - 9831T</div> 
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="text-center">
                                                            <div id="board-time" style="font-size: 24px;">19:45</div>
                                                            <div id="board-city" class="lead">DEL</div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="text-center">
                                                            <div class="h5 mt-4">1h 0m</div>
                                                            <strong id="flight-type" style="font-size: 12px;">Non Stop</strong>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="text-center">
                                                            <div id="depart-time" style="font-size: 24px;">20:45</div>
                                                            <div id="depart-city" class="lead">IXC</div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="text-center mt-4">
                                                            <div id="flight-price" class="h3">₹ 2,895</div>
                                                        </div>
                                                    </td>
                                                </tr>
                                            </tbody>

                                        <tbody>
                                                <tr>
                                                    <td>
                                                        <div class="text-center">
                                                            <img style="width:50px; height: 50px;" src="https://s3.ap-south-1.amazonaws.com/com.travclan.cms.production/appcms/2.png" alt="" class="img-responsive rounded">
                                                            <div id="flight-name" class="lead">AI - 9831T</div> 
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="text-center">
                                                            <div id="board-time" style="font-size: 24px;">19:45</div>
                                                            <div id="board-city" class="lead">DEL</div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="text-center">
                                                            <div class="h5 mt-4">1h 0m</div>
                                                            <strong id="flight-type" style="font-size: 12px;">Non Stop</strong>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="text-center">
                                                            <div id="depart-time" style="font-size: 24px;">20:45</div>
                                                            <div id="depart-city" class="lead">IXC</div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="text-center mt-4">
                                                            <div id="flight-price" class="h3">₹ 2,895</div>
                                                        </div>
                                                    </td>
                                                </tr>
                                            </tbody>

                                        <tbody>
                                                <tr>
                                                    <td>
                                                        <div class="text-center">
                                                            <img style="width:50px; height: 50px;" src="https://s3.ap-south-1.amazonaws.com/com.travclan.cms.production/appcms/2.png" alt="" class="img-responsive rounded">
                                                            <div id="flight-name" class="lead">AI - 9831T</div> 
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="text-center">
                                                            <div id="board-time" style="font-size: 24px;">19:45</div>
                                                            <div id="board-city" class="lead">DEL</div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="text-center">
                                                            <div class="h5 mt-4">1h 0m</div>
                                                            <strong id="flight-type" style="font-size: 12px;">Non Stop</strong>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="text-center">
                                                            <div id="depart-time" style="font-size: 24px;">20:45</div>
                                                            <div id="depart-city" class="lead">IXC</div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="text-center mt-4">
                                                            <div id="flight-price" class="h3">₹ 2,895</div>
                                                        </div>
                                                    </td>
                                                </tr>
                                            </tbody>

                                        <tbody>
                                                <tr>
                                                    <td>
                                                        <div class="text-center">
                                                            <img style="width:50px; height: 50px;" src="https://s3.ap-south-1.amazonaws.com/com.travclan.cms.production/appcms/2.png" alt="" class="img-responsive rounded">
                                                            <div id="flight-name" class="lead">AI - 9831T</div> 
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="text-center">
                                                            <div id="board-time" style="font-size: 24px;">19:45</div>
                                                            <div id="board-city" class="lead">DEL</div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="text-center">
                                                            <div class="h5 mt-4">1h 0m</div>
                                                            <strong id="flight-type" style="font-size: 12px;">Non Stop</strong>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="text-center">
                                                            <div id="depart-time" style="font-size: 24px;">20:45</div>
                                                            <div id="depart-city" class="lead">IXC</div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="text-center mt-4">
                                                            <div id="flight-price" class="h3">₹ 2,895</div>
                                                        </div>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="row mt-4 ml-4">
                                        <div class="h5">
                                            Filters for Departure
                                        </div>
                                    </div>
                                    <div class="bg-white mt-3">
                                        <div class="text-right">
                                            <p class="lead">Clear All</p>
                                        </div>
                                        <div class="ml-4">
                                            <h4 class="mb-3">Stops</h4>
                                            <div class="form-group">
                                                <div class="form-check mb-3">
                                                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                                    <label style="font-size: 14px;" class="form-check-label" for="exampleCheck1"><span class="font-weight-normal lead">&nbsp; Non Stop</span></label>
                                                </div>
                                                <div class="form-check mb-3">
                                                    <input type="checkbox" class="form-check-input" id="exampleCheck2">
                                                    <label style="font-size: 14px;" class="form-check-label" for="exampleCheck2"><span class="font-weight-normal lead">&nbsp; 1 Stop</span></label>
                                                </div>
                                                <div class="form-check mb-3">
                                                    <input type="checkbox" class="form-check-input" id="exampleCheck3">
                                                    <label style="font-size: 14px;" class="form-check-label" for="exampleCheck3"><span class="font-weight-normal lead">&nbsp; 2+ Stop</span></label>
                                                </div>
                                            </div>

                                            <h4 class="mb-3">One Way Price</h4>
                                            <div class="form-group">
                                                <div class="lead">Up to INR 7,540</div>
                                                <div class="slidecontainer">
                                                    <input style="width: 100%;" type="range" min="1" max="100" value="50" class="slider" id="myRange">
                                                </div>
                                                <div class="text-right lead mr-2">INR 7,540</div>
                                            </div>
                                            
                                            <h4 class="mb-3">Refundable</h4>
                                            <div class="form-group">
                                                <div class="form-check mb-3">
                                                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                                    <label style="font-size: 14px;" class="form-check-label" for="exampleCheck1"><span class="font-weight-normal lead">&nbsp; Refundable</span></label>
                                                </div>
                                                <div class="form-check mb-3">
                                                    <input type="checkbox" class="form-check-input" id="exampleCheck2">
                                                    <label style="font-size: 14px;" class="form-check-label" for="exampleCheck2"><span class="font-weight-normal lead">&nbsp; Non-Refundable</span></label>
                                                </div>
                                            </div>
                                            
                                            <h4 class="mb-3">Departure Time</h4>
                                            <div class="form-group">
                                                <div class="form-check mb-3">
                                                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                                    <label style="font-size: 14px;" class="form-check-label" for="exampleCheck1"><span class="font-weight-normal lead">&nbsp; 12am to 8am</span></label>
                                                </div>
                                                <div class="form-check mb-3">
                                                    <input type="checkbox" class="form-check-input" id="exampleCheck2">
                                                    <label style="font-size: 14px;" class="form-check-label" for="exampleCheck2"><span class="font-weight-normal lead">&nbsp; 8am to 12pm</span></label>
                                                </div>
                                                <div class="form-check mb-3">
                                                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                                    <label style="font-size: 14px;" class="form-check-label" for="exampleCheck1"><span class="font-weight-normal lead">&nbsp; 12pm to 4pm</span></label>
                                                </div>
                                                <div class="form-check mb-3">
                                                    <input type="checkbox" class="form-check-input" id="exampleCheck2">
                                                    <label style="font-size: 14px;" class="form-check-label" for="exampleCheck2"><span class="font-weight-normal lead">&nbsp; 4pm to 8pm</span></label>
                                                </div>
                                                <div class="form-check mb-3">
                                                    <input type="checkbox" class="form-check-input" id="exampleCheck2">
                                                    <label style="font-size: 14px;" class="form-check-label" for="exampleCheck2"><span class="font-weight-normal lead">&nbsp; 8pm to 12pm</span></label>
                                                </div>
                                            </div>
                                            
                                            <h4 class="mb-3">Arrival Time</h4>
                                            <div class="form-group">
                                                <div class="form-check mb-3">
                                                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                                    <label style="font-size: 14px;" class="form-check-label" for="exampleCheck1"><span class="font-weight-normal lead">&nbsp; 12am to 8am</span></label>
                                                </div>
                                                <div class="form-check mb-3">
                                                    <input type="checkbox" class="form-check-input" id="exampleCheck2">
                                                    <label style="font-size: 14px;" class="form-check-label" for="exampleCheck2"><span class="font-weight-normal lead">&nbsp; 8am to 12pm</span></label>
                                                </div>
                                                <div class="form-check mb-3">
                                                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                                    <label style="font-size: 14px;" class="form-check-label" for="exampleCheck1"><span class="font-weight-normal lead">&nbsp; 12pm to 4pm</span></label>
                                                </div>
                                                <div class="form-check mb-3">
                                                    <input type="checkbox" class="form-check-input" id="exampleCheck2">
                                                    <label style="font-size: 14px;" class="form-check-label" for="exampleCheck2"><span class="font-weight-normal lead">&nbsp; 4pm to 8pm</span></label>
                                                </div>
                                                <div class="form-check mb-3">
                                                    <input type="checkbox" class="form-check-input" id="exampleCheck2">
                                                    <label style="font-size: 14px;" class="form-check-label" for="exampleCheck2"><span class="font-weight-normal lead">&nbsp; 8pm to 12pm</span></label>
                                                </div>
                                            </div>
                                            
                                            <h4 class="mb-3">Airlines</h4>
                                            <div class="form-group">
                                                <div class="form-check mb-3">
                                                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                                    <label style="font-size: 14px;" class="form-check-label" for="exampleCheck1"><span class="font-weight-normal lead">&nbsp; Air India</span></label>
                                                </div>
                                                <div class="form-check mb-3">
                                                    <input type="checkbox" class="form-check-input" id="exampleCheck2">
                                                    <label style="font-size: 14px;" class="form-check-label" for="exampleCheck2"><span class="font-weight-normal lead">&nbsp; Vistara</span></label>
                                                </div>
                                                <div class="form-check mb-3">
                                                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                                    <label style="font-size: 14px;" class="form-check-label" for="exampleCheck1"><span class="font-weight-normal lead">&nbsp; Indigo</span></label>
                                                </div>
                                            </div>
                                            <br>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end:: Content -->				
                    </div>
                    <div class="d-none d-lg-block footer kt-footer text-dark kt-grid__item kt-grid kt-grid--desktop kt-grid--ver-desktop" id="footer ">
                        <button onclick="hideShowDetails()" style="display:none;" id="btn-up" class="btn btn-secondary float-right"><i class="fa fa-angle-double-up"></i></button>
                        <button onclick="hideShowDetails()" id="btn-down" class="btn btn-secondary float-right"><i class="fa fa-angle-double-down"></i></button>
                        <p class="lead text-left" style="margin-left: 60px;">Selected Flight &nbsp;<span style="font-size: 12px; text-decoration: underline;"><a href="" data-toggle="modal" data-target="#flightDetail">Flight Details</a></span></p>
                        <div id="details" class="kt-container  kt-container--fluid ">
                            <div class="col-md-8 ml-4">
                           
                                <div class="card">
                                <table class="table">
                                    <tbody id="append-info"></tbody>
                                </table>
                                 
                                </div>
                            </div>
                            <div class="col-md-4">                                <div>
                                    <div class="row mt-5">
                                        <p class="h5 mr-3">Total Net Price</p>
                                        <p class="h3">₹ 2,895</p>
                                        <p></p>
                                    </div>
                                    <div class="row">
                                        <button class="btn btn-primary btn-block">Continue</button>
                                    </div>
                                </div>
                            </div>
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

        <!-- Flight Detail Modal Start -->
        <div class="offset-md-2 col-md-9 modal fade" id="flightDetail">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <!-- Modal Header -->
                    <div class="modal-header">
                        <!-- <h4 class="modal-title">Modal Heading</h4> -->
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
                    <!-- Modal body -->
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item" style="width: 50%;">
                            <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Home</a>
                        </li>
                        <li class="nav-item" style="width: 50%;">
                            <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Profile</a>
                        </li>
                    </ul>
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                            <ul class="progressbar">
                                <li class="active">Step 1</li>
                                <li>Step 2</li>
                                <li>Step 3</li>
                            </ul>
                        </div>
                        <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                            def
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Flight Detail Modal End -->

        <script>
        $(function() {
        $("#datepicker-from").datepicker({
            beforeShow: addCustomInformation,
            //---^----------- if closed by default (when you're using <input>)
            beforeShowDay: function(date) {
            return [true, date.getDay() === 5 || date.getDay() === 6 ? "weekend" : "weekday"];
            },
            onChangeMonthYear: addCustomInformation,
            onSelect: addCustomInformation
        });
        addCustomInformation(); // if open by default (when you're using <div>)
        });

        $(function() {
        $("#datepicker-to").datepicker({
            beforeShow: addCustomInformation,
            //---^----------- if closed by default (when you're using <input>)
            beforeShowDay: function(date) {
            return [true, date.getDay() === 5 || date.getDay() === 6 ? "weekend" : "weekday"];
            },
            onChangeMonthYear: addCustomInformation,
            onSelect: addCustomInformation
        });
        addCustomInformation(); // if open by default (when you're using <div>)
        });

        $(function() {
        $("#datepicker-from-lg").datepicker({
            beforeShow: addCustomInformation,
            //---^----------- if closed by default (when you're using <input>)
            beforeShowDay: function(date) {
            return [true, date.getDay() === 5 || date.getDay() === 6 ? "weekend" : "weekday"];
            },
            onChangeMonthYear: addCustomInformation,
            onSelect: addCustomInformation
        });
        addCustomInformation(); // if open by default (when you're using <div>)
        });

        $(function() {
        $("#datepicker-to-lg").datepicker({
            beforeShow: addCustomInformation,
            //---^----------- if closed by default (when you're using <input>)
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
        <!-- Selected Item In Footer -->
        <script>
        $(document).ready(function() {
            $("#get-info").click(function() {
                var res = $('#demo-1').html();
                // alert(res);
                // $("#append-info").append(res);
                console.log(res);
                document.getElementById("append-info").innerHTML = res;
            });
        });
        </script>
        
        <script>
        function hideShowDetails() {
        var x = document.getElementById("details");
        if (x.style.display === "none") {
            $('#btn-up').hide();
            $('#btn-down').show();
            x.style.display = "";
        } else {
            $('#btn-down').hide();
            $('#btn-up').show();
            x.style.display = "none";
        }
        }
        </script>


        <script>
            $(document).ready(function() {
			$('.minus').click(function () {
				var $input = $(this).parent().find('input');
				var count = parseInt($input.val()) - 1;
				count = count < 1 ? 1 : count;
				$input.val(count);
				$input.change();
				return false;
			});
			$('.plus').click(function () {
				var $input = $(this).parent().find('input');
				$input.val(parseInt($input.val()) + 1);
				$input.change();
				return false;
			});
		});
        </script>
    </body>
</html>
