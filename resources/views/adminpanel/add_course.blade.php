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
            <li class="breadcrumb-item active">Add listing</li>
          </ol>
            <div class="box_general padding_bottom">
                <div class="header_box version_2">
                    <h2><i class="fa fa-file"></i>Courses info</h2>
                </div>
                <div class="row">
                 <div class="col-md-6">
                @include('notification')
                 </div></div>
            <form method="POST" action="{{ url('/adminarea/addcourse') }}" enctype="multipart/form-data">
                    @csrf
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Course title</label>
                            <input type="text" name="coursetitle" class="form-control" placeholder="Course title">
                        </div>
                    </div>
                </div>
                <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Category</label>
                                <input type="text" name="coursecategory" class="form-control" placeholder="Ex: Microsoft,SAP...">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Course Time</label>
                                <input type="text" name="coursetime" class="form-control" placeholder="Ex: 1 Hour 20 min">
                            </div>
                        </div>
                    </div>
                <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Course description</label>
                                <textarea rows="9" name="coursedes" class="form-control" placeholder="Description"></textarea>
                            </div>
                        </div>
                    </div>
                    
                    
              <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Image</label>
                            <input type="file" class="form-control-file" name="cover_image">
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