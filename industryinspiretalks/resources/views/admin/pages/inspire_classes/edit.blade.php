@extends('admin.layouts.panel')

@section('main')


<form method="POST" action="" enctype='multipart/form-data'>
    @csrf
    <div class="card">
        <div class="card-header">
            <p class="h5 m-0"><a href="/inspire_classes" class="btn btn-dark mr-2 btn-sm"><i class="fa fa-chevron-left"></i></a> Edit Class</p>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-4">
                    <div class="form-group" >
                        <label for="">Title</label>
                        <input type="text" name="title" value="{{}}" class="form-control" required>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="">Description</label>
                        <input type="text" name="description" value="{{}}" class="form-control" required>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="">Release Date</label>
                        <input type="date" name="designation" value="{{}}" class="form-control">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="form-group" >
                        <label for="">Enrollment Link</label>
                        <input type="text" name="enrollment_link" value="{{}}" class="form-control" required>
                    </div>
                </div>
               <div class="col-md-4">
                    <div class="form-group" >
                        <label for="">Industry Expert</label>
                        <input type="text" name="industry_expert_id" value="{{}}" class="form-control" required>
                    </div>
                </div>
               <div class="col-md-4">
                    <div class="form-group" >
                        <label for="">Session Drive Link</label>
                        <input type="text" name="session_drive_link" value="{{}}" class="form-control" required>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="form-group" >
                        <label for="">Image</label>
                        <input type="file" name="image_ext" value="{{}}" class="form-control" required>
                    </div>
                </div>
            </div>

        </div>
        <div class="card-footer">
            <button class="btn btn-success" type="submit" name="action" value="update"><i class="fa fa-plus"></i> Update</button>
        </div>
    </div>
</form>


@endsection