<div class="jumbotron" style="background-image:url(<?php echo base_url('assets/img/boss/background.jpg');?>); background-size: cover; background-repeat: no-repeat;">
<div class="container mt-5" >
	
	<div class="row">

		<div class="col-lg-3 col-ls-2"></div>

		<div class="col-lg-5 col-ls-5">
			<div class="card" style="margin: 10px; padding: 20px;">
				<div class="card-header">
					<h4 class="text-primary" align="center">Sign Up</h4>
				</div>
			<div class="form-group" style="padding: 10px;">
			
				

				<?php //echo form_open('/Form/frm'); ?>
				<form method="POST" action="<?php echo base_url('/Login/validate')?>">
				<p></p>
				<input class="form-control" type="text" name="username" value="<?php 
					if(!empty($_POST['username']))
					{
						echo $_POST['username'];
						
					}
					else
					{
						echo "";
					}
				  ?>" size="50" placeholder="User Name" />
				<?php echo form_error('username'); ?> 
				<p></p>	
				<input class="form-control" type="email" name="email" value="<?php
					if(!empty($_POST['email']))
					{
						echo $_POST['email'];
						
					}
					else
					{
						echo "";
					}
				 ?>" size="50" placeholder="Email Address" />
				<?php echo form_error('email'); ?> 
				<div class="valid-feedback">Success! You've done it.</div>
				<div class="invalid-feedback">Sorry, that username's taken. Try another?</div>
				<p></p>
				<input class="form-control" type="password" name="password" value="" size="50" placeholder="Password" id="myInput" />
				<?php echo form_error('password'); ?> 
				<div class="invalid-feedback">Sorry, that username's taken. Try another?</div>
				<p></p>
				<input class="form-control" type="password" name="cpassword"  size="50" placeholder="Confirm Password" id="myInputt" />
				<?php echo form_error('cpassword'); ?> 
				<p>
					<?php //echo validation_errors(); ?>
				</p>
				
				<div class="row">
					<div class="col-lg-6 col-ls-4">
						<input type="checkbox" onclick="myFunction()" >Show Password<!-- <a onclick="myFunction()">Show Password</a> -->
					</div>
					<!-- <div class="col-lg-1 col-ls-1"></div> -->
					<div class="col-lg-5 col-ls-8">
						
					</div>
				</div>


				<div><p></p>
					<div class="row">
						<div class="col-lg-4 col-ls-4">
							<a class="btn btn-primary btn-block" href="javascript:window.history.go(-1);" data-placement="back" title="" data-original-title="Back to Sign In">Back</a>
						</div>
						<div class="col-lg-4 col-ls-4">
							
						</div>
						<div class="col-lg-4 col-ls-4">
							<input class="btn btn-success" type="submit" value="Submit" />
						</div>
					</div>
					
				</div>

				</form>
			</div>
			</div>
		</div>
		<div class="col-lg-4 col-ls-2"></div>
	</div>
</div>
</div>



