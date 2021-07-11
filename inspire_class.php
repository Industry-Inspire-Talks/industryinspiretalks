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


        <section class="bg-dark text-light" style="background:url('/assets/inspire_class/hero_section_bg.png');background-position: center;background-size: cover;">
            <div class="container py-5">

                <div class="row">
                    <div class="col-md-4 text-center">
                        <img class="mx-auto rounded" src="/assets/inspire_class/inspire_class_logo.jpg" width="200px">

                    </div>
                    <div class="col-md-8">
                        <div class="my-5">
                            <h1>What is Inspire Class?</h1>
                            <p class="mb-4">Inspire Class is an Interactive and Experiential Learning<br> concept led by Industry Experts to
                                enhance
                                your<br> Foundational Knowledge. </p>
                            <a href="#uclasses" class="btn btn-primary badge-pill px-5 small">APPLY NOW</a>
                        </div>
                    </div>
                </div>

        </section>

        <section style="box-shadow:0 0 20px rgba(0,0,0,.25) inset">
            <div class="container">

                <div class="section-title  mb-5">
                    <h2 class="text-center font-weight-bold" style="color:#413e66">Focus Areas</h2>

                </div>

                <div class="row text-center font-weight-bold">
                    <div class="col-lg-3 col-sm-6">
                        <figure>
                            <img class="mb-3" src="/assets/inspire_class/Ellipse_1.png" style="width:150px" />
                            <figcaption class="fig">Technology</figcaption>
                        </figure>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <figure>
                            <img class="mb-3" src="/assets/inspire_class/Ellipse_2.png" style="width:150px" />
                            <figcaption class="fig">Management</figcaption>
                        </figure>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <figure>
                            <img class="mb-3" src="/assets/inspire_class/Ellipse_3.png" style="width:150px" />
                            <figcaption class="fig">Finance</figcaption>
                        </figure>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <figure>
                            <img class="mb-3" src="/assets/inspire_class/Ellipse_4.png" style="width:150px" />
                            <figcaption class="fig">Entrepreneurship</figcaption>
                        </figure>
                    </div>
                </div>


            </div>


        </section>

        <section class="">
            <div class="container">

                <div class="section-title  mb-5">
                    <h2 class="text-center font-weight-bold" style="color:#413e66">Upcoming Classes</h2>

                </div>

                <div id="upcoming" class="swiper-container">
                    <div class="swiper-wrapper">
                        <?php for ($i = 0; $i < 5; $i++) { ?>
                            <div class="swiper-slide">
                                <div class="card mx-auto" style="width: 18rem;">
                                    <img src="/assets/inspire_class/dummy_class_image.png" style="filter:blur(2px)" alt="">
                                </div>
                            </div>
                        <?php } ?>
                    </div>


                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                </div>

                <div class="text-center mt-5">
                    <a href="#" class="btn btn-primary badge-pill px-4">View All Upcoming Classes</a>
                </div>
            </div>
        </section>

        <section class="" style="background:#f6f6f6">
            <div class="container">

                <div class="section-title  mb-5">
                    <h2 class="text-center font-weight-bold" style="color:#413e66">Past Classes</h2>

                </div>

                <div id="upcoming" class="swiper-container">
                    <div class="swiper-wrapper">
                        <?php for ($i = 0; $i < 5; $i++) { ?>
                            <div class="swiper-slide">
                                <div class="card mx-auto" style="width: 18rem;">
                                    <img src="/assets/inspire_class/dummy_class_image_past.png" style="filter:blur(2px)" alt="">
                                </div>
                            </div>
                        <?php } ?>
                    </div>


                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                </div>

                <div class="text-center mt-5">
                    <a href="#" class="btn btn-primary badge-pill px-4">View All</a>
                </div>
            </div>
        </section>

        <section class="p-4">
            <div class="container my-4 rounded py-5" style="background:#eaf2ff">

                <h2 class="py-5 text-center font-weight-bold" style="color:#413e66">Why should you attend?</h2>
                <div class="row mb-5">
                    <div class="col-lg-4 col-md-6">
                        <div class="card badge-pill border-0 mb-3 mx-auto" style="max-width:300px">
                            <div class="d-flex">

                                <img class="p-3 flex-grow-0 flex-shrink-0" src="\assets\inspire_class\Vector (1).png" height="50px" width="50px">
                                <p class="m-0" style="font-weight:500">Learn and Network with Industry Experts</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="card badge-pill border-0 mb-3 mx-auto" style="max-width:300px">
                            <div class="d-flex">

                                <img class="p-3 flex-grow-0 flex-shrink-0" src="\assets\inspire_class\Vector (1).png" height="50px" width="50px">
                                <p class="m-0" style="font-weight:500">Develop your foundational knowledge in your focus area</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="card badge-pill border-0 mb-3 mx-auto" style="max-width:300px">
                            <div class="d-flex">

                                <img class="p-3 flex-grow-0 flex-shrink-0" src="\assets\inspire_class\Vector (1).png" height="50px" width="50px">
                                <p class="m-0" style="font-weight:500">Grow yourself <br>professionally</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="card badge-pill border-0 mb-3 mx-auto" style="max-width:300px">
                            <div class="d-flex">

                                <img class="p-3 flex-grow-0 flex-shrink-0" src="\assets\inspire_class\Vector (1).png" height="50px" width="50px">
                                <p class="m-0" style="font-weight:500">Ace your industry<br> careers in style</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="card badge-pill border-0 mb-3 mx-auto" style="max-width:300px">
                            <div class="d-flex">

                                <img class="p-3 flex-grow-0 flex-shrink-0" src="\assets\inspire_class\Vector (1).png" height="50px" width="50px">
                                <p class="m-0" style="font-weight:500">Seek mentorship from industry Leaders</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="card badge-pill border-0 mb-3 mx-auto" style="max-width:300px">
                            <div class="d-flex">

                                <img class="p-3 flex-grow-0 flex-shrink-0" src="\assets\inspire_class\Vector (1).png" height="50px" width="50px">
                                <p class="m-0" style="font-weight:500">Become industry Ready in your focus Area</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="time">
            <h2>Class Timeline</h2>
            <div class="flex-child 1">
                <img src="C:\Users\shree\Downloads\5221913 1.png">
                <p class="p1">Kickoff & Basic<br>
                    Idea Development<br>
                    Phase ( 3hrs )</p>
                <h4 class="w">week 0</h4>
            </div>
            <img class="vector" src="C:\Users\shree\Downloads\Vector (2).png">
            <div class="flex-child 2">
                <img src="C:\Users\shree\Downloads\5221913 1 (1).png">
                <p class="p2">Ideation and<br>
                    Conecept Building<br>
                    Phase ( 3hrs )</p>
                <h4 class="w">week 1</h4>
            </div>
            <img class="vector" src="C:\Users\shree\Downloads\Vector (2).png">
            <div class="flex-child 3">
                <img src="C:\Users\shree\Downloads\5221913 1 (2).png">
                <p class="p3">Problem <br>Statement<br>
                    Allotments Phase<br>
                    ( 3hrs )</p>
                <h4 class="w">week 2</h4>
            </div>
            <img class="vector" src="C:\Users\shree\Downloads\Vector (2).png">
            <div class="flex-child 4">
                <img src="C:\Users\shree\Downloads\5221913 1 (3).png">
                <p class="p4">Problem/Doubt<br> Solving Phase
                    <br>( 3hrs )
                </p>
                <h4 class="w">week 3</h4>
            </div>
            <img class="vector" src="C:\Users\shree\Downloads\Vector (2).png">
            <div class="flex-child 5">
                <img src="C:\Users\shree\Downloads\5221913 1 (4).png">
                <p class="p5">Idea<br> Presentation<br> Phase ( 3hrs )</p>
                <h4 class="w">week 4</h4>
            </div>
            <img class="vector" src="C:\Users\shree\Downloads\Vector (2).png">
            <div class="flex-child 6">
                <img src="C:\Users\shree\Downloads\5221913 1 (5).png">
                <p class="p6">Graduation<br> Day<br> ( 3hrs )</p>
                <h4 class="w">week 5</h4>
            </div>

        </section>

        <section class="mb">
            <div class="imagebox">
                <img src="C:\Users\shree\Downloads\WhatsApp Image 2021-04-09 at 1.11 1.png">
            </div>
            <div class="xo">
                <div class="textbox">
                    <h2>Certificate of Graduation</h2>
                    <p>After you complete the class, you’ll get your<br> verified Certificate of Graduation to Showcase
                        <br>the
                        things you learntout of Inspire Class.
                    </p>

                </div>

            </div>
            <a href="#">Apply Now</a>
        </section>

        <section class="freq">
            <div class="container">

                <h2>Frequently Asked Questions</h2>

                <div class="accordion">
                    <div class="accordion-item">
                        <a>1.Who is Eligible to Apply?</a>
                        <div class="content">
                            <p>All undergraduate students and young professionals with a<br> maximum of 2 years of
                                experience who are
                                looking to build <br>foundational knowledge or to explore a particular domain are<br>
                                eligible to apply
                                for our programs. The final decision of enrolment
                                would be taken by our team after evaluating all the candidates.</p>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <a> 2.Who is going to take the class?</a>
                        <div class="content">
                            <p>The classes would be taken by Industry experts from respective domains. In addition to
                                educating the
                                selected students, Industry experts would also provide mentorship wherever required.</p>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <a>3.What is the format of the class and cohort?</a>
                        <div class="content">
                            <p>All the classes would be virtual-only. Each cohort will consist of 60 students from diverse
                                backgrounds.
                            </p>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <a>4.what is the duration of the program?</a>
                        <div class="content">
                            <p>The duration of the program is 5 weeks. One is required to attend 3 hours of class every
                                weekend for the
                                entire duration of the program.</p>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <a> 5.Is the program paid?</a>
                        <div class="content">
                            <p>No. Our programs are not paid.</p>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <a>6.What are the additional perks?</a>
                        <div class="content">
                            <p>As our organisation requires interns, program managers and other employees,
                                we will consider all of you as our first preference to work with. In Addition to this,
                                you will get lifetime access to our community and network.</p>
                        </div>
                    </div>
                </div>

            </div>

        </section>


        <script>
            $(document).ready(function() {

                var swiper = new Swiper('#upcoming.swiper-container', {
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
            })
        </script>

        <!-- Footer Section  -->
        <?php require_once('components/footer.php') ?>

        <?php require_once('components/foot.php') ?>
    </main>

</body>


</html>