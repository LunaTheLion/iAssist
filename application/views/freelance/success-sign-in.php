<div class="jumbotron">
	<div class="container">
		<p class="text-primary text-center">You successfully Signed in ! <?php echo $this->session->userdata('email');?>
		<br>
		We have sent confirmation email to to your email, Please access your account.</p>
		<br>
		<!-- <a href="<?php echo base_url('users');?>" class="btn btn-outline-primary ">Click Here to Create Profile</a> -->
		<div class="row">
			<div class="col-lg-4"></div>
			<div class="col-lg-4">
				<a href="<?php echo base_url('users/profile_personal');?>" class="btn btn-outline-primary ">Click here to Create Profile</a>
			</div>
			<div class="col-lg-4"></div>

		</div>

		
	</div>	 

</div>