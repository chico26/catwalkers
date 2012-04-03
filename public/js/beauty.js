$(document).ready(function() {
	setTimeout(function() {
		fleXenv.fleXcrollMain("wrapper_container")
	}, 100)
	config_wrapper()
	config_gallery_publications()

})

$(window).resize(function() {
	setTimeout(function() {
		fleXenv.fleXcrollMain("wrapper_container")
	}, 100)
	config_wrapper()
	config_gallery_publications()
})
function config_wrapper() {
	x = ($(window).width() - 1050) / 2;
	$('#wrapper_container').width(900 + x);
	$("#wrapper_container").height($(window).height() - 60);
}

function config_gallery_publications() {
	$('.wrapper_publications').each(function() {
		$(this).children('.black_div_publication , .description_publication').css({
			'height' : $(this).height() + "px",
			'margin-top' : -+$(this).height() - 3 + "px"
		})
		$(this).hover(function() {
			$(this).children('.black_div_publication').stop(true, true).animate({
				opacity : '0.6'
			}, 400)
			$(this).children('.description_publication').stop(true, true).animate({
				opacity : '1'
			}, 400)
		}, function() {
			$(this).children('.black_div_publication, .description_publication').stop(true, true).animate({
				opacity : '0'
			}, 400)
		})
	})
}