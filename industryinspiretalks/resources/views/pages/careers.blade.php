@extends('layouts.main')

@section('bodyClass', 'nav-nofixed')

@section('content')
    <div class="jumbotron jumbotron-fluid">
        <div class="container">
            <p class="h1 font-weight-light text-center"><b>Careers</b> With Us !!!</p>
        </div>
    </div>
    <section class="container dummy">

        <div class="row">

            @foreach ($careers as $career)
                <div class="col-xl-4 col-md-6 mb-4">
                    <div class="card shadow border-0" style="border-radius: 1rem;height:100%;overflow:hidden">
                        <div class="card-body bg-dark flex-grow-0">
                            <p class="h5 m-0 text-light">{{ $career->title }}</p>
                        </div>
                        <div class="card-body d-flex flex-column align-items-between justify-content-between" style="background: linear-gradient(45deg, #e9ecef, #ededed);">
                            <div>
                                <p class=" small text-justify">{{ $career->description }}</p>
                                <hr>
                                <p class="small"><b>Skills :</b> {{ $career->skills }}</p>
                                <p class="small"><b>Perks :</b> {{ $career->perks }}</p>
                                <p class="small"><b>Tenure :</b> {{ $career->tenure }}</p>
                                <p class="small"><b>Type :</b> {{ $career->type }}</p>
                            </div>
                            <div>
                                <hr>
                                <form action="" method="post" enctype="multipart/form-data">
                                    <label class="small mb-1 ml-2 font-weight-bold" for="">Upload CV / Resume</label>
                                    <div class="d-flex">
                                        <input style="border-top-left-radius:5rem;border-bottom-left-radius:5rem;" class="form-control p-1 px-3" type="file" name="resume">
                                        <button style="border-top-right-radius:5rem;border-bottom-right-radius:5rem;" name="" class="text-nowrap pr-3 btn btn-success btn-sm"><i class="fa fa-paper-plane"></i> Send</button>
                                    </div>
                                    <small class="text-muted">*Only <b>PDF</b> File Format Allowed.</small>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>



        {{-- <div class="row">
                <?php
                
                $result = $conn->query("SELECT * FROM careers WHERE visible ='1'");
                
                while ($row = $result->fetch_assoc()) {
                    echo '' .
                        '<div class="col-xl-4 col-md-6 mb-4">' .
                        '    <div class="card shadow border-0" style="border-radius: 1rem;height:100%;overflow:hidden">' .
                        '        <div class="card-body bg-dark flex-grow-0">' .
                        '            <p class="h5 m-0 text-light">' .
                        $row['title'] .
                        '</p>' .
                        '        </div>' .
                        '        <div class="card-body d-flex flex-column align-items-between justify-content-between" style="background: linear-gradient(45deg, #e9ecef, #ededed);">' .
                        '            <div>' .
                        '                <p class=" small text-justify" >' .
                        $row['description'] .
                        '</p>' .
                        '            <hr>' .
                        '                <p class="small"><b>Skills :</b> ' .
                        $row['skills'] .
                        '</p>' .
                        '                <p class="small"><b>Perks :</b> ' .
                        $row['perks'] .
                        '</p>' .
                        '                <p class="small"><b>Tenure :</b> ' .
                        $row['tenure'] .
                        '</p>' .
                        '                <p class="small"><b>Type :</b> ' .
                        $row['type'] .
                        '</p>' .
                        '            </div>' .
                        '            <div>' .
                        '                <hr>' .
                        '                <form action="" method="post" enctype="multipart/form-data">' .
                        '                    <label class="small mb-1 ml-2 font-weight-bold" for="">Upload CV / Resume</label>' .
                        '                    <div class="d-flex">' .
                        '                        <input style="border-top-left-radius:5rem;border-bottom-left-radius:5rem;" class="form-control p-1 px-3" type="file" name="resume">' .
                        '                        <button style="border-top-right-radius:5rem;border-bottom-right-radius:5rem;" name="" class="text-nowrap pr-3 btn btn-success btn-sm"><i class="fa fa-paper-plane"></i> Send</button>' .
                        '                    </div>' .
                        '                    <small class="text-muted">*Only <b>PDF</b> File Format Allowed.</small>' .
                        '                </form>' .
                        '            </div>' .
                        '        </div>' .
                        '    </div>' .
                        '</div>';
                }
                ?>


            </div> --}}

    </section>

@endsection
