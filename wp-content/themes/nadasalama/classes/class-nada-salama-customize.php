<?php
/**
 * Customizer settings for this theme.
 */

if ( ! class_exists( 'Nada_Salama_Customize' ) ) {
	/**
	 * Customizer Settings.
	 */
	class Nada_Salama_Customize {

		/**
		 * Constructor. Instantiate the object.
		 *
		 * @access public
		 */
		public function __construct() {
			add_action( 'customize_register', array( $this, 'register' ) );
		}

		/**
		 * Register customizer options.
		 *
		 * @access public
		 *
		 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
		 *
		 * @return void
		 */
		public function register( $wp_customize ) {

			if ( version_compare( get_bloginfo('version'),'4.9', '>=') ) {
				$wp_customize->get_section( 'static_front_page' )->title = __( 'Static Front Page', 'nadasalama' );
			}

			$wp_customize->get_section( 'title_tagline' )->panel     = 'nada_salama_base_settings_panel';
			$wp_customize->get_section( 'static_front_page' )->panel = 'nada_salama_base_settings_panel';

			// Change site-title & description to postMessage.
			$wp_customize->get_setting( 'blogname' )->transport        = 'postMessage'; // @phpstan-ignore-line. Assume that this setting exists.
			$wp_customize->get_setting( 'blogdescription' )->transport = 'postMessage'; // @phpstan-ignore-line. Assume that this setting exists.

			// Add partial for blogname.
			$wp_customize->selective_refresh->add_partial(
				'blogname',
				array(
					'selector'        => '.site-title',
					'render_callback' => array( $this, 'partial_blogname' ),
				)
			);

			// Add partial for blogdescription.
			$wp_customize->selective_refresh->add_partial(
				'blogdescription',
				array(
					'selector'        => '.site-description',
					'render_callback' => array( $this, 'partial_blogdescription' ),
				)
			);

			// Add "display_title_and_tagline" setting for displaying the site-title & tagline.
			$wp_customize->add_setting(
				'display_title_and_tagline',
				array(
					'capability'        => 'edit_theme_options',
					'default'           => true,
					'sanitize_callback' => array( __CLASS__, 'sanitize_checkbox' ),
				)
			);

			// Add control for the "display_title_and_tagline" setting.
			$wp_customize->add_control(
				'display_title_and_tagline',
				array(
					'type'    => 'checkbox',
					'section' => 'title_tagline',
					'label'   => esc_html__( 'Display Site Title & Tagline', 'nadasalama' ),
				)
			);

			/** Option list of all page */   
			$nada_salama_options_pages     = array();
			$nada_salama_options_pages_obj = get_posts( 'post_type=page&posts_per_page=-1' );
			$nada_salama_options_pages[''] = __( 'Choose Page', 'nadasalama' );
			
			foreach ( $nada_salama_options_pages_obj as $nada_salama_pages ) {
				$nada_salama_options_pages[$nada_salama_pages->ID] = $nada_salama_pages->post_title;
			}

			/**
			 * Panel Base Settings
			 */
			$wp_customize->add_panel(
				'nada_salama_base_settings_panel',
				array(
					'priority' => 30,
					'title' => __( 'Base Settings', 'nadasalama' ),
					'description' => __( 'Customize Base Settings' ),
				)
			);

			/**
			 * Panel Home Page Settings
			 */
			$wp_customize->add_panel(
				'nada_salama_home_page_settings_panel',
				array(
					'priority' => 30,
					'title' => __( 'Home Page Settings', 'nadasalama' ),
					'description' => __( 'Customize Home Page Settings' ),
				)
			);

			/**
			 * Section Banner
			 */
			$wp_customize->add_section(
				'nada_salama_banner_section',
				array(
					'panel' => 'nada_salama_home_page_settings_panel',
					'priority' => 20,
					'title' => __( 'Banner', 'nadasalama' ),
				)
			);

			/**
			 * Section Products
			 */
			$wp_customize->add_section(
				'nada_salama_products_section',
				array(
					'panel' => 'nada_salama_home_page_settings_panel',
					'priority' => 20,
					'title' => __( 'Product', 'nadasalama' ),
				)
			);

			/** Control Enable/disable */
			$wp_customize->add_setting(
				'nada_salama_products_enable_disable',
				array(
					'default' => false,
					'sanitize_callback' => array( __CLASS__, 'sanitize_checkbox' ),
				)
			);

			$wp_customize->add_control(
				'nada_salama_products_enable_disable',
				array(
					'section' => 'nada_salama_products_section',
					'label' => esc_html__( 'Enable Section', 'nadasalama'),
					'type' => 'checkbox',
				)
			);

            /** Control Description */
            $wp_customize->add_setting(
				'nada_salama_products_description',
				array(
					'sanitize_callback' => 'sanitize_text_field',
				)
			);

			$wp_customize->add_control(
				'nada_salama_products_description',
				array(
					'section' => 'nada_salama_products_section',
					'label' => esc_html__( 'Description', 'nadasalama' ),
					'type' => 'text',
				)
			);

			/** Control Page */
            $wp_customize->add_setting(
                'nada_salama_products_page',
                array(
                    'type'       => 'option',
                    'capability' => 'manage_options',
                )
            );
    
            $wp_customize->add_control(
                'nada_salama_products_page',
                array(
                    'label'          => __( 'Select Page' ),
                    'section'        => 'nada_salama_products_section',
                    'type'           => 'dropdown-pages',
                    'allow_addition' => false,
                )
            );

			/** Display Page */
			$wp_customize->add_setting(
				'nada_salama_products_display',
				array(
					'sanitize_callback' => function( $value ) {
						return 'excerpt' === $value || 'full' === $value ? $value : 'excerpt';
					},
					'default' => 'excerpt',
				)
			);

			$wp_customize->add_control(
				'nada_salama_products_display',
				array(
					'section' => 'nada_salama_products_section',
					'label' => esc_html__( 'Show', 'nadasalama' ),
					'type' => 'radio',
					'choices' => array(
						'excerpt' => esc_html__( 'Summary', 'nadasalama' ),
						'full' => esc_html__( 'Full', 'nadasalama' ),
					),
				)
			);

			/**
			 * Section About
			 */
			$wp_customize->add_section(
				'nada_salama_about_section',
				array(
					'panel' => 'nada_salama_home_page_settings_panel',
					'priority' => 20,
					'title' => __( 'About', 'nadasalama' ),
				)
			);

			/** Control Enable/disable */
			$wp_customize->add_setting(
				'nada_salama_about_enable_disable',
				array(
					'default' => false,
					'sanitize_callback' => array( __CLASS__, 'sanitize_checkbox' ),
				)
			);

			$wp_customize->add_control(
				'nada_salama_about_enable_disable',
				array(
					'section' => 'nada_salama_about_section',
					'label' => esc_html__( 'Enable Section', 'nadasalama'),
					'type' => 'checkbox',
					'label' =>__( 'Enable Section', 'nadasalama' ),
				)
			);

            /** Control Description */
            $wp_customize->add_setting(
				'nada_salama_about_description',
				array(
					'sanitize_callback' => 'sanitize_text_field',
				)
			);

			$wp_customize->add_control(
				'nada_salama_about_description',
				array(
					'section' => 'nada_salama_about_section',
					'label' => esc_html__( 'Description', 'nadasalama' ),
					'type' => 'text',
				)
			);

			/** Control Page */
            $wp_customize->add_setting(
                'nada_salama_about_page',
                array(
                    'type'       => 'option',
                    'capability' => 'manage_options',
                )
            );
    
            $wp_customize->add_control(
                'nada_salama_about_page',
                array(
                    'label'          => __( 'Select Page' ),
                    'section'        => 'nada_salama_about_section',
                    'type'           => 'dropdown-pages',
                    'allow_addition' => false,
                )
            );

			/** Display Page */
			$wp_customize->add_setting(
				'nada_salama_about_display',
				array(
					'sanitize_callback' => function( $value ) {
						return 'excerpt' === $value || 'full' === $value ? $value : 'excerpt';
					},
					'default' => 'excerpt',
				)
			);

			$wp_customize->add_control(
				'nada_salama_about_display',
				array(
					'section' => 'nada_salama_about_section',
					'label' => esc_html__( 'Show', 'nadasalama' ),
					'type' => 'radio',
					'choices' => array(
						'excerpt' => esc_html__( 'Summary', 'nadasalama' ),
						'full' => esc_html__( 'Full', 'nadasalama' ),
					),
				)
			);

			/**
			 * Section Why Choose Us
			 */
			$wp_customize->add_section(
				'nada_salama_why_choose_us_section',
				array(
					'panel' => 'nada_salama_home_page_settings_panel',
					'priority' => 20,
					'title' => __( 'Why Choose Us', 'nadasalama' ),
				)
			);

			/** Control Enable/disable */
			$wp_customize->add_setting(
				'nada_salama_why_choose_us_enable_disable',
				array(
					'default' => false,
					'sanitize_callback' => array( __CLASS__, 'sanitize_checkbox' ),
				)
			);

			$wp_customize->add_control(
				'nada_salama_why_choose_us_enable_disable',
				array(
					'section' => 'nada_salama_why_choose_us_section',
					'label' => esc_html__( 'Enable Section', 'nadasalama'),
					'type' => 'checkbox',
					'label' =>__( 'Enable Section', 'nadasalama' ),
				)
			);

            /** Control Description */
            $wp_customize->add_setting(
				'nada_salama_why_choose_us_description',
				array(
					'sanitize_callback' => 'sanitize_text_field',
				)
			);

			$wp_customize->add_control(
				'nada_salama_why_choose_us_description',
				array(
					'section' => 'nada_salama_why_choose_us_section',
					'label' => esc_html__( 'Description', 'nadasalama' ),
					'type' => 'text',
				)
			);

			/** Control Page */
			$wp_customize->add_setting(
                'nada_salama_why_choose_us_page',
                array(
                    'type'       => 'option',
                    'capability' => 'manage_options',
                )
            );
    
            $wp_customize->add_control(
                'nada_salama_why_choose_us_page',
                array(
                    'label'          => __( 'Select Page' ),
                    'section'        => 'nada_salama_why_choose_us_section',
                    'type'           => 'dropdown-pages',
                    'allow_addition' => false,
                )
            );

			/** Display Page */
			$wp_customize->add_setting(
				'nada_salama_why_choose_us_display',
				array(
					'sanitize_callback' => function( $value ) {
						return 'excerpt' === $value || 'full' === $value ? $value : 'excerpt';
					},
					'default' => 'excerpt',
				)
			);

			$wp_customize->add_control(
				'nada_salama_why_choose_us_display',
				array(
					'section' => 'nada_salama_why_choose_us_section',
					'label' => esc_html__( 'Show', 'nadasalama' ),
					'type' => 'radio',
					'choices' => array(
						'excerpt' => esc_html__( 'Summary', 'nadasalama' ),
						'full' => esc_html__( 'Full', 'nadasalama' ),
					),
				)
			);

			/**
			 * Panel Contact and Social Media
			 */
			$wp_customize->add_panel(
				'nada_salama_contact_and_social_media_panel', array(
					'priority' => 30,
					'title' => __( 'Contact and Social Media', 'nadasalama' ),
					'description' => __( 'Customize Contact and Social Media' ),
				)
			);

			/**
			 * Section Contact
			*/
			$wp_customize->add_section(
				'nada_salama_contact_section',
				array(
					'panel' => 'nada_salama_contact_and_social_media_panel',
					'priority' => 20,
					'title' => __( 'Contact', 'nadasalama' ),
				)
			);

			/** Control Address */
			$wp_customize->add_setting(
				'nada_salama_address',
				array(
					'sanitize_callback' => 'sanitize_text_field',
				)
			);

			$wp_customize->add_control(
				'nada_salama_address',
				array(
					'section' => 'nada_salama_contact_section',
					'label' => esc_html__( 'Address', 'nadasalama' ),
					'type' => 'textarea',
				)
			);

			/** Control Google Map */
			$wp_customize->add_setting(
				'nada_salama_google_map',
				array(
					'sanitize_callback' => 'esc_url_raw',
				)
			);

			$wp_customize->add_control(
				'nada_salama_google_map',
				array(
					'section' => 'nada_salama_contact_section',
					'label' => esc_html__( 'Google Map Link', 'nadasalama' ),
                    'description' => esc_html__( 'Open Google Map from your browser, select location, press share, copy generated link then paste here.', 'nadasalama' ),
					'type' => 'url',
				)
			);

			/** Control Phone */
			$wp_customize->add_setting(
				'nada_salama_phone',
				array(
					'sanitize_callback' => array( __CLASS__, 'sanitize_phone' ),
				)
			);

			$wp_customize->add_control(
				'nada_salama_phone',
				array(
					'section' => 'nada_salama_contact_section',
					'label' => esc_html__( 'Phone Number', 'nadasalama' ),
					'type' => '',
				)
			);

			/** Control Display Phone Link */
            $wp_customize->add_setting(
				'nada_salama_display_phone',
				array(
					'sanitize_callback' => function( $value ) {
						return 'phone' === $value || 'whatsapp' === $value ? $value : 'phone';
					},
					'default' => 'phone',
				)
			);

			$wp_customize->add_control(
				'nada_salama_display_phone',
				array(
					'section' => 'nada_salama_contact_section',
					'label' => esc_html__( 'Link Phone Number as', 'nadasalama' ),
					'type' => 'radio',
					'choices' => array(
						'phone' => esc_html__( 'Phone', 'nadasalama' ),
						'whatsapp' => esc_html__( 'WhatsApp', 'nadasalama' ),
					),
				)
			);

			/** Control Email */
			$wp_customize->add_setting(
				'nada_salama_email',
				array(
					'sanitize_callback' => 'sanitize_email',
				)
			);

			$wp_customize->add_control(
				'nada_salama_email',
				array(
					'section' => 'nada_salama_contact_section',
					'label' => esc_html__( 'Email', 'nadasalama' ),
					'type' => 'email',
				)
			);

			/**
			 * Section Social Media
			 */
			$wp_customize->add_section(
				'nada_salama_social_media_section',
				array(
					'panel' => 'nada_salama_contact_and_social_media_panel',
					'priority' => 20,
					'title' => __( 'Social Media', 'nadasalama' ),
				)
			);

			/** Control Facebook */
			$wp_customize->add_setting(
				'nada_salama_facebook',
				array(
					'sanitize_callback' => 'esc_url_raw',
				)
			);

			$wp_customize->add_control(
				'nada_salama_facebook',
				array(
					'section' => 'nada_salama_social_media_section',
					'label' => esc_html__( 'Facebook', 'nadasalama' ),
					'type' => 'url',
				)
			);

			/** Control Twitter */
			$wp_customize->add_setting(
				'nada_salama_twitter',
				array(
					'sanitize_callback' => 'esc_url_raw',
				)
			);

			$wp_customize->add_control(
				'nada_salama_twitter',
				array(
					'section' => 'nada_salama_social_media_section',
					'label' => esc_html__( 'Twitter', 'nadasalama' ),
					'type' => 'url',
				)
			);

			/** Control Instagram */
			$wp_customize->add_setting(
				'nada_salama_instagram',
				array(
					'sanitize_callback' => 'esc_url_raw',
				)
			);

			$wp_customize->add_control(
				'nada_salama_instagram',
				array(
					'section' => 'nada_salama_social_media_section',
					'label' => esc_html__( 'Instagram', 'nadasalama' ),
					'type' => 'url',
				)
			);

			/** Control LinkedIn */
			$wp_customize->add_setting(
				'nada_salama_linkedin',
				array(
					'sanitize_callback' => 'esc_url_raw',
				)
			);

			$wp_customize->add_control(
				'nada_salama_linkedin',
				array(
					'section' => 'nada_salama_social_media_section',
					'label' => esc_html__( 'LinkedIn', 'nadasalama' ),
					'type' => 'url',
				)
			);

		}

		/**
		 * Sanitize boolean for checkbox.
		 *
		 * @access public
		 *
		 * @param bool $checked Whether or not a box is checked.
		 *
		 * @return bool
		 */
		public static function sanitize_checkbox( $checked = null ) {
			return (bool) isset( $checked ) && true === $checked;
		}

        /**
         * Sanitize boolean for phone number.
         * 
         * @access public
         * 
         * @param string $phone Phone number
         * 
         * @return bool
         */
        public static function sanitize_phone($phone) {
            return preg_replace( '/[^\d+]/', '', $phone );
        }

        /**
         * Sanitize boolean for select.
         * 
         * @access public
         * 
         * @param bool $input
         * @param mixed $settings
         */
        function construction_landing_page_sanitize_select( $input, $setting ){
            // Ensure input is a slug.
            $input = sanitize_key( $input );
            
            // Get list of choices from the control associated with the setting.
            $choices = $setting->manager->get_control( $setting->id )->choices;
            
            // If the input is a valid key, return it; otherwise, return the default.
            return ( array_key_exists( $input, $choices ) ? $input : $setting->default );
        }

		/**
		 * Render the site title for the selective refresh partial.
		 *
		 * @access public
		 *
		 * @return void
		 */
		public function partial_blogname() {
			bloginfo( 'name' );
		}

		/**
		 * Render the site tagline for the selective refresh partial.
		 *
		 * @access public
		 *
		 *
		 * @return void
		 */
		public function partial_blogdescription() {
			bloginfo( 'description' );
		}
	}
}
