<?php
	
	require_once 'auth_check.php';
?>
<!doctype html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--favicon-->
	<link rel="icon" href="../assets/images/favicon-32x32.png" type="image/png" />

<!--fontawesome-->
	<!-- css -->
	<link href="../assets1/css/all.css" rel="stylesheet">
	<link href="../assets1/css/all.min.css" rel="stylesheet">
	<link href="../assets1/css/brands.css" rel="stylesheet">
	<link href="../assets1/css/brands.min.css" rel="stylesheet">
	<link href="../assets1/css/fontawesome.css" rel="stylesheet">
	<link href="../assets1/css/fontawesome.min.css" rel="stylesheet">
	<link href="../assets1/css/regular.css" rel="stylesheet">
	<link href="../assets1/css/regular.min.css" rel="stylesheet">
	<link href="../assets1/css/solid.css" rel="stylesheet">
	<link href="../assets1/css/solid.min.css" rel="stylesheet">
	<link href="../assets1/css/svg-with-js.css" rel="stylesheet">
	<link href="../assets1/css/svg-with-js.min.css" rel="stylesheet">
	<link href="../assets1/css/v4-font-face.css" rel="stylesheet">
	<link href="../assets1/css/v4-font-face.min.css" rel="stylesheet">
	<link href="../assets1/css/v4-shims.css" rel="stylesheet">
	<link href="../assets1/css/v4-shims.min.css" rel="stylesheet">
	<link href="../assets1/css/v5-font-face.css" rel="stylesheet">
	<link href="../assets1/css/v5-font-face.min.css" rel="stylesheet">
	
	<!--/fontawesome-->

	<!--plugins-->
	<link href="../assets/plugins/vectormap/jquery-jvectormap-2.0.2.css" rel="stylesheet"/>
	<link href="../assets/plugins/simplebar/css/simplebar.css" rel="stylesheet" />
	<link href="../assets/plugins/perfect-scrollbar/css/perfect-scrollbar.css" rel="stylesheet" />
	<link href="../assets/plugins/metismenu/css/metisMenu.min.css" rel="stylesheet" />
	<!-- loader-->
	<link href="../assets/css/pace.min.css" rel="stylesheet" />
	<script src="../assets/js/pace.min.js"></script>
	<!-- Bootstrap CSS -->
	<link href="../assets/css/bootstrap.min.css" rel="stylesheet">
	<link href="../assets/css/app.css" rel="stylesheet">
	<link href="../assets/css/icons.css" rel="stylesheet">
	
	<title>Admin Profile</title>
</head>

