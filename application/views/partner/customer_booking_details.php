<style>
	.modal {
		display: block;
		position: fixed;
		left: 0;
		top: 0;
		z-index: 9999;
		width: 100%;
		height: 100%;
		padding-top: 100px;
		background-color: black;
		background-color: rgba(0, 0, 0, 0.4);
		-webkit-transition: 0.5s;
		overflow: auto;
		transition: all 0.3s linear;
		}
		
		.modalOpen { overflow: hidden; }
		.is-hidden { display: none; }
		.is-visuallyHidden { opacity: 0; }

		.accord-panel-heading .accordion-toggle:after {
			/* symbol for "opening" panels */
			font-family: 'Glyphicons Halflings';  /* essential for enabling glyphicon */
			content: "-";    /* adjust as needed, taken from bootstrap.css */
			float: right;        /* adjust as needed */
			color: grey;         /* adjust as needed */
		}
		.accord-panel-heading .accordion-toggle.collapsed:after {
			/* symbol for "collapsed" panels */
			content: "+";    /* adjust as needed, taken from bootstrap.css */
		}
</style>
<div class="modal-dialog modal-lg" style="max-width: 1000px!important;">
	<div class="modal-content">
		<div class="modal-header">
		<h4 class="modal-title">Customer Booking Details : <?php echo $booking_details->booking_id; ?></h4>
		<button type="button" class="close" data-dismiss="modal" onclick="closeModal();">&times;</button>
		</div>
		<div class="modal-body text-dark" id="modal-html" style=" height: 400px; overflow: auto; ">
		<div class="panel-group" id="accordion">
		
		<div class="card">
		<div class="card-header accord-panel-heading">
			<h4 class="card-title">
			<a class="accordion-toggle text-dark" data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
				<?php echo $booking_details->flight_from_1; ?> | <?php echo $booking_details->flight_type_1; ?>
			</a>
			</h4>
		</div>
		<div id="collapseOne" class="panel-collapse in collapse show">
			<div class="card-body">
			
			<?php foreach($customer_flight_details_one as $row){  ?>
			<div class="row">
				<div class="col-md-12"><img style="height: 50px;" src="<?php echo $booking_details->flight_img_1; ?>" /> </div>
				<div class="col-md-4" style=" font-size: 16px; font-weight: bold; margin-top: 5px;"><?php echo $row->board_time; ?></div>
				<div class="col-md-4" style=" font-size: 16px; font-weight: bold; margin-top: 5px;"><?php echo $row->duration; ?></div>
				<div class="col-md-4" style=" font-size: 16px; font-weight: bold; margin-top: 5px;"><?php echo $row->depart_time; ?></div>
			</div>
			<div class="row">
				<div class="col-md-4">
					
					<h4><?php echo $row->board_city_name; ?></h4>
					<?php echo $row->board_airport; ?>
				</div>
				<div class="col-md-4">&nbsp;</div>
				<div class="col-md-4">
					
					<h4><?php echo $row->depart_city_name; ?></h4>
					<?php echo $row->depart_airport; ?>
				</div>
			</div>
			<?php }?>
		</div>
		</div>
		<?php if($booking_details->flight_from_2!=''){?>
		<div class="card">
		<div class="card-header accord-panel-heading">
			<h4 class="card-title">
			<a class="accordion-toggle text-dark" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
				<?php echo $booking_details->flight_from_2; ?> | <?php echo $booking_details->flight_type_2; ?>
			</a>
			</h4>
		</div>
		<div id="collapseTwo" class="panel-collapse in collapse show">
			<div class="card-body">
			<?php foreach($customer_flight_details_two as $row){  ?>
			<div class="row">
				<div class="col-md-12"><img style="height: 50px;" src="<?php echo $booking_details->flight_img_2; ?>" /> </div>
				<div class="col-md-4" style=" font-size: 16px; font-weight: bold; margin-top: 5px;"><?php echo $row->board_time; ?></div>
				<div class="col-md-4" style=" font-size: 16px; font-weight: bold; margin-top: 5px;"><?php echo $row->duration; ?></div>
				<div class="col-md-4" style=" font-size: 16px; font-weight: bold; margin-top: 5px;"><?php echo $row->depart_time; ?></div>
			</div>
			<div class="row">
				<div class="col-md-4">
					
					<h4><?php echo $row->board_city_name; ?></h4>
					<?php echo $row->board_airport; ?>
				</div>
				<div class="col-md-4">&nbsp;</div>
				<div class="col-md-4">
					
					<h4><?php echo $row->depart_city_name; ?></h4>
					<?php echo $row->depart_airport; ?>
				</div>
			</div>
			<?php }?>
		</div>
		</div>
		<?php }?>	
		<div class="card">
		<div class="card-header accord-panel-heading">
			<h4 class="card-title">
			<a class="accordion-toggle text-dark" data-toggle="collapse" data-parent="#accordion" href="#collapseThree">
				Customer Details
			</a>
			</h4>
		</div>
		<div id="collapseThree" class="panel-collapse collapse">
			<div class="card-body">
			
			<table class="table table-bordered">
		<thead>
		<!-- <?php foreach($customer_flight_details as $row){  ?>	
		<tr>
			<th><?php echo $row->board_city; ?></th>
			<th><?php echo $row->duration; ?></th>
			<th><?php echo $row->depart_city; ?></th>
		</tr>
		<?php } ?> -->

			<tr>
				<th>Title</th>
				<th>Customer Name</th>
				<th>DOB</th>
			</tr>
		</thead>
		<tbody>
			<?php foreach($customer_details as $row){  ?>
			<tr>
				<td><?php echo $row->title; ?></td>
				<td><?php echo $row->first_name; ?> <?php echo $row->last_name; ?></td>
				<td><?php echo date("d/m/Y", strtotime($row->dob)); ?></td>
			</tr>
			<?php } ?>
		</tbody>
		</table>

			</div>
		</div>
		</div>
		<div class="card">
		<div class="card-header accord-panel-heading">
			<h4 class="card-title">
			<a class="accordion-toggle text-dark" data-toggle="collapse" data-parent="#accordion" href="#collapseFour">
				Fare Details
			</a>
			</h4>
		</div>
		<div id="collapseFour" class="panel-collapse collapse">
			<div class="card-body">
			<h5>Fare</h5>
			<div class="row">
				
				<div class="col-md-6">
					Base Fare <hr>
					Taxes & Surcharges<hr>
				</div>
				<div class="col-md-6">
				<?php echo $booking_details->base_amount; ?>/-<hr>
				<?php echo $booking_details->tax_amount; ?>/-<hr>
				</div>
				<hr>
				<div class="col-md-6">
					<b>To Pay</b>
				</div>
				<div class="col-md-6">
					<b><?php echo $booking_details->amount; ?>/-</b>
				</div>
			</div>
			</div>
		</div>
		</div>
	</div>
	</div>
</div>
		
		
	</div>
</div>

