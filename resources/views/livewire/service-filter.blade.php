<div class="card p-3 shadow">
    {{-- Card Filtri servizi --}}
    <div class="card-body">
        <h5 class="card-title">Filtra Prodotti</h5>
        <div class="mb-3">
            <label for="searchName" class="form-label">Nome</label>
            <input type="text" class="form-control" wire:model="search" placeholder="Cerca per nome">
        </div>
        <div class="row">
            <div class="col-md-6 mb-3">
                <label for="minPrice" class="form-label">Prezzo Min</label>
                <input type="number" class="form-control" wire:model="minPrice" placeholder="€">
            </div>
            <div class="col-md-6 mb-3">
                <label for="maxPrice" class="form-label">Prezzo Max</label>
                <input type="number" class="form-control" wire:model="maxPrice" placeholder="€">
            </div>
        </div>
    </div>
    {{-- Servizi filtrati --}}
    <div class="container mt-5">
        <div class="row g-4 justify-content-center">
            @foreach ($services as $service)
            <div class="col-12 col-md-6 col-lg-4 d-flex justify-content-center" data-aos="fade-up"
            data-aos-anchor-placement="center-bottom" data-aos-duration="1000">
            <div class="card border-0" style="width: 18rem;">
                <img src="{{ $service->img ? Storage::url($service->img) : asset('images/service.jpg') }}" class="card-img-top" alt="Immagine Servizio" style="height: 200px; object-fit: cover;">
                <div class="card-body">
                    <h5 class="card-title fw-bold">{{$service->name}}</h5>
                    <p class="card-text text-truncate">{{$service->description}}</p>
                    <a href="{{route("show.service",compact("service"))}}" class="btn btn-custom btn-sm">Scopri di più</a>
                </div>
            </div>
        </div>
        @endforeach
        {{-- Controllo sui filtri --}}
        @if($services->isEmpty())
        <div class="col-12 text-center">
            <p class="text-muted">Nessun servizio trovato con i filtri selezionati.</p>
        </div>
        @endif
    </div>
</div>
