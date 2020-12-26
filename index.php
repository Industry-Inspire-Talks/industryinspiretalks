<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="Description" content="Enter your description here" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.0/css/all.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">

    <title>Title</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg">
        <a class="navbar-brand" href="#">
            <img src="assets/img/init_logo.jpg" alt="" class="logo">
            Industry Inspire Talks
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav">
            <i class="fa fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="#about_us">About Us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#explore">Explore</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#community">Our Community</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#contact">Contact</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        More
                    </a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton">
                        <a class="dropdown-item" href="#">Careers</a>
                        <a class="dropdown-item" href="#">Events</a>
                        <a class="dropdown-item" href="#">Our Blogs</a>
                    </div>
                </li>
            </ul>
        </div>
    </nav>
    <!-- BANNER SECTION -->
    <section id="hero" class="d-flex align-items-center">
        <div class="container py-1">
            <div class="row">
                <div class="col-md-6">
                    <div class="info">
                        <h2>Welcome to <br>Industry <span>Inspire</span> Talks Community</h2>
                    </div>

                    <div>
                        <a href="#about_us" class="btn btn-primary">Get Started</a>
                    </div>
                </div>
                <div class="col-md-6 text-center">
                    <img src="assets/img/undraw_experts3_3njd.svg" alt="" class="img-fluid">
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
                <p class="h6">Industry Inspire Talks is a non-profit community founded by Omkar Shinde in August 2020.</p>
                <p class="text-justify mt-3">We believe in educating the Students / Working Professionals / Entrepreneurs by providing them guidance from the Industry Experts & helping them to make an impact in their lives by transforming themselves into an Industry-Leader.</p>
                <!-- <p> It is a platform where we invite successful people from the industry to share their career journeys. We inspire people in three ways. We have three categories i.e.. Interview Series, Podcasts Series, Career Stories. 'Interview series' involves people who interned at companies & converted that internship opportunity into a full-time offer. 'Podcasts Series' involves people with 5-10 years of Industry Experience who hold big positions at companies like Founder, MD, CEO, Managers, etc. sharing their industry experiences in our series. 'Career Stories' is where we invite people who achieved immeasurable success in their careers with 10+ years of industry experience in a specific industry/company. -->
                <a href="#" class="btn btn-primary mt-4"> More About Us</a>
            </div>
        </div>
    </section>
    <!-- About Section End -->

    <section class="container team">
        <p class="title text-center">Meet Our Team</p>

        <div id="team" class="swiper-container">
            <div class="swiper-wrapper">
                <?php for ($i = 0; $i < 8; $i++) { ?>
                    <div class="swiper-slide">
                        <div class="member">
                            <div class="image">
                                <img src="" alt="">
                            </div>
                            <p class="name">Lorem Ipsum</p>
                            <p class="position">Lorem Ipsum</p>
                        </div>
                    </div>
                <?php } ?>

            </div>
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
        </div>

    </section>

    <section class="container board">
        <p class="title text-center">Meet Our Board of Directors</p>
        <div class="row">
            <div class="mb-3 col-lg-3 col-sm-6">
                <div class="director">
                    <div class="">
                        <div class="image">
                            <img src="" alt="">
                        </div>
                        <p class="name">Omkar Shinde</p>
                        <p class="position">Founder & CEO</p>
                    </div>
                    <div class="social">
                        <a href="https://www.linkedin.com/in/omkar-shinde-310aa5193/"><i class="fab fa-linkedin"></i></a>
                        <a href="javascript:0" disabled><i class="fab fa-facebook"></i></a>
                        <a href="javascript:0" disabled><i class="fab fa-twitter"></i></a>
                        <a href="javascript:0" disabled><i class="fab fa-instagram"></i></a>
                        <a href="javascript:0" disabled><i class="fab fa-google-plus"></i></a>
                    </div>
                </div>
            </div>
            <div class="mb-3 col-lg-3 col-sm-6">
                <div class="director">
                    <div class="">
                        <div class="image">
                            <img src="" alt="">
                        </div>
                        <p class="name">Satya Prakash Mohapatra</p>
                        <p class="position">Chief Marketing Officer</p>
                    </div>
                    <div class="social">
                        <a href="https://www.linkedin.com/in/satya-prakash-mohapatra-153926129/"><i class="fab fa-linkedin"></i> </a>
                        <a href="javascript:0" disabled><i class="fab fa-facebook"></i> </a>
                        <a href="javascript:0" disabled><i class="fab fa-twitter"></i> </a>
                        <a href="javascript:0" disabled><i class="fab fa-instagram"></i> </a>
                        <a href="javascript:0" disabled><i class="fab fa-google-plus"></i> </a>
                    </div>
                </div>
            </div>
            <div class="mb-3 col-lg-3 col-sm-6">
                <div class="director">
                    <div class="">
                        <div class="image">
                            <img src="" alt="">
                        </div>
                        <p class="name">Vishal Nair</p>
                        <p class="position">Chief People Officer</p>
                    </div>
                    <div class="social">
                        <a href="https://www.linkedin.com/in/vishalnairm/"><i class="fab fa-linkedin"></i> </a>
                        <a href="javascript:0" disabled><i class="fab fa-facebook"></i> </a>
                        <a href="javascript:0" disabled><i class="fab fa-twitter"></i> </a>
                        <a href="javascript:0" disabled><i class="fab fa-instagram"></i> </a>
                        <a href="javascript:0" disabled><i class="fab fa-google-plus"></i> </a>
                    </div>
                </div>
            </div>
            <div class="mb-3 col-lg-3 col-sm-6">
                <div class="director">
                    <div class="">
                        <div class="image">
                            <img src="" alt="">
                        </div>
                        <p class="name">Danish Shaikh</p>
                        <p class="position">Chief Technology Officer</p>
                    </div>
                    <div class="social">
                        <a href="https://www.linkedin.com/in/shaikhdanish04/"> <i class="fab fa-linkedin"></i> </a>
                        <a href="javascript:0" disabled><i class="fab fa-facebook"></i> </a>
                        <a href="javascript:0" disabled><i class="fab fa-twitter"></i> </a>
                        <a href="javascript:0" disabled><i class="fab fa-instagram"></i> </a>
                        <a href="javascript:0" disabled><i class="fab fa-google-plus"></i> </a>

                    </div>
                </div>
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

            <h4 class="text-center mt-5 mb-4 text-capitalize">Industry Expo 2020</h4>

            <div id="expo" class="swiper-container">
                <div class="swiper-wrapper">
                    <?php for ($i = 0; $i < 8; $i++) { ?>
                        <div class="swiper-slide">
                            <div class="card" style="width: 18rem;">
                            <div class="card-img-top">
                            </div>    
                                <div class="card-body">
                                    <p class="card-title m-0">Path to Product Management</p>
                                    <p class="small">Industry Expo 2020</p>
                                    <hr>
                                    <p class="card-text">Welcome to Day 1 of Industry Expo 2k20</p>
                                    <a href="javascript:0" class="btn btn-primary btn-sm">Watch Now</a>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                </div>
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
            </div>

            <hr>
            <h4 class="text-center mt-5 mb-5 text-capitalize">Industry Connect</h4>

            <div id="connect" class="swiper-container">
                <div class="swiper-wrapper">
                    <?php for ($i = 0; $i < 8; $i++) { ?>
                        <div class="swiper-slide">
                            <div class="card" style="width: 18rem;">
                            <div class="card-img-top">
                            </div>    
                                <div class="card-body">
                                    <p class="card-title m-0">Path towards Student Entrepreneurship</p>
                                    <p class="small">Industry Connect</p>
                                    <hr>
                                    <p class="card-text">Welcome to Day 1 of Industry Connect</p>
                                    <a href="javascript:0" class="btn btn-primary btn-sm">Watch Now</a>
                                </div>
                            </div>
                        </div>
                    <?php } ?>

                </div>
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>

            </div>
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
                <?php for ($i = 0; $i < 6; $i++) { ?>
                    <div class="col-md-6 col-lg-6 col-xl-4">
                        <div class="member d-flex card flex-row">
                            <div class="image mr-3"></div>
                            <div class="d-flex justify-content-between flex-column">
                                <div>
                                    <p class="name">Ritwik Deshpande</p>
                                    <p class="company mb-2">JP Morgan</p>
                                    <p class="position">Software Development Engineer</p>
                                </div>
                                <div class="social">
                                    <a href="https://www.linkedin.com/in/ritwik-deshpande-ba4b51170/"><i class="fab fa-linkedin"></i> LinkedIn </a>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php } ?>

            </div>
            <p class="text-center">
                <button class="btn">Community <i class="fa fa-arrow-right"></i></button>
            </p>
        </div>
    </section>
    <!-- view more community -->

    <!-- End of view more community -->

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
    <footer id="footer">
        <div class="footer-top">
            <div class="row">
                <div class="col-10 col-sm-10 col-lg-3 col-md-6">
                    <div class="footer-info">
                        <h3>Industry Inspire Talks</h3>
                        <p>
                            9/2 Dhanashri CHS,
                            Nanda Patkar Road,
                            Vile Parle(E),
                            Mumbai 400057, India<br><br>
                            <strong>Phone:</strong> <br /> +91 8850810515<br>
                            <strong>Email:</strong> industryinspiretalks2020@gamil.com<br>
                        </p>
                    </div>
                </div>

                <div class="col-10 col-sm-10 col-lg-2 col-md-6 footer-links">
                    <h4>Useful Links</h4>
                    <ul>
                        <li> <a href="#">Home</a></li>
                        <li> <a href="#">About us</a></li>
                        <li> <a href="#">Our Team</a></li>
                        <li> <a href="#">Our Episodes</a></li>
                        <li> <a href="#">Our Community</a></li>
                        <li> <a href="#">Connect US</a></li>
                    </ul>
                </div>

                <div class="col-10 col-sm-10 col-lg-3 col-md-6 footer-links">
                    <!-- <h4>Our Services</h4> -->
                    <ul class="mt-5">
                        <li><a href="#">Carrer </a></li>
                        <li><a href="#">Our Channel</a></li>

                </div>

                <div class="col-12 col-sm-12 col-lg-4 col-md-6 footer-newsletter">
                    <h4>Our Newsletter</h4>
                    <p>Feel free to drop your email here So you will be updated with US</p>
                    <form action="" method="post">
                        <form class="form-inline">
                            <div class="d-flex">
                                <input type="email" name="" id="" class="form-control mr-2" placeholder="" aria-describedby="helpId">
                                <button class="btn btn-dark" style="background:#1bb1dc">Subscribe</button>
                            </div>
                        </form>
                    </form>
                </div>
            </div>
        </div>

        <div class="copyright">
            &copy; Copyright <strong><span>Industry Inspire Talks</span></strong>. All Rights Reserved
        </div>

    </footer>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.1/umd/popper.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

</body>

<script>
    $(document).ready(function() {
        if (scrollY > 0) {
            $('.navbar').addClass('top');
        } else {
            $('.navbar').removeClass('top');
        }
        var swiper = new Swiper('#expo.swiper-container,#connect.swiper-container', {
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
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

        var swiper = new Swiper('#team.swiper-container', {
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
            slidesPerView: 2,
            loop: true,
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
</script>

</html>