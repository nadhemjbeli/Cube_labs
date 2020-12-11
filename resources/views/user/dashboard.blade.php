@extends('layouts.master_auth')

@section('title')
dashboard
@endsection

@section('content_auth')
<div class="container">
    <br>
    <h4 class="user_info">
        hello Mr/Mrs {{$user->first_name}}
    </h4>
    
    @if($user->startup)
    <div>
        <p>
            phone number
        </p>
        <h3>
            {{$user->startup->phone_number}}
        </h3>
    </div>
    @else
    <div>
        <br>
        <div class="article" style="margin-left: 20px">
            <h4>We will view your business informations and issues</h4>
            <h4>don't forget to check your email</h4>
        </div>
        <h3>
            your business: <strong>{{$user->business->business_name}}</strong>
        </h3>
    </div>
    @endif
</div>
@endsection