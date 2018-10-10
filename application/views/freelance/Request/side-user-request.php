
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

			<div class="list-group" >
				<a href="#postRequest" class="btn btn-info" data-target="#postRequest" data-toggle="modal">Post a Request</a>
				<a href="<?php echo base_url('user/forum') ?>" class="btn btn-success" >Forum</a>
			 <div class="card">
			 	<div class="card-header" style="">
			 		<p class="text-primary" style="font-size: 20px; margin-bottom: 2px;">Search Criteria</p>

			 	</div>
			 	<form action="<?php echo base_url('user/Search_Request') ?>" method="Post">
			 		<div class="card-body">
			 			<input type="text" class="form-control" name="search" placeholder="Search word">
			 			<br>
			 			<select class="form-control" name="category" >
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
			 			<br>
			 			<input type="text" class="form-control" name="budget" placeholder="Offer">
			 			<br>
			 			<button class="btn btn-info" type="submit">Search Skill</button>
			 		</div>
			 	</form>
			 </div>

			<!--   <a data-target="#postRequest" data-toggle="modal" class="list-group-item list-group-item-action">Post a Request 
			  </a> -->
			<!--   <a href="#" class="list-group-item list-group-item-action disabled">Morbi leo risus
			  </a> -->
			  <!-- <a href="<?php echo base_url('user/forum') ?>" class="list-group-item list-group-item-action" role="button">Forums
			  </a> -->
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
	</div>
</div>
