@extends('template')

@section('main')


<form method="POST" action="/careers/edit/{{$tablerow->id}}" enctype='multipart/form-data'>
    @csrf
    <div class="card">
        <div class="card-header">
            <p class="h5 m-0"><a href="/careers/list" class="btn btn-dark mr-2 btn-sm"><i class="fa fa-chevron-left"></i></a> Edit {{$tablerow->title}}</p>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-3">
                    <div class="form-group" >
                        <label for="">Title</label>
                        <input type="text" name="title" value="{{$tablerow->title}}" class="form-control" required>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="">Description</label>
                        <input type="text" name="description" value="{{$tablerow->description}}" class="form-control" required>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label for="">Skills</label>
                        <input type="text" name="skills" value="{{$tablerow->skills}}" class="form-control">
                    </div>
                </div>
                
                <div class="col-md-2">
                    <div class="form-group">
                        <label for="">Type</label>
                        <select class="form-control" name="type">
                        
                        @php 
                        $type = DB::table('careers')->select('type')->distinct()->get()
                        @endphp
                        @foreach ($type as $type)
                            <option value="{{$type->type}}" {{$tablerow->type == $type->type ? 'selected' : " "}} >{{$type->type}}</option>
                        @endforeach
                        
                        </select>
                    </div>
                </div>



            </div>
            <div class="row">
                <div class="col-md-3">
                    <div class="form-group">
                        <label for="">Skills</label>
                        <input type="text" name="skills" value="{{$tablerow->skills}}" class="form-control">
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label for="">Perks</label>
                        <input type="text" name="perks" value="{{$tablerow->perks}}" class="form-control">
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label for="">Tenure</label>
                        <input type="text" name="tenure" value="{{$tablerow->tenure}}" class="form-control">
                    </div>
                </div>
             
            </div>
        </div>    
        <div class="card-footer">
        <button class="btn btn-primary" type="submit" name="action" value="update"  ><i class="fa fa-plus"></i> Update</button>
        </div>
    </div>
</form>


@stop