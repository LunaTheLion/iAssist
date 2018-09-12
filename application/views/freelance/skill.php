
<title>Skill</title>
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
			<div class="card-header">Skill Set</div>

			<form method="POST" action="<?php echo base_url('user/Project') ?>">
			<div class="card-body">
				 <span id="success_message"></span>

				    <form method="post" id="programmer_form">
				    	<div class="row">
				    		<div class="col-lg-2 col-sm-2">
				    			Skill
				    		</div>
				    		<div class="col-lg-10 col-sm-10">
				    			<input type="text" name="name" id="name" class="form-control" />
				    		</div>
				    	</div>
				    	<br>
				    	<div class="row">
				    		<div class="col-lg-2 col-sm-2">
				    			Skill
				    		</div>
				    		<div class="col-lg-10 col-sm-10">
				    			
				    			<input type="text" name="skill" id="skill" class="form-control" />
				    		</div>
				    	</div>	
				     
				     <div class="form-group">
				      <input type="submit" name="submit" id="submit" class="btn btn-info" value="Submit" />
				     </div>
				    </form>
			<!-- 	<div class="row">
						<div class="col-lg-2 col-sm-2">
							<center>Skill/ Expertise</center>
						</div>
						<div class="col-lg-10 col-sm-10">
							
							<div class="tags-input" data-name="tags-input" name="title">
				

							</div>
							
						</div>
					</div>	
					<BR>	
					<div class="row">
						<div class="col-lg-2 col-sm-2">
							<CENTER>Rate/Hour:</CENTER>
						</div>
						<div class="col-lg-5 col-sm-5">
							<select class="form-control" id="exampleSelect1" length="4">
							        <option>1</option>
							        <option>2</option>
							        <option>3</option>
							        <option>4</option>
							        <option>5</option>
							      </select>
							      <br>
						</div>
						<div class="col-lg-5 col-sm-5">
						</div>
					</div> -->
			</div>
					
					
			
					
				
			
			<div class="card-footer">
				
				<button type="submit" class="btn btn-info">Validate</button>
				<a href="<?php echo base_url('user/project') ?>" class="btn btn-danger">Skip</a>
			</div>
			</div>
			</form>
		</div>
	</div>
</div>
</div>
<script>
$(document).ready(function(){
 
 $('#skill').tokenfield({
  autocomplete:{
   source: ['PHP','Codeigniter','HTML','JQuery','Javascript','CSS','Laravel','CakePHP','Symfony','Yii 2','Phalcon','Zend','Slim','FuelPHP','PHPixie','Mysql'],
   delay:100
  },
  showAutocompleteOnFocus: true
 });

 $('#programmer_form').on('submit', function(event){
  event.preventDefault();
  if($.trim($('#name').val()).length == 0)
  {
   alert("Please Enter Your Name");
   return false;
  }
  else if($.trim($('#skill').val()).length == 0)
  {
   alert("Please Enter Atleast one Skill");
   return false;
  }
  else
  {
   var form_data = $(this).serialize();
   $('#submit').attr("disabled","disabled");
   $.ajax({
    url:"insert.php",
    method:"POST",
    data:form_data,
    beforeSend:function(){
     $('#submit').val('Submitting...');
    },
    success:function(data){
     if(data != '')
     {
      $('#name').val('');
      $('#skill').tokenfield('setTokens',[]);
      $('#success_message').html(data);
      $('#submit').attr("disabled", false);
      $('#submit').val('Submit');
     }
    }
   });
   setInterval(function(){
    $('#success_message').html('');
   }, 5000);
  }
 });
 
});
</script>