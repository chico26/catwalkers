$(document).ready(function(){
	
	$('.menu_login').click(function(){
		$('.wrapper_login').animate({
			height: 'toggle'
		}, 1)
	})
	
	$('.save_session p').click(function(){
		if($('.save_session input').is(':checked')){
			$('.save_session input').attr("checked",false);
		}else{
			$('.save_session input').attr("checked",true);
		}
	})
	
})
