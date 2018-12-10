 <!-- Start  contact -->
          <div class="col-md-6 col-sm-6 col-xs-12">
            <div class="form contact-form">
              <div id="sendmessage">Your message has been sent. Thank you!</div>
              <div id="errormessage"></div>
              <form action="<?php echo base_url('pages/send_email') ?>" method="post" role="form" class="contactForm">
                <div class="form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                  <div class="validation"></div>
                </div>
                <div class="form-group">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                  <div class="validation"></div>
                </div>
                <div class="form-group">
                  <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                  <div class="validation"></div>
                </div>
                <div class="form-group">
                  <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
                  <div class="validation"></div>
                </div>
                <div class="text-center"><button type="submit">Send Message</button></div>
              </form>
            </div>
          </div>
          <!-- End Left contact -->
        </div>
      </div>
    </div>
  </div>
  <!-- End Contact Area -->

  <!-- Start Footer bottom Area -->
  <footer>
    <div class="footer-area">
      <div class="container">
        <div class="row">
          <div class="col-md-4 col-sm-4 col-xs-12">
            <div class="footer-content">
              <div class="footer-head">
                <div class="footer-logo">
                  <h2></h2>
                  <img src="<?php echo base_url('assets/img/Megaworld.png'); ?>">
                </div>

                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis.</p>
                <div class="footer-icons">
                  <ul>
                    <li>
                      <a href="#"><i class="fa fa-facebook"></i></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-twitter"></i></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-google"></i></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-pinterest"></i></a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <!-- end single footer -->
          <div class="col-md-4 col-sm-4 col-xs-12">
            <div class="footer-content">
              <div class="footer-head">
                <h4>Properties</h4>
                <h5 style="margin-bottom: 0px;">LUZON</h5>
                &nbsp;&nbsp;<a href="">Savoy Hotel Newport City</a><br>
                &nbsp;&nbsp;<a href="">Belmont Hotel Newport City</a><br>
                &nbsp;&nbsp;<a href="">Kingsford Hotel Entertainment City</a><br>
                &nbsp;&nbsp;<a href="">Grandwest Site Entertainment City</a><br>

          
                <div class="footer-contacts">
                  <p><span>Call:</span>  +639 178 403 037</p>
                  <p><span>Email:</span> megaworldproperties168@gmail.com</p>
                  
                </div>
              </div>
            </div>
          </div>
          <!-- end single footer -->
          <div class="col-md-4 col-sm-4 col-xs-12">
            <div class="footer-content">
              <div class="footer-head">
                <h4>Instagram</h4>
                <div class="flicker-img">
                  <a href="#"><img src="img/portfolio/1.jpg" alt=""></a>
                  <a href="#"><img src="img/portfolio/2.jpg" alt=""></a>
                  <a href="#"><img src="img/portfolio/3.jpg" alt=""></a>
                  <a href="#"><img src="img/portfolio/4.jpg" alt=""></a>
                  <a href="#"><img src="img/portfolio/5.jpg" alt=""></a>
                  <a href="#"><img src="img/portfolio/6.jpg" alt=""></a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="footer-area-bottom">
      <div class="container">
        <div class="row">
          <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="copyright text-center">
              <p>
                &copy; Copyright <strong>eBusiness</strong>. All Rights Reserved
              </p>
            </div>
            <div class="credits">
              <!--
                All the links in the footer should remain intact.
                You can delete the links only if you purchased the pro version.
                Licensing information: https://bootstrapmade.com/license/
                Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=eBusiness
              -->
              Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </footer>

  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

  <!-- JavaScript Libraries -->
  <script src="<?php echo base_url('assets/lib/jquery/jquery.min.js') ?>"></script>
  <script src="<?php echo base_url('assets/lib/bootstrap/js/bootstrap.min.js') ?>"></script>
  <script src="<?php echo base_url('assets/lib/owlcarousel/owl.carousel.min.js') ?>"></script>
  <script src="<?php echo base_url('assets/lib/venobox/venobox.min.js') ?>"></script>
  <script src="<?php echo base_url('assets/lib/knob/jquery.knob.js') ?>"></script>
  <script src="<?php echo base_url('assets/lib/wow/wow.min.js') ?>"></script>
  <script src="<?php echo base_url('assets/lib/parallax/parallax.js') ?>"></script>
  <script src="<?php echo base_url('assets/lib/easing/easing.min.js') ?>"></script>
  <script src="<?php echo base_url('assets/lib/nivo-slider/js/jquery.nivo.slider.js') ?>" type="text/javascript"></script>
  <script src="<?php echo base_url('assets/lib/appear/jquery.appear.js') ?>"></script>
  <script src="<?php echo base_url('assets/lib/isotope/isotope.pkgd.min.js') ?>"></script>

  <!-- Contact Form JavaScript File -->
  <script src="<?php echo base_url('assets/contactform/contactform.js') ?>"></script>

  <script src="<?php echo base_url('assets/js/main.js') ?>"></script>
</body>

</html>
