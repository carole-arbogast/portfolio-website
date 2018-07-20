<div class="col-xl-4 col-md-6">
	<a href="<?php the_permalink(); ?>">
		<div class="thumbnail-container">
			<?php the_post_thumbnail( 'full', array( 'class' => 'img-fluid' ) ); ?>
			<div class="overlay">
				<h3><?php the_title(); ?></h3>
				<p><?php the_excerpt(); ?></p>
			</div>
		</div>
	</a>
	<?php the_meta(); ?>

</div>