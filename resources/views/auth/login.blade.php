<x-layout>
    @push('title')
    Accedi
    @endpush
    <div class="container">
        <div class="row">
            <div class="col-12 d-flex justify-content-center text-center" data-aos="fade-right" data-aos-duration="1000">
                <h1>Accedi al tuo Account</h1>
            </div>
            <div class="col-12 d-flex justify-content-center">
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
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-md-6 d-flex justify-content-center mt-3" data-aos="fade-left" data-aos-duration="1000">
                <div class="card card-auth shadow-lg border-0 rounded-4" style="width: 90%;">
                    <div class="card-body card-body-auth">
                        <form  method="POST" action="{{route("login")}}">
                            @csrf
                            <div class="mb-3 w-75">
                                <label for="exampleInputEmail1" class="form-label">Indirizzo email</label>
                                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="your@best.mail" name="email"> 
                            </div>
                            <div class="mb-3 w-75">
                                <label for="exampleInputPassword1" class="form-label">Password</label>
                                <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Inserisci la tua password" name="password">
                            </div>
                            <button type="submit" class="btn btn-outline-light">Accedi</button>
                            <h5 class="lead fs-6 d-flex justify-content-end mt-4">Non hai ancora un account? <a class="text-color text-decoration-none ms-1" href="{{route('register')}}">Registrati</a></h5>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-layout>
