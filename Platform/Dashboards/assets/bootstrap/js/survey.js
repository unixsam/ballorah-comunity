jQuery(".q-location .municipality").change(function () {
	var municipality = '(' + jQuery(this).val() + ')';
    jQuery(this).closest('.q-location').find('.area optgroup').children('option').hide();
    jQuery(this).closest('.q-location').find('.area optgroup').hide();
    jQuery(this).closest('.q-location').find('.area optgroup').children("option[value*='" + municipality + "']").show();
    jQuery(this).closest('.q-location').find('.area optgroup').children("option[value*='" + municipality + "']").parent('optgroup').show;
	
	
	jQuery(this).closest('.q-location').find('.area').children('option').hide();
    jQuery(this).closest('.q-location').find('.area').children("option[value*='" + municipality + "']").show();
	
})  


