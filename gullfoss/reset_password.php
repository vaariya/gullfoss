<?php

		
	session_start();

	$errors = array();

	include 'db_con.php';

	$msg="";

	

	if(isset($_POST['change-password']))
	{
        $_SESSION['info'] = "";
        $password = mysqli_real_escape_string($con, $_POST['password']);
        $cpassword = mysqli_real_escape_string($con, $_POST['cpassword']);
        if($password !== $cpassword)
        {
            $errors['password'] = "Confirm password not matched!";
        }
        else
        {
            $code = 0;
            $email = $_SESSION['email']; //getting this email using session
            // $encpass = password_hash($password, PASSWORD_BCRYPT);
            $update_pass = "UPDATE user SET token = $code, password = '$password' WHERE email = '$email'";
            $run_query = mysqli_query($con, $update_pass);
            if($run_query){
                $info = "Your password changed. Now you can login with your new password.";
                $_SESSION['info'] = $info;
                header('Location: index.php');
            }
            else
            {
                $errors['db-error'] = "Failed to change your password!";
            }
        }
    }
?>	

<!DOCTYPE html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--favicon-->
	<link rel="icon" href="assets/images/favicon-32x32.png" type="image/png" />
	<!-- loader-->
	<link href="assets/css/pace.min.css" rel="stylesheet" />
	<script src="assets/js/pace.min.js"></script>
	<!-- Bootstrap CSS -->
	<link href="assets/css/bootstrap.min.css" rel="stylesheet">
	<link href="assets/css/app.css" rel="stylesheet">
	<link href="assets/css/icons.css" rel="stylesheet">
	<title>Reset Password</title>
</head>

<body>
	<!-- wrapper -->
	<div class="wrapper">
		<div class="authentication-reset-password d-flex align-items-center justify-content-center">
			<div class="row">
				<div class="col-12 col-lg-10 mx-auto">
					<div class="card">
						<div class="row g-0">
							<div class="col-lg-5 border-end">
								<div class="card-body">
									<div class="p-5">
										<div class="text-start">
											<img src="assets/images/logo-img.png" width="180" alt="">
										</div>
										<h4 class="mt-5 font-weight-bold">Generate New Password</h4>
										<p class="text-muted">We received your reset password request. Please enter your new password!</p>

										<?php 
                    if(isset($_SESSION['info'])){
                        ?>
                        <div class="alert alert-success text-center">
                            <?php echo $_SESSION['info']; ?>
                        </div>
                        <?php
                    }
                    ?>
                    <?php
                    if(count($errors) > 0){
                        ?>
                        <div class="alert alert-danger text-center">
                            <?php
                            foreach($errors as $showerror){
                                echo $showerror;
                            }
                            ?>
                        </div>
                        <?php
                    }
                    ?>

										<form class="needs-validation" novalidate action="" method="POST">
											
										<div class="mb-3 mt-5">
											<label class="form-label">New Password</label>
											<div class="input-group" id="show_hide_password">

											<input type="password" minlength="8" maxlength="16" name="password" class="form-control" pattern="(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[!@#$%^&*_=+-]).{8,16}" autocomplete = "off" placeholder="Enter new password" required><a href="javascript:;" class="input-group-text bg-transparent"><i class='bx bx-hide'></i></a>
											<div class="invalid-feedback">minimum 8 characters required</div>
											<div class="invalid-feedback">at least one lowercase letter(a - z)</div>
											<div class="invalid-feedback">at least one uppercase letter(A - Z)</div>
											<div class="invalid-feedback">at least one numeric value(0-9)</div>
											<div class="invalid-feedback">at least one special symbol(!@#$%^&*=+-_)</div>
										</div>
										</div>
										<div class="mb-3">
											<label class="form-label">Confirm Password</label>
											<div class="input-group" id="show_hide_password1">

											<input type="password" minlength="8" maxlength="16" name="cpassword" class="form-control" pattern="(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[!@#$%^&*_=+-]).{8,16}" autocomplete = "off" placeholder="Confirm password" required><a href="javascript:;" class="input-group-text bg-transparent"><i class='bx bx-hide'></i></a>
											<div class="invalid-feedback">minimum 8 characters required</div>
											<div class="invalid-feedback">at least one lowercase letter(a - z)</div>
											<div class="invalid-feedback">at least one uppercase letter(A - Z)</div>
											<div class="invalid-feedback">at least one numeric value(0-9)</div>
											<div class="invalid-feedback">at least one special symbol(!@#$%^&*=+-_)</div>
										</div>
										</div>
										<div class="d-grid gap-2">
											<button type="submit" name="change-password" value="submit" class="btn btn-primary">Change Password</button>
										</form>
											 <a href="index.php" class="btn btn-light"><i class='bx bx-arrow-back mr-1'></i>Back to Login</a>
										</div>
									</div>
								</div>
							</div>
							<div class="col-lg-7">
								<img src="assets/images/login-images/forgot-password-frent-img.jpg" class="card-img login-img h-100" alt="...">
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end wrapper -->
	<!-- Bootstrap JS -->
	<script src="assets/js/bootstrap.bundle.min.js"></script>
	<!--plugins-->
	<script src="assets/js/jquery.min.js"></script>
	<script src="assets/plugins/simplebar/js/simplebar.min.js"></script>
	<script src="assets/plugins/metismenu/js/metisMenu.min.js"></script>
	<script src="assets/plugins/perfect-scrollbar/js/perfect-scrollbar.js"></script>
	<script src="assets/plugins/chartjs/js/Chart.min.js"></script>
	<script src="assets/plugins/vectormap/jquery-jvectormap-2.0.2.min.js"></script>
    <script src="assets/plugins/vectormap/jquery-jvectormap-world-mill-en.js"></script>
	<script src="assets/plugins/jquery.easy-pie-chart/jquery.easypiechart.min.js"></script>
	<script src="assets/plugins/sparkline-charts/jquery.sparkline.min.js"></script>
	<script src="assets/plugins/jquery-knob/excanvas.js"></script>
	<script src="assets/plugins/jquery-knob/jquery.knob.js"></script>
	<script>
		  $(function() {
			  $(".knob").knob();
		  });
	  </script>
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
	<script>
		$(document).ready(function () {
			$("#show_hide_password1 a").on('click', function (event) {
				event.preventDefault();
				if ($('#show_hide_password1 input').attr("type") == "text") {
					$('#show_hide_password1 input').attr('type', 'password');
					$('#show_hide_password1 i').addClass("bx-hide");
					$('#show_hide_password1 i').removeClass("bx-show");
				} else if ($('#show_hide_password1 input').attr("type") == "password") {
					$('#show_hide_password1 input').attr('type', 'text');
					$('#show_hide_password1 i').removeClass("bx-hide");
					$('#show_hide_password1 i').addClass("bx-show");
				}
			});
		});
	</script>
	<script>
		// Example starter JavaScript for disabling form submissions if there are invalid fields
			(function () {
			  'use strict'
	
			  // Fetch all the forms we want to apply custom Bootstrap validation styles to
			  var forms = document.querySelectorAll('.needs-validation')
	
			  // Loop over them and prevent submission
			  Array.prototype.slice.call(forms)
				.forEach(function (form) {
				  form.addEventListener('submit', function (event) {
					if (!form.checkValidity()) {
					  event.preventDefault()
					  event.stopPropagation()
					}
	
					form.classList.add('was-validated')
				  }, false)
				})
			})()
	</script>
</body>

</html>