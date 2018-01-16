<div class="container mt-5">

	
	<div class="progress">
	  <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 46%">46%</div>
	</div><br>
		<div class="row">
		<div class="col-lg-3">
		</div>
		<div class="col-lg-6">
			<form method="POST" action="<?php echo base_url('users/validate_profile_2');?>">
			<h2>Work Experience</h2>
				<label>Company:</label><input type="text" name="company" class="form-control form-control-sm "><p></p>
				<label>Location:</label><input type="text" name="location"  class="form-control form-control-sm "><p></p>
				<label>Title:</label><input type="text" name="title"  class="form-control form-control-sm " ><p></p>
				<label>Role:</label><input type="text" name="role"  class="form-control form-control-sm " ><p></p>
				<label>Period:</label><p></p>
				<label>Description:</label><input type="text" name="description"  class="form-control form-control-sm "><p></p>
				<div class="form-check">
						<input class="form-check-input" type="radio" name="rdcurrent">I currently Work Here</input>
				</div>
				<br><br>		
			<div class="row">
				<div class="col-lg-3"></div>
				<div class="col-lg-3">
					<a class="btn btn-primary btn-outline btn-block" href="javascript:window.history.go(-1);">Back</a>
				</div>
				<div class="col-lg-3">
					
					<button class="btn btn-success btn-block" type="submit">Next</a>
				</div>
				<div class="col-lg-3"></div>
			</div>			
		</div>
		<div class="col-lg-3">			
		</div>
	</div>
</div>