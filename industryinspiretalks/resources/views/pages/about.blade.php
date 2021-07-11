@extends('layouts.main')


@section('content')
    <section class="container pt-5">
        <p class="section-header">About Us</p>
        <p class="font-weight-bold text-center">Industry Inspire Talks is an organization started by Omkar Shinde in August 2020, registered under MSME.</p>
        <p class="text-justify">We believe in educating the Students/Working Professionals/Entrepreneurs by providing them guidance from the Industry Experts & helping them to make an impact in their lives by transforming themselves into an Industry-Leader.</p>
        <p class="text-justify">It is a platform where we invite successful people from the industry to share their career journeys. We inspire people in three ways. We have three categories i.e.. Interview Series, Podcasts Series, Career Stories.</p>

        <p class="text-justify">'Interview series' involves people who interned at companies & converted that internship opportunity into a full-time offer. Podcasts Series involves professionals and entrepreneurs with 5+ years of Industry experience holding positions of Founder, MD, CEO, Managers sharing their inspiring industry experiences in our series. 'Career Stories' is where we invite people who achieved immeasurable success in their careers with 10+ years of industry experience in a specific industry/company.We organize Industry Oriented Events/ Industry Webinars/Industry Workshops for our #inspire community which involves speakers from around the globe representing different industries/companies.</p>
        <p class="text-justify">This is what we do here, we inspire people to achieve greater heights in their career by helping them connect with successful people from the industry! Your career is our priority! Our mission is to empower every person on this planet to achieve more in their future careers. Our vision is to inspire people with their stories of hustle & dedication towards their dreams and make an impact in their lives! We are here to connect you with leaders of the industry so you can transform yourself into a leader. Come let's do something for the community. </p>
        <p> If you are a community person too, this is the place where you truly belong! Join the #Inspire Community!</p>
    </section>
    <section class="container board">
        <h1 class="title text-center mb-5">Our Board of Directors</h1>
        <div class="row justify-content-center">
            @foreach ($staffs->whereIn('id', [1, 2, 3, 4]) as $staff)
                <div class="mb-3 col-lg-3 col-sm-6">
                    <div class="director">
                        <div class="">
                            <div class="image image-center-cover" style="background-image: url('/uploads/staff/{{ $staff->id }}.{{ $staff->image_ext }}')">
                            </div>
                            <p class="name">{{ $staff->name }}</p>
                            <p class="position">{{ $staff->designation }}</p>
                        </div>
                        <div class="social">
                            @foreach ($staff->social_links as $index => $link)
                                <a href="{{ $link == '' ? 'javascript:0' : $link }}" {{ $link == '' ? 'disabled' : 'target="blank"' }}><i class="fab fa-{{ $index }}"></i></a>
                            @endforeach
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </section>

    <section class="container">
        <h1 class="text-center title">Our Team Members</h1>

        <div class="d-flex flex-wrap justify-content-center align-items-center text-center">


            @foreach ($staffs->except([1, 2, 3, 4])->shuffle()->where('visible', 1)
        as $staff)

                <div class="card m-2 border-0" style="width:200px">
                    <div class="card-body mb-3">
                        <div class="image-center-cover mb-3" style="border-radius:1rem;overflow:hidden;height:200px;background-image: url('/uploads/staff/{{ $staff->id }}.{{ $staff->image_ext }}')"></div>
                        <h5 class="card-title">{{ $staff->name }}</h5>
                        <p class="card-text">{{ $staff->designation }}</p>
                    </div>
                </div>

            @endforeach

        </div>
    </section>

@endsection
