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
            <li class="breadcrumb-item active">webinar</li>
          </ol>
            <div class="box_general padding_bottom">
                <div class="header_box version_2">
                    <h2><i class="fa fa-file"></i>Create Webinar</h2>
                </div>
                <div class="row">
                 <div class="col-md-6">
                @include('notification')
                 </div></div>
            <form method="POST" action="{{ url('/adminarea/webinar') }}">
                    @csrf
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Course title</label>
                            <select type="text" name="course_name" class="form-control" placeholder="Course title">
                                    <option value="">Choose...</option>
                                    @foreach ($w_courses as $item)
                                        <option value="{{$item->name}}">{{$item->name}}</option>
                                    @endforeach
                                  </select>
                        </div>
                    </div>
                </div> 
                <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Add Link to webinar</label>
                                <input type="text" name="webinar_link" class="form-control" placeholder="Eg: https://webinar.com/">
                            </div>
                        </div>
                    </div>       
                <!-- /row-->
                <p><input type="submit" name="submit" value="Save" class="btn_1 medium"></p>
                </form>
            </div>
            <!-- /box_general-->
        
          </div>
          <!-- /.container-fluid-->
           </div>
@endsection