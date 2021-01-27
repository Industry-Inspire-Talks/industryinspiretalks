@extends('template')

@section('staff_details')


<form method="POST" action="/staff/add" >
    @csrf
    <div class="card">
        <div class="card-header">
            <p class="h5 m-0"><a href="/staff/list" class="btn btn-dark mr-2 btn-sm"><i class="fa fa-chevron-left"></i></a> Add New Staff</p>
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
                        <label for="">Designation</label>
                        <input type="text" name="designation" class="form-control" required>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="">Contact</label>
                        <input type="text" name="contact" class="form-control">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="">Email</label>
                        <input type="email" name="email" class="form-control">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="">Date of Birth</label>
                        <input type="date" name="dob" class="form-control">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="">Nationality</label>
                        <input type="text" name="nationality" class="form-control">
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label for="">Address</label>
                <textarea class="form-control" name="address" rows="3"></textarea>
            </div>
            <div class="form-group">
                <label for="">Date of Joining</label>
                <input type="date" name="date_of_joining" class="form-control">
            </div>
            <div class="form-group">
                <label for="">Date of Leaving</label>
                <input type="date" name="date_of_leaving" class="form-control">
            </div>
            <button class="btn btn-warning" type="submit" name="action" value="image_upload" ><i class="fa fa-plus"></i> Upload Image</button >
        </div>
        <div class="card-footer">
            <button class="btn btn-success" type="submit" name = "add" ><i class="fa fa-plus"></i> Add</button>
        </div>
    </div>
</form>


@stop