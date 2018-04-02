$(function($) {
	var telInput = $('#phone');
	telInput.intlTelInput({
		utilsScript: 'https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/8.4.8/js/utils.js',
	});

	var validate = function(input) {
		if ($.trim(input.val())) {
			if (input.intlTelInput("isValidNumber")) {
				$('#result').text('')
			} else {
				$('#result').text('')
			}
		}
	};
	$('#submit').on('click', function() {
		validate(telInput);
	});
});