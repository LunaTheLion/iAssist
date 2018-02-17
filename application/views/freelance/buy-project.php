<div class="jumbotron">
	<div class="row">
		<div class="col-md-7">

			<div class="card border-success mb-3 ml-4 p-3" >
				<h5>Project Title</h5>
				<p>Project Details</p>
				<?php foreach ($proj as $row):?>
					<p class="text-primary"><?php echo $row->project_title?></p>
					<p><?php echo $row->project_category?></p>
					<p></p>
					<img style="height: 110px; width: 100%; display: block;" src="<?php echo site_url("uploads/$row->project_image"); ?>" alt="Card image">
				 <?php endforeach?>
			</div>

			<div class="card border-success mb-3 ml-4 p-3" style="margin-left: 100px;">
				<h5 >About this Project</h5>
				
			</div>
		</div>
		<div class="col-md-5">
			<div class="card border-success  p-4 mb-3 mr-5">
				 <br>
					<a class="btn btn-success" href="<?php echo base_url()?>search/">Purchase</a>
			</div>
			<div class="card border-success  p-4 mb-3 mr-5" >
				<h5 >About this Project</h5>
				


			</div>
			
		</div>
	</div>


	<div class="container">
	<h5 >About this Project</h5>

	</div>




</div>


