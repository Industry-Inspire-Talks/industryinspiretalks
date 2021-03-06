<?php include('connect.php') ?>
<!DOCTYPE html>
<html lang="en">

<head>
	<?php require_once('components/head.php') ?>

</head>

<body class="nav-nofixed">
	<?php require_once('components/preloader.php') ?>

	<main>
		<?php require_once('components/navbar.php') ?>


		<section class="container pt-5">
			<p class="section-header">About Us</p>
			<p class="font-weight-bold text-center">Industry Inspire Talks is an organization started by Omkar Shinde in August 2020, registered under MSME.</p>
			<p class="text-justify">We believe in educating the Students/Working Professionals/Entrepreneurs by providing them guidance from the Industry Experts & helping them to make an impact in their lives by transforming themselves into an Industry-Leader.</p>
			<p class="text-justify">It is a platform where we invite successful people from the industry to share their career journeys. We inspire people in three ways. We have three categories i.e.. Interview Series, Podcasts Series, Career Stories.</p>

			<p class="text-justify">'Interview series' involves people who interned at companies & converted that internship opportunity into a full-time offer. Podcasts Series involves professionals and entrepreneurs with 5+ years of Industry experience holding positions of Founder, MD, CEO, Managers sharing their inspiring industry experiences in our series. 'Career Stories' is where we invite people who achieved immeasurable success in their careers with 10+ years of industry experience in a specific industry/company.We organize Industry Oriented Events/ Industry Webinars/Industry Workshops for our #inspire community which involves speakers from around the globe representing different industries/companies.</p>
			<p class="text-justify">This is what we do here, we inspire people to achieve greater heights in their career by helping them connect with successful people from the industry! Your career is our priority! Our mission is to empower every person on this planet to achieve more in their future careers. Our vision is to inspire people with their stories of hustle & dedication towards their dreams and make an impact in their lives! We are here to connect you with leaders of the industry so you can transform yourself into a leader. Come let's do something for the community. </p>
			<p> If you are a community person too, this is the place where you truly belong! Join the #Inspire Community!</p>
		</section>
		<section class="container board">
			<h1 class="title text-center mb-5">Our Board of Directors</h1>
			<div class="row justify-content-center">
				<?php
				$idArray = array(1, 2, 3, 4);

				foreach ($idArray as $id) {
					$result = $conn->query("SELECT * FROM staff WHERE id='$id'")->fetch_assoc();
					$social = json_decode($result['social_links'], true);

					if ($result['visible'])
						echo '' .
							'<div class="mb-3 col-lg-3 col-sm-6">' .
							'    <div class="director">' .
							'        <div class="">' .
							'            <div class="image image-center-cover" style="background-image: url(\'/admin/public/uploads/staff/' . $result['id'] . '.' . $result['image_ext'] . '\')">' .
							'            </div>' .
							'            <p class="name">' . $result['name'] . '</p>' .
							'            <p class="position">' . $result['designation'] . '</p>' .
							'        </div>' .
							'        <div class="social">' .
							'            <a href="' . $social['linkedin'] . '" target="blank"><i class="fab fa-linkedin"></i></a>' .
							'            <a href="javascript:0" disabled><i class="fab fa-facebook"></i></a>' .
							'            <a href="javascript:0" disabled><i class="fab fa-twitter"></i></a>' .
							'            <a href="javascript:0" disabled><i class="fab fa-instagram"></i></a>' .
							'            <a href="javascript:0" disabled><i class="fab fa-google-plus"></i></a>' .
							'        </div>' .
							'    </div>' .
							'</div>';
				}
				?>

			</div>
		</section>

		<section class="container">
			<h1 class="text-center title">Our Team Members</h1>

			<div class="d-flex flex-wrap justify-content-center align-items-center text-center">
				<?php

				$count = $conn->query("SELECT * FROM staff")->num_rows;
				$idArray = array();
				for ($i = 5; $i <= $count; $i++) {
					array_push($idArray, $i);
				}
				shuffle($idArray);

				foreach ($idArray as $id) {
					$result = $conn->query("SELECT * FROM staff WHERE id='$id'")->fetch_assoc();

					$background = ($result['image_ext']) ? '/admin/public/uploads/staff/' . $result['id'] . '.' . $result['image_ext'] : './assets/img/dummy-avatar.png';

					if ($result['visible'])

						echo '<div class="card m-2 border-0" style="width:200px">' .
							'	<div class="card-body mb-3">' .
							'       <div class="image-center-cover mb-3" style="border-radius:1rem;overflow:hidden;height:200px;background-image: url(\'/admin/public/uploads/staff/' . $result['id'] . '.' . $result['image_ext'] . '\')"></div>' .
							'		<h5 class="card-title">' . $result['name'] . '</h5>' .
							'		<p class="card-text">' . $result['designation'] . '</p>' .
							'    </div>' .
							'</div>';
				}
				?>
			</div>
		</section>

		<!-- Footer Section  -->
		<?php require_once('components/footer.php') ?>

		<?php require_once('components/foot.php') ?>
	</main>

</body>


</html>