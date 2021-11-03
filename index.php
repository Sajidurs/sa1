
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
                    <div class="post-blog-list">
                        <div class="row">
                            <!-- End of Section title -->
                        <?php get_template_part( "/template-parts/custom-posts/featured" );?>
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
 