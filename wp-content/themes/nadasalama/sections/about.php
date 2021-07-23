<?php

$enable = get_theme_mod( 'nada_salama_about_enable_disable' );
$page = get_theme_mod( 'nada_salama_about_page' );
$display = get_theme_mod( 'nada_salama_about_excerpt_full' );
$image = get_theme_mod( 'nada_salama_about_image' );

if ( ( true === $enable ) && ( $page ) && ($image) ) :

    $query = new WP_Query(  array(
        'p' => $page,
        'post_type' => 'page'
    ) );

    if ( $query->have_posts() ) :
        while ( $query->have_posts() ) : $query->the_post(); ?>

            <div class="flex">
                <div class="bg-primary-blue w-1/12"></div>
                <div class="text-white bg-primary-blue w-10/12 lg:w-5/12 900 lg:pr-10 py-24">
                    <h2 class="text-3xl font-black uppercase"><?php the_title(); ?></h2>

                    <div class="section-about-us">

                        <?php
                        switch ( $display ):
                            case 'excerpt':
                                the_excerpt();
                                break;
                            default:
                                the_content();
                                break;

                        endswitch;
                        ?>

                    </div>

                    <a class="text-sm font-black uppercase text-gray-100 bg-primary-red rounded shadow inline-block px-6 py-4 hover:text-white hover:bg-secondary-red focus:outline-none" href="<?php the_permalink(); ?>">Find out more</a>
                </div>
                <div class="w-6/12 h-auto hidden lg:block bg-center bg-no-repeat bg-cover" style="background-image: url(<?php echo esc_url_raw( $image ); ?>);"></div>
                <div class="bg-primary-blue w-1/12 lg:hidden"></div>
            </div>

        <?php
        endwhile;

        wp_reset_postdata();
    endif;

endif;
