<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>@yield('title') - {{ config('app.name', 'Laravel') }}</title>

        <!-- for header link -->
        @include('layouts.backend.partial.head')

        <!-- for css input -->
        @stack('css')
    </head>
    <body>
        
        @include('layouts.backend.partial.header')

        @yield('content')

        @include('layouts.backend.partial.footer')
        <!-- for footer link -->
        @include('layouts.backend.partial.foot')

        <!-- for css input -->
        @stack('css')
    </body>
</html>