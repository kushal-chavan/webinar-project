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
            <li class="breadcrumb-item active">Courses</li>
          </ol>
            <!-- Example DataTables Card-->
          <div class="card mb-3">
            <div class="card-header">
              <i class="fa fa-table"></i> All Listing</div>
            <div class="card-body">
                @include('notification')
                @if(count($courses) > 0)
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>Category</th>
                      <th>Title</th>
                      <th>Description</th>
                      <th>time</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($courses as $course)
                        <tr>
                            <td>{{$course->category}}</td>
                            <td>{{$course->name}}</td>
                            <td>{{$course->description}}</td>
                            <td>{{$course->time}}</td>
                            <td>
                                <div class="btn-group">
                                    <a href="#" class="btn btn-success">Edit</a>
                                    <form method="POST" action={{ action('AdminController@deletecourse', [$course->id]) }}>
                                        @csrf
                                        <input type="hidden" name="_method" value="DELETE">
                                        <button class="btn btn-danger" onclick="return confirm('Are you sure?')" type="submit">Delete</button>
                                     </form>
                                </div>
                              </td>
                        </tr>
                    @endforeach
                   
                  </tbody>
                </table>
              </div>
              @else 
              <div class="alert alert-warning" role="alert">
              <h2>No Courses Listed</h2> <a class="btn btn-success" href="{{ url('/adminarea/addcourse') }}">ADD NOW</a>
              </div>
              @endif
            </div>
            <div class="card-footer small text-muted">Updated at {{ date('Y-m-d H:i:s') }}</div>
          </div>
          <!-- /tables-->
          </div>
          <!-- /container-fluid-->
           </div>
        <!-- /container-wrapper-->
@endsection