<x-layout>
    <div class="container">
        <div class="row">
            <div class="col-12 d-flex justify-content-center mt-5">
                <h1>Crea il tuo Account Tasky</h1>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-md-4 col-lg-6 d-flex justify-content-center mt-5">
                <form class="w-75">
                    <div class="mb-3">
                        <label class="form-label">Nome</label>
                        <input type="text" class="form-control" placeholder="Mario Rossi">
                      </div>
                    <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label">Indirizzo email</label>
                      <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="your@best.mail"> 
                    </div>
                    <div class="mb-3">
                      <label for="exampleInputPassword1" class="form-label">Password</label>
                      <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Crea la tua password">
                    </div>
                    <button type="submit" class="btn btn-custom btn-sm">Submit</button>
                  </form>
            </div>
        </div>
    </div>
</x-layout>