<title>Profile</title>
<div class="jumbotron" style="padding-right: 350px; padding-left: 100px;">

	 
		<?php foreach ($data as $main): 
		// echo "<pre>";
		// print_r($main);
		// echo "</pre>";
		?>
			<div class="card" style="background-color:  #FDEBD0; padding: 20px;">
			<div class="row">
				<div class="col-sm-2">
					<img  src="<?php 
									$pic = $main->account_img;
									if( !empty($pic))
									{
										echo site_url("uploads/$pic");
									}
									else
									{

										echo site_url("uploads/pic.jpg");}
										?>
										" 
									
					width="110" height="120">
				</div>
				<div class="col-sm-2">A
					<p><?php echo $main->account_username;
						$this->session->set_userdata('username', $main->account_username);
					 ?></p>

					<!-- <button type="button" class="btn btn-success">Request Resume</button> -->
				</div>
				<div class="col-sm-4">C</div>
				<div class="col-sm-4">D</div>
			</div>
			

		</div>
		<div class="card" style=" padding: 10px;">
			<ul class="nav nav-tabs">
			  <li class="nav-item">
			    <a class="nav-link  " data-toggle="tab" href="#profile">Profile</a>
			  </li>
			  <li class="nav-item">
			    <a class="nav-link active " data-toggle="tab" href="#home">Posts</a>
			  </li>
			  <li class="nav-item dropdown">
			    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="https://bootswatch.com/lux/#" role="button" aria-haspopup="true" aria-expanded="false">Dropdown</a>
			    <div class="dropdown-menu">
			      <a class="dropdown-item" href="#dropdown1">Action</a>
			      <a class="dropdown-item" href="#dropdown2">Another action</a>
			      <a class="dropdown-item" href="https://bootswatch.com/lux/#">Something else here</a>
			      <div class="dropdown-divider"></div>
			      <a class="dropdown-item" href="https://bootswatch.com/lux/#">Separated link</a>
			    </div>
			  </li>
			</ul>
			<div id="myTabContent" class="tab-content">
			  <div class="tab-pane fade  show active" id="home" style="padding-top: 10px;">

			  	<div class="card border-secondary mb-3" style="max-width: 65rem;">
			  		  <div class="card-body" style="padding:0px;">
			  		  	<a class="btn btn-secondary" href="<?php echo base_url('user/create_post')?>" >Create Post</a><Br>
						
			  		  </div>

			  		</div>
			  	
			
			 <?php foreach ($data2 as $agila): ?>
				
				
			  		<div class="card border-secondary mb-3" style="max-width: 65rem;">
			  		  <div class="card-body">
			  		  	<div class="row">
			  		  		<div class="col-sm-10" >
			  		  			<h4 class="card-title"><?php echo $agila->title; ?>
			  		   			 </h4>
			  		   			 <hr>
			  		  		</div>
			  		  		<div class="col-sm-1" style="padding: 0px;">
			  		  			
			  		  			<button type="button" class="btn btn-secondary btn-sm" style="display: inline-block; vertical-align: middle;" data-toggle="modal" data-target="#edit">Edit</button>
			  		  		</div>
			  		  		<div class="col-sm-1" style="padding: 0px; align-content: right">
			  		  			<a href="<?php echo site_url('user/delete_post/'.$agila->post_id) ?>" class="btn btn-secondary btn-sm" style="display: inline-block; vertical-align: middle;" onclick="return confirm('Are you sure?')" >Delete</a>
			  		  		</div>
			  		  		<p>
			  		  			<?php echo $agila->description; ?>
			  		  		</p>
			  		  	</div>
			  		    
			  		 	
			  		    
			  		    <p class="card-text">
			  		    	
			  		    </p>
			  		  </div>

			  		</div>
			  	
			  	<?php  endforeach; ?>
			  	
			  	<br>

			  
	
			  </div>
			  <div class="tab-pane fade " id="profile" style="padding-top: 10px;"
			  >
			   <div class="card" style="padding: 10px;">
			   	<h4 style="position: absolute;">Skills</h4>
			<a href="#" class="btn btn-sm btn-secondary" style="position: absolute; right: 0;">Edit</a>
			   	<p></p>
			   	<hr>
			   	<div class="card-body" style="padding: 0px;">
			   		<a href="<?php echo base_url('user/Skill') ?>" class="btn btn-success" >Add Skills</a>
			   	</div>
			  		
			  	</div>
			  	<div class="card" style="padding: 10px;">
			   	<h4 style="position: absolute;">Portfolio</h4>
			   	<a href="#" class="btn btn-sm btn-secondary" style="position: absolute; right: 0;">Edit</a>
			   	<p></p>
			   	<hr>
			   	<div class="card-body" style="padding: 0px;">
			   		<a href="#" class="btn btn-success" >Add Projects</a>
			  		<!-- <p>Links of your projects <a href="#" style="position: relative;">only me</a></p> -->
			   	</div>
			  		
			  	</div>
			  	<div class="card" style="padding: 10px;">
			   <h4 style="position: absolute;">Interest</h4>
			   <a href="#" class="btn btn-sm btn-secondary" style="position: absolute; right: 0;">Edit</a>
			   <p></p>
			   <hr>
			   <div class="card-body" style="padding: 0px;">
			   		<a href="#" class="btn btn-success" >Add Interest</a>
			   </div>
			  	<!-- 	<p>Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor, williamsburg carles vegan helvetica. Reprehenderit butcher retro keffiyeh dreamcatcher synth. Cosby sweater eu banh mi, qui irure terry richardson ex squid. Aliquip placeat salvia cillum iphone. Seitan aliquip quis cardigan american apparel, butcher voluptate nisi qui.</p> -->
			  	</div>
			  </div>
			  <div class="tab-pane fade" id="dropdown1">
			    <p>Etsy mixtape wayfarers, ethical wes anderson tofu before they sold out mcsweeney's organic lomo retro fanny pack lo-fi farm-to-table readymade. Messenger bag gentrify pitchfork tattooed craft beer, iphone skateboard locavore carles etsy salvia banksy hoodie helvetica. DIY synth PBR banksy irony. Leggings gentrify squid 8-bit cred pitchfork.</p>
			  </div>
			  <div class="tab-pane fade" id="dropdown2">
			    <p>Trust fund seitan letterpress, keytar raw denim keffiyeh etsy art party before they sold out master cleanse gluten-free squid scenester freegan cosby sweater. Fanny pack portland seitan DIY, art party locavore wolf cliche high life echo park Austin. Cred vinyl keffiyeh DIY salvia PBR, banh mi before they sold out farm-to-table VHS viral locavore cosby sweater.</p>
			  </div>
			</div>
		</div>
		<!-- <div class="row" style="background-color:  #FDEBD0;">
			<div class="col-sm-4">A</div>
			<div class="col-sm-4">B</div>
			<div class="col-sm-4">C</div>
		</div>
		<hr>
		<div class="row">
			<div class="col-sm-4">A</div>
			<div class="col-sm-4">B</div>
			<div class="col-sm-4">C</div>
		</div>
		<hr> -->

