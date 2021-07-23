<?php

class Nada_Salama_Map_Widget extends WP_Widget {

    public $args = array(
        'before_title'  => '',
        'after_title'   => '',
        'before_widget' => '<section class="widget">',
        'after_widget'  => '</section>',
    );

    public function __construct() {
        parent::__construct(
            'map_widget',
            __( 'Map', 'nadasalama' ),
            array(
                'description' => __( 'Widget for Map' ),
            )
        );

        add_action( 'widgets_init', function() {
            register_widget( 'Nada_Salama_Map_Widget' );
        });
    }

    public function widget( $args, $instance ) {
        echo $args['before_widget'];

        $enable = get_theme_mod( 'nada_salama_about_enable_disable' );
        ?>

        <a href="#"><img class="opacity-75 w-full h-auto" src="<?php echo get_template_directory_uri(); ?>/assets/img/world-map.svg"></a>

        <?php
        echo $args['after_widget'];
    }

    public function form( $instance ) {
        $link = get_theme_mod( 'nada_salama_google_map' );

        if ( empty( $link ) ) :
            ?><p>Make sure you define Google Map Link for map at Contact and Social Media panel.</p><?php
        endif;
    }

    public function update( $new_instance, $old_instance ) {
        return array();
    }

}

$nada_salama_map_widget = new Nada_Salama_Map_Widget();
