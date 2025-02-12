<x-layout>
    <div class="container">
        <div class="row">
            <div class="col-12 d-flex justify-content-center mt-5" data-aos="fade-right" data-aos-duration="1800">
                <h1>
                    @if(Auth::user()->gender === "male")
                    Benvenuto {{Auth::user()->name}}
                    @elseif(Auth::user()->gender === "female")
                    Benvenuta {{Auth::user()->name}}
                    @else
                    Benvenuto/a {{Auth::user()->name}}
                    @endif
                </h1>
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
    <div class="container mt-5">
        <div class="row g-4 justify-content-center" data-aos="fade-left" data-aos-duration="1800">
            @foreach (Auth::user()->services as $service)
            <div class="col-12 col-md-6 col-lg-4 d-flex justify-content-center">
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
        </div>
    </div>
</x-layout>
