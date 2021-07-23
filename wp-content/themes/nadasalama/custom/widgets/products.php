<?php

class Nada_Salama_Products_Widget extends WP_Widget {

    public $args = array(
        'before_title'  => '',
        'after_title'   => '',
        'before_widget' => '<section class="widget">',
        'after_widget'  => '</section>',
    );

    public function __construct() {
        parent::__construct(
            'products_widget',
            __( 'Products', 'nadasalama' ),
            array(
                'description' => __( 'Widget for Products' ),
            )
        );

        add_action( 'widgets_init', function() {
            register_widget( 'Nada_Salama_Products_Widget' );
        });
    }

    public function widget( $args, $instance ) {
        $query = new WP_Query(  array(
            'post_type' => 'product',
        ) );

        if ( $query->have_posts() ) :
            echo $args['before_widget'];

            ?>
            <p class="font-black leading-none uppercase border-l-2 border-white pl-2">Products</p>

            <ul class="mt-4">

                <?php while ( $query->have_posts() ) : $query->the_post(); ?>
                    <li><a class="whitespace-nowrap text-gray-300 hover:text-white" href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
                <?php endwhile; wp_reset_postdata(); ?>

            </ul>
            <?php

            echo $args['after_widget'];
        endif;
    }

    public function form( $instance ) {}

    public function update( $new_instance, $old_instance ) {
        return array();
    }

}

$nada_salama_products_widget = new Nada_Salama_Products_Widget();
