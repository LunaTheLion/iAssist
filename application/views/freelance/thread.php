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
		      	<img src="<?php echo base_url('assets/img/blog-desk21.jpg')?>">
		      </div>
		    </div>
		    <div class="carousel-item">
		      <div class="jumbotron p-0 m-0" style="height: 300px; width: 100%;">
		      	<img src="<?php echo base_url('assets/img/blog-desk333.jpg')?>">
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




<div class="jumbotron m-0" >
	<div class="row">





		<div class="col-lg-3" style="padding-right:8px; padding-left: 8px;">
			<div class="container" style="background-color: black;">
				
			</div>
		</div>
		
		<div class="col-md-9">
		
		<div class="row">
		<?php foreach($data as $row):?>
		<!-- <?php print_r($proj)?> -->
			<div class="col-md-3" style="padding: 8px;">
				<div class="card">
				  <img style="height: 150px; width: 100%; display: block;" src="<?php echo site_url("uploads/$row->project_image"); ?>" " alt="Card image">

				  <div class="card-body" style="padding-top: 10px;">
				    <p class="card-text text-center" style="margin:2px;">
				    	<?php $date = date_create($row->project_date_posted); echo date_format($date,'M j, Y, D, g:i: a');?></p>
				   	<h6 class="text-center text-primary" style="margin:3px";><?php echo $row->project_title;?></h6>
				  </div>
				 
				</div>
			</div>

		<?php endforeach; ?>
		</div>
		</div>

		
		<!-- <div class="col-lg-2" style="padding-right:8px; padding-left: 8px;">
			
			<div class="card">
			  <img style="height: 100px; width: 100%; display: block;" src="data:image/svg+xml;charset=UTF-8,%3Csvg%20width%3D%22318%22%20height%3D%22180%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%20318%20180%22%20preserveAspectRatio%3D%22none%22%3E%3Cdefs%3E%3Cstyle%20type%3D%22text%2Fcss%22%3E%23holder_158bd1d28ef%20text%20%7B%20fill%3Argba(255%2C255%2C255%2C.75)%3Bfont-weight%3Anormal%3Bfont-family%3AHelvetica%2C%20monospace%3Bfont-size%3A16pt%20%7D%20%3C%2Fstyle%3E%3C%2Fdefs%3E%3Cg%20id%3D%22holder_158bd1d28ef%22%3E%3Crect%20width%3D%22318%22%20height%3D%22180%22%20fill%3D%22%23777%22%3E%3C%2Frect%3E%3Cg%3E%3Ctext%20x%3D%22129.359375%22%20y%3D%2297.35%22%3EImage%3C%2Ftext%3E%3C%2Fg%3E%3C%2Fg%3E%3C%2Fsvg%3E" alt="Card image">
			 <div class="card-body" style="padding: 5px;">
			    
			    <small> <a href="https://bootswatch.com/lux/#" class="card-link">Card link</a></small>
			  </div>
			  <div class="card-footer text-muted" style="padding: 7px;">
			    2 days ago
			  </div>
			</div>

		</div> -->
		<!-- <div class="col-lg-2" style="padding-right:8px; padding-left: 8px;">
			
			<div class="card">
			  <img style="height: 100px; width: 100%; display: block;" src="data:image/svg+xml;charset=UTF-8,%3Csvg%20width%3D%22318%22%20height%3D%22180%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%20318%20180%22%20preserveAspectRatio%3D%22none%22%3E%3Cdefs%3E%3Cstyle%20type%3D%22text%2Fcss%22%3E%23holder_158bd1d28ef%20text%20%7B%20fill%3Argba(255%2C255%2C255%2C.75)%3Bfont-weight%3Anormal%3Bfont-family%3AHelvetica%2C%20monospace%3Bfont-size%3A16pt%20%7D%20%3C%2Fstyle%3E%3C%2Fdefs%3E%3Cg%20id%3D%22holder_158bd1d28ef%22%3E%3Crect%20width%3D%22318%22%20height%3D%22180%22%20fill%3D%22%23777%22%3E%3C%2Frect%3E%3Cg%3E%3Ctext%20x%3D%22129.359375%22%20y%3D%2297.35%22%3EImage%3C%2Ftext%3E%3C%2Fg%3E%3C%2Fg%3E%3C%2Fsvg%3E" alt="Card image">
			 <div class="card-body" style="padding: 5px;">
			    
			    <small> <a href="https://bootswatch.com/lux/#" class="card-link">Card link</a></small>
			  </div>
			  <div class="card-footer text-muted" style="padding: 7px;">
			    2 days ago
			  </div>
			</div>

		</div> -->
<!-- 
		<div class="col-lg-2" style="padding-right:8px; padding-left: 8px;">
			
			<div class="card">
			  <img style="height: 100px; width: 100%; display: block;" src="data:image/svg+xml;charset=UTF-8,%3Csvg%20width%3D%22318%22%20height%3D%22180%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%20318%20180%22%20preserveAspectRatio%3D%22none%22%3E%3Cdefs%3E%3Cstyle%20type%3D%22text%2Fcss%22%3E%23holder_158bd1d28ef%20text%20%7B%20fill%3Argba(255%2C255%2C255%2C.75)%3Bfont-weight%3Anormal%3Bfont-family%3AHelvetica%2C%20monospace%3Bfont-size%3A16pt%20%7D%20%3C%2Fstyle%3E%3C%2Fdefs%3E%3Cg%20id%3D%22holder_158bd1d28ef%22%3E%3Crect%20width%3D%22318%22%20height%3D%22180%22%20fill%3D%22%23777%22%3E%3C%2Frect%3E%3Cg%3E%3Ctext%20x%3D%22129.359375%22%20y%3D%2297.35%22%3EImage%3C%2Ftext%3E%3C%2Fg%3E%3C%2Fg%3E%3C%2Fsvg%3E" alt="Card image">
			 <div class="card-body" style="padding: 5px;">
			    
			   <small> <a href="https://bootswatch.com/lux/#" class="card-link">Card link</a></small>
			  </div>
			  <div class="card-footer text-muted" style="padding: 7px;">
			    2 days ago
			  </div>
			</div>

		</div>
		 -->

	</div>
</div>

