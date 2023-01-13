<style>
	.selected{
		background-color: rgb(156 137 215 / 30%)!important;
	}
	.highlight{
		background-color: rgb(156 137 215 / 30%)!important;
	}
	.flight-table tr{
		cursor: pointer!important;
	}
</style>

<div class="row mt-3 mb-4">
<!-- <div class="col-md-3">
	
</div> -->
	<div class="col-md-12">
		<h5>Showing Flights for:</h5>
		<div class="row mb-2">
			<div class="<?php if($JourneyType == '2'){ ?>col-xs-6 col-sm-6 col-md-6<?php }else{?>col-xs-12 col-sm-12 col-md-12<?php }?>">
				<div class="card p-3">
					<div class="ml-5">
					<?php if($JourneyType == '2'){ ?>
						<input type="radio" class="mt-2" name="optradio" onclick="showHideDiv('first_div','second_div')" checked>
						<?php } ?>
						<span style="font-size: 14px;">&nbsp;&nbsp;<?php echo $Origin; ?> > <?php echo $Destination; ?></span>
					</div>
				</div>
			</div>
			<?php if($JourneyType == '2'){ ?>
			<div class="col-xs-6 col-sm-6 col-md-6">
				<div class="card p-3">
					<div class="ml-5">
						<input type="radio" class="mt-2" name="optradio" onclick="showHideDiv('second_div','first_div')">
						<span style="font-size: 14px;">&nbsp;&nbsp;<?php echo $Destination; ?> > <?php echo $Origin; ?></span>
					</div>
				</div>
			</div>
			<?php } ?>
		</div>
		<div class="card first_div" id="demo" style="height:400px; overflow:auto;">
			<table class="table table-1 flight-table" id="flight-table">
				<thead class="text-center">
					<tr>
						<th style="width:30%">Airline</th>
						<th style="width:20%">Departure</th>
						<th style="width:10%">Duration</th>
						<th style="width:20%">Arrival</th>
						<th style="width:20%">Price</th>
					</tr>
				</thead>
				<tbody id="get-info">
					<?php 
						$i=1; if ($response_onward!='') {
						foreach ($response_onward as $Result) { 
							$stopages = $stopages_count = $stopages_counts = count($Result['sI']);
							
							$stopages = $stopages-1;
							$stopages_count = $stopages_count-1;
							
							
							$stopages_counts_exists = [];
							$stopages_counts_exists_2 = [];
							for ($k = 0; $k < $stopages_counts; $k++) {
								$sn = $Result['sI'][$k]['sN'];
								if (!in_array($sn, $stopages_counts_exists)){
									array_push($stopages_counts_exists,$k);
								}else{
									array_push($stopages_counts_exists_2,$k);
								}
							}
							$stopages_counts = count($stopages_counts_exists);
							$stopages_count = $stopages_counts-1;
							if($stopages_counts == '1'){
								$stopage = 'Direct';
							}else{
								$stopage = ($stopages_counts-1).' Stop';
							}
							?>
							<tr class="<?php if($i == 1){?>highlight <?php } ?> one_way" id="one_way_<?php echo $i; ?>" onclick="getSelectedDiv('one_way', '<?php echo $i?>')">
							<td><div class="text-center">
							<input type="hidden" id="one_way_<?php echo $i; ?>_priceIds" value="<?php echo $Result['totalPriceList'][0]['id']; ?>" />
							<input type="hidden" id="one_way_<?php echo $i; ?>_stopages_counts_exists" value="<?php echo count($stopages_counts_exists); ?>" />
							<input type="hidden" id="one_way_<?php echo $i; ?>_stopages_counts_exists_2" value="<?php echo count($stopages_counts_exists_2); ?>" />
							<input type="hidden" id="one_way_<?php echo $i; ?>_stopages_counts" value="<?php echo $stopages_counts; ?>" >
							<input type="hidden" id="one_way_<?php echo $i; ?>_stopages_counts" value="<?php echo $stopages_counts; ?>" >
							<input type="hidden" id="one_way_<?php echo $i; ?>_adult_count" value="<?php echo $AdultCount; ?>" >
								<input type="hidden" id="one_way_<?php echo $i; ?>_child_count" value="<?php echo $ChildCount; ?>" >
								<input type="hidden" id="one_way_<?php echo $i; ?>_infant_count" value="<?php echo $InfantCount; ?>" >
								<input type="hidden" id="one_way_<?php echo $i; ?>_flight_name" value="<?php echo $Result['sI']['0']['fD']['aI']['name']; ?>" >
								<input type="hidden" id="one_way_<?php echo $i; ?>_travel_date" value="<?php echo $travel_date; ?>">
								<input type="hidden" id="one_way_<?php echo $i; ?>_return_date" value="<?php echo $return_date; ?>">
								<input type="hidden" id="one_way_<?php echo $i; ?>_journey_type" value="<?php echo $JourneyType; ?>">
								
								<input type="hidden" id="one_way_<?php echo $i; ?>_origin" value="<?php echo $Origin; ?>">
									<input type="hidden" id="one_way_<?php echo $i; ?>_destination" value="<?php echo $Destination; ?>">
									<?php if(isset($Result['totalPriceList'][0]['fd']['ADULT']['bI']['iB'])){?>
										<input type="hidden" id="one_way_<?php echo $i; ?>_baggage" value="<?php echo $Result['totalPriceList'][0]['fd']['ADULT']['bI']['iB']; ?>">
									<?php }else{ ?>
										<input type="hidden" id="one_way_<?php echo $i; ?>_baggage" value="">
									<?php }?>
									<?php if(isset($Result['totalPriceList'][0]['fd']['ADULT']['bI']['cB'])){?>					
										<input type="hidden" id="one_way_<?php echo $i; ?>_cabin_baggage" value="<?php echo $Result['totalPriceList'][0]['fd']['ADULT']['bI']['cB']; ?>">
									<?php }else{ ?>
										<input type="hidden" id="one_way_<?php echo $i; ?>_cabin_baggage" value="">
									<?php }?>
									<?php if(isset($Result['totalPriceList'][0]['fd']['ADULT']['rT'])){?>
										<input type="hidden" id="one_way_<?php echo $i; ?>_is_refundable" value="<?php echo $Result['totalPriceList'][0]['fd']['ADULT']['rT'] ? "Yes":"No"; ?>">
									<?php }else{ ?>
										<input type="hidden" id="one_way_<?php echo $i; ?>_is_refundable" value="">
									<?php }?>
							<?php if($Result['sI']['0']['fD']['aI']['code'] == '6E'){?>
							<input type="hidden" id="one_way_<?php echo $i; ?>_flight" value="<?php echo base_url(); ?>uploads/flight-images/indigo.jpg">
							<img style="height: 50px;" src="<?php echo base_url(); ?>uploads/flight-images/indigo.jpg" alt="" class="img-responsive rounded" title="<?php echo $Result['sI']['0']['fD']['aI']['name']; ?>">
							<?php }elseif($Result['sI']['0']['fD']['aI']['code'] == 'SG'){?>
							<input type="hidden" id="one_way_<?php echo $i; ?>_flight" value="<?php echo base_url(); ?>uploads/flight-images/spicejet.jpg">
							<img style="height: 50px;" src="<?php echo base_url(); ?>uploads/flight-images/spicejet.jpg" alt="" class="img-responsive rounded" class="img-responsive rounded" title="<?php echo $Result['sI']['0']['fD']['aI']['name']; ?>">
							<?php }elseif($Result['sI']['0']['fD']['aI']['code'] == 'G8'){?>
							<input type="hidden" id="one_way_<?php echo $i; ?>_flight" value="<?php echo base_url(); ?>uploads/flight-images/go.jpg">	
							<img style="height: 50px;" src="<?php echo base_url(); ?>uploads/flight-images/go.jpg" alt="" class="img-responsive rounded" class="img-responsive rounded" title="<?php echo $Result['sI']['0']['fD']['aI']['name']; ?>">
							<?php }elseif($Result['sI']['0']['fD']['aI']['code'] == 'G9'){?>
							<input type="hidden" id="one_way_<?php echo $i; ?>_flight" value="<?php echo base_url(); ?>uploads/flight-images/airarabia.jpg">
							<img style="height: 50px;" src="<?php echo base_url(); ?>uploads/flight-images/airarabia.jpg" alt="" class="img-responsive rounded" class="img-responsive rounded" title="<?php echo $Result['sI']['0']['fD']['aI']['name']; ?>">
							<?php }elseif($Result['sI']['0']['fD']['aI']['code'] == 'FZ'){?>
							<input type="hidden" id="one_way_<?php echo $i; ?>_flight" value="<?php echo base_url(); ?>uploads/flight-images/flydubai.jpg">
							<img style="height: 50px;" src="<?php echo base_url(); ?>uploads/flight-images/flydubai.jpg" alt="" class="img-responsive rounded" class="img-responsive rounded" title="<?php echo $Result['sI']['0']['fD']['aI']['name']; ?>">
							<?php }elseif($Result['sI']['0']['fD']['aI']['code'] == 'IX'){?>
							<input type="hidden" id="one_way_<?php echo $i; ?>_flight" value="<?php echo base_url(); ?>uploads/flight-images/airindia.jpg">
							<img style="height: 50px;" src="<?php echo base_url(); ?>uploads/flight-images/airindia.jpg" alt="" class="img-responsive rounded" class="img-responsive rounded" title="<?php echo $Result['sI']['0']['fD']['aI']['name']; ?>">
							<?php }elseif($Result['sI']['0']['fD']['aI']['code'] == 'I5'){?>
							<input type="hidden" id="one_way_<?php echo $i; ?>_flight" value="<?php echo base_url(); ?>uploads/flight-images/airasia.jpg">	
							<img style="height: 50px;" src="<?php echo base_url(); ?>uploads/flight-images/airasia.jpg" alt="" class="img-responsive rounded" class="img-responsive rounded" title="<?php echo $Result['sI']['0']['fD']['aI']['name']; ?>">
							<?php }else{?>
							<input type="hidden" id="one_way_<?php echo $i; ?>_flight" value="https://s3.ap-south-1.amazonaws.com/com.travclan.cms.production/appcms/2.png">
							<img style="height: 50px;" src="https://s3.ap-south-1.amazonaws.com/com.travclan.cms.production/appcms/2.png" alt="" class="img-responsive rounded" class="img-responsive rounded">
							<?php } ?>	
							
							</div></td>	
							<td>
									<div class="text-center">
										<div id="one_way_<?php echo $i; ?>_board_time" style="font-size: 14px;"><?php echo date('H:i', strtotime($Result['sI']['0']['dt'])); ?></div>
										<div id="one_way_<?php echo $i; ?>_board_city" class="lead"><?php echo $Result['sI']['0']['da']['code']; ?></div>
										<input type="hidden" id="one_way_<?php echo $i; ?>_board_datetime" value="<?php echo date('D M d Y', strtotime($Result['sI']['0']['dt'])); ?>">
										<input type="hidden" id="one_way_<?php echo $i; ?>_board_airport" value="<?php echo $Result['sI']['0']['da']['name']; ?>">
										<input type="hidden" id="one_way_<?php echo $i; ?>_board_city_name" value="<?php echo $Result['sI']['0']['da']['city']; ?>">
									</div>
								</td>
								<td>
									<div class="text-center">
										<div class="h6 mt-2" id="one_way_<?php echo $i; ?>_duration">
										<?php
											if($stopages_counts == 1)	{
												$datetime1 = new DateTime($Result['sI'][0]['dt']);
												$datetime2 = new DateTime($Result['sI'][0]['at']);
												$interval = $datetime1->diff($datetime2);
												// $elapsed = $interval->format('%h:%i:%s');
												// echo $elapsed
												$elapsed = $interval->format('%h h %i m');
												echo $elapsed; 

											}elseif($stopages_counts == 2)	{
												$datetime1 = new DateTime($Result['sI'][0]['dt']);
												$datetime2 = new DateTime($Result['sI'][0]['at']);
												$interval = $datetime1->diff($datetime2);
												$elapsed_1 = $interval->format('%h:%i:%s');
												

												$datetime1 = new DateTime($Result['sI'][1]['dt']);
												$datetime2 = new DateTime($Result['sI'][1]['at']);
												$interval = $datetime1->diff($datetime2);
												$elapsed_2 = $interval->format('%h:%i:%s');

												$h =  strtotime($elapsed_1);
												$h2 = strtotime($elapsed_2);

												$minute = date("i", $h2);
												$second = date("s", $h2);
												$hour = date("H", $h2);
												$convert = strtotime("+$minute minutes", $h);
												$convert = strtotime("+$second seconds", $convert);
												$convert = strtotime("+$hour hours", $convert);
												$new_time = date('g', $convert).' h '.date('i', $convert).' m';
												
												echo $new_time;
											}elseif($stopages_counts == 3)	{
												$datetime1 = new DateTime($Result['sI'][0]['dt']);
												$datetime2 = new DateTime($Result['sI'][0]['at']);
												$interval = $datetime1->diff($datetime2);
												$elapsed_1 = $interval->format('%h:%i:%s');
												

												$datetime1 = new DateTime($Result['sI'][1]['dt']);
												$datetime2 = new DateTime($Result['sI'][1]['at']);
												$interval = $datetime1->diff($datetime2);
												$elapsed_2 = $interval->format('%h:%i:%s');
												
												$datetime1 = new DateTime($Result['sI'][2]['dt']);
												$datetime2 = new DateTime($Result['sI'][2]['at']);
												$interval = $datetime1->diff($datetime2);
												$elapsed_3 = $interval->format('%h:%i:%s');

												$h =  strtotime($elapsed_1);
												$h2 = strtotime($elapsed_2);
												$h3 = strtotime($elapsed_3);

												$minute = date("i", $h2);
												$second = date("s", $h2);
												$hour = date("H", $h2);

												$minute += date("i", $h3);
												$second += date("s", $h3);
												$hour += date("H", $h3);

												$convert = strtotime("+$minute minutes", $h);
												$convert = strtotime("+$second seconds", $convert);
												$convert = strtotime("+$hour hours", $convert);
												$new_time = date('g', $convert).' h '.date('i', $convert).' m';
												
												echo $new_time;
											}
										?>	
										<input type="hidden" id="one_way_<?php echo $i; ?>_stopages_count" value="<?php echo $stopages_count; ?>">
											</div>
												
										<strong id="flight-type" style="font-size: 11px;"><?php echo $stopage; ?></strong>
									</div>
								</td>		
								<td>
								<div class="text-center">
										<input type="hidden" id="one_way_<?php echo $i; ?>_durations" value="<?php echo @$elapsed; ?>">
										<input type="hidden" id="one_way_<?php echo $i; ?>_flight_type" value="<?php echo $stopage; ?>">
										<div id="one_way_<?php echo $i; ?>_depart_time" style="font-size: 14px;"><?php echo date('H:i', strtotime($Result['sI'][$stopages_count]['at'])); ?></div>
										<div id="one_way_<?php echo $i; ?>_depart_city" class="lead"><?php echo $Result['sI'][$stopages_count]['aa']['code']; ?></div>
										<input type="hidden" id="one_way_<?php echo $i; ?>_depart_datetime" value="<?php echo date('D M d Y', strtotime($Result['sI'][$stopages_count]['at'])); ?>">
										<input type="hidden" id="one_way_<?php echo $i; ?>_depart_airport" value="<?php echo $Result['sI'][$stopages_count]['aa']['name']; ?>">
										<input type="hidden" id="one_way_<?php echo $i; ?>_depart_city_name" value="<?php echo $Result['sI'][$stopages_count]['aa']['city']; ?>">
									</div>
								<?php for ($x = 0; $x <= $stopages_count; $x++) {
										if($x == 0){
											$datetime1 = new DateTime($Result['sI'][0]['dt']);
											$datetime2 = new DateTime($Result['sI'][0]['at']);
											$start_time = date('H:i', strtotime($Result['sI'][0]['dt']));
											$end_time = date('H:i', strtotime($Result['sI'][0]['at']));
										}else if($x == 1){
											$datetime1 = new DateTime($Result['sI'][1]['dt']);
											$datetime2 = new DateTime($Result['sI'][1]['at']);
											$start_time = date('H:i', strtotime($Result['sI'][1]['dt']));
											$end_time = date('H:i', strtotime($Result['sI'][1]['at']));
										}else if($x == 2){
											$datetime1 = new DateTime($Result['sI'][2]['dt']);
											$datetime2 = new DateTime($Result['sI'][2]['at']);

											$start_time = date('H:i', strtotime($Result['sI'][2]['dt']));
											$end_time = date('H:i', strtotime($Result['sI'][2]['at']));
										}else if($x == 3){
											$datetime1 = new DateTime($Result['sI'][3]['dt']);
											$datetime2 = new DateTime($Result['sI'][3]['at']);

											$start_time = date('H:i', strtotime($Result['sI'][3]['dt']));
											$end_time = date('H:i', strtotime($Result['sI'][3]['at']));
										}
										
										
										$interval = $datetime1->diff($datetime2);
										$elapsed = $interval->format('%h h %i m');
										
									?>
										<input type="hidden" id="one_way_<?php echo $i; ?>_start_time_<?php echo $x; ?>" value="<?php echo $start_time; ?>">
										<input type="hidden" id="one_way_<?php echo $i; ?>_end_time_<?php echo $x; ?>" value="<?php echo $end_time; ?>">
										<input type="hidden" id="one_way_<?php echo $i; ?>_durations_<?php echo $x; ?>" value="<?php echo $elapsed; ?>">
										<input type="hidden" id="one_way_<?php echo $i; ?>_flight_type_<?php echo $x; ?>" value="<?php echo $stopage; ?>">
										<input type="hidden" id="one_way_<?php echo $i; ?>_depart_time_<?php echo $x; ?>" value="<?php echo date('H:i', strtotime($Result['sI'][$x]['at'])); ?>">
										<input type="hidden" id="one_way_<?php echo $i; ?>_depart_city_<?php echo $x; ?>" value="<?php echo $Result['sI'][$x]['aa']['code']; ?>">
										<input type="hidden" id="one_way_<?php echo $i; ?>_depart_datetime_<?php echo $x; ?>" value="<?php echo date('D M d Y', strtotime($Result['sI'][$x]['at'])); ?>">
										<input type="hidden" id="one_way_<?php echo $i; ?>_depart_airport_<?php echo $x; ?>" value="<?php echo $Result['sI'][$x]['aa']['name']; ?>">
										<input type="hidden" id="one_way_<?php echo $i; ?>_depart_city_name_<?php echo $x; ?>" value="<?php echo $Result['sI'][$x]['aa']['city']; ?>">
									
								<?php } ?>		
								</td>

								<?php
								 $AdultBasefare = $Result['totalPriceList'][0]['fd']['ADULT']['fC']['BF'];
								 $four_AdultBasefare = $AdultBasefare*4/100;
								 $AdultBasefare = $AdultBasefare-$four_AdultBasefare;
								 $AdultBasefare = $AdultCount*$AdultBasefare;
							     
								 $AdultTaxfare = $Result['totalPriceList'][0]['fd']['ADULT']['fC']['TAF'];
								 $AdultTaxfare = $AdultCount*$AdultTaxfare;

								 $AdultPrice = $AdultBasefare+$AdultTaxfare;

								 if($ChildCount > 0){
								
									$ChildBasefare = $Result['totalPriceList'][0]['fd']['CHILD']['fC']['BF'];
									$four_ChildBasefare = $ChildBasefare*4/100;
								 	$ChildBasefare = $ChildBasefare-$four_ChildBasefare;
								 	$ChildBasefare = $ChildCount*$ChildBasefare;

									$ChildTaxfare = $Result['totalPriceList'][0]['fd']['CHILD']['fC']['TAF'];
								 	$ChildTaxfare = $ChildCount*$ChildTaxfare;

									$ChildPrice = $ChildBasefare+$ChildTaxfare;

								 }else{
									$ChildPrice = 0;
									$ChildBasefare = 0;
									$ChildTaxfare = 0;								 
								 }
								 if($InfantCount > 0){
									
									$InfantBasefare = $Result['totalPriceList'][0]['fd']['INFANT']['fC']['BF'];
									$four_InfantBasefare = $InfantBasefare*4/100;
								 	$InfantBasefare = $InfantBasefare-$four_InfantBasefare;
								 	$InfantBasefare = $InfantCount*$InfantBasefare;

									$InfantTaxfare = $Result['totalPriceList'][0]['fd']['INFANT']['fC']['TAF'];
								 	$InfantTaxfare = $InfantCount*$InfantTaxfare;

									$InfantPrice = $InfantBasefare+$InfantTaxfare;

								 }else{
									$InfantPrice = 0;
									$InfantBasefare = 0;
									$InfantTaxfare = 0;									 
								 }
								 
								 $finalPrice = $AdultPrice+$ChildPrice+$InfantPrice;
								 $finalBasefare = $AdultBasefare+$ChildBasefare+$InfantBasefare;
								 $finalTaxfare = $AdultTaxfare+$ChildTaxfare+$InfantTaxfare;
								?>

								<td>
									<div class="text-center mt-4">
										<div id="flight-price" class="h5"><?php echo round($finalPrice,0); ?>/-
										<input type="hidden" id="one_way_<?php echo $i; ?>_basefare" value="<?php echo round($finalBasefare,0); ?>">
										<input type="hidden" id="one_way_<?php echo $i; ?>_tax" value="<?php echo round($finalTaxfare,0); ?>">
										</div>
									</div>
								</td>
							
							</tr>
						<?php $i++;} }else{ ?>
							<tr><td colspan="5" style="text-align:center; color:red;">No Flight Found...</td></tr>
						<?php } ?>

					</tbody>
				</table>
			</div>
			<?php if($JourneyType == '2'){ ?>									
			<div class="card second_div" id="demo" style="display:none;height:500px; overflow:auto;">
			<table class="table table-2">
				<thead class="text-center">
					<tr>
					<th style="width:30%">Airline</th>
					<th style="width:20%">Departure</th>
					<th style="width:10%">Duration</th>
					<th style="width:20%">Arrival</th>
					<th style="width:20%">Price</th>
					</tr>
				</thead>
				<tbody id="get-info">
					<?php 
						$i=1; if ($response_onward!='') {
						foreach ($response_onward as $Result) { 
							$stopages = $stopages_count = $stopages_counts = count($Result['sI']);
							
							$stopages = $stopages-1;
							$stopages_count = $stopages_count-1;
							
							
							$stopages_counts_exists = [];
							$stopages_counts_exists_2 = [];
							for ($k = 0; $k < $stopages_counts; $k++) {
								$sn = $Result['sI'][$k]['sN'];
								if (!in_array($sn, $stopages_counts_exists)){
									array_push($stopages_counts_exists,$k);
								}else{
									array_push($stopages_counts_exists_2,$k);
								}
							}
							$stopages_counts = count($stopages_counts_exists_2);
							$index = $stopages_counts_exists_2[0];
							$last_index = end($stopages_counts_exists_2);
							$stopages_count = $stopages_counts-1;
							if($stopages_counts == '1'){
								$stopage = 'Direct';
							}else{
								$stopage = ($stopages_counts-1).' Stop';
							}
							?>
							<tr class="<?php if($i == 1){?>selected <?php } ?> two_way" id="two_way_<?php echo $i; ?>" onclick="getSelectedDiv('two_way', '<?php echo $i?>')">
							<td><div class="text-center">
							<input type="hidden" id="two_way_<?php echo $i; ?>_priceIds" value="<?php echo $Result['totalPriceList'][0]['id']; ?>" />
							<input type="hidden" id="two_way_<?php echo $i; ?>_stopages_counts_exists" value="<?php echo count($stopages_counts_exists); ?>" />
							<input type="hidden" id="two_way_<?php echo $i; ?>_stopages_counts_exists_2" value="<?php echo count($stopages_counts_exists_2); ?>" />
							<input type="hidden" id="two_way_<?php echo $i; ?>_stopages_counts" value="<?php echo $stopages_counts; ?>" >
							<input type="hidden" id="two_way_<?php echo $i; ?>_stopages_counts" value="<?php echo $stopages_counts; ?>" >
							<input type="hidden" id="two_way_<?php echo $i; ?>_adult_count" value="<?php echo $AdultCount; ?>" >
								<input type="hidden" id="two_way_<?php echo $i; ?>_child_count" value="<?php echo $ChildCount; ?>" >
								<input type="hidden" id="two_way_<?php echo $i; ?>_infant_count" value="<?php echo $InfantCount; ?>" >
								<input type="hidden" id="two_way_<?php echo $i; ?>_flight_name" value="<?php echo $Result['sI']['0']['fD']['aI']['name']; ?>" >	
								<input type="hidden" id="two_way_<?php echo $i; ?>_origin" value="<?php echo $Origin; ?>">
									<input type="hidden" id="two_way_<?php echo $i; ?>_destination" value="<?php echo $Destination; ?>">
									<?php if(isset($Result['totalPriceList'][0]['fd']['ADULT']['bI']['iB'])){?>
										<input type="hidden" id="two_way_<?php echo $i; ?>_baggage" value="<?php echo $Result['totalPriceList'][0]['fd']['ADULT']['bI']['iB']; ?>">
									<?php }else{ ?>
										<input type="hidden" id="two_way_<?php echo $i; ?>_baggage" value="">
									<?php }?>
									<?php if(isset($Result['totalPriceList'][0]['fd']['ADULT']['bI']['cB'])){?>					
										<input type="hidden" id="two_way_<?php echo $i; ?>_cabin_baggage" value="<?php echo $Result['totalPriceList'][0]['fd']['ADULT']['bI']['cB']; ?>">
									<?php }else{ ?>
										<input type="hidden" id="two_way_<?php echo $i; ?>_cabin_baggage" value="">
									<?php }?>
									<?php if(isset($Result['totalPriceList'][0]['fd']['ADULT']['rT'])){?>
										<input type="hidden" id="two_way_<?php echo $i; ?>_is_refundable" value="<?php echo $Result['totalPriceList'][0]['fd']['ADULT']['rT'] ? "Yes":"No"; ?>">
									<?php }else{ ?>
										<input type="hidden" id="two_way_<?php echo $i; ?>_is_refundable" value="">
									<?php }?>
							<?php if($Result['sI'][$index]['fD']['aI']['code'] == '6E'){?>
							<input type="hidden" id="two_way_<?php echo $i; ?>_flight" value="<?php echo base_url(); ?>uploads/flight-images/indigo.jpg">
							<img style="height: 50px;" src="<?php echo base_url(); ?>uploads/flight-images/indigo.jpg" alt="" class="img-responsive rounded" title="<?php echo $Result['sI'][$index]['fD']['aI']['name']; ?>">
							<?php }elseif($Result['sI'][$index]['fD']['aI']['code'] == 'SG'){?>
							<input type="hidden" id="two_way_<?php echo $i; ?>_flight" value="<?php echo base_url(); ?>uploads/flight-images/spicejet.jpg">
							<img style="height: 50px;" src="<?php echo base_url(); ?>uploads/flight-images/spicejet.jpg" alt="" class="img-responsive rounded" class="img-responsive rounded" title="<?php echo $Result['sI'][$index]['fD']['aI']['name']; ?>">
							<?php }elseif($Result['sI'][$index]['fD']['aI']['code'] == 'G8'){?>
							<input type="hidden" id="two_way_<?php echo $i; ?>_flight" value="<?php echo base_url(); ?>uploads/flight-images/go.jpg">	
							<img style="height: 50px;" src="<?php echo base_url(); ?>uploads/flight-images/go.jpg" alt="" class="img-responsive rounded" class="img-responsive rounded" title="<?php echo $Result['sI'][$index]['fD']['aI']['name']; ?>">
							<?php }elseif($Result['sI'][$index]['fD']['aI']['code'] == 'G9'){?>
							<input type="hidden" id="two_way_<?php echo $i; ?>_flight" value="<?php echo base_url(); ?>uploads/flight-images/airarabia.jpg">
							<img style="height: 50px;" src="<?php echo base_url(); ?>uploads/flight-images/airarabia.jpg" alt="" class="img-responsive rounded" class="img-responsive rounded" title="<?php echo $Result['sI'][$index]['fD']['aI']['name']; ?>">
							<?php }elseif($Result['sI'][$index]['fD']['aI']['code'] == 'FZ'){?>
							<input type="hidden" id="two_way_<?php echo $i; ?>_flight" value="<?php echo base_url(); ?>uploads/flight-images/flydubai.jpg">
							<img style="height: 50px;" src="<?php echo base_url(); ?>uploads/flight-images/flydubai.jpg" alt="" class="img-responsive rounded" class="img-responsive rounded" title="<?php echo $Result['sI'][$index]['fD']['aI']['name']; ?>">
							<?php }elseif($Result['sI'][$index]['fD']['aI']['code'] == 'IX'){?>
							<input type="hidden" id="two_way_<?php echo $i; ?>_flight" value="<?php echo base_url(); ?>uploads/flight-images/airindia.jpg">
							<img style="height: 50px;" src="<?php echo base_url(); ?>uploads/flight-images/airindia.jpg" alt="" class="img-responsive rounded" class="img-responsive rounded" title="<?php echo $Result['sI'][$index]['fD']['aI']['name']; ?>">
							<?php }elseif($Result['sI'][$index]['fD']['aI']['code'] == 'I5'){?>
							<input type="hidden" id="two_way_<?php echo $i; ?>_flight" value="<?php echo base_url(); ?>uploads/flight-images/airasia.jpg">	
							<img style="height: 50px;" src="<?php echo base_url(); ?>uploads/flight-images/airasia.jpg" alt="" class="img-responsive rounded" class="img-responsive rounded" title="<?php echo $Result['sI'][$index]['fD']['aI']['name']; ?>">
							<?php }else{?>
							<input type="hidden" id="two_way_<?php echo $i; ?>_flight" value="https://s3.ap-south-1.amazonaws.com/com.travclan.cms.production/appcms/2.png">
							<img style="height: 50px;" src="https://s3.ap-south-1.amazonaws.com/com.travclan.cms.production/appcms/2.png" alt="" class="img-responsive rounded" class="img-responsive rounded">
							<?php } ?>	
							
							</div></td>	
							<td>
									<div class="text-center">
										<div id="two_way_<?php echo $i; ?>_board_time" style="font-size: 14px;"><?php echo date('H:i', strtotime($Result['sI'][$index]['dt'])); ?></div>
										<div id="two_way_<?php echo $i; ?>_board_city" class="lead"><?php echo $Result['sI'][$index]['da']['code']; ?></div>
										<input type="hidden" id="two_way_<?php echo $i; ?>_board_datetime" value="<?php echo date('D M d Y', strtotime($Result['sI'][$index]['dt'])); ?>">
										<input type="hidden" id="two_way_<?php echo $i; ?>_board_airport" value="<?php echo $Result['sI'][$index]['da']['name']; ?>">
										<input type="hidden" id="two_way_<?php echo $i; ?>_board_city_name" value="<?php echo $Result['sI'][$index]['da']['city']; ?>">
									</div>
								</td>
								<td>
									<div class="text-center">
										<div class="h6 mt-2" id="two_way_<?php echo $i; ?>_duration">
										<?php
											if($stopages_counts == 1)	{
												$datetime1 = new DateTime($Result['sI'][$index]['dt']);
												$datetime2 = new DateTime($Result['sI'][$index]['at']);
												$interval = $datetime1->diff($datetime2);
												// $elapsed = $interval->format('%h:%i:%s');
												// echo $elapsed
												$elapsed = $interval->format('%h h %i m');
												echo $elapsed; 

											}elseif($stopages_counts == 2)	{
												$datetime1 = new DateTime($Result['sI'][$index]['dt']);
												$datetime2 = new DateTime($Result['sI'][$index]['at']);
												$interval = $datetime1->diff($datetime2);
												$elapsed_1 = $interval->format('%h:%i:%s');
												

												$datetime1 = new DateTime($Result['sI'][$stopages_counts_exists_2[1]]['dt']);
												$datetime2 = new DateTime($Result['sI'][$stopages_counts_exists_2[1]]['at']);
												$interval = $datetime1->diff($datetime2);
												$elapsed_2 = $interval->format('%h:%i:%s');

												$h =  strtotime($elapsed_1);
												$h2 = strtotime($elapsed_2);

												$minute = date("i", $h2);
												$second = date("s", $h2);
												$hour = date("H", $h2);
												$convert = strtotime("+$minute minutes", $h);
												$convert = strtotime("+$second seconds", $convert);
												$convert = strtotime("+$hour hours", $convert);
												$new_time = date('g', $convert).' h '.date('i', $convert).' m';
												
												echo $new_time;
											}elseif($stopages_counts == 3)	{
												$datetime1 = new DateTime($Result['sI'][$index]['dt']);
												$datetime2 = new DateTime($Result['sI'][$index]['at']);
												$interval = $datetime1->diff($datetime2);
												$elapsed_1 = $interval->format('%h:%i:%s');
												

												$datetime1 = new DateTime($Result['sI'][$stopages_counts_exists_2[1]]['dt']);
												$datetime2 = new DateTime($Result['sI'][$stopages_counts_exists_2[1]]['at']);
												$interval = $datetime1->diff($datetime2);
												$elapsed_2 = $interval->format('%h:%i:%s');
												
												$datetime1 = new DateTime($Result['sI'][$stopages_counts_exists_2[2]]['dt']);
												$datetime2 = new DateTime($Result['sI'][$stopages_counts_exists_2[2]]['at']);
												$interval = $datetime1->diff($datetime2);
												$elapsed_3 = $interval->format('%h:%i:%s');

												$h =  strtotime($elapsed_1);
												$h2 = strtotime($elapsed_2);
												$h3 = strtotime($elapsed_3);

												$minute = date("i", $h2);
												$second = date("s", $h2);
												$hour = date("H", $h2);

												$minute += date("i", $h3);
												$second += date("s", $h3);
												$hour += date("H", $h3);

												$convert = strtotime("+$minute minutes", $h);
												$convert = strtotime("+$second seconds", $convert);
												$convert = strtotime("+$hour hours", $convert);
												$new_time = date('g', $convert).' h '.date('i', $convert).' m';
												
												echo $new_time;
											}
										?>	
										<input type="hidden" id="two_way_<?php echo $i; ?>_stopages_count" value="<?php echo $stopages_count; ?>">
											</div>
												
										<strong id="flight-type" style="font-size: 11px;"><?php echo $stopage; ?></strong>
									</div>
								</td>		
								<td>
								<div class="text-center">
										<input type="hidden" id="two_way_<?php echo $i; ?>_durations" value="<?php echo @$elapsed; ?>">
										<input type="hidden" id="two_way_<?php echo $i; ?>_flight_type" value="<?php echo $stopage; ?>">
										<div id="two_way_<?php echo $i; ?>_depart_time" style="font-size: 14px;"><?php echo date('H:i', strtotime($Result['sI'][$last_index]['at'])); ?></div>
										<div id="two_way_<?php echo $i; ?>_depart_city" class="lead"><?php echo $Result['sI'][$last_index]['aa']['code']; ?></div>
										<input type="hidden" id="two_way_<?php echo $i; ?>_depart_datetime" value="<?php echo date('D M d Y', strtotime($Result['sI'][$last_index]['at'])); ?>">
										<input type="hidden" id="two_way_<?php echo $i; ?>_depart_airport" value="<?php echo $Result['sI'][$last_index]['aa']['name']; ?>">
										<input type="hidden" id="two_way_<?php echo $i; ?>_depart_city_name" value="<?php echo $Result['sI'][$last_index]['aa']['city']; ?>">
									</div>
								<?php for ($x = 0; $x <= $stopages_count; $x++) {
										if($x == 0){
											$datetime1 = new DateTime($Result['sI'][$index]['dt']);
											$datetime2 = new DateTime($Result['sI'][$index]['at']);
											$start_time = date('H:i', strtotime($Result['sI'][$index]['dt']));
											$end_time = date('H:i', strtotime($Result['sI'][$index]['at']));
											$key=$index;
										}else if($x == 1){
											$datetime1 = new DateTime($Result['sI'][$stopages_counts_exists_2[1]]['dt']);
											$datetime2 = new DateTime($Result['sI'][$stopages_counts_exists_2[1]]['at']);
											$start_time = date('H:i', strtotime($Result['sI'][$stopages_counts_exists_2[1]]['dt']));
											$end_time = date('H:i', strtotime($Result['sI'][$stopages_counts_exists_2[1]]['at']));
											$key=$stopages_counts_exists_2[1];
										}else if($x == 2){
											$datetime1 = new DateTime($Result['sI'][$stopages_counts_exists_2[2]]['dt']);
											$datetime2 = new DateTime($Result['sI'][$stopages_counts_exists_2[2]]['at']);

											$start_time = date('H:i', strtotime($Result['sI'][$stopages_counts_exists_2[2]]['dt']));
											$end_time = date('H:i', strtotime($Result['sI'][$stopages_counts_exists_2[2]]['at']));
											$key=$stopages_counts_exists_2[2];
										}else if($x == 3){
											$datetime1 = new DateTime($Result['sI'][$stopages_counts_exists_2[3]]['dt']);
											$datetime2 = new DateTime($Result['sI'][$stopages_counts_exists_2[3]]['at']);

											$start_time = date('H:i', strtotime($Result['sI'][$stopages_counts_exists_2[3]]['dt']));
											$end_time = date('H:i', strtotime($Result['sI'][$stopages_counts_exists_2[3]]['at']));
											$key=$stopages_counts_exists_2[3];
										}
										
										
										$interval = $datetime1->diff($datetime2);
										$elapsed = $interval->format('%h h %i m');
										
									?>
										<input type="hidden" id="two_way_<?php echo $i; ?>_start_time_<?php echo $x; ?>" value="<?php echo $start_time; ?>">
										<input type="hidden" id="two_way_<?php echo $i; ?>_end_time_<?php echo $x; ?>" value="<?php echo $end_time; ?>">
										<input type="hidden" id="two_way_<?php echo $i; ?>_durations_<?php echo $x; ?>" value="<?php echo $elapsed; ?>">
										<input type="hidden" id="two_way_<?php echo $i; ?>_flight_type_<?php echo $x; ?>" value="<?php echo $stopage; ?>">
										<input type="hidden" id="two_way_<?php echo $i; ?>_depart_time_<?php echo $x; ?>" value="<?php echo date('H:i', strtotime($Result['sI'][$key]['at'])); ?>">
										<input type="hidden" id="two_way_<?php echo $i; ?>_depart_city_<?php echo $x; ?>" value="<?php echo $Result['sI'][$key]['aa']['code']; ?>">
										<input type="hidden" id="two_way_<?php echo $i; ?>_depart_datetime_<?php echo $x; ?>" value="<?php echo date('D M d Y', strtotime($Result['sI'][$key]['at'])); ?>">
										<input type="hidden" id="two_way_<?php echo $i; ?>_depart_airport_<?php echo $x; ?>" value="<?php echo $Result['sI'][$key]['aa']['name']; ?>">
										<input type="hidden" id="two_way_<?php echo $i; ?>_depart_city_name_<?php echo $x; ?>" value="<?php echo $Result['sI'][$key]['aa']['city']; ?>">
									
								<?php } ?>		
								</td>
								<?php
								 
								 $AdultBasefare = $Result['totalPriceList'][0]['fd']['ADULT']['fC']['BF'];
								 $four_AdultBasefare = $AdultBasefare*4/100;
								 $AdultBasefare = $AdultBasefare-$four_AdultBasefare;
								 $AdultBasefare = $AdultCount*$AdultBasefare;
							     
								 $AdultTaxfare = $Result['totalPriceList'][0]['fd']['ADULT']['fC']['TAF'];
								 $AdultTaxfare = $AdultCount*$AdultTaxfare;
								 
								 $AdultPrice = $AdultBasefare+$AdultTaxfare;

								 if($ChildCount > 0){
									$ChildBasefare = $Result['totalPriceList'][0]['fd']['CHILD']['fC']['BF'];
									$four_ChildBasefare = $ChildBasefare*4/100;
								 	$ChildBasefare = $ChildBasefare-$four_ChildBasefare;
								 	$ChildBasefare = $ChildCount*$ChildBasefare;

									$ChildTaxfare = $Result['totalPriceList'][0]['fd']['CHILD']['fC']['TAF'];
								 	$ChildTaxfare = $ChildCount*$ChildTaxfare;

									$ChildPrice = $ChildBasefare+$ChildTaxfare;

								 }else{
									$ChildPrice = 0;
									$ChildBasefare = 0;
									$ChildTaxfare = 0;								 
								 }
								 if($InfantCount > 0){
									
									$InfantBasefare = $Result['totalPriceList'][0]['fd']['INFANT']['fC']['BF'];
									$four_InfantBasefare = $InfantBasefare*4/100;
								 	$InfantBasefare = $InfantBasefare-$four_InfantBasefare;
								 	$InfantBasefare = $InfantCount*$InfantBasefare;

									$InfantTaxfare = $Result['totalPriceList'][0]['fd']['INFANT']['fC']['TAF'];
								 	$InfantTaxfare = $InfantCount*$InfantTaxfare;

									$InfantPrice = $InfantBasefare+$InfantTaxfare;
								 }else{
									$InfantPrice = 0;
									$InfantBasefare = 0;
									$InfantTaxfare = 0;									 
								 }
								 
								 $finalPrice = $AdultPrice+$ChildPrice+$InfantPrice;
								 $finalBasefare = $AdultBasefare+$ChildBasefare+$InfantBasefare;
								 $finalTaxfare = $AdultTaxfare+$ChildTaxfare+$InfantTaxfare;
								?>
								<td>
									<div class="text-center mt-4">
										<div id="flight-price" class="h5"><?php echo round($finalPrice,0); ?>/-
										<input type="hidden" id="two_way_<?php echo $i; ?>_basefare" value="0">
										<input type="hidden" id="two_way_<?php echo $i; ?>_tax" value="0">
										</div>
									</div>
								</td>
							
							</tr>
						<?php $i++;} }else{ ?>
							<tr><td colspan="5" style="text-align:center; color:red;">No Flight Found...</td></tr>
						<?php } ?>

					</tbody>
				</table>
			</div>
			<?php }?>

			
		</div>
		<!-- <div class="col-md-4">
			<div class="row mt-4 ml-4">
				<div class="h5">
					Filters for Departure
				</div>
			</div>
			<div class="bg-white mt-3">
				<div class="text-right">
					<p class="lead">Clear All</p>
				</div>
				<div class="ml-4">
					<h4 class="mb-3">Stops</h4>
					<div class="form-group">
						<div class="form-check mb-3">
							<input type="checkbox" class="form-check-input" id="exampleCheck1">
							<label style="font-size: 14px;" class="form-check-label" for="exampleCheck1"><span class="font-weight-normal lead">&nbsp; Direct</span></label>
						</div>
						<div class="form-check mb-3">
							<input type="checkbox" class="form-check-input" id="exampleCheck2">
							<label style="font-size: 14px;" class="form-check-label" for="exampleCheck2"><span class="font-weight-normal lead">&nbsp; 1 Stop</span></label>
						</div>
						<div class="form-check mb-3">
							<input type="checkbox" class="form-check-input" id="exampleCheck3">
							<label style="font-size: 14px;" class="form-check-label" for="exampleCheck3"><span class="font-weight-normal lead">&nbsp; 2+ Stop</span></label>
						</div>
					</div>

					<h4 class="mb-3">One Way Price</h4>
					<div class="form-group">
						<div class="lead">Up to INR 7,540</div>
						<div class="slidecontainer">
							<input style="width: 100%;" type="range" min="1" max="100" value="50" class="slider" id="myRange">
						</div>
						<div class="text-right lead mr-2">INR 7,540</div>
					</div>

					<h4 class="mb-3">Refundable</h4>
					<div class="form-group">
						<div class="form-check mb-3">
							<input type="checkbox" class="form-check-input" id="exampleCheck1">
							<label style="font-size: 14px;" class="form-check-label" for="exampleCheck1"><span class="font-weight-normal lead">&nbsp; Refundable</span></label>
						</div>
						<div class="form-check mb-3">
							<input type="checkbox" class="form-check-input" id="exampleCheck2">
							<label style="font-size: 14px;" class="form-check-label" for="exampleCheck2"><span class="font-weight-normal lead">&nbsp; Non-Refundable</span></label>
						</div>
					</div>

					<h4 class="mb-3">Departure Time</h4>
					<div class="form-group">
						<div class="form-check mb-3">
							<input type="checkbox" class="form-check-input" id="exampleCheck1">
							<label style="font-size: 14px;" class="form-check-label" for="exampleCheck1"><span class="font-weight-normal lead">&nbsp; 12am to 8am</span></label>
						</div>
						<div class="form-check mb-3">
							<input type="checkbox" class="form-check-input" id="exampleCheck2">
							<label style="font-size: 14px;" class="form-check-label" for="exampleCheck2"><span class="font-weight-normal lead">&nbsp; 8am to 12pm</span></label>
						</div>
						<div class="form-check mb-3">
							<input type="checkbox" class="form-check-input" id="exampleCheck1">
							<label style="font-size: 14px;" class="form-check-label" for="exampleCheck1"><span class="font-weight-normal lead">&nbsp; 12pm to 4pm</span></label>
						</div>
						<div class="form-check mb-3">
							<input type="checkbox" class="form-check-input" id="exampleCheck2">
							<label style="font-size: 14px;" class="form-check-label" for="exampleCheck2"><span class="font-weight-normal lead">&nbsp; 4pm to 8pm</span></label>
						</div>
						<div class="form-check mb-3">
							<input type="checkbox" class="form-check-input" id="exampleCheck2">
							<label style="font-size: 14px;" class="form-check-label" for="exampleCheck2"><span class="font-weight-normal lead">&nbsp; 8pm to 12pm</span></label>
						</div>
					</div>

					<h4 class="mb-3">Arrival Time</h4>
					<div class="form-group">
						<div class="form-check mb-3">
							<input type="checkbox" class="form-check-input" id="exampleCheck1">
							<label style="font-size: 14px;" class="form-check-label" for="exampleCheck1"><span class="font-weight-normal lead">&nbsp; 12am to 8am</span></label>
						</div>
						<div class="form-check mb-3">
							<input type="checkbox" class="form-check-input" id="exampleCheck2">
							<label style="font-size: 14px;" class="form-check-label" for="exampleCheck2"><span class="font-weight-normal lead">&nbsp; 8am to 12pm</span></label>
						</div>
						<div class="form-check mb-3">
							<input type="checkbox" class="form-check-input" id="exampleCheck1">
							<label style="font-size: 14px;" class="form-check-label" for="exampleCheck1"><span class="font-weight-normal lead">&nbsp; 12pm to 4pm</span></label>
						</div>
						<div class="form-check mb-3">
							<input type="checkbox" class="form-check-input" id="exampleCheck2">
							<label style="font-size: 14px;" class="form-check-label" for="exampleCheck2"><span class="font-weight-normal lead">&nbsp; 4pm to 8pm</span></label>
						</div>
						<div class="form-check mb-3">
							<input type="checkbox" class="form-check-input" id="exampleCheck2">
							<label style="font-size: 14px;" class="form-check-label" for="exampleCheck2"><span class="font-weight-normal lead">&nbsp; 8pm to 12pm</span></label>
						</div>
					</div>

					<h4 class="mb-3">Airlines</h4>
					<div class="form-group">
						<div class="form-check mb-3">
							<input type="checkbox" class="form-check-input" id="exampleCheck1">
							<label style="font-size: 14px;" class="form-check-label" for="exampleCheck1"><span class="font-weight-normal lead">&nbsp; Air India</span></label>
						</div>
						<div class="form-check mb-3">
							<input type="checkbox" class="form-check-input" id="exampleCheck2">
							<label style="font-size: 14px;" class="form-check-label" for="exampleCheck2"><span class="font-weight-normal lead">&nbsp; Vistara</span></label>
						</div>
						<div class="form-check mb-3">
							<input type="checkbox" class="form-check-input" id="exampleCheck1">
							<label style="font-size: 14px;" class="form-check-label" for="exampleCheck1"><span class="font-weight-normal lead">&nbsp; Indigo</span></label>
						</div>
					</div>
					<br>
				</div>
			</div>
		</div> -->
	</div>
<script>
	function getSelectedDiv(trip, id){
		if(trip == 'one_way'){
			ids = id
			$('.'+trip).removeClass("highlight");
			id = trip+'_'+id
			$('#'+id).addClass("highlight");

			trip = 'two_way';
			$('.'+trip).removeClass("selected");
			id = trip+'_'+ids;
			$('#'+id).addClass("selected");

		}else{
			ids = id
			$('.'+trip).removeClass("selected");
			id = trip+'_'+id
			$('#'+id).addClass("selected");

			trip = 'one_way';
			$('.'+trip).removeClass("highlight");
			id = trip+'_'+ids
			$('#'+id).addClass("highlight");
		}
	}
	function showHideDiv(first, second){
		$('.'+first).show('')
		$('.'+second).hide('')
	};
	$(document).ready(function() {
		$('.footer_div_class').css('display', 'block');
		$('#button_div').show();

		<?php if ($is_blank == '1') {?>
			$('.footer_div_class').css('display', 'none');
			$('#button_div').hide();
		<?php }?>	
	});
</script>
	
