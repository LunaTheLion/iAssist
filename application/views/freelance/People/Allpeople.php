<title>iAssist -People</title>

<div class="col-lg-8 col-sm-8">
			<br>
			<div class="row">
				<?php foreach ($jobs as $row): ?>
					<br>
					<div class="col-lg-4 col-sm-1">
						<div class="card">
							 <a href="<?php echo site_url('user/View_User_Profile/'.$row->account_id) ?>" > 
							<img style="height: 200px; width: 100%; display: block;" src="<?php
								$img = $row->account_img;
								if(!empty($img))
								{
									 echo base_url('uploads/'.$row->account_img);
								}
								else
								{
									echo base_url('assets/img/fromYe/g1.png');
								}
							 ?>
							" alt="Card image">
						<div class="card-body" style="padding: 15px;">
							<p class="text-primary" style="font-size: 25px; margin-bottom: 2px;"><?php echo $row->account_username; ?></p></a>
							</p>
							<a class="btn btn-info" type="submit" style="float:0; right:0px;" a href="<?php // echo site_url('user/ViewProject/'.$row->title_slug.'/'.$row->post_id) ?>">Visit</a>
						</div>
					</div>
					</div> 
					
				<?php endforeach; ?>
			
			</div>
			<br>
			<script>
			

					$('#Ptype').hide();
					
				$('#cp').on('click', function(){
					$('#post2').toggle();
					$('#pic').toggle();
				});

				
			</script>
		</div>
	</div>	
</div>