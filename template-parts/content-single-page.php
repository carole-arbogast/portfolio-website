<article id="post-<?php the_ID();?>" <?php post_class(); ?>>
    
    <header>
        <h1><?php the_title(); ?></h1>
        <?php the_post_thumbnail( 'full', array( 'class' => 'img-fluid thumbnail' ) ); ?>
    </header>

    <div class="content">
        <?php the_content(); ?>
    </div>

</article>