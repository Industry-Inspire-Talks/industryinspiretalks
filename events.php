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
                <p class="h1 font-weight-light text-center"><b>Our Events</b></p>
            </div>
        </div>
        <section id="expo" class="container dummy">

            <!-- <p class="h3">Live or Upcomming Events</p> -->

            <!-- <div class="row">
                <div class="col-md-4">
                    ➡️Thumbnails
                    ➡️Event Title
                    ➡️About the event
                    ➡️Event Dates
                    ➡️Register
                </div>
            </div> -->
            <p class="text-center mt-3 mb-5 text-capitalize h1">Streamed Online Events</p>


            <div class="row text-center">
                <?php
                $idArray = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10);

                foreach ($idArray as $id) {
                    $result = $conn->query("SELECT * FROM events WHERE id='$id'")->fetch_assoc();

                    echo '' .
                        '<div class="col-md-6 col-lg-4 mb-3">' .
                        '    <div class="card mx-auto" style="width: 18rem;height:100%">' .
                        '        <div class="card-body pb-0">' .
                        '            <p class="card-title m-0">' . $result['title'] . '</p>' .
                        '            <p class="small">' . $result['category'] . '</p>' .
                        '        </div>' .
                        '        <div class=" image-center-cover" style="height:160px;background-image: url(\'/admin/public/uploads/events/' . $result['id'] . '.' . $result['image_ext'] . '\')"></div>' .
                        '        <div class="card-body">' .
                        // '            <hr>' .
                        '            <p class="card-text des mb-3">' . $result['description'] . '</p>' .
                        '            <a href="' . $result['link'] . '" target="blank" class="btn btn-primary btn-sm">Watch Now</a>' .
                        '        </div>' .
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