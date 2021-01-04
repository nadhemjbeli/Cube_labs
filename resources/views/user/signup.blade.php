@extends('layouts.master')

@section('title')
login
@endsection

@section('content')

<div class="d-flex justify-content-center align-items-center login-container">

    <form action="{{ route('signup') }}" method="post" class="login-form text-center">

        <h1 class="mb-5 font-weight-light text-uppercase">Sign Up</h1>
        <div class="form-group">
            <label for=" email">Your E-Mail</label>
            <input class="form-control rounded-pill form-control-lg {{ $errors->has('email') ? ' is-invalid' : '' }}"
                type="text" name="email" id="email" value="{{ Request::old('email') }}">
        </div>
        <div class="form-group">
            <label for=" first_name">Your Full name</label>
            <input
                class="form-control rounded-pill form-control-lg {{ $errors->has('first_name') ? ' is-invalid' : '' }}" type="
                text" name="first_name" id="first_name" value="{{ Request::old('first_name') }}">
        </div>
        <div class="form-group ">
            <label for=" password" class="form-control-label">Your Password</label>
            <input class="form-control rounded-pill form-control-lg {{ $errors->has('password') ? ' is-invalid' : '' }}"
                type="password" name="password" id="password"><br><br>
            @include('includes.message-block')
        </div>
        <button type="submit" class="btn mt-5 rounded-pill btn-lg btn-custom btn-block text-uppercase">Submit</button>
        <input type="hidden" name="_token" value="{{ Session::token() }}"><br>
        <a href="{{route('signinPage')}} ">Have an account already?</a>
    </form>

</div>
@endsection
