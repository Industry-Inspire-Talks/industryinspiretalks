@extends('admin.layouts.panel')

@section('main')


<form method="POST" action="" enctype='multipart/form-data'>
    @csrf
    <div class="card">
        <div class="card-header">
            <p class="h5 m-0"><a href="/careers" class="btn btn-dark mr-2 btn-sm"><i class="fa fa-chevron-left"></i></a> Edit {{$career->title}}</p>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-3">
                    <div class="form-group">
                        <label for="">Title</label>
                        <input type="text" name="title" value="{{$career->title}}" class="form-control" required>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="">Description</label>
                        <input type="text" name="description" value="{{$career->description}}" class="form-control" required>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label for="">Skills</label>
                        <input type="text" name="skills" value="{{$career->skills}}" class="form-control">
                    </div>
                </div>

                <div class="col-md-2">
                    <div class="form-group">
                        <label for="">Type</label>
                        <select class="form-control" name="type">

                            @php
                            $type = DB::table('careers')->select('type')->distinct()->get()
                            @endphp
                            @foreach ($type as $type)
                            <option value="{{$type->type}}" {{$career->type == $type->type ? 'selected' : " "}}>{{$type->type}}</option>
                            @endforeach

                        </select>
                    </div>
                </div>



            </div>
            <div class="row">
                <div class="col-md-3">
                    <div class="form-group">
                        <label for="">Skills</label>
                        <input type="text" name="skills" value="{{$career->skills}}" class="form-control">
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label for="">Perks</label>
                        <input type="text" name="perks" value="{{$career->perks}}" class="form-control">
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label for="">Tenure</label>
                        <input type="text" name="tenure" value="{{$career->tenure}}" class="form-control">
                    </div>
                </div>

            </div>
            <div class="form-group">
                <label for="">Visibility</label>
                <select class="form-control" name="visible">
                    <option value="0">Hidden</option>
                    <option value="1">Visible</option>
                </select>
            </div>

        </div>
        <div class="card-footer">
            <button class="btn btn-primary" type="submit" name="action" value="update"><i class="fa fa-plus"></i> Update</button>
        </div>
    </div>
</form>


@endsection