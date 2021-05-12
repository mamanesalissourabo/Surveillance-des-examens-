<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Ma nouvelle page Laravel</title>

    </head>
    <body >
           <h1>Bonjour tout le monde </h1>
           <p>Nous sommes le {{date('d/m/y')}} a {{date('h:i A')}} au maroc</p>

           <footer>
               <p>&copy; Copyright 2020 &middot; <a href="#">a propos de nous</a>
               </p>
           </footer>
    </body>
</html>
