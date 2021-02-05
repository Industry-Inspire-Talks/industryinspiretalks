@extends('template')

@section('community_details')
<div class="card">
    <div class="card-header d-flex align-item-center justify-content-between">
        <p class="h3 m-0">Community Member</p>
        <a href="/community/add" class="btn btn-success btn-sm"><i class="fa fa-plus"></i> Add New Community Member</a>
    </div>
    <div class="card-body">

        <div class="table-responsive">
            <table class="table table-bordered datatable">
                <thead class="thead">
                    <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Name</th>
                        <th scope="col">Company</th>
                        <th scope="col">Role</th>
                        <th scope="col">Industry</th>
                        <th scope="col">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($tablerow as $community)
                    <tr>
                        <th scope="row">{{$community->id}}</th>
                        <td>{{$community->name}}</td>
                        <td>{{$community->company}}</td>
                        <td>{{$community->role}}</td>
                        <td>{{$community->industry}}</td>
                        <td class="text-nowrap">
                            <a class="btn btn-warning btn-sm" href="/community/edit/{{$community->id}}" role="button">Edit</a>
                            <a class="btn btn-primary btn-sm" href="#" role="button">View</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>


    </div>
</div>


@stop