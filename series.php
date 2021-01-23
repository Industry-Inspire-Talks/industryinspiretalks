<?php include('connect.php') ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php require_once('components/head.php') ?>
</head>

<body class="nav-nofixed" data-spy="scroll" data-target=".scroll-spy" data-offset="90">
    <?php require_once('components/preloader.php') ?>
    <main>

        <?php require_once('components/navbar.php') ?>

        <div class="jumbotron jumbotron-fluid">
            <div class="container">
                <div class="row">
                    <div class="col-lg-10">
                        <p class="h1 font-weight-normal"><a class="text-dark font-weight-light" href="episodes.php"><i class="fa fa-arrow-left small"></i></a> Interview Series</p>
                        <p class="lead m-0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus blanditiis fugit nisi necessitatibus accusamus voluptate, perferendis harum magni aperiam facilis aut dolor perspiciatis, fuga praesentium dolorem omnis eius tenetur quisquam!</p>
                    </div>
                    <div class="col-lg-2 d-none d-lg-block">
                        <div class="image-center-cover shadow" style="padding-top:100%;background-image:url('./assets/img/interview.jpeg');border-radius:1rem;overflow:hidden"></div>
                    </div>
                </div>
            </div>
        </div>

        <section class="container">
            <div class="form-group">
                <input type="search" class="form-control" placeholder="Search for episodes">
            </div>

            <?php for ($i = 1; $i < 3; $i++) { ?>

                <div id="episode<?php echo $i ?>">
                    <div class="card mb-3">
                        <div class="card-body">
                            <p class="h6 m-0 text-left">EP #<?php echo $i ?> - Interview Series with Ritwik</p>
                        </div>
                        <iframe width="100%" height="500" src="https://www.youtube.com/embed/FkvVTTgj2y4" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                </div>
            <?php } ?>
        </section>

        <!-- Footer Section  -->
        <?php require_once('components/footer.php') ?>
        <?php require_once('components/foot.php') ?>
    </main>

</body>

</html>