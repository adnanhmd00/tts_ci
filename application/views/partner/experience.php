<!DOCTYPE html>
    <html lang="en">
    <head>
    	<?php include('head.php');?>
    	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <style>
            @import "compass/css3";

            *, *:after, *:before {
            -webkit-box-sizing: border-box;
            -moz-box-sizing: border-box;
            box-sizing: border-box;
            }
            #hero1{
                margin-top: -55px;    
                background:url(https://4.bp.blogspot.com/_AQ0vcRxFu0A/S9shDGGyMTI/AAAAAAAAAYk/kn3WTkY2LoQ/s1600/IMG_0714.JPG);
                background-size:cover;
                background-position:center center;
                background-attachment:fixed;
            }
            @media(max-width: 600px){
                #hero1{
                    margin-top: 5px;    
                    background:url(https://4.bp.blogspot.com/_AQ0vcRxFu0A/S9shDGGyMTI/AAAAAAAAAYk/kn3WTkY2LoQ/s1600/IMG_0714.JPG);
                    background-size:cover;
                    background-position:center center;
                    background-attachment:fixed;
                }
            }
            .hero, .content{
                text-align:center; 
                position:relative;
                width: 100%;
            }

            .inner{
                min-height: 910px;
                position: relative;
                top: 30%;
                width: 700px;
            }

            #search-list{
                background: #fff;
                color: #000;
                width: 70%;
                font-size: 20px;
            }

            #search-list a{
                font-size: 20px;
                background: #fff;
                color: #000;
            }

            #search-list li{
                font-size: 20px;
                background: #fff;
                color: #000;
                list-style-type: none;
                padding: 5px;
            }

            #search-list-sm{
                background: #fff;
                color: #000;
                width: 70%;
                font-size: 18px;
            }

            #search-list-sm a{
                font-size: 18px;
                background: #fff;
                color: #000;
            }

            #search-list-sm li{
                font-size: 18px;
                background: #fff;
                color: #000;
                list-style-type: none;
                padding: 5px;
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
                	
                    <section id="hero1" class="hero d-flex justify-content-center">
                        <div class="inner">
                            <!-- <a href="<?= base_url('experience-list');?>"> -->
                            <div class="copy d-none d-lg-block">
                                <h1 class="text-light text-left display-1">Your world of joy</h1>
                                <p class="text-left text-light h3">From local escapes to far-flung adventures, find what makes you happy anytime, anywhere</p>
                                <div class="row">
                                    <input type="text" id="filter" style="min-width: 70%;padding: 15px;">
                                    <button class="btn btn-dark" style="width:30%;">Search</button>
                                    <nav id="search-list" class="text-left">
                                        <ul>
                                        <?php foreach($data as $city){ ?>
                                            <li><a href="<?= base_url('experience-list/'.$city['city']);?>"><?php print_r($city['city']); ?></a></li>
                                            <?php } ?>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                            <!-- </a> -->

                            <!-- <a href="<?= base_url('experience-list');?>"> -->
                            <div class="copy d-sm-block d-lg-none container">
                                <h2 class="text-light text-left">Your world of joy</h2>
                                <h6 class="text-left text-light">From local escapes to far-flung adventures, find what makes you happy anytime, anywhere</h6>
                                <div class="row container p-1 ml-1">
                                    <input type="text" id="filter-sm" style="min-width: 70%;">
                                    <button class="btn btn-dark" style="width:30%;">Search</button>
                                    <nav id="search-list-sm" class="text-left ml-0 pl-0">
                                        <ul>
                                        <?php foreach($data as $city){ ?>
                                            <li><a href="<?= base_url('experience-list/'.$city['city']);?>"><?php print_r($city['city']); ?></a></li>
                                            <?php } ?>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                            <!-- </a> -->
                        </div>
                    </section>
                    
                    <!-- <section class="content">
                        <div class="inner">
                            <div class="copy">
                            <h1>An inspiring quote</h1>
                            <p>/-- file not found --/</p>
                            </div>
                        </div>
                    </section> -->
                    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,700' rel='stylesheet' type='text/css'>
                    <link href='https://fonts.googleapis.com/css?family=Noto+Sans' rel='stylesheet' type='text/css'>
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

            $(document).ready(function(){
                $('#search-list-sm').hide();
                    $("#filter-sm").keyup(function(){
                    $('#search-list-sm').show();
                    var filter = $(this).val();
                    if(filter == ''){
                        $('#search-list-sm').hide();
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
