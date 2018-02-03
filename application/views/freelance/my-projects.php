<div class="jumbotron">
	


<div class="row">
	<div class="col-md-3" style="padding: 8px;">
		<div class="card">
		  <a href="<?php echo base_url('users/create_projects')?>"><img style="height: 250px; width: 100%; display: block;" src="<?php echo site_url("uploads/add.png"); ?>" " alt="Card image"></a>

		  <div class="card-body" style="padding-top: 10px;">
		   
		   	<h6 class="text-center text-primary" style="margin:3px";><a href="<?php echo base_url('users/create_projects')?>">Create a New Project</a></h6><br>
		  </div>
		 
		</div>
	</div>



	
	<!-- <?php print_r($proj)?> -->

	<?php 
		if (empty($data))
		{

			
		}
		elseif( !empty($data))
		{


	?>
	<?php foreach($data as $row):?>
		<div class="col-md-3" style="padding: 8px;">
			<div class="card">
			  <img style="height: 250px; width: 100%; display: block;" src="<?php echo site_url("uploads/$row->project_image"); ?>" " alt="Card image">

			  <div class="card-body" style="padding-top: 10px;">
			    <p class="card-text text-center" style="margin:2px;"><?php echo $row->project_date_posted;?></p>
			   	<h6 class="text-center text-primary" style="margin:3px";><?php echo $row->project_title;?></h6>
			  </div>
			 
			</div>
		</div>

	<?php endforeach; 
	}
	?>
	<div class="col-md-4"></div>
	<div class="col-md-4"></div>
	<div class="col-md-4"></div>
</div>


</div>