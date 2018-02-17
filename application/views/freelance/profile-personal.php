<div class="container mt-2">
	<p></p>
	<div class="alert alert-dismissible alert-success">
	  <button type="button" class="close" data-dismiss="alert">&times;</button>
	  <h4>Create your Profile first!</h4>
	  <p>Please Complete your Profile First before proceeding to the site</p>
	</div>

	<br>
		<div class="row">
		<div class="col-lg-3">
		</div>
		<div class="col-lg-6">
			
			<h2 class="text-center">Personal Information</h2>
			<form method="POST" action="<?php echo base_url('users/validate_profile_personal');?>">
			<div class="form-group">
				<label>User Name:</label><input type="text"  class="form-control form-control-sm " name="user_name" required="true" value=""><p></p>
				<label>Given Name:</label><input type="text" name="given_name"  class="form-control form-control-sm " required="true"><p></p>
				<label>Surname:</label><input type="text" name="surname" class="form-control form-control-sm " required="true"><p></p>
				<label>Contact no.:</label><input type="text" name="contact" class="form-control form-control-sm " required="true"><p></p>
				<label>Email:</label><input type="text" name="email"  class="form-control form-control-sm " readonly="" value=" <?php echo $this->session->userdata('email');?>"><p></p>
				<div class="form-check">
					<div class="row">
						<div class="col-md-1"></div>
						<div class="col-md-4">

							<input class="form-check-input" type="radio" name="user_status" value="Student">I am a Student</input>
						</div>
						<div class="col-md-4">
							<input class="form-check-input" type="radio" name="user_status" value="Teacher">I am a Teacher</input>
						</div>
						<div class="col-md-3">
							<input class="form-check-input" type="radio" name="user_status" value="Alumni">I am a Alumni</input>
						</div>
						
					</div>		
				</div>
			
				<?php
					if(isset($error))
					{
						echo $error;
					}

				;?>


				</div>
				<br>
			
			<div class="row">
				<div class="col-lg-4">
				</div>
				<div class="col-lg-4">

					<button class="btn btn-success btn-block" type="submit">Next</button>
				</div>
				<div class="col-lg-4"></div>
			</div>
			
		</div>
		<div class="col-lg-3">
			
		</div>
	</div>
</div>