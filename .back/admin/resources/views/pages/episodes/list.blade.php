@extends('template')

@section('main')

<div class="card">
    <div class="card-header d-flex align-items-center justify-content-between">
        <p class="h3 m-0">Episodes</p>
        <a href="/episodes/add" class="btn btn-success btn-sm"><i class="fa fa-plus"></i> Add New Episode</a>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered datatable">
                <thead class="thead">
                    <tr>
                        <th scope="col"> Series Id</th>
                        <th scope="col">Title</th>
                        <th scope="col">Link</th>
                        <th scope="col">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($tablerow as $episode)
                    <tr class="{{!$episode->visible ? 'bg-grey' : ''}}">
                        <th scope="row">{{$episode->series_id}}</th>
                        <td>{{$episode->title}}</td>
                        <td>{{$episode->link}}</td>

                        <td class="text-nowrap">
                            <a class="btn btn-sm btn-warning " href="/episodes/edit/{{$episode->id}}"><i class="fa fa-edit"></i> Edit</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

@stop