@extends('layouts.main')

@section('bodyClass', 'nav-nofixed')

@section('style')
    <style>
        .series .coming-soon {
            position: absolute;
            height: 100%;
            width: 100%;
            background-color: rgba(255, 255, 255, 0.75);

            display: flex;
            align-items: center;
            justify-content: center;

            color: #000;
            font-weight: 600;
            font-size: 24px;
            transition: .5s;

            /* text-shadow: 0px 0px 5px; */
        }

        .series .card:hover .coming-soon {
            transition: .5s;
            height: 0%;
            overflow: hidden;
        }

    </style>

@endsection
@section('content')
    <div class="jumbotron jumbotron-fluid">
        <div class="container">
            <p class="h1 font-weight-light text-center">Our Episodes</p>
            <p class="lead text-center">Watch our episodes with people from the industry & gain valuable knowledge from their industry experiences covering various industry-oriented topics! Start binge watching now!</p>
        </div>
    </div>

    <section class="container pt-5 my-5 series">
        <div class="row align-items-center justify-content-center">
            @foreach ($all_series as $series)
                <div class="col-md-6 col-lg-4">
                    <div class="card mx-auto mb-3 shadow border-0" style="max-width: 290px;border-radius:1rem;overflow:hidden">
                        <a class="" href="{{ $series->coming_soon == '0' ? '/episodes/' . $series->id . '' : '#' }}">
                            <div class="image-center-cover" style="padding-top:100%;background-image:url('/uploads/series/{{ $series->id }}.{{ $series->image_ext }}')"></div>
                            <div class="card-body text-center">
                                <p class="h5 font-weight-normal">{{ $series->name }}</p>
                            </div>
                        </a>
                        @if ($series->comming_soon == '1')
                            <div class="coming-soon">Coming Soon</div>
                        @endif
                    </div>
                </div>
            @endforeach

        </div>
    </section>

@endsection
