<div>
    <button 
        wire:click="addToCart" 
        class="btn btn-primary {{ $added ? 'btn-success' : 'btn-primary' }}"
    >
        @if($added)
            <i class="fas fa-check"></i> Aggiunto al carrello
        @else
            <i class="fas fa-shopping-cart"></i> Aggiungi al carrello
        @endif
    </button>
    
    @if(session()->has('message'))
        <div class="alert alert-success mt-2">
            {{ session('message') }}
        </div>
    @endif
</div>
