<?php

get_header();

?><div id="content"><?php

	if ( have_posts() ) {

		while ( have_posts() ) {
			the_post();

			get_template_part( 'template-parts/content/content', get_theme_mod( 'display_excerpt_or_full_post', 'excerpt' ) );
		}

		nada_salama_the_posts_navigation();

	} else {

		get_template_part( 'template-parts/content/content-none' );

	}

?></div><?php

get_footer();