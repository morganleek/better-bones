<?php

	function _themename_post_template_layout() {
		$html = '';

		if( has_post_thumbnail() ) {
			$html .= '<div class="image-outer">' . get_post_thumbnail_id() . '</div>';
		}
		$html .= '<h3>' . get_the_title() . '</h3>';

		// Get excerpt
		ob_start();
		the_excerpt();
		$html .= ob_get_contents();
		ob_end_clean();

		return $html;
	}