@extends('layout')

@section('content')

@foreach($data as $datas)
  <div class="content">
  <h1><a href="/show/{{$datas->id}}">{{$datas->title}}</a></h1>
    <hr>
    <p>{{$datas->main}}</p>
  </div>
@endforeach

@endsection