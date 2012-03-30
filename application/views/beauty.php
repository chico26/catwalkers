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
			<?php for($i=0;$i<10;$i++): ?>
				<div class="gallery">
					<img src="/images/home_nuevo_catwalkers.jpg" alt=""/>
				</div>
			<?php endfor; ?>
		</div>
		<div class="wrapper_gallery">
			<?php for($i=0;$i<10;$i++): ?>
				<div class="gallery">
					<img src="/images/galeria.jpeg" alt=""/>
				</div>
			<?php endfor; ?>
		</div>
		<div class="wrapper_gallery">
			<?php for($i=0;$i<10;$i++): ?>
				<div class="gallery">
					<img src="/images/galeria.jpeg" alt=""/>
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