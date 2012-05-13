<?php
/*
 * Created on May 12, 2012
 * @author Alejandro Gutiérrez
 */
?>

<div id="wrapper_left_menu">
	<div id="left_menu">
		<?php echo form_open() ?>
		<ul class="list_checkbox_filtred">
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