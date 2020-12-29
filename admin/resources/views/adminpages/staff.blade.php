@extends('adminpages/adminpanel')

@section('staff_details')
<div class="row">
    <div class="col-12 col-md-10">
    <table class="table table-responsive-sm">
        <thead class="thead bg-primary text-light">
            <tr>
            <th scope="col">Id</th>
            <th scope="col">Name</th>
            <th scope="col">Designation</th>
            <th scope="col">Contact</th>
            <th scope="col">Email</th>
            <th scope="col">DOB</th>
            <th scope="col">Social Links</th>
            <th scope="col">Nationality</th>
            <th scope="col">Address</th>
            <th scope="col">Profile Image Ext</th>
            <th scope="col">Date of Joining</th>
            <th scope="col">Date of Leaving</th>
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
            <td>{{$staff->dob}}</td>
            <td>{{$staff->social_links}}</td>
            <td>{{$staff->nationality}}</td>
            <td>{{$staff->address}}</td>
            <td>{{$staff->profile_image_ext}}</td>
            <td>{{$staff->date_of_joining}}</td>
            <td>{{$staff->date_of_leaving}}</td>

            <td>
                <div class="btn-group">
                <a class="btn btn-warning " href="#" role="button">Edit</a>
                <a class="btn btn-success" href="#" role="button">View</a>
                </div>
             </td>
            </tr>
        @endforeach    
        </tbody>
    </table>
</div>
  <div class="col-12 col-md-2">
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