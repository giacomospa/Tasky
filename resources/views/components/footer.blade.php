<footer class="text-light py-4 mt-5 py-5">
    <div class="container footer-position">
        <div class="row justify-content-evenly">
            <!-- Logo e descrizione -->
            <div class="col-12 col-md-4 mb-4 mb-md-0">
                <h5 class="text-color mb-3">Tasky</h5>
                <p class="mt-4 small">Metti in vetrina il tuo talento tech 🚀</p>
                <div class="mt-4">
                    <a href="#" class="text-light fs-3 p-1 me-3"><i class="bi bi-facebook bi-hover"></i></a>
                    <a href="#" class="text-light me-3 fs-3 p-1"><i class="bi bi-twitter-x bi-hover"></i></a>
                    <a href="#" class="text-light me-3 fs-3 p-1"><i class="bi bi-instagram bi-hover"></i></a>
                    <a href="#" class="text-light me-3 fs-3 p-1"><i class="bi bi-linkedin bi-hover"></i></a>
                </div>
            </div>
            
            <!-- Link rapidi -->
            <div class="col-6 col-md-2 mb-3">
                <h6 class="mb-3">Naviga</h6>
                <ul class="nav flex-column">
                    <li class="nav-item mb-2"><a href="{{route("homepage")}}" class="nav-link p-0 text-light">Home</a></li>
                    <li class="nav-item mb-2"><a href="{{route("homepage")}}" class="nav-link p-0 text-light">Chi siamo</a></li>
                    <li class="nav-item mb-2"><a href="{{route("index")}}" class="nav-link p-0 text-light">Servizi</a></li>
                    <li class="nav-item mb-2"><a href="{{route("register")}}" class="nav-link p-0 text-light">Crea il tuo Account</a></li>
                    <li class="nav-item mb-2"><a href="{{route("index.review")}}" class="nav-link p-0 text-light">Recensioni</a></li>
                </ul>
            </div>
            
            <!-- Informazioni -->
            {{-- <div class="col-6 col-md-2 mb-3">
                <h6 class="mb-3">Informazioni</h6>
                <ul class="nav flex-column">
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-light">FAQ</a></li>
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-light">Privacy</a></li>
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-light">Termini</a></li>
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-light">Cookie</a></li>
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-light">Contatti</a></li>
                </ul>
            </div> --}}
            
            <!-- Newsletter -->
            <div class="col-12 col-md-4 mb-3">
                <h6 class="mb-3">Per saperne di più</h6>
                <p class="small">Per maggiori informazioni sulla vendita o acquisto dei servizi ci contatti pure mediante il nostro form</p>
                <div class="d-flex flex-column flex-sm-row w-100 gap-2">
                    <a href="{{ route('contacts') }}" class="btn btn-outline-light">Contattaci</a>
                </div>
            </div>
            
            <!-- Copyright -->
            <div class="d-flex flex-column flex-sm-row justify-content-between pt-4 mt-4 border-top border-secondary border-color">
                <p class="small ms-auto">&copy; 2025 Tasky. Tutti i diritti riservati.</p>
            </div>
        </div>
    </footer>
    