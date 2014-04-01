<?php
//require the file
require 'employee.class.php';

//instantiate object of employee class (NB: extends User class)
$employee = new Employee("ancientlives");

//get name
$employee_name = $employee->get_name();
//set gender
$employee_gender = $employee->set_gender("male");
//get gender
$employee_gender = $employee->get_gender();
//set age
$employee_age = $employee->set_age(21);
//get age
$employee_age = $employee->get_age();
//set job title
$employee_job_title = $employee->set_job_title("mercenary");
//get job title
$employee_job_title = $employee->get_job_title();


//output name
echo '<p>new employee = '.$employee_name.'</p>';
//output gender
echo '<p>gender = '.$employee_gender.'</p>';
//output gender
echo '<p>age = '.$employee_age.'</p>';
//output gender
echo '<p>job_title = '.$employee_job_title.'</p>';

?>