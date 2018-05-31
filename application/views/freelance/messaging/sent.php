

<div class="col-md-9" style="padding:0px;">
	<title>Messages | Sent</title>
<H1>This is Sent</H1>
<div class="card">
	<div class="card-body">
	<?php
	  		if(!empty($sent))
	  		{ ?>
	<table class="table table-striped table-hover table-bordered">
	  <thead class="thead-dark">
	    <tr>
	      <th>Date</th>
	      <th>Recipient</th>
	      <th>Subject</th>
	      <th>Body</th>
	  
	    </tr>
	  </thead>
	  <tbody>
	  	
		  	<?php foreach($sent as $row):?>
	  		
	
	  
	    
	    <tr id="messaging">
	    <!-- 	<form action="<?php echo base_url('messaging/read'.$row->msg_subject)?>" method="POST"> -->
	    		
	  		<input type="text" value="<?php echo $row->id?>" hidden id="subject">
	      <td><?php $date = $row->msg_date; echo date("M 'y",strtotime($date))?></td>
	      <td><?php echo $row->msg_receiver; ?></td>
	      <td><?php echo $row->msg_subject; ?></td>
	      <td><?php echo $row->msg_body; ?></td>
	    
	    </tr>
	
	   
	    <?php endforeach; }
	    	else 
	    	{ ?>
	    		  <tr id="messaging">
	    		  <!-- 	<form action="<?php echo base_url('messaging/read'.$row->msg_subject)?>" method="POST"> -->
	    		  No Message.
	    		  </tr>
	    <?php	}

	    ?>
	  

	    
	   
	  </tbody>
	</table> 
	</div>



</div>


</div>
</div><!-- row -->
</div><!-- container -->