@extends('layouts.zentai')

@section('title', 'Laravel 5')
@section('bodyid', ' id=profile')
@section('content')
<div>
You are logged in
    <h4>Your name is {{ Auth::user()->name }} </h4>
    <h4>
    Your twitter NickName is {{ Auth::user()->handle }}
    </h4>
    <img src="{{ Auth::user()->avatar }}" height="200" width="200" />
    </div>
    <div>
    <a href="auth/twitter/logout" role="button">Logout</a>
    </div>
</div>
@endsection
