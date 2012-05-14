<div id="popup">
	<div id="wrapper_title">
		<p id="current_section">
			BEAUTY
		</p>
		<p id="title_publication">
			COMO VESTIR
			<br/>
			EL COLOR BLOCKS CON ESTILO.
		</p>
	</div>
	<div id="wrapper_date_author">
		<p id="date">
			feb 22/2012
		</p>
		<p id="author">
			Por: Janeth Pintado.
		</p>
	</div>
	<div id="wrapper_photos">
		<img class="arrow_prev" src="/images/left_arrow.jpg" alt="" />
		<img class="arrow_next" src="/images/right_arrow.jpg" alt="" />
		<?php
$photos = array('imagen-de-muestra1.jpg','imagen_de_muestra2.jpg','imagen_de_muestra1.jpg');
for($i=0;$i<3;$i++):
		?>
		<div rel="<?php echo $i ?>" class="image_slider <?php echo ($i == 0)  ? 'current':'' ?> "><img src="/images/<?php  echo $photos[$i] ?>" alt=""  />
		</div>
		<?php endfor;?>
	</div>
	<div id="wrapper_content_credits_publication">
		<div id="wrapper_content">
			<p id="image_foot">
				<b class="black">Ipsum dolor sit amet, consectetur adipiscing elit.</b><b class="italic">Donec sed luctus eros. Proin a turpis et nisi aliquam gravida nec ut quam.</b>
			</p>
			<p id="image_author" class="black">
				Nunc in magna ante Lorem ipsum dolor sit amet, consectetur adipiscing elit.
			</p>
			<p id="content">
				Nunc in magna ante Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec sed luctus eros. Proin a turpis et nisi aliquam gravida nec ut quam. Cras sit amet turpis vel nisl accumsan consequat. Etiam at sem sit amet ligula fermentum lobortis.
				Nunc in magna ante Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec sed luctus eros. Proin a turpis et nisi aliquam gravida nec ut quam. Cras sit amet turpis vel nisl accumsan consequat. Etiam at sem sit amet ligula fermentum lobortis.
				Nunc in magna ante Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec sed luctus eros. Proin a turpis et nisi aliquam gravida nec ut quam. Cras sit amet turpis vel nisl accumsan consequat. Etiam at sem sit amet ligula fermentum lobortis.
				Nunc in magna ante Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec sed luctus eros. Proin a turpis et nisi aliquam gravida nec ut quam. Cras sit amet turpis vel nisl accumsan consequat. Etiam at sem sit amet ligula fermentum lobortis.
				Nunc in magna ante Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec sed luctus eros. Proin a turpis et nisi aliquam gravida nec ut quam. Cras sit amet turpis vel nisl accumsan consequat. Etiam at sem sit amet ligula fermentum lobortis.
				Nunc in magna ante Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec sed luctus eros. Proin a turpis et nisi aliquam gravida nec ut quam. Cras sit amet turpis vel nisl accumsan consequat. Etiam at sem sit amet ligula fermentum lobortis.
				Nunc in magna ante Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec sed luctus eros. Proin a turpis et nisi aliquam gravida nec ut quam. Cras sit amet turpis vel nisl accumsan consequat. Etiam at sem sit amet ligula fermentum lobortis.
				Nunc in magna ante Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec sed luctus eros. Proin a turpis et nisi aliquam gravida nec ut quam. Cras sit amet turpis vel nisl accumsan consequat. Etiam at sem sit amet ligula fermentum lobortis. Donec sed luctus eros. Proin a turpis et nisi aliquam gravida nec ut quam. Cras sit amet turpis vel nisl accumsan consequat. Etiam at sem sit amet ligula fermentum lobortis.
				Nunc in magna ante Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec sed luctus eros. Proin a turpis et nisi aliquam gravida nec ut quam. Cras sit amet turpis vel nisl accumsan consequat. Etiam at sem sit amet ligula fermentum lobortis.
				Nunc in magna ante Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec sed luctus eros. Proin a turpis et nisi aliquam gravida nec ut quam. Cras sit amet turpis vel nisl accumsan consequat. Etiam at sem sit amet ligula fermentum lobortis.
				Nunc in magna ante Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec sed luctus eros. Proin a turpis et nisi aliquam gravida nec ut quam. Cras sit amet turpis vel nisl accumsan consequat. Etiam at sem sit amet ligula fermentum lobortis.
			</p>
		</div>
		<div id="wrapper_credits">
			Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec sed luctus eros. Proin a turpis et nisi aliquam gravida nec ut quam. Cras sit amet turpis vel nisl accumsan consequat. Etiam at sem sit amet ligula fermentum lobortis.
			Nunc in magna ante Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec sed luctus eros. Proin a turpis et nisi aliquam gravida nec ut quam. Cras sit amet turpis vel nisl accumsan consequat. Etiam at sem sit amet ligula fermentum lobortis.
			Nunc in magna ante Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec sed luctus eros. Proin a turpis et nisi aliquam gravida nec ut quam. Cras sit amet turpis vel nisl accumsan consequat. Etiam at sem sit amet ligula fermentum lobortis.
			Nunc in magna ante Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec sed luctus eros. Proin a turpis et nisi aliquam gravida nec ut quam. Cras sit amet turpis vel nisl accumsan consequat. Etiam at sem sit amet ligula fermentum lobortis.
		</div>
	</div>
	<div id="wrapper_comments_and_advertising">
		<div id="wrapper_coments">
			<div id="wrapper_comments_and_title">
				<div id="wrapper_title_comments">
					<div id="title_comments">
						<p class="black">
							Comentarios
						</p>
					</div>
				</div>
				<div id="all_comments" class="ui-helper-clearfix">
					<?php for($i=0;$i<10;$i++):
					?>
					<div class="wrapper_comment">
						<div class="photo_perfil_person_comment">
							<a href="#"><img src="/images/blog_images/entradas_relacionadas_1.jpg" alt=""/></a>
						</div>
						<div class="comment">
							<p>
								<b class="black">Chicarcas</b>
								Lorem ipsum dolor sit amet, consectetur adipiscing elit.
							</p>
							<p class="time_comment">
								Hace 24 min.
							</p>
						</div>
					</div>
					<?php endfor?>
				</div>
			</div>
			<div id="coment_area">
				<?php echo form_textarea(array('name'=>'comment'))
				?>
			</div>
		</div>
		<div id="advertising_comments">
			<img src="/images/anuncio_popup.jpg" alt="" />
		</div>
	</div>
</div>
</div>
<div id="wrapper_share_looks">
	<div id="counter_looks">
		<p><img src="/images/look.png" alt="" />
		</p>
		<p class="letter_gray">
			1000
		</p>
		<p>
			look this
		</p>
	</div>
	<div id="share">
		<p class="letter_gray">
			share
		</p>
		<p>
			<a href=""><img src="/images/facebook_share.png" alt="" /></a>
		</p>
		<p>
			<a href=""><img src="/images/twitter_share.png" alt="" /></a>
		</p>
	</div>
</div>
