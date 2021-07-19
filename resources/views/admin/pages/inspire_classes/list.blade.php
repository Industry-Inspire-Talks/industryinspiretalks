@extends('admin.layouts.panel')

@section('main')

<div class="card">
    <div class="card-header d-flex align-items-center justify-content-between">
        <p class="h3 m-0">Industry Experts</p>
        <a href="/inspire_classes/add" class="btn btn-success btn-sm"><i class="fa fa-plus"></i> Add New Class</a>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered datatable">
                <thead class="thead">
                    <tr>
                        <th scope="col"> Class Id</th>
                        <th scope="col">Title</th>
                        <th scope="col">Description</th>
                        <th scope="col">Release Date</th>
                        <th scope="col">Industry Expert</th>
                        
                    </tr>
                </thead>
                <tbody>
                    @foreach ($inspire_classes as $inspire_class)
                    <tr class="{{!$inspire_class->visible ? 'bg-grey' : ''}}">
                        <th scope="row">{{$inspire_class->id}}</th>
                        <td>{{$inspire_class->title}}</td>
                        <td>{{$inspire_class->description}}</td>
                        <td>{{$inspire_class->release_date}}</td>
                        <td>{{$inspire_class->industry_expert_id}}</td>

                        <td class="text-nowrap d-flex">
                            <a class="btn btn-sm btn-warning " href="/inspire_classes/{{$inspire_class->id}}"><i class="fa fa-edit"></i> Edit</a>
                            <form action="/inspire_classes/{{ $inspire_class->id }}/delete" method="post">
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