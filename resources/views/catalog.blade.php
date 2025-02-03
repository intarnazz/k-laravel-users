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
@component('layout.wrapper')
  @include('layout.header.main')
@endcomponent
@component('layout.main')
  @component('layout.wrapper')
    @include('sections.catalog')
    @include('sections.pagin')
  @endcomponent
@endcomponent
@component('layout.wrapper')
  @include('layout.footer.main')
@endcomponent
</body>
</html>
