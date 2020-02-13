@extends('layouts.master')
@section('title')
rejcted
@endsection
@section('content')
<style>

</style>
<div>
    <h4 class="text-center application">Sorry, there is nothing we can help you with, want to apply again?</h4>
    <div class="text-center login-form">
        <a href="{{route('startup_explanation')}}" class="getStarted">return to apply</a>
        <a href="{{route('startup_space')}}" class="getStarted">return to website</a>



    </div>
</div>
@endsection