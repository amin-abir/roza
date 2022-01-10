<?php
/**
 * Footer action
 * @package Roza
 */

function roza_footer_style_1(){ ?>
<footer class="footer-area">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="copyright">
					<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'roza' ) ); ?>">
						<?php
						/* translators: %s: CMS name, i.e. WordPress. */
						printf( esc_html__( 'Proudly powered by %s', 'roza' ), 'WordPress' );
						?>
					</a>
				</div>
			</div>
		</div>
	</div>
</footer>
<?php }
add_action('roza_footer_style','roza_footer_style_1');