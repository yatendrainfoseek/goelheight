<?php include 'include/header-inner.php';?>

<?php if ($_GET['sent'] == 1) {
    $_SESSION['mail_contact'] = 1;
        if(isset($_SESSION['notified_contact'] )){
      echo "";
    }else{
        $_SESSION['notification_contact'] = 1;
    }
    
}?>

  <!-- ================  breadcrumb part start ================  -->
  <section class="breadcrumb blog_bg">
      <div class="container">
          <div class="row">
              <div class="col-lg-12">
                  <div class="breadcrumb_iner">
                      <div class="breadcrumb_iner_item">
                          <h2>Contact us</h2>
                          <p>Home<span class="ti-angle-double-right"></span>Contact Us</p>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </section>
  <!-- ================ breadcrumb part start ================ -->



  
  <!-- ================ contact section start ================= -->
  <section class="contact-section">
    <div class="container">

    <div class="row">
        <div class="col-12">
          <h2 class="contact-title">Get in Touch</h2>
        </div>
        <div class="col-lg-8">
          <form class="form-contact contact_form" action="contact_process.php" method="post" id="contactForm" novalidate="novalidate">
            <div class="row">

            <div class="col-sm-6">
                <div class="form-group">
                  <input class="form-control placeholder hide-on-focus required" name="name" id="name" type="text" placeholder="Enter your name">
                </div>
              </div>
              <div class="col-sm-6">
                <div class="form-group">
                  <input class="form-control placeholder hide-on-focus required email" name="email" id="email" type="email" placeholder="Enter email address">
                </div>
              </div>
            

              <div class="col-sm-6">
                <div class="form-group">
                  <input class="form-control placeholder hide-on-focus required" name="phone" id="phone" type="text" placeholder="Enter your phone">
                </div>
              </div>
              <div class="col-sm-6">
                <div class="form-group">
                  <input class="form-control placeholder hide-on-focus required" name="city" id="city" type="text" placeholder="Enter city">
                </div>
              </div>
              
              <div class="col-12">
                <div class="form-group">
                  <input class="form-control placeholder hide-on-focus required" name="Budget" id="Budget" type="text" placeholder="Approximate Budget">
                </div>
              </div>
              <div class="col-12">
                <div class="form-group">
                    <textarea class="form-control w-100 placeholder hide-on-focus required" name="message" id="message" cols="30" rows="9" placeholder="Enter Message"></textarea>
                </div>
              </div>
            </div>
            <div class="form-group mt-3">
              <button type="submit" class="button button-contactForm">Send Message</button>
            </div>
          </form>
        </div>
        <div class="col-lg-4">
          <div class="media contact-info">
            <span class="contact-info__icon"><i class="ti-home"></i></span>
            <div class="media-body">
              <h3><a href="">Land No. 761, 762, 763A, 763B </a></h3>
              <p> 
                Anoura, Faizabad Road, Near<br> Kisan Path, Lucknow-226028</p>
            </div>
          </div>
          <div class="media contact-info">
            <span class="contact-info__icon"><i class="ti-tablet"></i></span>
            <div class="media-body">
              <h3><a href="tel:9839854321">+91-9839854321,7080225566</a></h3>
              <p>Mon to Fri 9am to 6pm</p>
            </div>
          </div>
          <div class="media contact-info">
            <span class="contact-info__icon"><i class="ti-email"></i></span>
            <div class="media-body">
              <h3><a href="mailto:support@colorlib.com">goelheight1@gmail.com</a></h3>
              <p>Send us your query anytime!</p>
            </div>
          </div>
        </div>
      </div>







     
    </div>





    
   
  </section>



  <?php if ($_SESSION['mail_contact'] == 1) { ?>

<div class="modal fade" id="ignismyModal" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label=""><span>×</span></button>
                     </div>
					
                    <div class="modal-body text-center">
                       
						<div class="thank-you-pop">
							<img src="img/nutmeg.gif" alt="">
							<h1>Thank You!</h1>
							<p>Your submission is received and we will contact you soon</p>
							<!-- <h3 class="cupon-pop">Your Id: <span>12345</span></h3> -->
							
 						</div>
                         
                    </div>
					
                </div>
            </div>
        </div>
        <?php } ?>



  <!-- ================ contact section end ================= -->

  <?php include 'include/footer.php';?>

  <?php if($_SESSION['notification_contact']==1){ $_SESSION['notified_contact'] = 1; $_SESSION['notification_contact'] = 0; ?>  
<script>
    jQuery('#ignismyModal').modal('show');
</script>
<?php }?>
