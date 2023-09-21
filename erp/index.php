<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
        <title>ERP - Dashboard</title>
		
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

		<!-- Calendar CSS -->
		<link rel="stylesheet" href="assets/plugins/simple-calendar/simple-calendar.css">
		
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
									<h3 class="page-title">Welcome Mani!</h3>
									<ul class="breadcrumb">
										<li class="breadcrumb-item"><a href="index.html">Home</a></li>
										<li class="breadcrumb-item active">Teacher</li>
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
											<h6>Total Classes</h6>
											<h3>04/06</h3>
										</div>	
										<div class="db-icon">
											<img  src="assets/img/icons/teacher-icon-01.svg"  alt="Dashboard Icon">
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
											<h6>Total Students</h6>
											<h3>70</h3>
										</div>
										<div class="db-icon">
											<img  src="assets/img/icons/dash-icon-01.svg"  alt="Dashboard Icon">
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
											<h6>Total Lessons</h6>
											<h3>30/50</h3>
										</div>	
										<div class="db-icon">
											<img  src="assets/img/icons/teacher-icon-02.svg"  alt="Dashboard Icon">
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
											<h6>Total Hours</h6>
											<h3>15/20</h3>
										</div>	
										<div class="db-icon">
											<img  src="assets/img/icons/teacher-icon-03.svg"  alt="Dashboard Icon">
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- /Overview Section -->				

					<!-- Teacher Dashboard -->
					<div class="row">
						<div class="col-12 col-lg-12 col-xl-8">

							<div class="row">
								<div class="col-12 col-lg-8 col-xl-8 d-flex">
									<div class="card flex-fill comman-shadow">
										<div class="card-header">
											<div class="row align-items-center">
												<div class="col-6">
													<h5 class="card-title">Upcoming Lesson</h5>
												</div>
												<div class="col-6">
													<span class="float-end view-link"><a href="#">View All Courses</a></span>
												</div>
											</div>						
										</div>
										<div class="pt-3 pb-3">
											<div class="table-responsive lesson">
												<table class="table table-center">
													<tbody>
														<tr>
															<td>
																<div class="date">
																	<b>Lessons 3</b>
																	<p>UI/UX</p>
																	<ul class="teacher-date-list">
																		<li><i class="fas fa-calendar-alt me-1"></i>Sep 5, 2022</li>
																		<li>| </li>
																		<li><i class="fas fa-clock me-1 "></i>09:00 - 10:00 am</li>
																		<li>| </li>
																		<li><i class="fas fa-clock me-1"></i>12th Class</li>
																	</ul>
																</div>
															</td>
															<td>
																<div class="lesson-confirm">
																	<a href="#">Confirmed</a>
																</div>
																<button type="submit" class="btn btn-info">Reschedule</button>
															</td>
														</tr>
														<tr>
															<td>
																<div class="date">
																	<b>Lessons 2</b>
																	<p>3.1 Web Development</p>
																	<ul class="teacher-date-list">
																		<li><i class="fas fa-calendar-alt me-1"></i>Sep 5, 2022</li>
																		<li>| </li>
																		<li><i class="fas fa-clock me-1"></i>09:00 - 10:00 am</li>
																		<li>| </li>
																		<li><i class="fas fa-clock me-1"></i>11th Class</li>
																	</ul>
																</div>
															</td>
															<td>
																<div class="lesson-confirm">
																	<a href="#">Confirmed</a>
																</div>
																<button type="submit" class="btn btn-info">Reschedule</button>
															</td>
														</tr>
													</tbody>
												</table>
											</div>
										</div>
									</div>
								</div>
								<div class="col-12 col-lg-4 col-xl-4 d-flex">
									<div class="card flex-fill comman-shadow">
										<div class="card-header">
											<div class="row align-items-center">
												<div class="col-12">
													<h5 class="card-title">Semester Progress</h5>
												</div>
											</div>						
										</div>
										<div class="dash-widget">
											<div class="circle-bar circle-bar1">
												<div class="circle-graph1" data-percent="47">
													<div class="progress-less">
														<b>25/60</b>
														<p>Lesson Completed</p>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="row">
								
								<div class="col-12 col-lg-12 col-xl-12 d-flex">
									<div class="card flex-fill comman-shadow">
										<div class="card-header d-flex align-items-center">
											<h5 class="card-title">Teaching History</h5>
											<ul class="chart-list-out student-ellips">
												<li class="star-menus"><a href="javascript:;"><i class="fas fa-ellipsis-v"></i></a></li>
											</ul>
										</div>
										<div class="card-body">
											<div class="teaching-card">
												<ul class="steps-history">
													<li>Sep22</li>
													<li>Sep23</li>
													<li>Sep24</li>
												</ul>
												<ul class="activity-feed">
													<li class="feed-item d-flex align-items-center">
														<div class="dolor-activity">
															<span class="feed-text1"><a>UI/UX</a></span>
															<ul class="teacher-date-list">
																<li><i class="fas fa-user-alt me-2"></i>September 5, 2022</li>
																<li>|</li>
																<li><i class="fas fa-clock me-2"></i>09:00 am - 10:00 am (60 Minutes)</li>
															</ul>
														</div>
														<div class="activity-btns ms-auto">
															<button type="submit" class="btn btn-info">In Progress</button>
														</div>
													</li>
													<li class="feed-item d-flex align-items-center">
														<div class="dolor-activity">
															<span class="feed-text1"><a>Web Development</a></span>
															<ul class="teacher-date-list">
																<li><i class="fas fa-calendar-alt me-2"></i>September 5, 2022</li>
																<li>|</li>
																<li><i class="fas fa-clock me-2"></i>09:00 am - 10:00 am (60 Minutes)</li>
															</ul>
														</div>
														<div class="activity-btns ms-auto">
															<button type="submit" class="btn btn-info">Completed</button>
														</div>
													</li>
													<li class="feed-item d-flex align-items-center">
														<div class="dolor-activity">
															<span class="feed-text1"><a>UI/UX</a></span>
															<ul class="teacher-date-list">
																<li><i class="fas fa-calendar-alt me-2"></i>September 5, 2022</li>
																<li>|</li>
																<li><i class="fas fa-clock me-2"></i>09:00 am - 10:00 am (60 Minutes)</li>
															</ul>
														</div>
														<div class="activity-btns ms-auto">
															<button type="submit" class="btn btn-info">In Progress</button>
														</div>
													</li>
												</ul>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>

						<div class="col-12 col-lg-12 col-xl-4 d-flex">
							<div class="card flex-fill comman-shadow">
								<div class="card-body">
									<div id="calendar-doctor" class="calendar-container"></div>
									<div class="calendar-info calendar-info1">
										<div class="up-come-header">
											<h2>Upcoming Events</h2>
											<span><a href="javascript:;"><i class="feather-plus"></i></a></span>
										</div>
										<div class="upcome-event-date">
											<h3>19 SEP</h3>
											<span><i class="fas fa-ellipsis-h"></i></span>
										</div>
										<div class="calendar-details">
											<p>10:40 am</p>
											<div class="calendar-box normal-bg">
												<div class="calandar-event-name">
													<h4>SIH</h4>
													<h5>PPT Presentation</h5>
												</div>
												<span>10:40 - 10:50 am</span>
											</div>
										</div>
										<div class="calendar-details">
											<p>02:00 pm</p>
											<div class="calendar-box normal-bg">
												<div class="calandar-event-name">
													<h4> Assignments</h4>
													<h5>Figma Assignments Correction</h5>
												</div>
												<span>02:00 - 03:00 pm</span>
											</div>
										</div>
										<div class="calendar-details">
											<p>03:30 pm</p>
											<div class="calendar-box normal-bg">
												<div class="calandar-event-name">
													<h4>Workshop</h4>
													<h5>Html Workshop </h5>
												</div>
												<span>03:30 - 04:00 pm</span>
											</div>
										</div>
										<div class="upcome-event-date">
											<h3>22 SEP</h3>
											<span><i class="fas fa-ellipsis-h"></i></span>
										</div>
										<div class="calendar-details">
											<p>09:30 am</p>
											<div class="calendar-box normal-bg">
												<div class="calandar-event-name">
													<h4>SIH HACKATHON</h4>
													<h5>SIH Internal Hackathon Start</h5>
												</div>
												<span>09:30 -   ----- am</span>
											</div>
										</div>
										<div class="calendar-details">
											<p>12:30 pm</p>
											<div class="calendar-box normal-bg">
												<div class="calandar-event-name">
													<h4>Peer Evaluation	</h4>
													<h5>Peer Evaluation of the teams</h5>
												</div>
												<span>12:30 - 2:30 pm</span>
											</div>
										</div>
										<div class="calendar-details">
											<p>3:00 pm</p>
											<div class="calendar-box normal-bg">
												<div class="calandar-event-name">
													<h4>Web-Site</h4>
													<h5>Website Development Work</h5>
												</div>
												<span>3:00 - 4:00 pm</span>
											</div>
										</div>
										<div class="calendar-details">
											<p>4:00 pm</p>
											<div class="calendar-box break-bg">
												<div class="calandar-event-name">
													<h4>PHP Online Class</h4>
													<h5>php online class for 12th class</h5>
												</div>
												<span>4:00 - 5:00 pm</span>
											</div>
										</div>
										
									</div>
								</div>
							</div>
						</div>	
					</div>
					<!-- /Teacher Dashboard -->
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
		
		<!-- Chart JS -->
		<script src="assets/plugins/apexchart/apexcharts.min.js"></script>
		<script src="assets/plugins/apexchart/chart-data.js"></script>

		<!-- Calendar Js -->
		<script src="assets/plugins/simple-calendar/jquery.simple-calendar.js"></script>
		<script src="assets/js/calander.js"></script>

		<!-- Circle Progress JS -->
		<script src="assets/js/circle-progress.min.js"></script>

		<!-- Custom JS -->
		<script src="assets/js/script.js"></script>
		
    </body>
</html>