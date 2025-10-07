var siteUrl = $("#siteUrl").attr("href");
$(document).on("submit", "#authenticatePay", function () {
   var amount = $("input[name='amount']").val();
   var formData = new FormData();
    formData.append("amount",amount);
    $.ajax({
      url: siteUrl + "payment",
      type: "POST",
      data: formData,
      async: false,
      contentType: false,
      processData: false,
      success: function (result) {
       var order_id = JSON.parse(result).order_id;
       var amount = JSON.parse(result).amount;
       startpayment(order_id,amount)

      },
    });
});
      
    function startpayment(order_id,amount){
        var options = {
            key: "rzp_test_szKGxZmIclBulk", // Enter the Key ID generated from the Dashboard
            amount: amount, // Amount is in currency subunits. Default currency is INR. Hence, 50000 refers to 50000 paise
            currency: "INR",
            name: "Rajiv", //your business name
            description: "service for ca",
            image: "https://cwltechnology.in/all-my-ca/assets/images/logo/logo.webp",
            order_id: order_id, //This is a sample Order ID. Pass the `id` obtained in the response of Step 
           prefill: { //We recommend using the prefill parameter to auto-fill customer's contact information, especially their phone number
               name: "Gaurav Kumar", //your customer's name
                email: "gaurav.kumar@example.com", 
                contact: "7970880044"  //Provide the customer's phone number for better conversion rates 
            },
            "handler":function (response){
            },
            theme: {
                "color": "#3399cc"
            }
        };
        var rzp = new Razorpay(options);
        rzp.open();
        rzp.on('payment.failed', function(response){
            alert(response.error.reason);
        })
}





$(document).ready(function() {
    $("#addtocart").click(function() {
        var id = document.getElementById('productid').value;
    });
});