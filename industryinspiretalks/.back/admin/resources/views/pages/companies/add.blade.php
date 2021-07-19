@extends('template')

@section('main')


<form method="POST" action="/companies/add" >
    @csrf
    <div class="card">
        <div class="card-header">
            <p class="h5 m-0"><a href="/companies/list" class="btn btn-dark mr-2 btn-sm"><i class="fa fa-chevron-left"></i></a> Add New Company</p>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-4">
                    <div class="form-group" >
                        <label for="">Title</label>
                        <input type="text" name="title" class="form-control" required>
                    </div>
                </div>
            </div>
            
            
        <div class="card-footer">
            <button class="btn btn-success" type="submit" name = "add" ><i class="fa fa-plus"></i> Add</button>
        </div>
    </div>
</form>


@stop