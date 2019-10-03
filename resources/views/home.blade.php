@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header bg-dark text-white">Registered Courses</div>

                <div class="card-body">
                    @include('notification')
                    @if(count($mycourses) > 0)
                    <table class="table">
                            <thead class="thead-dark">
                              <tr>
                                <th scope="col">Course</th>
                                <th scope="col">Registeration ID</th>
                                <th scope="col">Action</th>
                              </tr>
                            </thead>
                            <tbody>
                              @foreach ($mycourses as $mycourse)
                              <tr>
                                  <td>{{$mycourse->name}}</td>
                                  <td>{{$mycourse->reg_id}}</td>
                                  <td><button type="button" class="btn btn-success" data-toggle="modal" data-target="#abc{{$mycourse->reg_id}}">
                                    View Details
                                  </button>
                                  </td>
                                </tr>
                              @endforeach
                              
                            </tbody>
                          </table>
                          @else 
                          <div class="alert alert-warning" role="alert">
                          <h2>No Courses</h2> <a class="btn btn-success" href="{{ url('/courses') }}">Enroll Now</a>
                          </div>
                          @endif
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card">
                <div class="card-header bg-primary text-white">Activity</div>
                <div class="card-body">
                  @if(count($livemember) > 0)
                    @foreach ($livemember as $live)
                    <div class="card mt-3">
                        <div class="card-body">
                          <h5 class="card-title">{{$live->course_name}}</h5>
                          <p class="card-text">Online training has started.</p>
                          <a href="#" class="btn btn-danger">Live</a>
                          <a href="{{$live->webinar_link}}" target="_blank" class="btn btn-primary">Join now</a>
                        </div>
                      </div>
                      @endforeach
                  @else 
                    <p>No Activity</p>
                  @endif
                </div>
            </div>
        </div>
</div>
@foreach ($mycourses as $mycourse)
<!-- Modal -->
<div class="modal fade" id="abc{{$mycourse->reg_id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Course Details</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <h4>Course Name: {{$mycourse->name}}</h4>
        <h4>Course Registeration Number: {{$mycourse->reg_id}}</h4>
        <h4>Registered on: {{$mycourse->created_at}}</h4>
        <p></p>
        <h3>About Course:</h3>
        <p>{{$mycourse->description}}</p>
        <p>For More Information Contact at info@gshatech.com or Call on +(91) 9885054740</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-dismiss="modal">Got it</button>
      </div>
    </div>
  </div>
</div>
@endforeach
@endsection
