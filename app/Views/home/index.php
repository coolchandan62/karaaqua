<div class="stricky-header stricked-menu main-menu main-menu-two">
    <div class="sticky-header__content"></div>
</div>
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
                    <?php if($bannerList){
                        foreach($bannerList as $banner){?>
                    <div class="swiper-slide">
                        <div class="image-layer-two"> <img
                                src="<?=base_url("assets/uploads/banner/".$banner['image']);?>"> </div>
                    </div>
                    <?php }}?>
                    <!-- <div class="swiper-slide">
                        <div class="image-layer-two"> <img
                                src="<?=base_url()?>assets/home/images/backgrounds/ban-new-2.jpg"> </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="image-layer-two"> <img
                                src="<?=base_url()?>assets/home/images/backgrounds/ban-new-3.jpg"> </div>
                    </div> -->
                </div>
                <div class="main-slider-two__nav">
                    <div class="swiper-button-prev" id="main-slider__swiper-button-next"> <i
                            class="icon-left-arrow"></i> </div>
                    <div class="swiper-button-next" id="main-slider__swiper-button-prev"> <i
                            class="icon-right-arrow"></i> </div>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="popup-content New_banner_form">
                <div class="event-header">
                    <h6>Feel free to<br>
                        connect with us!</h6>
                </div>
                <form id="send" class="send-form">
                    <input type="hidden" name="contact_page_name" value="Home Page">
                    <input type="hidden" name="contact_service_name" value="Banner">
                    <div class="form-group">
                        <input type="text" placeholder="Enter name*" id="name" name="contact_name">
                        <label for="name"> <i class="fa fa-user"></i> </label>
                        <span class="message" id="msgcontact_name"></span>
                    </div>
                    <div class="form-group">
                        <input type="tel" placeholder="Enter mobile*" id="mobile" name="contact_mobile">
                        <label for="phone"> <i class="fa fa-phone-alt"></i> </label>
                        <span class="message" id="msgcontact_mobile"></span>
                    </div>

                    <div class="form-group">
                        <textarea placeholder="Enter address*" name="contact_address"></textarea>
                        <label for="text" class="txt"> <i class="fa fa-location-arrow"></i> </label>
                        <span class="message" id="msgcontact_address"></span>
                    </div>

                    <div class="form-group">
                        <textarea type="contact_comment" placeholder="Enter Comment*" id="mail"
                            name="contact_comment"></textarea>
                        <label for="mail"> <i class="fa fa-comments" aria-hidden="true"></i> </label>
                        <span class="message" id="msgcontact_comment"></span>
                    </div>
                    <button type="button" id="authenticateContactEnquiry" class="main-btn-rect" name="text"
                        value="Send"> <i class="fa fa-paper-plane"></i>Submit</button>
                </form>

            </div>
        </div>
    </div>
