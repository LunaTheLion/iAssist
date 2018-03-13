<?php foreach ($view as $row):?>
	<div class="card border-success  p-4 mb-3" style="margin-left: 100px;">
		<h5 >Order Details</h5>
	<form method="POST" action="<?php echo base_url('search/order_project/'.$row->project_title_slug."0".$row->id);?>">
		<div class="row">
			<div class="col-md-6">
				<p class="text-primary"><?php echo $row->project_delivery?> Delivery</p>
			</div>
			
			<div class="col-md-3">
				<p class="text-primary text-right">Quantity</p>

			</div>
			<div class="col-md-3">
				<select class="form-control form-control-sm"  >
					<option selected="">Select</option>
					<option value="1">1 (<?php echo "₱ ".$row->project_price?>)</option>
					<option value="2">2 (<?php $p=$row->project_price; echo "₱ ";echo 2*$p;?>)</option>
					<option value="3">3 (<?php $p=$row->project_price; echo "₱ ";echo 3*$p;?>)</option>
					<option value="4">4 (<?php $p=$row->project_price; echo "₱ ";echo 4*$p;?>)</option>
					<option value="5">5 (<?php $p=$row->project_price; echo "₱ ";echo 5*$p;?>)</option>
		<!-- 			<option value="6">6 (<?php $p=$row->project_price; echo "₱ ";echo 6*$p;?>)</option>
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
					<option value="20">20 (<?php $p=$row->project_price; echo "₱ ";echo 20*$p;?>)</option> -->
			

				</select>
			</div>
			

		</div>
		<hr>
		<div class="row">
			
			<div class="class-md-4" style="margin-left: 350px;">
				<button type="submit" class="btn btn-success" >Proceed to order ( ₱<?php echo $row->project_price ?> )</button>
			</div>
		</div>
		</form>
	</div>
<?php endforeach ?>