<nav class="navbar navbar-expand-lg navbar-dark bg-dark " style="margin-bottom: 0; padding-right: 5%;padding-right: 5%;
padding-top: 10px;
padding-bottom: 10px;" id="app1">

    <!-- Brand and toggle get grouped for better mobile display -->
    <a class="navbar-brand active table-bordered rounded-pill" href="{{route('home') }}" aria-disabled="true">Cube <span
            class="font-weight-bold" style="color: tomato">Lab</span></a>

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <!-- Left Side Of Navbar -->
        <ul class="navbar-nav mr-auto">
            <li class="{{ Request::segment(1) === 'startup_space' ? 'active' : null }}"><a
                    class="nav-link text-uppercase" href="{{route('startup_space') }}">startup space</a></li>
            <li class="{{ Request::segment(1) === 'logout' ? 'active' : null }}"><a class="nav-link text-uppercase"
                    href="{{route('logout') }}">contact us</a></li>
            <li class="{{ Request::segment(1) === 'startupForm' ? 'active' : null }}"><a class="nav-link text-uppercase"
                    href="{{route('startupForm') }}">startup form</a></li>
            <li class="{{ Request::segment(1) === 'businessForm' ? 'active' : null }}"><a
                    class="nav-link text-uppercase" href="{{route('businessForm') }}">business form</a></li>

            </li>
        </ul>
        <ul class=" navbar-nav ml-auto">


            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle text-uppercase" href="#" id="navbarDropdownMenuLink" role="button"
                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    properties
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">

                    <a class="dropdown-item" href="">{{$user->first_name}} </a>

                    <a class="dropdown-item text-uppercase" href="{{route("logout")}} ">logout</a>

                </div>
            </li>
        </ul>


    </div><!-- /.navbar-collapse -->

</nav>