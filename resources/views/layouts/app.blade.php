<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ $title }} | HotelPMS</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://rsms.me/inter/inter.css">

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body>
        <div class="h-screen flex">
            <!-- Off-canvas menu for mobile, show/hide based on off-canvas menu state. -->
            @include('layouts.off_canvas_menu_mobile')

            <!-- Static sidebar for desktop -->
            @include('layouts.sidebar_desktop')

            <div class="flex-1 min-w-0 flex flex-col overflow-hidden">
                <!-- Mobile top navigation -->
                @include('layouts.mobile_top_navigation')

                <main class="flex-1 flex overflow-hidden">
                    {{ $slot }}
                </main>
            </div>
        </div>
    </body>
</html>
