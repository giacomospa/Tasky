<x-layout>
    @push('title')
    Home
    @endpush
    <section class="container-fluid" id="hero">
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
    <section class="container-fluid" id="aboutUs">
        {{-- <div class="row align-items-center">
            <div class="col-12 col-md-6 d-flex flex-column" data-aos="zoom-in" data-aos-duration="900">
                <h1 class="fw-bold mb-5 title-custom">Chi siamo</h1>
                <p>Benvenuti su Tasky, la piattaforma che connette aziende e freelance del settore tech con chi cerca servizi innovativi e professionali.</p>
                <p>La nostra missione è offrire uno spazio digitale intuitivo e accessibile, dove professionisti e imprese possano presentare i propri servizi, raggiungere nuovi clienti e crescere nel mercato tecnologico.</p>
                <p>Che tu sia un'azienda in cerca di talenti o un freelance pronto a mettere in mostra le tue competenze, Tasky è il posto giusto per espandere la tua rete e trovare nuove opportunità di business.</p>
            </div>
            <div class="col-12 col-md-6 justify-content-center d-flex" data-aos="zoom-out" data-aos-duration="900">
                <img class="team-img shadow-custom img-fluid w-75" src="/media/team.jpeg" alt="Team Work">
            </div>
        </div> --}}
        <div class="row about-us-bg"></div>
    </section>
    
    {{-- AGGIUNGI SERVIZIO --}}
    @auth
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 d-flex justify-content-center g-5">
                <h1>Aggiungi il tuo Servizio</h1>
            </div>
        </div>
        <div class="row justify-content-center mt-5">
            <div class="col-6">
                <form method="POST" action="{{route("service.store")}}" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label class="form-label">Nome del Servizio</label>
                        <input type="text" class="form-control" name="name" placeholder="Inserisci il nome">
                        @error('name')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-floating mb-3">
                        <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px" name="description"></textarea>
                        <label for="floatingTextarea2">Descrizione</label>
                        @error('description')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="input-group mb-3">
                        <input type="file" class="form-control" id="inputGroupFile02" name="img">
                        <label class="input-group-text" for="inputGroupFile02"></label>
                    </div>
                    <div class="mb-3">
                        <label for="price" class="form-label">Prezzo</label>
                        <input type="number" class="form-control" id="price" name="price" placeholder="Inserisci il prezzo" step="0.01" min="0" required>
                    </div>
                    
                    <button type="submit" class="btn btn-custom mt-3">Aggiungi</button>
                </form>
            </div>
        </div>
    </div>
    @endauth
</x-layout>

