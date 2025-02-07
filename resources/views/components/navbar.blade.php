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
                    <a class="nav-link" href="#">Link</a>
                </li>
                @guest
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Login</a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="{{route("register")}}">Registrati</a></li>
                        <li><a class="dropdown-item" href="{{route("login")}}">Accedi</a></li>
                    </ul>
                </li>
                @else 
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Ciao {{Auth::user()->name}}</a>
                    <ul class="dropdown-menu dropdown-logout">
                        <li><a class="dropdown-item text-white" href="">Profilo</a></li>
                        <form action="{{route("logout")}}" method="POST">
                            @csrf
                            <button type="submit" class="btn btn-danger">logout</button>
                        </form>
                    </ul>
                </li>
                @endguest
            </ul>
        </div>
    </div>
</nav>