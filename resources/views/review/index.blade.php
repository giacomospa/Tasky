<x-layout>
    <div class="container">
        <div class="row">
            <div class="col-12 d-flex justify-content-center g-5" data-aos="fade-down" data-aos-duration="1300">
                <h1>Recensioni sui nostri Servizi</h1>
            </div>
        </div>
    </div>
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
    <div class="container mt-5">
        <div class="row g-4 justify-content-center">
            @foreach ($reviews as $review)
            <div class="col-12 col-md-6 col-lg-4 d-flex justify-content-center" data-aos="fade-up"  data-aos-duration="1300">
                <div class="card border-0 card-review" style="width: 20rem;">
                    <div class="card-body d-flex flex-column align-items-center">
                        <h5 class="card-title fw-bold">
                            ⭐ {{ $review->rating }}/5
                        </h5>
                        <h6 class="card-subtitle text-muted mt-3">
                            Recensione di <strong>{{ $review->user->name }}</strong>
                        </h6>
                        <p class="small text-muted">
                            Servizio: <strong>{{ $review->service->name }}</strong>
                        </p>
                        <p class="card-text">
                            "{{ $review->comment }}"
                        </p>
                        <p class="card-text"><small class="text-muted">{{ $review->created_at->format('d/m/Y') }}</small>
                        </p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</x-layout>
