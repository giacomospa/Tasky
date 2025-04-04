<x-layout>
    @push('title')
    Le mie recensioni 
    @endpush
    <div class="ms-4 mb-5 ms-md-5">
        <a href="{{route('user.profile')}}" <i class="bi bi-arrow-left-circle fs-2 mb-1 text-color"></i></a>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 d-flex justify-content-center text-center" data-aos="fade-left" data-aos-duration="1000">
                <h1>
                    Tutte le mie Recensioni</span>
                </h1>
            </div>
            {{-- Messaggi di successo per recensione creata --}}
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 d-flex justify-content-center mt-3">
                        @if(session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                        @endif
                    </div>
                </div>
            </div>
            {{-- AVVISI ERR/SUCC --}}
            <div class="col-12 d-flex justify-content-center">
                {{-- Messaggio di Successo --}}
                @if (session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
                @endif
                {{-- Messaggio di Errore --}}
                @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif
            </div>
        </div>
    </div>
    <div class="container mt-3 ">
        <div class="row g-4 justify-content-center">
            @if($reviews->count()>0) 
            @foreach ($reviews as $review)
            <div class="col-12 col-md-6 col-lg-4 d-flex justify-content-center" data-aos="fade-up"  data-aos-duration="1000">
                <div class="card border-0 card-review" style="width: 18rem;">
                    @if($review->service)
                    <img src="{{ asset('storage/' . $review->service->img) }}" alt="Immagine del servizio" class="card-img-top border-0" style="height: 200px; object-fit: cover;">
                    @endif
                    <div class="card-body text-center">
                        <h5 class="card-title fw-bold mt-3">
                            ⭐ {{ $review->rating }}/5
                        </h5>
                        <h6 class="card-subtitle mt-3">
                            Recensione di <strong>{{ $review->user->name }}</strong>
                        </h6>
                        <p class="small">
                            Servizio: <strong>{{ $review->service->name }}</strong>
                        </p>
                        <div class="review-content">
                            <p class="card-text">
                                "{{ $review->comment }}"
                            </p>
                            <p class="card-text"><small>{{ $review->created_at->format('d/m/Y') }}</small>
                            </p>
                        </div>
                        @if($review->user_id === Auth::user()->id)
                        <!-- Bottone per aprire la modale -->
                        <button type="button" class="btn btn-outline-light btn-sm mt-5 ms-2" data-bs-toggle="modal" data-bs-target="#deleteModal" data-service-id="{{ $review->id }}">
                            Elimina
                        </button>
                        @endif
                    </div>
                </div>
            </div>
            {{-- Modale conferma eliminazione recensione --}}
            <div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true" tabindex="-1">
                <div class="modal-dialog">
                    <div class="modal-content text-black">
                        <div class="modal-header">
                            <h5 class="modal-title">Conferma Eliminazione</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <p>Sei sicuro di voler eliminare questa recensione?</p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-info btn-sm" data-bs-dismiss="modal">Annulla</button>
                            <form method="POST" action="{{ route('delete.review', $review->id) }}">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm">Elimina</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
            @else
            <div class="col-12 text-center my-5 fst-italic">
                <h4 class="fw-lighter">Non sono presenti recensioni</h4>
            </div>
            @endif
            {{-- Paginator --}}
            <div class="d-flex justify-content-center mt-5 paginator">
                {{$reviews->links()}}
            </div>
        </div>
    </div>
</x-layout>
