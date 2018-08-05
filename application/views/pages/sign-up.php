<div class="container mt-5">
	
	<p></p>
	<!-- <div class="alert alert-success alert-dismissible fade show" role="alert">
	  <button type="button" class="close" data-dismiss="alert" aria-label="close"><span aria-hidden="true">&times;</span></button>
	  <h4>Sign Up!</h4>
	  <p>Create your Profile first!</p>
	</div> -->


<div class="card" style="margin: 80px;" >
<div class="row">
	<div class="col-lg-3 col-sm-3">
	</div>
	
	<div class=" col-sm-5" style="margin: 40px;">
		<?php echo validation_errors(); ?>
		
		<form method="POST" action="<?php echo base_url('login/sign_up_validation');?>"><p></p>
		
		<!-- <label class="helper-block">Please provide your Umak Email</label> -->
		<!-- <input class="form-control form-control" type="email" name="email" placeholder="jdelacruz.k1122334@umak.edu.ph" required="true" value="<?php echo set_value('email'); ?>" pattern="[a-z]+.+[a-z0-9]+[@umak.edu.ph]" title="Please your UMak email">
		character limit<br> -->
		<input class="form-control" type="email" name="email" placeholder="Enter your Email" required="TRUE" value="<?php echo set_value('email')?>">
		<?php echo form_error('email'); ?> 
		</input>
		
		 <p></p>
		<input class="form-control form-control" type="password" name="password" placeholder="Password" pattern=".{8,}" title="8 or more characters" required="true" value="<?php echo set_value('password')?>">

		<p> <?php echo form_error('password');?></p>

		<input class="form-control form-control" type="password" name="cpassword" placeholder="Password" pattern=".{8,}" title="8 or more characters" required="true" value="<?php echo set_value('cpassword')?>">
		
		<p><?php echo form_error('cpassword');?></p>
		
		<div class="row">
		<div class="col-lg-6">
			<a class="btn btn-primary btn-block" href="javascript:window.history.go(-1);" data-placement="back" title="" data-original-title="Back to Sign In">Back</a>
		</div>
		<div class="col-lg-6">
			
			<button type="submit" class="btn btn-success btn-block">Submit</button>

		</div>
		</div>
		</form><p></p> 	</div><!--end-->
	<div class="col-lg-3 col-sm-3"></div>
</div>
</div>

</div>

