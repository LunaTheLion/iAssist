<title>iAssist - Jobs</title>

<div class="col-lg-8 col-sm-8">
			<br>
			<div class="row">
				<?php foreach ($jobs as $row): ?>
					<br>
					<div class="col-lg-4 col-sm-1" style="padding-bottom: 8px;">
						<div class="card">
							<a href="<?php echo site_url('user/ViewJob/'.$row->title_slug.'/'.$row->post_id) ?>" >
							<!-- <img style="height: 200px; width: 100%; display: block;" src="<?php echo base_url('uploads/'.$row->post_img)?>" alt="Card image"> -->
						<div class="card-body" style="padding: 15px;">
							<p class="text-primary" style="font-size: 25px; margin-bottom: 2px;"><?php echo $row->title; ?></p></a>
							<p class="text-primary" style="margin-bottom: 2px"><?php echo $row->post_username;?></p>
							<a href="<?php echo base_url('user/clickbyCategory/'.$row->category); ?>"><?php echo $row->category ?></a> |&nbsp<a href=""><?php echo $row->budget ?></a> 
							<p style="font-size: 12px; margin-bottom: 0px;"><?php //echo $row->description; ?>
								<?php 
								$string = $row->description;
								$string = strip_tags($string);
								if (strlen($string) > 50) {
								    // truncate string

								    $stringCut = substr($string, 0, 50);
								    $endPoint = strrpos($stringCut, ' ');

								    //if the string doesn't contain any space then it will cut without word basis.
								    $string = $endPoint? substr($stringCut, 0, $endPoint):substr($stringCut, 0);
								    $string .= '... <a href="'.base_url('user/clickbyCategory/'.$row->category).'">Read More</a>';
								}
								echo $string;
								 ?>
							</p>
							<a class="btn btn-sm btn-success" style="float:0; right:0px;" a href="<?php echo site_url('user/ViewJob/'.$row->title_slug.'/'.$row->post_id) ?>">Visit</a>
							<?php $acc = $this->session->userdata('acc_type');
								if( $acc == 'Client')
								{
									echo '';
								}
								else
								{	
									echo '<input type="hidden" value="'.$row->post_id.'" name="postid">';
									echo '<button class="btn btn-sm btn-info" style="float:0; right:0px;" id="save" data="'.$row->post_id.'"> Save</button>';
								}	
							 ?>
							
						</div>
					</div>
					</div>
					
				<?php endforeach; ?>
			
			</div>
			<br>
			<script>
				$(document).ready(function(){
					checkifsaved();
					$('#save').on('click', function(){
						var id = $(this).attr('data');
						//alert(id);
						$.ajax({
							type: 'ajax',
							method: 'get',
							url: '<?php echo base_url()?>user/saveJob',
							data: {id:id},
							async:true,
							dataType: json,
							success: function(data)
							{
								console.log(data);
							},
							error: function (data)
							{
								alert('Sorry cannot save the Job');
							}
						})
					});
					function checkifsaved()
					{
						var id = $('input[name=postid]').val();
						$.ajax({
							type: 'ajax',
							method: 'get',
							url: '<?php echo base_url()?>user/checkifSaved',
							data: {id:id},
							async:true,
							dataType: json,
							success: function(data)
							{
								console.log(data);
								json = JSON.parse(data);
								if(json === true)
								{
									$('#save').text('Saved');
									$('#save').removeClass('btn-info');
									$('#save').addClass('btn-secondary');
								}
								
							},
							error: function (data)
							{
								alert('Sorry cannot check if the job is saved');
							}
						})
					}

				})
				
			</script>
		</div>
	</div>	
</div>