
@extends('layouts.master')
@section('title', 'Login')
@section('content')
<form method="POST" action="/register">
    @csrf

    <div>
        <label>Name</label>
        <input
        type="text"
        name="name"
        class="form-control"
        />
    </div>

    @error('name')
    <div>{{ $message }}</div>
    @enderror

    <div>
        <label>Email</label>
        <input
        type="text"
        name="email"
        class="form-control"/>
    </div>

    @error('email')
    <div>{{ $message }}</div>
    @enderror

    <div>
        <label>Password</label>
        <input
        type="password"
        name="password"
        class="form-control"/>
    </div>

    @error('password')
    <div>{{ $message }}</div>
    @enderror

    <div>
        <label>Confirm password</label>
        <input
        type="password"
        name="confirmPassword"
        class="form-control" />
    </div>


    <button type="submit" class="btn btn-primary">Register</button>
</form>

@endsection
