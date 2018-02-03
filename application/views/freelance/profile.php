
<div class="jumbotron" style="padding-top: 100px; padding-bottom: 180px; margin: 0px;">
	<div class="row">
		<div class="col-lg-1"></div>
	<div class="col-lg-10">
		<div class="container" style="background-color:  #FFC0CBs;">
			<h6>Hello</h6>
			<h4>I'M</h4>
			<h2 style="font-style: initial;"><?php echo $this->session->userdata('user_name');?></h2>
			<br>
			<h5><?php echo $this->session->userdata('field')?><hr></h5>
			<?php echo $this->session->userdata('email')?>
		</div>
	</div>
	<div class="col-lg-1"></div>
	</div>
</div>
<div class="jumbotron" style="background-color: #D3D3D3; margin: 0px;">
			<div class="container" style="background-color:  #FFC0CBs;">
				<h3 class="text-center" style="font-style: initial;">About Me</h3>
				<h6 class="text-center">Write a simple introduction about yourself <a href="#">here!</a></h6>
				<div class="row">
					<div class="col-sm-4"></div>
					<div class="col-sm-2">
						<a class="btn btn-primary btn-block" href="#"> My Resume</a>
					</div>
					<div class="col-sm-2">
						<a class="btn  btn-outline-primary btn-block" href="#"> Hire Me</a>
					</div>
					<div class="col-sm-4"></div>

				</div>
			</div>
</div>
<div class="container mt-5">
	<div class="row">
		
		<div class="col-md-4">
			<h4 class="text-center"><a href="<?php echo base_url('users/education')?>">Education &amp; Jobs</a></h4>
			<p></p>
			<label><h6 class="text-muted mb-0">School: </h6></label><br>
			<label><h6 class="text-muted mb-0">College:</h6></label><br>
			<p class="text-primary font-weight-bold" style="margin-bottom: 2px;" ><?php echo $this->session->userdata('college');?></p>
			<label><h6 class="text-muted mb-0">Major: </h6></label><br>
			<p class="text-primary font-weight-bold"><?php echo $this->session->userdata('course');?></p>
			<br>
		</div>
		<div class="col-md-4">
			<h4 class="text-center"><a href="#">What i'm doing</a></h4>
			<p></p>
		</div>
		<div class="col-md-4">
			<h4 class="text-center"><a href="<?php echo base_url('users/portfolio')?>">Skills &amp; Abilities</a></h4>
			<?php 
				$skill = $this->session->userdata('skill');
				if( $skill == 'Novice')
				{
					echo "<div class='progress'>
			  <div class='progress-bar' role='progressbar' style='width: 20%;' aria-valuenow='25' aria-valuemin='0' aria-valuemax='100'></div>
			</div>";
				}
				elseif( $skill == 'Advance-Beginner')
				{
					echo "<div class='progress'>
			  <div class='progress-bar' role='progressbar' style='width: 40%;' aria-valuenow='25' aria-valuemin='0' aria-valuemax='100'></div>
			</div>";
				}
				elseif( $skill == 'Compentent')
				{
					echo "<div class='progress'>
			  <div class='progress-bar' role='progressbar' style='width: 60%;' aria-valuenow='25' aria-valuemin='0' aria-valuemax='100'></div>
			</div>";
				}
				elseif( $skill == 'Proficient')
				{
					echo "<div class='progress'>
			  <div class='progress-bar' role='progressbar' style='width: 80%;' aria-valuenow='25' aria-valuemin='0' aria-valuemax='100'></div>
			</div>";
				}
				elseif( $skill == 'Expert')
				{
					echo "<div class='progress'>
			  <div class='progress-bar' role='progressbar' style='width: 100%;' aria-valuenow='25' aria-valuemin='0' aria-valuemax='100'></div>
			</div>";
				}
			;?>
			<label><h6 class="text-primary mb-0"><?php echo $this->session->userdata('field');?></h6></label>
			<p></p>
		</div>
		
	</div>
