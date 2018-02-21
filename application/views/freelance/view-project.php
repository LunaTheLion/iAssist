
<div class="jumbotron">
	<?php foreach ($view as $row):?>
<title>View Project <?php echo $row->project_title?> </title>
	<div class="row">
		<div class="col-md-7">

			<div class="card border-success mb-3" style="margin-left: 150px;">
				
			  <h3 class="card-header"><?php echo $row->project_title?></h3>
			  <div class="card-body">
			    <h5 class="card-title"><a href="<?php ?>"><?php echo $row->project_category?></a></h5>
			    
			  </div>
			  <img style="height: 410px; width: 100%; display: block;" src="<?php echo site_url("uploads/$row->project_image"); ?>" alt="Card image">
			
			 
			  <?php endforeach?>
			</div>

			<div class="card border-success  p-4 mb-3" style="margin-left: 150px;">
				<h5 >Compare Packages</h5>
				<table class="table table-bordered">
				  <thead>
				    <tr>
				      <th>#</th>
				      <th>First Name</th>
				      <th>Last Name</th>
				      <th>Username</th>
				      <th>Username</th>
				    </tr>
				  </thead>
				  <tbody>
				    <tr>
				      <th scope="row">1</th>
				      <td>Mark</td>
				      <td>Otto</td>
				      <td>@mdo</td>
				      <td>@mdo</td>

				    </tr>
				    <tr>
				      <th scope="row">2</th>
				      <td>Mark</td>
				      <td>Otto</td>
				      <td>@TwBootstrap</td>
				      <td>@mdo</td>

				    </tr>
				    <tr>
				      <th scope="row">3</th>
				      <td>Jacob</td>
				      <td>Thornton</td>
				      <td>@fat</td>
				      <td>@mdo</td>

				    </tr>
				    <tr>
				      <th scope="row">4</th>
				      <td colspan="2">Larry the Bird</td>
				      <td>@twitter</td>
				      <td>@mdo</td>

				    </tr>
				  </tbody>
				</table>

				<table>
					<tbody>
						<tr>
							<td>&nbsp;</td>
							<td>	</td>
							<td>	</td>
							<td>	</td>
						</tr>
						<tr>
							<td>&nbsp;</td>
							<td>Premium</td>
							<td>Standard</td>
							<td>Basic</td>
						</tr>
						<tr>
							<td>Description</td>
							<td>Premium</td>
							<td>Standard</td>
							<td>Basic</td>
						</tr>
						<tr>
							<td>Conduct Research</td>
							<td>Premium</td>
							<td>Standard</td>
							<td>Basic</td>
						</tr>
						<tr>
							<td>Source File</td>
							<td>Premium</td>
							<td>Standard</td>
							<td>Basic</td>
						</tr>
						<tr>
							<td>Revisions</td>
							<td>Premium</td>
							<td>Standard</td>
							<td>Basic</td>
						</tr>
						<tr>
							<td>Delivery Time</td>
							<td>Premium</td>
							<td>Standard</td>
							<td>Basic</td>
						</tr>

					</tbody>

				</table>





				<hr>
				<p class="text-primary"><?php echo $row->project_description?></p>
				<a href="" class="btn btn-success">$30</a>
				<hr>
				<p class="text-primary"><?php echo $row->project_requirements?></p>
				<a href="" class="btn btn-success">$40</a>
				<hr>
				<p class="text-primary"><?php echo $row->project_delivery?> Delivery</p>
				<a href="" class="btn btn-success">$50</a>
			</div>
			<div class="card border-success  p-4 mb-3" style="margin-left: 150px;">
				<h5 >About this Project</h5>
				<hr>
				<p class="text-primary"><?php echo $row->project_description?></p>
				<hr>
				<p class="text-primary"><?php echo $row->project_requirements?></p>
				<hr>
				<p class="text-primary"><?php echo $row->project_delivery?> Delivery</p>
			</div>
			<div class="card border-success  p-4 mb-3" style="margin-left: 150px;">
				<h5 >Reviews about this Project</h5>
				<hr>
				<p class="text-primary"><?php echo $row->project_description?></p>
				<hr>
				<p class="text-primary"><?php echo $row->project_requirements?></p>
				<hr>
				<p class="text-primary"><?php echo $row->project_delivery?> Delivery</p>
			</div>
		</div>
		<div class="col-md-5">
			<div class="card border-success  p-2 mb-3" style="margin-right: 150px; ">
				 <h4><?php echo "$50"?>Premium</h4>					
				 <a class="btn btn-success" href="<?php echo base_url()?>search/buy_project/<?php echo $row->project_title_slug.$row->id?>">Purchase</a>
					  
			</div>
			<div class="card border-success  p-2 mb-3 " style="margin-right: 150px; ">
				 <h4><?php echo "$40"?>Standard</h4>
					<a class="btn btn-success" href="<?php echo base_url()?>search/buy_project/<?php echo $row->project_title_slug.$row->id?>">Purchase</a>
					  
			</div>
			<div class="card border-success  p-2 mb-3" style="margin-right: 150px;">
				 <h4><?php echo "$30"?>Basic</h4>
					<a class="btn btn-success" href="<?php echo base_url()?>search/buy_project/<?php echo $row->project_title_slug.$row->id?>">Purchase</a>
					  
			</div>
			<div class="card border-success  p-4 " style="margin-right: 150px;">
				
				<?php foreach ($publisher as $row):?>
					
				 <img  class="img-circle" style="margin-left: 50px;" src=" <?php 
				 	$img =  $row->account_img;
				 	if(empty($img))
				 	{
				 		echo site_url('uploads/profile/pic.jpg');
				 	}
				 	else

				echo site_url('uploads/'.$row->account_img);?>"  width="210" height="180">
				 <br>
				
					<h3 class="text-center"><?php echo $row->account_username?></h3>
					<input class="btn btn-success" value="Contact Me">
					<div class="row">
						<div class="col-md-6">
							<p class="text-left text-primary">Member Since</p> 
						</div>
						<div class="col-md-6">
							<p class=" text-primary text-right"><?php $date = $row->account_date_joined; echo date("M Y",strtotime($date))?></p>
						</div>
						
					</div>


			</div>
			
		</div>
	</div>


	<div class="container">
		<hr>
		<h3>Other Projects by <a href="#"><?php echo $row->account_username?></a></h3>
		<?php endforeach?>
		<hr>
		<div class="row">

		<?php foreach($proj as $row):?>
		<!-- <?php print_r($proj)?> -->
			<div class="col-md-3" style="padding: 8px;">
				<div class="card">
				  <img style="height: 200px; width: 100%; display: block;" src="<?php echo site_url("uploads/$row->project_image"); ?>" " alt="Card image">

				  <div class="card-body" style="padding-top: 10px;">
				     <p class="card-text text-center" style="margin:2px;">
				    	<?php $date = $row->project_date_posted; echo date("M j, Y, g:i",strtotime($date))?></p>
				  
				   	<h6 class="text-center text-primary" style="margin:3px";><?php echo $row->project_title;?></h6>
				  </div>
				 
				</div>
			</div>

		<?php endforeach; ?>
		</div>


	</div>




</div>


