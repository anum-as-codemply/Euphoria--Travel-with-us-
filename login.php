<?php
	session_start();
	include_once("config.php");
	$e= $_POST['email'];
	$pwd= $_POST['pass'];
	$res= mysqli_query($link,"SELECT * FROM users WHERE email= '$e' && password= '$pwd'");
	$val= mysqli_fetch_array($res);
	if(!$val) { 
		echo "<script>alert('Invalid Username or Password! Enter again');";
		echo "window.location= 'login-form.html'; </script>";  
	} 
	
	$que= mysqli_query($link, "SELECT user_id FROM users where email='$e'");
	$val= mysqli_fetch_array($que);
	$_SESSION['login-id']= $val['user_id'];
	header("location: index.php");
?>
	
	