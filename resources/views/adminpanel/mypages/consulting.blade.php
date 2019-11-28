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
            <li class="breadcrumb-item active">My Pages</li>
          </ol>
            <div class="box_general padding_bottom">
                <div class="header_box version_2">
                    <h2><i class="fa fa-file"></i>Consulting Page</h2>
                </div>
                <div class="row">
                 <div class="col-md-6">
                @include('notification')
                 </div></div>
            <form method="POST" action="{{ url('/adminarea/addcourse') }}" enctype="multipart/form-data">
                    @csrf
                <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Page Content</label>
                            <textarea rows="9" name="coursedes" class="form-control" placeholder="Description">{{$con->data}}</textarea>
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