<?php

class Nada_Salama_Contacts_Widget extends WP_Widget {

    public $args = array(
        'before_title'  => '',
        'after_title'   => '',
        'before_widget' => '<section class="widget">',
        'after_widget'  => '</section>',
    );

    public function __construct() {
        parent::__construct(
            'contacts_widget',
            __( 'Contacts', 'nadasalama' ),
            array(
                'description' => __( 'Widget for Contacts' ),
            )
        );

        add_action( 'widgets_init', function() {
            register_widget( 'Nada_Salama_Contacts_Widget' );
        });
    }

    public function widget( $args, $instance ) {
        $address    = get_theme_mod( 'nada_salama_address' );
        $phone      = get_theme_mod( 'nada_salama_phone' );
        $link       = get_theme_mod( 'nada_salama_phone_display_link' );
        $email      = get_theme_mod( 'nada_salama_email' );

        $phoneLink = $link === 'whatsapp' ? 'https://wa.me/+' . str_replace( ' ', '', $phone ) : "tel:" . str_replace( ' ', '', $phone );

        if (
            ( empty( $address ) ) &&
            ( empty( $phone ) ) &&
            ( empty( $email ) )
        ) return;

        echo $args['before_widget'];

        ?>
        <p class="font-black leading-none uppercase border-l-2 border-white pl-2">Support</p>

        <ul class="mt-4">

            <?php if ( ! empty( $address ) ) : ?>
                <li class="flex space-x-2">
                    <div class="flex-shrink-0 mt-1">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd"></path></svg>
                    </div>
                    <div class="flex-grow"><?php echo esc_html( $address ); ?></div>
                </li>
            <?php endif; ?>

            <?php if ( ! empty( $phone ) ) : ?>
                <li class="flex space-x-2">
                    <div class="flex-shrink-0 mt-1">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" viewBox="0 0 20 20" fill="currentColor"><path d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z"></path></svg>
                    </div>
                    <div class="flex-grow"><a class="text-gray-300 hover:text-white" href="<?php echo esc_url_raw( $phoneLink ); ?>">+<?php echo esc_html( $phone ); ?></a></div>
                </li>
            <?php endif; ?>

            <?php if ( ! empty( $email ) ) : ?>
                <li class="flex space-x-2">
                    <div class="flex-shrink-0 mt-1">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" viewBox="0 0 20 20" fill="currentColor"><path d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z"></path><path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z"></path></svg>
                    </div>
                    <div class="flex-grow"><a class="text-gray-300 hover:text-white" href="mailto:<?php echo esc_url( $email ); ?>"><?php echo $email; ?></a></div>
                </li>
            <?php endif; ?>

        </ul>
        <?php

        echo $args['after_widget'];
    }

    public function form( $instance ) {}

    public function update( $new_instance, $old_instance ) {
        return array();
    }

}

$nada_salama_contacts_widget = new Nada_Salama_Contacts_Widget();
