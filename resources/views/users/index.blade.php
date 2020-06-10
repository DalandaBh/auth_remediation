@extends('layouts.app')

@section('content')
    

<div class="container">
   
    
    <div class="row mt-5">
        <div class="col-12">
            <div class="card card-info">
                <div class="card-header ">
                <h3 class="card-title">Users</h3>
                <a href="{{route('users.create')}}">
                    <button class="btn btn-success d-block mx-auto">Add</button>
                </a>
        
                </div>
                <!-- /.card-header -->
                <div class="card-body table-responsive p-0">
                <table class="table table-hover text-wrap">
                    <thead>
                    <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Name</th>
                        <th scope="col">Email</th>
                        <th scope="col">Action</th>
                      
                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($users as $user)
                        <tr>
                            <td>{{$user->id}}</td>
                            <td>{{$user->name}}</td>
                            <td>{{$user->email}}</td>
      
                            <td class="d-flex">
                                

                                @if(Auth::user()->id == $user->id)
                                    <a href="{{route('users.edit', $user->id)}}">
                                        <button class="btn btn-warning">Edit {{$user->id}}</button>
                                    </a>

                                    <form action="{{route('users.destroy',$user->id)}}" method="post">
                                        @csrf
                                        @method('delete')
                                            <button class="btn btn-danger">Delete</button>
                                    </form>
                                @endif
                                {{-- <a href="{{route('users.show', $user->id)}}">
                                    <button class="btn btn-info">Show</button>
                                </a> --}}
                            </td>
                        </tr>
                        
                    @endforeach
                    </tbody>
                </table>
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>
    </div>
</div>
@endsection