<article id="post-<?php the_ID();?>" <?php post_class(); ?>>
    
    <header>
        <h1 class="post-title"><?php the_title(); ?></h1>
		<div class="meta-info">
			<p>Posted on <?php echo get_the_date(); ?> by <?php the_author_posts_link(); ?></p>
        </div>
    </header>

    <div class="content">
        <?php the_content(); ?>
    </div>
    <div class="d-flex justify-content-end">
        <a class="button" href="https://carole-arbogast.com/portfolio/"><i class="fas fa-arrow-left"></i> Go back to projects</a>
    </div>
    

</article>