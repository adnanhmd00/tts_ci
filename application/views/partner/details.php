
<!DOCTYPE html>
<html lang="en">

<head>
    
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,400,600,700,800,900&display=swap" rel="stylesheet">
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
                <a class="navbar-brand mr-3 swap-link" href="<?= base_url('partner');?>"><span class="text-light font-weight-bold">Go To Dashboard</span></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-between" id="navbarNav">
                    <ul class="navbar-nav">
                       
                    </ul>
                    <ul class="navbar-nav">
                        <li class="nav-item dropdown megamenu">
                            <a class="nav-link dropdown-toggle no-arrow" href="#" role="button" data-toggle="dropdown" aria-expanded="false"><i class="las la-user mr-2" style="font-size:22px;"></i></a>
                            <div class="dropdown-menu dropdown-menu-right" role="menu">
                                <a class="dropdown-item font-weight-bold swap-link" href="#"><i class="las la-user bg-info-alt p-1 rounded text-info"></i> <?= $userinfo->name;?></a>
                                <a class="dropdown-item swap-link" href="#"><i class="las la-sign-out-alt bg-warning-alt text-warning p-1 rounded"></i> <?= ucwords($userinfo->type).' '.ucwords($userinfo->seller_type);?></a>
                                <!-- <a class="dropdown-item swap-link" href="dash-downloads.html"><i class="las la-cloud-download-alt bg-success-alt text-success p-1 rounded"></i> Downloads</a> -->
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item swap-link" href="<?= base_url('partner');?>"><i class="dropdown-icon"></i> Dashboard</a>
                               
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item swap-link" href="<?= base_url('Partner/logout');?>"><i class="las la-sign-out-alt bg-danger-alt text-danger p-1 rounded"></i> Logout</a>
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
                                    <li class="breadcrumb-item mr-1 font-weight-bold"><a href="#">Type( <?= $data['deal_data']->deal_type;?> )</a></li>
                                    <!-- <li class="breadcrumb-item ml-1 font-weight-bold active" aria-current="page">
                                        Library
                                    </li> -->
                                </ol>
                            </nav>
                        </div>
                        
                    </div>
                </div>
            </div>

            <section>
                <div class="container">
                    <div class="row">
                        <div class="col-md-7 col-lg-9">
                            <div class="product-info">

                                <!-- Item Img Slider -->
                                <?php if(!empty($data['deal_image'])) {?>
                                <div class="swiper-container rounded border">
                                    <div class="swiper-wrapper">
                                        <?php foreach($data['deal_image'] as $row){ ?>
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
                            
                            <div class="demo-bar card rounded mt-3 card px-3">
                                <h2>Destination : <?= $data['deal_data']->destination;?></h2>
                                <h2>Details</h2>
                                <?= $data['deal_data']->details;?>
                            </div> 
                            <div class="demo-bar card rounded mt-3 card px-3">
                                <h2>Cancelation Policy</h2>
                                <?= $data['deal_data']->cancelation_policy;?>
                            </div>    
                        </div>
                        <!-- edn: Col 9 -->
                        <div class="col-md-5 col-lg-3">
                            <div class="sidebar sticky-lg-top sticky-md-top">
                                <div class="sidebar-widget">
                                    <h3 class="mb-4"><?= $data['deal_data']->title;?></h3>
                                    <div class="row d-flex justify-content-between align-items-center">
                                       
                                    </div>
                                    <div class="row d-flex justify-content-between align-items-center">
                                        <div class="col-12">
                                            <h6>Valid Until : <?= $data['deal_data']->valid_untill;?></h6>
                                           
                                        </div>
                                    </div>
                                    <?php if(empty($data['quote_if_exist'])){?>
                                        <a href="<?= base_url('Partner/requestQuote/'.$data['deal_data']->id);?>" class="btn btn-primary btn-block" type="button">
                                            Request Quote
                                        </a>
                                    <?php } ?>
                                    <?php if(!empty($data['quote_if_exist'])){?>
                                        <a href="#" class="btn btn-primary btn-block" type="button">
                                            Quote Already Requested
                                        </a>
                                    <?php } ?>
                                </div>

                                <div class="sidebar-widget">
                                    <div class="row">
                                        <div class="col-12">
                                            <span class="sidebar-widget-title--sm"><?=  $data['deal_data']->noofdays;?> Days & <?=  $data['deal_data']->noofnights;?> Nights</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="sidebar-widget">
                                    <div class="row">
                                        <div class="col-12">
                                            
                                            <?php if(!empty($data['deal_inclusion'])) {?>

                                            <span class="sidebar-widget-title--sm">Inclusion</span>

                                            <div class="tags">
                                                <?php foreach($data['deal_inclusion'] as $row){ ?>

                                                    <a href="#" class="badge badge-soft-success text-success mb-1"><?= $row->inclusion;?></a>
                                                    
                                                <?php }?>
                                            </div>
                                            <hr />
                                            <?php }?>
                                            <span class="sidebar-widget-title--sm">Available Dates</span>
                                            <ul class="list-unstyled">
                                                <?php foreach($data['deal_dates'] as $row){ ?>
                                                <li>
                                                    <i class="las la-check mr-2 text-success"></i><?= $row->dates;?>
                                                </li>
                                                <?php }?>
                                                <!-- <li>
                                                    <i class="las la-check mr-2 text-success"></i>Bright & Modern Style
                                                </li>
                                                <li>
                                                    <i class="las la-check mr-2 text-success"></i>AI, SVG, PNG Sources
                                                </li> -->
                                            </ul>
                                            <!-- <hr /> -->

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
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
                            <h4 class="text-white font-weight-bold">Theme<span class="text-muted">Shop</span></h4>
                        </div>
                    </aside>
                    <aside class="col-md">
                        <h6 class="title">Company</h6>
                        <ul class="list-unstyled">
                            <li> <a href="#">About us</a></li>
                            <li> <a href="#">Career</a></li>
                            <li> <a href="#">Find a store</a></li>
                            <li> <a href="#">Rules and terms</a></li>
                            <li> <a href="#">Sitemap</a></li>
                        </ul>
                    </aside>
                    <aside class="col-md">
                        <h6 class="title">Help</h6>
                        <ul class="list-unstyled">
                            <li> <a href="#">Contact us</a></li>
                            <li> <a href="#">Money refund</a></li>
                            <li> <a href="#">Order status</a></li>
                            <li> <a href="#">Shipping info</a></li>
                            <li> <a href="#">Open dispute</a></li>
                        </ul>
                    </aside>
                    <aside class="col-md">
                        <h6 class="title">Account</h6>
                        <ul class="list-unstyled">
                            <li> <a href="#"> User Login </a></li>
                            <li> <a href="#"> User register </a></li>
                            <li> <a href="#"> Account Setting </a></li>
                            <li> <a href="#"> My Orders </a></li>
                        </ul>
                    </aside>
                    <aside class="col-md">
                        <h6><i class="las la-coffee mr-2"></i>Stay Up-to-Date!</h6>
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
                                <a href="/affiliate" class="btn btn-primary btn-sm">
                                    Affiliate
                                </a>
                            </div>
                            <div>
                                <p class="text-white d-none d-md-block m-0 w-75 small ml-3">
                                    Earn 55% and more on all sales
                                </p>
                            </div>
                        </div>
                        <div class="col-12 col-md-4">
                            <div class="d-flex flex-row justify-content-between">
                                <div class="fact">
                                    <h6 class="mb-1">12,961</h6>
                                    <p class="mb-0">Downloads</p>
                                </div>
                                <div class="fact">
                                    <h6 class="mb-1">90</h6>
                                    <p class="mb-0">Authors</p>
                                </div>
                                <div class="fact">
                                    <h6 class="mb-1">270</h6>
                                    <p class="mb-0">Themes</p>
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
                        <span class="pr-2">© 2019 Company name</span>
                        <span class="pr-2"><a href="#">Privacy policy</a></span>
                        <span class="pr-2"><a href="#">Terms of use</a></span>
                    </div>
                    <div class="col-md-6 text-md-right">
                        <a href="#" class="mr-2"><img src="assets/img/payment/footer-visa.svg" width="42"></a>
                        <a href="#" class="mr-2"><img src="assets/img/payment/footer-mastercard.svg" width="42"></a>
                        <a href="#"><img src="assets/img/payment/footer-paypal.svg" width="42"></a>
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