</section>
<section class="experience-one experience-two">
    <div class="experience-two-shape-1 float-bob-y"
        style="background-image: url(<?=base_url()?>assets/home/images/shapes/experience-two-shape-1.jpg);"></div>
    <div class="container">
        <div class="section-title text-center"> <span class="section-title__tagline">About Us</span>
            <h2 class="section-title__title">We Have More Than <strong>10 Years Experience in RO Service</strong>
                Business both for Domestic and Commercial </h2>
        </div>
        <div class="row">
            <div class="col-xl-3 col-lg-3 wow fadeInLeft" data-wow-delay="100ms"> <a href="javascript:void(0);"
                    data-popup="popup-reg" class=" popup-btn" data-id2="Home Page" data-id="Rent an RO At Just ₹399/-">
                    <div class="experience-one__single">
                        <div class="experience-one__icon"> <img src="<?=base_url()?>assets/home/images/filter.webp"
                                alt="Rent an RO  at just 399"> </div>
                        <div class="experience-one__content">
                            <h3 class="experience-one__title">Rent an RO At <br>
                                <strong>Just ₹399/-</strong>
                            </h3>
                            <p class="experience-one__text">Rent Kara Aqua RO Water PurifierJust at 399/- Per Month </p>
                            <em>Book Now</em>
                        </div>
                    </div>
                </a> </div>
            <div class="col-xl-3 col-lg-3 wow fadeInUp" data-wow-delay="200ms"> <a href="javascript:void(0);"
                    data-popup="popup-reg" class=" popup-btn" data-id2="Home Page"
                    data-id="RO Repair Service At Just ₹199/-">
                    <div class="experience-one__single">
                        <div class="experience-one__icon"> <img src="<?=base_url()?>assets/home/images/mechanic.webp"
                                alt="Rent an RO  at just 399"> </div>
                        <div class="experience-one__content">
                            <h3 class="experience-one__title">RO Repair Service At <br>
                                <strong>just ₹199/-</strong>
                            </h3>
                            <p class="experience-one__text">Deals in RO Repair Service for all brand anywhere within
                                Delhi NCR </p>
                            <em>Book Now</em>
                        </div>
                    </div>
                </a> </div>
            <div class="col-xl-3 col-lg-3 wow fadeInRight" data-wow-delay="300ms"> <a href="javascript:void(0);"
                    data-popup="popup-reg" class=" popup-btn" data-id2="Home Page"
                    data-id="RO Maintenance (AMC) At just ₹3500/- yearly">
                    <div class="experience-one__single">
                        <div class="experience-one__icon"> <img src="<?=base_url()?>assets/home/images/maintenance.webp"
                                alt="Rent an RO  at just 399"> </div>
                        <div class="experience-one__content">
                            <h3 class="experience-one__title">RO Maintenance (AMC) At<br>
                                <strong>just ₹3500/- yearly</strong>
                            </h3>
                            <p class="experience-one__text">Get Annual Maintenance RO Services at your doorstep with
                                expert technicians. </p>
                            <em>Book Now</em>
                        </div>
                    </div>
                </a> </div>
            <div class="col-xl-3 col-lg-3 wow fadeInRight" data-wow-delay="300ms"> <a href="javascript:void(0);"
                    data-popup="popup-reg" class=" popup-btn" data-id2="Home Page"
                    data-id="RO Installation At Just ₹500/-">
                    <div class="experience-one__single">
                        <div class="experience-one__icon"> <img src="<?=base_url()?>assets/home/images/energy.webp"
                                alt="Rent an RO  at just 399"> </div>
                        <div class="experience-one__content">
                            <h3 class="experience-one__title">RO Installation At <br>
                                <strong>Just ₹500/-</strong>
                            </h3>
                            <p class="experience-one__text">Deals in New RO Installation Service for all brand anywhere
                                within Delhi NCR </p>
                            <em>Book Now</em>
                        </div>
                    </div>
                </a> </div>
        </div>
    </div>
</section>

<section class="welcome-one">
    <div class="welcome-one__bg"
        style="background-image: url(https://www.karaaqua.com/assets/ro-service/images/backgrounds/welcome-one-bg.jpg);">
    </div>
    <div class="container">
        <div class="row">
            <div class="col-xl-6 col-lg-6">
                <div class="welcome-one__left">
                    <div class="section-title text-left"> <span class="section-title__tagline"><?= $home['service_heading']?></span>
                        <h2 class="section-title__title"><strong><?= $home['service_content']?></strong></h2>
                    </div>
                    <p class="welcome-one__text-1"><?= $home['about_heading']?></p>
                    <?= $home['about_description'];?>
                    <div class="welcome-one__btn-box"> <a href="javascript:void(0);" data-popup="popup-reg"
                            class=" popup-btn welcome-one__btn thm-btn" data-id2="Home Page" data-id="About Us">Contact
                            Us</a> </div>
                </div>
            </div>
            <div class="col-xl-6 col-lg-6">
                <div class="welcome-one__right">
                    <div class="welcome-one__right-img wow fadeInRight animated" id="welcomeImgWrapper"
                        data-wow-delay="100ms" data-wow-duration="2500ms"
                        style="visibility: visible; animation-duration: 2500ms; animation-delay: 100ms; animation-name: fadeInRight;">

                        <!-- Image -->
                        <img src="https://www.karaaqua.com/assets/ro-service/images/About.webp" alt="" id="welcomeImage"
                            style="width: 100%; height: auto; display: block;">

                        <!-- Video Icon -->
                        <div class="welcome-one__video-link">
                            <a href="#"
                                onclick="playInlineVideo('https://www.karaaqua.com/assets/ro-service/images/kara_video.mp4'); return false;">
                                <div class="welcome-one__video-icon">
                                    <span class="fa fa-play"></span>
                                    <i class="ripple"></i>
                                </div>
                            </a>
                        </div>

                        <!-- Inline Video Container (will show dynamically) -->
                        <div id="inlineVideoContainer">
                            <video id="inlineVideo" controls autoplay>
                                <source src="" type="video/mp4">
                                Your browser does not support the video tag.
                            </video>
                            <button class="close-btn" onclick="closeInlineVideo()">✖</button>
                        </div>

                    </div>
                </div>
            </div>




        </div>
    </div>
