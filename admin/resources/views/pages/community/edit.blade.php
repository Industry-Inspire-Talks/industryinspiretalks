@extends('template')

@section('community_details')


<form method="POST" action="/community/edit/{{$tablerow->id}}" enctype='multipart/form-data'>
    @csrf
    <div class="card">
        <div class="card-header">
            <p class="h5 m-0"><a href="/community/list" class="btn btn-dark mr-2 btn-sm"><i class="fa fa-chevron-left"></i></a> Add New Community Member</p>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-4">
                    <div class="form-group" >
                        <label for="">Name</label>
                        <input type="text" name="name" value="{{$tablerow->name}}" class="form-control" required>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="">Company</label>
                        <input type="text" name="company" value="{{$tablerow->company}}" class="form-control" required>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="">Role</label>
                        <input type="text" name="role" value="{{$tablerow->role}}" class="form-control">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3">
                    <div class="form-group">
                        <label for="">Industry</label>
                        <input type="text" name="industry" value="{{$tablerow->industry}}" class="form-control">
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label for="formFile" class="form-label">Upload Image</label>
                        <input class="form-control form-control mb-4" name="profile_image_ext" type="file">
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