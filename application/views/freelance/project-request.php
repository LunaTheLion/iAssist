<title>Request a Service</title>

<div class="jumbotron">
	 <form method="Post" action="<?php echo base_url('search/validate_request_service')?>"> 
<div class="container ml-5" >
	
			
	<div class="row">
		<div class="col-md-8">
			<div class="card border-success">
			 <h3 class="card-header text-center">Post a Request to Freelance Community</h3>
			 <div class="card-body">
			 	<p class="text-primary">Describe the service what you are looking for</p>
			 	<textarea class="form-control" name="find" rows="4" cols="5" placeholder="Im Looking for ... " required=""><?php echo $this->session->userdata('request')?></textarea>
			 	<!-- <label for="requestFile">Attach File</label> <br>
			    <input type="file" id="requestFile" name="requestFile"> -->
			    <hr>
			    <p class="text-primary">Choose your Category:</p>
			    <div class="row">
			    	<div class="col-md-6" >
			    		<select class="form-control form-control-sm" id="category" name="category" >
			    		<!-- <option value="<?php
			    				$cat = $this->session->userdata('request-category');
			    				if(!empty($cat))
			    				{
			    					echo $cat;
			    				}
			    				else
			    				{
			    					echo " ";
			    				}

			    			?>">
			    			<?php
			    				$cat = $this->session->userdata('request-category');
			    				if(!empty($cat))
			    				{
			    					echo $cat;
			    				}
			    				else
			    				{
			    					echo "-- SELECT CATEGORY --";
			    				}

			    			?>
			    		</option> -->
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
			    	<div class="col-md-6">
			    			<div class="form-group">
			    		 	
			    		      <select class="form-control form-control-sm hide VAA" name="sub-category" id="VAA" style="padding-right: 20px;padding-left: 20px;">
			    		      	<!-- <option value="<?php 
			    		      			$sub=$this->session->userdata('request-subcategory');
					    		      	if (!empty($sub))
			    		      			{
			    		      				 echo $sub;
			    		      			}
			    		      			else
			    		      			{
			    		      				echo " ";
			    		      			}

			    		      	?>">
			    		      		<?php
			    		      			$sub = $this->session->userdata('request-subcategory');
			    		      			if(!empty($sub))
			    		      			{
			    		      				echo $sub;
			    		      			}
			    		      			else
			    		      			{
			    		      				echo "-- SELECT SUBCATEGORY --";
			    		      			}

			    		      		?>
			    		      	</option> -->
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
			    		    
			    		    <select class="form-control form-control-sm hide GAD" name="sub-category" id="GAD" style="padding-right: 20px;padding-left: 20px;">
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
			    		 
			    		      <select class="form-control form-control-sm hide DM" name="sub-category" id="DM"  style="padding-right: 20px;padding-left: 20px;">
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
			    		  
			    		      <select class="form-control form-control-sm hide WAT" name="sub-category" id="WAT"  style="padding-right: 20px;padding-left: 20px;">
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
			    		    
			    		      <select class="form-control form-control-sm hide MAA" name="sub-category" id="MAA"   style="padding-right: 20px;padding-left: 20px;">
			    		        <option value="Voice Over">Voice Over</option>
			    		        <option value="Mixing &amp; Mastering">Mixing &amp; Mastering</option>
			    		        <option value="Produces &amp; Composers">Produces &amp; Composers</option>
			    		        <option value="Singer-Songwriters">Singer-Songwriters</option>
			    		        <option value="Session Musicians &amp; Singers">Session Musicians &amp; Singers</option>
			    		        <option value="Jingles &amp; Drop">Jingles &amp; Drop</option>
			    		        <option value="Sound Effects">Sound Effects</option>
			    		        <option value="Others">Others</option>
			    		      </select>
			    		    
			    		      <select class="form-control form-control-sm hide PAT" name="sub-category" id="PAT" style="padding-right: 20px;padding-left: 20px;">
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
			    		  
			    		      <select class="form-control form-control-sm hide BUS" name="sub-category" id="BUS"  style="padding-right: 20px;padding-left: 20px;">
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
			    		     
			    		      <select class="form-control form-control-sm hide FAL" name="sub-category" id="FAL"  style="padding-right: 20px;padding-left: 20px;">
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
			    <hr>
			    <p class="text-primary">When do you want the service to be delivered?</p>

			    <div class="btn-group" required data-toggle="buttons">
			      <label class="btn btn-primary" style="padding-right: 30px;">
			        <input type="radio" name="time" id="option1" value="24 hours"> 24 Hours
			      </label>
			      &nbsp;&nbsp;&nbsp;
			      <label class="btn btn-primary" style="padding-right: 30px;" >
			        <input type="radio" name="time" id="option2" value="3 Days"> 3 Days
			      </label>
			       &nbsp;&nbsp;&nbsp;
			      <label class="btn btn-primary active" style="padding-right: 30px;">
			        <input type="radio" name="time" id="option3" value="7 Days"> 7 Days
			      </label>
			       &nbsp;&nbsp;&nbsp;
			      <label class="btn btn-primary active" style="padding-right: 30px;">
			        <input type="radio" name="time" id="option3" value="Others"> Others
			      </label>
			    </div>

			    <hr>
			    <p class="text-primary">What is your budget for this service?</p>
			    <div class="row">
			    	<div class="col-md-6">
			    		   

		                  <div class="form-group">
		                    <label class="sr-only" for="Amount">Amount (in dollars)</label>
		                    <div class="input-group">
		                      <div class="input-group-addon">$</div>
		                      <input type="text" class="form-control" id="Amount" name="amount" placeholder="Amount" value="<?php echo $this->session->userdata('request-amount')?>">
		                      <div class="input-group-addon">.00</div>
		                    </div>
		                  </div>
		                
			    	</div>

			    	<div class="col-md-4">
			    		<!-- <div class="form-group">
			    		<button type="button" class="btn btn-secondary" data-toggle="tooltip" data-placement="right" title="TOOLTIP" data-original-title="Tooltip on right">Right</button>
			    		</div> -->
			    	</div>
			    </div>



			    <div class="row">
			    	<div class="col-md-10"></div>
			    	<div class="col-md-2">
			    		<input class="btn btn-success" type="submit" value="Post">			
			    	</div>
			    </div>


			  </div>
			  
			
			 
			  
			</div>
		</div>
		<div class="col-md-4"></div>
	</div>

<!-- 		 <div class="modal fade" id="updateProject" tabindex="-1" role="dialog">
				 	    <div class="modal-dialog" role="document">
				 	    	 <form method="POST" action="<?php echo base_url()?>users/update_project" id="user_form"> 
				 	    <form method="POST" id="user_form">
				 	      <div class="modal-content">
				 	        <div class="modal-header">
				 	          <h5 class="modal-title text-center">Update Project</h5>
				 	          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
				 	            <span aria-hidden="true">&times;</span>
				 	          </button>
				 	        </div>
				 	        <div class="modal-body">
				 	          <p class="text-primary">Please input your password to continue</p>
				 	          <input class="form-control p-1 mb-1" type="text" id="username" name="username" value="<?php echo $this->session->userdata('email');?>">
				 	          <input class="form-control mb-1" type="password" required="true" id="password" name="password" placeholder="password">
				 	        </div>
				 	        <div class="modal-footer">
				 	          <input type="submit" class="btn btn-primary" name="action" value="Proceed">
				 	          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
				 	        </div>
				 	      </div>

				 	      </form>
				 	    </div>
				 	</div> -->

</div>
	</form>
	


</div>


