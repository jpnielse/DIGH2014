<?php
require 'user.class.php';
$user = new User ('Howard');
var_dump($user);


echo "Users name:" ."$user->username";
echo "First name:" ."$user->fname";
echo "Last name:" ."$user->lname";
echo "Age:" ."$user->age";
echo "Gender:" ."$user->gender";
?>