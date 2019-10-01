@extends('adminpanel.header')
@section('content')
  <!-- /Navigation-->
  <div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="#">Dashboard</a>
        </li>
        <li class="breadcrumb-item active">User Profile</li>
      </ol>
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header bg-secondary text-white text-center">My Profile</div>

                <div class="card-body" style="background:#662d91;">
                    <div class="card" style="width: 100%;">
                            <ul class="list-group list-group-flush text-center">
                                <li class="list-group-item">User ID: {{$profile->userid}}</li>
                                <li class="list-group-item">User Role: Admin</li>
                                <li class="list-group-item">Name: {{$profile->name}}</li>
                                <li class="list-group-item">Email: {{$profile->email}}</li>
                                <li class="list-group-item">Phone Number: {{$profile->phonenumber}}</li>
                            </ul>
                    </div>   
                </div>
            </div>
        </div>
    </div>
</div>
  </div>
@endsection