<title>Interest</title>
<!-- <div class="jumbotron">
<div class="row">
	<div class="col-lg-4 col-sm-4">
		<div class="card">
			<div class="card-header"></div>
			<div class="card-body">
				<a href="<?php echo site_url('user/general/'.$this->session->userdata('email')); ?>">Back to profile</a>
			</div>
			<div class="card-footer"></div>
		</div>
	</div> -->
	<div class="col-lg-6 col-sm-6">
		<div class="card">
			<div class="card-header">Job Interests</div>
			<form method="POST" action="<?php echo base_url('user/validate_post') ?>">
			<div class="card-body">
				<span>No Interests yet</span>
				
			</div>
			<div class="card-footer">
				
				
				<a href="<?php echo base_url('user/general/'.$this->session->userdata('email')) ?>" class="btn btn-danger">Skip</a>
			</div>
			</form>
		</div>
	</div>
</div>
</div>