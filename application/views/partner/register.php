<!DOCTYPE html>

<html lang="en">
<!-- begin::Head -->

<head>
	<?php include('head.php');?>
</head>
<!-- end::Head -->

<!-- begin::Body -->

<body style="background-image: url(<?= base_url('resource/admin/img/partner-login-the-travel-square.jpg');?>)"
	class="kt-quick-panel--right kt-demo-panel--right kt-offcanvas-panel--right kt-header--fixed kt-header-mobile--fixed kt-subheader--enabled kt-subheader--transparent">


	<!-- begin:: Page -->
	<div class="kt-grid kt-grid--ver kt-grid--root kt-page">
		<div class="kt-grid kt-grid--hor kt-grid--root  kt-login kt-login--v1" id="kt_login">
			<div
				class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--desktop kt-grid--ver-desktop kt-grid--hor-tablet-and-mobile">
				<!--begin::Aside-->
				<div class="kt-grid__item kt-grid__item--order-tablet-and-mobile-2 kt-grid kt-grid--hor kt-login__aside"
					style="background-image: url(<?= base_url('resource/admin/metronic/themes/metronic/theme/default/demo8/dist/assets/media/bg/bg-4.jpg');?>);">
					<div class="kt-grid__item">
						<a href="" class="kt-login__logo">
							<img src="<?= base_url('uploads/b2b/the-travel-square-logo.png');?>" width="75" height="75">
						</a>
					</div>
					<div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--ver">
						<div class="kt-grid__item kt-grid__item--middle">
							<h2 class="kt-login__title">The Travel Square Business</h2>
							<h4 class="kt-login__subtitle">Welcome to The Travel Square Business Platform, India's
								Largest B2B Travel Network. Get Best B2B Deals For Your Customers Here !</h4>
						</div>
					</div>
					<div class="kt-grid__item">
						<div class="kt-login__info">
							<div class="kt-login__copyright">
								© 2022 The Travel Square
							</div>
							<div class="kt-login__menu">
								<a href="http://support.thetravelsquare.in/partnercare" class="kt-link">Partner Help</a>
							</div>
						</div>
					</div>
				</div>
				<!--begin::Aside-->

				<!--begin::Content-->
				<div
					class="kt-grid__item kt-grid__item--fluid  kt-grid__item--order-tablet-and-mobile-1  kt-login__wrapper">
					<!--begin::Head-->
					<div class="kt-login__head">
						<span class="kt-login__signup-label">Already a Partner?</span>&nbsp;&nbsp;
						<a href="/partner/login" class="kt-link kt-login__signup-link">Login Now</a>
					</div>
					<!--end::Head-->

					<!--begin::Body-->
					<div class="kt-login__body">

						<!--begin::Signin-->
						<div class="kt-login__form">
							<div class="kt-login__title">
								<h4>PARTNER REGISTRATION AND SIGNUP</h4>
								<h2><?php echo $this->session->flashdata('item'); ?></h2> 
							</div>

<?php echo form_open('partnerregister', 'class="kt-form" id="kt_login_form"');?>
								<div class="form-group">
									<input class="form-control" type="text" placeholder="Company Name" name="noe"
										autocomplete="off">
								</div>
								<div class="form-group">
									<input class="form-control" type="text" placeholder="Company Address" name="address"
										autocomplete="off">
								</div>
								<div class="form-group">
									<input class="form-control" type="text" placeholder="Owner / Manager Name" name="name"
										autocomplete="off">
								</div>
								<div class="form-group">
									<input class="form-control" type="text" placeholder="Company Mail ID" name="email"
										autocomplete="off">
								</div>
								<div class="form-group">
									<input class="form-control" type="password" placeholder="New Password For TTS B2B Portal" name="pass"
										autocomplete="off">
								</div>
								<div class="form-group">
									<input class="form-control" type="text" placeholder="Mobile" name="mobile"
										autocomplete="off">
								</div>
								<!-- <div class="form-group">
									<input class="form-control" type="password" placeholder="OTP" name="password"
										autocomplete="off">
								</div> -->
								<div class="kt-login__actions">
									<!-- <div class="kt-login__options">
									<a href="http://sellerconsle.thetravelsquare.in" class="btn btn-dark kt-btn">Request OTP</a>
									</div> -->
							
									<button class="btn btn-dark btn-elevate kt-login__btn-small" style="background-color:black">Register as Partner</button>
								</div>
							</form>
							<!--end::Form-->

							<!--begin::Divider-->
							
							<!--end::Options-->
						</div>
						<!--end::Signin-->
					</div>
					<!--end::Body-->
				</div>
				<!--end::Content-->
			</div>
		</div>
	</div>

	<!-- end:: Page -->


	<!-- begin::Global Config(global config for global JS sciprts) -->
	<?php include('jquery.php');?>
</body>

</html>
