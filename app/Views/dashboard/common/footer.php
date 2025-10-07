
 <?php $contactDetail = contactDetail();?>

<footer class="site-footer site-footer-two">
    <div class="site-footer-shape-1 float-bob-y-2"
                style="background-image: url(<?=base_url()?>assets/home/images/shapes/site-footer-shape-1.png);"></div>
    <div class="site-footer__top">
      <div class="container">
        <div class="row">
          <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="100ms">
            <div class="footer-widget__column footer-widget__about">
              <div class="footer-widget__logo"> <a href="<?=base_url()?>"><img src="<?=base_url()?>assets/home/images/kara-logo.webp" alt=""></a> </div>
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
                <li><a href="<?= base_url();?>about-us">About us</a></li>
                <li><a href="<?= base_url();?>service">Service</a></li> 
                <li> <a href="<?= base_url();?>blogs">Blogs</a></li>
                <li> <a href="<?= base_url();?>contact-us">Contact Us</a> </li>
                <li><a href="<?= base_url();?>sitemap">Sitemap</a></li>
              </ul>
            </div>
          </div>
          <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="300ms">
            <div class="footer-widget__column footer-widget__services">
              <div class="footer-widget__title-box">
                <h3 class="footer-widget__title">Our Services</h3>
              </div>
              <ul class="footer-widget__services-list list-unstyled">
<?php $footerservice = footerServiceList();


if($footerservice){
    foreach($footerservice as $services){

?>
<?php 
    $words1 = explode(' ', strip_tags($services['heading']));
    $short1 = implode(' ', array_slice($words1, 0, 4));
    
    ?>
                <li><a href="<?=base_url("service/".$services['heading_slug'])?>"><?=$short1?></a></li>
<?php }} ?>
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
                    <p> <a href="tel:<?=$contactDetail['phone3']?>"><?=$contactDetail['phone3']?></a> <a href="tel:<?=$contactDetail['phone3']?>"><?=$contactDetail['phone3']?></a> </p>
                  </div>
                </li>
                <li>
                  <div class="icon"> <span class="fas fa-envelope"></span> </div>
                  <div class="text">
                    <p> <a href="mailto:<?=$contactDetail['email1']?>dfsfffsd"><?=$contactDetail['email1']?></a> </p>
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
</div>
<div class="mobile-nav__wrapper">
  <div class="mobile-nav__overlay mobile-nav__toggler"></div>
  <div class="mobile-nav__content"> <span class="mobile-nav__close mobile-nav__toggler"><i class="fa fa-times"></i></span>
    <div class="logo-box"> <a href="<?=base_url()?>" aria-label="logo image"><img src="<?=base_url()?>assets/home/images/kara-logo.png" width="143"
                        alt="kara-aqua" /></a> </div>
    <div class="mobile-nav__container"></div>
    <ul class="mobile-nav__contact list-unstyled">
      <li> <i class="fa fa-envelope"></i> <a href="mailto:<?=$contactDetail['email1']?>"><?=$contactDetail['email1']?></a> </li>
      <li> <i class="fa fa-phone"></i> <a href="tel:+<?=$contactDetail['phone3']?>">+91 <?=$contactDetail['phone3']?></a> </li>
    </ul>
    <div class="mobile-nav__top">
      <div class="mobile-nav__social">
         <a href="<?= $contactDetail['twitter_url'];?>" target="_blank">
          <i class="fa-brands fa-twitter" style="color: #3f77f8;"></i>
        </a>
         <a href="<?= $contactDetail['facebook_url'];?>/" target="_blank">
          <i class="fa-brands fa-facebook" style="color: #085ae7;"></i>
        </a> 
        <a href="<?= $contactDetail['youtube_url'];?>" target="_blank">
          <i class="fa-brands fa-youtube" style="color: #d7091e;"></i>
        </a> 
        <a href="<?= $contactDetail['instagram_url'];?>/" target="_blank">
          <i class="fa-brands fa-instagram" style="color: #d62976;"></i>
        </a> 
        <a href="<?= $contactDetail['linkedin_url'];?>/" target="_blank">
          <i class="fab fa-linkedin-in"></i>
        </a> 
      </div>
    </div>
  </div>
</div>
<div id="popup-reg" class="popup">
  <div class="popup-content">
    <div class="event-header">
      <h6>Feel free to connect with us!</h6>
    </div>
    <form id="send" class="send-form">
      <div class="form-group">
         <input type="hidden" name="popup_page_name" value="">
         <input type="hidden" name="popup_service_name" value="">
        <input type="text" placeholder="Enter name" id="name" name="popup_name">
        <label for="name"> <i class="fa fa-user"></i> </label>
        <span class="message" id="msgpopup_name"></span> </div>
      <div class="form-group">
        <input type="tel" placeholder="Enter mobile" id="mobile" name="popup_mobile">
        <label for="phone"> <i class="fa fa-phone-alt"></i> </label>
        <span class="message" id="msgpopup_mobile"></span> </div>
     
      <div class="form-group">
        <textarea placeholder="Enter address" name="popup_address"></textarea>
        <label for="text" class="txt"> <i class="fa fa-location-arrow"></i> </label>
        <span class="message" id="msgpopup_address"></span> </div>

        <div class="form-group">
        <textarea placeholder="Enter Comment*" name="popup_comment"></textarea>
        <label for="text" class="txt"> <i class="fa fa-comments" aria-hidden="true"></i> </label>
        <span class="message" id="msgpopup_comment"></span>
        </div>


      <button type="button" id="authenticatePopupEnquiry" class="main-btn-rect" name="text" value="Send"> <i class="fa fa-paper-plane"></i>Submit</button>
    </form>
    <span class="fade-out main-btn-circle">╳</span> </div>
</div>
<a href="#" data-target="html" class="scroll-to-target scroll-to-top"><i class="icon-right-arrow"></i></a> 
<script src="<?=base_url()?>assets/home/vendors/jquery/jquery-3.7.1.min.js"></script> 
<script src="<?=base_url()?>assets/home/vendors/bootstrap/js/bootstrap.bundle.min.js"></script> 
<script src="<?=base_url()?>assets/home/vendors/jquery-magnific-popup/jquery.magnific-popup.min.js"></script> 
<script src="<?=base_url()?>assets/home/vendors/jquery-validate/jquery.validate.min.js"></script> 
<script src="<?=base_url()?>assets/home/vendors/swiper/swiper.min.js"></script> 
<script src="<?=base_url()?>assets/home/vendors/wow/wow.js"></script> 
<script src="<?=base_url()?>assets/home/vendors/jquery-ui/jquery-ui.js"></script> 
<script src="<?=base_url()?>assets/home/vendors/nice-select/jquery.nice-select.min.js"></script> 
<script src="<?php echo base_url();?>assets/ro-service/js/enquiry.js?v=0.1"></script> 
<script src="<?=base_url()?>assets/home/js/fixnix.js"></script> 

<script>
	const swiper = new Swiper('.swiper-product', {
  // Optional parameters
  loop: true,
  centeredSlides: true,
	autoplay: {
    delay: 2000,
  },
  // Navigation arrows
  navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev',
  },
  breakpoints: {
    // when window width is >= 320px
    768: {
      slidesPerView: 1,
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
    var service_name = $(this).data('id'); 
    var page_name = $(this).data('id2');
    var popupBlock = $('#' + $(this).data('popup'));
    popupBlock.find('input[name="popup_service_name"]').val(service_name);
    popupBlock.find('input[name="popup_page_name"]').val(page_name);

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








