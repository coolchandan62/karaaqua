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
                    	<div class="all-cat-holder">
                            		<h3 rel="legals">Service List</h3>
                            		<div cass="clearfix"></div>
                            		<div class="col-md-12">
                            			<div class=" all-cat-main productnamefilter">
                            			<ul>				
                            			<?php if($serviceList){
											foreach($serviceList as $service){?>
                            				<li class="service_name_filter col-md-4 float-left"><a href="<?= base_url();?>service/<?= $service['heading_slug'];?>"><i class="fa fa-angle-right" aria-hidden="true"></i><?= $service['heading'];?></a></li>
											<?php }}?>
                            			</ul>
                            			</div>
                                    </div>
                        	</div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="contact-page-section">
                <div class="container">
                    <div class="contact-form-wrapper">
                    	<div class="all-cat-holder">
                            		<h3 rel="legals">Blog List</h3>
                            		<div cass="clearfix"></div>
                            		<div class="col-md-12">
                            			<div class=" all-cat-main productnamefilter">
                            			<ul>				
                            			<?php if($blogList){
											foreach($blogList as $blog){?>
                            				<li class="service_name_filter col-md-4 float-left"><a href="<?= base_url();?>blog/<?= $blog['heading_slug'];?>"><i class="fa fa-angle-right" aria-hidden="true"></i><?= $blog['heading'];?></a></li>
											<?php }}?>
                            			</ul>
                            			</div>
                                    </div>
                        	</div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="contact-page-section">
                <div class="container">
                    <div class="contact-form-wrapper">
                    	<div class="all-cat-holder">
                            		<h3 rel="legals">Product List</h3>
                            		<div cass="clearfix"></div>
                            		<div class="col-md-12">
                            			<div class=" all-cat-main productnamefilter">
                            			<ul>				
                            			<?php if($productList){
											foreach($productList as $product){?>
                            				<li class="service_name_filter col-md-4 float-left"><a href="<?= base_url();?>product/<?= $product['heading_slug'];?>"><i class="fa fa-angle-right" aria-hidden="true"></i><?= $product['heading'];?></a></li>
											<?php }}?>
                            			</ul>
                            			</div>
                                    </div>
                        	</div>
                        </div>
                    </div>
                </div>
            </section>
        </main>
        <style>
          .bg-white {
    background: #fff;
    width: 100%
}

.all-cat-holder {
    width: 100%;
    margin: 10px 0;
    padding: 10px;
    float: left;
    background: #fff
}

.all-cat-main li a {
    margin: 0;
    padding: 5px 0;
    display: inline;
    width: 100%;
    float: left;
    color: #444;
    font-size: 13px
}

.all-cat-main li a i {
    padding-right: 4px;
    color: #ccc;
    height: 20px
}

.all-cat-main-header {
    font-size: 15px;
    color: #0063b1;
    font-weight: 600;
    padding: 25px 0 15px
}

.all-cat-holder h3 {
    font-size: 25px!important;
    width: 100%;
    margin: 0 0 15px;
    padding: 0 0 15px;
    float: left;
    color: #00a1d8;
    border-bottom: 1px solid #e7e7e7
}
          </style>