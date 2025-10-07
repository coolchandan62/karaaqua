<!DOCTYPE html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<title><?php echo $title;?></title>
<!-- favicons Icons -->
<base href="<?php echo base_url();?>" id="siteUrl"/>
<link rel="apple-touch-icon" sizes="180x180" href="<?php echo base_url();?>assets/ro-service/images/favicons/favicon.webp" />
<link rel="icon" type="image/png" sizes="32x32" href="<?php echo base_url();?>assets/ro-service/images/favicons/favicon.webp" />
<link rel="icon" type="image/png" sizes="16x16" href="<?php echo base_url();?>assets/ro-service/images/favicons/favicon.webp" />
<meta name="description" content="<?php echo $meta_description;?>" />
<?php echo $og;?>
<link rel="stylesheet" href="<?php echo base_url();?>assets/ro-service/vendors/bootstrap/css/bootstrap.min.css" />
<link rel="stylesheet" href="<?php echo base_url();?>assets/ro-service/vendors/animate/animate.min.css" />
<link rel="stylesheet" href="<?php echo base_url();?>assets/ro-service/vendors/animate/custom-animate.css" />
<link rel="stylesheet" href="<?php echo base_url();?>assets/ro-service/vendors/fontawesome/css/all.min.css" />
<link rel="stylesheet" href="<?php echo base_url();?>assets/ro-service/vendors/swiper/swiper.min.css" />
<link rel="stylesheet" href="<?php echo base_url();?>assets/ro-service/vendors/jetly-icons/style.css">
<link rel="stylesheet" href="<?php echo base_url();?>assets/ro-service/vendors/jquery-ui/jquery-ui.css" />
<!-- template styles -->
<link rel="stylesheet" href="<?php echo base_url();?>assets/ro-service/css/fixnix.css" />
<link rel="stylesheet" href="<?php echo base_url();?>assets/ro-service/css/fixnix-responsive.css" />
<?php if($header_script){
 echo $header_script;
} ?>


</head>

<body class="custom-cursor">
    <?php if($body_script){
 echo $body_script;
} ?>    
<div class="custom-cursor__cursor"></div>
<div class="custom-cursor__cursor-two"></div>
<div class="preloader">
  <div class="preloader__image"></div>
</div>
<!-- /.preloader -->

