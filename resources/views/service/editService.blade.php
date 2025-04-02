<x-layout>
    @push('title')
    Modifica il Servizio
    @endpush
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 d-flex justify-content-center" data-aos="flip-down" data-aos-duration="1000">
                <h1>Modifica il Servizio</h1>
            </div>
        </div>
    </div>
    <div class="container-fluid mt-5">
        <div class="row justify-content-center">
            <div class="col-12 col-md-6" data-aos="zoom-in" data-aos-duration="1000">
                <div class="card card-auth shadow-lg border-0 rounded-4" style="width: 100%;">
                    <div class="card-body card-body-auth">
                        <form method="POST" action="{{route("update.service",$service->id)}}" enctype="multipart/form-data">
                            @csrf
                            @method("PUT")
                            <div class="mb-3">
                                <label class="form-label">Nome del Servizio</label>
                                <input type="text" class="form-control" name="name" placeholder="Inserisci il nome" value="{{$service->name}}">
                                @error('name')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-floating mb-3">
                                <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px" name="description">{{ $service->description }}</textarea>
                                <label for="floatingTextarea2">Descrizione</label>
                                @error('description')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <!-- Immagine Attuale -->
                            <div class="mb-3">
                                <label class="form-label">Immagine Attuale</label>
                                @if ($service->img)
                                <div>
                                    <img src="{{ asset('storage/' . $service->img) }}" alt="Immagine attuale" style="max-width: 200px; max-height:200px">
                                </div>
                                @endif
                            </div>
                            <div class="input-group mb-3">
                                <input type="file" class="form-control" id="inputGroupFile02" name="img">
                                <label class="input-group-text" for="inputGroupFile02"></label>
                            </div>
                            <div class="mb-3">
                                <label for="price" class="form-label">Prezzo</label>
                                <input type="number" class="form-control" id="price" name="price" placeholder="Inserisci il prezzo" step="0.01" min="0" required value="{{$service->price}}">
                            </div>
                            <button type="submit" class="btn btn-outline-light mt-3">Aggiorna</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-layout>



