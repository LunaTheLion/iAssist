

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
  <script type="text/javascript">
    function myFunction() {
    var x = document.getElementById("myInput");
    var y = document.getElementById("myInputt");
    if (x.type === "password" && y.type ==="password" ) {
        x.type = "text";
        y.type = "text";
    } else {
        x.type = "password";
        y.type = "password";
    }
}
  </script>
    <script src="<?php echo base_url('assets/js/jquery.min.js') ?>"></script>
    <script type="text/javascript" src="<?php echo base_url('assets/js/popper.min.js') ?>"></script>
    <script type="text/javascript" src="<?php echo base_url('assets/js/jquery.min.js')?>"></script> 
     <script type="text/javascript" src="<?php echo base_url('assets/js/bootstrap-tokenfield.js')?>"></script> 
    </body>
</html>