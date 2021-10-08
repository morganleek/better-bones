<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<?php do_action( '_themename_before_entry_content' ); ?>
	<div class="entry-content">
		<?php do_action( '_themename_before_content' ); ?>
		<?php the_content(); ?>
		<?php do_action( '_themename_after_content' ); ?>
	</div><!-- .entry-content -->
	<?php do_action( '_themename_after_entry_content' ); ?>
</article><!-- #post-<?php the_ID(); ?> -->
