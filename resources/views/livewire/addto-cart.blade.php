<div>
    <button wire:click="addtoCart" class="btn btn-outline-primary btn-sm mt-2 {{ $added ? 'btn btn-outline-success btn-sm' : 'btn btn-outline-primary btn-sm' }}">
        @if($added)
        <i class="bi bi-cart-check-fill"> Aggiunto al carrello</i>
        @else
        <i class="bi bi-cart-plus-fill"> Aggiungi al carrello</i>
        @endif
    </button>
    
    @if(session()->has('message'))
    <div class="text-success fw-semibold mt-2">
        {{ session('message') }}
    </div>
    @endif  
</div>
