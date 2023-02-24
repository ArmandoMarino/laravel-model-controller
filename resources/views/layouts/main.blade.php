<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{env('APP_NAME')}} | @yield('title') </title>

    @yield('cdns')
    {{-- Rendering di app Vue --}}
    @vite('resources/js/app.js')
</head>
<body>
    @include('includes.header')
    @include('includes.jumbotron')


        <main class="my-4">
            @yield('content')
        </main>

    @include('includes.footer')

        
   
    
    @yield('scripts')

</body>
</html>