<x-layout>
    <div class="container">
        <div class="row">
            <div class="col-12 d-flex justify-content-center ">
                <h1>Tutti i nostri Servizi</h1>
            </div>
        </div>
    </div>
    <div class="container mt-5">
        <div class="row g-4 justify-content-center">
            @foreach ($services as $service)
            <div class="col-12 col-md-6 col-lg-4 d-flex justify-content-center">
                <div class="card" style="width: 18rem;">
                    <img src="{{$service->img ? asset("storage/" . $service->img) :asset("images/service.jpg")}}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">{{$service->name}}</h5>
                        <p class="card-text text-truncate">{{$service->description}}</p>
                        <a href="#" class="btn btn-custom btn-sm">Scopri di più</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</x-layout>