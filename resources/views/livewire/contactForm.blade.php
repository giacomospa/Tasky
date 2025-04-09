<div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-md-6 text-center">
                @if ($success)
                <div class="alert alert-success">Messaggio inviato con successo!</div>
                @endif
            </div>
        </div>
    </div>
    @if(!$success)
    <div class="container" data-aos="fade-up" data-aos-duration="1000">
        <div class="row justify-content-center">
            <div class="col-12 col-md-4 col-lg-6 d-flex justify-content-center mt-3">
                <div class="card card-auth shadow-lg border-0 rounded-4" style="width: 90%;">
                    <div class="card-body card-body-auth">
                        <form wire:submit.prevent="store">
                            @csrf
                            <div class="mb-3">
                                <label class="form-label">Username</label>
                                <input type="text" class="form-control" placeholder="Mario Rossi" wire:model="name">
                                @error('name')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Indirizzo email</label>
                                <input type="email" class="form-control" id="exampleInputEmail1" 
                                aria-describedby="emailHelp" placeholder="your@best.mail" wire:model="email">
                                @error('email')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <div class="form-floating">
                                    <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px" wire:model="info"></textarea>
                                    @error('info')
                                    <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                    <label for="floatingTextarea2">Descrizione</label>
                                    <button type="submit" class="btn btn-outline-light mt-4">Invia</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endif
</div>
