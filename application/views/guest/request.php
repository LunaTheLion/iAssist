<title>iAssist - Request</title>

<div class="col-lg-8 col-sm-8">
			
			<br>
			<div class="card border-primary" style="padding: 10px; border:none;">
				

				<?php foreach ($jobs as $row): ?>
					<br>
					<div class="card">
						<div class="card-body">
							<p class="text-primary" style="font-size: 25px; margin-bottom: 2px;">
								<!-- <a href="<?php echo site_url('user/ViewProject/'.$row->title_slug.'/'.$row->id) ?>" > -->
									<?php echo $row->request_category; ?></p></a>
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