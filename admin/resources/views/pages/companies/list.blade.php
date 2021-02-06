@extends('template')

@section('main')
<div class="card">
    <div class="card-header d-flex align-item-center justify-content-between">
        <p class="h3 m-0">Companies </p>
        <a href="/companies/add" class="btn btn-success btn-sm"><i class="fa fa-plus"></i> Add New Companies</a>
    </div>
    <div class="card-body">

        <div class="table-responsive">
            <table class="table table-bordered datatable">
                <thead class="thead">
                    <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Title</th>
                        <th scope="col">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($tablerow as $companies)
                    <tr>
                        <th scope="row">{{$companies->id}}</th>
                        <td>{{$companies->title}}</td>
                        <td class="text-nowrap">
                            <a class="btn btn-warning btn-sm" href="/companies/edit/{{$companies->id}}" role="button"><i class="fa fa-edit"></i> Edit</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>


    </div>
</div>


@stop