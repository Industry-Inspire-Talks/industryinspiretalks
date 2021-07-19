@extends('admin.layouts.panel')

@section('main')


<form method="POST" action="/inspire_classes/add" enctype='multipart/form-data'>
    @csrf
    <div class="card">
        <div class="card-header">
            <p class="h5 m-0"><a href="/inspire_classes" class="btn btn-dark mr-2 btn-sm"><i class="fa fa-chevron-left"></i></a> Add New Class</p>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-4">
                    <div class="form-group" >
                        <label for="">Title</label>
                        <input type="text" name="title" class="form-control" required>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="">Description</label>
                        <input type="text" name="description" class="form-control" required>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="">Release Date</label>
                        <input type="date" name="designation" class="form-control">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="form-group" >
                        <label for="">Enrollment Link</label>
                        <input type="text" name="enrollment_link" class="form-control" required>
                    </div>
                </div>
               <div class="col-md-4">
                    <div class="form-group" >
                        <label for="">Industry Expert</label>
                        <input type="text" name="industry_expert_id" class="form-control" required>
                    </div>
                </div>
               <div class="col-md-4">
                    <div class="form-group" >
                        <label for="">Session Drive Link</label>
                        <input type="text" name="session_drive_link" class="form-control" required>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="form-group" >
                        <label for="">Image</label>
                        <input type="file" name="image_ext  " class="form-control" required>
                    </div>
                </div>
            </div>

        </div>
        <div class="card-footer">
            <button class="btn btn-success" type="submit" name="add"><i class="fa fa-plus"></i> Add</button>
        </div>
    </div>
</form>


@endsection