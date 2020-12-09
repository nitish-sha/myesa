@extends('admin.app')
@section('breadcrumbs')
  <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">Dashboard</a></li>
 <li class="breadcrumb-item active" aria-current="page">Comment Listing</li>
@endsection
@section('content')
  <div class="row d-block">
    <div class="col-sm-12">
      @if (session()->has('message'))
      <div class="alert alert-success">
        {{session('message')}}
      </div>
      @endif
    </div>
  </div>
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
  <h2 class="h2">Comment Listing</h2>

  
</div>

    <br />
    <table class="table table-striped">
    <thead>
      <tr>
        <th>ID</th>
        <th>Title</th>
        <th>Description</th>
        <th>Status</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
    @foreach($posts as $post)
      <tr>
        <td>{{$post->id}}</td>
        <td>{{$post->title}}</td>
        <td>{{$post->description}}</td>
        <td>
        @if($post->status == 0)
        <span class="label label-primary">Pending</span>
        @elseif($post->status == 1)
        <span class="label label-success">Approved</span>
        @elseif($post->status == 2)
        <span class="label label-danger">Rejected</span>
        @else
        <span class="label label-info">Postponed</span>
       @endif
        </td>
        <td><a href="{{action('AdminController@edit', $post->id)}}" class="btn btn-warning">Moderate</a></td>
      </tr>
      @endforeach
    </tbody>
  </table>
 <div class="row">
  <div class="col-md-12">
    {{$posts->links()}}
  </div>
</div>
@endsection