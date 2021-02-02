@extends('template')

@section('events')

<div class="card">
    <div class="card-header d-flex align-items-center justify-content-between">
        <p class="h3 m-0">Inspire Events List</p>
        <a href="/staff/add" class="btn btn-success btn-sm"><i class="fa fa-plus"></i> Add New Event</a>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered datatable">
                <thead class="thead">
                    <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Title</th>
                        <th scope="col">Description</th>
                        <th scope="col">Link</th>
                        <th scope="col">Category</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($tablerow as $event)
                    <tr>
                        <th scope="row">{{$event->id}}</th>
                        <td>{{$event->title}}</td>
                        <td>{{$event->description}}</td>
                        <td>{{$event->link}}</td>
                        <td>{{$event->category}}</td>

                        <td class="text-nowrap">
                            <a class="btn btn-sm btn-warning " href="/event/edit/{{$event->id}}"><i class="fa fa-edit"></i> Edit</a>
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