@extends('template')

@section('community_details')


<form method="POST" action="/community/add">
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
                        <label for="">Role</label>
                        <input type="text" name="role" class="form-control">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="">Industry</label>
                        <input type="text" name="industry" class="form-control">
                    </div>
                </div>
            </div>
            
        <div class="card-footer">
            <button class="btn btn-success" type="submit" name = "add" ><i class="fa fa-plus"></i> Add</button>
        </div>
    </div>
</form>


@stop