  
   </head> 

<title>Personal Profile</title>
	<div class="col-lg-6 col-sm-6">
		<div class="card">
      <div class="card-body">
      <span id="success_message"></span>
      <form method="post" id="programmer_form">
       <div class="form-group">
        <label>Category</label>
        <input type="text" name="category" id="category" class="form-control" />
       </div>
       <div class="form-group">
        <label>Skills</label>
        <input type="text" name="skill" id="skill" class="form-control" placeholder="Enter your skills here" />
       </div>
       <div class="form-group">
        <input type="submit" name="submit" id="submit" class="btn btn-info" value="Submit" />
       </div>
      </form>
      </div>
		
		</div>
	</div>
</div>
</div>

<script>
$(document).ready(function(){
 
 $('#skill').tokenfield({
  autocomplete:{
   source: ['PHP','Codeigniter','HTML','JQuery','Javascript','CSS','Laravel','CakePHP','Symfony','Yii 2','Phalcon','Zend','Slim','FuelPHP','PHPixie','Mysql','Android Developer'],
   delay:100
  },
  showAutocompleteOnFocus: true
 });
 $('#category').tokenfield({
  autocomplete:{
   source: ['Video and Animation','Graphics and Design','Digital Marketing','Writing and Translation','Music and Audio','Programming and Tech','Business','Lifestyle'],
   delay:100
  },
  showAutocompleteOnFocus: true
 });

 $('#programmer_form').on('submit', function(event){
  event.preventDefault();
  if($.trim($('#category').val()).length == 0)
  {
   alert("Please Enter Atleast one Category");
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
    url:'<?php echo base_url()?>user/insert',
    method:"POST",
    data:form_data,
    beforeSend:function(){
     $('#submit').val('Submitting...');
    },
    success:function(data){
     if(data != '')
     {
      $('#category').tokenfield('setTokens', []);
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

