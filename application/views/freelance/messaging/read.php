<div class="col-md-9" style="padding:0px;">
<title>Messages | Read</title>
<H1>Read Messages</H1>
	<?php foreach ($msg as $row):?>
	<div class="card">
		<div class="card-body">

			<input class="form-control" type="text" name="receiver" value="To: <?php echo $row->msg_receiver;?>" readonly><br>
			<input type="text" name="subject" class="form-control" value="Subject: <?php echo $row->msg_subject;?>" readonly><br>
			<textarea readonly class="form-control" rows="4" cols="5"><?php echo $row->msg_body;?></textarea>
		</div>
	</div>

<?php endforeach ?>

	
</div>
</div><!-- row -->
</div><!-- container -->