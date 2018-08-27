

<div class="container pt-5" style="padding-bottom: 20px;">
	<div class="card">
		<div class="card-body">
			<center>
				<h1>Way to go !</h1>

			 We have sent you a confirmation to your <?php echo $this->session->userdata('email'); ?> Please Verify to continue! 
			 <br>
			 <br>
			 <a class="btn btn-info" href="<?php
			 	
			  echo base_url('/home'); 
			  $this->session->set_userdata('');?>">Okay!</a>
			</center>
		</div>
	</div>	
</div>