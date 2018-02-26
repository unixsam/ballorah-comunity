jQuery(document).ready(function() {
	jQuery('#date_of_birth').datepicker({
		format: "dd/mm/yyyy",
	    maxViewMode: 0,
	    todayBtn: true,
	    orientation: "top left",
	    autoclose: true,
	    todayHighlight: true,
	    endDate: '+0d',
	    toggleActive: true
    });
	jQuery('#passing_date').datepicker({
		format: "dd/mm/yyyy",
	    maxViewMode: 0,
	    todayBtn: true,
	    orientation: "top left",
	    autoclose: true,
	    todayHighlight: true,
	    endDate: '+0d',
	    toggleActive: true
    });
	jQuery('#expiry_date').datepicker({
		format: "dd/mm/yyyy",
	    maxViewMode: 0,
	    todayBtn: true,
	    orientation: "top left",
	    autoclose: true,
	    todayHighlight: true,
	    endDate: '+5y',
	    toggleActive: true
    });

	jQuery(".select2").select2({
		templateResult: function (data) {
		if (data.id === '') { // adjust for custom placeholder values
			return 'Custom styled placeholder text';
		}

		return data.text;
	}
	});
	jQuery(".country").select2({
		placeholder: 'This is my placeholder',
		allowClear: true
	});
	var countryData = $.fn.intlTelInput.getCountryData(), telInput = $(".phone");
	  telInput.intlTelInput({
		    // allowDropdown: false,
		    //autoHideDialCode: false,
		    // autoPlaceholder: "off",
		    //dropdownContainer: "body",

		    // excludeCountries: ["us"],
		    // geoIpLookup: function(callback) {
		    //   $.get("http://ipinfo.io", function() {}, "jsonp").always(function(resp) {
		    //     var countryCode = (resp && resp.country) ? resp.country : "";
		    //     callback(countryCode);
		    //   });
		    // },
		  	//initialCountry: "qa",
		    //nationalMode: true,
		    //numberType: "MOBILE",
		    // onlyCountries: ['us', 'gb', 'ch', 'ca', 'do'],
		    preferredCountries: ['qa', 'ae'],
		    separateDialCode: true,
		    //utilsScript: "build/js/utils.js"
		  });

			$('#phone_sel').on("countrychange", function() {
				$('#phone').val('+' + $('#phone_sel').intlTelInput("getSelectedCountryData").dialCode + $('#phone_sel').val());
			});
			$('#phone_sel').on("change",function() {
				$('#phone').val('+' + $('#phone_sel').intlTelInput("getSelectedCountryData").dialCode + $('#phone_sel').val());
			});
			$('#phone_sel').keyup(function() {
				$('#phone').val('+' + $('#phone_sel').intlTelInput("getSelectedCountryData").dialCode + $('#phone_sel').val());
			});
			$('#phone_sel').trigger("countrychange");

			$('#fax_no_sel').on("countrychange", function() {
				$('#fax_no').val('+' + $('#fax_no_sel').intlTelInput("getSelectedCountryData").dialCode + $('#fax_no_sel').val());
			});
			$('#fax_no_sel').on("change",function() {
				$('#fax_no').val('+' + $('#fax_no_sel').intlTelInput("getSelectedCountryData").dialCode + $('#fax_no_sel').val());
			});
			$('#fax_no_sel').keyup(function() {
				$('#fax_no').val('+' + $('#fax_no_sel').intlTelInput("getSelectedCountryData").dialCode + $('#fax_no_sel').val());
			});
			$('#fax_no_sel').trigger("countrychange");

			$('#mobile_sel').on("countrychange", function() {
				$('#mobile').val('+' + $('#mobile_sel').intlTelInput("getSelectedCountryData").dialCode + $('#mobile_sel').val());
			});
			$('#mobile_sel').on("change",function() {
				$('#mobile').val('+' + $('#mobile_sel').intlTelInput("getSelectedCountryData").dialCode + $('#mobile_sel').val());
			});
			$('#mobile_sel').keyup(function() {
				$('#mobile').val('+' + $('#mobile_sel').intlTelInput("getSelectedCountryData").dialCode + $('#mobile_sel').val());
			});
			$('#mobile_sel').trigger("countrychange");
});
