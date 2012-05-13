<?php
/*
 * Created on May 13, 2012
 * @author Alejandro Gutiérrez
 */
?>
<ul>
	<li class="subtitle_left_menu">Sub-Categorias:</li>
	<?php foreach($subCategories as $subCategory): ?>
		<li>
			<div class="wrapper_checkbox">
				<div><?php echo form_checkbox(array('value'=> $subCategory)) ?></div>
			</div> <?php echo $subCategory ?>
		</li>
	<?php 
	endforeach ?>
</ul>