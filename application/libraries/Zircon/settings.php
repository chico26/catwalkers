<?php
/*
 * Created on May 12, 2012
 * @author Alejandro Gutiérrez
 */

class Settings extends CI_Controller {
	
	protected static $instance;
	
	var $optionsPosts = array(
		'beauty' => array(
			'Todos' => array('Colores','Azul','Rojo','Amarillo','Verde','Violeta'),
			'Alimentación' => array(),
			'Maquillaje' => array(),
			'Pelo' => array(),
			'Piel' => array(),
			'Uñas' => array()
		),
		'fashion'=> array(
			
		),
		'lifestyle' => array(
			
		),
		'catboys' => array(
			
		)
	);
	
	public static function getInstance(){
		if (!isset(self::$instance)) {
            self::$instance = new self();
        }
        return self::$instance;
	}
	
	public function getCategories($typePosts){
		return $this->optionsPosts[$typePosts];
	}
	
	public function getSubCategories($typePosts, $category){
		return (isset($this->optionsPosts[$typePosts][$category])) ? $this->optionsPosts[$typePosts][$category]:array();
	}
	
}
