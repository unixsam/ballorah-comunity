jQuery(document).ready(function() {
	jQuery('#accident_report_date').datepicker({
		format: "dd/mm/yyyy",
	    maxViewMode: 0,
	    todayBtn: true,
	    orientation: "top left",
	    autoclose: true,
	    todayHighlight: true,
	    endDate: '+0d',
	    toggleActive: true
    });
	jQuery('#accident_report_expiry_date').datepicker({
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
	
	function formatRepo (repo) {
	    if (repo.loading) return repo.text;

	    var markup = "<div class='select2-result-repository clearfix'>" +
	      "<div class='select2-result-repository__meta'>" +
	        "<div class='select2-result-repository__title'>" + repo.name + "</div>";

	    

	    markup += "<div class='select2-result-repository__statistics'>" +
	      "<div class='select2-result-repository__forks'><i class='fa fa-phone'></i> " + repo.phone + "</div>" +
	    "</div>" +
	    "</div></div>";

	    return markup;
	  }
	function formatRepo2 (repo) {
	    if (repo.loading) return repo.text;

	    var markup = "<div class='select2-result-repository clearfix'>" +
	      "<div class='select2-result-repository__meta'>" +
	        "<div class='select2-result-repository__title'>" + repo.plate_no + "</div>";

	    

	    markup += "<div class='select2-result-repository__statistics'>" +
	      "<div class='select2-result-repository__forks'><i class='fa fa-phone'></i> " + repo.phone + "</div>" +
	    "</div>" +
	    "</div></div>";

	    return markup;
	  }
	  function formatRepoSelection (repo) {
	    return repo.name || repo.text;
	  }
	
	$("#customer").select2({
	      ajax: {
	          url: "http://localhost/workpro/api/customers",
	          dataType: 'json',
	          delay: 250,
	          data: function (params) {
	            return {
	              q: params.term, // search term
	              page: params.page
	            };
	          },
	          processResults: function (data, params) {
	            // parse the results into the format expected by Select2
	            // since we are using custom formatting functions we do not need to
	            // alter the remote JSON data, except to indicate that infinite
	            // scrolling can be used
	            params.page = params.page || 1;

	            return {
	              results: data,
	              pagination: {
	                more: (params.page * 30) < data.total_count
	              }
	            };
	          },
	          cache: true
	        },
	        escapeMarkup: function (markup) { return markup; },
	        minimumInputLength: 1,
	        templateResult: formatRepo,
	        templateSelection: formatRepoSelection
	      });
	
		$("#vehicle").select2({
		      ajax: {
		          url: "http://localhost/workpro/api/vehicles",
		          dataType: 'json',
		          delay: 250,
		          data: function (params) {
		            return {
		              q: params.term, // search term
		              page: params.page
		            };
		          },
		          processResults: function (data, params) {
		            // parse the results into the format expected by Select2
		            // since we are using custom formatting functions we do not need to
		            // alter the remote JSON data, except to indicate that infinite
		            // scrolling can be used
		            params.page = params.page || 1;

		            return {
		              results: data,
		              pagination: {
		                more: (params.page * 30) < data.total_count
		              }
		            };
		          },
		          cache: true
		        },
		        escapeMarkup: function (markup) { return markup; },
		        minimumInputLength: 1,
		        templateResult: formatRepo2,
		        templateSelection: formatRepoSelection
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