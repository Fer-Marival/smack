<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Smack</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <link rel="stylesheet" href="{{ asset('css/style.css') }}">
        <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
        
    </head>
    <body>
    		@include('components.header')
    	  	@yield('content')
    	  	@include('components.footer')
			
			{{-- 
				Servicio de traslado  -aeropuerto-casas/casas-aeropuerto 
				Snorkels- encluyendo tours yo llevándolos/recorriéndolos y acompañándolos
				Caminatas, colomitos, las animas, palo maria, cerro del mono y cascadas de Mismaloya 
				Tours bicicletas - centro, los muertos 
				Shuttles a donde quieran ir ya sea playas como, corrales, careyes,perula, Mayto, Sayulita, etc.
				Servicio de host- anfitrión 
				Kayaks 
				Paddles
				Cámaras
				--}}

        <script src="{{ asset('js/script.js') }}" type="text/javascript"></script>
        <script src="{{ asset('js/app.js') }}" type="text/javascript"></script>
    </body>
</html>
