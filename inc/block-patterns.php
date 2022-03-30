<?php
	function _themename_register_block_patterns() {
		$block_patterns = array(
			'query-default'
		);

		// Allow filtering of patterns
		$block_patterns = apply_filters( '_themename_block_patterns', $block_patterns );

		foreach ( $block_patterns as $block_pattern ) {
			$pattern_file = get_theme_file_path( '/inc/patterns/' . $block_pattern . '.php' );
	
			register_block_pattern(
				'_themename/' . $block_pattern,
				require $pattern_file
			);
		}
	}

	add_action( 'init', '_themename_register_block_patterns', 9 );