bandForHidePublicationsWhenDocumentReady = 0;
$(document).ready(function() {
	define_height_wrapper();
	$("#wrapper_all_publications").niceScroll();
	setTimeout(function() {
		if(bandForHidePublicationsWhenDocumentReady == 0)
			hide_publications()
	}, 4000)
	events_publications();
	window_config();
	arrow_position();
	funcionallity_of_the_advertising();
});
$(window).resize(function() {
	define_height_wrapper();
	window_config();
	arrow_position();
})
//config the background proportionally
function window_config() {
	$("#wrapper_publications_and_arrow").height($(window).height() - $('#header').height() - $('#footer').height())
	$("#wrapper").css({
		'background-position' : 'center'
	})
	ideal_width = $("#wrapper").height() * 2
	if($("#wrapper").width() < ideal_width) {
		$("#wrapper").css({
			'background-size' : ideal_width + 'px'
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

//positionity the arrow in the window center
function arrow_position() {
	$('#arrow_publications').css({
		'margin-top' : $('#wrapper_all_publications').height() / 2 - 15 + 'px',
	})
}

//detect event hover on allpublications div
function events_publications() {
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
	bandForHidePublicationsWhenDocumentReady = 1;
	$('#wrapper_all_publications').stop(true, true).animate({
		'width' : '260px'
	}, 150);
}

function funcionallity_of_the_advertising() {
	//generate the advertising draggable
	$('.wrapper_sponsor').draggable({
		scroll : false
	})
	//hide or show the advertising
	$('.button_header_sponsor').click(function() {
		$('.wrapper_content_sponsor').animate({
			height : 'toggle'
		}, 1)
		$('.header_sponsor').animate({
			'margin-top' : $('.wrapper_content_sponsor').height() + 'px'
		}, 1)
	})
}

function define_height_wrapper(){
	$("#wrapper").height($(window).height() - 60)
}
