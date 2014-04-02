<?php
/**
 * stats.class.php - set and format various outputs for a user
 */
 
/*
 * stats class
 */ 
class Stats 
{
	//properties for class
	protected $name;
	protected $age;
	protected $height;	
	protected $position
	protected $average
	
	//constructor
	function __construct($playername) {
		$this->name = $playername;
	}

	//setter for new name
	function set_name($newname) {
		$this->name = $newname;
	}
	
	//getter for name
	function get_name() {
		return $this->name;
	}
	
	//setter for new age
	function set_gender($newage) {
		$this->gender = $newage;
	}
	
	//getter for age
	function get_age() {
		return $this->age;
	}
	
	//setter for new height
	function set_height($newheight) {
		$this->height = $newheight;
	}
	
	//getter for height
	function get_height() {
		return $this->height;
	}
	
		//setter for new position
	function set_position($newposition) {
		$this->position = $newposition;
	}
	
	//getter for position
	function get_position() {
		return $this->position;
	}
	
		//setter for new average
	function set_average($newaverage) {
		$this->average = $newaverage;
	}
	
	//getter for average
	function get_average() {
		return $this->average;
	}
	
}
?>