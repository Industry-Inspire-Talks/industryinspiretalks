@extends('template')

@section('staff_details')

<form method="POST" action="/staff/edit/{{$staff->id}}" enctype='multipart/form-data'> <!--action="/staff/edit/{{$staff->id}}"-->
@csrf
    <div class="card">
        <div class="card-header">
            <p class="h5 m-0"><a href="/staff/list" class="btn btn-dark mr-2 btn-sm"><i class="fa fa-chevron-left"></i></a> Edit Details of {{$staff->name}}</p>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="">Name</label>
                        <input type="text" value="{{$staff->name}}" name="name" class="form-control" required>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="">Designation</label>
                        <input type="text" value="{{$staff->designation}}" name="designation" class="form-control" required>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="">Contact</label>
                        <input type="text" value="{{$staff->contact}}" name="contact" class="form-control">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="">Email</label>
                        <input type="email" value="{{$staff->email}}" name="email" class="form-control">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="">Date of Birth</label>
                        <input type="date" value="{{$staff->dob}}" name="dob" class="form-control">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="">Nationality</label>
                        <input type="text" value="{{$staff->nationality}}" name="nationality" class="form-control">
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label for="">Address</label>
                <textarea class="form-control" value="" name="address" rows="3">{{$staff->address}}</textarea>
            </div>
            <div class="form-group">
                <label for="">Date of Joining</label>
                <input type="date" value="{{$staff->date_of_joining}}" name="date_of_joining" class="form-control">
            </div>
            <div class="form-group">
                <label for="">Date of Leaving</label>
                <input type="date" value="{{$staff->date_of_leaving}}" name="date_of_leaving" class="form-control">
            </div>
            <div >
                <label for="formFile" class="form-label">Upload Image</label>
                <input class="form-control form-control mb-4" name="profile_image_ext" type="file">
            </div>
        </div>
        <div class="card-footer">
            <!-- <a class="btn btn-primary" href="/staff/edit/{{$staff->id}}"  ><i class="fa fa-plus"></i> Update</a> -->
            <button class="btn btn-primary" type="submit" name="action" value="update"  ><i class="fa fa-plus"></i> Update</button>
        </div>
    </div>
</form>

@stop