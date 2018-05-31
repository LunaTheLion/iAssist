
<div class="col-md-9" style="padding:0px;">
	<title>Compose</title>
	<H1>This is Compose Message</H1>
	<form method="POST" action="<?php echo base_url('messaging/validate_message')?>">
		

	<div class="card" >
		<div class="card-body">
		<input type="email" class="form-control" name="receiver" placeholder="email" value="<?php echo form_error('receiver','<small class="text-danger"> ', '</small>'); ?>">
		<br>
		<input type="text" name="subject" class="form-control" placeholder="subject" value="<?php echo form_error('subject','<small class="text-danger"> ', '</small>'); ?>">
		<br>
		<textarea rows="7" cols="7" class="form-control" name="body" placeholder="Input Message Here"><?php echo form_error('body','<small class="text-danger"> ', '</small>'); ?></textarea>
		<br>
		<input type="file" name="file">
		<br>
		<br>
		<input type="submit" name="Send" class="btn btn-info ">

		</div>
	</div>
	</form>
</div>



</div><!-- row -->
</div><!-- container -->