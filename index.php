
    <?php get_header();?>
    



    <!-- post with sidebar -->
    <div class="container pt-40 pb-90">
        <div class="row">
            <div class="col-lg-8">
                <!-- Popular Post -->
                <?php  get_template_part("/template-parts/custom-posts/popular");?>
                <!-- End of Popular Post  -->

                <!-- Most Viewed Post -->
                <?php  get_template_part("/template-parts/custom-posts/viewed");?>
                <!-- End of Most Viewed Post -->

                <!-- 728 ad -->
                <div class="pt-40 pb-40 biz-ad">
                    <a href="#"><img src="<?php echo get_template_directory_uri();?>/assets/images/ad-728.png" alt="" class="img-fluid"></a>
                </div>
                <!-- End of 728 ad -->

                <!-- Video Post -->
                <section class="pt-40 pb-10 video-post">
                    <!-- Section title -->
                    <div class="section-title">
                        <h2>Video Post</h2>
                    </div>
                    <!-- End of Section title -->
                    <div class="post-blog-list">
                        <div class="row">
                            <div class="col-md-6">
                                <!-- Post -->
                                <div class="post-default post-has-video">
                                    <div class="post-thumb">
                                        <a href="blog-details.html">
                                            <div data-bg-img="<?php echo get_template_directory_uri();?>/assets/images/blog/6.jpg"></div>
                                        </a>
                                    </div>
                                    <div class="post-data">
                                        <!-- Category -->
                                        <div class="cats"><a href="category-result.html">Food</a></div>
                                        <!-- Title -->
                                        <div class="title">
                                            <h2><a href="blog-details.html">Five Important Facts Should Know About Recipe</a></h2>
                                        </div>
                                    </div>
                                </div>
                                <!-- End of Post -->
                            </div>

                            <div class="col-md-6">
                                <!-- Post -->
                                <div class="post-default post-has-video">
                                    <div class="post-thumb">
                                        <a href="blog-details.html">
                                            <div data-bg-img="<?php echo get_template_directory_uri();?>/assets/images/blog/8.jpg"></div>
                                        </a>
                                    </div>
                                    <div class="post-data">
                                        <!-- Category -->
                                        <div class="cats"><a href="category-result.html">Technology</a></div>
                                        <!-- Title -->
                                        <div class="title">
                                            <h2><a href="blog-details.html">Apple Admits To Macbook and Macbook Pro </a></h2>
                                        </div>
                                    </div>
                                </div>
                                <!-- End of Post -->
                            </div>

                            <div class="col-md-6">
                                <!-- Post -->
                                <div class="post-default post-has-video">
                                    <div class="post-thumb">
                                        <a href="blog-details.html">
                                            <div data-bg-img="<?php echo get_template_directory_uri();?>/assets/images/blog/10.jpg"></div>
                                        </a>
                                    </div>
                                    <div class="post-data">
                                        <!-- Category -->
                                        <div class="cats"><a href="category-result.html">Food</a></div>
                                        <!-- Title -->
                                        <div class="title">
                                            <h2><a href="blog-details.html">20-Minute Thai Coconut Chicken Soup</a></h2>
                                        </div>
                                    </div>
                                </div>
                                <!-- End of Post -->
                            </div>

                            <div class="col-md-6">
                                <!-- Post -->
                                <div class="post-default post-has-video">
                                    <div class="post-thumb">
                                        <a href="blog-details.html">
                                            <div data-bg-img="<?php echo get_template_directory_uri();?>/assets/images/blog/9.jpg"></div>
                                        </a>
                                    </div>
                                    <div class="post-data">
                                        <!-- Category -->
                                        <div class="cats"><a href="category-result.html">Technology</a></div>
                                        <!-- Title -->
                                        <div class="title">
                                            <h2><a href="blog-details.html">Feel The Love, And Things On My Mind</a></h2>
                                        </div>
                                    </div>
                                </div>
                                <!-- End of Post -->
                            </div>
                        </div>
                    </div>
                </section>
                <!-- End of Video Post -->
            </div>
            <?php get_sidebar();?>
        </div>
    </div>
    <!-- end of post with sidebar -->

    

    <?php get_footer();?>
 