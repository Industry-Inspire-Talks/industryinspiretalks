@extends('admin.layouts.panel')

@section('main')

<form method="POST" action="" enctype='multipart/form-data'>
    @csrf
    <div class="card">
        <div class="card-header">
            <p class="h5 m-0"><a href="/inspire_stories" class="btn btn-dark mr-2 btn-sm"><i class="fa fa-chevron-left"></i></a> Edit Inspire Stories </p>
        </div>
        <div class="card-body">
            <div class="col-md-4">
                <label for="">Industry Leader</label>
                

                <select class="form-control" name="name">
                @foreach ($industry_leaders as $industry_leaders)
                <option value="{{$industry_leaders->name}}" {{$industry_leaders->id==$inspire_stories->leader_id ? 'selected' : ""}}>{{$industry_leaders->name}}</option>
                @endforeach
                </select>
                
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label for="">Link</label>
                    <input type="text" name="link" value={{$inspire_stories->link}} class="form-control">
                </div>
            </div>
            <div class="col-md-4">
                <div>
                    <label for="formFile" class="form-label">Upload Image</label>
                    <input class="form-control form-control mb-4" name="image_ext" type="file">
                </div>
                <div class="form-group">
                    <button class="btn btn-warning " type="submit" name="action" value="image_upload"><i class="fa fa-plus"></i> Upload Image</button>
                </div>
            </div>
            <div class="form-group">
                <label for="">Visibility</label>
                <select class="form-control" name="visible">
                    <option value="0">Hidden</option>
                    <option value="1">Visible</option>
                </select>
            </div>
        </div>
        <div class="card-footer">
            <button class="btn btn-primary" type="submit" name="action" value="update"><i class="fa fa-plus"></i> Update</button>
        </div>
    </div>
</form>


@endsection