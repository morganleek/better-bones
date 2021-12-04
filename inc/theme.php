<?php 

	// Theme setup
	function _themename_setup() {
		// default block styles
		add_theme_support( 'wp-block-styles' );

		// wide alignment
		add_theme_support( 'align-wide' );

		// post thumbnails
		add_theme_support( 'post-thumbnails', array( 'post' ) );

		// border
		add_theme_support( 'disable-border-settings' );

		// responsive embedded content.
		add_theme_support( 'responsive-embeds' );

		// custom spacing 
		// add_theme_support( 'custom-spacing' );

		// editor styles
		add_theme_support( 'editor-styles' );

		// enqueue editor styles
		add_editor_style( 'dist/css/admin.css' );

		// add inline style for :root font-size for rem values
		wp_add_inline_style( 'wp-block-library', ':root { font-size:10px; }' );

		// patterns: _themename_patterns() below
	}
	
	add_action( 'after_setup_theme', '_themename_setup', 100 );

	function _themename_patterns() {
		// remove patterns 
		remove_theme_support( 'core-block-patterns' );

		// register group
		// register_block_pattern_category( "group", 
		//   array( 'label' => 'Group' )
		// );

		// register pattern
		// register_block_pattern(
		//   'better-bones/test-pattern',
		//   array(
		//     'title'       => __( 'Test Pattern', '_themename' ),
		//     'description' => _x( 'Ensure pattern is working...', 'Block pattern description', '_themename' ),
		//     'content'     => "<!-- wp:group --><div class=\"wp-block-group\"><!-- wp:columns --><div class=\"wp-block-columns\"><!-- wp:column --><div class=\"wp-block-column\"><!-- wp:image --><figure class=\"wp-block-image\"><img alt=\"\"/></figure><!-- /wp:image --></div><!-- /wp:column --><!-- wp:column --><div class=\"wp-block-column\"><!-- wp:heading {\"level\":4} --><h4>Donec sodales sagittis magna</h4><!-- /wp:heading --><!-- wp:paragraph --><p>Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Sed fringilla mauris sit amet nibh. Donec sodales sagittis magna. Curabitur ligula sapien, tincidunt non, euismod vitae, posuere imperdiet, leo.</p><!-- /wp:paragraph --><!-- wp:paragraph --><p>Morbi ac felis. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. In hac habitasse platea dictumst. Cras id dui. Nullam tincidunt adipiscing enim.</p><!-- /wp:paragraph --></div><!-- /wp:column --><!-- wp:column --><div class=\"wp-block-column\"><!-- wp:paragraph --><p>Aenean imperdiet. Cras id dui. Quisque malesuada placerat nisl. Donec elit libero, sodales nec, volutpat a, suscipit non, turpis. Praesent nec nisl a purus blandit viverra.</p><!-- /wp:paragraph --></div><!-- /wp:column --></div><!-- /wp:columns --></div><!-- /wp:group -->",
		//     'categories'  => ["group"]
		//   )
		// );
	}

	add_action( 'init', '_themename_patterns' );

	// Hide some blocks
	// function _themename_allowed_block_types( $allowed_blocks ) {  
	//   return array(
	//     // 'scm/block-list-post-type', // custom type
	//     'core/block',
	//     'core/paragraph',
	//     'core/image',
	//     'core/heading',
	//     'core/gallery',
	//     'core/list',
	//     'core/quote',
	//     'core/pullquote',
	//     'core/audio',
	//     'core/file',
	//     'core/group',
	//     'core/separator',
	//     'core/buttons',
	//     'core/columns',
	//     'core/media-text',
	//     'core/spacer',
	//     'core/cover',
	//     'core/shortcode'
	//     'formidable/simple-form',
	//     'acf/navigation',
	//     'good-bones/block-testimonial',
	//     'good-bones/block-testimonials',
	//     'good-bones/block-gb-maps'
	//   );
	// }

	// add_filter( 'allowed_block_types', '_themename_allowed_block_types' );

	// Block Styles
	function _themename_register_block_styles() {
		// Add styles
		
		// Media & Text
		register_block_style( 'core/media-text', [
			'name' => 'stacked',
			'label' => __( 'Stacked', '_themename' )
		] );

		// Cover
		// register_block_style( 'core/cover', [
		//   'name' => 'banner-reversed',
		//   'label' => __( 'Reversed', '_themename' ),
		// ] );

		// Columns
		// register_block_style( 'core/columns', [
		//   'name' => 'no-bottom-margin',
		//   'label' => __( 'No bottom margin', '_themename' ),
		// ] );
		// register_block_style( 'core/columns', [
		//   'name' => 'columns-border',
		//   'label' => __( 'Columns border', '_themename' ),
		// ] );

		// Gallery
		// register_block_style( 'core/gallery', [
		//   'name' => 'gallery-slider',
		//   'label' => __( 'Gallery Slider', '_themename' ),
		// ] );

		// Buttons
		// register_block_style( 'core/button', [
		//   'name' => 'play',
		//   'label' => __( 'Play', '_themename' ),
		// ] );

	}

	add_action( 'init', '_themename_register_block_styles', 100 );

	// Init
	// function _themename_init() {
	// }

	// add_action( 'init', '_themename_init' );
