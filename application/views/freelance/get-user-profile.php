		<div class="col-lg-6 col-sm-6">
			<div class="card">
				<?php foreach ($acc as $account):?>
				<div class="card-header">
					Personal Profile
				</div>
				<div class="card-body">
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
			<div class="card">
				<div class="card-header">
					Educational Profile
				</div>
				<div class="card-body">
					<div class="row">
						<div class="col-lg-3 col-sm-3">
							School
						</div>
						<div class="col-lg-7 col-sm-7"><p class="text-primary">
							<?php 
								echo $account->ed_school_name;	
							  ?></p>
						</div>
					</div>
					<div class="row">
						<div class="col-lg-3 col-sm-3">
							College
						</div>
						<div class="col-lg-7 col-sm-7"><p class="text-primary">
							<?php 
								echo $account->ed_college;
							?></p>
						</div>
					</div>
					<div class="row">
						<div class="col-lg-3 col-sm-3">
							Major
						</div>
						<div class="col-lg-7 col-sm-7"><p class="text-primary">
							<?php 
								echo $account->ed_focus_of_study;
							  ?></p>
						</div>
					</div>
				</div>

			</div>
			<br>
			<div class="card">
				
				<div class="card-header">
					Skills
				</div>
				<div class="card-body">
					<?php foreach ($skill as $skills): ?>
					<div class="row">
						<div class="col-lg-3 col-sm-3">
							<?php 
							
								echo $skills->skill_category;
							  ?></p>
						</div>
						<div class="col-lg-7 col-sm-7"><p class="text-primary">
							<?php 
								echo $skills->skill;
							  ?></p>
							  
						</div>
					</div>

					<?php endforeach; ?>
				</div>
			
			</div>

		</div>
	</div>
	
	
	
</div>
