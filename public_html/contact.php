<?php 
$title = "Contact Me";
include 'web_elements/header.php';
?>

<body>
	<section class="subheader">
	<?php include __DIR__ . '/web_elements/navigation.html'; ?>
	<h1>Get in touch with me</h1>
	</section>
	
	
	<section class="contact">
		<div class="row">
			<div class="contact-col">
				<div>
					<i class="fa fa-envelope-o"></i>
					<span>
						<h5>iamJohnnySam at outlook . com</h5>
						<p>Reach me here</p>
					</span>
				</div>
			</div>
			<div class="contact-col">
				<form action="contactme.php" method="post">
					<input type="text" name="name" placeholder="John Smith" required>
					<input type="email" name="email" placeholder="JohnSmith@mail.com" required>
					<input type="text" name="subject" placeholder="Why I am reaching out" required>
					<textarea rows="8" name="message" placeholder="My message" required></textarea>
					<button type="submit" class="box-btn white-btn">Send this</button>
				</form>
			</div>
		</div>
	</section>
	
	<?php include 'web_elements/footer.php'; ?>
