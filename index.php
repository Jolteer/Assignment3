<?php
// Function to calculate age based on date of birth
function calculate_age($dob) {
	$birthDate = new DateTime($dob);
	$currentDate = new DateTime();
	$age = $currentDate->diff($birthDate)->y;
	return $age;
}

// Function to display member information
function display_member_info($member, $index) {
	$age = calculate_age($member['dob']);
	echo '<header class="resume-header pt-4 pt-md-0">
		<div class="row">
			<div class="col-block col-md-auto resume-picture-holder text-center text-md-start">
				<img class="picture" src="assets/images/' . $member['member'] . '.jpg" style="height: 200px;" alt="Profile picture of ' . $member['member'] . '">
			</div><!--//col-->
			<div class="col">
				<div class="row p-4 justify-content-center justify-content-md-between">
					<div class="primary-info col-auto">
						<h1 class="name mt-0 mb-1 text-white text-uppercase">' . $member['member'] . ' - Age: ' . $age . '</h1>
						<div class="title mb-3">' . $member['title'] . '</div>
						<a href="detail.php?index=' . $index . '" class="btn btn-secondary">See full profile</a>
					</div><!--//primary-info-->
					<div class="secondary-info col-auto mt-2">
					</div><!--//secondary-info-->
				</div><!--//row-->
			</div><!--//col-->
		</div><!--//row-->
	</header>';
}

// INSERT DATA HERE.
$member_data = [
	[
		"member" => "Joshua Day",
		"title" => "Software Engineer",
		"dob" => "2003-10-30"
	],
	[
		"member" => "Sarah Lawson",
		"title" => "Senior Software Developer",
		"dob" => "1985-08-22"
	],
	[
		"member" => "Mark Stevens",
		"title" => "Data Analyst",
		"dob" => "1992-11-03"
	],
];
?>
<!DOCTYPE html>
<html lang="en"> 
<head>
	<title>Our amazing team</title>
	
	<!-- Meta -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="Our team members">
	<meta name="author" content="Your name">    
	<link rel="shortcut icon" href="favicon.ico"> 
	
	<!-- Google Font -->
	<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900" rel="stylesheet">
	
	<!-- FontAwesome JS-->
	<script defer src="assets/fontawesome/js/all.min.js"></script>
	   
	<!-- Theme CSS -->  
	<link id="theme-style" rel="stylesheet" href="assets/css/pillar-1.css">
</head> 

<body>
	<article class="resume-wrapper text-center position-relative">
		<div class="resume-wrapper-inner mx-auto text-start bg-white shadow-lg">
			<h1 class="py-4 text-center">OUR AMAZING TEAM</h1>
			<?php
				foreach ($member_data as $index => $member) {
					display_member_info($member, $index);
				}
			?>
		</div>
	</article> 

	<footer class="footer text-center pt-2 pb-5">
		<small class="copyright">Designed with <span class="sr-only">love</span><i class="fas fa-heart"></i> by Joshua Day</small>
	</footer>
</body>
</html>
