
  <div class="stricky-header stricked-menu main-menu main-menu-two">
    <div class="sticky-header__content"></div>
  </div>
  <div class="blog-one">
    <div class="blog-one-shape-1 float-bob-y" style="background-image: url(assets/images/shapes/blog-one-shape-1.png);"> </div>
    <div class="container">
      <div class="row">

      <?php if($blogList){
           foreach($blogList as $blog){?>
        <div class="col-xl-4 col-lg-4 wow fadeInUp animated" data-wow-delay="100ms" style="visibility: visible; animation-delay: 100ms; animation-name: fadeInUp;">
          <div class="blog-one__single">
            <div class="blog-one__img"> <img src="<?= base_url("assets/uploads/blog/".$blog['thumb_image']);?>" alt="">
              <div class="blog-one__plus"> <a href="<?= base_url();?>blog/<?= $blog['heading_slug'];?>"><i class="fa fa-plus"></i></a> </div>
            </div>
            <div class="blog-one__content">
              <ul class="blog-one__meta list-unstyled">
                <li> <a href="<?= base_url();?>blog/<?= $blog['heading_slug'];?>"><i class="fa fa-calendar-alt"></i><?=date('d M, Y', strtotime($blog['blog_date']))?></a> </li>
              </ul>
              <h3 class="blog-one__title"><a href="<?= base_url();?>blog/<?= $blog['heading_slug'];?>"><?=$blog['heading']?></a></h3>
              <div class="blog-one__btn-box"> <a href="<?= base_url();?>blog/<?= $blog['heading_slug'];?>" class="thm-btn blog-one__btn">Read More</a> </div>
            </div>
          </div>
        </div>
<?php }} ?>
      </div>
    </div>
  </div>
 