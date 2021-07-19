<!DOCTYPE html>
<html lang="en">

<head>
    @include('includes.head')

    @yield('style')
</head>

<body class="@yield('bodyClass')">
    @include('includes.preloader')
    <main>

        @include('includes.navbar')


        <div style="min-height: 80vh">
            @yield('content')
        </div>

        @include('includes.footer')

        @include('includes.foot')

    </main>

    @yield('script')
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
