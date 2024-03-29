@extends('adminpanel.header')
@section('content')
<div class="content-wrapper">
        <div class="container-fluid">
          <!-- Breadcrumbs-->
          <ol class="breadcrumb">
            <li class="breadcrumb-item">
              <a href="#">Dashboard</a>
            </li>
            <li class="breadcrumb-item active">My Dashboard</li>
          </ol>
          <!-- Icon Cards-->
          <div class="row">
            <div class="col-xl-3 col-sm-6 mb-3">
              <div class="card dashboard text-white bg-primary o-hidden h-100">
                <div class="card-body">
                  <div class="card-body-icon">
                    <i class="fa fa-fw fa-users"></i>
                  </div>
                  <div class="mr-5"><h5>{{$enroll}} Enrolled Members</h5></div>
                </div>
                <a class="card-footer text-white clearfix small z-1" href="{{ url('/adminarea/enrolledusers') }}">
                  <span class="float-left">View Details</span>
                  <span class="float-right">
                    <i class="fa fa-angle-right"></i>
                  </span>
                </a>
              </div>
            </div>
            <div class="col-xl-3 col-sm-6 mb-3">
              <div class="card dashboard text-white bg-warning o-hidden h-100">
                <div class="card-body">
                  <div class="card-body-icon">
                    <i class="fa fa-fw fa-calendar-check-o"></i>
                  </div>
                    <div class="mr-5"><h5>{{$course}} Listed Courses</h5></div>
                </div>
                <a class="card-footer text-white clearfix small z-1" href="{{ url('/adminarea/courses') }}">
                  <span class="float-left">View Details</span>
                  <span class="float-right">
                    <i class="fa fa-angle-right"></i>
                  </span>
                </a>
              </div>
            </div>
            <div class="col-xl-3 col-sm-6 mb-3">
              <div class="card dashboard text-white bg-success o-hidden h-100">
                <div class="card-body">
                  <div class="card-body-icon">
                    <i class="fa fa-fw fa-calendar-check-o"></i>
                  </div>
                  <div class="mr-5"><h5>Website Status: ONLINE</h5></div>
                </div>
                <a class="card-footer text-white clearfix small z-1" href="{{ url('/') }}">
                  <span class="float-left">Visit</span>
                  <span class="float-right">
                    <i class="fa fa-angle-right"></i>
                  </span>
                </a>
              </div>
            </div>
            <div class="col-xl-3 col-sm-6 mb-3">
              <div class="card dashboard text-white bg-danger o-hidden h-100">
                <div class="card-body">
                  <div class="card-body-icon">
                    <i class="fa fa-fw fa-heart"></i>
                  </div>
                  <div class="mr-5"><h5>{{$user}} Total Registered Users!</h5></div>
                </div>
                <a class="card-footer text-white clearfix small z-1" href="{{ url('/adminarea/users') }}">
                  <span class="float-left">View Details</span>
                  <span class="float-right">
                    <i class="fa fa-angle-right"></i>
                  </span>
                </a>
              </div>
            </div>
            </div>
            <!-- /cards -->
            <h2></h2>
            <div class="box_general padding_bottom">
                <div class="header_box version_2">
                    <h2><i class="fa fa-bar-chart"></i>Statistic</h2>
                </div>
             <canvas id="myAreaChart" width="100%" height="30" style="margin:45px 0 15px 0;"></canvas>
            </div>
          </div>
          <!-- /.container-fluid-->
@endsection