@extends('template')

@section('main')
<div class="card">
    <div class="card-header d-flex align-item-center justify-content-between">
        <p class="h3 m-0">Careers </p>
        <a href="/careers/add" class="btn btn-success btn-sm"><i class="fa fa-plus"></i> Add New Career</a>
    </div>
    <div class="card-body">

        <div class="table-responsive">
            <table class="table table-bordered datatable">
                <thead class="thead">
                    <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Title</th>
                        <th scope="col">Description</th>
                        <th scope="col">Type</th>
                        <th scope="col">Skills</th>
                        <th scope="col">Perks</th>
                        <th scope="col">Tenure</th>
                        <th scope="col">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($tablerow as $career)
                    <tr>
                        <th scope="row">{{$career->id}}</th>
                        <td>{{$career->title}}</td>
                        <td>{{$career->description}}</td>
                        <td>{{$career->type}}</td>
                        <td>{{$career->skills}}</td>
                        <td>{{$career->perks}}</td>
                        <td>{{$career->tenure}}</td>
                        <td class="text-nowrap">
                            <a class="btn btn-warning btn-sm" href="/careers/edit/{{$career->id}}" role="button"><i class="fa fa-edit"></i> Edit</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>


    </div>
</div>


@stop