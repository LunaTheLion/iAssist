
<div class="jumbotron">
<div class="row">
	<div class="col-lg-4 col-sm-4">
		<div class="card">
			<div class="card-header"></div>
			<div class="card-body">
				<a href="<?php echo site_url('user/general/'.$this->session->userdata('email')); ?>">Profile</a><br>
				<a href="<?php echo site_url('user/account'); ?>">Edit Account</a><br>
				<a href="<?php echo site_url('user/create_post'); ?>">Create Post</a><br>
				<a href="<?php echo site_url('user/educ'); ?>">Educational Background</a><br>
				<a href="<?php echo base_url('user/Skill'); ?>">Skill Set</a><br>
				<a href="<?php echo site_url('user/Project'); ?>">Project</a><br>
				<a href="<?php echo site_url('user/Interest'); ?>">Interests</a><br>
	

			</div>
			<div class="card-footer"></div>
		</div>
	</div>