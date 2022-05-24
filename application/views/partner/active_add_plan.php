<!DOCTYPE html>
<html lang="en">
	<head>
		<?php include('head.php');?>
	</head>
	<body class="kt-quick-panel--right kt-demo-panel--right kt-offcanvas-panel--right kt-header--fixed kt-header-mobile--fixed kt-subheader--enabled kt-subheader--fixed kt-subheader--solid kt-aside--enabled kt-aside--fixed" style="">
		<div id="kt_header_mobile" class="kt-header-mobile  kt-header-mobile--fixed ">
			<div class="kt-header-mobile__logo">
				<a href="">
				<img alt="Logo" src="http://partner.thetravelsquare.in/uploads/b2b/the-travel-square-logo.png" width="30" height="30">
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
					<div class="kt-content  kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor" id="kt_content">
						<!-- begin:: Subheader -->
						<div class="kt-subheader   kt-grid__item" id="kt_subheader">
							<div class="kt-container  kt-container--fluid ">
								<div class="kt-subheader__main">
									<h3 class="kt-subheader__title">
										Selected Advertisement Plan                           
									</h3>
									<span class="kt-subheader__separator kt-hidden"></span>
									<div class="kt-subheader__breadcrumbs">
									</div>
								</div>
								<div class="kt-subheader__toolbar">
									<div class="kt-subheader__wrapper">
										<a href="<?= base_url('Partner/delete_adv_plan');?>" class="btn kt-subheader__btn-primary">
											End Plan &nbsp;
										</a>
									</div>
								</div>
							</div>
						</div>
						<div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">
							<div class="kt-portlet">
								<div class="kt-portlet__body kt-portlet__body--fit">
									<div class="row row-no-padding row-col-separator-xl">
										<div class="col-md-12 col-lg-12 col-xl-4">
											<div class="kt-widget1">
												<div class="kt-widget1__item">
													<div class="kt-widget1__info">
														<h3 class="kt-widget1__title">Plan Selected</h3>
                                                        <?php if($type==1){ ?>
                                                            <span class="kt-widget1__desc">PREMIUM SELLER</span>
                                                        <?php }?>
                                                        <?php if($type==2){ ?>
                                                            <span class="kt-widget1__desc">PLATINUM SELLER</span>
                                                        <?php }?>
                                                        <?php if($type==3){ ?>
                                                            <span class="kt-widget1__desc">WIZARD SELLER</span>
                                                        <?php }?>
													</div>
													<span class="kt-widget1__number kt-font-brand">USD 100</span>
												</div>
												<div class="kt-widget1__item">
													<div class="kt-widget1__info">
														<h3 class="kt-widget1__title">Plan Details</h3>
														<p>B2B Dedicated Leads <b>150+</b> </p>
														<p>Business Volume <b>USD 25,000+</b></p>
														<p>B2C Exclusive Direct Leads <b>20+</b> </p>
													</div>
												</div>
											</div>          
										</div>
										<div class="col-md-12 col-lg-12 col-xl-4">
											<div class="kt-widget1">
												<div class="kt-widget1__item">
													<div class="kt-widget1__info">
														<h3 class="kt-widget1__title">Impressions</h3>
														<span class="kt-widget1__desc">Awerage IPO Margin</span>
													</div>
													<span class="kt-widget1__number kt-font-success">+24%</span>
												</div>
												<div class="kt-widget1__item">
													<div class="kt-widget1__info">
														<h3 class="kt-widget1__title">Customer Audience Reach</h3>
														<span class="kt-widget1__desc">Yearly Expenses</span>
													</div>
													<span class="kt-widget1__number kt-font-info">+$560,800</span>
												</div>
												<div class="kt-widget1__item">
													<div class="kt-widget1__info">
														<h3 class="kt-widget1__title">B2B Audience Reach</h3>
														<span class="kt-widget1__desc">Overall Regional Logistics</span>
													</div>
													<span class="kt-widget1__number kt-font-warning">-10%</span>
												</div>
											</div>        
										</div>
										<div class="col-md-12 col-lg-12 col-xl-4">
											<div class="kt-widget1">
												<div class="kt-widget1__item">
													<div class="kt-widget1__info">
														<h3 class="kt-widget1__title">B2C Direct Leads</h3>
														<span class="kt-widget1__desc">Awerage Weekly Orders</span>
													</div>
													<span class="kt-widget1__number kt-font-success">16+</span>
												</div>
												<div class="kt-widget1__item">
													<div class="kt-widget1__info">
														<h3 class="kt-widget1__title">B2B Leads Delivered</h3>
														<span class="kt-widget1__desc">Weekly Customer Orders</span>
													</div>
													<span class="kt-widget1__number kt-font-danger">121+</span>
												</div>
												<div class="kt-widget1__item">
													<div class="kt-widget1__info">
														<h3 class="kt-widget1__title">Sales Business Volume</h3>
														<span class="kt-widget1__desc">System bugs and issues</span>
													</div>
													<span class="kt-widget1__number kt-font-success">USD 19,180</span>
												</div>
											</div>         
										</div>
									</div>
								</div>
							</div>
						</div>			
					</div>
						<?php include('footer.php');?>			
				</div>
			</div>
		</div>
		<div id="kt_quick_panel" class="kt-quick-panel">
			<a href="#" class="kt-quick-panel__close" id="kt_quick_panel_close_btn"><i class="flaticon2-delete"></i></a>
			<div class="kt-quick-panel__nav" kt-hidden-height="66" style="">
				<ul class="nav nav-tabs nav-tabs-line nav-tabs-bold nav-tabs-line-3x nav-tabs-line-brand  kt-notification-item-padding-x" role="tablist">
					<li class="nav-item active">
						<a class="nav-link active" data-toggle="tab" href="#kt_quick_panel_tab_notifications" role="tab">Notifications</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" data-toggle="tab" href="#kt_quick_panel_tab_logs" role="tab">Audit Logs</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" data-toggle="tab" href="#kt_quick_panel_tab_settings" role="tab">Settings</a>
					</li>
				</ul>
			</div>
		</div>
		<div id="kt_scrolltop" class="kt-scrolltop">
			<i class="fa fa-arrow-up"></i>
		</div>
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
		<div id="kt_demo_panel" class="kt-demo-panel">
			<div class="kt-demo-panel__head" kt-hidden-height="50" style="">
				<h3 class="kt-demo-panel__title">
					Select A Demo
					<!--<small>5</small>-->
				</h3>
				<a href="#" class="kt-demo-panel__close" id="kt_demo_panel_close"><i class="flaticon2-delete"></i></a>
			</div>
			<div class="kt-demo-panel__body kt-scroll ps ps--active-y" style="height: 553px; overflow: hidden;">
				<div class="kt-demo-panel__item kt-demo-panel__item--active">
					<div class="kt-demo-panel__item-title">
						Demo 1
					</div>
					<div class="kt-demo-panel__item-preview">
						<img src="./file/demo1.jpg" alt="">
						<div class="kt-demo-panel__item-preview-overlay">
							<a href="" class="btn btn-brand btn-elevate " target="_blank">Default</a>
							<a href="" class="btn btn-light btn-elevate" target="_blank">RTL Version</a>
						</div>
					</div>
				</div>
				<div class="kt-demo-panel__item ">
					<div class="kt-demo-panel__item-title">
						Demo 2
					</div>
					<div class="kt-demo-panel__item-preview">
						<img src="./file/demo2.jpg" alt="">
						<div class="kt-demo-panel__item-preview-overlay">
							<a href="" class="btn btn-brand btn-elevate " target="_blank">Default</a>
							<a href="" class="btn btn-light btn-elevate" target="_blank">RTL Version</a>
						</div>
					</div>
				</div>
				<div class="kt-demo-panel__item ">
					<div class="kt-demo-panel__item-title">
						Demo 3
					</div>
					<div class="kt-demo-panel__item-preview">
						<img src="./file/demo3.jpg" alt="">
						<div class="kt-demo-panel__item-preview-overlay">
							<a href="" class="btn btn-brand btn-elevate " target="_blank">Default</a>
							<a href="" class="btn btn-light btn-elevate" target="_blank">RTL Version</a>
						</div>
					</div>
				</div>
				<div class="kt-demo-panel__item ">
					<div class="kt-demo-panel__item-title">
						Demo 4
					</div>
					<div class="kt-demo-panel__item-preview">
						<img src="./file/demo4.jpg" alt="">
						<div class="kt-demo-panel__item-preview-overlay">
							<a href="" class="btn btn-brand btn-elevate " target="_blank">Default</a>
							<a href="" class="btn btn-light btn-elevate" target="_blank">RTL Version</a>
						</div>
					</div>
				</div>
				<div class="kt-demo-panel__item ">
					<div class="kt-demo-panel__item-title">
						Demo 5
					</div>
					<div class="kt-demo-panel__item-preview">
						<img src="./file/demo5.jpg" alt="">
						<div class="kt-demo-panel__item-preview-overlay">
							<a href="" class="btn btn-brand btn-elevate " target="_blank">Default</a>
							<a href="" class="btn btn-light btn-elevate" target="_blank">RTL Version</a>
						</div>
					</div>
				</div>
				<div class="kt-demo-panel__item ">
					<div class="kt-demo-panel__item-title">
						Demo 6
					</div>
					<div class="kt-demo-panel__item-preview">
						<img src="./file/demo6.jpg" alt="">
						<div class="kt-demo-panel__item-preview-overlay">
							<a href="" class="btn btn-brand btn-elevate " target="_blank">Default</a>
							<a href="" class="btn btn-light btn-elevate" target="_blank">RTL Version</a>
						</div>
					</div>
				</div>
				<div class="kt-demo-panel__item ">
					<div class="kt-demo-panel__item-title">
						Demo 7
					</div>
					<div class="kt-demo-panel__item-preview">
						<img src="./file/demo7.jpg" alt="">
						<div class="kt-demo-panel__item-preview-overlay">
							<a href="" class="btn btn-brand btn-elevate " target="_blank">Default</a>
							<a href="" class="btn btn-light btn-elevate" target="_blank">RTL Version</a>
						</div>
					</div>
				</div>
				<div class="kt-demo-panel__item ">
					<div class="kt-demo-panel__item-title">
						Demo 8
					</div>
					<div class="kt-demo-panel__item-preview">
						<img src="./file/demo8.jpg" alt="">
						<div class="kt-demo-panel__item-preview-overlay">
							<a href="" class="btn btn-brand btn-elevate " target="_blank">Default</a>
							<a href="" class="btn btn-light btn-elevate" target="_blank">RTL Version</a>
						</div>
					</div>
				</div>
				<div class="kt-demo-panel__item ">
					<div class="kt-demo-panel__item-title">
						Demo 9
					</div>
					<div class="kt-demo-panel__item-preview">
						<img src="./file/demo9.jpg" alt="">
						<div class="kt-demo-panel__item-preview-overlay">
							<a href="" class="btn btn-brand btn-elevate " target="_blank">Default</a>
							<a href="" class="btn btn-light btn-elevate" target="_blank">RTL Version</a>
						</div>
					</div>
				</div>
				<div class="kt-demo-panel__item ">
					<div class="kt-demo-panel__item-title">
						Demo 10
					</div>
					<div class="kt-demo-panel__item-preview">
						<img src="./file/demo10.jpg" alt="">
						<div class="kt-demo-panel__item-preview-overlay">
							<a href="" class="btn btn-brand btn-elevate " target="_blank">Default</a>
							<a href="" class="btn btn-light btn-elevate" target="_blank">RTL Version</a>
						</div>
					</div>
				</div>
				<div class="kt-demo-panel__item ">
					<div class="kt-demo-panel__item-title">
						Demo 11
					</div>
					<div class="kt-demo-panel__item-preview">
						<img src="./file/demo11.jpg" alt="">
						<div class="kt-demo-panel__item-preview-overlay">
							<a href="" class="btn btn-brand btn-elevate " target="_blank">Default</a>
							<a href="" class="btn btn-light btn-elevate" target="_blank">RTL Version</a>
						</div>
					</div>
				</div>
				<div class="kt-demo-panel__item ">
					<div class="kt-demo-panel__item-title">
						Demo 12
					</div>
					<div class="kt-demo-panel__item-preview">
						<img src="./file/demo12.jpg" alt="">
						<div class="kt-demo-panel__item-preview-overlay">
							<a href="" class="btn btn-brand btn-elevate " target="_blank">Default</a>
							<a href="" class="btn btn-light btn-elevate" target="_blank">RTL Version</a>
						</div>
					</div>
				</div>
				<div class="kt-demo-panel__item ">
					<div class="kt-demo-panel__item-title">
						Demo 13
					</div>
					<div class="kt-demo-panel__item-preview">
						<img src="./file/demo13.jpg" alt="">
						<div class="kt-demo-panel__item-preview-overlay">
							<a href="#" class="btn btn-brand btn-elevate disabled">Coming soon</a>
						</div>
					</div>
				</div>
				<div class="kt-demo-panel__item ">
					<div class="kt-demo-panel__item-title">
						Demo 14
					</div>
					<div class="kt-demo-panel__item-preview">
						<img src="./file/demo14.jpg" alt="">
						<div class="kt-demo-panel__item-preview-overlay">
							<a href="#" class="btn btn-brand btn-elevate disabled">Coming soon</a>
						</div>
					</div>
				</div>
				<div class="kt-demo-panel__item ">
					<div class="kt-demo-panel__item-title">
						Demo 15
					</div>
					<div class="kt-demo-panel__item-preview">
						<img src="./file/demo15.jpg" alt="">
						<div class="kt-demo-panel__item-preview-overlay">
							<a href="#" class="btn btn-brand btn-elevate disabled">Coming soon</a>
						</div>
					</div>
				</div>
				<div class="kt-demo-panel__item ">
					<div class="kt-demo-panel__item-title">
						Demo 16
					</div>
					<div class="kt-demo-panel__item-preview">
						<img src="./file/demo16.jpg" alt="">
						<div class="kt-demo-panel__item-preview-overlay">
							<a href="#" class="btn btn-brand btn-elevate disabled">Coming soon</a>
						</div>
					</div>
				</div>
				<div class="kt-demo-panel__item ">
					<div class="kt-demo-panel__item-title">
						Demo 17
					</div>
					<div class="kt-demo-panel__item-preview">
						<img src="./file/demo17.jpg" alt="">
						<div class="kt-demo-panel__item-preview-overlay">
							<a href="#" class="btn btn-brand btn-elevate disabled">Coming soon</a>
						</div>
					</div>
				</div>
				<div class="kt-demo-panel__item ">
					<div class="kt-demo-panel__item-title">
						Demo 18
					</div>
					<div class="kt-demo-panel__item-preview">
						<img src="./file/demo18.jpg" alt="">
						<div class="kt-demo-panel__item-preview-overlay">
							<a href="#" class="btn btn-brand btn-elevate disabled">Coming soon</a>
						</div>
					</div>
				</div>
				<div class="kt-demo-panel__item ">
					<div class="kt-demo-panel__item-title">
						Demo 19
					</div>
					<div class="kt-demo-panel__item-preview">
						<img src="./file/demo19.jpg" alt="">
						<div class="kt-demo-panel__item-preview-overlay">
							<a href="#" class="btn btn-brand btn-elevate disabled">Coming soon</a>
						</div>
					</div>
				</div>
				<div class="kt-demo-panel__item ">
					<div class="kt-demo-panel__item-title">
						Demo 20
					</div>
					<div class="kt-demo-panel__item-preview">
						<img src="./file/demo20.jpg" alt="">
						<div class="kt-demo-panel__item-preview-overlay">
							<a href="#" class="btn btn-brand btn-elevate disabled">Coming soon</a>
						</div>
					</div>
				</div>
				<div class="kt-demo-panel__item ">
					<div class="kt-demo-panel__item-title">
						Demo 21
					</div>
					<div class="kt-demo-panel__item-preview">
						<img src="./file/demo21.jpg" alt="">
						<div class="kt-demo-panel__item-preview-overlay">
							<a href="#" class="btn btn-brand btn-elevate disabled">Coming soon</a>
						</div>
					</div>
				</div>
				<div class="kt-demo-panel__item ">
					<div class="kt-demo-panel__item-title">
						Demo 22
					</div>
					<div class="kt-demo-panel__item-preview">
						<img src="./file/demo22.jpg" alt="">
						<div class="kt-demo-panel__item-preview-overlay">
							<a href="#" class="btn btn-brand btn-elevate disabled">Coming soon</a>
						</div>
					</div>
				</div>
				<div class="kt-demo-panel__item ">
					<div class="kt-demo-panel__item-title">
						Demo 23
					</div>
					<div class="kt-demo-panel__item-preview">
						<img src="./file/demo23.jpg" alt="">
						<div class="kt-demo-panel__item-preview-overlay">
							<a href="#" class="btn btn-brand btn-elevate disabled">Coming soon</a>
						</div>
					</div>
				</div>
				<div class="kt-demo-panel__item ">
					<div class="kt-demo-panel__item-title">
						Demo 24
					</div>
					<div class="kt-demo-panel__item-preview">
						<img src="./file/demo24.jpg" alt="">
						<div class="kt-demo-panel__item-preview-overlay">
							<a href="#" class="btn btn-brand btn-elevate disabled">Coming soon</a>
						</div>
					</div>
				</div>
				<div class="kt-demo-panel__item ">
					<div class="kt-demo-panel__item-title">
						Demo 25
					</div>
					<div class="kt-demo-panel__item-preview">
						<img src="./file/demo25.jpg" alt="">
						<div class="kt-demo-panel__item-preview-overlay">
							<a href="#" class="btn btn-brand btn-elevate disabled">Coming soon</a>
						</div>
					</div>
				</div>
				<div class="kt-demo-panel__item ">
					<div class="kt-demo-panel__item-title">
						Demo 26
					</div>
					<div class="kt-demo-panel__item-preview">
						<img src="./file/demo26.jpg" alt="">
						<div class="kt-demo-panel__item-preview-overlay">
							<a href="#" class="btn btn-brand btn-elevate disabled">Coming soon</a>
						</div>
					</div>
				</div>
				<div class="kt-demo-panel__item ">
					<div class="kt-demo-panel__item-title">
						Demo 27
					</div>
					<div class="kt-demo-panel__item-preview">
						<img src="./file/demo27.jpg" alt="">
						<div class="kt-demo-panel__item-preview-overlay">
							<a href="#" class="btn btn-brand btn-elevate disabled">Coming soon</a>
						</div>
					</div>
				</div>
				<div class="kt-demo-panel__item ">
					<div class="kt-demo-panel__item-title">
						Demo 28
					</div>
					<div class="kt-demo-panel__item-preview">
						<img src="./file/demo28.jpg" alt="">
						<div class="kt-demo-panel__item-preview-overlay">
							<a href="#" class="btn btn-brand btn-elevate disabled">Coming soon</a>
						</div>
					</div>
				</div>
				<div class="kt-demo-panel__item ">
					<div class="kt-demo-panel__item-title">
						Demo 29
					</div>
					<div class="kt-demo-panel__item-preview">
						<img src="./file/demo29.jpg" alt="">
						<div class="kt-demo-panel__item-preview-overlay">
							<a href="#" class="btn btn-brand btn-elevate disabled">Coming soon</a>
						</div>
					</div>
				</div>
				<div class="kt-demo-panel__item ">
					<div class="kt-demo-panel__item-title">
						Demo 30
					</div>
					<div class="kt-demo-panel__item-preview">
						<img src="./file/demo30.jpg" alt="">
						<div class="kt-demo-panel__item-preview-overlay">
							<a href="#" class="btn btn-brand btn-elevate disabled">Coming soon</a>
						</div>
					</div>
				</div>
				<a href="https://1.envato.market/EA4JP" target="_blank" class="kt-demo-panel__purchase btn btn-brand btn-elevate btn-bold btn-upper">
				Buy Metronic Now!
				</a>
				<div class="ps__rail-x" style="left: 0px; bottom: 0px;">
					<div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div>
				</div>
				<div class="ps__rail-y" style="top: 0px; height: 553px; right: 0px;">
					<div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 40px;"></div>
				</div>
			</div>
		</div>
		<!-- end::Demo Panel -->
		<!--Begin:: Chat-->
		<div class="modal fade- modal-sticky-bottom-right" id="kt_chat_modal" role="dialog" data-backdrop="false">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="kt-chat">
						<div class="kt-portlet kt-portlet--last">
							<div class="kt-portlet__head">
								<div class="kt-chat__head ">
									<div class="kt-chat__left">
										<div class="kt-chat__label">
											<a href="#" class="kt-chat__title">Jason Muller</a>
											<span class="kt-chat__status">
											<span class="kt-badge kt-badge--dot kt-badge--success"></span> Active
											</span>
										</div>
									</div>
									<div class="kt-chat__right">
										<div class="dropdown dropdown-inline">
											<button type="button" class="btn btn-clean btn-sm btn-icon" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
											<i class="flaticon-more-1"></i>
											</button>
											<div class="dropdown-menu dropdown-menu-fit dropdown-menu-right dropdown-menu-md">
												<!--begin::Nav-->
												<ul class="kt-nav">
													<li class="kt-nav__head">
														Messaging
														<i class="flaticon2-information" data-toggle="kt-tooltip" data-placement="right" title="" data-original-title="Click to learn more..."></i>
													</li>
													<li class="kt-nav__separator"></li>
													<li class="kt-nav__item">
														<a href="#" class="kt-nav__link">
														<i class="kt-nav__link-icon flaticon2-group"></i>
														<span class="kt-nav__link-text">New Group</span>
														</a>
													</li>
													<li class="kt-nav__item">
														<a href="#" class="kt-nav__link">
														<i class="kt-nav__link-icon flaticon2-open-text-book"></i>
														<span class="kt-nav__link-text">Contacts</span>
														<span class="kt-nav__link-badge">
														<span class="kt-badge kt-badge--brand  kt-badge--rounded-">5</span>
														</span>
														</a>
													</li>
													<li class="kt-nav__item">
														<a href="#" class="kt-nav__link">
														<i class="kt-nav__link-icon flaticon2-bell-2"></i>
														<span class="kt-nav__link-text">Calls</span>
														</a>
													</li>
													<li class="kt-nav__item">
														<a href="#" class="kt-nav__link">
														<i class="kt-nav__link-icon flaticon2-dashboard"></i>
														<span class="kt-nav__link-text">Settings</span>
														</a>
													</li>
													<li class="kt-nav__item">
														<a href="#" class="kt-nav__link">
														<i class="kt-nav__link-icon flaticon2-protected"></i>
														<span class="kt-nav__link-text">Help</span>
														</a>
													</li>
													<li class="kt-nav__separator"></li>
													<li class="kt-nav__foot">
														<a class="btn btn-label-brand btn-bold btn-sm" href="#">Upgrade plan</a>
														<a class="btn btn-clean btn-bold btn-sm" href="#" data-toggle="kt-tooltip" data-placement="right" title="" data-original-title="Click to learn more...">Learn more</a>
													</li>
												</ul>
												<!--end::Nav-->
											</div>
										</div>
										<button type="button" class="btn btn-clean btn-sm btn-icon" data-dismiss="modal">
										<i class="flaticon2-cross"></i>
										</button>
									</div>
								</div>
							</div>
							<div class="kt-portlet__body">
								<div class="kt-scroll kt-scroll--pull ps" data-height="410" data-mobile-height="225" style="height: 410px; overflow: hidden;">
									<div class="kt-chat__messages kt-chat__messages--solid">
										<div class="kt-chat__message kt-chat__message--success">
											<div class="kt-chat__user">
												<span class="kt-media kt-media--circle kt-media--sm">
												<img src="./file/100_12(1).jpg" alt="image">
												</span>
												<a href="#" class="kt-chat__username">Jason Muller</a>
												<span class="kt-chat__datetime">2 Hours</span>
											</div>
											<div class="kt-chat__text">
												How likely are you to recommend our company<br> to your friends and family?
											</div>
										</div>
										<div class="kt-chat__message kt-chat__message--right kt-chat__message--brand">
											<div class="kt-chat__user">
												<span class="kt-chat__datetime">30 Seconds</span>
												<a href="#" class="kt-chat__username">You</a>
												<span class="kt-media kt-media--circle kt-media--sm">
												<img src="./file/300_21.jpg" alt="image">
												</span>
											</div>
											<div class="kt-chat__text">
												Hey there, we’re just writing to let you know that you’ve<br> been subscribed to a repository on GitHub.
											</div>
										</div>
										<div class="kt-chat__message kt-chat__message--success">
											<div class="kt-chat__user">
												<span class="kt-media kt-media--circle kt-media--sm">
												<img src="./file/100_12(1).jpg" alt="image">
												</span>
												<a href="#" class="kt-chat__username">Jason Muller</a>
												<span class="kt-chat__datetime">30 Seconds</span>
											</div>
											<div class="kt-chat__text">
												Ok, Understood!
											</div>
										</div>
										<div class="kt-chat__message kt-chat__message--right kt-chat__message--brand">
											<div class="kt-chat__user">
												<span class="kt-chat__datetime">Just Now</span>
												<a href="#" class="kt-chat__username">You</a>
												<span class="kt-media kt-media--circle kt-media--sm">
												<img src="./file/300_21.jpg" alt="image">
												</span>
											</div>
											<div class="kt-chat__text">
												You’ll receive notifications for all issues, pull requests!
											</div>
										</div>
										<div class="kt-chat__message kt-chat__message--success">
											<div class="kt-chat__user">
												<span class="kt-media kt-media--circle kt-media--sm">
												<img src="./file/100_12(1).jpg" alt="image">
												</span>
												<a href="#" class="kt-chat__username">Jason Muller</a>
												<span class="kt-chat__datetime">2 Hours</span>
											</div>
											<div class="kt-chat__text">
												You were automatically <b class="kt-font-brand">subscribed</b> <br>because you’ve been given access to the repository
											</div>
										</div>
										<div class="kt-chat__message kt-chat__message--right kt-chat__message--brand">
											<div class="kt-chat__user">
												<span class="kt-chat__datetime">30 Seconds</span>
												<a href="#" class="kt-chat__username">You</a>
												<span class="kt-media kt-media--circle kt-media--sm">
												<img src="./file/300_21.jpg" alt="image">
												</span>
											</div>
											<div class="kt-chat__text">
												You can unwatch this repository immediately <br>by clicking here: <a href="#" class="kt-font-bold kt-link"></a>
											</div>
										</div>
										<div class="kt-chat__message kt-chat__message--success">
											<div class="kt-chat__user">
												<span class="kt-media kt-media--circle kt-media--sm">
												<img src="./file/100_12(1).jpg" alt="image">
												</span>
												<a href="#" class="kt-chat__username">Jason Muller</a>
												<span class="kt-chat__datetime">30 Seconds</span>
											</div>
											<div class="kt-chat__text">
												Ok!
											</div>
										</div>
										<div class="kt-chat__message kt-chat__message--right kt-chat__message--brand">
											<div class="kt-chat__user">
												<span class="kt-chat__datetime">Just Now</span>
												<a href="#" class="kt-chat__username">You</a>
												<span class="kt-media kt-media--circle kt-media--sm">
												<img src="./file/300_21.jpg" alt="image">
												</span>
											</div>
											<div class="kt-chat__text">
												Ok!
											</div>
										</div>
									</div>
									<div class="ps__rail-x" style="left: 0px; bottom: 0px;">
										<div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div>
									</div>
									<div class="ps__rail-y" style="top: 0px; right: -2px;">
										<div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 0px;"></div>
									</div>
								</div>
							</div>
							<div class="kt-portlet__foot">
								<div class="kt-chat__input">
									<div class="kt-chat__editor">
										<textarea placeholder="Type here..." style="height: 50px"></textarea>
									</div>
									<div class="kt-chat__toolbar">
										<div class="kt_chat__tools">
											<a href="#"><i class="flaticon2-link"></i></a>
											<a href="#"><i class="flaticon2-photograph"></i></a>
											<a href="#"><i class="flaticon2-photo-camera"></i></a>
										</div>
										<div class="kt_chat__actions">
											<button type="button" class="btn btn-brand btn-md  btn-font-sm btn-upper btn-bold kt-chat__reply">reply</button>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!--ENd:: Chat-->
        <?php include('jquery.php');?>
	</body>
</html>