<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>{{ config('app.name', 'Laravel') }}</title>
      <!-- Fonts -->
      <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
      <!-- Styles -->
      <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    </head>
    <body class="start">
      <div class="start__box">
  	    <h1 class="start__box-headline">I'm a web application developer</h1>
        <p class="start__box-subheadline">Here you find work of my activity as a web developer</p>
        <div class="start__box-btn">
          <a href="/project" class="start__box-btn--transparent" title="Welcome to my portfolio">Have fun browsing</a>
        </div>
      </div>
    </body>
</html>
