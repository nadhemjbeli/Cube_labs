<!DOCTYPE html>
<html>

<head>
    <title>@yield('title')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    {{-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"
        integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous"> --}}
    <link rel="icon" href="img/ework.jpg" type="image/gif" sizes="16x16">
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

<body style="width: auto;
            font-family: Poppins, sans-serif;
            font-size: 16px;
            background: #eee;
            color: #666;">


    @include('includes.header_auth')

    @yield('content_auth')


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>





</body>

</html>
