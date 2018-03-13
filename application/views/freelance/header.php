<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    

    <!-- Bootstrap -->
    <link href="<?php echo base_url('assets/css/bootstrap-lux.css'); ?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/img/iAssist.ico'); ?>" rel="shortcut icon">
    <!-- <script type="text/javascript" async="" src="<?php echo base_url('assets/js/bootswatch.lux.js')?>"></script> -->
      
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
   <!--  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" /> -->
     <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
     <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.css">
     <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-tokenfield/0.12.0/css/bootstrap-tokenfield.min.css">
     <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-tokenfield/0.12.0/bootstrap-tokenfield.js"></script>



    <style type="text/css">
      



      .hide{
        display: none;
      }
      .img-circle {
        border-radius: 50%;
      }

   
      .iam{
        background-color: #A9A9A9;
        position: absolute; 
        z-index:1001;
        top: 16%; 
           left: 45%; 
           width: 52%; 
           height: 80%; 
           opacity:.5; 

      }


      div.textarea-container {
          border: solid 1px #808080;
          overflow: auto;
          width: 480px;
          padding: 2px;
          font-family: Arial;
          font-size: 12px;
      }
       
      div.textarea-container textarea {
          font-family: Arial;
          font-size: 12px;
          overflow: auto;
          border: none;
          outline: none;
          width: 480px;
          height: 120px;
          margin: 0px;
          padding: 0px;
      }


      .tagsinput{
         border: 1px solid #333;
         display: inline-block;

      }
      .tagsinput .tag{
        font-family: Arial;
        color: black;
        font-size: 100%;
        padding: 0.5em 0.75em;
        margin: 0.25em 0.1em;
        display: inline-block;
        background-color: #ddd;
        transition: all 0.1s linear;
        cursor: pointer;
      }
      .taginsput .tag:hover{
        background-color: #708090 ;
        color: black;
      }
      .tagsinput .tag .close::after {
         content: 'x';
        font-weight: bold;
        display: inline-block;
        transform: scale(0.8);
        margin-left: 0.75em;
      }

      .tagsinput .tag .close:hover:after{
        color:red;
      }

      .tagsinput .main-input{
        border: 0;
        outline: 0;
        padding: 0.25em 0.1em;

      }

      .switch {
        position: relative;
        display: inline-block;
        width: 60px;
        height: 34px;
      }

      .switch input {display:none;}
      .slider {
        position: absolute;
        cursor: pointer;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background-color: #ccc;
        -webkit-transition: .4s;
        transition: .4s;
      }

      .slider:before {
        position: absolute;
        content: "";
        height: 26px;
        width: 26px;
        left: 4px;
        bottom: 4px;
        background-color: white;
        -webkit-transition: .4s;
        transition: .4s;
      }

      input:checked + .slider {
        background-color: #000000;
      }

      input:focus + .slider {
        box-shadow: 0 0 1px #2196F3;
      }

      input:checked + .slider:before {
        -webkit-transform: translateX(26px);
        -ms-transform: translateX(26px);
        transform: translateX(26px);
      }

      /* Rounded sliders */
      .slider.round {
        border-radius: 34px;
      }

      .slider.round:before {
        border-radius: 50%;
      }
      
    </style> 

  </head>
  <body>

      <div class="bs-component">
       
             <nav class="navbar navbar-expand-lg navbar-dark bg-primary">

               <a class="navbar-brand" href="<?php echo base_url('users/home/'.$this->session->userdata('user_name'))?>">iAssist</a>
               <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation" style="">
                 <span class="navbar-toggler-icon"></span>
               </button>
               <div class="collapse navbar-collapse" id="navbarColor01">
                 <ul class="navbar-nav mr-auto">
                   <li class="nav-item active">
                     <a class="nav-link" href="<?php echo base_url('users/thread');?>">Thread <span class="sr-only">(current)</span></a>
                   </li>               
                 </ul>
                  <div>
                   <ul class="navbar-nav mr-auto">
                    <li>
                      <a class="nav-link" href="<?php echo base_url('pm/messages')?>"><img src="<?php echo base_url('assets/img/message.png')?>" style="height:20px; width: 30px;"  rel="shortcut icon"></a>
                    </li>
                    <li class="nav-item nav-">
                      <a class="nav-link" href="<?php echo base_url('users/profile/'.$this->session->userdata('user_name'));?>"><?php 
                      echo $this->session->userdata('user_name');
                      ?>
                      </a>
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




   
