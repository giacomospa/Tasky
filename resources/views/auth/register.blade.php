<x-layout>
    @push('title')
    Registrati
    @endpush
    <div class="container">
        <div class="row">
            <div class="col-12 d-flex justify-content-center" data-aos="fade-right" data-aos-duration="1000">
                <h1>Crea il tuo Account</h1>
            </div>
        </div>
    </div>
    <div class="container" data-aos="fade-left" data-aos-duration="1000">
        <div class="row justify-content-center">
            <div class="col-12 col-md-6 d-flex justify-content-center mt-3">
                <div class="card card-auth shadow-lg border-0 rounded-4" style="width: 90%;">
                    <div class="card-body card-body-auth">
                        <form method="POST" action="{{route("register")}}">
                            @csrf
                            <div class="mb-3 w-75">
                                <label class="form-label">Nome e Cognome</label>
                                <input type="text" class="form-control" placeholder="Mario Rossi" name="name">
                                @error('name')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="mb-3 w-75">
                                <label for="exampleInputEmail1" class="form-label">Indirizzo email</label>
                                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="your@best.mail" name="email"> 
                                @error('email')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label class="form-label d-block">Sesso:</label>
                                <div class="form-check form-check-inline">
                                    <label class="form-check-label" for="male">Maschio</label>
                                    <input class="form-check-input" type="radio" name="gender" id="male" value="male" required>
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
                                    @error('password')
                                    <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="mb-3 w-75">
                                    <label for="exampleInputPassword1" class="form-label">Conferma Password</label>
                                    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Conferma la tua password" name="password_confirmation">
                                    @error('password_confirmation')
                                    <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <button type="submit" class="btn btn-outline-light">Registrati</button>
                                <h5 class="lead fs-6 d-flex justify-content-end mt-4">Hai già un account? <a class="text-color text-decoration-none ms-1" href="{{route('login')}}">Accedi</a></h5>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-layout>

