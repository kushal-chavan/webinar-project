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
            <li class="breadcrumb-item active">Webinars</li>
          </ol>
            <!-- Example DataTables Card-->
          <div class="card mb-3">
            <div class="card-header">
              <i class="fa fa-table"></i> All Webinars</div>
            <div class="card-body">
                @include('notification')
                @if(count($mywebinar) > 0)
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>ID</th>
                      <th>Webinar name</th>
                      <th>Link</th>
                      <th>Status</th>
                      <th>Created at</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($mywebinar as $webinar)
                        <tr>
                            <td>{{$webinar->webinar_id}}</td>
                            <td>{{$webinar->course_name}}</td>
                            <td><a href="{{$webinar->webinar_link}}" target="_blank">{{$webinar->webinar_link}}</a></td>
                            <td>{{$webinar->webinar_status}}</td>
                            <td>{{$webinar->created_at}}</td>
                            <td>
                                <div class="btn-group">
                                    <form method="POST" action={{ action('WebinarController@deletewebinar', [$webinar->id]) }}>
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
              <h2>No Webinars</h2> <a class="btn btn-success" href="{{ url('/adminarea/webinar') }}">Create Now</a>
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