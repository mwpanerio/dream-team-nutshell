var FX = ( function( FX, $ ) {


	$( () => {
		FX.Accordion.init()
	})


	FX.Accordion = {
		init() {
            const $accordionHeading = $('.js-accordion-heading');

            $accordionHeading.on('click', function() {
                const $this = $(this);
                const $thisContent = $this.next('.js-accordion-content');

                $this.toggleClass('is-active');
                $thisContent.stop().slideToggle();
            })
        }
	}

	

	return FX

} ( FX || {}, jQuery ) )