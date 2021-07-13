@extends('admin.layouts.panel')

@section('main')

<form method="POST" action="/episodes/edit/{{$tablerow->id}}" enctype='multipart/form-data'>

    @csrf
    <div class="card">
        <div class="card-header">
            <p class="h5 m-0"><a href="/episodes/list" class="btn btn-dark mr-2 btn-sm"><i class="fa fa-chevron-left"></i></a> Edit {{$tablerow->title}}</p>
        </div>
        <div class="card-body">
            <div class="form-group">
                <label for="">Series</label>
                <select class="form-control" id="series_id" name="series_id">
                    <option>--- Select ---</option>
                    @foreach ($series as $series)

                    <option value="{{$series->id}}" {{$tablerow->series_id == $series->id ? 'selected' : " "}}>{{$series->name}}</option>

                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="">Title</label>
                <input type="text" name="title" value="{{$tablerow->title}}" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="">link</label>
                <input type="text" name="link" value="{{$tablerow->link}}" class="form-control" required>
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