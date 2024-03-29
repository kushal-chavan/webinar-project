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
            <div class="col-md-12"> 
              <div class="card mb-3">
                <div class="card-header bg-success text-white">
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
                                      <div class="col-md-9">
                                          <div class="form-group">
                                              <select type="text" name="webinar_id" class="form-control" placeholder="Course title">
                                                      <option value="">Choose...</option>
                                                      @foreach ($w_courses as $item)
                                                          <option value="{{$item->id}}">{{$item->course_name}}</option>
                                                      @endforeach
                                              </select>
                                            </div>
                                              <input type="hidden" name="user_id" value="{{$user->user_id}}">
                                              <input type="hidden" name="member_name" value="{{$user->membername}}">
                                              @foreach ($w_courses as $item)
                                              <input type="hidden" name="course_name" value="{{$item->course_name}}">
                                              <input type="hidden" name="webinar_link" value="{{$item->webinar_link}}">
                                              <input type="hidden" name="webinar_status" value="{{$item->webinar_status}}">
                                              @endforeach
                                      </div>
                                              <div class="col-md-3">
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
        
        <div class="col-md-12"> 
            <div class="card mb-3">
              <div class="card-header bg-primary text-white">
                <i class="fa fa-table"></i> Members For Webinar</div>
              <div class="card-body">
                  @if(count($add) > 0)
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
                      @foreach ($add as $member)
                          <tr>
                              <td>{{$member->member_name}}</td>
                              <td>{{$member->course_name}}</td>
                              <td>{{$member->webinar_status}}</td>
                              <td>
                                  <form method="POST" action={{ action('WebinarController@removemember', [$member->id]) }}>
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
                <h3>No members</h3>
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