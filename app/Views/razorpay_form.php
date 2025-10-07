<!DOCTYPE html>
<html>
<head>
    <title>Razorpay Payment</title>
    <script src="https://checkout.razorpay.com/v1/checkout.js"></script>
</head>
<body>

    <form action="/razorpay/verifyPayment" method="POST">
        <script
            src="https://checkout.razorpay.com/v1/checkout.js"
            data-key="<?= $razorpayKey ?>"
            data-amount="<?= $amount ?>"
            data-currency="INR"
            data-order_id="<?= $order_id ?>"
            data-buttontext="Pay with Razorpay"
            data-name="YourApp"
            data-description="Test Transaction"
            data-theme.color="#F37254">
        </script>
        <input type="hidden" name="razorpay_payment_id" id="razorpay_payment_id">
        <input type="hidden" name="razorpay_order_id" id="razorpay_order_id">
        <input type="hidden" name="razorpay_signature" id="razorpay_signature">
    </form>

</body>
</html>
