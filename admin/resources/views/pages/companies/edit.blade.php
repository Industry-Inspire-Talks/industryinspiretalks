@extends('template')

@section('main')


<form method="POST" action="/companies/edit/{{$tablerow->id}}" enctype='multipart/form-data'>
    @csrf
    <div class="card">
        <div class="card-header">
            <p class="h5 m-0"><a href="/companies/list" class="btn btn-dark mr-2 btn-sm"><i class="fa fa-chevron-left"></i></a> Edit {{$tablerow->title}}</p>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-4">
                    <div class="form-group" >
                        <label for="">Title</label>
                        <input type="text" name="title" value="{{$tablerow->title}}" class="form-control" required>
                    </div>
                </div>
            </div>
            <div class="row">
                
                <div class="col-md-3">
                    <div class="form-group">
                        <label for="formFile" class="form-label">Upload Image</label>
                        <input class="form-control form-control mb-4" name="image_ext" type="file">
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <button class="btn btn-warning mt-4" type="submit" name="action" value="image_upload" ><i class="fa fa-plus"></i> Upload Image</button >
                    </div>
                </div>
                
            </div>
            
        <div class="card-footer">
        <button class="btn btn-primary" type="submit" name="action" value="update"  ><i class="fa fa-plus"></i> Update</button>
        </div>
    </div>
</form>


@stop