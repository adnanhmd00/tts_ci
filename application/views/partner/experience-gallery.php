<!DOCTYPE html>
    <html lang="en">
    <head>
    	<?php include('head.php');?>
    	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <style>
            *,
            *::after,
            *::before {
            margin: 0;
            padding: 0;
            box-sizing: inherit; 
            }

            html {
            box-sizing: border-box;
            }

            body {
            font-family: "Nunito", sans-serif;
            color: #333;
            /* font-weight: 300; */
            /* line-height: 1.6;  */
            }

            .container {
            width: 60%;
            /* margin: 2rem auto;  */
            }

            .gallery {
            display: grid;
            /* grid-template-columns: repeat(8, 1fr);
            grid-template-rows: repeat(8, 5vw); */
            grid-gap: 5px; 
            }

            .gallery__img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            display: block; 
            }

            .gallery__item--1 {
            grid-column-start: 1;
            grid-column-end: 3;
            grid-row-start: 1;
            grid-row-end: 3;
            }

            .gallery__item--2 {
            grid-column-start: 3;
            grid-column-end: 5;
            grid-row-start: 1;
            grid-row-end: 3;
            }

            .gallery__item--3 {
            grid-column-start: 5;
            grid-column-end: 9;
            grid-row-start: 1;
            grid-row-end: 5;
            }

            .gallery__item--4 {
            grid-column-start: 1;
            grid-column-end: 3;
            grid-row-start: 3;
            grid-row-end: 5;
            }

            .gallery__item--5 {
            grid-column-start: 3;
            grid-column-end: 5;
            grid-row-start: 3;
            grid-row-end: 5;
            }
            }
        </style>
	</head>
    <body class="kt-quick-panel--right kt-demo-panel--right kt-offcanvas-panel--right kt-header--fixed kt-header-mobile--fixed kt-subheader--enabled kt-subheader--fixed kt-subheader--solid kt-aside--enabled kt-aside--fixed" style="">
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
    	<div class="kt-grid kt-grid--hor kt-grid--root">
    		<div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--ver kt-page">
                <?php include('aside.php');?>
                <div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor kt-wrapper" id="kt_wrapper">
                	<?php include('nav.php');?>
                    <div class="container">
                        <h2>NEW BRAND Bungalow in Ubud Bali with Breakfast</h2>
                        <div class="gallery">
                            <figure class="gallery__item gallery__item--1">
                                <img src="https://unsplash.com/photos/uY2kic9wlmc/download?force=true" alt="Gallery image 1" class="gallery__img">
                            </figure>
                            <figure class="gallery__item gallery__item--2">
                                <img src="https://unsplash.com/photos/yWwob8kwOCk/download?force=true" alt="Gallery image 2" class="gallery__img">
                            </figure>
                            <figure class="gallery__item gallery__item--3">
                                <img src="https://unsplash.com/photos/uY2kic9wlmc/download?force=true" alt="Gallery image 3" class="gallery__img">
                                <div class="text-right" style="margin-top: -45px;"><a href="" class="btn btn-light btn-sm mr-3">Show All Photos +</a></div>
                            </figure>
                            <figure class="gallery__item gallery__item--4">
                                <img src="https://unsplash.com/photos/yWwob8kwOCk/download?force=true" alt="Gallery image 4" class="gallery__img">
                            </figure>
                            <figure class="gallery__item gallery__item--5">
                                <img src="https://unsplash.com/photos/Wv65tpVIdDg/download?force=true" alt="Gallery image 5" class="gallery__img">
                            </figure>
                        </div>
                        <h2>Burj Khalifa Observation Deck</h2>
                        <p>Whizz up to the world's tallest tower</p>
                        <span><i class="fa fa-star"></i> 4.5 (3,821 reviews)</span>

                        <div class="row">
                            <div class="col-md-9">
                                <ul style="font-size: 14px;">
                                    <li>Limited Offer: Book this activity and receive a complimentary SIM card! Offer valid until 31 Oct 2019 only. See the Terms & Conditions section below</li>
                                    <li>Limited Offer: Book this activity and receive a complimentary SIM card! Offer valid until 31 Oct 2019 only. See the Terms & Conditions section below</li>
                                    <li>Limited Offer: Book this activity and receive a complimentary SIM card! Offer valid until 31 Oct 2019 only. See the Terms & Conditions section below</li>
                                    <li>Limited Offer: Book this activity and receive a complimentary SIM card! Offer valid until 31 Oct 2019 only. See the Terms & Conditions section below</li>
                                    <li>Limited Offer: Book this activity and receive a complimentary SIM card! Offer valid until 31 Oct 2019 only. See the Terms & Conditions section below</li>
                                </ul>
                            </div>
                            <div class="col-md-3">
                                <div class="card p-3 rounded" style="font-size: 14px">
                                <div>From <span style="font-size: 30px;">₹2,790</span><del>₹3100</del></div>
                                <div>Best price or your money back</div>
                                <div><i class="fa fa-timer"></i>Book now for tomorrow</div>
                                <button class="btn btn-dark">Book Now</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    
            	</div>
        </div>
        <div id="kt_scrolltop" class="kt-scrolltop">
            <i class="fa fa-arrow-up"></i>
        </div>
        <?php include('jquery.php');?>
    </body>
</html>
