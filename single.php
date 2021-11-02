<?php 
the_post();
get_header();
?>

    <!-- Page title -->
    <div class="page-title">
        <div class="container">
            <ul class="nav">
                <li><a href="<?php echo get_home_url();?>"><?php _e( "Home", "sa1" );?></a></li>
                <li><?php echo '<a href="' . get_permalink( get_option( 'page_for_posts' ) ) . '">Our Blog</a>'; ?></li>
                <li><?php the_title();?></li>
            </ul>
        </div>
    </div>
    <!-- End of Page title -->

    <div class="container pt-120">
        <div class="row">
            <div class="col-lg-8 pb-80">
                <div class="post-details-cover">
                    <!-- Post Thumbnail -->
                    <div class="post-thumb-cover">
                        <div class="post-thumb">
                            <?php the_post_thumbnail();?>
                        </div>
                        <!-- Post Meta Info -->
                        <div class="post-meta-info">
                            <!-- Category -->
                            <p class="cats">
                                
                            </p>

                            <!-- Title -->
                            <div class="title">
                                <h2><?php the_title();?></h2>
                            </div>

                            <!-- Meta -->
                            <ul class= "nav meta align-items-center">
                                <li class="meta-author">
                                <?php echo get_avatar(get_the_author_meta( "ID" ));?>
                                    <a href="#"><?php the_author();?></a>
                                </li>
                                <li class="meta-date"><a href="#"><?php echo get_the_date();?></a></li>
                                <li> 
                                <?php

                                // Counting the Reading Time
                                    function reading_time() {
                                    $content = get_post_field( 'post_content', $post->ID );
                                    $word_count = str_word_count( strip_tags( $content ) );
                                    $readingtime = ceil($word_count / 200);

                                    return $readingtime;
                                    }

                                    $readingtimeresult = reading_time();

                                    $html = sprintf(
                                        '<span>%s</span><span>%s</span>',
                                                __( '<b> Reading time:</b> ', 'text_domain' ) . $readingtimeresult,
                                        __( ' minutes', 'Avada' ),
                                    );
                                    echo __( $html );
                                  ?>
                                </li>
                                <li class="meta-comments"><a href="#"><i class="fa fa-comment"></i> <?php echo $post->comment_count; ?></a></li>
                            </ul>
                        </div>
                        <!-- End of Post Meta Info -->
                    </div>
                    <!-- End oF Post Thumbnail -->

                    <!-- Post Content -->
                    <div class="post-content-cover my-drop-cap">
                        <?php the_content();?>
                    </div>
                    <!-- End of Post Content -->

                    <!-- Tags -->
                    <div class="post-all-tags">
                    <?php echo get_the_tag_list(); ?>
                    </div>
                    <!-- End of Tags -->

                    <!-- Author Box -->
                    <div class="post-about-author-box">
                        <div class="author-avatar">
                        <?php echo get_avatar(get_the_author_meta( "ID" ));?>
                        </div>
                        <div class="author-desc">
                            <h5> <a href="#"> <?php the_author();?> </a> </h5>
                            <div class="description">
                            <?php the_author_meta("description");?>
                            </div>


                            <?php get_template_part("/template-parts/admin/bio");?>
                            
                        </div>
                    </div>
                    <!-- End of Author Box -->
                    
                    <!-- Comments -->
                    <button class="btn btn-comment" type="button" data-toggle="collapse" data-target="#commentToggle" aria-expanded="false" aria-controls="commentToggle">
                        Hide Comments (4)
                    </button>

                    <div class="collapse show" id="commentToggle">
                        <ul class="post-all-comments">
                            <li class="single-comment-wrapper">
                                <!-- Single Comment -->
                                <div class="single-post-comment">
                                    <!-- Author Image -->
                                    <div class="comment-author-image">
                                        <img src="assets/images/blog/post/author-1.jpg" alt="" class="img-fluid">
                                    </div>
                                    <!-- Comment Content -->
                                    <div class="comment-content">
                                        <div class="comment-author-name">
                                            <h6>Don Norman</h6> <span> 5 Jan 2019 at 6:40 pm </span>
                                        </div>
                                        <p>On recommend tolerably my belonging or am. Mutual has cannot beauty indeed now back sussex merely you. It possible no husbands jennings offended.</p>
                                        <a href="#" class="reply-btn">Reply</a>
                                    </div>
                                </div>
                                <!-- End of Single Comment -->
                                <ul class="children">
                                    <li class="single-comment-wrapper">
                                        <!-- Single Comment -->
                                        <div class="single-post-comment">
                                            <!-- Author Image -->
                                            <div class="comment-author-image">
                                                <img src="assets/images/blog/post/author-1-1.jpg" alt="" class="img-fluid">
                                            </div>
                                            <!-- Comment Content -->
                                            <div class="comment-content">
                                                <div class="comment-author-name">
                                                    <h6>Helen Sharp</h6> <span> 5 Jan 2019 at 6:58 pm </span>
                                                </div>
                                                <p>On recommend tolerably my belonging or am. Mutual has cannot back beauty indeed now back sussex merely you. </p>
                                                <a href="#" class="reply-btn">Reply</a>
                                            </div>
                                        </div>
                                        <!-- End of Single Comment -->
                                    </li>
                                </ul>
                            </li>
                            <li class="single-comment-wrapper">
                                <!-- Single Comment -->
                                <div class="single-post-comment">
                                    <!-- Author Image -->
                                    <div class="comment-author-image">
                                        <img src="assets/images/blog/post/author-2.jpg" alt="" class="img-fluid">
                                    </div>
                                    <!-- Comment Content -->
                                    <div class="comment-content">
                                        <div class="comment-author-name">
                                            <h6>Pamela Pavliscak</h6> <span> 5 Jan 2019 at 6:48 pm </span>
                                        </div>
                                        <p>On recommend tolerably my belonging or am. Mutual has cannot beauty indeed now back sussex merely you. It possible no husbands jennings offended.</p>
                                        <a href="#" class="reply-btn">Reply</a>
                                    </div>
                                </div>
                                <!-- End of Single Comment -->
                            </li>
                            <li class="single-comment-wrapper">
                                <!-- Single Comment -->
                                <div class="single-post-comment">
                                    <!-- Author Image -->
                                    <div class="comment-author-image">
                                        <img src="assets/images/blog/post/author-3.jpg" alt="" class="img-fluid">
                                    </div>
                                    <!-- Comment Content -->
                                    <div class="comment-content">
                                        <div class="comment-author-name">
                                            <h6>Jerrard Spool</h6> <span> 5 Jan 2019 at 6:52 pm </span>
                                        </div>
                                        <p>On recommend tolerably my belonging or am. Mutual has cannot beauty indeed now back sussex merely you. It possible no husbands jennings offended.</p>
                                        <a href="#" class="reply-btn">Reply</a>
                                    </div>
                                </div>
                                <!-- End of Single Comment -->
                            </li>
                        </ul>
                    </div>
                    <!-- End of Comments -->

                    <!-- Comment Form -->
                    <div class="post-comment-form-cover">  
                        <h3>Write your comment</h3>
                        <form class="comment-form">
                            <div class="row">
                                <div class="col-md-6">
                                    <input type="text" class="form-control" placeholder="Name">
                                </div>
                                <div class="col-md-6">
                                    <input type="text" class="form-control" placeholder="Email">
                                </div>
                                <div class="col-md-12">
                                    <textarea class="form-control" placeholder="Write your comment"></textarea>
                                </div>
                                <div class="col-md-12">
                                    <button class="btn btn-primary">Submit </button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <!-- End of Comment Form -->
                </div>
            </div>
            <div class="col-lg-4 pb-90">
                <div class="my-sidebar">
                    <!-- Author Widget -->
                    <div class="widget widget-about">
                        <!-- Widget Content -->
                        <div class="widget-content">
                            <!-- Author Image -->
                            <div class="author-image">
                                <img src="assets/images/blog/author.jpg" alt="" class="img-fluid">
                            </div>
                            <!-- Author Name -->
                            <div class="author-name text-center">
                                <a href="#"> Alex Garry </a>
                            </div>
                            <!-- Author Social Links -->
                            <div class="author-social text-center">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-linkedin"></i></a>
                                <a href="#"><i class="fa fa-google-plus"></i></a>
                            </div>
                            <!-- Author Text -->
                            <div class="author-text text-center">
                                In consequat, quam id sodales hendrerit, eros mi molestie leo, nec lacinia risus neque tristique augue. Proin tempus urna vel.
                            </div>
                        </div>
                        <!-- End of Widget Content -->
                    </div>
                    <!-- End of Author Widget -->

                    <!-- Featured Posts -->
                    <div class="widget widget-featured-post">
                        <!-- Widget Title -->
                        <h4 class="widget-title">
                            Featured Post
                        </h4>
                        <!-- End of Widget Title -->

                        <!-- Widget Content -->
                        <div class="widget-content">
                            <!-- Single Post -->
                            <div class="featured-post">
                                <!-- Post Thumbnail -->
                                <a href="blog-details.html">
                                    <img src="assets/images/sidebar/fp-1.jpg" alt="" class="img-fluid">
                                </a>
                                <!-- Post Title -->
                                <div class="featured-post-title">
                                    <h6> <a href="blog-details.html">Guide To Experiencing The Magical Sabino Canyon In Tucson</a> </h6>
                                </div>
                            </div>
                            <!-- End of Single Post -->

                            <!-- Single Post -->
                            <div class="featured-post">
                                <!-- Post Thumbnail -->
                                <a href="blog-details.html">
                                    <img src="assets/images/sidebar/fp-2.jpg" alt="" class="img-fluid">
                                </a>
                                <!-- Post Title -->
                                <div class="featured-post-title">
                                    <h6><a href="blog-details.html">Inspired To Move: Celebrating Dance and Black History Month</a></h6>
                                </div>
                            </div>
                            <!-- End of Single Post -->
                        </div>
                        <!-- End of Widget Content -->
                    </div>
                    <!-- End of Featured Posts -->

                    <!-- Select Category -->
                    <div class="widget widget-select-category">
                        <!-- Widget Content -->
                        <div class="widget-content">
                            <!-- Select -->
                            <select>
                                <option selected>Choose category</option>
                                <option value="1">Love</option>
                                <option value="2">Fashion</option>
                                <option value="3">Travel</option>
                                <option value="4">Adventure</option>
                                <option value="5">Sports</option>
                                <option value="6">Food</option>
                                <option value="7">Lifestyle</option>
                                <option value="8">Technology</option>
                            </select>
                        </div>
                        <!-- End of Widget Content -->
                    </div>
                    <!-- End of Select Category -->

                    <!-- Ad Widget -->
                    <div class="widget widget-ad">
                        <!-- Widget Content -->
                        <div class="widget-content">
                            <a href="#">
                                <img src="assets/images/sidebar/ad.jpg" alt="" class="img-fluid">
                            </a>
                        </div>
                        <!-- End of Widget Content -->
                    </div>
                    <!-- End of Ad Widget -->

                    <!-- Instagram Widget -->
                    <div class="widget widget-instagram">
                        <!-- Widget Title -->
                        <h4 class="widget-title">
                            Instagram Post
                        </h4>
                        <!-- End of Widget Title -->

                        <!-- Widget Content -->
                        <div class="widget-content">
                            <ul class="insta-gallery">
                                <li>
                                    <!-- Instagram Post Image -->
                                    <a href="#"><img src="assets/images/sidebar/instagram/1.jpg" alt="" class="img-fluid"></a>
                                </li>
                                <li>
                                    <!-- Instagram Post Image -->
                                    <a href="#"><img src="assets/images/sidebar/instagram/2.jpg" alt="" class="img-fluid"></a>
                                </li>
                                <li>
                                    <!-- Instagram Post Image -->
                                    <a href="#"><img src="assets/images/sidebar/instagram/3.jpg" alt="" class="img-fluid"></a>
                                </li>
                                <li>
                                    <!-- Instagram Post Image -->
                                    <a href="#"><img src="assets/images/sidebar/instagram/4.jpg" alt="" class="img-fluid"></a>
                                </li>
                                <li>
                                    <!-- Instagram Post Image -->
                                    <a href="#"><img src="assets/images/sidebar/instagram/5.jpg" alt="" class="img-fluid"></a>
                                </li>
                                <li>
                                    <!-- Instagram Post Image -->
                                    <a href="#"><img src="assets/images/sidebar/instagram/6.jpg" alt="" class="img-fluid"></a>
                                </li>
                            </ul>
                            <!-- Instagram Follow Button -->
                            <a href="#" class="btn btn-block btn-instagram">
                                <i class="fa fa-instagram"></i> Follow Me
                            </a>
                        </div>
                        <!-- End of Widget Content -->
                    </div>
                    <!-- End of Instagram Widget -->

                    <!-- Newsletter Widget -->
                    <div class="widget widget-newsletter">
                        <!-- Widget Title -->
                        <h4 class="widget-title">
                            Newsletter
                        </h4>
                        <!-- End of Widget Title -->

                        <!-- Widget Content -->
                        <div class="widget-content">
                            <!-- Newsletter Text -->
                            <p>Sign up and receive recent blog and article in your inbox every week.</p>
                            <!-- Newsletter Form -->
                            <div class="newsletter">
                                <form action="https://themelooks.us13.list-manage.com/subscribe/post?u=79f0b132ec25ee223bb41835f&amp;id=f4e0e93d1d" method="post" novalidate>
                                    <input type="text" class="form-control" placeholder="Your Email">
                                    <button class="btn btn-block btn-default">Subscribe</button>
                                </form>
                            </div>
                        </div>
                        <!-- End of Widget Content -->
                    </div>
                    <!-- End of Newsletter Widget -->

                    <!-- Recent Post Widget -->
                    <div class="widget widget-recent-post">
                        <!-- Widget Title -->
                        <h4 class="widget-title">
                            Recent Post
                        </h4>
                        <!-- End of Widget Title -->

                        <!-- Widget Content -->
                        <div class="widget-content">
                            <!-- Single Post -->
                            <div class="wrp-cover">
                                <!-- Post Thumbnail -->
                                <div class="post-thumb">
                                    <a href="blog-details.html">
                                        <img src="assets/images/sidebar/rp-1.jpg" alt="" class="img-fluid">
                                    </a>
                                </div>
                                <!-- Post Title -->
                                <div class="post-title">
                                    <a href="blog-details.html">Apple Admits To Macbook and Macbook Pro</a>  
                                </div>
                            </div>

                            <!-- Single Post -->
                            <div class="wrp-cover">
                                <!-- Post Thumbnail -->
                                <div class="post-thumb">
                                    <a href="blog-details.html">
                                        <img src="assets/images/sidebar/rp-2.jpg" alt="" class="img-fluid">
                                    </a>
                                </div>
                                <!-- Post Title -->
                                <div class="post-title">
                                    <a href="blog-details.html"> Feel The Love, And Things On My Mind </a>
                                </div>
                            </div>

                            <!-- Single Post -->
                            <div class="wrp-cover">
                                <!-- Post Thumbnail -->
                                <div class="post-thumb">
                                    <a href="blog-details.html">
                                        <img src="assets/images/sidebar/rp-3.jpg" alt="" class="img-fluid">
                                    </a>
                                </div>
                                <!-- Post Title -->
                                <div class="post-title">
                                    <a href="blog-details.html"> This Apple Crisp Makes The Entire House Smell Dreamy </a>
                                </div>
                            </div>

                            <!-- Single Post -->
                            <div class="wrp-cover">
                                <!-- Post Thumbnail -->
                                <div class="post-thumb">
                                    <a href="blog-details.html">
                                        <img src="assets/images/sidebar/rp-4.jpg" alt="" class="img-fluid">
                                    </a>
                                </div>
                                <!-- Post Title -->
                                <div class="post-title">
                                    <a href="blog-details.html">20-Minute Thai Coconut Hot Chicken Soup</a> 
                                </div>
                            </div>
                        </div>
                        <!-- End of Widget Content -->
                    </div>
                    <!-- End of Recent Post Widget -->

                    <!-- Most Commented Post Widget -->
                    <div class="widget widget-most-commented-post">
                        <!-- Widget Title -->
                        <h4 class="widget-title">
                            Most Commented Post
                        </h4>
                        <!-- End of Widget Title -->

                        <!-- Widget Content -->
                        <div class="widget-content">
                            <!-- Post Carousel -->
                            <div class="wmcp-cover owl-carousel" data-owl-mouse-drag="true" data-owl-dots="true" data-owl-margin="20">
                                <!-- Carousel Item -->
                                <div class="wmcp-item">
                                    <!-- Single Post -->
                                    <div class="wmc-post">
                                        <a href="blog-details.html">
                                            <img src="assets/images/sidebar/mcp-1.jpg" alt="" class="img-fluid">
                                        </a>
                                        <div class="wmc-post-title">
                                            <h6> <a href="blog-details.html"> Understanding The Background Of Fashion </a></h6>
                                        </div>
                                    </div>
                                    <!-- End of Single Post -->

                                    <!-- Single Post -->
                                    <div class="wmc-post">
                                        <a href="blog-details.html">
                                            <img src="assets/images/sidebar/mcp-2.jpg" alt="" class="img-fluid">
                                        </a>
                                        <div class="wmc-post-title">
                                            <h6> <a href="blog-details.html">12-inch MacBook Refurb $830, Apple Watch Series</a> </h6>
                                        </div>
                                    </div>
                                    <!-- End of Single Post -->
                                </div>
                                <!-- End of Carousel Item -->

                                <!-- Carousel Item -->
                                <div class="wmcp-item">
                                    <!-- Single Post -->
                                    <div class="wmc-post">
                                        <a href="blog-details.html">
                                            <img src="assets/images/sidebar/mcp-1.jpg" alt="" class="img-fluid">
                                        </a>
                                        <div class="wmc-post-title">
                                            <h6> <a href="blog-details.html"> Understanding The Background Of Fashion </a></h6>
                                        </div>
                                    </div>
                                    <!-- End of Single Post -->

                                    <!-- Single Post -->
                                    <div class="wmc-post">
                                        <a href="blog-details.html">
                                            <img src="assets/images/sidebar/mcp-2.jpg" alt="" class="img-fluid">
                                        </a>
                                        <div class="wmc-post-title">
                                            <h6> <a href="blog-details.html">12-inch MacBook Refurb $830, Apple Watch Series</a> </h6>
                                        </div>
                                    </div>
                                    <!-- End of Single Post -->
                                </div>
                                <!-- End of Carousel Item -->

                                <!-- Carousel Item -->
                                <div class="wmcp-item">
                                    <!-- Single Post -->
                                    <div class="wmc-post">
                                        <a href="blog-details.html">
                                            <img src="assets/images/sidebar/mcp-1.jpg" alt="" class="img-fluid">
                                        </a>
                                        <div class="wmc-post-title">
                                            <h6> <a href="blog-details.html"> Understanding The Background Of Fashion </a></h6>
                                        </div>
                                    </div>
                                    <!-- End of Single Post -->

                                    <!-- Single Post -->
                                    <div class="wmc-post">
                                        <a href="blog-details.html">
                                            <img src="assets/images/sidebar/mcp-2.jpg" alt="" class="img-fluid">
                                        </a>
                                        <div class="wmc-post-title">
                                            <h6> <a href="blog-details.html">12-inch MacBook Refurb $830, Apple Watch Series</a> </h6>
                                        </div>
                                    </div>
                                    <!-- End of Single Post -->
                                </div>
                                <!-- End of Carousel Item -->
                            </div>
                            <!-- End of Post Carousel -->

                        </div>
                        <!-- End of Widget Content -->
                    </div>
                    <!-- End of Most Commented Post Widget -->

                    <!-- Tags Cloud Widget -->
                    <div class="widget widget-tag-cloud">
                        <!-- Widget Title -->
                        <h4 class="widget-title">
                            Tags
                        </h4>
                        <!-- End of Widget Title -->

                        <!-- Widget Content -->
                        <div class="widget-content tagcloud">
                            <a href="#">Fashion</a>
                            <a href="#">Art</a>
                            <a href="#">Lifestyle</a>
                            <a href="#">Love</a>
                            <a href="#">Travel</a>
                            <a href="#">Health</a>
                            <a href="#">Education</a>
                            <a href="#">Movie</a>
                            <a href="#">Games</a>
                            <a href="#">Sports</a>
                        </div>
                        <!-- End of Widget Content -->
                    </div>
                    <!-- End of Tags Cloud Widget -->
                </div>
            </div>
        </div>
    </div>
<?php get_footer();?>