;(function () {
	/**
	 * Run function when customizer is ready.
	 */
	wp.customize.bind('ready', function () {
		wp.customize.control('nada_salama_banner_display', function (control) {
			/**
			 * Run function on setting change of control.
			 */
			control.setting.bind(function (value) {
				switch (value) {
					/**
					 * The select was switched to the hide option.
					 */
					case true:
						/**
						 * Deactivate the conditional control.
						 */
						wp.customize.control('nada_salama_banner_image').activate();
                        wp.customize.control('nada_salama_banner_slide').deactivate();
						break;
					/**
					 * The select was switched to »show«.
					 */
					default:
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
})();