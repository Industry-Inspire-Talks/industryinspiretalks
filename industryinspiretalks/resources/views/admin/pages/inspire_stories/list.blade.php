@extends('admin.layouts.panel')

@section('main')

<div class="card">
    <div class="card-header d-flex align-items-center justify-content-between">
        <p class="h3 m-0">Inspire Stories List</p>
        <a href="/inspire_stories/add" class="btn btn-success btn-sm"><i class="fa fa-plus"></i> Add New Story</a>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered datatable">
                <thead class="thead">
                    <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Post</th>
                        <th scope="col">Leader</th>
                        <th scope="col">Link</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>

                    @foreach ($inspire_stories as $story)

                    <tr class="{{!$story->visible ? 'bg-grey' : ''}}">
                        <th scope="row">{{$story->id}}</th>
                        <td class="text-center"><img class="rounded" src="/uploads/inspire_stories/{{$story->id}}.{{$story->image_ext}}" height="100px" alt=""></td>
                        <td>{{$story->leader->name}}</td>
                        <td>{{$story->link}}</td>

                        <td class="text-nowrap d-flex">
                            <a class="btn btn-sm btn-warning " href="/inspire_stories/{{$story->id}}"><i class="fa fa-edit"></i> Edit</a>
                            <form action="/inspire_stories/{{ $story->id }}/delete" method="post">
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