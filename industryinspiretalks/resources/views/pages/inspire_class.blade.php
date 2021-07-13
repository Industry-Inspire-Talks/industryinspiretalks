@extends('layouts.main')

@section('bodyClass', 'nav-nofixed')

@section('content')
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
