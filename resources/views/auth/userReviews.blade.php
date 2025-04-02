<x-layout>
    @push('title')
    Le mie recensioni 
    @endpush
    <div class="ms-md-5">
        <a href="{{route('user.profile')}}" <i class="bi bi-arrow-left-circle fs-2 mb-1 text-color"></i></a>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 d-flex justify-content-center" data-aos="fade-left" data-aos-duration="1000">
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
                    </div>
                </div>
            </div>
            @endforeach
            {{-- Paginator --}}
            <div class="d-flex justify-content-center mt-5 paginator">
                {{$reviews->links()}}
            </div>
        </div>
    </div>
</x-layout>
