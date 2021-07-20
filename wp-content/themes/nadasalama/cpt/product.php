<?php

function create_cpt() {
    $labels = array();

    $supports = array(
        'title',
        'editor',
        'trackbacks',
        'author',
        'excerpt',
        'page-attributes',
        'thumbnail',
        'custom-fields',
        'post-formats',
    );

    $args = array(
        'labels' => $labels,
        'public' => true,
        'supports' => $supports,
        'show_in_rest' => true,
    );

    $post_types = array(
        'product' => array( 
            'plural' => 'Products',
            'singular' => 'Product',
        ),
        'policy' => array(
            'plural' => 'Policies',
            'singular' => 'Policy',
        ),
    );

    foreach ( $post_types as $post_type => $label ) {
        $args[ 'labels' ][ 'name' ] = __( $label[ 'plural'] , 'nadasalama' );
        $args[ 'labels' ][ 'singular_name' ] = __( $label[ 'singular' ], 'nadasalama' );

        register_post_type( $post_type, $args );
    }
}
add_action( 'init', 'create_cpt' );