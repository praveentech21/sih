<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
        <title>Preskool - Students</title>
		
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
						<div class="row">
							<div class="col-sm-12">
								<div class="page-sub-header">
									<h3 class="page-title">Students</h3>
									<ul class="breadcrumb">
										<li class="breadcrumb-item"><a href="students.html">Student</a></li>
										<li class="breadcrumb-item active">All Students</li>
									</ul>
								</div>
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
						
							<div class="card card-table comman-shadow">
								<div class="card-body">
								
									<!-- Page Header -->
									<div class="page-header">
										<div class="row align-items-center">
											<div class="col">
												<h3 class="page-title">Students</h3>
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
													<th>DOB</th>
													<th>Parent Name</th>
													<th>Mobile Number</th>
													<th>Address</th>
													<th class="text-end">Action</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													
													<td>21B91A6207</td>
													<td>
														<h2 class="table-avatar">
															<a href="student-details.html" class="avatar avatar-sm me-2"><img class="avatar-img rounded-circle" src="assets/img/profiles/avatar-01.jpg" alt="User Image"></a>
															<a href="student-details.html">Anusha</a>
														</h2>
													</td>
													<td>10th</td>
													<td>2 Feb 2003</td>
													<td>Ravi Kumar</td>
													<td>9666525443</td>
													<td>4/12,Kalidhindi</td>
													<td class="text-end">
														<div class="actions ">
															<a href="student-details.php" class="btn btn-sm bg-success-light me-2 ">
																<i class="feather-eye"></i>
															</a>
														</div>
													</td>
												</tr>
												<tr>
													
													<td>21B91A6206</td>
													<td>
														<h2 class="table-avatar">
															<a href="student-details.html" class="avatar avatar-sm me-2"><img class="avatar-img rounded-circle" src="assets/img/profiles/avatar-03.jpg" alt="User Image"></a>
															<a href="student-details.html">Ravi Kumar</a>
														</h2>
													</td>
													<td>8th</td>
													<td>3 June 2003</td>
													<td>Vivek</td>
													<td>9052727402</td>
													<td>5-12,Tholeru</td>
													<td class="text-end">
														<div class="actions ">
															<a href="javascript:;" class="btn btn-sm bg-success-light me-2 ">
																<i class="feather-eye"></i>
															</a>
															
														</div>
													</td>
												</tr>
												<tr>
													
													<td>21B91A6219</td>
													<td>
														<h2 class="table-avatar">
															<a href="student-details.html" class="avatar avatar-sm me-2"><img class="avatar-img rounded-circle" src="assets/img/profiles/avatar-02.jpg" alt="User Image"></a>
															<a href="student-details.html">Ganesh</a>
														</h2>
													</td>
													<td>12</td>
													<td>12 Apr 2002</td>
													<td>Mani</td>
													<td>9640336946</td>
													<td>8.12,Sisali</td>
													<td class="text-end">
														<div class="actions ">
															<a href="javascript:;" class="btn btn-sm bg-success-light me-2 ">
																<i class="feather-eye"></i>
															</a>
															
														</div>
													</td>
												</tr>
												<tr>
													
													<td>21B91A6210</td>
													<td>
														<h2 class="table-avatar">
															<a href="student-details.html" class="avatar avatar-sm me-2"><img class="avatar-img rounded-circle" src="assets/img/profiles/avatar-03.jpg" alt="User Image"></a>
															<a href="student-details.html">Mani</a>
														</h2>
													</td>
													<td>11 C</td>
													<td>24 Feb 2000</td>
													<td>Sai</td>
													<td>8008009725</td>
													<td>4-71,Palakol</td>
													<td class="text-end">
														<div class="actions ">
															<a href="javascript:;" class="btn btn-sm bg-success-light me-2 ">
																<i class="feather-eye"></i>
															</a>
															
														</div>
													</td>
												</tr>
												<tr>
													
													<td>21B91A6205</td>
													<td>
														<h2 class="table-avatar">
															<a href="student-details.html" class="avatar avatar-sm me-2"><img class="avatar-img rounded-circle" src="assets/img/profiles/avatar-04.jpg" alt="User Image"></a>
															<a href="student-details.html">Rohit</a>
														</h2>
													</td>
													<td>10 A</td>
													<td>22 Jul 2006</td>
													<td>Rohit</td>
													<td>6300278963</td>
													<td>28-44, Killam</td>
													<td class="text-end">
														<div class="actions ">
															<a href="javascript:;" class="btn btn-sm bg-success-light me-2 ">
																<i class="feather-eye"></i>
															</a>
															
														</div>
													</td>
												</tr>
												<tr>
													
													<td>21B91A6258</td>
													<td>
														<h2 class="table-avatar">
															<a href="student-details.html" class="avatar avatar-sm me-2"><img class="avatar-img rounded-circle" src="assets/img/profiles/avatar-05.jpg" alt="User Image"></a>
															<a href="student-details.html">Harsha</a>
														</h2>
													</td>
													<td>9 B</td>
													<td>8 Dec 2003</td>
													<td>Krishna</td>
													<td>8984858681</td>
													<td>19-10, Mulanka</td>
													<td class="text-end">
														<div class="actions ">
															<a href="javascript:;" class="btn btn-sm bg-success-light me-2 ">
																<i class="feather-eye"></i>
															</a>
															
														</div>
													</td>
												</tr>
												<tr>
													
													<td>21B91A6258</td>
													<td>
														<h2 class="table-avatar">
															<a href="student-details.html" class="avatar avatar-sm me-2"><img class="avatar-img rounded-circle" src="assets/img/profiles/avatar-06.jpg" alt="User Image"></a>
															<a href="student-details.html">Vikranth Rona</a>
														</h2>
													</td>
													<td>11 C</td>
													<td>7 Oct 2000</td>
													<td>Siva Sai</td>
													<td>8584838281</td>
													<td>Block B,Jp Road,Bhimavaram</td>
													<td class="text-end">
														<div class="actions ">
															<a href="javascript:;" class="btn btn-sm bg-success-light me-2 ">
																<i class="feather-eye"></i>
															</a>
															
														</div>
													</td>
												</tr>
												<tr>
													
													<td>21B91A6232</td>
													<td>
														<h2 class="table-avatar">
															<a href="student-details.html" class="avatar avatar-sm me-2"><img class="avatar-img rounded-circle" src="assets/img/profiles/avatar-07.jpg" alt="User Image"></a>
															<a href="student-details.html">Prudhvi</a>
														</h2>
													</td>
													<td>10 A</td>
													<td>4 Jan 2002</td>
													<td>Sanju</td>
													<td>9640336946</td>
													<td>Near KFC,Bhimavaram</td>
													<td class="text-end">
														<div class="actions ">
															<a href="javascript:;" class="btn btn-sm bg-success-light me-2 ">
																<i class="feather-eye"></i>
															</a>
															
														</div>
													</td>
												</tr>
												<tr>
													
													<td>21B91A6220</td>
													<td>
														<h2 class="table-avatar">
															<a href="student-details.html" class="avatar avatar-sm me-2"><img class="avatar-img rounded-circle" src="assets/img/profiles/avatar-08.jpg" alt="User Image"></a>
															<a href="student-details.html">Sanju</a>
														</h2>
													</td>
													<td>9 A</td>
													<td>1 Feb 2006</td>
													<td>Ravi</td>
													<td>9346998660</td>
													<td>Bandhan Bank, Bhimavaram</td>
													<td class="text-end">
														<div class="actions ">
															<a href="javascript:;" class="btn btn-sm bg-success-light me-2 ">
																<i class="feather-eye"></i>
															</a>
															
														</div>
													</td>
												</tr>
												<tr>
													
													<td>21B91A6214</td>
													<td>
														<h2 class="table-avatar">
															<a href="student-details.html" class="avatar avatar-sm me-2"><img class="avatar-img rounded-circle" src="assets/img/profiles/avatar-09.jpg" alt="User Image"></a>
															<a href="student-details.html">Satwik</a>
														</h2>
													</td>
													<td>11 B</td>
													<td>13 Sept 2003</td>
													<td>Rohit</td>
													<td>9594493339</td>
													<td>1-123,Rajamundry</td>
													<td class="text-end">
														<div class="actions ">
															<a href="javascript:;" class="btn btn-sm bg-success-light me-2 ">
																<i class="feather-eye"></i>
															</a>
															
														</div>
													</td>
												</tr>
												<tr>
													
													<td>PRE1234</td>
													<td>
														<h2 class="table-avatar">
															<a href="student-details.html" class="avatar avatar-sm me-2"><img class="avatar-img rounded-circle" src="assets/img/profiles/avatar-10.jpg" alt="User Image"></a>
															<a href="student-details.html">Nathan Humphries</a>
														</h2>
													</td>
													<td>10 B</td>
													<td>26 Apr 1994</td>
													<td>Stephen Marley</td>
													<td>077 3499 9959</td>
													<td>86 Lamphey Road, Thelnetham</td>
													<td class="text-end">
														<div class="actions ">
															<a href="javascript:;" class="btn btn-sm bg-success-light me-2 ">
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