</section>
<section id="hotels" class="hotels">
    <div class="container">
        <div class="row gy-4  d-flex justify-content-center">
            <div class="col-lg-4 col-md-4 col-12 aos-init aos-animate" data-aos="fade-up" data-aos-delay="100">
                <div class="card h-100 service-item ">
                    <div class="card-img"> <img src="<?=base_url()?>assets/home/images/about/1.jpg" alt="kara-aqua"
                            class="img-fluid"> </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-12 aos-init aos-animate" data-aos="fade-up" data-aos-delay="100">
                <div class="card h-100 service-item ">
                    <div class="card-img"> <img src="<?=base_url()?>assets/home/images/about/2.jpg" alt="kara-aqua"
                            class="img-fluid"> </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-12 aos-init aos-animate" data-aos="fade-up" data-aos-delay="100">
                <div class="card h-100 service-item ">
                    <div class="card-img"> <img src="<?=base_url()?>assets/home/images/about/3.jpg" alt="kara-aqua"
                            class="img-fluid"> </div>
                </div>
            </div>

        </div>
    </div>
</section>

<section>
 <div class="container" >
    <div class="hero-banner-desktop">

        <div class="image-content">
            <img style="margin-right:90px"
                src="assets/home/images/introducing.png" width="100%" height="300px">
        </div>
        <div class="header22">
            <!--Waves Container-->
            <div>
                <svg class="waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                    viewBox="0 24 150 28" preserveAspectRatio="none" shape-rendering="auto">
                    <defs>
                        <path id="gentle-wave"
                            d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z" />
                    </defs>
                    <g class="parallax">
                        <use xlink:href="#gentle-wave" x="48" y="0" fill="rgba(255,255,255,0.7" />
                        <use xlink:href="#gentle-wave" x="48" y="3" fill="rgba(255,255,255,0.5)" />
                        <use xlink:href="#gentle-wave" x="48" y="5" fill="rgba(255,255,255,0.3)" />
                        <use xlink:href="#gentle-wave" x="48" y="7" fill="#fff" />
                    </g>
                </svg>
            </div>
            <!--Waves end-->

        </div>

    </div>
</div>
</section>
<section class="why-choose-one">
    <div class="about-one__bg float-bob-y"
        style="background-image: url(<?=base_url()?>assets/home/images/backgrounds/about-one-bg-img-1.jpg);"> </div>
    <div class="container">
        <div class="section-title section-title--two text-center"> <span class="section-title__tagline">OUR
                Products</span>
            <h2 class="section-title__title">BUY PREMIUM KARA AQUA <strong>DOMESTIC RO </strong>NEW LAUNCH SERIES</h2>
        </div>
        <div class="row">

            <?php
      if($domesticproductList){
      foreach($domesticproductList as $domesticproduct){?>
            <div class="col-xl-6 col-lg-6 wow fadeInUp" data-wow-delay="100ms">
                <div class="why-choose-one__single">
                    <div class="why-choose-one__icon"><img
                            src="<?= base_url("assets/uploads/product/".$domesticproduct['thumb_image']);?>"
                            alt="KARA AQUALINE SERIES 1003" class="img-fluid"> </div>
                    <div class="why-choose-one__content">
                        <h3 class="why-choose-one__title"><?=$domesticproduct['heading']?></h3>
                        <h5>₹ <?=$domesticproduct['price']?>/-</h5>
                        <p><strong>Features</strong></p>
                        <ul>
                            <?=$domesticproduct['feature']?>
                        </ul>
                        <a href="<?= base_url();?>product/<?= $domesticproduct['heading_slug'];?>"
                            class="thm-btn popup-btn" data-id2="Home Page"
                            data-id="<?=$domesticproduct['heading']?>">Read More</a>
                    </div>
                </div>
            </div>
            <?php } }?>


        </div>
    </div>
