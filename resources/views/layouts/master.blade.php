<!DOCTYPE html>
<html>

<head>
    <title>@yield('title')</title>
    {{-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"
        integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous"> --}}
    <link rel="stylesheet" href="{{ URL::to('src/css/main.css') }}">
    <link rel="stylesheet" href="{{ URL::to('src/css/forms.css') }}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css"
        integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <style>
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

<body style="font-family: Poppins, sans-serif;
font-size: 16px;
background: #eee;
color: #666;">


    @include('includes.header')

    @yield('content')


    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
    {{-- <script src="//code.jquery.com/jquery-1.12.0.min.js"></script>
    <script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"
        integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous">
    </script> --}}
    <script src="{{ URL::to('src/js/app.js') }}"></script>




</body>

</html>