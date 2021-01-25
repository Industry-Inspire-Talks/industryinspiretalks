<?php include('connect.php') ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <?php require_once('components/head.php') ?>

</head>

<body>
    <?php require_once('components/preloader.php') ?>
    <main>

        <?php require_once('components/navbar.php') ?>

        <!-- BANNER SECTION -->
        <section id="hero" class="d-flex align-items-center">
            <div class="container py-1">
                <div class="row">
                    <div class="col-md-6">
                        <div class="info">
                            <h2>Welcome to <br>Industry <span>Inspire</span> Talks<br> Organization</h2>
                        </div>

                        <div>
                            <a href="#about_us" class="btn btn-primary">Get Started</a>
                        </div>
                    </div>
                    <div class="col-md-6 text-center">
                        <img src="assets/img/undraw_experts3_3njd.svg" alt="" class="img-fluid image">
                    </div>
                </div>
            </div>
        </section>
        <!-- BANNER SECTION END -->
        <!-- About Section -->
        <section class="container about">
            <div class="direct" id="about_us" style="top:-85px"></div>
            <!-- <h2 class="font-weight-bold text-center mt-3 mb-5">About Our Community</h2> -->

            <div class="content row">
                <div class="col-md-4 d-none d-lg-flex">
                    <div class="doodle">
                        <img src="assets/img/68-Customer-support.svg" alt="">
                    </div>
                </div>
                <div class="col-md-8">
                    <p class="title">About Us</p>
                    <p class="h6">Industry Inspire Talks is an organization started by Omkar Shinde in August 2020</p>
                    <p class="text-justify mt-3">We believe in educating the Students / Working Professionals / Entrepreneurs by providing them guidance from the Industry Experts & helping them to make an impact in their lives by transforming themselves into an Industry-Leader.</p>
                    <!-- <p> It is a platform where we invite successful people from the industry to share their career journeys. We inspire people in three ways. We have three categories i.e.. Interview Series, Podcasts Series, Career Stories. 'Interview series' involves people who interned at companies & converted that internship opportunity into a full-time offer. 'Podcasts Series' involves people with 5-10 years of Industry Experience who hold big positions at companies like Founder, MD, CEO, Managers, etc. sharing their industry experiences in our series. 'Career Stories' is where we invite people who achieved immeasurable success in their careers with 10+ years of industry experience in a specific industry/company. -->
                    <a href="./about.php" class="btn btn-primary mt-4 btn-pill"> More About Us</a>
                </div>
            </div>
        </section>
        <!-- About Section End -->

        <section class="container board">
            <p class="title text-center">Meet Our Board of Directors</p>
            <div class="row">
                <?php
                $idArray = array(1, 2, 3, 4);

                foreach ($idArray as $id) {
                    $result = $conn->query("SELECT * FROM staff WHERE id='$id'")->fetch_assoc();
                    $social = json_decode($result['social_links'], true);

                    echo '' .
                        '<div class="mb-3 col-lg-3 col-sm-6">' .
                        '    <div class="director">' .
                        '        <div class="">' .
                        '            <div class="image image-center-cover" style="background-image: url(\'./uploads/team/' . $result['id'] . '.' . $result['profile_image_ext'] . '\')">' .
                        '            </div>' .
                        '            <p class="name">' . $result['name'] . '</p>' .
                        '            <p class="position">' . $result['designation'] . '</p>' .
                        '        </div>' .
                        '        <div class="social">' .
                        '            <a href="' . $social['linkedin'] . '" target="blank"><i class="fab fa-linkedin"></i></a>' .
                        '            <a href="javascript:0" disabled><i class="fab fa-facebook"></i></a>' .
                        '            <a href="javascript:0" disabled><i class="fab fa-twitter"></i></a>' .
                        '            <a href="javascript:0" disabled><i class="fab fa-instagram"></i></a>' .
                        '            <a href="javascript:0" disabled><i class="fab fa-google-plus"></i></a>' .
                        '        </div>' .
                        '    </div>' .
                        '</div>';
                }
                ?>

            </div>




        </section>

        <section class="container team">
            <div id="team" class="swiper-container">
                <div class="d-flex align-items-center justify-content-between">
                    <button class="swiper-prev btn btn-link mx-3"><i class="fa fa-chevron-left"></i></button>
                    <p class="title text-center">Meet Our Team</p>
                    <button class="swiper-next btn btn-link mx-3"><i class="fa fa-chevron-right"></i></button>
                </div>

                <div class="swiper-wrapper">
                    <?php
                    $idArray = array(5, 6, 7, 8, 9, 10, 11, 12, 13, 18, 19, 20, 21, 22);

                    shuffle($idArray);


                    foreach ($idArray as $id) {
                        $result = $conn->query("SELECT * FROM staff WHERE id='$id'")->fetch_assoc();

                        $background = ($result['profile_image_ext']) ? './uploads/team/' . $result['id'] . '.' . $result['profile_image_ext'] : './assets/img/dummy-avatar.png';


                        echo '<div class="swiper-slide">' .
                            '    <div class="member">' .
                            '            <div class="image image-center-cover" style="background-image: url(' . $background . ')">' .
                            '            <img src="" alt="">' .
                            '        </div>' .
                            '        <p class="name">' . $result['name'] . '</p>' .
                            '        <p class="position">' . $result['designation'] . '</p>' .
                            '    </div>' .
                            '</div>';
                    }
                    ?>

                </div>
            </div>

        </section>
        <!-- Our Events -->
        <section class="explore container ">
            <div class="direct" id="explore" style="top:-150px"></div>
            <div class="text-center justify-content-center">

                <p class="title">Explore our Industry Oriented Events</p>
                <p>Get access to all our industry oriented events delivered by industry experts who are there to guide you,educate you and inspire you! Do attend our events & network with industry leaders for future career opportunities!</p>
                <hr>

                <!-- <h4 class="text-center mt-5 mb-4 text-capitalize">Industry Expo 2020</h4> -->

                <div id="expo" class="swiper-container">
                    <div class="swiper-wrapper">
                        <?php
                        $idArray = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10);

                        foreach ($idArray as $id) {
                            $result = $conn->query("SELECT * FROM events WHERE id='$id'")->fetch_assoc();

                            echo '' .
                                '<div class="swiper-slide">' .
                                '    <div class="card" style="width: 18rem;">' .
                                '        <div class="card-body pb-0">' .
                                '            <p class="card-title m-0">' . $result['title'] . '</p>' .
                                '            <p class="small">' . $result['category'] . '</p>' .
                                '        </div>' .
                                '        <div class=" image-center-cover" style="height:160px;background-image: url(\'./uploads/events/' . $result['id'] . '.' . $result['thumbnail_image_ext'] . '\')"></div>' .
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
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                </div>
                <p class="text-center">
                    <a href="./events.php" class="btn btn-primary btn-pill mt-3">Events <i class="fa fa-arrow-right"></i></a>
                </p>

            </div>
        </section>
        <!-- Our Events End -->
        <!-- Our Community-->
        <section id="community" class="community text-center justify-content-center">
            <div class="container text-center justify-content-center mt-5">
                <p class="title">Our Community</p>
                <p class="mb-5">Meet the mentors of #inspire community, get in touch with them if you need any help. They are here to guide
                    you through your industry journey & help you to achieve your industry goals.</p>
            </div>
            <div class="container">
                <div class="row">
                    <?php

                    $idArray = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28);

                    shuffle($idArray);

                    $i = 0;
                    foreach ($idArray as $id) {
                        $result = $conn->query("SELECT * FROM community WHERE id='$id'")->fetch_assoc();

                        echo '<div class="col-md-6 col-lg-6 col-xl-4">' .
                            '    <div class="member d-flex card flex-row">' .
                            '        <div class="image mr-3 image-center-cover" style="height:160px;background-image: url(\'./uploads/community/' . $result['id'] . '.' . $result['profile_image_ext'] . '?new\')"></div>' .
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
                        if ($i > 5) break;
                    }
                    ?>


                </div>
                <p class="text-center">
                    <a href="./community.php" class="btn btn-primary">Community <i class="fa fa-arrow-right"></i></a>
                </p>
            </div>
        </section>
        <!-- view more community -->

        <!-- End of view more community -->

        <section class="companies mb-5" style="background:#ebebeb">
            <div class="container">
                <p class="title h6 text-center text-uppercase">Companies</p>
                <p class="h5 text-center mb-4 font-weight-light">Our Community Members associated with</p>

                <div class="d-flex align-items-center ">

                    <div class="swiper-prev btn"><i class="fa fa-chevron-left"></i></div>
                    <div id="companies" class="swiper-container">
                        <div class="swiper-wrapper">
                            <?php
                            $idArray = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24);

                            shuffle($idArray);

                            foreach ($idArray as $id) {
                                $result = $conn->query("SELECT * FROM companies WHERE id='$id'")->fetch_assoc();

                                echo '' .
                                    '<div class="swiper-slide">' .
                                    '   <div class="p-4 mx-3 mb-2" style="overflow:hidden;border-radius:1rem;background:#fff">' .
                                    '       <div class=" image image-center-contain" style="height:70px;background-image: url(\'./uploads/companies/' . $result['id'] . '.' . $result['logo_image_ext'] . '\')"></div>' .
                                    '   </div>' .
                                    '   <p class="text-center small font-weight-bold">' . $result['title'] . '</p>' .
                                    '</div>';
                            }
                            ?>
                        </div>
                    </div>
                    <div class="swiper-next btn"><i class="fa fa-chevron-right"></i></div>
                </div>
            </div>


        </section>

        <!-- Our Community End -->

        <!-- Contact us  -->
        <section class="contact mb-5">
            <div class="direct" id="contact" style="top:-90px"></div>
            <div class="container">
                <div class="section-header">
                    <p class="text-center display-4 mb-5">Get in touch with us!</p>
                </div>
                <div class="row">
                    <div class="col-md-6 d-flex align-items-center">
                        <div class="p-3">
                            <img src="assets/img/careers.png" width="100%" alt="">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <form class="contact-form" action="" method="post" role="form" class="php-email-form">
                            <div class="form-row">
                                <div class="col-md-6 form-group">
                                    <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
                                    <div class="validate"></div>
                                </div>
                                <div class="col-md-6 form-group">
                                    <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email">
                                    <div class="validate"></div>
                                </div>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject">
                                <div class="validate"></div>
                            </div>
                            <div class="form-group">
                                <textarea class="form-control" name="message" rows="10" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
                                <div class="validate"></div>
                            </div>
                            <div class="text-right"><button class="btn btn-danger" type="submit">Send Message</button></div>
                        </form>
                    </div>
                </div>
            </div>
        </section>

        <!-- Footer Section  -->
        <?php require_once('components/footer.php') ?>


        <?php require_once('components/foot.php') ?>
    </main>

