
  <div class="stricky-header stricked-menu main-menu main-menu-two">
    <div class="sticky-header__content"></div>
  </div>
  <section class="blog-sidebar">
    <div class="container">
      <div class="row">
        <div class="col-xl-8 col-lg-7">
          <div class="blog-sidebar__left">
            <div class="blog-sidebar__img-box">
              <h1><?=$blog['heading']?></h1>
              <div class="blog-sidebar__img"> <img src="<?= base_url("assets/uploads/blog/".$blog['thumb_image']);?>" alt="kara service"> </div>
            </div>
            <br>
           <p><?=$blog['description']?></p>
          </div>
        </div>
        <div class="col-xl-4 col-lg-5">
          <div class="sidebar">
            
            <div class="sidebar__single sidebar__post">
              <h3 class="sidebar__title">Latest Posts</h3>
              <ul class="sidebar__post-list list-unstyled">

                <?php 
       if($blogList){
        foreach($blogList as $blogs){
        ?>
                <li>
                  <div class="sidebar__post-image"> <img src="<?= base_url("assets/uploads/blog/".$blogs['thumb_image']);?>" alt="kara blogs"> </div>
                  <div class="sidebar__post-content">
                    <h3> <a href="<?=base_url()?>blog/<?=$blogs['heading_slug']?>"><?=$blogs['heading']?></a> </h3>
                    <p><?=date('d M, Y', strtotime($blogs['blog_date']))?></p>
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
                <div class="sidebar__booking-btn-box"> <a href="javascript:void" data-popup="popup-reg" class="thm-btn sidebar__booking-btn popup-btn" data-id2="Blog Detail Page" data-id="<?=$blogs['heading']?>">Enquire Now</a> </div>
              </div>
            </div>
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
