$(document).ready(function() {
	$('#wrapper').css({'height': $(window).height() + 'px'})
	$('.wrapper_login').css({'margin-top': ($(window).height() / 2) - 200 +'px'})
	
	$('.user_input_text').focus(function(){
		if($(this).val() == 'Usuario:'){
			$(this).val('')
			$(this).css({'color':'#666666'})
		}
	})
	
	$('.user_input_text').blur(function(){
		if($(this).val() == ''){
			$(this).val('Usuario:')
			$(this).css({'color':'#CCCCCC'})
		}
	})
	
	$('.password_input_text').focus(function(){
		$(this).css({'display':'none'})
		$('.password_input_pass').css({'display':'block'})
		$('.password_input_pass').focus();
		$('.password_input_pass').css({'color':'#666666'})
	})
	
	$('.password_input_pass').blur(function(){
		if($(this).val() == ''){
			$(this).css({'display':'none'})
			$('.password_input_text').css({'display':'block'})
		}
	})
	
})
$(document).resize(function() {
	$('#wrapper').css({'height': $(window).height()-60 + 'px'})
	$('.wrapper_login').css({'margin-top': ($(window).height() / 2) - 200 +'px'})
})