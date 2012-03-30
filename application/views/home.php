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
				<div class="close_header_publication"></div>
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
$size = getimagesize("images/imagen_de_muestra1.jpg");
?>
<div class="wrapper_sponsor" style="width: <?php echo $size[0].'px' ?> ; height:<?php echo ($size[1] + 25).'px' ?> ">
	<div class="header_sponsor">
		<div class="title_header_sponsor">
			<p>Sponsor</p>
		</div>
		<div class="button_header_sponsor"></div>
	</div>
	<div class="wrapper_content_sponsor" style="width: <?php echo $size[0].'px' ?> ; height: <?php echo $size[1].'px' ?> "><img src="/images/imagen_de_muestra1.jpg" />
	</div>
</div>
