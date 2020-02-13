@extends('layouts.master')

@section('title')
login
@endsection

@section('content')

<div class="d-flex justify-content-center align-items-center login-container">

    <form action="{{ route('signin') }}" method="post" class="login-form text-center">
        <h1 class="mb-5 font-weight-light text-uppercase">Sign In</h1>
        <div class="form-group">
            <label for="email">Your E-Mail</label>
            <input
                class="form-control rounded-pill form-control-lg {{ $errors->has('emailSignIn') ? ' is-invalid' : '' }}"
                type="text" name="emailSignIn" id="emailSignIn" value="{{ Request::old('emailSignIn') }}">
        </div>
        <div class="form-group">
            <label for="password">Your Password</label>
            <input
                class="form-control rounded-pill form-control-lg {{ $errors->has('passwordSignIn') ? 'is-invalid' : '' }}"
                type="password" name="passwordSignIn" id="passwordSignIn" value="{{ Request::old('passwordSignIn') }}">
        </div>
        <div class="forgot-link form-group d-flex justify-content-between align-items-center">
            <div class="form-check">
                <input type="checkbox" class="form-check-input" id="remember">
                <label class="form-check-label" for="remember">Remember Password</label>
            </div>
            <a href="#">Forgot Password?</a>
        </div>
        <br>
        @include('includes.message-block')
        <button type="submit" class="btn mt-5 rounded-pill btn-lg btn-custom btn-block text-uppercase">Submit</button>
        <input type="hidden" name="_token" value="{{ Session::token() }}">
    </form>
</div>
@endsection