</section>
<section class="contact-two comm">
    <div class="contact-two-bg jarallax" data-jarallax data-speed="0.2" data-imgPosition="50% 0%"
        style="background-image: url('<?=base_url()?>assets/home/images/products/comm-bg.webp');"></div>
    <div class="container">
        <div class="section-title section-title--two text-center">
            <span class="section-title__tagline">Commercial Products</span>
            <h2 class="section-title__title text-white">Commercial RO Models For Every Need</h2>
        </div>
        <div class="swiper-product swiper-container">
            <div class="swiper-wrapper">



                <div class="swiper-slide">
                    <div class="card h-100 service-item ">
                        <div class="card-img"> <img src="<?=base_url()?>assets/home/images/products/comm-1.webp" alt=""
                                class="img-fluid"> </div>
                        <div class="book-name">
                            <h4><a href="#" class="stretched-link">25 & 50 LPH RO Plant</a></h4>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide">
                    <div class="card h-100 service-item ">
                        <div class="card-img"> <img src="<?=base_url()?>assets/home/images/products/comm-3.webp" alt=""
                                class="img-fluid"> </div>
                        <div class="book-name">
                            <h4><a href="#" class="stretched-link">100 LPH RO Plant</a></h4>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide">
                    <div class="card h-100 service-item ">
                        <div class="card-img"> <img src="<?=base_url()?>assets/home/images/products/comm-4.webp" alt=""
                                class="img-fluid"> </div>
                        <div class="book-name">
                            <h4><a href="#" class="stretched-link">500 LPH RO Plant</a></h4>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide">
                    <div class="card h-100 service-item ">
                        <div class="card-img"> <img src="<?=base_url()?>assets/home/images/products/comm-5.webp" alt=""
                                class="img-fluid"> </div>
                        <div class="book-name">
                            <h4><a href="#" class="stretched-link">1000 LPH RO Plant</a></h4>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>
        </div>
    </div>
</section>
<section class="services-one">
    <div class="container">
        <div class="section-title section-title--two text-center"> <span class="section-title__tagline">OUR
                Products</span>
            <h2 class="section-title__title">We Provide Wide-range of Products</h2>
        </div>
        <div class="swiper-product swiper-container">
            <div class="swiper-wrapper">


                <?php
        if($commercialproductList){
         foreach($commercialproductList as $commercial){?>
                <div class="swiper-slide">
                    <div class="Pro_card">
                        <div class="pro_img"><img
                                src="<?= base_url("assets/uploads/product/".$commercial['thumb_image']);?>"
                                alt="Commercial Ro Plant"></div>
                        <div class="Pro_con">
                            <h3><?=$commercial['heading']?></h3>
                            <p>
                                <?php 
    $words = explode(' ', strip_tags($commercial['short_description']));
    $short = implode(' ', array_slice($words, 0, 20));
    echo $short . (count($words) > 20 ? '...' : '');
    ?>
                            </p>
                            <a href="<?= base_url();?>product/<?= $commercial['heading_slug'];?>" class="thm-btn">Read
                                More </a>
                        </div>
                    </div>
                </div>
                <?php } }?>

            </div>
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>
        </div>
    </div>
</section>
<section class="contact-two">
    <div class="contact-two-bg jarallax" data-jarallax="" data-speed="0.2" data-imgposition="50% 0%"
        style="background-image: url(https://www.karaaqua.com/assets/ro-service/images/backgrounds/backgeround_con.webp);">
    </div>
    <div class="container">
        <div class="contact-two__inner">
            <div class="section-title section-title--two text-center"> <span class="section-title__tagline">Contact
                    Us</span>
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
                        <div class="icon"> <span class="fa fa-phone-alt"></span> </div>
                        <div class="content"> <span>Toll Free Number</span>
                            <p><a href="tel:9220241010">9220241010</a></p>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>
