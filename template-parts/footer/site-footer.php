<footer id="colophon">
	<div class="inner">
		<h1 id="site-logo"><a href="<?php bloginfo( 'url' ); ?>"><?php bloginfo( 'name' ); ?></a></h1>
		<nav>
			<?php 
				_themename_nav( array( 
					'theme_location' => 'footer'
				) );
			?>
		</nav>
		<div class="copyright">
			<p>&copy; <?php print date( 'Y' ); ?></p>
		</div>
		<div class="credit">
			<p>Designer Credit</p>
		</div>
	</div>
</footer><!-- #colophon -->