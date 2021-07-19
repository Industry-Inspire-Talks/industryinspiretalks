@extends('admin.layouts.panel')

@section('main')

<div class="card">
    <div class="card-header d-flex align-items-center justify-content-between">
        <p class="h3 m-0">Industry Experts</p>
        <a href="/industry_experts/add" class="btn btn-success btn-sm"><i class="fa fa-plus"></i> Add New Industry Expert</a>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered datatable">
                <thead class="thead">
                    <tr>
                        <th scope="col"> Expert Id</th>
                        <th scope="col">Name</th>
                        <th scope="col">Designation</th>
                        <th scope="col">Company</th>
                        <th scope="col">LinkedIn</th>
                        
                    </tr>
                </thead>
                <tbody>
                    @foreach ($industry_experts as $industry_expert)
                    <tr class="{{!$industry_expert->visible ? 'bg-grey' : ''}}">
                        <th scope="row">{{$industry_expert->id}}</th>
                        <td>{{$industry_expert->name}}</td>
                        <td>{{$industry_expert->designation}}</td>
                        <td>{{$industry_expert->company}}</td>
                        <td>{{$industry_expert->linked_link}}</td>

                        <td class="text-nowrap d-flex">
                            <a class="btn btn-sm btn-warning " href="/industry_experts/{{$industry_expert->id}}"><i class="fa fa-edit"></i> Edit</a>
                            <form action="/industry_experts/{{ $industry_expert->id }}/delete" method="post">
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