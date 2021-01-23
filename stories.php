<?php include('connect.php') ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php require_once('components/head.php') ?>
    <link rel="stylesheet" href="assets/css/stories.css?1530H">


</head>

<body class="nav-nofixed">
    <?php require_once('components/preloader.php') ?>
    <main>

        <?php require_once('components/navbar.php') ?>
        <div class="jumbotron jumbotron-fluid">
            <div class="container">
                <p class="h1 font-weight-light text-center">Get inspired by reading our <b>Inspire Stories</b></p>
            </div>
        </div>
        <section class="container">
            <div class="row mb-3">
                <?php for ($i = 0; $i < 9; $i++) { ?>
                    <div class="col-lg-4 col-md-6">
                        <div class="card mb-3 story-card">
                            <div class="py-2 px-3 d-flex align-items-center justify-content-between">
                                <div class="d-flex align-items-center justify-content-between">
                                    <div class="rounded-circle mr-2" style="width:50px;height: 50px;background: #f1f1f1;"></div>
                                    <div>
                                        <p class="name">FirstName MiddleName LastName</p>
                                        <p class="position"><i class="text-muted">Current Position</i> at <i class="text-muted">Company Name</i></p>
                                        <p class="post-date">8 days Ago</p>
                                    </div>
                                </div>
                            </div>

                            <div class="img-square" style="background-image : url('uploads/inspire_stories/1.jpg')" style="background: #f1f1f1;"></div>
                            <!-- <div class="py-2 px-3 border-bottom">
                                <p class="link">
                                    <a class="" href="#" target="_blank" rel="noopener noreferrer">Few Lines of the story to proceed forward to the linkedin </a>
                                </p>
                            </div> -->
                            <div class="py-2 px-3 d-flex align-items-center justify-content-between">
                                <p class="m-0"><i class="far fa-thumbs-up "></i></p>
                                <p class="m-0"><i class="far fa-comment "></i></p>
                                <p class="m-0"><i class="fa fa-share-alt"></i></p>
                            </div>
                        </div>
                    </div>
                <?php } ?>

            </div>

            <div class="container">

                <ul class="pagination justify-content-center">

                    <li class="page-item disabled"><a class="page-link" href="#">Previous</a></li>
                    <li class="page-item active"><a class="page-link " href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item"><a class="page-link" href="#">4</a></li>
                    <li class="page-item"><a class="page-link" href="#">Next</a></li>
                </ul>
            </div>



        </section>
        <!-- Footer Section  -->
        <?php require_once('components/footer.php') ?>

        <?php require_once('components/foot.php') ?>
    </main>

</body>


</html>