<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
        <title>Preskool - Teachers</title>
		
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
									<li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
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
											<div class="col-auto text-end float-end ms-auto download-grp">
												<a href="teachers.html" class="btn btn-outline-gray me-2 active"><i class="feather-list"></i></a>
												<a href="teachers-grid.html" class="btn btn-outline-gray me-2"><i class="feather-grid"></i></a>
												<a href="#" class="btn btn-outline-primary me-2"><i class="fas fa-download"></i> Download</a>
												<a href="add-teacher.html" class="btn btn-primary"><i class="fas fa-plus"></i></a>
											</div>
										</div>
									</div>
									<!-- /Page Header -->
									
									<div class="table-responsive">
										<table class="table border-0 star-student table-hover table-center mb-0 datatable table-striped">
											<thead class="student-thread">
												<tr>
													<th>
														<div class="form-check check-tables">
															<input class="form-check-input" type="checkbox"  value="something">
														</div>
													</th>
													<th>ID</th>
													<th>Name</th>
													<th>Class</th>
													<th>Gender</th>
													<th>Subject</th>
													<th>Section</th>
													<th>Mobile Number</th>
													<th>Address</th>
													<th class="text-end">Action</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td>
														<div class="form-check check-tables">
															<input class="form-check-input" type="checkbox"  value="something">
														</div>
													</td>
													<td>PRE2209</td>
													<td>
														<h2 class="table-avatar">
															<a href="teacher-details.html" class="avatar avatar-sm me-2"><img class="avatar-img rounded-circle" src="assets/img/profiles/avatar-02.jpg" alt="User Image"></a>
															<a href="teacher-details.html">Aaliyah</a>
														</h2>
													</td>
													<td>10</td>
													<td>Female</td>
													<td>Mathematics</td>
													<td>A</td>
													<td>097 3584 5870</td>
													<td>911 Deer Ridge Drive,USA</td>
													<td class="text-end">
														<div class="actions">
															<a href="javascript:;" class="btn btn-sm bg-success-light me-2">
																<i class="feather-eye"></i>
															</a>
															<a href="edit-teacher.html" class="btn btn-sm bg-danger-light">
																<i class="feather-edit"></i>
															</a>
														</div>
													</td>
												</tr>
												<tr>
													<td>
														<div class="form-check check-tables">
															<input class="form-check-input" type="checkbox"  value="something">
														</div>
													</td>
													<td>PRE2213</td>
													<td>
														<h2 class="table-avatar">
															<a href="teacher-details.html" class="avatar avatar-sm me-2"><img class="avatar-img rounded-circle" src="assets/img/profiles/avatar-03.jpg" alt="User Image"></a>
															<a href="teacher-details.html">Malynne</a>
														</h2>
													</td>
													<td>8</td>
													<td>Female</td>
													<td>Physics</td>
													<td>A</td>
													<td>242 362 3100</td>
													<td>Bacardi Rd P.O. Box N-4880, New Providence</td>
													<td class="text-end">
														<div class="actions">
															<a href="javascript:;" class="btn btn-sm bg-success-light me-2">
																<i class="feather-eye"></i>
															</a>
															<a href="edit-teacher.html" class="btn btn-sm bg-danger-light">
																<i class="feather-edit"></i>
															</a>
														</div>
													</td>
												</tr>
												<tr>
													<td>
														<div class="form-check check-tables">
															<input class="form-check-input" type="checkbox"  value="something">
														</div>
													</td>
													<td>PRE2143</td>
													<td>
														<h2 class="table-avatar">
															<a href="teacher-details.html" class="avatar avatar-sm me-2"><img class="avatar-img rounded-circle" src="assets/img/profiles/avatar-04.jpg" alt="User Image"></a>
															<a href="teacher-details.html">Levell Scott</a>
														</h2>
													</td>
													<td>10</td>
													<td>Male</td>
													<td>Science</td>
													<td>B</td>
													<td>026 7318 4366</td>
													<td>P.O. Box: 41, Gaborone</td>
													<td class="text-end">
														<div class="actions">
															<a href="javascript:;" class="btn btn-sm bg-success-light me-2">
																<i class="feather-eye"></i>
															</a>
															<a href="edit-teacher.html" class="btn btn-sm bg-danger-light">
																<i class="feather-edit"></i>
															</a>
														</div>
													</td>
												</tr>
												<tr>
													<td>
														<div class="form-check check-tables">
															<input class="form-check-input" type="checkbox"  value="something">
														</div>
													</td>
													<td>PRE2431</td>
													<td>
														<h2 class="table-avatar">
															<a href="teacher-details.html" class="avatar avatar-sm me-2"><img class="avatar-img rounded-circle" src="assets/img/profiles/avatar-05.jpg" alt="User Image"></a>
															<a href="teacher-details.html">Minnie</a>
														</h2>
													</td>
													<td>11</td>
													<td>Male</td>
													<td>History</td>
													<td>C</td>
													<td>952 512 4909</td>
													<td>4771  Oral Lake Road, Golden Valley</td>
													<td class="text-end">
														<div class="actions">
															<a href="javascript:;" class="btn btn-sm bg-success-light me-2">
																<i class="feather-eye"></i>
															</a>
															<a href="edit-teacher.html" class="btn btn-sm bg-danger-light">
																<i class="feather-edit"></i>
															</a>
														</div>
													</td>
												</tr>
												<tr>
													<td>
														<div class="form-check check-tables">
															<input class="form-check-input" type="checkbox"  value="something">
														</div>
													</td>
													<td>PRE1534</td>
													<td>
														<h2 class="table-avatar">
															<a href="teacher-details.html" class="avatar avatar-sm me-2"><img class="avatar-img rounded-circle" src="assets/img/profiles/avatar-06.jpg" alt="User Image"></a>
															<a href="teacher-details.html">Lois A</a>
														</h2>
													</td>
													<td>10</td>
													<td>Female</td>
													<td>English</td>
													<td>B</td>
													<td>413 289 1314</td>
													<td>2844 Leverton Cove Road, Palmer</td>
													<td class="text-end">
														<div class="actions">
															<a href="javascript:;" class="btn btn-sm bg-success-light me-2">
																<i class="feather-eye"></i>
															</a>
															<a href="edit-teacher.html" class="btn btn-sm bg-danger-light">
																<i class="feather-edit"></i>
															</a>
														</div>
													</td>
												</tr>
												<tr>
													<td>
														<div class="form-check check-tables">
															<input class="form-check-input" type="checkbox"  value="something">
														</div>
													</td>
													<td>PRE2153</td>
													<td>
														<h2 class="table-avatar">
															<a href="teacher-details.html" class="avatar avatar-sm me-2"><img class="avatar-img rounded-circle" src="assets/img/profiles/avatar-07.jpg" alt="User Image"></a>
															<a href="teacher-details.html">Calvin</a>
														</h2>
													</td>
													<td>9</td>
													<td>Male</td>
													<td>Mathematics</td>
													<td>C</td>
													<td>701 753 3810</td>
													<td>1900  Hidden Meadow Drive, Crete</td>
													<td class="text-end">
														<div class="actions">
															<a href="javascript:;" class="btn btn-sm bg-success-light me-2">
																<i class="feather-eye"></i>
															</a>
															<a href="edit-teacher.html" class="btn btn-sm bg-danger-light">
																<i class="feather-edit"></i>
															</a>
														</div>
													</td>
												</tr>
												<tr>
													<td>
														<div class="form-check check-tables">
															<input class="form-check-input" type="checkbox"  value="something">
														</div>
													</td>
													<td>PRE1434</td>
													<td>
														<h2 class="table-avatar">
															<a href="teacher-details.html" class="avatar avatar-sm me-2"><img class="avatar-img rounded-circle" src="assets/img/profiles/avatar-08.jpg" alt="User Image"></a>
															<a href="teacher-details.html">Vincent</a>
														</h2>
													</td>
													<td>10</td>
													<td>Male</td>
													<td>Mathematics</td>
													<td>C</td>
													<td>402 221 7523</td>
													<td>3979  Ashwood Drive, Omaha</td>
													<td class="text-end">
														<div class="actions">
															<a href="javascript:;" class="btn btn-sm bg-success-light me-2">
																<i class="feather-eye"></i>
															</a>
															<a href="edit-teacher.html" class="btn btn-sm bg-danger-light">
																<i class="feather-edit"></i>
															</a>
														</div>
													</td>
												</tr>
												<tr>
													<td>
														<div class="form-check check-tables">
															<input class="form-check-input" type="checkbox"  value="something">
														</div>
													</td>
													<td>PRE2345</td>
													<td>
														<h2 class="table-avatar">
															<a href="teacher-details.html" class="avatar avatar-sm me-2"><img class="avatar-img rounded-circle" src="assets/img/profiles/avatar-09.jpg" alt="User Image"></a>
															<a href="teacher-details.html">Kozma  Tatari</a>
														</h2>
													</td>
													<td>9</td>
													<td>Female</td>
													<td>Science</td>
													<td>A</td>
													<td>04 2239 968</td>
													<td>Rruga E Kavajes, Condor Center, Tirana</td>
													<td class="text-end">
														<div class="actions">
															<a href="javascript:;" class="btn btn-sm bg-success-light me-2">
																<i class="feather-eye"></i>
															</a>
															<a href="edit-teacher.html" class="btn btn-sm bg-danger-light">
																<i class="feather-edit"></i>
															</a>
														</div>
													</td>
												</tr>
												<tr>
													<td>
														<div class="form-check check-tables">
															<input class="form-check-input" type="checkbox"  value="something">
														</div>
													</td>
													<td>PRE2365</td>
													<td>
														<h2 class="table-avatar">
															<a href="teacher-details.html" class="avatar avatar-sm me-2"><img class="avatar-img rounded-circle" src="assets/img/profiles/avatar-10.jpg" alt="User Image"></a>
															<a href="teacher-details.html">John Chambers</a>
														</h2>
													</td>
													<td>11</td>
													<td>Male</td>
													<td>Botony</td>
													<td>B</td>
													<td>870 663 2334</td>
													<td>4667 Sunset Drive, Pine Bluff</td>
													<td class="text-end">
														<div class="actions">
															<a href="javascript:;" class="btn btn-sm bg-success-light me-2">
																<i class="feather-eye"></i>
															</a>
															<a href="edit-teacher.html" class="btn btn-sm bg-danger-light">
																<i class="feather-edit"></i>
															</a>
														</div>
													</td>
												</tr>
												<tr>
													<td>
														<div class="form-check check-tables">
															<input class="form-check-input" type="checkbox"  value="something">
														</div>
													</td>
													<td>PRE1234</td>
													<td>
														<h2 class="table-avatar">
															<a href="teacher-details.html" class="avatar avatar-sm me-2"><img class="avatar-img rounded-circle" src="assets/img/profiles/avatar-11.jpg" alt="User Image"></a>
															<a href="teacher-details.html">Nathan Humphries</a>
														</h2>
													</td>
													<td>10</td>
													<td>Male</td>
													<td>Biology</td>
													<td>A</td>
													<td>077 3499 9959</td>
													<td>86 Lamphey Road, Thelnetham</td>
													<td class="text-end">
														<div class="actions">
															<a href="javascript:;" class="btn btn-sm bg-success-light me-2">
																<i class="feather-eye"></i>
															</a>
															<a href="edit-teacher.html" class="btn btn-sm bg-danger-light">
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