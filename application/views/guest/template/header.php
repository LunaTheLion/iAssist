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
    
    <script src="<?php echo base_url() ?>assets/user/js/jquery-3.3.1.js"></script>
    <script src="<?php echo base_url() ?>assets/user/js/jquery-3.3.1.slim.js"></script>
    <script type="text/javascript" src="<?php echo base_url('assets/user/js/popper.min.js') ?>"></script>
    <script type="text/javascript" src="<?php echo base_url('assets/user/js/bootstrap.min.js') ?>"></script>
    <script src="<?php echo base_url() ?>assets/user/js/bootstrap.js"></script> 

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
                 <a class="navbar-brand" href="<?php echo base_url('home/')?>">iAssist</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation" style="">
                   <span class="navbar-toggler-icon"></span>
            </button>
          <div class="collapse navbar-collapse" id="navbarColor02">
                   <ul class="navbar-nav mr-auto">
                     <li class="nav-item active">
                       <a class="nav-link" href="<?php echo base_url('search/thread');?>">Jobs
                        <span class="sr-only">(current)</span></a>
                     </li>
                     <li class="nav-item active">
                       <a class="nav-link" href="<?php echo base_url('search/Skill');?>">Skill
                        <span class="sr-only">(current)</span></a>
                     </li>
                     <li class="nav-item active">
                       <a class="nav-link" href="<?php echo base_url('search/request');?>">Request
                        <span class="sr-only">(current)</span></a>

                     </li>
                   
                     <!-- Paypal Integration part -->
                     <li class="nav-item">
                      <!--  <a class="nav-link" href="<?php echo base_url('/paypal')?>">Paypal</a> -->

                     </li>  
                      <form class="form-inline my-2 my-lg-0" action="#" method="post">
                         <input class="form-control mr-sm-2" type="text" id="search" placeholder="Search">
                         <button class="btn btn-secondary my-2 my-sm-0" type="submit">Search</button>
                       </form>             
                   </ul>
                    <div>
                     <ul class="navbar-nav mr-auto">
                    <li class="nav-item nav-">
                      <a class="nav-link" href="<?php
                        if(!empty($this->session->has_userdata('email')))
                        {
                           echo base_url('user/general/'.$this->session->userdata('email'));
                        }
                        else
                        {
                           echo base_url('/sign-in');
                        }
                      ?>">Sign In</a>
                    </li>
                    <li class="nav-item nav-">
                      <a class="nav-link" href="<?php echo base_url('/sign-up');?>">Sign Up</a>
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
          console.log(data);
          
        },
        error: function(){
          alert('Cant load your Messages');
        }
      });

      $('#search').keyup(function(e){

      })



  });
 

  
</script>

