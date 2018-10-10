<title>Personal Profile</title>
	<div class="col-lg-6 col-sm-6">
		<div class="card">
			<div class="card-header" style="font-size: 20px;">Personal Information</div>
			<form method="POST" action="<?php echo base_url('user/v_personal') ?>">
			<div class="card-body">
				<div class="row">
						<div class="col-lg-3 col-sm-3">
							<!-- <p class="text-primary" style="font-size: 20px;">Name</p> -->
							<center class="text-primary" style="font-size: 18px;">Name</center>
						</div>
						<div class="col-lg-9 col-sm-9">
							<input type="text" class="form-control form-control-sm" style="font-size: 15px;" name="name" 
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
							<center class="text-primary" style="font-size: 18px;">Middle Name</center>
						</div>
						<div class="col-lg-9 col-sm-9">
							<input type="text" class="form-control form-control-sm" style="font-size: 15px;" name="middlename"
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
							<center class="text-primary" style="font-size: 18px;">Surname</center>
						</div>
						<div class="col-lg-9 col-sm-9">
							<input type="text" name="surname" style="font-size: 15px;" class="form-control form-control-sm" 
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
							<center class="text-primary" style="font-size: 18px;">Email</center>
						</div>
						<div class="col-lg-9 col-sm-9">
							<input type="text" name="email" style="font-size: 15px;" class="form-control form-control-sm" readonly value="<?php echo $this->session->userdata('email'); ?>">
							
						</div>

				</div>
				<br>
				<div class="row">
						<div class="col-lg-3 col-sm-3">
							<center class="text-primary" style="font-size: 18px;">Contact No.</center>
						</div>
						<div class="col-lg-9 col-sm-9">
							<input type="text" name="contact" style="font-size: 15px;" class="form-control form-control-sm"
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
							<center class="text-primary" style="font-size: 18px;">Address</center>
						</div>
						<div class="col-lg-9 col-sm-9">
							<div class="row">
								<div class="col-lg-3 col-sm-3">
									<center class="text-primary" style="font-size: 18px;">House No.</center>
								</div>
								<div class="col-lg-9 col-sm-9">
									<input type="text" name="houseNo" style="font-size: 15px;" class="form-control form-control-sm"
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
									<center class="text-primary" style="font-size: 18px;">Street Name</center>
								</div>
								<div class="col-lg-9 col-sm-9">
									<input type="text" name="street" style="font-size: 15px;" class="form-control form-control-sm"
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
									<center class="text-primary" style="font-size: 18px;">Barangay</center>
								</div>
								<div class="col-lg-9 col-sm-9">
									<input type="text" name="brngy" style="font-size: 15px;" class="form-control form-control-sm" 
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
									<center class="text-primary" style="font-size: 18px;">Municipality</center>
								</div>
								<div class="col-lg-9 col-sm-9">
									<input type="text" name="mncpl" style="font-size: 15px;" class="form-control form-control-sm"
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
						<div class="col-lg-7 col-sm-7">
							 <input type="checkbox" name="liscense" required> <a href="#myModal" data-toggle="modal" data-target="#myModal" style="padding-left: 10px; font-size: 18px;">I Agree to User Terms and Agreement</a>
						</div>
				</div>
					
			</div>			
			<div class="card-footer">
				
				<button type="submit" class="btn btn-info">Next</button>
				
			</div>
			</div>



			</form>

				<div id="myModal" class="modal fade" role="dialog">
				  <div class="modal-dialog modal-lg">
				    <!-- Modal content-->
				    <div class="modal-content">
				      <div class="modal-header">
				        <h4 class="modal-title">Modal Header</h4>
				        <button type="button" class="close" data-dismiss="modal">&times;</button>
				        
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


