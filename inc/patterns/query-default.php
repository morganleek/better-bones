<?php
	return array(
		'title'      => __( 'Default posts', '_themename' ),
		'categories' => array( 'query' ),
		'blockTypes' => array( 'core/query' ),
		'content'    => '<!-- wp:query {"query":{"perPage":12,"pages":0,"offset":0,"postType":"post","categoryIds":[],"tagIds":[],"order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false}} -->
						<div class="wp-block-query"><!-- wp:post-template -->
						<!-- wp:post-featured-image /-->
						
						<!-- wp:post-date /-->
						
						<!-- wp:post-title /-->
						
						<!-- wp:paragraph -->
						<p>This is a block pattern. Update in inc/patterns...</p>
						<!-- /wp:paragraph -->
						<!-- /wp:post-template -->
						
						<!-- wp:query-pagination -->
						<!-- wp:query-pagination-previous /-->
						
						<!-- wp:query-pagination-numbers /-->
						
						<!-- wp:query-pagination-next /-->
						<!-- /wp:query-pagination --></div>
						<!-- /wp:query -->',
	);
