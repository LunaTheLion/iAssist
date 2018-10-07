<div class="jumbotron" style="background-image:url(<?php echo base_url('assets/img/boss/background.jpg');?>); background-size: cover; background-repeat: no-repeat;">

<div class="container">
	
	<div class="row">
		<div class="col-lg-3">
			
		</div>
		<div class="col-lg-6 mt-5 mb-5">
			<div class="container">
			<div class="card border-primary">
			  <div class="card-body">
			    <blockquote class="card-blockquote">
			    		<form method="POST" action="<?php echo base_url('login/sign_in');?>">

			    	  <fieldset>
			    	    <legend class="text-center">Log In</legend>
			    	    <div class="form-group">
			    	     <!--  <label for="exampleInputEmail1">Email address</label> -->
			    	      <input type="email" class="form-control" id="exampleInputEmail1" name="email" aria-describedby="emailHelp" placeholder="Enter email" value="<?php 
			    	      if(empty($_POST['email']))
			    	      {
			    	      	echo "";
			    	      }
			    	      else{
			    	      	echo $_POST['email'];
			    	      }
			    	       ?>" required="true" autofocus="true">
			    	      <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
			    	    </div>
			    	    <div class="form-group">
			    	     <!--  <label for="exampleInputPassword1">Password</label> -->
			    	      <input type="password" name="password" class="form-control" id="InputPassword1" placeholder="Password"  required="true">
			    	      	<label class="text-danger">
			    	            <?php 
			    	            	$error = $this->session->flashdata('error');

			    	            if(!empty($error))
			    	            	{
			    	            		echo $this->session->flashdata('error'); 
			    	            	}
			    	            	else
			    	            		{echo "";
			    	            		}
			    	             ?>
			    	        </label>
			    	    </div>   
			    	    <div class="form-check">
			    	      <label class="form-check-label">
			    	        <input type="checkbox" id="Signin" class=""
			    	        onchange="document.getElementById('InputPassword1').type = this.checked ? 'text' : 'password'">Show Password
			    	
			    	      </label>
			    	    </div>
			    	    <!-- <div class="g-recaptcha" data-sitekey="6Lc84XMUAAAAACZQwWh5CQaZEp1UoJW6KYo2yi9U"></div> -->
			    	    <div class="row">
			    	    	<div class="col-lg-6">
			    	    		<button type="submit" class="btn btn-primary  btn-block">Sign In</button>
			    	    	</div>
			    	    	<div class="col-lg-6">
			    	    	</form>
			    	    		<a href="<?php echo base_url('login/sign_up');?>" class="btn btn-secondary btn-block">Sign Up</a>
			    	    	</div>
			    	    </div>
			    	  </fieldset>
			    	
			    </blockquote>

			  </div>
			</div>
			</div>

		</div>

	</div>
</div>
</div>
