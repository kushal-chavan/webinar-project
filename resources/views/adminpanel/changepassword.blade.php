@extends('adminpanel.header')
@section('content')
  <!-- /Navigation-->
  <div class="content-wrapper">
        <div class="container-fluid">
          <!-- Breadcrumbs-->
          <ol class="breadcrumb">
            <li class="breadcrumb-item">
            <a href="{{url('/adminarea')}}">Dashboard</a>
            </li>
            <li class="breadcrumb-item active">Change Password</li>
          </ol>

          <div class="row">
                <div class="col-md-4 offset-md-4">
                    <div class="card">
                     <h5 class="card-header">Change Password</h5>
                        <div class="card-body">
                                @include('notification')
                                <form method="POST" action="{{ action('AdminController@passwordchange') }}">
                                    @csrf
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Current Password</label>
                                            <input type="password" name="current-password" class="form-control" autocomplete="off">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>New Password</label>
                                                <input type="password" name="new-password" class="form-control" autocomplete="off">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label>Confirm New Password</label>
                                                    <input type="password" name="new-password_confirmation" class="form-control" autocomplete="off">
                                                </div>
                                            </div>
                                        </div>
                                <!-- /row-->
                                <p><input type="submit" name="submit" value="Save" class="btn_1 medium"></p>
                                </form>
                        </div>
                    </div>
                </div>
              </div>

        </div>
  </div>
@endsection