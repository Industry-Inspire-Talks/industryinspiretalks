@extends('adminpages/adminpanel')

@section('staff_details')

<div class="card">
    <div class="card-header d-flex align-items-center justify-content-between">
        <p class="h3 m-0">Staff List</p>
        <button class="btn btn-success btn-sm"><i class="fa fa-plus"></i> Add New Staff</button>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered">
                <thead class="thead">
                    <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Name</th>
                        <th scope="col">Designation</th>
                        <th scope="col">Contact</th>
                        <th scope="col">Email</th>
                        <th scope="col">Nationality</th>
                        <th scope="col">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($staff as $staff)
                    <tr>
                        <th scope="row">{{$staff->id}}</th>
                        <td>{{$staff->name}}</td>
                        <td>{{$staff->designation}}</td>
                        <td>{{$staff->contact}}</td>
                        <td>{{$staff->email}}</td>
                        <td>{{$staff->nationality}}</td>

                        <td class="text-nowrap">
                            <a class="btn btn-sm btn-warning " href="#"><i class="fa fa-edit"></i> Edit</a>
                            <a class="btn btn-sm btn-primary" href="#"><i class="fa fa-eye"></i> View</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>





@stop