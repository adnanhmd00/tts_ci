
<!DOCTYPE html>
<html lang="en">
    <!-- begin::Head -->
    <head>
        <?php include('head.php');?>
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
                <div class="kt-aside  kt-aside--fixed  kt-grid__item kt-grid kt-grid--desktop kt-grid--hor-desktop" id="kt_aside">
                    <!-- begin:: Aside -->
                    <?php include('aside.php');?>
                    <!-- end:: Aside -->	<!-- begin:: Aside Menu -->
                    
                    <!-- end:: Aside Menu -->				
                </div>
                <!-- end:: Aside -->
                <div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor kt-wrapper" id="kt_wrapper">
                    <!-- begin:: Header -->
                    <div id="kt_header" class="kt-header kt-grid__item  kt-header--fixed ">
                        <!-- begin:: Header Menu -->
                        <!-- Uncomment this to display the close button of the panel
                            <button class="kt-header-menu-wrapper-close" id="kt_header_menu_mobile_close_btn"><i class="la la-close"></i></button>
                            -->
                        <?php include('nav.php');?>
                        <!-- end:: Header Menu -->
                        <!-- begin:: Header Topbar -->
                        
                        <!-- end:: Header Topbar -->
                    </div>
                    <!-- end:: Header -->
                    <div class="kt-content  kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor" id="kt_content">
                        <!-- begin:: Content Head -->
                        <div class="kt-subheader  kt-grid__item" id="kt_subheader">
                            <div class="kt-container  kt-container--fluid ">
                                <div class="kt-subheader__main">
                                    <h3 class="kt-subheader__title">Partner ID | 9818HDG | Partner Profile</h3>
                                    
                                </div>
                               
                            </div>
                        </div>
                        <!-- end:: Content Head -->
                        <!-- begin:: Content -->
                        <div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">
						
							<div class="alert alert-light alert-elevate" role="alert">
								<div class="alert-text">
                                    This is your The Travel Square <b>Partner Profile Post Registration with a Unique Partner ID</b> That Will Be Used for Raising All your Requests Via 
									Portal and For Bookings, Transactions, Also Linked to your TravPay Wallet.
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
                                                    Manage My Profile
                                                </h3>
                                            </div>
                                        </div>
                                       
                                        <!--begin::Form-->
                                        
                                        <form class="kt-form kt-form--label-right" method="post" action="<?= base_url('update-profile');?>">
                                            <div class="kt-portlet__body">
												<div class="form-group row form-group-marginless kt-margin-t-20">
                                                    <h4>Business Details</h4>
                                                    <div class="col-md-12"><p><?php echo $this->session->flashdata('item'); ?></p></div>

                                                   
													<label class="col-lg-2 col-form-label">Ac Manager Name</label>
													<div class="col-lg-4">
														<input type="text" class="form-control" placeholder="Ac Manager Name" value="<?php echo $user_info[0]->an; ?>" name="an" required>
													</div>
                                                    <label class="col-lg-2 col-form-label">Email Address</label>
													<div class="col-lg-4">
														<input type="text" class="form-control" placeholder="Email Address" value="<?php echo $user_info[0]->omid; ?>" name="omid" required>
													</div>
												</div>
												<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
												<div class="form-group row form-group-marginless">
													<label class="col-lg-2 col-form-label">Contact Number</label>
													<div class="col-lg-4">
														<div class="kt-input-icon">
															<input type="text" class="form-control" placeholder="Contact Number" value="<?php echo $user_info[0]->ocn; ?>" name="ocn" required>
														</div>
													</div>
                                                    <label class="col-lg-2 col-form-label">DOB</label>
													<div class="col-lg-4">
														<div class="kt-input-icon">
															<input type="date" class="form-control" placeholder="DOB" value="<?php echo $user_info[0]->dob; ?>" name="dob" required>
														</div>
													</div>
												</div>
												<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
												<div class="form-group row form-group-marginless">
													<label class="col-lg-2 col-form-label">Personal Address On ID Proof</label>
													<div class="col-lg-4">
														<input type="text" class="form-control" placeholder="Personal Address On ID Proof" value="<?php echo $user_info[0]->address; ?>" name="address" required>
													</div>
                                                    <label class="col-lg-2 col-form-label">Gender</label>
													<div class="col-lg-4">
                                                        <div class="kt-input-icon">                                                            
                                                            <select class="form-control" name="gender" required>
                                                                <option value="">Select</option>
                                                                <option <?php if($user_info[0]->gender == 'MALE'){ ?> selected <?php } ?> value="MALE">Male</option>
                                                                <option <?php if($user_info[0]->gender == 'FEMALE'){ ?> selected <?php } ?> value="FEMALE">Female</option>
                                                                <option <?php if($user_info[0]->gender == 'OTHER'){ ?> selected <?php } ?> value="OTHER">Other</option>
                                                            </select>
														</div>
													</div>
												</div>
												<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
												
											</div>

											<div class="kt-portlet__body">
												<div class="form-group row form-group-marginless kt-margin-t-20">
                                                    <h4>Company Details</h4>
                                                    <div class="col-md-12"><p><?php echo $this->session->flashdata('item'); ?></p></div>
													<label class="col-lg-2 col-form-label">Company Name</label>
													<div class="col-lg-4">
														<input type="text" class="form-control" placeholder="Company Name" value="<?php echo $user_info[0]->noe; ?>" name="noe" required>
													</div>
                                                    <label class="col-lg-2 col-form-label">Company GST Number</label>
													<div class="col-lg-4">
														<div class="kt-input-icon">
															<input type="text" class="form-control" placeholder="Enter Company GST Number" value="<?php echo $user_info[0]->gst; ?>" name="gst" required>
														</div>
													</div>
												</div>
												<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
												<div class="form-group row form-group-marginless">
													<label class="col-lg-2 col-form-label">Company Mail ID</label>
													<div class="col-lg-4">
														<input type="text" class="form-control" placeholder="Enter Company Mail ID" value="<?php echo $user_info[0]->email; ?>" name="email" required>
													</div>
													<label class="col-lg-2 col-form-label">Mobile</label>
													<div class="col-lg-4">
														<div class="kt-input-icon">
															<input type="text" class="form-control" placeholder="Enter Mobile Number" readonly value="<?php echo $user_info[0]->mobile; ?>" name="mobile" required>
														</div>
													</div>
												</div>
												<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
												<div class="form-group row form-group-marginless">
													<label class="col-lg-2 col-form-label">Company Owner Name</label>
													<div class="col-lg-4">
														<input type="text" class="form-control" placeholder="Enter Company Owner Name" value="<?php echo $user_info[0]->name; ?>" name="name" required>
													</div>
													<label class="col-lg-2 col-form-label">Password For TTS B2B Portal</label>
													<div class="col-lg-4">
														<div class="kt-input-icon">
															<input type="text" class="form-control" placeholder="Enter If You Wish To Change The Password" name="pass">
														</div>
													</div>
												</div>
												<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
												<div class="form-group row form-group-marginless">
													
													<label class="col-lg-2 col-form-label">State</label>
													<div class="col-lg-4">
														<div class="kt-input-icon">
                                                            <select name="st" id="st" class="form-control">
                                                                <option value="">Select</option>
                                                                <option <?php if($user_info[0]->st == 'Andhra Pradesh'){ ?> selected <?php } ?> value="Andhra Pradesh">Andhra Pradesh</option>
                                                                <option <?php if($user_info[0]->st == 'Andaman and Nicobar Islands'){ ?> selected <?php } ?> value="Andaman and Nicobar Islands">Andaman and Nicobar Islands</option>
                                                                <option <?php if($user_info[0]->st == 'Arunachal Pradesh'){ ?> selected <?php } ?> value="Arunachal Pradesh">Arunachal Pradesh</option>
                                                                <option <?php if($user_info[0]->st == 'Assam'){ ?> selected <?php } ?> value="Assam">Assam</option>
                                                                <option <?php if($user_info[0]->st == 'Bihar'){ ?> selected <?php } ?> value="Bihar">Bihar</option>
                                                                <option <?php if($user_info[0]->st == 'Chandigarh'){ ?> selected <?php } ?> value="Chandigarh">Chandigarh</option>
                                                                <option <?php if($user_info[0]->st == 'Chhattisgarh'){ ?> selected <?php } ?> value="Chhattisgarh">Chhattisgarh</option>
                                                                <option <?php if($user_info[0]->st == 'Dadar and Nagar Haveli'){ ?> selected <?php } ?> value="Dadar and Nagar Haveli">Dadar and Nagar Haveli</option>
                                                                <option <?php if($user_info[0]->st == 'Daman and Diu'){ ?> selected <?php } ?> value="Daman and Diu">Daman and Diu</option>
                                                                <option <?php if($user_info[0]->st == 'Delhi'){ ?> selected <?php } ?> value="Delhi">Delhi</option>
                                                                <option <?php if($user_info[0]->st == 'Lakshadweep'){ ?> selected <?php } ?> value="Lakshadweep">Lakshadweep</option>
                                                                <option <?php if($user_info[0]->st == 'Puducherry'){ ?> selected <?php } ?> value="Puducherry">Puducherry</option>
                                                                <option <?php if($user_info[0]->st == 'Goa'){ ?> selected <?php } ?> value="Goa">Goa</option>
                                                                <option <?php if($user_info[0]->st == 'Gujarat'){ ?> selected <?php } ?> value="Gujarat">Gujarat</option>
                                                                <option <?php if($user_info[0]->st == 'Haryana'){ ?> selected <?php } ?> value="Haryana">Haryana</option>
                                                                <option <?php if($user_info[0]->st == 'Himachal Pradesh'){ ?> selected <?php } ?> value="Himachal Pradesh">Himachal Pradesh</option>
                                                                <option <?php if($user_info[0]->st == 'Jammu and Kashmir'){ ?> selected <?php } ?> value="Jammu and Kashmir">Jammu and Kashmir</option>
                                                                <option <?php if($user_info[0]->st == 'Jharkhand'){ ?> selected <?php } ?> value="Jharkhand">Jharkhand</option>
                                                                <option <?php if($user_info[0]->st == 'Karnataka'){ ?> selected <?php } ?> value="Karnataka">Karnataka</option>
                                                                <option <?php if($user_info[0]->st == 'Kerala'){ ?> selected <?php } ?> value="Kerala">Kerala</option>
                                                                <option <?php if($user_info[0]->st == 'Madhya Pradesh'){ ?> selected <?php } ?> value="Madhya Pradesh">Madhya Pradesh</option>
                                                                <option <?php if($user_info[0]->st == 'Maharashtra'){ ?> selected <?php } ?> value="Maharashtra">Maharashtra</option>
                                                                <option <?php if($user_info[0]->st == 'Manipur'){ ?> selected <?php } ?> value="Manipur">Manipur</option>
                                                                <option <?php if($user_info[0]->st == 'Meghalaya'){ ?> selected <?php } ?> value="Meghalaya">Meghalaya</option>
                                                                <option <?php if($user_info[0]->st == 'Mizoram'){ ?> selected <?php } ?> value="Mizoram">Mizoram</option>
                                                                <option <?php if($user_info[0]->st == 'Nagaland'){ ?> selected <?php } ?> value="Nagaland">Nagaland</option>
                                                                <option <?php if($user_info[0]->st == 'Odisha'){ ?> selected <?php } ?> value="Odisha">Odisha</option>
                                                                <option <?php if($user_info[0]->st == 'Punjab'){ ?> selected <?php } ?> value="Punjab">Punjab</option>
                                                                <option <?php if($user_info[0]->st == 'Rajasthan'){ ?> selected <?php } ?> value="Rajasthan">Rajasthan</option>
                                                                <option <?php if($user_info[0]->st == 'Sikkim'){ ?> selected <?php } ?> value="Sikkim">Sikkim</option>
                                                                <option <?php if($user_info[0]->st == 'Tamil Nadu'){ ?> selected <?php } ?> value="Tamil Nadu">Tamil Nadu</option>
                                                                <option <?php if($user_info[0]->st == 'Telangana'){ ?> selected <?php } ?> value="Telangana">Telangana</option>
                                                                <option <?php if($user_info[0]->st == 'Tripura'){ ?> selected <?php } ?> value="Tripura">Tripura</option>
                                                                <option <?php if($user_info[0]->st == 'Uttar Pradesh'){ ?> selected <?php } ?> value="Uttar Pradesh">Uttar Pradesh</option>
                                                                <option <?php if($user_info[0]->st == 'Uttarakhand'){ ?> selected <?php } ?> value="Uttarakhand">Uttarakhand</option>
                                                                <option <?php if($user_info[0]->st == 'West Bengal'){ ?> selected <?php } ?> value="West Bengal">West Bengal</option>
                                                            </select>
														</div>
													</div>
                                                    <label class="col-lg-2 col-form-label">City/Town</label>
													<div class="col-lg-4">
														<input type="text" class="form-control" placeholder="Enter City/Town" value="<?php echo $user_info[0]->ct; ?>" name="ct" required>
													</div>
												</div>
												<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
												<div class="form-group row form-group-marginless">
                                                <label class="col-lg-2 col-form-label">Company Address</label>
                                                <div class="col-lg-4">
														<input type="text" class="form-control" placeholder="Enter Company Address" value="<?php echo $user_info[0]->oa; ?>" name="oa" required>
													</div>
                                                <label class="col-lg-2 col-form-label">Type Of Firm Registered</label>
													<div class="col-lg-4">
                                                        <select class="form-control" name="tof" required>
                                                            <option  value="">Select</option>
                                                            <option <?php if($user_info[0]->tof == 'Public Limited Company'){ ?> selected <?php } ?>  value="Public Limited Company">Public Limited Company</option>
                                                            <option <?php if($user_info[0]->tof == 'Private Limited Company'){ ?> selected <?php } ?>  value="Private Limited Company">Private Limited Company</option>
                                                            <option <?php if($user_info[0]->tof == 'Joint-Venture Company'){ ?> selected <?php } ?>  value="Joint-Venture Company">Joint-Venture Company</option>
                                                            <option <?php if($user_info[0]->tof == 'Partnership Firm'){ ?> selected <?php } ?>  value="Partnership Firm">Partnership Firm</option>
                                                            <option <?php if($user_info[0]->tof == 'One Person Company'){ ?> selected <?php } ?>  value="One Person Company">One Person Company</option>
                                                            <option <?php if($user_info[0]->tof == 'Sole Proprietorship'){ ?> selected <?php } ?>  value="Sole Proprietorship">Sole Proprietorship</option>
                                                            <option <?php if($user_info[0]->tof == 'Branch Office'){ ?> selected <?php } ?>  value="Branch Office">Branch Office</option>
                                                            <option <?php if($user_info[0]->tof == 'Non-Government Organization (NGO)'){ ?> selected <?php } ?>  value="Non-Government Organization (NGO)">Non-Government Organization (NGO)</option>
                                                        </select>
													</div>
												</div>
												
												<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
												<div class="form-group row form-group-marginless">
													<label class="col-lg-2 col-form-label">Website</label>
													<div class="col-lg-4">
														<input type="url" class="form-control" placeholder="Enter Website URL" value="<?php echo $user_info[0]->web; ?>" name="web">
													</div>
													<label class="col-lg-2 col-form-label">UATA Number</label>
													<div class="col-lg-4">
														<div class="kt-input-icon">
															<input type="text" class="form-control" placeholder="Enter UATA Number" value="<?php echo $user_info[0]->uata; ?>" name="uata">
														</div>
													</div>
												</div>
											</div>


                                            <div class="kt-portlet__body">
												<div class="form-group row form-group-marginless kt-margin-t-20">
                                                    <h4>Bank Details</h4>
                                                    <div class="col-md-12"><p><?php echo $this->session->flashdata('item'); ?></p></div>

                                                   
													<label class="col-lg-2 col-form-label">Bank Name</label>
													<div class="col-lg-4">
														<input type="text" class="form-control" placeholder="Ac Manager Name" value="<?php echo $user_info[0]->bn; ?>" name="bn" required>
													</div>
                                                    <label class="col-lg-2 col-form-label">Branch </label>
													<div class="col-lg-4">
														<input type="text" class="form-control" placeholder="Branch" value="<?php echo $user_info[0]->branch; ?>" name="branch" required>
													</div>
												</div>
												<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
												<div class="form-group row form-group-marginless">
													<label class="col-lg-2 col-form-label">IFSC Code</label>
													<div class="col-lg-4">
														<div class="kt-input-icon">
															<input type="text" class="form-control" placeholder="IFSC Code" value="<?php echo $user_info[0]->ifsc; ?>" name="ifsc" required>
														</div>
													</div>
                                                    <label class="col-lg-2 col-form-label">Account Number</label>
													<div class="col-lg-4">
														<input type="text" class="form-control" placeholder="Account Number" value="<?php echo $user_info[0]->acno; ?>" name="acno" required>
													</div>
												</div>
												<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
												<div class="form-group row form-group-marginless">
													<label class="col-lg-2 col-form-label">Account Holder Name</label>
													<div class="col-lg-4">
														<input type="text" class="form-control" placeholder="Account Holder Name" value="<?php echo $user_info[0]->ahn; ?>" name="ahn" required>
													</div>
                                                    <label class="col-lg-2 col-form-label">Account Type</label>
													<div class="col-lg-4">
                                                        <select class="form-control" name="at">
                                                            <option value="">Select</option>
                                                            <option <?php if($user_info[0]->at == "Savings"){ ?> selected <?php } ?> value="Savings">Savings Account</option>
                                                            <option <?php if($user_info[0]->at == "Current"){ ?> selected <?php } ?> vvalue="Current">Current Account</option>
                                                        </select>
													</div>
												</div>
												
												
											</div>

											<div class="kt-portlet__foot">
												<div class="kt-form__actions">
													<div class="row">
														<div class="col-lg-5"></div>
														<div class="col-lg-7">
															<button type="submit" class="btn btn-dark">Update Changes</button>
														</div>
													</div>
												</div>
											</div>
										</form>

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
                        <?php include('footer.php');?>
                    <!-- end:: Footer -->			
                </div>
            </div>
        </div>
        <!-- end:: Page -->
        <!-- begin::Quick Panel -->
        
        <!-- begin::Scrolltop -->
        <div id="kt_scrolltop" class="kt-scrolltop">
            <i class="fa fa-arrow-up"></i>
        </div>
        <!-- end::Scrolltop -->
        <!-- begin::Sticky Toolbar -->
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
        <!-- end::Sticky Toolbar -->
        <!-- begin::Demo Panel -->
        
        <!--ENd:: Chat-->
        <?php include('jquery.php');?>

        <!-- Tinymce JavaScript -->
        <script src="<?= base_url('resource/auth/vendors/tinymce/tinymce.min.js');?>"></script>

        <!-- Tinymce Wysuhtml5 Init JavaScript -->
        <script src="<?= base_url('resource/auth/dist/js/tinymce-data.js');?>"></script>

    </body>
</html>