$(document).ready(function() {
	$("body").niceScroll({
		cursorborder : "none",
		zindex : "999",
		cursorcolor:"#a8a9ab"
	});
	
	$('.wrapper_title_post textarea').focus(function(){
		if($(this).val() == 'Titulo:'){
			$(this).val('');
			$(this).css({
				'font-family':'Times New Roman',
				'color':'black',
				'font-style':'italic',
				'font-weight':'bold'
			});
		}
	})
	$('.wrapper_title_post textarea').blur(function(){
		if($(this).val() == ''){
			$(this).val('Titulo:');
			$(this).css({
				'font-family':'Helvetica',
				'color':'#CCC',
				'font-style':'normal',
				'font-weight':'normal'
			});
		}
	})
	
});