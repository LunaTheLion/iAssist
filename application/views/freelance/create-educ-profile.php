<title>Educational Background</title>
<!-- <div class="jumbotron">
<div class="row">
	<div class="col-lg-4 col-sm-4">
		<div class="card">
			<div class="card-header"></div>
			<div class="card-body">
				<a href="<?php echo site_url('user/general/'.$this->session->userdata('email')); ?>">Back to profile</a>
			</div>
			<div class="card-footer"></div>
		</div>
	</div> -->
	<div class="col-lg-6 col-sm-6">
		<div class="card">	
			<div class="card-header">Educational Profile</div>
			<form method="POST" action="<?php echo base_url('user/v_educ') ?>">
			<div class="card-body">
				
					<div class="row">
						<div class="col-lg-2 col-sm-2">
						<center>School</center>
						</div>
						<div class="col-lg-10 col-sm-10">
							<input type="text" readonly name="school" class="form-control form-control-sm" value="UNIVERSITY OF MAKATI">
						</div>

					</div>
					<br>
					<div class="row">
						<div class="col-lg-2 col-sm-2"><center>
							College
						</center>
							
						</div>
						<div class="col-lg-10 col-sm-10">
						<select class="form-control form-control-sm" id="college" name="College" required="required">
						<option value="">Select College</option>
						<?php foreach ($college as $get):?>
							<option value="<?php echo $get->college_name; ?>"><?php echo $get->college_name; ?></option>
						<?php endforeach; ?>
				      </select>

							
						</div>
					</div>
					<br>
					<div class="row">
						<div class="col-lg-2 col-sm-2">
							<center>Major</center>
						</div>
						<div class="col-lg-10 col-sm-10">
					<div class="form-group">
				 		<select class="form-control form-control-sm" name="cmajor" id="cmajor" disabled>
				 		  <option value="">Select Major</option>
				 		</select>
				 		<br>
				     
				    </div>
				</div>

					</div>
			
					
					<br>
					<a role="button" class="btn btn-secondary" data-toggle="collapse" href="#collapseExample" > + Add Educational Attainment</a>
				<br><br>

			<div class="collapse" id="collapseExample">
			  <div class="row">
			  	<div class="col-lg-2 col-sm-2">
			  	<center>School</center>
			  	</div>
			  	<div class="col-lg-10 col-sm-10">
			  		<input type="text"  name="aSchool" class="form-control form-control-sm" >
			  		
			  	</div>

			  </div>
			  <br>
			  <div class="row">
			  	<div class="col-lg-2 col-sm-2">
			  	<center>College</center>
			  	</div>
			  	<div class="col-lg-10 col-sm-10">
			  		<input type="text"  name="aCollege" class="form-control form-control-sm" >
			  		
			  	</div>

			  </div>
			  <br>
			  <div class="row">
			  	<div class="col-lg-2 col-sm-2">
			  	<center>Major</center>
			  	</div>
			  	<div class="col-lg-10 col-sm-10">
			  		<input type="text"  name="aMajor" class="form-control form-control-sm" >
			  		
			  	</div>

			  </div>
			    
			 
			</div>	
					
					
				
			</div>

			
			<div class="card-footer">
				
				<button type="submit" class="btn btn-info">Submit</button>
				<a href="<?php echo base_url('user/skill') ?>" class="btn btn-danger">Skip</a>
			</div>
			</form>
		</div>
		
	</div>
</div>
</div>
<script>
	
	$(window).on('load', function(){
		
	
		$('#college').on('change', function(){
			var id = $(this).val();
			if(id == '')
			{	
				$('#cmajor').prop('disabled', true);
			}
			else
			{
				
				$('#cmajor').prop('disabled', false);
				event.preventDefault();
				$.ajax({
					url: '<?php echo base_url()?>user/get_major',
					type: 'post',
					passive: true,
					data: {id:id},
					success: function(data){
						console.log(data);
						//$('#cmajor').html(data);
					},
					error: function(){
						alert('Error');
					}
				});
			}
			

		});//college on change

		// 	$('#college').on('change', function(){
		// var college_id = $(this).val();
		// if(college_id == '')
		// {
		// 	$('#cmajor').prop('disabled',true);
		// }
		// else
		// {
		// 	$('#cmajor').prop('disabled', false);
		// 	//alert('Hello');

		// 	$.ajax({
		// 		url: "<?php echo base_url() ?>user/get_major",
		// 		type: "Post",
		// 		data: {"college_id": college_id},
		// 		success : function(data){
		// 			$('#cmajor').html(data);
		// 		},
		// 		error: function(){
		// 			alert('Error');
		// 		}
		// 	});	
		// }
		// });
	});
	
</script>