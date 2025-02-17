<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Laravel</title>
  <link rel="stylesheet" href="{{ asset('assets/css/reset.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/css/normalise.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
  <link rel="preconnect" href="https://fonts.bunny.net">
  <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet"/>
</head>
<body id="app">
{{ $slot }}
</body>
</html>

<script type="module">
  import {page} from '{{ asset('assets/js/api/api.js') }}'

  function init() {
    if (window.location.pathname === "/profile") {
      page("profile")
    }
  }

  // window.onpopstate = function (event) {
  //   init()
  // };
  init()
</script>
