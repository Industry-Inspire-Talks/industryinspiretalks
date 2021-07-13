@extends('layouts.main')

@section('bodyClass', 'nav-nofixed')

@section('style')
    <link rel="stylesheet" href="assets/css/stories.css?1530H">
@endsection
@section('content')
    <div class="jumbotron jumbotron-fluid">
        <div class="container">
            <p class="h1 font-weight-light text-center">Get inspired by reading our <b>Inspire Stories</b></p>
        </div>
    </div>
    <section class="container">
        <div class="row mb-3">

            @foreach ($inspire_stories as $story)
                <div class="col-lg-4 col-md-6 mb-3 ">
                    <div class="card story-card d-flex justify-content-between" style="height:100%">
                        <div class="py-2 px-3 d-flex align-items-center justify-content-between">
                            <div class="d-flex align-items-center justify-content-between">
                                <div class="image-center-cover rounded-circle mr-2 flex-shrink-0" style="width:50px;height: 50px;background-image : url('/uploads/industry_leaders/{{ $story->leader->id }}.{{ $story->leader->image_ext }}')"></div>
                                <div>
                                    <p class="name">{{ $story->leader->name }}</p>
                                    <p class="position"><i class="text-muted">{{ $story->leader->position }}</i> {!! $story->leader->company != null ? 'at <i class="text-muted">' . $story->leader->company . '</i>' : '' !!} </p>
                                </div>
                            </div>
                        </div>

                        <div>
                            <div class="img-square" style="background-image : url('/uploads/inspire_stories/{{ $story->id }}.{{ $story->image_ext }}')" style="background: #f1f1f1;"></div>
                            <a href="{{ $story->link }}" target="blank">
                                <div class="py-2 px-3 d-flex align-items-center justify-content-between">
                                    <p class="m-0"><i class="far fa-thumbs-up "></i></p>
                                    <p class="m-0"><i class="far fa-comment "></i></p>
                                    <p class="m-0"><i class="fa fa-share-alt"></i></p>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            @endforeach


        </div>
    </section>

@endsection