<section class="faq-one">
    <div class="faq-one-shape-1 shapeMover"
        style="background-image: url(<?=base_url()?>assets/home/images/shapes/faq-one-shape.png);"></div>
    <div class="container">
        <div class="row">
            <div class="col-xl-6 col-lg-6">
                <div class="faq-one__left">
                    <div class="section-title text-left">
                        <h2 class="section-title__title">Why Choose Us?</h2>
                    </div>
                    <div class="core-services__right">
                        <ul class="list-unstyled core-services__list">
                            <li>
                                <div class="icon"> <span class="icon-checked"></span> </div>
                                <div class="content">
                                    <h5>Free Installation</h5>
                                </div>
                            </li>
                            <li>
                                <div class="icon"> <span class="icon-checked"></span> </div>
                                <div class="content">
                                    <h5>Free Maintenance</h5>
                                </div>
                            </li>
                            <li>
                                <div class="icon"> <span class="icon-checked"></span> </div>
                                <div class="content">
                                    <h5>Doorstep Service within 1 hour</h5>
                                </div>
                            </li>
                            <li>
                                <div class="icon"> <span class="icon-checked"></span> </div>
                                <div class="content">
                                    <h5>Skilled Technician</h5>
                                </div>
                            </li>
                            <li>
                                <div class="icon"> <span class="icon-checked"></span> </div>
                                <div class="content">
                                    <h5>100% Genuine Spare Parts</h5>
                                </div>
                            </li>
                            <li>
                                <div class="icon"> <span class="icon-checked"></span> </div>
                                <div class="content">
                                    <h5> Specialized in all RO Brands</h5>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
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
                            </div>
                        </div>
                        <div class="accrodion">
                            <div class="accrodion-title">
                                <h4>3. Do you provide regular servicing and AMC plans?</h4>
                            </div>
                            <div class="accrodion-content">
                                <div class="inner">
                                    <p>Yes, we do provide AMC Service. Our annual maintenance services include deep
                                        cleaning, filter replacements, performance checks, etc. Our Annual Maintenance
                                        Contracts (AMCs) are transparent and budget-friendly and reliable.</p>
                                </div>
                            </div>
                        </div>
                        <div class="accrodion active">
                            <div class="accrodion-title">
                                <h4>4. I bought an RO online. Can you install it?</h4>
                            </div>
                            <div class="accrodion-content">
                                <div class="inner">
                                    <p>Yes, we provide New RO installation service to all brands. No matter you bought
                                        it from Amazon, Flipkart, a local shop, or any brand, our skilled technician
                                        will provide doorstep service within 1 hour. </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="testimonal-two" style="background-color: var(--fixnix-primary);">
    <div class="container">
        <div class="section-title section-title--two text-center"> <span
                class="section-title__tagline">TESTIMONIAL</span>
            <h2 class="section-title__title">Our Customers Review</h2>
        </div>
        <div class="swiper-product swiper-container">
            <div class="swiper-wrapper">
                <?php if($testimonialList){
                    foreach($testimonialList as $testimonial){?>
                <div class="swiper-slide">
                    <div class="testimonial-two__sinlge">
                        <div class="testimonial-two__sinlge-inner">
                            <div class="testimonial-two__quote"> <span class="icon-quote"></span> </div>
                            <?= $testimonial['content'];?>
                            <div class="testimonial-two__info">
                                <div class="testimonial-two__client-img"> <img
                                        src="<?=base_url("assets/uploads/testimonial/".$testimonial['image']);?>" alt="kara"> </div>
                                <div class="testimonial-two__content">
                                    <h3 class="testimonial-two__client-name"><?= $testimonial['name'];?></h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php }}?>
                <!-- <div class="swiper-slide">
                    <div class="testimonial-two__sinlge">
                        <div class="testimonial-two__sinlge-inner">
                            <div class="testimonial-two__quote"> <span class="icon-quote"></span> </div>
                            <p class="testimonial-two__text">RO AMC service from Kara Aqua is worth the money. No need
                                to call again and again. They come on time for service and replace filters properly.
                                Best part is, no hidden charges.</p>
                            <div class="testimonial-two__info">
                                <div class="testimonial-two__client-img"> <img
                                        src="<?=base_url()?>assets/home/images/user-1.jpg" alt="kara"> </div>
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
                            <div class="testimonial-two__quote"> <span class="icon-quote"></span> </div>
                            <p class="testimonial-two__text"> I'm extremely happy with the service and product quality
                                from Kara Aqua Guard! The water purifier works flawlessly and delivers crystal clear,
                                great-tasting water that feels safe and refreshing. The installation was smooth and
                                timely, and the technician was polite, knowledgeable, and helpful in answering all my
                                questions.</p>
                            <div class="testimonial-two__info">
                                <div class="testimonial-two__client-img"> <img
                                        src="<?=base_url()?>assets/home/images/user-2.jpg" alt="kara"> </div>
                                <div class="testimonial-two__content">
                                    <h3 class="testimonial-two__client-name">Alka Chopra</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="testimonial-two__sinlge">
                        <div class="testimonial-two__sinlge-inner">
                            <div class="testimonial-two__quote"> <span class="icon-quote"></span> </div>
                            <p class="testimonial-two__text"> Hi, Kara Aqua provides the best RO on rent in Delhi NCR. I
                                bought a RO from KARA aqua on a very affordable monthly rent and it’s working very
                                well.The RO installation guy was humble and gave detailed information on working of RO.
                                KARA Aqua Thanks for good services!!!</p>
                            <div class="testimonial-two__info">
                                <div class="testimonial-two__client-img"> <img
                                        src="<?=base_url()?>assets/home/images/user-1.jpg" alt="kara"> </div>
                                <div class="testimonial-two__content">
                                    <h3 class="testimonial-two__client-name">Nikhil Malik</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> -->
            </div>
        </div>
    </div>
