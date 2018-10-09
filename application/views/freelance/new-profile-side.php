<title>Profile</title>
<div class="jumbotron p-5">
	<div class="row">
		<div class="col-lg-4 col-sm-4">
				
				<a href="<?php echo base_url('user/ProfilePic')?>"><img src="<?php
					$img = $this->session->userdata('img');
					if(!empty($img))
					{
						echo base_url().'/uploads/'.$this->session->userdata('img');
					}
					else 
					{
						echo base_url('assets/img/fromYe/g1.png');
					}
				 ?>" class="img center" ></a>

				<br><a href="<?php echo base_url('user/general/'.$this->session->userdata('email')) ?>">
				<h3 align="center"><?php echo $this->session->userdata('username'); ?></h3></a>
		
			<div class="list-group" align="center" style="border:none;">
			  <a href="<?php echo base_url('user/user_profile') ?>" class="list-group-item list-group-item-action " style="border:none;">
			    Profile
			  </a>
			  <a href="<?php echo base_url('user/ProjectPost') ?>" class="list-group-item list-group-item-action" style="border:none;">Projects
			  </a>
			  <a href="#" class="list-group-item list-group-item-action" style="border:none;">
			  	<span id="totalJobPost" class="badge badge-light"></span>
			  	Posts
			  	<span class="badge" id="new"></span>
			  </a>
			  <a href="<?php echo base_url('user/SkillPost')?>" class="list-group-item list-group-item-action " style="border:none;">Skill Post
			  </a>
			</div>
			<div class="card">
				
				
				
			</div>
		</div>

		<!-- <div id="WarningPost" class="modal fade" tabindex="-1" role="dialog">
		  <div class="modal-dialog" role="document">
		    <div class="modal-content">
		      <div class="modal-header">
		        <h5 class="modal-title" id="exampleModalLabel">Warning</h5>
		        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
		          <span aria-hidden="true">&times;</span>
		        </button>
		      </div>
		      <div class="modal-body">
		        <textarea class="form-control" rows="4" cols="60" ></textarea>
		      </div>
		      <div class="modal-footer">
		      	
		        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
		        <button type="button" class="btn btn-primary">Save changes</button>
		      </div>
		    </div>
		  </div>
		</div> -->

		<!-- <?php if(!empty($post_result)): ?>
			<?php if($post_result=='success'): ?>
				<script type="text/javascript">
					
				</script>
				<div  class="WarningPost modal fade" tabindex="-1" role="dialog">
				  <div class="modal-dialog" role="document">
				    <div class="modal-content">
				      <div class="modal-header">
				        <h5 class="modal-title" id="exampleModalLabel">Warning</h5>
				        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
				          <span aria-hidden="true">&times;</span>
				        </button>
				      </div>
				      <div class="modal-body">
				        <textarea class="form-control" rows="4" cols="60" ></textarea>
				      </div>
				      <div class="modal-footer">
				      	
				        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
				        <button type="button" class="btn btn-primary">Save changes</button>
				      </div>
				    </div>
				  </div>
				</div>
			<?php endif; ?>
		<?php endif; ?>
 -->
		<div id="WarningPost " class="modal fade" tabindex="-1" role="dialog">
		  <div class="modal-dialog" role="document">
		    <div class="modal-content">
		      <div class="modal-header">
		        <h5 class="modal-title" id="exampleModalLabel">Warning</h5>
		        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
		          <span aria-hidden="true">&times;</span>
		        </button>
		      </div>
		      <div class="modal-body">
		        <textarea class="form-control" rows="4" cols="60" ></textarea>
		      </div>
		      <div class="modal-footer">
		      	
		        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
		        <button type="button" class="btn btn-primary">Save changes</button>
		      </div>
		    </div>
		  </div>
		</div>
<script>
	$(window).on('load',function(){
		showJobPost();
		countAllPost();
		$('#openModal').on('click',function(){
			$('.WarningPost').modal('show');
		});

		function showJobPost(){

			$.ajax({
				type: 'ajax',
				url: '<?php echo base_url()?>user/countJobPost',
				async: false,
				dataType: 'json',
				success: function(data){
					json = JSON.parse(data);
					if(json === true)
					{
						$('#new').text(data);
						$('#new').addClass('badge-danger');
						$('#new2').text(data);
						$('#new2').addClass('badge-danger');
					}
					else
					{
						$('#new').text('');
						$('#new').removeClass('badge-danger');
						$('#new2').text('');
						$('#new2').removeClass('badge-danger');
					}
					
					
				},
				error: function(){
					alert('Cant load your new job post');
				}
			});
		}
		function countAllPost()
		{
			$.ajax({
				type: 'ajax',
				url: '<?php echo base_url()?>user/countAllPost',
				async: false,
				dataType: 'json',
				success: function(data){
					json = JSON.parse(data);
					if(json === false)
					{
						$('#totalJobPost').text('');	
					}
					else
					{
						$('#totalJobPost').text(data);	
					}
					
				},
				error: function(){
					alert('Cant count all your post');
				}
			})
		}
		function countRequest()
		{
			$.ajax({
				type: 'ajax',
				url: '<?php echo base_url()?>user/countRequestPost',
				async: false,
				dataType: 'json',
				success: function(data){
					json = JSON.parse(data);
					if(json === false)
					{
						$('#totalJobPost').text('');	
					}
					else
					{
						$('#totalJobPost').text(data);	
					}
					
				},
				error: function(){
					alert('Cant count all your post');
				}
			})
		}

	});
</script>
