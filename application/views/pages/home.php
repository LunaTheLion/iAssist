<div class="jumbotron">
<div class="row">
	<div class="col-lg-8">
		  <h1 class="display-3">Welcome to iAssist</h1>
	</div>
	<div class="col-lg-4">
		<div class="container">
		<div class="card border-primary">
		  <div class="card-body">
		    <blockquote class="card-blockquote">
		    		<form method="POST" action="<?php echo base_url('login/sign_in');?>">

		    	  <fieldset>
		    	    <legend>Log In</legend>
		    	    <div class="form-group">
		    	      <label for="exampleInputEmail1">Email address</label>
		    	      <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" required="true">
		    	      <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
		    	    </div>
		    	    <div class="form-group">
		    	      <label for="exampleInputPassword1">Password</label>
		    	      <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" required="true">
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
		    	    	<div class="col-lg-6"></form>
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