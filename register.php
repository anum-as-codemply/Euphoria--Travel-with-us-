<?php
	$e= $_POST['email'];
	$n= $_POST['name'];
	$adr= $_POST['addr'];
	$dob= $_POST['dob'];
	$sex= $_POST['radio'];
	$pwd= $_POST['pass'];
	$id= rand(100,999);
	
	include_once('config.php');
	
	$res= mysqli_query($link,"SELECT email FROM users WHERE email= '$e' ");
	$val= mysqli_fetch_array($res);
	if($val) { 
		echo "<script>alert('User already exists! Log In to continue');";
		echo "window.location= 'login-form.html'; </script>"; 
	}
	else { 
		$added= mysqli_query($link, "INSERT INTO users VALUES('$id','$e','$n','$pwd','$adr','$dob','$sex')");
	}
	if($added) { header("location: login-form.html"); }
	else { 
		echo "<script>alert('Error while creating account! Register again to continue');";
		echo "window.location= 'login-form.html'; </script>"; 
	} 
?>
