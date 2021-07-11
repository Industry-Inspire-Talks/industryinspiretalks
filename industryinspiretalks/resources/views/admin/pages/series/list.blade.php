@extends('admin.layouts.panel')

@section('main')

<div class="card">
    <div class="card-header d-flex align-items-center justify-content-between">
        <p class="h3 m-0">Inspire Series List</p>
        <a href="/series/add" class="btn btn-success btn-sm"><i class="fa fa-plus"></i> Add New Series</a>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered datatable">
                <thead class="thead">
                    <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Image</th>
                        <th scope="col">Name</th>
                        <th scope="col">Description</th>
                        <th scope="col">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($tablerow as $series)
                    <tr class="{{!$series->visible ? 'bg-grey' : ''}}">
                        <th scope="row">{{$series->id}}</th>
                        <td class="text-center"><img class="rounded" src="/uploads/series/{{$series->id}}.{{$series->image_ext}}" height="100px" alt=""></td>
                        <td>{{$series->name}}</td>
                        <td>{{$series->description}}</td>

                        <td class="text-nowrap">
                            <a class="btn btn-sm btn-warning " href="/series/edit/{{$series->id}}"><i class="fa fa-edit"></i> Edit</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

@stop