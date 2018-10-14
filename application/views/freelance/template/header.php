<!DOCTYPE html>
<html lang="en">
  <head>
  <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- StyleSheet -->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/user/css/lux-bootstrap.css')?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/user/css/lux-bootstrap.min.css')?>">
    <link href="<?php echo base_url('assets/img/iAssist.ico'); ?>" rel="shortcut icon"> 

    <!-- JavaScript -->
  <script src="<?php echo base_url('assets/user/js/jquery-3.3.1.js') ?>"></script> 
  <script src="<?php echo base_url('assets/user/js/jquery-3.3.1.slim.js') ?>"></script> 
<!--   <script src="<?php echo base_url('assets/jquery-ui-1.12.1.custom/external/jquery/jquery.js') ?>"></script>
  <script src="<?php echo base_url('assets/jquery-ui-1.12.1.custom/jquery-ui.min.js') ?>"></script>
  <script src="<?php echo base_url('assets/jquery-ui-1.12.1.custom/jquery-ui.js') ?>"></script> -->

  <script  src="<?php echo base_url('assets/user/js/popper.min.js') ?>"></script>
  <script  src="<?php echo base_url('assets/user/js/bootstrap.min.js') ?>"></script>
  <script src="<?php echo base_url() ?>assets/user/js/bootstrap.js"></script>
    <!-- TokenField -->
<!--   <script  src="<?php base_url('assets/tokenfield/dist/bootstrap-tokenfield.js')?>"></script>
  <script  src="<?php base_url('assets/tokenfield/dist/bootstrap-tokenfield.min.js')?>"></script>
  <script  src="<?php base_url('assets/tokenfield/dist/css/bootstrap-tokenfield.css')?>"></script> -->
    

    </head>
   



    <style type="text/css">
    .error{
    color: red;
    }
    .img {
      border-radius: 50%;
      width: 35%;
    }
  .center {
    display: block;
    margin-left: auto;
    margin-right: auto;
    
    }
    .iam{
      background-color: #A9A9A9;
      position: absolute; 
      z-index:1001;
      top: 35%; 
         left: 44.4%; 
         width: 53.2%; 
         height: 60%; 
         opacity:.5; 
    }
    html{
      height:100%;
    }
    body{
      min-height:100%; 
      position:relative;
      height: 100%;
       margin: 0;
       padding: 0;
       
    }
    .borderless td, .borderless th {
    border: none;

     
} 
 </style> 
  </head>
  <body id="main">
<?php 
//header("Refresh:"); ?>
      <div class="bs-component">
       
 <nav class="navbar navbar-expand-lg navbar-dark bg-dark " >
            
    <div class="container">
                 <a class="navbar-brand" href="<?php echo base_url('/home/')?>">iAssist</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation" style="">
                   <span class="navbar-toggler-icon"></span>
            </button>
          <div class="collapse navbar-collapse" id="navbarColor02">
                   <ul class="navbar-nav mr-auto">
                 
                     <li class="nav-item active">
                       <a class="nav-link" href="<?php echo base_url('user/skillposting');?>">Skill
                        <span class="sr-only">(current)</span></a>
                     </li>
                     <li class="nav-item active">
                       <a class="nav-link" href="<?php echo base_url('user/request');?>">Request
                        <span class="sr-only">(current)</span></a>

                     </li>
                      <li class="nav-item active">
                       <a class="nav-link" href="<?php echo base_url('user/people');?>">Search People
                        <span class="sr-only">(current)</span></a>

                     </li>
                                  
                   </ul>
                    <div>
                     <ul class="navbar-nav mr-auto">
                    
                      <li>
                        <a id="oo" class="nav-link"  href="JavaScript:;">
                          <!-- <a id="oo" class="nav-link"  href="<?php echo base_url('messaging/inbox')?>"> -->
                          <span class="badge badge-danger" id="newMsg" style="font-size: 15px;"></span>
                          <img src="<?php echo base_url('assets/img/message.png')?>" style="height:20px; width: 30px;"  rel="shortcut icon" ></a>
                      </li>
                      <li class="nav-item nav-">
                        <a class="nav-link" href="<?php echo site_url('user/general/'.$this->session->userdata('email'))?>"><?php 
                        echo $this->session->userdata('username');
                        ?>
                        </a>
                      </li> 
                      
                    </ul>
                   
                  </div>

                 </div>
               </div>
             </nav>
      </div>    
<script>
  $(window).on('load',function(){
    //$('#button').on('click', function(){
      //alert('Hello');
      $('#oo').on('click', function(){
        $.ajax({
          type: 'ajax',
          url: '<?php echo base_url()?>user/notify',
          async: false,
          dataType: 'json',
          success: function(data){
            //alert(data);
            console.log(data);
            window.location.href = "<?php echo base_url('messaging/inbox') ?>";
          },
          error: function(){
            alert('Cant load your Messages');
          }
        });

      });



      $.ajax({
        type: 'ajax',
        url: '<?php echo base_url()?>user/countNewMessage',
        async: false,
        dataType: 'json',
        success: function(data){
          //alert(data);
          json = JSON.parse(data);
          if(json === false)
          {
            $('#newMsg').text('');
          }
          else
          {
            $('#newMsg').text(data);  
          }
          //console.log(data);
          
        },
        error: function(){
          alert('Cant load your Messages');
        }
      });

      $('#search').keyup(function(e){

      })



  });
 

  
</script>


