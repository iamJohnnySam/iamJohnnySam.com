<?php 
$title = "Project Portfolio";
include 'web_elements/header.php';
?>

<body>
	<section class="subheader">
	
	<?php include __DIR__ . '/web_elements/navigation.html'; ?>
	
	<h1>Project Portfolio</h1>
	</section>
	<section class="portfolio">
		
		<?php include 'projectlist.php'; ?>
		<?php include 'subprojectlist.php'; ?>
		<?php # include 'notelist.php'; ?>
	</section>
	
	<section class="skills">
		<h3>Future Projects</h3>
		<p>- Expense Tracker database<br>
			- Expense tracker phone app<br>
			- Online store
		</p>
	</section>
	
	<section class="skills">
		<h3 align="left">Testimonial: University of Manchester</h3>
		<p>When I was studying for my bachelors at the University of Manchester, I was asked to provide an interview about my course and life at the university as a foreign student. Although the full interview was spotlighted on the old university website, this has now been taken down and summarized to a testimonial which I took a screencap on just in case they change it again.</p>
		<p>The full interview has been archived by a website called the interview portal and that article can be found <a href="https://theinterviewportal.com/2017/09/06/mechatronics-engineer-interview-4/" target="_blank">here</a></p>
		<p align="center"><a target="_blank" href="https://www.manchester.ac.uk/study/undergraduate/courses/2021/03928/meng-mechatronic-engineering-with-industrial-experience/course-details/"><img src="website_images/UoMTestimonials.png" alt="University of Manchester Testimonial"></a></p>
	</section>
	
	
<?php include 'web_elements/footer.php'; ?>
