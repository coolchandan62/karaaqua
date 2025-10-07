

<!DOCTYPE html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
    <meta charset="utf-8">
    <meta name="google-site-verification" content="KJEAap-2jDbOCYi6NX08447ExAHNfDgxIKUQYChnUW8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo $title; ?></title>
  <meta name="description" content="<?php echo $meta_description; ?>">
  <?php if ($og != "") {
    echo $og;
  }?>
<base href="<?php echo base_url();?>" id="siteUrl"/>
<link rel="apple-touch-icon" sizes="180x180" href="<?=base_url()?>assets/home/images/favicon.png" />
<link rel="icon" type="image/png" sizes="32x32" href="<?=base_url()?>assets/home/images/favicon.png" />
<link rel="icon" type="image/png" sizes="16x16" href="<?=base_url()?>assets/home/images/favicon.png" />
<meta name="description" content="" />
<link rel="stylesheet" href="<?=base_url()?>assets/home/vendors/bootstrap/css/bootstrap.min.css?v=0.9" />
<link rel="stylesheet" href="<?=base_url()?>assets/home/vendors/animate/animate.min.css?v=0.9" />
<link rel="stylesheet" href="<?=base_url()?>assets/home/vendors/animate/custom-animate.css?v=0.9" />
<link rel="stylesheet" href="<?=base_url()?>assets/home/vendors/fontawesome/css/all.min.css?v=0.9" />
<link rel="stylesheet" href="<?=base_url()?>assets/home/vendors/swiper/swiper.min.css?v=0.9" />
<link rel="stylesheet" href="<?=base_url()?>assets/home/vendors/jetly-icons/style.css?v=0.9">
<link rel="stylesheet" href="<?=base_url()?>assets/home/vendors/jquery-ui/jquery-ui.css?v=0.9" />
<link rel="stylesheet" href="<?=base_url()?>assets/home/css/fixnix.css?v=0.9" />
<link rel="stylesheet" href="<?=base_url()?>assets/home/css/fixnix-responsive.css?v=0.9" />
<link href="<?=base_url()?>assets/dashboard/css/bootstrap.min.css" rel="stylesheet" type="text/css">
<link href="<?=base_url()?>assets/dashboard/css/stylesheet.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

<script src="https://code.jquery.com/jquery-3.7.1.js?v=0.1"></script>
    <!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-PQ6KVPZB');</script>
<!-- End Google Tag Manager -->
<?php if($header_script){
 echo $header_script;
} ?>
</head>

<body class="home">
<?php if($body_script){
 echo $body_script;
} ?>    
    <!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-PQ6KVPZB"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>

<body class="custom-cursor">
<div class="custom-cursor__cursor"></div>
<div class="custom-cursor__cursor-two"></div>
<div class="page-wrapper">
  <header class="main-header-two">
    <div class="main-header-two__top">
      <div class="container">
        <div class="main-header-two__top-inner">
          <p class="main-header-two__top-text">ISO 9001:2015</p>
          <div class="main-header-two__social-box">
            <p class="main-header-two__social-title">Stay Connected</p>
            <div class="main-menu-two__social">
                <?php 
                 $contactDetail = contactDetail();
                 ?>
                 <a href="<?= $contactDetail['twitter_url'];?>" target="_blank"><i class="fa-brands fa-twitter" style="color: #3f77f8;"></i></a> 
                 <a href="<?= $contactDetail['facebook_url'];?>" target="_blank"><i class="fa-brands fa-facebook" style="color: #085ae7;"></i></a> 
                 <a href="<?= $contactDetail['youtube_url'];?>" target="_blank"><i class="fa-brands fa-youtube" style="color: #d7091e;"></i></a> 
                 <a href="<?= $contactDetail['instagram_url'];?>/" target="_blank"><i class="fa-brands fa-instagram" style="color: #d62976;"></i></a> 
                 <a href="<?= $contactDetail['linkedin_url'];?>" target="_blank"><i class="fab fa-linkedin-in"></i></a> 
                </div>
          </div>
        </div>
      </div>
    </div>
    <nav class="main-menu main-menu-two">
      <div class="main-menu-two__wrapper">
        <div class="container">
          <div class="main-menu-two__wrapper-inner">
            <div class="main-menu-two__left">
              <div class="main-menu-two__logo"> <a href="<?=base_url()?>"><img src="<?=base_url()?>assets/home/images/kara-logo.png" alt=""></a> </div>
            </div>
            <div class="main-menu-two__right">
              <div class="main-menu-two__main-menu-box"> <a href="#" class="mobile-nav__toggler"><i class="fa fa-bars"></i></a>
                <ul class="main-menu__list">
                  <li><a href="<?=base_url()?>">Home</a></li>
                  <li><a href="<?=base_url()?>about-us">About</a></li>
                  <li> <a href="<?=base_url()?>service">Services</a></li>
                  <li><a href="<?=base_url()?>products">Products</a></li>
                  <li><a href="<?=base_url()?>commercial-products">Commercial Products</a></li>
                  <li> <a href="<?=base_url()?>contact-us">Contact</a> </li>
                </ul>
              </div>
                

              <div class="main-menu-two__search-cart-btn-box">
                <div class="main-menu-two__btn-box"> 
                 <?php if (!empty($_SESSION['user_id'])) {?>
                 <a  class="thm-btn main-menu-two__btn N-login" href="<?=base_url()?>dashboard/user-dashboard">Profile</a> 
              <?php } else{?>
                    <a class="thm-btn main-menu-two__btn N-login" href="<?=base_url()?>user-login">Login</a> 

           <?php }?>
                
                <a href="tel:<?= $contactDetail['phone3'];?>"  class="thm-btn main-menu-two__btn"><span class="fas fa-headphones"></span> +91 <?= $contactDetail['phone3'];?></a> </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </nav>
  </header>














<?php 
 $user_id = $_SESSION['user_id'];
    $data['userData'] = registerUserById($user_id);?>

  <!--------------------************Banner Start************ Mid Section Start ------------------------------->
  <div class="dark-white pt-5" >    
     <div class="container"> 
      <div class="row">
      <div class="col-md-3">
      <div class="dashboard_main">
       <div class="user-img">

     <?php if($data['userData']['image']){?>
      <img src="<?=base_url()?>assets/uploads/user/<?=$data['userData']['image']?>">
      <?php } else {?>
      <img src="<?=base_url()?>assets/dashboard/images/user-img.jpg">
        <?php } ?> 
      
      
      </div>
       <h2><?=$data['userData']['user_name']?></h2>       
       <div class="dashboard-menu">
       <ul>
       <li><a class="active" href="<?=base_url()?>dashboard/user-dashboard"><i class="fa fa-user"></i> Profile</a> </li>
       <li><a href="<?=base_url()?>dashboard/orders"><i class="fa fa-shopping-basket"></i>  Your Order</a></li>
       <li><a href="<?=base_url()?>dashboard/change-password"><i class="fa fa-unlock-alt"></i> Change Password</a></li>
       <li><a href="<?=base_url()?>user-logout"><i class="fa-solid fa-right-from-bracket"></i>Log Out</a></li>
       </ul>
       </div>
      </div>      
      </div>