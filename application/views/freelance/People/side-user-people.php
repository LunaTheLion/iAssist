
<div class="jumbotron p-5"  style="background-color:	#DCDCDC;">
	<div class="row">
		<div class="col-lg-3 col-sm-3" >
			<img class="img center"  src="<?php 
			$img = $this->session->userdata('img');
			if(!empty($img))
			{
				echo base_url().'/uploads/'.$this->session->userdata('img');
			}
			else
			{
				echo base_url('assets/img/fromYe/g1.png');
			} ?>">
			<center>
				<h6><a href="<?php echo base_url('user/general/'.$this->session->userdata('email'))?>"><?php echo $this->session->userdata('username'); ?></a></h6>
			</center>
			<a href="<?php echo base_url('user/CreateSkillPost') ?>" class="btn btn-info">Create Post</a>
			<div class="list-group">
			  
			  <a href="#" class="list-group-item list-group-item-action">
			    Video and Animation
			    <span class="badge badge-primary badge-pill" id="VA"></span>
			  </a>
			  <a href="#" class="list-group-item list-group-item-action">
			  	Graphics and Design
			    <span class="badge badge-primary badge-pill" id="GD">2</span>
			  </a>
			  <a href="#" class="list-group-item list-group-item-action">
			  	Digital Marketing
			  	<span class="badge badge-primary badge-pill" id="DM">1</span>
			  </a>
			  <a href="#" class="list-group-item list-group-item-action">
			  	Writing and Translation
			    <span class="badge badge-primary badge-pill" id="WT">1</span>
			  </a>
			  <a href="#" class="list-group-item list-group-item-action">
			  	Music and Audio
			    <span class="badge badge-primary badge-pill" id="MA">1</span>
			  </a>
			  <a href="#" class="list-group-item list-group-item-action">
			  	Programming and Tech
			    <span class="badge badge-primary badge-pill" id="PT">1</span>
			  </a>
			  <a href="#" class="list-group-item list-group-item-action">
			  	Business
			    <span class="badge badge-primary badge-pill" id="B">1</span>
			  </a>
			  <a href="#" class="list-group-item list-group-item-action">
			  	Lifestyle
			    <span class="badge badge-primary badge-pill" id="L">1</span>
			  </a>
			
			 
			</div>
			
		</div>
		

<div id="postRequest" class="modal fade" tabindex="-1" role="dialog">
	<div class="modal-dialog modal-lg" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title">
					Request
				</h4>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			</div>
			<div class="modal-body">
				<form id="RequestForm" action="<?php echo base_url('user/RequestPost')?>" method="post" >
				    <input type="hidden" name="txtId" value="0">   
				    <div class="row">
				    	<div class="col-lg-2 col-sm-2">
				    		<p class="text-primary center">Title</p>
				    	</div>
				    	<div class="col-lg-9 col-sm-9">
				    		<input type="text" class="form-control" name="title" required>
				    	</div>
				    </div>
				    <br>
				    <div class="row">
				    	<div class="col-lg-2 col-sm-2">
				    		<p class="text-primary center">Description</p>
				    	</div>
				    	<div class="col-lg-9 col-sm-9">
				    		<textarea class="form-control" name="description" required rows="5"></textarea>
				    	</div>
				    </div>
				    <br>
				    <div class="row">
				    	<div class="col-lg-2 col-sm-2">
				    		<p class="text-primary center">Offer</p>
				    	</div>
				    	<div class="col-lg-9 col-sm-9">
				    		<input type="text" class="form-control" name="offer" required>
				    	</div>
				    </div>
				    <br>
				    <div class="row">
				    	<div class="col-lg-2 col-sm-2">
				    		<p class="text-primary center">Category</p>
				    	</div>
				    	<div class="col-lg-9 col-sm-9">
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
			<div class="modal-footer">
				<button type="submit" class="btn btn-primary" >Submit</button>
				<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
				</form>
			</div>
		</div>



		<script>
			$(window).on('load', function(){
				//count newly accepted postings
				//Video and Animation
				function countVideoAnimation()
				{
					$.ajax({
						type: 'ajax',
						url: '<?php echo base_url()?>user/countVideoAnimation',
						async: false,
						dataType: 'json',
						success: function(data){
							$('#VA').text(data);
						},
						error: function(){
							alert('Cant count all your post');
						}
					})
				}
			})

		</script>
	</div>
</div>
