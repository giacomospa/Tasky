<x-layout>
    @push('title')
    Home
    @endpush
    <section class="container-fluid" id="hero">
        <div class="row">
            <div class="col d-flex flex-column align-items-center justify-content-center hero-content mt-5">
                <h1 class="display-4 text-center" data-aos="zoom-in" data-aos-duration="1000">Benvenuto su <span class="title-custom">Tasky</span></h1>
                <p class="lead text-center" data-aos="zoom-out" data-aos-duration="1000">Connetti Aziende e Freelance tech con un click </p>
                <div class="scroll-down" id="arrow">
                    <i class="bi bi-arrow-down-circle "></i>
                </div>
            </div>
        </div>
        <div id="particles-js" class="w-100 vh-100 inset-0 mb-5 "></div>
    </section>
    {{-- CHI SIAMO --}}
    <section class="container-fluid p-0" id="aboutUs">
        <div class="row about-us-bg m-0">
            
            <!-- Carousel di solo testo -->
            <div id="textCarousel" class="carousel slide" data-bs-ride="carousel" data-bs-interval="4000" data-bs-pause="false">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="carousel-text">
                            <h2 class="title-custom2 display-5">Chi siamo</h2>
                            <p class="py-4">Benvenuti su Tasky, la piattaforma che connette aziende e freelance del settore tech con chi cerca servizi innovativi e professionali.</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="carousel-text">
                            <h2 class="title-custom2 display-5">La nostra missione</h2>
                            <p class="py-4">La nostra missione è offrire uno spazio digitale intuitivo e accessibile, dove professionisti e imprese possano presentare i propri servizi e crescere.</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="carousel-text">
                            <h2 class="title-custom2 display-5">Per chi è Tasky</h2>
                            <p class="py-4">Che tu sia un'azienda in cerca di talenti o un freelance pronto a mettere in mostra le tue competenze, Tasky è il posto giusto per espandere la tua rete.</p>
                        </div>
                    </div>
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
                
                <!-- Indicatori opzionali -->
                {{-- <div class="carousel-indicators">
                    <button type="button" data-bs-target="#textCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#textCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#textCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div> --}}
            </div>
        </div>
    </section>
    {{-- AGGIUNGI SERVIZIO --}}
    <x-createService/>
</x-layout>

