 <?php

      $args = array(
        'meta_key'          => 'featured',
        'meta_value'        => '1',
        'posts_per_page'    => 3,
      );

      $sa1_featured_posts = new WP_Query( $args );
    
      while($sa1_featured_posts -> have_posts()) {
          $sa1_featured_posts -> the_post();
    ?>
                        
                            <div class="col-md-6">
                                <!-- Post -->
                                <div class="post-default post-has-video">
                                    <div class="post-thumb">
                                        <a href="blog-details.html">
                                            <?php the_post_thumbnail();?>
                                        </a>
                                    </div>
                                    <div class="post-data">
                                        <!-- Category -->
                                        <?php
                                            $category_id = get_cat_ID( 'Category Name' );
                                            $category_link = get_category_link( $category_id );
                                        ?>
                                        
                                        <div class="cats"><a href="<?php echo esc_url( $category_link ); ?>">
                                        <?php echo get_the_category_list( "  " );?>
                                        </a></div>
                                        <!-- Title -->
                                        <div class="title">
                                            <h2><a href="<?php the_permalink();?>"><?php the_title();?></a></h2>
                                        </div>
                                    </div>
                                </div>
                                <!-- End of Post -->
                            </div>
                    <?php 
                        }
                        wp_reset_postdata();
                    ?>


                     