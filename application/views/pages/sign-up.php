<div class="container">
	
	<p></p>
	<div class="alert alert-dismissible alert-success">
	  <button type="button" class="close" data-dismiss="alert">&times;</button>
	  <h4>Sign Up!</h4>
	  <p>Create your Profile first!</p>
	</div>


<div class="container">
<div class="row">
	<div class="col-lg-3 col-sm-3">
	</div>
	
	<div class=" col-sm-5" style="margin: 0px;">
		<form method="POST" action="<?php echo base_url('login/sign_up_validation');?>"><p></p>
		<input class="form-control form-control" type="email" name="email" placeholder="Email" required="true">
		 <?php echo form_error('email');?><p></p>
		<input class="form-control form-control" type="password" name="password" placeholder="Password" minlength="8" required="true">
		 <?php echo form_error('password');?><p></p>
		<input class="form-control form-control" type="password" name="cpassword" placeholder="Confirm Password" minlength="8" required="true">
		<?php echo form_error('cpassword');?><p></p>
		
		<div class="row">
		<div class="col-lg-6">
			<a class="btn btn-primary btn-block" href="javascript:window.history.go(-1);" data-placement="back" title="" data-original-title="Back to Sign In">Back</a>
		</div>
		<div class="col-lg-6">
			
			<button type="submit" class="btn btn-success btn-block">Submit</button>

		</div>
		</div>

		</form><p></p>
		<!-- <button class="btn btn-success btn-block" id="mButton">Modal</button>	 -->

		

	</div>

	<div class="col-lg-3 col-sm-3"></div>
</div>
</div>

</div>

