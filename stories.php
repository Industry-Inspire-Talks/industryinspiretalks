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

                <?php } ?>
                <?php
                $result = $conn->query("SELECT * FROM inspire_stories ORDER BY id DESC");

                while ($row = $result->fetch_assoc()) {


                    $id = $row['leader_id'];
                    $ext = $row['image_ext'];

                    $leader = $conn->query("SELECT * FROM industry_leaders WHERE id='$id'")->fetch_assoc();

                    echo '<div class="col-lg-4 col-md-6 mb-3 ">' .
                        '    <div class="card story-card d-flex justify-content-between" style="height:100%">' .
                        '        <div class="py-2 px-3 d-flex align-items-center justify-content-between">' .
                        '            <div class="d-flex align-items-center justify-content-between">' .
                        '                <div class="image-center-cover rounded-circle mr-2 flex-shrink-0" style="width:50px;height: 50px;background-image : url(\'uploads/industry_leaders/' . $id . '.' . $leader['image_ext'] . '\')"></div>' .
                        '                <div>' .
                        '                    <p class="name">' . $leader['name'] . '</p>' .
                        '                    <p class="position"><i class="text-muted">' . $leader['position'] . '</i> ' . (($leader['company']) ? 'at <i class="text-muted">' . $leader['company'] . '</i>' : '') . '</p>' .
                        // '                    <p class="post-date">8 days Ago</p>' .
                        '                </div>' .
                        '            </div>' .
                        '        </div>' .
                        '        <div>' .
                        '           <div class="img-square" style="background-image : url(\'uploads/inspire_stories/' . $row['id'] . '.' . $ext . '\')" style="background: #f1f1f1;"></div>' .
                        '      <a href="' . $row['link'] . '" target="blank">' .
                        '              <div class="py-2 px-3 d-flex align-items-center justify-content-between">' .
                        '                  <p class="m-0"><i class="far fa-thumbs-up "></i></p>' .
                        '                  <p class="m-0"><i class="far fa-comment "></i></p>' .
                        '                  <p class="m-0"><i class="fa fa-share-alt"></i></p>' .
                        '               </div>' .
                        '       </a>' .
                        '           </div>' .
                        '    </div>' .
                        '</div>';
                }
                ?>


            </div>

            <!-- <div class="container">

                <ul class="pagination justify-content-center">

                    <li class="page-item disabled"><a class="page-link" href="#">Previous</a></li>
                    <li class="page-item active"><a class="page-link " href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="pag  e-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item"><a class="page-link" href="#">4</a></li>
                    <li class="page-item"><a class="page-link" href="#">Next</a></li>
                </ul>
            </div> -->



        </section>
        <!-- Footer Section  -->
        <?php require_once('components/footer.php') ?>

        <?php require_once('components/foot.php') ?>
    </main>

</body>


</html>