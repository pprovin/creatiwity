<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>My Profile</title>
        <link rel="stylesheet" href="global.css" />
    </head>
    
   <?php include('header.php'); ?>
<body>
<?php
if(isset($_SESSION['nickname']) && isset($_SESSION['email'])){
	echo'<div><p>Your profile</p>
	<p>Nickname : '.$_SESSION['nickname'].'</p>
	<p>email : '.$_SESSION['email'].'</p></div>';
}

else{
	header("Location: controllers/logout.php");
}
?>
</body>
</html>