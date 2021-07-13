<?php include('connect.php') ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <style>
        .freq .btn-link::after {
            font-family: 'Ionicons';
            content: '\2212';
            position: absolute;
            float: right;
            right: 1rem;
            font-size: 2rem;
            color: black;
            padding: 0px;
            width: 60px;
            height: 60px;
            cursor: pointer;
            text-align: center;
        }

        .freq .btn-link.collapsed::after {
            font-family: 'Ionicons';
            content: '\FF0B';
            color: black;
            padding-top: 0px;
        }
        .time {
            display: flex;
            margin-left: 32px;
            flex-direction: row;
            flex-wrap: wrap;
            min-height: 100vh;
        }
        .time img {
            width: 140px;
            filter: drop-shadow(0px 4px 4px rgba(0, 0, 0, 0));
        }
        .time .flex-child {
            flex: 1;
            justify-content: space-around;
            margin-top: 110px;
            background: #F9F9F9;
            border: 4px solid #FFFFFF;
            box-sizing: border-box;
            padding-left: 35px;
            margin-left: -15px;
            box-shadow: 0px 4px 10px rgb(0 0 0 / 10%), inset 0px 0px 19px rgb(0 0 0 / 5%);
            border-radius: 10px;
        }
        .time .vector {
            width: 60px;
            height: 70px;
            margin-top: 225px;
        }
        @media only screen and (max-width: 600px) {
            .time .vector {
                transform: rotate(90deg);
            }
        }
        .time h4 {
            font-family: Poppins;
            font-style: normal;
            font-weight: bold;
            font-size: 48px;
            line-height: 56px;
            text-align: left;
            color: #000000;
            opacity: 0.3;
        } 
        .time p {
            font-family: Poppins;
            font-style: normal;
            font-weight: 600;
            font-size: 20px;
            line-height: 36px;
            text-align: center;
            margin-left: -5px;
            color: #000000;
        }
            .time .h2-responsive {
                font-size: 2.4rem;
                text-align: center;
                position:absolute;
                left: 50%;
                -webkit-transform:translateX(-50%);
                transform:translateX(-50%);
                max-width: 600px;
                color:#413e66;
            }        
    </style>
    <?php require_once('components/head.php') ?>
