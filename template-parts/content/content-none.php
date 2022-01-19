<article class="no-results not-found">
	<?php do_action( '_themename_before_entry_content' ); ?>
	<div class="entry-content">
		<?php do_action( '_themename_before_content' ); ?>
		<div class="wp-block wp-block-group">
			<?php if ( is_search() ) : ?>
				<h1 class="page-title">
					<?php
					printf(
						/* translators: %s: search term. */
						esc_html__( 'Results for "%s"', 'twentytwentyone' ),
						'<span class="page-description search-term">' . esc_html( get_search_query() ) . '</span>'
					);
					?>
				</h1>
			<?php else : ?>
				<h1 class="page-title"><?php esc_html_e( 'Nothing here', 'twentytwentyone' ); ?></h1>
			<?php endif; ?>
			
			<?php if ( is_search() ) : ?>
				<p><?php esc_html_e( 'Sorry, but nothing matched your search terms. Please try again with some different keywords.', 'twentytwentyone' ); ?></p>
				<?php get_search_form(); ?>
			<?php else : ?>
				<p><?php esc_html_e( 'It seems we can&rsquo;t find what you&rsquo;re looking for. Perhaps searching can help.', 'twentytwentyone' ); ?></p>
				<?php get_search_form(); ?>
			<?php endif; ?>
		</div>

		
		<?php the_content(); ?>
		<?php do_action( '_themename_after_content' ); ?>
	</div><!-- .entry-content -->
	<?php do_action( '_themename_after_entry_content' ); ?>
</article><!-- #post-<?php the_ID(); ?> -->

