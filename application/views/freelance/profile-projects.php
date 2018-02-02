<div class="container mt-5">

	<br>
		<div class="row">
		<div class="col-lg-1">
		</div>
		<div class="col-lg-8">
			<h2>Projects</h2>
			<h6>Upload your works here to prove how great you are!</h6>
				<br><br>	
			<div class="container">
				
					<?php echo form_open_multipart('users/validate_projects');?>
					<div class="form-group">
						<input class="form-control" type="text" placeholder="Service Title" name="title" value="<?php echo $this->session->userdata('title');?>"></input>
						<p></p>
						<div class="row">
							
							<div class="col-4">
								<div class="form-group">
								      <label for="category">Category</label>
								      <select class="form-control" style="padding-right: 20px;padding-left: 20px;" id="category" name="category"  required="" >
								      	<option><?php echo $this->session->userdata('category');?></option>
								        <option value="Programming & Tech">Programming &amp; Tech</option>
								        <option value="Graphics & Design">Graphics &amp; Design</option>
								        <option value="Fun & Entertainment">Fun &amp; Entertainment</option>
								        <option value="Video & Animation">Video &amp; Animation</option>
								        <option value="Business">Business</option>
								        <option value="Digital Marketing">Digital Marketing</option>
								        <option value="Writing & Translation">Writing &amp; Translation</option>
								        <option value="Music & Audio">Music &amp; Audio</option>
								      </select>
								    </div>	

							</div>
							<div class="col-4">
								<div class="form-group">
								      <label for="category">Sub-Category</label>
								      <select class="form-control" required style="padding-right: 20px;padding-left: 20px;" id="category" name="subcategory"  >
								      	<option><?php echo $this->session->userdata('subcategory');?></option>
								        <option value="Programming & Tech">Programming &amp; Tech</option>
								        <option value="Graphics & Design">Graphics &amp; Design</option>
								        <option value="Fun & Entertainment">Fun &amp; Entertainment</option>
								        <option value="Video & Animation">Video &amp; Animation</option>
								        <option value="Business">Business</option>
								        <option value="Digital Marketing">Digital Marketing</option>
								        <option value="Writing & Translation">Writing &amp; Translation</option>
								        <option value="Music & Audio">Music &amp; Audio</option>
								      </select>
								    </div>	
							</div>
							
						</div>
						
						<p></p>
						<div class="row">
							<div class="col-6">
								<div class="form-group">
								      <label for="category">Service Type</label>
								      <select class="form-control" required  style="padding-right: 20px;padding-left: 20px;" id="category" name="service" >
								      	<option><?php echo $this->session->userdata('service');?></option>
								        <option value="Programming & Tech">Programming &amp; Tech</option>
								        <option value="Graphics & Design">Graphics &amp; Design</option>
								        <option value="Fun & Entertainment">Fun &amp; Entertainment</option>
								        <option value="Video & Animation">Video &amp; Animation</option>
								        <option value="Business">Business</option>
								        <option value="Digital Marketing">Digital Marketing</option>
								        <option value="Writing & Translation">Writing &amp; Translation</option>
								        <option value="Music & Audio">Music &amp; Audio</option>
								      </select>
								    </div>
							</div>
						</div>
						 <label for="search"  >Search</label>
						<input class="form-control" type="text" data-role="tagsinput" id="search" placeholder="Search Keywords" name="search"  value="<?php echo $this->session->userdata('search');?>" required></input>
						<p></p>
						<hr>
						<p></p>
						<div class="form-group">
						      <label for="exampleTextarea"  >Describe your offer</label>
						     <textarea class="form-control" required id="exampleTextarea" name="offer" rows="3" style="z-index: auto; position: relative; line-height: 21px; font-size: 14px; transition: none; background: transparent !important;" ><?php echo $this->session->userdata('offer');?></textarea>
						    </div>
						<p></p>
						<div class="row">
							<div class="col-5">
								<div class="form-group">
								      <label for="category">Delivery Time</label>
								      <select class="form-control" required  style="padding-right: 20px;padding-left: 20px;" id="category" name="delivery">
								      	<option value="<?php echo $this->session->userdata('delivery');?>"></option>
								       <option value="1 Days">1 Day Delivery</option>
								       <option value="2 Days">2 Days Delivery</option>
								       <option value="3 Days">3 Days Delivery</option>
								       <option value="4 Days">4 Days Delivery</option>
								       <option value="5 Days">5 Days Delivery</option>
								       <option value="6 Days">6 Days Delivery</option>
								       <option value="7 Days">7 Days Delivery</option>
								       <option value="8 Days">8 Days Delivery</option>
								       <option value="9 Days">9 Days Delivery</option>
								       <option value="10 Dasy">10 Days Delivery</option>
								       <option value="11 Days">11 Days Delivery</option>
								       <option value="12 Days">12 Days Delivery</option>
								       <option value="13 Days">13 Days Delivery</option>
								       <option value="14 Days">14 Days Delivery</option>
								       <option value="15 Days">15 Days Delivery</option>
								       <option value="16 Days">16 Days Delivery</option>
								       <option value="17 Days">17 Days Delivery</option>
								       <option value="18 Days">18 Days Delivery</option>
								       <option value="19 Days">19 Days Delivery</option>
								       <option value="20 Days">20 Days Delivery</option>
								       <option value="21 Days">21 Days Delivery</option>
								       <option value="22 Days">22 Days Delivery</option>
								       <option value="23 Days">23 Days Delivery</option>
								       <option value="24 Days">14 Days Delivery</option>
								       <option value="25 Days">25 Days Delivery</option>
								       <option value="26 Days">26 Days Delivery</option>
								       <option value="27 Days">27 Days Delivery</option>
								       <option value="28 Days">28 Days Delivery</option>
								       <option value="29 Days">29 Days Delivery</option>
								      </select>
								    </div>
							</div>
						</div>	
						<div class="form-group">
						      <label for="exampleTextarea"  >Briefly Describe your Service</label>
						     <textarea class="form-control" required id="exampleTextarea" name="service" rows="3" style="z-index: auto; position: relative; line-height: 21px; font-size: 14px; transition: none; background: transparent !important;"><?php echo $this->session->userdata('service');?></textarea>


						    </div>
						<p></p>
						<div class="form-group">
						      <label for="exampleTextarea"  >Tell your future client what you need to get started.</label>
						     <textarea class="form-control" required id="exampleTextarea" name="requirements" rows="3" style="z-index: auto; position: relative; line-height: 21px; font-size: 14px; transition: none; background: transparent !important;"><?php echo $this->session->userdata('requirements');?></textarea>


						    </div>
						<p></p>
						<hr>
						<!-- <div class="form-group">
							<label for="userfile" class="text-primary">Upload an image to make your prject more appealing.</label><br>
						     <input type="file" name="userfile" size="20" />
						    </div> -->
						<p></p>
						<hr>
					</div>




				
			</div>

			<div class="row">
				<div class="col-lg-3"></div>
				<div class="col-lg-3">
					<a class="btn btn-primary btn-outline btn-block" href="javascript:window.history.go(-1);">Back</a>
				</div>
				<div class="col-lg-3">
					
					<button class="btn btn-success btn-outline btn-block" type="submit">Next</button>
				</form>
<!-- 
				<div class="container mt-5">
					<hr>
					

					<!-- <?php echo form_open_multipart('users/do_upload');?> -->

					

					<!--<br /><br />

					<input type="submit" class="btn btn-primary-outline" value="upload" /></form>

					<hr>

					
				</div> -->

				</div>
				<div class="col-lg-3"></div>
			</div>			
		</div>
		<div class="col-lg-3">			
		</div>
	</div>
</div>