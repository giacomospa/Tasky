<nav class="navbar navbar-expand-lg">
    <div class="container">
        <a class="navbar-brand text-tasky" href="{{route("homepage")}}">TASKY</a>
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
                @guest
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Login</a>
                    <ul class="dropdown-menu dropdown-custom">
                        <li><a class="dropdown-item text-white" href="{{route("register")}}">Registrati</a></li>
                        <li><a class="dropdown-item text-white" href="{{route("login")}}">Accedi</a></li>
                    </ul>
                </li>
                @else 
                <li class="nav-item">
                    <a class="nav-link" href="{{route("create.service")}}">Aggiungi</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Ciao {{Auth::user()->name}}</a>
                    <ul class="dropdown-menu dropdown-custom">
                        <li><a class="dropdown-item text-white align-items-center text-end" href="{{route("user.profile")}}">Profilo</a></li>
                        <form action="{{route("logout")}}" method="POST" class="d-flex justify-content-end">
                            @csrf
                            <button type="submit" class="btn btn-danger mt-2">logout</button>
                        </form>
                    </ul>
                </li>
                @endguest
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="{{route("index.review")}}">Recensioni</a>
                </li>
            </ul>
        </div>
    </div>
</nav>