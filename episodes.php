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


		<section class="container pt-5 my-5 series">
			<div class="row align-items-center justify-content-center">
				<div class="col-md-6 col-lg-4">
					<div class="card mx-auto mb-3 shadow border-0" style="max-width: 290px;border-radius:1rem;overflow:hidden">
						<a class="" href="series.php">
							<div class="image-center-cover" style="padding-top:100%;background-image:url('./assets/img/interview.jpeg')"></div>
							<div class="card-body text-center">
								<p class="h5 font-weight-normal">Interview Series</p>
							</div>
						</a>
					</div>
				</div>
				<div class="col-md-6 col-lg-4">
					<div class="card mx-auto mb-3 shadow border-0" style="max-width: 290px;border-radius:1rem;overflow:hidden">
						<a class="" href="series.php">
							<div class="image-center-cover" style="padding-top:100%;background-image:url('./assets/img/podcast.jpeg')"></div>
							<div class="card-body text-center">
								<p class="h5 font-weight-normal">Podcast Series</p>
							</div>
						</a>
					</div>
				</div>
				<div class="col-md-6 col-lg-4">
					<div class="card mx-auto mb-3 shadow border-0" style="max-width: 290px;border-radius:1rem;overflow:hidden">
						<a class="" href="series.php">
							<div class="image-center-cover" style="padding-top:100%;background-image:url('./assets/img/career.jpeg')"></div>
							<div class="card-body text-center">
								<p class="h5 font-weight-normal">Career Stories</p>
							</div>
						</a>
						<div class="coming-soon">
							Coming Soon
						</div>
					</div>
				</div>

				<style>
					.series .coming-soon {
						position: absolute;
						height: 100%;
						width: 100%;
						background-color: rgba(255, 255, 255, 0.75);

						display: flex;
						align-items: center;
						justify-content: center;

						color: #000;
						font-weight: 600;
						font-size: 24px;
						transition: .5s;

						/* text-shadow: 0px 0px 5px; */
					}

					.series .card:hover .coming-soon {
						transition: .5s;
						height: 0%;
						overflow: hidden;
					}
				</style>
			</div>
		</section>

		<!-- Footer Section  -->
		<?php require_once('components/footer.php') ?>
		<?php require_once('components/foot.php') ?>
	</main>

</body>

</html>