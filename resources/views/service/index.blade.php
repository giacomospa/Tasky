<x-layout>
    @push('title')
    Esplora
    @endpush
    <div class="container">
        <div class="row">
            <div class="col-12 d-flex justify-content-center " data-aos="fade-right" data-aos-duration="1000">
                <h1>I nostri <span class="title-custom2">Servizi</span></h1>
            </div>
            <div class="col-12 d-flex justify-content-center " data-aos="fade-left" data-aos-duration="1000">
                <h4 class="lead fst-italic">Tutti ciò di cui hai bisogno</h4>
            </div>
        </div>
    </div>
    {{-- Messaggi di successo per servizio creato --}}
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
    {{-- <!-- ✅ Inseriamo il componente Livewire -->
    <div class="container mt-5">
        @livewire('service-filter')
    </div> --}}
    <div class="container mt-3">
        <div class="row g-4 justify-content-center">
            @foreach ($services as $service)
            <div class="col-12 col-md-6 col-lg-4 d-flex justify-content-center" data-aos="fade-up"
            data-aos-anchor-placement="center-bottom" data-aos-duration="1000">
            <div class="card border-0 card-service" style="width: 18rem;">
                <img src="{{ $service->img ? Storage::url($service->img) : asset('images/service.jpg') }}" class="card-img-top" alt="Immagine Servizio" style="height: 200px; object-fit: cover;">
                <div class="card-body">
                    <h5 class="card-title fw-bold">{{$service->name}}</h5>
                    <p class="card-text text-truncate">{{$service->description}}</p>
                    <a href="{{route("show.service",compact("service"))}}" class="btn btn-outline-light">Scopri di più</a>
                </div>
            </div>
        </div>
        @endforeach
        {{-- Paginator --}}
        <div class="d-flex justify-content-center mt-5 paginator">
            {{$services->links()}}
        </div>
    </div>
</div>
</x-layout>