<div class="jumbotron" style="background-image:url(<?php echo base_url('assets/img/blog-desk4.jpg');?>); background-size: cover; background-repeat: no-repeat;">
	
	<div class="container">
		
		<div class="row">
			<div class="col-lg-3"></div>
			<div class="col-lg-6">
				<div class="container">
				<div class="card border-primary">
				  <div class="card-body">
				    <blockquote class="card-blockquote">
				    		<form method="POST" action="<?php echo base_url('admin/sign_in');?>">

				    	  <fieldset>
				    	    <legend>Log In</legend>
				    	    <div class="form-group">
				    	      <label for="exampleInputEmail1">Email address</label>
				    	      <input type="email" class="form-control" id="exampleInputEmail1" name="email" aria-describedby="emailHelp" placeholder="Enter email" required="true" autofocus="true">
				    	    </div>
				    	    <div class="form-group">
				    	      <label for="exampleInputPassword1">Password</label>
				    	      <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password" required="true">
				    	      	<label class="text-danger">
				    	            <?php echo $this->session->flashdata('error'); ?>
				    	        </label>
				    	    </div>   
				    	    
				    	    <div class="form-check">
				    	      <label class="form-check-label">
				    	        <input type="checkbox" class="form-check-input">
				    	        Keep me Logged On
				    	      </label>
				    	    </div>
				    	    
				    	    <div class="row">
				    	    	<div class="col-lg-6">
				    	    		<button type="submit" class="btn btn-primary  btn-block">Sign In</button>
				    	    	</div>
				    	    	</form>
				    	    	<div class="col-lg-6">
				    	    		<a href="<?php echo base_url('admin/sign_up');?>" class="btn btn-secondary btn-block">Sign Up</a>
				    	    	</div>
				    	    </div>
				    	  </fieldset>
				    	
				    </blockquote>

				  </div>
				</div>
			</div>
			<div class="col-lg-3"></div>
		</div>
	</div>

</div>
<!-- </form>
</blockquote> -->
</div>
