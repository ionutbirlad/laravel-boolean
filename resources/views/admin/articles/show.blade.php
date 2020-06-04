@extends('layouts.app')

@section('content')
  <div class="container">
    <div class="row">
      <div class="col-12">
        <h2>{{$article->title}}</h2>
        <img src="" alt="">
        <div class="">
          {{$article->body}}
        </div>
      </div>
    </div>
  </div>
@endsection
