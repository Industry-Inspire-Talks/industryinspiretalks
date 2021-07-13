@extends('layouts.main')

@section('bodyClass', 'nav-nofixed')

@section('content')

    <div class="jumbotron jumbotron-fluid">
        <div class="container">
            <div class="row">
                <div class="col-lg-10">
                    <p class="h1 font-weight-normal"><a class="text-dark font-weight-light" href="episodes.php"><i class="fa fa-arrow-left small"></i></a> {{ $series->name }}</p>
                    <p class="lead m-0">{{ $series->description }}</p>
                </div>
                <div class="col-lg-2 d-none d-lg-block">
                    <div class="image-center-cover shadow" style="padding-top:100%;background-image:url('/uploads/series/{{ $series->id }}.{{ $series->image_ext }}');border-radius:1rem;overflow:hidden"></div>
                </div>
            </div>



            <section class="container">
                <div class="form-group">
                    <input type="search" class="form-control" placeholder="Search for episodes">
                </div>

                @foreach ($series->episodes->sortByDesc('id') as $episode)

                    <div id="">
                        <div class="card mb-3">
                            <div class="card-body">
                                <p class="h6 m-0 text-left">{{$episode->title}}</p>
                            </div>
                            <iframe width="100%" height="500" src="{{$episode->link}}" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        </div>
                    </div>
                @endforeach
            </section>
        </div>
    </div>
@endsection
