<!doctype html>
<html lang="en">
<?php
	error_reporting(0);
?>

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--favicon-->
	<link rel="icon" href="../assets/images/favicon-32x32.png" type="image/png" />
	<!--plugins-->
	<link href="../assets/plugins/simplebar/css/simplebar.css" rel="stylesheet" />
	<link href="../assets/plugins/perfect-scrollbar/css/perfect-scrollbar.css" rel="stylesheet" />
	<link href="../assets/plugins/metismenu/css/metisMenu.min.css" rel="stylesheet" />
	<link href="../assets/plugins/datatable/css/dataTables.bootstrap5.min.css" rel="stylesheet" />
	<!-- loader-->
	<link href="../assets/css/pace.min.css" rel="stylesheet" />
	<script src="../assets/js/pace.min.js"></script>
	<!-- Bootstrap CSS -->
	<link href="../assets/css/bootstrap.min.css" rel="stylesheet">
	<link href="../assets/css/app.css" rel="stylesheet">
	<link href="../assets/css/icons.css" rel="stylesheet">
	<!-- Theme Style CSS -->
	<link rel="stylesheet" href="../assets/css/dark-theme.css" />
	<link rel="stylesheet" href="../assets/css/semi-dark.css" />
	<link rel="stylesheet" href="../assets/css/header-colors.css" />
	<title>Rukada - Responsive Bootstrap 5 Admin Template</title>
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
					<h4 class="black-text" style="color:black;">Gullfoss</h4>
				</div>
				<div class="toggle-icon ms-auto"><i class='bx bx-arrow-to-left'></i>
				</div>
			</div>
			<!--navigation-->
			<ul class="metismenu" id="menu">
				<li>
					<a href="javascript:;">
						<div class="parent-icon"><i class='bx bx-home-circle'></i>
						</div>
						<div class="menu-title">Dashboard</div>
					</a>
				</li>
				<li>
					<a href="javascript:;" class="has-arrow">
						<div class="parent-icon"><i class='bx bx-cart'></i>
						</div>
						<div class="menu-title">Products</div>
					</a>
					<ul>
						<li> <a href="products.php"><i class="bx bx-right-arrow-alt"></i>Products</a>
						</li>
						<!-- <li> <a href="products-details.php"><i class="bx bx-right-arrow-alt"></i>Product Details</a>
						</li> -->
						<li> <a href="new-products.php"><i class="bx bx-right-arrow-alt"></i>Add New Products</a>
						</li>
						<li> <a href="orders.php"><i class="bx bx-right-arrow-alt"></i>Orders</a>
						</li>
					</ul>
				</li>				
				<li>
					<a href="javascript(0);" target="_blank">
						<div class="parent-icon"><i class="bx bx-support"></i>
						</div>
						<div class="menu-title">Support</div>
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
					<div class="search-bar flex-grow-1">
						<div class="position-relative search-bar-box">
							<input type="text" class="form-control search-control" placeholder="Type to search..."> <span class="position-absolute top-50 search-show translate-middle-y"><i class='bx bx-search'></i></span>
							<span class="position-absolute top-50 search-close translate-middle-y"><i class='bx bx-x'></i></span>
						</div>
					</div>
					<div class="top-menu ms-auto">
						<ul class="navbar-nav align-items-center">
							<li class="nav-item mobile-search-icon">
								<a class="nav-link" href="#">	<i class='bx bx-search'></i>
								</a>
							</li>
							<li class="nav-item dropdown dropdown-large">
								<a class="nav-link dropdown-toggle dropdown-toggle-nocaret" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">	<i class='bx bx-category'></i>
								</a>
								<div class="dropdown-menu dropdown-menu-end">
									<div class="row row-cols-3 g-3 p-3">
										<div class="col text-center">
											<div class="app-box mx-auto bg-gradient-cosmic text-white"><i class='bx bx-group'></i>
											</div>
											<div class="app-title">Teams</div>
										</div>
										<div class="col text-center">
											<div class="app-box mx-auto bg-gradient-burning text-white"><i class='bx bx-atom'></i>
											</div>
											<div class="app-title">Projects</div>
										</div>
										<div class="col text-center">
											<div class="app-box mx-auto bg-gradient-lush text-white"><i class='bx bx-shield'></i>
											</div>
											<div class="app-title">Tasks</div>
										</div>
										<div class="col text-center">
											<div class="app-box mx-auto bg-gradient-kyoto text-dark"><i class='bx bx-notification'></i>
											</div>
											<div class="app-title">Feeds</div>
										</div>
										<div class="col text-center">
											<div class="app-box mx-auto bg-gradient-blues text-dark"><i class='bx bx-file'></i>
											</div>
											<div class="app-title">Files</div>
										</div>
										<div class="col text-center">
											<div class="app-box mx-auto bg-gradient-moonlit text-white"><i class='bx bx-filter-alt'></i>
											</div>
											<div class="app-title">Alerts</div>
										</div>
									</div>
								</div>
							</li>
							<li class="nav-item dropdown dropdown-large">
								<a class="nav-link dropdown-toggle dropdown-toggle-nocaret position-relative" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"> <span class="alert-count">7</span>
									<i class='bx bx-bell'></i>
								</a>
								<div class="dropdown-menu dropdown-menu-end">
									<a href="javascript:;">
										<div class="msg-header">
											<p class="msg-header-title">Notifications</p>
											<p class="msg-header-clear ms-auto">Marks all as read</p>
										</div>
									</a>
									<div class="header-notifications-list">
										<a class="dropdown-item" href="javascript:;">
											<div class="d-flex align-items-center">
												<div class="notify bg-light-primary text-primary"><i class="bx bx-group"></i>
												</div>
												<div class="flex-grow-1">
													<h6 class="msg-name">New Customers<span class="msg-time float-end">14 Sec
												ago</span></h6>
													<p class="msg-info">5 new user registered</p>
												</div>
											</div>
										</a>
										<a class="dropdown-item" href="javascript:;">
											<div class="d-flex align-items-center">
												<div class="notify bg-light-danger text-danger"><i class="bx bx-cart-alt"></i>
												</div>
												<div class="flex-grow-1">
													<h6 class="msg-name">New Orders <span class="msg-time float-end">2 min
												ago</span></h6>
													<p class="msg-info">You have recived new orders</p>
												</div>
											</div>
										</a>
										<a class="dropdown-item" href="javascript:;">
											<div class="d-flex align-items-center">
												<div class="notify bg-light-success text-success"><i class="bx bx-file"></i>
												</div>
												<div class="flex-grow-1">
													<h6 class="msg-name">24 PDF File<span class="msg-time float-end">19 min
												ago</span></h6>
													<p class="msg-info">The pdf files generated</p>
												</div>
											</div>
										</a>
										<a class="dropdown-item" href="javascript:;">
											<div class="d-flex align-items-center">
												<div class="notify bg-light-warning text-warning"><i class="bx bx-send"></i>
												</div>
												<div class="flex-grow-1">
													<h6 class="msg-name">Time Response <span class="msg-time float-end">28 min
												ago</span></h6>
													<p class="msg-info">5.1 min avarage time response</p>
												</div>
											</div>
										</a>
										<a class="dropdown-item" href="javascript:;">
											<div class="d-flex align-items-center">
												<div class="notify bg-light-info text-info"><i class="bx bx-home-circle"></i>
												</div>
												<div class="flex-grow-1">
													<h6 class="msg-name">New Product Approved <span
												class="msg-time float-end">2 hrs ago</span></h6>
													<p class="msg-info">Your new product has approved</p>
												</div>
											</div>
										</a>
										<a class="dropdown-item" href="javascript:;">
											<div class="d-flex align-items-center">
												<div class="notify bg-light-danger text-danger"><i class="bx bx-message-detail"></i>
												</div>
												<div class="flex-grow-1">
													<h6 class="msg-name">New Comments <span class="msg-time float-end">4 hrs
												ago</span></h6>
													<p class="msg-info">New customer comments recived</p>
												</div>
											</div>
										</a>
										<a class="dropdown-item" href="javascript:;">
											<div class="d-flex align-items-center">
												<div class="notify bg-light-success text-success"><i class='bx bx-check-square'></i>
												</div>
												<div class="flex-grow-1">
													<h6 class="msg-name">Your item is shipped <span class="msg-time float-end">5 hrs
												ago</span></h6>
													<p class="msg-info">Successfully shipped your item</p>
												</div>
											</div>
										</a>
										<a class="dropdown-item" href="javascript:;">
											<div class="d-flex align-items-center">
												<div class="notify bg-light-primary text-primary"><i class='bx bx-user-pin'></i>
												</div>
												<div class="flex-grow-1">
													<h6 class="msg-name">New 24 authors<span class="msg-time float-end">1 day
												ago</span></h6>
													<p class="msg-info">24 new authors joined last week</p>
												</div>
											</div>
										</a>
										<a class="dropdown-item" href="javascript:;">
											<div class="d-flex align-items-center">
												<div class="notify bg-light-warning text-warning"><i class='bx bx-door-open'></i>
												</div>
												<div class="flex-grow-1">
													<h6 class="msg-name">Defense Alerts <span class="msg-time float-end">2 weeks
												ago</span></h6>
													<p class="msg-info">45% less alerts last 4 weeks</p>
												</div>
											</div>
										</a>
									</div>
									<a href="javascript:;">
										<div class="text-center msg-footer">View All Notifications</div>
									</a>
								</div>
							</li>
							<li class="nav-item dropdown dropdown-large">
								<a class="nav-link dropdown-toggle dropdown-toggle-nocaret position-relative" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"> <span class="alert-count">8</span>
									<i class='bx bx-comment'></i>
								</a>
								<div class="dropdown-menu dropdown-menu-end">
									<a href="javascript:;">
										<div class="msg-header">
											<p class="msg-header-title">Messages</p>
											<p class="msg-header-clear ms-auto">Marks all as read</p>
										</div>
									</a>
									<div class="header-message-list">
										<a class="dropdown-item" href="javascript:;">
											<div class="d-flex align-items-center">
												<div class="user-online">
													<img src="../assets/images/avatars/avatar-1.png" class="msg-avatar" alt="user avatar">
												</div>
												<div class="flex-grow-1">
													<h6 class="msg-name">Daisy Anderson <span class="msg-time float-end">5 sec
												ago</span></h6>
													<p class="msg-info">The standard chunk of lorem</p>
												</div>
											</div>
										</a>
										<a class="dropdown-item" href="javascript:;">
											<div class="d-flex align-items-center">
												<div class="user-online">
													<img src="../assets/images/avatars/avatar-2.png" class="msg-avatar" alt="user avatar">
												</div>
												<div class="flex-grow-1">
													<h6 class="msg-name">Althea Cabardo <span class="msg-time float-end">14
												sec ago</span></h6>
													<p class="msg-info">Many desktop publishing packages</p>
												</div>
											</div>
										</a>
										<a class="dropdown-item" href="javascript:;">
											<div class="d-flex align-items-center">
												<div class="user-online">
													<img src="../assets/images/avatars/avatar-3.png" class="msg-avatar" alt="user avatar">
												</div>
												<div class="flex-grow-1">
													<h6 class="msg-name">Oscar Garner <span class="msg-time float-end">8 min
												ago</span></h6>
													<p class="msg-info">Various versions have evolved over</p>
												</div>
											</div>
										</a>
										<a class="dropdown-item" href="javascript:;">
											<div class="d-flex align-items-center">
												<div class="user-online">
													<img src="../assets/images/avatars/avatar-4.png" class="msg-avatar" alt="user avatar">
												</div>
												<div class="flex-grow-1">
													<h6 class="msg-name">Katherine Pechon <span class="msg-time float-end">15
												min ago</span></h6>
													<p class="msg-info">Making this the first true generator</p>
												</div>
											</div>
										</a>
										<a class="dropdown-item" href="javascript:;">
											<div class="d-flex align-items-center">
												<div class="user-online">
													<img src="../assets/images/avatars/avatar-5.png" class="msg-avatar" alt="user avatar">
												</div>
												<div class="flex-grow-1">
													<h6 class="msg-name">Amelia Doe <span class="msg-time float-end">22 min
												ago</span></h6>
													<p class="msg-info">Duis aute irure dolor in reprehenderit</p>
												</div>
											</div>
										</a>
										<a class="dropdown-item" href="javascript:;">
											<div class="d-flex align-items-center">
												<div class="user-online">
													<img src="../assets/images/avatars/avatar-6.png" class="msg-avatar" alt="user avatar">
												</div>
												<div class="flex-grow-1">
													<h6 class="msg-name">Cristina Jhons <span class="msg-time float-end">2 hrs
												ago</span></h6>
													<p class="msg-info">The passage is attributed to an unknown</p>
												</div>
											</div>
										</a>
										<a class="dropdown-item" href="javascript:;">
											<div class="d-flex align-items-center">
												<div class="user-online">
													<img src="../assets/images/avatars/avatar-7.png" class="msg-avatar" alt="user avatar">
												</div>
												<div class="flex-grow-1">
													<h6 class="msg-name">James Caviness <span class="msg-time float-end">4 hrs
												ago</span></h6>
													<p class="msg-info">The point of using Lorem</p>
												</div>
											</div>
										</a>
										<a class="dropdown-item" href="javascript:;">
											<div class="d-flex align-items-center">
												<div class="user-online">
													<img src="../assets/images/avatars/avatar-8.png" class="msg-avatar" alt="user avatar">
												</div>
												<div class="flex-grow-1">
													<h6 class="msg-name">Peter Costanzo <span class="msg-time float-end">6 hrs
												ago</span></h6>
													<p class="msg-info">It was popularised in the 1960s</p>
												</div>
											</div>
										</a>
										<a class="dropdown-item" href="javascript:;">
											<div class="d-flex align-items-center">
												<div class="user-online">
													<img src="../assets/images/avatars/avatar-9.png" class="msg-avatar" alt="user avatar">
												</div>
												<div class="flex-grow-1">
													<h6 class="msg-name">David Buckley <span class="msg-time float-end">2 hrs
												ago</span></h6>
													<p class="msg-info">Various versions have evolved over</p>
												</div>
											</div>
										</a>
										<a class="dropdown-item" href="javascript:;">
											<div class="d-flex align-items-center">
												<div class="user-online">
													<img src="../assets/images/avatars/avatar-10.png" class="msg-avatar" alt="user avatar">
												</div>
												<div class="flex-grow-1">
													<h6 class="msg-name">Thomas Wheeler <span class="msg-time float-end">2 days
												ago</span></h6>
													<p class="msg-info">If you are going to use a passage</p>
												</div>
											</div>
										</a>
										<a class="dropdown-item" href="javascript:;">
											<div class="d-flex align-items-center">
												<div class="user-online">
													<img src="../assets/images/avatars/avatar-11.png" class="msg-avatar" alt="user avatar">
												</div>
												<div class="flex-grow-1">
													<h6 class="msg-name">Johnny Seitz <span class="msg-time float-end">5 days
												ago</span></h6>
													<p class="msg-info">All the Lorem Ipsum generators</p>
												</div>
											</div>
										</a>
									</div>
									<a href="javascript:;">
										<div class="text-center msg-footer">View All Messages</div>
									</a>
								</div>
							</li>
						</ul>
					</div>
					<div class="user-box dropdown">
						<a class="d-flex align-items-center nav-link dropdown-toggle dropdown-toggle-nocaret" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
							<?php
							require('../db_con.php');
							$result1=mysqli_query($con,"SELECT * FROM user where user_type = 'admin' ");
							$row1=mysqli_fetch_array($result1);
							$email = $row1['email'];
							$user_type = $row1['user_type'];	
							?>
							<img src="../assets/images/avatars/avatar-2.png" class="user-img" alt="user avatar">
							<div class="user-info ps-3">
								<p class="user-name mb-0"><?php echo $email; ?></p>
								<p class="designattion mb-0"><?php echo $user_type; ?></p>
							</div>
						</a>
						<ul class="dropdown-menu dropdown-menu-end">
							<li><a class="dropdown-item" href="user-profile.php"><i class="bx bx-user"></i><span>Profile</span></a>
							</li>
							<li><a class="dropdown-item" href="javascript:;"><i class="bx bx-cog"></i><span>Settings</span></a>
							</li>
							<li><a class="dropdown-item" href="admin.php"><i class='bx bx-home-circle'></i><span>Dashboard</span></a>
							</li><!-- 
							<li><a class="dropdown-item" href="javascript:;"><i class='bx bx-dollar-circle'></i><span>Earnings</span></a>
							</li>
							<li><a class="dropdown-item" href="javascript:;"><i class='bx bx-download'></i><span>Downloads</span></a>
							</li> -->
							<li>
								<div class="dropdown-divider mb-0"></div>
							</li>
							<li><a class="dropdown-item" href="logout.php"><i class='bx bx-log-out-circle'></i><span>Logout</span></a>
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
				<!-- <div class="row row-cols-1 row-cols-lg-2 row-cols-xl-3">
					<div class="col">
						<div class="card radius-10">
							<div class="card-body">
								<div class="d-flex align-items-center">
									<div>
										<p class="mb-0 text-secondary">Revenue</p>
										<h4 class="my-1">$4805</h4>
										<p class="mb-0 font-13 text-success"><i class='bx bxs-up-arrow align-middle'></i>$34 Since last week</p>
									</div>
									<div class="widgets-icons bg-light-success text-success ms-auto"><i class='bx bxs-wallet'></i>
									</div>
								</div>
								<div id="chart1"></div>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="card radius-10">
							<div class="card-body">
								<div class="d-flex align-items-center">
									<div>
										<p class="mb-0 text-secondary">Total Customers</p>
										<h4 class="my-1">8.4K</h4>
										<p class="mb-0 font-13 text-success"><i class='bx bxs-up-arrow align-middle'></i>14% Since last week</p>
									</div>
									<div class="widgets-icons bg-light-warning text-warning ms-auto"><i class='bx bxs-group'></i>
									</div>
								</div>
								<div id="chart2"></div>
							</div>
						</div>
					</div>
					<div class="col-lg-12">
						<div class="card radius-10">
							<div class="card-body">
								<div class="d-flex align-items-center">
									<div>
										<p class="mb-0 text-secondary">Store Visitors</p>
										<h4 class="my-1">59K</h4>
										<p class="mb-0 font-13 text-danger"><i class='bx bxs-down-arrow align-middle'></i>12.4% Since last week</p>
									</div>
									<div class="widgets-icons bg-light-danger text-danger ms-auto"><i class='bx bxs-binoculars'></i>
									</div>
								</div>
								<div id="chart3"></div>
							</div>
						</div>
					</div>
				</div> -->
				<!--end row-->
				<div class="row row-cols-1 row-cols-xl-2">
					<div class="col d-flex">
						<div class="card radius-10 w-100">
							<div class="card-body">
								<div class="d-flex align-items-center">
									<div>
										<h5 class="mb-1">Top Products</h5>
										<p class="mb-0 font-13 text-secondary"><i class='bx bxs-calendar'></i>in last 30 days revenue</p>
									</div>
									<div class="font-22 ms-auto"><i class='bx bx-dots-horizontal-rounded'></i>
									</div>
								</div>
							</div>
							<div class="product-list p-3 mb-3">
							<!---- PHP ----->
				<?php
				require_once "../db_con.php";
				 $query = "SELECT `id`, `name`, `description`, `price`, `image`, `size`, `status` FROM `product` order by id ASC  ";
				 $queryfire = mysqli_query($con,$query);
				 $num = mysqli_num_rows($queryfire);
				 if ($num>0) 
				 {
				 	while ($product = mysqli_fetch_array($queryfire)) 
				 	{
				 		?>

				 
				<!---- PHP ----->
								<div class="row border mx-0 mb-3 py-2 radius-10 cursor-pointer">

									<div class="col-sm-6">
										<div class="d-flex align-items-center">
											<div class="product-img">
												<img src="uploads/<?php echo $product['image']; ?>" alt="" />
											</div>
											<div class="ms-2">
												<h6 class="mb-1"><?php echo $product['name']; ?></h6>
												<!-- <p class="mb-0">$240.00</p> -->
											</div>
										</div>
									</div>
									<div class="col-sm">
										<h6 class="mb-1">₹<?php echo $product['price']; ?></h6>
										<p class="mb-0">345 Sales</p>
									</div>
									<div class="col-sm">
										 <?php
                                                    if ($product['status']==0) 
                                                    {
                                                        echo '<a href="" class ="badge rounded-pill bg-light-success text-success w-100" >Available</a>';
                                                       
                                                    }
                                                    else
                                                    {
                                                        echo '<a href="" class ="badge rounded-pill bg-light-danger text-danger w-100">out Of Stock</a>';
                                                    }
                                                    ?>
									</div>
									<!-- <div class="col-sm">
										<div id="chart5"></div>
									</div> -->
								</div>
									
							<?php		
				 	}
				 }

				?>
							</div>
						</div>
					</div>
				</div>
				<!--end row-->
				<!-- <div class="row">
					<div class="col-xl-8 d-flex">
						<div class="card radius-10 w-100">
							<div class="card-body">
								<div class="d-flex align-items-center">
									<div>
										<h5 class="mb-1">Transaction History</h5>
										<p class="mb-0 font-13 text-secondary"><i class='bx bxs-calendar'></i>in last 30 days revenue</p>
									</div>
									<div class="font-22 ms-auto"><i class='bx bx-dots-horizontal-rounded'></i>
									</div>
								</div>
								<div class="table-responsive mt-4">
									<table class="table align-middle mb-0 table-hover" id="Transaction-History">
										<thead class="table-light">
											<tr>
												<th>Payment Name</th>
												<th>Date & Time</th>
												<th>Amount</th>
												<th>Status</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td>
													<div class="d-flex align-items-center">
														<div class="">
															<img src="../assets/images/avatars/avatar-1.png" class="rounded-circle" width="46" height="46" alt="" />
														</div>
														<div class="ms-2">
															<h6 class="mb-1 font-14">Payment from Michle Jhon</h6>
															<p class="mb-0 font-13 text-secondary">Refrence Id #8547846</p>
														</div>
													</div>
												</td>
												<td>Jan 10, 2021</td>
												<td>+256.00</td>
												<td>
													<div class="badge rounded-pill bg-success w-100">Completed</div>
												</td>
											</tr>
											<tr>
												<td>
													<div class="d-flex align-items-center">
														<div class="">
															<img src="../assets/images/avatars/avatar-2.png" class="rounded-circle" width="46" height="46" alt="" />
														</div>
														<div class="ms-2">
															<h6 class="mb-1 font-14">Payment from Pauline Bird</h6>
															<p class="mb-0 font-13 text-secondary">Refrence Id #9653248</p>
														</div>
													</div>
												</td>
												<td>Jan 12, 2021</td>
												<td>+566.00</td>
												<td>
													<div class="badge rounded-pill bg-info text-dark w-100">In Progress</div>
												</td>
											</tr>
											<tr>
												<td>
													<div class="d-flex align-items-center">
														<div class="">
															<img src="../assets/images/avatars/avatar-3.png" class="rounded-circle" width="46" height="46" alt="" />
														</div>
														<div class="ms-2">
															<h6 class="mb-1 font-14">Payment from Ralph Alva</h6>
															<p class="mb-0 font-13 text-secondary">Refrence Id #7689524</p>
														</div>
													</div>
												</td>
												<td>Jan 14, 2021</td>
												<td>+636.00</td>
												<td>
													<div class="badge rounded-pill bg-danger w-100">Declined</div>
												</td>
											</tr>
											<tr>
												<td>
													<div class="d-flex align-items-center">
														<div class="">
															<img src="../assets/images/avatars/avatar-4.png" class="rounded-circle" width="46" height="46" alt="" />
														</div>
														<div class="ms-2">
															<h6 class="mb-1 font-14">Payment from John Roman</h6>
															<p class="mb-0 font-13 text-secondary">Refrence Id #8335884</p>
														</div>
													</div>
												</td>
												<td>Jan 15, 2021</td>
												<td>+246.00</td>
												<td>
													<div class="badge rounded-pill bg-success w-100">Completed</div>
												</td>
											</tr>
											<tr>
												<td>
													<div class="d-flex align-items-center">
														<div class="">
															<img src="../assets/images/avatars/avatar-7.png" class="rounded-circle" width="46" height="46" alt="" />
														</div>
														<div class="ms-2">
															<h6 class="mb-1 font-14">Payment from David Buckley</h6>
															<p class="mb-0 font-13 text-secondary">Refrence Id #7865986</p>
														</div>
													</div>
												</td>
												<td>Jan 16, 2021</td>
												<td>+876.00</td>
												<td>
													<div class="badge rounded-pill bg-info text-dark w-100">In Progress</div>
												</td>
											</tr>
											<tr>
												<td>
													<div class="d-flex align-items-center">
														<div class="">
															<img src="../assets/images/avatars/avatar-8.png" class="rounded-circle" width="46" height="46" alt="" />
														</div>
														<div class="ms-2">
															<h6 class="mb-1 font-14">Payment from Lewis Cruz</h6>
															<p class="mb-0 font-13 text-secondary">Refrence Id #8576420</p>
														</div>
													</div>
												</td>
												<td>Jan 18, 2021</td>
												<td>+536.00</td>
												<td>
													<div class="badge rounded-pill bg-success w-100">Completed</div>
												</td>
											</tr>
											<tr>
												<td>
													<div class="d-flex align-items-center">
														<div class="">
															<img src="../assets/images/avatars/avatar-9.png" class="rounded-circle" width="46" height="46" alt="" />
														</div>
														<div class="ms-2">
															<h6 class="mb-1 font-14">Payment from James Caviness</h6>
															<p class="mb-0 font-13 text-secondary">Refrence Id #3775420</p>
														</div>
													</div>
												</td>
												<td>Jan 18, 2021</td>
												<td>+536.00</td>
												<td>
													<div class="badge rounded-pill bg-success w-100">Completed</div>
												</td>
											</tr>
											<tr>
												<td>
													<div class="d-flex align-items-center">
														<div class="">
															<img src="../assets/images/avatars/avatar-10.png" class="rounded-circle" width="46" height="46" alt="" />
														</div>
														<div class="ms-2">
															<h6 class="mb-1 font-14">Payment from Peter Costanzo</h6>
															<p class="mb-0 font-13 text-secondary">Refrence Id #3768920</p>
														</div>
													</div>
												</td>
												<td>Jan 19, 2021</td>
												<td>+536.00</td>
												<td>
													<div class="badge rounded-pill bg-success w-100">Completed</div>
												</td>
											</tr>
											<tr>
												<td>
													<div class="d-flex align-items-center">
														<div class="">
															<img src="../assets/images/avatars/avatar-11.png" class="rounded-circle" width="46" height="46" alt="" />
														</div>
														<div class="ms-2">
															<h6 class="mb-1 font-14">Payment from Johnny Seitz</h6>
															<p class="mb-0 font-13 text-secondary">Refrence Id #9673520</p>
														</div>
													</div>
												</td>
												<td>Jan 20, 2021</td>
												<td>+86.00</td>
												<td>
													<div class="badge rounded-pill bg-danger w-100">Declined</div>
												</td>
											</tr>
											<tr>
												<td>
													<div class="d-flex align-items-center">
														<div class="">
															<img src="../assets/images/avatars/avatar-12.png" class="rounded-circle" width="46" height="46" alt="" />
														</div>
														<div class="ms-2">
															<h6 class="mb-1 font-14">Payment from Lewis Cruz</h6>
															<p class="mb-0 font-13 text-secondary">Refrence Id #8576420</p>
														</div>
													</div>
												</td>
												<td>Jan 18, 2021</td>
												<td>+536.00</td>
												<td>
													<div class="badge rounded-pill bg-success w-100">Completed</div>
												</td>
											</tr>
											<tr>
												<td>
													<div class="d-flex align-items-center">
														<div class="">
															<img src="../assets/images/avatars/avatar-13.png" class="rounded-circle" width="46" height="46" alt="" />
														</div>
														<div class="ms-2">
															<h6 class="mb-1 font-14">Payment from David Buckley</h6>
															<p class="mb-0 font-13 text-secondary">Refrence Id #8576420</p>
														</div>
													</div>
												</td>
												<td>Jan 22, 2021</td>
												<td>+854.00</td>
												<td>
													<div class="badge rounded-pill bg-info text-dark w-100">In Progress</div>
												</td>
											</tr>
											<tr>
												<td>
													<div class="d-flex align-items-center">
														<div class="">
															<img src="../assets/images/avatars/avatar-14.png" class="rounded-circle" width="46" height="46" alt="" />
														</div>
														<div class="ms-2">
															<h6 class="mb-1 font-14">Payment from Thomas Wheeler</h6>
															<p class="mb-0 font-13 text-secondary">Refrence Id #4278620</p>
														</div>
													</div>
												</td>
												<td>Jan 18, 2021</td>
												<td>+536.00</td>
												<td>
													<div class="badge rounded-pill bg-success w-100">Completed</div>
												</td>
											</tr>
										</tbody>
									</table>
								</div>
							</div>
						</div>
					</div>
					<div class="col-xl-4">
						<div class="card radius-10 overflow-hidden">
							<div class="card-body">
								<div class="d-flex align-items-center">
									<div class="">
										<p class="mb-1 text-secondary">Bounce Rate</p>
										<h4 class="mb-0">48.32%</h4>
									</div>
									<div class="ms-auto">
										<p class="mb-0 font-13 text-success">+12.34 Increase</p>
										<p class="mb-0 font-13 text-secondary">From Last Week</p>
									</div>
								</div>
							</div>
							<div id="chart12"></div>
						</div>
						<div class="card radius-10 overflow-hidden">
							<div class="card-body">
								<div class="d-flex align-items-center">
									<div class="">
										<p class="mb-1 text-secondary">Pageviews</p>
										<h4 class="mb-0">52.64%</h4>
									</div>
									<div class="ms-auto">
										<p class="mb-0 font-13 text-success">+21.34 Increase</p>
										<p class="mb-0 font-13 text-secondary">From Last Week</p>
									</div>
								</div>
							</div>
							<div id="chart13"></div>
						</div>
						<div class="card radius-10 overflow-hidden">
							<div class="card-body">
								<div class="d-flex align-items-center">
									<div class="">
										<p class="mb-1 text-secondary">New Sessions</p>
										<h4 class="mb-0">68.23%</h4>
									</div>
									<div class="ms-auto">
										<p class="mb-0 font-13 text-success">+18.42 Increase</p>
										<p class="mb-0 font-13 text-secondary">From Last Week</p>
									</div>
								</div>
							</div>
							<div id="chart14"></div>
						</div>
					</div>
				</div> -->
				<!--end row-->
				<!-- <div class="row row-cols-1 row-cols-lg-3">
					<div class="col d-flex">
						<div class="card radius-10 w-100">
							<div class="card-body">
								<div class="d-flex align-items-center">
									<div>
										<h5 class="mb-0">Top Categories</h5>
									</div>
									<div class="font-22 ms-auto"><i class='bx bx-dots-horizontal-rounded'></i>
									</div>
								</div>
								<div class="mt-5" id="chart15"></div>
							</div>
							<ul class="list-group list-group-flush">
								<li class="list-group-item d-flex bg-transparent justify-content-between align-items-center">Kids <span class="badge bg-success rounded-pill">25</span>
								</li>
								<li class="list-group-item d-flex bg-transparent justify-content-between align-items-center">Women <span class="badge bg-danger rounded-pill">10</span>
								</li>
								<li class="list-group-item d-flex bg-transparent justify-content-between align-items-center">Men <span class="badge bg-primary rounded-pill">65</span>
								</li>
								<li class="list-group-item d-flex bg-transparent justify-content-between align-items-center">Furniture <span class="badge bg-warning text-dark rounded-pill">14</span>
								</li>
							</ul>
						</div>
					</div>
					<div class="col d-flex">
						<div class="card radius-10 w-100">
							<div class="card-body">
								<p class="font-weight-bold mb-1 text-secondary">Visitors</p>
								<div class="d-flex align-items-center">
									<div>
										<h4 class="mb-0">43,540</h4>
									</div>
									<div class="">
										<p class="mb-0 align-self-center font-weight-bold text-success ms-2">4.4 <i class='bx bxs-up-arrow-alt mr-2'></i>
										</p>
									</div>
								</div>
								<div id="chart21"></div>
							</div>
						</div>
					</div>
					<div class="col d-flex">
						<div class="card radius-10 w-100 overflow-hidden">
							<div class="card-body">
								<div class="d-flex align-items-center">
									<div>
										<h5 class="mb-0">Sales Overiew</h5>
									</div>
									<div class="font-22 ms-auto"><i class='bx bx-dots-horizontal-rounded'></i>
									</div>
								</div>
								<div class="mt-5" id="chart20"></div>
							</div>
							<div class="card-footer bg-transparent border-top-0">
								<div class="d-flex align-items-center justify-content-between text-center">
									<div>
										<h6 class="mb-1 font-weight-bold">$289.42</h6>
										<p class="mb-0 text-secondary">Last Week</p>
									</div>
									<div class="mb-1">
										<h6 class="mb-1 font-weight-bold">$856.14</h6>
										<p class="mb-0 text-secondary">Last Month</p>
									</div>
									<div>
										<h6 class="mb-1 font-weight-bold">$987,25</h6>
										<p class="mb-0 text-secondary">Last Year</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div> -->
				<!--end row-->
				<div class="row">
					<div class="col-12 col-xl-6 d-flex">
						<div class="card radius-10 w-100">
							<div class="card-body">
								<div class="d-flex align-items-center">
									<div>
										<h5 class="mb-0">New Customers</h5>
									</div>
									<div class="font-22 ms-auto"><i class='bx bx-dots-horizontal-rounded'></i>
									</div>
								</div>
							</div>
							<div class="customers-list p-3 mb-3">
								<!---- PHP ----->
								<?php
								require_once "../db_con.php";
								 $query = "SELECT * FROM `user` where `user_type`='customer' ";
								 $queryfire = mysqli_query($con,$query);
								 $num = mysqli_num_rows($queryfire);
								 if ($num>0) 
								{
								 	while ($result = mysqli_fetch_array($queryfire)) 
								 	{
								 		?>

								 
								<!---- PHP ----->
								<div class="customers-list-item d-flex align-items-center border-top border-bottom p-2 cursor-pointer">
									<!-- <div class="">
										<img src="../assets/images/avatars/avatar-3.png" class="rounded-circle" width="46" height="46" alt="" />
									</div> -->
									<div class="ms-2">
										<h6 class="mb-1 font-14"><?php echo $result['first_name'];?>&nbsp;<?php echo $result['last_name'];?> </h6>
										<p class="mb-0 font-13 text-secondary"><?php echo $result['emfail'];?></p>
									</div>
									<div class="list-inline d-flex customers-contacts ms-auto">	<a href="mailto:<?php echo $result['email'];?>" class="list-inline-item"><i class='bx bxs-envelope'></i></a>
										<a href="tel:<?php echo $result['contact_no'];?>" class="list-inline-item"><i class='bx bxs-microphone'></i></a>
										<a href="javascript:;" class="list-inline-item"><i class='bx bx-dots-vertical-rounded'></i></a>
									</div>
								</div>
								<?php 
									}
								}
								?>
							</div>
						</div>
					</div>
					<div class="col-12 col-xl-6 d-flex">
						<div class="card radius-10 w-100">
							<div class="card-body">
								<div class="d-flex align-items-center">
									<div>
										<h5 class="mb-0">Orders Summary</h5>
									</div>
									<div class="font-22 ms-auto"><i class='bx bx-dots-horizontal-rounded'></i>
									</div>
								</div>
								<hr/>
								<div class="row m-0 row-cols-1 row-cols-md-3">
									<div class="col border-end">
										<div id="chart16"></div>
									</div>
									<div class="col border-end">
										<div id="chart17"></div>
									</div>
									<div class="col">
										<div id="chart18"></div>
									</div>
								</div>
								<div id="chart19"></div>
							</div>
						</div>
					</div>
				</div>
				<!--end row-->
					
				<div class="card radius-10">
					<div class="card-body">
						<div class="d-flex align-items-center">
							<div>
								<h5 class="mb-0">Orders Summary</h5>
							</div>
							<div class="font-22 ms-auto"><i class='bx bx-dots-horizontal-rounded'></i>
							</div>
						</div>
						<hr/>
						<div class="table-responsive">
							<table class="table align-middle mb-0">
								<thead class="table-light">
									<tr>
										<th>Order id</th>
										<th>Product</th>
										<th>Customer</th>
										<th>Date</th>
										<th>Price</th>
										<th>Status</th>
										<th>Action</th>
									</tr>
								</thead>
								<?php

								?>
								<tbody>
									<tr>
										<td>#447896</td>
										<td>
											<div class="d-flex align-items-center">
												<div class="recent-product-img">
													<img src="../assets/images/icons/tshirt.png" alt="">
												</div>
												<div class="ms-2">
													<h6 class="mb-1 font-14">T-Shirt Blue</h6>
												</div>
											</div>
										</td>
										<td>Emy Jackson</td>
										<td>28 Jul 2020</td>
										<td>$96.00</td>
										<td>
											<div class="d-flex align-items-center text-danger">	<i class='bx bx-radio-circle-marked bx-burst bx-rotate-90 align-middle font-18 me-1'></i>
												<span>Pending</span>
											</div>
										</td>
										<td>
											<div class="d-flex order-actions">	<a href="javascript:;" class=""><i class="bx bx-cog"></i></a>
												<a href="javascript:;" class="ms-4"><i class='bx bx-down-arrow-alt'></i></a>
											</div>
										</td>
									</tr>
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!--end page wrapper -->
		<!--start overlay-->
		<div class="overlay toggle-icon"></div>
		<!--end overlay-->
		<!--Start Back To Top Button--> <a href="javaScript:;" class="back-to-top"><i class='bx bxs-up-arrow-alt'></i></a>
		<!--End Back To Top Button-->
		<footer class="page-footer">
			<p class="mb-0">Copyright © 2021. All right reserved.</p>
		</footer>
	</div>
	<!--end wrapper-->
	<!--start switcher-->
	<div class="switcher-wrapper">
		<div class="switcher-btn"> <i class='bx bx-cog bx-spin'></i>
		</div>
		<div class="switcher-body">
			<div class="d-flex align-items-center">
				<h5 class="mb-0 text-uppercase">Theme Customizer</h5>
				<button type="button" class="btn-close ms-auto close-switcher" aria-label="Close"></button>
			</div>
			<hr/>
			<h6 class="mb-0">Theme Styles</h6>
			<hr/>
			<div class="d-flex align-items-center justify-content-between">
				<div class="form-check">
					<input class="form-check-input" type="radio" name="flexRadioDefault" id="lightmode" checked>
					<label class="form-check-label" for="lightmode">Light</label>
				</div>
				<div class="form-check">
					<input class="form-check-input" type="radio" name="flexRadioDefault" id="darkmode">
					<label class="form-check-label" for="darkmode">Dark</label>
				</div>
				<div class="form-check">
					<input class="form-check-input" type="radio" name="flexRadioDefault" id="semidark">
					<label class="form-check-label" for="semidark">Semi Dark</label>
				</div>
			</div>
			<hr/>
			<div class="form-check">
				<input class="form-check-input" type="radio" id="minimaltheme" name="flexRadioDefault">
				<label class="form-check-label" for="minimaltheme">Minimal Theme</label>
			</div>
			<hr/>
			<h6 class="mb-0">Header Colors</h6>
			<hr/>
			<div class="header-colors-indigators">
				<div class="row row-cols-auto g-3">
					<div class="col">
						<div class="indigator headercolor1" id="headercolor1"></div>
					</div>
					<div class="col">
						<div class="indigator headercolor2" id="headercolor2"></div>
					</div>
					<div class="col">
						<div class="indigator headercolor3" id="headercolor3"></div>
					</div>
					<div class="col">
						<div class="indigator headercolor4" id="headercolor4"></div>
					</div>
					<div class="col">
						<div class="indigator headercolor5" id="headercolor5"></div>
					</div>
					<div class="col">
						<div class="indigator headercolor6" id="headercolor6"></div>
					</div>
					<div class="col">
						<div class="indigator headercolor7" id="headercolor7"></div>
					</div>
					<div class="col">
						<div class="indigator headercolor8" id="headercolor8"></div>
					</div>
				</div>
			</div>
			<hr/>
			<h6 class="mb-0">Sidebar Colors</h6>
			<hr/>
			<div class="header-colors-indigators">
				<div class="row row-cols-auto g-3">
					<div class="col">
						<div class="indigator sidebarcolor1" id="sidebarcolor1"></div>
					</div>
					<div class="col">
						<div class="indigator sidebarcolor2" id="sidebarcolor2"></div>
					</div>
					<div class="col">
						<div class="indigator sidebarcolor3" id="sidebarcolor3"></div>
					</div>
					<div class="col">
						<div class="indigator sidebarcolor4" id="sidebarcolor4"></div>
					</div>
					<div class="col">
						<div class="indigator sidebarcolor5" id="sidebarcolor5"></div>
					</div>
					<div class="col">
						<div class="indigator sidebarcolor6" id="sidebarcolor6"></div>
					</div>
					<div class="col">
						<div class="indigator sidebarcolor7" id="sidebarcolor7"></div>
					</div>
					<div class="col">
						<div class="indigator sidebarcolor8" id="sidebarcolor8"></div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!--end switcher-->
	<!-- Bootstrap JS -->
	<script src="../assets/js/bootstrap.bundle.min.js"></script>
	<!--plugins-->
	<script src="../assets/js/jquery.min.js"></script>
	<script src="../assets/plugins/simplebar/js/simplebar.min.js"></script>
	<script src="../assets/plugins/metismenu/js/metisMenu.min.js"></script>
	<script src="../assets/plugins/perfect-scrollbar/js/perfect-scrollbar.js"></script>
	<script src="../assets/plugins/apexcharts-bundle/js/apexcharts.min.js"></script>
	<script src="../assets/plugins/datatable/js/jquery.dataTables.min.js"></script>
	<script src="../assets/plugins/datatable/js/dataTables.bootstrap5.min.js"></script>
	<script>
		$(document).ready(function() {
			$('#Transaction-History').DataTable({
				lengthMenu: [[6, 10, 20, -1], [6, 10, 20, 'Todos']]
			});
		  } );
	</script>
	<script src="../assets/js/dashboard-eCommerce.js"></script>
	<!--app JS-->
	<script src="../assets/js/app.js"></script>
	<script>
		new PerfectScrollbar('.product-list');
		new PerfectScrollbar('.customers-list');
	</script>
</body>

</html>