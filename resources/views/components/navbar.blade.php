<nav class="navbar navbar-expand-lg mb-5">
    <div class="container">
        <a class="navbar-brand text-tasky" href="{{route("homepage")}}" id="logo">
            {{-- LOGO --}}
            <x-logo/>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse p-2" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto ">
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="{{route("homepage")}}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route("index")}}">Esplora</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="{{route("index.review")}}">Recensioni</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="{{route("contacts")}}">Newsletter</a>
                </li>
                @guest
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Login</a>
                    <ul class="dropdown-menu dropdown-custom">
                        <li><a class="dropdown-item text-white" href="{{route("login")}}">Accedi</a></li>
                        <li><a class="dropdown-item text-white" href="{{route("register")}}">Registrati</a></li>
                    </ul>
                </li>
                @else 
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Ciao {{Auth::user()->name}}</a>
                    <ul class="dropdown-menu dropdown-custom ">
                        <li class="w-100"><a class="dropdown-item dropdown-item-profile btn btn-profile btn-sm m-1 text-center" href="{{route("user.profile")}}">Profilo</a></li>
                        <form action="{{route("logout")}}" method="POST" >
                            @csrf
                            <button type="submit" class="btn btn-logout btn-sm p-1 m-1 w-100">Logout</button>
                        </form>
                    </ul>
                </li>
                @endguest
            </ul>
        </div>
    </div>
</nav>