<div class="page-wrapper">
  <header class="main-header-two">
    <div class="main-header-two__top">
      <div class="container">
        <div class="main-header-two__top-inner">
          <p class="main-header-two__top-text">ISO 9001:2015</p>
          <div class="main-header-two__social-box">
            <p class="main-header-two__social-title">Stay Connected</p>
            <div class="main-menu-two__social"> 
				<a href="https://x.com/karaquaservices" target="_blank"><i class="fab fa-twitter"></i></a>
				<a href="https://www.facebook.com/karaaquaservices/" target="_blank"><i class="fab fa-facebook"></i></a>
				<a href="https://www.youtube.com/@karaaquaservices" target="_blank"><i class="fab fa-youtube"></i></a>
				<a href="https://www.instagram.com/karaaquaservices/" target="_blank"><i class="fab fa-instagram"></i></a> 
				<a href="https://www.linkedin.com/company/karaa-aqua-services/" target="_blank"><i class="fab fa-linkedin-in"></i></a> 
			  </div>
          </div>
        </div>
      </div>
    </div>
    <nav class="main-menu main-menu-two">
      <div class="main-menu-two__wrapper">
        <div class="container">
          <div class="main-menu-two__wrapper-inner">
            <div class="main-menu-two__left">
              <div class="main-menu-two__logo"> <a href="<?php echo base_url();?>"><img src="<?php echo base_url();?>assets/ro-service/images/kara-logo.png" alt=""></a> </div>
            </div>
            <div class="main-menu-two__right">
              <div class="main-menu-two__main-menu-box"> <a href="#" class="mobile-nav__toggler"><i class="fa fa-bars"></i></a>
                <ul class="main-menu__list">
                  <li><a href="<?php echo base_url();?>">Home </a></li>
                  <li><a href="<?php echo base_url("about-us");?>">About</a></li>
                  <li> <a href="<?php echo base_url("service");?>">Services</a></li>
                  <li><a href="<?php echo base_url("products");?>">Products</a></li>
                     <li><a href="<?=base_url()?>commercial-products">Commercial Products</a></li>

                  <li> <a href="<?php echo base_url("contact-us");?>">Contact</a> </li>
                </ul>
              </div>
              <div class="main-menu-two__search-cart-btn-box">
                <div class="main-menu-two__btn-box"> <a href="tel:9220241010"  class="thm-btn main-menu-two__btn"><span class="fas fa-headphones"></span> +91 9220241010</a> </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </nav>
  </header>
  <div class="stricky-header stricked-menu main-menu main-menu-two">
    <div class="sticky-header__content"></div>
    <!-- /.sticky-header__content --> 
  </div>
  <!-- /.stricky-header --><!--Main Slider Start-->
  <section class="main-slider-two clearfix" style="background:#102b6e">
      <div class="row">
      <div class="col-md-9">
    <div class="swiper-container thm-swiper__slider" data-swiper-options='{"slidesPerView": 1, "loop": true,
                "effect": "fade",
                "pagination": {
                "el": "#main-slider-pagination",
                "type": "bullets",
                "clickable": true
                },
                "navigation": {
                "nextEl": "#main-slider__swiper-button-next",
                "prevEl": "#main-slider__swiper-button-prev"
                },
                "autoplay": {
                "delay": 8000
                }}'>
      <div class="swiper-wrapper">
        <div class="swiper-slide">
          <div class="image-layer-two"> <img src="<?php echo base_url();?>assets/ro-service/images/backgrounds/kara-rent.webp"> </div>
        </div>
        <!-- <div class="swiper-slide">
          <div class="image-layer-two"> <img src="<?php echo base_url();?>assets/ro-service/images/backgrounds/banner-2.webp"> </div>
        </div> -->
        <!-- <div class="swiper-slide">
          <div class="image-layer-two"> <img src="<?php echo base_url();?>assets/ro-service/images/backgrounds/banner-3.webp"> </div>
        </div> -->
      </div>
      
      <!-- If we need navigation buttons -->
      <div class="main-slider-two__nav">
        <div class="swiper-button-prev" id="main-slider__swiper-button-next"> <i class="icon-left-arrow"></i> </div>
        <div class="swiper-button-next" id="main-slider__swiper-button-prev"> <i class="icon-right-arrow"></i> </div>
      </div>
    </div></div>
    <div class="col-md-3">
        <div class="popup-content New_banner_form">
    <div class="event-header">
      <h6>Feel free to<br> connect with us!</h6>
    </div>
      <form id="send" class="send-form">
        <input type="hidden" name="contact_page_name" value="RO ON RENT">
        <div class="form-group">
          <input type="text" placeholder="Enter name*" id="name" name="contact_name">
          <label for="name">
            <i class="fa fa-user"></i>
          </label>
          <span class="message" id="msgcontact_name"></span>
        </div>
        <div class="form-group">
          <input type="tel" placeholder="Enter mobile*" id="mobile" name="contact_mobile">
          <label for="phone">
            <i class="fa fa-phone"></i>
          </label>
          <span class="message" id="msgcontact_mobile"></span>
        </div>
        
        <div class="form-group">
          <textarea placeholder="Enter address*" name="contact_address"></textarea>
          <label for="text" class="txt">
            <i class="fa fa-location-arrow"></i>
          </label>
          <span class="message" id="msgcontact_address"></span>
        </div>
        <div class="form-group">
          <textarea placeholder="Enter comment*" name="contact_comment"></textarea>    
          
          <span class="message" id="msgcontact_comment"></span>
        </div>
        <button type="button" id="authenticateContactEnquiry" class="main-btn-rect" name="text" value="Send">
          <i class="fa fa-paper-plane"></i>Submit</button>
      </form>
  </div>
    </div></div>
    
  </section>
  <!--Main Slider End--> 
  <!--Experience One Start-->
  <section class="experience-one experience-two">
    <div class="experience-two-shape-1 float-bob-y"
                style="background-image: url(<?php echo base_url();?>assets/ro-service/images/shapes/experience-two-shape-1.jpg);"></div>
    <div class="container">
      <div class="section-title text-center"> <span class="section-title__tagline">About Us</span>
        <h2 class="section-title__title">We Have Than <strong>10 Years Experience in RO Service</strong> Business both for Domestic and Commercial </h2>
      </div>
      <div class="row"> 
        <!--Experience One Single Start-->
        <div class="col-xl-3 col-lg-3 wow fadeInLeft" data-wow-delay="100ms">
       <a href="javascript:void(0);" data-popup="popup-reg" class="popup-btn" data-id="Rent an RO at just 399">
          <div class="experience-one__single">
            <div class="experience-one__icon"> <img src="<?php echo base_url();?>assets/ro-service/images/filter.webp" alt="Rent an RO  at just 399">  </div>
            <div class="experience-one__content">
              <h3 class="experience-one__title">Rent an RO At <br><strong>Just ₹399/-</strong> </h3>
              <p class="experience-one__text">Rent Kara Aqua RO Water PurifierJust at 399/- Per Month </p>
              <em>Book Now</em>
            </div>
          </div></a>
        </div>
        <!--Experience One Single End--> 
        <!--Experience One Single Start-->
        <div class="col-xl-3 col-lg-3 wow fadeInUp" data-wow-delay="200ms">
         <a href="javascript:void(0);"  data-popup="popup-reg" class=" popup-btn" data-id="RO Repair Service At just 199">
          <div class="experience-one__single">
            <div class="experience-one__icon"> <img src="<?php echo base_url();?>assets/ro-service/images/mechanic.webp" alt="RO Repair Service At just 199">  </div>
            <div class="experience-one__content">
              <h3 class="experience-one__title">RO Repair Service At <br><strong>just ₹199/-</strong></h3>
              <p class="experience-one__text">Deals in RO Repair Service for all brand anywhere within Delhi NCR </p>
              <em>Book Now</em>
            </div>
          </div></a>
        </div>
        <!--Experience One Single End--> 
        <!--Experience One Single Start-->
        <div class="col-xl-3 col-lg-3 wow fadeInRight" data-wow-delay="300ms">
          <a href="javascript:void(0);"  data-popup="popup-reg" class=" popup-btn"  data-id="RO Maintenance (AMC) At just ₹3500/- yearly">
          <div class="experience-one__single">
            <div class="experience-one__icon"> <img src="<?php echo base_url();?>assets/ro-service/images/maintenance.webp" alt="RO Maintenance (AMC) At just ₹3500/- yearly">  </div>
            <div class="experience-one__content">
              <h3 class="experience-one__title">RO Maintenance (AMC) At<br><strong>just ₹3500/- yearly</strong></h3>
              <p class="experience-one__text">Get Annual Maintenance RO Services at your doorstep with expert technicians. </p>
              <em>Book Now</em>
            </div>
          </div></a>
        </div>
        <!--Experience One Single End--> 
        <!--Experience One Single Start-->
        <div class="col-xl-3 col-lg-3 wow fadeInRight" data-wow-delay="300ms">
         <a href="javascript:void(0);"  data-popup="popup-reg" class="popup-btn" data-id="RO Installation At Just ₹500/-">
          <div class="experience-one__single">
            <div class="experience-one__icon"> <img src="<?php echo base_url();?>assets/ro-service/images/energy.webp" alt="RO Installation At Just ₹500/-"> </div>
            <div class="experience-one__content">
              <h3 class="experience-one__title">RO Installation At <br><strong>Just ₹500/-</strong></h3>
              <p class="experience-one__text">Deals in New RO Installation Service for all brand anywhere within Delhi NCR </p>
              <em>Book Now</em>
            </div>
          </div></a>
        </div>
        <!--Experience One Single End--> 
      </div>
    </div>
  </section>
  
  <!--Welcome One Start-->
  <section class="welcome-one">
    <div class="welcome-one__bg" style="background-image: url(<?php echo base_url();?>assets/ro-service/images/backgrounds/welcome-one-bg.jpg);"> </div>
    <div class="container">
      <div class="row">
        <div class="col-xl-6 col-lg-6">
          <div class="welcome-one__left">
            <div class="section-title text-left"> <span class="section-title__tagline">Welcome To</span>
              <h2 class="section-title__title"><strong>Kara Aqua</strong></h2>
            </div>
            <p class="welcome-one__text-1">Know About Why We Are Best In Ro Services !</p>
            <p class="welcome-one__text-2">Kara Aqua Water Treatment Company is a globally recognized, ISO 9001:2015, MSME, and CE-certified organization. As a trusted leader in the water treatment industry, the company specializes in manufacturing, exporting, trading, supplying, and providing spare parts and services for cutting-edge water treatment solutions. Their extensive product range includes Industrial RO Plants, Domestic and Industrial Water Softeners, Sewage Treatment Plants (STP), Effluent Treatment Plants (ETP), Sand Filters, and Activated Carbon Filters.</p>
            <div class="welcome-one__btn-box"> <a href="javascript:void(0);"  data-popup="popup-reg" class=" popup-btn welcome-one__btn thm-btn" data-id="About Us">Contact Us</a>  </div>
          </div>
        </div>
        <div class="col-xl-6 col-lg-6">
          <div class="welcome-one__right">
            <div class="welcome-one__right-img wow fadeInRight" data-wow-delay="100ms"
                                data-wow-duration="2500ms"> <img src="<?php echo base_url();?>assets/ro-service/images/About.webp" alt="">
              <div class="welcome-one__video-link"> <a href="<?php echo base_url();?>assets/ro-service/images/kara_video.mp4" class="video-popup">
                <div class="welcome-one__video-icon"> <span class="fa fa-play"></span> <i class="ripple"></i> </div>
                </a> </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--Welcome One End--> 
  <!--Why Choose One Start-->
  <section class="why-choose-one">
    <div class="about-one__bg float-bob-y" style="background-image: url(<?php echo base_url();?>assets/ro-service/images/backgrounds/about-one-bg-img-1.jpg);"> </div>
    <div class="container">
      <div class="section-title section-title--two text-center"> <span class="section-title__tagline">OUR Products</span>
        <h2 class="section-title__title">All <strong>RO Services</strong> under one roof</h2>
      </div>
      <div class="row">
        <div class="col-xl-6 col-lg-6 wow fadeInUp" data-wow-delay="100ms"> 
          <!--Why Choose One Single Start-->
          <div class="why-choose-one__single">
            <div class="why-choose-one__icon"><img src="<?php echo base_url();?>assets/ro-service/images/shop/03.webp" alt="KARA AQUALINE SERIES 1003" class="img-fluid"> </div>
            <div class="why-choose-one__content">
              <h3 class="why-choose-one__title">KARA AQUALINE SERIES</h3>
              <h5>₹ 12,500/-</h5>
              <p><strong>Features</strong></p>
              <ul>
                <li>Smart LED Display</li>
                <li>12 Stages Water Purification</li>
                <li>RO+ZN+CU+ALK+UV</li>
                <li>with TDS Regulator</li>
                <li>16 Ltr. Storage Tank</li>
                <li>Attractive Color Options</li>
                <li>Easy Service, Elegant Look</li>
              </ul><a href="javascript:void(0);"  data-popup="popup-reg" class="thm-btn popup-btn" data-id="Kara Aqaline Series">Book Now</a> </div>
          </div>
          <!--Why Choose One Single Start--> 
        </div>
        <div class="col-xl-6 col-lg-6 wow fadeInUp" data-wow-delay="100ms"> 
          <!--Why Choose One Single Start-->
          <div class="why-choose-one__single">
            <div class="why-choose-one__icon"><img src="<?php echo base_url();?>assets/ro-service/images/shop/04.webp" alt="KARA AQUALINE SERIES 1003" class="img-fluid"> </div>
            <div class="why-choose-one__content">
              <h3 class="why-choose-one__title">ECO PURE SERIES</h3>
              <h5>₹ 12,500/-</h5>
              <p><strong>Features</strong></p>
              <ul>
                <li>Smart LED Display</li>
                <li>12 Stages Water Purification</li>
                <li>RO+ZN+CU+ALK+UV</li>
                <li>with TDS Regulator</li>
                <li>16 Ltr. Storage Tank</li>
                <li>Attractive Color Options</li>
                <li>Easy Service, Elegant Look</li>
              </ul><a href="javascript:void(0);"  data-popup="popup-reg" class="thm-btn popup-btn" data-id="Eco Pure Series">Book Now</a> </div>
          </div>
          <!--Why Choose One Single Start--> 
        </div>
        <div class="col-xl-6 col-lg-6 wow fadeInUp" data-wow-delay="100ms"> 
          <!--Why Choose One Single Start-->
          <div class="why-choose-one__single">
            <div class="why-choose-one__icon"><img src="<?php echo base_url();?>assets/ro-service/images/shop/05.webp" alt="VIVA SPRING SERIES" class="img-fluid"> </div>
            <div class="why-choose-one__content">
              <h3 class="why-choose-one__title">VIVA SPRING SERIES</h3>
              <h5>₹ 12,500/-</h5>
              <p><strong>Features</strong></p>
              <ul>
                <li>Smart LED Display</li>
                <li>12 Stages Water Purification</li>
                <li>RO+ZN+CU+ALK+UV</li>
                <li>with TDS Regulator</li>
                <li>16 Ltr. Storage Tank</li>
                <li>Attractive Color Options</li>
                <li>Easy Service, Elegant Look</li>
              </ul><a href="javascript:void(0);"  data-popup="popup-reg" class="thm-btn popup-btn" data-id="Viva Spring Series">Book Now</a> </div>
          </div>
          <!--Why Choose One Single Start--> 
        </div>
        <div class="col-xl-6 col-lg-6 wow fadeInUp" data-wow-delay="100ms"> 
          <!--Why Choose One Single Start-->
          <div class="why-choose-one__single">
            <div class="why-choose-one__icon"><img src="<?php echo base_url();?>assets/ro-service/images/shop/07.webp" alt="CRYTAL SERIES" class="img-fluid"> </div>
            <div class="why-choose-one__content">
              <h3 class="why-choose-one__title">CRYTAL SERIES</h3>
              <h5>₹ 12,500/-</h5>
              <p><strong>Features</strong></p>
              <ul>
                <li>Smart LED Display</li>
                <li>12 Stages Water Purification</li>
                <li>RO+ZN+CU+ALK+UV</li>
                <li>with TDS Regulator</li>
                <li>16 Ltr. Storage Tank</li>
                <li>Attractive Color Options</li>
                <li>Easy Service, Elegant Look</li>
              </ul><a href="javascript:void(0);"  data-popup="popup-reg" class="thm-btn popup-btn" data-id="Crytal Series">Book Now</a> </div>
          </div>
          <!--Why Choose One Single Start--> 
        </div>
        <div class="col-xl-6 col-lg-6 wow fadeInUp" data-wow-delay="100ms"> 
          <!--Why Choose One Single Start-->
          <div class="why-choose-one__single">
            <div class="why-choose-one__icon"><img src="<?php echo base_url();?>assets/ro-service/images/shop/08.webp" alt="SMART FLOW SERIES" class="img-fluid"> </div>
            <div class="why-choose-one__content">
              <h3 class="why-choose-one__title">SMART FLOW SERIES</h3>
              <h5>₹ 12,500/-</h5>
              <p><strong>Features</strong></p>
              <ul>
                <li>Smart LED Display</li>
                <li>12 Stages Water Purification</li>
                <li>RO+ZN+CU+ALK+UV</li>
                <li>with TDS Regulator</li>
                <li>16 Ltr. Storage Tank</li>
                <li>Attractive Color Options</li>
                <li>Easy Service, Elegant Look</li>
              </ul><a href="javascript:void(0);"  data-popup="popup-reg" class="thm-btn popup-btn" data-id="Smart Flow Series">Book Now</a> </div>
          </div>
          <!--Why Choose One Single Start--> 
        </div>
        <div class="col-xl-6 col-lg-6 wow fadeInUp" data-wow-delay="100ms"> 
          <!--Why Choose One Single Start-->
          <div class="why-choose-one__single">
            <div class="why-choose-one__icon"><img src="<?php echo base_url();?>assets/ro-service/images/shop/09.webp" alt="KARA GRAND SERIES 7001" class="img-fluid"> </div>
            <div class="why-choose-one__content">
              <h3 class="why-choose-one__title">KARA GRAND SERIES 7001</h3>
              <h5>₹ 12,500/-</h5>
              <p><strong>Features</strong></p>
              <ul>
                <li>Smart LED Display</li>
                <li>12 Stages Water Purification</li>
                <li>RO+ZN+CU+ALK+UV</li>
                <li>with TDS Regulator</li>
                <li>16 Ltr. Storage Tank</li>
                <li>Attractive Color Options</li>
                <li>Easy Service, Elegant Look</li>
              </ul><a href="javascript:void(0);"  data-popup="popup-reg" class="thm-btn popup-btn"  data-id="Kara Grand Series 7001">Book Now</a> </div>
          </div>
          <!--Why Choose One Single Start--> 
        </div>
      </div>
    </div>
  </section>
  <!--Contact Two Start-->
  <section class="contact-two">
    <div class="contact-two-bg jarallax" data-jarallax data-speed="0.2" data-imgPosition="50% 0%"
                style="background-image: url(<?php echo base_url();?>assets/ro-service/images/backgrounds/backgeround_con.webp);"></div>
    <div class="container">
      <div class="contact-two__inner">
        <div class="section-title section-title--two text-center"> <span class="section-title__tagline">Contact Us</span>
          <!--<h2 class="section-title__title">Get support for your problem</h2>-->
          
        </div>
        <div class="contact-two__details-box">
          <ul class="list-unstyled contact-two__details">
            <li>
              <div class="icon"> <span class="fa fa-envelope"></span> </div>
              <div class="content"> <span>Send us an email</span>
                <p><a href="mailto:info@karaaqua.com">info@karaaqua.com</a></p>
              </div>
            </li>
            <li>
              <div class="icon"> <span class="fa fa-phone"></span> </div>
              <div class="content"> <span>Toll Free Number</span>
                <p><a href="tel:9220241010">9220241010</a></p>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </section>
  <!--Contact Two  End--> 
  <!--Why Choose One End-->
  
  <section class="services-one">
    <div class="container"> 
      <!-- Slider main container -->
      <div class="section-title section-title--two text-center"> <span class="section-title__tagline">OUR Products</span>
        <h2 class="section-title__title">We Provide Wide-range of Products</h2>
      </div>
      <div class="swiper-product swiper-container"> 
        <!-- Additional required wrapper -->
        <div class="swiper-wrapper">
              <div class="swiper-slide">
            <div class="Pro_card">
              <div class="pro_img"><img src="<?php echo base_url();?>assets/ro-service/images/shop/Commercial-Ro-Plant.jpg" alt="Commercial Ro Plant"></div>
              <div class="Pro_con">
                <h3>Commercial Ro Plant</h3>
                <p>Kara Aqua Commercial RO Plant is the smart choice for industries and businesses that need high-quality purified water every day....</p>
                <a href="javascript:void(0);"  data-popup="popup-reg" class="thm-btn popup-btn" data-id="Commercial Ro Plant">Book Now </a> </div>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="Pro_card">
              <div class="pro_img"><img src="<?php echo base_url();?>assets/ro-service/images/shop/S-001.jpg" alt="Domestic Water Softener"></div>
              <div class="Pro_con">
                <h3>Domestic Water Softener</h3>
                <p>Kara Aqua Domestic Water Softener is the perfect solution. This 25 LPH RO plant gives you 250 to 400 liters... </p><a href="javascript:void(0);"  data-popup="popup-reg" class="thm-btn popup-btn" data-id="Domestic Water Softener">Book Now </a> </div>
            </div>
          </div>
      
          <div class="swiper-slide">
            <div class="Pro_card">
              <div class="pro_img"><img src="<?php echo base_url();?>assets/ro-service/images/shop/S-003.jpg" alt="Bottling Plant"></div>
              <div class="Pro_con">
                <h3>Bottling Plant</h3>
                <p>Kara Aqua Bottling Plant provides advanced solutions for the beverage industry, ensuring efficient and high-quality production.</p><a href="javascript:void(0);"  data-popup="popup-reg" class="thm-btn popup-btn" data-id="Bottling Plant">Book Now </a> </div>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="Pro_card">
              <div class="pro_img"><img src="<?php echo base_url();?>assets/ro-service/images/shop/S-004.jpg" alt="Chiller Plant"></div>
              <div class="Pro_con">
                <h3>Chiller Plant</h3>
                <p>Kara Aqua Chiller Plant provides an efficient cooling solution by removing heat from liquids, ensuring optimal performance... </p><a href="javascript:void(0);"  data-popup="popup-reg" class="thm-btn popup-btn" data-id="Chiller Plant">Book Now </a> </div>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="Pro_card">
              <div class="pro_img"><img src="<?php echo base_url();?>assets/ro-service/images/shop/S-005.jpg" alt="Sewage Treatment Plant (STP)"></div>
              <div class="Pro_con">
                <h3>Sewage Treatment Plant (STP)</h3>
                <p>Kara Aqua Sewage Treatment Plant (STP) offers a comprehensive solution for...</p><a href="javascript:void(0);"  data-popup="popup-reg" class="thm-btn popup-btn" data-id="Sewage Treatment Plant (STP)">Book Now </a> </div>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="Pro_card">
              <div class="pro_img"><img src="<?php echo base_url();?>assets/ro-service/images/shop/S-006.jpg" alt="Activated Carbon Filter"></div>
              <div class="Pro_con">
                <h3>Activated Carbon Filter</h3>
                <p>Kara Aqua Activated Carbon Filter is a specialized filtration system that effectively removes free chlorine...</p><a href="javascript:void(0);"  data-popup="popup-reg" class="thm-btn popup-btn" data-id="Activated Carbon Filter">Book Now </a> </div>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="Pro_card">
              <div class="pro_img"><img src="<?php echo base_url();?>assets/ro-service/images/shop/S-007.jpg" alt="DE-Mineralized (DM) Water Plant"></div>
              <div class="Pro_con">
                <h3>DE-Mineralized (DM) Water Plant</h3>
                <p>Kara Aqua DE-Mineralized (DM) Water Plant uses ion exchange technology to...</p><a href="javascript:void(0);"  data-popup="popup-reg" class="thm-btn popup-btn" data-id="DE-Mineralized (DM) Water Plant">Book Now </a> </div>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="Pro_card">
              <div class="pro_img"><img src="<?php echo base_url();?>assets/ro-service/images/shop/S-008.jpg" alt="Dosing System"></div>
              <div class="Pro_con">
                <h3>Dosing System</h3>
                <p>Kara Aqua Dosing System specializes in advanced chemical dosing and metering pumps...</p><a href="javascript:void(0);"  data-popup="popup-reg" class="thm-btn popup-btn" data-id="Dosing System">Book Now </a> </div>
            </div>
          </div>
              <div class="swiper-slide">
            <div class="Pro_card">
              <div class="pro_img"><img src="<?php echo base_url();?>assets/ro-service/images/shop/S-002.jpg" alt="Industrial RO Plant"></div>
              <div class="Pro_con">
                <h3>Industrial RO Plant</h3>
                <p>Kara Aqua Industrial RO Plant is the ideal choice for industries that require advanced water treatment solutions.</p><a href="javascript:void(0);"  data-popup="popup-reg" class="thm-btn popup-btn" data-id="Industrial RO Plant">Book Now </a> </div>
            </div>
          </div>
        </div>
        
        <!-- If we need navigation buttons -->
        <div class="swiper-button-prev"></div>
        <div class="swiper-button-next"></div>
      </div>
    </div>
  </section>
  
  <!--About Two  End--> 
  <!--Contact One Start-->
  <section class="contact-one contact-three">
    <div class="contact-one-bg jarallax" data-jarallax data-speed="0.2" data-imgPosition="50% 0%"
                style="background-image: url(<?php echo base_url();?>assets/ro-service/images/backgrounds/BG-2.webp);"> </div>
    <div class="container">
      <div class="section-title section-title--two text-center"> <span class="section-title__tagline">Contact Us</span>
        <!--<h2 class="section-title__title">Let Us Know Or Call Us At</h2>-->
       
      </div>
      <div class="contact-one__form-box">
        <form action="p" class="contact-one__form contact-form-validated"
                        novalidate="novalidate">
           <input type="hidden" name="home_page_name" value="RO ON RENT" >
          <div class="row">
            <div class="col-xl-4 col-lg-4">
              <div class="contact-form__input-box">
                <input type="text" placeholder="Your Name*" name="home_name">
                <span class="message" id="msghome_name"></span>
              </div>
            </div>
            
            <div class="col-xl-4 col-lg-4">
              <div class="contact-form__input-box">
                <input type="text" placeholder="Mobile No.*" name="home_mobile">
                <span class="message" id="msghome_mobile"></span>
              </div>
            </div>
            
            <div class="col-xl-4 col-lg-4">
              <div class="contact-form__input-box">
                <textarea name="home_address" placeholder="Enter Address*"></textarea>
                <span class="message" id="msghome_address"></span>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-xl-12 col-lg-12">
              <div class="contact-form__input-box text-message-box">
                <textarea name="home_comment" placeholder="Enter Comment*"></textarea>
                <span class="message" id="msghome_comment"></span>
              </div>
              <div class="contact-form__btn-box">
                <button type="button" id="authenticateHomeEnquiry" class="thm-btn contact-form__btn">Send Message</button>
              </div>
            </div>
          </div>
        </form>
      </div>
    </div>
  </section>
  <!--Contact One End--> 
  <!--FAQ One Start-->
  <section class="faq-one">
    <div class="faq-one-shape-1 shapeMover"
                style="background-image: url(<?php echo base_url();?>assets/ro-service/images/shapes/faq-one-shape.png);"></div>
    <div class="container">
      <div class="row">
        <div class="col-xl-6 col-lg-6">
          <div class="faq-one__left">
            <div class="section-title text-left">
              <h2 class="section-title__title">Why Choose Us?</h2>
            </div>
            <div class="core-services__right">
              <ul class="list-unstyled core-services__list">
                <li><div class="icon"> <span class="icon-checked"></span> </div>
                  <div class="content">
                    <h5>Free Installation</h5>                   
                  </div></li>
				  <li><div class="icon"> <span class="icon-checked"></span> </div>
                  <div class="content">
                    <h5>Free Maintenance</h5>                   
                  </div></li>
				  <li><div class="icon"> <span class="icon-checked"></span> </div>
                  <div class="content">
                    <h5>Doorstep Service within 1 hour</h5>                   
                  </div></li>
				  <li><div class="icon"> <span class="icon-checked"></span> </div>
                  <div class="content">
                    <h5>Skilled Technician</h5>                   
                  </div></li>
				   <li><div class="icon"> <span class="icon-checked"></span> </div>
                  <div class="content">
                    <h5>100% Genuine Spare Parts</h5>                   
                  </div></li>
				  <li><div class="icon"> <span class="icon-checked"></span> </div>
                  <div class="content">
                    <h5> Specialized in all RO Brands</h5>                   
                  </div></li>
          
              </ul>
          </div>
        </div> </div>
        <div class="col-xl-6 col-lg-6">
          <div class="faq-one__right">
			        <div class="section-title text-left">
              <h2 class="section-title__title">FAQ's</h2>
            </div>
            <div class="accrodion-grp" data-grp-name="faq-one-accrodion">
              <div class="accrodion">
                <div class="accrodion-title">
                  <h4>1. What services does Kara Aqua offer?</h4>
                </div>
                <div class="accrodion-content">
                  <div class="inner">
                    <p>We provide a complete range of RO water purifier services, including:</p>
                    <ul>
                      <li>RO on rent (monthly and yearly plans)</li>
                      <li>New RO installations</li>
                      <li>RO repair services (for all major brands)</li>
                      <li>Regular RO maintenance and AMC plans</li>
                    </ul>
                  </div>
                  <!-- /.inner --> 
                </div>
              </div>
              <div class="accrodion">
                <div class="accrodion-title">
                  <h4>2. Which areas in Delhi NCR do you serve?</h4>
                </div>
                <div class="accrodion-content">
                  <div class="inner">
                    <p>We cover every corner of Delhi NCR, including:</p>
                    <ul>
                      <li>Delhi (North, South, East, West)</li>
                      <li>Noida & Greater Noida</li>
                      <li>Ghaziabad</li>
                      <li>Gurgaon</li>
                      <li>Faridabad</li>
                    </ul>
                  </div>
                  <!-- /.inner --> 
                </div>
              </div>
              <div class="accrodion">
                <div class="accrodion-title">
                  <h4>3. Do you provide regular servicing and AMC plans?</h4>
                </div>
                <div class="accrodion-content">
                  <div class="inner">
                    <p>Yes, we do provide AMC Service. Our annual maintenance services include deep cleaning, filter replacements, performance checks, etc. Our Annual Maintenance Contracts (AMCs) are transparent and budget-friendly and reliable.</p>
                  </div>
                  <!-- /.inner --> 
                </div>
              </div>
              <div class="accrodion active">
                <div class="accrodion-title">
                  <h4>4. I bought an RO online. Can you install it?</h4>
                </div>
                <div class="accrodion-content">
                  <div class="inner">
                    <p>Yes, we provide New RO installation service to all brands. No matter you bought it from Amazon, Flipkart, a local shop, or any brand, our skilled technician will provide doorstep service within 1 hour. </p>
                  </div>
                  <!-- /.inner --> 
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--FAQ One End--> 
  <section class="testimonal-two" style="background-color: var(--fixnix-primary);">
            <div class="container">
                <div class="section-title section-title--two text-center">
                    <span class="section-title__tagline">TESTIMONIAL</span>
                    <h2 class="section-title__title">Our Customers Review</h2>
                </div>
                
                
                      <div class="swiper-product swiper-container"> 
        <!-- Additional required wrapper -->
        <div class="swiper-wrapper">
             
              <div class="swiper-slide">
            <div class="testimonial-two__sinlge">
                            <div class="testimonial-two__sinlge-inner">
                                <div class="testimonial-two__quote">
                                    <span class="icon-quote"></span>
                                </div>
                                <p class="testimonial-two__text">I'm thoroughly impressed with Kara Aqua Service! Their RO water quality is exceptional - clean, fresh, and perfect for drinking. The service was excellent, with prompt delivery and setup. The staff were friendly, courteous, and very helpful. Highly recommend Kara Aqua Service for their great products and outstanding customer service.</p>
                                <div class="testimonial-two__info">
                                    <div class="testimonial-two__client-img">
                                        <img src="assets/images/testimonial/testimonial-2-1.jpg" alt="">
                                    </div>
                                    <div class="testimonial-two__content">
                                        <h3 class="testimonial-two__client-name">Ritu kataria</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
          </div>
                              <div class="swiper-slide">
            <div class="testimonial-two__sinlge">
                            <div class="testimonial-two__sinlge-inner">
                                <div class="testimonial-two__quote">
                                    <span class="icon-quote"></span>
                                </div>
                                <p class="testimonial-two__text">RO AMC service from Kara Aqua is worth the money. No need to call again and again. They come on time for service and replace filters properly. Best part is, no hidden charges.</p>
                                <div class="testimonial-two__info">
                                    <div class="testimonial-two__client-img">
                                        <img src="assets/images/testimonial/testimonial-2-1.jpg" alt="">
                                    </div>
                                    <div class="testimonial-two__content">
                                        <h3 class="testimonial-two__client-name">Kapil Singh</h3>
                                       
                                    </div>
                                </div>
                            </div>
                        </div>
          </div>
                                 <div class="swiper-slide">
            <div class="testimonial-two__sinlge">
                            <div class="testimonial-two__sinlge-inner">
                                <div class="testimonial-two__quote">
                                    <span class="icon-quote"></span>
                                </div>
                                <p class="testimonial-two__text">  I'm extremely happy with the service and product quality from Kara Aqua Guard! The water purifier works flawlessly and delivers crystal clear, great-tasting water that feels safe and refreshing. The installation was smooth and timely, and the technician was polite, knowledgeable, and helpful in answering all my questions.</p>
                                <div class="testimonial-two__info">
                                    <div class="testimonial-two__client-img">
                                        <img src="assets/images/testimonial/testimonial-2-1.jpg" alt="">
                                    </div>
                                    <div class="testimonial-two__content">
                                        <h3 class="testimonial-two__client-name">Alka Chopra</h3>
                                       
                                    </div>
                                </div>
                            </div>
                        </div></div>
                                        <div class="swiper-slide">
            <div class="testimonial-two__sinlge">
                            <div class="testimonial-two__sinlge-inner">
                                <div class="testimonial-two__quote">
                                    <span class="icon-quote"></span>
                                </div>
                                <p class="testimonial-two__text"> Hi, Kara Aqua provides the best RO on rent in Delhi NCR. I bought a RO from KARA aqua on a very affordable monthly rent and it’s working very well.The RO installation guy was humble and gave detailed information on working of RO. KARA Aqua Thanks for good services!!!</p>
                                <div class="testimonial-two__info">
                                    <div class="testimonial-two__client-img">
                                        <img src="assets/images/testimonial/testimonial-2-1.jpg" alt="">
                                    </div>
                                    <div class="testimonial-two__content">
                                        <h3 class="testimonial-two__client-name">Nikhil Malik</h3>
                                       
                                    </div>
                                </div>
                            </div>
                        </div></div>
                        
                        


              </div>
          </div>      
                
              
                
                
          
            </div>
        </section>
  <!--Site Footer Start-->
  <footer class="site-footer site-footer-two">
    <div class="site-footer-shape-1 float-bob-y-2"
                style="background-image: url(<?php echo base_url();?>assets/ro-service/images/shapes/site-footer-shape-1.png);"></div>
    <div class="site-footer__top">
      <div class="container">
        <div class="row">
          <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="100ms">
            <div class="footer-widget__column footer-widget__about">
              <div class="footer-widget__logo"> <a href="#"><img src="<?php echo base_url();?>assets/ro-service/images/kara-logo.webp" alt=""></a> </div>
              <div class="footer-widget__about-text-box">
                <p class="footer-widget__about-text">Kara Water Systems is dedicated to providing accessible, pure, and healthy drinking water through innovative air-to-water technology.</p>
              </div>
            </div>
          </div>
          <div class="col-xl-2 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="200ms">
            <div class="footer-widget__column footer-widget__links">
              <div class="footer-widget__title-box">
                <h3 class="footer-widget__title">Quick Links</h3>
              </div>
              <ul class="footer-widget__Explore-list list-unstyled">
                <li><a href="<?php echo base_url();?>">Home</a></li>
                <li><a href="<?php echo base_url("about-us");?>">About Us</a></li>
                <li><a href="<?php echo base_url("service");?>">Services</a></li>
                <li><a href="<?php echo base_url("products");?>">Products</a></li>
                <li><a href="<?php echo base_url("contact-us");?>">Contact Us</a></li>
              </ul>
            </div>
          </div>
          <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="300ms">
            <div class="footer-widget__column footer-widget__services">
              <div class="footer-widget__title-box">
                <h3 class="footer-widget__title">Our Services</h3>
              </div>
              <ul class="footer-widget__services-list list-unstyled">
                <li><a href="#">Rent an RO at Just 399/-</a></li>
                <li><a href="#">RO Repair Service at Just 200/-</a></li>
                <li><a href="#">RO Maintenance (AMC) at 399/-</a></li>
                <li><a href="#">New RO Installation Service</a></li>
              </ul>
            </div>
          </div>
          <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="400ms">
            <div class="footer-widget__column footer-widget__Contact">
              <div class="footer-widget__title-box">
                <h3 class="footer-widget__title">Contact Us</h3>
              </div>
              <ul class="footer-widget__Contact-list list-unstyled">
                <li>
                  <div class="icon"> <span class="fas fa-map"></span> </div>
                  <div class="text">
                    <p> Guru Angad Nagar West, Laxmi Nagar, Delhi, 110092</p>
                  </div>
                </li>
                <li>
                  <div class="icon"> <span class="fas fa-headphones"></span> </div>
                  <div class="text">
                    <p> <a href="tel:9220241010">+91 9220241010</a> <a href="tel:9220241010">+91 9220231010</a> </p>
                  </div>
                </li>
                <li>
                  <div class="icon"> <span class="fas fa-envelope"></span> </div>
                  <div class="text">
                    <p> <a href="mailto:info@karaaqua.com">info@karaaqua.com</a> </p>
                  </div>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="site-footer__bottom">
      <div class="container">
        <div class="site-footer__bottom-inner">
          <p class="site-footer__bottom-text">© 2025 Copyright by Kara Aqua <a href="https://www.coderworldlabs.com/" target="_blank">CoderWorld Labs</a></p>
        </div>
      </div>
    </div>
  </footer>
  <!--Site Footer End--></div>
