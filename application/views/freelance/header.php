<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <link rel="stylesheet" href="<?php echo base_url('assets/css/tags.css') ?>">
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>

     
      <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-tokenfield/0.12.0/bootstrap-tokenfield.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.css">



 <!--    Bootstrap -->
    
    <link href="<?php echo base_url('assets/css/bootstrap-lux.css'); ?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/img/iAssist.ico'); ?>" rel="shortcut icon">
    <script type="text/javascript" async="" src="<?php echo base_url('assets/js/bootswatch.lux.js')?>"></script>

    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-tokenfield/0.12.0/css/bootstrap-tokenfield.min.css">
      

<!--     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" /> 
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
      <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.css">
      <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-tokenfield/0.12.0/css/bootstrap-tokenfield.min.css">
      <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-tokenfield/0.12.0/bootstrap-tokenfield.js"></script> -->

   
   

    <style type="text/css">
    .error{
    color: red;
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
       
             <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
            
               <div class="container">
                 <a class="navbar-brand" href="<?php echo base_url('users/home/'.$this->session->userdata('user_name'))?>">iAssist</a>
                 <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation" style="">
                   <span class="navbar-toggler-icon"></span>
                 </button>
                 <div class="collapse navbar-collapse" id="navbarColor01">
                   <ul class="navbar-nav mr-auto">
                     <li class="nav-item active">
                       <a class="nav-link" href="<?php echo base_url('users/thread');?>">Thread <span class="sr-only">(current)</span></a>
                     </li>
                     <!-- Paypal Integration part -->
                     <li class="nav-item">
                       <a class="nav-link" href="<?php echo base_url('user/bayad')?>">Paypal</a>
                     </li>  
                                    
                   </ul>
                    <div>
                     <ul class="navbar-nav mr-auto">
                      <li>
                        <a class="nav-link" href="<?php echo base_url('messaging/message')?>"><img src="<?php echo base_url('assets/img/message.png')?>" style="height:20px; width: 30px;"  rel="shortcut icon"></a>
                      </li>
                      <li class="nav-item nav-">
                        <a class="nav-link" href="<?php echo site_url('users/general/'.$this->session->userdata('email'))?>"><?php 
                        echo $this->session->userdata('username');
                        ?>
                        </a>
                      </li>
                  <!--   <li>
                      <a class="nav-link" href="<?php echo base_url('users/logout');?>">Logout</a>
                    </li> -->
                    
                     <li class="nav-item dropdown">
                         <a class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Settings</a>
                         <div class="dropdown-menu">
                           <a class="dropdown-item" href="<?php echo base_url('user/logout')?>">Logout</a>
                           <a class="dropdown-item" href="https://bootswatch.com/lux/#">Another action</a>
                           <a class="dropdown-item" href="https://bootswatch.com/lux/#">Something else here</a>
                           <div class="dropdown-divider"></div>
                           <a class="dropdown-item" href="https://bootswatch.com/lux/#">Separated link</a>
                         </div>
                       </li> 
                    </ul>
                  </div>
                 </div>
               </div>
             </nav>
      </div>    



