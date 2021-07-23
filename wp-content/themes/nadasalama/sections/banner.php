<?php

$enable = get_theme_mod( 'nada_salama_banner_enable_disable' );

$banners = array(
    'nada_salama_banner_1',
    'nada_salama_banner_2',
    'nada_salama_banner_3',
);
$images       = array();
$titles       = array();
$descriptions = array();

foreach ( $banners as $banner ) {
    $images[$banner]       = get_theme_mod( $banner . '_image' );
    $titles[$banner]       = get_theme_mod( $banner . '_title' );
    $descriptions[$banner] = get_theme_mod( $banner . '_description' );
}

if ( ( true === $enable ) && ( ! empty ( $images ) ) ) : ?>

    <div>
        <div class="swiper-container">
            <div class="swiper-wrapper">

                <?php foreach ( $images as $banner => $image) : ?>

                    <div class="swiper-slide">
                        <div class="bg-center bg-no-repeat bg-cover" style="background-image: url(<?php echo esc_url_raw( $image ); ?>);">
                            <div class="bg-black bg-opacity-60">
                                <div class="w-10/12 h-screen pt-24 pb-12 mx-auto">
                                    <div class="flex h-full items-center">
                                        <div>
                                            <p class="text-white sm:text-lg font-black tracking-wider uppercase"><?php echo esc_html( $titles[$banner] ); ?></p>

                                            <?php if ($descriptions[$banner]) : ?>

                                                <p class="leading-loose text-white text-3xl sm:text-4xl md:text-5xl lg:text-6xl font-black uppercase mt-4"><?php echo esc_html( $descriptions[$banner] ); ?></p>

                                                <?php endif; ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                <?php endforeach; ?>
            </div>

            <div class="swiper-pagination py-4"></div>
        </div>
    </div>

<?php endif; ?>
