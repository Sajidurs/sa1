<section class="popular-post pb-10">
                    <!-- Section title -->
                    <div class="section-title">
                        <h2><?php _e( "Popular Posts", "sa1" );?></h2>
                    </div>
                    <!-- End of Section title -->

                    <div class="post-blog-list">


                    <?php
                        $args = array(
                            'post_type' => 'post',
                            'posts_per_page' => '3',
                        );

                        $query = new WP_QUERY($args);

                        while( $query->have_posts() ){
                            $query->the_post();
                            ?>
                        <!-- Post -->
                        <div class="post-default post-has-right-thumb">
                            <div class="d-flex flex-wrap">
                                <div class="post-thumb align-self-stretch order-md-2">
                                    <a href="blog-details.html">
                                    <?php the_post_thumbnail();?>
                                    </a>
                                </div>
                                <div class="post-data order-md-1">
                                    <!-- Category -->
                                    <div class="cats"><a href="category-result.html">
                                    <?php echo get_the_category_list( "  " );?>
                                    </a></div>
                                    <!-- Title -->
                                    <div class="title">
                                        <h2><a href="blog-details.html"><?php the_title();?></a></h2>
                                    </div>
                                    <!-- Post Meta -->
                                    <ul class="nav meta align-items-center">
                                        <li class="meta-author">
                                        <?php echo get_avatar(get_the_author_meta( "ID" ));?>
                                            <a href="#">Alex Garry</a>
                                        </li>
                                        <li class="meta-date"><a href="#">2 Feb 2019</a></li>
                                        <li class="meta-comments"><a href="#"><i class="fa fa-comment"></i> 2</a></li>
                                    </ul>
                                    <!-- Post Desc -->
                                    <div class="desc">
                                        <p>
                                            Integer at faucibus urna. Nullam condimentum leo id elit sagittis auctor. Curabitur elementum nunc...
                                        </p>
                                    </div>
                                    <!-- Read More Button -->
                                    <a href="blog-details.html" class="btn btn-primary">View More</a>
                                </div>
                            </div>
                        </div>

                        <?php
                        }
                        wp_reset_query();
                        ?>

                        <!-- End of Post -->
                        
                    </div>
                </section>