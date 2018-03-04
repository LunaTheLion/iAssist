<title>Create Project</title>
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
				
					<?php echo form_open('users/validate_projects');?>

					<div class="form-group ">
						<!-- <input class="form-control" type="text" placeholder="Service Title" name="title" value=""></input> -->
						<!-- <span class=""> I can</span> -->
						<p></p>
						 <textarea id="myTextarea" rows="2" cols="2" class="form-control" required name="title" style="font-size:32pt">I can <?php echo $this->session->userdata('title');?></textarea>
						<!-- <div class="textarea-container" onclick="document.getElementById('myTextarea').focus()">
						</div> -->
						<br>
						<div class="row">
							
							<div class="col-4">
									<div class="form-group">
								      <label for="category">Category</label>
								      <select class="form-control form-control-sm" id="category" name="Category" >
								      	<option value="">
								      		<?php
								      			$category = $this->session->userdata('category');
								      			if(!empty($category))
								      			{
								      				echo $category;
								      			}
								      			else
								      			{
								      				echo "-- SELECT CATEGORY --";
								      			}
								      		?>
								      	</option>
								        <option value="VAA">Video &amp; Animation</option>
								        <option value="GAD">Graphics &amp; Design</option>
								        <option value="DM">Digital Marketing</option>
								        <option value="WAT">Writing &amp; Translation</option>
								        <option value="MAA">Music &amp; Audio</option>
								        <option value="PAT">Programming &amp; Tech</option>
								        <option value="BUS">Business</option>
								        <option value="FAL">Fun &amp; Lifestyel</option>
								      </select>
								    </div>

							</div>
							<div class="col-4">

									<div class="form-group">
								 	<label for="subcategory">Sub-Category</label>
								      <select class="form-control form-control-sm hide VAA" name="subcategory" id="VAA"  style="padding-right: 20px;padding-left: 20px;">
								      	<option value="" selecteD>
								      		<?php
								      			$sub = $this->session->userdata('subcategory');
								      			if(!empty($sub))
								      			{
								      				echo $sub;
								      			}
								      			else
								      			{
								      				echo "-- SELECT SUBCATEGORY --";
								      			}

								      		?>
								      	</option>
								        <option value="White Board &amp; Animated">White Board &amp; Animated </option>
								        <option value="Explainers">Explainers</option>
								        <option value="Intros &amp; Animated Logos">Intros &amp; Animated Logos</option>
								        <option value="Promotional Videos">Promotional Videos</option>
								        <option value="Editing &amp; Post Production">Editing &amp; Post Production</option>
								        <option value="Lyrics &amp; Music Videos">Lyrics &amp; Music Videos </option>
								        <option value="Spokesperson Videos">Spokesperson Videos</option>
								        <option value="Animate Characters &amp; Modeling">Animate Characters &amp; Modeling</option>
								        <option value="Short Video Ads">Short Video Ads</option>
								        <option value="Live Action Explainers">Live Action Explainers</option>
								        <option value="Others">Others</option>   
								      </select>
								    
								    <select class="form-control form-control-sm hide GAD" name="subcategory" id="GAD"  style="padding-right: 20px;padding-left: 20px;">
								        <option value="Logo Design">Logo Design</option>
								        <option value="Business Cards &amp; Stationery">Business Cards &amp; Stationery </option>
								        <option value="Illustration">Illustration</option>
								        <option value="Cartoons &amp; Caricatures">Cartoons &amp; Caricatures</option>
								        <option value="Flyers &amp; Posters">Flyers &amp; Posters</option>
								        <option value="Book Cover an d Packaging">Book Cover and Packaging</option>
								        <option value="Web &amp; Mobile Design">Web &amp; Mobile Design</option>
								        <option value="Socila Media Design">Socila Media Design</option>
								        <option value="Banner Ads">Banner Ads</option>
								        <option value="Photoshp Editing">Photoshp Editing</option>
								        <option value="3D &amp; 2D Models">3D &amp; 2D Models</option>
								        <option value="T-shirts">T-shirts</option>
								        <option value="Presentation Design">Presentation Design</option>
								        <option value="Infographics">Infographics</option>
								        <option value="Vector Tracing">Vector Tracing</option>
								        <option value="Invitations">Invitations</option>
								        <option value="Other">Other </option>
								       </select>
								 
								      <select class="form-control form-control-sm hide DM" name="subcategory" id="DM" style="padding-right: 20px;padding-left: 20px;">
								        <option value="Social Media Marketing">Social Media Marketing</option>
								        <option value="SEO">SEO</option>
								        <option value="Content Marketing">Content Marketing</option>
								        <option value="Video Marketing">Video Marketing</option>
								        <option value="Email Marketing">Email Marketing</option>
								        <option value="Search &amp; Display Marketing">Search &amp; Display Marketing</option>
								        <option value="Marketing Strategy">Marketing Strategy</option>
								        <option value="Web Analytics">Web Analytics</option>
								        <option value="Influencer Marketing">Influencer Marketing</option>
								        <option value="local Listings">local Listings</option>
								        <option value="Domain Research">Domain Research</option>
								        <option value="E-commerce Marketing">E-commerce Marketing</option>
								        <option value="Mobile Advertising">Mobile Advertising</option>
								        <option value="Music Poromotion">Music Poromotion</option>
								        <option value="Web Traffic">Web Traffic</option>
								        <option value="Other">Other</option>
								      </select>
								  
								      <select class="form-control form-control-sm hide WAT" name="subcategory" id="WAT" style="padding-right: 20px;padding-left: 20px;">
								         <option value="Resumes &amp; Cover Letters">Resumes &amp; Cover Letters</option>
								         <option value="Proofreading &amp; Editin">Proofreading &amp; Editing</option>
								         <option value="Translation">Translation</option>
								         <option value="Creative Writing">Creative Writing</option>
								         <option value="Business Copywriting">Business Copywriting</option>
								         <option value="Business Summaries">Business Summaries</option>
								         <option value="Articles &amp; Blog Posts">Articles &amp; Blog Posts</option>
								         <option value="Press Releases">Press Releases</option>
								         <option value="Transcription">Transcription</option>
								         <option value="Legal Writing">Legal Writing</option>
								         <option value="Other">Other</option>
								      </select>
								    
								      <select class="form-control form-control-sm hide MAA" name="subcategory" id="MAA" style="padding-right: 20px;padding-left: 20px;">
								        <option value="Voice Over">Voice Over</option>
								        <option value="Mixing &amp; Mastering">Mixing &amp; Mastering</option>
								        <option value="Produces &amp; Composers">Produces &amp; Composers</option>
								        <option value="Singer-Songwriters">Singer-Songwriters</option>
								        <option value="Session Musicians &amp; Singers">Session Musicians &amp; Singers</option>
								        <option value="Jingles &amp; Drop">Jingles &amp; Drop</option>
								        <option value="Sound Effects">Sound Effects</option>
								        <option value="Others">Others</option>
								      </select>
								    
								      <select class="form-control form-control-sm hide PAT" name="subcategory" id="PAT"  style="padding-right: 20px;padding-left: 20px;">
								        <option value="WordPress">WordPress</option>
								        <option value="Website Builders &amp; CMS">Website Builders &amp; CMS</option>
								        <option value="Web Programmin">Web Programming</option>
								        <option value="Ecommerce">Ecommerce</option>
								        <option value="Mobile Apps &amp; Web">Mobile Apps &amp; Web</option>
								        <option value="Desktop Applications">Desktop Applications</option>
								        <option value="Support &amp; IT">Support &amp; IT</option>
								        <option value="Chatbots">Chatbots</option>
								        <option value="Data Analysis &amp; Reports">Data Analysis &amp; Reports</option>
								        <option value="Convert Files">Convert Files</option>
								        <option value="Databases">Databases</option>
								        <option value="User Testing">User Testing</option>
								        <option value="QA">QA</option>
								        <option value="Others">Others</option>
								      </select>
								  
								      <select class="form-control form-control-sm hide BUS" name="subcategory" id="BUS"  style="padding-right: 20px;padding-left: 20px;">
								        <option value="Virtual Assistant">Virtual Assistant</option>
								        <option value="Market Research">Market Research</option>
								        <option value="Business Plans">Business Plans</option>
								        <option value="Branding Services">Branding Services</option>
								        <option value="Legal Consulting">Legal Consulting</option>
								        <option value="Financial Consulting">Financial Consulting</option>
								        <option value="Business Tips">Business Tips</option>
								        <option value="Presentations">Presentations</option>
								        <option value="Carrer Advic">Carrer Advice</option>
								        <option value="Flyer Distribution">Flyer Distribution</option>
								        <option value="Other">Other</option>
								      </select>
								     
								      <select class="form-control form-control-sm hide FAL" name="subcategory" id="FAL"  style="padding-right: 20px;padding-left: 20px;">
								        <option value="Online Lessons">Online Lessons</option>
								        <option value="Arts &amp; Crafts">Arts &amp; Crafts</option>
								        <option value="Health, Nutrition &amp; Fitness">Health, Nutrition &amp; Fitness</option>
								        <option value="Astrology &amp; Readings">Astrology &amp; Readings</option>
								        <option value="Spiritual &amp; Healing">Spiritual &amp; Healing</option>
								        <option value="Family &amp; Genealogy">Family &amp; Genealogy</option>
								        <option value="Gaming">Gaming</option>
								        <option value="Greetings Cards &amp; Videos">Greetings Cards &amp; Videos</option>
								        <option value="Viral Videos">Viral Videos</option>
								        <option value="Pranks &amp; Stunt">Pranks &amp; Stunt</option>
								        <option value="Celebrity Impersonators">Celebrity Impersonators</option>
								        <option value="Collectibles">Collectibles</option>
								        <option value="Global Culture">Global Culture</option>
								        <option value="Others">Others</option>
								      </select>
								    </div>

							
							</div>
							
						</div>
						
						<p></p>
						<div class="row">
							<div class="col-6">
								<div class="form-group">
								      <label for="type">Service Type</label>
								      <select class="form-control" id="service"  style="padding-right: 20px;padding-left: 20px;" name="service" >
								      	<option selected value="

								      			<?php 
								      				$da = $this->session->userdata('type');
								      				if(empty($da))
								      				{
								      					echo " ";
								      				}
								      				else
								      				{
								      					echo $da;
								      				}


								      			?>
								      	">
								      		<?php 
								      			$da = $this->session->userdata('type');
								      			if(empty($da))
								      			{
								      				echo "Select Service Type";
								      			}
								      			else
								      			{
								      				echo $da;
								      			}
								      		?>
								      		</option>
								        
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
						 <label for="search">Search</label>
						
						<div class="tagsinput" data-name="tagsinput">
							<!-- <span class="tag">CSS<span class="close"></span></span>
							<span class="tag">JavaScript<span class="close"></span></span>
							<span class="tag">HTML<span class="close"></span></span> -->
							<input type="hidden" name="tagsinput" ></input>
							<input type="text" class="main-input"  id="search" placeholder="Search Keywords" name="search"  value="<?php echo $this->session->userdata('search');?>" ></input>

						</div>

						




						<p></p>
						<hr>
						<p></p>
						<div class="form-group">
						      <label for="exampleTextarea"  >Describe your offer</label>
						     <textarea class="form-control" placeholder="What does your offer have"   id="exampleTextarea" name="offer" rows="3" style="z-index: auto; position: relative; line-height: 21px; font-size: 14px; transition: none; background: transparent !important;" ><?php echo $this->session->userdata('offer');?> </textarea>
						    </div>
						<p></p>
						<div class="row">
							<div class="col-5">
								<div class="form-group">
								      <label for="category">Delivery Time</label>
								      <select class="form-control"   style="padding-right: 20px;padding-left: 20px;" id="category" name="delivery">
								      	<option selected value="<?php 
								      			$b = $this->session->userdata('delivery');
								      			if(empty($b))
								      			{
								      				echo " ";
								      			}
								      			else
								      			{
								      				echo $b;
								      			}


								      		?>">
								      		<?php 
								      			$a = $this->session->userdata('delivery');
								      			if(empty($a))
								      			{
								      				echo "Select Delivery Type";
								      			}
								      			else
								      			{
								      				echo $a;
								      			}


								      		?>
								      	</option>
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
						     <textarea class="form-control"  id="exampleTextarea" name="service" rows="6" style="z-index: auto; position: relative; line-height: 21px; font-size: 14px; transition: none; background: transparent !important;"><?php echo $this->session->userdata('service');?></textarea>


						    </div>
						<p></p>
						<div class="form-group">
						      <label for="exampleTextarea"  >Tell your future client what you need to get started.</label>
						     <textarea class="form-control"  id="exampleTextarea" name="requirements" rows="3" style="z-index: auto; position: relative; line-height: 21px; font-size: 14px; transition: none; background: transparent !important;"><?php echo $this->session->userdata('requirements');?></textarea>


						    </div>
						<p></p>
						<hr>
						<!-- <div class="form-group">
							<label for="userfile" class="text-primary">Upload an image to make your prject more appealing.</label><br>
						     <input type="file" name="userfile" size="20" />
						    </div> -->
						    <label for="price">Pricing</label>
						<select class="form-control" id="price" name="price">
							<option value="30">P 30.00</option>
							<option value="40">P 40.00</option>
							<option value="50">P 50.00</option>
							<option value="60">P 60.00</option>
							<option value="70">P 70.00</option>
							<option value=""></option>

						</select>



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
					<!-- <a class="btn btn-success btn-outline btn-block" href="<?php echo site_url('users/ye')?>" type="submit">ye</a> -->
				</form>


				</div>
				<div class="col-lg-3"></div>
			</div>			
		</div>
		<div class="col-lg-3">	
		<div class="container ">
			<a class="btn btn-success btn-block" href="<?php echo site_url('users/project_pricing')?>" >Make a Package</a>
		</div>		
		</div>
	</div>
</div>