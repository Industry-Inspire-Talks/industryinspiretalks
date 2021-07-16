@extends('admin.layouts.panel')

@section('main')


<form method="POST" action="/episodes/add" enctype='multipart/form-data'>
    @csrf
    <div class="card">
        <div class="card-header">
            <p class="h5 m-0"><a href="/industry_experts" class="btn btn-dark mr-2 btn-sm"><i class="fa fa-chevron-left"></i></a> Add New Industry Expert</p>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-4">
                    <div class="form-group" >
                        <label for="">Name</label>
                        <input type="text" name="name" class="form-control" required>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="">Company</label>
                        <input type="text" name="company" class="form-control" required>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="">Designation</label>
                        <input type="text" name="designation" class="form-control">
                    </div>
                </div>
            </div>
            <div class="form-group" >
                <label for="">LinkedIn Link</label>
                <input type="text" name="linked_link" class="form-control" required>
            </div>
            <div class="form-group" >
                <label for="">Image</label>
                <input type="text" name="image_ext" class="form-control" required>
            </div>

        </div>
        <div class="card-footer">
            <button class="btn btn-success" type="submit" name="add"><i class="fa fa-plus"></i> Add</button>
        </div>
    </div>
</form>


@endsection