<!DOCTYPE html>
<html lang="en">

<head>
		<meta charset="utf-8">
		<title>Sign Up – AI Dietitian</title>
		<meta name="description" content="#">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<!-- Bootstrap core CSS -->
		<link href="dist/css/lib/bootstrap.min.css" type="text/css" rel="stylesheet">
		<!-- Swipe core CSS -->
		<link href="dist/css/swipe.min.css" type="text/css" rel="stylesheet">
		<link href="css/toastr.css" type="text/css" rel="stylesheet">
		<!-- Favicon -->
		<link href="dist/img/favicon.png" type="image/png" rel="icon">
		<script src="dist/js/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
		<script src="dist/js/jquery-2.2.4.min.js"></script>
		<script>window.jQuery || document.write('<script src="dist/js/vendor/jquery-slim.min.js"><\/script>')</script>
		<script type="text/javascript">
			$(document).ready(function(){
				$("#regis").on('submit' ,(function(e) {
							e .preventDefault();
							/*$('#loaders').show();*/
							$ .ajax({
							url : "control.php" , //Url to which the request issend
							type : "POST" , //Type of request to be send,called as method
							data : new FormData(this), //Data sent to server, a set of key/value pairs(i.e.form fields and values)
							contentType : false, //The content type used when sending data to the server.
							cache : false , //To unable request pages to be cached
							processData : false, //To send DOMDocument or non processed data file it is set to false
							beforeSend : function(){
							            $('#loaders').show();
							        },
							success: function(data) //A function to be called if request succeeds
							{
							$('#loaders').hide();
							if (data == "Congratulations You have successfully Registered <br> You Can Now Login") {
							    $("#inputName").val("");
							    $("#inputEmail").val("");
							    $("#inputPassword").val("");
							    toastr.success(data);
							    setInterval(function(){ 
							        $('#myModal').modal('hide');
							    }, 3000);
							    setInterval(function(){ 
							        $('#loaders').show();
							    }, 4000);
							    setInterval(function(){ 
							         window.location.replace("index.php");
							    }, 6000);


							}else{
								toastr.warning(data);
							}
							}
							});
				}));
			});
			
		</script>
	</head>
	<body class="start">
		<main>
			<div class="layout">
				<!-- Start of Sign Up -->
				<div class="main order-md-2">
					<div class="start">
						<div class="container">
							<div class="col-md-12">
								<div class="content">
									<h1>Create Account</h1>
									<form class="signup" id="regis" method="post">
										<div class="form-parent">
											<div class="form-group">
												<input type="text" id="inputName" class="form-control" placeholder="Full Name" name="inputName" required>
												<button class="btn icon"><i class="material-icons">person_outline</i></button>
											</div>
											<div class="form-group">
												<input type="email" id="inputEmail" class="form-control" placeholder="Email Address" name="inputEmail" required>
												<button class="btn icon"><i class="material-icons">mail_outline</i></button>
											</div>
										</div>
										<div class="form-group">
											<input type="password" id="inputPassword" class="form-control" placeholder="Password" name="inputPassword" required>
											<button class="btn icon"><i class="material-icons">lock_outline</i></button>
										</div>
										<button type="submit" class="btn button">Sign Up</button>
										<div class="callout">
											<span>Already a member? <a href="javascript:history.back();">Sign In</a></span>
										</div>
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- End of Sign Up -->
				<!-- Start of Sidebar -->
				<div class="aside order-md-1">
					<div class="container">
						<div class="col-md-12">
							<div class="preference">
								<h2>Welcome Back!</h2>
								<p>To keep connected with your friends please login with your personal info.</p>
								<a href="javascript:history.back();" class="btn button">Sign In</a>
							</div>
						</div>
					</div>
				</div>
				<!-- End of Sidebar -->
			</div> <!-- Layout -->
		</main>
		<!-- Bootstrap core JavaScript
		================================================== -->
		<!-- Placed at the end of the document so the pages load faster -->
		<script src="dist/js/vendor/popper.min.js"></script>
		<script src="dist/js/bootstrap.min.js"></script>
		<script src="js/toastr.js"></script>
	</body>

<?php
include('inc/loaders.php');
?>
</html>