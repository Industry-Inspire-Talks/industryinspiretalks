@extends('admin.layouts.panel')

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
                        <th scope="col">Image</th>
                        <th scope="col">Name</th>
                        <th scope="col">Position</th>
                        <th scope="col">Company</th>
                        <th scope="col">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($industry_leaders as $industry_leader)
                    <tr class="{{!$industry_leader->visible ? 'bg-grey' : ''}}">
                        <th scope="row">{{$industry_leader->id}}</th>
                        <td class="text-center"><img class="rounded" src="/uploads/industry_leaders/{{$industry_leader->id}}.{{$industry_leader->image_ext}}" height="100px" alt=""></td>
                        <td>{{$industry_leader->name}}</td>
                        <td>{{$industry_leader->position}}</td>
                        <td>{{$industry_leader->company}}</td>
                        <td class="text-nowrap d-flex">
                            <a class="btn btn-warning btn-sm" href="/industry_leaders/{{$industry_leader->id}}" role="button"><i class="fa fa-edit"></i> Edit</a>
                            <form action="/industry_leaders/{{ $industry_leader->id }}/delete" method="post">
                                @csrf
                                <button class="btn btn-sm btn-danger mx-1"><i class="fa fa-trash"></i> Delete</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>


    </div>
</div>


@endsection