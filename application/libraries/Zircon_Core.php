<?php
/*
 * Created on May 12, 2012
 * @author Alejandro Gutiérrez
 */
 
 /*
  * This file is the core of Zircon project follows a pattern similar to factory design, 
  * is responsible for obtaining instances of each class in the folder Zircon.
  */
 class Zircon_Core {
 	
	protected static $instance;
 	
	public static function from( $object ){
		switch($object){
			case 'Post':
				return Post::getInstance();
				break;
		}
	}
	
	public static function settings(){
		require_once APPPATH.'libraries/Zircon/settings.php';
		return Settings::getInstance();
	}
 	
 }
