<?php get_header(); ?>
    <!-- Main Content -->
        <div class="container-fluid">
            <div class="row no-gutter">
                <div class="col-md-8">
                    <div class="left-content d-flex flex-column">
                        <h1 id="fp-tagline">
                            <div class="photo-circle">
                                <img src="<?php get_custom_img('set_fp_photo')?>" class="fp-photo" alt="">
                            </div>
                            <?php echo get_theme_mod('set_tagline') ?>
                        </h1>
                        <h2 id="fp-subheader"><?php echo get_theme_mod('set_subheader') ?></h2>
                        <h3 id="fp-quote"><i class="fas fa-quote-left fp-quote"></i> This is a testimonial. Lorem ipsum dolor sit amet, his ea hinc referrentur voluptatibus. Nemore vocent his in. Cu graecis oportere pro, ea sit wisi rationibus ullamcorper. <i class="fas fa-quote-right fp-quote"></i></h3>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="right-content">
                        <?php get_sidebar('home'); ?>
                    </div>
                    
                </div>
            </div>
        </div>
<?php get_footer(); ?>