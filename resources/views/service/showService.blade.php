<x-layout>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 d-flex justify-content-center mt-5 ">
                <h1>Servizio di {{$service->name}}</h1>
            </div>
        </div>
    </div>
    <div class="container mt-5">
        <div class="row g-4 justify-content-center">
            <div class="col-12 col-md-6 col-lg-4 d-flex justify-content-center">
                <div class="card border-0" style="width: 18rem;">
                    <img src="{{ $service->img ? Storage::url($service->img) : asset('images/service.jpg') }}" class="card-img-top" alt="Immagine servizio">
                    <div class="card-body d-flex flex-column align-items-center">
                        <h5 class="card-title fw-bold text-center">{{$service->name}}</h5>
                        <p class="card-text text-center">{{$service->description}}</p>
                        <h6 class="card-title fw-semibold">€ {{$service->price}}</h6>
                        <h6 class="card-text fw-medium">Producer: {{$service->producer}}</h6>
                        <a href="#" class="btn btn-custom mt-4 btn-sm">Richiedi</a>
                        @if($service->user_id === Auth::user()->id)
                        <a href="{{route("edit.service",compact("service"))}}" class="btn btn-custom btn-sm">Modifica</a>
                        @endif
                        @if($service->user_id === Auth::user()->id)
                        <form action="{{route("delete.service",compact("service"))}}" method="POST">
                            @csrf
                            @method("DELETE")
                            <button type="submit" class="btn btn-custom btn-sm">Cancella</button>
                        </form>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-layout> 




