<section class="pt-40 pb-10 most-viewed">
                    <!-- Section title -->
                    <div class="section-title">
                        <h2>Most Viewed</h2>
                    </div>
                    <!-- End of Section title -->
                    <div class="post-blog-list">
                        <div class="row">
                            <div class="col-sm-12">
                                <!-- Post -->


                                <?php
                                    $args = array(
                                        'post_type' => 'post',
                                        'posts_per_page' => '5',
                                        'orderby' => 'meta_value_num',
                                    );

                                    $viewed = new WP_QUERY($args);

                                    while( $viewed->have_posts() ){
                                        $viewed->the_post();
                                        ?>
                                <div class="post-default post-has-front-title">
                                    <div class="post-thumb">
                                        <a href="blog-details.html"> 
                                        <?php the_post_thumbnail();?>
                                        </a>
                                    </div>
                                    <div class="post-data">
                                        <!-- Category -->
                                        <div class="cats"><a href="category-result.html"><?php echo get_the_category_list( "  " );?></a></div>
                                        <!-- Title -->
                                        <div class="title">
                                            <h2><a href="<?php the_permalink();?>"><?php the_title();?></a></h2>
                                        </div>
                                    </div>
                                </div>
                                <?php
                                }
                                wp_reset_query();
                                ?>


                                <!-- End of Post -->
                            </div>



                            <?php
                                    $args = array(
                                        'post_type' => 'post',
                                        'posts_per_page' => '5',
                                        'orderby' => 'meta_value_num',
                                    );

                                    $viewed = new WP_QUERY($args);

                                    while( $viewed->have_posts() ){
                                        $viewed->the_post();
                                        ?>
                            <div class="col-sm-6">
                                <!-- Post -->
                                <div class="post-default">
                                    <div class="post-thumb">
                                        <a href="blog-details.html"> <img src="<?php echo get_template_directory_uri();?>/assets/images/blog/small/1.jpg" alt="" class="img-fluid"> </a>
                                    </div>
                                    <div class="post-data">
                                        <!-- Category -->
                                        <div class="cats"><a href="category-result.html">Love</a></div>
                                        <!-- Title -->
                                        <div class="title">
                                            <h2><a href="blog-details.html">Blaak Attack Earns Boels First 2019 Victory </a></h2>
                                        </div>
                                        <!-- Post Desc -->
                                        <div class="desc">
                                            <p>
                                                Duis mauris augue, efficitur eu arcu sit amet, posuere dignissim neque. Aenean enim sem, pharetra et magna....
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                
                                <!-- End of Post -->
                            </div>

                            
                            
                        </div>
                    </div>
                </section>