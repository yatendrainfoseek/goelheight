<?php include 'include/header-home.php';

 ?>
<?php if ($_GET['sent'] == 1) {
    $_SESSION['mail'] = 1;
    if(isset($_SESSION['notified'] )){
    }else{
        $_SESSION['notification'] = 1;
    }
    
}?>

<?php if ($_GET['sent'] == true) {
    $_SESSION['mail2'] = 1;
    if(isset($_SESSION['notified2'] )){
    }else{
        $_SESSION['notification2'] = 1;
    }
    
}?>

    <section id="intro">
        <div class="intro-container">
            <div id="introCarousel" class="carousel  slide carousel-fade" data-ride="carousel">


                <div class="carousel-inner" role="listbox" id="parllax_sec">

                    <div class="carousel-item active">
                        <div class="carousel-background"><img src="img/banner_overlay.png" alt=""></div>
                        <div class="carousel-container">
                            <div class="carousel-content">
                                <div class="container">
                                    <div class="row align-content-center">
                                        <div class="col-lg-6">
                                            <div class="banner_text aling-items-center slide_sec">
                                                <div class="banner_text_iner text-left">
                                                    <h5 class="animated bounceInLeft">Royalty Manifested</h5>
                                                    <h2 class="animated  pulse">Everyone Deserves their Dream Home
                                                    </h2>
                                                    <p class="animated fadeInUp">Right from an elegant flooring style with marble, & non-skid
                                                        ceramic tiles to anodized aluminum windows and laminated block
                                                        doors with stainless steel fittings, Goel Heights is proud to
                                                        present a great place to call home.</p>
                                                    <a href="overview.php" class="btn_1 banner_btn ">Read More</a>
                                                    
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="carousel-background"><img src="img/banner_overlay2.png" alt=""></div>
                        <div class="carousel-container">
                            <div class="carousel-content">
                                <div class="container">
                                    <div class="row align-content-center">
                                        <div class="col-lg-6">
                                            <div class="banner_text aling-items-center slide_sec">
                                                <div class="banner_text_iner text-left">
                                                    <h5 class="animated bounceInLeft">Beauty Personified</h5>
                                                    <h2 class="animated  pulse">Your Home Search Ends Here
                                                    </h2>
                                                    <p class="animated fadeInUp">Goel Heights presents 2, 3 & 4BHK ready to move in apartments at
                                                        Faizabad Road.Luxury living in our gated society & enjoy the
                                                        latest amenities including onsite temple, swimming pool, 24*7
                                                        water & power backup.</p>
                                                    <a href="overview.php" class="btn_1 banner_btn ">Read More</a>
                                                   
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>


                </div>

                <a class="carousel-control-prev" href="#introCarousel" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon ion-chevron-left" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>

                <a class="carousel-control-next" href="#introCarousel" role="button" data-slide="next">
                    <span class="carousel-control-next-icon ion-chevron-right" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>

            </div>
        </div>

        <div class="d-none d-xl-block banner_social_icon">
                                                        <ul class="list-inline">

                                                            <li class="list-inline-item"><a
                                                                        href="https://www.facebook.com/goelheight"><span
                                                                            class="ti-facebook"></span>facebook</a><span
                                                                        class="dot"><i class="fas fa-circle"></i></span>
                                                            </li>
                                                            <li class="list-inline-item"><a href="#"><span
                                                                            class="ti-twitter-alt"></span>twitter</a><span
                                                                        class="dot"><i class="fas fa-circle"></i></span>
                                                            </li>
                                                            <li class="list-inline-item"><a href="#"><span
                                                                            class="ti-instagram"></span>instagram</a>
                                                            </li>
                                                        </ul>
                                                    </div>

        <a href="https://www.youtube.com/watch?v=nAyuLCAB3HI" class="popup-youtube video_popup"><span
                    class="ti-control-play"></span></a>
    </section><!-- #intro -->


    <section class="team_part">
        <div class="container">

            <div class="row">
                <div class="col-lg-1">
                </div>
                <div class="col-lg-10">

                    <div class="team_member_text text-center">
                        <p class="mb-2 heading_top text-center">About Goel Heights</p>
                        <h2>Welcome to Goel Heights</h2>
                     
                        <p>When it comes to beauty, Goel Heights has left no stone untouched, right from the elegant flooring style utilizing vitrified tiles,<br> marble, wooden flooring & non-skid ceramic tiles at the required places, anodized aluminum windows with float glass and<br>  laminated block doors with stainless steel fittings. Relish the joy of living in <br> natural surroundings with ample green cover & landscaping at Goel Heights, Kisan Path.
                        </p>

                        <a href="overview.php" class="btn_1">Read More</a>
                        <a href="#" class="genric-btn primary-border">Get Brochure</a>
                    </div>
                </div>
                <div class="col-lg-1">
                </div>
            </div>
        </div>
    </section>


    <!--::passion_part end::-->
    <div class="passion_part">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section_tittle text-center">
                        <h1>Glimpses of Extraordinary Living @ Goel Heights </h1>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 col-lg-12">
                    <div class="single_passion">
                        <div class="single_passion_item">
                            <!--  <a href="#" class="passion_icon"> <i class="flaticon-compass"></i> </a> -->

                            <video style="width:100%;" id="bgvid" autoplay loop muted poster="img/passion_bg.png">
                                <source src="img/gole_heights.mp4#t=110" type="video/mp4">
                                Your browser does not support the video tag.
                            </video>
                            <!--   <h4>Creative Design</h4>
                              <p>Hac facilisi ac vitae consec tetu commod vel magna suspen disse on senectus
                                 pharetra magnfauc bed</p>
                              <a href="#" class="btn_2">Read More <span class="ti-arrow-right"></span></a> -->
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!--::passion_part end::-->


    <!--::apartment_part end::-->
    <div class="apartment_part">
        <div class="container">
            <div class="row justify-content-between align-content-center">
                <div class="col-md-8 col-lg-7">
                    <div class="section_tittle">
                        <h1>Our Floor Plan Formats</h1>
                    </div>
                </div>
                <div class="col-md-4 col-lg-5">
                    <div class="view_more_btn float-right d-none d-md-block">
                        <a href="amenities.php" class="btn_2">View Amenities <span class="ti-arrow-right"></span></a>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 col-lg-4">
                    <div class="single_appartment_part">
                        <div class="appartment_img">

                            <img src="img/bhk/2bhk.jpg" alt="">
                            <div class="single_appartment_text">
                                <!-- <h3>$1,235632</h3> -->
                                <a href="img/bhk/2bhk.jpg" data-lightbox="portfolio" data-title="2BHK"
                                   class="link-preview" title="Preview"><i class="ti-eye"></i></a>
                                <!--   <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a> -->
                                <p><span class="ti-location-pin"></span> Near Kisan Path,<br> Faizabad Road, Lucknow</p>
                            </div>
                        </div>
                        <div class="single_appartment_content">
                            <a href="2bhk.php" class="love_us"> <span class="ti-home"></span> </a>
                            <p>3d Layout</p>
                            <a href="2bhk.php">
                                <h4>2BHK Floor Plan</h4>
                            </a>
                            <ul class="list-unstyled">
                                <li><a href="2bhk.php"><span class="flaticon-bath"></span></a> 02</li>
                                <li><a href="2bhk.php"><span class="flaticon-bed"></span></a> 02</li>
                                <li><a href="2bhk.php"><span class="flaticon-frame"></span></a> 1290 sqft</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-lg-4">
                    <div class="single_appartment_part">
                        <div class="appartment_img">
                            <img src="img/bhk/3BHk.jpg" alt="">
                            <div class="single_appartment_text">

                                <!--   <h3>$1,235632</h3> -->
                                <a href="img/bhk/2bhk.jpg" data-lightbox="portfolio" data-title="3BHK"
                                   class="link-preview" title="Preview"><i class="ti-eye"></i></a>
                                <!--   <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a> -->
                                <p><span class="ti-location-pin"></span> Near Kisan Path,<br> Faizabad Road, Lucknow</p>
                            </div>
                        </div>
                        <div class="single_appartment_content">
                            <a href="3bhk.php" class="love_us"> <span class="ti-home"></span> </a>
                            <p>3d Layout</p>
                            <a href="3bhk.php">
                                <h4>3BHK Floor Plan</h4>
                            </a>
                            <ul class="list-unstyled">
                                <li><a href="3bhk.php"><span class="flaticon-bath"></span></a> 03</li>
                                <li><a href="3bhk.php"><span class="flaticon-bed"></span></a> 03</li>
                                <li><a href="3bhk.php"><span class="flaticon-frame"></span></a> 1680 sqft</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-lg-4">
                    <div class="single_appartment_part">
                        <div class="appartment_img">
                            <img src="img/bhk/4BHk.jpg" alt="">
                            <div class="single_appartment_text">
                                <!--     <h3>$1,235632</h3> -->
                                <a href="img/bhk/4bhk.jpg" data-lightbox="portfolio" data-title="4BHK"
                                   class="link-preview" title="Preview"><i class="ti-eye"></i></a>
                                <!--   <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a> -->
                                <p><span class="ti-location-pin"></span> Near Kisan Path,<br> Faizabad Road, Lucknow</p>
                            </div>
                        </div>
                        <div class="single_appartment_content">
                            <a href="4bhk.php" class="love_us"> <span class="ti-home"></span> </a>
                            <p>3d Layout</p>
                            <a href="4bhk.php">
                                <h4>4BHK Floor Plan</h4>
                            </a>
                            <ul class="list-unstyled">
                                <li><a href="4bhk.php"><span class="flaticon-bath"></span></a> 03</li>
                                <li><a href="4bhk.php"><span class="flaticon-bed"></span></a> 04</li>
                                <li><a href="4bhk.php"><span class="flaticon-frame"></span></a> 1875 sqft</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row pt-5">
                <div class="col-lg-12 text-center">
                    <a href="amenities.php?#Specifications" class="btn_1" style="padding: 18px 46px;">Get Complete
                        Specification about Apartment</a>
                </div>
            </div>
        </div>
    </div>
    <!--::apartment_part end::-->


    <!-- Blog Section -->
    <section id="blog" class="blog">
        <div class="container-fluid">
            <div class="row row-eq-height">

                <div class="col-lg-6 col-sm-12 col_block">
                    <div class="single_blog_area textwhite">
                        <div class="row row-eq-height">
                            <div class="col-lg-6 col-sm-12 no-padding">
                                <div class="single_blog_img">
                                    <img src="img/blog/blog1.jpg" alt=""/>
                                </div>
                            </div>
                            <div class="col-lg-6 col-sm-12 no-padding">
                                <div class="single_blog_text s_b_left">

                                    <h3>Features</h3>
                                    <div class="separator2"></div>
                                    <ul>
                                        <li><span class="ti-hand-point-right"></span>Strategically located @ Near Kisan Path, Faizabad Road, Lucknow
                                        </li>

                                        <li><span class="ti-hand-point-right"></span>Efficient 24 hrs Power Backup
                                        </li>
                                        <li><span class="ti-hand-point-right"></span>Regulated, potable water supply
                                        </li>

                                        <li><span class="ti-hand-point-right"></span>Rechargeable pits for rain water
                                            harvesting
                                        </li>
                                        <li><span class="ti-hand-point-right"></span>Clean & Hygiene Swimming Pool
                                        </li>

                                    </ul>


                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 col-sm-12 col_block">
                    <div class="single_blog_area textwhite">
                        <div class="row row-eq-height">
                            <div class="col-lg-6 col-sm-12 no-padding">
                                <div class="single_blog_img">
                                    <img src="img/blog/blog2.jpg" alt=""/>
                                </div>
                            </div>
                            <div class="col-lg-6 col-sm-12 no-padding">
                                <div class="single_blog_text s_b_left">

                                    <h3>Conveniences</h3>
                                    <div class="separator2"></div>


                                    <ul>
                                        <li><span class="ti-hand-point-right"></span>Gymnasium</li>
                                        <li><span class="ti-hand-point-right"></span> Community Hall</li>
                                        <li><span class="ti-hand-point-right"></span> Badminton Court</li>
                                        <li><span class="ti-hand-point-right"></span> Utility Store</li>
                                        <li><span class="ti-hand-point-right"></span> Reputed Brands Under One Roof</li>
                                        <li><span class="ti-hand-point-right"></span> Open Amphitheatre</li>
                                        <li><span class="ti-hand-point-right"></span> Temple</li>
                                        <li><span class="ti-hand-point-right"></span> Swing</li>

                                    </ul>


                                </div>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </div><!-- End off container -->
    </section><!-- End off Blog Section -->


    <!--==========================
      Facts Section
    ============================-->
    <section id="facts" class="wow fadeIn">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section_tittle">
                        <h1>Reasons to Buy Your Dream Home <br> in Goel Heights</h1>
                    </div>
                </div>
            </div>


            <div class="row counters">

                <div class="col-lg-3 col-6 text-center">
                    <span data-toggle="counter-up">300</span>
                    <p>Resident Families</p>
                </div>

                <div class="col-lg-3 col-6 text-center">
                    <span data-toggle="counter-up">5000</span>
                    <p>Student Educational Facility</p>
                </div>

                <div class="col-lg-3 col-6 text-center">
                    <span data-toggle="counter-up">24</span>
                    <p>Hours Power Backup</p>
                </div>

                <div class="col-lg-3 col-6 text-center">
                    <span data-toggle="counter-up">300</span>
                    <p>Satisfied Customer</p>
                </div>

            </div>


        </div>
    </section><!-- #facts -->


    <!--::room_part end::
    <div class="room_part">
       <div class="container-fluid">
          <div class="row">
             <div class="col-md-6 col-lg-6">
                <div class="room_1">
                   <img src="img/room_1.png" alt="">
                   <div class="room_text_1">
                      <h1>Beginning own <br> light divided male <br> is light</h1>
                      <a href="#" class="btn_2">Read More <span class="ti-arrow-right"></span></a>
                   </div>
                </div>
             </div>
             <div class="col-md-6 col-lg-6">
                <div class="room_2">
                   <img src="img/room_2.png" alt="">
                   <div class="room_text_2">
                      <h1>Beginning own <br> light divided male <br> is light</h1>
                      <a href="#" class="btn_2">Read More <span class="ti-arrow-right"></span></a>
                   </div>
                </div>
             </div>
          </div>
       </div>
    </div>
    <!--::room_part end::-->

    <!--::review_part end::-->
    <div class="review_part" id="testimonial">
        <div class="container">
            <div class="row">
                <div class="col-sm-8 col-lg-7">
                    <div class="section_tittle">
                        <h1>Our Happy Customer
                            Says</h1>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="review_part_text owl-carousel">
                        <div class="singler_eview_part">
                            <div class="client_info">
                                <img src="img/client_1.png" alt="">
                                <h4>Mouunt Alezaber</h4>
                                <p>Designation</p>
                            </div>
                            <p><i>Enim a, scelerisque aliquet. Vivamus neque diam sed at, pede laoreet orci.
                                    Potenti vel In sagittis nulla augue vitae et tempus torquent. Lacinia neque
                                    mus taciti ante prsent at facilisis. Enim a, scelerisque aliquet. Vivamus
                                    neque diam sed at, pede laoreet orci Potti, vel. In sagittis nulla augue
                                    vitae et tempus torquent.</i></p>
                        </div>
                        <div class="singler_eview_part">
                            <div class="client_info">
                                <img src="img/client_2.png" alt="">
                                <h4>Mouunt Alezaber</h4>
                                <p>Designation</p>
                            </div>
                            <p><i>Enim a, scelerisque aliquet. Vivamus neque diam sed at, pede laoreet orci.
                                    Potenti vel In sagittis nulla augue vitae et tempus torquent. Lacinia neque
                                    mus taciti ante prsent at facilisis. Enim a, scelerisque aliquet. Vivamus
                                    neque diam sed at, pede laoreet orci Potti, vel. In sagittis nulla augue
                                    vitae et tempus torquent.</i></p>
                        </div>
                        <div class="singler_eview_part">
                            <div class="client_info">
                                <img src="img/client_1.png" alt="">
                                <h4>Mouunt Alezaber</h4>
                                <p>Designation</p>
                            </div>
                            <p><i>Enim a, scelerisque aliquet. Vivamus neque diam sed at, pede laoreet orci.
                                    Potenti vel In sagittis nulla augue vitae et tempus torquent. Lacinia neque
                                    mus taciti ante prsent at facilisis. Enim a, scelerisque aliquet. Vivamus
                                    neque diam sed at, pede laoreet orci Potti, vel. In sagittis nulla augue
                                    vitae et tempus torquent.</i></p>
                        </div>
                        <div class="singler_eview_part">
                            <div class="client_info">
                                <img src="img/client_2.png" alt="">
                                <h4>Mouunt Alezaber</h4>
                                <p>Project manager</p>
                            </div>
                            <p><i>Enim a, scelerisque aliquet. Vivamus neque diam sed at, pede laoreet orci.
                                    Potenti vel In sagittis nulla augue vitae et tempus torquent. Lacinia neque
                                    mus taciti ante prsent at facilisis. Enim a, scelerisque aliquet. Vivamus
                                    neque diam sed at, pede laoreet orci Potti, vel. In sagittis nulla augue
                                    vitae et tempus torquent.</i></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--::review_part end::-->

    <!--::cta_part start::-->
    <div class="cta_part">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="cta_iner">
                        <h1>Are You Ready For Move in your Dream House? </h1>
                        <p>Lets share with us what's in your mind</p>
                        <a href="#" class="cta_btn" data-toggle="modal" data-target="#myModal_enquire">Connect With Us</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--::cta_part end::-->


    <!--::blog_part start::
    <div class="blog_part">
       <div class="container">
          <div class="row">
             <div class="col-sm-8 col-lg-5">
                <div class="section_tittle">
                   <h1>Read Latest
                      News From Our Blog</h1>
                </div>
             </div>
          </div>
          <div class="row">
             <div class="col-md-6 col-lg-7">
                <div class="single_blog">
                   <div class="appartment_img">
                      <img src="img/blog_1.png" alt="">
                   </div>
                   <div class="single_appartment_content">
                      <p><a href="#">Apartment</a> / March 20, 2019</p>
                      <a href="blog.html">
                         <h4>Doee lights without darkness that said
                            good deep years very.</h4>
                      </a>
                      <ul class="list-unstyled">
                         <li><a href=""> <span class="ti-comment"></span> </a> 2 comment</li>
                         <li><a href=""> <span class="ti-heart"></span> </a> 0 like</li>
                      </ul>
                   </div>
                </div>
             </div>
             <div class="col-md-6 col-lg-5">
                <div class="right_single_blog">
                   <div class="single_blog">
                      <div class="media">
                         <img src="img/blog_2.png" class=" mr-3" alt="...">
                         <div class="media-body align-self-center">
                            <p><a href="#">home</a></p>
                            <a href="blog.html">
                               <h5 class="mt-0">Green very from for rule stars seasons</h5>
                            </a>
                            <ul class="list-unstyled">
                               <li><a href=""> <span class="ti-time"></span> </a> Mar 12</li>
                               <li><a href=""> <span class="ti-heart"></span> </a> 0 like</li>
                            </ul>
                         </div>
                      </div>
                   </div>
                   <div class="single_blog">
                      <div class="media">
                         <img src="img/blog_3.png" class="mr-3" alt="...">
                         <div class="media-body align-self-center">
                            <p><a href="#">Apartment</a></p>
                            <a href="blog.html">
                               <h5 class="mt-0">Moveth wherein subdue of brought</h5>
                            </a>
                            <ul class="list-unstyled">
                               <li><a href=""> <span class="ti-time"></span> </a> Mar 12</li>
                               <li><a href=""> <span class="ti-heart"></span> </a> 0 like</li>
                            </ul>
                         </div>
                      </div>
                   </div>
                   <div class="single_blog">
                      <div class="media">
                         <img src="img/blog_4.png" class="mr-3" alt="...">
                         <div class="media-body align-self-center">
                            <p><a href="blog.html">Apartment</a></p>
                            <a href="">
                               <h5 class="mt-0">Firmament heaven cant him night rule</h5>
                            </a>
                            <ul class="list-unstyled">
                               <li><a href=""> <span class="ti-time"></span> </a> Mar 12</li>
                               <li><a href=""> <span class="ti-heart"></span> </a> 0 like</li>
                            </ul>
                         </div>
                      </div>
                   </div>
                </div>
             </div>
          </div>
       </div>
    </div>
    <!--::blog_part end::-->


    <!--==========================
     Clients Section
   ============================-->
    <section id="clients" class="wow fadeInUp">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-lg-12">
                    <div class="section_tittle text-center">
                        <h1>Our Finance Partners</h1>
                    </div>
                </div>
            </div>


            <div class="owl-carousel clients-carousel">
                <img src="img/clients/client-1.png" alt="">
                <img src="img/clients/client-2.png" alt="">
                <img src="img/clients/client-3.png" alt="">
                <img src="img/clients/client-4.png" alt="">
                <img src="img/clients/client-5.png" alt="">

            </div>

        </div>
    </section>

