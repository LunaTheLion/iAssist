<title>Posting</title>
<div class="jumbotron">
<div class="row">
	<div class="col-lg-4 col-sm-4">
		<div class="card">
			<div class="card-header"></div>
			<div class="card-body">
				<a href="<?php echo base_url('users/general/'.$this->session->userdata('email')); ?>">Back to profile</a>
			</div>
			<div class="card-footer"></div>
		</div>
	</div>
	<div class="col-lg-6 col-sm-6">
		<div class="card">
			<div class="card-header"></div>
			<div class="card-body">
				<form method="POST" action="<?php echo base_url('users/general/nobody') ?>">
					<button type="submit" class="btn btn-info">Go</button>
				</form>
			</div>
			<div class="card-footer">
				<a href="<?php echo base_url('users/general/hello') ?>" class="btn btn-success">Hello</a>
			</div>
		</div>
	</div>
</div>
</div>