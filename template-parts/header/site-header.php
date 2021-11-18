<header id="header">
	<div class="inner">
		<h1 id="site-logo"><a href="<?php bloginfo( 'url' ); ?>"><?php bloginfo( 'name' ); ?></a></h1>
		<button class="hamburger hamburger--squeeze" type="button" aria-label="Menu" aria-controls="navigation">
			<span class="hamburger-box">
				<span class="hamburger-inner"></span>
			</span>
		</button>
		<nav>
			<?php 
				_themename_nav( array( 
					'theme_location' => 'header'
				) );
			?>
		</nav>
	</div>
</header>