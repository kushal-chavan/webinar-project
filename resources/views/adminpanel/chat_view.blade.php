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
                <li class="breadcrumb-item active">Chat Online</li>
            </ol>
            <form style="display:none;" id="login" target="frame" method="post" action="https://dashboard.tawk.to/login">
              <input type="hidden" name="email" value="kushal.chavan120@gmail.com" />
              <input type="hidden" name="password" value="diano@100" />
              <input type="submit" name="submit" value="Sign In" id="submit-login">
            </form>
                  <iframe id="frame" name="frame" src="https://dashboard.tawk.to/login" frameborder="0" style="width:80%;height:80%;position: absolute;"></iframe>
         </div>
  </div>
  <script type="text/javascript">
    window.onload = function(){
      document.getElementById('submit-login').click();
    }
    </script>
@endsection