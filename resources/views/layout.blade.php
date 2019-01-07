<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Smack</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css">
        <link rel="stylesheet" href="{!!asset('css/app.css')!!}">
    </head>
    <body>
    		@extends('components.header')
    	  	@yield('content')
    	  	@extends('components.footer')
			
			{{-- 

				Dare servicio de traslado -aeropuerto-casas/casas-aeropuerto 
				Snorkels- encluyendo tours yo llevándolos/recorriéndolos y 				acompañándolos
				Caminatas, colomitos, las animas, palo maria, cerro del mono y 				cascadas de Mismaloya 
				Tours bicicletas - centro, los muertos 
				Shuttles a donde quieran ir ya sea playas como, corrales, caryes, 				perula, Mayto, Sayulita, etc.
				Servicio de host- anfitrión 
				Kayaks 
				Paddles
				Cámaras
				--}}
    </body>
</html>