<?php endforeach; ?>
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Modal Header</h4>
      </div>
      <div class="modal-body">
        <p>Some text in the modal.</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>


<div class="modal fade" id="edit" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Edit Post</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form id="myForm" action="" method="POST" class="form-horizontal">
        	<div class="form-group">
        			<input type="text" name="etitle" class="form-control">
        			<small for="etitle" class="label-control">Title</small>
        	</div>
        	<div class="form-group">
        			<textarea class="form-control" name="edescription" rows="5" required></textarea>
        			<small for="etitle" class="label-control">Description</small>
        	</div>
        	<div class="form-group">
        			<input type="text" name="erate" class="form-control">
        			<small for="etitle" class="label-control">Rate/Hour</small>
        	</div>
        	<div class="form-group">
        			<input type="text" name="ebudget" class="form-control">
        			<small for="etitle" class="label-control">Budget</small>
        	</div>
        	<div class="form-group">
        			<input type="text" name="eskill" class="form-control">
        			<small for="etitle" class="label-control">Skill</small>
        	</div>
        	<div class="form-group">
        			<input type="text" name="ecategory" class="form-control">
        			<small for="etitle" class="label-control">Category</small>
        	</div>
			
	        	
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" id="saveEdit" class="btn btn-primary">Save changes</button>
      </div>
      </form>
    </div>
  </div>
</div>





</div>

<script type="text/javascript">
	
   $('#saveEdit').click(function(){
   			//alert('test');
   			var url = $('#myForm').attr('action');
   			var data = $('#myFrom').serialize();
   			//validate form
   			var ntitle 		=$('input[name=etitle]');
   			var ndescription=$('input[name=edescription]');
   			var nskill 		=$('input[name=eskill]');
   			var nrate 		=$('input[name=erate]');
   			var nbudget 		=$('input[name=ebudget]');
   			var ncategory		=$('input[name=ecategory]');
   			

   });

   $('#btnEdit').click(function(){
   		var id= $(this).attr('data');
   		alert($id);
   })

   function ViewVisaPopups(visaBr) {
   var visaId = $("#visaId").val();
   $(document).ready(function () {
   $.ajax({
   type: "POST",
   url: "visa/ViewVisaPopup",
   data: {visaId: visaId,visaBr: visaBr},
   success: function (data) {
   $('.ViewPkgPopup').html(data);
   }
   });
   });


   }

</script>



