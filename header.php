<?php
session_start();
?>
<header>
<nav>
  <ul>    
<?php
if (isset($_SESSION['nickname'])){
echo'
    <li><a href="myprofile.php">My Profile</a></li>
    <li>
    <form action="controllers/logout.php" id="logout">
            <input type="submit" value="Logout" />
    </form>
    </li>
';
}
else{
	echo'<li><a href="index.php">Sign In Login</a></li>
';
}
?>
</ul>
</nav>
</header>