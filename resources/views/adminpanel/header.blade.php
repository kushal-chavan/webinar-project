<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="Ansonika">
  <title>GSHATECH - Admin dashboard</title>
	
  <!-- Favicons-->
  <link rel="shortcut icon" href="admin/img/favicon.ico" type="image/x-icon">
  <link rel="apple-touch-icon" type="image/x-icon" href="admin/img/apple-touch-icon-57x57-precomposed.png">
  <link rel="apple-touch-icon" type="image/x-icon" sizes="72x72" href="img/apple-touch-icon-72x72-precomposed.png">
  <link rel="apple-touch-icon" type="image/x-icon" sizes="114x114" href="img/apple-touch-icon-114x114-precomposed.png">
  <link rel="apple-touch-icon" type="image/x-icon" sizes="144x144" href="img/apple-touch-icon-144x144-precomposed.png">

  <!-- GOOGLE WEB FONT -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800" rel="stylesheet">
	
  <!-- Bootstrap core CSS-->
  <link href="{{ URL::asset('admin/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <!-- Main styles -->
  <link href="{{ URL::asset('admin/css/admin.css') }}" rel="stylesheet">
  <!-- Icon fonts-->
  <link href="{{ URL::asset('admin/vendor/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css">
  <!-- Plugin styles -->
  <link href="{{ URL::asset('admin/vendor/datatables/dataTables.bootstrap4.css') }}" rel="stylesheet">
  <!-- Your custom styles -->
  <link href="{{ URL::asset('admin/css/custom.css') }}" rel="stylesheet">
  <link href="{{ URL::asset('admin/vendor/dropzone.css') }}" rel="stylesheet">
	
</head>
<body class="fixed-nav sticky-footer" id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-dark bg-default fixed-top" id="mainNav">
          <a class="navbar-brand" href="index.html" style="font-size:27px">GSHATECH</a>
          <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav navbar-sidenav" id="exampleAccordion">
              <li class="nav-item {{ Request::segment(2) === '' ? 'active' : null }}" data-toggle="tooltip" data-placement="right" title="Dashboard">
                <a class="nav-link" href="{{ url('/adminarea') }}">
                  <i class="fa fa-fw fa-dashboard"></i>
                  <span class="nav-link-text">Dashboard</span>
                </a>
              </li>
              <li class="nav-item" data-toggle="tooltip" data-placement="right" title="My profile">
                <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapse1" data-parent="#exampleAccordion">
                  <i class="fa fa-fw fa-server"></i>
                  <span class="nav-link-text">Webinar</span>
                </a>
                <ul class="sidenav-second-level collapse" id="collapse1">
                  <li class="{{ Request::segment(2) === 'mywebinar' ? 'active' : null }}">
                    <a href="{{ url('/adminarea/mywebinar') }}">All Webinar</a>
                  </li>
                  <li class="{{ Request::segment(2) === 'webinar' ? 'active' : null }}">
                    <a href="{{ url('/adminarea/webinar') }}">Create Webinar</a>
                  </li>
                  <li class="{{ Request::segment(2) === 'start_webinar' ? 'active' : null }}">
                    <a href="{{ url('/adminarea/start_webinar') }}">Start Webinar</a>
                  </li>
                </ul>
              </li>
              <li class="nav-item" data-toggle="tooltip" data-placement="right" title="My profile">
                <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#webpages" data-parent="#exampleAccordion">
                  <i class="fa fa-fw fa-pencil"></i>
                  <span class="nav-link-text">My Pages</span>
                </a>
                <ul class="sidenav-second-level collapse" id="webpages">
                  <li class="{{ Request::segment(3) === 'mypages' ? 'active' : null }}">
                    <a href="{{ url('/adminarea/mypages/consulting') }}">Consulting</a>
                  </li>
                </ul>
              </li>
              <li class="nav-item {{ Request::segment(2) === 'enrolledusers' ? 'active' : null }}" data-toggle="tooltip" data-placement="right" title="Enrolled Courses">
                  <a class="nav-link" href="{{ url('/adminarea/enrolledusers') }}">
                    <i class="fa fa-fw fa-archive"></i>
                    <span class="nav-link-text">Enrolled Members</span>
                  </a>
                </li>
              <li class="nav-item {{ Request::segment(2) === 'courses' ? 'active' : null }}" data-toggle="tooltip" data-placement="right" title="Courses">
                <a class="nav-link" href="{{ url('/adminarea/courses') }}">
                  <i class="fa fa-fw fa-archive"></i>
                  <span class="nav-link-text">Courses</span>
                </a>
              </li>
              <li class="nav-item {{ Request::segment(2) === 'addcourse' ? 'active' : null }}" data-toggle="tooltip" data-placement="right" title="Add listing">
                <a class="nav-link" href="{{ url('/adminarea/addcourse') }}">
                  <i class="fa fa-fw fa-plus-circle"></i>
                  <span class="nav-link-text">Add listing</span>
                </a>
              </li>
              <li class="nav-item {{ Request::segment(2) === 'users' ? 'active' : null }}" data-toggle="tooltip" data-placement="right" title="Users">
                <a class="nav-link" href="{{ url('/adminarea/users') }}">
                  <i class="fa fa-fw fa-users"></i>
                  <span class="nav-link-text">Users</span>
                </a>
              </li>
              <li class="nav-item {{ Request::segment(2) === 'chat' ? 'active' : null }}" data-toggle="tooltip" data-placement="right" title="Users">
                  <a class="nav-link" href="{{ url('/adminarea/chat') }}">
                    <i class="fa fa-fw fa-comments"></i>
                    <span class="nav-link-text">Chat Section</span>
                  </a>
                </li>
                <li class="nav-item {{ Request::segment(2) === 'tickets' ? 'active' : null }}" data-toggle="tooltip" data-placement="right" title="My profile">
                  <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapsesupport" data-parent="#exampleAccordion">
                    <i class="fa fa-fw fa-wrench"></i>
                    <span class="nav-link-text">Support</span>
                  </a>
                  <ul class="sidenav-second-level collapse" id="collapsesupport">
                    <li>
                      <a href="{{ url('/adminarea/tickets') }}">View Tickets</a>
                    </li>
                    <li>
                        <a href="{{ url('/adminarea/callme') }}">Call Request</a>
                      </li>
                  </ul>
                </li>
              <li class="nav-item {{ Request::segment(2) === 'profile' ? 'active' : null }}" data-toggle="tooltip" data-placement="right" title="My profile">
                <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseProfile" data-parent="#exampleAccordion">
                  <i class="fa fa-fw fa-wrench"></i>
                  <span class="nav-link-text">My profile</span>
                </a>
                <ul class="sidenav-second-level collapse" id="collapseProfile">
                  <li>
                    <a href="{{ url('/adminarea/profile') }}">User profile</a>
                  </li>
                  <li>
                    <a href="{{ url('/adminarea/changepassword') }}">Change Password</a>
                  </li>
                </ul>
              </li>
            </ul>
            <ul class="navbar-nav sidenav-toggler">
              <li class="nav-item">
                <a class="nav-link text-center" id="sidenavToggler">
                  <i class="fa fa-fw fa-angle-left"></i>
                </a>
              </li>
            </ul>
            <ul class="navbar-nav ml-auto">
              <li class="nav-item">
                <a class="nav-link" data-toggle="modal" data-target="#exampleModal">
                  <i class="fa fa-fw fa-sign-out"></i>
                  Logout</a>
              </li>
            </ul>
          </div>
        </nav>

        @yield('content')