</div>
<div class="jumbotron" style=" margin: 0px;">
	<h3 class="text-center" style="font-style: initial;">- <a href="<?php echo base_url('users/projects');?>">My Projects</a> -</h3>
	<br><br>
	<div class="row">
		<?php foreach($proj as $row):?>
		<!-- <?php print_r($proj)?> -->
			<div class="col-md-4" style="padding: 8px;">
				<div class="card">
				  <img style="height: 250px; width: 100%; display: block;" src="<?php echo site_url("uploads/$row->project_image"); ?>" " alt="Card image">

				  <div class="card-body" style="padding-top: 10px;">
				    <p class="card-text text-center" style="margin:2px;"><?php $date = date_create($row->project_date_posted); echo date_format($date,'F j, Y, l, g:i: a');?></p>
				  
				   	<h6 class="text-center text-primary" style="margin:3px";><?php echo $row->project_title;?></h6>
				  </div>
				 
				</div>
			</div>

		<?php endforeach; ?>

		<!-- <div class="col-md-4" style="padding: 8px;">
			<div class="card">
			  <img style="height: 250px; width: 100%; display: block;" src="data:image/svg+xml;charset=UTF-8,%3Csvg%20width%3D%22318%22%20height%3D%22180%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%20318%20180%22%20preserveAspectRatio%3D%22none%22%3E%3Cdefs%3E%3Cstyle%20type%3D%22text%2Fcss%22%3E%23holder_158bd1d28ef%20text%20%7B%20fill%3Argba(255%2C255%2C255%2C.75)%3Bfont-weight%3Anormal%3Bfont-family%3AHelvetica%2C%20monospace%3Bfont-size%3A16pt%20%7D%20%3C%2Fstyle%3E%3C%2Fdefs%3E%3Cg%20id%3D%22holder_158bd1d28ef%22%3E%3Crect%20width%3D%22318%22%20height%3D%22180%22%20fill%3D%22%23777%22%3E%3C%2Frect%3E%3Cg%3E%3Ctext%20x%3D%22129.359375%22%20y%3D%2297.35%22%3EImage%3C%2Ftext%3E%3C%2Fg%3E%3C%2Fg%3E%3C%2Fsvg%3E" alt="Card image">
			  <div class="card-body" style="padding-top: 10px;">
			    <p class="card-text text-center" style="margin:2px;">Date</p>
			   	<h6 class="text-center text-primary" style="margin:3px";>Project Name</h6>
			  </div>
			 
			</div>
		</div> -->
		<!-- <div class="col-md-4" style="padding: 8px;">
			<div class="card">
			  <img style="height: 250px; width: 100%; display: block;" src="data:image/svg+xml;charset=UTF-8,%3Csvg%20width%3D%22318%22%20height%3D%22180%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%20318%20180%22%20preserveAspectRatio%3D%22none%22%3E%3Cdefs%3E%3Cstyle%20type%3D%22text%2Fcss%22%3E%23holder_158bd1d28ef%20text%20%7B%20fill%3Argba(255%2C255%2C255%2C.75)%3Bfont-weight%3Anormal%3Bfont-family%3AHelvetica%2C%20monospace%3Bfont-size%3A16pt%20%7D%20%3C%2Fstyle%3E%3C%2Fdefs%3E%3Cg%20id%3D%22holder_158bd1d28ef%22%3E%3Crect%20width%3D%22318%22%20height%3D%22180%22%20fill%3D%22%23777%22%3E%3C%2Frect%3E%3Cg%3E%3Ctext%20x%3D%22129.359375%22%20y%3D%2297.35%22%3EImage%3C%2Ftext%3E%3C%2Fg%3E%3C%2Fg%3E%3C%2Fsvg%3E" alt="Card image">
			  <div class="card-body" style="padding-top: 10px;">
			    <p class="card-text text-center" style="margin:2px;">Date</p>
			   	<h6 class="text-center text-primary" style="margin:3px";>Project Name</h6>
			  </div>
			 
			</div>
		</div> -->
		<!-- <div class="col-md-4" style="padding: 8px;">
			<div class="card">
			  <img style="height: 250px; width: 100%; display: block;" src="data:image/svg+xml;charset=UTF-8,%3Csvg%20width%3D%22318%22%20height%3D%22180%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%20318%20180%22%20preserveAspectRatio%3D%22none%22%3E%3Cdefs%3E%3Cstyle%20type%3D%22text%2Fcss%22%3E%23holder_158bd1d28ef%20text%20%7B%20fill%3Argba(255%2C255%2C255%2C.75)%3Bfont-weight%3Anormal%3Bfont-family%3AHelvetica%2C%20monospace%3Bfont-size%3A16pt%20%7D%20%3C%2Fstyle%3E%3C%2Fdefs%3E%3Cg%20id%3D%22holder_158bd1d28ef%22%3E%3Crect%20width%3D%22318%22%20height%3D%22180%22%20fill%3D%22%23777%22%3E%3C%2Frect%3E%3Cg%3E%3Ctext%20x%3D%22129.359375%22%20y%3D%2297.35%22%3EImage%3C%2Ftext%3E%3C%2Fg%3E%3C%2Fg%3E%3C%2Fsvg%3E" alt="Card image">
			  <div class="card-body" style="padding-top: 10px;">
			    <p class="card-text text-center" style="margin:2px;">Date</p>
			   	<h6 class="text-center text-primary" style="margin:3px";>Project Name</h6>
			  </div>
			 
			</div>
		</div> -->
	</div>



