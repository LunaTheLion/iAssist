<div class="jumbotron">
	<div class="container">
		<div class="row">
			<div class="col-lg-3"></div>
			<div class="col-lg-6">
				<div class="card">
				  <h3 class="card-header text-center">Create Profile</h3>
				  <form method="POST" action="<?php echo base_url('admin/validate_create_profile')?>">
				  <div class="card-body">
				  
				    	<label>Email</label>
				    	<input class="form-control" type="email" name="email" placeholder="Email" required="true"></input>
				    	<label>Username</label>
				    	<input class="form-control" type="text" name="username" placeholder="Username" required="true"></input>
				    	<label>Contact no:</label>
				    	<input class="form-control" type="text" name="contact" placeholder="Contact Number" required="true"></input>

				  </div>
				  
				  <div class="card-body">
				   <div class="row">
				   	<div class="col-lg-3"></div>
				   	<div class="col-lg-3">
				   		<a href="javasript:window.history.go(-1)" class="btn btn-primary btn-block">Back</a>
				   	</div>
				   	<div class="col-lg-3">
				   		<button type="submit" class="btn btn-success btn-block">Submit</a>
				   	</div>
				   	<div class="col-lg-3"></div>

				   </div>
				  </div>
				  </form>
				 
				</div>
			</div>
			<div class="col-lg-3"></div>
		</div>
	</div>
</div>