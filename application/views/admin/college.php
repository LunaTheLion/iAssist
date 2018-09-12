<title>College</title>
<div id="page-wrapper" >
    <div id="page-inner">
       
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
                        <a href=""><strong>College</strong></a>
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
            <div class="col-md-12">
                <h1 class="page-header">
                    College <small></small>
                </h1>
                <div class="alert alert-success" style="display: none;">
                </div>
            </div>
        </div> 

        <div class="row">
           
                <div class="panel panel-info no-border">
                    <div class="panel-heading" style="padding-bottom: 2rem;">
                     <small></small>
                       College Courses
                       <button class="btn btn-primary btn-sm" id="add-college" style="float: right; right: 0; "> + Add College</button>

                    </div>
                    <div class="panel-body">
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>College Code</th>
                                        <th colspan="2">College Name</th>
                                        <th></th>
                                        <th></th>
                                        <th>Course</th>
                                        <th>Date Created</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody id="showdata">
                                    
                                </tbody>
                            </table>
                        </div>  
                    </div>
                </div>
        <!-- TRIAL MODAL AJAX -->
        <div id="addModal" class="modal fade" tabindex="-1" role="dialog">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title"></h4>
              </div>
              <div class="modal-body">
                    <form id="addForm" action="" method="post" class="form-horizontal">
                        <input type="hidden" name="txtId" value="0">
                       
                        <div class="form-group">
                            <label for="name" class="label-control col-md-3">College Code</label>
                            <div class="col-md-4">
                                <input type="text" name="CollegeCode" class="form-control">
                            </div>
                            <div class="col-md-5"></div>
                        </div>
                        <div class="form-group">
                            <label for="address" class="label-control col-md-3">College Name</label>
                            <div class="col-md-9">
                                
                                <input class="form-control" type="text" name="CollegeName">
                            </div>
                        </div>
                    </form>
              </div>
              <div class="modal-footer">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              <button type="button" id="btnAdd"  class="btn btn-primary">Submit</button>

              </div>
            </div><!-- /.modal-content -->
          </div><!-- /.modal-dialog -->
        </div><!-- /.modal -->

        <!-- Another Modal -->
        <div id="deleteModal" class="modal fade" tabindex="-1" role="dialog">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Confirm Delete</h4>
              </div>
              <div class="modal-body">
                   Do you want to delete this record?
              </div>
              <div class="modal-footer">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              <button type="button" id="btnDelete"  class="btn btn-danger">Delete</button>

              </div>
            </div><!-- /.modal-content -->
          </div><!-- /.modal-dialog -->
        </div><!-- /.modal -->

    </div>

    <!-- /. PAGE INNER  -->
</div>
<!-- /. PAGE WRAPPER  -->
<script >
   
    $(function(){
        
        showAllCollege();

        //Add new College
       $('#add-college').click(function(){
          $('#addModal').modal('show');
          $('#addModal').find('.modal-title').text('Add College');
          $('#addForm').attr('action','<?php base_url()?>AddCollege');
       });


       // Save button in Add College
       $('#btnAdd').click(function(){
            //alert('Button Save is clicked');
            var url =  $('#addForm').attr('action');
            var data = $('#addForm').serialize();
            //validate input
            var code = $('input[name=CollegeCode]');
            var name = $('input[name=CollegeName]');
            var result = '';
            if(code.val() == '')
            {
                code.parent().parent().addClass('has-error');
            }
            else
            {
                code.parent().parent().removeClass('has-error');
                result +='1';
            }
            if(name.val() == '')
            {   
                name.parent().parent().addClass('has-error');
            }
            else
            {
                name.parent().parent().removeClass('has-error');
                result +='2';
            }
            if(result == '12')
            {
                $.ajax({
                    type: 'ajax',
                    method: 'post',
                    url : url,
                    data: data,
                    async: false,
                    dataType: 'json',
                    success: function(response)
                    {
                        if(response.success)
                        {   
                           // alert('Save!');
                            $('#addModal').modal('hide');
                            $('#addForm')[0].reset();
                            if(response.type == 'added')
                            {
                                var type = 'added'
                            }
                            else if(response.type == 'updated')
                            {
                                var type = 'updated'
                            }
                            $('.alert-success').html('College is '+type+' successfully').fadeIn().delay(4000).fadeOut('slow');
                            showAllCollege();
                        }
                        else
                        {
                            alert('Error');
                        }
                    },
                    error: function()
                    {
                        alert('Could not add Data');

                    },
                });
            }
       });   

       $('#showdata').on('click','.item-edit', function(){
            var id =  $(this).attr('data');
            $('#addModal').modal('show');
            $('#addModal').find('.modal-title').text('Edit College');
            $('#addForm').attr('action', '<?php echo base_url() ?>admin/UpdateCollege');
            $.ajax({
               type: 'ajax',
               method: 'get',
               url: '<?php echo base_url() ?>admin/editCollege',
               data: {id:id},
               async: false,
               dataType: 'json',
               success: function(data){
                    $('input[name=CollegeCode]').val(data.college_acronym);
                    $('input[name=CollegeName]').val(data.college_name);
                    $('input[name=txtId]').val(data.id);
               },
               error: function()
               {
                   alert('Could not edit data');
               }
            });
       });
       //Delete College
       $('#showdata').on('click', '.item-delete', function(){
            var id = $(this).attr('data');
            $('#deleteModal').modal('show');
            $('#btnDelete').click(function(){
                $.ajax({
                    type:'ajax',
                    method: 'get',
                    async: false,
                    url: '<?php echo base_url()?>admin/DeleteCollege/',
                    data: {id,id},
                    dataType: 'json',
                    success: function(response){
                        if(response.success){
                            $('#deleteModal').modal('hide');
                            $('.alert-success').html('College Deleted successfully').fadeIn().delay(4000).fadeOut('slow');
                            showAllCollege();
                        }else{
                            alert('Error');
                        }
                    },
                    error: function()
                    {
                        alert('Could not delete'+id+' record');
                    }
                });
            });
       });
       
       

        //show All College 
        function showAllCollege(){
            $.ajax({
                type: 'ajax',
                url: '<?php echo base_url() ?>admin/showAllCollege',
                async: true,
                dataType: 'json',
                success: function(data){
                   // console.log(data);
                    var html = '';
                    var i;      
                    for(i=0; i<data.length; i++){
                        html +='<tr>'+
                                    '<td>'+data[i].college_acronym+'</td>'+
                                    '<td colspan="2">'+data[i].college_name+'</td>'+
                                    '<td></td>'+
                                    '<td></td>'+
                                    '<td>'+
                                    '<a href="<?php echo site_url()?>admin/AddCourse/'+data[i].college_acronym+'"  class="btn btn-default item-create" data="'+data[i].college_acronym+'" >Courses</a>'+
                                    '</td>'+
                                    '<td>'+data[i].date_created+'</td>'+
                                    '<td>'+
                                        '<a href="javascript:;" class="btn btn-info item-edit" data="'+data[i].id+'">Edit</a>'+
                                        '<a href="javascript:;" class="btn btn-danger item-delete " data="'+data[i].id+'">Delete</a>'+
                                    '</td>'+
                               '</tr>';
                    }
                    $('#showdata').html(html);
                },
                error: function(){
                    alert('Could not get aata from Database');
                }
            });
        }
        
        
    });
</script>
