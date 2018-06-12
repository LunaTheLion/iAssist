<title>Order Details</title>
<div class="container p-5">

	
<form action="<?php echo base_url('search/payment')?>">
	<?php foreach ($view as $row): ?>
	<div class="row">
		<div class="col-md-8">
			<div class="card border-primary" style="padding: 20px;">
				<input type="hidden" name="projectId" value="<?php  echo $row->id; ?>">
				
					<h2>Customize your Order</h2>
				<hr>
				<div class="card-body">
					<div class="row">
						<div class="col-md-4">
							<div class="card">
							  <a href="<?php base_url()?>/iAssist/search/view_projects/<?php echo $row->project_title_slug."0".$row->id?>">
							  	<img style="height: 150px; width: 100%; display: block;" src="<?php echo site_url("uploads/$row->project_image"); ?>"  alt="Card image"></a>
							</div>
						</div>
						<div class="col-md-8">
							<h5> <?php echo $row->project_title ?></h5>
							  	<b><?php echo $row->project_username;?></b>
							  <input type="hidden" name="projid" value="<?php echo $row->id;?>">
							  <p>Review</p>
							  <div class="row">
							  	<div class="col-md-4">
							  		<p class="text-primary text-right">Quantity</p>
							  	</div>
							  	<div class="col-md-4">
							  				<select class="form-control form-control-sm" name="qnt" style="padding:0px;" >
							  					<option selected="">Select</option>
							  					<option value="1">1 (<?php echo "₱ ".$row->project_price?>)</option>
							  					<option value="2">2 (<?php $p=$row->project_price; echo "₱ ";echo 2*$p;?>)</option>
							  					<option value="3">3 (<?php $p=$row->project_price; echo "₱ ";echo 3*$p;?>)</option>
							  					<option value="4">4 (<?php $p=$row->project_price; echo "₱ ";echo 4*$p;?>)</option>
							  					<option value="5">5 (<?php $p=$row->project_price; echo "₱ ";echo 5*$p;?>)</option>
							  					<option value="6">6 (<?php $p=$row->project_price; echo "₱ ";echo 6*$p;?>)</option>
							  					<option value="7">7 (<?php $p=$row->project_price; echo "₱ ";echo 7*$p;?>)</option>
							  					<option value="8">8 (<?php $p=$row->project_price; echo "₱ ";echo 8*$p;?>)</option>
							  					<option value="9">9 (<?php $p=$row->project_price; echo "₱ ";echo 9*$p;?>)</option>
							  					<option value="10">10 (<?php $p=$row->project_price; echo "₱ ";echo 10*$p;?>)</option>
							  					<option value="11">11 (<?php $p=$row->project_price; echo "₱ ";echo 11*$p;?>)</option>
							  					<option value="12">12 (<?php $p=$row->project_price; echo "₱ ";echo 12*$p;?>)</option>
							  					<option value="13">13 (<?php $p=$row->project_price; echo "₱ ";echo 13*$p;?>)</option>
							  					<option value="14">14 (<?php $p=$row->project_price; echo "₱ ";echo 14*$p;?>)</option>
							  					<option value="15">15 (<?php $p=$row->project_price; echo "₱ ";echo 15*$p;?>)</option>
							  					<option value="16">16 (<?php $p=$row->project_price; echo "₱ ";echo 16*$p;?>)</option>
							  					<option value="17">17 (<?php $p=$row->project_price; echo "₱ ";echo 17*$p;?>)</option>
							  					<option value="18">18 (<?php $p=$row->project_price; echo "₱ ";echo 18*$p;?>)</option>
							  					<option value="19">19 (<?php $p=$row->project_price; echo "₱ ";echo 19*$p;?>)</option>
							  					<option value="20">20 (<?php $p=$row->project_price; echo "₱ ";echo 20*$p;?>)</option> 
							  				</select>
							  	</div>
							  	<div class="col-md-4">
							  		<input type="text" name="amount" style="width: 50px;"  readonly value="">
							  		<?php $p=$row->project_price  ?>
							  	</div>
							  	
							  	
							  </div>
							  <p></p>
							  <a href="#">View details</a>
							  
							  <div>
							  		
							  </div>
						</div>
						
					</div>

					

				</div>
			</div>
		</div>
		<div class="col-md-4">
			<div class="card border-primary" style="padding: 20px;">
				<h5 class="text-center" >Summary</h5>
				<hr>
				<div class="row">
					<div class="col-md-6">
						<p class="text-primary">Subtotal</p>
						<p class="text-primary">Processing Fee</p>
					</div>
					<div class="col-md-6">
						<input type="text" name="subtotal" style="width: 50px;"  readonly><p></p>
						<input type="text" name="processingFee" style="width: 50px;"  readonly>

					</div>

				</div>
					<hr style="margin-top: 2px;">
				<div class="row">
					<div class="col-md-6">
						<h4>Total</h4>
						<p></p>
						<p class="text-primary">Delivery Time</p>
					</div>
					<div class="col-md-6">
						
						<input type="text" name="total" style="width: 50px;"  readonly>
						<p class="text-primary"></p>
						<input type="text" name="Pdelivery" style="width: 50px;" value="<?php echo $row->project_delivery ?>" readonly>
					</div>

				</div>
				<button class="btn btn-success" type="submit">Proceed to Payment</button>

			</div>
		</div>
	</div>


	<?php endforeach ?>
</form>  
</div>