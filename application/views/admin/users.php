
<div id="page-wrapper" >
    <div id="page-inner">

    		
    	                <div class="panel panel-primary no-border">
    	                    <div class="panel-heading">
    	                       All Users
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
    	                                            <td>
                                                        <input type="button" class="btn btn-danger" data-toggle="modal" data-target="#Block"  value="Block">
                                                    </td>

    	                                        </tr>
    	                                    <?php endforeach; ?>
    	                                </tbody>
    	                            </table>
    	                        </div>
    	                    </div>
    	                </div>
    	             <div class="modal fade" id="Block" role="dialog">
                       <div class="modal-dialog" role="document">
                                <form method="POST" id="block_form">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h5 class="modal-title text-center">Block Account</h5>
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                              </button>
                            </div>
                         

                            <div class="modal-body">
                         
    
                              
                              <p class="text-primary text-center">
                                Are you sure you want to block this person?
                              </p>


                            </div>
                              

                            <div class="modal-footer">
                              <input type="submit" class="btn btn-primary" name="action" value="Proceed">
                              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            </div>
                          </div>

                           </form>
                       </div>

                     
                   </div>
    	</div>

    </div>