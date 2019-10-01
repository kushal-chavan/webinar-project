@extends('adminpanel.header')
@section('content')
  <!-- /Navigation-->
  <div class="content-wrapper">
        <div class="container-fluid">
          <!-- Breadcrumbs-->
          <ol class="breadcrumb">
            <li class="breadcrumb-item">
            <a href="{{ url('/adminarea') }}">Dashboard</a>
            </li>
            <li class="breadcrumb-item active">Tickets</li>
          </ol>
            <!-- Example DataTables Card-->
          <div class="card mb-3">
            <div class="card-header">
              <i class="fa fa-table"></i> All Tickets</div>
            <div class="card-body">
                @include('notification')
                @if(count($tickets) > 0)
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>User ID</th>
                      <th>User Name</th>
                      <th>User Email</th>
                      <th>Department</th>
                      <th>Message</th>
                      <th>Status</th>
                      <th>Request on</th>
                      <th>Updated at</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($tickets as $ticket)
                        <tr>
                            <td>{{$ticket->user_id}}</td>
                            <td>{{$ticket->user_name}}</td>
                            <td>{{$ticket->user_email}}</td>
                            <td>{{$ticket->department}}</td>
                            <td><button 
                              type="button" 
                              class="btn btn-info" 
                              data-toggle="modal" 
                              data-target="#viewModal{{ $ticket->id}}">
                              View
                            </button></td>
                            <td>{{$ticket->status}}</td>
                            <td>{{$ticket->created_at}}</td>
                            <td>{{$ticket->updated_at}}</td>
                            <td>
                                <div class="btn-group" role="group">
                                    <form method="POST" action={{ action('SupportController@solve', [$ticket->id]) }}>
                                        @csrf
                                        <input type="hidden" name="status" value="SOLVED">
                                        <button class="btn btn-outline-success" onclick="return confirm('Mark as Solved?')" type="submit">Solved</button>
                                     </form>
                                     <form method="POST" action={{ action('SupportController@solve', [$ticket->id]) }}>
                                        @csrf
                                        <input type="hidden" name="status" value="UNSOLVED">
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
              <h2>No Support Request Found!</h2>
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
        @foreach ($tickets as $ticket)
      <div class="modal fade" id="viewModal{{ $ticket->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Status: {{ $ticket->status}}</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <h6><span style="color:#005a85">Subject:</span><br> {{ $ticket->subject }}</h6>
              <h6><span style="color:#005a85">{{ $ticket->user_name }}'s Message:</span><br> {{ $ticket->message }}</h6>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
            </div>
          </div>
        </div>
      </div>
@endforeach
@endsection