<x-layout>
    <div class="container">
        <div class="row">
            <div class="col-12 d-flex justify-content-center mt-5">
                <h1>
                    @if(Auth::user()->gender === "male")
                    Benvenuto {{Auth::user()->name}}
                    @elseif(Auth::user()->gender === "female")
                    Benvenuta {{Auth::user()->name}}
                    @else
                    Benvenuto/a {{Auth::user()->name}}
                    @endif
                </h1>
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
                
            </div>
        </div>
    </div>
</x-layout>
