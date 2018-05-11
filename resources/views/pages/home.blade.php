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
  	    <h1 class="start__box-headline">Ich bin Web Entwickler</h1>
        <p class="start__box-subheadline">Hier findest du Arbeiten meiner Tätigkeit als Web Entwickeler, sowie meine persönlichen Arbeiten.</p>
        <div class="start__box-btn">
          <a href="/project" class="start__box-btn--transparent" title="Willkommen in meinem Portfolio">Viel Spass beim durchstöbern</a>
        </div>
      </div>
    </body>
</html>
