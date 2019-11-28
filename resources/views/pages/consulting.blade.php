@extends('pages/include/app')
@section('content')
<div class="container" style="margin-top:150px;margin-bottom:100px">
      @foreach ($content as $item)
<h1 class="text-center">{{$item->title}}</h1>
   <p> {{$item->data}} </p>
@endforeach
</div>
@endsection