<title>iAssist - Request</title>

<div class="col-lg-8 col-sm-8">
			<div class="card " style="padding: 10px; border:none;">
				<div class="card" >
				  <div class="card-body" style="padding: 3px;">
				  	<div class="row">
				  		<div class="col-lg-3 col-sm-6" style="padding-right: 0px;">
				  			<h5><button class="btn btn-secondary" id="cp" style="margin-bottom: 0px; ">Create Post</button></h5>
				  	
				  		</div>

				  		<div class="col-lg-3 col-sm-6" id="Ptype">
				  			<select class="form-control center" id="postType" style="margin-top: 5px;">
				   				<option value="Regular">Regular Post</option>
				   				<option value="Job">Job Post</option>
				   			</select>
				  		</div>
				  		
				   	
				  	</div>
				  	<div id="post1">
				  		<form action="<?php echo base_url('user/Post')?>" method="post" id="RegularForm">
				  			<input type="hidden" name="TypeOfPost" value="Regular">
				  			<textarea class="form-control" name="PostDesc" placeholder="Write Something" rows="3" cols="110" style="border:none;margin-bottom: 5px; "></textarea>
				  			<button id="btnPost" type="submit" class="btn btn-secondary" style=" padding: 7px;float: right; right: 0;">Post</button>
				  		</form>
				  	</div>
		 <div id="post2" style="display: none;" >
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
				  		<button class="btn btn-secondary" type="submit" id="btnJob" style=" padding: 7px;float: right; right: 0;" >Post</button>
				  	</form>
				  </div>
				  </div>
					  <!-- <div class="card-footer" style="padding: 0.7px;">
					  	
					  </div> -->
					  
				</div>
			</div>
			<br>
			<div class="card border-primary" style="padding: 10px; border:none;">
				

				<?php foreach ($jobs as $row): ?>
					<br>
					<div class="card">
						<div class="card-body">
							<p class="text-primary" style="font-size: 25px; margin-bottom: 2px;"><a href="<?php echo site_url('user/ViewProject/'.$row->title_slug.'/'.$row->id) ?>" ><?php echo $row->request_category; ?></p></a>
							<p><?php echo $row->request_description; ?></p>
							<button class="btn btn-info" type="submit" style="float:0; right:0px;">Apply</button>
						</div>
				</div>
				<?php endforeach; ?>

			</div>





			<script>
				// window.addEventListener("scroll", function(){
				//             var wrap = document.getElementById('timeline');
				//             var contentHeight = wrap.offsetHeight;
				//             var yOffset = window.pageYOffset; 
				//             var y = yOffset + window.innerHeight;
				//             if(y >= contentHeight)
				//             {
				//                 //load new content
				//                 wrap.innerHTML = wrap.innerHTML + "<div>Random text</div>";
				//             }



					$('#Ptype').hide();
					$('#post1').hide();
				$('#cp').on('click', function(){
					$('#Ptype').toggle();
					$('#post1').toggle();
				});



				$('#postType').change(function(){
					
					var val = $(this).val();
					if(val == 'Regular')
					{//Regular Post
						$('#post1').show();
						$('#post2').hide();
					}
					else
					{//Job Posting
						$('#post1').hide();
						$('#post2').show();
					}
				});
				$('#postType').on('load',function(){
					if(this.val() == 'Regular')
					{
						$('#post1').show();
						$('#post2').hide();
					}
					else
					{
						$('#post1').hide();
						$('#post2').show();
					}
				});

				$('#JobForm').on('submit', function(){
					//alert('Hello');
					event.preventDefault();
					console.log($(this).serialize());
					$.ajax({
						type:'ajax',
						method: 'Post',
						url: '<?php echo base_url()?>user/PostJob',
						data: $(this).serialize(),
						async: false,
						dataType: 'json',
						success: function(data){
							console.log(data);
							alert('Your Job Post will be reviewed by the Admin first, please wait for the confirmation.'+data.post_result);
							$('#JobForm')[0].reset();
							location.reload();
							//showAllPost();
						},
						error: function(){
							alert('Could not save');
						}
					});
				});
			</script>
		</div>
	</div>	
</div>