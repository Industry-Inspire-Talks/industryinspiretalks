@extends('template')

@section('main')
<div class="card">
    <div class="card-header d-flex align-items-center justify-content-between">
        <p class="h3 m-0">Staff List</p>
        <a href="/staff/add" class="btn btn-success btn-sm"><i class="fa fa-plus"></i> Add New Staff</a>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered datatable">
                <thead class="thead">
                    <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Image</th>
                        <th scope="col">Name</th>
                        <th scope="col">Designation</th>
                        <th scope="col">Contact</th>
                        <th scope="col">Email</th>
                        <th scope="col">Nationality</th>
                        <th scope="col">Actions</th>
                    </tr>
                </thead>
                <tbody>

                    @foreach ($tablerow as $staff)
                    <tr class="{{!$staff->visible ? 'bg-grey' : ''}}">
                        <th scope=" row">{{$staff->id}}</th>
                        <td class="text-center"><img class="rounded" src="/uploads/staff/{{$staff->id}}.{{$staff->image_ext}}" height="100px" alt=""></td>
                        <td>{{$staff->name}}</td>
                        <td>{{$staff->designation}}</td>
                        <td>{{$staff->contact}}</td>
                        <td>{{$staff->email}}</td>
                        <td>{{$staff->nationality}}</td>

                        <td class="text-nowrap">
                            <a class="btn btn-sm btn-warning " href="/staff/edit/{{$staff->id}}"><i class="fa fa-edit"></i> Edit</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

@stop