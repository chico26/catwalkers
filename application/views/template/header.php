<div id="wrapper_header">
	<div id="header">
		<div id="wrapper_logo_header">
			<?php echo anchor('/',img(array('src'=>'/images/logo_header.png','alt'=>''))); ?>
		</div>
		<div id="wrapper_menu">
			<ul>
				<li>
					<?php
					if($this->uri->segment(3)=='fashion'):
						echo anchor('/posts/listing/fashion','Moda',array('style'=>'background-color: #f14946'));
					else:
						echo anchor('/posts/listing/fashion','Moda');
					endif; 
					?>
				</li>
				<li>
					<?php
					if($this->uri->segment(3)=='beauty'):
						echo anchor('/posts/listing/beauty','Belleza',array('style'=>'background-color: #f14946'));
					else:
						echo anchor('/posts/listing/beauty','Belleza');
					endif; 
					?>
				</li>
				<li>
					<?php
					if($this->uri->segment(3)=='catboys'):
						echo anchor('/posts/listing/catboys','Catboys',array('style'=>'background-color: #f14946'));
					else:
						echo anchor('/posts/listing/catboys','Catboys');
					endif; 
					?>
				</li>
				<li>
					<?php
					if($this->uri->segment(3)=='lifestyle'):
						echo anchor('/posts/listing/lifestyle','Lifestyle',array('style'=>'background-color: #f14946'));
					else:
						echo anchor('/posts/listing/lifestyle','Lifestyle');
					endif; 
					?>
				</li>
				<li>
					<a href="">People</a>
				</li>
				<li>
					<a  id="contact" href="#">Contacto</a>
				</li>
				<li>
					<a class="menu_login">Login</a>
					<div class="wrapper_login">
						<form action="/login" method="post" class="wrapper_form">
							<div class="wrapper_columns_login">
								<div class="wrapper_login_left">
									<p>Usuario</p>
									<input type="text" name="user" spellcheck="false" />
									<div class="save_session">
										<input type="checkbox" />
										<p>No cerrar la sesión.</p>
									</div>
								</div>
								<div class="wrapper_login_right">
									<p>Contraseña</p>
									<input type="password" name="password" />
									<p class="forget_pass">¿Olvidaste tu contraseña?</p>
								</div>
							</div>
							<p class="login_error"></p>
							<input class="btn_login" type="button" value="Entrar" />
						</form>
					</div>
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