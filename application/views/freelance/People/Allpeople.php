<title>iAssist -People</title>

<div class="col-lg-8 col-sm-8">
			<br>
			<div class="row">
				<?php foreach ($jobs as $row): ?>
					<br>
					<div class="col-lg-4 col-sm-1">
						<div class="card">
							 <a href="<?php echo site_url('user/View_User_Profile/'.$row->account_id) ?>" > 
							<img class="img center" style="height: 150px; width: 130px; display: block; padding-top: 3px;" src="<?php
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
							
							<div class="container">
								<input type="hidden" name="nameId" value="<?php echo $row->account_id; ?>">
								<input type="hidden" name="rate" value="<?php echo $row->rate; ?>">
								<div class="ratings">
									<input type="radio" class="rating" style="display: none;" value="1"/>
									<input type="radio" class="rating" style="display: none;" value="2"/>
									<input type="radio" class="rating" style="display: none;" value="3"/>
									<input type="radio" class="rating" style="display: none;" value="4"/>
									<input type="radio" class="rating" style="display: none;" value="5"/>
								</div>
							<!--  <div class="stars">
									<a class="star" id="2" title="1"></a>
									<a class="star" id="3" title="2"></a>
									<a class="star" id="5" title="3"></a>
									<a class="star" id="4" title="4"></a>
								</div>   -->
								<span class="info"></span>
							</div>
							<br>
							<a class="btn btn-info btn-sm" type="submit" style="float:0; right:0px;" a href="<?php echo site_url('user/View_User_Profile/'.$row->account_id) ?>">Visit</a>
						</div>
					</div>
					</div> 
					
				<?php endforeach; ?>
			
			</div>
			<br>
			<script>
			
	
			$('.ratings').rating( function (vote,event){
				console.log(vote,event);
				//var id = $('input[name=nameId]').val();
	
				//alert(id); 
			
			});
					$('#Ptype').hide();
					
				$('#cp').on('click', function(){
					$('#post2').toggle();
					$('#pic').toggle();
				});
				
				
			</script>
		</div>
	</div>	
</div>