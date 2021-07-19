@extends('admin.layouts.panel')

@section('main')

<form method="POST" action="" enctype='multipart/form-data'>
    @csrf
    <div class="card">
        <div class="card-header">
            <p class="h5 m-0"><a href="/events" class="btn btn-dark mr-2 btn-sm"><i class="fa fa-chevron-left"></i></a> Edit Event {{$event->title}}</p>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="">Category</label>
                        <select class="form-control" name="category">

                            @php
                            $category = DB::table('events')->select('category')->distinct()->get()
                            @endphp
                            @foreach ($category as $category)
                            <option value="{{$category->category}}" {{$event->category == $category->category ? 'selected' : " "}}>{{$category->category}}</option>
                            @endforeach

                        </select>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="">Title</label>
                        <input type="text" value="{{$event->description}}" name="designation" class="form-control" required>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="">Link</label>
                        <input type="text" value="{{$event->link}}" name="contact" class="form-control">
                    </div>
                </div>
            </div>

            <div>
                <label for="formFile" class="form-label">Upload Image</label>
                <input class="form-control form-control mb-4" name="image_ext" type="file">
            </div>
            <div class="col-md-3">
                <div class="form-group">
                    <button class="btn btn-warning " type="submit" name="action" value="image_upload"><i class="fa fa-plus"></i> Upload Image</button>
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