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
			<div class="Card" style="background-color: #FFFFFF;">
				<h3 class="card-header">Category</h3>
			</div>
		</div>
		
		<div class="col-md-9">
		
		<div class="row">
		<?php foreach($data as $row):?>
		
			<div class="col-md-3" style="padding: 8px;">
				<div class="card">
				  <a href="<?php base_url()?>/iAssist/search/view_projects/<?php echo $row->project_title_slug.$row->id?>">
				  	<img style="height: 150px; width: 100%; display: block;" src="<?php echo site_url("uploads/$row->project_image"); ?>"  alt="Card image"></a>


				  <div class="card-body" style="padding: 2px;">
				    <a class="card-link" href="<?php echo base_url()?>">
				    	
				    	<?php echo $row->project_username;?></a>

				    <input type="hidden" name="projid" value="<?php echo $row->id;?>">
				    <p class="text-muted"><?php $date = $row->project_date_posted; echo date("M j, Y, g:i",strtotime($date))?></p>
				   	<a class="card-link" href="<?php base_url()?>"><?php echo $row->project_title;?></a>
				  </div>
				  <div class="card-footer">
				  	
				  </div>
				 
				</div>
			</div>

		<?php endforeach; ?>
		</div>
		</div>

	

	</div>
</div>

