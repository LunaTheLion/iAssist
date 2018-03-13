<?php foreach ($view as $row):?>
	<div class="card border-success  p-2 mb-3" style="margin-right: 150px; ">
			<form method="POST" action="<?php echo base_url('search/order_project/'.$row->project_title_slug."0".$row->id);?>">
		 <h4>₱<?php echo  $row->project_price?> Order Details</h4>	
		 <p><?php echo $row->project_delivery ?> Delivery</p>				
		<!--  <a class="btn btn-success btn-block" href="<?php echo base_url()?>search/buy_project/<?php echo $row->project_title_slug.$row->id?>"></a> -->
		 <button class="btn btn-success btn-block" type="submit"> Proceed to order ( ₱<?php echo $row->project_price ?> )</button>
		 
		<hr>
		
		<div class="row" style="margin-top: 0px;">
			<div class="col-md-6">
				<p class="text-primary">Quantity </p> 
			</div>
			<div class="col-md-6">
				<select class="form-control form-control-sm"  >
					<option selected="">Select</option>
					<option value="1">1 (<?php echo "₱ ".$row->project_price?>)</option>
					<option value="2">2 (<?php $p=$row->project_price; echo "₱ ";echo 2*$p;?>)</option>
					<option value="3">3 (<?php $p=$row->project_price; echo "₱ ";echo 3*$p;?>)</option>
					<option value="4">4 (<?php $p=$row->project_price; echo "₱ ";echo 4*$p;?>)</option>
					<option value="5">5 (<?php $p=$row->project_price; echo "₱ ";echo 5*$p;?>)</option>
				</select>
			</div>
		</div>
		</form>
	</div>	
<?php endforeach ?>