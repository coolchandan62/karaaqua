
  <div class="stricky-header stricked-menu main-menu main-menu-two">
    <div class="sticky-header__content"></div>
  </div>
<section class="product-details">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-xl-6">
                        <div class="product-details__img">
                        <img src="<?= base_url("assets/uploads/product/".$product['image']);?>" alt="kara products">
                        </div>
                    </div>
                    <div class="col-lg-6 col-xl-6">
                        <div class="product-details__top">
                            <h3 class="product-details__title"><?= $product['heading'];?> 
                            
                            <?php if($product['type']==2){?>
                            <span><strike>₹<?= number_format($product['mrp']);?></strike> ₹ <?= number_format($product['price']);?></span> 
                        <?php }?>
                        </h3>
                        </div>
                        <div class="product-details__reveiw">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <span>2 customer reviews</span>
                        </div>
                        <div class="product-details__content">
                            <?= $product['short_description'];?>
                        </div>

  <div class="product-details__quantity">
  <h3 class="product-details__quantity-title">Quantity</h3>
  <div class="quantity-box">
    <button type="button" class="sub"><i class="fa fa-minus"></i></button>
    <input type="number" id="product-qty" value="1" min="1" />
    <button type="button" class="add"><i class="fa fa-plus"></i></button>
  </div>
</div>
                <div class="product-details__buttons">
                    <div class="product-details__buttons-1">
                    <a href="javascript:void(0);"  data-popup="popup-reg" class="thm-btn popup-btn" data-id2="Product Detail Page"  data-id="<?= $product['heading'];?>">Book Now</a>
                </div>
                <?php if($product['type']==2){?>
                <div class="product-details__buttons-1 space-product_detail">
                    <a href="javascript:void(0);" class="thm-btn popup-btn2" data-id="<?= $product['heading']; ?>" data-id2="<?= $product['price']; ?>"
                     data-id3="<?=$product['id'];?>">Buy Now</a>
                </div>  
                <?php }?>   

                        </div>

                      <div class="product-details__social">
                            <div class="title">
                                <h3>Share with friends</h3>
                            </div>
                   


                        </div>
                    </div>
                </div>
            </div>
        </section>	

	<section class="product-description">
            <div class="container">
                <h3 class="product-description__title">Description</h3>
                <p> <?=$product['description']?></p>  
            </div>
        </section>

<section class="product-description">
            <div class="container">
                <h3 class="product-description__title">Specification</h3>
                <p> <?=$product['description']?></p>  
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
                        <h2 class="section-title__title">We’ve made it easy to find answers!s</h2>
                    </div>
                    <p class="faq-one__text-1">
                        Our Frequently Asked Questions section is designed to help you quickly resolve common queries without the need to reach out. Whether you're wondering about service details, order status, payment options, or support availability—we’ve covered it all in one convenient place.
                    </p>
                    <p class="faq-one__text-2">
                       From first-time users to returning customers, our FAQ page is a great resource for clear and straightforward information. We believe in transparency and want you to feel confident every step of the way. Still can’t find what you're looking for? Our support team is just a message away!
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
        <?php $isFirst = false;?>
    <?php endforeach;?>
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

<script>
$(document).ready(function () {

  $('.add').off('click').on('click', function () {
    var qty = parseInt($('#product-qty').val()) || 1;
    $('#product-qty').val(qty + 1);
  });

  $('.sub').off('click').on('click', function () {
    var qty = parseInt($('#product-qty').val()) || 1;
    if (qty > 1) {
      $('#product-qty').val(qty - 1);
    }
  });

$('.popup-btn2').off('click').on('click', function () {
    var product_price = $(this).data('id2');
    var product_id = $(this).data('id3');
    var qty = parseInt($('#product-qty').val()) || 1;
    var formData = new FormData();
    formData.append("product_price", product_price);
    formData.append("product_id", product_id);
    formData.append("qty", qty);
    $.ajax({
        url: siteUrl + "checkoutOrder", 
        type: "POST", 
        data: formData,
        contentType: false, 
        processData: false, 
        dataType: "json", 
        success: function (result) {
            if (result.status === "success") {
                window.location.replace(siteUrl + "checkout");
            } else {
                alert('There was an issue processing your order. Please try again.');
            }
        },
        error: function () {
            alert('An error occurred. Please try again later.');
        }
    });
});


// function startpayment(order_id, amount) {
//     var options = {
//         key: "rzp_test_szKGxZmIclBulk",
//         amount: amount, 
//         currency: "INR",
//         name: "Rajiv",
//         description: "Service for CA",
//         image: "https://cwltechnology.in/all-my-ca/assets/images/logo/logo.webp",
//         order_id: order_id, 
//         prefill: {
//             name: "Gaurav Kumar",
//             email: "gaurav.kumar@example.com",
//             contact: "7970880044"
//         },
//         handler: function(response) {
//             var paymentId = response.razorpay_payment_id;
//             var orderId = response.razorpay_order_id;
//             var signature = response.razorpay_signature;
//             $.ajax({
//                 url: siteUrl + 'razorpay/verifyPayment',
//                 type: 'POST',
//                 data: {
//                     razorpay_payment_id: paymentId,
//                     razorpay_order_id: orderId,
//                     razorpay_signature: signature
//                 },
//                 success: function(verifyResponse) {
//                     if (verifyResponse.success) {
//                         // Successfully verified the payment
//                         alert('Payment Successful!');
//                         window.location.href = siteUrl + "order/success";  // Redirect on success
//                     } else {
//                         // Payment verification failed
//                         alert('Payment Failed!');
//                     }
//                 }
//             });
//         },
//         theme: {
//             "color": "#3399cc"
//         }
//     };
    
//     var rzp = new Razorpay(options);
//     rzp.open();

//     rzp.on('payment.failed', function(response) {
//         alert("Payment Failed: " + response.error.reason);
//     });
// }
});

</script>

