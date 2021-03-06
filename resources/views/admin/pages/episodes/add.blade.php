@extends('admin.layouts.panel')

@section('main')


<form method="POST" action="/episodes/add">
    @csrf
    <div class="card">
        <div class="card-header">
            <p class="h5 m-0"><a href="/episodes/list" class="btn btn-dark mr-2 btn-sm"><i class="fa fa-chevron-left"></i></a> Add New Episode</p>
        </div>
        <div class="card-body">
            <div class="form-group">
                <label for="">Series</label>
                <select class="form-control" name="series_id">

                @php 
                $series = DB::table('series')->distinct()->get()
                @endphp

                @foreach ($series as $series)
                    <option value="{{$series->id}}">{{$series->name}}</option>
                @endforeach
                    <!-- <option value = 1>Interview Series</option>
                    <option value = 2>Podcast Series</option> -->
                </select>
            </div>
            <div class="form-group">
                <label for="">Title</label>
                <input type="text" name="title" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="">link</label>
                <input type="text" name="link" class="form-control" required>
            </div>
        </div>
        <div class="card-footer">
            <button class="btn btn-success" type="submit" name="add"><i class="fa fa-plus"></i> Add</button>
        </div>
    </div>
</form>


@endsection