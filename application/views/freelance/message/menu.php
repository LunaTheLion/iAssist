<?php $this->load->helper('url'); ?>
<div class="container-fluid">
	<div class="table-responsive">
		<table class="table">
				<tr>
			    <td style="padding:10px; font-size: 20px">
					<a href="<?php echo site_url()."/pm"?>">Inbox</a> &nbsp;&nbsp;&nbsp;
					<a href="<?php echo site_url()."/pm/messages/".MSG_UNREAD?>">Unread</a> &nbsp;&nbsp;&nbsp; 
					<a href="<?php echo site_url()."/pm/messages/".MSG_SENT?>">Sent</a> &nbsp;&nbsp;&nbsp;
					<a href="<?php echo site_url()."/pm/messages/".MSG_DELETED?>">Trashed</a> &nbsp;&nbsp;&nbsp;
					<a href="<?php echo site_url()."/pm/send"?>">Compose</a>  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				</td>
				</tr>
		</table>
	</div>
</div>