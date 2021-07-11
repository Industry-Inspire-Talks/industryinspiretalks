@extends('admin.layouts.panel')

@section('main')


<form method="POST" action="/events/add" >
    @csrf
    <div class="card">
        <div class="card-header">
            <p class="h5 m-0"><a href="/events/list" class="btn btn-dark mr-2 btn-sm"><i class="fa fa-chevron-left"></i></a> Add New Event</p>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-4">
                    <label for="">Category</label>
                    <select class="form-control" id="series_id"  name="category">
                        @php 
                        $category = DB::table('events')->select('category')->distinct()->get()
                        @endphp
                        @foreach ($category as $category)
                            <option value="{{$category->category}}"  >{{$category->category}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="">Title</label>
                        <input type="text" name="title" class="form-control" required>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="">Description</label>
                        <input type="text" name="description" class="form-control">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="">Link</label>
                        <input type="text" name="link" class="form-control">
                    </div>
                </div>
               
            </div>
           
        <div class="card-footer">
            <button class="btn btn-success" type="submit" name = "add" ><i class="fa fa-plus"></i> Add</button>
        </div>
    </div>
</form>


@stop