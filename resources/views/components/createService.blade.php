    @auth
    <div class="container-fluid mt-4">
        <div class="row">
            <div class="col g-5 d-flex flex-column align-items-center">
                <h1 data-aos="fade-right" data-aos-duration="1200">Aggiungi il tuo Servizio</h1>
                <div data-aos="fade-left" data-aos-duration="1000" class="border-custom"></div>
            </div>
        </div>
        <div class="row justify-content-center mt-5">
            <div class="col-12 col-md-6" data-aos="fade-up" data-aos-duration="1200">
                <form method="POST" action="{{route("service.store")}}" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label class="form-label"></label>
                        <input type="text" class="form-control" name="name" placeholder="Inserisci il nome del servizio">
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
                        <label for="price" class="form-label"></label>
                        <input type="number" class="form-control" id="price" name="price" placeholder="Inserisci il prezzo" step="0.01" min="0" required>
                    </div>
                    
                    <button type="submit" class="btn btn-custom mt-3">Aggiungi</button>
                </form>
            </div>
        </div>
    </div>
    @else 
    <div class="container mt-5 py-3">
        <div class="row mt-2 freelance-row" data-aos="fade-right" data-aos-duration="700">
            <div class="col text-center">
                <h1>Sei un <span class="title-custom freelance-span">Freelance?</span></h1>
            </div>
        </div>
        <div class="row mt-4" data-aos="zoom-in" data-aos-duration="700">
            <div class="col text-center fst-italic fs-5">
                <h5 class="lead">
                    <a class="text-decoration-none home-link" href="{{route("register")}}">Crea qui il tuo account </a>
                </h5>
            </div>
        </div>
        <div class="row mt-3 service-row" data-aos="fade-left" data-aos-duration="700">
            <div class="col-12 text-center">
                <h1>e aggiungi il tuo <span class="title-custom2 service-span">Servizio</span></h1>
            </div>
        </div>
    </div>
    @endauth