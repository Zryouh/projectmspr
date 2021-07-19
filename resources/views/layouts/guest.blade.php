<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">

    <!-- Scripts -->
    <script src="{{ mix('js/app.js') }}" defer></script>
</head>

<body>
    <div class="font-sans text-gray-900 antialiased">
        @if (session()->has('success'))
            <div class="flex items-center bg-green-500 text-white text-sm font-bold px-4 py-3">
                {{ session('success') }}
            </div>
        @endif
        @if (session()->has('status'))
            <div class="flex items-center bg-green-500 text-white text-sm font-bold px-4 py-3">
                {{ session('status') }}
            </div>
        @endif
        @if (session()->has('error'))
            <div class="flex items-center bg-red-500 text-white text-sm font-bold px-4 py-3">
                {{ session('error') }}
            </div>
        @endif
        {{ $slot }}
    </div>
</body>

</html>
