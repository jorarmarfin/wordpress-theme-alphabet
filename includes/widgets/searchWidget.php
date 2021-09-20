<?php

function hstngr_register_widget() {
    register_widget( 'searchWidget' );
}
add_action( 'widgets_init', 'hstngr_register_widget' );

class searchWidget extends WP_Widget {

    function __construct() {
        $widget_ops = [
            'description' => __( 'A search form for your site.', 'searchWidget_domain' )
        ];
        parent::__construct('searchWidget', __('PreSchool Search', ' searchWidget_domain'), $widget_ops);
    }
    public function widget( $args, $instance ) {
        $title = ! empty( $instance['title'] ) ? $instance['title'] : '';

        $title = apply_filters( 'widget_title', $title, $instance, $this->id_base );

        echo $args['before_widget'];
        //if title is present
        if ( $title )
        echo $args['before_title'] . $title . $args['after_title'];
        //output
        get_search_form();

        echo $args['after_widget'];
    }
    public function form( $instance ) {
        $instance = wp_parse_args( (array) $instance, array( 'title' => '' ) );
		$title    = $instance['title'];

        ?>
		<p>
			<label for="<?php echo $this->get_field_id( 'title' ); ?>"><?php _e( 'Title:' ); ?></label>
			<input class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" type="text" value="<?php echo esc_attr( $title ); ?>" />
		</p>
		<?php
    }
    public function update( $new_instance, $old_instance ) {
		$instance          = $old_instance;
		$new_instance      = wp_parse_args( (array) $new_instance, array( 'title' => '' ) );
		$instance['title'] = sanitize_text_field( $new_instance['title'] );
		return $instance;
	}
    
}