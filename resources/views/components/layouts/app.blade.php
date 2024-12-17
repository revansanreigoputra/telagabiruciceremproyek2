<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>{{ $title ?? 'telagabirucicerem' }}</title>
        <script src="https://kit.fontawesome.com/3b1476001d.js" crossorigin="anonymous">
        </script>
        
        
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        @livewireStyles
    </head>

    <body class=" dark:bg-slate-700">
        @livewire('partials.navbar')
        <main>
            <div class="mx-auto max-w-7xl px-6 py-3 sm:px-6 lg:px-8">
                {{ $slot }}
            </div>
        </main>
        @livewireScripts
        @livewire('partials.footer')
    </body>
</html>