</section>
<div class="blog-one">
    <div class="blog-one-shape-1 float-bob-y"
        style="background-image: url(<?=base_url()?>assets/home/images/shapes/blog-one-shape-1.png);"> </div>
    <div class="container">
        <div class="section-title section-title--two text-center"> <span class="section-title__tagline">From Our
                Blog</span>
            <h2 class="section-title__title">News And Articles</h2>
            <p class="section-title__text">Precision Knowledge for Insightful Solutions</p>
        </div>
        <div class="row">

            <?php 
       if($blogList){
        foreach($blogList as $blog){
        ?>

            <div class="col-xl-4 col-lg-4 wow fadeInUp animated" data-wow-delay="100ms"
                style="visibility: visible; animation-delay: 100ms; animation-name: fadeInUp;">
                <div class="blog-one__single">
                    <div class="blog-one__img"> <img src="<?= base_url("assets/uploads/blog/".$blog['thumb_image']);?>"
                            alt="">
                        <div class="blog-one__plus"> <a href="<?=base_url()?>blog/<?=$blog['heading_slug']?>"><i
                                    class="fa fa-plus"></i></a> </div>
                    </div>
                    <div class="blog-one__content">
                        <ul class="blog-one__meta list-unstyled">
                            <li> <a href="<?=base_url()?>blog/<?=$blog['heading_slug']?>"><i
                                        class="fa fa-calendar-alt"></i><?=date('d M, Y', strtotime($blog['blog_date']))?></a>
                            </li>
                            <!-- <li> <a href="<?=base_url()?>blog/<?=$blog['heading_slug']?>"><i class="far fa-comments"></i>02 COMMENTS</a> </li> -->
                        </ul>
                        <h3 class="blog-one__title"><a
                                href="<?=base_url()?>blog/<?=$blog['heading_slug']?>"><?=$blog['heading']?></a></h3>
                        <div class="blog-one__btn-box"> <a href="<?=base_url()?>blog/<?=$blog['heading_slug']?>"
                                class="thm-btn blog-one__btn">Read More</a> </div>
                    </div>
                </div>
            </div>

            <?php }}?>


        </div>
    </div>
</div>



<!-- CSS -->
<style>
#inlineVideoContainer {
    display: none;
    position: relative;
    padding-top: 56.25%;
}

#inlineVideo {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;

}

.close-btn {
    position: absolute;
    top: 10px;
    right: 10px;
    background: rgba(255, 255, 255, 0.8);
    border: none;
    padding: 4px 8px;
    font-size: 14px;
    cursor: pointer;
    z-index: 10;

}

@media (max-width: 600px) {
    .close-btn {
        font-size: 16px;
    }
}

