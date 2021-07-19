@extends('layouts.main')

@section('bodyClass', 'nav-nofixed')

@section('style')
    <style>
        .freq .btn-link::after {

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
            margin: -12px 10px;
        }

        .freq .btn-link.collapsed::after {

            content: '\FF0B';
            color: black;
            padding-top: 0px;
        }

    </style>
    <style>
        .time .main-timeline-section {
            position: relative;
            width: 100%;
            margin: auto;
        }

        .time .main-timeline-section .conference-center-line {
            position: absolute;
            width: 4px;
            height: 100%;
            top: 0;
            left: 50%;
            margin-left: -2px;
            background: #EAF2FF;
            z-index: -1;
        }

        .time .timeline-article {
            width: 100%;
            position: relative;
            margin: 40px 0px;
            min-height: 135px;
            z-index: 0;
        }

        .time .timeline-article .content-date {
            position: absolute;
            top: -69%;
            left: 42%;
            margin-left: -150px;
            transform: translateY(50%);

            font-style: normal;
            font-weight: bold;
            font-size: 47px;
            line-height: 96px;
            display: flex;
            align-items: center;
            color: #e6e6e6;
            /* opacity: 0.3; */
        }

        .time .timeline-article .cont-date {
            position: absolute;
            top: -69%;
            left: 71%;
            margin-left: -150px;
            transform: translateY(50%);

            font-style: normal;
            font-weight: bold;
            font-size: 47px;
            line-height: 96px;
            display: flex;
            align-items: center;
            color: #e6e6e6;
            /* opacity: 0.3; */
        }

        .time .timeline-article .meta-date {
            position: absolute;
            left: 50%;
            width: 25px;
            height: 25px;
            transform: translateY(-50%);
            margin-left: -13px;
            border-radius: 100%;
            background: #0093D1;
            border: 3px solid #d9dadf;
            box-shadow: 0px 2px 2px rgba(0, 0, 0, .35);

        }

        .time .timeline-article .content-box {
            position: absolute;
            background-color: #fff;
            width: 40%;
            /* height: 202px; */
            background: linear-gradient(273.04deg, #F9F9F9 18.28%, #FFFFFF 124.74%);
            background: #f9f9f9;
            border-radius: 40px;
            top: 9%;
            transform: translateY(-50%);
            padding: 8px;
            left: 50%;
            margin-left: 40px;

            border: 5px solid #eeeeee;

        }



        .time img {
            width: 30%;
            height: 100%;
        }

        .time .main-timeline-section {
            position: relative;
            width: 100%;
            margin: auto;
            margin-top: 1.5rem;
        }

        .time .last {
            margin: 0 0 10px;
            margin-left: 152px;
            position: absolute;
            /* padding-left: 39px; */
            margin-top: -104px;

            font-style: normal;
            font-weight: 600;
            font-size: 19px;
            line-height: 36px;
            text-align: center;
            /* width: 230px; */
            width: 60%;
            color: #000000;
        }

        .time .first {
            margin: 0 0 10px;
            /* margin-left: -10px; */
            position: absolute;
            padding-left: 1rem;
            margin-top: 20px;

            text-align: center;

            font-style: normal;
            font-weight: 600;
            font-size: 19px;
            width: 60%;
            line-height: 36px;
            color: #000000;
        }

        .time .per-image {
            display: inline-block;
            text-align: right;
            margin-right: 22px;
            padding-top: 10px;
            padding-left: 15px;
        }

        .time .content-left-container .content-box {
            left: 5%;
            margin-left: 15px;
        }

        .time .content-left-container .content-date {
            margin-left: 50px;
        }

        @media (max-width:1200px) {
            .time .last {
                margin-left: 100px;
                margin-top: -95px;
            }

            .time .first {
                margin-top: 0;
            }
        }

        @media (max-width:992px) {
            .time .content-left-container .content-box {
                /* left: 50%; */
                margin-left: 40px;
            }

            .time .timeline-article .cont-date,
            .time .timeline-article .content-date {
                display: none;
            }

            .time .timeline-article .content-box,
            .time .timeline-article .meta-date,
            .time .main-timeline-section .conference-center-line {
                left: 32%;
            }

            .time .timeline-article .content-box {
                width: 60%;
            }

            .time .first {
                margin-top: 25px;
            }

            .time .timeline-article .content-box {
                border-radius: 25px;
            }

            .time .timeline-article .cont-date,
            .time .timeline-article .content-date {
                top: -100px;
                left: 24%;
                display: block;
            }
        }

        @media (max-width: 768px) {
            .time .first {
                margin-top: 10px;
            }

            .time .timeline-article .content-box,
            .time .timeline-article .meta-date,
            .time .main-timeline-section .conference-center-line {
                left: 0%;
            }

            .time .timeline-article .content-box {
                width: 90%;
            }

            .time img {
                width: 22%;
            }

            .time .timeline-article .cont-date,
            .time .timeline-article .content-date {
                display: block;
                top: -173px;
                left: 65%;
            }
        }

        @media(max-width: 576px) {
            .time .timeline-article .content-box {
                width: 80%;
            }

            .time .timeline-article .content-box,
            .time .timeline-article .meta-date,
            .time .main-timeline-section .conference-center-line {
                left: 10%;
            }

            .time .first,
            .time .last {
                font-size: 16px;
                line-height: 26px;
            }

            .time .first {
                margin-top: 18px;
            }

            .time .last {
                margin-top: -70px;
            }

            .time .timeline-article .cont-date,
            .time .timeline-article .content-date {
                display: block;
                top: -173px;
                left: 65%;
            }
        }

        @media(max-width: 490px) {

            .time .timeline-article .content-box,
            .time .timeline-article .meta-date,
            .time .main-timeline-section .conference-center-line {
                left: 5%;
            }

            .time .timeline-article .content-box {
                margin-left: 22px;
            }

            .time .timeline-article .content-box {
                width: 90%;
            }

            .time .first,
            .time .last {
                font-size: 14px;
                line-height: unset;
            }

            .time .first {
                padding: 0;
                width: 70%;
                margin-top: 10px;
            }

            .time .last {
                margin-left: 52px;
                width: 70%;
                margin-top: -54px;
            }

            .time .timeline-article .cont-date,
            .time .timeline-article .content-date {
                display: block;
                top: -173px;
                left: 75%;
            }
        }

    </style>

@endsection

@section('content')
    <section class="bg-dark text-light" style="background:url('/assets/inspire_class/hero_section_bg.png');background-position: center;background-size: cover;">
        <div class="container py-5">

            <div class="row">
                <div class="col-md-4 text-center">
                    <img class="mx-auto rounded" src="/assets/inspire_class/inspire_class_logo.jpg" width="200px">

                </div>
                <div class="col-md-8 text-center text-md-left">
                    <div class="my-5">
                        <h1>What is Inspire Class?</h1>
                        <p class="mb-4">Inspire Class is an Interactive and Experiential Learning concept led by Industry Experts to enhance your Foundational Knowledge. </p>
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

            <div class="section-title  mb-5" id="uclasses">
                <h2 class="text-center font-weight-bold" style="color:#413e66">Upcoming Classes</h2>

            </div>

            <div id="upcoming" class="swiper-container">
                <div class="swiper-wrapper">
                    {{-- <div class="card-body p-2">
                        <img class="mb-2" src="/assets/inspire_class/rectangle 20.png" width="100%" alt="">
                        <p class="h5 font-weight-bolder">{{ $class->title }}</p>
                        <p class="">{{ $class->expert->name }} ({{ $class->expert->designation }})</p>
                    </div> --}}
                    {{-- {{ $inspire_classes }} --}}
                    <?php for ($i = 0; $i < 5; $i++) { ?>
                    <div class="swiper-slide">
                        <div class="card mx-auto" style="width: 18rem;">
                            <img src="/assets/inspire_class/dummy_class_image_cs.png" style="filter:blur(2px)" alt="">
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
                            <img src="/assets/inspire_class/dummy_class_image_past_cs.png" style="filter:blur(2px)" alt="">
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

    <section class="container">
        <section class="time">
            <p class="text-center h1 font-weight-bolder mb-5" style="color:#413e66">Class Timeline</p>
            {{-- <div class="row"> --}}
            {{-- <div class="col-md-12 col-sm-12 col-xs-12"> --}}
            <section class="main-timeline-section">
                <div class="timeline-start"></div>
                <div class="conference-center-line"></div>
                <div class="conference-timeline-content">
                    <div class="timeline-article content-right-container">
                        <div class="content-date">
                            <span>Week 0</span>
                        </div>
                        <div class="meta-date"></div>
                        <div class="content-box">
                            <p class="first">Kickoff & Basic Idea Development Phase (3hrs)
                            </p>
                            <div class="per-image pull-left ">
                                <img src="./assets/inspire_class/time_c.png">
                            </div>
                        </div>
                    </div>
                    <div class="timeline-article content-left-container">
                        <div class="cont-date">
                            <span>Week 1</span>
                        </div>
                        <div class="meta-date"></div>
                        <div class="content-box">
                            <div class="person-image pull-left ">
                                <img src="./assets/inspire_class/time_d.png">
                            </div>
                            <p class="last">Ideation and Concept Building Phase (3hrs)
                            </p>
                        </div>
                    </div>
                    <div class="timeline-article content-right-container">
                        <div class="content-date">
                            <span>Week 2</span>
                        </div>
                        <div class="meta-date"></div>
                        <div class="content-box">
                            <p class="first">Problem Statement Allotments Phase (3hrs)
                            </p>
                            <div class="per-image pull-left ">
                                <img src="./assets/inspire_class/time_e.png">
                            </div>
                        </div>
                    </div>
                    <div class="timeline-article content-left-container">
                        <div class="cont-date">
                            <span>Week 3</span>
                        </div>
                        <div class="meta-date"></div>
                        <div class="content-box">
                            <div class="person-image pull-left ">
                                <img src="./assets/inspire_class/time_f.png">
                            </div>

                            <p class="last">Problem/Doubt Solving Phase (3hrs)
                            </p>
                        </div>
                    </div>
                </div>
                <div class="timeline-article content-right-container">
                    <div class="content-date">
                        <span>Week 4</span>
                    </div>
                    <div class="meta-date"></div>
                    <div class="content-box">
                        <p class="first">Idea Presentation Phase (3hrs)
                        </p>
                        <div class="per-image pull-left ">
                            <img src="./assets/inspire_class/time_g.png">
                        </div>
                    </div>
                </div>
                <div class="timeline-article content-left-container">
                    <div class="cont-date">
                        <span>Week 5</span>
                    </div>
                    <div class="meta-date"></div>
                    <div class="content-box">
                        <div class="person-image pull-left ">
                            <img src="./assets/inspire_class/time_h.png">
                        </div>
                        <p class="last">Graduation Day (3hrs)
                        </p>
                    </div>
                </div>
            </section>
            {{-- </div> --}}
            {{-- <div class="timeline-end"></div> --}}
            {{-- </div> --}}
        </section>


    </section>

    <section style="box-shadow:0 0 20px rgba(0,0,0,.25) inset;background: #f1f1f1;">
        <div class="container my-5">

            <div class="row">
                <div class="col-lg-5 col-xl-6 d-flex align-items-center justify-content-between">
                    <div class="pr-0 pr-md-5">
                        <img class="mx-auto shadow " style="border-radius: 2.5rem" src="./assets/inspire_class/certificate.png" width="100%">
                    </div>
                </div>
                <div class="col-lg-7 col-xl-6 text-center text-lg-left">
                    <div class="mt-5">
                        <h2 style="font-style: normal;font-weight: bold;font-size: 2.5em;line-height: 64px;color: #413E66;">Certificate of Graduation</h2>
                        <p class="mb-5" style="font-size: 18px;color: #000000;">After you complete the class, you’ll get your<br> verified Certificate of Graduation to Showcase
                            <br>the things you learn out of Inspire Class.
                        </p>
                        <a href="#" class="btn btn-primary py-2 badge-pill px-5 small mx-auto" style="box-shadow: inset 0px 10px 40px rgba(0, 0, 0, 0.25);">APPLY NOW</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="freq" style="background: #fff;color: #4d5974;">
        <h1 style="padding:20px 0 50px 0; font-weight:bold;font-size:34px;text-align:center;">Frequently Asked Questions</h1>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <div id="accordion">
                        <div class="car" style="padding-bottom:20px;">
                            <div class="card-header" id="headingOne" style="background: #EAF2FF;border: 4px solid #FFFFFF;border-box;box-shadow: 4px 6px 10px rgba(0, 0, 0, 0.05);border-radius: 13px;">
                                <h5 class="mb-0">
                                    <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne" style="color:black;   font-weight:bold; font-size:1.5rem;">
                                        1.Who is Eligible to Apply?
                                    </button>
                                </h5>
                            </div>
                            <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion" style=" border-bottom: 1px solid #e5e5e5;">
                                <div class="card-body mt-3" style="overflow:hidden;border-radius:1rem;font-style: normal;font-weight: normal;font-size: 24px;line-height: 36px;color: #000000;background: #EAF2FF;">
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
                            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion" style=" border-bottom: 1px solid #e5e5e5;">
                                <div class="card-body mt-3" style="overflow:hidden;border-radius:1rem;font-style: normal;font-weight: normal;font-size: 24px;line-height: 36px;color: #000000;background: #EAF2FF;">
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
                            <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion" style=" border-bottom: 1px solid #e5e5e5;">
                                <div class="card-body mt-3" style="overflow:hidden;border-radius:1rem;font-style: normal;font-weight: normal;font-size: 24px;line-height: 36px;color: #000000;background: #EAF2FF;">
                                    All the classes would be virtual-only. Each cohort will consist of 60 students from diverse backgrounds.
                                </div>
                            </div>
                        </div>
                        <div class="car" style="padding-bottom:20px;">
                            <div class="card-header" id="headingFour" style="background: #EAF2FF;border: 4px solid #FFFFFF;box-sizing:border-box;box-shadow: 4px 6px 10px rgba(0, 0, 0, 0.05);border-radius: 13px;">
                                <h5 class="mb-0">
                                    <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour" style="color:black;   font-weight:bold; font-size:1.5rem;">
                                        4.What is the duration of the program?
                                    </button>
                                </h5>
                            </div>
                            <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordion" style=" border-bottom: 1px solid #e5e5e5;">
                                <div class="card-body mt-3" style="overflow:hidden;border-radius:1rem;font-style: normal;font-weight: normal;font-size: 24px;line-height: 36px;color: #000000;background: #EAF2FF;">
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
                            <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordion" style=" border-bottom: 1px solid #e5e5e5;">
                                <div class="card-body mt-3" style="overflow:hidden;border-radius:1rem;font-style: normal;font-weight: normal;font-size: 24px;line-height: 36px;color: #000000;background: #EAF2FF;">
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
                            <div id="collapseSix" class="collapse" aria-labelledby="headingSix" data-parent="#accordion" style=" border-bottom: 1px solid #e5e5e5;">
                                <div class="card-body mt-3" style="overflow:hidden;border-radius:1rem;font-style: normal;font-weight: normal;font-size: 24px;line-height: 36px;color: #000000;background: #EAF2FF;">
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



@endsection

@section('script')
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
@endsection
