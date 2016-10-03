jQuery(document).ready(function($) {

	(function plusMinus(){
		$(document).on('click', '.plusminusbutton', function(){
			var $button = $(this)
			var oldValue = $button.parent().find('.input-text.qty').val()
			var newVal
			if ( $button.hasClass('plus') ) {
				newVal = parseFloat(oldValue) + 1
			} else {
				// Don't allow decrementing below zero
				if (oldValue > 0) {
					newVal = parseFloat(oldValue) - 1
				} else {
					newVal = 0
				}
			}
			$button.parent().find('.input-text.qty').val(newVal).change()
		})
	})();

	(function clearSearchOnClick(){
		//clear search on click
		defaultValue = $('#Searchform').val();
		$('#Searchform').click(function() {
			if( this.value == defaultValue ) {
				$(this).val("");
			}
		});
	})();

	//Fast CLick
	FastClick.attach(document.body);

});
