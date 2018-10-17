		<div class="col-lg-6 col-sm-6">
			<div class="card">
				

				<?php foreach ($acc as $account):?>

				<div class="card-header">
					Personal Profile
				</div>
				<div class="card-body">
					<div class="row">
						<div class="col-lg-3 col-sm-3">
							Username
						</div>
						<div class="col-lg-7 col-sm-7"><p class="text-primary">
							<?php 
								echo $account->account_username;
							  ?></p>
						</div>
					</div>
					<div class="row">
						<div class="col-lg-3 col-sm-3">
							Name
						</div>
						<div class="col-lg-7 col-sm-7"><p class="text-primary">
							<?php 
								echo $account->account_gname;
								echo " ";
								echo $account->account_mname;
								echo " ";
								echo $account->account_sname;
							  ?></p>
						</div>
					</div>
					<br>
					<div class="row">
						<div class="col-lg-3 col-sm-3">
							Email
						</div>
						<div class="col-lg-7 col-sm-7">
							<p class="text-primary"><?php 
								echo $account->account_email;
							  ?></p>
						</div>
					</div>
					<br>
					<div class="row">
						<div class="col-lg-3 col-sm-3">
							Contact No.
						</div>
						<div class="col-lg-7 col-sm-7">
							<p class="text-primary"><?php 
								echo $account->account_contact;
							  ?></p>
						</div>
					</div>
					<br>
					<div class="row">
						<div class="col-lg-3 col-sm-3">
							Address
						</div>
						<div class="col-lg-7 col-sm-7">
							<p class="text-primary"><?php 
								echo $account->house_no;
								echo " ";
								echo $account->street;
								echo " ";
								echo $account->barangay;
								echo " ";
								echo $account->municipal;

							  ?></p>
						</div>
					</div>
				</div>
					


				<?php endforeach; ?>
			
				

			</div>
			<br>
			<?php $acc = $this->session->userdata('acc_type');
			if( $acc == 'Client') 
			{
				echo "<script>
						$(window).on('load', function(){
						$('#Skills').css('display', 'none');
						$('#Educ').css('display', 'none');
						})
					</script>";
			}
				
			?>
			<div class="card" id="Educ">
				<div class="card-header">
					Educational Profile
				</div>
				<div class="card-body">
					<?php if (!isset($educ))
					{
						echo "
						<div class='alert alert-dismissible alert-info'>
						  <button type='button' class='close' data-dismiss='alert'>&times;</button>
						  <h4 class='alert-heading'>Oops!</h4>
						  <p class='mb-0'>Seems like you haven't finish your educational field,<a href='".base_url('user/educ')."' class='alert-link'>Click me to add your educational detail</a>.</p>
						</div>
						";
					}
					else
					{
						foreach ($educ as $ed):
						
						echo "<div class='row'>
								<div class='col-lg-3 col-sm-3'>
								School
								</div>
								<div class='col-lg-7 col-sm-7'><p class='text-primary'>
								'".$ed->ed_school_name."'</p>
								</div>
							</div>";
						echo "<div class='row'>
								<div class='col-lg-3 col-sm-3'>
								College
								</div>
								<div class='col-lg-7 col-sm-7'><p class='text-primary'> 
									'".$ed->ed_college."'</p>
								</div>
							</div>";
						echo "<div class='row'>
								<div class='col-lg-3 col-sm-3'>
								Major
								</div>
								<div class='col-lg-7 col-sm-7'><p class='text-primary'> 
									'".$ed->ed_focus_of_study."'</p>
								</div>
							</div>";						
						endforeach;
					}	
					
					 ?>
				</div>

			</div>
			<br>
			<div class="card" id="Skills">
				
				<div class="card-header">
					Skills
				</div>
				<div class="card-body">
						<?php if (!isset($educ))
						{
							echo "
							<div class='alert alert-dismissible alert-info'>
							  <button type='button' class='close' data-dismiss='alert'>&times;</button>
							  <h4 class='alert-heading'>Warning!</h4>
							  <p class='mb-0'>Best check yo self, you're not looking too good. Nulla vitae elit libero, a pharetra augue. Praesent commodo cursus magna, <a href='https://bootswatch.com/lux/#' class='alert-link'>vel scelerisque nisl consectetur et</a>.</p>
							</div>
							";
						}
						else
						{
							foreach ($educ as $ed):
							
							echo "<div class='row'>
									<div class='col-lg-3 col-sm-3'>
									School
									</div>
									<div class='col-lg-7 col-sm-7'><p class='text-primary'>
									'".$ed->ed_school_name."'</p>
									</div>
								</div>";
							echo "<div class='row'>
									<div class='col-lg-3 col-sm-3'>
									College
									</div>
									<div class='col-lg-7 col-sm-7'><p class='text-primary'> 
										'".$ed->ed_college."'</p>
									</div>
								</div>";
							echo "<div class='row'>
									<div class='col-lg-3 col-sm-3'>
									Major
									</div>
									<div class='col-lg-7 col-sm-7'><p class='text-primary'> 
										'".$ed->ed_focus_of_study."'</p>
									</div>
								</div>";						
							endforeach;
						}	
						
						 ?>
					</div>
				</div>
			
			</div>

		</div>
	</div>
	
	
	
</div>

