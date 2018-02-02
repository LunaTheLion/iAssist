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


    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="<?php echo base_url('assets/js/jquery.min.js'); ?>"></script>
    <script src="<?php echo base_url('assets/js/popper.min.js'); ?>"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<?php echo base_url('assets/js/bootstrap.min.js'); ?>"></script>
    <script src="<?php echo base_url('http://code.jquery.com/jquery-latest.min.js" type="text/javascript'); ?>"></script>
    <script src="<?php echo base_url('https://code.jquery.com/jquery-1.10.2.js'); ?>"></script>     

    <script src="<?php echo base_url('assets/tether/tether.min.js'); ?>"></script>
    <script src="<?php echo base_url('assets/smooth-scroll/smooth-scroll.js'); ?>"></script>
    <script src="<?php echo base_url('assets/dropdown/js/script.min.js'); ?>"></script>
    <script src="<?php echo base_url('assets/touch-swipe/jquery.touch-swipe.min.js'); ?>"></script>
    <script src="<?php echo base_url('assets/jarallax/jarallax.min.js'); ?>"></script>
    <script src="<?php echo base_url('assets/theme/js/script.js'); ?>"></script>

    <script type="text/javascript"> //for disabled
        $("#copy").click(function() { 
          $("#proceed").attr("disabled", !this.checked);
        });
    </script>
    <script type="text/javascript"> //for hidden elements
        $(document).ready(function(){
            $("select[name=College]").change(function(){
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


        



    </body>
</html>