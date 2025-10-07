<main id="content" class="site-main">
    <!-- Inner Banner html start-->
    <section class="inner-banner-wrap">
        <div class="inner-baner-container"
            style="background-image: url(<?=base_url()?>assets/home/img/plumbero-img40.jpg);">
            <div class="container">
                <div class="inner-banner-content">
                    <h1 class="inner-title">Sitemap</h1>
                </div>
            </div>
        </div>
    </section>
    <style>
.all-cat-holder {
    width: 100%;
    margin: 10px 0 10px 0;
    padding: 10px;
    float: left;
    background: #fff;
}
.all-cat-main li a {
    margin: 0;
    padding: 5px 0;
    display: inline;
    width: 100%;
    float: left;
    color: #444;
    font-size: 13px;
}
.all-cat-main li {
    list-style: none;
    float: left;
}
.all-cat-main li a i {
    padding-right: 4px;
    height: 20px;
}
.all-cat-main-header {
    font-size: 15px;
    color: #0063b1;
    font-weight: 600;
    padding: 25px 0 15px 0;
}
.all-cat-holder h3 {
    font-size: 25px !important;
    width: 100%;
    margin: 0 0 15px 0;
    padding: 0 0 15px 0;
    float: left;
    color: #222;
    border-bottom: 1px solid #e7e7e7;
}
.all-cat-holder h3 a {
    color: #222;
}
.all-services-box {
    width: 100%;
    margin: 0;
    padding: 15px;
    float: left;
    background: #f0f0f0;
}
.mega-page-header {
    font-size: 14px;
    margin: 0 0;
    padding: 0 0 0 0;
    color: #00a1d8;
    font-weight: 500;
}
.all-cat-main li a:hover {
    color: #00a1d8;
}
</style>

<div class="pbmit-title-bar-wrapper">
    <!-- <div class="container">
      <div class="pbmit-title-bar-content">
        <div class="pbmit-title-bar-content-inner">
          <div class="pbmit-tbar">
            <div class="pbmit-tbar-inner container">
              <h1 class="pbmit-tbar-title">Sitemap</h1>
            </div>
          </div>
          <div class="pbmit-breadcrumb">
            <div class="pbmit-breadcrumb-inner"> <span><a title="" href="<?=base_url()?>" class="home"><span>SKMC Global</span></a></span>
				<span class="sep"> | </span>
				<span><span>Sitemap</span></span>
				 </div>
          </div>
        </div>
      </div>
    </div> -->
  </div>
  <div class="page-content">   
    <section class="section-mdt">
	    <div class="container">
		    <div class="row">
                <div class="all-cat-holder">
            		<h3 rel="legals">Important Links</h3>
            		<div cass="clearfix"></div>
            		<div class="col-md-12">
            			<div class=" all-cat-main productnamefilter">
            			<ul>				
                          <li class="service_name_filter col-md-4"><a href="<?php echo base_url();?>"><i class="fa fa-angle-right" aria-hidden="true"></i> Home</a></li>
                          <li class="service_name_filter col-md-4"><a href="<?php echo base_url("blogs");?>"><i class="fa fa-angle-right" aria-hidden="true"></i> Blogs</a></li>
                          <li class="service_name_filter col-md-4"><a href="<?php echo base_url("products");?>"><i class="fa fa-angle-right" aria-hidden="true"></i> Products</a></li>
                          <li class="service_name_filter col-md-4"><a href="<?php echo base_url("about-us");?>"><i class="fa fa-angle-right" aria-hidden="true"></i> About Us</a></li>
                          <li class="service_name_filter col-md-4"><a href="<?php echo base_url("service");?>"><i class="fa fa-angle-right" aria-hidden="true"></i>Service</a></li>
                          <li class="service_name_filter col-md-4"><a href="<?php echo base_url("contact-us");?>"><i class="fa fa-angle-right" aria-hidden="true"></i> Contact Us</a></li>
                          
            			</ul>
            			</div>
                    </div>
                </div>  
                <?php /*?>
                <div class="all-cat-holder">
            		<h3 rel="legals">Services</h3>
            		<div cass="clearfix"></div>
            		<div class="col-md-12">
            			<div class=" all-cat-main productnamefilter">
            			<ul>				
            			<?php
                            if($serviceList){
                                foreach($serviceList As $service){?>
                          <li class="service_name_filter col-md-4"><a href="<?php echo base_url("service/".$service['heading_slug']);?>"><i class="fa fa-angle-right" aria-hidden="true"></i> <?php echo $service['heading'];?></a></li>
                        <?php }}?>
            			</ul>
            			</div>
                    </div>
                </div><?php */?>  
                
                <div class="all-cat-holder">
            		<h3 rel="legals">Blogs</h3>
            		<div cass="clearfix"></div>
            		<div class="col-md-12">
            			<div class=" all-cat-main productnamefilter">
            			<ul>				
            			<?php
                            if($blogList){
                                foreach($blogList As $blog){?>
                          <li class="service_name_filter col-md-4"><a href="<?php echo base_url("blog/".$blog['heading_slug']);?>"><i class="fa fa-angle-right" aria-hidden="true"></i> <?php echo $blog['heading'];?></a></li>
                        <?php }}?>
            			</ul>
            			</div>
                    </div>
                </div>  
                
                <div class="all-cat-holder">
            		<h3 rel="legals">Products</h3>
            		<div cass="clearfix"></div>
            		<div class="col-md-12">
            			<div class=" all-cat-main productnamefilter">
            			<ul>				
            			<?php
                            if($productList){
                                foreach($productList As $product){?>
                          <li class="service_name_filter col-md-4"><a href="<?php echo base_url('product/'.$product['heading_slug']);?>"><i class="fa fa-angle-right" aria-hidden="true"></i> <?php echo $product['heading'];?></a></li>
                        <?php }}?>
            			</ul>
            			</div>
                    </div>
                </div>  
                
            </div>
		</div>
    </section>
  </div>

    


</main>