var FX = ( function( FX, $ ) {


	$( () => {
		FX.PricingCalculator.init()
	})


	FX.PricingCalculator = {
		init() {
            const nutshell_range_values = [
                [100, 5]
                , [500, 15]
                , [1000, 25]
                , [2500, 35]
                , [5000, 60]
                , [10000, 100]
                , [15000, 150]
                , [20000, 200]
                , [30000, 260]
                , [40000, 320]
                , [50000, 390]
                , [60000, 460]
            ];
    
            $( "#slider" ).slider({
                range: "max",
                min: 1,
                max: 12,
                value: 4,
                slide: function(event, ui) {
                    const ui_value = ui.value;
                    const array_target = ui_value - 1;
                    const nutshell_range_target = nutshell_range_values[array_target];
                    const number_of_contracts = nutshell_range_target[0].toLocaleString();
                    const nutshell_range_values_total = nutshell_range_values.length;
    
                    $('#slider-per-month').text(nutshell_range_target[1])
                    $('#slider-number-contracts').text(number_of_contracts);
                    $('.ui-slider-tooltip > span').text(number_of_contracts);
                    $('#sales-marketing-contact').text(number_of_contracts);
                    $('#slider-marketing-per-month').text(nutshell_range_target[1]);
                    $('#sales-marketing-contact-charge span').text(nutshell_range_target[1])

                    if($('#add-marketing').is(':checked')) {
                        calculateTotalCharge();
                    }
                },
            });
    
            var tooltip = $(`<div class="ui-slider-tooltip"> Up to <span>2,500</span> contacts </div>`);
            $( "#slider" ).find('.ui-slider-handle').append(tooltip);
    
            const $calculatorButtons = $('.pricing-calculator__switches button');
            const $calculatorButtonsPrices = $('.pricing-calculator__button');
            const $calculatorButtonsContainer = $('.pricing-calculator__buttons');
    
            $calculatorButtonsPrices.on('click', function() {
                const $this = $(this);
    
                $calculatorButtonsPrices.removeClass('is-active');
                $this.addClass('is-active');

                calculateTotalCharge();
            })
    
            $calculatorButtons.on('click', function() {
                const $this = $(this);
    
                $calculatorButtons.removeClass('is-active');
                $this.addClass('is-active');
    
                $calculatorButtonsContainer.toggleClass('is-monthly');
                $calculatorButtonsPrices.removeClass('is-active');
    
                if($calculatorButtonsContainer.hasClass('is-monthly')) {
                    $('.pricing-calculator__button:nth-child(3)').addClass('is-active');
                } else {
                    $('.pricing-calculator__button:first-child').addClass('is-active');
                }
    
                calculateTotalCharge();
            })

            $('#number-of-users').on('keyup change', function() {
                calculateTotalCharge();
            })

            $('#add-marketing').on('change', function() {
                const $this = $(this);

                calculateTotalCharge();

                if($this.is(':checked')) {
                    $('.sales__item__marketing').show();
                } else {
                    $('.sales__item__marketing').hide();
                }
            })
    
            function calculateTotalCharge() {
                let $current_plan_price = $('.pricing-calculator__button.is-active .pricing-calculator__price strong').text();
                $current_plan_price = parseFloat($current_plan_price);

                let $add_marketing = $('#add-marketing').is(':checked') ? $('#sales-marketing-contact-charge span').text() : 0;
                $add_marketing = parseFloat($add_marketing);

                const per_month_charge = $calculatorButtonsContainer.hasClass('is-monthly') ? 1 : 12;
                const $number_of_users = $('#number-of-users').val().length == 0 ? 0 : parseFloat($('#number-of-users').val());
                const $number_of_users_charge = ($current_plan_price * $number_of_users) * per_month_charge;
                const total_charge = $number_of_users_charge + $add_marketing;

                $('#sales-users-charge span').text($number_of_users_charge.toLocaleString());
                $('.pricing-calculator__amount p span').text($number_of_users_charge.toLocaleString())  

                $('#sales-total-charge').text(total_charge.toLocaleString());
            }

            calculateTotalCharge();
		}
	}

	

	return FX

} ( FX || {}, jQuery ) )