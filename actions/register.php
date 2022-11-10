<?php 
include "../classes/User.php";

//Create an obj
$user = new User();

// Using the method
$user->store($_POST);
?>