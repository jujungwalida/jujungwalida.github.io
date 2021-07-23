<?php

if ( is_active_sidebar( 'sidebar' ) ) : ?>

	<aside class="text-white bg-primary-blue">
        <div class="w-10/12 py-12 mx-auto">
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 xl:grid-cols-4 gap-16">

				<?php dynamic_sidebar( 'sidebar' ); ?>

			</div>
		</div>
	</aside>

<?php endif; ?>
