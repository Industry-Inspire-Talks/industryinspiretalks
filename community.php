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
                <p class="h1 font-weight-light text-center">Meet our <b>#Inspire Community</b> Members</p>
            </div>
        </div>
        <section class="container community">

            <div class="row">
                <?php
                echo $count = $conn->query("SELECT * FROM community")->num_rows;
                $idArray = array();
                for ($i = 1; $i < $count; $i++) {
                    array_push($idArray, $i);
                }

                shuffle($idArray);

                $i = 0;
                foreach ($idArray as $id) {
                    $result = $conn->query("SELECT * FROM community WHERE id='$id'")->fetch_assoc();

                    // if ($result['visible'])

                        echo '<div class="col-md-6 col-lg-6 col-xl-4">' .
                            '    <div class="member d-flex card flex-row">' .
                            '        <div class="image mr-3 image-center-cover" style="height:160px;background-image: url(\'/admin/public/uploads/community/' . $result['id'] . '.' . $result['image_ext'] . '?new\')"></div>' .
                            '        <div class="d-flex justify-content-between flex-column">' .
                            '            <div>' .
                            '                <p class="name">' . $result['name'] . '</p>' .
                            '                <p class="company mb-2">' . $result['company'] . '</p>' .
                            '                <p class="position">' . $result['role'] . '</p>' .
                            '            </div>' .
                            '            <div class="social">' .
                            '                <a  href="' . $result['link'] . '" target="blank"><i class="fab fa-linkedin"></i> LinkedIn </a>' .
                            '            </div>' .
                            '        </div>' .
                            '    </div>' .
                            '</div>';

                    $i++;
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