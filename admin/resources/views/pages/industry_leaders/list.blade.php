@extends('template')

@section('main')
<div class="card">
    <div class="card-header d-flex align-item-center justify-content-between">
        <p class="h3 m-0">Indsutry Leaders </p>
        <a href="/industry_leaders/add" class="btn btn-success btn-sm"><i class="fa fa-plus"></i> Add New Industry Leaders</a>
    </div>
    <div class="card-body">

        <div class="table-responsive">
            <table class="table table-bordered datatable">
                <thead class="thead">
                    <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Name</th>
                        <th scope="col">Position</th>
                        <th scope="col">Company</th>
                        <th scope="col">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($tablerow as $industry_leaders)
                    <tr>
                        <th scope="row">{{$industry_leaders->id}}</th>
                        <td>{{$industry_leaders->name}}</td>
                        <td>{{$industry_leaders->position}}</td>
                        <td>{{$industry_leaders->company}}</td>
                        <td class="text-nowrap">
                            <a class="btn btn-warning btn-sm" href="/industry_leaders/edit/{{$industry_leaders->id}}" role="button"><i class="fa fa-edit"></i> Edit</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>


    </div>
</div>


@stop