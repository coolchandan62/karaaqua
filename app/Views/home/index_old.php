<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "ProfessionalService",
  "name": "Kara Aqua",
  "image": "https://www.karaaqua.com/assets/uploads/page/1744189894_ee0a59eeba04b7599ae3.jpg",
  "url": "https://www.karaaqua.com",
  "telephone": "18005692666",
  "priceRange": "₹20000+",
  "description": "Kara Aqua is the best RO repairing service provide company in Delhi, Noida, Gurugram. We also provide ro on rent services. Looking for affordable and reliable RO rental, repairing, installation services in Delhi NCR? Connect with us today.",
  "address": {
    "@type": "PostalAddress",
    "streetAddress": "Office number 101, first floor, Jain complex, 46/47",
    "addressLocality": "Guru Angad Nagar West, Laxmi Nagar",
    "addressRegion": "Delhi",
    "postalCode": "110092",
    "addressCountry": "IN"
  },
  "geo": {
    "@type": "GeoCoordinates",
    "latitude": 28.6362211,
    "longitude": 77.2922332
  },
  "openingHoursSpecification": {
    "@type": "OpeningHoursSpecification",
    "dayOfWeek": [
      "Monday",
      "Tuesday",
      "Wednesday",
      "Thursday",
      "Friday",
      "Saturday",
      "Sunday"
    ],
    "opens": "09:00",
    "closes": "18:00"
  },
  "aggregateRating": {
    "@type": "AggregateRating",
    "ratingValue": "5",
    "reviewCount": "600",
    "bestRating": "5",
    "worstRating": "1"
  },
  "sameAs": [
    "https://www.facebook.com/karaaquaservices/",
    "https://x.com/karaquaservices",
    "https://www.youtube.com/@karaaquaservices",
    "https://www.instagram.com/karaaquaservices/",
    "https://www.linkedin.com/company/karaa-aqua-services/",
    "https://www.karaaqua.com/"
  ],
  "areaServed": [
    "Connaught Place",
    "Karol Bagh",
    "Lajpat Nagar",
    "South Extension",
    "Hauz Khas",
    "Saket",
    "Vasant Kunj",
    "Rajouri Garden",
    "Greater Kailash",
    "Dwarka",
    "Janakpuri",
    "Preet Vihar",
    "Rohini",
    "Pitampura",
    "Noida",
    "Gurgaon",
    "Ghaziabad",
    "Indirapuram",
    "Vaishali",
    "Kaushambi",
    "Raj Nagar Extension",
    "Faridabad",
    "Ballabhgarh"
  ],
  "makesOffer": {
    "@type": "Offer",
    "name": "Kara Aqua",
    "description": "Kara Aqua is the best RO repairing service provide company in Delhi, Noida, Gurugram. We also provide ro on rent services. Looking for affordable and reliable RO rental, repairing, installation services in Delhi NCR? Connect with us today.",
    "url": "https://www.karaaqua.com",
    "priceSpecification": {
      "@type": "PriceSpecification",
      "priceCurrency": "INR",
      "value": "20000",
      "minValue": "20000",
      "validFrom": "2025-04-28T00:00:00+00:00"
    }
  },
  "serviceType": [
    "RO Installation Service",
    "Rental RO Service in Delhi NCR",
    "RO Service",
    "RO Repairing",
    "Water purifier repair",
    "RO plant manufacturer",
    "RO Maintenance Service"
  ]
}
</script>
<main id="content" class="site-main">
            <!-- home banner section html start -->
            <section class="home-banner" style="background-image: url(assets/home/img/bg-3.jpg);background-position: center;background-size: cover;background-repeat: no-repeat;">
                <div class="container">
                    <div class="banner-wrapper">
                        <div class="banner-left-detail">
                            <div class="banner-detail banner-section-head-white-info">
                                <h6 class="section-sub-title">
                                Welcome to 
                                </h6>
                                <h1 class="section-title">
                                   <?= $banner['heading'];?>
                                </h1>
                                <p class="banner-info section-paragraph">
                                <?= $banner['content'];?>
                                </p>
                                <a href="<?= base_url();?>about-us" class="button-round-primary btn btn-color">
                                LEARN MORE
                            </a>
                            </div>
                        </div>
                        <div class="banner-right-img">
                            <figure class="banner-img">
                                <img src="<?=base_url("assets/uploads/banner/".$banner['image']);?>" alt="">
                            </figure>
                        </div>
                    </div>
                </div>
            </section>
            <div class="banner-service-section">
                <div class="container">
                    <div class="banner-service-wrapper">
                        <aside class="banner-hire-detail">
                            <figure class="reverse-pipe-icon">
                               <div class="img-icon">
                                <img src="<?=base_url()?>assets/home/img/icons/appliance.png" alt="">
                               </div>
                            </figure>
                            <h5 class="hire-info"><?= $banner['content1'];?></h5>
                        </aside>
                        <aside class="banner-service-content round-border">
                            <figure class="enginer-icon">
                                <i aria-hidden="true" class="icon icon-engineer"></i>
                            </figure>
                            <h5>
                            <?= $banner['content2'];?>
                            </h5>
                            <a href="<?= base_url();?>contact-us" class="button-round-primary hire-btn">
                                HIRE US
                            </a>
                        </aside>
                    </div>
                </div>
            </div>
            <section class="home-aboutus">
                <div class="container">
                    <div class="row">
                      <div class="col-md-6">
                     <div class="about-video">

                     <video width="100%" autoplay controls muted style="border-radius:10px;" >
                                    <source src="<?= base_url();?>assets/home/img/kara_video.mp4" type="video/mp4">
                                    <source src="<?= base_url();?>assets/home/img/kara_video.mp4" type="video/ogg">
                                    
                                  </video>
                     </div>
                      </div>
                      <div class="col-md-6">
                                <div class="about-detail section-head-info">
                                    <h6 class="section-sub-title">
                                        INTRODUCTION OF US
                                    </h6>
                                    <h3 class="section-title">
                                      <?= $home['about_heading'];?></h3>
                                    <p class="section-paragraph">
                                   <?= $home['about_description'];?>
                                    </p>
                                    <a href="<?= base_url();?>about-us" class="button-round-primary section-btn">READ MORE</a>
                                </div>
                            </div>
                    </div>
                    
                </div>
            </section>
            <!-- home section service -->
            <section class="home-service-section">
                <div class="container">
                    <div class="service-detail-wrapper">
                        <div class="section-head">
                            <h6 class="section-sub-title">RO PURIFIER SERVICES</h6>
                            <h3 class="section-title"><?= $home['service_heading'];?></h3>
                        </div>
                        <p class="service-detail-paragraph">
                       <?= $home['service_content'];?>
                        </p>
                    </div>
                    <div class="type-of-service">
                        <?php if($serviceList){
                            $count=1;
                            foreach($serviceList as $service){?>
                        <div class="service-type cursor-default">
                            <a href="<?php if($service['heading_slug']!=""){echo base_url("service/".$service['heading_slug']);}else{echo "javascript:void(0)";}?>" class="service-title">
                                <h5>
                                <?= $service['heading'];?>
                                </h5>
                         
                            <p class="service-info">
                            <?php
                                echo implode(' ', array_slice(explode(' ', strip_tags($service['short_description'])), 0, 20));
                                    ?>

                            </p>
                            <div class="service-img-no d-flex justify-content-between align-items-end">
                                <figure class="service-img">
                                    <img src="<?=base_url("assets/uploads/service/".$service['thumb_image']);?>" alt="">
                                </figure>
                                <h2 class="service-no">0<?= $count++;?>.</h2>
                            </div>
                            <a href="<?php if($service['heading_slug']!=""){echo base_url("service/".$service['heading_slug']);}else{echo "javascript:void(0)";}?>" class="service-type-btn">
                                <i aria-hidden="true" class="fas fa-plus"></i>
                            </a>
                            </a>
                        </div>
                        <?php }}?>
                        
                        <div class="service-notification">
                            <h5 class="notifiy-title">We Are The Best In This RO Service Business Since 2004.</h5>
                            <a href="<?= base_url();?>contact-us" class="button-round-primary">HIRE US NOW</a>
                        </div>
                    </div>
                </div>
            </section>
            <!-- home about us section -->
             
            <section class="commercial-section">
  <div class="container">
    <div class="section-head col-md-8 offset-md-2 text-center">
      <h6 class="section-sub-title">
        Product
      </h6>
      <h3 class="section-title">
        Our Product
      </h3>
    </div>
    <div class="row">
        <?php if($domesticproductList){
            foreach($domesticproductList as $domesticproduct){?>
        <div class="col-sm-2">
            <div class="product-item text-center">
            <figure class="product-image">
                <a href="<?= base_url();?>product/<?= $domesticproduct['heading_slug'];?>">
                <img src="<?= base_url("assets/uploads/product/".$domesticproduct['thumb_image']);?>" alt="">
                </a>
                <span class="onsale">Sale</span>
            </figure>
            <div class="product-content">
                <h5><?= $domesticproduct['heading'];?></h5>
                <div class="product-price">
                <!-- <del>₹?= $domesticproduct['mrp'];?></del>
                <ins>₹<= $domesticproduct['price'];?></ins> -->
                </div>
                <a href="<?= base_url();?>product/<?= $domesticproduct['heading_slug'];?>" class="button-round-primary">Read More</a>
            </div>
            </div>
        </div>
        <?php }}?>
    </div>
  </div>
