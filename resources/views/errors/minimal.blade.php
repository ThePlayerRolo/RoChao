<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>ROCHAO - @yield('code') @yield('title')</title>
    <link href="{{ asset('css/Error/ErrorPage.css') }}" rel="stylesheet">     
    </head>
 <div class = "Container">
    <x-header></x-header>
    <div class = "Body">
        <div class = "ErrorMain">
            <h1>An Error Occurred! We're sorry. </h1>
            <img alt="ErrorImage" src="{{ asset('img/ErrorImage.png') }}"/>
            <h2>Error Details:
            @yield('code')
            @yield('message') </h2>            
        </div>
    </div> 
    <x-footer></x-footer>
</div>
    </body>
</html>
