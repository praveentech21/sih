<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
        <title>ERP - Teachers</title>
		
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

		<!-- Datatables CSS -->
		<link rel="stylesheet" href="assets/plugins/datatables/datatables.min.css">
		
		<!-- Main CSS -->
        <link rel="stylesheet" href="assets/css/style.css">
    </head>
    <body>
		
		<!-- Main Wrapper -->
        <div class="main-wrapper">
		
		<?php include'header.php' ?>

			
			<!-- Page Wrapper -->
            <div class="page-wrapper">
                <div class="content container-fluid">
				
					<!-- Page Header -->
					<div class="page-header">
						<div class="row align-items-center">
							<div class="col">
								<h3 class="page-title">Teachers</h3>
								<ul class="breadcrumb">
									<li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
									<li class="breadcrumb-item active">Teachers</li>
								</ul>
							</div>
						</div>
					</div>
					<!-- /Page Header -->
					
					<div class="student-group-form">
						<div class="row">
							<div class="col-lg-3 col-md-6">  
								<div class="form-group">
									<input type="text" class="form-control" placeholder="Search by ID ...">
								</div>
							</div>
							<div class="col-lg-3 col-md-6">  
								<div class="form-group">
									<input type="text" class="form-control" placeholder="Search by Name ...">
								</div>
							</div>
							<div class="col-lg-4 col-md-6">  
								<div class="form-group">
									<input type="text" class="form-control" placeholder="Search by Phone ...">
								</div>
							</div>
							<div class="col-lg-2">  
								<div class="search-student-btn">
									<button type="btn" class="btn btn-primary">Search</button>
								</div>
							</div>
						</div>
					</div>
				
					<div class="row">
						<div class="col-sm-12">
						
							<div class="card card-table">
								<div class="card-body">
								
									<!-- Page Header -->
									<div class="page-header">
										<div class="row align-items-center">
											<div class="col">
												<h3 class="page-title">Teachers</h3>
											</div>
											
										</div>
									</div>
									<!-- /Page Header -->
									
									<div class="table-responsive">
										<table class="table border-0 star-student table-hover table-center mb-0 datatable table-striped">
											<thead class="student-thread">
												<tr>
													
													<th>ID</th>
													<th>Name</th>
													<th>Class</th>
													<th>Gender</th>
													<th>Subject</th>
													<th>Section</th>
													<th>Mobile Number</th>
													<th>Points</th>
													<th class="text-end">Action</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													
													<td>EID10</td>
													<td>
														<h2 class="table-avatar">
															<a href="teacher-details.php" ></a>
															<a href="teacher-details.php">Suresh Babu</a>
														</h2>
													</td>
													<td>10</td>
													<td>Male</td>
													<td>C</td>
													<td>A</td>
													<td>9800066662</td>
													<td>3500</td>
													<td class="text-end">
														<div class="actions">
															<a href="teacher-details.php" class="btn btn-sm bg-success-light me-2">
																<i class="feather-eye"></i>
															</a>
															
														</div>
													</td>
												</tr>
												<tr>
													
													<td>EID12</td>
													<td>
														<h2 class="table-avatar">
															<a href="teacher-details.php" ></a>
															<a href="teacher-details.php">Ravi</a>
														</h2>
													</td>
													<td>8</td>
													<td>Male</td>
													<td>PHP</td>
													<td>A</td>
													<td>242 362 3100</td>
													<td>3780</td>
													<td class="text-end">
														<div class="actions">
															<a href="teacher-details.php" class="btn btn-sm bg-success-light me-2">
																<i class="feather-eye"></i>
															</a>
															
														</div>
													</td>
												</tr>
												<tr>
													
													<td>EID20</td>
													<td>
														<h2 class="table-avatar">
															<a href="teacher-details.php" ></a>
															<a href="teacher-details.php">Anusha</a>
														</h2>
													</td>
													<td>10</td>
													<td>Female</td>
													<td>Science</td>
													<td>B</td>
													<td>026 7318 4366</td>
													<td>1405</td>
													<td class="text-end">
														<div class="actions">
															<a href="teacher-details.php" class="btn btn-sm bg-success-light me-2">
																<i class="feather-eye"></i>
															</a>
															
														</div>
													</td>
												</tr>
												<tr>
													
													<td>EID25</td>
													<td>
														<h2 class="table-avatar">
															<a href="teacher-details.php" ></a>
															<a href="teacher-details.php">Teju</a>
														</h2>
													</td>
													<td>11</td>
													<td>Female</td>
													<td>History</td>
													<td>C</td>
													<td>952 512 4909</td>
													<td>5002</td>
													<td class="text-end">
														<div class="actions">
															<a href="teacher-details.php" class="btn btn-sm bg-success-light me-2">
																<i class="feather-eye"></i>
															</a>
															
														</div>
													</td>
												</tr>
												<tr>
													
													<td>EID30</td>
													<td>
														<h2 class="table-avatar">
															<a href="teacher-details.php" ></a>
															<a href="teacher-details.php">Sikhindar</a>
														</h2>
													</td>
													<td>10</td>
													<td>Male</td>
													<td>English</td>
													<td>B</td>
													<td>413 289 1314</td>
													<td>4650</td>
													<td class="text-end">
														<div class="actions">
															<a href="teacher-details.php" class="btn btn-sm bg-success-light me-2">
																<i class="feather-eye"></i>
															</a>
															
														</div>
													</td>
												</tr>
												<tr>
													
													<td>EID94</td>
													<td>
														<h2 class="table-avatar">
															<a href="teacher-details.php" ></a>
															<a href="teacher-details.php">Vivek</a>
														</h2>
													</td>
													<td>9</td>
													<td>Male</td>
													<td>Mathematics</td>
													<td>C</td>
													<td>701 753 3810</td>
													<td>9640</td>
													<td class="text-end">
														<div class="actions">
															<a href="teacher-details.php" class="btn btn-sm bg-success-light me-2">
																<i class="feather-eye"></i>
															</a>
															
														</div>
													</td>
												</tr>
												<tr>
													
													<td>EID54</td>
													<td>
														<h2 class="table-avatar">
															<a href="teacher-details.php" ></a>
															<a href="teacher-details.php">xyz</a>
														</h2>
													</td>
													<td>10</td>
													<td>Male</td>
													<td>Mathematics</td>
													<td>C</td>
													<td>402 221 7523</td>
													<td>4560</td>
													<td class="text-end">
														<div class="actions">
															<a href="teacher-details.php" class="btn btn-sm bg-success-light me-2">
																<i class="feather-eye"></i>
															</a>
															
														</div>
													</td>
												</tr>
												<tr>
													
													<td>EID57</td>
													<td>
														<h2 class="table-avatar">
															<a href="teacher-details.php" ></a>
															<a href="teacher-details.php">abc</a>
														</h2>
													</td>
													<td>9</td>
													<td>Female</td>
													<td>Science</td>
													<td>A</td>
													<td>04 2239 968</td>
													<td>6500</td>
													<td class="text-end">
														<div class="actions">
															<a href="teacher-details.php" class="btn btn-sm bg-success-light me-2">
																<i class="feather-eye"></i>
															</a>
															
														</div>
													</td>
												</tr>
												<tr>
													
													<td>EID08</td>
													<td>
														<h2 class="table-avatar">
															<a href="teacher-details.php" ></a>
															<a href="teacher-details.php">John Chambers</a>
														</h2>
													</td>
													<td>11</td>
													<td>Male</td>
													<td>Botony</td>
													<td>B</td>
													<td>870 663 2334</td>
													<td>4660</td>
													<td class="text-end">
														<div class="actions">
															<a href="teacher-details.php" class="btn btn-sm bg-success-light me-2">
																<i class="feather-eye"></i>
															</a>
															
														</div>
													</td>
												</tr>
												<tr>
													
													<td>EID01</td>
													<td>
														<h2 class="table-avatar">
															<a href="teacher-details.php" ></a>
															<a href="teacher-details.php">Nathan Humphries</a>
														</h2>
													</td>
													<td>10</td>
													<td>Male</td>
													<td>Biology</td>
													<td>A</td>
													<td>077 3499 9959</td>
													<td>3380</td>
													<td class="text-end">
														<div class="actions">
															<a href="teacher-details.php" class="btn btn-sm bg-success-light me-2">
																<i class="feather-eye"></i>
															</a>
															
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
				</div>

				<!-- Footer -->
				<footer>
					<p>Copyright © 2022 CSD.</p>					
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

		<!-- Datatables JS -->
		<script src="assets/plugins/datatables/datatables.min.js"></script>
		
		<!-- Custom JS -->
		<script src="assets/js/script.js"></script>
    </body>
</html>