$(document).ready(function() {
	$('#search').focus(function() {
		$('#search').val('');
	})
	$('#search').blur(function() {
		$('#search').val('Buscar...');
	})
	$('#wrapper_proximamente a').hover(function() {
		$('#wrapper_proximamente a').css({
			'color' : '#000000',
			'font-size' : '12px !important'
		});
		$('#wrapper_proximamente a').html('Espéralo');
	}, function() {
		$('#wrapper_proximamente a').css({
			'color' : '#FFFFFF',
			'font-size' : '12px'
		});
		$('#wrapper_proximamente a').html('People');
	})
})

