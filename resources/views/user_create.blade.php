@extends('master')

@section('content')

<h2>Create a New User</h2>

@if (session()->has('message'))
    {{ session()->get('message') }}
@endif

@if (session()->has('error'))
    {{ session()->get('error') }}
@endif

<form action="{{ route('users.store') }}" method="post">
    @csrf
    <input type="text" name="username" placeholder="Your Username">
    <input type="text" name="email" placeholder="Your Email">
    <input type="text" name="password" placeholder="Your Password">
    <button type="submit">Create a new User</button>
</form>

@endsection
