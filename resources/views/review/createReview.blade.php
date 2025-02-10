<x-layout>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 d-flex justify-content-center mt-5 ">
                <h1>Aggiungi una Recensione</h1>
            </div>
        </div>
    </div>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-6">
                <form method="POST" action="{{route("store.review")}}">
                    @csrf
                    <div class="mb-3">
                        <label class="form-label">Nome del Servizio</label>
                        <input type="text" class="form-control" name="name" placeholder="Inserisci il nome">
                        @error('name')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-custom mt-3">Invia</button>
                </form>
            </div>
        </div>
    </div>
</x-layout>



