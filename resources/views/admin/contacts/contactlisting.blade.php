@extends('admin.app')
@section('breadcrumbs')
  <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">Dashboard</a></li>
 <li class="breadcrumb-item active" aria-current="page">Contact Listing</li>
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
  <h2 class="h2">Contact Listing</h2> 
</div>
<div class="table-responsive">
  <table class="table table-striped table-sm">
    <thead>
      <tr>
        <th>#</th>
        <th>Name</th>
        <th>Email</th>
        <th>Phone</th>
        <th>created_at</th>
       
      </tr>
    </thead>
    <tbody>
      @if($contact->count() > 0)
      @foreach($contact as $contactlist)
      <tr>
        <td>{{$contactlist->id}}</td>
        <td>{{$contactlist->name}}</td>
        <td>{{$contactlist->email }}</td>
        <td>{{$contactlist->mobile_number}}</td> 
        <td>{{$contactlist->created_at}}</td> 
      </tr>
      @endforeach
      @else
      <tr>
        <td colspan="7" class="alert alert-info">No products Found..</td>
      </tr>
      @endif
      
    </tbody>
    
  </table>
</div>
<div class="row">
  <div class="col-md-12">
  {{$contact->links()}}
  </div>
</div>
@endsection
@section('scripts')

@endsection