<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <title>Preskool - Exam</title>
    
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
    
    <?php include 'header.php' ?>
    
        
        <!-- Page Wrapper -->
        <div class="page-wrapper">
            <div class="content container-fluid">
            
                <!-- Page Header -->
                <div class="page-header">
                    <div class="row align-items-center">
                        <div class="col">
                            <h3 class="page-title">Exam</h3>
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                                <li class="breadcrumb-item active">Exam</li>
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
                                            <h3 class="page-title">Exam</h3>
                                        </div>
                                    </div>
                                </div>
                                <!-- /Page Header -->
                                <div class="table-responsive">
                                    <table class="table border-0 star-student table-hover table-center mb-0 datatable table-striped">
                                        <thead class="student-thread">
                                            <tr>
                                                <th>Exam Name</th>
                                                <th>Class</th>
                                                <th>Section</th>
                                                <th>Date</th>
                                                <th class="text-end">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <h2>
                                                        <a>Class Test</a>
                                                    </h2>
                                                </td>
                                                <td>10</td>
                                                <td>English</td>
                                                
                                                <td>23 Apr 2020</td>
                                                <td class="text-end">
                                                    <div class="actions">
                                                        <a href="#" class="btn btn-sm bg-success-light me-2 open-modal" data-toggle="modal" data-target="#examModal">
                                                            <i class="feather-eye"></i>
                                                        </a>
                                                
                                                    </div>
                                                </td>
                                            </tr>
											<tr>
                                                <td>
                                                    <h2>
                                                        <a>Class Test</a>
                                                    </h2>
                                                </td>
                                                <td>10</td>
                                                <td>English</td>
                                                
                                                <td>23 Apr 2020</td>
                                                <td class="text-end">
                                                    <div class="actions">
                                                        <a href="#" class="btn btn-sm bg-success-light me-2 open-modal" data-toggle="modal" data-target="#examModal">
                                                            <i class="feather-eye"></i>
                                                        </a>
                                                
                                                    </div>
                                                </td>
                                            </tr>
											<tr>
                                                <td>
                                                    <h2>
                                                        <a>Class Test</a>
                                                    </h2>
                                                </td>
                                                <td>10</td>
                                                <td>English</td>
                                                
                                                <td>23 Apr 2020</td>
                                                <td class="text-end">
                                                    <div class="actions">
                                                        <a href="#" class="btn btn-sm bg-success-light me-2 open-modal" data-toggle="modal" data-target="#examModal">
                                                            <i class="feather-eye"></i>
                                                        </a>
                                                
                                                    </div>
                                                </td>
                                            </tr>
											<tr>
                                                <td>
                                                    <h2>
                                                        <a>Class Test</a>
                                                    </h2>
                                                </td>
                                                <td>10</td>
                                                <td>English</td>
                                                
                                                <td>23 Apr 2020</td>
                                                <td class="text-end">
                                                    <div class="actions">
                                                        <a href="#" class="btn btn-sm bg-success-light me-2 open-modal" data-toggle="modal" data-target="#examModal">
                                                            <i class="feather-eye"></i>
                                                        </a>
                                                
                                                    </div>
                                                </td>
                                            </tr>
											
                                            <!-- Add more exam rows here -->
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>                          
                    </div>                  
                </div>                  
            </div>

            <!-- Modal Start -->
			<div class="modal fade" id="examModal" tabindex="-1" role="dialog" aria-labelledby="examModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-xl" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="examModalLabel">Exam Details</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <!-- Table to display static exam details -->
                <div class="table-responsive">
										<table class="table border-0 star-student table-hover table-center mb-0 datatable table-striped">
											<thead class="student-thread">
												<tr>
													<th>ID</th>
													<th>Name</th>
													<th>Gender</th>
													<th>Class</th>
													<th>Section</th>
													<th>Marks</th>
													<th class="text-end">Status</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td>21B91A6256</td>
													<td>
														<h2 class="table-avatar">
															<a class="avatar avatar-sm me-2"><img class="avatar-img rounded-circle" src="assets/img/profiles/avatar-01.jpg" alt="User Image"></a>
															<a>Ravi</a>
														</h2>
													</td>
													<td>Male</td>
													<td>12th</td>
													<td>A</td>
													<td>90</td>
													<td class="text-end">
														<span class="badge badge-success">Pass</span>
													</td>
												</tr>
												<tr>
												<tr>
													<td>21B91A6205</td>
													<td>
														<h2 class="table-avatar">
															<a class="avatar avatar-sm me-2"><img class="avatar-img rounded-circle" src="assets/img/profiles/avatar-01.jpg" alt="User Image"></a>
															<a>Rohit</a>
														</h2>
													</td>
													<td>Male</td>
													<td>12th</td>
													<td>A</td>
													<td>10</td>
													<td class="text-end">
														<span class="badge badge-danger">Fail</span>
													</td>
												</tr>
												<tr>
												<tr>
													<td>21B91A6219</td>
													<td>
														<h2 class="table-avatar">
															<a class="avatar avatar-sm me-2"><img class="avatar-img rounded-circle" src="assets/img/profiles/avatar-01.jpg" alt="User Image"></a>
															<a>Ganesh</a>
														</h2>
													</td>
													<td>Male</td>
													<td>12th</td>
													<td>A</td>
													<td>90</td>
													<td class="text-end">
														<span class="badge badge-success">Pass</span>
													</td>
												</tr>
												<tr>
												<tr>
													<td>21B91A6202</td>
													<td>
														<h2 class="table-avatar">
															<a class="avatar avatar-sm me-2"><img class="avatar-img rounded-circle" src="assets/img/profiles/avatar-01.jpg" alt="User Image"></a>
															<a>Sai</a>
														</h2>
													</td>
													<td>Male</td>
													<td>12th</td>
													<td>A</td>
													<td>20</td>
													<td class="text-end">
														<span class="badge badge-danger">Fail</span>
													</td>
												</tr>
												<tr>
												<tr>
													<td>21B91A6256</td>
													<td>
														<h2 class="table-avatar">
															<a class="avatar avatar-sm me-2"><img class="avatar-img rounded-circle" src="assets/img/profiles/avatar-01.jpg" alt="User Image"></a>
															<a>Yaswanth</a>
														</h2>
													</td>
													<td>Male</td>
													<td>12th</td>
													<td>A</td>
													<td>80</td>
													<td class="text-end">
														<span class="badge badge-danger">Pass</span>
													</td>
												</tr>
												<tr>
												<tr>
													<td>21B91A6207</td>
													<td>
														<h2 class="table-avatar">
															<a class="avatar avatar-sm me-2"><img class="avatar-img rounded-circle" src="assets/img/profiles/avatar-01.jpg" alt="User Image"></a>
															<a>Vivek</a>
														</h2>
													</td>
													<td>Male</td>
													<td>12th</td>
													<td>A</td>
													<td>78</td>
													<td class="text-end">
														<span class="badge badge-danger">Pass</span>
													</td>
												</tr>
											</tbody>
										</table>
									</div>
            </div>
            <div class="modal-footer">
                <a href="exam.php"><button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button></a>
            </div>
        </div>
    </div>
</div>
<!-- Modal End  -->
                
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
			
            
            <!-- Custom JavaScript to open the modal -->
			<script>
    $(document).ready(function () {
        $('.open-modal').on('click', function (e) {
            e.preventDefault(); // Prevent the default link behavior

            // Open the modal
            $('#examModal').modal('show');
        });
    });
</script>
        </div>
        <!-- /Page Wrapper -->
        
    </div>
    <!-- /Main Wrapper -->
</body>
</html>
