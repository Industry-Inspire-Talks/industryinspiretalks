<?php include('connect.php') ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php require_once('components/head.php') ?>

</head>

<body class="nav-nofixed" style="background:#f1f1f1">
    <?php require_once('components/preloader.php') ?>

    <main>

        <?php require_once('components/navbar.php') ?>

        <section class="container dummy">
            <div class="title">Careers</div>
            <p class="sub-title">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sequi deserunt distinctio quia aspernatur quis, suscipit illo reprehenderit numquam quasi, iste dicta? Voluptate laboriosam nobis quod ducimus. Excepturi odio ex optio.</p>
            <hr class="mb-4">

            <?php if (!isset($_GET['job_id'])) { ?>
                <div class="row">
                    <?php for ($i = 0; $i < 4; $i++) { ?>

                        <div class="col-lg-4 mb-4">
                            <div class="card shadow border-0" style="border-radius: 1rem;height:100%;overflow:hidden">
                                <div class="card-body bg-dark">

                                    <p class=" h3 m-0 text-light">Job Title</p>
                                </div>
                                <div class="card-body d-flex flex-column align-items-between justify-content-between"">
                                <div>

                                <p class=" small">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Minima placeat non odio voluptas assumenda illo nulla nisi exercitationem eius beatae ipsum suscipit, a fugit. Maiores distinctio earum suscipit fugit quam!</p>

                                    <p class="small"><b>Skills :</b> HTML, CSS, Bootstrap, PHP</p>

                                    <p class="small"><b>Perks :</b> Paid Vacation, Corporate Discounts, Tuition Reimbursement and more</p>

                                    <p class="small"><b>Tenure :</b> 6 Months | 3 Months | Project Based</p>
                                </div>
                                <div>

                                    <hr>
                                    <form action="" method="post" enctype="multipart/form-data">
                                        <label class="small mb-1 ml-2 font-weight-bold" for="">Upload CV / Resume</label>
                                        <div class="d-flex">
                                            <input style="border-top-left-radius:5rem;border-bottom-left-radius:5rem;" class="form-control p-1 px-3" type="file" name="resume">
                                            <button style="border-top-right-radius:5rem;border-bottom-right-radius:5rem;" name="" class="text-nowrap pr-3 btn btn-success btn-sm"><i class="fa fa-paper-plane"></i> Send</button>
                                        </div>
                                        <small class="text-muted">*Only <b>PDF</b> File Format Allowed.</small>
                                    </form>
                                </div>
                            </div>
                        </div>
                </div>
            <?php } ?>

            </div>
        <?php } else { ?>
            <div class="card mx-auto" style="max-width:600px">
                <div class="card-body">
                    <p class="h3">Job Title</p>
                    <hr>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Minima placeat non odio voluptas assumenda illo nulla nisi exercitationem eius beatae ipsum suscipit, a fugit. Maiores distinctio earum suscipit fugit quam!</p>

                    <p class="h6">Skills</p>
                    <ul>
                        <li>Skill 1</li>
                        <li>Skill 2</li>
                        <li>Skill 3</li>
                        <li>Skill 4</li>
                    </ul>
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