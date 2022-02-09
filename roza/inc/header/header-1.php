<?php
/**
 * Header action
 * @package Roza
 */

function roza_header_style_1(){ ?>
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'roza' ); ?></a>
	<header id="masthead" class="header-area <?php if(has_header_image() && is_front_page()): ?>roza-header-img<?php endif; ?>">
		<?php if(has_header_image() && is_front_page()): ?>
	        <div class="header-img"> 
	        	<?php the_header_image_tag(); ?>
	        </div>
        <?php endif; ?>
		<div class="container">
			<div class="row">
				<div class="col-lg-4">
					<div class="site-branding">
						<?php
						the_custom_logo();
						if ( is_front_page() && is_home() ) :
							?>
							<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
							<?php
						else :
							?>
							<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
							<?php
						endif;
						$roza_description = get_bloginfo( 'description', 'display' );
						if ( $roza_description || is_customize_preview() ) :
							?>
							<p class="site-description"><?php echo esc_html($roza_description); ?></p>
						<?php endif; ?>
					</div><!-- .site-branding -->
				</div>
				<div class="col-lg-8 text-right">
					<div class="roza-responsive-menu"></div>
					<button class="screen-reader-text menu-close"><?php esc_html_e( 'Close Menu', 'roza' ); ?></button>
					<div class="mainmenu">
						<?php
							wp_nav_menu( array(
								'theme_location' => 'menu-1',
								'menu_id'        => 'primary-menu',
							) );
						?>
					</div>
				</div>
			</div>
		</div>
	</header><!-- #masthead -->
<?php }
add_action('roza_header_style','roza_header_style_1');