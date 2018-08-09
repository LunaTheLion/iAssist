<title>Profile</title>
<div class="jumbotron" style="padding-right: 350px; padding-left: 100px;">

		<?php foreach ($data as $main): ?>
			<div class="card" style="background-color:  #FDEBD0; padding: 20px;">
			<div class="row">
				<div class="col-sm-2">
					<img  src="<?php 
									$pic = $main->account_img;
									if( !empty($pic))
									{
										echo site_url("uploads/$pic");
									}
									else
									{

										echo site_url("uploads/pic.jpg");}
										?>
										" 
									
					width="110" height="120">
				</div>
				<div class="col-sm-2">A
					<p><?php echo $main->account_username;
						$this->session->set_userdata('username', $main->account_username);
					 ?></p>

					<!-- <button type="button" class="btn btn-success">Request Resume</button> -->
				</div>
				<div class="col-sm-4">C</div>
				<div class="col-sm-4">D</div>
			</div>
			

		</div>
		<div class="card" style=" padding: 10px;">
			<ul class="nav nav-tabs">
			  <li class="nav-item">
			    <a class="nav-link active" data-toggle="tab" href="#profile">Profile</a>
			  </li>
			  <li class="nav-item">
			    <a class="nav-link" data-toggle="tab" href="#home">Projects</a>
			  </li>
			  <li class="nav-item dropdown">
			    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="https://bootswatch.com/lux/#" role="button" aria-haspopup="true" aria-expanded="false">Dropdown</a>
			    <div class="dropdown-menu">
			      <a class="dropdown-item" href="#dropdown1">Action</a>
			      <a class="dropdown-item" href="#dropdown2">Another action</a>
			      <a class="dropdown-item" href="https://bootswatch.com/lux/#">Something else here</a>
			      <div class="dropdown-divider"></div>
			      <a class="dropdown-item" href="https://bootswatch.com/lux/#">Separated link</a>
			    </div>
			  </li>
			</ul>
			<div id="myTabContent" class="tab-content">
			  <div class="tab-pane fade" id="home" style="padding-top: 10px;">

			  	<div class="card border-secondary mb-3" style="max-width: 65rem;">
			  		  <div class="card-body" style="padding:0px;">
			  		  	<a class="btn btn-secondary" href="<?php echo base_url('users/create_projects')?>" >Create Post</a>
						
			  		  </div>

			  		</div>
			  	
			  	<!-- <?php foreach (($proj ? $proj : array()) as $row):?>

			  		<div class="card border-secondary mb-3" style="max-width: 65rem;">
			  		  <div class="card-body">
			  		  	<div class="row">
			  		  		<div class="col-sm-10" >
			  		  			<h4 class="card-title"><?php echo $row->project_title; ?>
			  		   		
			  		   			 </h4>
			  		  		</div>
			  		  		<div class="col-sm-1" style="padding: 0px;">
			  		  			<button type="button" class="btn btn-secondary btn-sm" style="display: inline-block; vertical-align: middle;">Edit</button>
			  		  		</div>
			  		  		<div class="col-sm-1" style="padding: 0px; align-content: right">
			  		  			<button type="button" class="btn btn-secondary btn-sm" style="display: inline-block; vertical-align: middle;"><?php echo $row->id; ?>Delete</button>
			  		  		</div>
			  		  	</div>
			  		    
			  		 	
			  		    
			  		    <p class="card-text">
			  		    	<?php echo $row->project_offer; ?>
			  		    </p>
			  		  </div>

			  		</div>
			  	
			  	<?php endforeach; ?> -->
			  	
			  	<br>

			  
	
			  </div>
			  <div class="tab-pane fade  show active" id="profile" style="padding-top: 10px;"
			  >
			   <div class="card" style="padding: 10px;">
			   	<div class="card-header">Interests</div>
			  		<p>Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor, williamsburg carles vegan helvetica. Reprehenderit butcher retro keffiyeh dreamcatcher synth. Cosby sweater eu banh mi, qui irure terry richardson ex squid. Aliquip placeat salvia cillum iphone. Seitan aliquip quis cardigan american apparel, butcher voluptate nisi qui.</p>
			  	</div>
			  	<div class="card" style="padding: 10px;">
			   	<div class="card-header">Interests</div>
			  		<p>Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor, williamsburg carles vegan helvetica. Reprehenderit butcher retro keffiyeh dreamcatcher synth. Cosby sweater eu banh mi, qui irure terry richardson ex squid. Aliquip placeat salvia cillum iphone. Seitan aliquip quis cardigan american apparel, butcher voluptate nisi qui.</p>
			  	</div>
			  	<div class="card" style="padding: 10px;">
			   	<div class="card-header">Interests</div>
			  		<p>Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor, williamsburg carles vegan helvetica. Reprehenderit butcher retro keffiyeh dreamcatcher synth. Cosby sweater eu banh mi, qui irure terry richardson ex squid. Aliquip placeat salvia cillum iphone. Seitan aliquip quis cardigan american apparel, butcher voluptate nisi qui.</p>
			  	</div>
			  </div>
			  <div class="tab-pane fade" id="dropdown1">
			    <p>Etsy mixtape wayfarers, ethical wes anderson tofu before they sold out mcsweeney's organic lomo retro fanny pack lo-fi farm-to-table readymade. Messenger bag gentrify pitchfork tattooed craft beer, iphone skateboard locavore carles etsy salvia banksy hoodie helvetica. DIY synth PBR banksy irony. Leggings gentrify squid 8-bit cred pitchfork.</p>
			  </div>
			  <div class="tab-pane fade" id="dropdown2">
			    <p>Trust fund seitan letterpress, keytar raw denim keffiyeh etsy art party before they sold out master cleanse gluten-free squid scenester freegan cosby sweater. Fanny pack portland seitan DIY, art party locavore wolf cliche high life echo park Austin. Cred vinyl keffiyeh DIY salvia PBR, banh mi before they sold out farm-to-table VHS viral locavore cosby sweater.</p>
			  </div>
			</div>
		</div>
		<!-- <div class="row" style="background-color:  #FDEBD0;">
			<div class="col-sm-4">A</div>
			<div class="col-sm-4">B</div>
			<div class="col-sm-4">C</div>
		</div>
		<hr>
		<div class="row">
			<div class="col-sm-4">A</div>
			<div class="col-sm-4">B</div>
			<div class="col-sm-4">C</div>
		</div>
		<hr> -->

<?php endforeach; ?>
</div>