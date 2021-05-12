<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>la page about</title>

    </head>
    <body >
           <img src="images/premier.jpg" alt="image iso" width="300" heigth="200">
           <h1>Vous pouvez apprendre d'avantage sur les frameworks </h1>
           <p><a href="/">Revenir a la page d'accueil</a></p>

           <footer>
                @if(Route::is('about'))
               <p>&copy; Copyright 2020 &middot; <a href="/about-us">a propos de nous</a>
                @endif
               </p>
           </footer>
    </body>
</html>
