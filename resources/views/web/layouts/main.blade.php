<!doctype html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name') }}</title>

        <link rel="stylesheet" href="/css/web.css"> 
        @stack('styles')

        <script>
            window.Laravel = <?php echo json_encode([
                'csrfToken' => csrf_token(),
            ]); ?>
        </script>
    </head>
    <body>
        @include('web.partials.navbar')

        <main class="vt-main">
            @yield('content')
        </main>

        @stack('body')
        <script src="/js/web.js"></script>
        @stack('scripts')

    </body>
</html>
