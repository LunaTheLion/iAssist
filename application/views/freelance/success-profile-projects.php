<div class="jumbotron p-5">
	


<div class="row">
	<div class="col-md-7">
		<div class="card border-success mb-3" style="max-width: 80rem;">
		 
		   <div class="card-body text-success">
		    <h5 class="card-title"><?php echo $this->session->userdata('title')?></h5>
		    <h5 class="card-title text-right"><a href="<?php echo base_url('users/index')?>">Done</a></h5>
		    <hr>
		    <!--
		    <p class="text-primary"><b>Title</b>&nbsp;&nbsp;<?php echo $this->session->userdata('title')?></p>
<!-- 		    <p class="text-primary"><b>Category</b>&nbsp;&nbsp;<?php echo $this->session->userdata('category')?></p>
		    <p class="text-primary"><b>Sub-Category</b>&nbsp;&nbsp;<?php echo $this->session->userdata('subcategory')?></p> -->
		   <!--  <p class="text-primary"><b>Type of Service</b>&nbsp;&nbsp;<?php echo $this->session->userdata('service')?></p>
		    <p class="text-primary"><b>Service Offer</b>&nbsp;&nbsp;<?php echo $this->session->userdata('offer')?></p>
		    <p class="text-primary"><b>Time of Delivery</b>&nbsp;&nbsp;<?php echo $this->session->userdata('delivery')?></p> -->
		   <!--  <p class="text-primary"><b>Service Description</b>&nbsp;&nbsp;<?php echo $this->session->userdata('description')?></p> -->
		    <!--<p class="text-primary"><b>Requirements</b>&nbsp;&nbsp;<?php echo $this->session->userdata('requirements')?></p>
		    
		

-->
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
		      <tr>
		        <td><b>Description</b></td>
		        <td><p class="text-primary"><?php echo $this->session->userdata('description')?></p></td>
		      
		        
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
	</div>

	

</div>
	


</div>