<x-layout>
    @push('title')
    Home
    @endpush
    <section class="container" id="hero">
        <div class="row">
            <div class="col d-flex flex-column align-items-center justify-content-center hero-content mt-5">
                <h1 class="display-3 text-center" data-aos="zoom-in" data-aos-duration="1200">Benvenuto su <span class="title-custom">Tasky</span></h1>
                <p class="lead text-center" data-aos="zoom-out" data-aos-duration="1200">Connetti Aziende e Freelance tech con un click 🚀</p>
                <div class="scroll-down" id="arrow">
                    <i class="bi bi-arrow-down-circle display-6"></i>
                </div>
            </div>
        </div>
        <div id="particles-js" class="w-100 vh-100 inset-0 mb-5 "></div>
    </section>
    {{-- CHI SIAMO --}}
    <section class="container py-5 " id="aboutUs">
        <div class="row align-items-center">
            <div class="col-12 col-md-6 d-flex flex-column" data-aos="zoom-in" data-aos-duration="900">
                <h1 class="fw-bold mb-5 title-custom">Chi siamo</h1>
                <p>Benvenuti su Tasky, la piattaforma che connette aziende e freelance del settore tech con chi cerca servizi innovativi e professionali.</p>
                <p>La nostra missione è offrire uno spazio digitale intuitivo e accessibile, dove professionisti e imprese possano presentare i propri servizi, raggiungere nuovi clienti e crescere nel mercato tecnologico.</p>
                <p>Che tu sia un'azienda in cerca di talenti o un freelance pronto a mettere in mostra le tue competenze, Tasky è il posto giusto per espandere la tua rete e trovare nuove opportunità di business.</p>
            </div>
            <div class="col-12 col-md-6 justify-content-center d-flex" data-aos="zoom-out" data-aos-duration="900">
                <img class="team-img shadow-custom img-fluid w-75" src="/media/team.jpeg" alt="Team Work">
            </div>
        </div>
    </section>
</x-layout>

