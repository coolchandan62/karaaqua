
  <div class="stricky-header stricked-menu main-menu main-menu-two">
    <div class="sticky-header__content"></div>
  </div>
	<section class="blog-sidebar">
            <div class="container">
                <div class="row">
                    <div class="col-xl-8 col-lg-7">
                        <div class="blog-sidebar__left">
                            <div class="blog-sidebar__img-box">
                                <h1> <?= $serviceData['heading'];?></h1>
                                <div class="blog-sidebar__img">

                                    <img src="<?= base_url("assets/uploads/service/".$serviceData['image']);?>" alt="kara service">
                                </div>
                                
                            </div>
                            <br>
                            <p> <?= $serviceData['description'];?> </p>
                         
                    
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-5">
                        <div class="sidebar">
                           
                            <div class="consultation"><div class="cta-form">
                <h3 class="text-center">Get In Touch</h3>
                    <form  class="php-email-form">
                     <input type="hidden" name="service" value="<?=$serviceData['heading'];?>">
                    <input type="hidden" name="type" value="2">
                   <div class="form-group">
                    <input type="text" name="name" class="form-control" placeholder="Your Name">
                      <span class="message" id="msgsname"></span>
                  </div>
                  <div class="form-group mt-3">
                    <input type="email" class="form-control" name="email" placeholder="Your Email" >
                        <span class="message" id="msgsemail"></span>

                  </div>
                  <div class="form-group mt-3">
                    <input type="text" class="form-control" name="phone" placeholder="Your Phone">
                    <span class="message" id="msgsphone"></span>
                  </div>
                  <div class="form-group mt-3">
                    <textarea name="message" placeholder="Comment"></textarea>
                    <span class="message" id="msgmessage"></span>
                </div>

                 <div class="service-contact">
                <button type="button" id="authenticateService" class="thm-btn">Send Message</button>
              </div>
                </form>
              </div></div>
                            <div class="sidebar__single sidebar__post">
                                <h3 class="sidebar__title">Most Selling Products</h3>

                                <ul class="sidebar__post-list list-unstyled">

                                <?php if($productList){
                                            foreach($productList as $product){?>

                                    <li>
                                        <div class="sidebar__post-image">
                                            <img src="<?= base_url("assets/uploads/product/".$product['thumb_image']);?>" alt="kara blogs">
                                        </div>
                                        <div class="sidebar__post-content">
                                            <h3>
                                                <a href="<?= base_url();?>product/<?= $product['heading_slug'];?>"><?= $product['heading'];?></a>
                                            </h3>
                                            
                                        </div>
                                    </li>
                                   <?php }}?>
                                   
                                </ul>
                            </div>
							<div class="sidebar__single sidebar__post">
                                <h3 class="sidebar__title">Popular Services</h3>
                                <ul class="sidebar__post-list list-unstyled">


                                <?php if($serviceList){
                                            foreach($serviceList as $service){?>
                                    <li>
                                        <div class="sidebar__post-image">
                                            <img src="<?= base_url("assets/uploads/service/".$service['thumb_image']);?>" alt="kara blogs">
                                        </div>
                                        <div class="sidebar__post-content">
                                            <h3>
                                                <a href="<?= base_url();?>service/<?= $service['heading_slug'];?>"><?= $service['heading'];?></a>
                                            </h3>
                                            
                                        </div>
                                    </li>
                              <?php } }?>

                                </ul>
                            </div>
                           
                            <div class="sidebar__single sidebar__booking">
                                <div class="sidebar__booking-bg"
                                    style="background-image: url(<?=base_url()?>assets/home/images/blog/booking-bg-img.jpg);"></div>
                                <div class="sidebar__booking-content">
                                    <h3 class="sidebar__booking-title">Need Pure Water</h3>
                                    <div class="sidebar__booking-btn-box">
                                        <a href="<?=base_url()?>contact-us" class="thm-btn sidebar__booking-btn">Book A Service</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
      <section class="why-choose-one">
            <div class="container">
                <div class="section-title section-title--two text-center">
                    <span class="section-title__tagline">Why Choose Us</span>
                    <h2 class="section-title__title">Gadget Repair For Everyone</h2>
                    <p class="section-title__text">Duis aute irure dolor in repreh enderit in volup tate velit esse
                        cillum dolore <br> eu fugiat nulla dolor atur with Lorem ipsum is simply</p>
                </div>
                <div class="row">
                    <div class="col-xl-6 col-lg-6 wow fadeInUp" data-wow-delay="100ms">
                        <!--Why Choose One Single Start-->
                        <div class="why-choose-one__single">
                            <div class="why-choose-one__icon">
                                <span class="icon-award"></span>
                            </div>
                            <div class="why-choose-one__content">
                                <h3 class="why-choose-one__title"><a href="<?=base_url()?>contact-us">Warranty Service</a>
                                </h3>
                                <p class="why-choose-one__text">Duis aute irure dolor in repreh enderit in
                                    volup tate velit esse cillum dolore eu fugiat</p>
                            </div>
                        </div>
                        <!--Why Choose One Single Start-->
                    </div>
                    <div class="col-xl-6 col-lg-6 wow fadeInUp" data-wow-delay="200ms">
                        <!--Why Choose One Single Start-->
                        <div class="why-choose-one__single">
                            <div class="why-choose-one__icon">
                                <span class="icon-customer-service"></span>
                            </div>
                            <div class="why-choose-one__content">
                                <h3 class="why-choose-one__title"><a href="<?=base_url()?>contact-us">Customer Service</a>
                                </h3>
                                <p class="why-choose-one__text">Duis aute irure dolor in repreh enderit in
                                    volup tate velit esse cillum dolore eu fugiat</p>
                            </div>
                        </div>
                        <!--Why Choose One Single Start-->
                    </div>
                    <div class="col-xl-6 col-lg-6 wow fadeInUp" data-wow-delay="300ms">
                        <!--Why Choose One Single Start-->
                        <div class="why-choose-one__single">
                            <div class="why-choose-one__icon">
                                <span class="icon-security"></span>
                            </div>
                            <div class="why-choose-one__content">
                                <h3 class="why-choose-one__title"><a href="<?=base_url()?>contact-us">Secured Device</a>
                                </h3>
                                <p class="why-choose-one__text">Duis aute irure dolor in repreh enderit in
                                    volup tate velit esse cillum dolore eu fugiat</p>
                            </div>
                        </div>
                        <!--Why Choose One Single Start-->
                    </div>
                    <div class="col-xl-6 col-lg-6 wow fadeInUp" data-wow-delay="400ms">
                        <!--Why Choose One Single Start-->
                        <div class="why-choose-one__single">
                            <div class="why-choose-one__icon">
                                <span class="icon-computer-1"></span>
                            </div>
                            <div class="why-choose-one__content">
                                <h3 class="why-choose-one__title"><a href="<?=base_url()?>contact-us">No Virus Threat</a>
                                </h3>
                                <p class="why-choose-one__text">Duis aute irure dolor in repreh enderit in
                                    volup tate velit esse cillum dolore eu fugiat</p>
                            </div>
                        </div>
                        <!--Why Choose One Single Start-->
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-12">
                        <div class="why-choose-one__bottom">
                            <p class="why-choose-one__bottom-text">Get services from us <a
                                    href="<?=base_url()?>contact-us">guideline and
                                    knowledge</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
  <section class="faq-one">
    <div class="faq-one-shape-1 shapeMover"
        style="background-image: url('<?= base_url('assets/home/images/shapes/faq-one-shape.png'); ?>');">
    </div>
    <div class="container">
        <div class="row">
            <!-- Left Side -->
            <div class="col-xl-6 col-lg-6">
                <div class="faq-one__left">
                    <div class="section-title text-left">
                        <span class="section-title__tagline">Have Question?</span>
                        <h2 class="section-title__title">Frequently Asked Questions</h2>
                    </div>
                    <p class="faq-one__text-1">
                        There are many variations of passages of Lorem Ipsum available,
                        but the majority have suffered alteration in some form by injected randomised words
                        which don't look even slightly believable.
                    </p>
                    <p class="faq-one__text-2">
                        There are many variations of passages of Lorem Ipsum available,
                        but the majority have suffered alteration in some form.
                    </p>
                    <div class="faq-one__btn-box">
                        <a href="<?=base_url()?>contact-us" class="thm-btn faq-one__btn">Ask Questions Here</a>
                    </div>
                </div>
            </div>

            <!-- Right Side (FAQ List) -->
            <div class="col-xl-6 col-lg-6">
                <div class="faq-one__right">
                    <div class="accrodion-grp" data-grp-name="faq-one-accrodion">
                       <?php if (!empty($faqList)): ?>
    <?php 
    $isFirst = true;
    foreach ($faqList as $faq): 
    ?>
        <div class="accrodion <?= $isFirst ? 'active' : ''; ?>">
            <div class="accrodion-title">
                <h4><?= htmlspecialchars($faq['heading']); ?></h4>
            </div>
            <div class="accrodion-content" style="<?= $isFirst ? 'display: block;' : 'display: none;'; ?>">
                <div class="inner">
                    <p><?= $faq['description']; ?></p>
                </div>
            </div>
        </div>
        <?php $isFirst = false; ?>
    <?php endforeach; ?>
<?php else: ?>
    <p>No FAQs available at the moment.</p>
<?php endif; ?>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<script src="<?php echo base_url();?>assets/admin/js/common.js?v=0.1"></script> 

<?php if($schemaFaqList){?>
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "FAQPage",
  "mainEntity": [
    <?php 
        if($schemaFaqList){
            $count_schema = 1;
            foreach($schemaFaqList As $schemaFaq){
                if($count_schema<$schemaFaqCount){$schem_comma = ",";}else{$schem_comma = "";}
                echo '{
        "@type": "Question",
        "name": "'.$schemaFaq['question'].'",
        "acceptedAnswer": {
          "@type": "Answer",
          "text": "'.$schemaFaq['schema_answer'].'"
        }
    }'.$schem_comma;
            $count_schema++;}}?>
  ]
}
</script>   
<?php }?>
