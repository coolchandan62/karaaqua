
  <div class="stricky-header stricked-menu main-menu main-menu-two">
    <div class="sticky-header__content"></div>
  </div>
  <section class="product" style="background: #f7f9fb;">
    <div class="container">
      <div class="product__items">
        <div class="product__all">
          <div class="row">
          <?php if($productList){
             foreach($productList as $product){?>
            <div class="col-xl-3 col-lg-3 col-md-6">
              <div class="product__all-single">
                <div class="product__all-img" id="type<?=$product['type']?>"> <img src="<?= base_url("assets/uploads/product/".$product['thumb_image']);?>" alt="kara products"> </div>
                <div class="product__all-content">
                  <div class="product__all-review"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> </div>
                  <h4 class="product__all-title"><a href="<?= base_url();?>product/<?= $product['heading_slug'];?>"><?= $product['heading'];?></a></h4>
                  
                              <?php if($product['type']==2){?>
                                          <p class="product__all-price">₹ <?= $product['price'];?>/-</p>
                                     <?php }?>

                  <div class="product__all-btn-box"> <a href="<?= base_url();?>product/<?= $product['heading_slug'];?>" class="thm-btn product__all-btn">
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
