<nav class="navbar navbar-expand-lg sticky-top navbar-light">

    <a class="navbar-brand" href="{\{url('/')}}">
        <img src="{{asset('/img/logo.png')}}" alt="logo-pic" />
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03"
        aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>


    <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
        <ul class="navbar-nav mx-auto mt-2 mt-lg-0">
            <li class="nav-item active mx-2">
                <a class="nav-link" href="{{url('/')}}">Home</a>
            </li>
            <li class="nav-item mx-2">

                <a class="nav-link" href="{{url('newsletter')}}">News letter</a>
            </li>
            <li class="nav-item mx-2">
                <a class="nav-link" href="{{url('/contact')}}">Contact us</a>
            </li>
            <li class="nav-item mx-2">
                <a class="nav-link" href="{{url('/upcoming')}}">Upcoming</a>
            </li>

            {{-- <li class="nav-item mx-2">
                <a class="nav-link" href="{{url('/login')}}">Login</a>
            </li> --}}
        </ul>

    </div>

</nav>
