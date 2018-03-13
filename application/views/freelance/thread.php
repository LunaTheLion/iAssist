<title>iAssist - thread</title>
<div class="jumbotron p-0 m-0">
	
		<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
		  <div class="carousel-inner" role="listbox">
		    <div class="carousel-item active">
		    	 <div class="jumbotron p-0 m-0" style="height: 300px; width:100% ; ">
		    		<img src="<?php echo base_url('assets/img/blog-desk9.jpg')?>">
		    	</div>
		 
		    </div>
		    <div class="carousel-item" >
		       <div class="jumbotron p-0 m-0" style="height: 300px; width: 100%; ">
		      	<img src="<?php echo base_url('assets/img/blog-desk38.jpg')?>">
		      </div>
		    </div>
		    <div class="carousel-item">
		      <div class="jumbotron p-0 m-0" style="height: 300px; width: 100%;">
		      	<img src="<?php echo base_url('assets/img/blog-desk28.png')?>">
		      </div>
		    </div>
		  </div>

		  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
		    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
		    <span class="sr-only">Previous</span>
		  </a>
		  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
		    <span class="carousel-control-next-icon" aria-hidden="true"></span>
		    <span class="sr-only">Next</span>
		  </a>

		</div>


</div>




<div class="jumbotron m-0 pt-0 " >

		<button type="button" class="btn btn-secondary pr-2 pl-2" title="" data-container="body" data-toggle="popover" data-placement="bottom" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus." data-original-title="Popover Title" aria-describedby="popover258369">Graphics &amp; Design</button>

		<button type="button" class="btn btn-secondary pr-2 pl-2" title="" data-container="body" data-toggle="popover" data-placement="bottom" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus." data-original-title="Popover Title" aria-describedby="popover907357">Digital Marketing</button>

		<button type="button" class="btn btn-secondary pr-2 pl-2" title="" data-container="body" data-toggle="popover" data-placement="bottom" data-content="Vivamus
		sagittis lacus vel augue laoreet rutrum faucibus." data-original-title="Popover Title">Writing &amp; Translation</button>

		<button type="button" class="btn btn-secondary pr-2 pl-2" title="" data-container="body" data-toggle="popover" data-placement="bottom" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus." data-original-title="Popover Title">Video &amp; Animation</button>

		<button type="button" class="btn btn-secondary pr-2 pl-2" title="" data-container="body" data-toggle="popover" data-placement="bottom" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus." data-original-title="Popover Title">Video &amp; Animation</button>

		<button type="button" class="btn btn-secondary pr-2 pl-2" title="" data-container="body" data-toggle="popover" data-placement="bottom" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus." data-original-title="Popover Title">Music &amp; Audio</button>

		<button type="button" class="btn btn-secondary pr-2 pl-2" title="" data-container="body" data-toggle="popover" data-placement="bottom" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus." data-original-title="Popover Title">Programming &amp; Tech</button>

		<button type="button" class="btn btn-secondary pr-2 pl-2" title="" data-container="body" data-toggle="popover" data-placement="bottom" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus." data-original-title="Popover Title">Business</button>

		<button type="button" class="btn btn-secondary pr-2 pl-2" title="" data-container="body" data-toggle="popover" data-placement="bottom" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus." data-original-title="Popover Title">Fun &amp; Lifestyle</button>

	<div class="row">

		<div class="col-lg-3" style="padding-right:8px; padding-left: 8px;">
			<div class="card" style="background-color: #FFFFFF;">
				<h4 class="card-header">Custom Search</h4>
				<div class="card-body">
					<p class="text-primary font-weight-bold"> Hi, <?php echo $this->session->userdata('user_name')?></p>
					<p class="text-primary"> Looking for a specific skill that fits your need?</p>
					<a class="btn btn-success btn-block" href="<?php base_url()?>/iAssist/search/request_service">Post a request</a>
				</div>
				
			</div>
		</div>
		
		<div class="col-md-9">
		
		<div class="row">
		<?php foreach($data as $row):?>
		
			<div class="col-md-3" style="padding: 8px;">
				<div class="card">
				  <a href="<?php base_url()?>/iAssist/search/view_projects/<?php echo $row->project_title_slug."0".$row->id?>">
				  	<img style="height: 150px; width: 100%; display: block;" src="<?php echo site_url("uploads/$row->project_image"); ?>"  alt="Card image"></a>


				  <div class="card-body" style="padding: 10px;">
				    
				    	<div class="row">
				    		<div class="col-md-4">
				    			<img src="">&nbsp;
				    		</div>
				    		<div class="col-md-4" style="padding: 0px;">
				    			<a  href="#"><?php echo $row->project_username;?></a>
				    			 <input type="hidden" name="projid" value="<?php echo $row->id;?>">
				    		</div>
				    		<div class="col-md-4" style="padding-right:9px;">
				    			 <p class="text-muted text-right " style="margin-bottom: 0px; padding: 0px;"><?php $date = $row->project_date_posted; echo date("M 'y",strtotime($date))?></p>
				    		</div>
				    	</div>   
				   	<p style="margin:0px;" class="text-primary"><a  href="<?php base_url()?>/iAssist/search/view_projects/<?php echo $row->project_title_slug."0".$row->id?>"><?php echo $row->project_title;?></a></p>
				  </div>
				  <div class="card-footer" style="padding: 5px;">
				  	
				  	<div class="row">
				  		<div class="col-md-4">
				  			<h4 class="text-success" style="margin: 0px;"> ₱<?php echo $row->project_price ?></h4>
				  		</div>
				  		<div class="col-md-4">
				  			&nbsp;
				  		</div>
				  		<div class="col-md-4" style="padding-left: 40px; margin: 0px;">
				  			<!-- <img src="<?php echo site_url("uploads/icons/gray-heart.png"); ?>" style="height: 15px;width:18px; ;"> -->

				  		</div>
				  	</div>
				  </div>
				 
				</div>
			</div>

		<?php endforeach; ?>
		</div>
		</div>

	

	</div>
</div>

