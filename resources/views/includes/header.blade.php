<nav class="navbar navbar-expand-lg navbar-dark bg-dark " style="margin-bottom: 0" id="app1">

    <!-- Brand and toggle get grouped for better mobile display -->
    <a class="navbar-brand active table-bordered rounded-pill {{ Request::segment(1) === '' ? 'active' : null }}"
        href="{{route('home') }}">Cube <span class="font-weight-bold" style="color: tomato">Lab</span></a>

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText"
        aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>


    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse " id="navbarText">
        <ul class=" navbar-nav">
            <li class="{{ Request::segment(1) === 'sign_in_page' ? 'active' : null }}"><a
                    class="nav-link text-uppercase" href="{{route('signinPage') }}">sign in</a></li>
            {{-- <li class="{{ Request::segment(1) === 'signupPage' ? 'active' : null }}"><a class="nav-link text-uppercase"
                    href="{{route('signupPage') }}">sign up</a></li> --}}
            <li class="{{ Request::segment(1) === 'startup_space' ? 'active' : null }}"><a
                    class="nav-link text-uppercase" href="{{route('startup_space') }}">startup space</a></li>
            <li class="{{ Request::segment(1) === 'properties' ? 'active' : null }}"><a class="nav-link text-uppercase"
                    href="{{route('properties') }}">properties</a></li>
            <li class="{{ Request::segment(1) === 'startup_explanation' ? 'active apply' : null }}"><a
                    class="nav-link text-uppercase btn btn-outline-danger"
                    style="padding-left: 10px;padding-right: 10px" href="{{route("startup_explanation")}} ">apply</a>
            </li>
        </ul>

    </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>