
<div class="jumbotron p-5">
	<div class="row">
		<div class="col-lg-3 col-sm-3">
			<?php foreach ($owner as $row):?>

			
			<img class="img center"  src="<?php 
			$img = $row->account_img;
			if(!empty($img))
			{
				echo base_url().'/uploads/'.$row->account_img;
			}
			else
			{
				echo base_url('assets/img/fromYe/g1.png');
			} ?>">
			<center>
				<br>
				<h6><a href="<?php echo base_url('user/general/'.$this->session->userdata('email'))?>"><?php echo $row->account_username; ?></a></h6>
			</center>
			
			<div class="list-group">
			 	<!-- <a href="#resume" class="btn btn-success" data-toggle="modal" data-target="#resume">Request Resume</a> -->
			 	<button data-target="#Message" data-toggle="modal" class="btn btn-info">Message</button>
			 
			<!--   <a href="#" class="list-group-item list-group-item-action disabled">Morbi leo risus
			  </a> -->
			</div>
		</div>
		
<div id="resumeRequest" class="modal-fade" tabindex="-1" role="dialog">
	<div class="modal-dialog " role="document">
		<div class="modal-content">
			<div class="modal-title">
				
			</div>
		</div>		
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
				<button type="submit" class="btn btn-primary" >Send</button>
				<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
				</form>
			</div>
		</div>
	</div>
</div>

<div id="Message" class="modal fade" tabindex="-1" role="dialog">
	<div class="modal-dialog modal-lg" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title">
					Message <?php echo $row->account_username; ?>
				</h4>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			</div>
			<div class="modal-body">
				<form id="MessageForm" action="<?php echo base_url('user/MessageOwner')?>" method="post" >
				    <input type="hidden" name="txtId" value="0">   
				    <input type="hidden" name="titleSlug" >
				    <input type="hidden" name="id" >
				   <div class="row">
				   	<div class="col-lg-2 col-sm-2">
				   		<p class="text-primary center">To</p>
				   	</div>
				   	<div class="col-lg-9 col-sm-9">
				   		<input type="text" class="form-control" name="to" readonly value="<?php echo $row->account_email; ?>">
				   	</div>

				   </div>
				   <br>
				    <div class="row">
				    	<div class="col-lg-2 col-sm-2">
				    		<p class="text-primary center">From</p>
				    	</div>
				    	<div class="col-lg-9 col-sm-9">
				    		<input type="text" class="form-control" name="sender" value="<?php echo $this->session->userdata('email') ?>" readonly>
				    	</div>
				    </div>
				    <br>
				    <div class="row">
				    	<div class="col-lg-2 col-sm-2">
				    		<p class="text-primary center">Subject</p>
				    	</div>
				    	<div class="col-lg-9 col-sm-9">
				    		<input type="text" class="form-control" name="subject" required>
				    	</div>
				    </div>
				    <br>
				    <div class="row">
				    	<div class="col-lg-2 col-sm-2">
				    		<p class="text-primary center">Message</p>
				    	</div>
				    	<div class="col-lg-9 col-sm-9">
				    		<textarea class="form-control" name="message" required rows="5"></textarea>
				    	</div>
				    </div>
				    <br>
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

<div id="resume" class="modal fade" tabindex="-1" role="dialog">
	<div class="modal-dialog modal-lg" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title">
					Message <?php echo $row->account_username; ?>
				</h4>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			</div>
			<div class="modal-body">
				<form id="ResumeForm" action="<?php echo base_url('user/RequestResume')?>" method="post" >
				    <input type="hidden" name="txtId" value="0">   
				    <input type="hidden" name="titleSlug" >
				    <input type="hidden" name="id" >
				   <div class="row">
				   	<div class="col-lg-2 col-sm-2">
				   		<p class="text-primary center">To</p>
				   	</div>
				   	<div class="col-lg-9 col-sm-9">
				   		<input type="text" class="form-control" name="to" readonly value="<?php echo $row->account_email; ?>">
				   	</div>

				   </div>
				   <br>
				    <div class="row">
				    	<div class="col-lg-2 col-sm-2">
				    		<p class="text-primary center">From</p>
				    	</div>
				    	<div class="col-lg-9 col-sm-9">
				    		<input type="text" class="form-control" name="sender" value="<?php echo $this->session->userdata('email') ?>" readonly>
				    	</div>
				    </div>
				    <br>
				    <div class="row">
				    	<div class="col-lg-2 col-sm-2">
				    		<p class="text-primary center">Subject</p>
				    	</div>
				    	<div class="col-lg-9 col-sm-9">
				    		<input type="text" class="form-control" name="subject" required value="Requesting for Resume">
				    	</div>
				    </div>
				    <br>
				    <div class="row">
				    	<div class="col-lg-2 col-sm-2">
				    		<p class="text-primary center">Message</p>
				    	</div>
				    	<div class="col-lg-9 col-sm-9">
				    		<textarea class="form-control" name="message" required rows="3">Hi There! I saw your profile and i'm interested to hire you, can you send in your resume for me to further verify your information </textarea>
				    	</div>
				    </div>
				    <br>
			    <br>
			</div>
			<div class="modal-footer">
				<button type="submit" class="btn btn-primary" >Send</button>
				<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
				</form>
			</div>
		</div>
	</div>
</div>
<?php endforeach; ?>