<body>
	<!--wrapper-->
	<div class="wrapper">
		<!--sidebar wrapper -->
		<div class="sidebar-wrapper" data-simplebar="true">
			<div class="sidebar-header">
				<div>
					<img src="../assets/images/logo-icon.png" class="logo-icon" alt="logo icon">
				</div>
				<div>
					<h4 class="logo-text">COACHING</h4>
				</div>
				<div class="toggle-icon ms-auto"><i class='bx bx-arrow-to-left'></i>
				</div>
			</div>
			<!--navigation-->
			<ul class="metismenu" id="menu">
				<li>
					<a href="javascript:;" class="has-arrow">
						<div class="parent-icon"><i class='bx bx-home-circle'></i>
						</div>
						<div class="menu-title">Dashboard</div>
					</a>
					<ul>
						<li> <a href="admin.php"><i class="fas fa-home"></i>Home</a>
						</li>
					</ul>
				</li>
				<li>
					<a href="manage-branch.php">
						<div class="parent-icon"><i class="bx bx-category"></i>
						</div>
						<div class="menu-title">Manage Branch</div>
					</a>
				</li>
				
			</ul>
			<!--end navigation-->
		</div>
		<!--end sidebar wrapper -->
		<!--start header -->
		<header>
			<div class="topbar d-flex align-items-center">
				<nav class="navbar navbar-expand">
					<div class="mobile-toggle-menu"><i class='bx bx-menu'></i>
					</div>
					<div class="top-menu ms-auto">
						<ul class="navbar-nav align-items-center">
							<li class="nav-item mobile-search-icon">
								<a class="nav-link" href="#">	<i class='bx bx-search'></i>
								</a>
							</li>
							<li class="nav-item dropdown dropdown-large">
								<div class="dropdown-menu dropdown-menu-end">
									<div class="header-notifications-list">
										
										
									</div>
								</div>
							</li>
							<li class="nav-item dropdown dropdown-large">
								<div class="dropdown-menu dropdown-menu-end">
									
									<div class="header-message-list">
										
									</div>
								</div>
							</li>
						</ul>
					</div>
					<?php
							require('../db_con.php');
							$result1=mysqli_query($con,"SELECT * FROM user WHERE user_type='admin' ");
							$row1=mysqli_fetch_array($result1);
							$email = $row1['email'];
							$user_type = $row1['user_type'];	
							
							?>
					<div class="user-box dropdown">
						<a class="d-flex align-items-center nav-link dropdown-toggle dropdown-toggle-nocaret" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
							<div class="user-info ps-3">
								<p class="user-name mb-0"><?php echo $email; ?></p>
								<p class="designattion mb-0"><?php echo $user_type; ?></p>
							</div>
						</a>
						<ul class="dropdown-menu dropdown-menu-end">
							<li><a class="dropdown-item" href="user.php"><i class="bx bx-user"></i><span>Profile</span></a>
							</li>
							
								<div class="dropdown-divider mb-0"></div>
							</li>
							<li><a class="dropdown-item" href="../logout.php"><i class='bx bx-log-out-circle'></i><span>Logout</span></a>
							</li>
						</ul>
					</div>
				</nav>
			</div>
		</header>
		<!--end header -->
		<!--start page wrapper -->
		<div class="page-wrapper">
			<div class="page-content">
				<!--breadcrumb-->
				<div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
					<div class="breadcrumb-title pe-3">Profile</div>
					<div class="ps-3">
						<nav aria-label="breadcrumb">
							<ol class="breadcrumb mb-0 p-0">
								<li class="breadcrumb-item"><a href="admin.php"><i class="bx bx-home-alt"></i></a></li>
								<li class="breadcrumb-item"><a href="user.php">Profile</a></li>
							</ol>
						</nav>
					</div>
				</div>
				<!--end breadcrumb-->
				<div class="container">
					<div class="main-body">
						<div class="row"> 
							<div class="col-lg-10">
								<div class="card">
									<div class="card-body">
											<?php

												include '../db_con.php';


												$sql = "SELECT * FROM user WHERE user_type='admin' ";

												$gotresults = mysqli_query($con,$sql);

												if ($gotresults) 
												{
													if (mysqli_num_rows($gotresults)>0) 
													{
												
														while ($row=mysqli_fetch_array($gotresults))
														{
															?>
									<form action="">
										<div class="row mb-3">
											<div class="col-sm-3">
												<h6 class="mb-0">Name</h6>
											</div>
											<div class="col-sm-9 text-secondary">
												<label class="form-label form-control"><?php echo $row['first_name'];?>&nbsp;<?php echo $row['last_name']; ?></label>
											</div>
										</div>
										<div class="row mb-3">
											<div class="col-sm-3">
												<h6 class="mb-0">Email</h6>
											</div>
											<div class="col-sm-9 text-secondary">
												<label class="form-label form-control"><?php echo $row['email']; ?></label>
											</div>
										</div>
										<div class="row mb-3">
											<div class="col-sm-3">
												<h6 class="mb-0">Phone</h6>
											</div>
											<div class="col-sm-9 text-secondary">
												<label class="form-label form-control"><?php echo $row['contact_no']; ?></label>
											</div>
										</div>
										
										<div class="row mb-3">
											<div class="col-sm-3">
												<h6 class="mb-0">Address</h6>
											</div>
											<div class="col-sm-9 text-secondary">
												<textarea  class="form-label form-control" rows="3" readonly disabled><?php echo $row['address'];?></textarea>
											</div>
														</div>
											<div class="row">
											<div class="col-sm-3"></div>
											<div class="col-sm-9 text-secondary">
											<a href="update-admin.php?id=<?php echo $row['id']; ?>">
												<!-- <input type="button" class="btn btn-primary px-4" value="UPDATE"> -->
											</a>
											</div>
										</div>
									</div>
										</div>
										
										</form>
										<?php
														}	
													}
												}
											?>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!--end page wrapper -->
		<!--start overlay-->
	</div>
	<!--end wrapper-->
	
	<!-- Bootstrap JS -->
	<script src="../assets/js/bootstrap.bundle.min.js"></script>
	<!--plugins-->
	<script src="../assets/js/jquery.min.js"></script>
	<script src="../assets/plugins/simplebar/js/simplebar.min.js"></script>
	<script src="../assets/plugins/metismenu/js/metisMenu.min.js"></script>
	<script src="../assets/plugins/perfect-scrollbar/js/perfect-scrollbar.js"></script>
	<script src="../assets/plugins/chartjs/js/Chart.min.js"></script>
	<script src="../assets/plugins/vectormap/jquery-jvectormap-2.0.2.min.js"></script>
    <script src="../assets/plugins/vectormap/jquery-jvectormap-world-mill-en.js"></script>
	<script src="../assets/plugins/jquery.easy-pie-chart/jquery.easypiechart.min.js"></script>
	<script src="../assets/plugins/sparkline-charts/jquery.sparkline.min.js"></script>
	<script src="../assets/plugins/jquery-knob/excanvas.js"></script>
	<script src="../assets/plugins/jquery-knob/jquery.knob.js"></script>
	  <script>
		  $(function() {
			  $(".knob").knob();
		  });
	  </script>
	  <script src="../assets/js/index.js"></script>
	<!--app JS-->
	<script src="../assets/js/app.js"></script>
</body>

</html>