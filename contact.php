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

        <section class="container dummy">
            <div class="title">Contact Us</div>
            <hr class="mb-4">

            <div class="row">
                <div class="col-md-4 aos-init aos-animate" data-aos="fade-down-right">
                    <iframe class="map" frameborder="0" width="100%" height="300px" allowfullscreen="" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3770.3147061286104!2d72.84734795063662!3d19.093845056309224!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7c9ad626484f5%3A0x6102ad267abeb9d7!2s9%2C%202%2C%20Nanda%20Patkar%20Rd%20Ext%2C%20Navpada%2C%20Vile%20Parle%20East%2C%20Vile%20Parle%2C%20Mumbai%2C%20Maharashtra%20400057!5e0!3m2!1sen!2sin!4v1609412793976!5m2!1sen!2sin"></iframe>

                </div>
                <div class="col-md-8 py-3 contact-details aos-init aos-animate" data-aos="fade-down-left">
                    <p class="text-justify"><i class="fa fa-location-arrow"></i> <b>Address :</b> 9/2 Dhanashri CHS, Nanda Patkar Road, Vile Parle(E), Mumbai 400057, India</p>
                    <p><i class="fa fa-phone"></i> <b>Phone :</b>+91 885 081 0515</p>
                    <p><i class="fa fa-envelope"></i> <b>Email :</b> support@industryinspiretalk.com</p>
                    <p><i class="fa fa-linkedin"></i> <b>LinkedIn :</b> <a href="#" target="blank">IndustryInspireTalks</a></p>
                </div>

                <style>
                    .content {
                        background: #f7f7f7;
                    }

                    .map {
                        border: 2px solid #1e1e1e;
                        box-shadow: 0 0 5px #aaa;
                    }

                    .contact-details {
                        font-size: 14px;
                    }

                    .contact-details i.fa {
                        color: #1bb1dc;

                    }
                </style>
            </div>

            </div>
        </section>
        <!-- Footer Section  -->
        <?php require_once('components/footer.php') ?>

        <?php require_once('components/foot.php') ?>
    </main>

</body>


</html>