</div>
<div class="jumbotron" style="background-color: #D3D3D3; margin: 0px;">
	<h3 class="text-center" style="font-style: initial;">- Testimonials -</h3>
	<br><br>

	<div class="container mt-10">
		<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
		  <div class="carousel-inner" role="listbox">
		    <div class="carousel-item active">
		    	 <div class="container-fluid" style="background-color: #FFFFFF;height: 200px; width: 800px; padding: 20px;">
		    		<p class="text-primary text-center">
		    			Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean quis nisl id enim congue ornare nec eu dui. Nulla tincidunt luctus metus quis aliquam. Morbi eleifend molestie tempor. Nam non massa ut magna dictum porttitor. Cras ac elit accumsan, tincidunt nibh at, vulputate arcu. Praesent iaculis justo id suscipit facilisis. Quisque tincidunt, libero a pharetra dignissim, metus odio finibus arcu, at aliquam eros ex non orci. Morbi vitae dictum tellus, at porttitor ante. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Sed pulvinar urna eu augue volutpat, quis tempus erat luctus. Donec laoreet arcu id ex hendrerit feugiat.
		    		</p>
		    	</div>
		 
		    </div>
		    <div class="carousel-item" >
		       <div class="container-fluid" style="background-color: #FFFFFF;height: 200px; width: 800px; padding: 20px;">
		      	<p class="text-primary text-center">
		      		Aenean dignissim facilisis tortor. Curabitur nisi arcu, porta in hendrerit quis, pulvinar et turpis. Integer massa mauris, bibendum in euismod at, posuere vitae magna. Maecenas ultricies nec urna non mattis. Vestibulum a dolor augue. Proin porta maximus lacus et posuere. Maecenas sodales lacus turpis, eu hendrerit turpis malesuada a. Aliquam auctor porttitor ante pharetra varius. Curabitur feugiat rutrum elementum. Nulla feugiat nibh nec nisl aliquet pharetra. Nunc feugiat viverra diam quis ullamcorper. Phasellus ullamcorper ac lectus in porta. Vestibulum efficitur hendrerit ex ut aliquet. Sed non dolor posuere, rutrum tortor eu, volutpat augue. Maecenas pellentesque a turpis sed ornare
		      	</p>
		      </div>
		    </div>
		    <div class="carousel-item">
		      <div class="container-fluid" style="background-color: #FFFFFF;height: 200px; width: 800px; padding: 20px;">
		      	<p class="text-primary text-center">
		      		Nulla facilisi. Suspendisse potenti. Suspendisse lorem enim, imperdiet vitae purus malesuada, vulputate faucibus odio. Praesent neque sapien, posuere quis bibendum et, convallis non nibh. Vestibulum feugiat ex nec orci luctus consequat. Mauris volutpat dolor non nisl interdum fringilla. Integer condimentum dolor vel facilisis semper. Aenean imperdiet blandit ligula quis convallis. Vivamus tincidunt egestas arcu ac rutrum. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur pellentesque tincidunt pulvinar. Etiam nec lorem luctus, euismod neque id, iaculis diam. Suspendisse pretium leo non efficitur lobortis. Nam feugiat odio posuere, pharetra sem nec, posuere arcu.
		      	</p>
		      </div>
		    </div>
		  </div>

		  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
		    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
		    <span class="sr-only">Previous</span>
		  </a>
		  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
		    <span class="carousel-control-next-icon" aria-hidden="true"></span>
		    <span class="sr-only">Next</span>
		  </a>

		</div>

	</div>

</div>



<!-- <div class="row">
	<div class="col-md-12">
		<div class="jumbotron">
			<h2 class="text-left text-muted" style="font-style: sans-serif; font-size:3rem; ">
				<?php echo $this->session->userdata('user_name');?></h2>
			<p class="text-muted text-left"><?php echo $this->session->userdata('field');?></p>
			<br><br><br>
			<h3 class="text-left text-muted" style="font-size:8rem;">&nbsp&nbspHello!</h3>
			<br>
		</div>
	</div>
