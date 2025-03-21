<x-layout>
    @push('title')
        Newsletter
    @endpush
    <div class="container">
        <div class="row">
            <div class="col-12 d-flex justify-content-center mt-2" data-aos="flip-down" data-aos-duration="1300">
                <h1>Resta Aggiornato, iscriviti:</h1>
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
    <livewire:contactForm/>
</x-layout>


