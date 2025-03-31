<x-layout>
    @push('title')
    Home
    @endpush
    <section class="container-fluid" id="hero">
        <div class="row">
            <div class="col d-flex flex-column align-items-center justify-content-center hero-content mt-5">
                <h1 class="display-4 text-center" data-aos="zoom-in" data-aos-duration="1000">Benvenuto su <span class="title-custom">Tasky</span></h1>
                <p class="lead text-center fst-italic" data-aos="zoom-out" data-aos-duration="1000">Metti in vetrina il tuo talento tech</p>
                <div class="scroll-down" id="arrow">
                    <i class="bi bi-arrow-down-circle "></i>
                </div>
            </div>
            <div id="particles-js" class="w-100 vh-100"></div>
        </div>
    </section>
    {{-- CHI SIAMO --}}
    <section class="container-fluid p-0" id="aboutUs">
        <div class="row about-us-bg m-0">
            <!-- Carousel con contenuto semplificato -->
            <div id="textCarousel" class="carousel slide" data-bs-ride="carousel" data-bs-interval="4000" data-bs-pause="false">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="carousel-text text-center px-4">
                            <i class="bi bi-laptop-fill fs-1 mb-3 d-block"></i>
                            <h2 class="title-custom3 display-5 fw-bold">Il marketplace dei talenti tech</h2>
                            <p class="py-3 mx-auto" style="max-width: 700px;">La piattaforma semplice e diretta che permette ai freelancer tech di vendere i propri servizi professionali.</p>
                            <a href="{{route('index')}}" class="btn btn-outline-light mt-2">Esplora i servizi</a>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="carousel-text text-center px-4">
                            <i class="bi bi-person-workspace fs-1 mb-3 d-block"></i>
                            <h2 class="title-custom3 display-5 fw-bold">Per freelancer tech</h2>
                            <p class="py-3 mx-auto" style="max-width: 700px;">Sei uno sviluppatore, designer o esperto tech? Tasky ti offre uno spazio per proporre i tuoi servizi e raggiungere nuovi clienti.</p>
                            <a href="{{route('create.service')}}" class="btn btn-outline-light mt-2">Inizia a vendere</a>
                        </div>
                    </div>
                    @guest
                    <div class="carousel-item">
                        <div class="carousel-text text-center px-4">
                            <i class="bi bi-rocket-takeoff-fill fs-1 mb-3 d-block"></i>
                            <h2 class="title-custom3 display-5 fw-bold">Semplice ed efficace</h2>
                            <p class="py-3 mx-auto" style="max-width: 700px;">Crea il tuo profilo, pubblica i tuoi servizi tech e inizia subito a ricevere richieste. Niente complicazioni, solo risultati.</p>
                            <a href="{{route('register')}}" class="btn btn-outline-light mt-2">Registrati subito</a>
                        </div>
                    </div>
                    @endguest
                </div>
                
                <!-- Controlli carousel -->
                <button class="carousel-control-prev" type="button" data-bs-target="#textCarousel" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Precedente</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#textCarousel" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Successivo</span>
                </button>
                
                <!-- Indicatori -->
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#textCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#textCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#textCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div>
            </div>
        </div>
    </section>
    
</x-layout>

