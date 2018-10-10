	
<div class="jumbotron">
	<?php foreach ($view as $row):?>
<title>View Project <?php echo $row->project_title?> </title>
	<div class="row">
		<div class="col-md-7">
			<div class="card border-success mb-2" style="margin-left: 100px;">
				
			  <h3 class="card-header"><?php echo $row->project_title?></h3>
			  <div class="card-body">
			    <h5 class="card-title"><a href="<?php ?>"><?php echo $row->project_category?></a></h5>
			    
			  </div>
			  <img style="height: 410px; width: 100%; display: block;" src="<?php echo site_url("uploads/$row->project_image"); ?>" alt="Card image">
			
			 
			  <?php endforeach?>

			</div>
				<br>
		
				<?php if($row->project_package == 1) 
						{
							
							include 'project-with-package.php';
						}
						
				?>
			
			<div class="card border-success  p-4 mb-3" style="margin-left: 100px;">
				<h5 >About this Project</h5>
				<hr>
				<p class="text-primary"><?php echo $row->project_description?></p>
			
				<p class="text-primary"><?php echo $row->project_requirements?></p>
		
				
			</div>
			<?php if($row->project_package == 0)
						{
							
							include 'project-no-package.php';
						} ?>
			<div class="card border-success  p-4 mb-3" style="margin-left: 100px;">
				<h5 >Reviews about this Project</h5>
				<hr>
				
			</div>
		</div>
		<div class="col-md-5">
			<?php if($row->project_package == 1) 
						{
							
							include 'project-with-package-side.php';
						}
						else
						{
							include 'project-no-package-side.php';
						}
						
				?>


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

					<a href="<?php base_url()?>/iAssist/search/view_projects/<?php echo $row->project_title_slug."0".$row->id?>">
						<img style="height: 150px; width: 100%; display: block;" src="<?php echo site_url("uploads/$row->project_image"); ?>"  alt="Card image"></a>


				

				  <?php
				    		$string = $row->project_title;
				    		$num = strlen($string);
				    	 if( $num <= 42 )
				    	 {

				    	 	echo '<div class="card-body" style="padding-top: 10px;">
				     <p class="card-text text-center" style="margin:2px;">';
				    	 $date = $row->project_date_created; echo date("M j, Y, g:i",strtotime($date));
				    	 echo '</p>';
				  			echo "<h6 class='text-center text-primary' style='margin:0px';>". $row->project_title."</h6>";
				  

							  echo '</div>';


				    	 	
				    	 }
				    	 else
				    	 {

				    	 	echo '<div class="card-body" style="padding-top: 10px; padding-bottom: 15px; padding-right: 3px;padding-left: 3px;">
				     <p class="card-text text-center" style="margin:2px;">';
				    	 $date = $row->project_date_created; echo date("M j, Y, g:i",strtotime($date));
				    	 echo '</p>';
				  	echo "<h6 class='text-center text-primary' style='margin:3px';>". $row->project_title."</h6>";
				  

							echo'</div>';
				    	 	
				    	 }

				    	 ?>


				 
				</div>
			</div>

		<?php endforeach; ?>
		</div>


	</div>




</div>


