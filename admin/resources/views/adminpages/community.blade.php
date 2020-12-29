@extends('adminpages/adminpanel')

@section('community_details')
<div class="row">
    <div class="col-12 col-md-9">
    <table class="table table-responsive-md">
        <thead class="thead bg-primary text-light">
            <tr>
            <th scope="col">Id</th>
            <th scope="col">Name</th>
            <th scope="col">Company</th>
            <th scope="col">Role</th>
            <th scope="col">Industry</th>
            <th scope="col">Actions</th>
            </tr>
        </thead>
        <tbody>
        @foreach ($community as $community)
            <tr>
            <th scope="row">{{$community->id}}</th>
            <td>{{$community->name}}</td>
            <td>{{$community->company}}</td>
            <td>{{$community->role}}</td>
            <td>{{$community->industry}}</td>
            <td>
                <div class="btn-group">
                <a class="btn btn-warning" href="#" role="button">Edit</a>
                <a class="btn btn-success" href="#" role="button">View</a>
                </div>
             </td>
            </tr>
        @endforeach    
        </tbody>
    </table>
</div>
  <div class="col-12 col-md-3">
  <form>
  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
  </div>
  <div class="form-group form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
  </div>
</div>




@stop