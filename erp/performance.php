<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
        <title>Preskool - Dashboard</title>
		
		<!-- Favicon -->
        <link rel="shortcut icon" href="assets/img/favicon.png">
		
		<!-- Fontfamily -->
		<link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,400;0,500;0,700;0,900;1,400;1,500;1,700&display=swap" rel="stylesheet">
		
		<!-- Bootstrap CSS -->
        <link rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap.min.css">
		
		<!-- Feathericon CSS -->
        <link rel="stylesheet" href="assets/plugins/feather/feather.css">
		
		<!-- Pe7 CSS -->
		<link rel="stylesheet" href="assets/plugins/icons/flags/flags.css">
		
		<!-- Fontawesome CSS -->
		<link rel="stylesheet" href="assets/plugins/fontawesome/css/fontawesome.min.css">
		<link rel="stylesheet" href="assets/plugins/fontawesome/css/all.min.css">
		
		<!-- Main CSS -->
        <link rel="stylesheet" href="assets/css/style.css">
    </head>
    <body>
	
		<!-- Main Wrapper -->
        <div class="main-wrapper">
		
			<?php include'header.php'  ?>
			
			<!-- Page Wrapper -->
            <div class="page-wrapper">
			
                <div class="content container-fluid">
					<!-- Page Header -->
					<div class="page-header">
						<div class="row">
							<div class="col-sm-12">
								<div class="page-sub-header">
									<h3 class="page-title">Welcome Mani!</h3>
									<ul class="breadcrumb">
										<li class="breadcrumb-item"><a href="index.html">Home</a></li>
										<li class="breadcrumb-item active">Admin</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
					<!-- /Page Header -->

					<!-- Overview Section -->
					<div class="row">
						<div class="col-xl-3 col-sm-6 col-12 d-flex">
							<div class="card bg-comman w-100">
								<div class="card-body">
									<div class="db-widgets d-flex justify-content-between align-items-center">
										<div class="db-info">
											<h6>Awards</h6>
											<h3>15</h3>
										</div>	
										<div class="db-icon">
											<img  src="assets/img/icons/student-icon-02.svg"  alt="Dashboard Icon">
										</div>
									</div>
								</div>
							</div>
						</div>

						<div class="col-xl-3 col-sm-6 col-12 d-flex ">
							<div class="card bg-comman w-100">
								<div class="card-body">
									<div class="db-widgets d-flex justify-content-between align-items-center">
										<div class="db-info">
											<h6>Badges</h6>
											<h3>50+</h3>
										</div>		
										<div class="db-icon">
											<img  src="assets/img/icons/dash-icon-01.png"  alt="Dashboard Icon" height="50px" width="50px">
										</div>	
									</div>
								</div>
							</div>
						</div>

						<div class="col-xl-3 col-sm-6 col-12 d-flex">
							<div class="card bg-comman w-100">
								<div class="card-body">
									<div class="db-widgets d-flex justify-content-between align-items-center">
										<div class="db-info">
											<h6>Rank</h6>
											<h3>30</h3>
										</div>
										<div class="db-icon">
											<img  src="assets/img/icons/dash-icon-02.svg"  alt="Dashboard Icon">
										</div>
									</div>
								</div>
							</div>
						</div>
						
					</div>
					<!-- /Overview Section -->				

					<div class="row">
						
						
						<div class="col-md-12 col-lg-12">
						
							<!-- Student Chart -->
							<div class="card card-chart">
								<div class="card-header">
									<div class="row align-items-center">
										<div class="col-6">
											<h5 class="card-title">Students Growth</h5>
										</div>
										<div class="col-6">
											<ul class="chart-list-out">
												<li><span class="circle-blue"></span>Last Month</li>
												<li><span class="circle-green"></span>This Month</li>
											</ul>                                       
										</div>
									</div>									
								</div>
								<div class="card-body">
									<div id="bar"></div>
								</div>
							</div>
							<!-- /Student Chart -->							
						</div>	
					</div>
					
					<div class="row">
						<div class="col-xl-6 d-flex">						
							<!-- Star Students -->
							<div class="card flex-fill student-space comman-shadow">
								<div class="card-header d-flex align-items-center">
									<h5 class="card-title">Mani's Star Students</h5>
									<ul class="chart-list-out student-ellips">
										<li class="star-menus"><a href="javascript:;"><i class="fas fa-ellipsis-v"></i></a></li>
									</ul> 
								</div>
								<div class="card-body">
									<div class="table-responsive">
										<table class="table star-student table-hover table-center table-borderless table-striped">
											<thead class="thead-light">
												<tr>
													<th>ID</th>
													<th>Name</th>
													<th class="text-center">Marks</th>
													<th class="text-center">Percentage</th>
													<th class="text-end">Class</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td class="text-nowrap">
														<div>21B91A6207</div>
													</td>
													<td class="text-nowrap">
														<a href="profile.html">
															<img class="rounded-circle" src="assets/img/profiles/avatar-02.jpg" width="25" alt="Star Students">
															Anusha
														</a>
													</td>
													<td class="text-center">99</td>
													<td class="text-center">99.8%</td>
													<td class="text-end">
														<div>12th</div>
													</td>
												</tr>
												<tr>
													<td class="text-nowrap">
														<div>21B91A6206</div>
													</td>
													<td class="text-nowrap">
														<a href="profile.html">
															<img class="rounded-circle" src="assets/img/profiles/avatar-01.jpg" width="25" alt="Star Students">
															Ravi
														</a>
													</td>
													<td class="text-center">98</td>
													<td class="text-center">98.2%</td>
													<td class="text-end">
														<div>11th</div>
													</td>
												</tr>
												<tr>
													<td class="text-nowrap">
														<div>21B91A6256</div>
													</td>
													<td class="text-nowrap">
														<a href="profile.html">
															<img class="rounded-circle" src="assets/img/profiles/avatar-03.jpg" width="25" alt="Star Students">
															Vivek
														</a>
													</td>
													<td class="text-center">97</td>
													<td class="text-center">99.6%</td>
													<td class="text-end">
														<div>10th</div>
													</td>
												</tr>
												<tr>
													<td class="text-nowrap">
														<div>21B91A6208</div>
													</td>
													<td class="text-nowrap">
														<a href="profile.html">
															<img class="rounded-circle" src="assets/img/profiles/avatar-04.jpg" width="25" alt="Star Students">
															Teju
														</a>
													</td>
													<td class="text-center">97</td>
													<td class="text-center">98.2%</td>
													<td class="text-end">
														<div>9th</div>
													</td>
												</tr>
												<tr>
													<td class="text-nowrap">
														<div>21B91A6207</div>
													</td>
													<td class="text-nowrap">
														<a href="profile.html">
															<img class="rounded-circle" src="assets/img/profiles/avatar-05.jpg" width="25" alt="Star Students">
															Sikhindar
														</a>
													</td>
													<td class="text-center">98</td>
													<td class="text-center">98.1%</td>
													<td class="text-end">
														<div>8th</div>
													</td>
												</tr>
											</tbody>
										</table>
									</div>
								</div>
							</div>
							<!-- /Star Students -->							
						</div>

						<div class="col-xl-6 d-flex">						
							<!-- Feed Activity -->
							<div class="card flex-fill comman-shadow">
								<div class="card-header d-flex align-items-center">
									<h5 class="card-title ">Faculty Activity </h5>
									<ul class="chart-list-out student-ellips">
										<li class="star-menus"><a href="javascript:;"><i class="fas fa-ellipsis-v"></i></a></li>
									</ul> 
								</div>
								<div class="card-body">
									<div class="activity-groups">
										<div class="activity-awards">
											<div class="award-boxs">
												<img  src="assets/img/icons/award-icon-01.svg"  alt="Award">
											</div>
											<div class="award-list-outs">
												<h4>1st place in "HACKATHON</h4>
												<h5>Your Student Ram Won 1st Place In "HACKATHON"</h5>
											</div>
											<div class="award-time-list">
												<span>1 Day ago</span>
											</div>
										</div>
										<div class="activity-awards">
											<div class="award-boxs">
												<img  src="assets/img/icons/award-icon-02.svg"  alt="Award">
											</div>
											<div class="award-list-outs">
												<h4>Participated in "Skill Development Workshop"</h4>
												<h5>you participated in "Skill Development Workshop"</h5>
											</div>
											<div class="award-time-list">
												<span>2 hours ago</span>
											</div>
										</div>
										<div class="activity-awards">
											<div class="award-boxs">
												<img  src="assets/img/icons/award-icon-03.svg"  alt="Award">
											</div>
											<div class="award-list-outs">
												<h4>Internation conference in "Cambridge University"</h4>
												<h5>you attended internation conference in "Cambridge University"</h5>
											</div>
											<div class="award-time-list">
												<span>2 Week ago</span>
											</div>
										</div>
										<div class="activity-awards mb-0">
											<div class="award-boxs">
												<img  src="assets/img/icons/award-icon-04.svg"  alt="Award">
											</div>
											<div class="award-list-outs">
												<h4>New technology and innovation are used in teaching methods</h4>
												<h5>"PPT" & "SMART BOARD" are used in classroom </h5>
											</div>
											<div class="award-time-list">
												<span>3 Day ago</span>
											</div>
										</div>
									</div>
								</div>
							</div>
							<!-- /Feed Activity -->							
						</div>
					</div>

					
				</div>
				
				<!-- Footer -->
				<footer>
					<p>Copyright © 2023 CSD</p>					
				</footer>
				<!-- /Footer -->

			</div>
			<!-- /Page Wrapper -->

			
		
        </div>
		<!-- /Main Wrapper -->
		
		<!-- jQuery -->
        <script src="assets/js/jquery-3.6.0.min.js"></script>
		
		<!-- Bootstrap Core JS -->
        <script src="assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
		
		<!-- Feather Icon JS -->
		<script src="assets/js/feather.min.js"></script>
		
		<!-- Slimscroll JS -->
		<script src="assets/plugins/slimscroll/jquery.slimscroll.min.js"></script>
		
		<!-- Chart JS -->
		<script src="assets/plugins/apexchart/apexcharts.min.js"></script>
		<script src="assets/plugins/apexchart/chart-data.js"></script>

		<!-- Custom JS -->
		<script src="assets/js/script.js"></script>
		
    </body>
</html>