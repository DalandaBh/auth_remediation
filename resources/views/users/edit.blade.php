@extends('layouts.app')

@section('content')
  <div class="container">
    <h1 class="text-center mt-5">Add a user</h1>

    <form action="{{route('users.update',$user->id)}}" method="post">
            @csrf
            @method('put')
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" name="name" class="form-control" id="" value="{{$user->name}}">
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" name="email" class="form-control" id="" value="{{$user->email}}">
        </div>
        <div class="form-group">
            <label for="password">Password</label>
            <input type="text" name="password" class="form-control" id="" value="{{$user->password}}">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
  </div>
@endsection