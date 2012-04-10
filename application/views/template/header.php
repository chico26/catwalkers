<div id="wrapper_header">
	<div id="header">
		<div id="wrapper_logo_header">
			<a href="/"><img src="/images/logo_header.png" alt="" /></a>
		</div>
		<div id="wrapper_menu">
			<ul>
				<li>
					<a href="">Moda</a>
				</li>
				<li>
					<a href="">Belleza</a>
				</li>
				<li>
					<a href="">Catboys</a>
				</li>
				<li>
					<a href="">Lifestyle</a>
				</li>
				<li id="wrapper_proximamente">
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