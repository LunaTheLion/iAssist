<div class="jumbotron p-5">
	


<div class="row">
	<div class="col-md-7">
		<div class="card border-success mb-3" style="max-width: 80rem;">
		 
		   <div class="card-body text-success">
		    <h5 class="card-title"><?php echo $this->session->userdata('title')?></h5>
		   
		    <hr>
		  
		  </div>


		  <table class="table table-striped table-hover table-bordered">
		    <tbody>
		      <tr>
		        <td><b>Title</b></td>
		        <td class="col-2"><p class="text-primary"><?php echo $this->session->userdata('title')?></p></td>
		        
		       
		      </tr>
		      <tr>
		        <td><b>Service</b></td>
		        <td><p class="text-primary"><?php echo $this->session->userdata('service')?></p></td>
		        
		        
		      </tr>
		      <tr >
		        <td><b>Offer</b></td>
		        <td><p class="text-primary"><?php echo $this->session->userdata('offer')?></p></td>
		        
		      </tr>
		      <tr >
		        <td><b>Delivery</b></td>
		        <td><p class="text-primary"><?php echo $this->session->userdata('delivery')?></p></td>
		       
		      </tr>
		      
		      <tr >
		        <td><b>Requirements</b></td>
		        <td><p class="text-primary"><?php echo $this->session->userdata('requirements')?></p></td>
		      
		        
		      </tr>
		      
		    </tbody>
		  </table> 
		  




		</div>
		<br>


	
	</div>

	<div class="col-md-5">
		<div class="card border-success p-4" style="max-width: 100rem;">
		 
		  <div class="card-body text-center">
		   <img src="<?php echo $img?>" width="340" height="310">
		  </div>
		</div>

		 <br>
		 		<div class="card border-success" style="">
		 		 
		 		  <div class="card-body text-center">
		 		 	<a class="btn btn-info btn-block" href="<?php echo base_url('users/projects')?>">Done</a>
		 		 	
		 		  </div>
		 		
		 		</div>
	</div>

	

</div>
	


</div>