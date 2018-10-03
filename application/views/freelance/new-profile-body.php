<div class="jumbotron" style="background-color: 	#E0E0E0;">
	<div class="row">
		<div class="col-lg-4 col-sm-12" >
			<div class="card" style="border:none;">
				<div class="card-header">
					<h3>Job</h3>
					Interested | Likes
				</div>
				<div class="card-body" id="showJob" style="padding: 2px;">
					
				</div>
			</div>
		</div>


		<div class="col-lg-4 col-sm-12">
			<div class="card"  style="border:none;">
				<div class="card-header">
					<h3>Skill</h3>
					Interested | Likes
				</div>
				<div class="card-body" id="showSkill" style="padding:2px;">
					
				</div>
			</div>
		</div>


		<div class="col-lg-4 col-sm-12" >
			<div class="card"  style="border:none;">
				<div class="card-header">
					<h3>Request</h3>
					Interesteds | Likes
				</div>
				<div class="card-body" id="showRequest" style="padding: 2px;">
					
				</div>
			</div>
		</div>
	</div>
     <div id="view" class="modal fade" tabindex="-1" role="dialog">
          <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title"></h4>
              </div>
              <div class="modal-body">
                    <form id="addForm" action="" method="post" class="form-horizontal">
                        <input type="hidden" name="num" value="0">
                       	<div class="row">
                       		<div class="col-sm-4">
                       			<p class="text-primary" >Title</p>
                       		</div>
                       		<div class="col-sm-4">
                       			<input type="text" class="form-control" name="title">
                       		</div>
                       	</div>
                       	<br>
                       	<div class="row">
                       		<div class="col-sm-4">
                       			<p class="text-primary" >Description</p>
                       		</div>
                       		<div class="col-sm-4">
                       			<input type="text" class="form-control" name="description">
                       		</div>
                       	</div>
                       	<br>
                       	<div class="row">
                       		<div class="col-sm-4">
                       			<p class="text-primary" >Category</p>
                       		</div>
                       		<div class="col-sm-4">
                       			<input type="text" class="form-control" name="category">
                       		</div>
                       	</div>
                       	<br>
                       	<div class="row">
                       		<div class="col-sm-4">
                       			<p class="text-primary" >Offer</p>
                       		</div>
                       		<div class="col-sm-4">
                       			<input type="text" class="form-control" name="offer">
                       		</div>
                       	</div>
                     
                
                    
              </div>
              <div class="modal-footer">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              <button type="button" id="btnAdd"  class="btn btn-primary">Submit</button>

              </div>
              </form>
            </div><!-- /.modal-content -->
          </div><!-- /.modal-dialog -->
        </div><!-- /.modal -->
	<script>
		$(window).on('load', function(){
			showJobPost();
			showSkillPost();
			showRequestPost();

			function showJobPost(){
				$.ajax({
					type: 'ajax',
					url: '<?php echo base_url()?>user/get_job_post',
					async : true,
					dataType: 'json',
					success: function(data){
						console.log(data);
						var html = '';
						var i;
						for(i=0; i<data.length;i++)
						{
						html += '<div class="card-body" style="padding: 5px;">'+
							'<div class="card">'+
							'<div class="card-body" style="padding-bottom: 3px;">'+
							'<h4 class="text-primary"><a href="#view" data-toggle="modal" class="item-crud" data="'+data[i].post_id+'">'+data[i].title+'</a></h4>'+
							'<p>'+data[i].description+'</p>'+
							
							'</div>'+
							'</div>'+
							'</div>';	
						}
						$('#showJob').html(html);
					},
					error: function(){
						alert('Could not load Post');
					}
				})
			}
			$('#showJob').on('click', '.item-crud', function(){
				var id = $(this).attr('data');
				//alert(id);
				$(' .modal-body #num').val(id);
				$.ajax({
				   type: 'ajax',
				   method: 'get',
				   url: '<?php echo base_url() ?>User/crud_job_post',
				   data: {id:id},
				   async: false,
				   dataType: 'json',
				   success: function(data){
				       console.log(data);
				        $('.modal-body  #title').val(data.title);
				        $('.modal-body #description').val(data.description);
				        $('.modal-body #category' ).val(data.category);
				   },
				   error: function()
				   {
				       alert('Could not edit data');
				   }
				});


			})
			function showSkillPost(){
				$.ajax({
					type: 'ajax',
					url: '<?php echo base_url()?>user/get_skill_post',
					async : true,
					dataType: 'json',
					success: function(data){
						console.log(data);
						
						var html = '';
						var i;
						for(i=0; i<data.length;i++)
						{
						html += '<div class="card-body" style="padding: 5px;">'+
							'<div class="card">'+
							'<div class="card-body" style="padding-bottom: 3px;">'+
							'<h4 class="text-primary"><a href="#view" data-toggle="modal" class="item-crud" data="'+data[i].post_id+'">'+data[i].title+'</a></h4>'+
							'<p>'+data[i].description+'</p>'+
							
							'</div>'+
							'</div>'+
							'</div>';	
						}
						$('#showSkill').html(html);
					},
					error: function(){
						alert('Could not load Post');
					}
				})
			}
			function showRequestPost(){
				$.ajax({
					type: 'ajax',
					url: '<?php echo base_url()?>user/get_request_post',
					async : true,
					dataType: 'json',
					success: function(data){
						console.log(data);
						var html = '';
						var i;
						for(i=0; i<data.length;i++)
						{
						html += '<div class="card-body" style="padding: 5px;">'+
							'<div class="card">'+
							'<div class="card-body" style="padding-bottom: 3px;">'+
							'<h4 class="text-primary"><a href="#view" data-toggle="modal" class="item-crud" data="'+data[i].id+'">'+data[i].request_category+'</a></h4>'+
							'<p>'+data[i].request_description+'</p>'+
							
							'</div>'+
							'</div>'+
							'</div>';	
						}
						$('#showRequest').html(html);
					},
					error: function(){
						alert('Could not load Post');
					}
				})
			}
		})
	</script>
</div>