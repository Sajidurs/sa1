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



                            
                        </div>
                    </div>
                </section>