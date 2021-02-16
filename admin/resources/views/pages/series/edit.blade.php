@extends('template')

@section('main')

<form method="POST" action="/series/edit/{{$tablerow->id}}" enctype='multipart/form-data'> 
@csrf
    <div class="card">
        <div class="card-header">
            <p class="h5 m-0"><a href="/series/list" class="btn btn-dark mr-2 btn-sm"><i class="fa fa-chevron-left"></i></a> Edit Details of {{$tablerow->name}}</p>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="">Name</label>
                        <input type="text" value="{{$tablerow->name}}" name="name" class="form-control" required>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="">Description</label>
                        <input type="textarea" value="{{$tablerow->description}}" name="description" class="form-control" required>
                    </div>
                </div>
            </div>
           
            <div >
                <label for="formFile" class="form-label">Upload Image</label>
                <input class="form-control form-control mb-4" name="image_ext" type="file">
            </div>
        </div>
        <div class="card-footer">
            <button class="btn btn-primary" type="submit" name="action" value="update"  ><i class="fa fa-plus"></i> Update</button>
        </div>
    </div>
</form>

@stop