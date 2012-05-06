$(document).ready(function() {
		$("body").niceScroll({
			cursorborder : "none",
			zindex : "999",
			cursorcolor:"#a8a9ab"
		});
	// $('#description_post').height(($('#general_post').height() - ($('#title_post').height() + $('#wrapper_info_post').height())) - 5);
	// setTimeout(function() {
		// $("body").niceScroll({
			// cursorborder : "none",
			// zindex : "1",
		// });
		// show_scrollbars();
		// $('.photo_perfil_person_comment').height($('.wrapper_comment').height());
	// }, 5);
});

// function show_scrollbars() {
	// $("#content_comments").niceScroll({
		// cursorborder : "none",
		// zindex : "1"
	// });
	// $("#description_post").niceScroll({
		// cursorborder : "none",
		// zindex : "1"
	// });
// }

// $(window).resize(function() {
// clearTimeout(resizeTimer);
// resizeTimer = setTimeout(function() {
// show_scrollbars();
// }, 100);
// })