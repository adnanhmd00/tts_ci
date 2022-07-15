
<!DOCTYPE html>
<html lang="en">

<head>
    
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,400,600,700,800,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"/>
    <!-- build:css -->
    <link rel="stylesheet" href="<?= base_url('resource/extrapage/vendor/css/line-awesome.css');?>">
    <link rel="stylesheet" href="<?= base_url('resource/extrapage/vendor/css/swiper.min.css');?>">
    <link rel="stylesheet" href="<?= base_url('resource/extrapage/css/bootstrap-custom.css');?>">
    <link rel="stylesheet" href="<?= base_url('resource/extrapage/css/theme.css');?>">
    <!-- endbuild -->
    <link rel="stylesheet" href="<?= base_url('resource/extrapage/css/custom.css');?>">
    <link rel="stylesheet" href="<?= base_url('resource/extrapage/css/rtl.css');?>">
</head>

<body>

    <header class="nav-wrap bg-dark fixed-top">
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-dark px-lg-0">
				
                <a class="navbar-brand mr-3 swap-link" href="http://partner.thetravelsquare.in/partner"><img src="http://partner.thetravelsquare.in/uploads/b2b/the-travel-square-logo.png" height="40" width="40"></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-between" id="navbarNav">
                    <ul class="navbar-nav">
                       
                    </ul>
                    <ul class="navbar-nav">
                        <li class="nav-item dropdown megamenu">
                            <a class="nav-link dropdown-toggle no-arrow" href="#" role="button" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-bars mr-2" style="font-size:25px;"></i></a>
                            <div class="dropdown-menu dropdown-menu-right" role="menu">
                                <a class="dropdown-item font-weight-bold swap-link" href="http://partner.thetravelsquare.in/partner/profile"><i class="fa fa-user bg-dark-alt p-2 rounded text-dark"></i> Shaun Frost</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item swap-link" href="http://partner.thetravelsquare.in/partner"><i class="dropdown-icon"></i>< Dashboard</a>
                               
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item swap-link" href="http://partner.thetravelsquare.in/Partner/logout"><i class="las la-sign-out-alt bg-danger-alt text-danger p-1 rounded"></i> Logout</a>
                            </div>
                        </li>
                        <li class="nav-item d-flex align-items-center">
                        
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </header>
    <main role="main">
        <div class="wrapper">

            <div class="breadcrumb-wrap">
                <div class="container py-3">
                    <div class="row d-flex justify-content-md-between justify-content-sm-center">
                        <div class="col-md-4">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb mb-0">
                                   
                                </ol>
                            </nav>
                        </div>
                       
                    </div>
                </div>
            </div>

            <section>
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 col-lg-12">
                            <div class="product-info">

                                <!-- Item Img Slider -->
                                <?php if(!empty($data[0]['image'])) {?>
                                <div class="swiper-container rounded border">
                                    <div class="swiper-wrapper">
                                        <?php foreach($data[0]['image'] as $row){ ?>
                                            <div class="swiper-slide">
                                                <img src="<?= $row->image;?>" alt="">
                                            </div>
                                        <?php } ?>
                                    </div>
                                    <!-- Add Pagination -->
                                    <div class="swiper-pagination"></div>
                                </div>
                                <?php }?>
                            </div>
                           
                            <div class="demo-bar card rounded mt-3 card px-3"><br><br>
                                <h2 align="left"><?= $data[0]['headline'];?></h2>
                                <h5 align="left"><i><?= $data[0]['tagline'];?></i></h5>
                                <?= $data[0]['blog'];?>
                            </div> 
                            <!-- <div class="demo-bar card rounded mt-3 card px-3">
                                <h2>Cancelation Policy</h2>
                                <?= $data['deal_data']->cancelation_policy;?>
                            </div>     --><br><br>
                        </div>
                        <!-- edn: Col 9 -->
                        
                    </div>
                </div>
            </section>
        </div>
    </main>
    <footer class="section-footer bg-dark position-relative">
        <section class="footer py-5">
            <div class="container">
                <div class="row pb-3">
                    <aside class="col-md-2">
                        <div class="footer-logo">
                            <a href="http://partner.thetravelsquare.in/">
							<img alt="The Travel Square" src="http://thetravelsquare.in/img/the-travel-square-logo-main.png" width="160" height="60">
							</a>
                        </div>
                    </aside>
                    <aside class="col-md">
                        <h6 class="title">About Us</h6>
                        <ul class="list-unstyled">
                            <li> <a href="http://about.thetravelsquare.in/" target="_blank">TTS</a></li>
                            <li> <a href="https://play.google.com/store/apps/details?id=com.application.tts" target="_blank">Download App</a></li>
                            <li> <a href="http://business.thetravelsquare.in/" target="_blank">Partner Platform</a></li>
                            <li> <a href="http://sellerconsle.thetravelsquare.in" target="_blank">Seller Platform</a></li>
                        </ul>
                    </aside>
                    <aside class="col-md">
                        <h6 class="title">Privacy Policy</h6>
                        <ul class="list-unstyled">
                       <li><a href="http://thetravelsquare.in/press-release" target="_blank">Press Release</a></li>
                       <li><a href="http://thetravelsquare.in/investor-relations" target="_blank">Investor Relations</a></li>
                       <li><a href="http://thetravelsquare.in/privacy-policy" target="_blank">Privacy & Cookie Policy</a></li>
                       <li><a href="http://thetravelsquare.in/terms-and-conditions" target="_blank">Terms & Conditions</a></li>
                        </ul>
                    </aside>
                    <aside class="col-md">
                        <h6 class="title">Support Center</h6>
                        <ul class="list-unstyled">
                       <li><a href="http://support.thetravelsquare.in/contactus" target="_blank">Contact Us</a></li>
                       <li><a href="http://support.thetravelsquare.in/customercare" target="_blank">Customer Care</a></li>
                       <li><a href="http://support.thetravelsquare.in/partnercare" target="_blank">Partner Help</a></li>
                       <li><a href="http://support.thetravelsquare.in/seller" target="_blank">Seller Help</a></li>
                        </ul>
                    </aside>
                    <aside class="col-md">
                        <h6><i class="las la-coffee mr-2"></i>Stay Travek Up-to-Date!</h6>
                        <div class="input-group mb-3">
                            <input type="text" class="form-control bg-dark" placeholder="Subscribe" aria-label="Subscribe.." aria-describedby="button-addon2">
                            <div class="input-group-append">
                                <button class="btn btn-primary text-white" type="button" id="button-addon2">@</button>
                            </div>
                        </div>
                    </aside>
                </div>
                <!-- row.// -->
            </div>
            <!-- //container -->
        </section>
        <!-- footer-top.// -->
        <section class="pt-3 pb-4">
            <div class="container">
                <div class="footer-cta rounded border-dark">
                    <div class="row no-gutters d-flex justify-content-between align-items-center">
                        <div class="col-5 col-md-4 affiliate d-flex align-items-center">
                            <div class="aff-btn">
                                <a href="http://business.thetravelsquare.in/" class="btn btn-primary btn-sm">
                                    Become a Partner
                                </a>
                            </div>
                            <div>
                                
                            </div>
                        </div>
                        <div class="col-12 col-md-4">
                            <div class="d-flex flex-row justify-content-between">
                                <div class="fact">
                                    <h6 class="mb-1">12,961+</h6>
                                    <p class="mb-0">Blogs</p>
                                </div>
                                <div class="fact">
                                    <h6 class="mb-1">1M+</h6>
                                    <p class="mb-0">Users</p>
                                </div>
                                <div class="fact">
                                    <h6 class="mb-1">270+</h6>
                                    <p class="mb-0">Destinations</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="footer-bottom border-top border-dark white pt-4">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <span class="pr-2">© 2022 All Right Reseverd | The Travel Square</span>
                       
                    </div>
                    <div class="col-md-6 text-md-right">
                        <a href="https://www.facebook.com/thetravelsquareb2b" class="mr-2"><i class="fa-brands fa-twitter"></i></a>
                        <a href="https://twitter.com/travelsquareb2b" class="mr-2"><i class="fa-brands fa-facebook"></i></a>
                        <a href="https://twitter.com/travelsquareb2b" class="mr-2"><i class="fa-brands fa-instagram"></i></a>
                        <a href="https://www.linkedin.com/company/thetravelsquareb2b/" class="mr-2"><i class="fa-brands fa-linkedin"></i></a>
                    </div>
                </div>
                <!-- row.// -->
            </div>
            <!-- //container -->
        </section>
    </footer> <!-- build:js -->
    <script src="<?= base_url('resource/extrapage/vendor/js/jquery.js');?>"></script>
    <script src="<?= base_url('resource/extrapage/vendor/js/popper.js');?>"></script>
    <script src="<?= base_url('resource/extrapage/vendor/js/bootstrap.js');?>"></script>
    <script src="<?= base_url('resource/extrapage/vendor/js/swiper.min.js');?>"></script>
    <script src="<?= base_url('resource/extrapage/vendor/js/prism.min.js');?>"></script>

    <script src="<?= base_url('resource/extrapage/js/custom.js');?>"></script>

    <!-- endbuild -->

</body>

</html>