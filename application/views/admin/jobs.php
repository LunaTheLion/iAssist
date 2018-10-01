<title>Jobs</title>

       
         <!-- /. ROW  -->

        <!-- /. ROW  -->
        <div class="row">
            <div class="col-md-12">
                <h1 class="page-header">
                    Jobs <small></small>
                </h1>
                <div class="alert alert-success" style="display: none;">
                </div>
            </div>


        </div>
      <div class="panel panel-primary no-border">
       <div class="panel-heading">
            New Job Posting
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
                              <i class="fa fa-lg fa-user" aria-hidden="true"></i> Username
                        </th>
                       <th colspan="1">
                               <i class="fa fa-lg fa-tasks" aria-hidden="true"></i> Job Title
                        </th>
                        <th></th>
                      
                        <th>
                              <i class="fa fa-lg fa-calendar" aria-hidden="true"></i> Category
                       </th>
                        <th>
                              <i class="fa fa-lg fa-calendar" aria-hidden="true"></i> Action
                        </th>
                       </tr>
                </thead>
               <tbody id="jobTable">                                    
                </tbody>
                </table>
                </div>
                </div>
                </div> 

        <!-- View Modal -->
        <div id="jobModal" class="modal fade" tabindex="-1" role="dialog">
          <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title"></h4>
              </div>
              <div class="modal-body">
                    <form id="jobForm" action="" method="post" class="form-horizontal">
                        <input type="hidden" name="txtId" value="0">
                       
                        <div class="form-group">
                            <label for="name" class="label-control col-md-3">Job Title</label>
                            <div class="col-md-8">
                                <input readonly type="text" name="job_title" class="form-control">
                            </div>
                            <div class="col-md-4"></div>
                        </div>
                        <div class="form-group">
                            <label for="address" class="label-control col-md-3">Job Description</label>
                            <div class="col-md-9">
                                <textarea readonly class="form-control" name="job_description" ></textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="address" class="label-control col-md-3">Category</label>
                            <div class="col-md-9">
                                <input readonly class="form-control" name="job_category" >
                            </div>
                        </div>
                       
                    </form>
              </div>
              <div class="modal-footer">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
             <!--  <button type="button" id="btnAdd"  class="btn btn-primary">Submit</button> -->

              </div>
            </div><!-- /.modal-content -->
          </div><!-- /.modal-dialog -->
        </div><!-- /.modal -->

        <!-- Allow Modal -->
        <div id="Modal" class="modal fade" tabindex="-1" role="dialog">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title"></h4>
              </div>
              <div class="modal-body">
                    <form id="jobForm" action="" method="post" class="form-horizontal">
                        <input type="hidden" name="txtId" value="0">
                        <p id="msg"></p>
                    </form>
              </div>
              <div class="modal-footer">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              <button type="button" id="btnAllow"  class="btn btn-success">Allow</button>
              </div>
            </div><!-- /.modal-content -->
          </div><!-- /.modal-dialog -->
        </div><!-- /.modal -->

        <!-- Delete Modal -->
        <div id="DeleteModal" class="modal fade" tabindex="-1" role="dialog">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title"></h4>
              </div>
              <div class="modal-body">
                    <form id="jobForm" action="" method="post" class="form-horizontal">
                        <input type="hidden" name="txtId" value="0">
                        <p id="msg2"></p>
                    </form>
              </div>
              <div class="modal-footer">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              <button type="button" id="btnDelete" class="btn btn-danger ">Delete</button>
              </div>
            </div><!-- /.modal-content -->
          </div><!-- /.modal-dialog -->
        </div><!-- /.modal -->
    

    <!-- /. PAGE INNER  -->

    <script>
        $(function(){
            showAllNewJobs()
            function showAllNewJobs(){
                $.ajax({
                    type: 'ajax',
                    url: '<?php echo base_url()?>admin/showJobs',
                    async: false,
                    dataType: 'json',
                    success: function(data){
                        console.log(data);
                        var html = '';
                        var i;
                        for(i=0; i<data.length; i++)
                        {
                             html +='<tr>'+
                                    '<td>'+(i+1)+'</td>'+
                                    '<td>'+data[i].creator+'</td>'+
                                    '<td>'+data[i].post_username+'</td>'+
                                    '<td>'+data[i].title+'</td>'+
                                    '<td></td>'+
                                    '<td>'+data[i].category+'</td>'+
                                    '<td>'+
                                        '<a href="javascript:;" class="btn btn-info item-view" data="'+data[i].post_id+'">View</a>'+
                                        '&nbsp;&nbsp;<a href="javascript:;" class="btn btn-success item-allow " data="'+data[i].post_id+'">Allow</a>'+'&nbsp;&nbsp;<a href="javascript:;" class="btn btn-danger item-delete " data="'+data[i].post_id+'">Delete</a>'
                                    '</td>'+
                               '</tr>';
                        }$('#jobTable').html(html);

                    },
                    error: function(){
                        alert('Could not load Jobs');
                    }
                })
            }
            //View Job
            $('#jobTable').on('click',' .item-view', function(){
                var id = $(this).attr('data');
                $('#jobModal').modal('show');
                $('#jobModal').find('.modal-title').text('View Job');
                $('#jobForm').attr('action','<?php echo base_url()?>admin/UpdateJobs');
                $.ajax({
                    type:'ajax',
                    method: 'get',
                    url: '<?php echo base_url()?>admin/ViewJobs',
                    data:{id:id},
                    async: false,
                    dataType: 'json',
                    success: function(data){
                        $('input[name=job_title]').val(data.title);
                        $('input[name=job_category]').val(data.category);
                        $('textarea[name=job_description]').text(data.description);
                        $('input[name=txtId]').val(data.post_id);
                    },
                    error: function(){
                        alert('Could not view data');
                    }
                })
            });
            //Allow Job
            $('#jobTable').on('click','.item-allow', function(){
                var id = $(this).attr('data');
               
                $('#Modal').modal('show');
                $('#Modal').find('.modal-title').text('Allow Job to Post');
                $('#msg').html('Are you sure you want to allow this job post?');
                $('#btnAllow').click(function(){
                    $.ajax({
                        type:'ajax',
                        method: 'get',
                        async: false,
                        url: '<?php echo base_url()?>admin/AllowJobs/',
                        data: {id,id},
                        dataType: 'json',
                        success: function(response){
                            if(response.success){
                                $('#Modal').modal('hide');
                                $('.alert-success').html('1 Job allowed successfully').fadeIn().delay(4000).fadeOut('slow');
                                showAllNewJobs();
                            }else{
                                alert('Error');
                            }
                        },
                        error: function()
                        {
                            alert('Could not allow job');
                        }
                    });
                }) 
            });
            //Delete Job
            $('#jobTable').on('click','.item-delete', function(){
                var id = $(this).attr('data');
                $('#DeleteModal').modal('show');
                $('#DeleteModal').find('.modal-title').text('Delete Job Post');
                $('#msg2').html('Are you sure you want to delete this job post?');
                $('#btnDelete').click(function(){
                    $.ajax({
                        type:'ajax',
                        method: 'get',
                        async: false,
                        url: '<?php echo base_url()?>admin/DeleteJobPost/',
                        data: {id,id},
                        dataType: 'json',
                        success: function(response){
                            if(response.success){
                                $('#DeleteModal').modal('hide');
                                $('.alert-success').html('1 Job Deleted successfully').fadeIn().delay(4000).fadeOut('slow');
                                showAllNewJobs();
                            }else{
                                alert('Error');
                            }
                        },
                        error: function()
                        {
                            alert('Could not delete record');
                        }
                    });
                });
            });

        })
    </script>
</div>
<!-- /. PAGE WRAPPER  -->