<?php if ($_SESSION['mail'] != 1) { ?>
    <div class="modal fade" id="myModal" role="dialog">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content text-right">
                <div class="pull-right" style="margin: 10px 10px 0;">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">


                    <div class="page-popup">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="poup-left text-center">
                                    <h3>Are you realy looking for your dream house? <?php echo $_SESSION['mail']?></h3>
                                    <img src="img/logo.png" alt="" class="mt-2 mb-2"/><br>
                                    <a href="#" class="genric-btn default mt-3 mb-3">Present</a>
                                    <p class="text-dark">2BHK, 3BHK & 4 BHK Luxury Apartment @ Faizabad Road Near Kisan
                                        Path</p>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="poup-right text-center">
                                    <h4 class="text-light mt-2"><strong>Have an idea about your dream house? Share it
                                            with us.</strong></h4>
                                    <span class="bellow_tex">Give us your details and our representative will get in touch with you shortly.</span>
                                    <form action="confirmation.php" method="post" class="text-left" id="popup_form">
                                        <div class="form-group">

                                            <input type="text" class="form-control required" name="name" required="required"
                                                   placeholder="Name"/>
                                        </div>
                                        <div class="form-group">
                                            <div class="clearfix">
                                                <input type="text" class="form-control required" name="mobile_no"
                                                       required="required" placeholder="Mob. no">
                                            </div>


                                        </div>
                                        <a href="#" data-dismiss="modal" class="genric-btn warning mt-4">Proceed To
                                            Website</a> <input type="submit" class="genric-btn primary" value="Submit">
                                    </form>

                                </div>

                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </div>
<?php } ?>

