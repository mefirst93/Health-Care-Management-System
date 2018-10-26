<?php
session_start();
$con=mysqli_connect("localhost","root","","hmsdb");
if(isset($_POST['submit']))
{
	$name=$_POST['name'];
	$gender=$_POST['gender'];
 // $email = $_POST['email'];
  $password = $_POST['password'];

$sql=mysqli_query($con,"Update userdb set name='$name',password='$password',gender='$gender' where id='".$_SESSION['id']."'");
if($sql)
{
$msg="Your Profile updated Successfully";
echo "<script>alert('Your Profile updated Successfully');</script>";
}
}
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<title>User | Edit Profile</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0">
		<meta name="apple-mobile-web-app-capable" content="yes">
		<meta name="apple-mobile-web-app-status-bar-style" content="black">
		<meta content="" name="description" />
		<meta content="" name="author" />
		
	</head>
	<body>
		<div id="app">		
<?php include'header.php';?>
			<div class="app-content">
				
						<?php include'sidebar.php';?>
						
				<!-- end: TOP NAVBAR -->
				<div class="main-content" >
					<div class="wrap-content container" id="container">
						<!-- start: PAGE TITLE -->
						<section id="page-title">
							<div class="row" align="right">
								<div class="col-sm-8">
									
																	</div>
								<ol class="breadcrumb">
									<li>
										<span>User </span>
									</li>
									<li class="active">
										<span>Edit Profile</span>
									</li>
								</ol>
							</div>
						</section>
						<!-- end: PAGE TITLE -->
						<!-- start: BASIC EXAMPLE -->
						<div class="container-fluid container-fullw bg-white">
							<div class="row">
								<div class="col-md-12">
<h5 style="color: green; font-size:18px; ">
</h5>
									<div class="row margin-top-30">
										<div class="col-lg-8 col-md-12">
											<div class="panel panel-white">
												<div class="panel-heading">
													<h5 class="panel-title">Edit Profile</h5>
												</div>
												<div class="panel-body">
												<?php 
$sql=mysqli_query($con,"select * from userdb where id='".$_SESSION['id']."'");
while($data=mysqli_fetch_array($sql))
{
?>
													<form role="form" name="edit" method="post">
													

<div class="form-group">
															<label for="name">
																 User Name
															</label>
	<input type="text" name="name" class="form-control" value="<?php echo htmlentities($data['name']);?>" >
														</div>



<div class="form-group">
									<label for="gender">
																Gender
															</label>
					<input type="text" name="gender" class="form-control" required="required"  value="<?php echo htmlentities($data['gender']);?>">
														</div>

<div class="form-group">
									<label for="email">
																 User Email
															</label>
					<input type="email" name="email" class="form-control"  readonly="readonly"  value="<?php echo htmlentities($data['email']);?>">
					<a href="userchange-emaild.php">Update your email id</a>
														</div>

<div class="form-group">
															<label for="password">
																 Change password
															</label>
		<input type="text" name="password" class="form-control"  value="<?php echo htmlentities($data['password']);?>" >
														</div>
														<!--<div class="form-group">
															<label for="password">
																 Confirm password
															</label>
		<input type="text" name="password" class="form-control"  value="" >
														</div>-->

														
														<button type="submit" name="submit" class="btn btn-o btn-primary">
															Update
														</button>
													</form>
													<?php } ?>
												</div>
											</div>
										</div>
											
											</div>
										</div>
									<div class="col-lg-12 col-md-12">
											<div class="panel panel-white">
												
												
											</div>
										</div>
									</div>
								</div>
						
						<!-- end: BASIC EXAMPLE -->
			
					
					
						
						
					
						<!-- end: SELECT BOXES -->
						
					</div>
				</div>
			</div><br/><br/><br/>
			<!-- start: FOOTER -->
	<?php include'footer.php';?>
			<!-- end: FOOTER -->
		
			<!-- start: SETTINGS -->
	
			
			<!-- end: SETTINGS -->
		</div>
		<!-- start: MAIN JAVASCRIPTS -->
		
		<script>
			jQuery(document).ready(function() {
				Main.init();
				FormElements.init();
			});
		</script>
		<!-- end: JavaScript Event Handlers for this page -->
		<!-- end: CLIP-TWO JAVASCRIPTS -->
	</body>
</html>
