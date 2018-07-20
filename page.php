<?php get_header();  ?>

<div class="container main-content">
	<div class="row">
		<div class="col-md-8">
                <?php 

                while( have_posts() ):
                    the_post();
                    get_template_part( 'template-parts/content', 'single-page' );

                    ?>
                    

                    <?php

                    // Display a comment form if this post is open to comments
                    if( comments_open() || get_comments_number() ):
                        // Display the default comments form, or a custom form (type the custom filename inside the parenthesis).
                        // Example: comments_template( 'filename.php' );
                        comments_template();
                    endif;

                endwhile;

                ?>                
        </div>
        <div class="col-md-4">
            <?php get_sidebar('general'); ?>          
        </div>
	</div>
</div>

<?php get_footer(); ?>