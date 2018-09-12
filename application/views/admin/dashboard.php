<div id="page-wrapper" >
    <div id="page-inner">
        <div class="row">
            <div class="col-md-12">
                <h1 class="page-header">
                    Dashboard <small></small>
                </h1>
            </div>
        </div> 
         <!-- /. ROW  -->

         <div class="row">
            <div class="col-md-3">
                <div class="panel panel-primary text-center no-border bg-color-blue">
                    <div class="panel-body">
                        <a href="<?php echo base_url('admin/users')?>"><i class="fa fa-5x fa-users" aria-hidden="true"></i></a>
                        <h3>
                           <!--  <?php echo $total_num_accounts; ?> -->
                        </h3>
                    </div>
                    <div class="panel-footer">
                        <a href="<?php echo base_url('admin/users')?>"><strong>Registered Users</strong></a>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="panel panel-primary text-center no-border bg-color-blue">
                    <div class="panel-body">
                       <a href="#"> <i class="fa fa-5x fa-briefcase" aria-hidden="true"></i></a>
                        <h3>
                         <!--    <?php echo $total_num_applicanats; ?> -->
                        </h3>
                    </div>
                    <div class="panel-footer">
                       <a href="#"><strong>Project Requests</strong></a>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="panel panel-primary text-center no-border bg-color-blue">
                    <div class="panel-body">
                        <a href="#"><i class="fa fa-5x fa-building-o" aria-hidden="true"></i></a>
                        <h3>
                          <!--   <?php echo $total_num_companies; ?> -->
                        </h3>
                    </div>
                    <div class="panel-footer">
                        <a href="<?php echo base_url('admin/college') ?>"><strong>College</strong></a>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="panel panel-primary text-center no-border bg-color-blue">
                    <div class="panel-body">
                        <a href=""><i class="fa fa-5x fa-tasks" aria-hidden="true"></i></a>
                        <h3>
                           <!--  <?php echo $total_num_jobs; ?> -->
                        </h3>
                    </div>
                    <div class="panel-footer">
                        <a href=""><strong>Jobs</strong></a>
                    </div>
                </div>
            </div>
        </div>
        <!-- /. ROW  -->

        <div class="row">
            <div class="col-md-5">
                <div class="panel panel-info no-border">
                    <div class="panel-heading">
                        Recent Activities
                    </div>
                    <div class="panel-body">
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Activity Type</th>
                                        <th>Date</th>
                                        <th>Subject</th>
                                    </tr>
                                </thead>
                                <tbody>
                                  <!--  <?php foreach ($dash_data as $row) {
                                        echo "<tr>";
                                        echo "<td>".$row->account_id."</td>";
                                        echo "<td>".$row->account_email."</td>";
                                        echo "<td>".$row->account_type."</td>";
                                        echo "<td>".$row->account_date_joined."</td>";
                                        echo "</tr>";
                                    } ?>  -->
                                </tbody>
                            </table>
                        </div>  
                    </div>
                </div>
            </div>

            <div class="col-md-7">
                <div class="panel panel-primary no-border">
                    <div class="panel-heading">
                        Newest Registered  Users
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
                                            <i class="fa fa-lg fa-envelope" aria-hidden="true"></i> Email
                                        </th>
                                        <th>
                                            <i class="fa fa-lg fa-user" aria-hidden="true"></i> User Type
                                        </th>
                                        <th>
                                            <i class="fa fa-lg fa-calendar" aria-hidden="true"></i> Date Joined
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>                                    
                                    <?php foreach($new_users as $row): ?>                                                               
                                        <tr>
                                            <td><?php echo $row->account_id; ?></td>
                                            <td><?php echo $row->account_email; ?></td>
                                            <td><?php echo $row->account_type; ?></td>
                                            <td><?php echo $row->account_date_joined; ?></td>
                                        </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div> 
        <!-- /. ROW  -->

        <!-- <div class="row">
            <div class="col-md-12">

            </div>
        </div>  -->
        <!-- /. ROW  -->
    </div>
    <!-- /. PAGE INNER  -->
</div>
<!-- /. PAGE WRAPPER  -->