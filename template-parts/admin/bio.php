<div class="social-icons">

                            <?php 
                        $sa1_facebook = get_field("facebook", "user_".get_the_author_meta("ID"));
                        $sa1_twitter = get_field("twitter", "user_".get_the_author_meta("ID"));
                        $sa1_instagram = get_field("instagram", "user_".get_the_author_meta("ID"));
                        $sa1_youtube = get_field("youtube", "user_".get_the_author_meta("ID"));
                        ?>

                            <?php if ( $sa1_facebook ) : ?>
                                <a href="<?php echo esc_url($sa1_facebook);?>"><i class="fa fa-facebook"></i></a>
                            <?php endif; ?>

                            <?php if ( $sa1_twitter ) : ?>
                                <a href="<?php echo esc_url($sa1_twitter);?>"><i class="fa fa-twitter"></i></a>
                            <?php endif; ?>

                            <?php if ( $sa1_instagram ) : ?>
                                <a href="<?php echo esc_url($sa1_instagram);?>"><i class="fa fa-instagram"></i></a>
                            <?php endif; ?>

                            <?php if ( $sa1_youtube ) : ?>
                                <a href="<?php echo esc_url($sa1_youtube);?>"><i class="fa fa-youtube"></i></a>
                            <?php endif; ?>

                            </div>