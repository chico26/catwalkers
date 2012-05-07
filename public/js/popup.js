$(document).ready(function() {
	eventClickPost();
});
var current;
$(window).resize(function() {
	position_of_share_popup();
});
function show_popup() {
	$.get('/beauty/post/1', function(data) {
		$('#background_popup').html(data);
		funcionality_popup_active();
		history.pushState({
			foo : 'bar'
		}, 'Title', '/beauty/post/5');
		current = 0;
	})
}

function eventClickPost(){
	$('.wrapper_publications').each(function(){
		$(this).click(function(){
			show_popup();
		})
	})
	$(document).keydown(function(tecla) {
		if(tecla.keyCode == 27) {
			funcionality_popup_inactive();
		}
	});
}

function funcionality_popup_active() {
	flag_scroll_all_comments = false;
	position_of_share_popup();
	$('#wrapper_popup, #background_popup,#wrapper_share_looks').fadeIn(1000);
	$("#background_popup").niceScroll({
		cursorcolor : "#949599",
		cursorborder : "none",
		zindex : "5",
	});
	$('#all_comments').hover(function() {
		if(flag_scroll_all_comments == false) {
			flag_scroll_all_comments = true;
			$(this).niceScroll({
				cursorcolor : "#949599",
				cursorborder : "none",
				zindex : "5",
			});
		}
	});
}

function funcionality_popup_inactive() {
	$('#wrapper_popup, #background_popup').fadeOut(1000);
	history.pushState({
			foo : 'bar'
		}, 'Title', '/beauty');
}

function position_of_share_popup() {
	$('#wrapper_share_looks').css({
		'left' : ($(window).width() - 630) / 2 + 630 + "px"
	})
}


$('.arrow_prev').live("click", function(event) {
	if(current == 0) {
		current = $('.image_slider').length - 1;
	} else {
		current -= 1;
	}
	$('.image_slider').css({
		'display' : 'none',
		'opacity' : '0.5'
	});
	$('div[rel="' + current + '"]').css({
		'display' : 'block'
	});

	$('div[rel="' + current + '"]').animate({
		'opacity' : '1'
	}, 1000);
	
})
$('.arrow_next').live("click", function(event) {
	if(current == $('.image_slider').length - 1) {
		current = 0;
	} else {
		current += 1;
	}
	$('.image_slider').css({
		'display' : 'none',
		'opacity' : '0.5'
	});
	$('div[rel="' + current + '"]').css({
		'display' : 'block'
	});

	$('div[rel="' + current + '"]').animate({
		'opacity' : '1'
	}, 1000);
	
})