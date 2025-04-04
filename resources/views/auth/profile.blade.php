<x-layout>
    @push('title')
    Dashboard
    @endpush
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 d-flex justify-content-center" data-aos="fade-left" data-aos-duration="1000">
                <h1>
                    Ciao <span class="title-custom3">{{Auth::user()->name}}</span>
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
    <div class="container-fluid mt-3" data-aos="fade-up" data-aos-duration="1300">
        <div class="row justify-content-center" >
            {{-- Card I miei servizi --}}
            <a class="text-reset text-decoration-none col-12 col-md-6 col-lg-4 d-flex justify-content-center" href="{{route('user.services')}}">
                <div class="card card-service card-service-profile position-relative" style="width: 20rem; height:22rem;">
                    <img src="{{('/media/wp-tasky.jpg') }}" class="card-img" alt="Immagine Servizio" style="height: 100%; object-fit: cover;" style="height: 200px; object-fit: cover;">
                    <div class="service-overlay">
                        <h3>Servizi</h3>
                    </div>
                </div>
            </a>
            {{-- Card Le mie recensioni --}}
            <a class="text-reset text-decoration-none col-12 col-md-6 col-lg-4 d-flex justify-content-center" href='{{route('user.reviews')}}'>
                <div class="card border-0 card-service card-service-profile position-relative" style="width: 20rem; height:22rem;">
                    <img src="{{('/media/recensione2.jpg') }}" class="card-img" alt="Immagine Servizio" style="height: 100%; object-fit: cover;" style="height: 200px; object-fit: cover;">
                    <div class="service-overlay">
                        <h3>Recensioni</h3>
                    </div>
                </div>
            </a>
        </div>
    </div>
    
</x-layout>
