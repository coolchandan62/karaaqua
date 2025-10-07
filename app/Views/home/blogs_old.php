
        <!-- main page html -->
        <main id="content" class="site-main">
            <!-- Inner Banner html start-->
            <section class="inner-banner-wrap">
                <div class="inner-baner-container" style="background-image: url(assets/img/plumbero-img40.jpg);">
                    <div class="container">
                        <div class="inner-banner-content">
                            <h1 class="inner-title">Blogs</h1>
                        </div>
                    </div>
                </div>
            </section>

            <div class="blog-archive-section">
                <div class="blog-archive-inner">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="primary">
                                    <div class="inner-blog-wrapper">
                                        <?php if($blogList){
                                            foreach($blogList as $blog){?>
                                        <article class="post round-border">
                                            <figure class="post-thumb">
                                                <a href="<?= base_url();?>blog/<?= $blog['heading_slug'];?>"><img src="<?= base_url("assets/uploads/blog/".$blog['thumb_image']);?>" alt=""></a>
                                            </figure>
                                            <div class="entry-content">
                                                <h5 class="blog-title">
                                                    <a href="<?= base_url();?>blog/<?= $blog['heading_slug'];?>"><?= $blog['heading'];?></a>
                                                </h5>
                                                
                                                <p class="blog-preview">
                                                    
                                                <?= $blog['short_description'];?>
                                                </p>
                                            </div>
                                            <div class="entry-meta">
                                                <span class="posted-on">
                                                    <a href="#"><?= date("d M Y",strtotime($blog['date']));?></a>
                                                </span>
                                                
                                            </div>
                                        </article>
                                        <?php }}?>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
      