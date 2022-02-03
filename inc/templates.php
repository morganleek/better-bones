<?php
	// You'll need to update _themename youself here
	function _themename_post_template_layout() {
		$html = '';

		if( has_post_thumbnail() ) {
			if( function_exists( 'wei_image' ) ) {
				$html .= wei_image( // Image as Picture tag
					get_post_thumbnail_id(), 
					array(
						'type' => 'image',
						'sizes' => array(
							'768' => array(768, 400, true), 
							'1' => array(375, 0, false) 
						),
						'content' => '<h3>' . get_the_title() . '</h3>',
						'return' => true
					)
				);
			}
			else {
				$html .= get_the_post_thumbnail();
			}
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