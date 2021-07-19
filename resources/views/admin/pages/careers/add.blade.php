@extends('admin.layouts.panel')

@section('main')


<form method="POST" action="/careers/add" >
    @csrf
    <div class="card">
        <div class="card-header">
            <p class="h5 m-0"><a href="/careers/list" class="btn btn-dark mr-2 btn-sm"><i class="fa fa-chevron-left"></i></a> Add New Careers</p>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="">Title</label>
                        <input type="text" name="title" class="form-control">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="">Description</label>
                        <input type="text" name="description" class="form-control" required>
                    </div>
                </div>
                <div class="col-md-4">
                <label for="">Type</label>
                <select class="form-control" name="type">
                    <option >--- Select ---</option>
                    <option value="Full Time">Full Time</option>
                    <option value="Internship">Internship</option>
                </select>
                </div>
                
                
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="">Skills</label>
                        <input type="text" name="skills" class="form-control" required>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="">Perks</label>
                        <input type="text" name="perks" class="form-control">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="">Tenure</label>
                        <input type="text" name="tenure" class="form-control">
                    </div>
                </div>

            </div>
            
        <div class="card-footer">
            <button class="btn btn-success" type="submit" name = "add" ><i class="fa fa-plus"></i> Add</button>
        </div>
    </div>
</form>


@endsection