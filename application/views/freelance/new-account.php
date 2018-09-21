<title>Personal Profile</title>

<!-- <div class="jumbotron">
<div class="row">
	<div class="col-lg-4 col-sm-4">
		<div class="card">
			<div class="card-header"></div>
			<div class="card-body">
				<a href="<?php echo site_url('user/general/'.$this->session->userdata('email')); ?>">Back to profile</a>
			</div>
			<div class="card-footer"></div>
		</div>
	</div> -->

	<div class="col-lg-6 col-sm-6">
		<div class="card">
			<div class="card-header">Personal InformationS</div>
			<form method="POST" action="<?php echo base_url('user/v_personal') ?>">
			<div class="card-body">
				<div class="row">
						<div class="col-lg-3 col-sm-3">
							<center>Name</center>
						</div>
						<div class="col-lg-9 col-sm-9">
							<input type="text" class="form-control form-control-sm" name="name" 
							value="<?php 
							if(empty($_POST['name']))
							{
								echo "";
							}
							else
							{
								echo $_POST['name'];
							}
							 ?>">
							<?php echo form_error('name');?>

						</div>
						
				</div>	
				<br>
				<div class="row">
						<div class="col-lg-3 col-sm-3">
							<center>Middle Name</center>
						</div>
						<div class="col-lg-9 col-sm-9">
							<input type="text" class="form-control form-control-sm" name="middlename"
							value="<?php 
							if(empty($_POST['middlename']))
							{
								echo "";
							}
							else
							{
								echo $_POST['middlename'];
							}
							 ?>">
							 <?php echo  form_error('middleName'); ?>
						</div>
						
				</div>	
				<Br>
				<div class="row">
						<div class="col-lg-3 col-sm-3">
							<center>Surname</center>
						</div>
						<div class="col-lg-9 col-sm-9">
							<input type="text" name="surname" class="form-control form-control-sm" 
							value="<?php 
							if(empty($_POST['surname']))
							{
								echo "";
							}
							else
							{
								echo $_POST['surname'];
							}
							 ?>">
							 <?php echo form_error('surname'); ?>
						</div>
						
				</div>	
				<br>
				<div class="row">
						<div class="col-lg-3 col-sm-3">
							<center>Email</center>
						</div>
						<div class="col-lg-9 col-sm-9">
							<input type="text" name="email" class="form-control form-control-sm" readonly value="<?php echo $this->session->userdata('email'); ?>">
							
						</div>

				</div>
				<br>
				<div class="row">
						<div class="col-lg-3 col-sm-3">
							<center>Contact No.</center>
						</div>
						<div class="col-lg-9 col-sm-9">
							<input type="text" name="contact" class="form-control form-control-sm"
							value="<?php 
							if(empty($_POST['contact']))
							{
								echo "";
							}
							else
							{
								echo $_POST['contact'];
							}
							 ?>">
						<?php echo form_error('contact'); ?>	
						</div>
						
				</div>
				<Br>	
				<div class="row">
						<div class="col-lg-3 col-sm-3">
							<center>Address</center>
						</div>
						<div class="col-lg-9 col-sm-9">
							<div class="row">
								<div class="col-lg-3 col-sm-3">
									House No.
								</div>
								<div class="col-lg-9 col-sm-9">
									<input type="text" name="houseNo" class="form-control form-control-sm"
									value="<?php 
									if(empty($_POST['houseNo']))
									{
										echo "";
									}
									else
									{
										echo $_POST['houseNo'];
									}
									 ?>">
								<?php echo form_error('houseNo'); ?>
								</div>
								
							</div>
							<br>
							<div class="row">
								<div class="col-lg-3 col-sm-3">
									Street Name
								</div>
								<div class="col-lg-9 col-sm-9">
									<input type="text" name="street" class="form-control form-control-sm"
									value="<?php 
									if(empty($_POST['street']))
									{
										echo "";
									}
									else
									{
										echo $_POST['street'];
									}
									 ?>">
								<?php echo form_error('street'); ?>
								</div>
								
							</div>
							<br>
							<div class="row">
								<div class="col-lg-3 col-sm-3">
									Barangay
								</div>
								<div class="col-lg-9 col-sm-9">
									<input type="text" name="brngy" class="form-control form-control-sm" 
									value="<?php 
									if(empty($_POST['brngy']))
									{
										echo "";
									}
									else
									{
										echo $_POST['brngy'];
									}
									 ?>">
								<?php echo form_error('brngy'); ?>
								</div>
								
							</div>
							<br>
							<div class="row">
								<div class="col-lg-3 col-sm-3">
									Municipality
								</div>
								<div class="col-lg-9 col-sm-9">
									<input type="text" name="mncpl" class="form-control form-control-sm"
									 value="<?php 
									 if(empty($_POST['mncpl']))
									 {
									 	echo "";
									 }
									 else
									 {
									 	echo $_POST['mncpl'];
									 }
									  ?>">
								<?php echo form_error('mncpl'); ?>
								</div>
								
							</div>
							<br>
						</div>

				</div>	

					<BR>	
				<div class="row">
						<div class="col-lg-3 col-sm-3">
							
						</div>
						
						<div class="col-lg-5 col-sm-5">
							<!-- <a href="">Reset Password</a> -->
						</div>
				</div>
					
			</div>
					
					
			
					
				
			
			<div class="card-footer">
				
				<button type="submit" class="btn btn-info">Next</button>
				<a href="<?php echo base_url('user/educ') ?>" class="btn btn-danger">Skip</a>
			</div>
			</div>



			</form>

				<div id="myModal" class="modal fade" role="dialog">
				  <div class="modal-dialog">
				    <!-- Modal content-->
				    <div class="modal-content">
				      <div class="modal-header">
				        <button type="button" class="close" data-dismiss="modal">&times;</button>
				        <h4 class="modal-title">Modal Header</h4>
				      </div>
				      <div class="modal-body">
				        <p>Some text in the modal.</p>
				      </div>
				      <div class="modal-footer">
				        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				      </div>
				    </div>

				  </div>
				</div>
			
		</div>
	</div>
</div>
</div>


