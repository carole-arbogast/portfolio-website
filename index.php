<?php get_header(); ?>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8">
                <div class="left-content">
                <div class="d-flex justify-content-between flex-wrap align-items-center">
                    <div>
                        <h1><?php wp_title(''); ?></h1>
                    </div>
                    
                    <?php wp_nav_menu( array(
                        'theme_location' => 'tags_menu', 
                        'menu_class' => 'tags-menu' 
                        ) ); ?>             
                </div>

                    <div class="row">
                            <?php 

                            // If there are any posts
                            if( have_posts() ):
                                // While have posts, show them to us
                                while( have_posts() ): the_post();

                                // Require the file which is at template-parts/content.php (by default)
                                get_template_part( 'template-parts/content', get_post_format() );

                                endwhile;
                                ?>
                    </div>
                    
                    <?php
                        else: 
                    ?>

                        <p><?php _e( 'There are no posts yet!'); ?></p>

                    <?php endif; ?>                                      
                </div>
            </div>

            <div class="col-md-4">
                <div class="right-content">
                    <?php get_sidebar('general'); ?>
                </div>
            </div>

        </div>
    </div>
<?php get_footer(); ?>