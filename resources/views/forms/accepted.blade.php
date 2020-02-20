@extends('layouts.master')
@section('title')
accepted
@endsection
@section('content')
<style>

</style>
<div>
    <h4 class="text-center application">You are eligible for the Startup Label. You can start your application through
        the following
        link:</h4>
    <div class="text-center login-form">
        <a href="{{route('signupPage')}}" class="getStarted">get started</a>
        <a href="{{route('startup_space')}}" class="getStarted">return to website</a>



    </div>
</div>
@endsection