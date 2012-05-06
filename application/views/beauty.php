<div id="wrapper_left_menu">
	<div id="left_menu">
		<?php echo form_open() ?>
		<ul>
			<li class="title_left_menu" onclick="show_popup()">Belleza:</li>
			<li class="subtitle_left_menu">Categorías:</li>
			<ul>
				<li><div class="wrapper_checkbox"><div><?php echo form_checkbox(array('value'=>'all')) ?></div></div> Todos</li>
				<li><div class="wrapper_checkbox"><div><?php echo form_checkbox(array('value'=>'feeding')) ?></div></div> Alimentación</li>
				<li><div class="wrapper_checkbox"><div><?php echo form_checkbox(array('value'=>'makeup')) ?></div></div> Maquillaje</li>
				<li><div class="wrapper_checkbox"><div><?php echo form_checkbox(array('value'=>'hair')) ?></div></div> Pelo</li>
				<li><div class="wrapper_checkbox"><div><?php echo form_checkbox(array('value'=>'skin')) ?></div></div> Piel</li>
				<li><div class="wrapper_checkbox"><div><?php echo form_checkbox(array('value'=>'nail')) ?></div></div> Uñas</li>
			</ul>
			<li class="subtitle_left_menu">Color:</li>
			<ul>
				<li><div class="wrapper_checkbox"><div><?php echo form_checkbox(array('value'=>'allcolors')) ?></div></div> Todos</li>
				<li><div class="wrapper_checkbox"><div><?php echo form_checkbox(array('value'=>'yellow')) ?></div></div> Amarillo</li>
				<li><div class="wrapper_checkbox"><div><?php echo form_checkbox(array('value'=>'blue')) ?></div></div> Azul</li>
				<li><div class="wrapper_checkbox"><div><?php echo form_checkbox(array('value'=>'white')) ?></div></div> Blanco</li>
				<li><div class="wrapper_checkbox"><div><?php echo form_checkbox(array('value'=>'coffee')) ?></div></div> Café</li>
				<li><div class="wrapper_checkbox"><div><?php echo form_checkbox(array('value'=>'golden')) ?></div></div> Dorado</li>
				<li><div class="wrapper_checkbox"><div><?php echo form_checkbox(array('value'=>'gray')) ?></div></div> Gris</li>
				<li><div class="wrapper_checkbox"><div><?php echo form_checkbox(array('value'=>'purple')) ?></div></div> Morado</li>
				<li><div class="wrapper_checkbox"><div><?php echo form_checkbox(array('value'=>'black')) ?></div></div> Negro</li>
				<li><div class="wrapper_checkbox"><div><?php echo form_checkbox(array('value'=>'orange')) ?></div></div> Naranja</li>
				<li><div class="wrapper_checkbox"><div><?php echo form_checkbox(array('value'=>'neutral')) ?></div></div> Neutrales</li>
				<li><div class="wrapper_checkbox"><div><?php echo form_checkbox(array('value'=>'red')) ?></div></div> Rojo</li>
				<li><div class="wrapper_checkbox"><div><?php echo form_checkbox(array('value'=>'pink')) ?></div></div> Rosa</li>
				<li><div class="wrapper_checkbox"><div><?php echo form_checkbox(array('value'=>'green')) ?></div></div> Verde</li>
			</ul>
		</ul>
		<?php echo form_close() ?>
	</div>
</div>


<?php 
		$directorio=opendir('images/imagenes_muestra_galeria/'); 
		$archivos_no_permitidos = array('.','..');
		while($archivo = readdir($directorio)) :
			if(!in_array($archivo,$archivos_no_permitidos)){
				$photos_array []= $archivo;
			}
		endwhile;
?>
<div id="wrapper_container">
		<?php 
		for($counter_columns=0;$counter_columns<3;$counter_columns++) : ?>
			<div class="wrapper_gallery">
				<?php 
				for($i=$counter_columns;$i<count($photos_array);$i+=3): 
					$size_img = getimagesize('images/imagenes_muestra_galeria/'.$photos_array[$i]); 
					$ideal_height = ($size_img[1]*220)/$size_img[0] ?>
					<div class="wrapper_publications" style="height: <?php echo $ideal_height."px" ?>">
						<div class="image_publication">
							<img src="/images/imagenes_muestra_galeria/<?php echo $photos_array[$i] ?>" alt=""/>
						</div>
						<div class="black_div_publication" >
						</div>
						<div class="description_publication">
							<div class="title_publication">Title</div>
								<div class="wrapper_content_publication">
									<textarea class="content_publication">blablablablablablablablablablablablablablablablabla</textarea>
									<div class="date_publication"><p>Posteado: 26/Jun/2012</p></div>
								</div>
							<div class="counter_looks_publication">1000</div>
						</div>
					</div>
				<?php endfor; ?>
			</div>
		<?php endfor; ?>
	</div>
	<div id="wrapper_advertising">
		<div id="advertising">
			<div id="banner_long"><img src="/images/calvin.jpeg" alt=""/></div>
			<div id="banner_short"><img src="/images/zara_ad.jpg" alt=""/></div>
		</div>
	</div>
<!-- </div> -->