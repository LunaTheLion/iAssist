<div class="container mt-5">

	
	
		<div class="row">
		<div class="col-lg-3">
		</div>
		<div class="col-lg-6">
			<h2>Skills Category</h2>

			<div class="row"> 
				<div class="col-lg-12">
					<div class="form-group">
				      <label for="category">Category</label>
				      <select class="form-control form-control-sm" id="category" name="Category" required="required">
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
			</div>
		
			<div class="row">
				<div class="col-lg-12">
					<div class="form-group">
				 
				      <select class="form-control form-control-sm hide VAA" name="subcategory" id="VAA">
				        <option>White Board &amp; Animated </option>
				        <option>Explainers</option>
				        <option>Intros &amp; Animated Logos</option>
				        <option>Promotional Videos</option>
				        <option>Editing &amp; Post Production</option>
				        <option>Lyrics &amp; Music Videos </option>
				        <option>Spokesperson Videos</option>
				        <option>Animate Characters &amp; Modeling</option>
				        <option>Short Video Ads</option>
				        <option>Live Action Explainers</option>
				        <option>Others</option>   
				      </select>
				    
				    <select class="form-control form-control-sm hide GAD" name="subcategory" id="GAD">
				        <option>Logo Design</option>
				        <option>Business Cards &amp; Stationery </option>
				        <option>Illustration</option>
				        <option>Cartoons &amp; Caricatures</option>
				        <option>Flyers &amp; Posters</option>
				        <option>Book Cover an d Packaging</option>
				        <option>Web &amp; Mobile Design</option>
				        <option>Socila Media Design</option>
				        <option>Banner Ads</option>
				        <option>Photoshp Editing</option>
				        <option>3D &amp; 2D Models</option>
				        <option>T-shirts</option>
				        <option>Presentation Design</option>
				        <option>Infographics</option>
				        <option>Vector Tracing</option>
				        <option>Invitations</option>
				        <option>Other </option>
				       </select>
				 
				      <select class="form-control form-control-sm hide DM" name="subcategory" id="DM">
				        <option>Social Media Marketing</option>
				        <option>SEO</option>
				        <option>Content Marketing</option>
				        <option>Video Marketing</option>
				        <option>Email Marketing</option>
				        <option>Search &amp; Display Marketing</option>
				        <option>Marketing Strategy</option>
				        <option>Web Analytics</option>
				        <option>Influencer Marketing</option>
				        <option>local Listings</option>
				        <option>Domain Research</option>
				        <option>E-commerce Marketing</option>
				        <option>Mobile Advertising</option>
				        <option>Music Poromotion</option>
				        <option>Web Traffic</option>
				        <option>Other</option>
				      </select>
				  
				      <select class="form-control form-control-sm hide WAT" name="subcategory" id="WAT">
				         <option>Resumes &amp; Cover Letters</option>
				         <option>Proofreading &amp; Editing</option>
				         <option>Translation</option>
				         <option>Creative Writing</option>
				         <option>Business Copywriting</option>
				         <option>Business Summaries</option>
				         <option>Articles &amp; Blog Posts</option>
				         <option>Press Releases</option>
				         <option>Transcription</option>
				         <option>Legal Writing</option>
				         <option>Other</option>
				      </select>
				    
				      <select class="form-control form-control-sm hide MAA" name="subcategory" id="MAA">
				        <option>Voice Over</option>
				        <option>Mixing &amp; Mastering</option>
				        <option>Produces &amp; Composers</option>
				        <option>Singer-Songwriters</option>
				        <option>Session Musicians &amp; Singers</option>
				        <option>Jingles &amp; Drop</option>
				        <option>Sound Effects</option>
				        <option>Others</option>
				      </select>
				    
				      <select class="form-control form-control-sm hide PAT" name="subcategory" id="PAT">
				        <option>WordPress</option>
				        <option>Website Builders &amp; CMS</option>
				        <option>Web Programming</option>
				        <option>Ecommerce</option>
				        <option>Mobile Apps &amp; Web</option>
				        <option>Desktop Applications</option>
				        <option>Support &amp; IT</option>
				        <option>Chatbots</option>
				        <option>Data Analysis &amp; Reports</option>
				        <option>Convert Files</option>
				        <option>Databases</option>
				        <option>User Testing</option>
				        <option>QA</option>
				        <option>Others</option>
				      </select>
				  
				      <select class="form-control form-control-sm hide BUS" name="subcategory" id="BUS">
				        <option>Virtual Assistant</option>
				        <option>Market Research</option>
				        <option>Business Plans</option>
				        <option>Br&amp;ing Services</option>
				        <option>Legal Consulting</option>
				        <option>Financial Consulting</option>
				        <option>Business Tips</option>
				        <option>Presentations</option>
				        <option>Carrer Advice</option>
				        <option>Flyer Distribution</option>
				        <option>Other</option>
				      </select>
				     
				      <select class="form-control form-control-sm hide FAL" name="subcategory" id="FAL">
				        <option>Online Lessons</option>
				        <option>Arts &amp; Crafts</option>
				        <option>Health, Nutrition &amp; Fitness</option>
				        <option>Astrology &amp; Readings</option>
				        <option>Spiritual &amp; Healing</option>
				        <option>Family &amp; Genealogy</option>
				        <option>Gaming</option>
				        <option>Greetings Cards &amp; Videos</option>
				        <option>Viral Videos</option>
				        <option>Pranks &amp; Stunt</option>
				        <option>Celebrity Impersonators</option>
				        <option>Collectibles</option>
				        <option>Global Culture</option>
				        <option>Others</option>
				      </select>
				    </div>
				</div>
			</div>
		</div>
		<a class="btn btn-primary btn-outline btn-block" href="javascript:window.history.go(-1);">Back</a>
	</div>
</div>

s

<!--Lagay sa footer-->
 <script type="text/javascript"> //for hidden elements
        $(document).ready(function(){
            $("select[name=Category]").change(function(){
                $(this).find("option:selected").each(function(){
                    var optionValue = $(this).attr("value");
                    if(optionValue){
                        $(".hide").not("." + optionValue).hide();                        
                        $("." + optionValue).show();
                    } else{
                        $(".hide").hide();
                    }
                });
            }).change();
        });
    </script>
			
				
