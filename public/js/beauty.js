$(document).ready(function() {
	define_height_wrapper()
	setTimeout(function() {
		fleXenv.fleXcrollMain("general_wrapper")
	}, 100)
	config_gallery_publications()
	checkbox_funcionlity()
})

$(window).resize(function() {
	define_height_wrapper()
})

function config_gallery_publications() {
	$('.wrapper_publications').each(function() {
		$(this).children('.black_div_publication , .description_publication').css({
			'height' : $(this).height() + "px",
			'margin-top' : -+$(this).height() - 3 + "px"
		})
		$(this).hover(function() {
			$(this).children('.black_div_publication').stop().animate({
				opacity : '0.8'
			}, 400)
			$(this).children('.description_publication').stop().animate({
				opacity : '1'
			}, 400)
		}, function() {
			$(this).children('.black_div_publication, .description_publication').stop(true, true).animate({
				opacity : '0'
			}, 400)
		})
	})
}

function checkbox_funcionlity() {
	$('.wrapper_checkbox div input').change(function() {
		if($(this).is(':checked')) {
			$(this).parent().addClass('checkbox_checked')
		} else {
			$(this).parent().removeClass('checkbox_checked')
		}
	})
}

function define_height_wrapper() {
	$("#general_wrapper").height($(window).height() - 60);
	if($(window).width() >= 1050) {
		x = (($(window).width() - 1050) / 2) + 870
		$('#wrapper_advertising').css({
			'left' : x + "px"
		})
	}

}