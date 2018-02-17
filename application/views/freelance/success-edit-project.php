<div class="jumbotron p-5">
	


<div class="row">
	<div class="col-md-7">
		<div class="card border-success mb-3" style="max-width: 80rem;">
		 <?php foreach ($view as $row):?>
		   <div class="card-body text-success">
		    <h5 class="card-title"><?php echo $row->project_title?></h5>
		    
		    <hr>
		  
		  </div>

		 
		  <table class="table table-striped table-hover table-bordered">
		    <tbody>
		      <tr>
		        <td><b class="text-primary"><p></p>Title</b></td>
		        <td class="col-2">
		        	<input class="form-control" type="text" name="title" value="<?php echo $row->project_title?>"></td>
		      </tr>
		      <tr>
		        <td><b class="text-primary"><p></p>Service</b></td>
		        <td><input class="form-control" type="text" name="title" value="<?php echo $row->project_service_type?>"></td>
		      </tr>
		      <tr>
		        <td><b class="text-primary"><p></p>Category</b></td>
		        <td><input class="form-control" type="text" name="title" value="<?php echo $row->project_category?>"></td>
		      </tr>
		      <tr>
		        <td><b class="text-primary"><p></p>Sub-Category</b></td>
		        <td><input class="form-control" type="text" name="title" value="<?php echo $row->project_subcategory?>"></td>
		      </tr>
		      <tr >
		        <td><b class="text-primary"><p></p>Offer</b></td>
		        <td><input class="form-control" type="text" name="title" value="<?php echo $row->project_offer?>"></td>
		        
		      </tr>
		      <tr >
		        <td><b class="text-primary"><p></p>Price</b></td>
		        <td><input class="form-control" type="text" name="title" value="<?php echo $row->project_price?>"></td>
		        
		      </tr>
		      <tr >
		        <td><b class="text-primary"><p></p>Delivery</b></td>
		        <td><input class="form-control" type="text" name="title" value="<?php echo $row->project_delivery?>"></td>
		       
		      </tr>
		      <tr>
		        <td><b class="text-primary"><p></p>Description</b></td>
		        <td><input class="form-control" type="text" name="title" value="<?php echo $row->project_description?>"></td>
		      
		        
		      </tr>
		      <tr >
		        <td><b class="text-primary"><p></p>Requirements</b></td>
		        <td><input class="form-control" type="text" name="title" value="<?php echo $row->project_requirements?>"></td>
		      
		        
		      </tr>
		      
		    </tbody>
		  </table> 
		 




		</div>
		<br>


	
	</div>

	<div class="col-md-5">
		<div class="card border-success" style="">
		 
		  <div class="card-body text-center">
		  <!--  <img src="<?php echo site_url("uploads/$row->project_image"); ?>" style="height: 200px; width: 100%; display: block;"> -->
		    <img style="height: 410px; width: 100%; display: block;" src="<?php echo site_url("uploads/$row->project_image"); ?>" alt="Card image">
		   <?php endforeach?>
		  </div>

		</div><br>
		<div class="card border-success" style="">
		 
		  <div class="card-body text-center">
		 	<button class="btn btn-info" type="submit" name="update">Update</button>
		 	<button class="btn btn-danger" type="submit" name="remove">Remove</button>
<!-- 		 	 <button class="btn btn-info" data-toggle="modal" data-target="#updateProject">Update</button>
		 	<button class="btn btn-danger" data-toggle="modal" data-target="#removeProject" >Remove</button> -->


		 	


		 	  <div class="modal fade" id="updateProject" role="dialog">
		 	    <div class="modal-dialog" role="document">
		 	    	<form method="POST" action="<?php echo base_url()?>users/update_project">
		 	      <div class="modal-content">
		 	        <div class="modal-header">
		 	          <h5 class="modal-title text-center">Update Project</h5>
		 	          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
		 	            <span aria-hidden="true">&times;</span>
		 	          </button>
		 	        </div>
		 	        <div class="modal-body">
		 	          <p class="text-primary">Please input your password to continue</p>
		 	          <input class="form-control p-1 mb-1" type="text" id="username" name="username" value="<?php echo $this->session->userdata('email');?>">
		 	          <input class="form-control mb-1" type="password" required="true" id="password" name="password" placeholder="password">
		 	        </div>
		 	        <div class="modal-footer">
		 	          <input type="submit" class="btn btn-primary" name="action" value="Proceed">
		 	          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
		 	        </div>
		 	      </div>

		 	      </form><!-- end form -->
		 	    </div>
		 	</div>

		  </div>
		

		    <div class="modal fade" id="removeProject" role="dialog">
		      <div class="modal-dialog" role="document">
		        <div class="modal-content">
		          <div class="modal-header">
		            <h5 class="modal-title text-center">Remove Project</h5>
		            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
		              <span aria-hidden="true">&times;</span>
		            </button>
		          </div>
		          <div class="modal-body">
		            <p class="text-primary">Please input your password to continue</p>
		  		  <input class="form-control" type="password" name="password" placeholder="password">
		          </div>
		          <div class="modal-footer">
		            <button type="button" class="btn btn-primary">Proceed</button>
		            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
		          </div>
		        </div>
		      </div>

		    
		  </div>


		</div>
	</div>



	

</div>
	


</div>