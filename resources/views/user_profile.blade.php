@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card bg-secondary">
                <div class="card-header bg-dark text-white text-center">My Profile</div>

                <div class="card-body">
                    <div class="card" style="width: 100%;">
                            <ul class="list-group list-group-flush text-center">
                                <li class="list-group-item">User ID: {{$profile->userid}}</li>
                                <li class="list-group-item">Name: {{$profile->name}}</li>
                                <li class="list-group-item">Email: {{$profile->email}}</li>
                                <li class="list-group-item">Phone Number: {{$profile->phonenumber}}</li>
                            </ul>
                    </div>  
                <a href="{{ route('changepassworduser')}}" class="mt-2 btn btn-success btn-block">Change Password</a>          
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
