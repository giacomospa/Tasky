<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- Vite --}}
    @vite(['resources/css/app.css','resources/css/style.css', 'resources/js/app.js'])
    @livewireStyles
    {{-- CDN Google Fonts --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&family=Orbitron:wght@400..900&display=swap" rel="stylesheet">
    {{-- CDN Aos e Swiper --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css">
    {{-- Bootstrap Icons --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">
    <title>@stack("title")</title>
</head>
<body>
    {{-- SFONDO --}}
    <div class="bg-overlay">
        <img src="/media/tech11.jpg" alt="immagine di sfondo">
    </div>
    
    {{-- Navbar compon --}}
    <x-navbar/>
    
    {{$slot}}
    
    {{-- CDN Aos e Swiper --}}
    <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
    
    {{-- Inizializzazione di Aos --}}
    <script>
        AOS.init({
            once: true, 
            disable: 'mobile'
        });
    </script> 
    
    {{-- CDN JS --}}
    <script src="https://cdn.jsdelivr.net/npm/particles.js"></script>
    
    {{-- Inizializzazione Livewire --}}
    @livewireScripts
    
    {{-- Footer compon--}}
    <x-footer/>
</body>
</html>

