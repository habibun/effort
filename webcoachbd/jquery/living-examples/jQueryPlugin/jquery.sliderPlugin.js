(function($) {		
	$.fn.sliderPlugin  = function(options) {

		options = $.extend({}, $.fn.sliderPlugin.defaults,options);
		return this.each(function() {
			$(this)
				.bind('click', function() {
					$(this).next().slideToggle(
						options.duration,
						options.complete 
					);
				});


		});

		$.fn.sliderPlugin.defaults = {
			duration: 'fast',
			complete: null
		};		
	};
})(jQuery);