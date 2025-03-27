<x-layout>
    @push('title')
    Registrati
    @endpush
    <div class="container">
        <div class="row">
            <div class="col-12 d-flex justify-content-center mt-2" data-aos="fade-left" data-aos-duration="1300">
                <h1>Crea il tuo Account</h1>
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
    <div class="container" data-aos="fade-right" data-aos-duration="1300">
        <div class="row justify-content-center">
            <div class="col d-flex justify-content-center mt-5">
                <div class="card card-auth shadow-lg border-0 rounded-4" style="width: 50%;">
                    <div class="card-body card-body-auth">
                        <form method="POST" action="{{route("register")}}">
                            @csrf
                            <div class="mb-3 w-75">
                                <label class="form-label">Username</label>
                                <input type="text" class="form-control" placeholder="Mario Rossi" name="name">
                            </div>
                            <div class="mb-3 w-75">
                                <label for="exampleInputEmail1" class="form-label">Indirizzo email</label>
                                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="your@best.mail" name="email"> 
                            </div>
                            <div class="mb-3">
                                <label class="form-label d-block">Sesso:</label>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="gender" id="male" value="male" required>
                                    <label class="form-check-label" for="male">Maschio</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="gender" id="female" value="female" required>
                                    <label class="form-check-label" for="female">Femmina</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="gender" id="female" value="female" required>
                                    <label class="form-check-label" for="female">Altro</label>
                                </div>
                            </div>
                            <div>
                                <div class="mb-3 w-75">
                                    <label for="exampleInputPassword1" class="form-label">Password</label>
                                    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Crea la tua password" name="password">
                                </div>
                                <div class="mb-3 w-75">
                                    <label for="exampleInputPassword1" class="form-label">Conferma Password</label>
                                    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Conferma la tua password" name="password_confirmation">
                                </div>
                                <button type="submit" class="btn btn-outline-light">Registrati</button>
                                <h5 class="lead fs-6 d-flex justify-content-end mt-2">Hai già un account? <a class="text-color text-decoration-none ms-1" href="{{route('login')}}">Accedi</a></h5>
                            </div>
                        </form>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-layout>

