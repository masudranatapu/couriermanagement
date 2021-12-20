<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>@yield('title') - {{ config('app.name', 'Laravel') }}</title>
    
        <!-- for meta tag  -->
        @yield('meta')

        <!-- for header link -->
        @include('layouts.frontend.partial.head')

        <!-- for css input -->
        @stack('css')
    </head>
    <body>
        @include('layouts.frontend.partial.header')

        @yield('content')

        @include('layouts.frontend.partial.footer')
        <!-- for footer link -->
        @include('layouts.frontend.partial.foot')

        <!-- for css input -->
        @stack('css')
    </body>
</html>