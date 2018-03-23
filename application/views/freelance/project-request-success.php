<title>Success Request</title>

<div class="jumbotron">
	<form method="Post" action="<?php echo base_url('search/validate_request_service')?>">
<div class="container ml-5" >
	
	<div class="row">
		<div class="col-md-8">
			<div class="card border-primary">
				<div class="card card-header">
					Posting Request
				</div>
				<div class="card-body">

					<table class=" table table-border">
						<tr>
							<th style="padding: 10px;"><p class="text-primary">I'm looking for</p></th>
							<th style="padding: 10px;" colspan="1"><?php echo $this->session->userdata('request')?></th>
							<th></th>
						</tr>
						<tr>
							<td style="padding: 10px;"><p class="text-primary">Request Category</p></td>
							<td style="padding: 10px;" colspan="1"> <?php echo $this->session->userdata('request-category'); ?></td>
							<td ></td>
							
						</tr>
						<tr>
							<td style="padding: 10px;"><p class="text-primary">Request Sub-Category</p></td>
							<td style="padding: 10px;" colspan="1"> <?php echo $this->session->userdata('request-subcategory'); ?></td>
							<td ></td>
							
						</tr>
						<tr>
							<td style="padding: 10px;"><p class="text-primary">Prefered Delivery Time</p></td>
							<td style="padding: 10px;" colspan="1"> <?php echo $this->session->userdata('request-delivery'); ?></td>
							<td ></td>
							
						</tr>
						<tr>
							<td style="padding: 10px;"><p class="text-primary">Prefered Amount</p></td>
							<td style="padding: 10px;" colspan="1"> <?php echo $this->session->userdata('request-amount'); ?></td>
							<td ></td>
							
						</tr>
					</table>
					<a class="btn btn-info" href="<?php echo base_url('users/thread')?>">Done</a>
				</div>
			</div>
		</div>
		<div class="col-md-4">
			
		</div>
	</div>
			
</div>
	</form>
	


</div>


