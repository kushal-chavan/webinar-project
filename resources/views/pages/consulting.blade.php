@extends('pages/include/app')
@section('content')
<div class="container" style="margin-top:150px;margin-bottom:100px">
<h1 class="text-center">Consulting</h1>
@foreach ($content as $item)
   <p> {{$item->data}} </p>
@endforeach
</div>
@endsection