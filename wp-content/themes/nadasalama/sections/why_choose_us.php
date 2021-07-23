<?php

$enable = get_theme_mod( 'nada_salama_why_choose_us_enable_disable' );
$page = get_theme_mod( 'nada_salama_why_choose_us_page' );
$display = get_theme_mod( 'nada_salama_why_choose_us_excerpt_full' );

if ( ( true === $enable ) && ( $page ) ) :

    $query = new WP_Query(  array(
        'p' => $page,
        'post_type' => 'page'
    ) );

    if ( $query->have_posts() ) : ?>

        <div class="bg-gray-100">
            <div class="w-10/12 py-24 mx-auto">
                <div>
                    <?php while ( $query->have_posts() ) : $query->the_post(); ?>

                        <h2 class="text-3xl font-black uppercase"><?php the_title(); ?></h2>

                        <div class="section-why-choose-us">

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

                        <?php
                        endwhile;

                        wp_reset_postdata();
                        ?>
                </div>

                <div>
                    <div class="grid grid-cols-2 gap-10">
                        <div>
                            <div class="flex items-center space-x-2">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20.618 5.984A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016zM12 9v2m0 4h.01" /></svg>
                                <p class="text-xl font-normal">High Quality</p>
                            </div>

                            <p class="mt-4">Ab consequuntur numquam facilis accusamus aperiam cum quos quae? Nulla quos pariatur ut, ad vero dignissimos possimus neque id aspernatur, aut quo?</p>
                        </div>
                        <div>
                            <div class="flex items-center space-x-2">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z" /></svg>
                                <p class="text-xl font-normal">Competitive Price</p>
                            </div>

                            <p class="mt-4">Porro magnam minima quaerat laudantium rem, labore amet illum suscipit modi, ut, culpa odio doloremque? Saepe perferendis doloribus numquam iste dolores vitae?</p>
                        </div>
                        <div>
                            <div class="flex items-center space-x-2">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z" /></svg>
                                <p class="text-xl font-normal">Proffesional and Reliable</p>
                            </div>

                            <p class="mt-4">Odio explicabo doloremque quidem quo maiores ea repellendus consequatur reiciendis id vel quasi, totam sapiente perferendis, autem vitae ipsam, earum suscipit magnam?</p>
                        </div>
                        <div>
                            <div class="flex items-center space-x-2">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z" /></svg>
                                <p class="text-xl font-normal">Fair Trade</p>
                            </div>

                            <p class="mt-4">Ab iure quibusdam maxime laudantium minus ullam veritatis ut commodi, facilis vero cum est dolorum dolore, ipsa modi atque! Itaque, minus delectus!</p>
                        </div>
                        <div>
                            <div class="flex items-center space-x-2">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z" /></svg>
                                <p class="text-xl font-normal">Environmental Sustainability</p>
                            </div>

                            <p class="mt-4">Unde ducimus vel quos eius tenetur assumenda animi quo, facere autem dignissimos impedit sint voluptatibus deleniti saepe culpa voluptatem cum minus alias!</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    <?php
    endif;

endif;
