<main id="content" class="site-main">
            <!-- Inner Banner html start-->
            <section class="inner-banner-wrap">
                <div class="inner-baner-container" style="background-image: url(<?= base_url();?>assets/img/plumbero-img40.jpg);">
                    <div class="container">
                        <div class="inner-banner-content col-lg-10 offset-lg-1">
                            <h1 class="inner-title"><?= $serviceData['heading'];?></h1>
                        </div>
                    </div>
                </div>
            </section>
           
            <section class="single-post-section" >
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 primary" id="service-content-detail">
                            <div class="right-sidebar">
                                <!-- single serviceData post html start -->
                                <div class="single-content-wrap">
                                    <figure class="single-content-imgage figure-round-border">
                                        <img src="<?= base_url("assets/uploads/service/".$serviceData['image']);?>" alt="serviceData">
                                    </figure>
                                    <!-- <h5>
                                        <= $serviceData['heading'];?>
                                    </h5> -->
                                    <p>
                                        <?= $serviceData['description'];?>
                                    </p>
                                </div>
                                
                                <div class="accordion" id="accordionExample">
                                  <?php 
                                    if($faqList){
                                        foreach($faqList As $faq){?>
                                  <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingOne-<?php echo $faq['id'];?>">
                                      <button class="accordion-button collapsed d-flex justify-content-between align-items-center" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#collapseOne-<?php echo $faq['id'];?>" aria-expanded="false" aria-controls="collapseOne-<?php echo $faq['id'];?>">
                                        <?php echo $faq['heading'];?>
                                        <i class="fas fa-chevron-down ms-auto transition"></i>
                                      </button>
                                    </h2>
                                    <div id="collapseOne-<?php echo $faq['id'];?>" class="accordion-collapse collapse" aria-labelledby="headingOne-<?php echo $faq['id'];?>"
                                      data-bs-parent="#accordionExample">
                                      <div class="accordion-body">
                                        <?php echo $faq['description'];?>
                                      </div>
                                    </div>
                                  </div>
                                  <?php }}?>
                                </div>
                                
                                <div class="divider-line">
                                    <span class="st-line"></span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 secondary">
                            <div class="sidebar">
                                
                                <aside class="widget widget_latest_post widget-post-thumb">
                                    <div class="text-center">
                                        <h6 class="widget-title-round-border">Most Selling Products</h6>
                                    </div>
                                    <ul>
                                        <?php if($productList){
                                            foreach($productList as $product){?>
                                        <li>
                                            <figure class="post-thumb">
                                                <a href="<?= base_url();?>product/<?= $product['heading_slug'];?>"><img src="<?= base_url("assets/uploads/product/".$product['thumb_image']);?>" alt=""></a>
                                            </figure>
                                            <div class="post-content">
                                                <h6>
                                                    <a href="<?= base_url();?>product/<?= $product['heading_slug'];?>"><?= $product['heading'];?></a>
                                                </h6>
                                                
                                            </div>
                                        </li>
                                        <?php }}?>
                                        
                                    </ul>
                                </aside>
                                <aside class="widget widget_latest_post widget-post-thumb">
                                    <div class="text-center">
                                        <h5 class="widget-title-round-border">Contact For more services</h5>
                                    </div>
                                    <ul>
                                        <?php if($serviceList){
                                            foreach($serviceList as $service){?>
                                        <li>
                                            <figure class="post-thumb">
                                                <a href="<?= base_url();?>service/<?= $service['heading_slug'];?>"><img src="<?= base_url("assets/uploads/service/".$service['thumb_image']);?>" alt=""></a>
                                            </figure>
                                            <div class="post-content">
                                                <h6>
                                                    <a href="<?= base_url();?>service/<?= $service['heading_slug'];?>"><?= $service['heading'];?></a>
                                                </h6>
                                                
                                            </div>
                                        </li>
                                        <?php }}?>
                                        
                                    </ul>
                                </aside>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </section>
</main>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" />
<style>
  .accordion-button::after {
    display: none; /* Disable Bootstrap’s arrow */
  }

  .transition {
    transition: transform 0.3s ease;
  }

  .accordion-button:not(.collapsed) i {
    transform: rotate(180deg);
  }
</style>



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