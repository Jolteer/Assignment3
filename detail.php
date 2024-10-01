<?php

function calculate_age($dob) {
    $birthDate = new DateTime($dob);
    $currentDate = new DateTime();
    $age = $currentDate->diff($birthDate)->y;
    return $age;
}
function displayWorkExperience($experience) {
    $output = '';
    foreach ($experience as $job) {
        $output .= '
            <div class="resume-timeline-item-header mb-2">
                <div class="d-flex flex-column flex-md-row">
                    <h3 class="resume-position-title font-weight-bold mb-1">' . $job['job-title'] . '</h3>
                    <div class="resume-company-name ms-auto">' . $job['company'] . '</div>
                </div><!--//row-->
                <div class="resume-position-time">' . $job['date'] . '</div>
            </div><!--//resume-timeline-item-header-->
            <div class="resume-timeline-item-desc">
                <p>' . $job['description'] . '</p>
                <h4 class="resume-timeline-item-desc-heading font-weight-bold">Achievements:</h4>
                <p>' . $job['achievements_summary'] . '</p>
                <ul>';
        foreach ($job['accomplishments'] as $accomplishment) {
            $output .= '
                <li>' . $accomplishment . '</li>';
        }
        $output .= '
                </ul>
                <h4 class="resume-timeline-item-desc-heading font-weight-bold">Technologies used:</h4>
                <ul class="list-inline">';
        foreach ($job['technologies'] as $technology) {
            $output .= '
                <li class="list-inline-item"><span class="badge bg-secondary badge-pill">' . $technology . '</span></li>';
        }
        $output .= '
                </ul>
            </div><!--//resume-timeline-item-desc-->';
    }
    return $output;
}
// INSERT DATA HERE.
$resume_data = [
	[
		"member" => "Joshua Day",
	    "dob" => "2003-10-30",
		"title" => "Software Engineer",
		"summary" => "I am a 3rd year student at Northern Kentucky University majoring in applied software engineering with a minor in cybersecurity. I am currently employed as a certified pharmacy technician at Kroger Pharmacies. Some fun facts about me are I Love Sports. I'm a huge dog person. As well as I'm in a fraternity currently called Theta Chi.",
		"picture_height" => "150px",
		"contacts" => [
			"phone" => "502-514-7670",
			"email" => "Joshua.day30@gmail.com",
			"linkedin" => "https://www.linkedin.com/in/joshuamday7/", 
			"linkedin_link" => "https://www.linkedin.com/in/joshuamday7/", 
			"github" => "https://github.com/Jolteer",
			"social" => "https://www.linkedin.com/in/joshuamday7/"
		],

		"experience" => [
			[
				"job-title" => "Lead Developer",
				"company" => "Startup Hub",
				"date" => "2023 - Present",
				"description" => "Role description goes here ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Donec pede justo, fringilla vel.",
				"achievements_summary" => "Praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident.",
				"accomplishments" => [
					"Lorem ipsum dolor sit amet, 80% consectetuer adipiscing elit.",
					"At vero eos et accusamus et iusto odio dignissimos",
					"Blanditiis praesentium voluptatum deleniti atque corrupti.",
					"Maecenas tempus tellus eget.",
					"Facilitated the construction of networks for new or existing clients through installation and configuration of networking devices onsite."
				],
				"technologies" => [
					"Angular",
					"Python",
					"jQuery",
					"Webpack",
					"HTML/SASS",
					"PostgresSQL"
				],
			],

		],

		"skills" => [
			"main_skills" => [
				[
					"name" => "Python",
					"value" => 80
				],
				[
					"name" => "javascript",
					"value" => 50
				],
				[
					"name" => "HTML",
					"value" => 60
				],
				[
					"name" => "web development",	
					"value" => 70
				],
				[
					"name" => "jquery",
					"value" => 75
				],
			],

			"other_skills" => [
				"CSS",
				"SQL",
				"React",
				"Node.js",
				"Express.js",
				"MongoDB"
			],
		],
		
		"education" => [
			[
				"degree" => "Software Engineering",
				"institution" => "Northern Kentucky University",
				"date" => "2022 - Current"
			],
			[
				"degree" => "Cybersecurity",
				"institution" => "Northern Kentucky University",
				"date" => "March 21, 2024"
			],

		],
	

		"awards" => [
			[
				"award" => "NKU Academic Scholarship",
				"description" => "Scholarship awarded to those of great Academic standing."
			],
			[
				"award" => "Cum laude",
				"description" => "Had a GPA above 3.75 in High School."
			],
		],

		"languages" => [
			[
				"language" => "English",
				"level" => "(Native)"
			],
			[
				"language" => "Spanish",
				"level" => "Beginner"
			],
		],

		"interests" => [
			"Basketball",
			"Football",
			"Video Games"
		],

		"projects" => [
			[
				"name" => "Dog Shelter Project",
				"description" => "Project i did with some buddies building a website for a local dog shelter.",
				"link" => "",
				"picture" => "dog_shelter.png"
			],

		],
	],

	[
		"member" => "Sarah Lawson",
	    "dob" => "1985-08-22",
		"title" => "Senior Software Developer",
		"summary" => "As a Senior Software Developer at Turing Technologies, I lead the design and development of web applications, focusing on high scalability and maintainability. With a background in computer science and over seven years of industry experience, I have mastered a variety of programming languages and frameworks. I specialize in full-stack development and am passionate about developing clean and efficient code. I thrive in collaborative environments and aim to provide technical mentorship while continuously expanding my knowledge in the field.",
		"picture_height" => "150px",
		"contacts" => [
			"phone" => "4085551234",
			"email" => "sarah.lawson@turingtech.com",
			"linkedin" => "https://www.linkedin.com/in/sarah-lawson", 
			"linkedin_link" => "https://www.linkedin.com/in/sarah-lawson-fullstackdev/", 
			"github" => "https://github.com/sarahlawson",
			"social" => "https://x.com/sarah_lawson"
		],
	
		"experience" => [
			[
				"job-title" => "Senior Software Developer",
				"company" => "Turing Technologies",
				"date" => "March 2021 - Current",
				"description" => "Leading a team of developers in the creation of web applications using React, Node.js, and MongoDB. Responsibilities include designing RESTful APIs, managing cloud infrastructure on AWS, and implementing CI/CD pipelines.",
				"achievements_summary" => "Driving innovation in development processes and delivering high-quality software solutions for clients.",
				"accomplishments" => [
					"Led a project to develop a real-time collaboration tool, used by over 50,000 users globally.",
					"Optimized application performance, reducing load times by 40%.",
					"Implemented automated testing frameworks, increasing codebase reliability and reducing bug rates by 30%."
				],
				"technologies" => [
					"React",
					"Node.js",
					"MongoDB",
					"AWS",
					"Jenkins",
					"GraphQL"
				],
			],
			[
				"job-title" => "Software Developer",
				"company" => "AlphaCode",
				"date" => "June 2017 - March 2021",
				"description" => "Developed and maintained back-end services using Python and Django. Worked closely with front-end developers to create seamless integrations for e-commerce solutions.",
				"achievements_summary" => "Collaborated in building high-traffic web applications for leading retail brands.",
				"accomplishments" => [
					"Developed an order management system that improved processing speed by 50%.",
					"Contributed to the redesign of a large-scale e-commerce platform, improving user engagement and conversions.",
					"Reduced server response times by optimizing database queries."
				],
				"technologies" => [
					"Python",
					"Django",
					"PostgreSQL",
					"Redis",
					"REST APIs"
				],
			]
		],
	
		"skills" => [
			"main_skills" => [
				[
					"name" => "JavaScript",
					"value" => 85
				],
				[
					"name" => "Python",
					"value" => 80
				],
				[
					"name" => "Cloud Architecture",
					"value" => 70
				],
				[
					"name" => "DevOps",
					"value" => 65
				],
				[
					"name" => "Web Security",
					"value" => 75
				],
			],
	
			"other_skills" => [
				"API Development",
				"SQL",
				"Data Structures",
				"Unit Testing",
				"CI/CD",
				"Git"
			],
		],
	
		"education" => [
			[
				"degree" => "B.S. in Computer Science",
				"institution" => "University of California, Berkeley",
				"date" => "2012 - 2016"
			],
		],
	
		"awards" => [
			[
				"award" => "Excellence in Software Development",
				"description" => "Awarded for outstanding contributions to the company's flagship product."
			],
		],
	
		"languages" => [
			[
				"language" => "English",
				"level" => "(Native)"
			],
			[
				"language" => "French",
				"level" => "(Intermediate)"
			],
		],
	
		"interests" => [
			"AI Research",
			"Hiking",
			"Reading Tech Blogs"
		],
	
		"projects" => [
			[
				"name" => "Project Management Tool",
				"description" => "Developed an internal project management tool for Turing Technologies.",
				"link" => "project_tool.html",
				"picture" => "pm_tool.png"
			],
		],
	],

	[
		"member" => "Mark Stevens",
	    "dob" => "1992-11-03",
		"title" => "Data Analyst",
		"summary" => "I am a Data Analyst with over five years of experience analyzing large datasets and providing actionable insights for businesses. Skilled in SQL, Python, and various data visualization tools, I have a proven track record of delivering accurate and timely data reports that drive business decisions. My experience spans industries such as finance, e-commerce, and healthcare, where I have excelled in automating reports, improving data accuracy, and contributing to data-driven strategies.",
		"picture_height" => "150px",
		"contacts" => [
			"phone" => "3125557890",
			"email" => "mark.stevens@analyticsinc.com",
			"linkedin" => "https://www.linkedin.com/in/mark-stevens", 
			"linkedin_link" => "https://www.linkedin.com/in/mark-stevens-dataanalyst/", 
			"github" => "https://github.com/markstevens",
			"social" => "https://x.com/mark_stevens"
		],
	
		"experience" => [
			[
				"job-title" => "Data Analyst",
				"company" => "Analytics Inc.",
				"date" => "January 2020 - Current",
				"description" => "Analyzing data to create business insights for e-commerce and retail clients, using SQL and Python to extract, clean, and analyze large datasets. Created visual reports using Tableau and Power BI to help clients understand key business trends.",
				"achievements_summary" => "Contributed to business growth by offering data-backed solutions for decision-making.",
				"accomplishments" => [
					"Reduced client churn by 15% through predictive modeling and customer segmentation analysis.",
					"Automated weekly sales reports, saving the team over 20 hours per month.",
					"Developed dashboards to visualize key performance indicators, improving management oversight."
				],
				"technologies" => [
					"SQL",
					"Python",
					"Tableau",
					"Power BI",
					"Excel"
				],
			],
			[
				"job-title" => "Junior Data Analyst",
				"company" => "FinData Solutions",
				"date" => "June 2017 - January 2020",
				"description" => "Worked with the finance department to gather, analyze, and interpret financial data. Assisted in the preparation of monthly financial reports and used SQL to optimize queries for data extraction.",
				"achievements_summary" => "Supported the finance team with timely and accurate data reporting.",
				"accomplishments" => [
					"Created an automated budget tracking tool using Python, reducing manual work by 30%.",
					"Improved the accuracy of financial reports by implementing error-checking procedures.",
					"Assisted in forecasting revenue trends using historical data analysis."
				],
				"technologies" => [
					"SQL",
					"Python",
					"Excel",
					"R"
				],
			]
		],
	
		"skills" => [
			"main_skills" => [
				[
					"name" => "SQL",
					"value" => 85
				],
				[
					"name" => "Python",
					"value" => 80
				],
				[
					"name" => "Data Visualization",
					"value" => 75
				],
				[
					"name" => "Machine Learning",
					"value" => 65
				],
			],
	
			"other_skills" => [
				"Data Cleaning",
				"ETL",
				"Tableau",
				"Power BI",
				"Excel"
			],
		],
	
		"education" => [
			[
				"degree" => "B.S. in Data Science",
				"institution" => "University of Illinois",
				"date" => "2013 - 2017"
			],
		],
	
		"awards" => [
			[
				"award" => "Data Science Excellence Award",
				"description" => "Recognized for outstanding contributions to a high-profile data analytics project."
			],
		],
	
		"languages" => [
			[
				"language" => "English",
				"level" => "(Native)"
			],
		],
	
		"interests" => [
			"Data Science Competitions",
			"Traveling",
			"Basketball"
		],
	
		"projects" => [
			[
				"name" => "Customer Churn Prediction Model",
				"description" => "Built a predictive model for customer churn using Python and machine learning algorithms.",
				"link" => "churn_model.py",
				"picture" => "churn.png"
			],
		],
	],
	
];
$index=$_GET['index'];
$resume_intro = $resume_data[$index];
$resume_contacts = $resume_intro['contacts'];
?>
<!DOCTYPE html>
<html lang="en"> 
<head>
    <title>Your name's Resume</title>
    
    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Your name's resume">
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
		<?php /* Only the following line changed from the file in the previous assignment */ ?>
		<div class="mb-4"><a href="index.php" class="btn btn-primary">Back to index</a></div>
	    <div class="resume-wrapper-inner mx-auto text-start bg-white shadow-lg">
		    <header class="resume-header pt-4 pt-md-0">
			    <div class="row">
				    <div class="col-block col-md-auto resume-picture-holder text-center text-md-start">
				        <img class="picture" style="max-height: 220px;" src="assets/images/<?=$resume_intro['member']?>.jpg" alt="">
				    </div><!--//col-->
				    <div class="col">
					    <div class="row p-4 justify-content-center justify-content-md-between">
						<div class="primary-info col-auto">
    					<h1 class="name mt-0 mb-1 text-white text-uppercase"><?=$resume_intro['member']?></h1>
    					<div class="title mb-3"><?=$resume_intro['title']?></div>
    					<div class="age">Age: <?=calculate_age($resume_intro['dob'])?></div>
    					<ul class="list-unstyled">
        <li class="mb-2"><a class="text-link" href="#"><i class="far fa-envelope fa-fw me-2" data-fa-transform="grow-3"></i><?=$resume_contacts['email']?></a></li>
        <li><a class="text-link" href="#"><i class="fas fa-mobile-alt fa-fw me-2" data-fa-transform="grow-6"></i><?=$resume_contacts['phone']?></a></li>
    </ul>
						    </div><!--//primary-info-->
						    <div class="secondary-info col-auto mt-2">
							    <ul class="resume-social list-unstyled">
					                <li class="mb-3"><a class="text-link" href="<?=$resume_contacts['linkedin_link']?>"><span class="fa-container text-center me-2"><i class="fab fa-linkedin-in fa-fw"></i></span><?=$resume_contacts['linkedin']?></a></li>
					                <li class="mb-3"><a class="text-link" href="<?=$resume_contacts['github']?>"><span class="fa-container text-center me-2"><i class="fab fa-github-alt fa-fw"></i></span><?=$resume_contacts['github']?></a></li>
					                <li><a class="text-link" href="<?=$resume_contacts['social']?>"><span class="fa-container text-center me-2"><i class="fas fa-globe"></i></span><?=$resume_contacts['social']?></a></li>
							    </ul>
						    </div><!--//secondary-info-->
					    </div><!--//row-->
					    
				    </div><!--//col-->
			    </div><!--//row-->
		    </header>
		    <div class="resume-body p-5">
			    <section class="resume-section summary-section mb-5">
				    <h2 class="resume-section-title text-uppercase font-weight-bold pb-3 mb-3">Summary</h2>
				    <div class="resume-section-content">
					    <p class="mb-0"><?=$resume_intro['summary']?></p>
				    </div>
			    </section><!--//summary-section-->
			    <div class="row">
				    <div class="col-lg-9">
					    <section class="resume-section experience-section mb-5">
						    <h2 class="resume-section-title text-uppercase font-weight-bold pb-3 mb-3">Work Experience</h2>
						    <div class="resume-section-content">
							    <div class="resume-timeline position-relative">
								    <article class="resume-timeline-item position-relative pb-5">
									    <?php
										$member = $resume_data[$index];
										$member_jobs = $member['experience'];
										echo displayWorkExperience($member_jobs);
										?>
								    </article>
							    </div>
						    </div>
					    </section>
				    </div>
				    <div class="col-lg-3">
					    <section class="resume-section skills-section mb-5">
						    <h2 class="resume-section-title text-uppercase font-weight-bold pb-3 mb-3">Skills &amp; Tools</h2>
						    <div class="resume-section-content">
						        <div class="resume-skill-item">
							        <ul class="list-unstyled mb-4">
										<?php
										for ($t = 0; $t < count($member['skills']['main_skills']); $t++){
										echo'
								        <li class="mb-2">
								            <div class="resume-skill-name">' . $member['skills']['main_skills'][$t]['name'] . '</div>
									        <div class="progress resume-progress">
											    <div class="progress-bar theme-progress-bar-dark" role="progressbar" style="width:' . $member['skills']['main_skills'][$t]['value'] . '%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
											</div>
								        </li>';
										}
										?>
							        </ul>
						        </div>
						        <div class="resume-skill-item">
						            <h4 class="resume-skills-cat font-weight-bold">Others</h4>
						            <ul class="list-inline">
										<?php
										for($i = 0; $i < count($member['skills']['other_skills']); $i++){
											echo'
										
							            <li class="list-inline-item"><span class="badge badge-light">' . $member['skills']['other_skills'][$i] . '</span></li>
										';
										}
									?>
						            </ul>
						        </div>
						    </div>
					    </section>
					    <section class="resume-section education-section mb-5">
						    <h2 class="resume-section-title text-uppercase font-weight-bold pb-3 mb-3">Education</h2>
						    <div class="resume-section-content">
							    <ul class="list-unstyled">
									<?php
									for ($i = 0; $i < count($member['education']); $i++){
										echo'
									
								    <li class="mb-2">
								        <div class="resume-degree font-weight-bold">' . $member['education'][$i]['degree'] . '</div>
								        <div class="resume-degree-org">' . $member['education'][$i]['institution'] . '</div>
								        <div class="resume-degree-time">' . $member['education'][$i]['date'] . '</div>
								    </li>';
									}
									?>
							    </ul>
						    </div>
					    </section>
					    <section class="resume-section reference-section mb-5">
						    <h2 class="resume-section-title text-uppercase font-weight-bold pb-3 mb-3">Awards</h2>
						    <div class="resume-section-content">
							    <ul class="list-unstyled resume-awards-list">
									<?php
									for($i = 0; $i < count($member['awards']); $i++){
										echo'
									
								    <li class="mb-2 ps-4 position-relative">
								        <i class="resume-award-icon fas fa-trophy position-absolute" data-fa-transform="shrink-2"></i>
								        <div class="resume-award-name">' . $member['awards'][$i]['award'] . '</div>
								        <div class="resume-award-desc">' . $member['awards'][$i]['description'] . '</div>
								    </li>';
									}
									?>
							    </ul>
						    </div>
					    </section>
					    <section class="resume-section language-section mb-5">
						    <h2 class="resume-section-title text-uppercase font-weight-bold pb-3 mb-3">Languages</h2>
						    <div class="resume-section-content">
							    <ul class="list-unstyled resume-lang-list">
									<?php
									for ($i = 0; $i < count($member['languages']); $i++){
										echo '
									
								    <li class="mb-2"><span class="resume-lang-name font-weight-bold">' . $member['languages'][$i]['language'] . '</span> <small class="text-muted font-weight-normal">' . $member['languages'][$i]['level'] . '</small></li>
									';
									}
									?>
							    </ul>
						    </div>
					    </section>
					    <section class="resume-section interests-section mb-5">
						    <h2 class="resume-section-title text-uppercase font-weight-bold pb-3 mb-3">Interest </h2>
							<div class="resume-section-content">
							    <ul class="list-unstyled">
									<?php
										for ($i = 0; $i < count($member['interests']); $i++){
											echo '
										
								    <li class="mb-1">' . $member['interests'][$i] . '</li>';
									}
									?>
							    </ul>
						    </div>
					    </section>
					    
				    </div>
			    </div>
				<section class="resume-section experience-section mb-5">
					<h2 class="resume-section-title text-uppercase font-weight-bold pb-3 mb-3">Projects</h2>
					<div class="row mt-4">
						<?php
						for ($i = 0; $i < count($member['projects']); $i++){
							echo '
						
						<div class="col-md-4">
							<div class="card">
								<img src="assets/images/' . $member['projects'][$i]['picture'] . '" style="max-height: 150px;" alt="Project 1" class="card-img-top">
								<div class="card-body">
									<h5 class="card-title">' . $member['projects'][$i]['name'] . '</h5>
									<p class="card-text">' . $member['projects'][$i]['description'] . '</p>
									<a href="assets/projects/' . $member['projects'][$i]['link'] . '">Go to link</a>
								</div>
							</div>
						</div>';
						}
					?>
					</div>
				</section>
		    </div>
		    
		    
	    </div>
    </article> 

    
    <footer class="footer text-center pt-2 pb-5">
        <small class="copyright">Designed with <span class="sr-only">love</span><i class="fas fa-heart"></i> by <?=$resume_data[0]['member']?></small>
    </footer>

    

</body>
</html>