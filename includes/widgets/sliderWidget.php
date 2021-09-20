<?php

function slider_register_widget() {
    register_widget( 'sliderWidget' );
}
add_action( 'widgets_init', 'slider_register_widget' );

class sliderWidget extends WP_Widget {

    function __construct() {
        $widget_ops = [
            'description' => __( 'Un slider para tu sitio', 'sliderWidget_domain' )
        ];
        parent::__construct('sliderWidget', __('PreSchool Slider', ' sliderWidget_domain'), $widget_ops);

    }
    public function form( $instance ) {

        $instance = wp_parse_args( (array) $instance, array( 'title' => '' ) );
		$title    = $instance['title'];
        echo '<p>';
        echo '<label for="'.$this->get_field_id( 'title' ).'">'._e( 'Title:' ).'</label>';
		echo '<input class="widefat" id="'.$this->get_field_id( 'title' ).'" name="'.$this->get_field_name( 'title' ).'" type="text" value="'.esc_attr( $title ).'" />';
        echo '</p>';
       
    }
    public function widget( $args, $instance ) {
        $title = ! empty( $instance['title'] ) ? $instance['title'] : '';
        echo $args['before_widget'];
        if ( $title )
        echo '<div id="layerslider">';
        echo '
            <div class="ls-slide" data-ls="transition2d:104;timeshift:-2000;">
                <!-- Background image -->
                <img src="<?=get_template_directory_uri()?>/assets/img/slide1.jpg" class="ls-bg"  alt="Slide background"/>
                <!-- Parallax Image -->
                <img src="<?=get_template_directory_uri()?>/assets/img/sun.png" class="ls-l img-responsive hidden-xs hidden-sm parallax1" alt="" data-ls="delayin:1000;easingin:fadeIn;parallaxlevel:7;">
                <!-- Text -->
                <div class="ls-l header-text container" data-ls="offsetxin:0;durationin:2000;delayin:1500;easingin:easeOutElastic;rotatexin:-90;transformoriginin:50% top 0;offsetxout:-200;durationout:1000;parallaxlevel:2;">
                <h1>Welcome to Alphabet</h1>
                <p class="subtitle hidden-xs"> Alphabet is a Super Fun Daycare / Children HTML Theme including many Elements </p>
                <!-- Button -->
                <div class="page-scroll hidden-xs">
                    <a class="btn" href="#contact">Contact us</a>
                </div>
                </div>
                <!-- Parallax Image -->
                <img src="<?=get_template_directory_uri()?>/assets/img/flower.png" class="ls-l img-responsive hidden-xs hidden-sm parallax2" alt="" data-ls="delayin:1500;easingin:fadeIn;parallaxlevel:6;">
            </div>
        ';
        echo '</div>';

        echo $args['after_widget'];
        
    }
}