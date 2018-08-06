<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title></title>

    <!-- Bootstrap -->
    <link href="<?php echo base_url('assets/css/bootstrap-lux.css'); ?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/css/bootstrap-lux.min.css'); ?>" rel="stylesheet">

 <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap-lux_variables.css')?>" media="screen">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap-lux-bootswatch.css')?>">
  
    <link href="<?php echo base_url('assets/img/iAssist.ico'); ?>" rel="shortcut icon">
    <style type="text/css">
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
    </style>
  
  </head>
  <body>
      <div class="bs-component">
                     <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
                <a class="navbar-brand" href="<?php echo base_url('/home');?>">iAssist</a>
                
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="true" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>

                <div class="navbar-collapse collapse show" id="navbarColor01" style="">
                  <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                      <a class="nav-link" href="<?php echo base_url('/home');?>">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <!-- Paypal Integration part -->
                    <li class="nav-item">
                      <a class="nav-link" href="<?php echo base_url('/')?>">Paypal</a>
                    </li>  
                    <!----> 
                    <li class="nav-item">
                      <a class="nav-link" href="#features" >Features</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="<?php echo base_url('/about');?>">About</a>
                    </li>
                  </ul>
                </div>
                <div>
                   <ul class="navbar-nav mr-auto">
                    <li class="nav-item nav-">
                      <a class="nav-link" href="<?php
                        if($this->session->userdata('log_status') == 1)
                        {
                           echo base_url('users/profile');
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
              </nav>
      </div>    




   
