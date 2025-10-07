<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Thank You!</title>
  <style>
      /* Reset some default browser styles */
body, html {
  height: 100%;
  font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
  background-color: #082D53;
  display: flex;
  justify-content: center;
  align-items: center;
}

.thank-you-container {
  text-align: center;
}

.thank-you-card {
  background: white;
  padding: 40px 60px;
  border-radius: 16px;
  box-shadow: 0 15px 25px rgba(0, 0, 0, 0.2);
  max-width: 400px;
  width: 90%;
}

.thank-you-card h1 {
  font-size: 2.5em;
  margin-bottom: 20px;
  color: #082D53;
}

.thank-you-card p {
  font-size: 1.2em;
  margin-bottom: 30px;
  color: #444;
}

.btn {
  text-decoration: none;
  background: #082D53;
  color: white;
  padding: 12px 24px;
  border-radius: 8px;
  font-weight: bold;
  transition: background 0.3s ease;
}

.btn:hover {
  background: #082D53;
}

  </style>
  <!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-PQ6KVPZB');</script>
<!-- End Google Tag Manager -->

<!-- Google tag (gtag.js) event -->
<script>
  gtag('event', 'conversion_event_submit_lead_form', {
    // <event_parameters>
  });
</script>
</head>
<body>
        <!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-PQ6KVPZB"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
  <div class="thank-you-container">
    <div class="thank-you-card">
      <h1>Thank You!</h1>
      <p>Your submission has been received.</p>
      <a href="<?php echo base_url("ro-service");?>" class="btn">Go Back to Home</a>
    </div>
  </div>
</body>
</html>
