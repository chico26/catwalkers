<div id="wrapper_header">
	<div id="header">
		<div id="wrapper_logo_header">
			<?php echo anchor('/',img(array('src'=>'/images/logo_header.png','alt'=>''))); ?>
		</div>
		<div id="wrapper_menu">
			<ul>
				<li>
					<a href="">Moda</a>
				</li>
				<li>
					<?php echo anchor('/beauty','Belleza'); ?>
				</li>
				<li>
					<a href="">Catboys</a>
				</li>
				<li>
					<a href="">Lifestyle</a>
				</li>
				<li>
					<a href="">People</a>
				</li>
				<li>
					<a href="">Contacto</a>
				</li>
				<li>
					<div id="wrapper_search">
						<?php
						echo form_open();
						echo form_input(array('id' => 'search', 'value' => 'Buscar...'));
						echo form_close();
						?>
					</div>
				</li>
			</ul>
		</div>
	</div>
</div>