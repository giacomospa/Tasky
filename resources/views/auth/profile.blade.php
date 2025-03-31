<x-layout>
    @push('title')
    Dashboard
    @endpush
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 d-flex justify-content-center" data-aos="fade-left" data-aos-duration="1000">
                <h1>
                    Ciao <span class="title-custom3">{{Auth::user()->name}} !</span>
                </h1>
            </div>
            <div class="col-12 d-flex justify-content-center " data-aos="fade-right" data-aos-duration="1000">
                <h4 class="lead fst-italic">
                    {{-- BENVENUTO/A a seconda del gender --}}
                    @if(Auth::user()->gender === "male")
                    Benvenuto
                    @elseif(Auth::user()->gender === "female")
                    Benvenuta 
                    @else
                    Benvenuto/a 
                    @endif
                    nella tua Dashboard
                </h4>
            </div>
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
    <div class="container mt-3">
        <div class="row g-4 justify-content-center">
            @foreach (Auth::user()->services as $service)
            <div class="col-12 col-md-6 col-lg-4 d-flex justify-content-center" data-aos="fade-up" data-aos-duration="1300">
                <div class="card border-0 card-service" style="width: 18rem;">
                    <img src="{{ $service->img ? Storage::url($service->img) : asset('images/service.jpg') }}" class="card-img-top" alt="Immagine Servizio" style="height: 200px; object-fit: cover;">
                    <div class="card-body">
                        <h5 class="card-title fw-bold">{{$service->name}}</h5>
                        <p class="card-text text-truncate">{{$service->description}}</p>
                        <a href="{{route("show.service",compact("service"))}}" class="btn btn-outline-light btn-sm">Scopri di più</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</x-layout>
