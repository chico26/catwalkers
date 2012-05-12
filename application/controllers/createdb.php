<?php

/**
 * Controller createdb helps with the creation of the database.
 * @author Alejandro Gutiérrez.
 */
 
class Createdb extends CI_Controller {

    var $data = array();

    public function __construct() {
        parent::__construct();
    }

    public function index() {
        echo anchor('createdb/generate', 'Generar');
    }

	/*
	 * This function is responsible for dropping and creating the database, and recreate the tables.
	 * @author Alejandro Gutiérrez
	 */
    function generate() {
    	$this->dropAndCreateDB();
        echo $this->print_ok()."initiating the creation of tables from the models...<br />";
        try {
            Doctrine::createTablesFromModels();
            echo $this->print_ok()."tables created successfully.<br />";
        } catch (Exception $e) {
            echo "!tables created unsuccessfully.<br />";
            $this->print_error($e->getMessage());
        }
    }
	
	/*
	 * This function is called by the function generate, and is responsible to remove and create the
	 * database (using php-mysql language)
	 * @author Alejandro Gutiérrez
	 */
	function dropAndCreateDB(){
		include APPPATH . '/config/database.php';
        $nameDB = $db['default']['database'];
		if (!$link = mysql_connect($db['default']['hostname'], $db['default']['username'], $db['default']['password'])) {
            die("Could not connect: " . mysql_error());
        }
		$query = "DROP DATABASE $nameDB";
        if ($result = mysql_query($query)) {
        	$query = "CREATE DATABASE $nameDB";
        	if ($result = mysql_query($query)) {
	        	echo $this->print_ok() . "Database created successfully.<br />";
	        }else {
	            die("Error, could not be created Database: ".mysql_error());
	        }
        }else {
            die("Error, could not be found Database: ".mysql_error());
        }
	}

	/*
	 * Print HTML with error code.
	 * @author Alejandro Gutiérrez
	 */
    function print_error($message) { ?>
        El error es:
        <div style="width: 400px; margin-left: 50px; color: #F00; background-color: #000;">
        	<?php echo str_replace(".", "<br /><br />&nbsp;", $message); ?>
        </div>
    <?php }

	/*
	 * Print HTML with message OK.
	 * @author Alejandro Gutiérrez
	 */
    function print_ok() { ?>
        <span style="background-color: #0ad101; color: #FFF;">OK</span>
    <?php }

}

/* End of file createdb.php */ 
/* Location: ./application/controllers/createdb.php */ 
