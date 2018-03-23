<title>Compose</title>
<H1>This is Compose Message</H1>
<form method="POST" action="<?php echo base_url('messaging/sent')?>">
	

<div class="container" >
	<div class="form-control">
	<input type="email" class="form-control" name="receiver" placeholder="email">
	<br>
	<input type="text" name="subject" class="form-control" placeholder="subject">
	<br>
	<textarea rows="7" cols="7" class="form-control" name="body" placeholder="Input Message Here"></textarea>
	<br>
	<input type="file" name="file">
	<br>
	<br>
	<input type="submit" name="Send" class="btn btn-info ">

	</div>
</div>
</form>
