
                               
  
  <div class="stricky-header stricked-menu main-menu main-menu-two">
            <div class="sticky-header__content"></div><!-- /.sticky-header__content -->
        </div><!-- /.stricky-header -->       
        <!--Page Header Start-->
        <section class="page-header">
            <div class="page-header-bg" style="background-image: url(assets/images/backgrounds/page-header-bg.jpg)">
            </div>
            <div class="container">
                <div class="page-header__inner">
                    <h2>Checkout</h2>
                    <p>Kara Water Systems is dedicated to providing accessible, pure, and healthy drinking water through innovative air-to-water technology.</p>
                    <ul class="thm-breadcrumb list-unstyled">
                        <li><a href="#">Home</a></li>
                        <li><span>//</span></li>
                        <li>Checkout</li>
                    </ul>
                </div>
            </div>
        </section>
                                   <?php
                                    $cart_id= $_SESSION['cart_id']; 
                                    $user_id= $_SESSION['user_id']; 
                                    $cartdata = checkoutByCartId($cart_id);
                                    $productdata = productById($cartdata['product_id']);
                                    $userdata = registerUserById($user_id);
                                    ?>

     <form  action="<?=base_url()?>saveorder" method="POST"class="billing_details_form">
     <input type="hidden" name="product_id" value="<?=$cartdata['product_id']?>">
     <input type="hidden" name="cart_id" value="<?=$cartdata['cart_id']?>">
     <input type="hidden" name="user_id" value="<?=$cartdata['user_id']?>">
     <input type="hidden" name="qty" value="<?=$cartdata['qty']?>">

        <section class="checkout-page">
            <div class="container">
                <div class="row">
                    <div class="col-xl-8 col-lg-8">
                        <div class="billing_details">
                            <div class="billing_title">
                                <p>Returning Customer? <span>Click here to Login</span></p>
                                <h2>Billing details</h2>
                            </div>
                                <div class="row">
                                
                                </div>
                                <div class="row bs-gutter-x-20">
                                    <div class="col-xl-6">
                                        <div class="billing_input_box">
                                            <input type="text" name="first_name"  value="<?=$userdata['user_name']?>" placeholder="First name"
                                                required="">
                                        </div>
                                    </div>
                                    <div class="col-xl-6">
                                        <div class="billing_input_box">
                                            <input type="text" name="last_name" value="" placeholder="Last name" required="">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">

                                    <div class="col-xl-12">
                                        <div class="billing_input_box">
                                            <input type="text" name="address" value="" placeholder="Address">
                                        </div>
                                    </div>
                                   
                                    <div class="col-xl-12">
                                        <div class="billing_input_box">
                                            <input type="text" name="city" value="" placeholder="Town / City"
                                                required="">
                                        </div>
                                    </div>
                                </div>
                                <div class="row bs-gutter-x-20">
                                    <div class="col-xl-6">
                                        <div class="billing_input_box">
                                            <input type="text" name="state" value="" placeholder="State" required="">
                                        </div>
                                    </div>
                                    <div class="col-xl-6">
                                        <div class="billing_input_box">
                                            <input name="zip_code" type="text" pattern="[0-9]*" placeholder="Zip code">
                                        </div>
                                    </div>
                                    <div class="col-xl-6">
                                        <div class="billing_input_box">
                                            <input name="email_id" type="email" value="<?=$userdata['user_email']?>" placeholder="Email address">
                                        </div>
                                    </div>
                                    <div class="col-xl-6">
                                        <div class="billing_input_box">
                                            <input type="tel" name="mobile_number" value="<?=$userdata['user_phone']?>" 
                                                required="" placeholder="Phone">
                                        </div>
                                    </div>
                                </div>
                                
                        </div>
                    </div>


                       <div class="col-xl-4 col-lg-4">
                            <div class="order_table_box">
                                <table class="order_table_detail">
                                    <thead class="order_table_head">
                                        <tr>
                                            <th>Product</th>
                                            <th class="right">Price</th>
                                        </tr>
                          </thead>
 <?php
$product_price = $cartdata['qty']*(float) $productdata['price'];
$gst_rate = 0.18;
$gst_amount = $product_price * $gst_rate;
$shipping = 0.00;
$total = $product_price + $gst_amount + $shipping;
?>

    <tbody>
    <tr>
        <td class="pro__title"><?= $productdata['heading'] ?></td>
        <td class="pro__price">Rs.<?= number_format($product_price) ?> </td>
    </tr>
    <tr>
        <td class="pro__title">GST (18%)</td>
        <td class="pro__price">Rs.<?= number_format($gst_amount, 2) ?> </td>
    </tr>
    <tr>
        <td class="pro__title">Shipping</td>
        <td class="pro__price">Rs.<?= number_format($shipping, 2) ?> </td>
    </tr>
    <tr>
        <td class="pro__title"><strong>Total</strong></td>
        <td class="pro__price"><strong>Rs.<?= number_format(round($total)) ?> </strong></td>
    </tr>
</tbody>
                                </table>
                            </div>
                            <p>&nbsp;</p>
                              <div class="col-lg-12">
                           <input type="hidden" name="amount" value="<?=$total?>">
                            <div class="text-right d-flex justify-content-end">
                                <button type="submit" class="thm-btn">Place your order</button>
                            </div><!-- /.text-right -->

                        </div><!-- /.col-lg-6 -->
                        </div>

                    </div>
                <div class="your_order">
                    <div class="row">
                        
                      
                    </div>
                </div>
            </div>
        </section>
      </form>
<style>
    .page-header {
    padding: 60px 0 120px;
}
</style>
        <!--End Checkout Page-->