</section>
            
            <!-- home working process section -->
             
            <section class="home-blog-section">
                <div class="container">
                    <div class="section-head col-md-8 offset-md-2 text-center">
                        <h6 class="section-sub-title">
                        Product
                        </h6>
                        <h3 class="section-title">
                        Our Product
                        </h3>
                    </div>
                    
                    <div class="inner-blog-wrapper">
                    <?php if($productList){
                        foreach($productList as $product){?>
                        <article class="post round-border">
                            <figure class="feature-image">
                                <img src="<?=base_url("assets/uploads/product/".$product['thumb_image']);?>" alt="">
                                <span class="cat-meta">
                                    <a href="<?= base_url();?>product/<?= $product['heading_slug'];?>">Ro Services</a>
                                </span>
                            </figure>
                            <div class="entry-content">
                                <h5 class="blog-title">
                                    <a href="<?= base_url();?>product/<?= $product['heading_slug'];?>"><?= $product['heading'];?>
                                    </a>
                                </h5>
                                <p class="blog-preview">
                                <?= implode(' ', array_slice(explode(' ', strip_tags($product['short_description'])), 0, 20)) . '...'; ?>


                                </p>
                                <a href="<?= base_url();?>product/<?= $product['heading_slug'];?>" class=" section-btn">READ MORE</a>
                            </div>
                        </article>
                        
                        <?php }}?>
                    </div>
                </div>
            </section>
            <section class="home-working-step-section"style="background-image: url(<?= base_url();?>assets/home/img/plumbero-img15.jpg);">>
                <div class="overlay"></div>
                <div class="container">
                    <div class="section-head-white offset-lg-3 col-lg-6 offset-md-2 col-md-8 text-center">
                        <h6 class="section-sub-title">WORK PROCESS</h6>
                        <h3 class="section-title"><?= $home['work_heading'];?></h3>
                    </div>
                    <div class="process-step">
                        <div class="row align-items-center justify-content-center">
                            <div class="col-lg-3 col-md-4 col-sm-6">
                                <div class="phase">
                                    <figure class="phase-icon">
                                        <i aria-hidden="true" class="icon icon-Profile"></i>
                                        <h5 class="phase-no">1</h5>
                                    </figure>
                                    <div class="phase-content">
                                        <h5 class="phase-title">
                                        <?= $home['work_heading1'];?>
                                        </h5>
                                        <p class="phase-info">
                                        <?= $home['work_content1'];?>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-4 col-sm-6">
                                <div class="phase">
                                    <figure class="phase-icon">
                                        <i aria-hidden="true" class="icon icon-Document-Search"></i>
                                        <h5 class="phase-no">2</h5>
                                    </figure>
                                    <div class="phase-content">
                                        <h5 class="phase-title">
                                        <?= $home['work_heading2'];?>
                                        </h5>
                                        <p class="phase-info">
                                        <?= $home['work_content2'];?>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-4 col-sm-6">
                                <div class="phase">
                                    <figure class="phase-icon">
                                        <i aria-hidden="true" class="icon icon-Mechanic"></i>
                                        <h5 class="phase-no">3</h5>
                                    </figure>
                                    <div class="phase-content">
                                        <h5 class="phase-title">
                                        <?= $home['work_heading3'];?>
                                        </h5>
                                        <p class="phase-info">
                                        <?= $home['work_content3'];?> 
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-4 col-sm-6">
                                <div class="phase">
                                    <figure class="phase-icon">
                                        <i aria-hidden="true" class="icon icon-badge"></i>
                                        <h5 class="phase-no">4</h5>
                                    </figure>
                                    <div class="phase-content">
                                        <h5 class="phase-title">
                                        <?= $home['work_heading4'];?>
                                        </h5>
                                        <p class="phase-info">
                                        <?= $home['work_content4'];?>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- home appointment section -->
            <section class="home-appointment-section">
                <div class="container">
                    <div class="reservation-inner ">
                   
                        <figure class="reservation-section">
                            <div class="video-button">
                                <a id="video-container" data-video-id="IUN664s7N-c">
                                    <i aria-hidden="true" class="icon icon-play-button"></i>
                                </a>
                            </div>
                        </figure>
                        <div class="reservation-content">
                            <div class="section-head">
                                <h6 class="section-sub-title">APPLY FOR APPOINTMENT</h6>
                                <h4 class="service-title">Top Rated By Customers & Servicing Firm With 100% Result</h4>
                            </div>
                            <form class="reservation-form row">
                                <input type="hidden" name="a_type" value="3">
                                <div class="col-lg-6 col-md-6 col-sm-6 col-12 px-1 form-group">
                                    <input type="text" name="a_name" id="name" placeholder="Your Name..">
                                    <span class="message" id="msganame"></span>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-12 px-1 form-group">
                                    <input type="email" name="a_email" id="email" placeholder="Your Email Address..">
                                    <span class="message" id="msgaemail"></span>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-12 px-1 form-group">
                                    <input type="text" name="a_subject" id="subject" placeholder="Your Subject..">
                                    <span class="message" id="msgasubject"></span>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-12 px-1 form-group">
                                    <button type="button" class="button-round-primary" id="ApointmentEnquiry">APPLY FOR APOINTMENT</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </section>
              <!-- ----ayua-section----- -->
              <!-- <section class="about-section">
  <div class="container">
    <div class="row clearfix">

     
      <div class="content-column col-md-4 col-sm-12 col-xs-12">
        <div class="inner-column">
          <div class="sec-title">
            <div class="title">Water Treatment Company</div>
            <h2>Kara Aqua </h2>
          </div>
         
        <div class="content-aqua">
        <button type="submit" class="button-round-primary">APPLY FOR APOINTMENT</button>
        </div>
        </div>
      </div>

      <div class="image-column col-md-8 col-sm-12 col-xs-12">
        <div class="inner-column " data-wow-delay="0ms" data-wow-duration="1500ms">
          <div class="image">
            <img src="https://i.ibb.co/vQbkKj7/about.jpg" alt="">
            <div class="overlay-box">
              <div class="year-box"><span class="number">5</span>Years <br> Experience <br> Working</div>
            </div>
          </div>
        </div>
      </div>

    </div>
  </div>
