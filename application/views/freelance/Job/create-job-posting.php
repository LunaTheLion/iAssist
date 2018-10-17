<title>iAssist - Create Job Post</title>


<div class="col-lg-8 col-sm-8">
			<div class="card border-primary" style="padding: 10px; border:none;">
				<div class="card" >
					<div class="card-header" style="font-size: 20px;">Create Job Post</div>
				  <div class="card-body" style="padding: 3px;">
				  	<Br>
				  		<div id="post2"  >
				  	<br>
				  		<?php echo form_open_multipart('user/PostJob_with_image') ?>	 
				  		<div class="row">
				  		 <div class="col-lg-3 col-sm-3">	
				  		 		<center><p class="text-primary">Title</p></center>
				  		 </div>
				  		 <div class="col-lg-9 col-sm-9">
				  		 	<input type="hidden" name="TypeOfPost" value="Job">
				  		 	<input type="text" name="title" placeholder="Tell them what you need?" class="form-control" required value="<?php 
				  		 	if(empty($_POST['title']))
				  		 	{
				  		 		echo "";
				  		 	}
				  		 	else{
				  		 		echo $_POST['title'];
				  		 	}
				  		 	 ?>">
				  		 	<?php echo form_error('title');?>    
				  		</div>
				   </div>
				   <br>
				  	<div class="row">
				  	 <div class="col-lg-3 col-sm-3">
				  		 <center><p class="text-primary">Description</p></center>
				  	 </div>
				  	 <div class="col-lg-9 col-sm-9">
				  		 <div class="form-group">
				  		  <textarea class="form-control " name="description" placeholder="Briefly Describe what you need" rows="5" required><?php 
				  		 if(empty($_POST['description']))
				  		 {
				  		 	echo "";
				  		 }
				  		 else{
				  		 	echo $_POST['description'];
				  		 }
				  		  ?></textarea>
				  		 <?php echo form_error('description');?> 
				  		</div>
				   </div>
				  </div>
				  <div class="row">
				   <div class="col-lg-3 col-sm-3">
				  		<center><p class="text-primary" required>Offer</p></center>
				   </div>
				   <div class="col-lg-9 col-sm-9">
				  	 <div class="form-group">
				  		 			  	 <input type="text" name="offer" class="form-control" required value="<?php 
				  		 			  	 if(empty($_POST['offer']))
				  		 			  	 {
				  		 			  	 	echo "";
				  		 			  	 }
				  		 			  	 else{
				  		 			  	 	echo $_POST['offer'];
				  		 			  	 }
				  		 			  	  ?>">
				  		 			  	 <?php echo form_error('offer');?> 
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
				  		 			  			<option value="<?php 
				  		 			  			if(empty($_POST['category']))
				  		 			  			{
				  		 			  				echo "";
				  		 			  			}
				  		 			  			else{
				  		 			  				echo $_POST['category'];
				  		 			  			}
				  		 			  			 ?>">Select Category</option>
				  		 			  			<option value="Video and Animation">Video &amp; Animation</option>
				  		 			  			<option value="Graphics and Design">Graphics &amp; Design</option>
				  		 			  			<option value="Digital Marketing">Digital Marketing</option>
				  		 			  			<option value="Writing and Translation">Writing &amp; Translation</option>
				  		 			  			<option value="Music and Audio">Music &amp; Audio</option>
				  		 			  			<option value="Programming and Tech">Programming &amp; Tech</option>
				  		 			  			<option value="Business">Business</option>
				  		 			  			<option value="Lifestyle">Fun &amp; Lifestyle</option>
				  		 			  	 </select>
				  		 			  	 <?php echo form_error('category');?> 
				  		 			   </div>
				  		 			  </div>
				  		 			  </div>
				  		 	<div class="row">
								<div class="col-lg-3 col-sm-3">
								<center><p class="text-primary" required>Upload Image</p></center>
								</div>
								<div class="col-lg-9 col-sm-9">
								<?php if(isset($error))
								{
									echo '<div class="alert alert-dismissible alert-danger">
								  			<button type="button" class="close" data-dismiss="alert">&times;</button>
								 			<strong>Oh snap!</strong>'.$error.'</div>';
								}
								else if(isset($upload_data))
								{
									echo '<div class="alert alert-dismissible alert-success">
  								<button type="button" class="close" data-dismiss="alert">&times;</button>
 								 <strong>Well done!</strong> You successfully upload an image.
								</div>';
								}

								 ?>
								<input class="form-control" type="file" name="userfile" size="20"/>
								</div>
							</div>
							<br>
							<input type="submit" value="Submit" class="btn btn-info center">
							<br>
							<a class="btn btn-primary center" href="<?php echo base_url('user/jobPosting') ?>" >Back to Job</a>
				  		 	</form>	  		
				  		</div> 	

				  		<div>
				  		</div>		
				  </div>
				</div>
			</div>
		</div>
	</div>	
</div>