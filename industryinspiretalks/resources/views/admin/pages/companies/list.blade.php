@extends('admin.layouts.panel')

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
                        <th scope="col">Image</th>
                        <th scope="col">Title</th>
                        <th scope="col">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($companies as $company)
                    <tr class="{{!$company->visible ? 'bg-grey' : ''}}">
                        <th scope="row">{{$company->id}}</th>
                        <td class="text-center"><img class="rounded" src="/uploads/companies/{{$company->id}}.{{$company->image_ext}}" height="100px" alt=""></td>
                        <td>{{$company->title}}</td>
                        <td class="text-nowrap">
                            <a class="btn btn-warning btn-sm" href="/companies/edit/{{$company->id}}" role="button"><i class="fa fa-edit"></i> Edit</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>


    </div>
</div>


@endsection