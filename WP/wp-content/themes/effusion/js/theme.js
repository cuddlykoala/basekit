jQuery(document).ready(function ($) {
  $('[data-toggle="offcanvas"]').click(function () {
    $('.row-offcanvas').toggleClass('active')
    
  }).toggle(
  	function (){
  		$('.row-offcanvas-right button.btn').text('Hide Sidebar');
  	},
  	function () {
  		$('.row-offcanvas-right button.btn').text('Show Sidebar');
  	});


$(function() {
	$('#member_carousel').carousel({
		interval: false
	});
});


$(function() {

// make menus drop automatically
$('ul.nav li.dropdown').hover(function() {
	$('.dropdown-menu', this).fadeIn();

},	function() {
	$('.dropdown-menu', this).fadeOut('fast');
});// hover

	$("[data-toggle='tooltip']").tooltip({ animation:true});
	// show tooltips


}); // End Full Functions

// $(window).scroll(function() {
//     if ($(".navbar").offset().top > 50) {
//         $(".navbar-fixed-top").addClass("top-nav-collapse");
//     } else {
//         $(".navbar-fixed-top").removeClass("top-nav-collapse");
//     }
// });


// $('.bio').css('display', 'none');

// $('.toggle a').on('click', function(e) {
// 	var id = $(this).data('toggle')

// 	if ($(this).hasClass('toggle-active')) {
// 		$(this).removeClass('toggle-active');
// 	} else {
// 		$(this).addClass('toggle-active');
// 	}

	
// 	$(id).slideToggle();
// 	e.preventDefault();

// })

// $('#carousel-example-generic').carousel({
// 	keyboard: true
// })

$(document).keydown(function(e) {
	switch(e.which) {
		case 37:
			$('.carousel').carousel('prev');
		break;

		case 39:
			$('.carousel').carousel('next');
		break;
	}
	// alert("key pressed");
});

$('a.member-modal').on('click', function(e) {

	var i = $(this).data('ref');

	// alert(index);
	// $('#member_carousel').carousel(i);
	// $('#member_carousel').carousel('pause');

	e.preventDefault();

});

$('iframe').closest('p').css('margin', '0px');

$('#myCarousel').carousel({
	interval: 8000
});

$(function() {
	$('.navbar-nav li a').on('click', function(e) {
		
		if($(this).attr('href') == '#contactUs') {
			

			if (navigator.userAgent.match(/(iPod|iPhone|iPad|Android)/)) {           
            window.scrollTo(0,$("#contact").offset().top) // first value for left offset, second value for top offset
				
				} else {
					// $("body").scrollTop(200);
		            $('html,body').animate({
		                scrollTop: $("#contact").offset().top
		            }, 750, function(){
		                $('html,body').clearQueue();
		            });

		}
			e.preventDefault();
		}


	});


	


});


// $('#contactUs').on('click', function(e) {
// 	$('html, body').animate({
// 		scrollTop: $("#contact").offset().top
// 	}, 750);
// 	e.preventDefault();
// });

});

