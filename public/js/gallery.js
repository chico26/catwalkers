$(document).ready(function() {
	config_gallery_publications()
	checkbox_funcionlity()
	//Generate scrollbar
	$("body").niceScroll({
		cursorborder : "none",
		zindex : "1"
	});
});
function config_gallery_publications() {
	$('.wrapper_publications').each(function() {
		//define height of each black div
		$(this).children('.black_div_publication , .description_publication').css({
			'height' : $(this).height() + 1 + "px",
			'margin-top' : -+$(this).height() - 4 + "px"
		})
		//show black div on current div hover
		$(this).hover(function() {
			$(this).children('.black_div_publication').stop().animate({
				opacity : '0.6'
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
	$('.wrapper_checkbox div input').change(function() {($(this).is(':checked')) ? $(this).parent().addClass('checkbox_checked') : $(this).parent().removeClass('checkbox_checked');
	});
}