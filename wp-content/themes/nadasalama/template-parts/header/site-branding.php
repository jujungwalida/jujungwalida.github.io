<?php

$logo         = empty( get_theme_mod( 'custom_logo' ) ) ? '' : wp_get_attachment_image_src( get_theme_mod( 'custom_logo' ) , 'full' )[0];
$blog_info    = get_bloginfo( 'name' );
$description  = get_bloginfo( 'description', 'display' );
$show_title   = ( true === get_theme_mod( 'display_title_and_tagline', true ) );
$header_class = $show_title ? 'site-title' : 'screen-reader-text';

?>

<?php if ( has_custom_logo() && $blog_info ) : ?>

	<div class="site-branding flex items-center space-x-3">

		<?php if ( has_custom_logo() ) : ?>

			<div class="site-logo">
				<img class="w-11 h-auto" src="<?php echo esc_url_raw( $logo ); ?>" >
			</div>

		<?php endif; ?>

		<?php if ( $blog_info ) : ?>

			<div>
				<?php if ( is_front_page() && ! is_paged() ) : ?>
					<h1 class="text-lg font-medium leading-snug">
						<?php echo esc_html( $blog_info ); ?>
					</h1>
				<?php elseif ( is_front_page() || is_home() ) : ?>
					<h1 class="text-lg font-medium leading-snug">
						<a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php echo esc_html( $blog_info ); ?></a>
					</h1>
				<?php else : ?>
					<p class="text-lg font-medium leading-snug">
						<a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php echo esc_html( $blog_info ); ?></a>
					</p>
				<?php endif; ?>

				<?php if ( $description && true === get_theme_mod( 'display_title_and_tagline', true ) ) : ?>
					<p class="site-description text-sm"><?php echo $description; // phpcs:ignore WordPress.Security.EscapeOutput ?></p>
				<?php endif; ?>
			</div>

		<?php endif; ?>

	</div>

<?php endif; ?>
