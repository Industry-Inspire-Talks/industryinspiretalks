@extends('layouts.main')

@section('bodyClass', 'nav-nofixed')

@section('content')
    <div class="jumbotron jumbotron-fluid">
        <div class="container">
            <p class="h1 font-weight-light text-center"><b>Our Events</b></p>
        </div>
    </div>
    <section id="expo" class="container dummy">

        <p class="text-center mt-3 mb-5 text-capitalize h1">Streamed Online Events</p>


        <div class="row text-center">
            @foreach ($events as $event)
                <div class="col-md-6 col-lg-4 mb-3">

                    <div class="card" style="width: 18rem;height:100%">
                        <div class="card-body pb-0">
                            <p class="card-title m-0">{{ $event->title }}</p>
                            <p class="small">{{ $event->category }}</p>
                        </div>
                        <div class=" image-center-cover" style="height:160px;background-image: url('/uploads/events/{{ $event->id }}.{{ $event->image_ext }}')"></div>
                        <div class="card-body">
                            <p class="card-text des mb-3">{{ $event->description }}</p>
                            <a href="{{ $event->link }}" target="blank" class="btn btn-primary btn-sm">Watch Now</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

    </section>

@endsection
