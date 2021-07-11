@extends('layouts.main')

@section('content')
    <div class="jumbotron jumbotron-fluid">
        <div class="container">
            <p class="h1 font-weight-light text-center">Meet our <b>#Inspire Community</b> Members</p>
        </div>
    </div>
    <section class="container community">

        <div class="row">
            @foreach ($members->shuffle()->where('visible', 1) as $member)
                <div class="col-md-6 col-lg-6 col-xl-4">
                    <div class="member d-flex card flex-row">
                        <div class="image mr-3 image-center-cover" style="height:160px;background-image: url('/uploads/community/{{ $member->id }}.{{ $member->image_ext }}')"></div>
                        <div class="d-flex justify-content-between flex-column">
                            <div>
                                <p class="name">{{ $member->name }}</p>
                                <p class="company mb-2">{{ $member->company }}</p>
                                <p class="position">{{ $member->role }}</p>
                            </div>
                            <div class="social">
                                <a href="{{ $member->link }}" target="blank"><i class="fab fa-linkedin"></i> LinkedIn </a>
                            </div>
                        </div>
                    </div>
                </div>

            @endforeach


        </div>

    </section>

@endsection
