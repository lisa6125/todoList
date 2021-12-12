<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>首頁</title>

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">

  <!-- Styles -->
  <style>
  /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */
  body,
  html {
    padding: 0;
    margin: 0;
    font-family: 'Nunito', sans-serif;
  }
  </style>
</head>

<body>
  <div id="app">
    <app></app>
  </div>
</body>
<script src="{{mix('js/app.js')}}">
</script>

</html>