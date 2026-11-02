<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>{{ $title ?? 'Idea' }}</title>
        <script>
            if (document.cookie.split('; ').includes('theme=light')) {
                document.documentElement.classList.add('light');
            }
        </script>
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>

    <body class="min-h-screen bg-background text-foreground">
        <x-layout.nav/>

        <main class="max-w-7xl mx-auto px-6 pb-10 py-10">
        {{ $slot }}
        </main>

        @session('success')
            <div
            x-data="{ show: true }"
            x-init="setTimeout(() => show = false, 3000)"
            x-show="show"
            x-transition.opacity.duration.500ms
            class="bg-primary px-4 py-3 fixed bottom-4 right-4 rounded-lg">
                {{ session('success') }}
            </div>
        @endsession
    </body>

</html>