<footer class="sticky-footer">
        <div class="container">
          <div class="text-center">
            <small>Copyright © 2019 gsha technologies</small>
          </div>
        </div>
      </footer>
    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
            <i class="fa fa-angle-up"></i>
          </a>
          <!-- Logout Modal-->
          <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                  <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                  </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                  <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                      <a class="btn btn-primary" href="{{ route('logout') }}"
                      onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">
                       {{ __('Logout') }}
                   </a>

                   <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                       @csrf
                   </form>
                </div>
              </div>
            </div>
          </div>      
          <!-- Bootstrap core JavaScript-->
          <script src="{{ URL::asset('admin/vendor/jquery/jquery.min.js') }}"></script>
          <script src="{{ URL::asset('admin/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
          <!-- Core plugin JavaScript-->
          <script src="{{ URL::asset('admin/vendor/jquery-easing/jquery.easing.min.js') }}"></script>
          <!-- Page level plugin JavaScript-->
          <script src="{{ URL::asset('admin/vendor/chart.js/Chart.js') }}"></script>
          <script src="{{ URL::asset('admin/vendor/datatables/jquery.dataTables.js') }}"></script>
          <script src="{{ URL::asset('admin/vendor/datatables/dataTables.bootstrap4.js') }}"></script>
          <script src="{{ URL::asset('admin/vendor/jquery.selectbox-0.2.js') }}"></script>
          <script src="{{ URL::asset('admin/vendor/retina-replace.min.js') }}"></script>
          <script src="{{ URL::asset('admin/vendor/jquery.magnific-popup.min.js') }}"></script>
          <!-- Custom scripts for all pages-->
          <script src="{{ URL::asset('admin/js/admin.js') }}"></script>
          <!-- Custom scripts for this page-->
          <script src="{{ URL::asset('admin/js/admin-charts.js') }}"></script>

          <!-- Custom scripts for this page-->
          <script src="{{ URL::asset('admin/js/admin-datatables.js') }}"></script>
          <script src="{{ URL::asset('admin/vendor/dropzone.min.js') }}"></script>
</body>
</html>