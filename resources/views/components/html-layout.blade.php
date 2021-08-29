<!DOCTYPE html>
<html lang="en" dir="ltr">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<title>{{$page_title ?? 'RicetteItaliane'}}</title>
		
		<!-- Custom CSS -->
		<link rel="stylesheet" href="{{asset('css/app.css')}}">
	</head>
	<body>

		<x-navbar/>

        {{$page_content ?? 'Errore: pagina non disponibile'}}

		<x-footer/>

		<script src="{{asset('js/app.js')}}"></script>
    </body>
</html>