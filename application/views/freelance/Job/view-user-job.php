<div class="col-lg-6 col-sm-8">
	<div class="card">			
		<div class="card-body">
			
			<div class="card" >
			<?php foreach ($proj as $row):?>
			<div class="card-header" >
				<h4  style="margin-bottom: 2px;"><?php echo $row->title ?></h4>
			</div>
			<div class="card-body" style="padding-bottom: 3px; padding-top: 10px;">
				<p class="text-primary" style="font-size: 16px; text-align: justify;"> <?php echo $row->description ?></p>
				<br>
				<div class="row">
					<div class="col-lg-3 col-sm-6">
						<p>Category</p>
					</div>
					<div class="col-lg-6 col-sm-6">
						<p class="text-primary" style="font-size: 16px;"><?php echo $row->category; ?></p>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-3 col-sm-6">
						<p>Price</p>
					</div>
					<div class="col-lg-6 col-sm-6">
						<p class="text-success" style="font-size: 16px;"><?php echo $row->budget; ?></p>
					</div>
					<!-- <div class="col-lg-3 col-sm-3">
						<button class="btn btn-success" id="order">Proceed to order</button>
					</div> -->
				</div>
			</div>
		</div>		
	</div>

</div>
<br>
<div class="card" id="buy" style="display: none;">
	<div class="card-body">
		<div class="card">
		<div class="card-header">
			Order
		</div>
		<div class="card-body">
			<div class="row">
				<div class="col-lg-2 col-sm-1">
					Price
				</div>
				<div class="col-lg-2 col-sm-2">
					<input type="text" name="price" id="price" class="form-control" value="<?php echo $row->budget;?>" readonly>
				</div>
				<div class="col-lg-2 col-sm-2">
					<p class="text-primary center" style="margin-bottom: 2px; margin-top: 15px; margin-left: 10px;">Quantity</p>
				</div>
				<div class="col-lg-2 col-sm-2" style="padding-top: 10px;">
					<select class="form form-control" style="padding: 5px;" name="quantity" id="quantity">
						<option value="1">1</option>
						<option value="2">2</option>
						<option value="3">3</option>
						<option value="4">4</option>
						<option value="5">5</option>
						<option value="6">6</option>
						<option value="7">7</option>

					</select>
				</div>
				<div class="col-lg-2 col-sm-2">
					<p class="text-primary">Sub-Total</p>
					<p class="text-primary">Service Charge <small>(15%)</small></p>
					<p class="text-primary">Total</p>
				</div>
				<div class="col-lg-2 col-sm-2">
					<p id="computation" class="text-primary"></p>
					<p id="ServiceTotal" class="text-primary"></p>
					<hr>
					<p id="GrandTotal" class="text-primary"></p>
					
					
				</div>
				
			</div>

		</div>
		<a href="<?php echo base_url('products/buy/'.$row->post_id) ?>" class="btn btn-success">Proceed</a>
		
	</div>
	</div>
	
</div>

</div>
<!-- <div class="col-lg-2 col-sm-2">
	<img src="<?php echo base_url('uploads/'.$row->post_img) ?>" style="height: 300px; width: 290px; display: block;">
	<?php //echo  ?>
</div> -->
<?php endforeach; ?>
<br>
	</div>
	</div>

</div>
<script>
	$('#order').on('click', function(){
		$('#buy').toggle();
	})
	$('#quantity').on('click',function(){
		var qnt = $(this).val();
		var prc = $('#price').val();
		var sc = .15;

		var ttl = qnt*prc;
		var svf = ttl*sc;
		var grand = ttl+svf;
		$('#computation').text(ttl);
		$('#ServiceTotal').text(svf);
		$('#GrandTotal').text(grand);
	})
</script>