
		 	
				<br>
				<form action="" method="Post" id="JobForm" >
				 <div class="row">
				 	<div class="col-lg-3 col-sm-3">	
				    <center><p class="text-primary">Title</p></center>
				  </div>
				  <div class="col-lg-9 col-sm-9">
				  	<input type="hidden" name="TypeOfPost" value="Job">
				  	<input type="text" name="title" placeholder="What are you looking for?" class="form-control" required>
				  			    
				  </div>
				 </div>
				 <br>
				 <div class="row">
				  <div class="col-lg-3 col-sm-3">
				   <center><p class="text-primary">Description</p></center>
				  </div>
				  <div class="col-lg-9 col-sm-9">
				  	<div class="form-group">
				  	 <textarea class="form-control " name="description" placeholder="Briefly Describe what you are looking for" rows="5" required></textarea>
				  	</div>
				  </div>
				 </div>
				 <div class="row">
				  <div class="col-lg-3 col-sm-3">
				  	<center><p class="text-primary" required>Offer</p></center>
				  </div>
				  <div class="col-lg-9 col-sm-9">
				   <div class="form-group">
				  	 <input type="text" name="offer" class="form-control" required>
				   </div>
				  </div>
				 </div>
				 <div class="row">
				  <div class="col-lg-3 col-sm-3">
				  	<center><p class="text-primary" required>Category</p></center>
				  </div>
				  <div class="col-lg-9 col-sm-9">
				  	<div class="form-group">
				  	<select class="form-control" name="category">
				  			<option value="">Select Category</option>
				  			<option value="Video and Animation">Video &amp; Animation</option>
				  			<option value="Graphics and Design">Graphics &amp; Design</option>
				  			<option value="Digital Marketing">Digital Marketing</option>
				  			<option value="Writing and Translation">Writing &amp; Translation</option>
				  			<option value="Music and Audio">Music &amp; Audio</option>
				  			<option value="Programming and Tech">Programming &amp; Tech</option>
				  			<option value="Business">Business</option>
				  			<option value="Lifestyle">Fun &amp; Lifestyle</option>
				  	 </select>
				   </div>
				  </div>
				  
				  </div>
				  <div class="row">
				  	<div class="col-lg-3 col-sm-3">
				  		<center><p class="text-primary">Upload a Pic to make it more catchy</p></center>
				  	</div>
				  	<div class="col-lg-9 col-sm-9">
				  		<?php 

								if(isset($error)) 	
								{
									//echo $error;
									echo '<div class="alert alert-dismissible alert-danger">
			  								<button type="button" class="close" data-dismiss="alert">&times;</button>
			 								 <strong>Oh snap!</strong>'.$error.'.
										</div>';
									echo form_open_multipart('user/do_upload');
									echo '<input class="form-control" type="file" name="userfile" size="20"/>';
									echo "<br><br>";
									echo '<div class="row">
									<div class="col-lg-6 col-sm-3">
										<input type="submit" value="upload" class="btn btn-info center">
									</div>
									<div class="col-lg-6 col-sm-3">
										<a href="'.site_url('user/general/'.$this->session->userdata('email')).'" class="btn btn-primary center">Back to Profile</a>
									</div>
								</div>';
									//echo '<input type="submit" value="upload" class="btn btn-info center">';
									//echo "<br><br>";
									//echo '<a href="'.site_url('user/general/'.$this->session->userdata('email')).'" class="btn btn-primary center">Back to Profile</a>';
								}
								else if (isset($upload_data))
								{
									echo '<div class="alert alert-dismissible alert-success">
			  								<button type="button" class="close" data-dismiss="alert">&times;</button>
			 								 <strong>Well done!</strong> You successfully upload an image.
										</div>';

									//echo  anchor(base_url('user/ProfilePic'), 'Upload another file!');
									echo '<div class="row">
									<div class="col-lg-6 col-sm-3">
										<a href="'.base_url('user/ProfilePic').'" class="btn btn-info center">Upload another file</a>
									</div>
									<div class="col-lg-6 col-sm-3">
										<a href="'.site_url('user/general/'.$this->session->userdata('email')).'" class="btn btn-primary center">Back to Profile</a>
									</div>
								</div>';

								
								}
								else
								{
									echo form_open_multipart('user/PostSkill_with_image');
									echo '<input class="form-control" type="file" name="userfile" size="20"/>';
									echo "<br><br>";
									echo '<input type="submit" value="upload" class="btn btn-info center">';
									echo "<br><br>";
									
								}
								?>
				  	</div>
				  </div>
				  		<button class="btn btn-secondary" type="submit" id="btnJob" style=" padding: 7px;float: right; right: 0;" >Post</button>

		</form>