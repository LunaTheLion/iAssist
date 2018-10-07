<title>iAssist - Skill</title>

<div class="col-lg-8 col-sm-8">
			<div class="card border-primary" style="padding: 10px; border:none;">
				<div class="card" >
				  <div class="card-body" style="padding: 3px;">
				  
				 
		<!--  <div id="post2" style="display: none;" >
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
		</div> -->

				  </div>

				</div>
			</div>
			<br>
			<div class="row">
				<?php foreach ($jobs as $row): ?>
					<br>
					<div class="col-lg-4 col-sm-1">
						<div class="card">
						<div class="card-body">
							<p class="text-primary" style="font-size: 25px; margin-bottom: 2px;"><a href="<?php echo site_url('user/ViewProject/'.$row->title_slug.'/'.$row->post_id) ?>" ><?php echo $row->title; ?></p></a>
							<a href="<?php echo base_url('user/clickbyCategory/'.$row->category); ?>"><?php echo $row->category ?></a> |&nbsp<a href=""><?php echo $row->budget ?></a> 
							<p style="font-size: 20px;"><?php //echo $row->description; ?>
								<?php 
								$string = "Oh squiggly line in my eye fluid. I see you lurking there on the peripheral of my vision. But when I try to look at you, you scurry away. Are you shy, squiggly line? Why only when I ignore you, do you return to the center of my eye? Oh, squiggly line, it's alright, you are sdfsfsfsadfasdfasdfasdfasdfasdfasdfasdfasdfsdf.";
								$string = strip_tags($string);
								if (strlen($string) > 200) {

								    // truncate string
								    $stringCut = substr($string, 0, 200);
								    $endPoint = strrpos($stringCut, ' ');

								    //if the string doesn't contain any space then it will cut without word basis.
								    $string = $endPoint? substr($stringCut, 0, $endPoint):substr($stringCut, 0);
								    $string .= '... <a href="'.base_url('user/clickbyCategory/'.$row->category).'">Read More</a>';
								}
								echo $string;



								 ?>



							</p>
							<a class="btn btn-info" type="submit" style="float:0; right:0px;" a href="<?php echo site_url('user/ViewProject/'.$row->title_slug.'/'.$row->post_id) ?>">Visit</a>
						</div>
					</div>
					</div>
					
				<?php endforeach; ?>
			
			</div>
			<br>
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
					
				$('#cp').on('click', function(){
					$('#post2').toggle();
					$('#pic').toggle();
				});

				// $('#JobForm').on('submit', function(){
				// 	//alert('Hello');
				// 	event.preventDefault();
				// 	console.log($(this).serialize());

				// 	$.ajax({
				// 		type:'ajax',
				// 		method: 'Post',
				// 		url: '<?php echo base_url()?>user/PostSkill',
				// 		data: $(this).serialize(),
				// 		async: false,
				// 		dataType: 'json',
				// 		success: function(data){
				// 			console.log(data);
				// 			$('#post2').hide();
				// 			$('#pic').show();
				// 			// alert('Your Skill Post will be reviewed by the Admin first, please wait for the confirmation.'+data.post_result);
				// 			$('#JobForm')[0].reset();
				// 			location.reload();
				// 			//showAllPost();
				// 		},
				// 		error: function(){
				// 			alert('Could not save');
				// 		}
				// 	});
				// });
			</script>
		</div>
	</div>	
</div>