<?php 

if ( is_singular() ) :
	?>

	<div class="featured-image">
		<?php the_post_thumbnail('landscape-home-page'); ?>
	</div><!-- .post-thumbnail -->

	<?php else : ?>

	<div class="featured-image">
		<?php if ( is_sticky() ) : ?>
			<a href="<?php the_permalink(); ?>" class="stickypost-link" title="<?php esc_attr_e( 'Featured', 'sapor' ); ?>"><span class="screen-reader-text"><?php _e( 'Featured', 'sapor' ); ?></span><?php _e( 'Featured', 'sapor' ); ?></a>
		<?php endif; ?>
		<a class="featured-link" href="<?php the_permalink(); ?>" aria-hidden="true">
			<?php
				the_post_thumbnail( 'landscape-home-page', array( 'alt' => get_the_title() ) );
			?>
		</a>
	</div>

	<?php endif; // End is_singular()

?>