</div> -->



<!-- 
 	<div class="row">
 		<div class="col-lg-12">

 			<ul class="nav nav-tabs mr-auto" id="myTab">
 			  <li class="nav-item">
 			    <a class="nav-link active" auto-display="true" data-toggle="tab" href="#profile">Profile</a>
 			  </li>
 			  <li class="nav-item">
 			    <a class="nav-link" data-toggle="tab" href="#portfolio">Portfolio</a>
 			  </li>
 			  <li class="nav-item">
 			    <a class="nav-link " data-toggle="tab" href="#reviews">Reviews</a>
 			  </li>
 			   <li class="nav-item">
 			    <a class="nav-link " data-toggle="tab" href="#offers">Your Offers</a>
 			  </li>
 			</ul>
 			<div id="myTabContent" class="tab-content">
 			  <div class="tab-pane fade active in" id="profile">
 			    	<div class="container">
 			    		<p></p>
 			    		<div class="row">
 			    			<div class="col-lg-3">
 			    				<h4>About Me</h4>
 			    			</div>
 			    			<div class="col-lg-9">
 			    				
 			    				<div class="row">
 			    					<div class="col-lg-6">
 			    						<label><h6>Username: </h6></label><?php echo $this->session->userdata('user_name');?><br>
 			    						<label><h6>Name:</h6></label><?php echo $this->session->userdata('given_name');?><br>
 			    						
 			    					</div>
 			    					<div class="col-lg-6">
 			    						<label><h6>Contact #: </h6></label> <?php echo $this->session->userdata('contact');?><br>
 			    						<label><h6>Email:</h6></label><?php echo $this->session->userdata('email');?><br>
 			    					</div>
 			    				</div>
 			    			</div>
 			    		</div>
 			    		<hr>

 			    		<div class="row">
 			    			<div class="col-lg-3">
 			    				<h4>College & University</h4>
 			    			</div>
 			    			<div class="col-lg-9">
 			    				<label><h6>School: </h6></label><br>
 			    				<label><h6>College:</h6></label>
 			    				<?php echo $this->session->userdata('college');?><br>
 			    				<label><h6>Major: </h6></label>
 			    				<?php echo $this->session->userdata('course');?><br>
 			    				
 			    			</div>
 			    		</div>

 			    		<hr>

 			    		<div class="row">
 			    			<div class="col-lg-3">
 			    				<h4>Skills & Profession</h4>
 			    			</div>
 			    			<div class="col-lg-9">
 			    				<label><h6>Skill Category: </h6></label> <?php echo $this->session->userdata('field');?><br>
 			    				<label><h6>Skill Level:</h6></label><?php echo $this->session->userdata('skill');?><br>
 			    				<label><h6>Certificates : </h6></label><br>
 			    				
 			    			</div>
 			    		</div>

 			    		<hr>

 			    		<div class="row">
 			    			<div class="col-lg-3">
 			    				<h4>Work & Experience</h4>
 			    			</div>
 			    			<div class="col-lg-9">
 			    				<label><h6>Company: </h6></label>
 			    				<?php echo $this->session->userdata('company');?><br>
 			    				<label><h6>Company Address: </h6></label>
 			    				<?php echo $this->session->userdata('location');?><br>
 			    				<label><h6>Job Title:</h6></label>
 			    				<?php echo $this->session->userdata('title');?><br>
 			    				<label><h6>Description: </h6></label>
 			    				<?php echo $this->session->userdata('description');?><br>
 			    				
 			    			</div>
 			    		</div>


 			    	</div>




 			  </div>



 			  <div class="tab-pane fade" id="portfolio"><!-- PORTFOLION PORTFOLION PORTFOLION PORTFOLION -->
 			    	<!--<div class="container">
 			    		<br>
 			    		<h4>Projects</h4>
 			    		<hr>
 			    		<div class="row">
 			    			<div class="col-lg-2">
 			    				<div class="card" >
 			    					<div class="card-body" style="padding-right: 10px; padding-left: 10px; padding-bottom: 2px; padding-top: 10px;">
 			    						<h6 class="card-title">Create New Project</h6>
 			    					</div>
 			    				  <img style="height: 100px; width: 100%; display: block;" src="data:image/svg+xml;charset=UTF-8,%3Csvg%20width%3D%22318%22%20height%3D%22180%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%20318%20180%22%20preserveAspectRatio%3D%22none%22%3E%3Cdefs%3E%3Cstyle%20type%3D%22text%2Fcss%22%3E%23holder_158bd1d28ef%20text%20%7B%20fill%3Argba(255%2C255%2C255%2C.75)%3Bfont-weight%3Anormal%3Bfont-family%3AHelvetica%2C%20monospace%3Bfont-size%3A16pt%20%7D%20%3C%2Fstyle%3E%3C%2Fdefs%3E%3Cg%20id%3D%22holder_158bd1d28ef%22%3E%3Crect%20width%3D%22318%22%20height%3D%22180%22%20fill%3D%22%23777%22%3E%3C%2Frect%3E%3Cg%3E%3Ctext%20x%3D%22129.359375%22%20y%3D%2297.35%22%3EImage%3C%2Ftext%3E%3C%2Fg%3E%3C%2Fg%3E%3C%2Fsvg%3E" alt="Card image">
 			    				  <div class="card-body" style="padding: 5px;">
 			    				    
 			    				   <small> <a href="#" class="card-link">Card link</a></small>
 			    				  
 			    				  </div>
 			    				  <div class="card-footer text-muted" style="padding: 7px;">
 			    				    2 days ago
 			    				  </div>
 			    				</div>

 			    			</div>
 			    			<div class="col-lg-2">
 			    				<div class="card">
 			    					<div class="card-body" style="padding-right: 10px; padding-left: 10px; padding-bottom: 2px; padding-top: 10px;">
 			    						<h6 class="card-title">My 1st Project</h6>
 			    					</div>
 			    				  <img style="height: 100px; width: 100%; display: block;" src="data:image/svg+xml;charset=UTF-8,%3Csvg%20width%3D%22318%22%20height%3D%22180%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%20318%20180%22%20preserveAspectRatio%3D%22none%22%3E%3Cdefs%3E%3Cstyle%20type%3D%22text%2Fcss%22%3E%23holder_158bd1d28ef%20text%20%7B%20fill%3Argba(255%2C255%2C255%2C.75)%3Bfont-weight%3Anormal%3Bfont-family%3AHelvetica%2C%20monospace%3Bfont-size%3A16pt%20%7D%20%3C%2Fstyle%3E%3C%2Fdefs%3E%3Cg%20id%3D%22holder_158bd1d28ef%22%3E%3Crect%20width%3D%22318%22%20height%3D%22180%22%20fill%3D%22%23777%22%3E%3C%2Frect%3E%3Cg%3E%3Ctext%20x%3D%22129.359375%22%20y%3D%2297.35%22%3EImage%3C%2Ftext%3E%3C%2Fg%3E%3C%2Fg%3E%3C%2Fsvg%3E" alt="Card image">
 			    				  <div class="card-body" style="padding: 5px;">
 			    				    
 			    				   <small> <a href="https://bootswatch.com/lux/#" class="card-link">Card link</a></small>
 			    				  
 			    				  </div>
 			    				  <div class="card-footer text-muted" style="padding: 7px;">
 			    				    2 days ago
 			    				  </div>
 			    				</div>
 			    			</div>
 			    			<div class="col-lg-2">
 			    				<div class="card">
 			    					<div class="card-body" style="padding-right: 10px; padding-left: 10px; padding-bottom: 2px; padding-top: 10px;">
 			    						<h6 class="card-title">My 2nd Project</h6>
 			    					</div>
 			    				  <img style="height: 100px; width: 100%; display: block;" src="data:image/svg+xml;charset=UTF-8,%3Csvg%20width%3D%22318%22%20height%3D%22180%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%20318%20180%22%20preserveAspectRatio%3D%22none%22%3E%3Cdefs%3E%3Cstyle%20type%3D%22text%2Fcss%22%3E%23holder_158bd1d28ef%20text%20%7B%20fill%3Argba(255%2C255%2C255%2C.75)%3Bfont-weight%3Anormal%3Bfont-family%3AHelvetica%2C%20monospace%3Bfont-size%3A16pt%20%7D%20%3C%2Fstyle%3E%3C%2Fdefs%3E%3Cg%20id%3D%22holder_158bd1d28ef%22%3E%3Crect%20width%3D%22318%22%20height%3D%22180%22%20fill%3D%22%23777%22%3E%3C%2Frect%3E%3Cg%3E%3Ctext%20x%3D%22129.359375%22%20y%3D%2297.35%22%3EImage%3C%2Ftext%3E%3C%2Fg%3E%3C%2Fg%3E%3C%2Fsvg%3E" alt="Card image">
 			    				  <div class="card-body" style="padding: 5px;">
 			    				    
 			    				   <small> <a href="https://bootswatch.com/lux/#" class="card-link">Card link</a></small>
 			    				  
 			    				  </div>
 			    				  <div class="card-footer text-muted" style="padding: 7px;">
 			    				    2 days ago
 			    				  </div>
 			    				</div>
 			    			</div>
 			    			<div class="col-lg-2">
 			    				<div class="card">
 			    					<div class="card-body" style="padding-right: 10px; padding-left: 10px; padding-bottom: 2px; padding-top: 10px;">
 			    						<h6 class="card-title">My 3rd Project</h6>
 			    					</div>
 			    				  <img style="height: 100px; width: 100%; display: block;" src="data:image/svg+xml;charset=UTF-8,%3Csvg%20width%3D%22318%22%20height%3D%22180%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%20318%20180%22%20preserveAspectRatio%3D%22none%22%3E%3Cdefs%3E%3Cstyle%20type%3D%22text%2Fcss%22%3E%23holder_158bd1d28ef%20text%20%7B%20fill%3Argba(255%2C255%2C255%2C.75)%3Bfont-weight%3Anormal%3Bfont-family%3AHelvetica%2C%20monospace%3Bfont-size%3A16pt%20%7D%20%3C%2Fstyle%3E%3C%2Fdefs%3E%3Cg%20id%3D%22holder_158bd1d28ef%22%3E%3Crect%20width%3D%22318%22%20height%3D%22180%22%20fill%3D%22%23777%22%3E%3C%2Frect%3E%3Cg%3E%3Ctext%20x%3D%22129.359375%22%20y%3D%2297.35%22%3EImage%3C%2Ftext%3E%3C%2Fg%3E%3C%2Fg%3E%3C%2Fsvg%3E" alt="Card image">
 			    				  <div class="card-body" style="padding: 5px;">
 			    				    
 			    				   <small> <a href="https://bootswatch.com/lux/#" class="card-link">Card link</a></small>
 			    				  
 			    				  </div>
 			    				  <div class="card-footer text-muted" style="padding: 7px;">
 			    				    2 days ago
 			    				  </div>
 			    				</div>
 			    			</div>
 			    		</div>
 			    		<br>
 			    		<h4>Others</h4>
 			    		<hr>
 			    	</div>
 			  </div>
 			  <div class="tab-pane fade" id="reviews">
 			    	<div class="container">
 			    		<br>
 			    		<h4>January 17 2017</h4>
 			    		<hr>
 			    		<div class="card border-success">
 			    		  <div class="card-body" style="padding:10px;">
 			    		    <blockquote class="card-blockquote" style="padding-top: 5px; padding-bottom: 5px; margin-bottom: 0rem;">
 			    		      <p style="padding:5px; margin: 0rem;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
 			    		      <footer style="margin: 0rem;">Someone famous in <cite title="Source Title">Source Title</cite></footer>
 			    		    </blockquote>
 			    		  </div>
 			    		</div>

 			    		<hr>

 			    	</div>
 			    </div>

 			    <div class="tab-pane fade" id="offers">
 			      	<div class="container">
 			      		<br>
 			      		
 			      		<hr>
 			      		<div class="row">
 			      			<div class="col-lg-4"></div>
 			      			<div class="col-lg-4">
 			      				
 			      				<div class="card">
 			      				  <h3 class="card-header text-center">New Offer</h3>
 			      				  <div class="card-body">
 			      				    <h5 class="card-title">Special title treatment</h5>
 			      				    <h6 class="card-subtitle text-muted">Support card subtitle</h6>
 			      				  </div>
 			      				  <img style="height: 200px; width: 100%; display: block;" src="data:image/svg+xml;charset=UTF-8,%3Csvg%20width%3D%22318%22%20height%3D%22180%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%20318%20180%22%20preserveAspectRatio%3D%22none%22%3E%3Cdefs%3E%3Cstyle%20type%3D%22text%2Fcss%22%3E%23holder_158bd1d28ef%20text%20%7B%20fill%3Argba(255%2C255%2C255%2C.75)%3Bfont-weight%3Anormal%3Bfont-family%3AHelvetica%2C%20monospace%3Bfont-size%3A16pt%20%7D%20%3C%2Fstyle%3E%3C%2Fdefs%3E%3Cg%20id%3D%22holder_158bd1d28ef%22%3E%3Crect%20width%3D%22318%22%20height%3D%22180%22%20fill%3D%22%23777%22%3E%3C%2Frect%3E%3Cg%3E%3Ctext%20x%3D%22129.359375%22%20y%3D%2297.35%22%3EImage%3C%2Ftext%3E%3C%2Fg%3E%3C%2Fg%3E%3C%2Fsvg%3E" alt="Card image">
 			      				  <div class="card-body">
 			      				    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
 			      				    <a href="https://bootswatch.com/lux/#" class="card-link">Card link</a>
 			      				    <a href="https://bootswatch.com/lux/#" class="card-link">Another link</a>
 			      				  </div>
 			      				  <div class="card-footer text-muted">
 			      				    2 days ago
 			      				  </div>
 			      				</div>

 			      			</div>
 			      			<div class="col-lg-4"></div>
 			      		</div>
 			      		<hr>
 			      		<h4 class="text-center">My Offered Skills</h4>
 			      		<div class="row">
 			      			<div class="col-lg-2">
 			      				
 			      				<div class="card">
 			      					<div class="card-body" style="padding-right: 10px; padding-left: 10px; padding-bottom: 2px; padding-top: 10px;">
 			      						<h6 class="card-title">My 3rd Project</h6>
 			      					</div>
 			      				  <img style="height: 100px; width: 100%; display: block;" src="data:image/svg+xml;charset=UTF-8,%3Csvg%20width%3D%22318%22%20height%3D%22180%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%20318%20180%22%20preserveAspectRatio%3D%22none%22%3E%3Cdefs%3E%3Cstyle%20type%3D%22text%2Fcss%22%3E%23holder_158bd1d28ef%20text%20%7B%20fill%3Argba(255%2C255%2C255%2C.75)%3Bfont-weight%3Anormal%3Bfont-family%3AHelvetica%2C%20monospace%3Bfont-size%3A16pt%20%7D%20%3C%2Fstyle%3E%3C%2Fdefs%3E%3Cg%20id%3D%22holder_158bd1d28ef%22%3E%3Crect%20width%3D%22318%22%20height%3D%22180%22%20fill%3D%22%23777%22%3E%3C%2Frect%3E%3Cg%3E%3Ctext%20x%3D%22129.359375%22%20y%3D%2297.35%22%3EImage%3C%2Ftext%3E%3C%2Fg%3E%3C%2Fg%3E%3C%2Fsvg%3E" alt="Card image">
 			      				  <div class="card-body" style="padding: 5px;">
 			      				    
 			      				   <small> <a href="https://bootswatch.com/lux/#" class="card-link">Card link</a></small>
 			      				  
 			      				  </div>
 			      				  <div class="card-footer text-muted" style="padding: 7px;">
 			      				    2 days ago
 			      				  </div>
 			      				</div>

 			      			</div>
 			      			<div class="col-lg-2">
 			      				
 			      				<div class="card">
 			      					<div class="card-body" style="padding-right: 10px; padding-left: 10px; padding-bottom: 2px; padding-top: 10px;">
 			      						<h6 class="card-title">My 3rd Project</h6>
 			      					</div>
 			      				  <img style="height: 100px; width: 100%; display: block;" src="data:image/svg+xml;charset=UTF-8,%3Csvg%20width%3D%22318%22%20height%3D%22180%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%20318%20180%22%20preserveAspectRatio%3D%22none%22%3E%3Cdefs%3E%3Cstyle%20type%3D%22text%2Fcss%22%3E%23holder_158bd1d28ef%20text%20%7B%20fill%3Argba(255%2C255%2C255%2C.75)%3Bfont-weight%3Anormal%3Bfont-family%3AHelvetica%2C%20monospace%3Bfont-size%3A16pt%20%7D%20%3C%2Fstyle%3E%3C%2Fdefs%3E%3Cg%20id%3D%22holder_158bd1d28ef%22%3E%3Crect%20width%3D%22318%22%20height%3D%22180%22%20fill%3D%22%23777%22%3E%3C%2Frect%3E%3Cg%3E%3Ctext%20x%3D%22129.359375%22%20y%3D%2297.35%22%3EImage%3C%2Ftext%3E%3C%2Fg%3E%3C%2Fg%3E%3C%2Fsvg%3E" alt="Card image">
 			      				  <div class="card-body" style="padding: 5px;">
 			      				    
 			      				   <small> <a href="https://bootswatch.com/lux/#" class="card-link">Card link</a></small>
 			      				  
 			      				  </div>
 			      				  <div class="card-footer text-muted" style="padding: 7px;">
 			      				    2 days ago
 			      				  </div>
 			      				</div>

 			      			</div>
 			      			<div class="col-lg-2">
 			      				
 			      				<div class="card">
 			      					<div class="card-body" style="padding-right: 10px; padding-left: 10px; padding-bottom: 2px; padding-top: 10px;">
 			      						<h6 class="card-title">My 3rd Project</h6>
 			      					</div>
 			      				  <img style="height: 100px; width: 100%; display: block;" src="data:image/svg+xml;charset=UTF-8,%3Csvg%20width%3D%22318%22%20height%3D%22180%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%20318%20180%22%20preserveAspectRatio%3D%22none%22%3E%3Cdefs%3E%3Cstyle%20type%3D%22text%2Fcss%22%3E%23holder_158bd1d28ef%20text%20%7B%20fill%3Argba(255%2C255%2C255%2C.75)%3Bfont-weight%3Anormal%3Bfont-family%3AHelvetica%2C%20monospace%3Bfont-size%3A16pt%20%7D%20%3C%2Fstyle%3E%3C%2Fdefs%3E%3Cg%20id%3D%22holder_158bd1d28ef%22%3E%3Crect%20width%3D%22318%22%20height%3D%22180%22%20fill%3D%22%23777%22%3E%3C%2Frect%3E%3Cg%3E%3Ctext%20x%3D%22129.359375%22%20y%3D%2297.35%22%3EImage%3C%2Ftext%3E%3C%2Fg%3E%3C%2Fg%3E%3C%2Fsvg%3E" alt="Card image">
 			      				  <div class="card-body" style="padding: 5px;">
 			      				    
 			      				   <small> <a href="https://bootswatch.com/lux/#" class="card-link">Card link</a></small>
 			      				  
 			      				  </div>
 			      				  <div class="card-footer text-muted" style="padding: 7px;">
 			      				    2 days ago
 			      				  </div>
 			      				</div>

 			      			</div>
 			      			<div class="col-lg-2">
 			      				
 			      				<div class="card">
 			      					<div class="card-body" style="padding-right: 10px; padding-left: 10px; padding-bottom: 2px; padding-top: 10px;">
 			      						<h6 class="card-title">My 3rd Project</h6>
 			      					</div>
 			      				  <img style="height: 100px; width: 100%; display: block;" src="data:image/svg+xml;charset=UTF-8,%3Csvg%20width%3D%22318%22%20height%3D%22180%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%20318%20180%22%20preserveAspectRatio%3D%22none%22%3E%3Cdefs%3E%3Cstyle%20type%3D%22text%2Fcss%22%3E%23holder_158bd1d28ef%20text%20%7B%20fill%3Argba(255%2C255%2C255%2C.75)%3Bfont-weight%3Anormal%3Bfont-family%3AHelvetica%2C%20monospace%3Bfont-size%3A16pt%20%7D%20%3C%2Fstyle%3E%3C%2Fdefs%3E%3Cg%20id%3D%22holder_158bd1d28ef%22%3E%3Crect%20width%3D%22318%22%20height%3D%22180%22%20fill%3D%22%23777%22%3E%3C%2Frect%3E%3Cg%3E%3Ctext%20x%3D%22129.359375%22%20y%3D%2297.35%22%3EImage%3C%2Ftext%3E%3C%2Fg%3E%3C%2Fg%3E%3C%2Fsvg%3E" alt="Card image">
 			      				  <div class="card-body" style="padding: 5px;">
 			      				    
 			      				   <small> <a href="https://bootswatch.com/lux/#" class="card-link">Card link</a></small>
 			      				  
 			      				  </div>
 			      				  <div class="card-footer text-muted" style="padding: 7px;">
 			      				    2 days ago
 			      				  </div>
 			      				</div>

 			      			</div>
 			      		</div>

 			      		<hr>

 			      	</div>
 			      </div>


 			  </div>
 		


 		
		</div>
 			
	<!--</div> -->