<?php 
session_start();
if(isset($_SESSION['login-id'])) header('location: destinations.php'); 
else header('location: login-form.html');
?>