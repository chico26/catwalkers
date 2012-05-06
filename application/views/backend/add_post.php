<?php
echo form_open('/backend/posts/insert');
echo display_input('text', $post, 'title', 'Título');
echo form_textarea('description');
echo form_submit('submit','Guardar');
echo form_close();
