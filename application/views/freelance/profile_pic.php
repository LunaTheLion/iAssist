
		<div class="col-lg-6 col-sm-8">
			<div class="card">
				
				<div class="card-body">
				
				<div class="card" >

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
						echo form_open_multipart('user/do_upload');
						echo '<input class="form-control" type="file" name="userfile" size="20"/>';
						echo "<br><br>";
						echo '<input type="submit" value="upload" class="btn btn-info center">';
						echo "<br><br>";
						echo '<a href="'.site_url('user/general/'.$this->session->userdata('email')).'" class="btn btn-primary center">Back to Profile</a>';
					}
					?>
					<div class="row">
						<div class="col-lg-6 col-sm-3">
							
						</div>
						<div class="col-lg-6 col-sm-3">
							
						</div>
					</div>
					<!-- <?php echo form_open_multipart('user/do_upload');?>
					  <input class="form-control" type="file" name="userfile" size="20"/>
					  <br>
					  <br>
					  <input type="submit" value="upload" class="btn btn-info center">
					  <br>
					  <br> -->

				</div>
			
				</div>
				
			</div>
			<br>
			
			

		


	</div>
	</div>
	


	
</div>




