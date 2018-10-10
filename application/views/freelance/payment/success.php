
<title>Success Transaction</title>
<div class="jumbotron pt-5">
	<div class="row">
		<div class="col-lg-2"></div>
		<div class="col-lg-1"></div>
		<div class="col-lg-6">
			<div class="card">
				<div class="card-body">
				
					<h2>Dear Buyer</h2>
					<h3 class="text-primary" style="font-size: 15px;">Your payment was successful, thank you for purchase.</h3>
					<p class="text-primary" style="font-size: 15px;">Item Number : <b><?php echo $item_number; ?></b></p>
					<p class="text-primary" style="font-size: 15px;">TXN ID : <b><?php echo $txn_id; ?></b></p>
					<p class="text-primary" style="font-size: 15px;">Amount Paid : <b>$<?php echo $payment_amt.' '.$currency_code; ?></b></p>
					<p class="text-primary" style="font-size: 15px;">Payment Status : <b><?php echo $status; ?></b></p>
					<a href="<?php echo base_url('user/skillposting'); ?>" class="btn btn-info">Back to Products</a>
				</div>
			</div>
		</div>
		<div class="col-lg-1"></div>
		<div class="col-lg-2"></div>
	</div>
</div>