</head>
<body class="nav-nofixed">
    <?php require_once('components/preloader.php') ?>

    <main>
        <?php require_once('components/navbar.php') ?>


        <section class="bg-dark text-light" style="background:url('./assets/inspire_class/hero_section_bg.png');background-position: center;background-size: cover;">
            <div class="container py-5">

                <div class="row">
                    <div class="col-md-4 text-center">
                        <img class="mx-auto rounded" src="./assets/inspire_class/inspire_class_logo.jpg" width="200px">

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
                            <img class="mb-3" src="./assets/inspire_class/Ellipse_1.png" style="width:150px" />
                            <figcaption class="fig">Technology</figcaption>
                        </figure>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <figure>
                            <img class="mb-3" src="./assets/inspire_class/Ellipse_2.png" style="width:150px" />
                            <figcaption class="fig">Management</figcaption>
                        </figure>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <figure>
                            <img class="mb-3" src="./assets/inspire_class/Ellipse_3.png" style="width:150px" />
                            <figcaption class="fig">Finance</figcaption>
                        </figure>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <figure>
                            <img class="mb-3" src="./assets/inspire_class/Ellipse_4.png" style="width:150px" />
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
                                    <img src="./assets/inspire_class/dummy_class_image.png" style="filter:blur(2px)" alt="">
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
                                    <img src="./assets/inspire_class/dummy_class_image_past.png" style="filter:blur(2px)" alt="">
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

                                <img class="p-3 flex-grow-0 flex-shrink-0" src=".\assets\inspire_class\Vector (1).png" height="50px" width="50px">
                                <p class="m-0" style="font-weight:500">Learn and Network with Industry Experts</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="card badge-pill border-0 mb-3 mx-auto" style="max-width:300px">
                            <div class="d-flex">

                                <img class="p-3 flex-grow-0 flex-shrink-0" src=".\assets\inspire_class\Vector (1).png" height="50px" width="50px">
                                <p class="m-0" style="font-weight:500">Develop your foundational knowledge in your focus area</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="card badge-pill border-0 mb-3 mx-auto" style="max-width:300px">
                            <div class="d-flex">

                                <img class="p-3 flex-grow-0 flex-shrink-0" src=".\assets\inspire_class\Vector (1).png" height="50px" width="50px">
                                <p class="m-0" style="font-weight:500">Grow yourself <br>professionally</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="card badge-pill border-0 mb-3 mx-auto" style="max-width:300px">
                            <div class="d-flex">

                                <img class="p-3 flex-grow-0 flex-shrink-0" src=".\assets\inspire_class\Vector (1).png" height="50px" width="50px">
                                <p class="m-0" style="font-weight:500">Ace your industry<br> careers in style</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="card badge-pill border-0 mb-3 mx-auto" style="max-width:300px">
                            <div class="d-flex">

                                <img class="p-3 flex-grow-0 flex-shrink-0" src=".\assets\inspire_class\Vector (1).png" height="50px" width="50px">
                                <p class="m-0" style="font-weight:500">Seek mentorship from industry Leaders</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="card badge-pill border-0 mb-3 mx-auto" style="max-width:300px">
                            <div class="d-flex">

                                <img class="p-3 flex-grow-0 flex-shrink-0" src=".\assets\inspire_class\Vector (1).png" height="50px" width="50px">
                                <p class="m-0" style="font-weight:500">Become industry Ready in your focus Area</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="time">    
            <h2 class="h2-responsive">Class Timeline</h2>  
            <div class="flex-child 1">
                <img src="./assets/inspire_class/time_c.png">
                <p class="p1">Kickoff & Basic<br>
                    Idea Development<br>
                    Phase ( 3hrs )</p>
                <h4 class="w">week 0</h4>
            </div>
            <img class="vector" src="./assets/inspire_class/tick.png">
            <div class="flex-child 2">
                <img src="./assets/inspire_class/time_d.png">
                <p class="p2">Ideation and<br>
                    Conecept Building<br>
                    Phase ( 3hrs )</p>
                <h4 class="w">week 1</h4>
            </div>
            <img class="vector" src="./assets/inspire_class/tick.png">
            <div class="flex-child 3">
                <img src="./assets/inspire_class/time_e.png">
                <p class="p3">Problem <br>Statement<br>
                    Allotments Phase<br>
                    ( 3hrs )</p>
                <h4 class="w">week 2</h4>
            </div>
            <img class="vector" src="./assets/inspire_class/tick.png">
            <div class="flex-child 4">
                <img src="./assets/inspire_class/time_f.png">
                <p class="p4">Problem/Doubt<br> Solving Phase
                    <br>( 3hrs )
                </p>
                <h4 class="w">week 3</h4>
            </div>
            <img class="vector" src="./assets/inspire_class/tick.png">
            <div class="flex-child 5">
                <img src="./assets/inspire_class/time_g.png">
                <p class="p5">Idea<br> Presentation<br> Phase ( 3hrs )</p>
                <h4 class="w">week 4</h4>
            </div>
            <img class="vector" src="./assets/inspire_class/tick.png">
            <div class="flex-child 6">
                <img src="./assets/inspire_class/time_h.png">
                <p class="p6">Graduation<br> Day<br> ( 3hrs )</p>
                <h4 class="w">week 5</h4>
            </div>

        </section>

        <section style="box-shadow:0 0 20px rgba(0,0,0,.25) inset">
            <div class="row">
                <div class="col-md-6 text-center">
                    <img class="mx-auto rounded" src="./assets/inspire_class/certificate.png" width="800px">
                </div>
                <div class="col-md-6 ">
                    <div class="col-md-offset-5" style="margin-left: 85px;margin-top:170px;">
                        <h2 style="font-family: Poppins;font-style: normal;font-weight: bold;font-size: 2.5em;line-height: 64px;color: #413E66;">Certificate of Graduation</h2>
                        <p class="mb-5" style="font-family: Poppins;font-style: normal;font-weight: normal;font-size: 26px;line-height: 34px;color: #000000;">After you complete the class, you’ll get your<br> verified Certificate of Graduation to Showcase
                            <br>the things you learntout of Inspire Class.
                        </p>
                    </div>
                </div>
                <a href="#" class="btn btn-primary badge-pill px-5 small mx-auto d-block" style="margin-top: 55px;box-shadow: inset 0px 10px 40px rgba(0, 0, 0, 0.25);">APPLY NOW</a>
            </div>
        </section>
        <section class="freq" style="font-family: 'Hind', sans-serif;background: #fff;color: #4d5974;">
            <h1 style="padding:20px 0 50px 0; font-weight:bold;font-size:34px;text-align:center;">Frequently Asked Questions</h1>
            <div class="container">
                <div class="row">
                    <div class="col-md-8 offset-lg-2">
                        <div id="accordion">
                            <div class="car" style="padding-bottom:20px;">
                                <div class="card-header" id="headingOne" style="background: #EAF2FF;border: 4px solid #FFFFFF;border-radius: 20px;">
                                    <h5 class="mb-0">
                                        <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne" style="color:black;   font-weight:bold; font-size:1.5rem;">
                                            1.Who is Eligible to Apply?
                                        </button>
                                    </h5>
                                </div>
                                <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion" style=" border-bottom: 1px solid #e5e5e5;font-family:Poppins">
                                    <div class="card-body" style="font-style: normal;font-weight: normal;font-size: 24px;line-height: 36px;color: #000000;background: #EAF2FF;">
                                        All undergraduate students and young professionals with a<br> maximum of 2 years of
                                        experience who are
                                        looking to build <br>foundational knowledge or to explore a particular domain are<br>
                                        eligible to apply
                                        for our programs. The final decision of enrolment
                                        would be taken by our team after evaluating all the candidates.
                                    </div>
                                </div>
                            </div>
                            <div class="car" style="padding-bottom:20px;">
                                <div class="card-header" id="headingTwo" st style="background: #EAF2FF;border: 4px solid #FFFFFF;box-sizing:border-box;box-shadow: 4px 6px 10px rgba(0, 0, 0, 0.05);border-radius: 13px;">
                                    <h5 class="mb-0">
                                        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo" style="color:black;   font-weight:bold; font-size:1.5rem;">
                                            2.Who is going to take the class?
                                        </button>
                                    </h5>
                                </div>
                                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion" style=" border-bottom: 1px solid #e5e5e5;font-family:Poppins">
                                    <div class="card-body" style="font-style: normal;font-weight: normal;font-size: 24px;line-height: 36px;color: #000000;background: #EAF2FF;">
                                        The classes would be taken by Industry experts from respective domains. In addition to
                                        educating the selected students, Industry experts would also provide mentorship wherever required.
                                    </div>
                                </div>
                            </div>
                            <div class="car" style="padding-bottom:20px;">
                                <div class="card-header" id="headingThree" style="background: #EAF2FF;border: 4px solid #FFFFFF;box-sizing:border-box;box-shadow: 4px 6px 10px rgba(0, 0, 0, 0.05);border-radius: 13px;">
                                    <h5 class="mb-0">
                                        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree" style="color:black;font-weight:bold; font-size:1.5rem;">
                                            3.What is the format of the class and cohort?
                                        </button>
                                    </h5>
                                </div>
                                <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion" style=" border-bottom: 1px solid #e5e5e5;font-family:Poppins">
                                    <div class="card-body" style="font-style: normal;font-weight: normal;font-size: 24px;line-height: 36px;color: #000000;background: #EAF2FF;">
                                        All the classes would be virtual-only. Each cohort will consist of 60 students from diverse backgrounds.
                                    </div>
                                </div>
                            </div>
                            <div class="car" style="padding-bottom:20px;">
                                <div class="card-header" id="headingFour" style="background: #EAF2FF;border: 4px solid #FFFFFF;box-sizing:border-box;box-shadow: 4px 6px 10px rgba(0, 0, 0, 0.05);border-radius: 13px;">
                                    <h5 class="mb-0">
                                        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour" style="color:black;   font-weight:bold; font-size:1.5rem;">
                                            4.what is the duration of the program?
                                        </button>
                                    </h5>
                                </div>
                                <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordion" style=" border-bottom: 1px solid #e5e5e5;font-family:Poppins">
                                    <div class="card-body" style="font-style: normal;font-weight: normal;font-size: 24px;line-height: 36px;color: #000000;background: #EAF2FF;">
                                        The duration of the program is 5 weeks. One is required to attend 3 hours of class every
                                        weekend for the
                                        entire duration of the program.
                                    </div>
                                </div>
                            </div>
                            <div class="car" style="padding-bottom:20px;">
                                <div class="card-header" id="headingFive" style="background: #EAF2FF;border: 4px solid #FFFFFF;box-sizing:border-box;box-shadow: 4px 6px 10px rgba(0, 0, 0, 0.05);border-radius: 13px;">
                                    <h5 class="mb-0">
                                        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive" style="color:black;   font-weight:bold; font-size:1.5rem;">
                                            5.Is the program paid?
                                        </button>
                                    </h5>
                                </div>
                                <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordion" style=" border-bottom: 1px solid #e5e5e5;font-family:Poppins">
                                    <div class="card-body" style="font-style: normal;font-weight: normal;font-size: 24px;line-height: 36px;color: #000000;background: #EAF2FF;">
                                        No. Our programs are not paid.
                                    </div>
                                </div>
                            </div>
                            <div class="car" style="padding-bottom:20px;">
                                <div class="card-header" id="headingSix" style="background: #EAF2FF;border: 4px solid #FFFFFF;box-sizing:border-box;box-shadow: 4px 6px 10px rgba(0, 0, 0, 0.05);border-radius: 13px;">
                                    <h5 class="mb-0">
                                        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix" style="color:black;   font-weight:bold; font-size:1.5rem;">
                                            6.What are the additional perks?
                                        </button>
                                    </h5>
                                </div>
                                <div id="collapseSix" class="collapse" aria-labelledby="headingSix" data-parent="#accordion" style=" border-bottom: 1px solid #e5e5e5;font-family:Poppins">
                                    <div class="card-body" style="font-style: normal;font-weight: normal;font-size: 24px;line-height: 36px;color: #000000;background: #EAF2FF;">
                                        As our organisation requires interns, program managers and other employees,
                                        we will consider all of you as our first preference to work with. In Addition to this,
                                        you will get lifetime access to our community and network.
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="col-lg-8 offset-lg-2"></div>
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