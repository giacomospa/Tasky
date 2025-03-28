<x-layout>
    @push('title')
    Recensioni
    @endpush
    <div class="container">
        <div class="row">
            <div class="col-12 d-flex justify-content-center " data-aos="fade-right" data-aos-duration="1000">
                <h1>Le nostre <span class="title-custom">Recensioni</span></h1>
            </div>
            <div class="col-12 d-flex justify-content-center " data-aos="fade-left" data-aos-duration="1000">
                <h4 class="lead fst-italic">Quello che pensano i nostri clienti</h4>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 d-flex justify-content-center ">
                @if(session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
                @endif
            </div>
        </div>
    </div>
    <div class="container mt-5 py-4">
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
        </div>
        
        <!-- Paginatore Bootstrap -->
        {{-- <div class="d-flex justify-content-center mt-5">
            {{ $reviews->links('pagination::bootstrap-5') }}
        </div> --}}
    </div>
</x-layout>
