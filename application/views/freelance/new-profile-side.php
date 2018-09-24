<title>Profile</title>
<div class="jumbotron p-5">
	<div class="row">
		<div class="col-lg-4 col-sm-4">
				

				<img src="<?php echo base_url('assets/img/fromYe/g1.png')?>" class="img center" >
				<br>
				<h3 align="center"><?php echo $this->session->userdata('username'); ?></h3>
		
			<div class="list-group" align="center" style="border:none;">
			  <a href="<?php echo base_url('user/user_profile') ?>" class="list-group-item list-group-item-action " style="border:none;">
			    Profile
			  </a>
			  <a href="#" class="list-group-item list-group-item-action" style="border:none;">Projects
			  </a>
			  <a href="#" class="list-group-item list-group-item-action " style="border:none;">Skills
			  </a>
			</div>
			<div class="card">
				Card
				
				
			</div>
		</div>

