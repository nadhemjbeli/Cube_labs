@extends('layouts.master')

@section('title')
spage
@endsection

@section('content')
<style>
    .startup_back {
        background: url("img/startup.jpg");
        height: 160px;
    }
</style>
<div class="startup_back">

</div>
<div class="container my-4 px-5">
    <div class="row">
        <div class="row col-md">
            <div class="col-md block-startup d-flex align-items-center flex-column fle access">
                <div class="font-weight-bold text-uppercase block-startup-title">
                    eligiblity
                </div>
                <p>To find out if you are eligible for the Startup Label,<br>
                    please answer this test</p>
                <a href="{{route("startup_explanation")}} " class="block-startup-btn font-weight-bold">Access</a>
            </div>
        </div>
        <div class="row col-md">
            <div class="col-md block-startup d-flex align-items-center flex-column fle access">
                <div class="font-weight-bold text-uppercase block-startup-title ">
                    get connected
                </div>
                <p>Access your Startup Space</p><br>
                <a href="{{route("signinPage")}} " class="block-startup-btn font-weight-bold text-decoration-none">Sign
                    in</a>
            </div>

        </div>

    </div>
</div>
@endsection