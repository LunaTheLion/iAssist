<?php foreach ($new_users as $row) {
    //print_r($new_users);
    
    echo "<tr>";
    echo "<td>".$row->account_id."</td>";
    echo "<td>".$row->account_email."</td>";
    echo "<td>".$row->account_type."</td>";
    echo "<td>".$row->account_date_joined."</td>";
    echo "</tr>";
} ?> 



















		<div class="row">

			<div class="col-lg-8">
				<div class="row" style="padding-bottom: 30px; ">
					<div class="col-lg-12" style="padding-right:8px; padding-left: 8px;" >
						<div class="card" style="padding: 40px;">
							<p>Describe the service you're looking to purchase - please be as detailed as possible</p>
						  <div class="form-group">	                   
		                    <textarea class="form-control" id="exampleTextarea" rows="3" style="overflow-x: hidden;"></textarea>
		                  </div>
		                  	<div class="row">
		                  		<div class="col-sm-12">
				                  <div class="form-group">	            
				                    <input type="file" class="form-control-file" id="exampleInputFile" aria-describedby="fileHelp">           
				                  </div>
				                </div>	              
							</div>
							<hr>
							<p>Choose A Category</p>
							<div class="row">
								<div class="col-sm-3">								
				                    <div class="form-group" >
								        <select class=""  style="width: 100%;">
									      <option selected="">Select. . . </option>
									      <option value="1">One</option>
									      <option value="2">Two</option>
									      <option value="3">Three</option>
								        </select>
								    </div>
								</div>
								<div class="col-sm-3">								
				                    <div class="form-group">
								        <select class="" disabled="disabled">
									      <option selected="">Select Subcategory</option>
									      <option value="1">One</option>
									      <option value="2">Two</option>
									      <option value="3">Three</option>
								        </select>
								     </div>
								</div>
							
						
								<div class="col-sm-3">
	                  			</div>                  		
	                  	
								<div class="col-sm-3">							
								</div>

								<div class="col-sm-3">								
				                    <div class="form-group">
										<form class="form-inline my-2 my-lg-0">
	                    					<button type="submit" class="btn btn-primary">Post</button>
	                  					</form>
	                  				</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<br>
				<div class="row">
					<div class="col-lg-12">
						<h3>Featured Gigs</h3>
					</div>
				</div>
				<br>
				<div class="row">				
					<div class="col-lg-3" style="padding-right:8px; padding-left: 8px;" >
						<div class="card">
						  <img style="height: 150px; width: 100%;" src="<?php echo base_url('assets/images/f12.png');?>" alt="Card image">
						  <div class="card-body" style="padding: 5px;">
						    
						   <small> <a href="https://bootswatch.com/lux/#" class="card-link"><h6>I Will Give Instagram Post Ideas For Your Business</h6></a></small>
						  
						  </div>
						  <div class="card-footer text-muted" style="padding: 7px;">	  	
								
								<span class="fa fa-star checked"></span>
								<span class="fa fa-star checked"></span>
								<span class="fa fa-star checked"></span>
								<span class="fa fa-star"></span>
								<span class="fa fa-star"></span>
							
						  </div>
						</div>
					</div>

					<div class="col-lg-3" style="padding-right:8px; padding-left: 8px;">
						
						<div class="card">
						  <img style="height: 150px; width: 100%;" src="<?php echo base_url('assets/images/f2.jpg');?>">
						 <div class="card-body" style="padding: 5px;">
						    
						   <small> <a href="https://bootswatch.com/lux/#" class="card-link"><h6>I Will Design, Redesign, Or Fix A Wordpress Website</h6></a></small>
						  </div>
						  <div class="card-footer text-muted" style="padding: 7px;">
						  	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
								<style>
								.checked {
								    color: orange;
								}
								</style>
								</head>
								<body>
								<span class="fa fa-star checked"></span>
								<span class="fa fa-star checked"></span>
								<span class="fa fa-star checked"></span>
								<span class="fa fa-star"></span>
								<span class="fa fa-star"></span>
								</body>
						  </div>
						</div>

					</div>
					<div class="col-lg-3" style="padding-right:8px; padding-left: 8px;">
						
						<div class="card">
						  <img style="height: 150px; width: 100%;" src="<?php echo base_url('assets/images/f3.jpg');?>">
						 <div class="card-body" style="padding: 5px;">
						    
						    <small> <a href="https://bootswatch.com/lux/#" class="card-link"><h6>I Will Create A Professional Website Design</h6></a></small>
						  </div>
						  <div class="card-footer text-muted" style="padding: 7px;">
						  	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
								<style>
								.checked {
								    color: orange;
								}
								</style>
								</head>
								<body>
								<span class="fa fa-star checked"></span>
								<span class="fa fa-star checked"></span>
								<span class="fa fa-star checked"></span>
								<span class="fa fa-star checked"></span>
								<span class="fa fa-star"></span>
								</body>
						  </div>
						</div>

					</div>
					<div class="col-lg-3" style="padding-right:8px; padding-left: 8px;">
						
						<div class="card">
						  <img style="height: 150px; width: 100%;" src="<?php echo base_url('assets/images/f4.jpg');?>">
						 <div class="card-body" style="padding: 5px;">
						    
						    <small> <a href="https://bootswatch.com/lux/#" class="card-link"><h6>I Will Draw Portrait Of Your Pet In Any Clothes</h6></a></small>
						  </div>
						  <div class="card-footer text-muted" style="padding: 7px;">
						  	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
								<style>
								.checked {
								    color: orange;
								}
								</style>
								</head>
								<body>
								<span class="fa fa-star checked"></span>
								<span class="fa fa-star checked"></span>
								<span class="fa fa-star checked"></span>
								<span class="fa fa-star checked"></span>
								<span class="fa fa-star checked"></span>
								</body>
						  </div>
						</div>

					</div>
				</div>
				<br><br>
				<div class="row">
					<div class="col-lg-3" style="padding-right:8px; padding-left: 8px;" >
						<div class="card">
						  <img style="height: 150px; width: 100%;" src="<?php echo base_url('assets/images/f5.png');?>">
						  <div class="card-body" style="padding: 5px;">
						    
						   <small> <a href="https://bootswatch.com/lux/#" class="card-link"><h6>I Will Design The UI And Ux For Your App Or Game</h6></a></small>
						  
						  </div>
						  <div class="card-footer text-muted" style="padding: 7px;">
						  	 	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
								<style>
								.checked {
								    color: orange;
								}
								</style>
								</head>
								<body>
								<span class="fa fa-star checked"></span>
								<span class="fa fa-star checked"></span>
								<span class="fa fa-star checked"></span>
								<span class="fa fa-star"></span>
								<span class="fa fa-star"></span>
								</body>
						  </div>
						</div>
					</div>
					<div class="col-lg-3" style="padding-right:8px; padding-left: 8px;">
						
						<div class="card">
						  <img style="height: 150px; width: 100%;" src="<?php echo base_url('assets/images/f9.jpg');?>">
						 <div class="card-body" style="padding: 5px;">
						    
						   <small> <a href="https://bootswatch.com/lux/#" class="card-link"><h6>I Will Create A Media Release Or Speech</h6></a></small>
						  </div>
						  <div class="card-footer text-muted" style="padding: 7px;">
						  	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
								<style>
								.checked {
								    color: orange;
								}
								</style>
								</head>
								<body>
								<span class="fa fa-star checked"></span>
								<span class="fa fa-star checked"></span>
								<span class="fa fa-star checked"></span>
								<span class="fa fa-star checked"></span>
								<span class="fa fa-star checked"></span>
								</body>
						  </div>
						</div>

					</div>
					<div class="col-lg-3" style="padding-right:8px; padding-left: 8px;">
						
						<div class="card">
						  <img style="height: 150px; width: 100%;" src="<?php echo base_url('assets/images/f7.jpg');?>">
						 <div class="card-body" style="padding: 5px;">
						    
						    <small> <a href="https://bootswatch.com/lux/#" class="card-link"><h6>I Will Create A Powerpoint Presentation for you</h6></a></small>
						  </div>
						  <div class="card-footer text-muted" style="padding: 7px;">
						   	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
								<style>
								.checked {
								    color: orange;
								}
								</style>
								</head>
								<body>
								<span class="fa fa-star checked"></span>
								<span class="fa fa-star checked"></span>
								<span class="fa fa-star checked"></span>
								<span class="fa fa-star checked"></span>
								<span class="fa fa-star"></span>
								</body>
						  </div>
						</div>

					</div>
					<div class="col-lg-3" style="padding-right:8px; padding-left: 8px;">
						
						<div class="card">
						  <img style="height: 150px; width: 100%;" src="<?php echo base_url('assets/images/f10.jpg');?>">
						 <div class="card-body" style="padding: 5px;">
						    
						    <small> <a href="https://bootswatch.com/lux/#" class="card-link"><h6>I will design a professional logo for your business</h6></a></small>
						  </div>
						  <div class="card-footer text-muted" style="padding: 7px;">
						   	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
								<style>
								.checked {
								    color: orange;
								}
								</style>
								</head>
								<body>
								<span class="fa fa-star checked"></span>
								<span class="fa fa-star checked"></span>
								<span class="fa fa-star checked"></span>
								<span class="fa fa-star checked"></span>
								<span class="fa fa-star"></span>
								</body>
						  </div>
						</div>

					</div>
				</div>

				<br><br>
				<div class="row">
					<div class="col-lg-3" style="padding-right:8px; padding-left: 8px;" >
						<div class="card">
						  <img style="height: 150px; width: 100%;" src="<?php echo base_url('assets/images/f8.jpg');?>" alt="Card image">
						  <div class="card-body" style="padding: 5px;">
						    
						   <small> <a href="https://bootswatch.com/lux/#" class="card-link"><h6>I Will do custom mug design</h6></a></small>
						  
						  </div>
						  <div class="card-footer text-muted" style="padding: 7px;">
						    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
								<style>
								.checked {
								    color: orange;
								}
								</style>
								</head>
								<body>
								<span class="fa fa-star checked"></span>
								<span class="fa fa-star checked"></span>
								<span class="fa fa-star checked"></span>
								<span class="fa fa-star checked"></span>
								<span class="fa fa-star"></span>
								</body>
						  </div>
						</div>
					</div>
					<div class="col-lg-3" style="padding-right:8px; padding-left: 8px;">
						
						<div class="card">
						  <img style="height: 150px; width: 100%;" src="<?php echo base_url('assets/images/f11.jpg');?>" alt="Card image">
						 <div class="card-body" style="padding: 5px;">
						    
						   <small> <a href="https://bootswatch.com/lux/#" class="card-link"><h6>I will develop a visual identity for your brand</h6></a></small>
						  </div>
						  <div class="card-footer text-muted" style="padding: 7px;">
						      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
								<style>
								.checked {
								    color: orange;
								}
								</style>
								</head>
								<body>
								<span class="fa fa-star checked"></span>
								<span class="fa fa-star checked"></span>
								<span class="fa fa-star checked"></span>
								<span class="fa fa-star checked"></span>
								<span class="fa fa-star"></span>
								</body>
						  </div>
						</div>

					</div>
					<div class="col-lg-3" style="padding-right:8px; padding-left: 8px;">
						
						<div class="card">
						  <img style="height: 150px; width: 100%;" src="<?php echo base_url('assets/images/f13.png');?>" alt="Card image">
						 <div class="card-body" style="padding: 5px;">
						    
						    <small> <a href="https://bootswatch.com/lux/#" class="card-link"><h6>I will make video advertisement</h6></a></small>
						  </div>
						  <div class="card-footer text-muted" style="padding: 7px;">
						  	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
								<style>
								.checked {
								    color: orange;
								}
								</style>
								</head>
								<body>
								<span class="fa fa-star checked"></span>
								<span class="fa fa-star checked"></span>
								<span class="fa fa-star checked"></span>
								<span class="fa fa-star checked"></span>
								<span class="fa fa-star"></span>
								</body>
						  </div>
						</div>

					</div>
					<div class="col-lg-3" style="padding-right:8px; padding-left: 8px;">
						
						<div class="card">
						  <img style="height: 150px; width: 100%;" src="<?php echo base_url('assets/images/f14.jpg');?>" alt="Card image">
						 <div class="card-body" style="padding: 5px;">
						    
						    <small> <a href="https://bootswatch.com/lux/#" class="card-link"><h6>I will illustrate your album cover</h6></a></small>
						  </div>
						  <div class="card-footer text-muted" style="padding: 7px;">
						   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
								<style>
								.checked {
								    color: orange;
								}
								</style>
								</head>
								<body>
								<span class="fa fa-star checked"></span>
								<span class="fa fa-star checked"></span>
								<span class="fa fa-star checked"></span>
								<span class="fa fa-star checked"></span>
								<span class="fa fa-star"></span>
								</body>
						  </div>
						</div>

					</div>
				</div>
			</div> 
			<!-- center -->

			<!-- right -->
			
			<div class="col-lg-4">
				<div class="row" style="padding-bottom: 30px; ">
					<div class="col-lg-12" style="padding-right:8px; padding-left: 8px;">
						
						<div class="card">
						 		<center><h2>Posted Projects</h2></center>
						 <div class="card-body" style="padding: 5px;">
						     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
								 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
								 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
							</head>
						<body>
						    <div class="list-group">
							  <a href="#" class="list-group-item">First project</a>
							  <br>
							  <a href="#" class="list-group-item">Second project</a>
							  <br>
							  <a href="#" class="list-group-item">Third project</a>
							  <br>
							  <a href="#" class="list-group-item">Fourth project</a>
							  <br>
							  <a href="#" class="list-group-item">Fifth project</a>
							  <br>
							</div>
						  </div>
						  
						</div>

					</div>
				</div>
				<br>
				<div class="row" style="padding-bottom: 30px; ">
					<div class="col-lg-3"></div>
					<div class="col-lg-9" style="padding-right:8px; padding-left: 8px;">
						
						<div class="card">
							<br>
						 <center><h3>Popular Searches</h3></center>
						 <div class="card-body" style="padding: 5px;">

						 <hr>
						    	<button type="button" class="btn btn-outline-primary">Cartoon</button>
								<button type="button" class="btn btn-outline-secondary">Photography</button>
								<button type="button" class="btn btn-outline-success">Ebook Cover</button>
								<button type="button" class="btn btn-outline-info">Proofread</button>
								<button type="button" class="btn btn-outline-warning">Press Release</button>
								<button type="button" class="btn btn-outline-danger">Web Designer</button>
								<button type="button" class="btn btn-outline-danger">Painter</button>
								<button type="button" class="btn btn-outline-danger">Narration</button>
								<button type="button" class="btn btn-outline-danger">Documentation</button>
								<button type="button" class="btn btn-outline-danger">Writer</button>
								<button type="button" class="btn btn-outline-danger">Android</button>
								<button type="button" class="btn btn-outline-danger">Logo Design</button>
						  </div>
						</div>

					</div>
					<div class="col-lg-3"></div>
				</div>
				<div class="row" style="padding-bottom: 30px; ">
					<div class="col-lg-3"></div>
					<div class="col-lg-9" style="padding-right:8px; padding-left: 8px; width: 70%">
						
						<div class="card">
						 <div class="container">
	   
								  <div id="myCarousel" class="carousel slide" data-ride="carousel">
								    <!-- Indicators -->
								    <ol class="carousel-indicators">
								      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
								      <li data-target="#myCarousel" data-slide-to="1"></li>
								      <li data-target="#myCarousel" data-slide-to="2"></li>
								    </ol>

								    <!-- Wrapper for slides -->
								    <div class="carousel-inner">
								      <div class="item active">
								        <img src="<?php echo base_url('assets/images/ad1.jpg');?>" alt="Los Angeles" style="height: 300px; width: 100%;">
								      </div>

								      <div class="item">
								        <img src="<?php echo base_url('assets/images/ad2.jpg');?>" alt="Chicago" style="height: 300px; width: 100%;">
								      </div>
								    
								      <div class="item">
								        <img src="<?php echo base_url('assets/images/ad4.jpg');?>" alt="New york" style="height: 300px; width: 100%;">
								      </div>
								    </div>

								    </div>
								    <!-- Left and right controls -->
								    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
								      <span class="glyphicon glyphicon-chevron-left"></span>
								      <span class="sr-only">Previous</span>
								    </a>
								    <a class="right carousel-control" href="#myCarousel" data-slide="next">
								      <span class="glyphicon glyphicon-chevron-right"></span>
								      <span class="sr-only">Next</span>
								    </a>
								  </div>
								</div>
						 	<div class="card-body" style="padding: 5px;">
						    
						    <small> <a href="https://bootswatch.com/lux/#" class="card-link"><center><h4>Advertisement</h4></center></a></small>
						  </div>
						</div>

					</div>
					<div class="col-lg-3"></div>
				</div>
			</div>

		</div>

	
</div>