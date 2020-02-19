<nav class="navbar navbar-expand-lg navbar-dark bg-dark " style="margin-bottom: 0; padding-right: 5%;padding-right: 5%;
padding-top: 10px;
padding-bottom: 10px;" id="app1">

    <!-- Brand and toggle get grouped for better mobile display -->
    <a class="navbar-brand active table-bordered rounded-pill {{ Request::segment(1) === '' ? 'active' : null }}"
        href="{{route('home') }}">Cube <span class="font-weight-bold" style="color: tomato">Lab</span></a>

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <!-- Left Side Of Navbar -->
        <ul class="navbar-nav mr-auto">

            <li class="{{ Request::segment(1) === 'sign_in_page' ? 'active' : null }}"><a
                    class="nav-link text-uppercase" href="{{route('signinPage') }}">sign in</a></li>
            <li class="{{ Request::segment(1) === 'signupPage' ? 'active' : null }}"><a class="nav-link text-uppercase"
                    href="{{route('signupPage') }}">sign up</a></li>
            <li class="{{ Request::segment(1) === 'startup_space' ? 'active' : null }}"><a
                    class="nav-link text-uppercase" href="{{route('startup_space') }}">startup space</a></li>
            <li class="{{ Request::segment(1) === 'properties' ? 'active' : null }}"><a class="nav-link text-uppercase"
                    href="{{route('properties') }}">properties</a></li>

            </li>
        </ul>
        <ul class=" navbar-nav ml-auto">
            <li class="nav-item {{ Request::segment(1) === 'startup_explanation' ? 'active apply' : '' }}" style="">
                <a class="nav-link text-uppercase btn btn-outline-danger"
                    href="{{route("startup_explanation")}} ">apply</a>
        </ul>


    </div><!-- /.navbar-collapse -->

</nav>