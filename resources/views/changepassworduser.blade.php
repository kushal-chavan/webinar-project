@extends('layouts.app')

@section('content')
<div class="container">

          <div class="row">
                <div class="col-md-6 offset-md-3">
                    <div class="card">
                     <h5 class="card-header">Change Password</h5>
                        <div class="card-body">
                                @include('notification')
                                <form method="POST" action="{{ action('HomeController@passwordchangeuser') }}">
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
                                <p><input type="submit" name="submit" value="Save" class="btn btn-primary btn-block"></p>
                                </form>
                        </div>
                    </div>
                </div>
              </div>

    
  </div>
@endsection