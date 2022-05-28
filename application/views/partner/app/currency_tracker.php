<!DOCTYPE html>
<html lang="en">
    <!-- begin::Head -->
	

<title>Currency Tracker | TTS APP</title>	

<head>

<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
     
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="http://partner.thetravelsquare.in/resource/admin/files/css">
<link href="http://partner.thetravelsquare.in/resource/admin/files/login-1.css" rel="stylesheet" type="text/css">
<link href="" rel="stylesheet" type="text/css">
<link href="http://partner.thetravelsquare.in/resource/admin/files/plugins.bundle.css" rel="stylesheet" type="text/css">
<link href="http://partner.thetravelsquare.in/resource/admin/files/style.bundle.css" rel="stylesheet" type="text/css">
<link href="http://partner.thetravelsquare.in/resource/admin/files/fullcalendar.bundle.css" rel="stylesheet" type="text/css">
<link href="http://partner.thetravelsquare.in/resource/admin/files/dark.css" rel="stylesheet" type="text/css">
<link href="http://partner.thetravelsquare.in/resource/admin/files/dark(1).css" rel="stylesheet" type="text/css">
<link href="http://partner.thetravelsquare.in/resource/admin/files/dark(2).css" rel="stylesheet" type="text/css">
<link href="http://partner.thetravelsquare.in/resource/admin/files/dark(3).css" rel="stylesheet" type="text/css">     
<link rel="shortcut icon" href="#">

<script async="" src="http://partner.thetravelsquare.in/resource/admin/files/modules.3a2c212c6000288ee2ae.js.download" charset="utf-8"></script>
<script type="text/javascript" charset="UTF-8" src="./files/common.js.download"></script>
<script type="text/javascript" charset="UTF-8" src="http://partner.thetravelsquare.in/resource/admin/files/util.js.download"></script>   
<script async src="https://www.googletagmanager.com/gtag/js?id=G-EE16CRYW41"></script>

<script>
    window.dataLayer = window.dataLayer || [];
    function gtag() { dataLayer.push(arguments); }
    gtag('js', new Date());

    gtag('config', 'G-EE16CRYW41');
</script> 

<style type="text/css">
    iframe#_hjRemoteVarsFrame {
        display: none !important;
        width: 1px !important;
        height: 1px !important;
        opacity: 0 !important;
        pointer-events: none !important;
    }
</style>

<style type="text/css">/* Chart.js */
/*
* DOM element rendering detection
* https://davidwalsh.name/detect-node-insertion
*/
@keyframes chartjs-render-animation {
from { opacity: 0.99; }
to { opacity: 1; }
}

.chartjs-render-monitor {
animation: chartjs-render-animation 0.001s;
}

/*
* DOM element resizing detection
* https://github.com/marcj/css-element-queries
*/
.chartjs-size-monitor,
.chartjs-size-monitor-expand,
.chartjs-size-monitor-shrink {
position: absolute;
direction: ltr;
left: 0;
top: 0;
right: 0;
bottom: 0;
overflow: hidden;
pointer-events: none;
visibility: hidden;
z-index: -1;
}

.chartjs-size-monitor-expand > div {
position: absolute;
width: 1000000px;
height: 1000000px;
left: 0;
top: 0;
}

.chartjs-size-monitor-shrink > div {
position: absolute;
width: 200%;
height: 200%;
left: 0;
top: 0;
}
</style>

</head>
    <!-- end::Head -->
    <!-- begin::Body -->
    <body class="kt-quick-panel--right kt-demo-panel--right kt-offcanvas-panel--right kt-header--fixed kt-header-mobile--fixed kt-subheader--enabled kt-subheader--fixed kt-subheader--solid kt-aside--enabled kt-aside--fixed" style="">
        <!-- begin:: Page -->
        <!-- begin:: Header Mobile -->
       
        <!-- end:: Header Mobile -->
        <div class="kt-grid kt-grid--hor kt-grid--root">
            <div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--ver kt-page">
                <!-- begin:: Aside -->
                
                <!-- end:: Aside -->
                <div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor kt-wrapper" id="kt_wrapper">
                    <!-- begin:: Header -->
                    
                    <!-- end:: Header -->
                    <div class="kt-content  kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor" id="kt_content">
                        <!-- begin:: Content Head -->
                        <br><br>
                        <!-- end:: Content Head -->
                        <!-- begin:: Content -->
                        <div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">
						
						<div class="alert alert-light alert-elevate" role="alert">
								<div class="alert-text">
                                    The <b>Currency Tracker Tool</b> is Developed By The Travel Square Powered by <a href="https://www.xe.com/">xe.com</a>
														API's, Such That The Agents / Suppliers are Able to Manage & See Forex Exchnage Rate in
                                                        Real Time While Doing Business , For Accurate Record Of Transactions .
                                </div>
							</div>

						
                            <!--Begin::Dashboard 1-->
                            <!--Begin::Row-->
                            <div class="row">
                                <div class="col-lg-12 col-xl-12">
                                    <div class="kt-portlet">
                                        <div class="kt-portlet__head">
                                            <div class="kt-portlet__head-label">
                                                <h3 class="kt-portlet__head-title">
                                                    Track Live Foreign Exchange Rates
                                                </h3>
                                            </div>
                                        </div>
                                        <!--begin::Form-->
                                        <!-- <form class="kt-form"> -->
                                            <div class="kt-portlet__body">
                                                
                                                
                                                <div class="form-group">
                                                    <label>Select Foreign Currency</label>
                                                    <div></div>
                                                    <select class="custom-select form-control" id="currency_id">
                                                        <option selected="">- Select Currency -</option>
                                                        <?php foreach($currency as $row){ ?>
                                                            <?php if($row->id!=$userinfo->currency){ ?>    
                                                                <option value="<?= $row->id;?>"><?= $row->name;?></option>
                                                            <?php }?>
                                                        <?php }?>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label >Enter Amount of Foreign Currency</label>
                                                    <input type="text" class="form-control" id="amount" placeholder="Enter Amount">
                                                </div>
                                                <div class="kt-form__actions">
                                                    <button id="click_btn" class="btn btn-dark">Submit</button>
                                                </div>
                                            </div>
                                            <div class="kt-portlet__foot" id="constructed_amount">
                                               
                                            </div>
                                        <!-- </form> -->
                                        <!--end::Form-->
                                    </div>
                                    <!--end::Portlet-->

                                </div>
                            </div>
                            <!--End::Row-->
                            <!--Begin::Row-->
                            
                            <!--End::Row-->
                            <!--End::Dashboard 1-->	
                        </div>
                        <!-- end:: Content -->				
                    </div>
                    <!-- begin:: Footer -->
                       <br><br>
                    <!-- end:: Footer -->			
                </div>
            </div>
        </div>
        <!-- end:: Page -->
        <!-- begin::Quick Panel -->
        
        <!-- end::Quick Panel -->
        <!-- begin::Scrolltop -->
       
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