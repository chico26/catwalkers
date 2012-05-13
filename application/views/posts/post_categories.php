<?php
/*
 * Created on May 13, 2012
 * @author Alejandro Gutiérrez
 */
?>
<ul>
	<li class="subtitle_left_menu">Categorías:</li>
	<?php foreach($categories as $key => $value): ?>
		<li>
			<div class="wrapper_radio">
				<div><?php echo form_radio(array('name'=>'radio','value'=> $key)) ?></div>
			</div><?php echo $key ?>
		</li>
	<?php 
	endforeach ?>
</ul>