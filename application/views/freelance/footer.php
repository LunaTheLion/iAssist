<p></p>
<div class="jumbotron"  style="background-color: black;">

    <div class="row">
        
        <div class="col-lg-4">
            <?php 
               echo "<pre class='text-muted'>";
               print_r($this->session->all_userdata());
               echo "</pre>";
            ?> 
        </div>
        <div class="col-lg-4">
            <h4 class="text-muted">iAssist @Copyrights 2017</h4>
        </div>
        <div class="col-lg-4">
            
        </div>
    </div>
</div>
    <script src="<?php echo base_url('assets/js/jquery.min.js') ?>"></script>
    <script type="text/javascript" src="<?php echo base_url('assets/js/popper.min.js') ?>"></script>
    <script type="text/javascript" src="<?php echo base_url('assets/js/bootstrap.min.js') ?>"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
 <!--    <script type="text/javascript" src="<?php echo base_url('assets/js/bootswatch.lux.js') ?>"></script> 
   <script type="text/javascript" src="<?php echo base_url('assets/js/custom.js') ?>"></script>  -->

   <!--  <script src="<?php echo base_url('assets/tether/tether.min.js'); ?>"></script>
    <script src="<?php echo base_url('assets/smooth-scroll/smooth-scroll.js'); ?>"></script>
    <script src="<?php echo base_url('assets/dropdown/js/script.min.js'); ?>"></script>
    <script src="<?php echo base_url('assets/touch-swipe/jquery.touch-swipe.min.js'); ?>"></script>
    <script src="<?php echo base_url('assets/jarallax/jarallax.min.js'); ?>"></script> 
 -->
    <!-- <script src="<?php echo base_url('assets/js/tags-input.js')?>"></script> -->

    <!-- <script src="<?php echo base_url('assets/js/bootstrap-tokenfield.js')?>"></script> -->




    <script type="text/javascript"> //for disabled
        // $(document).ready(function(){
        //     $('#search').tokenfield({
        //         autocomplete:{
        //             source: ['PHP','Codeigniter','HTML','JQuery','Javascript','CSS','Laravel','CakePHP','Symfony','Yii 2','Phalcon','Zend','Slim','FuelPHP','PHPixie','Mysql'],
        //             delay:100
        //         },
        //         showAutocompleteOnFocus: true
        //     });

        // });


        
    

        $(document).on('ready', function() {
          $.fn.extend({
            setLabel: function() {
              var label = $('[for="'+$(this).attr('id')+'"]').eq(0);
              $(label).text(($(this).is(':checked') ? '' : 'not ') + 'checked');            }
          });
          $('#front_set').on('change', function(){
            $(this).setLabel();
          })
          $('#front_set').setLabel();
        });


        // if($("#package").is(':checked'))
        //  {   document.getElementById('iam').style.display='none'; } // checked
        // else
        //   {  document.getElementById('iam').style.display='block';}
        
        $("#package").on("change", function(event) {
             if($(this).is(":checked")) {

                document.getElementById('iam').style.display='none';
                
             }
            else
            {
                 document.getElementById('iam').style.display='block';
 
             }
        });
  


        $("#copy").click(function() { 
          $("#proceed").attr("disabled", !this.checked);
        });

        $(document).ready(function(){
            $("select[name=College]").change(function(){
                $(this).find("option:selected").each(function(){
                    var optionValue = $(this).attr("value");
                    if(optionValue){
                        $(".hide").not("." + optionValue).hide();                        
                        $("." + optionValue).show();
                    }
                     else{
                        $(".hide").hide();
                    }
                });
            }).change();
        });


        // $(document).on('submit','#user_form', function(event)
        // {
        //     event.preventDefault();
        //     var pass = $('#password').val();
        //     var user = $('#username').val();

        //     if(pass != '')
        //     {
        //         $.ajax({
                    
        //             type: "POST",
        //             url: "<?php echo base_url().'users/update_project'?>",
        //             data: new FormData(this),

        //             contentType: false,
        //             processData: false,
        //             success:function(data)
        //             {
        //                 alert(data);

        //                 if(data == "Account Exist!")
        //                 {

        //                     window.location.href="http://localhost/iAssist/users/validate_update";
        //                     $('#user_form')[0].reset();
        //                     $('#updateProject').modal('hide'); 
        //                 }
        //                 else
        //                 {
        //                    $('#user_form')[0].reset();     
        //                 }
        //             }
        //         });
                
        //     }
        //     else
        //     {
        //         alert("Password is required");
        //     }
        // });


        $(document).on('submit','#remove_form', function(event)
        {
            event.preventDefault();
            var pass = $('#pass').val();
            var user = $('#user').val();
            var id = $('id').val();

            if(pass != '')
            {
                $.ajax({
                    
                    type: "POST",
                    url: "<?php echo base_url().'users/confirm_acc_rem'?>",
                    data: new FormData(this),

                    contentType: false,
                    processData: false,
                    success:function(data)
                    {
                        alert(data);

                        if(data == "Account Exist!")
                        {
                            window.location.href="http://localhost/iAssist/users/remove_project";
                            $('#remove_form')[0].reset();
                           $('#removeProject').modal('hide'); 
                        }
                        else
                        {
                           $('#remove_form')[0].reset();     
                        }
                    }
                });

            }
            else
            {
                alert("Password is required");
                $('#remove_form')[0].reset();
            }
        });

        $(document).on('submit','#about_form', function(event)
        {
            event.preventDefault();
            var about2 = $('#about').val();
            var email2 = $('#email').val();

            if(about != '')
            {
                $.ajax({
                    
                    type: "POST",
                    url: "<?php echo base_url().'users/about_me'?>",
                    data: new FormData(this),

                    contentType: false,
                    processData: false,
                    success:function(data)
                    {
                        alert(data);
                        if(data == 'Update Success')
                        {   
                           location.reload();
                           $('#about_form')[0].reset();
                           $('#aboutMe').modal('hide');
                        }
                            $('#about_form')[0].reset();
                           $('#aboutMe').modal('hide'); 
                       
                    }
                });
                
            }
            else
            {
                <?php echo $this->session->set_userdata('about_me', '');?>
                location.reload();
            }
            
        });

        $(document).ready(function(){
            $("select[name=category]").change(function(){
                $(this).find("option:selected").each(function(){
                    var optionValue = $(this).attr("value");
                    if(optionValue){
                        $(".hide").not("." + optionValue).hide();                        
                        $("." + optionValue).show();
                    } else{
                        $(".hide").hide();
                    }
                });
            }).change();
        });

    </script>

     <script type="text/javascript"> //for hidden elements
        $(document).ready(function(){
            $("select[name=Category]").change(function(){
                $(this).find("option:selected").each(function(){
                    var optionValue = $(this).attr("value");
                    if(optionValue){
                        $(".hide").not("." + optionValue).hide();                        
                        $("." + optionValue).show();
                    } else{
                        $(".hide").hide();
                    }
                });
            }).change();
        });
    </script>
    <!-- <script type="text/javascript">
        $(document).ready(function()
        {
            $('data-toggle="popover"').popover();        
        });
    </script>
 -->

        



    </body>
</html>