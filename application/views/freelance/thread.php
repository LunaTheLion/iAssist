<title>iAssist - Job</title>

<div class="col-lg-8 col-sm-8">
			<div class="card " style="padding: 10px; border:none;">
				<div class="card" >
				  <div class="card-body" style="padding: 3px;">
				  	<div class="row">
				  		<div class="col-lg-3 col-sm-6" style="padding-right: 0px;">
				  			<h5><button class="btn btn-secondary" data-toggle="modal" data-target="#view" style="margin-bottom: 0px; ">Create Post</button></h5>
				  	
				  		</div>				   	
				  	</div>		
				  </div>
				</div>
			</div>
			<br>
			<div class="card" style="padding: 10px; border:none;" ><!--  id="showJob"  -->
				
				<?php foreach ($jobs as $row): ?>
					<br>
					<div class="card">
						<div class="card-body">
							<p class="text-primary" style="font-size: 25px; margin-bottom: 2px;"><a href="<?php echo site_url('user/ViewJob/'.$row->title_slug.'/'.$row->post_id) ?>" ><?php echo $row->title; ?> </a></p>
								<a href="<?php echo base_url('user/clickbyCategory/'.$row->category_slug); ?>"><?php echo $row->category ?></a> |&nbsp<a href=""><?php echo $row->budget ?></a> 
							<p style="font-size: 20px;"><?php echo $row->description; ?></p>
							<button class="btn btn-info" type="submit" style="float:0; right:0px;">Apply</button>
						</div>
				</div>
				<?php endforeach; ?> 

			</div>
<div id="view" class="modal fade" tabindex="-1" role="dialog">
          <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
              <div class="modal-header">
              	<h4 class="modal-title">Post a Job</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                
              </div>
              <div class="modal-body">
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
				  		<button class="btn btn-secondary" type="submit" id="btnJob" style=" padding: 7px;float: right; right: 0;" >Submit</button>
				  		<button class="btn btn-default" data-dismiss="modal">Close</button>
				  	</form>
                 </div>              
            </div><!-- /.modal-content -->
          </div><!-- /.modal-dialog -->
        </div><!-- /.modal -->




			<script>
				$(window).on('load', function(){
					

					// showAllJobs();
					// function showAllJobs(){
					// 	 $.ajax({
					// 	 	type: 'ajax',
					// 	 	url: '<?php echo base_url()?>user/getThread',
					// 	 	async : true,
					// 	 	dataType: 'json',
					// 	 	success: function(data){
					// 	 		console.log(data);
					// 	 		var html = '';
					// 	 		var i;
					// 	 		for(i=0; i<data.length;i++)
					// 	 		{
					// 	 		html += '<br>'+
					// 	 			'<div class="card">'+
					// 	 			'<div class="card-body" >'+
						 			
					// 	 			'<textarea class="form-control" style="border: none; margin-bottom:2px;" placeholder="Write Something" rows="4" cols="110" readonly>'+data[i].description+'</textarea>'+
					// 	 			'<button class="btn btn-secondary" style="padding-top: 2px; padding: 10px;float: right; right: 0;">Post</button>'+
					// 	 			'</div>'+
					// 	 			'</div>';	
					// 	 		}
					// 	 		$('#showJob').html(html);
					// 	 	},
					// 	 	error: function(){
					// 	 		alert('Could not load Post');
					// 	 	}
					// 	 })
					// };

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
				})
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
				
			</script>
		</div>
	</div>	
</div>