
		<div class="col-lg-6 col-sm-8">
			<div class="card">
				
				<div class="card-body">
				
				<div class="card" >

					<?php 

					if(isset($error)) 	
					{
						echo $error;
					}

						?>
					<?php echo form_open_multipart('user/do_upload');?>
					  <input class="form-control" type="file" name="userfile" size="20"/>
					  <br>
					  <br>
					  <input type="submit" value="upload" class="btn btn-info center">
					  <br>
					  <br>

				</div>
			
				</div>
				
			</div>
			<br>
			
			

		


	</div>
	</div>
	


	
</div>




