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
<div class="col-md-3">
	
</div>
	<div class="col-md-9">
		<h5>Showing Results for:</h5>
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
		<div class="card first_div" id="demo" style="height:500px; overflow:auto;">
			<table class="table flight-table" id="flight-table">
				<thead class="text-center">
					<tr>
						<th>Airline</th>
						<th>Departure</th>
						<th>Duration</th>
						<th>Arrival</th>
						<th>Price</th>
					</tr>
				</thead>
				<tbody id="get-info">
					<?php $i=1; if (isset($response['Results'])) {
						foreach ($response['Results'][0] as $Result) { 
								$stopages = count($Result['Segments'][0]);
								if($stopages == '1'){
									$stopage = 'Non Stop';
								}else{
									$stopage = ($stopages-1).' Stop';
								}
								$stopages = $stopages-1;
								
							?>
							<tr class="<?php if($i == 1){?>highlight <?php } ?> one_way" id="one_way_<?php echo $i; ?>" onclick="getSelectedDiv('one_way', '<?php echo $i?>')">
								<td>
									<div class="text-center">
									<input type="hidden" id="one_way_<?php echo $i; ?>_adult_count" value="<?php echo $AdultCount; ?>" >
									<input type="hidden" id="one_way_<?php echo $i; ?>_child_count" value="<?php echo $ChildCount; ?>" >

										<input type="hidden" id="one_way_<?php echo $i; ?>_origin" value="<?php echo $Origin; ?>">
										<input type="hidden" id="one_way_<?php echo $i; ?>_destination" value="<?php echo $Destination; ?>">
										<input type="hidden" id="one_way_<?php echo $i; ?>_baggage" value="<?php echo $Result['Segments'][0][0]['Baggage']; ?>">
										<input type="hidden" id="one_way_<?php echo $i; ?>_cabin_baggage" value="<?php echo $Result['Segments'][0][0]['CabinBaggage']; ?>">
										<input type="hidden" id="one_way_<?php echo $i; ?>_is_refundable" value="<?php echo $Result['IsRefundable'] ? "Yes":"No"; ?>">

											<?php if($Result['AirlineCode'] == '6E'){?>
											<input type="hidden" id="one_way_<?php echo $i; ?>_flight" value="<?php echo base_url(); ?>uploads/flight-images/indigo.jpg">
											<img style="height: 50px;" src="<?php echo base_url(); ?>uploads/flight-images/indigo.jpg" alt="" class="img-responsive rounded">
											<?php }elseif($Result['AirlineCode'] == 'SG'){?>
											<input type="hidden" id="one_way_<?php echo $i; ?>_flight" value="<?php echo base_url(); ?>uploads/flight-images/spicejet.jpg">
											<img style="height: 50px;" src="<?php echo base_url(); ?>uploads/flight-images/spicejet.jpg" alt="" class="img-responsive rounded">
											<?php }elseif($Result['AirlineCode'] == 'G8'){?>
											<input type="hidden" id="one_way_<?php echo $i; ?>_flight" value="<?php echo base_url(); ?>uploads/flight-images/go.jpg">	
											<img style="height: 50px;" src="<?php echo base_url(); ?>uploads/flight-images/go.jpg" alt="" class="img-responsive rounded">
											<?php }elseif($Result['AirlineCode'] == 'G9'){?>
											<input type="hidden" id="one_way_<?php echo $i; ?>_flight" value="<?php echo base_url(); ?>uploads/flight-images/airarabia.jpg">
											<img style="height: 50px;" src="<?php echo base_url(); ?>uploads/flight-images/airarabia.jpg" alt="" class="img-responsive rounded">
											<?php }elseif($Result['AirlineCode'] == 'FZ'){?>
											<input type="hidden" id="one_way_<?php echo $i; ?>_flight" value="<?php echo base_url(); ?>uploads/flight-images/flydubai.jpg">
											<img style="height: 50px;" src="<?php echo base_url(); ?>uploads/flight-images/flydubai.jpg" alt="" class="img-responsive rounded">
											<?php }elseif($Result['AirlineCode'] == 'IX'){?>
											<input type="hidden" id="one_way_<?php echo $i; ?>_flight" value="<?php echo base_url(); ?>uploads/flight-images/airindia.jpg">
											<img style="height: 50px;" src="<?php echo base_url(); ?>uploads/flight-images/airindia.jpg" alt="" class="img-responsive rounded">
											<?php }elseif($Result['AirlineCode'] == 'I5'){?>
											<input type="hidden" id="one_way_<?php echo $i; ?>_flight" value="<?php echo base_url(); ?>uploads/flight-images/airasia.jpg">	
											<img style="height: 50px;" src="<?php echo base_url(); ?>uploads/flight-images/airasia.jpg" alt="" class="img-responsive rounded">
											<?php }else{?>
											<input type="hidden" id="one_way_<?php echo $i; ?>_flight" value="https://s3.ap-south-1.amazonaws.com/com.travclan.cms.production/appcms/2.png">
											<img style="height: 50px;" src="https://s3.ap-south-1.amazonaws.com/com.travclan.cms.production/appcms/2.png" alt="" class="img-responsive rounded">
											<?php } ?>	
										<div id="one_way_<?php echo $i; ?>_flight_name" class="lead"><?php echo $Result['Segments'][0][0]['Airline']['AirlineCode']; ?> - <?php echo $Result['Segments'][0][0]['Airline']['FlightNumber']; ?></div> 
									</div>
								</td>
								<td>
									<div class="text-center">
										<div id="one_way_<?php echo $i; ?>_board_time" style="font-size: 14px;"><?php echo date('H:i', strtotime($Result['Segments'][0][0]['DepTime'])); ?></div>
										<div id="one_way_<?php echo $i; ?>_board_city" class="lead"><?php echo $Result['Segments'][0][0]['Origin']['AirportCode']; ?></div>
										<input type="hidden" id="one_way_<?php echo $i; ?>_board_datetime" value="<?php echo date('D M d Y', strtotime($Result['Segments'][0][0]['DepTime'])); ?>">
										<input type="hidden" id="one_way_<?php echo $i; ?>_board_airport" value="<?php echo $Result['Segments'][0][0]['Origin']['AirportName']; ?>">
										<input type="hidden" id="one_way_<?php echo $i; ?>_board_city_name" value="<?php echo $Result['Segments'][0][0]['Origin']['CityName']; ?>">
									</div>
								</td>
								<td>
									<div class="text-center">
										<div class="h6 mt-2" id="one_way_<?php echo $i; ?>_duration">
											<?php
												$datetime1 = new DateTime($Result['Segments'][0][0]['DepTime']);
												$datetime2 = new DateTime($Result['Segments'][0][$stopages]['ArrTime']);
												$interval = $datetime1->diff($datetime2);
												$elapsed = $interval->format('%h h %i m');
												echo $elapsed; 
											 ?>
												
											</div>
												
										<strong id="flight-type" style="font-size: 11px;"><?php echo $stopage; ?></strong>
									</div>
								</td>
								<td>
									<div class="text-center">
										<input type="hidden" id="one_way_<?php echo $i; ?>_durations" value="<?php echo $elapsed; ?>">
										<input type="hidden" id="one_way_<?php echo $i; ?>_flight_type" value="<?php echo $stopage; ?>">
										<div id="one_way_<?php echo $i; ?>_depart_time" style="font-size: 14px;"><?php echo date('H:i', strtotime($Result['Segments'][0][$stopages]['ArrTime'])); ?></div>
										<div id="one_way_<?php echo $i; ?>_depart_city" class="lead"><?php echo $Result['Segments'][0][$stopages]['Destination']['AirportCode']; ?></div>
										<input type="hidden" id="one_way_<?php echo $i; ?>_depart_datetime" value="<?php echo date('D M d Y', strtotime($Result['Segments'][0][$stopages]['ArrTime'])); ?>">
										<input type="hidden" id="one_way_<?php echo $i; ?>_depart_airport" value="<?php echo $Result['Segments'][0][0]['Destination']['AirportName']; ?>">
										<input type="hidden" id="one_way_<?php echo $i; ?>_depart_city_name" value="<?php echo $Result['Segments'][0][0]['Destination']['CityName']; ?>">
									</div>
								</td>
								<td>
									<div class="text-center mt-4">
										<div id="flight-price" class="h5"><?php echo $Result['Fare']['Currency']; ?> <?php echo $Result['Fare']['PublishedFare']; ?>
										<input type="hidden" id="one_way_<?php echo $i; ?>_basefare" value="<?php echo $Result['Fare']['BaseFare']; ?>">
										<input type="hidden" id="one_way_<?php echo $i; ?>_tax" value="<?php echo $Result['Fare']['Tax']; ?>">
									</div>
									</div>
								</td>
							</tr>
						<?php $i++;} } ?>

					</tbody>
				</table>
			</div>
			<?php if($JourneyType == '2'){ ?>									
			<div class="card second_div" id="demo" style="display:none;height:500px; overflow:auto;">
			<table class="table">
				<thead class="text-center">
					<tr>
						<th>Airline</th>
						<th>Departure</th>
						<th>Duration</th>
						<th>Arrival</th>
						<th>Price</th>
					</tr>
				</thead>
				<tbody id="get-info">
					<?php $i=1;  if (isset($response['Results'])) {
						foreach ($response['Results'][1] as $Result) { 
								$stopages = count($Result['Segments'][0]);
								if($stopages == '1'){
									$stopage = 'Non Stop';
								}else{
									$stopage = ($stopages-1).' Stop';
								}
								$stopages = $stopages-1;
								
							?>
							<tr class="<?php if($i == 1){?>selected <?php } ?> two_way" id="two_way_<?php echo $i; ?>" onclick="getSelectedDiv('two_way', '<?php echo $i?>')">
								<td>
									
									<div class="text-center">
									    <input type="hidden" id="two_way_<?php echo $i; ?>_origin" value="<?php echo $Destination; ?>">
										<input type="hidden" id="two_way_<?php echo $i; ?>_destination" value="<?php echo $Origin; ?>">
										<input type="hidden" id="two_way_<?php echo $i; ?>_baggage" value="<?php echo $Result['Segments'][0][0]['Baggage']; ?>">
										<input type="hidden" id="two_way_<?php echo $i; ?>_cabin_baggage" value="<?php echo $Result['Segments'][0][0]['CabinBaggage']; ?>">
										<input type="hidden" id="two_way_<?php echo $i; ?>_is_refundable" value="<?php echo $Result['IsRefundable'] ? "Yes":"No"; ?>">

										<?php if($Result['AirlineCode'] == '6E'){?>
										<input type="hidden" id="two_way_<?php echo $i; ?>_flight" value="<?php echo base_url(); ?>uploads/flight-images/indigo.jpg">
										<img style="height: 50px;" src="<?php echo base_url(); ?>uploads/flight-images/indigo.jpg" alt="" class="img-responsive rounded">
										<?php }elseif($Result['AirlineCode'] == 'SG'){?>
										<input type="hidden" id="two_way_<?php echo $i; ?>_flight" value="<?php echo base_url(); ?>uploads/flight-images/spicejet.jpg">
										<img style="height: 50px;" src="<?php echo base_url(); ?>uploads/flight-images/spicejet.jpg" alt="" class="img-responsive rounded">
										<?php }elseif($Result['AirlineCode'] == 'G8'){?>
										<input type="hidden" id="two_way_<?php echo $i; ?>_flight" value="<?php echo base_url(); ?>uploads/flight-images/go.jpg">	
										<img style="height: 50px;" src="<?php echo base_url(); ?>uploads/flight-images/go.jpg" alt="" class="img-responsive rounded">
										<?php }elseif($Result['AirlineCode'] == 'G9'){?>
										<input type="hidden" id="two_way_<?php echo $i; ?>_flight" value="<?php echo base_url(); ?>uploads/flight-images/airarabia.jpg">
										<img style="height: 50px;" src="<?php echo base_url(); ?>uploads/flight-images/airarabia.jpg" alt="" class="img-responsive rounded">
										<?php }elseif($Result['AirlineCode'] == 'FZ'){?>
										<input type="hidden" id="two_way_<?php echo $i; ?>_flight" value="<?php echo base_url(); ?>uploads/flight-images/flydubai.jpg">
										<img style="height: 50px;" src="<?php echo base_url(); ?>uploads/flight-images/flydubai.jpg" alt="" class="img-responsive rounded">
										<?php }elseif($Result['AirlineCode'] == 'IX'){?>
										<input type="hidden" id="two_way_<?php echo $i; ?>_flight" value="<?php echo base_url(); ?>uploads/flight-images/airindia.jpg">
										<img style="height: 50px;" src="<?php echo base_url(); ?>uploads/flight-images/airindia.jpg" alt="" class="img-responsive rounded">
										<?php }elseif($Result['AirlineCode'] == 'I5'){?>
										<input type="hidden" id="two_way_<?php echo $i; ?>_flight" value="<?php echo base_url(); ?>uploads/flight-images/airasia.jpg">	
										<img style="height: 50px;" src="<?php echo base_url(); ?>uploads/flight-images/airasia.jpg" alt="" class="img-responsive rounded">
										<?php }else{?>
										<input type="hidden" id="two_way_<?php echo $i; ?>_flight" value="https://s3.ap-south-1.amazonaws.com/com.travclan.cms.production/appcms/2.png">	
										<img style="height: 50px;" src="https://s3.ap-south-1.amazonaws.com/com.travclan.cms.production/appcms/2.png" alt="" class="img-responsive rounded">
										<?php } ?>	
										<div id="two_way_<?php echo $i; ?>_flight_name" class="lead"><?php echo $Result['Segments'][0][0]['Airline']['AirlineCode']; ?> - <?php echo $Result['Segments'][0][0]['Airline']['FlightNumber']; ?></div> 
									</div>
								</td>
								<td>
									<div class="text-center">
										<div id="two_way_<?php echo $i; ?>_board_time" style="font-size: 14px;"><?php echo date('H:i', strtotime($Result['Segments'][0][0]['DepTime'])); ?></div>
										<div id="two_way_<?php echo $i; ?>_board_city" class="lead"><?php echo $Result['Segments'][0][0]['Origin']['AirportCode']; ?></div>
										<input type="hidden" id="two_way_<?php echo $i; ?>_board_datetime" value="<?php echo date('D M d Y', strtotime($Result['Segments'][0][0]['DepTime'])); ?>">
										<input type="hidden" id="two_way_<?php echo $i; ?>_board_airport" value="<?php echo $Result['Segments'][0][0]['Origin']['AirportName']; ?>">
										<input type="hidden" id="two_way_<?php echo $i; ?>_board_city_name" value="<?php echo $Result['Segments'][0][0]['Origin']['CityName']; ?>">
									</div>
								</td>
								<td>
									<div class="text-center">
										<div class="h6 mt-2">
											<div class="h6 mt-2" id="two_way_<?php echo $i; ?>_duration">
											<?php
												$datetime1 = new DateTime($Result['Segments'][0][0]['DepTime']);
												$datetime2 = new DateTime($Result['Segments'][0][$stopages]['ArrTime']);
												$interval = $datetime1->diff($datetime2);
												$elapsed = $interval->format('%h h %i m');
												echo $elapsed; 
											 ?>
											</div>
											
										<strong id="flight-type" style="font-size: 11px;"><?php echo $stopage; ?></strong>
									</div>
								</td>
								<td>
									<div class="text-center">
									<input type="hidden" id="two_way_<?php echo $i; ?>_durations" value="<?php echo $elapsed; ?>">
											<input type="hidden" id="two_way_<?php echo $i; ?>_flight_type" value="<?php echo $stopage; ?>">
										<div id="two_way_<?php echo $i; ?>_depart_time" style="font-size: 14px;"><?php echo date('H:i', strtotime($Result['Segments'][0][$stopages]['ArrTime'])); ?></div>
										<div id="two_way_<?php echo $i; ?>_depart_city" class="lead"><?php echo $Result['Segments'][0][$stopages]['Destination']['AirportCode']; ?></div>
										<input type="hidden" id="two_way_<?php echo $i; ?>_depart_datetime" value="<?php echo date('D M d Y', strtotime($Result['Segments'][0][$stopages]['ArrTime'])); ?>">
										<input type="hidden" id="two_way_<?php echo $i; ?>_depart_airport" value="<?php echo $Result['Segments'][0][0]['Destination']['AirportName']; ?>">
										<input type="hidden" id="two_way_<?php echo $i; ?>_depart_city_name" value="<?php echo $Result['Segments'][0][0]['Destination']['CityName']; ?>">
									</div>
								</td>
								<td>
									<div class="text-center mt-4">
										<div id="flight-price" class="h5"><?php echo $Result['Fare']['Currency']; ?> <?php echo $Result['Fare']['PublishedFare']; ?></div>
										<input type="hidden" id="two_way_<?php echo $i; ?>_basefare" value="<?php echo $Result['Fare']['BaseFare']; ?>">
										<input type="hidden" id="two_way_<?php echo $i; ?>_tax" value="<?php echo $Result['Fare']['Tax']; ?>">
									</div>
								</td>
							</tr>
						<?php $i++; } } ?>

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
							<label style="font-size: 14px;" class="form-check-label" for="exampleCheck1"><span class="font-weight-normal lead">&nbsp; Non Stop</span></label>
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
			$('.'+trip).removeClass("highlight");
			id = trip+'_'+id
			$('#'+id).addClass("highlight");
		}else{
			$('.'+trip).removeClass("selected");
			id = trip+'_'+id
			$('#'+id).addClass("selected");
		}
	}
	function showHideDiv(first, second){
		$('.'+first).show('')
		$('.'+second).hide('')
	};
	$(document).ready(function() {
		$('.footer_div_class').css('display', 'block');
		$('#button_div').show();
	});
</script>
	
