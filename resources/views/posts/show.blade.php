@extends('layouts.app')
@section('title') show @endsection
@section('content')
<div class="card">
  <h5 class="card-header">Featured</h5>
  <div class="card-body">
    <h5 class="card-title">Title:{{$post['title']}}</h5>
    <p class="card-text">Description:{{$post['description']}}</p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
</div>

@endsection