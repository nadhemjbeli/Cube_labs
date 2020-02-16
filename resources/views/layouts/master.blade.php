<!DOCTYPE html>
<html>

<head>
    <title>@yield('title')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    {{-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"
        integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous"> --}}
    <link rel="stylesheet" href="{{ URL::to('src/css/main.css') }}">
    <link rel="stylesheet" href="{{ URL::to('src/css/forms.css') }}">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

    <style>
        body {
            width: auto;
        }

        .login-form .form-control {
            font-size: 15px;
            min-height: 48px;
            font-weight: 500;
        }

        .login-form a {
            text-decoration: none;
            color: #666;
        }

        .login-form a:hover {
            color: #723dbe;
        }

        .forgot-link {
            font-size: 13px;
        }

        .form-control:focus {
            border-color: #723dbe;
            box-shadow: 0 0 0 0.2rem rgba(114, 61, 190, 0.25);
        }

        .btn-custom:focus,
        .btn-custom:hover,
        .btn-custom:active,
        .btn-custom:active:focus {
            background: #54229d;
            border-color: #54229d;
            color: #fff;
        }

        .btn-custom:focus {
            box-shadow: 0 0 0 0.2rem rgba(114, 61, 190, 0.25);
        }

        .btn-custom {
            background: #723dbe;
            border-color: #723dbe;
            color: #fff;
            font-size: 15px;
            font-weight: 600;
            min-height: 48px;
        }
    </style>
</head>

<body style="
width: auto;
font-family: Poppins, sans-serif;
font-size: 16px;
background: #eee;
color: #666;">


    @include('includes.header')

    @yield('content')


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
    {{-- <script src="//code.jquery.com/jquery-1.12.0.min.js"></script>
    <script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"
        integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous">
    </script> --}}
    {{-- <script src="{{ URL::to('src/js/app.js') }}"></script> --}}




</body>

</html>