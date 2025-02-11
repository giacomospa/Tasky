<x-layout>
    <div class="container d-flex justify-content-center align-items-center vh-100">
        <div class="col mx-auto justify-content-center d-flex"> 
            <div class="card shadow-lg border-0 rounded-4" style="max-width: 500px;">
                <div class="card-body p-4">
                    <h2 class="text-center mb-4">Aggiungi una Recensione</h2>
                    <form method="POST" action="{{ route('store.review') }}">
                        @csrf
                        <input type="hidden" name="service_id" value="{{$service->id}}">
                        {{-- Sezione Valutazione --}}
                        <div class="mb-3 text-center">
                            <label class="form-label fw-bold">Valutazione:</label>
                            <div class="d-flex justify-content-center gap-3 flex-wrap">
                                @for ($i = 1; $i <= 5; $i++)
                                <input type="radio" name="rating" id="star{{ $i }}" value="{{ $i }}" class="btn-check" required>
                                <label for="star{{ $i }}" class="btn btn-outline-warning fs-5 px-2">{{ str_repeat('⭐', $i) }}</label>
                                @endfor
                            </div>
                        </div>
                        {{-- Sezione Commento --}}
                        <div class="mb-3">
                            <label for="comment" class="form-label fw-bold">Commento:</label>
                            <textarea name="comment" id="comment" class="form-control rounded-3 shadow-sm" rows="4" placeholder="Scrivi la tua recensione..." required></textarea>
                        </div>
                        {{-- Messaggi di errore --}}
                        @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul class="mb-0">
                                @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                        @endif
                        <div class="d-grid mt-4">
                            <button type="submit" class="btn btn-custom w-50 fw-bold rounded-pill mx-auto">Invia Recensione</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-layout>
