<style>
    div.dropdown {
    position: relative;
    }

    div.dropdown > div.caption {
    background-color: #f2f2f2;
    padding: 11px 24px;
    border-radius: 3px;
    cursor: pointer;
    }
    div.dropdown > div.list {
    position: absolute;
    background-color: #f2f2f2;
    width: 100%;
    border-radius: 0 0 3px 3px;
    display: none;
    }

    div.dropdown > div.list > div.item {
    padding: 11px 24px;
    cursor: pointer;
    }

    div.dropdown > div.list > div.item.selected {
    font-weight: bold;
    }

    div.dropdown > div.caption:hover,
    div.dropdown > div.list > div.item:hover {
    background-color: rgb(83, 161, 214);
    color: #fff;
    }

    div.dropdown.open > div.caption {
    border-radius: 3px 3px 0 0;
    border-bottom: solid 1px #999;
    }

    div.dropdown.open > div.list {
    display: block;
    }
</style>


<!--Begin::Dashboard 1-->
<!--Begin::Row-->

<div class="h5">Traveller Details</div>
<div class="row" >
    <div class="col-md-8" id="main-div-id">
        <div class="row">
            
            <?php for ($i = 1; $i <= $data['adult_count']; $i++) {
                $array = ['0' , 'A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I'];
                ?>
                <div style="background-color: #fff" class="col-lg-12 col-xl-12 order-lg-1 order-xl-1 p-4">
                <div class="h5">Adult <?php echo $array[$i]; ?></div>
                <!--begin:: Widgets/Activity-->

                    <div class="row">
                        <input type="hidden" name="passenger_type[]" value="ADULT<?php echo $array[$i]; ?>" >
                        <input type="hidden" name="passenger_types[]" value="ADULT" >
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="inputDate">Title</label>
                                <select name="title[]" class="form-control">
                                    <option value="Mr">Mr.</option>
                                    <option value="Mrs">Mrs.</option>
                                    <option value="Miss">Miss</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="inputDate">First Name *</label>
                                <input type="text" class="form-control" name="first_name[]" placeholder="First Name" required>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="inputDate">Last Name</label>
                                <input type="text" class="form-control" name="last_name[]" placeholder="Last Name" required>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="inputDate">DOB * (12y+)</label>
                                <input id="datepicker-adult" class="form-control datepicker-adult" name="dob[]"  value="" placeholder="Select DOB" autocomplete="off"> 
                                        		
                            </div>
                        </div>
                        <!-- <div class="col-md-3">
                            <div class="form-group">
                                <label for="inputDate">Nationality</label>
                                <select name="nationality[]" class="form-control">
                                    <option val="India">India</option>
                                    <option val="Nepal">Nepal</option>
                                </select>
                                
                            </div>
                        </div> -->
                    </div>

                   
                </div>
            <?php }?>

            <?php for ($i = 1; $i <= $data['child_count']; $i++) {
                $array = ['0' , 'A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I'];
                ?>
                <div style="background-color: #fff" class="col-lg-12 col-xl-12 order-lg-1 order-xl-1 p-4">
                <div class="h5">Child <?php echo $array[$i]; ?></div>
                <!--begin:: Widgets/Activity-->

                    <div class="row">
                        <input type="hidden" name="passenger_type[]" value="CHILD<?php echo $array[$i]; ?>" >
                        <input type="hidden" name="passenger_types[]" value="CHILD" >
                        
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="inputDate">Title</label>
                                <select name="title[]" class="form-control">
                                    <option value="Master">Master</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="inputDate">First Name *</label>
                                <input type="text" class="form-control" name="first_name[]" placeholder="First Name" required>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="inputDate">Last Name</label>
                                <input type="text" class="form-control" name="last_name[]" placeholder="Last Name" required>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="inputDate">DOB * (2y-12y)</label>
                                <input id="datepicker-child" class="form-control datepicker-child" name="dob[]"  value="" placeholder="Select DOB" autocomplete="off"> 
                                        		
                            </div>
                        </div>
                        <!-- <div class="col-md-3">
                            <div class="form-group">
                                <label for="inputDate">Nationality</label>
                                <select name="nationality[]" class="form-control">
                                    <option val="India">India</option>
                                    <option val="Nepal">Nepal</option>
                                </select>
                                
                            </div>
                        </div> -->
                    </div>

                    
                </div>
            <?php }?>

            <?php for ($i = 1; $i <= $data['infant_count']; $i++) {
                $array = ['0' , 'A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I'];
                ?>
                <div style="background-color: #fff" class="col-lg-12 col-xl-12 order-lg-1 order-xl-1 p-4">
                <div class="h5">Infant <?php echo $array[$i]; ?></div>
                <!--begin:: Widgets/Activity-->

                    <div class="row">
                        <input type="hidden" name="passenger_type[]" value="INFANT<?php echo $array[$i]; ?>" >
                        <input type="hidden" name="passenger_types[]" value="INFANT" >
                        
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="inputDate">Title</label>
                                <select name="title[]" class="form-control">
                                    <option value="Ms">Ms</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="inputDate">First Name *</label>
                                <input type="text" class="form-control" name="first_name[]" placeholder="First Name" required>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="inputDate">Last Name</label>
                                <input type="text" class="form-control" name="last_name[]" placeholder="Last Name" required>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="inputDate">DOB *(below 2y)</label>
                                <input id="datepicker-infant" class="form-control datepicker-infant" name="dob[]"  value="" placeholder="Select DOB" autocomplete="off"> 
                                        		
                            </div>
                        </div>
                        <!-- <div class="col-md-3">
                            <div class="form-group">
                                <label for="inputDate">Nationality</label>
                                <select name="nationality[]" class="form-control">
                                    <option val="India">India</option>
                                    <option val="Nepal">Nepal</option>
                                </select>
                                
                            </div>
                        </div> -->
                    </div>

                    
                </div>
            <?php }?>

        </div>

        
        <div class="row mt-3">
            <div style="background-color: #fff" class="col-lg-12 col-xl-12 order-lg-1 order-xl-1 p-4">
            <div class="h5">Contact Information</div>
                <!--begin:: Widgets/Activity-->
                    <div class="row">
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="inputDate">Country Code</label>
                                <select name="country_code" class="form-control">
                                    <option val="+91">+91</option>
                                    <option val="+1">+1</option>
                                </select>
                               
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="inputDate">Mobile Number *</label>
                                <input type="text" class="form-control" placeholder="Enter Mobile Number" maxlength="10" name="contact_no" required>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="inputDate">Email *</label>
                                <input type="email" class="form-control" placeholder="Enter Your Email" name="email" required>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="inputDate">Nationality *</label>
                                <select name="nationality" class="form-control">
                                    <option val="India" selected="">India</option>
                                    <option val="Nepal">Nepal</option>
                                </select>
                                
                            </div>
                        </div>
                    </div>
                    <div class="form-group text-left">
                        <div style="font-size: 14px; color: grey;">** We do not send communication to this mobile number and e-mail ID</div>
                    </div>
                    <!-- <div class="form-group text-center">
                        <button class="btn btn-primary">Search Flights</button>
                    </div> -->
            </div>
        </div>
        
        <div class="row mt-3">
            <div style="background-color: #fff" class="col-lg-12 col-xl-12 order-lg-1 order-xl-1 p-4">
                <div class="form-group text-left">
                    <div class="form-check">
                        <input type="checkbox" class="form-check-input" id="exampleCheck2" name="is_checked" onclick="getGst()">
                        <label class="form-check-label" for="exampleCheck2">GST number for business travel (optional)</label>
                        <input type="text" class="form-control" id="gst-id" name="gst_no" placeholder="Enter GST" style="display:none" required>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-3">
            <div style="background-color: #fff" class="col-lg-12 col-xl-12 order-lg-1 order-xl-1 p-4">
                <div class="form-group text-left">
                    <div class="form-check">
                        <input type="checkbox" class="form-check-input" id="exampleCheck3">
                        <label class="form-check-label" for="exampleCheck3">Add <strong>Travel Insurance</strong> and Secure this Trip<br/>*Get all the benefits for just ₹ 99 per traveller </label>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-3">
            <div style="background-color: #fff" class="col-lg-12 col-xl-12 order-lg-1 order-xl-1 p-4">
                <div class="form-group text-left">
                    <div class="form-check">
                        <input type="checkbox" class="form-check-input" id="exampleCheck4" name="checked_value" onclick="getChecked()">
                        <label class="form-check-label" for="exampleCheck4">I understand and agree with the Fare Rules, the Privacy Policy of TravClan.</label>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="form-group text-center mt-3">
            <button class="btn btn-primary" onclick="review()" id="review-button-id">Review & Continue</button>
        </div>
    </div>


    
    
    <div id="flight-div-id" class="d-none d-lg-block col-md-4">
        <div class="card shadow p-2">
            <div class="h5">Selected Flight</div>
            <div class="d-flex justify-content-between bg-secondary mb-0">
                <div class="p-2">Departing Flight (<?php echo $data['depart_datetime_1']; ?>)</div>
                <div class="p-2">Flights Details</div>
            </div>
            
            <div class="col-md-12 p-0">
                <div class="card rounded shadow">
                    <div class="row" style="border-bottom:1px solid #ccc; margin:0px!important;">
                    <div class="card" style="width:100%!important">
                        <div class="card-header" style=" padding-left: 3px; font-size: 11px; margin: 1px; padding-bottom: 0px;">
                            <h6 class="card-title"><?php echo $data['flight_1']; ?> | <?php echo $data['flight_type_1']; ?> </h6>
                        </div>
                        <div class="card-body text-dark" style="padding:2px!important;">
                        <?php if ($data['stopages_counts'] == 1) { ?>
                            <div class="row">
                                <div class="col-md-12"><img style="height: 28px;" src="<?php echo $data['flight_img_1']; ?>" /> </div>
                                <div class="col-md-4" style=" font-size: 12px; font-weight: bold; margin-top: 5px;"><?php echo $data['board_time_1']; ?></div>
                                <div class="col-md-4" style=" font-size: 12px; font-weight: bold; margin-top: 5px; text-align:center;"><?php echo $data['duration_1']; ?></div>
                                <div class="col-md-4" style=" font-size: 12px; font-weight: bold; margin-top: 5px;text-align:center;"><?php echo $data['depart_time_1']; ?></div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    
                                    <strong><?php echo $data['board_city_name_1']; ?></strong>
                                    <?php //echo $data['board_airport_1']; ?>
                                </div>
                                <div class="col-md-4">&nbsp;</div>
                                <div class="col-md-4" style="text-align:center;">
                                    
                                    <strong><?php echo $data['depart_city_name_1']; ?></strong>
                                    <?php //echo $data['depart_airport_1']; ?>
                                </div>
                            </div>
                        <?php }else{ 
                            for ($i = 0; $i <= $data['stopages_count']; $i++) {
                                if($i == 0){
                                    $board_time_1            = $data['board_time_1'];
                                    $board_city_1            = $data['board_city_1'];
                                    $board_city_name_1       = $data['board_city_name_1'];
                                    $board_airport_1         = $data['board_airport_1'];
                                    $board_datetime_1        = $data['board_datetime_1'];
                                    $duration_1              = $data['duration_1'];
                                    $depart_time_1           = $data['depart_time_1'];
                                    $depart_city_1           = $data['depart_city_1'];
                                    $depart_airport_1        = $data['depart_airport_1'];
                                    $depart_datetime_1       = $data['depart_datetime_1'];
                                    $depart_city_name_1      = $data['depart_city_name_1'];
                                }
                                
                                if($i == 1){
                                    $board_time_1            = $data['board_time_2'];
                                    $board_city_1            = $data['board_city_2'];
                                    $board_city_name_1       = $data['board_city_name_2'];
                                    $board_airport_1         = $data['board_airport_2'];
                                    $board_datetime_1        = $data['board_datetime_2'];
                                    $duration_1              = $data['duration_2'];
                                    $depart_time_1           = $data['depart_time_2'];
                                    $depart_city_1           = $data['depart_city_2'];
                                    $depart_airport_1        = $data['depart_airport_2'];
                                    $depart_datetime_1       = $data['depart_datetime_2'];
                                    $depart_city_name_1      = $data['depart_city_name_2'];	
                                }

                                if($i == 2){    
                                    $board_time_1            = $data['board_time_3'];
                                    $board_city_1            = $data['board_city_3'];
                                    $board_city_name_1       = $data['board_city_name_3'];
                                    $board_airport_1         = $data['board_airport_3'];
                                    $board_datetime_1        = $data['board_datetime_3'];
                                    $duration_1              = $data['duration_3'];
                                    $depart_time_1           = $data['depart_time_3'];
                                    $depart_city_1           = $data['depart_city_3'];
                                    $depart_airport_1        = $data['depart_airport_3'];
                                    $depart_datetime_1       = $data['depart_datetime_3'];
                                    $depart_city_name_1      = $data['depart_city_name_3'];
                                }
                                
                                if($i == 3){
                                    $board_time_1            = $data['board_time_4'];
                                    $board_city_1            = $data['board_city_4'];
                                    $board_city_name_1       = $data['board_city_name_4'];
                                    $board_airport_1         = $data['board_airport_4'];
                                    $board_datetime_1        = $data['board_datetime_4'];
                                    $duration_1              = $data['duration_4'];
                                    $depart_time_1           = $data['depart_time_4'];
                                    $depart_city_1           = $data['depart_city_4'];
                                    $depart_airport_1        = $data['depart_airport_4'];
                                    $depart_datetime_1       = $data['depart_datetime_4'];
                                    $depart_city_name_1      = $data['depart_city_name_4'];
                                }
                            ?>

                            <div class="row">
                                <div class="col-md-12"><img style="height: 28px;" src="<?php echo $data['flight_img_1']; ?>" /> </div>
                                <div class="col-md-4" style=" font-size: 12px; font-weight: bold; margin-top: 5px;"><?php echo $board_time_1; ?></div>
                                <div class="col-md-4" style=" font-size: 12px; font-weight: bold; margin-top: 5px; text-align:center;"><?php echo $duration_1; ?></div>
                                <div class="col-md-4" style=" font-size: 12px; font-weight: bold; margin-top: 5px; text-align:center;"><?php echo $depart_time_1; ?></div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    
                                    <strong><?php echo $board_city_name_1; ?></strong>
                                    <?php //echo $board_airport_1; ?>
                                </div>
                                <div class="col-md-4">&nbsp;</div>
                                <div class="col-md-4" style="text-align:center;">
                                    
                                    <strong><?php echo $depart_city_name_1; ?></strong>
                                    <?php //echo $depart_airport_1; ?>
                                </div>
                            </div>
    
                            <?php } ?> 
                        <?php } ?>
                    </div>

                    <?php if($data['is_round'] == '1'){ ?>     
                        <div class="card" style="width:100%!important">
                        <div class="card-header" style=" padding-left: 3px; font-size: 11px; margin: 1px; padding-bottom: 0px;">
                            <h6 class="card-title"><?php echo $data['flight_2']; ?> | <?php echo $data['flight_type_2']; ?> </h6>
                        </div>
                        <div class="card-body text-dark" style="padding:2px!important;">
                        <?php if ($data['stopages_counts_2'] == 1) { ?>
                            <div class="row">
                                <div class="col-md-12"><img style="height: 28px;" src="<?php echo $data['flight_img_2']; ?>" /> </div>
                                <div class="col-md-4" style=" font-size: 12px; font-weight: bold; margin-top: 5px;"><?php echo $data['board_time_1_2']; ?></div>
                                <div class="col-md-4" style=" font-size: 12px; font-weight: bold; margin-top: 5px; text-align:center;"><?php echo $data['duration_1_2']; ?></div>
                                <div class="col-md-4" style=" font-size: 12px; font-weight: bold; margin-top: 5px;text-align:center;"><?php echo $data['depart_time_1_2']; ?></div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    
                                    <strong><?php echo $data['board_city_name_1_2']; ?></strong>
                                    <?php //echo $data['board_airport_1']; ?>
                                </div>
                                <div class="col-md-4">&nbsp;</div>
                                <div class="col-md-4" style="text-align:center;">
                                    
                                    <strong><?php echo $data['depart_city_name_1_2']; ?></strong>
                                    <?php //echo $data['depart_airport_1']; ?>
                                </div>
                            </div>
                        <?php }else{ 
                            for ($i = 0; $i <= $data['stopages_count_2']; $i++) {
                                if($i == 0){
                                    $board_time_1            = $data['board_time_1_2'];
                                    $board_city_1            = $data['board_city_1_2'];
                                    $board_city_name_1       = $data['board_city_name_1_2'];
                                    $board_airport_1         = $data['board_airport_1_2'];
                                    $board_datetime_1        = $data['board_datetime_1_2'];
                                    $duration_1              = $data['duration_1_2'];
                                    $depart_time_1           = $data['depart_time_1_2'];
                                    $depart_city_1           = $data['depart_city_1_2'];
                                    $depart_airport_1        = $data['depart_airport_1_2'];
                                    $depart_datetime_1       = $data['depart_datetime_1_2'];
                                    $depart_city_name_1      = $data['depart_city_name_1_2'];
                                }
                                
                                if($i == 1){
                                    $board_time_1            = $data['board_time_2_2'];
                                    $board_city_1            = $data['board_city_2_2'];
                                    $board_city_name_1       = $data['board_city_name_2_2'];
                                    $board_airport_1         = $data['board_airport_2_2'];
                                    $board_datetime_1        = $data['board_datetime_2_2'];
                                    $duration_1              = $data['duration_2_2'];
                                    $depart_time_1           = $data['depart_time_2_2'];
                                    $depart_city_1           = $data['depart_city_2_2'];
                                    $depart_airport_1        = $data['depart_airport_2_2'];
                                    $depart_datetime_1       = $data['depart_datetime_2_2'];
                                    $depart_city_name_1      = $data['depart_city_name_2_2'];	
                                }

                                if($i == 2){    
                                    $board_time_1            = $data['board_time_3_2'];
                                    $board_city_1            = $data['board_city_3_2'];
                                    $board_city_name_1       = $data['board_city_name_3_2'];
                                    $board_airport_1         = $data['board_airport_3_2'];
                                    $board_datetime_1        = $data['board_datetime_3_2'];
                                    $duration_1              = $data['duration_3_2'];
                                    $depart_time_1           = $data['depart_time_3_2'];
                                    $depart_city_1           = $data['depart_city_3_2'];
                                    $depart_airport_1        = $data['depart_airport_3_2'];
                                    $depart_datetime_1       = $data['depart_datetime_3_2'];
                                    $depart_city_name_1      = $data['depart_city_name_3_2'];
                                }
                                
                                if($i == 3){
                                    $board_time_1            = $data['board_time_4_2'];
                                    $board_city_1            = $data['board_city_4_2'];
                                    $board_city_name_1       = $data['board_city_name_4_2'];
                                    $board_airport_1         = $data['board_airport_4_2'];
                                    $board_datetime_1        = $data['board_datetime_4_2'];
                                    $duration_1              = $data['duration_4_2'];
                                    $depart_time_1           = $data['depart_time_4_2'];
                                    $depart_city_1           = $data['depart_city_4_2'];
                                    $depart_airport_1        = $data['depart_airport_4_2'];
                                    $depart_datetime_1       = $data['depart_datetime_4_2'];
                                    $depart_city_name_1      = $data['depart_city_name_4_2'];
                                }
                            ?>

                            <div class="row">
                                <div class="col-md-12"><img style="height: 28px;" src="<?php echo $data['flight_img_2']; ?>" /> </div>
                                <div class="col-md-4" style=" font-size: 12px; font-weight: bold; margin-top: 5px;"><?php echo $board_time_1; ?></div>
                                <div class="col-md-4" style=" font-size: 12px; font-weight: bold; margin-top: 5px; text-align:center;"><?php echo $duration_1; ?></div>
                                <div class="col-md-4" style=" font-size: 12px; font-weight: bold; margin-top: 5px; text-align:center;"><?php echo $depart_time_1; ?></div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    
                                    <strong><?php echo $board_city_name_1; ?></strong>
                                    <?php //echo $board_airport_1; ?>
                                </div>
                                <div class="col-md-4">&nbsp;</div>
                                <div class="col-md-4" style="text-align:center;">
                                    
                                    <strong><?php echo $depart_city_name_1; ?></strong>
                                    <?php //echo $depart_airport_1; ?>
                                </div>
                            </div>
    
                            <?php } ?> 
                        <?php } ?>
                    </div>           
                    <?php }?>        
                    
                </div>
            </div>
               

            <hr>
            <div class="col-md-12 p-2 mt-3">
                <div class="d-flex justify-content-between">
                    <div class="p-1">Base Price</div>
                    <div class="p-1">₹ <?php echo @$data['BaseFare']; ?></div>
                </div>
                <div class="d-flex justify-content-between">
                    <div class="p-1">Total taxes & fee</div>
                    <div class="p-1">₹ <?php echo @$data['tax']; ?></div>
                </div>
                <hr>
                <div class="d-flex justify-content-between">
                    <div>Total Net Price</div>
                    <div>₹ <?php echo @$data['sum_of_fare']; ?></div>
                </div>
            </div>
        </div>
        <div id="review-div" style="padding:15px; text-align:center"></div>
    </div>
