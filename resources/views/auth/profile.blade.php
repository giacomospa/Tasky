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
    {{-- Card I miei servizi --}}
    <div class="container mt-3">
        <div class="row g-4 justify-content-evenly">
            <div class="col-12 col-md-6 col-lg-4 d-flex justify-content-center" data-aos="fade-up" data-aos-duration="1300">
                <a class="text-reset text-decoration-none" href="{{route('user.services')}}">
                    <div class="card border-0 card-service" style="width: 22rem;">
                        <img src="{{('https://picsum.photos/300/300') }}" class="card-img-top" alt="Immagine Servizio" style="height: 200px; object-fit: cover;">
                        <div class="card-body">
                            <h5 class="card-title fw-bold text-center">I miei Servizi</h5>
                        </div>
                    </div>
                </a>
            </div>
            {{-- Card Le mie recensioni --}}
            <div class="col-12 col-md-6 col-lg-4 d-flex justify-content-center" data-aos="fade-up" data-aos-duration="1300">
                <a class="text-reset text-decoration-none" href='{{route('user.reviews')}}'>
                    <div class="card border-0 card-service" style="width: 22rem;">
                        <img src="{{('https://picsum.photos/300/301') }}" class="card-img-top" alt="Immagine Servizio" style="height: 200px; object-fit: cover;">
                        <div class="card-body">
                            <h5 class="card-title fw-bold text-center">Le mie Recensioni</h5>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
    
</x-layout>
