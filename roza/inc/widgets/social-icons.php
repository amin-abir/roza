<?php


//---------------------------------------------------------------------------
// Social icons widget
//---------------------------------------------------------------------------

class roza_social_Widget extends WP_Widget {

	public function __construct() {
		parent::__construct(
			'roza_social_button', // Base ID
			__( 'Roza Social Icons', 'roza' ), // Name
			array( 'description' => __( 'Displaying social icons', 'roza' ), ) // Args
		);
	}

	public function form( $instance ) {

		$title     = isset( $instance['title'] ) ? $instance['title'] : '';
		$facebook  = ( isset( $instance['facebook'] ) ) ? $instance['facebook'] : '';
		$twitter   = ( isset( $instance['twitter'] ) ) ? $instance['twitter'] : '';
		$google    = ( isset( $instance['google'] ) ) ? $instance['google'] : '';
		$pinterest = ( isset( $instance['pinterest'] ) ) ? $instance['pinterest'] : '';
		$dribbble  = ( isset( $instance['dribbble'] ) ) ? $instance['dribbble'] : '';
		$youtube   = ( isset( $instance['youtube'] ) ) ? $instance['youtube'] : '';

		?>

		<p>
			<label for="<?php echo esc_attr( $this->get_field_id( 'title' ) ); ?>"><?php esc_html_e( 'Title :', 'roza' );
				?></label>
			<input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'title' ) ); ?>"
			       name="<?php echo esc_attr( $this->get_field_name( 'title' ) ); ?>" type="text"
			       value="<?php echo esc_attr( $title ); ?>"/>
		</p>
		<p>
			<label
				for="<?php echo esc_attr( $this->get_field_id( 'facebook' ) ); ?>"><?php esc_html_e( 'Enter facebook URL:', 'roza' );
				?></label>
			<input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'facebook' ) ); ?>"
			       name="<?php echo esc_attr( $this->get_field_name( 'facebook' ) ); ?>" type="text"
			       value="<?php echo esc_url( $facebook ); ?>">
		</p>
		<p>
			<label
				for="<?php echo esc_attr( $this->get_field_id( 'twitter' ) ); ?>"><?php esc_html_e( 'Enter twitter URL:', 'roza' ); ?></label>
			<input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'twitter' ) ); ?>"
			       name="<?php echo esc_attr( $this->get_field_name( 'twitter' ) ); ?>" type="text"
			       value="<?php echo esc_url( $twitter ); ?>">
		</p>
		<p>
			<label
				for="<?php echo esc_attr( $this->get_field_id( 'google' ) ); ?>"><?php esc_html_e( 'Enter google URL:', 'roza' ); ?></label>
			<input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'google' ) ); ?>"
			       name="<?php echo esc_attr( $this->get_field_name( 'google' ) ); ?>" type="text"
			       value="<?php echo esc_url( $google ); ?>">
		</p>
		<p>
			<label
				for="<?php echo esc_attr( $this->get_field_id( 'pinterest' ) ); ?>"><?php esc_html_e( 'Enter pinterest URL:', 'roza' ); ?></label>
			<input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'pinterest' ) ); ?>"
			       name="<?php echo esc_attr( $this->get_field_name( 'pinterest' ) ); ?>" type="text"
			       value="<?php echo esc_url( $pinterest ); ?>">
		</p>
		<p>
			<label
				for="<?php echo esc_attr( $this->get_field_id( 'dribbble' ) ); ?>"><?php esc_html_e( 'Enter dribbble URL:', 'roza' ); ?></label>
			<input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'dribbble' ) ); ?>"
			       name="<?php echo esc_attr( $this->get_field_name( 'dribbble' ) ); ?>" type="text"
			       value="<?php echo esc_url( $dribbble ); ?>">
		</p>
		
		<p>
			<label
				for="<?php echo esc_attr( $this->get_field_id( 'youtube' ) ); ?>"><?php esc_html_e( 'Enter youtube URL:', 'roza' ); ?></label>
			<input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'youtube' ) ); ?>"
			       name="<?php echo esc_attr( $this->get_field_name( 'youtube' ) ); ?>" type="text"
			       value="<?php echo esc_url( $youtube ); ?>">
		</p>

		<?php
	}

	public function update( $new_instance, $old_instance ) {
		$instance              = array();
		$instance['title']     = sanitize_text_field( $new_instance['title'] );
		$instance['facebook']  = ( ! empty( $new_instance['facebook'] ) ) ? esc_url_raw( $new_instance['facebook'] ) : '';
		$instance['twitter']   = ( ! empty( $new_instance['twitter'] ) ) ? esc_url_raw( $new_instance['twitter'] ) : '';
		$instance['google']    = ( ! empty( $new_instance['google'] ) ) ? esc_url_raw( $new_instance['google'] ) : '';
		$instance['pinterest'] = ( ! empty( $new_instance['pinterest'] ) ) ? esc_url_raw( $new_instance['pinterest'] ) : '';
		$instance['dribbble']  = ( ! empty( $new_instance['dribbble'] ) ) ? esc_url_raw( $new_instance['dribbble'] ) : '';
		$instance['youtube']   = ( ! empty( $new_instance['youtube'] ) ) ? esc_url_raw( $new_instance['youtube'] ) : '';

		return $instance;
	}

	public function widget( $args, $instance ) {
		$title = apply_filters( 'widget_title', empty( $instance['title'] ) ? __( 'Social Icons', 'roza' ) :
			$instance['title'], $instance, $this->id_base );

		echo $args['before_widget'];
		if ( ! empty( $title ) ) {
			echo $args['before_title'] . $title . $args['after_title'];
		}
		?>

		<div class="roza-social-link">
			<ul class="list-inline">
				<?php $facebook_link = isset($instance['facebook']) ? $instance['facebook'] : '';
				if ( $facebook_link ) { ?>
					<li><a href="<?php echo esc_url( $facebook_link )?>"class="facebook"><i class="fa fa-facebook"></i></a></li>
				<?php } ?>

				<?php $twitter_link = isset($instance['twitter']) ? $instance['twitter'] : '';
				if ( $twitter_link ) { ?>
					<li><a href="<?php echo esc_url( $twitter_link )?>"class="twitter"><i class="fa fa-twitter"></i></a></li>
				<?php } ?>

				<?php $google_link = isset($instance['google']) ? $instance['google'] : '';
				if ( $google_link ) { ?>
					<li><a href="<?php echo esc_url( $google_link )?>"class="google-plus"><i class="fa fa-google-plus"></i></a></li>
				<?php } ?>


				<?php $dribbble_link = isset($instance['dribbble']) ? $instance['dribbble'] : '';
				if ( $dribbble_link ) { ?>
					<li><a href="<?php echo esc_url( $dribbble_link ) ?>" class="dribbble"><i class="fa fa-dribbble"></i></a></li>
				<?php } ?>

				
				<?php $youtube_link = isset($instance['youtube']) ? $instance['youtube'] : '';
				if ( $youtube_link ) { ?>
					<li><a href="<?php echo esc_url( $youtube_link ) ?>" class="youtube"><i class="fa fa-youtube"></i></a></li>
				<?php } ?>

			</ul>
		</div>


		<?php
		echo $args['after_widget'];
	}
}


// register widgets
if ( ! function_exists( 'roza_social_icon_register' ) ) {
	function roza_social_icon_register() {
		register_widget( 'roza_social_Widget' );
	}

	add_action( 'widgets_init', 'roza_social_icon_register' );
}

