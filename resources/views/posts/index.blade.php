@extends('layouts.app')
@section('title') index @endsection
@section('content')
<div class="mt-4">
  <div class="text-center">
  <a href="{{route('posts.create')}}" class="btn btn-success">create post</a>
</div>
 

<table class="table mt-4">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Title</th>
      <th scope="col">Posted by</th>
      <th scope="col">Created at</th>
      <th scope="col">Actions</th>
    </tr>
  </thead>
  <tbody>
    @foreach($posts as $post)
    <tr>
      <th scope="row">{{$post['id']}}</th>
      <td>{{$post['title']}}</td>
      <td>{{$post['posted-by']}}</td>
      <td>{{$post['created-at']}}</td>
      <td>
      <a class="btn btn-info" href="{{route('posts.show',$post['id'])}}">View</a>
      <a class="btn btn-primary" href="{{route('posts.edit',$post['id'])}}">Edit</a>
      <form style="display:inline"  method="POST" action="{{route('posts.destroy',$post['id'])}}">
      @csrf
      @method('DELETE')
      
      <button type="submit" class="btn btn-danger" >Delete</button>

    </form>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
</div>

    @endsection