<x-layout>
    @push('title')
    {{$service->name}}
    @endpush
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 d-flex justify-content-center" data-aos="flip-up" data-aos-duration="1000">
                <h1>{{$service->name}}</h1>
            </div>
        </div>
    </div>
    <div class="container mt-5">
        <div class="row  justify-content-center">
            <div class="col-12 col-md-6 col-lg-4 d-flex justify-content-center" data-aos="zoom-in" data-aos-duration="1000">
                <div class="card border-0 card-service" style="width: 18rem;">
                    <img src="{{ $service->img ? Storage::url($service->img) : asset('images/service.jpg') }}" class="card-img-top" alt="Immagine servizio">
                    <div class="card-body d-flex flex-column align-items-center">
                        <h5 class="card-title fw-bold text-center">{{$service->name}}</h5>
                        <p class="card-text text-center">{{$service->description}}</p>
                        <h6 class="card-title fw-semibold">€ {{$service->price}}</h6>
                        <h6 class="card-text fw-medium">Producer: {{$service->producer}}</h6>
                        @if($service->user_id !== Auth::user()->id)
                        <a href="#" class="btn btn-outline-light mt-3 btn-sm">Richiedi</a>
                        <a href="{{route("create.review",['service_id' => $service->id])}}" class="btn btn-outline-light btn-sm mt-1">Valuta</a>
                        @endif
                        @if($service->user_id === Auth::user()->id)
                        <a href="{{route("edit.service",compact("service"))}}" class="btn btn-outline-light btn-sm mt-3">Modifica</a>
                        @endif
                        @if($service->user_id === Auth::user()->id)

                        <!-- Bottone per aprire la modale -->
                        <button type="button" class="btn btn-outline-light btn-sm mt-2" data-bs-toggle="modal" data-bs-target="#deleteModal" data-service-id="{{ $service->id }}">
                            Elimina
                        </button>
                        @endif
                    </div>
                </div>
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




