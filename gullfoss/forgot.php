<?php
	
	session_start();
	
	$errors = array();

	include 'db_con.php';

	$msg="";


	 if(isset($_POST['send'])){
        $email = mysqli_real_escape_string($con, $_POST['email']);
        $check_email = "SELECT * FROM user WHERE BINARY email='$email'";
        $run_sql = mysqli_query($con, $check_email);
        if(mysqli_num_rows($run_sql) > 0){
            $code = rand(999999, 111111);
            $insert_code = "UPDATE user SET token = $code WHERE BINARY email = '$email'";
            $run_query =  mysqli_query($con, $insert_code);
            if($run_query){
                $subject = "Password Reset Code";
                $message = "Your password reset code is $code";
                $sender = "From: coachingmanagement0@gmail.com";
                if(mail($email, $subject, $message, $sender)){
                    $info = "We've sent a password reset otp to your email - $email";
                    $_SESSION['info'] = $info;
                    $_SESSION['email'] = $email;
                    header('location: reset_code.php');
                    exit();
                }else{
                    $errors['otp-error'] = "Failed while sending code!";
                }
            }else{
                $errors['db-error'] = "Something went wrong!";
            }
        }else{
            $errors['email'] = "This email address does not exist!";
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
	<title>Forgot Password</title>
</head>

<body class="bg-forgot">
	<!-- wrapper -->
	<div class="wrapper">
		<div class="authentication-forgot d-flex align-items-center justify-content-center">
			<div class="card forgot-box">
				<div class="card-body">
					<div class="p-4 rounded  border">
						<div class="text-center">
							<img src="assets/images/icons/forgot-2.png" width="120" alt="" />
						</div>
						<h4 class="mt-5 font-weight-bold">Forgot Password?</h4>

						<p class="text-muted">Enter your registered email ID to reset the password</p>

						<form action="forgot.php" method="POST">
							<?php
							        if(count($errors) > 0){
                            ?>
                            <h5 class="text-danger text-center">
                                <?php 
                                    foreach($errors as $error){
                                        echo $error;
                                    }
                                ?>
                            </h5>
                            <?php
                        }
                    ?>

						<div class="my-4">
							<label class="form-label">Email id</label>
							<input type="email" minlength="10" maxlength="35" name="email" autocomplete = "off" id="email" class="form-control form-control-lg" required>
						</div>
							<h6 class="text-danger text-center"><?= $msg; ?> </h6>
						<div class="d-grid gap-2">
							<button type="submit" name="send" value="submit" class="btn btn-primary btn-lg">Send</button> 
							</form>
							<a href="index.php" class="btn btn-light btn-lg"><i class='bx bx-arrow-back me-1'></i>Back to Login</a>

							<!-- <a href="reset_password.php" class="btn btn-light btn-lg"><i class='bx bx-arrow-back me-1'></i>Reset</a> -->
						</div>
						
						
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end wrapper -->
</body>

</html>	