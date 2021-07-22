<?php
/**
 * Functions and filters related to the menus.
 *
 * Makes the default WordPress navigation use an HTML structure similar
 * to the Navigation block.
 *
 * @link https://make.wordpress.org/themes/2020/07/06/printing-navigation-block-html-from-a-legacy-menu-in-themes/
 *
 * @package WordPress
 * @subpackage Nada_Salama
 * @since Nada Salama 1.0
 */

function nada_salama_submenu_attributes( $menu ) {
    $menu = preg_replace( '/ class="sub-menu"/', '/ x-show="open" class="bg-white shadow-lg py-2 absolute mt-6" /', $menu );

    return $menu;
}
add_filter( 'wp_nav_menu', 'nada_salama_submenu_attributes' );

function nada_salama_add_sub_menu_toggle( $output, $item, $depth, $args ) {
	if ( 0 === $depth && in_array( 'menu-item-has-children', $item->classes, true ) ) {

		// Add toggle button.
        $output = '<div class="text-gray-600 hover:text-black flex space-x-1">' . $output;
        $output .= '<button @click="open = !open">';
        $output .= '<svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" /></svg>';
        $output .= '</button>';
        $output .= '</div>';
	}
	return $output;
}
add_filter( 'walker_nav_menu_start_el', 'nada_salama_add_sub_menu_toggle', 10, 4 );