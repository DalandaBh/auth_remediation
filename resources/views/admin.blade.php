@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    Welcome, You are logged in!

                    <a href="{{route('users.index')}}">
                        <button class="btn btn-success d-block mx-auto">See Users</button>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection