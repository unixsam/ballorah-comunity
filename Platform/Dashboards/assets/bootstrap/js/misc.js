jQuery( document ).ready(function() {
jQuery('.menu-block-5 ul li > *')
    .focus(function() {
		jQuery( '.menu-block-5 ul li' ).removeClass('focused');
        jQuery( this ).parents(".expanded").addClass('focused');
    });
});
