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
            <li class="breadcrumb-item active">Start Webinar</li>
          </ol>
            <!-- Example DataTables Card-->
          <div class="row">
            <div class="col-md-6"> 
              <div class="card mb-3">
                <div class="card-header">
                  <i class="fa fa-table"></i> Enrolled Users</div>
                <div class="card-body">
                    @include('notification')
                    @if(count($users) > 0)
                  <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                      <thead>
                        <tr>
                          <th>Member name</th>
                          <th>Registered ID</th>
                          <th>Course Name</th>
                          <th>Webinar</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach ($users as $user)
                            <tr>
                                <td>{{$user->membername}}</td>
                                <td>{{$user->reg_id}}</td>
                                <td>{{$user->name}}</td>
                                <th>
                                    @if(count($w_courses) > 0)
                                    @foreach ($w_courses as $item)
                                    <form method="POST" action={{ action('WebinarController@addtowebinar', [$item->id]) }}>
                                    @endforeach
                                      @csrf
                                  <div class="row">
                                      <div class="col-md-12">
                                          <div class="form-group">
                                              <select type="text" name="webinar_name" class="form-control" placeholder="Course title">
                                                      <option value="">Choose...</option>
                                                      @foreach ($w_courses as $item)
                                                          <option value="{{$item->id}}">{{$item->course_name}}</option>
                                                      @endforeach
                                              </select>
                                              <input type="hidden" name="user_id" value="{{$user->id}}">
                                          </div>
                                          <button class="btn btn-success float-left" type="submit">Add</button>
                                      </div>
                                  </div>        
                                  </form>
                                  @else No Webinars
                                  @endif
                                </th>   
                        @endforeach
                      
                      </tbody>
                    </table>
                  </div>
                  @else 
                  <div class="alert alert-warning" role="alert">
                  <h2>No Members</h2>
                  </div>
                  @endif
                </div>
              </div>
              <!-- /tables-->
        </div><!-- /col-->
        
        <div class="col-md-6"> 
            <div class="card mb-3">
              <div class="card-header">
                <i class="fa fa-table"></i> Members For Webinar</div>
              <div class="card-body">
                  @if(count($users) > 0)
                <div class="table-responsive">
                  <table class="table table-bordered">
                    <thead>
                      <tr>
                        <th>Member name</th>
                        <th>Registered ID</th>
                        <th>Course Name</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach ($users as $user)
                          <tr>
                              <td>{{$user->membername}}</td>
                              <td>{{$user->reg_id}}</td>
                              <td>{{$user->name}}</td>
                              <td>
                                  <form method="POST" action={{ action('AdminController@deletecourse', [$user->id]) }}>
                                      @csrf
                                      <input type="hidden" name="_method" value="DELETE">
                                      <button class="btn btn-danger" onclick="return confirm('Are you sure?')" type="submit">Remove</button>
                                  </form>
                                </td>
                          </tr>
                      @endforeach
                    
                    </tbody>
                  </table>
                </div>
                @else 
                <div class="alert alert-warning" role="alert">
                <h2>No Webinar is runing</h2>
                </div>
                @endif
              </div>
            </div>
            <!-- /tables-->
      </div><!-- /col-->
      </div><!-- /row -->
      
          </div>
          <!-- /container-fluid-->
           </div>
        <!-- /container-wrapper-->
@endsection