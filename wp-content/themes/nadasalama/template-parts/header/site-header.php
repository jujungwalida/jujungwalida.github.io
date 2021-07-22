<?php

$wrapper_classes  = 'site-header';
$wrapper_classes .= has_custom_logo() ? ' has-logo' : '';
$wrapper_classes .= ( true === get_theme_mod( 'display_title_and_tagline', true ) ) ? ' has-title-and-tagline' : '';
$wrapper_classes .= has_nav_menu( 'primary' ) ? ' has-menu' : '';
?>

<header id="masthead" class="<?php echo esc_attr( $wrapper_classes ); ?> bg-white relative z-50 shadow-sm" role="banner">
	<div class="w-10/12 relative z-50 py-0 mx-auto">
        <div class="flex justify-between items-center">

			<?php get_template_part( 'template-parts/header/site-branding' ); ?>
			<nav class="py-8">
				<?php get_template_part( 'template-parts/header/site-nav' ); ?>
			</nav>

		</div>
	</div>
</header>
