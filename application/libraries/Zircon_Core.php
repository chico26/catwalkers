<?php
/*
 * Created on May 12, 2012
 * @author Alejandro Gutiérrez
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
 	
 }
