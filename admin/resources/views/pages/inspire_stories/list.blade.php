@extends('template')

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

                    @foreach ($tablerow as $story)

                    <tr>
                        <th scope="row">{{$story->id}}</th>
                        <td class="text-center"><img class="rounded" src="/uploads/inspire_stories/{{$story->id}}.{{$story->image_ext}}" height="100px" alt=""></td>
                        @php
                        $name = DB::table('industry_leaders')->select('name')->where('id',$story->id)->get();
                        @endphp
                        <td>{{$name}}</td>
                        <td>{{$story->link}}</td>

                        <td class="text-nowrap">
                            <a class="btn btn-sm btn-warning " href="/inspire_stories/edit/{{$story->id}}"><i class="fa fa-edit"></i> Edit</a>
                        </td>
                    </tr>

                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

@stop