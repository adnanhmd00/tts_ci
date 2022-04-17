<!DOCTYPE html>
    <html lang="en">
    <head>
    	<?php include('head.php');?>
    	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <style>

            /* Mobile slideshow start */
            /* Slideshow container */
            .slideshow-container {
            max-width: 1000px;
            position: relative;
            margin: auto;
            }

            /* Hide the images by default */
            .mySlides {
            display: none;
            }

            /* Next & previous buttons */
            .prev, .next {
            cursor: pointer;
            position: absolute;
            top: 50%;
            width: auto;
            margin-top: -22px;
            padding: 16px;
            color: white;
            font-weight: bold;
            font-size: 18px;
            transition: 0.6s ease;
            border-radius: 0 3px 3px 0;
            user-select: none;
            }

            /* Position the "next button" to the right */
            .next {
            right: 0;
            border-radius: 3px 0 0 3px;
            }

            /* On hover, add a black background color with a little bit see-through */
            .prev:hover, .next:hover {
            background-color: rgba(0,0,0,0.8);
            }

            /* Caption text */
            .text {
            color: #f2f2f2;
            font-size: 15px;
            padding: 8px 12px;
            position: absolute;
            bottom: 8px;
            width: 100%;
            text-align: center;
            }

            /* Number text (1/3 etc) */
            .numbertext {
            color: #f2f2f2;
            font-size: 12px;
            padding: 8px 12px;
            position: absolute;
            top: 0;
            }

            /* The dots/bullets/indicators */
            .dot {
            cursor: pointer;
            height: 15px;
            width: 15px;
            margin: 0 2px;
            background-color: #bbb;
            border-radius: 50%;
            display: inline-block;
            transition: background-color 0.6s ease;
            }

            .active, .dot:hover {
            background-color: #717171;
            }

            /* Fading animation */
            .fade {
            animation-name: fade;
            animation-duration: 1.5s;
            }

            @keyframes fade {
            from {opacity: .4}
            to {opacity: 1}
            }
            /* Mobile Slideshow end */
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
            

            .container{
                width: 90% !important;
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
                        <h2><?php echo $data[0]['experience_name']; ?></h2>

                        <div class="d-sm-block d-lg-none">
                            <!-- Slideshow container -->
                            <div class="slideshow-container">

                            <!-- Full-width images with number and caption text -->
                            <?php foreach(json_decode($data[0]['photos_of_experience']) as $photos){ ?>
                            <div class="mySlides fade">
                                <img src="<?php echo $photos; ?>" style="width:100%">
                            </div>
                            <?php } ?>


                            <!-- Next and previous buttons -->
                            <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                            <a class="next" onclick="plusSlides(1)">&#10095;</a>
                            </div>
                            <br>

                            <!-- The dots/circles -->
                            <div style="text-align:center">
                            <span class="dot" onclick="currentSlide(1)"></span>
                            <span class="dot" onclick="currentSlide(2)"></span>
                            <span class="dot" onclick="currentSlide(3)"></span>
                            </div>
                        </div>
                        <div class="container d-none d-lg-block">
                            <div class="gallery">
                                <figure class="gallery__item gallery__item--1">
                                    <img src="<?php echo json_decode($data[0]['photos_of_experience'])[0] ?>" alt="Gallery image 1" class="gallery__img">
                                </figure>
                                <figure class="gallery__item gallery__item--2">
                                    <img src="<?php echo json_decode($data[0]['photos_of_experience'])[1] ?>" alt="Gallery image 2" class="gallery__img">
                                </figure>
                                <figure class="gallery__item gallery__item--3">
                                    <img src="<?php echo json_decode($data[0]['photos_of_experience'])[2] ?>" alt="Gallery image 3" class="gallery__img">
                                    <div class="text-right" style="margin-top: -45px;"><a href="" class="btn btn-light btn-sm mr-3">Show All Photos +</a></div>
                                </figure>
                                <figure class="gallery__item gallery__item--4">
                                    <img src="<?php echo json_decode($data[0]['photos_of_experience'])[3] ?>" alt="Gallery image 4" class="gallery__img">
                                </figure>
                                <figure class="gallery__item gallery__item--5">
                                    <img src="<?php echo json_decode($data[0]['photos_of_experience'])[4] ?>" alt="Gallery image 5" class="gallery__img">
                                </figure>
                            </div>
                        </div>
                        <div class="container d-none d-lg-block">
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

                        <div class="container-fluid d-sm-block d-lg-none">
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
        </div>
        <div id="kt_scrolltop" class="kt-scrolltop">
            <i class="fa fa-arrow-up"></i>
        </div>
        <?php include('jquery.php');?>
        <!-- Mobile slideshow start -->
        <script>
          let slideIndex = 0;
            showSlides();

            function showSlides() {
            let i;
            let slides = document.getElementsByClassName("mySlides");
            for (i = 0; i < slides.length; i++) {
                slides[i].style.display = "none";
            }
            slideIndex++;
            if (slideIndex > slides.length) {slideIndex = 1}
            slides[slideIndex-1].style.display = "block";
            setTimeout(showSlides, 2000); // Change image every 2 seconds
            }
        </script>
        <!-- Mobile slideshow end -->
    </body>
</html>
