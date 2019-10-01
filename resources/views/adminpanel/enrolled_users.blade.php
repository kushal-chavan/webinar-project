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
            <li class="breadcrumb-item active">Users</li>
          </ol>
            <!-- Example DataTables Card-->
          <div class="card mb-3">
            <div class="card-header">
              <i class="fa fa-table"></i> Registed Users</div>
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
                      <th>User ID</th>
                      <th>Registered on</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($users as $user)
                        <tr>
                            <td>{{$user->membername}}</td>
                            <td style="color:blue">{{$user->reg_id}}</td>
                            <td>{{$user->name}}</td>
                            <td>{{$user->local_id}}</td>
                            <td>{{$user->created_at}}</td>
                            {{-- <td>
                                <div class="btn-group">
                                    <a href="#" class="btn btn-success">Edit</a>
                                    <form method="POST" action={{ action('AdminController@deletecourse', [$user->id]) }}>
                                        @csrf
                                        <input type="hidden" name="_method" value="DELETE">
                                        <button class="btn btn-danger" onclick="return confirm('Are you sure?')" type="submit">Delete</button>
                                     </form>
                                </div>
                              </td> --}}
                        </tr>
                    @endforeach
                   
                  </tbody>
                </table>
              </div>
              @else 
              <div class="alert alert-warning" role="alert">
              <h2>No Enrollment Yet</h2>
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