<!-- /.page-wrapper -->

<div class="mobile-nav__wrapper">
  <div class="mobile-nav__overlay mobile-nav__toggler"></div>
  <!-- /.mobile-nav__overlay -->
  <div class="mobile-nav__content"> <span class="mobile-nav__close mobile-nav__toggler"><i class="fa fa-times"></i></span>
    <div class="logo-box"> <a href="<?php echo base_url();?>" aria-label="logo image"><img src="<?php echo base_url();?>assets/ro-service/images/kara-logo.png" width="143"
                        alt="" /></a> </div>
    <!-- /.logo-box -->
    <div class="mobile-nav__container"></div>
    <!-- /.mobile-nav__container -->
    
    <ul class="mobile-nav__contact list-unstyled">
      <li> <i class="fa fa-envelope"></i> <a href="mailto:info@karaaqua.com">info@karaaqua.com</a> </li>
      <li> <i class="fa fa-phone-alt"></i> <a href="tel:+919220241010">+91 9220241010</a> </li>
    </ul>
    <!-- /.mobile-nav__contact -->
    <div class="mobile-nav__top">
      <div class="mobile-nav__social">
		<a href="https://x.com/karaquaservices" target="_blank"><i class="fab fa-twitter"></i></a>
				<a href="https://www.facebook.com/karaaquaservices/" target="_blank"><i class="fab fa-facebook"></i></a>
				<a href="https://www.youtube.com/@karaaquaservices" target="_blank"><i class="fab fa-youtube"></i></a>
				<a href="https://www.instagram.com/karaaquaservices/" target="_blank"><i class="fab fa-instagram"></i></a> 
				<a href="https://www.linkedin.com/company/karaa-aqua-services/" target="_blank"><i class="fab fa-linkedin-in"></i></a>  </div>
      <!-- /.mobile-nav__social --> 
    </div>
    <!-- /.mobile-nav__top --> 
    
  </div>
  <!-- /.mobile-nav__content --> 
