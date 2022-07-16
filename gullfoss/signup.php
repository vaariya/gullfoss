<?php
	require "db_con.php";
	if (isset($_POST['submit'])) 
	{
		$id = mysqli_real_escape_string($con,$_POST['id']);
		$user_type = mysqli_real_escape_string($con,$_POST['user_type']);
		$first_name = mysqli_real_escape_string($con,$_POST['first_name']);
		$last_name = mysqli_real_escape_string($con,$_POST['last_name']);
		$contact_no = mysqli_real_escape_string($con,$_POST['contact_no']);
		$address = mysqli_real_escape_string($con,$_POST['address']);
		$email = mysqli_real_escape_string($con,$_POST['email']);
		$password = mysqli_real_escape_string($con,$_POST['password']);
		$cpassword = mysqli_real_escape_string($con,$_POST['cpassword']);

		// $password = password_hash($password, PASSWORD_BCRYPT);
		// $cpassword = password_hash($cpassword, PASSWORD_BCRYPT);

		$emailquery = "SELECT * FROM user WHERE email='$email' ";
		$query = mysqli_query($con,$emailquery);

		$emailcount = mysqli_num_rows($query);

		if($emailcount>0)
		{
			echo "email alraeady exit";
		}
		else
		{
			if($password === $cpassword)
			{
				$insertquery = "insert into user (id, user_type, first_name, last_name, contact_no, address, email, password) VALUES 
														('$id', '$user_type','$first_name','$last_name','$contact_no','$address','$email','$cpassword') ";

				$iquery = mysqli_query($con,$insertquery);

				if($iquery) 
				{
					
					header('location:index.php');
				}
				else
				{
					echo '<script type ="text/JavaScript">';  
		echo 'alert("Something Wrong")';  
		echo '</script>'; 	
				}	
			}
			else
			{
				echo '<script type ="text/JavaScript">';  
		echo 'alert("Not inserted")';  
		echo '</script>'; 
			}
		}

	}
?>

<!doctype html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--favicon-->
	<link rel="icon" href="assets/images/favicon-32x32.png" type="image/png" />
	<!--plugins-->
	<link href="assets/plugins/simplebar/css/simplebar.css" rel="stylesheet" />
	<link href="assets/plugins/perfect-scrollbar/css/perfect-scrollbar.css" rel="stylesheet" />
	<link href="assets/plugins/metismenu/css/metisMenu.min.css" rel="stylesheet" />
	<!-- loader-->
	<link href="assets/css/pace.min.css" rel="stylesheet" />
	<script src="assets/js/pace.min.js"></script>
	<!-- Bootstrap CSS -->
	<link href="assets/css/bootstrap.min.css" rel="stylesheet">
	<link href="assets/css/app.css" rel="stylesheet">
	<link href="assets/css/icons.css" rel="stylesheet">
	<title>Rukada - Responsive Bootstrap 5 Admin Template</title>
</head>

<body class="bg-login">
	<!--wrapper-->
	<div class="wrapper">
		<div class="d-flex align-items-center justify-content-center my-5 my-lg-0">
			<div class="container">
				<div class="row row-cols-1 row-cols-lg-2 row-cols-xl-2">
					<div class="col mx-auto">
						<div class="my-4 text-center"><a href="../index.php">
							<img src="assets/images/logo-img.png" width="180" alt="" /></a>
						</div>
						<div class="card">
							<div class="card-body">
								<div class="border p-4 rounded">
									<div class="text-center">
										<h3 class="">Sign Up</h3>
										<p>Already have an account? <a href="index.php">Sign in here</a>
										</p>
									</div>
									<div class="d-grid">
										<a class="btn my-4 shadow-sm btn-white" href="javascript:;"> <span class="d-flex justify-content-center align-items-center">
                          <img class="me-2" src="assets/images/icons/search.svg" width="16" alt="Image Description">
                          <span>Sign Up with Google</span>
											</span>
										</a> 
										<!-- <a href="javascript:;" class="btn btn-facebook"><i class="bx bxl-facebook"></i>Sign Up with Facebook</a> -->
									</div>
									<div class="login-separater text-center mb-4"> <span>OR SIGN UP WITH EMAIL</span>
										<hr/>
									</div>
									<div class="form-body">
										<form class="row g-3" method="POST" action="signup.php">
											<div class="col-sm-6">
												<label for="inputFirstName" class="form-label">First Name</label>
												<input type="name" name="first_name" class="form-control" id="inputFirstName" placeholder="First Name">
											</div>
											<input type="number" name="id" hidden>
											<input type="text" value="customer" hidden name="user_type">
											<div class="col-sm-6">
												<label for="inputLastName" class="form-label">Last Name</label>
												<input type="name" name="last_name" class="form-control" id="inputLastName" placeholder="last Name">
											</div>
											<div class="col-12">
												<label for="inputcontact_no" class="form-label">Contact no</label>
												<input type="Contact no" name="contact_no" name="contact_no" class="form-control" id="contact_no" placeholder="contact no">
											</div>
											<div class="col-12">
												<label for="inputAddress" class="form-label">Address</label>
												<input type="address" name="address" class="form-control" id="inputAddress" placeholder="Address">
											</div>
											<div class="col-12">
												<label for="inputEmailAddress" class="form-label">Email Address</label>
												<input type="email" name="email" class="form-control" id="inputEmailAddress" placeholder="example@user.com">
											</div>
											<div class="col-12">
												<label for="inputChoosePassword" class="form-label">Password</label>
												<div class="input-group" id="show_hide_password">
													<input type="password" name="password" class="form-control border-end-0" id="inputChoosePassword" value="" placeholder="Enter Password"> <a href="javascript:;" class="input-group-text bg-transparent"><i class='bx bx-hide'></i></a>
												</div>
											</div>
											<div class="col-12">
												<label for="inputChoosePassword" class="form-label">Confirm Password</label>
												<div class="input-group" id="show_hide_password">
													<input type="password" name="cpassword" class="form-control border-end-0" id="inputChoosePassword" value="" placeholder="Enter Password"> <a href="javascript:;" class="input-group-text bg-transparent"><i class='bx bx-hide'></i></a>
												</div>
											</div>
											<div class="col-12">
												<div class="d-grid">
													<button type="submit" name="submit" class="btn btn-primary"><i class='bx bx-user'></i>submit</button>
												</div>
											</div>
										</form>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!--end row-->
			</div>
		</div>
	</div>
	<!--end wrapper-->
	<!-- Bootstrap JS -->
	<script src="assets/js/bootstrap.bundle.min.js"></script>
	<!--plugins-->
	<script src="assets/js/jquery.min.js"></script>
	<script src="assets/plugins/simplebar/js/simplebar.min.js"></script>
	<script src="assets/plugins/metismenu/js/metisMenu.min.js"></script>
	<script src="assets/plugins/perfect-scrollbar/js/perfect-scrollbar.js"></script>
	<!--Password show & hide js -->
	<script>
		$(document).ready(function () {
			$("#show_hide_password a").on('click', function (event) {
				event.preventDefault();
				if ($('#show_hide_password input').attr("type") == "text") {
					$('#show_hide_password input').attr('type', 'password');
					$('#show_hide_password i').addClass("bx-hide");
					$('#show_hide_password i').removeClass("bx-show");
				} else if ($('#show_hide_password input').attr("type") == "password") {
					$('#show_hide_password input').attr('type', 'text');
					$('#show_hide_password i').removeClass("bx-hide");
					$('#show_hide_password i').addClass("bx-show");
				}
			});
		});
	</script>
	<!--app JS-->
	<script src="assets/js/app.js"></script>
</body>

</html>