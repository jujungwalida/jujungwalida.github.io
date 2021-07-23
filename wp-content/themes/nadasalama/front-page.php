<?php

$nada_salama_sections = array( 'banner', 'products', 'about', 'why_choose_us' );
$ed_section = nada_salama_home_section();

get_header();

foreach ( $nada_salama_sections as $section ) {

    if ( true === get_theme_mod( 'nada_salama_' . $section . '_enable_disable' ) ) {

        get_template_part( 'sections/' . esc_attr( $section ) );

    }
}

get_footer();
