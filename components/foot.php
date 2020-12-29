<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.1/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

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