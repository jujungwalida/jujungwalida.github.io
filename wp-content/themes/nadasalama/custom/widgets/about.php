<?php

class Nada_Salama_About_Widget extends WP_Widget {

    public $args = array(
        'before_title'  => '',
        'after_title'   => '',
        'before_widget' => '<section class="widget">',
        'after_widget'  => '</section>',
    );

    public function __construct() {
        parent::__construct(
            'about_widget',
            __( 'About', 'nadasalama' ),
            array(
                'description' => __( 'Widget for About' ),
            )
        );

        add_action( 'widgets_init', function() {
            register_widget( 'Nada_Salama_About_Widget' );
        });
    }

    public function widget( $args, $instance ) {
        echo $args['before_widget'];

        $logo      = empty( get_theme_mod( 'custom_logo' ) ) ? '' : wp_get_attachment_image_src( get_theme_mod( 'custom_logo' ) , 'full' )[0];
        $about     = get_theme_mod( 'nada_salama_about_company' );
        $facebook  = get_theme_mod( 'nada_salama_facebook' );
        $twitter   = get_theme_mod( 'nada_salama_twitter' );
        $instagram = get_theme_mod( 'nada_salama_instagram' );
        $linkedin  = get_theme_mod( 'nada_salama_linkedin' );

        ?>
        <div class="flex items-center space-x-2">
            <?php if ( ! empty( $logo ) ) : ?>
                <div class="flex-shrink-0"><img class="h-auto w-6" src="<?php echo esc_url_raw( $logo ); ?>"></div>
            <?php endif; ?>

            <div class="flex-grow"><p class="font-medium"><?php echo get_bloginfo( 'name' ); ?></div>
        </div>

        <p class="mt-4 mb-8"><?php echo esc_html__( $about ); ?></p>

        <ul class="flex space-x-3">
            <?php if ( ! empty( $facebook ) ) : ?>
                <li><a class="text-gray-300 hover:text-white" href="<?php echo esc_url_raw( $facebook ); ?>"><svg class="w-auto h-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512" fill="currentColor"><!-- Font Awesome Free 5.15.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free (Icons: CC BY 4.0, Fonts: SIL OFL 1.1, Code: MIT License) --><path fill-rule="evenodd" clip-rule="evenodd" d="M279.14 288l14.22-92.66h-88.91v-60.13c0-25.35 12.42-50.06 52.24-50.06h40.42V6.26S260.43 0 225.36 0c-73.22 0-121.08 44.38-121.08 124.72v70.62H22.89V288h81.39v224h100.17V288z"></path></svg></a></li>
            <?php endif; ?>

            <?php if ( ! empty( $twitter ) ) : ?>
                <li><a class="text-gray-300 hover:text-white" href="<?php echo esc_url_raw( $twitter ); ?>"><svg class="w-auto h-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" fill="currentColor"><!-- Font Awesome Free 5.15.3 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free (Icons: CC BY 4.0, Fonts: SIL OFL 1.1, Code: MIT License) --><path fill-rule="evenodd" clip-rule="evenodd" d="M459.37 151.716c.325 4.548.325 9.097.325 13.645 0 138.72-105.583 298.558-298.558 298.558-59.452 0-114.68-17.219-161.137-47.106 8.447.974 16.568 1.299 25.34 1.299 49.055 0 94.213-16.568 130.274-44.832-46.132-.975-84.792-31.188-98.112-72.772 6.498.974 12.995 1.624 19.818 1.624 9.421 0 18.843-1.3 27.614-3.573-48.081-9.747-84.143-51.98-84.143-102.985v-1.299c13.969 7.797 30.214 12.67 47.431 13.319-28.264-18.843-46.781-51.005-46.781-87.391 0-19.492 5.197-37.36 14.294-52.954 51.655 63.675 129.3 105.258 216.365 109.807-1.624-7.797-2.599-15.918-2.599-24.04 0-57.828 46.782-104.934 104.934-104.934 30.213 0 57.502 12.67 76.67 33.137 23.715-4.548 46.456-13.32 66.599-25.34-7.798 24.366-24.366 44.833-46.132 57.827 21.117-2.273 41.584-8.122 60.426-16.243-14.292 20.791-32.161 39.308-52.628 54.253z"/></svg></a></li>
            <?php endif; ?>

            <?php if ( ! empty( $instagram ) ) : ?>
                <li><a class="text-gray-300 hover:text-white" href="<?php echo esc_url_raw( $instagram ); ?>"><svg class="w-auto h-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" fill="currentColor"><!-- Font Awesome Free 5.15.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free (Icons: CC BY 4.0, Fonts: SIL OFL 1.1, Code: MIT License) --><path fill-rule="evenodd" clip-rule="evenodd" d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z"></path></svg></a></li>
            <?php endif; ?>

            <?php if ( ! empty( $linkedin ) ) : ?>
                <li><a class="text-gray-300 hover:text-white" href="<?php echo esc_url_raw( $linkedin ); ?>"><svg class="w-auto h-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" fill="currentColor"><!-- Font Awesome Free 5.15.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free (Icons: CC BY 4.0, Fonts: SIL OFL 1.1, Code: MIT License) --><path fill-rule="evenodd" clip-rule="evenodd" d="M100.28 448H7.4V148.9h92.88zM53.79 108.1C24.09 108.1 0 83.5 0 53.8a53.79 53.79 0 0 1 107.58 0c0 29.7-24.1 54.3-53.79 54.3zM447.9 448h-92.68V302.4c0-34.7-.7-79.2-48.29-79.2-48.29 0-55.69 37.7-55.69 76.7V448h-92.78V148.9h89.08v40.8h1.3c12.4-23.5 42.69-48.3 87.88-48.3 94 0 111.28 61.9 111.28 142.3V448z"></path></svg></a></li>
            <?php endif; ?>
        </ul>
        <?php

        echo $args['after_widget'];
    }

    public function form( $instance ) {
        $about = get_theme_mod( 'nada_salama_about_company' );

        if ( empty( $about ) ) :
            ?><p>Make sure you define About Company at Contact and Social Media panel.</p><?php
        endif;
    }

    public function update( $new_instance, $old_instance ) {
        return array();
    }

}

$nada_salama_about_widget = new Nada_Salama_About_Widget();
