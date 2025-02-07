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
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Dropdown</a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="{{route("registrazione")}}">Registrati</a></li>
                        <li><a class="dropdown-item" href="#">Accedi</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="#">Logout</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>