<div class="container mt-5">
	<hr>
	

	<?php echo form_open_multipart('users/do_upload');?>

	<input type="file" name="userfile" size="20" />

	<?php echo $error;?>
	<br /><br />

	<input type="submit" class="btn btn-primary-outline" value="upload" /></form>

	<hr>

	
</div>