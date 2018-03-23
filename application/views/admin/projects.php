
<div id="page-wrapper" >
    <div id="page-inner">

    		
    	                <div class="panel panel-primary no-border">
    	                    <div class="panel-heading">
    	                        New Projects
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
    	                                            <i class="fa fa-lg fa-envelope" aria-hidden="true"></i> Username
    	                                        </th>
    	                                        <th>
    	                                            <i class="fa fa-lg fa-user" aria-hidden="true"></i> Project Title
    	                                        </th>
    	                                        <th>
    	                                            <i class="fa fa-lg fa-calendar" aria-hidden="true"></i> User Type
    	                                        </th>
    	                                        <th>
    	                                            <i class="fa fa-lg fa-calendar" aria-hidden="true"></i> DFGDFGD
    	                                        </th>
    	                                        <th>
    	                                            <i class="fa fa-lg fa-calendar" aria-hidden="true"></i> DFGDFGD
    	                                        </th>
    	                                    </tr>
    	                                </thead>
    	                                <tbody>                                    
    	                                    <?php foreach($data as $row): ?>                                                               
    	                                   <tr>	
    	                                   			<td><?php echo $row->id; ?></td>
    	                                            <td><?php echo $row->project_username; ?></td>
    	                                            <td><?php echo $row->project_title; ?></td>
    	                                            <td><?php echo $row->project_publisher_type; ?></td>
    	                                            <td><?php echo $row->project_category; ?></td>
    	                                            <td><a class="btn btn-success" href="<?php base_url('admin/')?>">Allow</a>&nbsp;<a class="btn btn-primary" href="">View</a> <a href="" class="btn btn-danger">Delete</a></td>
                                                   
    	                                        </tr>
    	                                    <?php endforeach; ?>
    	                                </tbody>
    	                            </table>
    	                        </div>
    	                    </div>
    	                </div>
    	           
    	</div>
    </div>