<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ URL::to('src/css/main.css') }}">
    <style>
        .block-startup {
            margin: 5px;
            padding-top: 15px
        }

        .startup_back {
            background: url("img/questions_back.jpg");
            height: 180px;
        }
    </style>
</head>

<body>


    <center>
        <div class="container block-startup" style=" ">
            <br>
            <h4>
                please choose one and let us get to know more about you and your startup/business
            </h4> <br>
        </div>
    </center><br>
    <div class="startup_back">

    </div>
    <div class="container my-4 px-5">
        <div class="row">
            <div class="row col-md">
                <div class="col-md block-startup d-flex align-items-center flex-column fle access">

                    <p>are you thinking of a startup idea <br>but don't know how to get started ?<br>
                        do you want te get a specific training <br>session by professional trainers?
                    </p>
                    <a href="{{route("startupForm")}} " class="block-startup-btn font-weight-bold">get
                        started</a>
                </div>
            </div>
            <div class="row col-md">
                <div class="col-md block-startup d-flex align-items-center flex-column fle access">

                    <p>are you struggling with an already<br> made business ?<br>
                        do you want your business to get<br> improved with the help of professionals?</p>
                    <a href="{{route("businessForm")}} "
                        class="block-startup-btn font-weight-bold text-decoration-none">Get
                        Started</a>
                </div>

            </div>

        </div>
    </div>


    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
    </script>
</body>

</html>