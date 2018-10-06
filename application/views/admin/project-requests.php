<title> Project Requests</title><div id="page-wrapper" >
    <div id="page-inner">
       <div class="panel panel-primary no-border">
    <div class="panel-heading">
    	                       Project Requests
    </div>
    <div class="panel-body">
    	<div class="table-responsive">
    	   <table class="table table-hover">
    	    <thead>
    	        <tr>
    	           <th>
    	            <i class="fa fa-lg fa-sort-amount-asc" aria-hidden="true"></i>
    	            </th>
    	            <th>
    	            <i class="fa fa-lg fa-user" aria-hidden="true"></i> Username
    	            </th>
    	            <th>
    	            <i class="fa fa-lg fa-envelope" aria-hidden="true"></i> Email
    	           </th>
    	            <th>
    	           <i class="fa fa-lg fa-calendar" aria-hidden="true"></i> Password
    	           </th>
    	           <th>
    	           <i class="fa fa-lg fa-calendar" aria-hidden="true"></i> Account Type
    	           </th>
    	            <th>
    	           <i class="fa fa-lg fa-calendar" aria-hidden="true"></i> Status
    	            </th>
    	           </tr>
    	    </thead>
    	       <tbody>                                    
    	                                    <?php foreach($all as $row): ?>                                                               
    	                                   <tr>	
    	                                   			<td><?php echo $row->account_id; ?></td>
    	                                            <td><?php echo $row->account_username; ?></td>
                                                    <td><?php echo $row->account_email; ?></td>
    	                                            <td><?php echo $row->account_password; ?></td>
    	                                            <td><?php echo $row->account_type; ?></td>
    	                                            <td><?php   
                                                            $active=$row->log_status;
                                                            if($active == 1)
                                                            {
                                                                echo "<p class='text-success'>Active</p>";
                                                            }
                                                            else
                                                            {
                                                                echo "<p class='text-danger'>Inactive</p>";
                                                            }


                                                    ?></td>
    	                                            <td><a href="" class="btn btn-danger">Block</a></td>

    	                                        </tr>
    	                                    <?php endforeach; ?>
    	                                </tbody>
    	                            </table>
    	                        </div>
    	                    </div>
    	                </div>
    	           
    	</div>
    </div>