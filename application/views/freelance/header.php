<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    

    <!-- Bootstrap -->
    <link href="<?php echo base_url('assets/css/bootstrap-lux.css'); ?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/css/bootstrap-lux.min.css'); ?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/css/bootstrap-lux-bootswatch.css'); ?>" rel="stylesheet"> 
     <link href="<?php echo base_url('assets/img/iAssist.ico'); ?>" rel="shortcut icon">

    <link rel="stylesheet" href="./Bootswatch_ Lux_files/custom.min.css">
    <script type="text/javascript" async="" src="./Bootswatch_ Lux_files/ga.js.download"></script>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="./Bootswatch_ Lux_files/bootstrap.css" media="screen">
    <link rel="stylesheet" href="./Bootswatch_ Lux_files/custom.min.css">

    <link href="<?php echo base_url('assets/img/iAssist.ico'); ?>" rel="shortcut icon">
    
    
    <style type="text/css">
      .hide{
        display: none;
      }
      .img-circle {
        border-radius: 50%;
      }
    </style>
    

  </head>
  <body>

      <div class="bs-component">
             <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
               <a class="navbar-brand" href="<?php echo base_url('/home')?>">iAssist</a>
               <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation" style="">
                 <span class="navbar-toggler-icon"></span>
               </button>

               <div class="collapse navbar-collapse" id="navbarColor01">
                 <ul class="navbar-nav mr-auto">
                   <li class="nav-item active">
                     <a class="nav-link" href="<?php echo base_url('users/thread');?>">Thread <span class="sr-only">(current)</span></a>
                   </li>
                   
                   <li class="nav-item">
                     <a class="nav-link" href="#">Notification</a>
                   </li>
                   
                   
                 </ul>
                 
                  <div>
                   <ul class="navbar-nav mr-auto">
                    <li>
                      <a class="nav-link" href="#"><img src="<?php echo base_url('assets/img/message.png')?>" style="height:20px; width: 30px;"  rel="shortcut icon"></a>
                    </li>
                    <li class="nav-item nav-">
                      <a class="nav-link" href="<?php echo base_url('users/profile');?>"><?php echo $this->session->userdata('user_name')?></a>

                    </li>

                   

                  <li>
                    <a class="nav-link" href="<?php echo base_url('users/logout');?>">Logout</a>
                  </li>
                  
                   <li class="nav-item dropdown">
                       <a class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Settings</a>
                       <div class="dropdown-menu">
                         <a class="dropdown-item" href="<?php echo base_url('users/logout')?>">Logout</a>
                         <a class="dropdown-item" href="https://bootswatch.com/lux/#">Another action</a>
                         <a class="dropdown-item" href="https://bootswatch.com/lux/#">Something else here</a>
                         <div class="dropdown-divider"></div>
                         <a class="dropdown-item" href="https://bootswatch.com/lux/#">Separated link</a>
                       </div>
                     </li> 
                    
                  </ul>
                </div>
                
                 
               </div>
             </nav>
      </div>    




   
