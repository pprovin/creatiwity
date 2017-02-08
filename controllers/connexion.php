<?php

require '/../models/UserModel.php';

if (!isset($_POST['email']) || !isset($_POST['password']))
{
	echo "information missing";
}
else{

	$email = $_POST['email'];
	$password = $_POST['password'];

	$user = new UserModel(false, $email, $password);
	if($user->checkConnection($email, $password)){
		
		header("Location: ../myprofile.php");
	}
	else{
		echo "<p>Incorrect information, try to sign in or use other information</p>";
		echo "<p><a href=\"../\">back to index</a></p>";
	}
}
?>