</section> -->
<!-- ---end-aqua-section--- -->
<section class="home-certified-section"style="background-image: url(assets/home/img/bg-2.jpg);background-position: center;background-size: cover;background-repeat: no-repeat;">
                <div class="container">
                    <div class="row">
                        <div class="col-md-4 col-6">
                        <div class="img img-details">
                                <img src="<?= base_url();?>assets/home/img/about/serv-2.png" alt="#">
                            </div>
                        </div>
                        <div class="col-md-8 col-6">
                       
                            <div class="section-head certified-section">
                                <h6 class="section-sub-title">Water Treatment Company</h6>
                                <h3 class="section-title">Kara Aqua</h3>
                                
                            </div>
                            <div class="btn-certified">
                            <button type="submit" class="button-round-primary btn-list">ISO 9001:2015</button> 
                           
                            <button type="submit" class="button-round-primary btn-list">GMP Certified</button> 
                          
                            <button type="submit" class="button-round-primary btn-list">MSME Certified</button> 
                            </div>
                          
                            </div>
                       
                        </div>
                    </div>
            </section>
          
            <!-- home gallay sectin -->
            <section class="home-gallery-section">
                <div class="container">
                    <div class="col-lg-8 offset-lg-2">
                        <div class="section-head text-center">
                            <h6 class="section-sub-title">PORTFOLIO LIST</h6>
                            <h3 class="section-title">
                                Recent Completed Activity
                            </h3>
                        </div>
                    </div>
                    <div class="gallery-container">
                        <div class="gallery-grid">
                            <div class="mix single-gallery gallery-grid-item">
                                <figure class="gallery-img">
                                    <a href="#">
                                        <img src="<?=base_url()?>assets/home/img/portfolia/p-2.jpg" alt="">
                                    </a>
                                </figure>
                            </div>
                            <div class="mix single-gallery gallery-grid-item">
                                <figure class="gallery-img">
                                    <a href="#">
                                        <img src="<?=base_url()?>assets/home/img/portfolia/p-6.jpg" alt="">
                                    </a>
                                </figure>
                            </div>
                            <div class="mix single-gallery gallery-grid-item">
                                <figure class="gallery-img">
                                    <a href="#">
                                        <img src="<?=base_url()?>assets/home/img/portfolia/p-4.jpg" alt="">
                                    </a>
                                </figure>
                            </div>
                            <div class="mix single-gallery gallery-grid-item">
                                <figure class="gallery-img">
                                    <a href="#">
                                        <img src="<?=base_url()?>assets/home/img/portfolia/p-3.jpg" alt="">
                                    </a>
                                </figure>
                            </div>
                            <div class="mix single-gallery gallery-grid-item">
                                <figure class="gallery-img">
                                    <a href="#">
                                        <img src="<?=base_url()?>assets/home/img/portfolia/p-5.jpg" alt="">
                                    </a>
                                </figure>
                            </div>
                            <div class="mix single-gallery gallery-grid-item">
                                <figure class="gallery-img">
                                    <a href="#">
                                        <img src="<?=base_url()?>assets/home/img/portfolia/p-1.jpg" alt="">
                                    </a>
                                </figure>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- home-team-section -->
           
            <!-- <section class="home-team-section">
                <div class="container">
                    <div class="section-head col-md-6 offset-md-3 text-center">
                        <h6 class="section-sub-title">TEAM MEMBERS</h6>
                        <h3 class="section-title">
                            Meet Our Experts
                        </h3>
                    </div>
                    <div class="team-inner-group">
                        <div class="row align-items-center justify-content-center">
                            <div class="col-lg-3 col-md-4 col-sm-6">
                                <div class="team-member">
                                    <figure class="team-img figure-round-border">
                                        <img src="<?=base_url()?>assets/home/img/plumbero-img52.jpg" alt="">
                                    </figure>
                                    <div class="team-detail round-border">
                                        <a href="team-deatil.html" class="team-name">
                                            <h5>George Harry</h5>
                                        </a>
                                        <span class="job-title">HEAD TECHNICIAN</span>
                                        <a href="team-deatil.html" class="team-type-btn">
                                            <i aria-hidden="true" class="fas fa-plus"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-4 col-sm-6">
                                <div class="team-member">
                                    <figure class="team-img figure-round-border">
                                        <img src="<?=base_url()?>assets/home/img/plumbero-img53.jpg" alt="">
                                    </figure>
                                    <div class="team-detail round-border">
                                        <a href="team-deatil.html" class="team-name">
                                            <h5>Jason William</h5>
                                        </a>
                                        <span class="job-title">HEAD TECHNICIAN</span>
                                        <a href="team-deatil.html" class="team-type-btn">
                                            <i aria-hidden="true" class="fas fa-plus"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-4 col-sm-6">
                                <div class="team-member">
                                    <figure class="team-img figure-round-border">
                                        <img src="<?=base_url()?>assets/home/img/plumbero-img54.jpg" alt="">
                                    </figure>
                                    <div class="team-detail round-border">
                                        <a href="team-deatil.html" class="team-name">
                                            <h5>Garry Smith</h5>
                                        </a>
                                        <span class="job-title">HEAD TECHNICIAN</span>
                                        <a href="team-deatil.html" class="team-type-btn">
                                            <i aria-hidden="true" class="fas fa-plus"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-4 col-sm-6">
                                <div class="team-member">
                                    <figure class="team-img figure-round-border">
                                        <img src="<?=base_url()?>assets/home/img/plumbero-img55.jpg" alt="">
                                    </figure>
                                    <div class="team-detail round-border">
                                        <a href="team-deatil.html" class="team-name">
                                            <h5>Sammy Hobbs</h5>
                                        </a>
                                        <span class="job-title">HEAD TECHNICIAN</span>
                                        <a href="team-deatil.html" class="team-type-btn">
                                            <i aria-hidden="true" class="fas fa-plus"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section> -->
            <!-- home testimonial section -->
            <section class="home-testimonials-section"style="background-image: url(assets/home/img/plumbero-img15.jpg);">>
                <div class="overlay"></div>
                <div class="container">
                    <div class="home-testimonial-wrapper">
                        <div class="section-head-white-info">
                            <h6 class="section-sub-title">
                                OUR TESTIMONIAL
                            </h6>
                            <h3 class="section-title">
                                Appreciated By Our Customers
                            </h3>
                            <p class="section-paragraph">
                              I’ve been using Kara’s RO system for over a year now, and I couldn’t be happier! The installation was quick, and the system works flawlessly.
                            </p>
                            <button type="button" class="button-round-secondary section-btn">
                                VIEW ALL REVIEWS
                        </button>
                        </div>
                        <div class="comment-inner">
                            <?php if($testimonialList){
                                foreach($testimonialList as $key=> $testimonial){
                                   if($key%2==0){?>
                            <div class="comment-group left-group">
                                <div class="comment-content round-border">
                                    <p class="comment-detail">
                                    <?= $testimonial['content'];?>
                                    </p>
                                    <div class="author-detail">
                                        <figure class="author-img">
                                        <img src="<?=base_url("assets/uploads/testimonial/".$testimonial['image']);?>" alt="">
                                        </figure>
                                        <div class="author-info">
                                            <h5 class="author-name"><?= $testimonial['name'];?></h5>
                                            <span class="author-desc"><?= $testimonial['designation'];?></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php }else{?>
                            <div class="comment-group right-group">
                                <div class="comment-content round-border">
                                    <p class="comment-detail">
                                    <?= $testimonial['content'];?>
                                    </p>
                                    <div class="author-detail">
                                        <figure class="author-img">
                                        <img src="<?=base_url("assets/uploads/testimonial/".$testimonial['image']);?>" alt="">
                                        </figure>
                                        <div class="author-info">
                                            <h5 class="author-name"><?= $testimonial['name'];?></h5>
                                            <span class="author-desc"><?= $testimonial['designation'];?></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php }}}?>
                        </div>
                    </div>
                </div>
            </section>
            
            <!-- home partner section html -->
            <section class="home-partner-section">
                <div class="container">
                    <div class="home-partner-wrapper">
                        <div class="partner-group-logo">
                            <?php if($logoList){
                                foreach($logoList as $logo){?>
                            <figure class="partner-logo round-border">
                                <img src="<?=base_url("assets/uploads/clientlogo/".$logo['image']);?>" alt="">
                            </figure>
                            <?php }}?>
                        </div>
                        <div class="section-head-info partner-content">
                            <h6 class="section-sub-title">PARTNERS & CLIENTS</h6>
                            <h3 class="section-title"><?= $home['partner_heading'];?></h3>
                            <p class="section-paragraph">
                            <?= $home['partner_description'];?>
                            </p>
                            <a href="#" class="button-round-primary section-btn">LEARN MORE</a>
                        </div>
                    </div>
                </div>
            </section>
        </main>
        <script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "FAQPage",
  "mainEntity": [{
    "@type": "Question",
    "name": "Do you provide RO filter change service at home in Delhi NCR?",
    "acceptedAnswer": {
      "@type": "Answer",
      "text": "Yes, we offer doorstep RO filter replacement services across Delhi, Noida, Gurgaon, Ghaziabad, and other NCR regions."
    }
  },{
    "@type": "Question",
    "name": "How much does RO filter replacement service cost in Delhi?",
    "acceptedAnswer": {
      "@type": "Answer",
      "text": "The cost depends on your RO model and the type of filter required. We provide affordable and transparent pricing."
    }
  },{
    "@type": "Question",
    "name": "How often should I get my RO filter changed?",
    "acceptedAnswer": {
      "@type": "Answer",
      "text": "It is recommended to change your RO filter every 6 to 12 months to maintain water purity and flow."
    }
  },{
    "@type": "Question",
    "name": "Do you offer doorstep RO filter change service near me?",
    "acceptedAnswer": {
      "@type": "Answer",
      "text": "Yes, we provide fast and reliable RO filter change service at your doorstep anywhere in Delhi NCR."
    }
  },{
    "@type": "Question",
    "name": "Is your RO filter change service available in Noida, Gurgaon & Ghaziabad?",
    "acceptedAnswer": {
      "@type": "Answer",
      "text": "Absolutely! Our RO technicians cover all major areas in Noida, Gurgaon, Ghaziabad, and nearby locations."
    }
  },{
    "@type": "Question",
    "name": "What brands do you support for RO filter change service?",
    "acceptedAnswer": {
      "@type": "Answer",
      "text": "We service all major RO brands like Kent, Aquaguard, Pureit, Livpure, Blue Star, and more."
    }
  },{
    "@type": "Question",
    "name": "Can I book same-day RO filter replacement in Delhi NCR?",
    "acceptedAnswer": {
      "@type": "Answer",
      "text": "Yes, we offer same-day RO filter change appointments depending on your location and time slot availability."
    }
  },{
    "@type": "Question",
    "name": "Are the filters you provide for RO service 100% original?",
    "acceptedAnswer": {
      "@type": "Answer",
      "text": "Yes, we only use genuine, brand-approved RO filters to ensure safe and clean drinking water."
    }
  },{
    "@type": "Question",
    "name": "Do you offer RO filter cleaning and servicing together?",
    "acceptedAnswer": {
      "@type": "Answer",
      "text": "Yes, we can combine filter replacement with complete RO system servicing for better performance."
    }
  },{
    "@type": "Question",
    "name": "How do I schedule a water purifier filter change at my home?",
    "acceptedAnswer": {
      "@type": "Answer",
      "text": "You can call our 24x7 service helpline or book online for quick RO filter change service at home."
    }
  }]
}
</script>

<marquee>
    <ul>
        <?php 
            $marqueeBlogList = marqueeBlogList();
            if($marqueeBlogList){
                foreach($marqueeBlogList As $marqueeBlog){?>
        <li><a href="<?php echo base_url("blog/".$marqueeBlog['heading_slug']);?>"><i class="fa fa-angle-right" aria-hidden="true"></i> <?php echo $marqueeBlog['heading'];?></a></li>
        <?php }}?>  
        <?php 
            $marqueeServiceList = marqueeServiceList();
            if($marqueeServiceList){
                foreach($marqueeServiceList As $marqueeService){
                if($marqueeService['heading_slug']!=""){?>
        <li><a href="<?php echo base_url("service/".$marqueeService['heading_slug']);?>"><i class="fa fa-angle-right" aria-hidden="true"></i> <?php echo $marqueeService['heading'];?></a></li>
        <?php }}}?>  
    </ul>
    
</marquee>
        </aside>
    </div>


<style>
marquee {
    opacity: 0;
}
marquee ul li{
    display:inline;
}</style>   