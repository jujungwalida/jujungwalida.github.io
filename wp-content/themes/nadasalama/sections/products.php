<?php

$enable = get_theme_mod( 'nada_salama_products_enable_disable' );
$page = get_theme_mod( 'nada_salama_products_page' );
$display = get_theme_mod( 'nada_salama_products_excerpt_full' );

if ( ( true === $enable ) && ( $page ) ) :

    $query = new WP_Query(  array(
        'p' => $page,
        'post_type' => 'page'
    ) );

    if ( $query->have_posts() ) : ?>

        <div class="bg-gray-100">
            <div class="w-10/12 py-24 mx-auto">
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-10 lg:gap-0">
                    <div class="lg:pr-10">

                        <?php while ( $query->have_posts() ) : $query->the_post(); ?>

                            <h2 class="text-3xl font-black uppercase"><?php the_title(); ?></h2>

                            <div class="section-products">

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

                            <a class="text-sm font-black uppercase text-gray-100 bg-primary-red rounded shadow inline-block px-6 py-4 hover:text-white hover:bg-secondary-red focus:outline-none" href="<?php the_permalink(); ?>">Ask Questions</a>

                        <?php
                        endwhile;

                        wp_reset_postdata();
                        ?>

                    </div>

                    <?php
                    $productQuery = new WP_Query(  array(
                        'post_type' => 'product',
                    ) );

                    if ( $productQuery->have_posts() ) : ?>

                        <div>
                            <div class="grid grid-cols-2 sm:grid-cols-3 gap-4">

                                <?php while ( $productQuery->have_posts() ) : $productQuery->the_post(); $id = get_the_ID(); ?>

                                    <div class="h-full">
                                        <a class="group block relative h-full" href="<?php the_permalink(); ?>">
                                            <img class="object-cover w-full h-full" src="<?php echo get_the_post_thumbnail_url( $id ); ?>">

                                            <div class="absolute inset-0">
                                                <div class="bg-secondary-red flex justify-center items-center h-full opacity-0 group-hover:opacity-100 transform duration-300">
                                                    <p class="text-sm text-white font-black tracking-wide uppercase"><?php the_title(); ?></p>
                                                </div>
                                            </div>
                                        </a>
                                    </div>

                                <?php
                                endwhile;
                                wp_reset_postdata();
                                ?>

                            </div>
                        </div>

                    <?php endif; ?>

                </div>
            </div>
        </div>

    <?php endif;

endif;
