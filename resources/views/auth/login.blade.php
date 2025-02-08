<x-layout>
    <div class="container">
        <div class="row">
            <div class="col-12 d-flex justify-content-center mt-5">
                <h1>Accedi al tuo Account Tasky</h1>
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
            <div class="col-12 col-md-4 col-lg-6 d-flex justify-content-center mt-5">
                <form class="w-75" method="POST" action="{{route("login")}}">
                    @csrf
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Indirizzo email</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="your@best.mail" name="email"> 
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Password</label>
                        <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Inserisci la tua password" name="password">
                    </div>
                    <button type="submit" class="btn btn-custom btn-sm">Accedi</button>
                </form>
            </div>
        </div>
    </div>
</x-layout>
