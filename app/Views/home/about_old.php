<main id="content" class="site-main">
            <!-- Inner Banner html start-->
            <section class="inner-banner-wrap">
                <div class="inner-baner-container" style="background-image: url(<?=base_url()?>assets/home/img/plumbero-img40.jpg);">
                    <div class="container">
                        <div class="inner-banner-content">
                            <h1 class="inner-title">About us</h1>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Inner Banner html end-->
            <!-- about section html start -->
            <section class="about-section">
                <div class="container">
                    <div class="about-inner">
                        <div class="row g-lg-0">
                            <div class="col-md-6">
                                <div class="about-detail section-head-info">
                                    <h6 class="section-sub-title">
                                        INTRODUCTION OF US
                                    </h6>
                                    <h3 class="section-title">
                                       <?= $about['heading'];?>
                                    </h3>
                                    <p class="section-paragraph">
                                    <?= $about['description'];?>
                                    </p>
                                </div>
                            </div>
                            <div class="col-md-6">
                            <div class="about-video" style="margin-top: 50px;">
                                    <!-- <img src="http://localhost/kara_latest/assets/uploads/about/1743670411_725de2429e4bdec37b90.jpg" alt="aboutimage" > -->
                                    <video width="100%" autoplay="" controls="" muted="" style="border-radius:10px;">
                                    <source src="assets/home/img/kara_video.mp4" type="video/mp4">
                                    <source src="assets/home/img/kara_video.mp4" type="video/ogg">
                                    
                                  </video>
</div>
                            </div>
                        </div>
                    </div>
                    <!-- <div class="about-counter-wrapper round-border">
                        <div class=" counter-item">
                            <div class="counter-no">
                                <span class="counter">38</span>+
                            </div>
                            <div class="Completed">
                                Qualified Techician
                            </div>
                        </div>
                        <div class=" counter-item">
                            <div class="counter-no">
                                <span class="counter">450</span>+
                            </div>
                            <div class="Completed">
                                Completed project
                            </div>
                        </div>
                        <div class=" counter-item">
                            <div class="counter-no">
                                <span class="counter">5</span>k+
                            </div>
                            <div class="Completed">
                                Happy Customer
                            </div>
                        </div>
                    </div> -->
                    <div class="goal-wrapper">
                        <div class="goal-detail vision-inner col-lg-4">
                            <h4>
                            <?= $about['vision_heading'];?>
                            </h4>
                            <p>
                            <?= $about['vision_description'];?>
                            
                        </div>
                        <figure class="goal-img figure-round-border col-lg-4">
                            <img src="<?=base_url("assets/uploads/about/".$about["image1"]);?>" alt="">
                        </figure>
                        <div class="goal-detail mission-inner col-lg-4">
                            <h4>
                            <?= $about['mission_heading'];?>
                            </h4>
                            <p>
                            <?= $about['mission_description'];?>
                            </p>
                        </div>
                    </div>
                    <div class="about-patner-img">
                    <?php if($logoList){
                                foreach($logoList as $logo){?>
                        <figure class="partner-logo round-border">
                            <img src="<?=base_url("assets/uploads/clientlogo/".$logo['image']);?>" alt="">
                        </figure>
                        <?php }}?>
                    </div>
                </div>
            </section>
            <section class="subscribe-section">
                <div class="container">
                    <div class="section-head-info col-lg-6 offset-lg-3 col-md-8 offset-md-2 text-center">
                        <h6 class="section-sub-title">
                            SUBSCRIBE NEWSLETTER
                        </h6>
                        <h3 class="section-title">
                            Subscribe My Newsletter
                        </h3>
                        <p class="section-paragraph">
                        Kara Water Systems specializes in air-to-water dispensers that extract moisture from the air to provide clean, mineral-rich drinking water.
                        </p>
                    </div>
                    <form class="subscribe-form">
                        <p class="from-group">
                            <input type="hidden" name="s_type" value="4">
                            <input type="text" name="s_name" placeholder="Name">
                            <span class="message" id=msgsname></span>
                        </p>
                        <p class="from-group">
                            <input type="email" name="s_email" placeholder="email">
                            <span class="message" id=msgsemail></span>
                        </p>
                        <div>
                            <button type="button" class="button-round-primary" id="subscribeEnquiry">SUBSCRIBE</button>
                        </div>
                    </form>
                </div>
            </section>
        </main>