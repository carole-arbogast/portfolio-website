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
                        <div id="fp-quote">
                            <h3><i class="fas fa-quote-left fp-quote"></i> Carole has good human relation skills, is extremely organized, can work independently, and is able to follow through to ensure that the job gets done. <i class="fas fa-quote-right fp-quote"></i></h3>
                            <p class="blockquote-footer">Johanna Hemminki, CEO & Founder of <a href="http://eliasrobot.com">Utelias Technologies</a></p>                            
                        </div>

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