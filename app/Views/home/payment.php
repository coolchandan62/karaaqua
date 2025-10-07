<section class="py-5">
    <div class="container">
        <div class="card mb-3 " >
  <div class="row g-0">
        <?php $productData = productById($orderdata['product_id']);
          ?>
    <div class="col-md-3 mid-img">
         <img src="<?= base_url("assets/uploads/product/".$productData['image']);?>" class="img-fluid rounded-start" alt="kara products">
    </div>
    <div class="col-md-9">
        
      <div class="card-body cardbody-hgt">
        
          
        <h5 class="card-title"><?=$productData['heading']?></h5>
        <p class="card-text"><?=$productData['short_description']?></p>
        <p class="card-text py-2"><small class="clr_red">Total Pyament ₹ <?=$orderdata['total_amount']?></small></p>
        <button id="rzp-button1" class="rzp-pay">Pay Now</button>
      </div>
    </div>
  </div>
</div>
    </div>
</section>
<form action="<?= base_url('verifyPayment') ?>" method="POST" id="payment-form">
    <input type="hidden" name="order_id" value="<?= esc($orderdata['id']) ?>">
    <input type="hidden" name="razorpay_payment_id" id="razorpay_payment_id">
    <input type="hidden" name="razorpay_order_id" id="razorpay_order_id" value="<?= esc($razorpay_order_id) ?>">
    <input type="hidden" name="razorpay_signature" id="razorpay_signature">
</form>


<style>
    .cardbody-hgt{
  height: 100%;
  align-content: center;
}
.rzp-pay{
    color: white;
    background: #c20e1f;
    border: 1px solid;
    padding: 7px 15px;
}
.clr_red{
    color: #c20e1f;
}
.mid-img{
      
    display: flex;
    justify-content: center;
    padding-right: 0;
}
</style>
<script src="https://checkout.razorpay.com/v1/checkout.js"></script>
<script>
let options = {
    key: "<?= esc($keyid) ?>",
    amount: <?= (int) ($orderdata['total_amount'] * 100) ?>,
    currency: "INR",
    name: "Kara",

    order_id: "<?= esc($razorpay_order_id) ?>",
    handler: function (response) {
        document.getElementById('razorpay_payment_id').value = response.razorpay_payment_id;
        document.getElementById('razorpay_order_id').value = response.razorpay_order_id;
        document.getElementById('razorpay_signature').value = response.razorpay_signature;
        document.getElementById('payment-form').submit();
    },
    prefill: {
        name: "<?= esc($orderdata['first_name']) ?>",
        email: "<?= esc($orderdata['email_id']) ?>",
        contact: "<?= esc($orderdata['mobile_number']) ?>"
    },
    theme: { color: "#ff7529" }
};
let rzp1 = new Razorpay(options);
document.getElementById('rzp-button1').onclick = (e) => { rzp1.open(); e.preventDefault(); };
</script>
