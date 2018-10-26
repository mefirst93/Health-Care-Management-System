<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Healthcare Management System</title>
<style>
img {
    opacity: 0.5;
    filter: alpha(opacity=50); /* For IE8 and earlier */
}

img:hover {
    opacity: 1.0;
    filter: alpha(opacity=100); /* For IE8 and earlier */
}
div.background {
    background: url(klematis.jpg) repeat;
    border: 2px solid black;
}

div.transbox {
    margin: 30px;
    background-color: #ffffff;
    border: 1px solid black;
    opacity: 0.6;
    filter: alpha(opacity=60); /* For IE8 and earlier */
}

div.transbox p {
    margin: 5%;
    font-weight: bold;
    color: #000000;
}
</style>
</head>
<body background="https://sessions.house.gov/sites/sessions.house.gov/files/styles/congress_featured_image/public/featured_image/issues/healthcare.jpg?itok=s87oEaZ_">
<form method="post" action="login.php">
 <div class="background">
  <div class="transbox">
  <h1 align="center">Healthcare Management System</h1>

  <h2 align="right">                
                                    
                <input type="text" placeholder="enter your email" name="email"/>
      <input type="password" placeholder="enter your password" name="password"/>

	  <input type="submit" class="btn" name="login">
  </h2>
  </div>
</div>
<br>
</form>
<form method="post" action="registration.php"> 
<h2 align="right">Create a new account here</h2>
<table align="right" border="">
    	<tr>
        	<td>Name:</td>
        	<td><input type="text" name="name" placeholder="Type your name" required="required" /></td>
            </tr>
            <tr></tr>
            <tr></tr>
            <tr>
        	<td>Email:</td>
        	<td><input type="email" name="email" placeholder="Type your Email ID" required="required" /></td>
            </tr>
            <tr></tr>
            <tr></tr>
            <tr></tr>
            <tr>
        	<td>Password:</td>
        	<td><input type="password" name="password" placeholder="Type your password" required="required" /></td>
            </tr>
            <tr></tr><tr></tr><tr></tr>
            <tr>
        	<td>DOB:</td>
        	<td><input type="date" name="dob" placeholder="Type your date of birth" required="required" /></td>
            </tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr>
            <tr>
        	<td>Gender:</td>
        	<td><input type="radio" name="gender" value="male"/>Male
            <input type="radio" name="gender" value="female"/>Female</td>
            </tr>
             </tr><tr></tr><tr></tr><tr></tr><tr></tr>
             <style type="text/css">
			 .button1{
				 width:200px;
				 padding:10px;
				 color:white;
				 background-color:#008b8b;
			 }
			 </style>
             <tr>
             	<td colspan="2" align="center">
          <button type="submit" class="btn btn-primary pull-right" name="submit">
									Login <i class="fa fa-arrow-circle-right"></i>
								</button>

        </td>
      </tr>
	  <tr>
	  <td><a href="index.php">admin login</a>
	  </td>
	  </tr>
      </table>
	  </form>
</body>
</html>
<?php
$con=mysqli_connect("localhost","root","","hmsdb");
if(isset($_POST['reg'])){
  $name=$_POST['name'];
  $email=$_POST['email'];
  $password=$_POST['password'];
  $dob=$_POST['dob'];
  $gender=$_POST['gender'];
  $query="insert into userdb(name,email,password,date,gender) VALUES ('$name', '$email', '$password','$dob','$gender')";
  $result=mysqli_query($con,$query);
    header("Location:index.php");
}


?>