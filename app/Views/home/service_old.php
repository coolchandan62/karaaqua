<main id="content" class="site-main">
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
                        <div class="service-type">
                        <a href="<?php if($service['heading_slug']!=""){echo base_url("service/".$service['heading_slug']);}else{echo "javascript:void(0)";}?>" class="service-title">
                                <h5>
                               <?= $service['heading'];?>
                                </h5>
                           
                            <p class="service-info">
                            <?php  echo implode(' ', array_slice(explode(' ', strip_tags($service['short_description'])), 0, 20));?>
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
                        
                        
                    </div>
                </div>
            </section>
        </main>
       
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