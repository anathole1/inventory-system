<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>IMS</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        {{-- <script src="https://cdn.tailwindcss.com"></script> --}}
        {{-- <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet"> --}}
        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
        <link rel="icon" href="">
        @yield('datatableCss')
    </head>
    <body class="bg-blue-100">        
        @yield('content')
    

        @yield('datatableJs')
    </body>
</html>
