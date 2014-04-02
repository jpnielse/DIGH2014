<?php
/**
 * player.class.php - set and format various outputs for a player
 */
 
//require parent stats class
require_once("user.class.php");
 
/*
 * player class
 */ 
class Player extends Stats 
{
	//properties for class
	protected $position;
	
	//constructor
	function __construct($playername) {
		$this->set_name($playername);
	}
	
	//setter for new position
	function set_position($newposition) {
		$this->position = $newposition;
	}
	
	//getter for position
	function get_position() {
		return $this->position;
	}

}
?>