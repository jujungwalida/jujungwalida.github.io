<?php if ( has_nav_menu( 'dummy' ) ) : ?>
<!-- mobile navigation -->
<div class="lg:hidden">
	<button @click="open = !open" class="font-semibold whitespace-nowrap uppercase block px-1 py-8 focus:outline-none">
		<svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd" /></svg>
	</button>

	<div x-show="open">
		<div class="bg-black bg-opacity-75 fixed inset-0 w-full h-screen"></div>
		<div @click.away="open = false" class="fixed inset-y-0 left-0 w-max max-w-xs">
			<div class="bg-white shadow-lg h-screen p-4">
				<div class="flex flex-col h-full space-y-8">
					<div class="flex justify-between items-center space-x-10">
						<div class="flex items-center space-x-2">
							<div><img class="h-auto w-6" src="assets/img/logo.svg"></div>
							<div><p class="font-medium">Nada Salama International</div>
						</div>
						<div>
							<button @click="open = false" class="block">
								<svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd" /></svg>
							</button>
						</div>
					</div>

					<ul>
						<li><a class="whitespace-nowrap" href="#">Home</a></li>
						<li>
							<a class="whitespace-nowrap" href="#">Products</a>
							<ul>
								<li><a class="whitespace-nowrap" href="#">Vanilla</a></li>
								<li><a class="whitespace-nowrap" href="#">Cinnamon</a></li>
								<li><a class="whitespace-nowrap" href="#">Cocoa</a></li>
								<li><a class="whitespace-nowrap" href="#">White Pepper</a></li>
								<li><a class="whitespace-nowrap" href="#">Palm Sugar</a></li>
								<li><a class="whitespace-nowrap" href="#">Coffee</a></li>
							</ul>
						</li>
						<li>
							<a class="whitespace-nowrap" href="#">Our Policies</a>
							<ul>
								<li><a href="#">Return Policy</a></li>
								<li><a href="#">Shipping Policy</a></li>
								<li><a href="#">Privacy Policy</a></li>
								<li><a href="#">Terms and Conditions</a></li>
							</ul>
						</li>
						<li><a class="whitespace-nowrap" href="#">Gallery</a></li>
						<li><a class="whitespace-nowrap" href="#">About Us</a></li>
						<li><a class="whitespace-nowrap" href="#">Contact Us</a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</div>

<!-- desktop navigation -->
<div class="hidden lg:block">
	<ul class="font-normal flex items-center space-x-3">
		<li><a class="text-sm font-semibold whitespace-nowrap uppercase text-gray-600 block px-1 py-8 hover:text-black" href="#">Home</a></li>
		<li x-data="{ open: false }" @click.away="open = false" class="relative">
			<div class="flex justify-beetwen">
				<a class="text-sm font-semibold whitespace-nowrap uppercase text-gray-600 block px-1 py-8 hover:text-black" href="#">Products</a>
				<button @click="open = !open">
					<svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" /></svg>
				</button>
			</div>
			<ul x-show="open" class="bg-white shadow-lg py-2 flex flex-col absolute">
				<li><a class="text-sm text-gray-900 whitespace-nowrap block px-6 py-2 hover:text-black hover:bg-gray-200" href="#">Vanilla</a></li>
				<li><a class="text-sm text-gray-900 whitespace-nowrap block px-6 py-2 hover:text-black hover:bg-gray-200" href="#">Cinnamon</a></li>
				<li><a class="text-sm text-gray-900 whitespace-nowrap block px-6 py-2 hover:text-black hover:bg-gray-200" href="#">Cocoa</a></li>
				<li><a class="text-sm text-gray-900 whitespace-nowrap block px-6 py-2 hover:text-black hover:bg-gray-200" href="#">White Pepper</a></li>
				<li><a class="text-sm text-gray-900 whitespace-nowrap block px-6 py-2 hover:text-black hover:bg-gray-200" href="#">Palm Sugar</a></li>
				<li><a class="text-sm text-gray-900 whitespace-nowrap block px-6 py-2 hover:text-black hover:bg-gray-200" href="#">Coffee</a></li>
			</ul>
		</li>
		<li x-data="{ open: false }" @click.away="open = false" class="relative">
			<div class="flex justify-beetwen">
				<a class="text-sm font-semibold whitespace-nowrap uppercase text-gray-600 block px-1 py-8 hover:text-black" href="#">Our Policies</a>
				<button @click="open = !open">
					<svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" /></svg>
				</button>
			</div>
			<ul x-show="open" class="bg-white shadow-lg py-2 flex flex-col absolute">
				<li><a class="text-sm text-gray-900 whitespace-nowrap block px-6 py-2 hover:text-black hover:bg-gray-200" href="#">Return Policy</a></li>
				<li><a class="text-sm text-gray-900 whitespace-nowrap block px-6 py-2 hover:text-black hover:bg-gray-200" href="#">Shipping Policy</a></li>
				<li><a class="text-sm text-gray-900 whitespace-nowrap block px-6 py-2 hover:text-black hover:bg-gray-200" href="#">Privacy Policy</a></li>
				<li><a class="text-sm text-gray-900 whitespace-nowrap block px-6 py-2 hover:text-black hover:bg-gray-200" href="#">Terms and Conditions</a></li>
			</ul>
		</li>
		<li><a class="text-sm font-semibold whitespace-nowrap uppercase text-gray-600 block px-1 py-8 hover:text-black" href="#">Gallery</a></li>
		<li><a class="text-sm font-semibold whitespace-nowrap uppercase text-gray-600 block px-1 py-8 hover:text-black" href="#">About Us</a></li>
		<li><a class="text-sm font-semibold whitespace-nowrap uppercase text-gray-600 block px-1 py-8 hover:text-black" href="#">Contact Us</a></li>
	</ul>
</div>
<?php endif; ?>

<?php if ( has_nav_menu( 'primary' ) ) : ?>
	<?php
	wp_nav_menu( array(
		'menu_class'        => 'top-level-menu font-normal flex items-center space-x-4',
		//'menu_id'           => 'MENU_ID',
		//'container'         => 'CONTAINER',
		//'container_class'   => 'CONTAINER_CLASS',
		//'container_id'      => 'CONTAINER_ID',
		'fallback_cb'       => false,
		//'before'            => '<BEFORE>',
		//'after'             => '</BEFORE>',
		//'link_before'       => 'LINK_BEFORE',
		//'link_after'        => 'LINK_AFTER',
		'theme_location'    => 'primary',
		'items_wrap'        => '<ul id="primary-menu-list" class="%2$s">%3$s</ul>',
		'walker' => new Nada_Salama_Nav_Menu(),
	) );


	?>
	<?php
	/* wp_nav_menu(
		array(
			'theme_location' => 'primary',

			'menu_class' => 'font-normal flex items-center space-x-4',
			'before' => '<div class="flex space-x-1 relative">',
			'after' => '</div>',
			'walker' => new Nada_Salama_Walker_Nav_Menu(),

			'fallback_cb' => false,
		)
	); */
	?>
<?php endif; ?>
