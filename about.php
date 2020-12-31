<?php include('connect.php') ?>
<!DOCTYPE html>
<html lang="en">

<head>
	<?php require_once('components/head.php') ?>

</head>

<body class="nav-nofixed">
	<?php require_once('components/navbar.php') ?>


	<section class="container mt-5 pt-5">
		<p class="section-header">About Us</p>
		<p class="font-weight-bold text-center">Industry Inspire Talks is a non-profit community started by Omkar Shinde in August 2020.</p>
		<p class="text-justify">We believe in educating the Students/Working Professionals/Entrepreneurs by providing them guidance from the Industry Experts & helping them to make an impact in their lives by transforming themselves into an Industry-Leader.</p>
		<p class="text-justify">It is a platform where we invite successful people from the industry to share their career journeys. We inspire people in three ways. We have three categories i.e.. Interview Series, Podcasts Series, Career Stories. 'Interview series' involves people who interned at companies & converted that internship opportunity into a full-time offer.</p>
		<p class="text-justify">'Podcasts Series' involves people with 5-10 years of Industry Experience who hold big positions at companies like Founder, MD, CEO, Managers, etc. sharing their industry experiences in our series. 'Career Stories' is where we invite people who achieved immeasurable success in their careers with 10+ years of industry experience in a specific industry/company.We organize Industry Oriented Events/ Industry Webinars/Industry Workshops for our #inspire community which involves speakers from around the globe representing different industries/companies.</p>
		<p class="text-justify">This is what we do here, we inspire people to achieve greater heights in their career by helping them connect with successful people from the industry! Your career is our priority!Our mission is to empower every person on this planet to achieve more in their future careers. Our vision is to inspire people with their stories of hustle & dedication towards their dreams and make an impact in their lives! We are here to connect you with leaders of the industry so you can transform yourself into a leader. Come let's do something for the community. </p>
		<p> If you are a community person too, this is the place where you truly belong! Join the #Inspire Community!</p>
	</section>
	<section class="container">
		<h1 class="title text-center">Our Board Directories</h1>
		<div class="row">
			<div class="mb-3 col-lg-3 col-sm-6">
				<div class="director">
					<div class="">
						<div class="image">
							<img src="" alt="">
						</div>
						<p class="name">Omkar Shinde</p>
						<p class="position">Founder &amp; CEO</p>
					</div>
					<div class="social">
						<a href="https://www.linkedin.com/in/omkar-shinde-310aa5193/"><i class="fab fa-linkedin"></i></a>
						<a href="javascript:0" disabled=""><i class="fab fa-facebook"></i></a>
						<a href="javascript:0" disabled=""><i class="fab fa-twitter"></i></a>
						<a href="javascript:0" disabled=""><i class="fab fa-instagram"></i></a>
						<a href="javascript:0" disabled=""><i class="fab fa-google-plus"></i></a>
					</div>
				</div>
			</div>
			<div class="mb-3 col-lg-3 col-sm-6">
				<div class="director">
					<div class="">
						<div class="image">
							<img src="" alt="">
						</div>
						<p class="name">Satya Prakash Mohapatra</p>
						<p class="position">Chief Marketing Officer</p>
					</div>
					<div class="social">
						<a href="https://www.linkedin.com/in/satya-prakash-mohapatra-153926129/"><i class="fab fa-linkedin"></i> </a>
						<a href="javascript:0" disabled=""><i class="fab fa-facebook"></i> </a>
						<a href="javascript:0" disabled=""><i class="fab fa-twitter"></i> </a>
						<a href="javascript:0" disabled=""><i class="fab fa-instagram"></i> </a>
						<a href="javascript:0" disabled=""><i class="fab fa-google-plus"></i> </a>
					</div>
				</div>
			</div>
			<div class="mb-3 col-lg-3 col-sm-6">
				<div class="director">
					<div class="">
						<div class="image">
							<img src="" alt="">
						</div>
						<p class="name">Vishal Nair</p>
						<p class="position">Chief People Officer</p>
					</div>
					<div class="social">
						<a href="https://www.linkedin.com/in/vishalnairm/"><i class="fab fa-linkedin"></i> </a>
						<a href="javascript:0" disabled=""><i class="fab fa-facebook"></i> </a>
						<a href="javascript:0" disabled=""><i class="fab fa-twitter"></i> </a>
						<a href="javascript:0" disabled=""><i class="fab fa-instagram"></i> </a>
						<a href="javascript:0" disabled=""><i class="fab fa-google-plus"></i> </a>
					</div>
				</div>
			</div>
			<div class="mb-3 col-lg-3 col-sm-6">
				<div class="director">
					<div class="">
						<div class="image">
							<img src="" alt="">
						</div>
						<p class="name">Danish Shaikh</p>
						<p class="position">Chief Technology Officer</p>
					</div>
					<div class="social">
						<a href="https://www.linkedin.com/in/shaikhdanish04/"> <i class="fab fa-linkedin"></i> </a>
						<a href="javascript:0" disabled=""><i class="fab fa-facebook"></i> </a>
						<a href="javascript:0" disabled=""><i class="fab fa-twitter"></i> </a>
						<a href="javascript:0" disabled=""><i class="fab fa-instagram"></i> </a>
						<a href="javascript:0" disabled=""><i class="fab fa-google-plus"></i> </a>

					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="container">
		<h1 class="text-center title">Our Team Members</h1>

		<div class="d-flex flex-wrap justify-content-center align-items-center text-center">
			<?php
			$idArray = array(5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20);

			foreach ($idArray as $id) {
				$result = $conn->query("SELECT * FROM staff WHERE id='$id'")->fetch_assoc();
				echo '<div class="card m-2" style="width:200px">' .
					'	<div class="card-body mb-3">' .
					'		<h5 class="card-title">' . $result['name'] . '</h5>' .
					'		<p class="card-text">' . $result['designation'] . '</p>' .
					'	</div>' .
					'</div>';
			}
			?>
		</div>
	</section>

	<!-- Footer Section  -->
	<?php require_once('components/footer.php') ?>

	<?php require_once('components/foot.php') ?>
</body>


</html>