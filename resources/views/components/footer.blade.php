<footer class="text-light py-4 mt-5 py-5">
    <div class="container-fluid footer-position foot-shadow">
        <div class="row justify-content-evenly">
            <!-- Logo e social -->
            <div class="col-12 col-md-4 mb-4 mb-md-0">
                <h5 class="text-color mb-3 text-center text-md-start mt-3 mt-md-0">Tasky</h5>
                <p class="mt-4 small text-center text-md-start">Metti in vetrina il tuo talento tech 🚀</p>
                <div class="mt-4 text-center text-md-start">
                    <a href="#" class="text-light fs-3 p-1 me-3"><i class="bi bi-facebook bi-hover"></i></a>
                    <a href="#" class="text-light me-3 fs-3 p-1"><i class="bi bi-twitter-x bi-hover"></i></a>
                    <a href="#" class="text-light me-3 fs-3 p-1"><i class="bi bi-instagram bi-hover"></i></a>
                    <a href="#" class="text-light me-3 fs-3 p-1"><i class="bi bi-linkedin bi-hover"></i></a>
                </div>
            </div>
            <!-- Link rapidi -->
            <div class="col-6 text-center text-md-start col-md-2 mb-3 mt-3 mt-md-0">
                <h6 class="mb-3 fw-bolder">Naviga</h6>
                <ul class="nav flex-column small">
                    <li class="nav-item mb-2"><a href="{{route("homepage")}}" class="nav-link p-0 foot-item">Home</a></li>
                    <li class="nav-item mb-2"><a href="{{route("homepage")}}" class="nav-link p-0 foot-item">Chi siamo</a></li>
                    <li class="nav-item mb-2"><a href="{{route("index")}}" class="nav-link p-0 foot-item">Servizi</a></li>
                    <li class="nav-item mb-2"><a href="{{route("index.review")}}" class="nav-link p-0 foot-item">Recensioni</a></li>
                    @guest<li class="nav-item mb-2"><a href="{{route("register")}}" class="nav-link p-0 foot-item">Crea il tuo Account</a></li>@endguest
                </ul>
            </div>
            <div class="col-6 text-center text-md-start col-md-4 mb-3 mt-3 mt-md-0">
                <h6 class="mb-3 fw-bolder">Per saperne di più</h6>
                <p class="small">Per maggiori informazioni sulla vendita o acquisto dei servizi</p>
                <div class="d-flex flex-column flex-sm-row gap-2">
                    <a href="{{ route('contacts') }}" class="btn btn-outline-light ">Contattaci</a>
                </div>
            </div>
            <!-- Copyright -->
            <div class="d-flex flex-column flex-sm-row justify-content-between pt-4 mt-4 border-top border-secondary border-color-foot ">
                <p class="ms-auto copyright" >&copy; 2025 Tasky. Tutti i diritti riservati.</p>
            </div>
        </div>
    </div>
</footer>
