$(function() {

// make menus drop automatically
$('ul.nav li.dropdown').hover(function() {
	$('.dropdown-menu', this).fadeIn();

},	function() {
	$('.dropdown-menu', this).fadeOut('fast');
});// hover



}); // End Full Functions

// $(window).scroll(function() {
//     if ($(".navbar").offset().top > 50) {
//         $(".navbar-fixed-top").addClass("top-nav-collapse");
//     } else {
//         $(".navbar-fixed-top").removeClass("top-nav-collapse");
//     }
// });



// $('#contactUs').on('click', function(e) {
// 	$('html, body').animate({
// 		scrollTop: $("#contact").offset().top
// 	}, 750);
// 	e.preventDefault();
// });



