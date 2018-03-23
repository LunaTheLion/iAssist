<?php foreach ($view as $row):?>
	<div class="card border-success  p-4 mb-3" style="margin-left: 100px;">
		<h5 >Compare Packages</h5>
		<table class="table table-bordered" >
				  	  <thead>
				  	    <tr>
				  	      <th></th>
				  	      
				  	      <th><h5 class="text-center">Basic</h5></th>
				  	      <th><h5 class="text-center">Standard</h5></th>
				  	      <th><h5 class="text-center">Premium</h5></th>
				  	    </tr>
				  	  </thead>
				  	  <tbody>
				  	    <tr>
				  	      <th rowspan="3"><p class="text-primary text-center">&nbsp;</p></th>
				  	      
				  	      <td style="padding: 0px;">
				  	      	<textarea class="form-control" type="text" id="tx" disabled="" name="title" rows="4" cols="3" style="padding: 8px; background-color: #ffffff;" placeholder="" ><?php echo $row->project_basic_offer?></textarea>
				  	      </td>
				  	      <td style="padding: 0px;">
				  	      	<textarea class="form-control" rows="4" id="tx" disabled="" cols="3" name="title2" style="padding: 8px; background-color: #ffffff;" placeholder="Name of your Package"> <?php echo $row->project_standard_offer?></textarea>
				  	      </td>
				  	      <td style="padding: 0px;">
				  	      	<textarea class="form-control" rows="4" id="tx" disabled="" cols="3" name="title3" style="padding: 8px; background-color: #ffffff;" placeholder="Name of your package"><?php echo $row->project_premium_offer?></textarea></td>
				  	      	

				  	    </tr>

				  	  
				  	    <tr>
				  	      <!-- <th scope="row">3</th> -->
				  	      
				  	      <td style="padding: 0px;">
				  	      	<textarea class="form-control" rows="8" id="tx" disabled="" name="offer" cols="5" style="padding: 8px; background-color: #ffffff;" placeholder=""><?php echo $row->project_basic_description1?></textarea>
				  	      </td>
				  	      <td style="padding: 0px;">
				  	      	<textarea class="form-control" rows="8" id="tx" disabled="" name="offer2" cols="5" style="padding: 8px; background-color: #ffffff;" placeholder="Describe the details of your offering"> <?php echo $row->project_standard_description1?></textarea>
				  	      </td>
				  	      <td style="padding: 0px;">
				  	      <textarea class="form-control" rows="8" id="tx" disabled="" name="offer3" cols="5" style="padding: 8px; background-color: #ffffff;" placeholder="Describe the details of your offering"><?php echo $row->project_premium_description1?></textarea>
				  	  		</td>

				  	    </tr>

				  	    <tr>
				  	      
				  	      <!-- <td style="padding: 0px;">
				  	      	<p>input</p>
				  	      </td>
				  	      <td style="padding: 0px;">
				  	      	<p>input</p>
				  	      </td>
				  	      <td style="padding: 0px; ">
				  	      	<p>input</p>
				  	      </td> -->

				  	    </tr>
				  	    <!-- <tr>
				  	    	<td style="padding: 0px; ">
				  	    		<textarea class="form-control" type="text" id="tx" name="offer1" rows="2" cols="2" style="padding: 8px; background-color: #ffffff;" placeholder="" ><?php echo $this->session->userdata('title')?></textarea>
				  	    	</td>
				  	    	<td style=" padding: 0px;">
				  	    		<div class="form-check">
				  	    			<label class="form-check-label">
				  	    			<input class="form-check-input" name="list1" type="checkbox" style="margin-left: 30%;" />
									</label>
				  	    		</div>
				  	    	</td>
				  	    	<td style="padding: 0px; ">
				  	    		<div class="form-check">
				  	    			<label class="form-check-label">
				  	    			<input class="form-check-input" name="list2" type="checkbox" style="margin-left: 40%;" />
									</label>
				  	    		</div>
				  	    	</td>
				  	    	<td style="padding: 0px; ">
				  	    		<div class="form-check">
				  	    			<label class="form-check-label">
				  	    			<input class="form-check-input" name="list3" type="checkbox" style="margin-left: 35%;" />
									</label>
				  	    		</div>
				  	    	</td>
				  	    </tr> -->
				  	  
				  	
				  	     
				 
				  
				  	    <tr>
				  	      
				  	      <td style="padding-bottom: 0px;"><h6 class="text-primary text-center">Price</h6></td>
				  	      <td style="padding: 0px;">
				  	      	<a href="" class="btn btn-success btn-block">P<?php echo $row->project_price?></a>
				  	      </td>
				  	      <td style="padding: 0px;" >
				  	      	<a href="" class="btn btn-success btn-block">$40</a>
				  	      </td>
				  	      <td style="padding: 0px;">
				  	      	<a href="" class="btn btn-success btn-block">$60</a>
				  	      		
				  	      </td>
				  	    </tr>
				  	    
				  	   
				  	  </tbody>
				  	</table>

	</div>
<?php endforeach ?>