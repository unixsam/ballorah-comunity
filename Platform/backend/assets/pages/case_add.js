jQuery(document).ready(function() {
	jQuery('.datepicker').datepicker({
		format: "dd/mm/yyyy",
	    maxViewMode: 0,
	    todayBtn: true,
	    orientation: "top left",
	    autoclose: true,
	    todayHighlight: true,
	    endDate: '+0d',
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
	  $(".phone").intlTelInput({
		    // allowDropdown: false,
		    // autoHideDialCode: false,
		    // autoPlaceholder: "off",
		    // dropdownContainer: "body",
		    // excludeCountries: ["us"],
		    // geoIpLookup: function(callback) {
		    //   $.get("http://ipinfo.io", function() {}, "jsonp").always(function(resp) {
		    //     var countryCode = (resp && resp.country) ? resp.country : "";
		    //     callback(countryCode);
		    //   });
		    // },
		    // initialCountry: "auto",
		    // nationalMode: false,
		    // numberType: "MOBILE",
		    // onlyCountries: ['us', 'gb', 'ch', 'ca', 'do'],
		    preferredCountries: ['qa', 'ae'],
		    separateDialCode: true,
		    utilsScript: "build/js/utils.js"
		  });
});