</div>
<!-- /.mobile-nav__wrapper --> 
<div id="popup-reg" class="popup">
  <div class="popup-content">
    <div class="event-header">
      <h6>Feel free to connect with us!</h6>
    </div>
       <form id="send" class="send-form">
            <input type="hidden" name="popup_page_name" value="RO ON RENT">
        <div class="form-group">
          <input type="text" placeholder="Enter name*" id="name" name="popup_name">
          <label for="name">
            <i class="fa fa-user"></i>
          </label>
          <span class="message" id="msgpopup_name"></span>
        </div>
        <div class="form-group">
          <input type="tel" placeholder="Enter mobile*" id="mobile" name="popup_mobile">
          <label for="phone">
            <i class="fa fa-phone"></i>
          </label>
          <span class="message" id="msgpopup_mobile"></span>
        </div>
        
        <div class="form-group">
          <textarea placeholder="Enter address*" name="popup_address"></textarea>
          <label for="text" class="txt">
            <i class="fa fa-location-arrow"></i>
          </label>
          <span class="message" id="msgpopup_address"></span>
        </div>
        
        <div class="form-group">
          <textarea placeholder="Enter comment*" name="popup_comment"></textarea>
          
          <span class="message" id="msgpopup_comment"></span>
        </div>
        <button type="button" id="authenticatePopupEnquiry" class="main-btn-rect" name="text" value="Send">
          <i class="fa fa-paper-plane"></i>Submit</button>
          
      </form>
    <span class="fade-out main-btn-circle">╳</span>
  </div>
