<title>Profile</title>
<div class="jumbotron" style="padding-top: 100px; padding-bottom: 100px; margin: 0px;">
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

<div class="jumbotron p-5" style="background-color: #D3D3D3; margin: 0px;">

			<div class="row">
				<div class="col-md-2"></div>
				<div class="col-md-3">
					<a href="<?php echo base_url("users/upload_profile")?>"><img class="img-circle" src="<?php 
							$pic = $this->session->userdata('profile_pic');
							if( !empty($pic))
							{
								echo site_url("uploads/$pic");
							}
							else
								echo site_url("uploads/pic.jpg");?>" width="210" height="180">
					</a>
				</div>
				
				<div class="col-md-6">
					<div class="container">
						<h3 class="text-center" style="font-style: initial;">About Me</h3>
						

						<?php 
						 if(!empty($this->session->userdata('about_me')))
						 {
						 	
						 	// echo '<div class="container-fluid" style="background-color: #FFFFFF;height: 20px; width: 80px; padding: 20px;">
		    		// 	  	<p class="text-primary text-center">';
		      // 				

		      				echo ' <div class="container-fluid mb-4" id="AboutDiv" style="background-color: #FFFFFF;height: 100%; width: 100%; padding:15px;">
		    		<p class="text-primary text-center">'.$this->session->userdata('about_me').'
		    			 
		    		</p><a data-toggle="modal" data-target="#aboutMe"><p class="text-right" style="margin:0px;">Edit</p></a>
		    	</div>';
		    		
						 }
						 else
						 {
						 	echo '<h6 class="text-center">Write a simple introduction about yourself <a data-toggle="modal" data-target="#aboutMe">here!</a></h6>';
						 }

						?>
							


						  <div class="modal fade" id="aboutMe" role="dialog">
						    <div class="modal-dialog" role="document">
						    		<form method="POST" id="about_form">
						      <div class="modal-content">
						        <div class="modal-header">
						          <h5 class="modal-title text-center">About Me</h5>
						          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
						            <span aria-hidden="true">&times;</span>
						          </button>
						        </div>
						        <div class="modal-body">
						          <p class="text-primary">Describe yourself in a few lines</p>
						          <input class="form-control p-1 mb-1" type="text" id="email" name="email" value="<?php echo $this->session->userdata('email');?>" hidden="">
						          <textarea class="form-control mb-1" id="about" name="about" rows="4" cols="50" maxlength="300"><?php
						          if(!empty($this->session->userdata('about_me')))
						          {
						          	echo $this->session->userdata('about_me');
						          }
						          else
						          {
						          	echo "We suggest to write at least a sentence ";
						          }
						          ?></textarea>
						        </div>
						        <div class="modal-footer">
						          <input type="submit" class="btn btn-primary" name="action" value="Proceed">
						          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
						        </div>
						      </div>

						       </form>
						    </div>
						</div>



						<div class="row">
							
							<div class="col-sm-6">
								<a class="btn btn-primary btn-block" href="#"> My Resume</a>
							</div>
							<div class="col-sm-6">
								<a class="btn  btn-outline-primary btn-block" href="#"> Hire Me</a>
							</div>
							

						</div>
					</div>
				</div>
				<div class="col-md-2"></div>
			</div>


			
</div>

<div class="container mt-5">
	<div class="row">
		
		<div class="col-md-4">
			<h4 class="text-center"><a href="<?php echo base_url('users/education')?>">Education &amp; Jobs</a></h4>
			<p></p>
			<label><h6 class="text-muted mb-0">School: </h6></label><br>
			<p class="text-primary font-weight-bold" style="margin-bottom: 2px;" ><?php echo $this->session->userdata('school');?></p>
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
				if( $skill == 'Beginner')
				{
					echo "<div class='progress'>
			  <div class='progress-bar' role='progressbar' style='width: 40%;' aria-valuenow='25' aria-valuemin='0' aria-valuemax='100'></div>
			</div>";
				}
				elseif( $skill == 'Competent')
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
	<hr>
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
				     <p class="card-text text-center" style="margin:2px;">
				    	<?php $date = $row->project_date_posted; echo date("M j, Y, g:i",strtotime($date))?></p>
				  
				   	<h6 class="text-center text-primary" style="margin:3px";><?php echo $row->project_title;?></h6>
				  </div>
				 
				</div>
			</div>

		<?php endforeach; ?>

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