<?php if ($_SESSION['mail'] == 1) { ?>

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


<?php if ($_SESSION['mail2'] == 1) { ?>



    <div class="modal fade" id="ignismyModal2" role="dialog">
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

   
  <?php  } ?>


        <div class="modal fade" id="myModal_enquire" role="dialog">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content text-right">
                <div class="pull-right" style="margin: 10px 10px 0;">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">


                    <div class="page-popup">
                        <div class="row">
                           
                            <div class="col-lg-12">
                                <div class="poup-right text-left">
                                    <h4 class="text-light mt-2"><strong>Enquire Know</strong></h4>
                                    <span class="bellow_tex">Give us your details and our representative will get in touch with you shortly.</span>
                                    <form action="enquir.php" method="post" class="text-left" id="popup_form">
                                        <div class="form-group">

                                            <input type="text" class="form-control required" name="name" required="required"
                                                   placeholder="Name"/>
                                        </div>
                                        <div class="form-group">
                                            <div class="clearfix">
                                                <input type="text" class="form-control required" name="mobile_no"
                                                       required="required" placeholder="Mob. no">
                                            </div>


                                        </div>

                                        <div class="form-group">
                                            <div class="clearfix">
                                            
                    <textarea class="form-control w-100 placeholder hide-on-focus required" style="background: #027ad9;
    border-top: 0;
    border-radius: 0;
    border-right: 0;
    border-left: 0;
    color: #fff;" name="message" id="message" cols="30" rows="4" placeholder="Your Requirment Message"></textarea>
             
                                            </div>


                                        </div>
                                       
                                        <input type="submit" class="genric-btn primary" value="Send Enuiry">
                                    </form>

                                </div>

                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </div>


    <!-- #clients -->

    <!--==========================
      Clients Section
    ============================-->
 

<?php include 'include/footer.php'; ?>
<?php if($_SESSION['notification']==1){ $_SESSION['notified'] = 1; $_SESSION['notification'] = 0; ?>  
<script> jQuery('#ignismyModal').modal('show');</script>
<?php }?>


<?php if($_SESSION['notification2']==1){ $_SESSION['notified2'] = 1; $_SESSION['notification2'] = 0; ?>  
<script> jQuery('#ignismyModal2').modal('show');</script>
<?php }?>

<script>jQuery(function() { jQuery('#popup_form').validate({});  });</script>
