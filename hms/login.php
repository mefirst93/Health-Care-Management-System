<?php
session_start();
$con=mysqli_connect("localhost","root","","hmsdb");
if (isset($_POST['login'])) {
  $email = $_POST['email'];
  $password = $_POST['password'];
  $query = "select * from userdb where email='$email' and password='$password'";
  	$results = mysqli_query($con, $query);
	$num=mysqli_fetch_array($results);
	//$_SESSION['login']=$_POST['name'];
	$_SESSION['id']=$num['id'];
  	if (mysqli_num_rows($results) == 1) {
	$_SESSION['username'] = $email;
  	$_SESSION['success'] = "You are now logged in";
  	  header('location: user_dashboard.php');
  	}else {
  		header('location: error.php');
  	}
  }
  ?>