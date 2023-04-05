
<?php 
	
	$email = $_POST['email'];
	$password = md5($_POST['password']);
	$confpass = md5($_POST['confpass']);
	

	include('connexion.php');

    if ($password == $confpass) {
        
	$ps = $pdo->prepare("INSERT INTO `user` (user_email, user_password) VALUES(?,?)");

	$params = array($email, $password);

	$ps->execute($params);

	header('location:../user.php');

    }
    else{
        header('location:../register.php');
    }
?>