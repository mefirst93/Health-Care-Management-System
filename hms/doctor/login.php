<?php
session_start();
$con=mysqli_connect("localhost","root","","hmsdb");
if (isset($_POST['login'])) {
  $docEmail = $_POST['docEmail'];
  $password = $_POST['password'];
  $query = "select * from doctors where docEmail='$docEmail' and password='$password'";
  	$results = mysqli_query($con, $query);
	$num=mysqli_fetch_array($results);
	//$_SESSION['dlogin']=$_POST['username'];
	//$_SESSION['login']=$_POST['name'];
	//$_SESSION['id']=$num['id'];
  	if (mysqli_num_rows($results) == 1) {
		$_SESSION['dlogin']=$_POST['docEmail'];
	$_SESSION['username'] = $docEmail;
  	$_SESSION['success'] = "You are now logged in";
  	  header('location: docdashboard.php');
  	}else {
  		header('location: error.php');
  	}
  }
  ?>