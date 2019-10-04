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
                            <td> <button 
                                      type="button" 
                                      class="btn btn-success" 
                                      data-toggle="modal" 
                                      data-target="#viewModal{{ $course->id}}">
                                      <i class="fa fa-fw fa-pencil-square-o"></i>
                                    </button>
                                    <form method="POST" action={{ action('AdminController@deletecourse', [$course->id]) }}>
                                        @csrf
                                        <input type="hidden" name="_method" value="DELETE">
                                        <button class="btn btn-danger" onclick="return confirm('Are you sure?')" type="submit"><i class="fa fa-fw fa-window-close"></i></button>
                                     </form>
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
@foreach ($courses as $course)
<div class="modal fade" id="viewModal{{ $course->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Edit {{$course->name}}</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="POST" action="">
          @csrf
          <div class="row">
              <div class="col-md-12">
                  <div class="form-group">
                      <label>Course Category</label>
                      <input type="text" name="course_category" class="form-control" value="{{$course->category}}">
                  </div>
              </div>
          </div>
          <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    <label>Course title</label>
                    <input type="text" name="course_title" class="form-control" value="{{$course->name}}">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    <label>Course time</label>
                    <input type="text" name="course_time" class="form-control" value="{{$course->time}}">
                </div>
            </div>
        </div>
          <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    <label>Course description</label>
                    <textarea rows="5" type="text" name="course_description" class="form-control">{{$course->description}}</textarea>
                </div>
            </div>
        </div>
        <button type="submit" name="submit" class="btn btn-primary" data-dismiss="modal">Save</button>
        </form>
      </div>
      <div class="modal-footer">
        
      </div>
    </div>
  </div>
</div>
@endforeach