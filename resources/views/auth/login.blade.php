@extends('layouts.master')
@section('title', 'Login')
@section('content')
    <div class="container">
        <form method="POST" action="/login" class="form-group">
            @csrf
            <div>
                <label>Email</label>
                <input
                type="text"
                name="email"
                class="form-control"/>
            </div>

            <div>
                <label>Password</label>
                <input
                type="password"
                name="password"
                class="form-control"/>
            </div>

            @error('message')
               <div>{{ $message }}</div>
            @enderror

            <button type="submit" class="btn btn-primary">Login</button>
        </form>
    </div>
@endsection
