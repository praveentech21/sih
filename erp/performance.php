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
		<!-- Chart Script -->
		<script src="https://cdn.plot.ly/plotly-latest.min.js"></script>

    </head>
    <body>

	<?php

		include 'connect.php';

		$teachers = mysqli_query($con, 'SELECT * FROM `quizes`group by courseid ');
		while ($row = mysqli_fetch_assoc($teachers)) {
			$avgassment = mysqli_fetch_assoc(mysqli_query($con, "SELECT *,avg(rating) as avg FROM `quizes` where courseid = '{$row['courseid']}' "))['avg'];
			// echo $avgassment."<br>";
			$feedbackdata = mysqli_fetch_assoc(mysqli_query($con, "SELECT *, avg(q1),avg(q2), avg(q3),avg(q4),avg(q5) FROM `feedback` where course = '{$row['teacher']}' "));

			$avg = ($feedbackdata['avg(q1)'] + $feedbackdata['avg(q2)'] + $feedbackdata['avg(q3)'] + $feedbackdata['avg(q4)'] + $feedbackdata['avg(q5)']) / 5;
			// echo $avg."<br>";
			// //I am Considering Student performabce as 50% and feedback as 50%
			$teacherscore = $avg / 2 + $avgassment / 2;
			// echo $teacherscore."<br>";
			mysqli_query($con, "UPDATE `teacher` SET `score`='$teacherscore' WHERE course = '{$row['teacher']}'");
		}

		include 'quizedata.php';

	?>	
		<!-- Main Wrapper -->
        <div class="main-wrapper">
		
			<?php include 'header.php' ?>
			
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

						<div class="col-xl-3 col-sm-6 col-12 d-flex">
							<div class="card bg-comman w-100">
								<div class="card-body">
									<div class="db-widgets d-flex justify-content-between align-items-center">
										<div class="db-info">
											<h6>Points</h6>
											<h3>3000</h3>
										</div>
										<div class="db-icon">
											<img  src="assets/img/icons/dash-icon-04.svg"  alt="Dashboard Icon">
										</div>
									</div>
								</div>
							</div>
						</div>
						
					</div>
					<!-- /Overview Section -->				

					<!-- <div class="row"> -->
						
						
						<!-- <div class="col-md-12 col-lg-6"> -->
						
							<!-- Student Chart -->
							<!-- <div class="card card-chart">
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
							</div> -->
							<!-- /Student Chart -->							
						<!-- </div>	 -->
						<!-- Chart -->
						<!-- <div class="col-md-6">	
							<div class="card">
								<div class="card-header">
									<h5 class="card-title">Your Growth</h5>
								</div>
								<div class="card-body">
								

								<div id="teacherGrowthChart" style="width:100%;max-width:700px"></div>

<script>
// Sample data for teacher growth by activity
const activities = ["Activity 1", "Activity 2", "Activity 3", "Activity 4", "Activity 5"];
const growthData = [10, 20, 15, 25, 30]; // Replace with actual growth data for each activity

// Define Data
const data = [{
  x: activities,
  y: growthData,
  type: "scatter",
  mode: "lines+markers",
  line: {
    shape: "spline", // Use spline interpolation for curved lines
    smoothing: 1.3, // Adjust the smoothing factor (higher values make it smoother)
  },
  marker: {
    size: 8, // Customize marker size
  },
}];

// Define Layout
const layout = {
  xaxis: { title: "Activities" },
  yaxis: { title: "Growth" },
  title: "Teacher Growth by Activity (Curved Line)",
};

// Display using Plotly
Plotly.newPlot("teacherGrowthChart", data, layout);
</script> -->

<!-- Include Plotly.js library -->
<!-- <script src="https://cdn.plot.ly/plotly-latest.min.js"></script> -->







								<!-- </div> -->
							<!-- </div> -->
						<!-- </div> -->
						<!-- /Chart -->
					<!-- </div> -->
					
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
		<!-- Chart Script Start-->
		<!-- Chart Script End -->
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

		<!-- Include Chart.js from CDN -->
        <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

		
    </body>
</html>