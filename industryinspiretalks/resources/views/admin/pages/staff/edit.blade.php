@extends('admin.layouts.panel')

@section('main')

<form method="POST" action="/staff/edit/{{$tablerow->id}}" enctype='multipart/form-data'>
    <!--action="/staff/edit/{{$tablerow->id}}"-->
    @csrf
    <div class="card">
        <div class="card-header">
            <p class="h5 m-0"><a href="/staff/list" class="btn btn-dark mr-2 btn-sm"><i class="fa fa-chevron-left"></i></a> Edit Details of {{$tablerow->name}}</p>
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
                        <label for="">Designation</label>
                        <input type="text" value="{{$tablerow->designation}}" name="designation" class="form-control" required>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="">Contact</label>
                        <input type="text" value="{{$tablerow->contact}}" name="contact" class="form-control">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="">Email</label>
                        <input type="email" value="{{$tablerow->email}}" name="email" class="form-control">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="">Date of Birth</label>
                        <input type="date" value="{{$tablerow->dob}}" name="dob" class="form-control">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="">Nationality</label>
                        <input type="text" value="{{$tablerow->nationality}}" name="nationality" class="form-control">
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label for="">Address</label>
                <textarea class="form-control" value="" name="address" rows="3">{{$tablerow->address}}</textarea>
            </div>
            <div class="form-group">
                <label for="">Date of Joining</label>
                <input type="date" value="{{$tablerow->date_of_joining}}" name="date_of_joining" class="form-control">
            </div>
            <div class="form-group">
                <label for="">Date of Leaving</label>
                <input type="date" value="{{$tablerow->date_of_leaving}}" name="date_of_leaving" class="form-control">
            </div>
            <div>
                <label for="formFile" class="form-label">Upload Image</label>
                <input class="form-control form-control mb-4" name="image_ext" type="file">
            </div>
            <button class="btn btn-warning" type="submit" name="action" value="image_upload"><i class="fa fa-plus"></i> Upload Image</button>

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