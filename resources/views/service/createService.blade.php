<x-layout>
    {{-- RICORDA CHE è DIVERSO DAL CREATE SERVICE COMPONENT, è QUI SOLO PER RISERVA --}}
    <div class="container-fluid" data-aos="flip-down" data-aos-duration="1300">
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
</x-layout>



