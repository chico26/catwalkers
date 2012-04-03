<div id="wrapper_left_menu">
	<div id="left_menu">
		<?php echo form_open() ?>
		<ul>
			<li class="title_left_menu">Belleza:</li>
			<li class="subtitle_left_menu">Categorías:</li>
			<ul>
				<li><?php echo form_checkbox(array('value'=>'all')) ?> Todos</li>
				<li><?php echo form_checkbox(array('value'=>'feeding')) ?> Alimentación</li>
				<li><?php echo form_checkbox(array('value'=>'makeup')) ?> Maquillaje</li>
				<li><?php echo form_checkbox(array('value'=>'hair')) ?> Pelo</li>
				<li><?php echo form_checkbox(array('value'=>'skin')) ?> Piel</li>
				<li><?php echo form_checkbox(array('value'=>'nail')) ?> Uñas</li>
			</ul>
			<li class="subtitle_left_menu">Color:</li>
			<ul>
				<li><?php echo form_checkbox(array('value'=>'allcolors')) ?>Todos</li>
				<li><?php echo form_checkbox(array('value'=>'yellow')) ?>Amarillo</li>
				<li><?php echo form_checkbox(array('value'=>'blue')) ?>Azul</li>
				<li><?php echo form_checkbox(array('value'=>'white')) ?>Blanco</li>
				<li><?php echo form_checkbox(array('value'=>'coffee')) ?>Café</li>
				<li><?php echo form_checkbox(array('value'=>'golden')) ?>Dorado</li>
				<li><?php echo form_checkbox(array('value'=>'gray')) ?>Gris</li>
				<li><?php echo form_checkbox(array('value'=>'purple')) ?>Morado</li>
				<li><?php echo form_checkbox(array('value'=>'black')) ?>Negro</li>
				<li><?php echo form_checkbox(array('value'=>'orange')) ?>Naranja</li>
				<li><?php echo form_checkbox(array('value'=>'neutral')) ?>Neutrales</li>
				<li><?php echo form_checkbox(array('value'=>'red')) ?>Rojo</li>
				<li><?php echo form_checkbox(array('value'=>'pink')) ?>Rosa</li>
				<li><?php echo form_checkbox(array('value'=>'green')) ?>Verde</li>
			</ul>
		</ul>
		<?php echo form_close() ?>
	</div>
</div>
<div id="wrapper_container">
	<div id="container">
		<div class="wrapper_gallery">
			<?php for($i=0;$i<10;$i+=3): ?>
				<?php  
					$size_img = getimagesize('images/galeria.jpeg'); 
					$ideal_height = ($size_img[1]*230)/$size_img[0];
				?>
				<div class="wrapper_publications" style="height: <?php echo $ideal_height."px" ?>">
					<div class="image_publication">
						<img src="/images/galeria.jpeg" alt=""/>
					</div>
					<div class="black_div_publication">
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
		<div class="wrapper_gallery">
			<?php for($i=1;$i<10;$i+=3): ?>
				<?php  
					$size_img = getimagesize('images/calvin.jpeg'); 
					$ideal_height = ($size_img[1]*230)/$size_img[0];
				?>
				<div class="wrapper_publications" style="height: <?php echo $ideal_height."px" ?>">
					<div class="image_publication">
						<img src="/images/calvin.jpeg" alt=""/>
					</div>
					<div class="black_div_publication">
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
		<div class="wrapper_gallery">
			<?php for($i=2;$i<10;$i+=3): ?>
				<?php  
					$size_img = getimagesize('images/zara_ad.jpg'); 
					$ideal_height = ($size_img[1]*230)/$size_img[0];
				?>
				<div class="wrapper_publications" style="height: <?php echo $ideal_height."px" ?>">
					<div class="image_publication">
						<img src="/images/zara_ad.jpg" alt=""/>
					</div>
					<div class="black_div_publication">
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
		<div id="wrapper_advertising">
			<div id="advertising">
				<img src="/images/calvin.jpeg" alt=""/>
			</div>
		</div>
	</div>
</div>