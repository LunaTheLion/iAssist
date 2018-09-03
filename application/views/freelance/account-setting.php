<title>Account Settings</title>
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
			<div class="card-header">Account Setting</div>
			<form method="POST" action="<?php echo base_url('user/validate_post') ?>">
			<div class="card-body">
				<div class="row">
						<div class="col-lg-3 col-sm-3">
							<left>Username</left>
						</div>
						<div class="col-lg-9 col-sm-9">
							<p><?php echo $this->session->userdata('email'); ?></p>
						</div>
				</div>	
				<div class="row">
						<div class="col-lg-3 col-sm-3">
							<center>Full Name</center>
						</div>
						<div class="col-lg-9 col-sm-9">
							<p>Nothing Yet</p>
						</div>
				</div>	
				<div class="row">
						<div class="col-lg-3 col-sm-3">
							<center>Contact number</center>
						</div>
						<div class="col-lg-9 col-sm-9">
							<p><?php echo $this->session->userdata('email'); ?></p>
						</div>
				</div>	
				<div class="row">
						<div class="col-lg-3 col-sm-3">
							<center>Email</center>
						</div>
						<div class="col-lg-9 col-sm-9">
							<p><?php echo $this->session->userdata('email'); ?></p>
						</div>
				</div>	
				<div class="row">
						<div class="col-lg-3 col-sm-3">
							<center>Address</center>
						</div>
						<div class="col-lg-9 col-sm-9">
							<p><?php echo $this->session->userdata('email'); ?></p>
						</div>
				</div>	

					<BR>	
				<div class="row">
						<div class="col-lg-3 col-sm-3">
							
						</div>
						
						<div class="col-lg-5 col-sm-5">
							<a href="">Reset Password</a>
						</div>
				</div>
					
			</div>
					
					
			
					
				
			
			<div class="card-footer">
				
				<button type="submit" class="btn btn-info">Validate</button>
			</div>
			</div>
			</form>
		</div>
	</div>
</div>
</div>