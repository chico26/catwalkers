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
			for($i=$counter_columns;$i<count($posts);$i+=3): 
				$size_img = getimagesize('images/imagenes_muestra_galeria/'.$photos_array[$i]); 
				$ideal_height = ($size_img[1]*220)/$size_img[0] ?>
				<div id="<?php echo $posts[$i]->type_post.'_'.$posts[$i]->post_id ?>" class="wrapper_publications" style="height: <?php echo $ideal_height."px" ?>">
					<div class="image_publication">
						<img src="/images/imagenes_muestra_galeria/<?php echo $photos_array[$i] ?>" alt=""/>
					</div>
					<div class="black_div_publication" >
					</div>
					<div class="description_publication">
						<div class="title_publication"><?php echo $posts[$i]->title ?></div>
							<div class="wrapper_content_publication">
								<p class="content_publication"><?php echo $posts[$i]->description ?></p>
								<div class="date_publication"><p><?php echo $posts[$i]->created_at ?></p></div>
							</div>
						<div class="counter_looks_publication">1000</div>
					</div>
				</div>
			<?php endfor; ?>
		</div>
	<?php endfor; ?>
</div>