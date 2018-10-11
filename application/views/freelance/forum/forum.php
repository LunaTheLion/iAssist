<title>iAssist -Forum</title>

<div class="col-lg-8 col-sm-8">
			<div class="card">
				
			</div>
			<br>
			<div class="card border-primary" style="padding: 10px; border:none;">
			
			<?php foreach ($jobs as $row): ?>

					<br>
					<div class="card">
						<div class="card-body">
							<p class="text-primary" style="font-size: 25px; margin-bottom: 2px;">
							 <a href="<?php echo site_url('forum/ViewForum/'.$row->forum_topic_slug.'/'.$row->id) ?>" > 
									<?php echo $row->forum_topic; ?></p></a>
							<p><?php echo $row->forum_details; ?></p>
							<P><a href="<?php echo site_url('forum/ViewForum/'.$row->forum_topic_slug.'/'.$row->id) ?>" data-toggle="" id="viewComments">Topics</a>
								<input type="hidden" name="id" value="<?php echo $row->id;?>">
								<span class="badge" id="topic">4</span> | <!--<a href="#cmnt" data-toggle="" >Posts</a>
								 <span class="badge" id="posts">2</span> -->
							</P>
							<a href="#forum" data-toggle="modal" data-target="#forum">Create New Forum</a>
						</div>
				</div>
<div id="forum" class="modal fade" tabindex="-1" role="dialog">
	<div class="modal-dialog modal-lg" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title">
					Posts
				</h4>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			</div>
			<div class="modal-body">
				<form id="RequestForm" action="<?php echo base_url('forum/CreateForum')?>" method="post" >
				    
				    <br>
				    <div class="row">
				    	<div class="col-lg-2 col-sm-2">
				    		<p class="text-primary center">Title</p>
				    	</div>
				    	<div class="col-lg-9 col-sm-9">
				    		<input class="form-control" name="title" required >
				    		<br>
				    	</div>
				    	
				    	<div class="col-lg-2 col-sm-2">
				    		<br>
				    		<p class="text-primary center">Content</p>
				    	</div>
				    	<div class="col-lg-9 col-sm-9">
				    		<textarea class="form-control" name="content" required rows="3"></textarea>
				    	</div>
				    	
				    	<div class="col-lg-2 col-sm-2">
				    		
				    		<p class="text-primary center">Category</p>
				    	</div>
				    	<div class="col-lg-9 col-sm-9">
				    		<br>
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
				    <br>
				 
			
				
			</div>
			<div class="modal-footer">
				<button type="submit" class="btn btn-primary" >Submit</button>
				<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
				</form>
			</div>
		</div>




	</div>
</div>					
				<?php endforeach; ?> 

			</div>
		<script>
			$(window).on('load', function(){
				countTopics();
				//countPosts();
				function countTopics()
				{	
					var id = $('input[name=id]').val();
					//alert(id);
					$.ajax({
						type: 'ajax',
						method: 'get',
						url: '<?php echo base_url()?>forum/countTopics/',
						data:{id:id},
						async: false,
						dataType: 'json',
						success: function(data){
							console.log(data);
							json = JSON.parse(data);
							if( json === false)
							{
								$('#topic').text('');	
							}
							else
							{
								$('#topic').text(data);	
							}		
						},
						error: function(){
							alert('Cant count Topics');
						}
					})
				}
				// function countPosts()
				// {
				// 	var id = $('input[name=id]').val();
				// 	//alert(id);
				// 	$.ajax({
				// 		type: 'ajax',
				// 		method: 'get',
				// 		url: '<?php echo base_url()?>forum/countTopics/',
				// 		data:{id:id},
				// 		async: false,
				// 		dataType: 'json',
				// 		success: function(data){
				// 			console.log(data);
				// 			json = JSON.parse(data);
				// 			if( json === false)
				// 			{
				// 				$('#topic').text('');	
				// 			}
				// 			else
				// 			{
				// 				$('#topic').text(data);	
				// 			}		
				// 		},
				// 		error: function(){
				// 			alert('Cant count Topics');
				// 		}
				// 	})
				// }
			})
		</script>
		</div>
	</div>	
</div>