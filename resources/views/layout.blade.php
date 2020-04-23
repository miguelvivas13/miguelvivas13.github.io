

<!DOCTYPE html>
<html>
<head>
	<title>
	@yield('title')</title>


	 <meta name="viewport" content="width=device-width, initial-scale=1">

	 <meta name="csrf-token" content="{{ csrf_token() }}">
	
   	<link rel="stylesheet"  href="/css/app.css">




</head>
<body>
	
	<div id="app" class="d-flex flex-column h-screen justify-content-between ">

	<header>
	@include('partials/navbar')

	@include('partials.session-status')

	</header>

	<main class="py-4" >
	
	@yield('content')

	</main>


	<footer class="bg-white text-center text-black-50 py-3 shadow" >
		
   {{config('app.name') }}| Mujer Estrategica |Copyright @ {{ date('Y')}}

	</footer>

	
	</div>
   <script type="/js/app.js" > </script>
   <link href="{{ asset('css/blog.css') }}" rel="stylesheet">
 @yield('scr')

</body>
</html>