<?php require'core/connection.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
		<meta charset="utf-8">
		<title>Sign In – AI Dietitian</title>
		<meta name="description" content="#">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<!-- Bootstrap core CSS -->
		<link href="dist/css/lib/bootstrap.min.css" type="text/css" rel="stylesheet">
		<!-- Swipe core CSS -->
		<link href="dist/css/swipe.min.css" type="text/css" rel="stylesheet">
		<!-- Favicon -->
		<link href="dist/img/favicon.png" type="image/png" rel="icon">
		<link href="css/toastr.css" type="text/css" rel="stylesheet">
		<script src="dist/js/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
		<script src="dist/js/jquery-2.2.4.min.js"></script>
		<script>window.jQuery || document.write('<script src="dist/js/vendor/jquery-slim.min.js"><\/script>')</script>
		<script type="text/javascript">
			$(document).ready(function(){
				$("#login").on('submit' ,(function(e) {
							e .preventDefault();
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
							if (data == "Success") {
							    $("#inputEmail").val("");
							    $("#inputPassword").val("");
							    toastr.success('Success... Redirecting');
							    setInterval(function(){ 
							         window.location.replace("main.php");
							    }, 2000);


							}else if(data == "Invalid"){
								toastr.warning('Invalid login credentials. Try again');
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
				<!-- Start of Sign In -->
				<div class="main order-md-1">
					<div class="start">
						<div class="container">
							<div class="col-md-12">
								<div class="content">
									<h1>Sign in to AI Dietitian</h1>
									<form method="post" id="login">
										<div class="form-group">
											<input type="email" id="inputEmail" class="form-control" placeholder="Email Address" name="useremail" required>
											<button class="btn icon"><i class="material-icons">mail_outline</i></button>
										</div>
										<div class="form-group">
											<input type="password" id="inputPassword" class="form-control" placeholder="Password" name="userpass" required>
											<button class="btn icon"><i class="material-icons">lock_outline</i></button>
										</div>
										<button type="submit" class="btn button">Sign In</button>
										<div class="callout">
											<span>Don't have account? <a href="sign-up.html">Create Account</a></span>
										</div>
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- End of Sign In -->
				<!-- Start of Sidebar -->
				<div class="aside order-md-2">
					<div class="container">
						<div class="col-md-12">
							<div class="preference">
								<h2>Hello, Friend!</h2>
								<p>Enter your personal details and start your journey with AI Dietitian today.</p>
								<a href="sign-up.php" class="btn button">Sign Up</a>
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
		<script src="js/toastr.js"></script>
		<script src="dist/js/vendor/popper.min.js"></script>
		<script src="dist/js/bootstrap.min.js"></script>
	</body>
<?php
echo sha1(md5('bzicAoCk3m'));
include('inc/loaders.php');
?>
</html>