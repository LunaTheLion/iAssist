
		<div class="col-lg-6 col-sm-8">
			<div class="card">
				
				<div class="card-body">
				
				<div class="card" >

					<h3>Your file was successfully uploaded!</h3>

					<ul>
					<?php foreach ($upload_data as $item => $value):?>
					<li><?php echo $item;?>: <?php echo $value;?></li>
					<?php endforeach; ?>
					</ul>

					<p><?php echo anchor('upload', 'Upload Another File!'); ?></p>
				</div>
			
				</div>
				
			</div>
			<br>
			
			

		


	</div>
	</div>
	


	
</div>




