
<div class="jumbotron" style="background-color: #E4EBF2; padding-top: 30px;">
<div class="row">
	<div class="col-lg-4 col-sm-4">
		<div class="card">
			<div class="card-header"></div>
			<div class="card-body">
				<a href="<?php echo site_url('user/general/'.$this->session->userdata('email')); ?>">Profile</a><br>
				<?php if($this->session->userdata('acc_type') != 'Client')
				{
					echo '<a href="'.base_url('user/educ').'">Educational Background</a><br>';
					echo '<a href="'.base_url('user/Skill').'">Skill Set</a><br>';
					echo '<a href="'.base_url('user/Project').'">Project</a><br>';
					echo '<a href="'.base_url('user/Interest').'">Interests</a><br>';
				}
				else
				{
					echo '<a href="'.base_url('user/educ').'">Website</a><br>';
					echo '<a href="'.base_url('user/tokenfield').'">Sample Tokenfield</a><br>';
				}
				?>	
				
				
				
	

			</div>
			<div class="card-footer"></div>
		</div>
	</div>