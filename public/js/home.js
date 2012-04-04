$(document).ready(function() {
	fleXenv.fleXcrollMain("wrapper_all_publications")
	define_height_wrapper()
	$('.wrapper_sponsor').draggable({
		scroll : false
	})
	$('.button_header_sponsor').click(function() {
		$('.wrapper_content_sponsor').animate({
			height : 'toggle'
		}, 100)
		$('.header_sponsor').css({
			'margin-top' : $('.wrapper_content_sponsor').height()+'px'
		})
	})
	setTimeout(function() {
		events_publications()
	}, 4000)
	window_config();
	arrow_position();
})

$(window).resize(function() {
	fleXenv.fleXcrollMain("wrapper_all_publications");
	define_height_wrapper()
	window_config();
	arrow_position();
})
function window_config() {
	$("#wrapper_publications_and_arrow").height($(window).height() - $('#header').height() - $('#footer').height())
	if($("#wrapper").height() < $("#wrapper").width() * .527) {
		$("#wrapper").css({
			'background-position' : 'top'
		})
	} else {
		$("#wrapper").css({
			'background-position' : 'right'
		})
	}
	ideal_width = $("#wrapper").height() * 1.9
	if($("#wrapper").width() < ideal_width) {
		$("#wrapper").css({
			'background-size' : ideal_width
		})
		$('#video').css({
			'width' : ideal_width + 'px'
		})
	} else {
		$("#wrapper").css({
			'background-size' : '100%'
		})
		$('#video').css({
			'width' : '100%'
		})
	}
}

function arrow_position() {
	//Pone tamanio al contenedor de todas las publicaciones de acuerdo al tamanio de la pantalla
	$('#arrow_publications').css({
		'margin-top' : $('#wrapper_all_publications').height() / 2 - 15 + 'px',
	})
}

function events_publications() {
	hide_publications()
	$('#wrapper_publications_and_arrow').hover(function() {
		show_publications()
		clearTimeout(set_time_out)
	}, function() {
		set_time_out = setTimeout(function() {
			hide_publications()
		}, 900)
	})
}

function hide_publications() {
	$('#wrapper_all_publications').stop(true, true).animate({
		'width' : '0px'
	}, 150);
}

function show_publications() {
	$('#wrapper_all_publications').stop(true, true).animate({
		'width' : '260px'
	}, 150);
}

function define_height_wrapper() {
	$("#wrapper").height($(window).height() - 60)
}