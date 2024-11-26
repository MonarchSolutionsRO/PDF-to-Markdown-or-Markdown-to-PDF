<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="h-full">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>PDF.MD - Free Markdown and PDF Converter</title>
    <meta name="description" content="Transform your Markdown documents into professionally formatted PDFs with PDF.MD. Create beautiful, consistent documents with just a few clicks. Free, No Sign Up">
    
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="font-sans antialiased bg-gray-50 min-h-screen flex flex-col">
    <main class="flex-grow">
        {{ $slot }}
    </main>
    
    <x-footer />
</body>
</html>