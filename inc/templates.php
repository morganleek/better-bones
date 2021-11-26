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

	// Set default layout for post types
	// function _themename_default_post_type_templates() {
  //   global $wp_post_types;

  //   $wp_post_types['post']->template = array(
  //     array( 'core/image', array(
  //         'align' => 'left',
  //     ) ),
  //     array( 'core/heading', array(
  //         'placeholder' => 'Add Author...',
  //     ) ),
  //     array( 'core/paragraph', array(
  //         'placeholder' => 'Add Description...',
  //     ) )
  //   );
  // }

  // add_action( 'init', '_themename_default_post_type_templates', 1 );

	// Not full understood yet
	// function _themename_default_content( $post_content, $post ) {
	// 	___( $post_content );
	// 	___( $post );
	// 	die();
	// }

	// add_filter( 'default_content', '_themename_default_content', 10, 2 );