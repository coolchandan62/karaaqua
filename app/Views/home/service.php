
  <div class="stricky-header stricked-menu main-menu main-menu-two">
    <div class="sticky-header__content"></div>
  </div>
  <section class="experience-one experience-two service-page">
    <div class="experience-two-shape-1 float-bob-y"
                style="background-image: url(<?=base_url()?>assets/home/images/shapes/experience-two-shape-1.jpg);"></div>
    <div class="container">
      <div class="row">

      <?php 
      if($serviceList){
        foreach($serviceList as $service){?>
      
        <div class="col-xl-3 col-lg-3 wow fadeInLeft" data-wow-delay="100ms">
          
          <div class="experience-one__single">
            <div class="experience-one__icon"> <img src="<?=base_url("assets/uploads/service/".$service['thumb_image']);?>" alt="<?=$service['heading']?>"> </div>
            <div class="experience-one__content">
              <h3 class="experience-one__title">
 <?php 
    $words1 = explode(' ', strip_tags($service['heading']));
    $short1 = implode(' ', array_slice($words1, 0, 4));
    
    ?>
       

                <?=$short1?>
                  
                <!-- <strong>Just ₹399/-</strong>  -->
              </h3>
<br>
     <?php 
    $words = explode(' ', strip_tags($service['short_description']));
    $short = implode(' ', array_slice($words, 0, 20));
    
    ?>
              <p class="experience-one__text"><?=$short . (count($words) > 20 ? '...' : '')?> </p>
<!--              <em>Book Now</em> -->
               <a href="<?=base_url("service/".$service['heading_slug'])?>"><em>Read More</em></a>
            
            </div>
          </div>
        </div>
        <?php }}?>

      
       
       
      </div>
    </div>
  </section>
 