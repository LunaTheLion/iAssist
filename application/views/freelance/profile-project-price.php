<style type="text/css">
	.input[type="text"], textarea {

  background-color : #ffffff; 

}
</style>

<title>Pricing</title>
<div class="jumbotron">
	<div class="container">
		<div class="row">
			<div class="col-md-8">
				
					<form action="<?php echo site_url('users/validate_project_pricing')?>" method="POST">
						
						<div class="card border-primary mb-5">
							 
						  <div class="card-body">
						  	

						  	<!-- Rounded switch -->
						  	<div class="card-head">
						  			



						  		<div class="row">
						  			<div class="col-md-6">
						  				<h4>Activate Package</h4>
						  			</div>
						  			
						  			<div class="col-md-2">
						  				
						  			</div>
						  			<div class="col-md-2">
						  			
						  			</div>
						  			<div class="col-md-2">
						  				<label class="switch" >
						  		  			<input type="checkbox" id="package">
						  		  			<!-- <input id="test_id" type="checkbox"  checked data-toggle="toggle"> -->
						  		  			<span class="slider round"></span>s
						  				</label>

						  			</div>
						  		</div>
						  	</div>
						  	

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
						  	      	<textarea class="form-control tx" type="text"  name="title" rows="4" cols="3" style="padding: 8px; background-color: #ffffff;" placeholder="" ><?php echo $this->session->userdata('title')?></textarea>
						  	      </td>
						  	      <div class="iam" id="iam">

						  	      <td style="padding: 0px;">
						  	      	<textarea class="form-control tx" rows="4" cols="3" name="title2" id="hideme" style="padding: 8px; background-color: #ffffff;" placeholder="Name of your Package"></textarea>
						  	      </td>

						  	      <td style="padding: 0px;">
						  	      	<textarea class="form-control tx" rows="4" cols="3" name="title3" id="hideme" style="padding: 8px; background-color: #ffffff;" placeholder="Name of your package"></textarea></td>
						  	      </div>
						  	      

						  	    </tr>

						  	  
						  	    <tr>
						  	      <!-- <th scope="row">3</th> -->
						  	      
						  	      <td style="padding: 0px;">
						  	      	<textarea class="form-control tx" rows="4"  name="offer" cols="3" style="padding: 8px; background-color: #ffffff;" placeholder=""><?php echo $this->session->userdata('offer')?></textarea>
						  	      </td>
						  	      <td style="padding: 0px;">
						  	      	<textarea class="form-control tx" rows="4" id="hideme" name="offer2" cols="3" style="padding: 8px; background-color: #ffffff;" placeholder="Describe the details of your offering"></textarea>
						  	      </td>
						  	      <td style="padding: 0px;">
						  	      <textarea class="form-control tx" rows="4" name="offer3" cols="3" id="hideme" style="padding: 8px; background-color: #ffffff;" placeholder="Describe the details of your offering"></textarea>
						  	  		</td>

						  	    </tr>

						  	    <tr>
						  	      
						  	      <td style="padding: 0px;">
						  	      	<select class="form-control tx" name="delivery" style="background-color: #ffffff; padding: 5px;">
						  	      		<option selected="" value="<?php echo $this->session->userdata('delivery')?>"><?php echo $this->session->userdata('delivery')?></option>
						  	      	 <option value="1 Days">1 Day </option>
								       <option value="2 Days">2 Days </option>
								       <option value="3 Days">3 Days </option>
								       <option value="4 Days">4 Days </option>
								       <option value="5 Days">5 Days </option>
								       <option value="6 Days">6 Days </option>
								       <option value="7 Days">7 Days </option>
								       <option value="8 Days">8 Days </option>
								       <option value="9 Days">9 Days </option>
								       <option value="10 Dasy">10 Days </option>
								       <option value="11 Days">11 Days </option>
								       <option value="12 Days">12 Days </option>
								       <option value="13 Days">13 Days </option>
								       <option value="14 Days">14 Days </option>
								       <option value="15 Days">15 Days </option>
								       <option value="16 Days">16 Days </option>
								       <option value="17 Days">17 Days </option>
								       <option value="18 Days">18 Days </option>
								       <option value="19 Days">19 Days </option>
								       <option value="20 Days">20 Days </option>
								       <option value="21 Days">21 Days </option>
								       <option value="22 Days">22 Days </option>
								       <option value="23 Days">23 Days </option>
								       <option value="24 Days">14 Days </option>
								       <option value="25 Days">25 Days </option>
								       <option value="26 Days">26 Days </option>
								       <option value="27 Days">27 Days </option>
								       <option value="28 Days">28 Days </option>
								       <option value="29 Days">29 Days </option>


						  	      	</select>
						  	      </td>
						  	      <td style="padding: 0px;">
						  	      	<select class="form-control" name="delivery2" id="hideme" style="background-color: #ffffff; padding: 5px;">
						  	      		<option selected="">Delivery Time</option>
						  	      		 <option value="1 Days">1 Day </option>
								       <option value="2 Days">2 Days </option>
								       <option value="3 Days">3 Days </option>
								       <option value="4 Days">4 Days </option>
								       <option value="5 Days">5 Days </option>
								       <option value="6 Days">6 Days </option>
								       <option value="7 Days">7 Days </option>
								       <option value="8 Days">8 Days </option>
								       <option value="9 Days">9 Days </option>
								       <option value="10 Dasy">10 Days </option>
								       <option value="11 Days">11 Days </option>
								       <option value="12 Days">12 Days </option>
								       <option value="13 Days">13 Days </option>
								       <option value="14 Days">14 Days </option>
								       <option value="15 Days">15 Days </option>
								       <option value="16 Days">16 Days </option>
								       <option value="17 Days">17 Days </option>
								       <option value="18 Days">18 Days </option>
								       <option value="19 Days">19 Days </option>
								       <option value="20 Days">20 Days </option>
								       <option value="21 Days">21 Days </option>
								       <option value="22 Days">22 Days </option>
								       <option value="23 Days">23 Days </option>
								       <option value="24 Days">14 Days </option>
								       <option value="25 Days">25 Days </option>
								       <option value="26 Days">26 Days </option>
								       <option value="27 Days">27 Days </option>
								       <option value="28 Days">28 Days </option>
								       <option value="29 Days">29 Days </option>

						  	      	</select>
						  	      </td>
						  	      <td style="padding: 0px; "><select class="form-control" id="hideme" name="delivery3" style="background-color: #ffffff; padding: 5px;">
						  	      		<option selected="">Delivery Time</option>
						  	      		 <option value="1 Days">1 Day Delivery</option>
								       <option value="2 Days">2 Days Delivery</option>
								       <option value="3 Days">3 Days Delivery</option>
								       <option value="4 Days">4 Days Delivery</option>
								       <option value="5 Days">5 Days Delivery</option>
								       <option value="6 Days">6 Days Delivery</option>
								       <option value="7 Days">7 Days Delivery</option>
								       <option value="8 Days">8 Days Delivery</option>
								       <option value="9 Days">9 Days Delivery</option>
								       <option value="10 Dasy">10 Days Delivery</option>
								       <option value="11 Days">11 Days Delivery</option>
								       <option value="12 Days">12 Days Delivery</option>
								       <option value="13 Days">13 Days Delivery</option>
								       <option value="14 Days">14 Days Delivery</option>
								       <option value="15 Days">15 Days Delivery</option>
								       <option value="16 Days">16 Days Delivery</option>
								       <option value="17 Days">17 Days Delivery</option>
								       <option value="18 Days">18 Days Delivery</option>
								       <option value="19 Days">19 Days Delivery</option>
								       <option value="20 Days">20 Days Delivery</option>
								       <option value="21 Days">21 Days Delivery</option>
								       <option value="22 Days">22 Days Delivery</option>
								       <option value="23 Days">23 Days Delivery</option>
								       <option value="24 Days">14 Days Delivery</option>
								       <option value="25 Days">25 Days Delivery</option>
								       <option value="26 Days">26 Days Delivery</option>
								       <option value="27 Days">27 Days Delivery</option>
								       <option value="28 Days">28 Days Delivery</option>
								       <option value="29 Days">29 Days Delivery</option>


						  	      	</select></td>

						  	    </tr>
						  	    <tr>
						  	    	<td style="padding: 0px; ">
						  	    		<textarea class="form-control" type="text"  name="offer1" rows="2" cols="2" style="padding: 8px; background-color: #ffffff;" placeholder="Included Offers" ></textarea>
						  	    	</td>
						  	    	<td style=" padding: 0px;">
						  	    		<div class="form-check">
						  	    			<label class="form-check-label">
						  	    			<input class="form-check-input" name="list1" type="checkbox"  style="margin-left: 30%;" />
											</label>
						  	    		</div>
						  	    	</td>
						  	    	<td style="padding: 0px; ">
						  	    		<div class="form-check">
						  	    			<label class="form-check-label">
						  	    			<input class="form-check-input" name="list2" type="checkbox" id="hideme" style="margin-left: 40%;" />
											</label>
						  	    		</div>
						  	    	</td>
						  	    	<td style="padding: 0px; ">
						  	    		<div class="form-check">
						  	    			<label class="form-check-label">
						  	    			<input class="form-check-input" name="list3" type="checkbox" id="hideme" style="margin-left: 35%;" />
											</label>
						  	    		</div>
						  	    	</td>
						  	    </tr>
						  	    <tr>
						  	    	<td style="padding: 0px; ">
						  	    			<textarea class="form-control tx" type="text" name="offer2" rows="2" cols="2" style="padding: 8px; background-color: #ffffff;" placeholder="Included Offers" ></textarea>
						  	    	</td>
						  	    	<td style="padding: 0px; ">
						  	    		<div class="form-check">
						  	    			<label class="form-check-label">
						  	    			<input class="form-check-input" name="list4" type="checkbox" style="margin-left: 30%;" />
											</label>
						  	    		</div>
						  	    	</td>
						  	    	<td style="padding: 0px; ">
						  	    		<div class="form-check">
						  	    			<label class="form-check-label">
						  	    			<input class="form-check-input" name="list5" type="checkbox" id="hideme" style="margin-left: 40%;" />
											</label>
						  	    		</div>
						  	    	</td>
						  	    	<td style="padding: 0px; ">
						  	    		<div class="form-check">
						  	    			<label class="form-check-label">
						  	    			<input class="form-check-input" name="list6" type="checkbox" id="hideme" style="margin-left: 35%;" />
											</label>
						  	    		</div>
						  	    	</td>
						  	    </tr>
						  	    <tr>
						  	    	<td style="padding: 0px; ">
						  	    			<textarea class="form-control" type="text" id="tx" name="offer3" rows="2" cols="2" style="padding: 8px; background-color: #ffffff;" placeholder="Included Offers" ></textarea>
						  	    	</td>
						  	    	<td style="padding: 0px; ">
						  	    		<div class="form-check">
						  	    			<label class="form-check-label">
						  	    			<input class="form-check-input" name="list7" type="checkbox" style="margin-left: 30%;" />
											</label>
						  	    		</div>
						  	    	</td>
						  	    	<td style="padding: 0px; ">
						  	    		<div class="form-check">
						  	    			<label class="form-check-label">
						  	    			<input class="form-check-input" name="list8" type="checkbox" id="hideme" style="margin-left: 40%;" />
											</label>
						  	    		</div>
						  	    	</td>
						  	    	<td style="padding: 0px; ">
						  	    		<div class="form-check">
						  	    			<label class="form-check-label">
						  	    			<input class="form-check-input" name="list9" type="checkbox" id="hideme" style="margin-left: 35%;" />
											</label>
						  	    		</div>
						  	    	</td>
						  	    </tr>
						  	     <tr>
						  	    	<td style="padding: 0px; ">
						  	    			<textarea class="form-control" type="text" id="tx" name="offer4" rows="2" cols="2" style="padding: 8px; background-color: #ffffff;" placeholder="Included Offers" ></textarea>
						  	    	</td>
						  	    	<td style="padding: 0px; ">
						  	    		<div class="form-check">
						  	    			<label class="form-check-label">
						  	    			<input class="form-check-input" name="list10" type="checkbox" style="margin-left: 30%;" />
											</label>
						  	    		</div>
						  	    	</td>
						  	    	<td style="padding: 0px; ">
						  	    		<div class="form-check">
						  	    			<label class="form-check-label">
						  	    			<input class="form-check-input" name="list11" type="checkbox" id="hideme" style="margin-left: 40%;" />
											</label>
						  	    		</div>
						  	    	</td>
						  	    	<td style="padding: 0px; ">
						  	    		<div class="form-check">
						  	    			<label class="form-check-label">
						  	    			<input class="form-check-input" name="list12" type="checkbox" id="hideme" style="margin-left: 35%;" />
											</label>
						  	    		</div>
						  	    	</td>
						  	    </tr>
						  	     <tr>
						  	    	<td style="padding: 0px; ">
						  	    			<textarea class="form-control" type="text" id="tx" name="offer5" rows="2" cols="2" style="padding: 8px; background-color: #ffffff;" placeholder="Included Offers" ></textarea>
						  	    	</td>
						  	    	<td style="padding: 0px; ">
						  	    		<div class="form-check">
						  	    			<label class="form-check-label">
						  	    			<input class="form-check-input" name="list13" type="checkbox" style="margin-left: 30%;" />
											</label>
						  	    		</div>
						  	    	</td>
						  	    	<td style="padding: 0px; ">
						  	    		<div class="form-check">
						  	    			<label class="form-check-label">
						  	    			<input class="form-check-input" name="list14" type="checkbox" id="hideme" style="margin-left: 40%;" />
											</label>
						  	    		</div>
						  	    	</td>
						  	    	<td style="padding: 0px; ">
						  	    		<div class="form-check">
						  	    			<label class="form-check-label">
						  	    			<input class="form-check-input" name="list15" type="checkbox" id="hideme" style="margin-left: 35%;" />
											</label>
						  	    		</div>
						  	    	</td>
						  	    </tr>
						  	     <tr>
						  	    	<td style="padding: 0px; ">
						  	    			<textarea class="form-control" type="text" id="tx" name="offer6" rows="2" cols="2" style="padding: 8px; background-color: #ffffff;" placeholder="Included Offers" ></textarea>
						  	    	</td>
						  	    	<td style="padding: 0px; ">
						  	    		<div class="form-check">
						  	    			<label class="form-check-label">
						  	    			<input class="form-check-input" name="list16" type="checkbox" style="margin-left: 30%;" />
											</label>
						  	    		</div>
						  	    	</td>
						  	    	<td style="padding: 0px; ">
						  	    		<div class="form-check">
						  	    			<label class="form-check-label">
						  	    			<input class="form-check-input" name="list17" type="checkbox" id="hideme" style="margin-left: 40%;" />
											</label>
						  	    		</div>
						  	    	</td> 
						  	    	<td style="padding: 0px; ">
						  	    		<div class="form-check">
						  	    			<label class="form-check-label">
						  	    			<input class="form-check-input" name="list18" type="checkbox" id="hideme" style="margin-left: 35%;" />
											</label>
						  	    		</div>
						  	    	</td>
						  	    </tr>
						  	    <tr>
						  	      <td style="padding-bottom: 0px;"><h6 class="text-primary text-center">Revisions</h6></td>
						  	      <td style="padding: 0px;">
						  	      	<select class="form-control" style="background-color: #ffffff; padding: 5px;">
						  	      		<option selected="">Select</option>
						  	      		<option value="0">0</option>
						  	      		<option value="1">1</option>
						  	      		<option value="2">2</option>
						  	      		<option value="3">3</option>
						  	      		<option value="4">4</option>
						  	      		<option value="5">5</option>
						  	      		<option value="6">6</option>
						  	      		<option value="7">7</option>
						  	      		<option value="8">8</option>
						  	      		<option value="9">9</option>
						  	      		<option value="Unlimited">Unlimited</option>

						  	      	</select>
						  	      </td>
						  	      <td style="padding: 0px;">
						  	      	<select class="form-control" id="hideme" style="background-color: #ffffff; padding: 5px;">
						  	      		<option selected="">Select</option>
						  	      		<option value="0">0</option>
						  	      		<option value="1">1</option>
						  	      		<option value="2">2</option>
						  	      		<option value="3">3</option>
						  	      		<option value="4">4</option>
						  	      		<option value="5">5</option>
						  	      		<option value="6">6</option>
						  	      		<option value="7">7</option>
						  	      		<option value="8">8</option>
						  	      		<option value="9">9</option>
						  	      		<option value="Unlimited">Unlimited</option>


						  	      	</select>
						  	      </td>
						  	      <td style="padding: 0px;">
						  	      	<select class="form-control" id="hideme" style="background-color: #ffffff; padding: 5px;">
						  	      		<option selected="">Select</option>
						  	      		<option value="0">0</option>
						  	      		<option value="1">1</option>
						  	      		<option value="2">2</option>
						  	      		<option value="3">3</option>
						  	      		<option value="4">4</option>
						  	      		<option value="5">5</option>
						  	      		<option value="6">6</option>
						  	      		<option value="7">7</option>
						  	      		<option value="8">8</option>
						  	      		<option value="9">9</option>
						  	      		<option value="Unlimited">Unlimited</option>


						  	      	</select>
						  	      </td>

						  	    </tr>
						  	    <tr>
						  	      
						  	      <td style="padding-bottom: 0px;"><h6 class="text-primary text-center">Price</h6></td>
						  	      <td style="padding: 0px;">
						  	      	<select class="form-control" style="background-color: #ffffff; padding: 5px;" >
						  	      		<option selected="" value="<?php echo $this->session->userdata('price')?>">Php <?php echo $this->session->userdata('price')?></option>
						  	      		<option value="5">Php 5</option>
						  	      		<option value="5">Php 10</option>
						  	      		<option value="5">Php 15</option>
						  	      		<option value="5">Php 20</option>
						  	      		<option value="5">Php 25</option>
						  	      		<option value="5">Php 30</option>
						  	      		<option value="5">Php 35</option>
						  	      		<option value="5">Php 40</option>
						  	      		<option value="5">Php 45</option>
						  	      		<option value="5">Php 50</option>
						  	      		<option value="5">Php 55</option>
						  	      		<option value="5">Php 60</option>
						  	      		<option value="5">Php 65</option>
						  	      		<option value="5">Php 70</option>
						  	      		<option value="5">Php 75</option>
						  	      		<option value="5">Php 80</option>
						  	      		<option value="85">Php 85</option>
						  	      		<option value="90">Php 90</option>
						  	      		<option value="95">Php 95</option>
						  	      		<option value="100">Php 100</option>
						  	      		<option value="105">Php 105</option>
						  	      		<option value="110">Php 110</option>
						  	      		<option value="115">Php 115</option>
						  	      		<option value="120">Php 120</option>
						  	      		<option value="125">Php 125</option>
						  	      		<option value="130">Php 130</option>
						  	      		<option value="135">Php 135</option>
						  	      		<option value="140">Php 140</option>
						  	      		<option value="145">Php 145</option>
						  	      		<option value="150">Php 150</option>
						  	      		<option value="155">Php 155</option>
						  	      		<option value="165">Php 165</option>
						  	      		<option value="170">Php 170</option>
						  	      		<option value="175">Php 175</option>
						  	      		<option value="180">Php 180</option>
						  	      		<option value="185">Php 185</option>
						  	      		<option value="190">Php 190</option>
						  	      		<option value="195">Php 195</option>
						  	      		<option value="200">Php 200</option>


						  	      	</select>
						  	      </td>
						  	      <td style="padding: 0px;" >
						  	      	<select class="form-control" style="background-color: #ffffff; padding: 5px;" id="hideme">
						  	      		<option selected="">Php</option>
						  	      		<option value="5">Php 5</option>
						  	      		<option value="5">Php 10</option>
						  	      		<option value="5">Php 15</option>
						  	      		<option value="5">Php 20</option>
						  	      		<option value="5">Php 25</option>
						  	      		<option value="5">Php 30</option>
						  	      		<option value="5">Php 35</option>
						  	      		<option value="5">Php 40</option>
						  	      		<option value="5">Php 45</option>
						  	      		<option value="5">Php 50</option>
						  	      		<option value="5">Php 55</option>
						  	      		<option value="5">Php 60</option>
						  	      		<option value="5">Php 65</option>
						  	      		<option value="5">Php 70</option>
						  	      		<option value="5">Php 75</option>
						  	      		<option value="5">Php 80</option>
						  	      		<option value="85">Php 85</option>
						  	      		<option value="90">Php 90</option>
						  	      		<option value="95">Php 95</option>
						  	      		<option value="100">Php 100</option>
						  	      		<option value="105">Php 105</option>
						  	      		<option value="110">Php 110</option>
						  	      		<option value="115">Php 115</option>
						  	      		<option value="120">Php 120</option>
						  	      		<option value="125">Php 125</option>
						  	      		<option value="130">Php 130</option>
						  	      		<option value="135">Php 135</option>
						  	      		<option value="140">Php 140</option>
						  	      		<option value="145">Php 145</option>
						  	      		<option value="150">Php 150</option>
						  	      		<option value="155">Php 155</option>
						  	      		<option value="165">Php 165</option>
						  	      		<option value="170">Php 170</option>
						  	      		<option value="175">Php 175</option>
						  	      		<option value="180">Php 180</option>
						  	      		<option value="185">Php 185</option>
						  	      		<option value="190">Php 190</option>
						  	      		<option value="195">Php 195</option>
						  	      		<option value="200">Php 200</option>


						  	      	</select>
						  	      </td>
						  	      <td style="padding: 0px;">
						  	      	<select class="form-control" style="background-color: #ffffff; padding: 5px;" id="hideme">
						  	      		<option selected="">Php</option>
						  	      		<option value="5">Php 5</option>
						  	      		<option value="5">Php 10</option>
						  	      		<option value="5">Php 15</option>
						  	      		<option value="5">Php 20</option>
						  	      		<option value="5">Php 25</option>
						  	      		<option value="5">Php 30</option>
						  	      		<option value="5">Php 35</option>
						  	      		<option value="5">Php 40</option>
						  	      		<option value="5">Php 45</option>
						  	      		<option value="5">Php 50</option>
						  	      		<option value="5">Php 55</option>
						  	      		<option value="5">Php 60</option>
						  	      		<option value="5">Php 65</option>
						  	      		<option value="5">Php 70</option>
						  	      		<option value="5">Php 75</option>
						  	      		<option value="5">Php 80</option>
						  	      		<option value="85">Php 85</option>
						  	      		<option value="90">Php 90</option>
						  	      		<option value="95">Php 95</option>
						  	      		<option value="100">Php 100</option>
						  	      		<option value="105">Php 105</option>
						  	      		<option value="110">Php 110</option>
						  	      		<option value="115">Php 115</option>
						  	      		<option value="120">Php 120</option>
						  	      		<option value="125">Php 125</option>
						  	      		<option value="130">Php 130</option>
						  	      		<option value="135">Php 135</option>
						  	      		<option value="140">Php 140</option>
						  	      		<option value="145">Php 145</option>
						  	      		<option value="150">Php 150</option>
						  	      		<option value="155">Php 155</option>
						  	      		<option value="165">Php 165</option>
						  	      		<option value="170">Php 170</option>
						  	      		<option value="175">Php 175</option>
						  	      		<option value="180">Php 180</option>
						  	      		<option value="185">Php 185</option>
						  	      		<option value="190">Php 190</option>
						  	      		<option value="195">Php 195</option>
						  	      		<option value="200">Php 200</option>


						  	      	</select>
						  	      </td>
						  	    </tr>
						  	    
						  	   
						  	  </tbody>
						  	</table>

						  </div>
						</div>
						<h4>My Gig Extras</h4>
						<div class="card border-primary ">
								 <div class="card-body">
								 	<div class="form-check">
								 	     <label class="form-check-label">
								 	       <input type="checkbox" class="form-check-input">
								 	       <p class="text-primary">Extra Fast Delivery</p>
								 	     </label>
								 	     <div>
								 	     	<table class="table ">
								 	     	  
								 	     	  <tbody>
								 	     	    <tr>
								 	     	      <th scope="row" style="padding-right:2px;"><H6>BASIC</H6></th>
								 	     	      <td style="padding-right:0px;padding-left:2px;"><p class="text-primary text-right"> I'll deliver only </p></td>
								 	     	      <td style="padding-bottom: 4px; padding-right: 2px;padding-left:2px;">
								 	     	      	<select class="form-control" style="background-color: #ffffff; padding: 5px;">
								 	     	      		<option selected="">Select</option>
								 	     	      		<option value="1 Day">1 Day</option>
								 	     	      		<option value="2 Days">2 Days</option>
								 	     	      		<option value="3 Days">3 Days</option>
								 	     	      		<option value="4 Days">4 Days</option>
								 	     	      		<option value="5 Days">5 Days</option>
								 	     	      		<option value="6 Days">6 Days</option>
								 	     	      	</select>
								 	     	      </td>
								 	     	      <td style="padding-left:2px; padding-right:2px;"><p class="text-primary text-right">for an extra</p></td>
								 	     	     <td style="padding-bottom: 4px; padding-right: 2px; padding-left:2px;">
								 	     	     	<select class="form-control" style="background-color: #ffffff; padding: 5px;">
								 	     	     		<option selected="">P</option>
								 	     	     		<option value="5">Php 5</option>
								 	     	     		<option value="5">Php 10</option>
								 	     	     		<option value="5">Php 15</option>
								 	     	     		<option value="5">Php 20</option>
								 	     	     		<option value="5">Php 25</option>
								 	     	     		<option value="5">Php 30</option>
								 	     	     		<option value="5">Php 35</option>
								 	     	     		<option value="5">Php 40</option>
								 	     	     		<option value="5">Php 45</option>
								 	     	     		<option value="5">Php 50</option>
								 	     	     		<option value="5">Php 55</option>
								 	     	     		<option value="5">Php 60</option>
								 	     	     		<option value="5">Php 65</option>
								 	     	     		<option value="5">Php 70</option>
								 	     	     		<option value="5">Php 75</option>
								 	     	     		<option value="5">Php 80</option>
								 	     	     		<option value="85">Php 85</option>
								 	     	     		<option value="90">Php 90</option>
								 	     	     		<option value="95">Php 95</option>
								 	     	     		<option value="100">Php 100</option>
								 	     	     		<option value="105">Php 105</option>
								 	     	     		<option value="110">Php 110</option>
								 	     	     		<option value="115">Php 115</option>
								 	     	     		<option value="120">Php 120</option>
								 	     	     		<option value="125">Php 125</option>
								 	     	     		<option value="130">Php 130</option>
								 	     	     		<option value="135">Php 135</option>
								 	     	     		<option value="140">Php 140</option>
								 	     	     		<option value="145">Php 145</option>
								 	     	     		<option value="150">Php 150</option>
								 	     	     		<option value="155">Php 155</option>
								 	     	     		<option value="165">Php 165</option>
								 	     	     		<option value="170">Php 170</option>
								 	     	     		<option value="175">Php 175</option>
								 	     	     		<option value="180">Php 180</option>
								 	     	     		<option value="185">Php 185</option>
								 	     	     		<option value="190">Php 190</option>
								 	     	     		<option value="195">Php 195</option>
								 	     	     		<option value="200">Php 200</option>


								 	     	     	</select>
								 	     	     </td>
								 	     	    </tr>
								 	     	    <tr>
								 	     	      <th scope="row" style="padding-right:2px;"><H6>Standard</H6></th>
								 	     	      <td style="padding-right:0px;"><p class="text-primary text-right"> I'll deliver only </p></td>
								 	     	      <td style="padding-bottom: 4px; padding-right: 2px; padding-left:2px; ">
								 	     	      	<select class="form-control" style="background-color: #ffffff; padding: 2px;">
								 	     	      		<option selected="">Select</option>
								 	     	      		<option value="1 Day">1 Day</option>
								 	     	      		<option value="2 Days">2 Days</option>
								 	     	      		<option value="3 Days">3 Days</option>
								 	     	      		<option value="4 Days">4 Days</option>
								 	     	      		<option value="5 Days">5 Days</option>
								 	     	      		<option value="6 Days">6 Days</option>
								 	     	      	</select>
								 	     	      </td>
								 	     	      <td style="padding-left:2px; padding-right:2px;"><p class="text-primary text-right">for an extra</p></td>
								 	     	      <td style="padding-bottom: 4px; padding-right: 2px; padding-left:2px;">
								 	     	      	<select class="form-control" style="background-color: #ffffff; padding: 5px;">
								 	     	     		<option selected="">P</option>
								 	     	     		<option value="5">Php 5</option>
								 	     	     		<option value="5">Php 10</option>
								 	     	     		<option value="5">Php 15</option>
								 	     	     		<option value="5">Php 20</option>
								 	     	     		<option value="5">Php 25</option>
								 	     	     		<option value="5">Php 30</option>
								 	     	     		<option value="5">Php 35</option>
								 	     	     		<option value="5">Php 40</option>
								 	     	     		<option value="5">Php 45</option>
								 	     	     		<option value="5">Php 50</option>
								 	     	     		<option value="5">Php 55</option>
								 	     	     		<option value="5">Php 60</option>
								 	     	     		<option value="5">Php 65</option>
								 	     	     		<option value="5">Php 70</option>
								 	     	     		<option value="5">Php 75</option>
								 	     	     		<option value="5">Php 80</option>
								 	     	     		<option value="85">Php 85</option>
								 	     	     		<option value="90">Php 90</option>
								 	     	     		<option value="95">Php 95</option>
								 	     	     		<option value="100">Php 100</option>
								 	     	     		<option value="105">Php 105</option>
								 	     	     		<option value="110">Php 110</option>
								 	     	     		<option value="115">Php 115</option>
								 	     	     		<option value="120">Php 120</option>
								 	     	     		<option value="125">Php 125</option>
								 	     	     		<option value="130">Php 130</option>
								 	     	     		<option value="135">Php 135</option>
								 	     	     		<option value="140">Php 140</option>
								 	     	     		<option value="145">Php 145</option>
								 	     	     		<option value="150">Php 150</option>
								 	     	     		<option value="155">Php 155</option>
								 	     	     		<option value="165">Php 165</option>
								 	     	     		<option value="170">Php 170</option>
								 	     	     		<option value="175">Php 175</option>
								 	     	     		<option value="180">Php 180</option>
								 	     	     		<option value="185">Php 185</option>
								 	     	     		<option value="190">Php 190</option>
								 	     	     		<option value="195">Php 195</option>
								 	     	     		<option value="200">Php 200</option>


								 	     	     	</select>
								 	     	      </td>
								 	     	    </tr>
								 	     	    <tr>
								 	     	      <th scope="row" style="padding-right:2px;"><H6>Premium</H6></th>
								 	     	      <td style="padding-right:0px;" ><p class="text-primary text-right"> I'll deliver only </p></td>
								 	     	      <td style="padding-bottom: 4px; padding-right: 2px;padding-left:2px;">
								 	     	      	<select class="form-control" style="background-color: #ffffff; padding: 2px;">
								 	     	      		<option selected="">Select</option>
								 	     	      		<option value="1 Day">1 Day</option>
								 	     	      		<option value="2 Days">2 Days</option>
								 	     	      		<option value="3 Days">3 Days</option>
								 	     	      		<option value="4 Days">4 Days</option>
								 	     	      		<option value="5 Days">5 Days</option>
								 	     	      		<option value="6 Days">6 Days</option>
								 	     	      	</select>
								 	     	      </td>
								 	     	       <td style="padding-left:2px; padding-right:2px;"><p class="text-primary text-right">for an extra</p></td>
								 	     	       <td style="padding-bottom: 4px; padding-right: 2px; padding-left:2px;">
								 	     	       	<select class="form-control" style="background-color: #ffffff; padding: 5px;">
								 	     	     		<option selected="">P</option>
								 	     	     		<option value="5">Php 5</option>
								 	     	     		<option value="5">Php 10</option>
								 	     	     		<option value="5">Php 15</option>
								 	     	     		<option value="5">Php 20</option>
								 	     	     		<option value="5">Php 25</option>
								 	     	     		<option value="5">Php 30</option>
								 	     	     		<option value="5">Php 35</option>
								 	     	     		<option value="5">Php 40</option>
								 	     	     		<option value="5">Php 45</option>
								 	     	     		<option value="5">Php 50</option>
								 	     	     		<option value="5">Php 55</option>
								 	     	     		<option value="5">Php 60</option>
								 	     	     		<option value="5">Php 65</option>
								 	     	     		<option value="5">Php 70</option>
								 	     	     		<option value="5">Php 75</option>
								 	     	     		<option value="5">Php 80</option>
								 	     	     		<option value="85">Php 85</option>
								 	     	     		<option value="90">Php 90</option>
								 	     	     		<option value="95">Php 95</option>
								 	     	     		<option value="100">Php 100</option>
								 	     	     		<option value="105">Php 105</option>
								 	     	     		<option value="110">Php 110</option>
								 	     	     		<option value="115">Php 115</option>
								 	     	     		<option value="120">Php 120</option>
								 	     	     		<option value="125">Php 125</option>
								 	     	     		<option value="130">Php 130</option>
								 	     	     		<option value="135">Php 135</option>
								 	     	     		<option value="140">Php 140</option>
								 	     	     		<option value="145">Php 145</option>
								 	     	     		<option value="150">Php 150</option>
								 	     	     		<option value="155">Php 155</option>
								 	     	     		<option value="165">Php 165</option>
								 	     	     		<option value="170">Php 170</option>
								 	     	     		<option value="175">Php 175</option>
								 	     	     		<option value="180">Php 180</option>
								 	     	     		<option value="185">Php 185</option>
								 	     	     		<option value="190">Php 190</option>
								 	     	     		<option value="195">Php 195</option>
								 	     	     		<option value="200">Php 200</option>


								 	     	     	</select>
								 	     	       </td>
								 	     	    </tr>
								 	     	  </tbody>
								 	     	</table>
								 	     </div>
								 	</div>
								 	<div class="form-check">
								 	<label class="form-check-label">
								 	       <input type="checkbox" class="form-check-input">
								 	       <p class="text-primary" style="padding-right: 180px;">Additional Revision</p>
								 	 </label>
								 	 <table class="table">
								 	   <thead>
								 	     <tr>
								 	       <th scope="col"><p class="text-primary text-right"> for an extra</p></th>
								 	       <th scope="col">
								 	       	<select class="form-control" style="background-color: #ffffff; padding: 5px;">
								 	       		<option selected="">P</option>
								 	       		<option value="5">Php 5</option>
								 	       		<option value="5">Php 10</option>
								 	       		<option value="5">Php 15</option>
								 	       		<option value="5">Php 20</option>
								 	       		<option value="5">Php 25</option>
								 	       		<option value="5">Php 30</option>
								 	       		<option value="5">Php 35</option>
								 	       		<option value="5">Php 40</option>
								 	       		<option value="5">Php 45</option>
								 	       		<option value="5">Php 50</option>
								 	       		<option value="5">Php 55</option>
								 	       		<option value="5">Php 60</option>
								 	       		<option value="5">Php 65</option>
								 	       		<option value="5">Php 70</option>
								 	       		<option value="5">Php 75</option>
								 	       		<option value="5">Php 80</option>
								 	       		<option value="85">Php 85</option>
								 	       		<option value="90">Php 90</option>
								 	       		<option value="95">Php 95</option>
								 	       		<option value="100">Php 100</option>
								 	       		<option value="105">Php 105</option>
								 	       		<option value="110">Php 110</option>
								 	       		<option value="115">Php 115</option>
								 	       		<option value="120">Php 120</option>
								 	       		<option value="125">Php 125</option>
								 	       		<option value="130">Php 130</option>
								 	       		<option value="135">Php 135</option>
								 	       		<option value="140">Php 140</option>
								 	       		<option value="145">Php 145</option>
								 	       		<option value="150">Php 150</option>
								 	       		<option value="155">Php 155</option>
								 	       		<option value="165">Php 165</option>
								 	       		<option value="170">Php 170</option>
								 	       		<option value="175">Php 175</option>
								 	       		<option value="180">Php 180</option>
								 	       		<option value="185">Php 185</option>
								 	       		<option value="190">Php 190</option>
								 	       		<option value="195">Php 195</option>
								 	       		<option value="200">Php 200</option>


								 	       	</select>
								 	       </th>
								 	       <th scope="col"  ><p class="text-primary text-right"> and additional</p></th>
								 	       <th scope="col" >
								 	       	<select class="form-control" style="background-color: #ffffff; padding: 0px;">
								 	     	      		<option selected="">Select</option>
								 	     	      		<option value="1 Day">1 Day</option>
								 	     	      		<option value="2 Days">2 Days</option>
								 	     	      		<option value="3 Days">3 Days</option>
								 	     	      		<option value="4 Days">4 Days</option>
								 	     	      		<option value="5 Days">5 Days</option>
								 	     	      		<option value="6 Days">6 Days</option>
								 	     	      	</select>
								 	       </th>
								 	     </tr>
								 	   </thead>
								 	   
								 	 </table>
								 	 </div>

								 	     <a href="#">+Add Gig Extra</a>
								 	 <div class="form-check">
								 	 	
								 	 	<table class="table">
								 	 
								 	 	  <tbody>
								 	 	    <tr >
								 	 	      <th scope="row" style="padding: 0px">
								 	 	
								 	 	      	      <p class="text-primary text-right">Title</p>
								 	 	      		
								 	 	      </th>
								 	 	      <td style="padding: 0px;" colspan="3">
								 	 	      	<input class="form-control form-control-sm" type="text" name="+title" placeholder="Title of your Extra Service"></td>
								 	 	      <td style="padding: 0px;  padding-left: 3px;"><label class="text-center">Recommended to use 20 characters</label></td>
								 	 	      <td style="padding: 0px">&nbsp;</td>
								 	 	      
								 	 	    </tr>
								 	 	    <tr>
								 	 	      <th scope="row" style="padding: 0px">
								 	 	      	<p class="text-primary text-right">Description</p>
								 	 	      </th>
								 	 	      <td colspan="5" style="padding: 0px">
								 	 	      <textarea class="form-control" rows="3" id="+description" cols="3" style="padding: 8px; background-color: #ffffff;" placeholder="Type the description of Extra Service"></textarea>

								 	 	       </td>
								 	 	   
								 	 	      
								 	 	    </tr>
								 	 	    <tr>
								 	 	      <th scope="row" style="padding: 0px">
								 	 	      	<p class="text-primary text-right">for an extra</p>
								 	 	      </th>
								 	 	      <td style="padding: 0px">
								 	 	      	 
								 	     	     	<select class="form-control" style="background-color: #ffffff; padding: 5px;">
								 	     	     		<option selected="">P</option>
								 	     	     		<option value="5">Php 5</option>
								 	     	     		<option value="5">Php 10</option>
								 	     	     		<option value="5">Php 15</option>
								 	     	     		<option value="5">Php 20</option>
								 	     	     		<option value="5">Php 25</option>
								 	     	     		<option value="5">Php 30</option>
								 	     	     		<option value="5">Php 35</option>
								 	     	     		<option value="5">Php 40</option>
								 	     	     		<option value="5">Php 45</option>
								 	     	     		<option value="5">Php 50</option>
								 	     	     		<option value="5">Php 55</option>
								 	     	     		<option value="5">Php 60</option>
								 	     	     		<option value="5">Php 65</option>
								 	     	     		<option value="5">Php 70</option>
								 	     	     		<option value="5">Php 75</option>
								 	     	     		<option value="5">Php 80</option>
								 	     	     		<option value="85">Php 85</option>
								 	     	     		<option value="90">Php 90</option>
								 	     	     		<option value="95">Php 95</option>
								 	     	     		<option value="100">Php 100</option>
								 	     	     		<option value="105">Php 105</option>
								 	     	     		<option value="110">Php 110</option>
								 	     	     		<option value="115">Php 115</option>
								 	     	     		<option value="120">Php 120</option>
								 	     	     		<option value="125">Php 125</option>
								 	     	     		<option value="130">Php 130</option>
								 	     	     		<option value="135">Php 135</option>
								 	     	     		<option value="140">Php 140</option>
								 	     	     		<option value="145">Php 145</option>
								 	     	     		<option value="150">Php 150</option>
								 	     	     		<option value="155">Php 155</option>
								 	     	     		<option value="165">Php 165</option>
								 	     	     		<option value="170">Php 170</option>
								 	     	     		<option value="175">Php 175</option>
								 	     	     		<option value="180">Php 180</option>
								 	     	     		<option value="185">Php 185</option>
								 	     	     		<option value="190">Php 190</option>
								 	     	     		<option value="195">Php 195</option>
								 	     	     		<option value="200">Php 200</option>


								 	     	     	</select>
								 	     	    
								 	 	      </td>
								 	 	      <td style="padding: 0px" colspan="1"><br><p class="text-primary text-right">and additional</p></td>
								 	 	      
								 	 	       <td style="padding: 0px" colspan="1">
								 	 	       	<select class="form-control" style="background-color: #ffffff; padding: 2px;">
								 	 	       		<option selected="">Select</option>
								 	 	       		<option value="1 Day">1 Day</option>
								 	 	       		<option value="2 Days">2 Days</option>
								 	 	       		<option value="3 Days">3 Days</option>
								 	 	       		<option value="4 Days">4 Days</option>
								 	 	       		<option value="5 Days">5 Days</option>
								 	 	       		<option value="6 Days">6 Days</option>
								 	 	       	</select>
								 	 	       </td>
								 	 	        
								 	 	    </tr>
								 	 	  </tbody>
								 	 	</table>

								 	 </div>
								 </div>
						</div>
					
				
			</div>
			<div class="col-md-4">
				
				
						
						<div class="card border-primary">
						  <div class="card-body">
						    <blockquote class="card-blockquote">
						      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
						      <footer>Someone famous in <cite title="Source Title">Source Title</cite></footer>
						    </blockquote>
						  </div>
						</div>

					



				
			</div>

		</div>
		<div class="row mt-5">
				<div class="col-lg-3"></div>
				<div class="col-lg-3">
					<a class="btn btn-primary btn-outline btn-block" href="javascript:window.history.go(-1);">Back</a>
				</div>
				<div class="col-lg-3">
					
					<button class="btn btn-success btn-outline btn-block" type="submit">Next</button>
					<!-- <a class="btn btn-success btn-outline btn-block" href="<?php echo site_url('users/ye')?>" type="submit">ye</a> -->
				</form>


				</div>
				<div class="col-lg-3"></div>
			</div>
	</div>
</div>
