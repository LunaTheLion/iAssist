<div class="jumbotron">
	<title>My Projects</title>


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
			  <a href="<?php base_url()?>/iAssist/users/edit_projects/<?php echo $row->project_title_slug.$row->id?>"><img style="height: 250px; width: 100%; display: block;" src="<?php echo site_url("uploads/$row->project_image"); ?>" " alt="Card image">
			  	</a>
			  <div class="card-body" style="padding-top: 10px;">
			    <p class="card-text text-center" style="margin:2px;"><?php $date = $row->project_date_posted; echo date("M j, Y, g:i",strtotime($date));?></p>
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


<div class="container">
  <h2>Modal</h2>
  <!-- Trigger the modal with a button -->
  <button type="button" class="btn btn-success btn-md" data-toggle="modal" data-target="#editProject">Another Modal</button>


  <div class="modal fade" id="editProject" role="dialog">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Modal title</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <p>Modal body text goes here.</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-primary">Save changes</button>
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>




</div> 


</div>