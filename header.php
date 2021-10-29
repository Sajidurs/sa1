<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <?php wp_head();?>
</head>

<body <?php body_class();?>>


    <!-- Nav Search Box -->
    <div class="nav-search-box">
        <form>
            <div class="input-group">
                <input type="text" class="form-control" placeholder="eg. feel the love and …">
                <span class="b-line"></span>
                <span class="b-line-under"></span>
                <div class="input-group-append">
                    <button type="button" class="btn">
                        <img src="<?php echo get_template_directory_uri();?>/assets/images/search-icon.svg" alt="" class="img-fluid svg">
                    </button>
                </div>
            </div>
        </form>
    </div>
    <!-- End of Nav Search Box -->
    
    <!-- Header -->
    <header class="header">
        <div class="header-fixed">
            <div class="container-fluid pl-120 pr-120 position-relative">
                <div class="row d-flex align-items-center">
                    
                    <div class="col-lg-3 col-md-4 col-6">
                        <!-- Logo -->
                        <div class="logo">
                            <a href="#"><img src="<?php echo get_template_directory_uri();?>/assets/images/logo.png" alt="" class="img-fluid"></a>
                        </div>
                        <!-- End of Logo -->
                    </div>

                    <div class="col-lg-9 col-md-8 col-6 d-flex justify-content-end position-static">
                        <!-- Nav Menu -->
                        <div class="nav-menu-cover">
                            <ul class="nav nav-menu">
                                <li><a href="index.html">Home</a></li>
                                <li><a href="about.html">About</a></li>
                                <li class="menu-item-has-children"><a href="#">Blog</a>
                                    <ul class="sub-menu">
                                        <li class="menu-item-has-children"><a href="#">Blog List</a>
                                            <ul class="sub-menu">
                                                <li><a href="blog-list-sidebar.html">List Sidebar</a></li>
                                                <li><a href="blog-list-full-width.html">List Full Width</a></li>
                                                <li><a href="blog-grid-sidebar.html">Grid Sidebar</a></li>
                                                <li><a href="blog-grid-2-col.html">Grid v2</a></li>
                                                <li><a href="blog-grid-3-col.html">Grid v3</a></li>
                                                <li><a href="blog-overlay.html">Blog Overlay</a></li>
                                                <li><a href="blog-card-v1.html">Blog Card v1</a></li>
                                                <li><a href="blog-card-v2.html">Blog Card v2</a></li>
                                            </ul>
                                        </li>
                                        <li class="menu-item-has-children"><a href="#">Blog Details</a>
                                            <ul class="sub-menu">
                                                <li><a href="blog-details.html">Default Style</a></li>
                                                <li><a href="blog-details-full-width.html">Full Width</a></li>
                                                <li><a href="blog-details-video.html">Video Post</a></li>
                                                <li><a href="blog-details-slide.html">Slide Post</a></li>
                                                <li><a href="blog-details-audio.html">Audio Post</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li class="menu-item-has-children"><a href="#">Pages </a>
                                    <ul class="sub-menu">
                                        <li><a href="categories.html">Categories</a></li>
                                        <li><a href="search-result.html">Search Results</a></li>
                                        <li><a href="404.html">404 Error</a></li>
                                    </ul>
                                </li>
                                <li><a href="contact.html">Contact</a></li>
                            </ul>
                        </div>
                        <!-- End of Nav Menu -->

                        <!-- Mobile Menu -->
                        <div class="mobile-menu-cover">
                            <ul class="nav mobile-nav-menu">
                                <li class="search-toggle-open">
                                    <img src="<?php echo get_template_directory_uri();?>/assets/images/search-icon.svg" alt="" class="img-fluid svg">
                                </li>
                                <li class="search-toggle-close hide">
                                    <img src="<?php echo get_template_directory_uri();?>/assets/images/close.svg" alt="" class="img-fluid">
                                </li>
                                <li class="nav-menu-toggle">
                                    <img src="<?php echo get_template_directory_uri();?>/assets/images/menu-toggler.svg" alt="" class="img-fluid svg">
                                </li>
                            </ul>
                        </div>
                        <!-- End of Mobile Menu -->
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- End of Header -->