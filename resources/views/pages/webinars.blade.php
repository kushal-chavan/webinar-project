@extends('pages/include/app')
@section('content')
<div class="container" style="margin-top:150px;margin-bottom:100px">
<h1 class="text-center">Recorded Webinars</h1>
   <p class="text-center"> No Recorded Videos are available at this time </p>
   <div class="text-center">
        <a href="{{url('/contact')}}" class="btn btn-success">Click Here</a><p>to request a demo webinar</p>
   </div>
</div>
@endsection