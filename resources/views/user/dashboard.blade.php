@extends('layouts.master_auth')

@section('title')
dashboard
@endsection

@section('content_auth')
<div class="container">
    <p>
        name
    </p>
    <h3>
        {{$user->first_name}}
    </h3>
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
        <p>
            password
        </p>
        <h3>
            {{$user->email}}
        </h3>
    </div>
    @endif
</div>
@endsection