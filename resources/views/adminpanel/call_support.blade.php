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
            <li class="breadcrumb-item active">Call Request</li>
          </ol>
            <!-- Example DataTables Card-->
          <div class="card mb-3">
            <div class="card-header bg-primary text-white">
              <i class="fa fa-table"></i> Call Request</div>
            <div class="card-body">
                @include('notification')
                @if(count($callreq) > 0)
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>User ID</th>
                      <th>Name</th>
                      <th>Email</th>
                      <th>Contact Number</th>
                      <th>Language</th>
                      <th>Status</th>
                      <th>Request on</th>
                      <th>Updated at</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($callreq as $call)
                        <tr>
                            <td>{{$call->user_id}}</td>
                            <td>{{$call->user_name}}</td>
                            <td>{{$call->user_email}}</td>
                            <td>{{$call->phone_number}}</td>
                            <td>{{$call->language}}</td>
                            <td>{{$call->status}}</td>
                            <td>{{$call->created_at}}</td>
                            <td>{{$call->updated_at}}</td>
                            <td>
                                <div class="btn-group" role="group">
                                <form method="POST" action={{ action('SupportController@call', [$call->id]) }}>
                                    @csrf
                                    <input type="hidden" name="callstatus" value="SOLVED">
                                    <button class="btn btn-outline-success" onclick="return confirm('Mark as Solved?')" type="submit">Solved</button>
                                    </form>
                                    <form method="POST" action={{ action('SupportController@call', [$call->id]) }}>
                                    @csrf
                                    <input type="hidden" name="callstatus" value="UNSOLVED">
                                    <button class="btn btn-outline-warning" onclick="return confirm('Mark as Unsolved?')" type="submit">UnSolved</button>
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
              <h2>No Call Request Yet</h2>
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