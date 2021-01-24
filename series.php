<?php include('connect.php') ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php require_once('components/head.php') ?>
</head>

<body class="nav-nofixed" data-spy="scroll" data-target=".scroll-spy" data-offset="90">
    <?php require_once('components/preloader.php') ?>
    <main>
        <?php
        $id = $_GET['id'];

        if (!isset($_GET['id'])) {
            echo '<script>location.href = "../"</script>';
        }
        $series = $conn->query("SELECT * FROM series WHERE id='$id'")->fetch_array();

        ?>
        <?php require_once('components/navbar.php') ?>

        <div class="jumbotron jumbotron-fluid">
            <div class="container">
                <div class="row">
                    <div class="col-lg-10">
                        <p class="h1 font-weight-normal"><a class="text-dark font-weight-light" href="episodes.php"><i class="fa fa-arrow-left small"></i></a> <?php echo $series['name'] ?></p>
                        <p class="lead m-0"><?php echo $series['description'] ?></p>
                    </div>
                    <div class="col-lg-2 d-none d-lg-block">
                        <div class="image-center-cover shadow" style="padding-top:100%;background-image:url('./uploads/series/<?php echo $id ?>.<?php echo $series['image_ext'] ?>');border-radius:1rem;overflow:hidden"></div>
                    </div>
                </div>
            </div>
        </div>

        <section class="container">
            <div class="form-group">
                <input type="search" class="form-control" placeholder="Search for episodes">
            </div>

            <?php
            $result = $conn->query("SELECT * FROM episodes WHERE series_id='$id'");

            while ($row = $result->fetch_assoc()) {

                echo '' .
                    '<div id="">' .
                    '    <div class="card mb-3">' .
                    '        <div class="card-body">' .
                    '            <p class="h6 m-0 text-left">' . $row['title'] . '</p>' .
                    '        </div>' .
                    '        <iframe width="100%" height="500" src="' . $row['link'] . '" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>' .
                    '    </div>' .
                    '</div>';
            }

            ?>


        </section>

        <!-- Footer Section  -->
        <?php require_once('components/footer.php') ?>
        <?php require_once('components/foot.php') ?>
    </main>

</body>

</html>