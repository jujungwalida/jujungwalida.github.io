<?php
/**
 * Nada Salama Starter Content
 *
 * @link https://make.wordpress.org/core/2016/11/30/starter-content-for-themes-in-4-7/
 */

/**
 * Function to return the array of starter content for the theme.
 *
 * Passes it through the `nada_salama_starter_content` filter before returning.
 *
 * @return array A filtered array of args for the starter_content.
 */
function nada_salama_get_starter_content() {

	// Define and register starter content to showcase the theme on new sites.
	$starter_content = array(

		// Featured Image for Products
		'attachments' => array(
			'featured-vanilla' => array(
				'post_title' => 'About Cover Image',
				'file'       => 'starter-contents/products/vanilla.jpg',
			),
			'featured-cinnamon' => array(
				'post_title' => 'About Cover Image',
				'file'       => 'starter-contents/products/cinnamon.jpg',
			),
			'featured-cocoa' => array(
				'post_title' => 'About Cover Image',
				'file'       => 'starter-contents/products/cocoa.jpg',
			),
			'featured-white-pepper' => array(
				'post_title' => 'About Cover Image',
				'file'       => 'starter-contents/products/white-pepper.jpg',
			),
			'featured-coffee' => array(
				'post_title' => 'About Cover Image',
				'file'       => 'starter-contents/products/coffee.jpg',
			),
			'featured-palm-sugar' => array(
				'post_title' => 'About Cover Image',
				'file'       => 'starter-contents/products/palm-sugar.jpg',
			),

			'image-logo' => array(
				'post-title' => 'Logo',
				'file'       => 'starter-contents/logo.png',
			),

			'image-about-us' => array(
				'post-title' => 'Logo',
				'file'       => 'starter-contents/about-us.jpg',
			),
		),

		// Specify the core-defined pages to create and add custom thumbnails to some of them.
		'posts'     => array(
			'front' => array(
				'post_type'    => 'page',
				'post_title'   => esc_html_x( 'Lorem Ipsum', 'Lorem Ipsum', 'nadasalama' ),
				'post_content' => '<!-- wp:paragraph --><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p><!-- /wp:paragraph -->',
				'post_excerpt' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.',
			),
            'products' => array(
                'post_type'    => 'page',
                'post_title'   => esc_html_x( 'Products', 'Products', 'nadasalama' ),
				'post_excerpt' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.',
            ),
			'vanilla' => array(
                'post_type'   => 'product',
                'post_title'  => esc_html_x( 'Vanilla', 'Vanilla', 'nadasalama' ),
				'thumbnail'   => '{{featured-vanilla}}'
            ),
            'cinnamon' => array(
                'post_type'  => 'product',
                'post_title' => esc_html_x( 'Cinnamon', 'Cinnamon', 'nadasalama' ),
				'thumbnail'  => '{{featured-cinnamon}}'
            ),
			'cocoa' => array(
                'post_type'  => 'product',
                'post_title' => esc_html_x( 'Cocoa', 'Cocoa', 'nadasalama' ),
				'thumbnail'  => '{{featured-cocoa}}'
            ),
			'white-pepper' => array(
                'post_type'  => 'product',
                'post_title' => esc_html_x( 'White Pepper', 'White Pepper', 'nadasalama' ),
				'thumbnail'  => '{{featured-white-pepper}}'
            ),
			'coffee' => array(
                'post_type'  => 'product',
                'post_title' => esc_html_x( 'Coffee', 'Coffee', 'nadasalama' ),
				'thumbnail'  => '{{featured-coffee}}'
            ),
			'palm-sugar' => array(
                'post_type'  => 'product',
                'post_title' => esc_html_x( 'Palm Sugar', 'Palm Sugar', 'nadasalama' ),
				'thumbnail'  => '{{featured-palm-sugar}}'
            ),
            'our-policies' => array(
                'post_type'    => 'page',
                'post_title'   => esc_html_x( 'Our Policies', 'Policies', 'nadasalama' ),
				'post_excerpt' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.',
            ),
			'return-policies' => array(
                'post_type'  => 'page',
                'post_title' => esc_html_x( 'Return Policy', 'Return Policy', 'nadasalama' ),
            ),
			'shipping-policies' => array(
                'post_type'  => 'page',
                'post_title' => esc_html_x( 'Shipping Policy', 'Shipping Policy', 'nadasalama' ),
            ),
			'privacy-policies' => array(
                'post_type'  => 'page',
                'post_title' => esc_html_x( 'Privacy Policy', 'Privacy Policy', 'nadasalama' ),
            ),
			'terms-and-conditions' => array(
                'post_type'  => 'page',
                'post_title' => esc_html_x( 'Terms and Conditions', 'Terms and Conditions', 'nadasalama' ),
            ),
			'gallery' => array(
                'post_type'    => 'page',
                'post_title'   => esc_html_x( 'Gallery', 'Gallery', 'nadasalama' ),
				'post_excerpt' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.',
            ),
			'about-us' => array(
				'post_type'    => 'page',
                'post_title'   => esc_html_x( 'About Us', 'About Us', 'nadasalama' ),
				'post_excerpt' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.',
			),
			'contact-us' => array(
				'post_type'    => 'page',
                'post_title'   => esc_html_x( 'Contact Us', 'Contact Us', 'nadasalama' ),
				'post_excerpt' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.',
			),
			'why-choose-us' => array(
				'post_type'    => 'page',
                'post_title'   => esc_html_x( 'Why Choose Us', 'Why Choose Us', 'nadasalama' ),
				'post_excerpt' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.',
			),
		),

		// Default to a static front page and assign the front and posts pages.
		'options'   => array(
			'show_on_front'  => 'page',
			'page_on_front'  => '{{front}}',
			'page_for_posts' => '{{blog}}',

			'custom_logo' => '{{image-logo}}',

			'nada_salama_banner_enable_disable' => false,

			'nada_salama_products_enable_disable' => true,
			'nada_salama_products_page'           => '{{products}}',
			'nada_salama_products_excerpt_full'   => 'excerpt',

			'nada_salama_about_enable_disable' => true,
			'nada_salama_about_page'           => '{{about-us}}',
			'nada_salama_about_excerpt_full'   => 'excerpt',
			'nada_salama_about_image'          => '{{image-about-us}}',

			'nada_salama_why_choose_us_enable_disable' => true,
			'nada_salama_why_choose_us_page'           => '{{why-choose-us}}',
			'nada_salama_why_choose_us_excerpt_full'   => 'excerpt',
		),

		// Navigation menu
		'nav_menus' => array(
			'main' => array(
				'name'  => __( 'Main Menu', 'nadasalama' ),
				'items' => array(
					'link_home',
					'menu-products' => array(
						'type' => 'post_type',
						'object' => 'page',
						'object_id' => '{{products}}',
					),
					'menu-vanilla' => array(
						'type' => 'post_type',
						'object' => 'product',
						'object_id' => '{{vanilla}}',
					),
					'menu-cinnamon' => array(
						'type' => 'post_type',
						'object' => 'product',
						'object_id' => '{{cinnamon}}',
					),
					'menu-cocoa' => array(
						'type' => 'post_type',
						'object' => 'product',
						'object_id' => '{{cocoa}}',
					),
					'menu-white-pepper' => array(
						'type' => 'post_type',
						'object' => 'product',
						'object_id' => '{{white-pepper}}',
					),
					'menu-coffee' => array(
						'type' => 'post_type',
						'object' => 'product',
						'object_id' => '{{coffee}}',
					),
					'menu-palm-sugar' => array(
						'type' => 'post_type',
						'object' => 'product',
						'object_id' => '{{palm-sugar}}',
					),
					'menu-our-policies' => array(
						'type' => 'post_type',
						'object' => 'page',
						'object_id' => '{{our-policies}}',
					),
					'menu-return-policies' => array(
						'type' => 'post_type',
						'object' => 'page',
						'object_id' => '{{return-policies}}',
					),
					'menu-shipping-policies' => array(
						'type' => 'post_type',
						'object' => 'page',
						'object_id' => '{{shipping-policies}}',
					),
					'menu-privacy-policies' => array(
						'type' => 'post_type',
						'object' => 'page',
						'object_id' => '{{privacy-policies}}',
					),
					'menu-terms-and-conditions' => array(
						'type' => 'post_type',
						'object' => 'page',
						'object_id' => '{{terms-and-conditions}}',
					),
					'menu-gallery' => array(
						'type' => 'post_type',
						'object' => 'page',
						'object_id' => '{{gallery}}',
					),
					'menu-about-us' => array(
						'type' => 'post_type',
						'object' => 'page',
						'object_id' => '{{about-us}}',
					),
					'menu-contact-us' => array(
						'type' => 'post_type',
						'object' => 'page',
						'object_id' => '{{contact-us}}',
					),
				),
			),
		),

	);

	/**
	 * Filters the array of starter content.
	 *
	 * @param array $starter_content Array of starter content.
	 */
	return apply_filters( 'nada_salama_starter_content', $starter_content );
}
