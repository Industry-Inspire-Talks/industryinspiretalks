<?php include('connect.php') ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php require_once('components/head.php') ?>

</head>

<body class="nav-nofixed">
    <?php require_once('components/navbar.php') ?>

    <section class="container dummy">
        
        <div class="title">Get inspired by reading our inspire stories</div>
        <hr class="mb-4">


        <head>
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <style>
                * {
                    box-sizing: border-box;
                }

                body {
                    font-family: Arial, Helvetica, sans-serif;
                }

                /* Float four columns side by side */
                .column {
                    float: left;
                    width: 25%;
                    padding: 0 10px;
                }

                /* Remove extra left and right margins, due to padding */
                .row {
                    margin: 0 -5px;
                }

                /* Clear floats after the columns */
                .row:after {
                    content: "";
                    display: table;
                    clear: both;
                }

                /* Responsive columns */
                @media screen and (max-width: 600px) {
                    .column {
                        width: 100%;
                        display: block;
                        margin-bottom: 20px;
                    }
                }

                /* Style the counter cards */
                .card {
                    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
                    padding: 16px;
                    text-align: center;
                    background-color: #f1f1f1;margin-bottom:30px;
                }
            </style>
        </head>

        <body>




            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-6 col-xl-4">
                    <div class="card">
                        <h3>Card 1</h3>
                        <p>Some text</p>
                        <p>Some text</p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-4 col-sm-6 col-xl-4">
                    <div class="card">
                        <h3>Card 2</h3>
                        <p>Some text</p>
                        <p>Some text</p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-4 col-sm-6 col-xl-4">
                    <div class="card">
                        <h3>Card 3</h3>
                        <p>Some text</p>
                        <p>Some text</p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-4 col-sm-6 col-xl-4">
                    <div class="card">
                        <h3>Card 4</h3>
                        <p>Some text</p>
                        <p>Some text</p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-4 col-sm-6 col-xl-4">
                    <div class="card">
                        <h3>Card 4</h3>
                        <p>Some text</p>
                        <p>Some text</p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-4 col-sm-6 col-xl-4">
                    <div class="card">
                        <h3>Card 4</h3>
                        <p>Some text</p>
                        <p>Some text</p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-4 col-sm-6 col-xl-4">
                    <div class="card">
                        <h3>Card 4</h3>
                        <p>Some text</p>
                        <p>Some text</p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-4 col-sm-6 col-xl-4">
                    <div class="card">
                        <h3>Card 4</h3>
                        <p>Some text</p>
                        <p>Some text</p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-4 col-sm-6 col-xl-4">
                    <div class="card">
                        <h3>Card 4</h3>
                        <p>Some text</p>
                        <p>Some text</p>
                    </div>
                </div>

                
            </div>

            <div class="container">

            <ul class="pagination">
                 
                 <li class="page-item"><a class="page-link" href="#">1</a></li>
                 <li class="page-item"><a class="page-link" href="#">2</a></li>
                 <li class="page-item"><a class="page-link" href="#">3</a></li>
                 <li class="page-item"><a class="page-link" href="#">4</a></li>
            </ul>
            </div>

        </body>


    </section>
    <!-- Footer Section  -->
    <?php require_once('components/footer.php') ?>

    <?php require_once('components/foot.php') ?>
</body>


</html>