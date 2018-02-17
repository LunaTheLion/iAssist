<div class="container mt-5">
	<hr>
	

	<?php echo form_open_multipart('users/validate_upload_profile');?>

	<input type="file" name="userfile" size="20" />

	<?php
		if(isset($error))
		{
			echo $error;
		}



	;?>
	<br /><br />
	<input type="submit" class="btn btn-primary-outline" value="upload" /></form>

	<hr>

	
</div>