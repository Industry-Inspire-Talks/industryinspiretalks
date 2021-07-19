@extends('admin.layouts.panel')

@section('main')

<form method="POST" action="" enctype='multipart/form-data'>

    @csrf
    <div class="card">
        <div class="card-header">
            <p class="h5 m-0"><a href="/episodes" class="btn btn-dark mr-2 btn-sm"><i class="fa fa-chevron-left"></i></a> Edit {{$episode->title}}</p>
        </div>
        <div class="card-body">
            <div class="form-group">
                <label for="">Series</label>
                <select class="form-control" id="series_id" name="series_id">
                    <option>--- Select ---</option>
                    @foreach ($all_series as $all_series)

                    <option value="{{$all_series->id}}" {{$episode->series_id == $all_series->id ? 'selected' : " "}}>{{$all_series->name}}</option>

                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="">Title</label>
                <input type="text" name="title" value="{{$episode->title}}" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="">link</label>
                <input type="text" name="link" value="{{$episode->link}}" class="form-control" required>
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