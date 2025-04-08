<div>
    @push('title')
    Il mio Carrello
    @endpush
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 d-flex justify-content-center" data-aos="fade-left" data-aos-duration="1000">
                <h1>
                    Il mio Carrello</span>
                </h1>
            </div>
            <div class="col-12 d-flex justify-content-center mt-3">
                @if (session('message'))
                <div class="alert alert-success">
                    {{ session('message') }}
                </div>
                @endif
                
                @if ($errors->any())
                <div class="alert alert-danger ms-2">
                    <ul class="mb-0">
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif
            </div>
        </div>
        
        <div class="row justify-content-center mt-4">
            <div class="col-12 col-md-6">
                @if(count($cartItems) > 0)
                <div class="table-responsive">
                    <table class="card-body">
                        <thead>
                            <tr>
                                <th>Servizio</th>
                                <th>Descrizione</th>
                                <th>Prezzo</th>
                                <th>Azioni</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($cartItems as $item)
                            <tr>
                                <td>
                                    <a class="text-reset" href="{{ route('show.service', $item->service->id) }}">
                                        {{ $item->service->name }}
                                    </a>
                                </td>
                                <td>{{ Str::limit($item->service->description, 50) }}</td>
                                <td>€{{ number_format($item->service->price, 2) }}</td>
                                <td>
                                    <button wire:click="removeFromCart({{ $item->id }})" class="btn btn-sm btn-danger m-3">
                                        <i class="bi bi-trash"></i>
                                    </button>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <div class="justify-content-lg-between d-flex mt-4">
                        <a href="{{route('index')}}" class="btn btn-outline-light btn-sm">Continua lo shopping<a>
                        <a href="#" class="btn btn-outline-success btn-sm">Procedi all'acquisto</a>
                    </div>
                </div>
            </div>
        </div>
        @else
        <div class="row justify-content-center">
            <div class="col-10 col-md-8 card alert d-flex justify-content-center text-center">
                <p class="text-center fs-5">Il tuo carrello è vuoto.</p>
                <a href="{{route('index')}}" class="btn btn-outline-light mt-2 ">Inizia a fare acquisti</a>
            </div>
            @endif
        </div>
    </div>
</div>
