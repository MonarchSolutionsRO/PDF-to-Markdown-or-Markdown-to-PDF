<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="h-full">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>PDF.MD - Free Markdown and PDF Converter</title>
    <meta name="description" content="Transform your Markdown documents into professionally formatted PDF with PDF.MD. Create beautiful documents with just a few clicks. Free, No Sign Up">
     

    
    <!-- SEO Tags -->
           <link rel="canonical" href="{{ url()->current() }}" />
        <meta name="robots" content="index, follow">
        
        <!-- Hreflang Tags - Add more languages as needed -->
        <link rel="alternate" hreflang="x-default" href="{{ config('app.url') }}" />
        <link rel="alternate" hreflang="en" href="{{ config('app.url') }}" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <script async src="https://www.googletagmanager.com/gtag/js?id=G-KMJ4PM10XQ"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());
    gtag('config', 'G-KMJ4PM10XQ'); // Replace with your GA4 measurement ID
  </script>

</head>
<body class="font-sans antialiased bg-gray-50 min-h-screen flex flex-col">
    <main class="flex-grow">
        {{ $slot }}
    </main>
    
    <x-footer />
</body>
</html>