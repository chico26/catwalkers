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
			<li class="title_left_menu"><?php echo lang($type_post) ?></li>
			<li class="post_categories">
				<?php $this->load->view('posts/post_categories', $this); ?>
			</li>
			<li class="post_subcategories">
				<?php if(isset($subCategories[0])):
					$this->load->view('posts/post_subcategories', $this);
				endif ?>
			</li>
		</ul>
		<?php echo form_close() ?>
	</div>
</div>