</div>
<!-- /.search-popup --><a href="#" data-target="html" class="scroll-to-target scroll-to-top"><i class="icon-right-arrow"></i></a>
<script src="<?php echo base_url();?>assets/ro-service/vendors/jquery/jquery-3.7.1.min.js"></script> 
<script src="<?php echo base_url();?>assets/ro-service/vendors/bootstrap/js/bootstrap.bundle.min.js"></script> 
<script src="<?php echo base_url();?>assets/ro-service/vendors/jquery-magnific-popup/jquery.magnific-popup.min.js"></script> 
<script src="<?php echo base_url();?>assets/ro-service/vendors/jquery-validate/jquery.validate.min.js"></script> 
<script src="<?php echo base_url();?>assets/ro-service/vendors/swiper/swiper.min.js"></script> 
<script src="<?php echo base_url();?>assets/ro-service/vendors/wow/wow.js"></script> 
<!--<script src="<?php echo base_url();?>assets/ro-service/vendors/isotope/isotope.js"></script> -->
<script src="<?php echo base_url();?>assets/ro-service/vendors/jquery-ui/jquery-ui.js"></script> 
<!--<script src="<?php echo base_url();?>assets/ro-service/vendors/nice-select/jquery.nice-select.min.js"></script> -->
<script src="<?php echo base_url();?>assets/ro-service/js/enquiry.js?v=0.3"></script> 
<!-- template js --> 
<script src="<?php echo base_url();?>assets/ro-service/js/fixnix.js"></script> 
<script>
	const swiper = new Swiper('.swiper-product', {
  // Optional parameters
  loop: true,
  centeredSlides: true,
  // Navigation arrows
  navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev',
  },
  breakpoints: {
    // when window width is >= 320px
    768: {
      slidesPerView: 3,
      spaceBetween: 10
    },
    // when window width is >= 480px
    1024: {
      slidesPerView: 3,
      spaceBetween: 10
    },
    // when window width is >= 640px
    1280: {
      slidesPerView: 3,
      spaceBetween: 20
    }
  }
});
	</script>

	<!-- <script>
	$(document).ready(function(){
  $('.popup-btn').click(function(){ 
    var popupBlock = $('#'+$(this).data('popup'));
    popupBlock.addClass('active')
      .find('.fade-out').click(function(){
        popupBlock.css('opacity','0').find('.popup-content').css('margin-top','350px');        
        setTimeout(function(){
          $('.popup').removeClass('active');
          popupBlock.css('opacity','').find('.popup-content').css('margin-top','');
        }, 600);
      });
 });
});
	</script> -->



<script>
$(document).ready(function(){
  $('.popup-btn').click(function(){ 
    var service_name = $(this).data('id'); // Get the data-id from clicked button
    var popupBlock = $('#' + $(this).data('popup'));
    popupBlock.find('input[name="popup_service_name"]').val(service_name);
    popupBlock.addClass('active')
      .find('.fade-out').click(function(){
        popupBlock.css('opacity','0').find('.popup-content').css('margin-top','350px');        
        setTimeout(function(){
          $('.popup').removeClass('active');
          popupBlock.css('opacity','').find('.popup-content').css('margin-top','');
        }, 600);
      });
  });
});
</script>




</body>
</html>