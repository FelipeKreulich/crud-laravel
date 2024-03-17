@extends('master')

@section('content')

<h2>Edit</h2>

@if (session()->has('message'))
    {{ session()->get('message') }}
@endif

@if (session()->has('error'))
    {{ session()->get('error') }}
@endif

<form action="{{ route('users.update', ['user' => $user->id]) }}" method="post">
    @csrf
    <input type="hidden" name="_method" value="PUT">
    <input type="text" name="username" value={{ $user->username }}>
    <input type="text" name="email" value={{ $user->email }}>
    <button type="submit">Update</button>
</form>

@endsection
