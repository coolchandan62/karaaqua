<main id="content" class="site-main">
            <!-- Inner Banner html start-->
            <section class="inner-banner-wrap">
                <div class="inner-baner-container" style="background-image: url(<?=base_url()?>assets/home/img/plumbero-img40.jpg);">
                    <div class="container">
                        <div class="inner-banner-content">
                            <h1 class="inner-title">Contact</h1>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Inner Banner html end-->
           
            <!-- contact page html start -->
            <section class="contact-page-section">
                <div class="container">
                    <div class="contact-form-wrapper">
                        <div class="contact-deatil-form">
                            <div class="section-head-info">
                                <h6 class="section-sub-title">GET IN TOUCH</h6>
                                <h3 class="section-title">Get In Touch And Contact Us !</h3>
                                <p class="section-paragraph">
                                We’re here to help! Whether you have questions about our products, need assistance with your RO system, or would like to schedule an appointment, don’t hesitate to reach out.
                                </p>
                            </div>
                            <form class="contact-form">
                                <p>
                                    <input type="hidden" name="type" value="1">
                                    <input type="text" name="name" placeholder="Name">
                                    <span class="message" id="msgcname"></span>
                                </p>
                                <p class="half-width">
                                    <input type="email" name="email" placeholder="Email">
                                    <span class="message" id="msgcemail"></span>
                                </p>
                                <p class="half-width">
                                    <input type="text" name="phone" placeholder="Phone No">
                                    <span class="message" id="msgcphone"></span>
                                </p>
                                <p>
                                    <textarea rows="8" name="message" placeholder="Message"></textarea>
                                    <span class="message" id="msgmessage"></span>
                                </p>
                                <p>
                                    <button class="button-round-primary" id="authenticateContact" type="button">SEND MESSAGE</button>
                                </p>
                            </form>
                        </div>
                        <div class="contact-info contact-list"style="box-shadow: 0px 0px 25px 0px rgba(0, 0, 0, 0.15) !important;
    border-radius: 25px !important;
    background-color: #ffffff !important;
    padding: 25px !important;">
                        <div class="contact-para">
                        <figure class="contact-icon icons-list ">
                                    <i aria-hidden="true" class="icon icon-envelope3 bg-color"></i>
                                </figure>
                                <aside class="contact-deatils">
                                    <span class="contact-heading">
                                    Send your message :
                                    </span>
                                    <p><a href="mailto:support@karaaqua.com"><?= $contactData['email1'];?></a></p>
                                    <p><a href="mailto:info@karaaqua.com"><?= $contactData['email2'];?></a></p>
                                </aside>
                                </div>
                              
                                <div class="contact-para">
                                <figure class="contact-icon icons-list">
                                    <i aria-hidden="true" class="icon icon-phone-handset bg-color"></i>
                                </figure>
                                <aside class="contact-deatils">
                                    <span class="contact-heading">
                                    Call us now:
                                    </span>
                                   <p><a href="tel: +9220241010"><?= $contactData['phone1'];?></a></p>
                                   <p><a href="tel: +9220231010"><?= $contactData['phone2'];?></a></p>
                                </aside>
                               </div>
                               
                               <div class="contact-para">
                                <figure class="contact-icon icons-list">
                                    <i aria-hidden="true" class="icon icon-phone-handset bg-color"></i>
                                </figure>
                                <aside class="contact-deatils">
                                    <span class="contact-heading">
                                    Toll Free Number:
                                    </span>
                                   <p><a href="tel: +18005692666"><?= $contactData['phone3'];?></a></p>
                                
                                </aside>
                               </div>
                               <div class="contact-para">
                               <figure class="contact-icon icons-list">
                                    <i aria-hidden="true" class="icon icon-map-marker1 bg-color"></i>
                                </figure>
                                 <aside class="contact-deatil">
                                    <span class="contact-heading">
                                   Address:
                                    </span>
                                    <?php if($addressList){
                                        foreach($addressList as $address){?>
                                    <p><strong><?= $address['country'];?>:</strong><?= $address['state'];?> <?= $address['city'];?><?= $address['pincode'];?><?= $address['address'];?>  <?= $address['phone'];?>
                                    </p>
                                    <?php }}?>
                                </aside> 
                                 </div>
                            </div>
                        </div>
                    </div>
            </section>
            <div class="map-section">
       
       <img src="assets/home/img/map-1.gif" alt="#">
</div>
        </main>