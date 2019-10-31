<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>{{ config('app.name', 'WikiPoli') }} - @yield('title')</title>

  <!-- Scripts -->
  {{--<script src="{{ asset('js/app.js') }}" defer></script>  --}}

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link href="https://fonts.googleapis.com/css?family=Lato&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="styles/index.css">
  <link rel="icon" type="img/png" href="images/favicon.png">
  <link rel="manifest" href="js/manifest.json" />
 <meta name="theme-color" content="#333" />

 <!-- Styles -->
 {{--  <link href="{{ asset('css/app.css') }}" rel="stylesheet">  --}}
 {{-- //inline styles --}}
    @yield('styles')

</head>
<body>
{{--  //top navigation bar  --}}
    @yield('header')

    {{--  //sidebar  --}}
    @auth
       @yield('sidebar')
    @endauth

    {{-- //the content --}}


    @yield('content')

    @yield('footer')


    {{--  //scripts  --}}
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>


    <script>
      if ('serviceWorker' in navigator) {
    window.addEventListener('load', () => {
      navigator.serviceWorker.register('../js/sw.js').then( () => {
        console.log('Service Worker Registered')
      })
    })
  }

    </script>

   {{--  // inline scrpt  --}}

   @yield('script')

    
  
  
  
</body>
</html>