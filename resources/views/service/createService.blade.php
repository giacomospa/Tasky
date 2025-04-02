<x-layout>
    @push('title')
    Vendi
    @endpush
    @auth
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 d-flex justify-content-center text-center" data-aos="fade-right" data-aos-duration="1000">
                <h1>Inizia subito a  <span class="title-custom">Vendere</span></h1>
            </div>
            <div class="col-12 d-flex justify-content-center" data-aos="fade-left" data-aos-duration="1000">
                <h4 class="lead fst-italic">Aggiungi qui il tuo servizio</h4>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-12 justify-content-center d-flex" data-aos="fade-up" data-aos-duration="1000">
                <div class="card card-auth shadow-lg border-0 rounded-4" >
                    <div class="card-body card-body-auth">
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
                            
                            <button type="submit" class="btn btn-outline-light mt-3">Aggiungi</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endauth
</x-layout>



