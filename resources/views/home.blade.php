@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">

                <div class="card-header inline">{{ __('Dashboard') }}
                        <a class="ml-3 mr-3 text-dark" href="{{route('index')}}">Main Page</a>
                    @if(Auth::user()->is_admin)
                    <a class="ml-1 text-dark" href="{{route('admin.index')}}" active="request()->routeIs('admin.index')">
                        {{ __('Admin') }}
                    </a>
                    @endif
                </div>
                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
<a class="dropdown-item" href="http://127.0.0.1:8000/logout" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
    Logout
</a>
