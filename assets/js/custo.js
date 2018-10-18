

$('#site-menu-icon').click(function() {
	$('#site-menu-icon, #main-menu').toggleClass('is-open');
	$('#main-menu-overlay').toggleClass('is-visible is-over-everything');
});