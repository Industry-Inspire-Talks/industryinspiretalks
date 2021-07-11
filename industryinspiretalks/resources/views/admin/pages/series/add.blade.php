@extends('admin.layouts.panel')

@section('main')


<form method="POST" action="/series/add" enctype='multipart/form-data'>
    @csrf
    <div class="card">
        <div class="card-header">
            <p class="h5 m-0"><a href="/series/list" class="btn btn-dark mr-2 btn-sm"><i class="fa fa-chevron-left"></i></a> Add New Series </p>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="">Name</label>
                        <input type="text" name="name" class="form-control" required>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="">Description</label>
                        <input type="textarea" name="description" class="form-control" required>
                    </div>
                </div>
            </div>

            <div>
                <label for="formFile" class="form-label">Upload Image</label>
                <input class="form-control form-control mb-4" name="image_ext" type="file">
            </div>
        </div>
        <div class="card-footer">
            <button class="btn btn-primary" type="submit" name="action" value="update"><i class="fa fa-plus"></i> Add</button>
        </div>
    </div>
</form>

@stop