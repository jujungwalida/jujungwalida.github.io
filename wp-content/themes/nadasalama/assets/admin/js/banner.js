( function() {

    var api = wp.customize;

    //wp.customize.control('nada_salama_banner_image').deactivate();
    //wp.customize.control('nada_salama_banner_slide').deactivate();

    wp.customize.bind('ready', function () {

        console.log( api.control('nada_salama_banner_image') );
        console.log( api.control('nada_salama_banner_slide') );

        // wp.customize.control('nada_salama_banner_image').deactivate();
        // wp.customize.control('nada_salama_banner_slide').deactivate();

        wp.customize.control('nada_salama_banner_image_slide', function (control) {
			/**
			 * Run function on setting change of control.
			 */
			control.setting.bind(function (value) {
				switch (value) {
					/**
					 * The select was switched to the hide option.
					 */
					case 'image':
						/**
						 * Deactivate the conditional control.
						 */
						wp.customize.control('nada_salama_banner_image').activate();
                        wp.customize.control('nada_salama_banner_slide').deactivate();
						break;
					/**
					 * The select was switched to »show«.
					 */
					case 'slide':
						/**
						 * Activate the conditional control.
						 */
						wp.customize.control('nada_salama_banner_image').deactivate();
                        wp.customize.control('nada_salama_banner_slide').activate();
						break;
				}
			});
		});
	});
}() );