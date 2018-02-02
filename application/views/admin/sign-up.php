<div class="jumbotron mt-5">

<div class="container">
<div class="row">
	<div class="col-lg-3 col-sm-3">
	</div>
	
	<div class=" col-sm-5" style="margin: 0px;">
		<form method="POST" action="<?php echo base_url('admin/sign_up_validation');?>"><p></p>
		<label class="helper-block">Please provide your Umak Email</label>
		<!-- <input class="form-control form-control" type="email" name="email" placeholder="jdelacruz.k1122334@umak.edu.ph" required="true" value="<?php echo set_value('email'); ?>" pattern="[a-z]+.+[a-z0-9]+[@umak.edu.ph]" title="Please your UMak email">character limit	 <br> -->
		<input class="form-control form-control" type="email" name="email" placeholder="admin" required="true" value="<?php echo set_value('email'); ?>">
		 <p></p>
		<input class="form-control form-control" type="password" name="password" placeholder="Password" pattern=".{8,}" title="8 or more characters" required="true">
		 <?php echo form_error('password');?><p></p>
		<input class="form-control form-control" type="password" name="cpassword" placeholder="Confirm Password" minlength="8" required="true" >
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
	</div>

	<div class="col-lg-3 col-sm-3"></div>
</div>
</div>

</div>

