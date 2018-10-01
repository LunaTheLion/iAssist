<div class="col-lg-6 col-sm-8">
	<div class="card">			
		<div class="card-body">
			
			<div class="card" >
			<div class="card-header" >
				<p class="text-primary" style="margin-bottom: 2px;">Project Posting</p>
			</div>
			<div class="card-body" style="padding-bottom: 3px; padding-top: 1px;">
			<button class="btn btn-primary" id="post">Post a Project</button>

	<!-- Skill Post -->
	<div id="post3" style="display:none;"  >
		<br>
		<form action="" method="Post" id="ProjectForm" >
			<div class="row">
				<div class="col-lg-3 col-sm-3">	
				  <center><p class="text-primary">Project Title</p></center>
				</div>
				<div class="col-lg-9 col-sm-9">
				  <input type="hidden" name="TypeOfPost" value="Project">
				  <input type="text" name="Ptitle" placeholder="What can you offer?" class="form-control" required>
				    
				</div>
			</div>
			<br>
			<div class="row">
				<div class="col-lg-3 col-sm-3">
				 <center><p class="text-primary">Description</p></center>
				</div>
				<div class="col-lg-9 col-sm-9">
				 <div class="form-group">
				  <textarea class="form-control " name="Pdescription" placeholder="Briefly Describe what you can offer" rows="5" style="white-space: pre-wrap;" required></textarea>
				 </div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-3 col-sm-3">
				 <center><p class="text-primary" required>Price</p></center>
				</div>
				<div class="col-lg-9 col-sm-9">
				 <div class="form-group">
				  <input type="text" name="Ppricing" placeholder="Indicate your pricing" class="form-control" required>
				 </div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-3 col-sm-3">
				 <center><p class="text-primary" required>Category</p></center>
				</div>
				<div class="col-lg-9 col-sm-9">
				 <div class="form-group">
				  <select class="form-control" name="Pcategory">
				   <option value="">Select Category</option>
				   <option value="Video and Animation">Video &amp; Animation</option>
				   <option value="Graphics and Design">Graphics &amp; Design</option>
				   <option value="Digital Marketing">Digital Marketing</option>
				   <option value="Writing and Translation">Writing &amp; Translation</option>
				   <option value="Music and Audio">Music &amp; Audio</option>
				   <option value="Programming and Tech">Programming &amp; Tech</option>
				   <option value="Business">Business</option>
				   <option value="Lifestyle">Fun &amp; Lifestyle</option>
				  </select>
				 </div>
				</div>
			</div>
			<button class="btn btn-secondary" type="submit" id="btnJob" style=" padding: 7px;float: right; right: 0;" >Post</button>
		</form>
	</div>


</div>
</div>		
</div>
</div>
<br>
<div class="card" id="showPost">
			</div>
	</div>
	</div>

</div>

<script>
	
	$(window).on('load',function(){

		showAllPost();
		$('#post').on('click', function(){
			$('#post3').toggle();
		});
		function showAllPost(){
			var dir  = "<?php echo site_url(); ?>"
			 $.ajax({
			 	type: 'ajax',
			 	url: '<?php echo base_url()?>user/get_project',
			 	async : true,
			 	dataType: 'json',
			 	success: function(data){
			 		console.log(data);
			 		var html = '';
			 		var i;
			 		for(i=0; i<data.length;i++)
			 		{
			 		html += '<div class="card-body">'+
			 			'<div class="card">'+
			 			'<div class="card-body" style="padding-bottom: 3px;">'+
			 			'<h5 class="card-title"><a href="'+dir+'user/ViewProject/'+data[i].title_slug+'/'+data[i].post_id+'">'+data[i].title+'</a></h5>'+
			 			data[i].description+
			 			
			 			'</div>'+
			 			'</div>'+
			 			'</div>';	
			 		}
			 		$('#showPost').html(html);
			 	},
			 	error: function(){
			 		alert('Could not load Post');
			 	}
			 })
		};
		

		$('#ProjectForm').on('submit', function(){
			event.preventDefault();
			console.log($(this).serialize());
			$.ajax({
				type:'ajax',
				method: 'Post',
				url: '<?php echo base_url()?>user/submitProjectPost',
				data: $(this).serialize(),
				async: false,
				dataType: 'json',
				success: function(data){
					console.log(data);
					alert('Your Project Post will be reviewed by the Admin first, please wait for the confirmation.'+data.post_result);
					$('#SkillForm')[0].reset();
					location.reload();
					showAllPost();
				},
				error: function(){
					alert('Could not save');
				}
			});
		});
		

		

	});

</script>