/* Hide image class */
.hide {
    display: none !important;
}
/* product section */
  .blob-btn {
    display: block; /* Allows proper sizing and padding for <a> */
    position: relative;
width:170px;
    padding: 14px 24px; /* Adjusted padding for a smaller button */
    text-align: center;
    text-transform: uppercase;
    color: #102b6e3b;
    font-size: 22px;
    font-weight: bold;
    background-color: white;
    outline: none;
    border: 3px solid #fff;
    border-radius: 36px;
    cursor: pointer; /* Makes it look clickable */
    overflow: hidden;
    transition: color 0.3s; 
   z-index:1;
    text-decoration:none;
    margin-bottom:20px;
    box-shadow: 0 6px 14px rgba(0, 0, 0, 0.15);
  }

  .blob-btn:hover {
    color: #fff; /* Change text color on hover */
  }

  .blob-btn__text {
    position: relative; /* Ensure the text is above the blobs */
    z-index: 1; /* Keeps the text above the blobs */
    transition: 0.06s; /* Add transition for smooth color change */
  }

  .blob-btn__blobs {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    filter: url('#goo');
    overflow: hidden;
    border-radius: 26px;
   
  }

  .blob-btn__blob {
    position: absolute;
  
    width: 25%;
    height: 100%;
    background:#102b6e3b;
    border-radius: 100%;
    transform: translate3d(0, 150%, 0) scale(1.7);
    transition: transform 0.45s;
  }

  .blob-btn__blob:nth-child(1) {
    left: 0%;
    transition-delay: 0s;
  }
  .blob-btn__blob:nth-child(2) {
    left: 30%;
    transition-delay: 0.08s;
  }
  .blob-btn__blob:nth-child(3) {
    left: 60%;
    transition-delay: 0.16s;
  }
  .blob-btn__blob:nth-child(4) {
    left: 90%;
    transition-delay: 0.24s;
  }

  .blob-btn:hover .blob-btn__blob {
    transform: translateZ(0) scale(1.7); /* Blobs rise when hovered */
  }
  .hero-banner-desktop {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 0px 0px 0px 0px; /* Set right padding to 0 */
    background-color: #102b6e3b;
  position:relative;
  height:auto !important
}

.text-content {
    max-width: 50%;
margin-left:auto;
margin-right:auto;
font-family:Poppins
}

.text-content h1 {
    font-size: 46px;
    color: #000;
font-weight:600;
margin-top:0px
}

.text-content p {
    font-size: 26px;
    margin-bottom: 20px;
    color: #000;
font-weight:600;
}

.icon-text {
    display: flex;
    align-items: center;
    font-size: 21px;
    margin-bottom: 10px;
    color: #000;
  
}

.icon-text svg, 
.icon-text img {
    margin-right: 10px;
fill:black;
max-height:40px
}

.image-content img {
        
    height: 100%;
    margin-right: 0; /* Remove any margin on the right */
}

.eyee3 {
max-width:46px !important;
border-radius:8px;
margin-right:11px !important
}

.header22 {
  position:absolute;
  text-align:center;
  background: transparent;
  color:white;
  width:100%;
  left:0;
  
  bottom:0
}

.waves {

  position:relative;
  width: 100%;
  height:12vh;
  margin-bottom:-7px; /*Fix for safari gap*/
  min-height:70px;
  max-height:50px;
}

/* Animation */

.parallax > use {
  animation: move-forever 25s cubic-bezier(.55,.5,.45,.5)     infinite;
}
.parallax > use:nth-child(1) {
  animation-delay: -2s;
  animation-duration: 7s;
}
.parallax > use:nth-child(2) {
  animation-delay: -3s;
  animation-duration: 10s;
}
.parallax > use:nth-child(3) {
  animation-delay: -4s;
  animation-duration: 13s;
}
.parallax > use:nth-child(4) {
  animation-delay: -5s;
  animation-duration: 20s;
}
@keyframes move-forever {
  0% {
   transform: translate3d(-90px,0,0);
  }
  100% { 
    transform: translate3d(85px,0,0);
  }
}
/*Shrinking for mobile*/
@media (max-width: 768px) {
  .waves {
    height:23px;
    min-height:23px;
  }
}

  
  a{
    text-decoration:none
  } 
</style>
<!-- JavaScript -->
<script>
function playInlineVideo(videoUrl) {
    // Hide image
    document.getElementById("welcomeImage").style.display = "none";

    // Show video
    const videoContainer = document.getElementById("inlineVideoContainer");
    const video = document.getElementById("inlineVideo");
    video.src = videoUrl;
    videoContainer.style.display = "block";
    video.play();
}

function closeInlineVideo() {
    const video = document.getElementById("inlineVideo");
    video.pause();
    video.src = "";
    document.getElementById("inlineVideoContainer").style.display = "none";
    document.getElementById("welcomeImage").style.display = "block";
}
</script>