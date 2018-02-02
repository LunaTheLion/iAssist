</div>
 
    
   
<p></p>
<div class="jumbotron"  style="background-color: black;">

    <div class="row">
        
        <div class="col-lg-4">
           <?php 
               echo "<pre >";
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
	<!-- /. WRAPPER  -->
	   <!-- JS Scripts-->
	   <!-- jQuery Js -->
	   <script src="<?php echo base_url('assets/admin/assets/js/jquery-1.10.2.js'); ?>"></script>
	     <!-- Bootstrap Js -->
	   <script src="<?php echo base_url('assets/admin/assets/js/bootstrap.min.js'); ?>"></script>
	   <!-- Metis Menu Js -->
	   <script src="<?php echo base_url('assets/admin/assets/js/jquery.metisMenu.js'); ?>"></script>
	   <!-- Custom Js -->
	   <script src="<?php echo base_url('assets/admin/assets/js/custom-scripts.js'); ?>"></script>

    <script src="<?php echo base_url('assets/js/jquery.min.js') ?>"></script>
    <script type="text/javascript" src="<?php echo base_url('assets/js/popper.min.js') ?>"></script>
    <script type="text/javascript" src="<?php echo base_url('assets/js/bootstrap.min.js') ?>"></script>
    </body>
</html>