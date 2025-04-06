<nav class="navbar navbar-expand-lg mb-5 px-md-3 border-0">
    <div class="container-fluid">
        {{-- LOGO --}}
        <a class="navbar-brand text-tasky m-0 p-0" href="{{route("homepage")}}" id="logo">
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
                    <a class="nav-link" href="{{route("create.service")}}">Vendi</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="{{route("index.review")}}">Recensioni</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="{{route("contacts")}}">Contattaci</a>
                </li>
                {{-- <div class="d-flex flex-column align-items-center justify-content-center">
                    <i class="bi bi-person-circle"></i>
                </div>  --}}
                @guest
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><span class="bi bi-person-circle"></span> My Tasky</a>
                    <ul class="dropdown-menu dropdown-custom">
                        <li><a class="dropdown-item text-white" href="{{route("login")}}">Accedi</a></li>
                        <li><a class="dropdown-item text-white" href="{{route("register")}}">Registrati</a></li>
                    </ul>
                </li>
                @else 
                <li class="nav-item dropdown pe-3">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><span class="bi bi-person-circle"></span> {{Auth::user()->name}}</a>
                    <ul class="dropdown-menu dropdown-custom">
                        <li class="px-2 p-1">
                            <a class="btn btn-profile btn-sm w-100 text-center" href="{{route("user.profile")}}">My Tasky</a>
                        </li>
                        <li class="px-2 p-1">
                            <form action="{{route("logout")}}" method="POST">
                                @csrf
                                <button type="submit" class="btn btn-logout btn-sm w-100">Logout</button>
                            </form>
                        </li>
                    </ul>
                </li>
                @endguest
            </ul>
        </div>
    </div>
</nav>