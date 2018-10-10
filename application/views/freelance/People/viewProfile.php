<title>Profile</title>
<div class="jumbotron" style="background-color: #E0E0E0; ">
	<?php foreach ($jobs as $row) {
		//echo $row->account_id;
		//echo $row->account_img;
	} ?>
	<img src="<?php	
			//$img = $row->$account_img;
			if(!empty($row->account_img))
			{
				echo base_url().'/uploads/'.$row->account_img;
			}
			else
			{
				echo base_url('assets/img/fromYe/g1.png');
			}

	?>" class="img center" style="width:10%; height: 10%" > 

				 <br><a href="<?php //echo base_url('user/general/'.$this->session->userdata('email')) ?>">
				<h3 align="center"><?php echo $row->account_username; ?></h3></a>
				<p class="text-primary" align="center" style="font-size: 20px;">	<a href="#Message" data-target="#Message" data-toggle="modal" class="btn btn-success">Message</a> - <a href="resume" data-target="#resume" data-toggle="modal" class="btn btn-info">Request Resume</a> - <a href="#report" data-target="#report" data-toggle="modal" class="btn btn-danger">Report</a> </p> 
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
					Message <?php //echo $row->account_username; ?>
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

<div id="report" class="modal fade" tabindex="-1" role="dialog">
	<div class="modal-dialog modal-lg" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title">
					Report <?php echo $row->account_username; ?>
				</h4>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			</div>
			<div class="modal-body">
				<form id="ResumeForm" action="<?php echo base_url('user/ReportUser/'.$row->account_id)?>" method="post" >
				   
				   <div class="row">
				  	<div class="col-lg-6 col-sm-12">
				  		<p class="text-primary center">Please provide the reason behind this reporting</p>
				  	</div>
				   	<div class="col-lg-4 col-sm-12" >
				  		
				  	</div>
				  
				   </div>
				   <br>
				   <div class="row">
				   	<div class="col-lg-2 col-sm-2">
				   	</div>
				   	<div class="col-lg-9 col-sm-12">
				   		<div class="form-group">
				   		  <div class="custom-control custom-checkbox">
				   		    <input type="checkbox" class="custom-control-input" id="customCheck1" name="B" >
				   		    <label class="custom-control-label" for="customCheck1" style="font-size: 18px;">Bullying or Harassment</label>
				   		  </div>
				   		</div>
				   		<br>
				   		<div class="form-group">
				   		  <div class="custom-control custom-checkbox">
				   		    <input type="checkbox" class="custom-control-input" id="customCheck2" name="D" >
				   		    <label class="custom-control-label" for="customCheck2" style="font-size: 18px;">Direct Threats</label>
				   		  </div>
				   		</div>
				   		<br>
				   		<div class="form-group">
				   		  <div class="custom-control custom-checkbox">
				   		    <input type="checkbox" class="custom-control-input" id="customCheck3" name="S" >
				   		    <label class="custom-control-label" for="customCheck3" style="font-size: 18px;">Sexual Violence and Exploitation</label>
				   		  </div>
				   		</div>
				   		<div class="form-group">
				   		  <label class="" for="other" style="font-size: 18px;">Other</label>
				   		  <input type="text" class="form-control" name="other" >
				   		</div>
				   		<input type="hidden" class="form-control" name="sender" value="<?php echo $this->session->userdata('email') ?>" readonly>
				   	</div>
				   </div>
				 <!--    <div class="row">
				    	<div class="col-lg-3 col-sm-2">
				    		
				    	</div>
				    	<div class="col-lg-9 col-sm-9">
				    		<div class="form-group">
				    		  <label class="custom-control-label" for="customCheck3" style="font-size: 18px;">Other</label>
				    		  <input type="text" class="form-control" name="other" >
				    		</div>
				    		<input type="hidden" class="form-control" name="sender" value="<?php echo $this->session->userdata('email') ?>" readonly>
				    	</div>
				    </div> -->
				    <br>
				    
			</div>
			<div class="modal-footer">
				<button type="submit" class="btn btn-primary" >Send to Admin</button>
				<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
				</form>
			</div>
		</div>
	</div>
</div>