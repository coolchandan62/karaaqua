<div class="stricky-header stricked-menu main-menu main-menu-two">
    <div class="sticky-header__content"></div>
</div>
<?php /*?>
<section class="product" style="background: #f7f9fb;">
    <div class="container">
        <div class="product__items">
            <div class="product__all">
                <div class="row">
                    <?php if($productList){
             foreach($productList as $product){?>
                    <div class="col-xl-3 col-lg-3 col-md-6">
                        <div class="product__all-single">
                            <div class="product__all-img" id="type<?=$product['type']?>"> <img
                                    src="<?= base_url("assets/uploads/product/".$product['thumb_image']);?>"
                                    alt="kara products"> </div>
                            <div class="product__all-content">
                                <div class="product__all-review"> <i class="fa fa-star"></i> <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i>
                                </div>
                                <h4 class="product__all-title"><a
                                        href="<?= base_url();?>product/<?= $product['heading_slug'];?>"><?= $product['heading'];?></a>
                                </h4>

                                <?php if($product['type']==2){?>
                                <p class="product__all-price">₹ <?= $product['price'];?>/-</p>
                                <?php }?>

                                <div class="product__all-btn-box"> <a
                                        href="<?= base_url();?>product/<?= $product['heading_slug'];?>"
                                        class="thm-btn product__all-btn">
                                        Read More</a> </div>
                            </div>
                        </div>
                    </div>
                    <?php }} ?>

                </div>
            </div>
        </div>
    </div>
</section>
<?php */?>
<section class="contact-two ">
    <div class="contact-two-bg jarallax" data-jarallax data-speed="0.2" data-imgPosition="50% 0%"></div>
    <div class="container">
        <div class="section-title section-title--two text-center">
            <span class="section-title__tagline">Commercial Products</span>
            <h2 class="section-title__title ">Commercial RO Models For Every Need</h2>
        </div>
        <div class="swiper-product swiper-container">
            <div class="row">



                 <div class="col-md-3 col-12 pb-4">
                    <div class="card h-100 service-item ">
                        <div class="card-img pb-3"> <img src="<?=base_url()?>assets/home/images/products/comm-1.webp" alt=""
                                class="img-fluid"> </div>
                        <div class="book-name">
                            <h4 class="pb-3 text-center"><a href="#" class="stretched-link">25 & 50 LPH RO Plant</a></h4>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 col-12 pb-4">
                    <div class="card h-100 service-item ">
                        <div class="card-img pb-3"> <img src="<?=base_url()?>assets/home/images/products/comm-3.webp" alt=""
                                class="img-fluid"> </div>
                        <div class="book-name">
                            <h4 class="pb-3 text-center"><a href="#" class="stretched-link">100 LPH RO Plant</a></h4>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 col-12 pb-4">
                    <div class="card h-100 service-item ">
                        <div class="card-img pb-3"> <img src="<?=base_url()?>assets/home/images/products/comm-4.webp" alt=""
                                class="img-fluid"> </div>
                        <div class="book-name">
                            <h4 class="pb-3 text-center"><a href="#" class="stretched-link">500 LPH RO Plant</a></h4>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 col-12 pb-4">
                    <div class="card h-100 service-item ">
                        <div class="card-img pb-3"> <img src="<?=base_url()?>assets/home/images/products/comm-5.webp" alt=""
                                class="img-fluid"> </div>
                        <div class="book-name">
                            <h4 class="pb-3 text-center"><a href="#" class="stretched-link">1000 LPH RO Plant</a></h4>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
</section>