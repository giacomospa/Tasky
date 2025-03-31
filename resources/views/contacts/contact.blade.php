<x-layout>
    @push('title')
        Contattaci
    @endpush
    <div class="container">
        <div class="row">
            <div class="row">
                <div class="col-12 d-flex justify-content-center text-center" data-aos="fade-right" data-aos-duration="1000">
                    <h1>Per maggiori <span class="title-custom2">informazioni</span></h1>
                </div>
                <div class="col-12 d-flex justify-content-center " data-aos="fade-left" data-aos-duration="1000">
                    <h4 class="lead fst-italic">Contattaci compilando il form</h4>
                </div>
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


