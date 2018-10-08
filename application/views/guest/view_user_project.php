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
					<div class="col-lg-3 col-sm-3">
						<button class="btn btn-success" id="order">Proceed to order</button>
					</div>
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
				<div class="col-lg-2 col-sm-3">
					Price
				</div>
				<div class="col-lg-2 col-sm-3">
					<input type="text" name="" value="<?php echo $row->budget;?>" readonly>
				</div>
				<div class="col-lg-2 col-sm-3">
					Quantity
				</div>
				<div class="col-lg-2 col-sm-3">
					<select class="form form-control">
						<option value="">Quantity</option>
					</select>
				</div>
			</div>
		</div>
	</div>
	</div>
	
</div>
<?php endforeach; ?>
</div>

<br>
	</div>
	</div>

</div>
<script>
	$('#order').on('click', function(){
		$('#buy').toggle();
	})
</script>