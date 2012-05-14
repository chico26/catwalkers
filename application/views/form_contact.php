<div class="btn_close_popup"></div>
<div id="wrapper_form_popup">
	<div id="wrapper_title_form_popup">
		<p id="title_catmail">
			Catmail.
		</p>
		<p id="title_description">
			Escríbeme, me encanta saber de ti.
		</p>
	</div>
	<div id="fields_form_popup">
		<?php
        echo form_open('/home/contact');
        echo form_input(array('spellcheck' => false, 'autocomplete' => 'off', 'name' => 'name', 'id' => 'name', 'value' => (isset($_POST['name']) && $_POST['name'] != '') ? $_POST['name'] : 'Nombre'));
        echo form_input(array('spellcheck' => false, 'autocomplete' => 'off', 'name' => 'email', 'id' => 'email', 'value' => (isset($_POST['email']) && $_POST['email'] != '') ? $_POST['email'] : 'E-mail'));
        echo form_textarea(array('spellcheck' => false, 'autocomplete' => 'off', 'name' => 'message', 'id' => 'message', 'value' => (isset($_POST['message']) && $_POST['message'] != '') ? $_POST['message'] : 'Mensaje'));
        $error = form_error('name');
        if ($error != '') {
            echo '<div class="error_contact">' . $error . '</div>';
        } else {
            $error = form_error('email');
            if ($error != '') {
                echo '<div class="error_contact">' . $error . '</div>';
            } else {
                $error = form_error('message');
                if ($error != '') {
                    echo '<div class="error_contact">' . $error . '</div>';
                }
            }
        }
        echo form_submit(array('name' => 'submit', 'id' => 'submit', 'value' => 'Enviar', ));
        echo form_close();
		?>
	</div>
</div>
