<?php 

	$email = $_POST['email'];
	$password = md5($_POST['password']);

	require_once('connexion.php');

	$ps = $pdo->prepare("SELECT * FROM `user` WHERE user_email =? AND user_password=?");

	$par = array($email, $password);

	$ps->execute($par);

	if ($user =$ps->fetch()) {

		session_start();

		$_SESSION['PROFILE'] = $user;

		header('location:../user.php');

		
	}
	else{

		header('location:../login.php');

	}

?>