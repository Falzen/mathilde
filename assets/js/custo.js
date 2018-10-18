
var isMenuOpen = false;

$('#site-menu-icon').click(function() {
	toggleMenu();
});

$('body').on('click', '#main-menu-overlay', function() {
	closeMenu();
});

$('.fa-comment').click(function() {
	$('#example-text').toggleClass('hide');
})








function toggleMenu() {
	if(isMenuOpen) {
		closeMenu();
		isMenuOpen = false;
	}
	else {
		openMenu();
		isMenuOpen= true;
	}
}

function openMenu() {
	$('#site-menu-icon, #main-menu').addClass('is-open');
	$('#site-menu-icon').html("&#9835;");
	$('#main-menu-overlay').addClass('is-visible is-over-everything');
}

function closeMenu() {
	$('#site-menu-icon, #main-menu').removeClass('is-open');
	$('#site-menu-icon').html("&#9834;");
	$('#main-menu-overlay').removeClass('is-visible is-over-everything');

}








