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
		<div class="jumbotron jumbotron-fluid">
			<div class="container">
				<p class="h1 font-weight-light text-center">Our Episodes</p>
				<p class="lead text-center">Watch our episodes with people from the industry & gain valuable knowledge from their industry experiences covering various industry-oriented topics! Start binge watching now!</p>
			</div>
		</div>


		<section class="container pt-5 my-5">
			<div class="row align-items-center justify-content-center">
				<div class="col-md-6 col-lg-4">
					<a class="btn w-100" href="series.php">
						<div class="card text-center" style="width: 290px;">
							<div class="image-center-cover" style="height:290px;background-image:url('./assets/img/interview.jpeg')">
							</div>
							<!-- <div class="card-body">
								<p class=" h1 font-weight-normal">Interview</p>
								<p class="m-0 h2 font-weight-light">Series</p>
							</div> -->
						</div>
					</a>
				</div>
				<div class="col-md-6 col-lg-4">
					<a class="btn w-100" href="series.php">
						<div class="card text-center" style="width: 290px;">
							<div class="image-center-cover" style="height:290px;background-image:url('./assets/img/podcast.jpeg')">
							</div>
							<!-- <div class="card-body">
								<p class=" h1 font-weight-normal">Podcast</p>
								<p class="m-0 h2 font-weight-light">Series</p>
							</div> -->
						</div>
					</a>
				</div>
			</div>
		</section>

		<!-- Footer Section  -->
		<?php require_once('components/footer.php') ?>
		<?php require_once('components/foot.php') ?>
	</main>

</body>

</html>