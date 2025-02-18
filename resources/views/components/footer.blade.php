<footer class="text-light py-4 mt-5">
    <div class="container footer-position">
        <div class="row">
            <!-- Logo e descrizione -->
            <div class="col-12 col-md-4 mb-4 mb-md-0">
                <h5 class="title-custom mb-3">Tasky</h5>
                <p class="small">Connetti Aziende e Freelance tech con un click 🚀</p>
                <div class="mt-3">
                    <a href="#" class="text-light me-3"><i class="bi bi-linkedin"></i></a>
                    <a href="#" class="text-light me-3"><i class="bi bi-twitter-x"></i></a>
                    <a href="#" class="text-light me-3"><i class="bi bi-instagram"></i></a>
                    <a href="#" class="text-light"><i class="bi bi-github"></i></a>
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
            <div class="col-6 col-md-2 mb-3">
                <h6 class="mb-3">Informazioni</h6>
                <ul class="nav flex-column">
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-light">FAQ</a></li>
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-light">Privacy</a></li>
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-light">Termini</a></li>
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-light">Cookie</a></li>
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-light">Contatti</a></li>
                </ul>
            </div>
            
            <!-- Newsletter -->
            <div class="col-12 col-md-4 mb-3">
                <h6 class="mb-3">Resta aggiornato</h6>
                <p class="small">Iscriviti alla nostra newsletter per ricevere aggiornamenti e offerte speciali.</p>
                <div class="d-flex flex-column flex-sm-row w-100 gap-2">
                    <a href="{{ route('contacts') }}" class="btn btn-outline-light">Iscriviti</a>
                </div>
            </div>
            
            <!-- Copyright -->
            <div class="d-flex flex-column flex-sm-row justify-content-between pt-4 mt-4 border-top border-secondary border-color">
                <p class="small ms-auto">&copy; 2025 Tasky. Tutti i diritti riservati.</p>
            </div>
        </div>
    </footer>
    