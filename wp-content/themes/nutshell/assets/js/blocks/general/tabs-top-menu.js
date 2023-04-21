var FX = ( function( FX, $ ) {


	$( () => {
		FX.TabbedSection.init()
	})


	FX.TabbedSection = {
		$slider: null,

		init() {
			const $tabbed_button = $('.tab-top-menu__upper button');

            $tabbed_button.on('click', function() {
                const $this = $(this);
				const $elementTarget = $this.attr('data-tab-target');

                $tabbed_button.removeClass('is-active');
				$this.addClass('is-active');
				$('.tab-top-menu__lower').not('visible').slideUp();
				$($elementTarget).slideDown();
            })
		}
	}

	

	return FX

} ( FX || {}, jQuery ) )