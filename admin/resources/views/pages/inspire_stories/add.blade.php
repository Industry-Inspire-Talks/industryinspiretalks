@extends('template')

@section('main')


<form method="POST" action="/inspire_stories/add">
    @csrf
    <div class="card">
        <div class="card-header">
            <p class="h5 m-0"><a href="/inspire_stories/list" class="btn btn-dark mr-2 btn-sm"><i class="fa fa-chevron-left"></i></a> Add New Inspire Story</p>
        </div>
        <div class="card-body">
            <div class="col-md-4">
                <label for="">Industry Leader</label>
                @php
                $industry_leader = DB::table('industry_leaders')->get()
                @endphp
                <select class="form-control" id="leader_id" name="leader_id">
                @foreach ($industry_leader as $industry_leader)
                
                <option value="{{$industry_leader->id}}">{{$industry_leader->name}}</option>
                @endforeach
                </select>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label for="">Link</label>
                    <input type="text" name="link" class="form-control">
                </div>
            </div>
           
        </div>
        <div class="card-footer">
            <button class="btn btn-success" type="submit" name="add"><i class="fa fa-plus"></i> Add</button>
        </div>
    </div>
</form>


@stop