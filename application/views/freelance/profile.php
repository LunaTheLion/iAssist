 	<div class="row">
 		<div class="col-lg-1"></div>
 		<div class="col-lg-10">
 			<div class="container" style="background-size: 1200px 500px; background-repeat: no-repeat; background-color:#343a40 ;" >
 			
 				<h2 class="text-left text-muted" style="font-style: sans-serif; font-size:3rem; ">
 					<?php echo $this->session->userdata('user_name');?></h2>
 				<p class="text-muted text-left"><?php echo $this->session->userdata('field');?></p>
 				<br><br><br><br><br><br>
 				<h3 class="text-left text-muted" style="font-size:8rem;">&nbsp&nbspHello!</h3>
 				<br>

 			</div>
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
 								<label><h6>Contact #: </h6></label><br>
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
 						<label><h6>School: </h6></label><br>
 						<label><h6>College:</h6></label><br>
 						<label><h6>Course: </h6></label><br>
 						
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
 		<div class="col-lg-1"></div>
 	</div>

 