</div>
  
<script>
    $(function() {
            $('.datepicker-adult').datepicker({
                format: "mm/dd/yyyy",
                startDate: new Date('<?php echo $adult_start_date; ?>'),
                endDate: new Date('<?php echo $adult_end_date; ?>')
            }); 
            // $(".datepicker-adult").datepicker({
            //     beforeShow: addCustomInformation,
            //     beforeShowDay: function(date) {
            //         return [true, date.getDay() === 5 || date.getDay() === 6 ? "weekend" : "weekday"];
            //     },
            //     onChangeMonthYear: addCustomInformation,
            //     onSelect: addCustomInformation
            // });
            $('.datepicker-child').datepicker({
                format: "mm/dd/yyyy",
                startDate: new Date('<?php echo $child_start_date; ?>'),
                endDate: new Date('<?php echo $child_end_date; ?>')
            });     
            // $(".datepicker-child").datepicker({
            //     beforeShow: addCustomInformation,
            //     beforeShowDay: function(date) {
            //         return [true, date.getDay() === 5 || date.getDay() === 6 ? "weekend" : "weekday"];
            //     },
            //     onChangeMonthYear: addCustomInformation,
            //     onSelect: addCustomInformation
            // });

            $('.datepicker-infant').datepicker({
                format: "mm/dd/yyyy",
                startDate: new Date('<?php echo $infant_start_date; ?>'),
                endDate: new Date('<?php echo $infant_end_date; ?>')
            });   
            // $(".datepicker-infant").datepicker({
            //     beforeShow: addCustomInformation,
            //     beforeShowDay: function(date) {
            //         return [true, date.getDay() === 5 || date.getDay() === 6 ? "weekend" : "weekday"];
            //     },
            //     onChangeMonthYear: addCustomInformation,
            //     onSelect: addCustomInformation
            // });
            
            $("#review-button-id").attr("disabled", true);
        });
        
    function review(priceIds){
          
        var passenger_type = $("input[name='passenger_type[]']").map(function(){
            return $(this).val();
        }).get();
        
        var passenger_types = $("input[name='passenger_types[]']").map(function(){
            return $(this).val();
        }).get();
        
        var titles = $("select[name='title[]']").map(function(){
            return $(this).val();
        }).get();

        console.log(titles);
        

        first_name_error = '0'
        var first_names = $("input[name='first_name[]']").map(function(){
            if ($(this).val() == ''){
                first_name_error = '1'
            }
            return $(this).val();
        }).get();

        var last_names = $("input[name='last_name[]']").map(function(){
            
            return $(this).val();
        }).get();

        dob_error = '0'
        var dobs = $("input[name='dob[]']").map(function(){
            if ($(this).val() == ''){
                dob_error = '1'
            }
            return $(this).val();
        }).get();

        var contact_no = $("input[name='contact_no']").val();
        var email = $("input[name='email']").val();
        var nationality = $("select[name='nationality']").val();
        
        var chkPassport = document.getElementById("exampleCheck2");
        gst_error = '0'
        if (chkPassport.checked) {
            var gst_no = $("input[name='gst_no']").val();
            if(gst_no == ''){
                gst_error = '1'
            }
            gst_no = gst_no;
        } else {
            var gst_no = ''
        }

        if(first_name_error == '1'){
            alert('Please fill all the first name values');
            return false;
        } else if(dob_error == '1'){
            alert('Please fill all the dob values');
            return false;
        } else if(contact_no == ''){
            alert('Please enter mobile no.');
            return false;
        } else if(email == ''){
            alert('Please enter email');
            return false;
        } else if(gst_error == '1'){
            alert('Please enter gst no');
            return false;
        }else{
            priceIds = '<?php echo $data['price_id']; ?>';
            <?php if($data['is_round'] == '1'){ ?> 
                priceIds2 = '<?php echo $data['price_id_2']; ?>';
                var prices_id = {"priceIds": [priceIds, priceIds2]};
            <?php }else{?>
                var prices_id = {"priceIds": [priceIds]};
            <?php }?>
         
            var params = {
                "priceIds" : prices_id,
                "passenger_type": passenger_type,
                "passenger_types": passenger_types,
                "first_names": first_names,
                "last_names": last_names,
                "titles": titles,
                "dobs": dobs,
                "contact_no": contact_no,
                "email": email,
                "dobs": dobs,
                "gst_no": gst_no,
                "nationality":nationality
            }
            
            $('#review-button-id').html('Loading ....');
            
            console.log(JSON.stringify(params));
            $.ajax({
                    url: "<?php echo base_url('review-flight-details');?>",
                    type: 'POST',
                    contentType: "application/json",
                    data: JSON.stringify(params),
                    success: function(res) {
                        $("#main-div-id").hide();
                        $("#flight-div-id").addClass("d-none d-lg-block col-md-12").removeClass("d-none d-lg-block col-md-4");
                        $('#review-div').html(res);
                        console.log(res);
                    }
                });
        }
        
        
    }
    function getGst(){
        var chkPassport = document.getElementById("exampleCheck2");
        if (chkPassport.checked) {
            $('#gst-id').show();
        } else {
            $('#gst-id').hide();
        }
    };

    function getChecked(){
        var chk = document.getElementById("exampleCheck4");
        if (chk.checked) {
            $("#review-button-id").attr("disabled", false);
        }else{
            $("#review-button-id").attr("disabled", true);
        }
    };

    $(function() {
        $('.dropdown > .caption').on('click', function() {
            $(this).parent().toggleClass('open');
        });
        $('.dropdown > .list > .item').on('click', function() {
            $('.dropdown > .list > .item').removeClass('selected');
            $(this).addClass('selected').parent().parent().removeClass('open').children('.caption').text( $(this).text() );
        });
        $(document).on('keyup', function(evt) {
            if ( (evt.keyCode || evt.which) === 27 ) {
            $('.dropdown').removeClass('open');
            }
        });
        $(document).on('click', function(evt) {
            if ( $(evt.target).closest(".dropdown > .caption").length === 0 ) {
            $('.dropdown').removeClass('open');
            }
        });
    });
</script>