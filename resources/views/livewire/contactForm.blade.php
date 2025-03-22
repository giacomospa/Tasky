<div>
    <div class="container mt-4">
        <div class="row">
            <div class="col 12 w-50 justify-content-center d-flex">
                @if ($success)
                <div class="alert alert-success">Messaggio inviato con successo!</div>
                @endif
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-md-4 col-lg-6 d-flex justify-content-center mt-4" data-aos="flip-up" data-aos-duration="1300">
                <form class="w-75" wire:submit.prevent="store">
                    @csrf
                    <div class="mb-3">
                        <label class="form-label">Username</label>
                        <input type="text" class="form-control" placeholder="Mario Rossi" wire:model="name">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Indirizzo email</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="your@best.mail" wire:model="email"> 
                    </div>
                    <div class="mb-3">
                        <div class="form-floating">
                            <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px" wire:model="info"></textarea>
                            <label for="floatingTextarea2">Comments</label>
                            <button type="submit" class="btn btn-outline-light mt-4">Invia</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
