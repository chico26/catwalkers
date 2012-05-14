var infoPosts;
var current;

$(document).ready(function() {
	eventClickPost();
	$('#contact').click(function() {
		show_popup_mail();
	});
});


$(window).resize(function() {
	position_of_share_popup();
});

function show_popup_post(post_id) {
	infoPosts = post_id.split("_")
	$.get('/posts/viewPost/'+infoPosts[1], function(data) {
		$('#wrapper_popup').html(data.view);
		funcionality_popup_post_active();
		history.pushState({
			foo : 'bar'
		}, 'Title', '/index.php/posts/listing/'+infoPosts[0]+'/'+infoPosts[1]);
		current = 0;
	}, 'json')
	events_hide_popup();
}

function eventClickPost(){
	$('.wrapper_publications').each(function(){
		$(this).click(function(){
			show_popup_post($(this).prop("id"));
		})
	})
} 

function funcionality_popup_post_active() {
	flag_scroll_all_comments = false;
	position_of_share_popup();
	$(' #background_popup, #wrapper_share_looks, #wrapper_popup').fadeIn(500);
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

function funcionality_popup_post_inactive() {
	$(' #background_popup,#wrapper_popup, #wrapper_share_looks, #popup_container').fadeOut(500);
	history.pushState({
			foo : 'bar'
		}, 'Title', '/index.php/posts/listing/'+infoPosts[0]);
}

function position_of_share_popup() {
	$('#wrapper_share_looks').css({
		'left' : ($(window).width() - 630) / 2 + 630 + "px"
	})
}

/**************************Popup Mail*****************/
//puts the div in the center of screen
function popup_adjust() {
	$('#popup_container').css({
		'margin-top' : (((($(window).height()) - 370) / 2) - 40) + 'px'
	})
}
//show the popup on page and add events required for usabillity
function show_popup_mail() {
	$.post('/home/show_contact', function(response) {
		$('#popup_container').html(response.view);
		$('#wrapper_popup').html('');
		events_buttons_popup();
		events_fields_focus();
	}, 'json');
	popup_adjust();
	$('#background_popup, #popup_container').fadeIn(500);
	events_hide_popup();
}
//events of button close_popup and send of form
function events_buttons_popup() {
	$('.btn_close_popup').click(function() {
		$('#background_popup, #popup_container').fadeOut(500);
	})
	$('#submit').click(function(event) {
		event.preventDefault();
		var data = $(this).parents('form').serialize();
		$.post('/home/contact', data, function(response) {
			$('#popup_container').html(response.view);
			if(response.success == false) {
				events_buttons_popup();
				events_fields_focus();
			} else {
				setTimeout(function() {
					$('#background_popup, #popup_container').fadeOut(500);
				}, 3000);
			}
		}, 'json')
	})
}
//clean field when this have the focus, only if the field dont have text
function events_fields_focus() {
	id = ['name', 'email', 'message'];
	text = ['Nombre', 'E-mail', 'Mensaje'];
	$('#name, #email, #message').focus(function() {
		for( i = 0; i < text.length ; i++) {
			if($(this).attr('id') == id[i]) {
				position = i;
				if($(this).val() == text[position]) {
					$(this).val('');
					break;
				}
			}
		}
	})
	$('#name, #email, #message').blur(function() {
		if($(this).val() == '') {
			$(this).val(text[position]);
		}
	})
}
// Hide popup when the user press esc or when click out of the div central
function events_hide_popup(){
	//press scape
	$(document).keydown(function(tecla) {
		if(tecla.keyCode == 27) {
			funcionality_popup_post_inactive();
		}
	});
	//click out of div
	flag = false;
	$('#popup_container, #wrapper_popup').live('mouseover', function() {
		flag = true;
	}).live('mouseout', function() {
		flag = false;
	});
	$('#background_popup').click(function() {
		if(flag == false) {
			funcionality_popup_post_inactive();
		}
	});
}
/*******************Slider Images**********************/
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

