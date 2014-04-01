<?php
/**
 * user.class.php - set and format various outputs for a user
 */
 
/*
 * user class
 */ 
class User 
{
	//properties for class
	public $name;
	private $gender;
	private $age;
	private $job_title;
	
	//constructor
	function __construct($fullname) {
		$this->name = $fullname;
	}

	//setter for new name
	function set_name($newname) {
		$this->name = $newname;
	}
	
	//getter for name
	function get_name() {
		return $this->name;
	}
	
	//setter for gender
	function set_gender($newgender) {
		$this->gender = $newgender;
	}
	
	//getter for gender
	function get_gender() {
		return $this->gender;
		
	//setter for age
	function set_age($newage) {
		$this->age = $newage;
	}
	
	//getter for age
	function get_age() {
		return $this->age;
	}
		//setter for job title
	function set_job_title($newjob_title) {
		$this->job_title = $newjob_title;
	}
	
	//getter for job title
	function get_job_title() {
		return $this->job_title;
	}

}
?>