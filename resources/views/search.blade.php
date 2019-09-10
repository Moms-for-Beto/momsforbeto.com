<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Look up congressional district and county</title>
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
  </head>
<body>
  <div class="w-full max-w-lg mx-auto mt-8">
    <h1 class="text-2xl font-bold mb-4">Address lookup</h1>

    @include('partials.form')

    @if (isset($results))
      @if (!$results)
        @component('components.alert')
          @slot('title')
            Boo! The address could not be found
          @endslot

          Please double check the address and perhaps add a zip code if it's missing.
        @endcomponent
      @else
        @include('partials.results', ['results' => $results])
      @endif
    @endif
  </div>
</body>
</html>
