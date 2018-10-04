<title>Profile</title>
<div class="jumbotron" style="background-color: #E0E0E0; ">
	<a href="<?php echo base_url('user/ProfilePic')?>"><img src="<?php
					$img = $this->session->userdata('img');
					if(!empty($img))
					{
						echo base_url().'/uploads/'.$this->session->userdata('img');
					}
					else 
					{
						echo base_url('assets/img/fromYe/g1.png');
					}
				 ?>" class="img center" style="width:10%; height: 10%" ></a>
				 <br><a href="<?php echo base_url('user/general/'.$this->session->userdata('email')) ?>">
				<h3 align="center"><?php echo $this->session->userdata('username'); ?></h3></a>
				<p class="text-primary" align="center" style="font-size: 20px;">	<a href="<?php echo base_url('user/user_profile') ?>">Profile</a> | <a href="">Projects</a> | <a href="<?php echo base_url('user/logout')?>">Log Out</a> </p>
</div>
