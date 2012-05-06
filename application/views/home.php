<!DOCTYPE html>
<html lang="es">
	<head>
		<title>Catwalkers</title>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
		<meta http-equiv="Pragma" content="no-cache" />
		<link href="/images/favicon_cat.png" rel="icon" type="image/x-icon" />
		<link rel="StyleSheet" href="/css/reset.css" type="text/css" />
		<link rel="StyleSheet" href="/css/home.css" type="text/css" />
		<!-- The general javascript files, such as jQuery or jQuery UI -->
		<script type="text/javascript" src="/js/jquery.min.js"></script>
		<script type="text/javascript" src="/js/jquery-ui.min.js"></script>
		<script type='text/javascript' src="/js/jquery.nicescroll.min.js"></script>
		<script type="text/javascript" src="/js/home.js"></script>
	</head>
	<body>
		<!-- <video id="video" loop="loop" autoplay="autoplay" preload="auto">
		<source src="/images/background.mp4" type='video/mp4; codecs="avc1,mp4a"' />
		<source src="/images/background.ogv" type='video/ogg; codecs="theora,vorbis"' />
		<source src="/images/background.webm" type='video/webm; codecs="vp8,vorbis"' />
		</video> -->
		<?php $this -> load -> view('/template/header', $this -> data)
		?>
		<div id="wrapper" class="ui-widget ui-helper-clearfix">
			<?php $img_num =0
			?>
			<div id="wrapper_publications_and_arrow">
				<div id="wrapper_all_publications" class="flexcroll">
					<?php for ($i=0; $i < 100; $i++):
					?>
					<div class="wrapper_publication">
						<div class="header_publication position_top">
							<div class="title_header_publication">
								Pelo de verano.
							</div>
						</div>
						<div class="wrapper_container_publication">
							<div class="image_publication" style="background: url('/images/imagen_de_muestra<?php echo $img_num = ($img_num==2)?1:2 ?>.jpg');"></div>
							<div class="wrapper_text_publication">
								<div class="text_publication">
									Ipsum is simply dummy text of the printing and typesetting industry.
								</div>
							</div>
						</div>
					</div>
					<?php endfor?>
				</div>
				<div id="arrow_publications"></div>
			</div>
			<?php
			$size = getimagesize("images/zara_ad.jpg");
			?>
			<div class="wrapper_sponsor" style="width: <?php echo $size[0].'px' ?> ; height:<?php echo ($size[1] + 25).'px' ?> ">
				<div class="header_sponsor">
					<div class="title_header_sponsor">
						<p>
							Sponsor
						</p>
					</div>
					<div class="button_header_sponsor"></div>
				</div>
				<div class="wrapper_content_sponsor" style="width: <?php echo $size[0].'px' ?> ; height: <?php echo $size[1].'px' ?> "><img src="/images/zara_ad.jpg" />
				</div>
			</div>
		</div>
		<?php
		$this -> load -> view('/template/footer', $this -> data);
		?>
	</body>
</html>
