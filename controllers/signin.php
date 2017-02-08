<?php

require '/../models/UserModel.php';

if (!isset($_POST['password']) || !isset($_POST['nickname']) || !isset($_POST['email']) || !isset($_POST['password_confirmation']))
{
	echo "information missing";
}
else{
	$nickname = $_POST['nickname'];
	$password = sha1($_POST['password']);
	$email = $_POST['email'];

	$user = new UserModel($nickname, $password, $email);
	
	if($_POST['password'] != $_POST['password_confirmation']){
		echo "password and confirm password must be identical";
		echo "<p><a href=\"../\">back to index</a></p>";
	}
	elseif($user->isUserExisting($nickname, $email)){
		echo "User already exists please change email and nickname";
		echo "<p><a href=\"../\">back to index</a></p>";
	}
	else{

		$user->save();
		session_start();
		$_SESSION['nickname'] = $nickname;
		$_SESSION['email'] = $email;
		header("Location: ../myprofile.php");
	}


}
?>