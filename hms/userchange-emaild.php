<?php
session_start();
//error_reporting(0);
$con=mysqli_connect("localhost","root","","hmsdb");
if(isset($_POST['submit']))
{
	$email=$_POST['email'];
$sql=mysqli_query($con,"Update userdb set email='$email' where id='".$_SESSION['id']."'");
if($sql)
{
$msg="Your email updated Successfully";
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
<?php include 'header.php';?>
			<div class="app-content">
				
						<?php include'sidebar.php';?>
						
				<!-- end: TOP NAVBAR -->
				<div class="main-content" >
					<div class="wrap-content container" id="container">
						<!-- start: PAGE TITLE -->
						<section id="page-title">
							<div class="row"align="right">
								<div class="col-sm-8">
									
																	</div>
								<ol class="breadcrumb">
									<li>
										<span>User </span>
									</li>
									<li class="active">
										<span>Edit email</span>
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
<?php if($msg) { echo htmlentities($msg);}?></h5>
									<div class="row margin-top-30">
										<div class="col-lg-8 col-md-12">
											<div class="panel panel-white">
												<div class="panel-heading">
													<h5 class="panel-title">Edit Profile</h5>
												</div>
												<div class="panel-body">
				<form name="registration" id="updatemail"  method="post">
<div class="form-group">
									<label for="fess">
																 User Email
															</label>
			<input type="email" class="form-control" name="email" id="email" onBlur="userAvailability()"  placeholder="Email" required>
								
									 <span id="user-availability-status1" style="font-size:12px;"></span>
														</div>
		
														<button type="submit" name="submit" id="submit" class="btn btn-o btn-primary">
															Update
														</button>
													</form>
										
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
			</div><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
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
	<script>
function userAvailability() {
$("#loaderIcon").show();
jQuery.ajax({
url: "check_availability.php",
data:'email='+$("#email").val(),
type: "POST",
success:function(data){
$("#user-availability-status1").html(data);
$("#loaderIcon").hide();
},
error:function (){}
});
}
</script>	
		
	</body>
</html>
