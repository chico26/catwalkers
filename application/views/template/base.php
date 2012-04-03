<!DOCTYPE html>
<html lang="es">
	<head>
		<title>Catwalkers</title>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
		<meta http-equiv="Pragma" content="no-cache" />
		<link href="/images/favicon_cat.png" rel="icon" type="image/x-icon" />
		<link rel="StyleSheet" href="/css/reset.css" type="text/css" />
		<link rel="StyleSheet" href="/css/base.css" type="text/css" />
		<!-- The general javascript files, such as jQuery or jQuery UI -->
		<script type="text/javascript" src="/js/jquery.min.js"></script>
		<script type="text/javascript" src="/js/jquery-ui.min.js"></script>
		<script type="text/javascript" src="/js/base.js"></script>
		<script type='text/javascript' src="/js/flexcroll.js"></script>
		<?php
			if($this->uri->segment(1)==''):
		?>
		<link rel="StyleSheet" href="/css/home.css" type="text/css" />
		<script type="text/javascript" src="/js/home.js"></script>
		<?php
		else:
		if (file_exists('js/' . $this->uri->segment(1) . '.js')) :
		?>
		<script type="text/javascript" src="/js/<?php echo $this -> uri -> segment(1);?>.js"></script>
		<?php
		endif;
		if (file_exists('css/' . $this->uri->segment(1) . '.css')) :
		?>
		<link rel="StyleSheet" href="/css/<?php echo $this -> uri -> segment(1);?>.css" type="text/css" />
		<?php
		endif;
		endif;
		?>
	</head>
	<body>
		<!-- <video id="video" loop="loop" autoplay="autoplay" preload="auto">
		<source src="/images/background.mp4" type='video/mp4; codecs="avc1,mp4a"' />
		<source src="/images/background.ogv" type='video/ogg; codecs="theora,vorbis"' />
		<source src="/images/background.webm" type='video/webm; codecs="vp8,vorbis"' />
		</video> -->
		
		<?php
		$this -> load -> view('/template/header', $this -> data);
		?>
		<div id="general_wrapper">
			<div id="wrapper" class="ui-widget ui-helper-clearfix">
				<?php
				$this -> load -> view($view, $this -> data);
				?>
			</div>
		</div>
		<?php
		$this -> load -> view('/template/footer', $this -> data);
		?>
	</body>
</html>