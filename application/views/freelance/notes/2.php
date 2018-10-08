<div class="col-lg-6 col-sm-8">
	<div class="card">			
		<div class="card-body">
			<div class="card" >
			<div class="card-body" style="padding-bottom: 3px;">
			<div class="row">
			 	<div class="col-lg-3 col-sm-6" style="padding-right: 0px;">
			 		<h5 class="card-title">Create Post</h5> 			
				</div>			  	
				<div class="col-lg-3 col-sm-6">
		  			<select class="form-control" id="postType" style="padding: 3px;">
		   				<option value="Regular">Regular Post</option>
						<option value="Job">Job Post</option>
						<option value="Skill">Skill Post</option>
				</select>
				</div>   	
			</div>

	<!-- Regular Post -->
	<div id="post1">
		<form action="<?php echo base_url('user/Post')?>" method="post" id="RegularForm">
			<input type="hidden" name="TypeOfPost" value="Regular">
			<textarea class="form-control" name="PostDesc" placeholder="Write Something" rows="3" cols="110" style="border:none;margin-bottom: 5px; " required></textarea>
			<button id="btnPost" type="submit" class="btn btn-secondary" style=" padding: 7px;float: right; right: 0;">Post</button>
		</form>
	</div>

	<!-- Job Post -->
	<div id="post2" style="display: none;" >
		<br>
		<form action="" method="Post" id="JobForm" >
			<div class="row">
				<div class="col-lg-3 col-sm-3">	
				  <center><p class="text-primary">Title</p></center>
				</div>
				<div class="col-lg-9 col-sm-9">
				  <input type="hidden" name="TypeOfPost" value="Job">
				  <input type="text" name="title" placeholder="What are you looking for?" class="form-control" required>
				    
				</div>
			</div>
			<br>
			<div class="row">
				<div class="col-lg-3 col-sm-3">
				 <center><p class="text-primary">Description</p></center>
				</div>
				<div class="col-lg-9 col-sm-9">
				 <div class="form-group">
				  <textarea class="form-control " name="description" placeholder="Briefly Describe what you are looking for" rows="5" required></textarea>
				 </div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-3 col-sm-3">
				 <center><p class="text-primary" required>Offer</p></center>
				</div>
				<div class="col-lg-9 col-sm-9">
				 <div class="form-group">
				  <input type="text" name="offer" class="form-control" required>
				 </div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-3 col-sm-3">
				 <center><p class="text-primary" required>Category</p></center>
				</div>
				<div class="col-lg-9 col-sm-9">
				 <div class="form-group">
				  <select class="form-control" name="category">
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

	<!-- Skill Post -->
	<div id="post3" style="display: none;" >
		<br>
		<form action="" method="Post" id="SkillForm" >
			<div class="row">
				<div class="col-lg-3 col-sm-3">	
				  <center><p class="text-primary">Skill Title</p></center>
				</div>
				<div class="col-lg-9 col-sm-9">
				  <input type="hidden" name="TypeOfPost" value="Job">
				  <input type="text" name="title" placeholder="What are you looking for?" class="form-control" required>
				    
				</div>
			</div>
			<br>
			<div class="row">
				<div class="col-lg-3 col-sm-3">
				 <center><p class="text-primary">Description</p></center>
				</div>
				<div class="col-lg-9 col-sm-9">
				 <div class="form-group">
				  <textarea class="form-control " name="description" placeholder="Briefly Describe what you are looking for" rows="5" required></textarea>
				 </div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-3 col-sm-3">
				 <center><p class="text-primary" required>Offer</p></center>
				</div>
				<div class="col-lg-9 col-sm-9">
				 <div class="form-group">
				  <input type="text" name="offer" class="form-control" required>
				 </div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-3 col-sm-3">
				 <center><p class="text-primary" required>Category</p></center>
				</div>
				<div class="col-lg-9 col-sm-9">
				 <div class="form-group">
				  <select class="form-control" name="category">
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
		
		function showAllPost(){
			 $.ajax({
			 	type: 'ajax',
			 	url: '<?php echo base_url()?>user/get_post',
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
			 			'<h5 class="card-title"></h5>'+
			 			'<textarea class="form-control" style="border: none; margin-bottom:2px;" placeholder="Write Something" rows="4" cols="110" readonly>'+data[i].description+'</textarea>'+
			 			'<button class="btn btn-secondary" style="padding-top: 2px; padding: 10px;float: right; right: 0;">Post</button>'+
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


		$('#postType').change(function(){
			
			var val = $(this).val();
			if(val == 'Regular')
			{//Regular Post
				$('#post1').show();
				$('#post2').hide();
				$('#post3').hide();
			}
			else if( val == 'Job')
			{//Job Posting
				$('#post1').hide();
				$('#post2').show();
				$('#post3').hide();
			}
			else
			{
				$('#post1').hide();
				$('#post2').hide();
				$('#post3').show();
			}
		});
		$('#postType').load(function(){
			if(this.val() == 'Regular')
			{
				$('#post1').show();
				$('#post2').hide();
			}
			else
			{
				$('#post1').hide();
				$('#post2').show();
			}
		});
		//Submit Job Post
		$('#JobForm').on('submit', function(){
			event.preventDefault();
			console.log($(this).serialize());
			$.ajax({
				type:'ajax',
				method: 'Post',
				url: '<?php echo base_url()?>user/PostJob',
				data: $(this).serialize(),
				async: false,
				dataType: 'json',
				success: function(data){
					console.log(data);
					alert('Your Job Post will be reviewed by the Admin first, please wait for the confirmation.'+data.post_result);
					$('#JobForm')[0].reset();
					location.reload();
					showAllPost();
				},
				error: function(){
					alert('Could not save');
				}
			});
		});

		$('#SkillForm').on('submit', function(){
			event.preventDefault();
			console.log($(this).serialize());
			$.ajax({
				type:'ajax',
				method: 'Post',
				url: '<?php echo base_url()?>user/PostJob',
				data: $(this).serialize(),
				async: false,
				dataType: 'json',
				success: function(data){
					console.log(data);
					alert('Your Job Post will be reviewed by the Admin first, please wait for the confirmation.'+data.post_result);
					$('#JobForm')[0].reset();
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