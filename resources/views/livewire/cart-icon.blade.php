<div>
    <a href="{{ route('cart.index') }}">
        @if($hasItems)
        <i class="bi bi-cart-check-fill text-color2" style="font-size: 1.5rem;"></i>
        @else
        <i class="bi bi-cart text-color2" style="font-size: 1.5rem;"></i>
        @endif
    </a>
</div>