</body>

<style>
    .swiper-container-multirow-column>.swiper-wrapper {
        flex-direction: row;
    }
</style>


<script>
    $(document).ready(function() {
        if (scrollY > 0) {
            $('.navbar').addClass('top');
        } else {
            $('.navbar').removeClass('top');
        }
        var swiper = new Swiper('#expo.swiper-container', {
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
            loop: true,
            autoplay: {
                delay: 2500,
                disableOnInteraction: false,
            },
            slidesPerView: 1,
            breakpoints: {
                768: {
                    slidesPerView: 2,
                },
                996: {
                    slidesPerView: 3,
                }
            },
        });

        var swiper = new Swiper('#companies.swiper-container', {
            navigation: {
                nextEl: '.swiper-next',
                prevEl: '.swiper-prev',
            },
            slidesPerView: 1,
            loop: true,
            autoplay: {
                delay: 2500,
                disableOnInteraction: false,
            },
            breakpoints: {
                552: {
                    slidesPerView: 2,
                },
                768: {
                    slidesPerView: 3,
                },
                996: {
                    slidesPerView: 5,
                }
            },
        });

        var swiper = new Swiper('#team.swiper-container', {
            navigation: {
                nextEl: '.swiper-next',
                prevEl: '.swiper-prev',
            },
            autoplay: {
                delay: 2500,
                disableOnInteraction: false,
            },

            slidesPerView: 2,
            slidesPerColumn: 2,
            // loop: true,
            breakpoints: {
                // 386: {
                //     slidesPerView: 1,
                // },
                552: {
                    slidesPerView: 3,
                },
                768: {
                    slidesPerView: 4,
                },
                996: {
                    slidesPerView: 5,
                }
            },
        });
    })
    $(document).scroll(function() {
        if (scrollY > 0) {
            $('.navbar').addClass('top');
        } else {
            $('.navbar').removeClass('top');
        }
    })
    $('.navbar-collapse').on('show.bs.collapse', function() {
        console.log('up');
        $('.navbar').addClass('shown')
    })
    $('.navbar-collapse').on('hide.bs.collapse', function() {
        $('.navbar').removeClass('shown')
        console.log('down');
    })
</script>


</html>