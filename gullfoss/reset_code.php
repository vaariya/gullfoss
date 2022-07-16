<?php
	
	session_start();

	$errors = array();

	include 'db_con.php';

	 if(isset($_POST['send']))
	 {
	        $_SESSION['info'] = "";
	        $otp_code = mysqli_real_escape_string($con, $_POST['otp']);
	        $check_code = "SELECT * FROM user WHERE token = $otp_code";
	        $code_res = mysqli_query($con, $check_code);
	        if(mysqli_num_rows($code_res) > 0)
	        {
	            $fetch_data = mysqli_fetch_assoc($code_res);
	            $email = $fetch_data['email'];
	            $_SESSION['email'] = $email;
	            $info = "Please create a new password that you don't use on any other site.";
	            $_SESSION['info'] = $info;
	            header("location:reset_password.php");
	            exit();
	        }else{
	            $errors['otp-error'] = "You've entered incorrect code!";
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
	<title>Enter OTP</title>
</head>

<body class="bg-lock-screen">
	<!-- wrapper -->
	<div class="wrapper">
		<div class="authentication-lock-screen d-flex align-items-center justify-content-center">
			<div class="card shadow-none bg-transparent">
				<div class="card-body p-md-5 text-center"><!-- 
					<h2 class="text-white">10:53 AM</h2>
					<h5 class="text-white">Tuesday, January 14, 2021</h5> -->
					<div class="">
						<img src="assets/images/icons/user.png" class="mt-5" width="120" alt="" >
					</div>
					<h3 class="mt-2 text-white">OTP</h3>
					<form action="" method="POST" >
						<?php 
                    if(isset($_SESSION['info'])){
                        ?>
                        <h5 class="text-sucess text-center">
                            <?php echo $_SESSION['info']; ?>
                        </h5>
                        <?php
                    }
                    ?>
                    <?php
                    if(count($errors) > 0){
                        ?>
                        <div class="text-danger text-center">
                            <?php
                            foreach($errors as $showerror){
                                echo $showerror;
                            }
                            ?>
                        </div>
                        <?php
                    }
                    ?>

				<div class="mb-3 mt-3">
						<input type="otp" class="form-control" autocomplete = "off" name="otp" placeholder="Enter Your OTP" onkeypress="return onlyNumberKey(event)" required>
					</div>
					
					<div class="d-grid">
						<button type="submit" name="send"  value="submit" class="btn btn-white">Submit</button>
					</div>
				</form>
				</div>
			</div>
		</div>
	</div>
	<!-- end wrapper -->
	<script>
    function onlyNumberKey(evt) {
          
        // Only ASCII character in that range allowed
        var ASCIICode = (evt.which) ? evt.which : evt.keyCode
        if (ASCIICode > 31 && (ASCIICode < 48 || ASCIICode > 57))
            return false;
        return true;
    }
</script>
</body>

</html>