<?php
class UserModel
{
    public $nickname;
    public $email;
    public $password;

public function __construct($nickname, $password, $email = false){
	$this->nickname = $nickname;
	$this->password = $password;
	$this->email = $email;

}

public function isUserExisting($nickname, $email){
	 	try
		{
		$db = new PDO('mysql:host=localhost;dbname=creatiwity', 'root', '');
		}
		catch (Exception $e)
		{
        die('Erreur : ' . $e->getMessage());
		}
		$query=$db->prepare('SELECT * FROM user WHERE nickname = \''.$nickname.'\' OR email = \''.$email.'\'');
        $query->execute();
        $data=$query->fetch();
        if($data == false){
        	return false;
        }
        else{
        	return true;
        }

}

 public function save(){

 	try
		{
		$db = new PDO('mysql:host=localhost;dbname=creatiwity', 'root', '');
		}
		catch (Exception $e)
		{
        die('Erreur : ' . $e->getMessage());
		}
 	    $query=$db->prepare('INSERT INTO user (nickname, email, password) VALUES (\''.$this->nickname.'\', \''.$this->email.'\', \''.$this->password.'\')');
        $query->execute();
        $data=$query->fetch();
 }

 public function checkConnection($email, $password){
	try
		{
		$db = new PDO('mysql:host=localhost;dbname=creatiwity', 'root', '');
		}
		catch (Exception $e)
		{
        die('Erreur : ' . $e->getMessage());
		}
 	    $query=$db->prepare('SELECT * FROM user WHERE email = \''.$email.'\' AND password = \''.sha1($password).'\'');
        $query->execute();
        $data=$query->fetch();
        
        if ($data){
        	session_start();
        	$_SESSION['nickname'] = $data['nickname'];
	    	$_SESSION['email'] = $data['email'];
 
        	return true;
        }
        else{
        	return false;
        }

 }

 public function getNickname(){
 	return $this->nickname;
 }

  public function getEmail(){
 	return $this->email;
 }

 public function deleteUserByEmail($email){
 	try
		{
		$db = new PDO('mysql:host=localhost;dbname=creatiwity', 'root', '');
		}
		catch (Exception $e)
		{
        die('Erreur : ' . $e->getMessage());
		}
 	    $query=$db->prepare('DELETE FROM user WHERE email = \''.$email.'\'');
        $query->execute();
 }

}
