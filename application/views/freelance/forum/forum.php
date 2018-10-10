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
							<P><a href="#cmnt" data-toggle="" id="viewComments">Topics</a>
								<input type="hidden" name="id" value="<?php echo $row->id;?>">
								<span class="badge" id="topic">4</span> | <!--<a href="#cmnt" data-toggle="" >Posts</a>
								 <span class="badge" id="posts">2</span> -->
							</P>
					
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