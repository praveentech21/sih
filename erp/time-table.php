<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
        <title>Preskool - Time Table</title>
		
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
								<h3 class="page-title">Time Table</h3>
								<ul class="breadcrumb">
									<li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
									<li class="breadcrumb-item active">Time Table</li>
								</ul>
							</div>
						</div>
					</div>
					<!-- /Page Header -->
				
					<div class="row">
						<div class="col-sm-12">
						
							<div class="card card-table">
								<div class="card-body">
									<!-- Page Header -->
									<div class="page-header">
										<div class="row align-items-center">
											<div class="col">
												<h3 class="page-title">Time Table</h3>
											</div>
											<div class="col-auto text-end float-end ms-auto download-grp">
												<a href="#" class="btn btn-outline-primary me-2"><i class="fas fa-download"></i> Download</a>
												<a href="add-time-table.html" class="btn btn-primary"><i class="fas fa-plus"></i></a>
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
													<th>Subject</th>
													<th>Start Time</th>
													<th>End Time</th>
													<th>Date</th>
													<th class="text-end">Action</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td>PRE2309</td>
													<td>
														<h2 class="table-avatar">
															<a class="avatar avatar-sm me-2"><img class="avatar-img rounded-circle" src="assets/img/profiles/avatar-01.jpg" alt="User Image"></a>
															<a>Aaliyah</a>
														</h2>
													</td>
													<td>10</td>
													<td>English</td>
													<td>10:00 AM</td>
													<td>01:00 PM</td>
													<td>23 Apr 2020</td>
													<td class="text-end">
														<div class="actions">
															<a href="javascript:;" class="btn btn-sm bg-success-light me-2">
																<i class="feather-eye"></i>
															</a>
															<a href="edit-time-table.html" class="btn btn-sm bg-danger-light">
																<i class="feather-edit"></i>
															</a>
														</div>
													</td>
												</tr>
												<tr>
													<td>PRE2209</td>
													<td>
														<h2 class="table-avatar">
															<a class="avatar avatar-sm me-2"><img class="avatar-img rounded-circle" src="assets/img/profiles/avatar-02.jpg" alt="User Image"></a>
															<a>Malynne</a>
														</h2>
													</td>
													<td>1</td>
													<td>Botony</td>
													<td>10:00 AM</td>
													<td>01:00 PM</td>
													<td>23 Apr 2020</td>
													<td class="text-end">
														<div class="actions">
															<a href="javascript:;" class="btn btn-sm bg-success-light me-2">
																<i class="feather-eye"></i>
															</a>
															<a href="edit-time-table.html" class="btn btn-sm bg-danger-light">
																<i class="feather-edit"></i>
															</a>
														</div>
													</td>
												</tr>
												<tr>
													<td>PRE2213</td>
													<td>
														<h2 class="table-avatar">
															<a class="avatar avatar-sm me-2"><img class="avatar-img rounded-circle" src="assets/img/profiles/avatar-03.jpg" alt="User Image"></a>
															<a>Levell Scott</a>
														</h2>
													</td>
													<td>9</td>
													<td>Biology</td>
													<td>01:00 PM</td>
													<td>04:00 PM</td>
													<td>26 Nov 2020</td>
													<td class="text-end">
														<div class="actions">
															<a href="javascript:;" class="btn btn-sm bg-success-light me-2">
																<i class="feather-eye"></i>
															</a>
															<a href="edit-time-table.html" class="btn btn-sm bg-danger-light">
																<i class="feather-edit"></i>
															</a>
														</div>
													</td>
												</tr>
												<tr>
													<td>PRE2143</td>
													<td>
														<h2 class="table-avatar">
															<a class="avatar avatar-sm me-2"><img class="avatar-img rounded-circle" src="assets/img/profiles/avatar-04.jpg" alt="User Image"></a>
															<a>Minnie</a>
														</h2>
													</td>
													<td>8</td>
													<td>Science</td>
													<td>01:00 PM</td>
													<td>04:00 PM</td>
													<td>18 Sep 2020</td>
													<td class="text-end">
														<div class="actions">
															<a href="javascript:;" class="btn btn-sm bg-success-light me-2">
																<i class="feather-eye"></i>
															</a>
															<a href="edit-time-table.html" class="btn btn-sm bg-danger-light">
																<i class="feather-edit"></i>
															</a>
														</div>
													</td>
												</tr>
												<tr>
													<td>PRE2009</td>
													<td>
														<h2 class="table-avatar">
															<a class="avatar avatar-sm me-2"><img class="avatar-img rounded-circle" src="assets/img/profiles/avatar-05.jpg" alt="User Image"></a>
															<a>Lois A</a>
														</h2>
													</td>
													<td>7</td>
													<td>History</td>
													<td>01:00 PM</td>
													<td>04:00 PM</td>
													<td>23 Jul 2020</td>
													<td class="text-end">
														<div class="actions">
															<a href="javascript:;" class="btn btn-sm bg-success-light me-2">
																<i class="feather-eye"></i>
															</a>
															<a href="edit-time-table.html" class="btn btn-sm bg-danger-light">
																<i class="feather-edit"></i>
															</a>
														</div>
													</td>
												</tr>
												<tr>
													<td>PRE2431</td>
													<td>
														<h2 class="table-avatar">
															<a class="avatar avatar-sm me-2"><img class="avatar-img rounded-circle" src="assets/img/profiles/avatar-06.jpg" alt="User Image"></a>
															<a>Calvin</a>
														</h2>
													</td>
													<td>2</td>
													<td>Biology</td>
													<td>10:00 AM</td>
													<td>01:00 PM</td>
													<td>15 Oct 2020</td>
													<td class="text-end">
														<div class="actions">
															<a href="javascript:;" class="btn btn-sm bg-success-light me-2">
																<i class="feather-eye"></i>
															</a>
															<a href="edit-time-table.html" class="btn btn-sm bg-danger-light">
																<i class="feather-edit"></i>
															</a>
														</div>
													</td>
												</tr>
												<tr>
													<td>PRE1534</td>
													<td>
														<h2 class="table-avatar">
															<a class="avatar avatar-sm me-2"><img class="avatar-img rounded-circle" src="assets/img/profiles/avatar-07.jpg" alt="User Image"></a>
															<a>Vincent</a>
														</h2>
													</td>
													<td>6</td>
													<td>Botony</td>
													<td>10:00 AM</td>
													<td>01:00 PM</td>
													<td>02 Jun 2020</td>
													<td class="text-end">
														<div class="actions">
															<a href="javascript:;" class="btn btn-sm bg-success-light me-2">
																<i class="feather-eye"></i>
															</a>
															<a href="edit-time-table.html" class="btn btn-sm bg-danger-light">
																<i class="feather-edit"></i>
															</a>
														</div>
													</td>
												</tr>
												<tr>
													<td>PRE2153</td>
													<td>
														<h2 class="table-avatar">
															<a class="avatar avatar-sm me-2"><img class="avatar-img rounded-circle" src="assets/img/profiles/avatar-08.jpg" alt="User Image"></a>
															<a>Kozma  Tatari</a>
														</h2>
													</td>
													<td>12</td>
													<td>Mathematics</td>
													<td>10:00 AM</td>
													<td>01:00 PM</td>
													<td>23 Apr 2020</td>
													<td class="text-end">
														<div class="actions">
															<a href="javascript:;" class="btn btn-sm bg-success-light me-2">
																<i class="feather-eye"></i>
															</a>
															<a href="edit-time-table.html" class="btn btn-sm bg-danger-light">
																<i class="feather-edit"></i>
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
					<p>Copyright © 2022 Dreamguys.</p>					
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