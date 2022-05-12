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
<div class="row">
    <div class="col-md-8">
        <div class="row">
            
            <?php for ($i = 1; $i <= $data['adult_count']; $i++) {?>
                <div style="background-color: #fff" class="col-lg-12 col-xl-12 order-lg-1 order-xl-1 p-4">
                <div class="h5">Adult <?php echo $i; ?></div>
                <!--begin:: Widgets/Activity-->

                    <div class="row">
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="inputDate">Title</label>
                                <select name="title[]" class="form-control">
                                    <option val="Mr.">Mr.</option>
                                    <option val="Mrs.">Mrs.</option>
                                    <option val="Miss">Miss</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="inputDate">First Name</label>
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
                                <label for="inputDate">Nationality</label>
                                <select name="nationality[]" class="form-control">
                                    <option val="India">India</option>
                                    <option val="Nepal">Nepal</option>
                                </select>
                                
                            </div>
                        </div>
                    </div>

                   
                </div>
            <?php }?>

            <?php for ($i = 1; $i <= $data['child_count']; $i++) {?>
                <div style="background-color: #fff" class="col-lg-12 col-xl-12 order-lg-1 order-xl-1 p-4">
                <div class="h5">Child <?php echo $i; ?></div>
                <!--begin:: Widgets/Activity-->

                    <div class="row">
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="inputDate">Title</label>
                                <select name="title[]" class="form-control">
                                    <option val="Mr.">Mr.</option>
                                    <option val="Mrs.">Mrs.</option>
                                    <option val="Miss">Miss</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="inputDate">First Name</label>
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
                                <label for="inputDate">Nationality</label>
                                <select name="nationality[]" class="form-control">
                                    <option val="India">India</option>
                                    <option val="Nepal">Nepal</option>
                                </select>
                                
                            </div>
                        </div>
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
                                <label for="inputDate">Mobile Number</label>
                                <input type="text" class="form-control" placeholder="Enter Mobile Number" required>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="inputDate">Email</label>
                                <input type="email" class="form-control" placeholder="Enter Your Email" required>
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
        
        <!-- <div class="row mt-3">
            <div style="background-color: #fff" class="col-lg-12 col-xl-12 order-lg-1 order-xl-1 p-4">
                <div class="form-group text-left">
                    <div class="form-check">
                        <input type="checkbox" class="form-check-input" id="exampleCheck2" name="is_checked" onclick="getGst()">
                        <label class="form-check-label" for="exampleCheck2">GST number for business travel (optional)</label>
                        <input type="text" class="form-control" id="gst-id placeholder="Enter GST" style="display:none" required>
                    </div>
                </div>
            </div>
        </div> -->

        <div class="row mt-3">
            <div style="background-color: #fff" class="col-lg-12 col-xl-12 order-lg-1 order-xl-1 p-4">
                <div class="form-group text-left">
                    <div class="form-check">
                        <input type="checkbox" class="form-check-input" id="exampleCheck2" name="is_checked" onclick="getGst()">
                        <label class="form-check-label" for="exampleCheck2">Donate 10 for COVID19 relief and for Utkarsh an organization contributing towards nature by planting  trees, sporting old age homes and child education</label>
                        <!-- <input type="text" class="form-control" id="gst-id placeholder="Enter GST" style="display:none" required> -->
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
                        <!-- <input type="checkbox" class="form-check-input" id="exampleCheck3"> -->
                        <label class="form-check-label" for="exampleCheck3">By clicking on continue to pay you are agreeing with the Fare Rules, the Privacy Policy and terms and conditions of The Travel Square.</label>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="form-group text-center mt-3">
            <button class="btn btn-dark" >Continue To Pay</button>
        </div>
    </div>


    
    
    <div class="d-none d-lg-block col-md-4">
        <div class="card shadow p-2">
            <div class="h5">Selected Flight</div>
            <div class="d-flex justify-content-between bg-secondary mb-3">
                <div class="p-2">Departing Flight (<?php echo $data['depart_datetime_1']; ?>)</div>
                <div class="p-2">Flights Details</div>
            </div>
            
            <div class="col-md-12 p-0">
                <div class="card rounded shadow">
                    <div class="row">
                        <div class="col-xs-3 col-sm-3 col-md-3">
                            <div class="text-center">
                                <img style="width:50px; height: 50px;" src="<?php echo $data['flight_img_1']; ?>" alt="" class="img-responsive rounded">
                                <div><?php echo $data['flight_name_1']; ?></div>
                            </div>
                        </div>
                        <div class="col-xs-3 col-sm-3 col-md-3 mt-2">
                            <div class="text-center">
                                <div style="font-size: 16px;"><?php echo $data['board_time_1']; ?></div>
                                <div><?php echo $data['origin_1']; ?></div>
                            </div>
                        </div>
                        <div class="col-xs-3 col-sm-3 col-md-3">
                            <div class="text-center">
                                <div class="mt-2"><?php echo $data['duration_1']; ?></div>
                                <strong style="font-size: 12px;"><?php echo $data['flight_type_1']; ?></strong>
                            </div>
                        </div>
                        <div class="col-xs-3 col-sm-3 col-md-3 mt-2">
                            <div class="text-center">
                                <div style="font-size: 16px;"><?php echo $data['depart_time_1']; ?></div>
                                <div><?php echo $data['destination_1']; ?></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php if($data['flight_name_2']!=''){ ?>       
            <hr>   

            <div class="mt-2">
                <div class="d-flex justify-content-between bg-secondary mb-3">
                    <div class="p-2">Return Flight (<?php echo $data['depart_datetime_2']; ?>)</div>
                    <div class="p-2">Flights Details</div>
                </div>
                
                <div class="col-md-12 p-0">
                <div class="card rounded shadow">
                    <div class="row">
                        <div class="col-xs-3 col-sm-3 col-md-3">
                            <div class="text-center">
                                <img style="width:50px; height: 50px;" src="<?php echo $data['flight_img_2']; ?>" alt="" class="img-responsive rounded">
                                <div><?php echo $data['flight_name_2']; ?></div>
                            </div>
                        </div>
                        <div class="col-xs-3 col-sm-3 col-md-3 mt-2">
                            <div class="text-center">
                                <div style="font-size: 16px;"><?php echo $data['board_time_2']; ?></div>
                                <div><?php echo $data['origin_2']; ?></div>
                            </div>
                        </div>
                        <div class="col-xs-3 col-sm-3 col-md-3">
                            <div class="text-center">
                                <div class="mt-2"><?php echo $data['duration_2']; ?></div>
                                <strong style="font-size: 12px;"><?php echo $data['flight_type_2']; ?></strong>
                            </div>
                        </div>
                        <div class="col-xs-3 col-sm-3 col-md-3 mt-2">
                            <div class="text-center">
                                <div style="font-size: 16px;"><?php echo $data['depart_time_2']; ?></div>
                                <div><?php echo $data['destination_2']; ?></div>
                            </div>
                        </div>
                    </div>
                </div>
                </div>
            </div>
            <?php }?>    

            <hr>
            <div class="mt-3">
                <div class="d-flex justify-content-between">
                    <div class="p-1">Base Price</div>
                    <div class="p-1">₹ <?php echo $data['BaseFare']; ?></div>
                </div>
                <div class="d-flex justify-content-between">
                    <div class="p-1">Total taxes & fee</div>
                    <div class="p-1">₹ <?php echo $data['tax']; ?></div>
                </div>
                <hr>
                <div class="d-flex justify-content-between">
                    <div>Total Net Price</div>
                    <div>₹ <?php echo $data['sum_of_fare']; ?></div>
                </div>
            </div>
        </div>
    </div>
</div>
  
<script>
    function getGst(){
        var chkPassport = document.getElementById("exampleCheck2");
        if (chkPassport.checked) {
            $('#gst-id').show();
        } else {
            $('#gst-id').hide();
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