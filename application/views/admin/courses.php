<?php foreach( $clg as $row): ?>  
<title><?php 
echo $row->college_acronym; ?></title>
                                     
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
            
                <h1 class="page-header" id="coursecode">
                   <?php echo $row->college_name;?> <small></small>

                </h1>
                <div class="alert alert-success" style="display: none;">
                </div>
            </div>
        </div> 

        <div class="row">
           
                <div class="panel panel-info no-border">
                    <div class="panel-heading" style="padding-bottom: 2rem;">
                     <small></small>
                       <?php echo $row->college_acronym; ?> Courses
                       <button class="btn btn-primary btn-sm" id="add-course" style="float: right; right: 0; "> + Add Course</button>

                    </div>
                    <input type="hidden" name="code" id="code" value="<?php echo $row->college_acronym;?>">
                    <div class="panel-body">
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        
                                        <th >Course Code</th>
                                        <th colspan="3">Course</th>
                                        <th></th>
                                        <th>Date Created</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody id="showtable">
                                    
                                </tbody>
                            </table>
                            
                        </div>  
                    </div>
                </div>
        <!-- TRIAL MODAL AJAX -->
        <div id="addCourseModal" class="modal fade" tabindex="-1" role="dialog">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title"></h4>
              </div>
              <div class="modal-body">
                    <form id="addCourseForm" action="" method="post" class="form-horizontal">
                        <input type="hidden" name="txtId" value="0">
                       <input type="text" name="txtCollege" value="<?php echo $row->college_acronym?>">
                        <div class="form-group">
                            <label for="code" class="label-control col-md-3">Course Code</label>
                            <div class="col-md-4">
                                <input type="text" name="ccode" class="form-control">
                            </div>
                            <div class="col-md-5"></div>
                        </div>
                        <div class="form-group">
                            <label for="course" class="label-control col-md-3">Course Name</label>
                            <div class="col-md-9">
                                
                                <input class="form-control" type="text" name="course">
                            </div>
                        </div>
                    </form>
              </div>
              <div class="modal-footer">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              <button type="button" id="btnAddCourse"  class="btn btn-primary">Submit</button>

              </div>
            </div><!-- /.modal-content -->
          </div><!-- /.modal-dialog -->
        </div><!-- /.modal -->
<?php endforeach; ?>
        <!-- Another Modal -->
        <div id="deleteCourseModal" class="modal fade" tabindex="-1" role="dialog">
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
<script>
  $(function(){
    showcourses();
    //Add new courses
    $('#add-course').click(function(){
      $('#addCourseModal').modal('show');
      $('#addCourseModal').find('.modal-title').text('Add Course');
      $('#addCourseForm').attr('action', '<?php echo base_url()?>admin/AddCourse');
    });
    //Adding Courses
    $('#btnAddCourse').click(function(){
       var url = $('#addCourseForm').attr('action');
       var data = $('#addCourseForm').serialize();
       //validate the inputs
       var courseCode = $('input[name=ccode]');
       var courseName = $('input[name=course]');
       // var college = $('input[name=txtCollege]');

       result = '';
       if(courseCode.val() == '')
       {
        courseCode.parent().parent().addClass('has-error');
       }
       else
       {
        courseCode.parent().parent().removeClass('has-error');
        result +='1';
       }
       if(courseName.val() == '')
       {
        courseName.parent().parent().addClass('has-error');
       }
       else
       {
        courseName.parent().parent().removeClass('has-error');
        result +='2';
       }
       if(result == '12')
       {
          $.ajax({
            type: 'ajax',
            method: 'post',
            url: url,
            data: data,
            async: false,
            dataType:'json',
            success:function(data){
              console.log(data);
            },
            error: function(data){
              console.log(data);
              alert('Nope');
            }
          });
        }

    });


    function showcourses(){
      var code = $('input[name=code]');
      $.ajax({
        type:'ajax',
        method : 'get',
        url :  '<?php echo base_url() ?>admin/CourseTable',
        data: (code,code),
        async : true,
        dataType : 'json',
        success : function(data){
           var html = '';
                    var i;      
                    for(i=0; i<data.length; i++){
                        html +='<tr>'+
                                    '<td>'+data[i].course_code+'</td>'+
                                    '<td colspan="2">'+data[i].course+'</td>'+
                                    '<td></td>'+
                                    '<td></td>'+
                                    
                                    '<td>'+data[i].date_created+'</td>'+
                                    '<td>'+
                                        '<a href="javascript:;" class="btn btn-info item-edit" data="'+data[i].id+'">Edit</a>'+
                                        '<a href="javascript:;" class="btn btn-danger item-delete " data="'+data[i].id+'">Delete</a>'+
                                    '</td>'+
                               '</tr>';
                    }
                    $('#showtable').html(html);
        },
        error : function(){
          alert('Sorry');
        }
      });
    }

    //Edit course
    $('#showtable').on('click', '.item-edit', function(){
        var id = $(this).attr('data');
        $('#addCourseModal').modal('show');
        $('#addCourseModal').find('.modal-title').text('Edit Course');
        $('#addCourseForm').attr('action', '<?php echo base_url()?>admin/UpdateCourse');
        $.ajax({
          type:'ajax',
          method: 'get',
          url: '<?php echo base_url()?>admin/EditCourse',
          data:{id,id}, 
          async: false,
          dataType: 'json',
          success: function(data){
            $('input[name=CourseCode]').val(data.course_code);
            $('input[name=CourseName]').val(data.course);
            $('input[name=txtId]').val(data);
          },
          error: function()
          {
            alert('Could not edit data');
          }
        });
    });
      
  });
</script>
