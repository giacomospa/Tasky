<x-layout>
    @push('title')
    {{$service->name}}
    @endpush
    <div class="container-fluid">
        <div class="ms-5">
            <a href="{{route('index')}}" <i class="bi bi-arrow-left-circle fs-2 mb-1 text-color"></i></a>
        </div>
        <div class="row">
            <div class="col-12 d-flex justify-content-center" data-aos="flip-up" data-aos-duration="1000">
                <h1>Scheda dettagli</h1>
            </div>
        </div>
    </div>
    <div class="container py-5 mt-4">
        <div class="row g-0 justify-content-evenly" data-aos="zoom-in" data-aos-duration="1000">
            <div class="col-5">
                <img src="{{ $service->img ? Storage::url($service->img) : asset('images/service.jpg') }}" class="w-100 h-100 object-fit-cover" alt="Immagine servizio">
            </div>
            <div class="col-4 p-4">
                <h5 class="card-title fw-bold">{{$service->name}}</h5>
                <p class="card-text mt-4">{{$service->description}}</p>
                <h6 class="card-title fw-semibold mt-4">€ {{$service->price}}</h6>
                <h6 class="card-text mt-4">Producer: <span class="fw-bold"> {{$service->producer}}</span></h6>
                @if($service->user_id !== Auth::user()->id)
                <a href="#" class="btn btn-outline-light mt-5 btn-sm">Richiedi</a>
                <a href="{{route("create.review",['service_id' => $service->id])}}" class="btn btn-outline-light btn-sm mt-5 ms-3">Valuta</a>
                @endif
                @if($service->user_id === Auth::user()->id)
                <a href="{{route("edit.service",compact("service"))}}" class="btn btn-outline-light btn-sm mt-5">Modifica</a>
                @endif
                @if($service->user_id === Auth::user()->id)
                
                <!-- Bottone per aprire la modale -->
                <button type="button" class="btn btn-outline-light btn-sm mt-5 ms-2" data-bs-toggle="modal" data-bs-target="#deleteModal" data-service-id="{{ $service->id }}">
                    Elimina
                </button>
                @endif
            </div>
        </div>
    </div>
    <div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true" tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-content text-black">
                <div class="modal-header">
                    <h5 class="modal-title">Conferma Eliminazione</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p>Sei sicuro di voler eliminare questo servizio?</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-info btn-sm" data-bs-dismiss="modal">Annulla</button>
                    <form method="POST" action="{{ route('delete.service', $service->id) }}">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm">Elimina</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-layout> 




