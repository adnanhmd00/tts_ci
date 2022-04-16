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
                        <h2>Explore all things to do in Dubai 2022</h2>
                        <div class="d-flex justify-content-end d-sm-block d-lg-none">
                        <button type="button" class="btn btn-outline-primary" data-toggle="modal" data-target="#filterModal">
                            Filter
                        </button>
                        </div>
                        <!-- The Modal -->
                        <div class="fade modal" id="filterModal">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h4 class="modal-title">Filter</h4>
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    </div>
                                    <div class="modal-body">
                                    <div class="form-check">
                                            <label class="form-check-label">
                                                <input type="checkbox" class="form-check-input" value="">Option 1
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <label class="form-check-label">
                                                <input type="checkbox" class="form-check-input" value="">Option 2
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <label class="form-check-label">
                                                <input type="checkbox" class="form-check-input" value="" disabled>Option 3
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-3 d-none d-lg-block">
                                <div class="card p-2">
                                    <h3>Filters</h3>
                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input type="checkbox" class="form-check-input" value="">Option 1
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input type="checkbox" class="form-check-input" value="">Option 2
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input type="checkbox" class="form-check-input" value="" disabled>Option 3
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-9">
                            <?php echo $count; ?> activities found
                            <div class="row">
                                <?php foreach($data as $experience){ ?>
                                <div class="col-md-4  mt-3 rounded">
                                    <a href="/experience-detail">
                                        <div class="card">
                                            <img src="https://res.klook.com/image/upload/c_fill,w_420,h_260/activities/wnkhtwo4n0dhe6zmrbcs.webp" alt="" class="img-fluid">
                                            <div class="mx-2">
                                                <h6 class="p-2"><?php echo $experience['experience_name']; ?></h6>
                                                <span><i class="fa fa-star"></i>4.5</span>
                                                <del>₹<?php echo $experience['price_1']; ?></del>
                                                <div>From <strong>₹<?php echo $experience['price_2']; ?></strong></div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <?php } ?>
                            </div>
                            </div>
                        </div>
                    </div>
                    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,700' rel='stylesheet' type='text/css'>
                    <link href='https://fonts.googleapis.com/css?family=Noto+Sans' rel='stylesheet' type='text/css'>
                </div>
            	</div>
        </div>
        <div id="kt_scrolltop" class="kt-scrolltop">
            <i class="fa fa-arrow-up"></i>
        </div>
        <?php include('jquery.php');?>
    </body>
</html>
