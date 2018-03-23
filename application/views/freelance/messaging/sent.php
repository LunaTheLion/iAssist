<title>Messages | Sent</title>
<H1>This is Sent</H1>


<div class="container">
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
	    <tr>
	    	
	      <td><?php $date = $row->msg_date; echo date("M 'y",strtotime($date))?></td>
	      <td><?php echo $row->msg_receiver; ?></td>
	      <td><?php echo $row->msg_subject; ?></td>
	      <td><?php echo $row->msg_body; ?></td>
	    
	    </tr>
	    <?php endforeach ?>
	    <tr>
	      <td>2</td>
	      <td>Column content</td>
	      <td>Column content</td>
	      <td>Column content</td>
	    
	    </tr>

	    
	   
	  </tbody>
	</table> 

</div>
