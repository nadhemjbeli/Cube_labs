@extends('layouts.master')
@section('title')
startup
@endsection
@section('content')
<style>
    hr {
        border: 0.5px solid #ee0049;
        width: 75%;
    }
</style>

<form class="needs-validation form-control-sm" action="{{route("stored")}} " method="post" style="width:auto;
                                                        height: auto;
                                                        background: radial-gradient(rgb(133, 122, 143), rgb(0, 0, 0));
                                                        color:#eee;
                                                        background-position:center" novalidate>

    @csrf
    <div class="container font-weight-bold" style="">
        <br>
        <h4 class="isEgible text-uppercase font-weight-bolder">am i eligible for the sartup label ?</h4>
        <hr class="egible"><br>
        @include('includes.message-block')
        <br>
        <p>
            <span class="num-question">Q. 1</span> Is your society already created?
        </p>
        <div class=" btn-group-toggle custom-control custom-radio " data-toggle="buttons">
            <label class="btn btn-secondary">
                <input type="radio" name="already" id="option1" class="custom-control-input" value="yes" required> Yes
            </label>
            <label class="btn btn-secondary">
                <input type="radio" name="already" id="option2" class="radio" value="no" required> No
            </label>
        </div>
        <br>
{{--        @if ($errors->has('already'))--}}


{{--        <div class="error">--}}
{{--            {{$errors->first('already')}}--}}
{{--        </div>--}}
{{--        @endif--}}
        <br>
        <hr><br>
        <div>

            <p><span class="num-question">Q. 2 </span>
                Does your company meet ALL of these criteria?<br>
                - Your company has less than 3 years of existence <br>
                - You have less than 15 employees <br>
                - The balance sheet total is less than 60 thousand dinars <br>
                - The turnover is less than 60 thousand dinars <br>
            </p>
            <div class="btn-group-toggle custom-control custom-radio" data-toggle="buttons">
                <label class="btn btn-secondary">
                    <input type="radio" name="rich" value="yes" id="option3" required> Yes
                </label>
                <label class="btn btn-secondary">
                    <input type="radio" name="rich" value="no" id="option4" required> No
                </label>
            </div>
            <br>
            <hr>
        </div>
        <div><br>
            <p>
                An innovative idea is an interesting and differentiated<br>
                solution to a given problem. The innovation can<br>
                concern the methods, the services, the business model,<br>
                the market ... Example of innovative project: Your imagination is the limit <br>
                Example of NON-innovative project: a publinet, a ss2i ..
            </p>
            <br>
            <hr>
        </div>
        <div>
            <br>
            <p>
                <span class="num-question">Q. 3 </span>Is your company or idea innovative?
            </p>
            <div class=" btn-group-toggle custom-control custom-radio" data-toggle="buttons">
                <label class="btn btn-secondary">
                    <input type="radio" name="innovative" value="yes" class="radio" required> Yes
                </label>
                <label class="btn btn-secondary">
                    <input type="radio" name="innovative" value="no" class="radio" required> No
                </label>
            </div>
            <br>
            <hr>
        </div>
        <div class="">
            <br>
            <p style="margin-left: 15px">
                A project is scalable if it has strong growth potential: <br>
                It can multiply its customers and revenues quickly and exponentially. <br>
                Example of scalable project: Uber for pizzas <br>
                Example of NON-scalable project: Freelance
            </p><br>
            <hr>
        </div>
        <div><br>
            <p>
                <span class="num-question">Q. 4 </span>Is your company or idea scalable?
            </p>
            <div class="btn-group-toggle custom-control custom-radio" data-toggle="buttons">
                <label class="btn btn-secondary">
                    <input type="radio" name="scalable" id="option1" value="yes" class="radio" required> Yes
                </label>
                <label class="btn btn-secondary">
                    <input type="radio" name="scalable" id="option2" value="no" class="radio" required> No
                </label>
            </div>
        </div>

        <br>
        <hr><br>


        <center>
            <button class="btn btn-success login-form" style="margin-bottom: 30px" type="submit">continue</button>
        </center><br>
{{--        <a class="btn btn-outline-warning" href="{{route('startupForm')}} ">head to startup Form</a>--}}
{{--        <br>--}}
{{--        <a class="btn btn-outline-warning" href="{{route('signupPage') }}">head to sign up</a>--}}
    </div>
</form>

@endsection
