<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="{{ URL::to('src/css/main.css') }}">
    <title>startup form</title>
    <style>
        .error {
            width: 50%;
        }

        textarea {
            resize: none;
        }
    </style>
</head>

<body>
    @include('includes.message-block')
    <div class="container block-startup"></div>
    <div class="container">
        <p>your name:</p>
        <h2>{{ $user->first_name }}</h2>
        <br>
        <p>your email:</p>
        <h2>{{ $user->email }}</h2>

    </div>
    <br>
    <form action="{{route('postStartupForm')}} " method="POST">
        @csrf
        <div class="container">
            <div class="form-group">
                <label for="phone_number">Your phone number</label>
                <input
                    class="form-control rounded-pill form-control-lg {{ $errors->has('phone_number') ? ' is-invalid' : '' }}"
                    type="number" name="phone_number" id="phone_number" value="{{ Request::old('phone_number') }}">
                @if ($errors->has('phone_number'))
                <br>
                <div class="error">
                    {{$errors->first('phone_number')}}
                </div>
                @endif
            </div>
            <br>
            <div class="form-group">
                <label for="location_address">In which region are you established?</label>
                <input
                    class="form-control rounded-pill form-control-lg {{ $errors->has('location_address') ? ' is-invalid' : '' }}"
                    type="text" name="location_address" id="location_address"
                    value="{{ Request::old('location_address') }}">
                @if ($errors->has('location_address'))
                <br>
                <div class="error">
                    {{$errors->first('location_address')}}
                </div>
                @endif
            </div>
            <br>
            <div class="form-group">
                <label for="members_number">Your collegues number (optional)</label>
                <input
                    class="form-control rounded-pill form-control-lg {{ $errors->has('members_number') ? ' is-invalid' : '' }}"
                    type="number" name="members_number" id="members_number"
                    value="{{ Request::old('members_number') }}">

            </div>
            <br>
            <div class="form-group">
                <label for="startup_idea">What's the name of your startup</label>
                <input
                    class="form-control rounded-pill form-control-lg {{ $errors->has('startup_idea') ? ' is-invalid' : '' }}"
                    type="text" name="startup_idea" id="startup_idea" value="{{ Request::old('startup_idea') }}">
                @if ($errors->has('startup_idea'))
                <br>
                <div class="error">
                    {{$errors->first('startup_idea')}}
                </div>
                @endif
            </div>
            <div class="form-group">
                <br>
                please explain your startup idea (500 letters as maximum) <br>
                <textarea name="startup_description" id="" cols="60" rows="5" placeholder="tell us everything here"
                    class="form-control {{ $errors->has('startup_description') ? ' is-invalid' : '' }}"></textarea>
                @if ($errors->has('startup_description'))
                <br>
                <div class=" error">
                    {{$errors->first('startup_description')}}
                </div>
                @endif
            </div>
            <br>
            <div class="form-group">
                <br>
                describe the problem you are addressing (500 letters as maximum) <br>
                <textarea name="startup_problem" id="" cols="60" rows="5" placeholder="tell us everything here"
                    class="form-control {{ $errors->has('startup_problem') ? ' is-invalid' : '' }}"></textarea>
                @if ($errors->has('startup_problem'))
                <br>
                <div class=" error">
                    {{$errors->first('startup_problem')}}
                </div>
                @endif
            </div>
            <br>
            <div class="login-form">
                <center>
                    <button type="submit" class="btn mt-5 rounded-pill btn-lg btn-custom btn-block text-uppercase"
                        style="width: 50%">send</button>
                    <a href="{{route('startup_type')}}">Back to choose the type</a>
                    <a href="{{route('dashboard')}} "
                        class="btn mt-5 rounded-pill btn-lg btn-custom btn-block text-uppercase"
                        style="color: blanchedalmond">send</a>
                </center>
            </div>
            <input type="hidden" name="_token" value="{{ Session::token() }}"><br>
        </div>
    </form>
</body>

</html>